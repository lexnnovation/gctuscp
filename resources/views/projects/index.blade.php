<x-app-layout>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <x-app.navbar />
        <div class="container-fluid py-4 px-5">
            <div class="row">
                <div class="col-12">
                    <div class="card shadow-xs border">
                        <div class="card-header border-bottom pb-0">
                            <div class="d-sm-flex align-items-center mb-3">
                                <div>
                                    <h6 class="font-weight-semibold text-lg mb-0">All Projects</h6>
                                    <p class="text-sm mb-sm-0 mb-2">These are all the projects in the database</p>
                                </div>
                            </div>
                            <div class="pb-3 d-sm-flex align-items-center">
                                <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                    <a href="{{ route('projects.index') }}" class="btn btn-white px-3 mb-0">All</a>
                                    @foreach ($categories as $category)
                                        <a href="{{ route('projects.index', ['category_id' => base64_encode($category->id)]) }}"
                                            class="btn btn-white px-3 mb-0">{{ $category->name }}</a>
                                    @endforeach
                                </div>
                                <form action="{{ route('projects.index') }}" method="GET"
                                    class="input-group w-sm-25 ms-auto">
                                    <span class="input-group-text text-body">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z">
                                            </path>
                                        </svg>
                                    </span>
                                    <input type="text" class="form-control" name="search" placeholder="Search"
                                        value="{{ request('search') }}">
                                </form>
                            </div>
                        </div>
                        <div class="card-body px-0 py-0">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center justify-content-center mb-0">
                                    <thead class="bg-gray-100">
                                        <tr>
                                            <th class="text-secondary text-xs font-weight-semibold opacity-7">Project
                                                Name</th>
                                            <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">
                                                Description</th>
                                            <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">
                                                Created date</th>
                                            <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">
                                                Upload by</th>
                                            <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">
                                                Category</th>
                                            <th
                                                class="text-center text-secondary text-xs font-weight-semibold opacity-7">
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($projects as $project)
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2">
                                                        <div
                                                            class="avatar avatar-sm rounded-circle bg-gray-100 me-2 my-2">
                                                            <img src="../assets/img/small-logos/logo-spotify.svg"
                                                                class="w-80" alt="spotify">
                                                        </div>
                                                        <div class="my-auto">
                                                            <a href="{{ route('projects.show', ['id' => $project->id]) }}"
                                                                class="mb-0 text-sm">{{ $project->name }}</a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-sm font-weight-normal mb-0 text-truncate"
                                                        style="max-width: 250px;">{{ $project->description }}</p>
                                                </td>
                                                <td>
                                                    <span
                                                        class="text-sm font-weight-normal">{{ $project->created_at->format('M d, Y') }}</span>
                                                </td>
                                                <td class="align-middle">
                                                    <span
                                                        class="text-sm font-weight-normal">{{ $project->student->name ?? '' }}</span>
                                                </td>
                                                <td class="align-middle">
                                                    {{ $project->category->name }}
                                                </td>
                                                <td class="align-middle">
                                                    <!-- Add any action buttons here if needed -->
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        {{ $projects->links() }}
                    </div>
                </div>
            </div>
            <x-app.footer />
        </div>
    </main>
</x-app-layout>
