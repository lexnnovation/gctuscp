<x-app-layout>

    <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
        <div class="pt-7 pb-6 bg-cover"
            style="background-image: url('../assets/img/header-orange-purple.jpg'); background-position: bottom;">
        </div>
        <div class="container">
            <div class="card card-body py-2 bg-transparent shadow-none">
                <div class="row">
                    <div class="col-auto">
                        <div
                            class="avatar avatar-2xl rounded-circle position-relative mt-n7 border border-gray-100 border-4">
                            <img src="../assets/img/team-2.jpg" alt="profile_image" class="w-100">
                        </div>
                    </div>
                    <div class="col-auto my-auto">
                        <div class="h-100">
                            <h3 class="mb-0 font-weight-bold">

                                {{ Auth::user()->name }}</h3>
                            <p class="mb-0">
                                {{ Auth::user()->email }}
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="container my-3 py-3">
            <div class="row">
                {{-- <div class="col-12 col-xl-4 mb-4">
                    <div class="card border shadow-xs h-100">
                        <div class="card-header pb-0 p-3">
                            <h6 class="mb-0 font-weight-semibold text-lg">Notifications settings</h6>
                            <p class="text-sm mb-1">Here you can set preferences.</p>
                        </div>
                        <div class="card-body p-3">
                            <h6 class="text-dark font-weight-semibold mb-1">Account</h6>
                            <ul class="list-group">
                                <li class="list-group-item border-0 px-0">
                                    <div class="form-check form-switch ps-0">
                                        <input class="form-check-input ms-auto" type="checkbox"
                                            id="flexSwitchCheckDefault" checked>
                                        <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0"
                                            for="flexSwitchCheckDefault">Email me when someone follows me</label>
                                    </div>
                                </li>
                                <li class="list-group-item border-0 px-0">
                                    <div class="form-check form-switch ps-0">
                                        <input class="form-check-input ms-auto" type="checkbox"
                                            id="flexSwitchCheckDefault1">
                                        <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0"
                                            for="flexSwitchCheckDefault1">Email me when someone answers on my
                                            post</label>
                                    </div>
                                </li>
                                <li class="list-group-item border-0 px-0">
                                    <div class="form-check form-switch ps-0">
                                        <input class="form-check-input ms-auto" type="checkbox"
                                            id="flexSwitchCheckDefault2" checked>
                                        <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0"
                                            for="flexSwitchCheckDefault2">Email me when someone mentions me</label>
                                    </div>
                                </li>
                            </ul>
                            <h6 class="text-dark font-weight-semibold mt-2 mb-1">Application</h6>
                            <ul class="list-group">
                                <li class="list-group-item border-0 px-0">
                                    <div class="form-check form-switch ps-0">
                                        <input class="form-check-input ms-auto" type="checkbox"
                                            id="flexSwitchCheckDefault3">
                                        <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0"
                                            for="flexSwitchCheckDefault3">New launches and projects</label>
                                    </div>
                                </li>
                                <li class="list-group-item border-0 px-0">
                                    <div class="form-check form-switch ps-0">
                                        <input class="form-check-input ms-auto" type="checkbox"
                                            id="flexSwitchCheckDefault4" checked>
                                        <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0"
                                            for="flexSwitchCheckDefault4">Monthly product updates</label>
                                    </div>
                                </li>
                                <li class="list-group-item border-0 px-0 pb-0">
                                    <div class="form-check form-switch ps-0">
                                        <input class="form-check-input ms-auto" type="checkbox"
                                            id="flexSwitchCheckDefault5">
                                        <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0"
                                            for="flexSwitchCheckDefault5">Subscribe to newsletter</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> --}}
                <div class="col-12 col-xl-4 mb-4">
                    <div class="card border shadow-xs h-100">
                        <div class="card-header pb-0 p-3">
                            <div class="row">
                                <div class="col-md-8 col-9">
                                    <h6 class="mb-0 font-weight-semibold text-lg">Profile information</h6>
                                    <p class="text-sm mb-1">Edit the information about you.</p>
                                </div>
                                <div class="col-md-4 col-3 text-end">
                                    <button type="button" class="btn btn-white btn-icon px-2 py-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                            viewBox="0 0 24 24" fill="currentColor">
                                            <path
                                                d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32L19.513 8.2z" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-3">
                            <p class="text-sm mb-4">
                                Hi, I’m Alec Thompson, Decisions: If you can’t decide, the answer is no. If two equally
                                difficult paths, choose the one more painful in the short term (pain avoidance is
                                creating an illusion of equality).
                            </p>
                            <ul class="list-group">
                                <li
                                    class="list-group-item border-0 ps-0 text-dark font-weight-semibold pt-0 pb-1 text-sm">
                                    <span class="text-secondary"> Name:</span> &nbsp; {{ Auth::user()->name }}

                                </li>

                                <li class="list-group-item border-0 ps-0 text-dark font-weight-semibold pb-1 text-sm">
                                    <span class="text-secondary">Mobile:</span> &nbsp; +(233) 123 1234 123
                                </li>
                                <li class="list-group-item border-0 ps-0 text-dark font-weight-semibold pb-1 text-sm">
                                    <span class="text-secondary">Department:</span> &nbsp; Computer Science
                                </li>
                                <li class="list-group-item border-0 ps-0 text-dark font-weight-semibold pb-1 text-sm">
                                    <span class="text-secondary">Campus:</span> &nbsp; Tesano
                                </li>
                                <li class="list-group-item border-0 ps-0 text-dark font-weight-semibold pb-1 text-sm">
                                    <span class="text-secondary">Social:</span> &nbsp;
                                    <a class="btn btn-link text-dark mb-0 ps-1 pe-1 py-0" href="javascript:;">
                                        <i class="fab fa-linkedin fa-lg"></i>
                                    </a>
                                    <a class="btn btn-link text-dark mb-0 ps-1 pe-1 py-0" href="javascript:;">
                                        <i class="fab fa-github fa-lg"></i>
                                    </a>
                                    <a class="btn btn-link text-dark mb-0 ps-1 pe-1 py-0" href="javascript:;">
                                        <i class="fab fa-slack fa-lg"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                {{-- <div class="col-12">
                    <div class="card shadow-xs border mb-4 pb-3">
                        <div class="card-header pb-0 p-3">
                            <h6 class="mb-0 font-weight-semibold text-lg">Last articles</h6>
                            <p class="text-sm mb-1">Here you will find the latest articles.</p>
                        </div>
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-xl-4 col-md-6 mb-xl-0 mb-4">
                                    <div
                                        class="card card-background border-radius-xl card-background-after-none align-items-start mb-4">
                                        <div class="full-background bg-cover"
                                            style="background-image: url('../assets/img/img-8.jpg')"></div>
                                        <span class="mask bg-dark opacity-1 border-radius-sm"></span>
                                        <div class="card-body text-start p-3 w-100">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div
                                                        class="blur shadow d-flex align-items-center w-100 border-radius-md border border-white mt-8 p-3">
                                                        <div class="w-50">
                                                            <p class="text-dark text-sm font-weight-bold mb-1">Sara
                                                                Lamalo</p>
                                                            <p class="text-xs text-secondary mb-0">20 Jul 2022</p>
                                                        </div>
                                                        <p class="text-dark text-sm font-weight-bold ms-auto">Growth
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="javascript:;">
                                        <h4 class="font-weight-semibold">
                                            Best strategy games
                                        </h4>
                                    </a>
                                    <p class="mb-4">
                                        As Uber works through a huge amount of internal management turmoil.
                                    </p>
                                    <a href="javascript:;"
                                        class="text-dark font-weight-semibold icon-move-right mt-auto w-100 mb-5">
                                        Read post
                                        <i class="fas fa-arrow-right-long text-sm ms-1" aria-hidden="true"></i>
                                    </a>
                                </div>
                                <div class="col-xl-4 col-md-6 mb-xl-0 mb-4">
                                    <div
                                        class="card card-background border-radius-xl card-background-after-none align-items-start mb-4">
                                        <div class="full-background bg-cover"
                                            style="background-image: url('../assets/img/img-9.jpg')"></div>
                                        <span class="mask bg-dark opacity-1 border-radius-sm"></span>
                                        <div class="card-body text-start p-3 w-100">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div
                                                        class="blur shadow d-flex align-items-center w-100 border-radius-md border border-white mt-8 p-3">
                                                        <div class="w-50">
                                                            <p class="text-dark text-sm font-weight-bold mb-1">Charles
                                                                Deluvio</p>
                                                            <p class="text-xs text-secondary mb-0">17 Jul 2022</p>
                                                        </div>
                                                        <p class="text-dark text-sm font-weight-bold ms-auto">Education
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="javascript:;">
                                        <h4 class="font-weight-semibold">
                                            Don't be afraid to be wrong
                                        </h4>
                                    </a>
                                    <p class="mb-4">
                                        As Uber works through a huge amount of internal management turmoil.
                                    </p>
                                    <a href="javascript:;"
                                        class="text-dark font-weight-semibold icon-move-right mt-auto w-100 mb-5">
                                        Read post
                                        <i class="fas fa-arrow-right-long text-sm ms-1" aria-hidden="true"></i>
                                    </a>
                                </div>
                                <div class="col-xl-4 col-md-6 mb-xl-0 mb-4">
                                    <div class="card h-100 card-plain border border-dashed px-5">
                                        <div class="card-body d-flex flex-column justify-content-center text-center">
                                            <a href="javascript:;">
                                                <div
                                                    class="icon icon-shape bg-dark text-center text-white rounded-circle mx-auto d-flex align-items-center justify-content-center mb-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="19"
                                                        width="19" viewBox="0 0 24 24" fill="currentColor">
                                                        <path fill-rule="evenodd"
                                                            d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                </div>
                                                <h5 class="text-dark text-lg"> Create new post </h5>
                                                <p class="text-sm text-secondary mb-0">Drive into the editor and add
                                                    your content.</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>


</x-app-layout>
