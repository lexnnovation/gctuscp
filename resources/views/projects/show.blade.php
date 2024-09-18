<x-app-layout>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
        <x-app.navbar />
        <div class="container-fluid py-4 px-5">
            <div class="row">
                <div class="col-12 col-xl-8 mb-4">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h3 class="font-weight-bolder mb-0">{{ $project->name }}</h3>
                            <p class="text-sm mb-0">Category: {{ $project->category->name }}</p>
                        </div>
                        <div class="card-body">
                            <p>{{ $project->description }}</p>
                            <div class="d-flex align-items-center mt-4">
                                <button class="btn btn-primary btn-sm me-3 like-button"
                                    data-project-id="{{ $project->id }}">
                                    <i class="fas fa-thumbs-up me-1"></i> Like
                                </button>
                                <span class="text-sm font-weight-bold likes-count" id="likes-count-{{ $project->id }}">
                                    {{ $project->likes_count ?? 0 }} Likes
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-4 mb-4">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h5 class="font-weight-bolder mb-0">Project Details</h5>
                        </div>
                        <div class="card-body">
                            <p><strong>Created by:</strong> {{ $project->student->name }}</p>
                            <p><strong>Created on:</strong> {{ $project->created_at->format('M d, Y') }}</p>
                            <p><strong>Total Views:</strong> {{ $project->total_views }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Comments Section -->
            <div class="row mt-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h5 class="font-weight-bolder mb-0">Comments</h5>
                        </div>
                        <div class="card-body">
                            @foreach ($comments as $comment)
                                <div class="d-flex mb-3">
                                    <div class="flex-shrink-0">
                                        <img src="{{ asset('assets/img/team-2.jpg') }}"
                                            class="avatar avatar-sm rounded-circle me-2" alt="user image">
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h6 class="mb-0">{{ $comment->user->name }}</h6>
                                        <p class="text-sm text-muted mb-1">
                                            {{ $comment->created_at->format('M d, Y H:i') }}</p>
                                        <p class="mb-0">{{ $comment->comment }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <!-- Comment Form -->
            <div class="row mt-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h5 class="font-weight-bolder mb-0">Leave a Comment</h5>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('comments.store') }}" method="POST">
                                @csrf
                                <input type="hidden" name="project_id" value="{{ $project->id }}">
                                <div class="form-group">
                                    <textarea name="comment" rows="4" class="form-control" placeholder="Write your comment here..." required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary mt-3">Submit Comment</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const likeButtons = document.querySelectorAll('.like-button');
        likeButtons.forEach(button => {
            button.addEventListener('click', function() {
                const projectId = this.getAttribute('data-project-id');
                fetch(`/api/project/like`, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({
                            project_id: projectId
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        const likesCountElement = document.getElementById(
                            `likes-count-${projectId}`);
                        likesCountElement.textContent = `${data.total_likes} Likes`;
                    })
                    .catch(error => console.error('Error:', error));
            });
        });
    });
</script>
