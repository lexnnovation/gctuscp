<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id()->startingValue(1000);
            $table->integer('student_id');
            $table->string('name');
            $table->text('description');
            $table->string('thumbnail')->nullable();
            $table->integer('total_views')->default(0);
            $table->integer('category_id');
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_trending')->default(false);
            $table->integer('likes')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('likes', function (Blueprint $table) {
            $table->id();
            $table->integer('project_id');
            $table->integer('student_id');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->integer('project_id');
            $table->integer('student_id');
            $table->text('comment');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('attachments', function (Blueprint $table) {
            $table->id();
            $table->integer('project_id');
            $table->integer('student_id');
            $table->text('url');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('projects');
        Schema::drop('likes');
        Schema::drop('comments');
        Schema::drop('attachments');
        Schema::drop('categories');
    }
};
