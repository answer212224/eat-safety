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
                    <a href="{{ route('task-list') }}">
                        <img src="{{ Vite::asset('resources/images/logoWithText.png') }}" class="navbar-logo logo-dark"
                            alt="logo">
                        <img src="{{ Vite::asset('resources/images/logoWithText.png') }}" class="navbar-logo logo-light"
                            alt="logo">
                    </a>
                </div>
                <div class="nav-item theme-text">
                    <a href="{{ route('task-list') }}" class="nav-link">食安平台 </a>
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
            {{-- Dashboard --}}
            {{-- <li class="menu {{ Request::is('*/dashboard') ? 'active' : '' }}">
                <a href="#dashboard" data-bs-toggle="collapse"
                    aria-expanded="{{ Request::is('*/dashboard/*') ? 'true' : 'false' }}" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-home">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                        </svg>
                        <span>儀表板</span>
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


                </ul>
            </li> --}}

            {{-- APP --}}
            <li class="menu menu-heading">
                <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-minus">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg><span>APP</span></div>
            </li>
            @can('permission-controll')
                <li class="menu {{ Request::is('*/app/permission/*') ? 'active' : '' }}">
                    <a href="#permission" data-bs-toggle="collapse"
                        aria-expanded="{{ Request::is('*/app/permission/*') ? 'true' : 'false' }}" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                class="bi bi-shield-check" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                                <path
                                    d="M5.338 1.59a61.44 61.44 0 0 0-2.837.856.481.481 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.725 10.725 0 0 0 2.287 2.233c.346.244.652.42.893.533.12.057.218.095.293.118a.55.55 0 0 0 .101.025.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z" />
                                <path
                                    d="M10.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                            </svg>
                            <span>權限設定</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled {{ Request::is('*/app/permission/*') ? 'show' : '' }}"
                        id="permission" data-bs-parent="#accordionExample">

                        <li
                            class="{{ Request::routeIs('permission-index') || Request::routeIs('role-edit') ? 'active' : '' }}">
                            <a href="{{ route('permission-index') }}"> 角色權限 </a>
                        </li>


                    </ul>
                </li>
            @endcan
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
                        class="{{ Request::routeIs('task-assign') || Request::routeIs('task-edit') ? 'active' : '' }}">
                        <a href="{{ route('task-assign') }}"> 稽核行事曆 </a>
                    </li>

                    <li
                        class="{{ Request::routeIs('task-list') ||
                        Request::routeIs('task-create') ||
                        Request::routeIs('task-defect-show') ||
                        Request::routeIs('task-meal-check') ||
                        Request::routeIs('task-project-check') ||
                        Request::routeIs('task-defect-edit') ||
                        Request::routeIs('task-clear-defect-edit') ||
                        Request::routeIs('task-defect-owner') ||
                        Request::routeIs('task-clear-defect-owner')
                            ? 'active'
                            : '' }}">
                        <a href="{{ route('task-list') }}"> 稽核任務列表 </a>
                    </li>
                </ul>




            </li>

            <li class="menu menu-heading">
                <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg><span>DATA</span></div>
            </li>

            {{-- 表格 --}}
            <li class="menu {{ Request::is('*/data/table/*') ? 'active' : '' }}">
                <a href="#table" data-bs-toggle="collapse"
                    aria-expanded="{{ Request::is('*/data/table/*') ? 'true' : 'false' }}" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-layout">
                            <rect x="3" y="3" width="18" height="18" rx="2"
                                ry="2"></rect>
                            <line x1="3" y1="9" x2="21" y2="9"></line>
                            <line x1="9" y1="21" x2="9" y2="9"></line>
                        </svg>
                        <span>表格</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled {{ Request::is('*/data/table/*') ? 'show' : '' }}"
                    id="table" data-bs-parent="#accordionExample">
                    <li class="{{ Request::routeIs('meal-index') || Request::routeIs('meal-edit') ? 'active' : '' }}">
                        <a href="{{ route('meal-index') }}"> 餐點採樣資料 </a>
                    </li>
                    <li class="{{ Request::routeIs('project-index') ? 'active' : '' }}">
                        <a href="{{ route('project-index') }}"> 專案資料 </a>
                    </li>
                    <li class="{{ Request::routeIs('defect-index') ? 'active' : '' }}">
                        <a href="{{ route('defect-index') }}"> 食安缺失資料 </a>
                    </li>
                    <li class="{{ Request::routeIs('clear-defect-index') ? 'active' : '' }}">
                        <a href="{{ route('clear-defect-index') }}"> 清檢缺失資料 </a>
                    </li>
                    <li
                        class="{{ Request::routeIs('restaurant-index') || Request::routeIs('restaurant-workspace') ? 'active' : '' }}">
                        <a href="{{ route('restaurant-index') }}"> 門市資料 </a>
                    </li>
                    <li
                        class="{{ Request::routeIs('user-index') || Request::routeIs('user-edit') || Request::routeIs('user-show') ? 'active' : '' }}">
                        <a href="{{ route('user-index') }}"> 同仁資料 </a>
                    </li>
                    <li class="{{ Request::routeIs('task-meals') ? 'active' : '' }}">
                        <a href="{{ route('task-meals') }}"> 稽核採樣資料 </a>
                    </li>
                </ul>
            </li>

            {{-- 圖表 --}}
            {{-- <li class="menu {{ Request::is('*/data/chart/*') ? 'active' : '' }}">
                <a href="#chart" data-bs-toggle="collapse"
                    aria-expanded="{{ Request::is('*/data/chart/*') ? 'true' : 'false' }}" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-pie-chart">
                            <path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path>
                            <path d="M22 12A10 10 0 0 0 12 2v10z"></path>
                        </svg>
                        <span>圖表</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled {{ Request::is('*/data/chart/*') ? 'show' : '' }}"
                    id="chart" data-bs-parent="#accordionExample">
                    <li class="{{ Request::routeIs('chart-demo') ? 'active' : '' }}">
                        <a href="{{ route('chart-demo') }}"> 圖表DEMO </a>
                    </li>

                </ul>
            </li> --}}
        </ul>

    </nav>

</div>
