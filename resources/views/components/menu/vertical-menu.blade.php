{{--

/**
*
* Created a new component <x-menu.vertical-menu/>.
*
*/

--}}


<div class="sidebar-wrapper sidebar-theme">

    <nav id="sidebar">

        <div class="navbar-nav theme-brand flex-row  text-center">
            <div class="nav-logo">
                <div class="nav-item theme-logo">
                    <a href="{{ route('analytics') }}">
                        <img src="{{ Vite::asset('resources/images/logoWithText.png') }}" class="navbar-logo logo-dark"
                            alt="logo">
                        <img src="{{ Vite::asset('resources/images/logoWithText.png') }}" class="navbar-logo logo-light"
                            alt="logo">
                    </a>
                </div>
                <div class="nav-item theme-text">
                    <a href="{{ route('analytics') }}" class="nav-link">食安平台 </a>
                </div>
            </div>
            <div class="nav-item sidebar-toggle">
                <div class="btn-toggle sidebarCollapse">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-chevrons-left">
                        <polyline points="11 17 6 12 11 7"></polyline>
                        <polyline points="18 17 13 12 18 7"></polyline>
                    </svg>
                </div>
            </div>
        </div>

        <div class="profile-info">
            <div class="user-info">
                <div class="profile-img">
                    <img src="{{ Vite::asset('resources/images/delete-user-15.jpeg') }}" alt="avatar">
                </div>
                <div class="profile-content">
                    <h6 class="">{{ auth()->user()->name }}</h6>
                    <p class="">{{ auth()->user()->uid }}</p>
                </div>
            </div>
        </div>

        <div class="shadow-bottom"></div>
        <ul class="list-unstyled menu-categories" id="accordionExample">
            <li class="menu {{ Request::is('*/dashboard') ? 'active' : '' }}">
                <a href="#dashboard" data-bs-toggle="collapse"
                    aria-expanded="{{ Request::is('*/dashboard/*') ? 'true' : 'false' }}" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-home">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                        </svg>
                        <span>Dashboard</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled {{ Request::is('*/dashboard/*') ? 'show' : '' }}"
                    id="dashboard" data-bs-parent="#accordionExample">
                    <li class="{{ Request::routeIs('analytics') ? 'active' : '' }}">
                        <a href="{{ route('analytics') }}"> Analytics </a>
                    </li>
                    <li class="{{ Request::routeIs('sales') ? 'active' : '' }}">
                        <a href="{{ route('sales') }}"> Sales </a>
                    </li>
                    <li class="{{ Request::routeIs('barebone') ? 'active' : '' }}">
                        <a href="{{ route('barebone') }}"> Barebone </a>
                    </li>

                </ul>
            </li>

            <li class="menu menu-heading">
                <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-minus">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg><span>APPLICATIONS</span></div>
            </li>


            {{-- 稽核任務 --}}
            <li class="menu {{ Request::is('*/app/task/*') ? 'active' : '' }}">
                <a href="#task" data-bs-toggle="collapse"
                    aria-expanded="{{ Request::is('*/app/task/*') ? 'true' : 'false' }}" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-edit">
                            <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                            <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                        </svg>
                        <span>稽核任務</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled {{ Request::is('*/app/task/*') ? 'show' : '' }}"
                    id="task" data-bs-parent="#accordionExample">
                    <li
                        class="{{ Request::routeIs('task-list') || Request::routeIs('task-create') || Request::routeIs('task-defect-show')
                            ? 'active'
                            : '' }}">
                        <a href="{{ route('task-list') }}"> 稽核清單 </a>
                    </li>
                </ul>

                <ul class="collapse submenu list-unstyled {{ Request::is('*/app/task/*') ? 'show' : '' }}"
                    id="task" data-bs-parent="#accordionExample">
                    <li class="{{ Request::routeIs('task-assign') ? 'active' : '' }}">
                        <a href="{{ route('task-assign') }}"> 指派稽核 </a>
                    </li>
                </ul>


            </li>



        </ul>

    </nav>

</div>
