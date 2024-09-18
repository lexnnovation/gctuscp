<x-app-layout>

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <x-app.navbar />

        <div class="pt-5 pb-6 bg-cover" style="background-image: url('../assets/img/header-blue-purple.jpg')"></div>
        <div class="container my-3 py-3">
            <div class="row mt-n6 mb-6">
                <div class="col-lg-3 col-sm-6">
                    <div class="card blur border border-white mb-4 shadow-xs">
                        <div class="card-body p-4">
                            <div
                                class="icon icon-shape bg-white shadow shadow-xs text-center border-radius-md d-flex align-items-center justify-content-center mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" height="19" width="19" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <path
                                        d="M11.584 2.376a.75.75 0 01.832 0l9 6a.75.75 0 11-.832 1.248L12 3.901 3.416 9.624a.75.75 0 01-.832-1.248l9-6z" />
                                    <path fill-rule="evenodd"
                                        d="M20.25 10.332v9.918H21a.75.75 0 010 1.5H3a.75.75 0 010-1.5h.75v-9.918a.75.75 0 01.634-.74A49.109 49.109 0 0112 9c2.59 0 5.134.202 7.616.592a.75.75 0 01.634.74zm-7.5 2.418a.75.75 0 00-1.5 0v6.75a.75.75 0 001.5 0v-6.75zm3-.75a.75.75 0 01.75.75v6.75a.75.75 0 01-1.5 0v-6.75a.75.75 0 01.75-.75zM9 12.75a.75.75 0 00-1.5 0v6.75a.75.75 0 001.5 0v-6.75z"
                                        clip-rule="evenodd" />
                                    <path d="M12 7.875a1.125 1.125 0 100-2.25 1.125 1.125 0 000 2.25z" />
                                </svg>
                            </div>
                            <p class="text-sm mb-1">Project Name</p>
                            <h3 class="mb-0 font-weight-bold">{{ $project->name }}</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card blur border border-white mb-4 shadow-xs">
                        <div class="card-body p-4">
                            <div
                                class="icon icon-shape bg-white shadow shadow-xs text-center border-radius-md d-flex align-items-center justify-content-center mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" height="19" width="19"
                                    viewBox="0 0 24 24" fill="currentColor"">
                                    <path
                                        d=" M19.5 22.5a3 3 0 003-3v-8.174l-6.879 4.022 3.485 1.876a.75.75 0 01-.712 1.321l-5.683-3.06a1.5 1.5 0 00-1.422 0l-5.683 3.06a.75.75 0 01-.712-1.32l3.485-1.877L1.5 11.326V19.5a3 3 0 003 3h15z" />
                                    <path
                                        d="M1.5 9.589v-.745a3 3 0 011.578-2.641l7.5-4.039a3 3 0 012.844 0l7.5 4.039A3 3 0 0122.5 8.844v.745l-8.426 4.926-.652-.35a3 3 0 00-2.844 0l-.652.35L1.5 9.59z" />
                                </svg>
                            </div>
                            <p class="text-sm mb-1">Category</p>
                            <h3 class="mb-0 font-weight-bold">{{ $project->category->name }}</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card blur border border-white mb-4 shadow-xs">
                        <div class="card-body p-4">
                            <div
                                class="icon icon-shape bg-white shadow shadow-xs text-center border-radius-md d-flex align-items-center justify-content-center mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" height="19" width="19"
                                    viewBox="0 0 24 24" fill="currentColor">
                                    <path
                                        d="M4.5 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM14.25 8.625a3.375 3.375 0 116.75 0 3.375 3.375 0 01-6.75 0zM1.5 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM17.25 19.128l-.001.144a2.25 2.25 0 01-.233.96 10.088 10.088 0 005.06-1.01.75.75 0 00.42-.643 4.875 4.875 0 00-6.957-4.611 8.586 8.586 0 011.71 5.157v.003z" />
                                </svg>
                            </div>
                            <p class="text-sm mb-1">Project Lead</p>
                            <h3 class="mb-0 font-weight-bold">{{ $project->student->name }}</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card blur border border-white mb-4 shadow-xs">
                        <div class="card-body p-4">
                            <div
                                class="icon icon-shape bg-white shadow shadow-xs text-center border-radius-md d-flex align-items-center justify-content-center mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" height="19" width="19"
                                    viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M4.5 3.75a3 3 0 00-3 3v.75h21v-.75a3 3 0 00-3-3h-15z" />
                                    <path fill-rule="evenodd"
                                        d="M22.5 9.75h-21v7.5a3 3 0 003 3h15a3 3 0 003-3v-7.5zm-18 3.75a.75.75 0 01.75-.75h6a.75.75 0 010 1.5h-6a.75.75 0 01-.75-.75zm.75 2.25a.75.75 0 000 1.5h3a.75.75 0 000-1.5h-3z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <p class="text-sm mb-1">Likes</p>
                            <h3 class="mb-0 font-weight-bold">{{ $project->like_count ?? 0 }}</h3>
                            <button id="likeBtn" class="btn {{ $user_liked ? 'btn-danger' : 'btn-primary' }}"><i
                                    class="fa-solid fa-heart"></i></button>

                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-sm-6">
                    <div class="card blur border border-white mb-4 shadow-xs">
                        <div class="card-body p-4">
                            <div
                                class="icon icon-shape bg-white shadow shadow-xs text-center border-radius-md d-flex align-items-center justify-content-center mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" height="19" width="19"
                                    viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M4.5 3.75a3 3 0 00-3 3v.75h21v-.75a3 3 0 00-3-3h-15z" />
                                    <path fill-rule="evenodd"
                                        d="M22.5 9.75h-21v7.5a3 3 0 003 3h15a3 3 0 003-3v-7.5zm-18 3.75a.75.75 0 01.75-.75h6a.75.75 0 010 1.5h-6a.75.75 0 01-.75-.75zm.75 2.25a.75.75 0 000 1.5h3a.75.75 0 000-1.5h-3z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <p class="text-sm mb-1">Project Description</p>
                            <h4 class="mb-0 font-weight-bold">{{ $project->description }}</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-sm-6">
                    <div class="card blur border border-white mb-4 shadow-xs">
                        <div class="card-body p-4">

                            <p class="text-sm mb-1">Comments</p>
                            <form method="get">
                                @csrf
                                <div class="form-group">Comment or send me a message regarding my project</label>
                                    <textarea style="font-size: 1.2em !important;" class="form-control mb-3" id="exampleFormControlTextarea1"
                                        rows="3"></textarea>
                                    <button type="submit" class="btn btn-primary">Submit</button>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            {{-- List data to UI --}}
            {{-- <div class="container-fluid py-4 px-5">

                <div>
                    Name: {{ $project->name }}

                </div>
                @csrf
                <div> description: {{ $project->description }}</div>
                <div> category: {{ $project->category->name }}</div>
                <div> Uploaded By: {{ $project->student->name }}</div>
                <div> Likes: <span id="likeCount">{{ $project->like_count ?? 0 }}</span></div>
                <div><img src="{{ $project->thumbnail }}" alt="thumbnail" /></div>

                <button id="likeBtn" class="btn {{ $user_liked ? 'btn-danger' : 'btn-primary' }}"><i
                        class="fa-solid fa-heart"></i></button>

            </div> --}}
    </main>

    @section('scripts')
        <script>
            $(document).ready(function() {
                console.log('ready')

                const likeBtn = $('#likeBtn')
                const likeCount = $('#likeCount')

                likeBtn.click(function() {


                    $.post("{{ route('project.like') }}", {
                        project_id: "{{ $project->id }}",
                        _token: $('input[name="_token"]').val()
                    }, function(data) {
                        console.log('Success', data)
                        let count = +likeCount.html()

                        if (likeBtn.hasClass('btn-primary')) {
                            likeBtn.removeClass('btn-primary').addClass('btn-danger')
                        } else {
                            likeBtn.addClass('btn-primary').removeClass('btn-danger')
                        }
                        likeCount.html(data.total_likes)
                    })

                })
            })
        </script>
    @endsection
</x-app-layout>
