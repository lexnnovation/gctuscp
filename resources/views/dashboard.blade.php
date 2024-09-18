<x-app-layout>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <x-app.navbar />
        <div class="container-fluid py-4 px-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="d-md-flex align-items-center mb-3 mx-2">
                        <div class="mb-md-0 mb-3">
                            <h3 class="font-weight-bold mb-0">Hello, {{ Auth::user()->name }}</h3>
                            <p class="mb-0">FEATURED PROJECTS!</p>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-0">
            <div class="row">
                <div class="position-relative overflow-hidden">
                    <div class="swiper mySwiper mt-4 mb-2">
                        <div class="swiper-wrapper">
                            @forelse ($trending_projects as $item)
                                <div class="swiper-slide">
                                    <div
                                        class="card card-background shadow-none border-radius-xl card-background-after-none align-items-start mb-0">
                                        <div class="full-background bg-cover"
                                            style="background-image: url('{{ asset('assets/img/img-' . ($loop->index + 1) . '.jpg') }}')">
                                        </div>
                                        <div class="card-body text-start px-3 py-0 w-100">
                                            <div class="row mt-12">
                                                <div class="col-sm-3 mt-auto">
                                                    <h4 class="text-dark font-weight-bolder">#{{ $loop->index + 1 }}
                                                    </h4>
                                                    <p class="text-dark opacity-6 text-xs font-weight-bolder mb-0">
                                                        Project Name</p>
                                                    <h5 class="text-dark font-weight-bolder">{{ $item->name }}</h5>
                                                </div>
                                                <div class="col-sm-3 ms-auto mt-auto">
                                                    <p class="text-dark opacity-6 text-xs font-weight-bolder mb-0">
                                                        Category</p>
                                                    <h5 class="text-dark font-weight-bolder">
                                                        {{ $item->category->name ?? 'N/A' }}</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="swiper-slide">No trending projects found.</div>
                            @endforelse
                        </div>
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
            <div class="row my-4">
                <div class="col-lg-12 col-md-12">
                    <div class="card shadow-xs border">
                        <div class="card-header border-bottom pb-0">
                            <div class="d-sm-flex align-items-center mb-3">
                                <div>
                                    <h6 class="font-weight-semibold text-lg mb-0">Recent projects</h6>
                                    <p class="text-sm mb-sm-0 mb-2">These are details about the last projects</p>
                                </div>
                            </div>
                            <div class="pb-3 d-sm-flex align-items-center">
                                <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                    <input type="radio" class="btn-check" name="btnradiotable" id="btnradiotable1"
                                        autocomplete="off" {{ !request()->has('category_id') ? 'checked' : '' }}>
                                    <a href="{{ route('dashboard') }}" class="btn btn-white px-3 mb-0">All</a>
                                    @foreach ($categories as $category)
                                        <input type="radio" class="btn-check" name="btnradiotable"
                                            id="btnradiotable{{ $category->id }}" autocomplete="off"
                                            {{ request('category_id') == base64_encode($category->id) ? 'checked' : '' }}>
                                        <a href="{{ route('dashboard', ['category_id' => base64_encode($category->id)]) }}"
                                            class="btn btn-white px-3 mb-0">{{ $category->name }}</a>
                                    @endforeach
                                </div>
                                <div class="input-group w-sm-25 ms-auto">
                                    <span class="input-group-text text-body">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z">
                                            </path>
                                        </svg>
                                    </span>
                                    <input type="text" class="form-control" placeholder="Search">
                                </div>
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
                                        @forelse ($recent_projects as $item)
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2">
                                                        <div
                                                            class="avatar avatar-sm rounded-circle bg-gray-100 me-2 my-2">
                                                            <img src="{{ asset('assets/img/small-logos/logo-spotify.svg') }}"
                                                                class="w-80" alt="spotify">
                                                        </div>
                                                        <div class="my-auto">
                                                            <a href="{{ route('projects.show', ['id' => $item->id]) }}"
                                                                class="mb-0 text-sm">{{ $item->name }}</a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-sm font-weight-normal mb-0 text-truncate"
                                                        style="max-width: 250px;">{{ $item->description }}</p>
                                                </td>
                                                <td>
                                                    <span
                                                        class="text-sm font-weight-normal">{{ $item->created_at->format('Y-m-d H:i:s') }}</span>
                                                </td>
                                                <td class="align-middle">
                                                    <span
                                                        class="text-sm font-weight-normal">{{ $item->student->name ?? 'N/A' }}</span>
                                                </td>
                                                <td class="align-middle">
                                                    {{ $item->category->name ?? 'N/A' }}
                                                </td>
                                                <td class="align-middle">
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="6" class="text-center">No recent projects found.</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <x-app.footer />
        </div>
    </main>
</x-app-layout>
