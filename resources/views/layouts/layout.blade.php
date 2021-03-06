<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Bpo Revi</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    @include('layouts.komponen.css')

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">

            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div>
        <!-- End Logo -->

        <div class="search-bar">
            <form class="search-form d-flex align-items-center" method="POST" action="#">
                <input type="text" name="query" placeholder="Search" title="Enter search keyword">
                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
            </form>
        </div>
        <!-- End Search Bar -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li>
                <!-- End Search Icon-->

                <li class="nav-item dropdown">

                    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                        <i class="bi bi-bell"></i>
                        <span class="badge bg-primary badge-number">4</span>
                    </a>
                    <!-- End Notification Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                        <li class="dropdown-header">
                            You have 4 new notifications
                            <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-exclamation-circle text-warning"></i>
                            <div>
                                <h4>Lorem Ipsum</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>30 min. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-x-circle text-danger"></i>
                            <div>
                                <h4>Atque rerum nesciunt</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>1 hr. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-check-circle text-success"></i>
                            <div>
                                <h4>Sit rerum fuga</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>2 hrs. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-info-circle text-primary"></i>
                            <div>
                                <h4>Dicta reprehenderit</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>4 hrs. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="dropdown-footer">
                            <a href="#">Show all notifications</a>
                        </li>

                    </ul>
                    <!-- End Notification Dropdown Items -->

                </li>
                <!-- End Notification Nav -->

                <li class="nav-item dropdown">

                    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                        <i class="bi bi-chat-left-text"></i>
                        <span class="badge bg-success badge-number">3</span>
                    </a>
                    <!-- End Messages Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
                        <li class="dropdown-header">
                            You have 3 new messages
                            <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="message-item">
                            <a href="#">
                                <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
                                <div>
                                    <h4>Maria Hudson</h4>
                                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                    <p>4 hrs. ago</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="message-item">
                            <a href="#">
                                <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
                                <div>
                                    <h4>Anna Nelson</h4>
                                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                    <p>6 hrs. ago</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="message-item">
                            <a href="#">
                                <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
                                <div>
                                    <h4>David Muldon</h4>
                                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                    <p>8 hrs. ago</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="dropdown-footer">
                            <a href="#">Show all messages</a>
                        </li>

                    </ul>
                    <!-- End Messages Dropdown Items -->

                </li>
                <!-- End Messages Nav -->

                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#"
                        data-bs-toggle="dropdown">
                        <img src="{{ asset('tmp/assets/img/profile-img.jpg') }}" alt="Profile"
                            class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2">{{ Auth::user()->username }}</span>
                    </a>
                    <!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>{{ Auth::user()->username }}</h6>
                            <span>Super Admin</span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-person"></i>
                                <span>My Profile</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-gear"></i>
                                <span>Account Settings</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                                <i class="bi bi-question-circle"></i>
                                <span>Need Help?</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="{{ url('log-out') }}">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>

                    </ul>
                    <!-- End Profile Dropdown Items -->
                </li>
                <!-- End Profile Nav -->

            </ul>
        </nav>
        <!-- End Icons Navigation -->

    </header>
    <!-- End Header -->
    <?php
    $b1 = ['master_data', 'master_area', 'master_cabang', 'master_client'];
    $b2 = ['upload_data_spg'];
    $b3 = ['maping_area'];
    $b4 = ['input_prospek'];
    ?>
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class=" {{ request()->is('/') ? 'nav-link' : 'nav-link collapsed' }} "
                    href="{{ url('/') }}">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="{{ request()->is($b1) ? 'nav-link' : 'nav-link collapsed' }}"
                    data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-clipboard-data"></i><span>Master Data</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="components-nav" class="nav-content collapse {{ request()->is($b1) ? 'show' : '' }}"
                    data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ url('master_client') }}"
                            class="{{ request()->is('master_client*') ? 'active' : '' }}">
                            <i class="bi bi-circle"></i><span>Master Client</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('master_data') }}"
                            class="{{ request()->is('master_data*') ? 'active' : '' }}">
                            <i class="bi bi-circle"></i><span>Data Master</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('master_area') }}"
                            class="{{ request()->is('master_area*') ? 'active' : '' }}">
                            <i class="bi bi-circle"></i><span>Master Area</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('master_cabang') }}"
                            class="{{ request()->is('master_cabang*') ? 'active' : '' }}">
                            <i class="bi bi-circle"></i><span>Master Cabang</span>
                        </a>
                    </li>



                </ul>
            </li>


            <li class="nav-item">
                <a class="{{ request()->is($b4) ? 'nav-link' : 'nav-link collapsed' }}"
                    data-bs-target="#components-nav4" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-receipt"></i><span>Data Tansaksi</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="components-nav4" class="nav-content collapse {{ request()->is($b4) ? 'show' : '' }}"
                    data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ url('input_prospek') }}"
                            class="{{ request()->is('input_prospek*') ? 'active' : '' }}">
                            <i class="bi bi-circle"></i><span>Input Prospek</span>
                        </a>
                    </li>


                </ul>
            </li>
            <li class="nav-item">
                <a class="{{ request()->is($b3) ? 'nav-link' : 'nav-link collapsed' }}"
                    data-bs-target="#components-nav2" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-map"></i><span>Master Maping</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="components-nav2" class="nav-content collapse {{ request()->is($b3) ? 'show' : '' }}"
                    data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ url('maping_area') }}"
                            class="{{ request()->is('maping_area*') ? 'active' : '' }}">
                            <i class="bi bi-circle"></i><span>Maping Area</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('master_area') }}">
                            <i class="bi bi-circle"></i><span>Maping User</span>
                        </a>
                    </li>

                </ul>
            </li>

            <li class="nav-item">

                <a class="{{ request()->is($b2) ? 'nav-link' : 'nav-link collapsed' }}"
                    data-bs-target="#components-nav3" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-people"></i><span>Master User</span><i class="bi bi-chevron-down ms-auto"></i>

                </a>
                <ul id="components-nav3" class="nav-content collapse {{ request()->is($b2) ? 'show' : '' }}"
                    data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ url('upload_data_spg') }}">
                            <i class="bi bi-circle"></i><span>Data User</span>
                        </a>
                    </li>
                    <li>
                        <a href="role_user">
                            <i class="bi bi-circle"></i><span>Role User</span>
                        </a>
                    </li>


                </ul>
            </li>
            <!-- End Components Nav -->


        </ul>

    </aside>

    @yield('content')

    <footer id="footer" class="footer bottom-50 end-50">
        <div class="copyright">
            &copy; Copyright <strong><span></span></strong>. All Rights Reserved
        </div>

    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    @include('layouts.komponen.js')
    @yield('script')

</body>

</html>
