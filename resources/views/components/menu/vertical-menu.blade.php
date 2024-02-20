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
                    <a href="{{ route('task-list') }}" class="nav-link">食安巡檢平台 </a>
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

            {{-- APP --}}
            <li class="menu menu-heading">
                <div class="heading">APP</div>
            </li>
            @can('permission-controll')
                <li class="menu {{ Request::is('*/app/permission/*') ? 'active' : '' }}">
                    <a href="#permission" data-bs-toggle="collapse"
                        aria-expanded="{{ Request::is('*/app/permission/*') ? 'true' : 'false' }}" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-lock">
                                <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
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

            @can('view-task')
                <li class="menu {{ Request::is('*/app/task/*') || Request::is('*/app/task') ? 'active' : '' }}">
                    <a href="#task" data-bs-toggle="collapse"
                        aria-expanded="{{ Request::is('*/app/task/*') || Request::is('*/app/task') ? 'true' : 'false' }}"
                        class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-calendar">
                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                <line x1="16" y1="2" x2="16" y2="6"></line>
                                <line x1="8" y1="2" x2="8" y2="6"></line>
                                <line x1="3" y1="10" x2="21" y2="10"></line>
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

                        {{-- <li
                            class="{{ Request::routeIs('task-assign') || Request::routeIs('task-edit') ? 'active' : '' }}">
                            <a href="{{ route('task-assign') }}"> 稽核行事曆 </a>
                        </li> --}}

                        <li class="{{ Request::routeIs('v2.app.tasks.calendar') ? 'active' : '' }}">
                            <a href="{{ route('v2.app.tasks.calendar') }}"> 稽核行事曆 v.2</a>
                        </li>

                        {{-- <li
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
                        </li> --}}
                        {{-- 任務列表v2 --}}
                        <li class="{{ Request::routeIs('v2.app.tasks.index') ||
                        Request::routeIs('v2.app.tasks.defect.create') ||
                        Request::routeIs('v2.app.tasks.defect.edit') ||
                        Request::routeIs('v2.app.tasks.clear-defect.create') ||
                        Request::routeIs('v2.app.tasks.clear-defect.edit')
                            ? 'active'
                            : '' }}"
                            class="d-none">
                            <a href="{{ route('v2.app.tasks.index') }}"> 稽核任務列表 v.2 </a>
                        </li>

                    </ul>
                </li>
            @endcan

            <li class="menu menu-heading">
                <div class="heading">DATA</div>
            </li>

            @can('view-table')
                {{-- 資料表 --}}
                <li class="menu {{ Request::is('*/data/table/*') ? 'active' : '' }}">
                    <a href="#table" data-bs-toggle="collapse"
                        aria-expanded="{{ Request::is('*/data/table/*') ? 'true' : 'false' }}" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-box">
                                <path
                                    d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                                </path>
                                <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                                <line x1="12" y1="22.08" x2="12" y2="12"></line>
                            </svg>
                            <span>資料庫</span>
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
                        {{-- <li class="{{ Request::routeIs('meal-index') || Request::routeIs('meal-edit') ? 'active' : '' }}">
                            <a href="{{ route('meal-index') }}"> 採樣資料庫 </a>
                        </li> --}}
                        <li class="{{ Request::routeIs('v2.data.table.meals.index') ? 'active' : '' }} ">
                            <a href="{{ route('v2.data.table.meals.index') }}"> 採樣資料庫 v.2</a>
                        </li>

                        {{-- <li
                            class="{{ Request::routeIs('project-index') || Request::routeIs('project-edit') ? 'active' : '' }}">
                            <a href="{{ route('project-index') }}"> 專案資料庫 </a>
                        </li> --}}
                        <li class="{{ Request::routeIs('v2.data.table.projects.index') ? 'active' : '' }}">
                            <a href="{{ route('v2.data.table.projects.index') }}"> 專案資料庫 v.2</a>
                        </li>
                        {{-- <li
                            class="{{ Request::routeIs('defect-index') || Request::routeIs('defect-chart') ? 'active' : '' }}">
                            <a href="{{ route('defect-index') }}"> 食安缺失資料庫 </a>
                        </li> --}}
                        <li class="{{ Request::routeIs('v2.data.table.defects.index') ? 'active' : '' }}">
                            <a href="{{ route('v2.data.table.defects.index') }}"> 食安資料庫 v.2</a>
                        </li>

                        {{-- <li
                            class="{{ Request::routeIs('clear-defect-index') || Request::routeIs('clear-defect-chart') ? 'active' : '' }}">
                            <a href="{{ route('clear-defect-index') }}"> 清檢缺失資料庫 </a>
                        </li> --}}

                        <li class="{{ Request::routeIs('v2.data.table.clear-defects.index') ? 'active' : '' }}">
                            <a href="{{ route('v2.data.table.clear-defects.index') }}"> 清檢資料庫 v.2</a>
                        </li>

                        {{-- <li
                            class="{{ Request::routeIs('restaurant-index') || Request::routeIs('restaurant-workspace') || Request::routeIs('restaurant-defects') || Request::routeIs('restaurant-clear-defects') || Request::routeIs('restaurant-chart') || Request::routeIs('restaurant-clear-chart') ? 'active' : '' }}">
                            <a href="{{ route('restaurant-index') }}"> 門市資料庫 </a>
                        </li> --}}
                        <li class="{{ Request::routeIs('v2.data.table.restaurants.index') ? 'active' : '' }}">
                            <a href="{{ route('v2.data.table.restaurants.index') }}"> 門市資料庫 v.2</a>
                        </li>

                        <li
                            class="{{ Request::routeIs('user-index') || Request::routeIs('user-edit') || Request::routeIs('user-show') || Request::routeIs('user-chart') ? 'active' : '' }}">
                            <a href="{{ route('user-index') }}"> 同仁資料庫 </a>
                        </li>

                    </ul>
                </li>
            @endcan

            @can('view-record')
                {{-- 紀錄 --}}
                <li class="menu {{ Request::is('*/data/record/*') ? 'active' : '' }}">
                    <a href="#record" data-bs-toggle="collapse"
                        aria-expanded="{{ Request::is('*/data/record/*') ? 'true' : 'false' }}" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-file-text">
                                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                <polyline points="14 2 14 8 20 8"></polyline>
                                <line x1="16" y1="13" x2="8" y2="13"></line>
                                <line x1="16" y1="17" x2="8" y2="17"></line>
                                <polyline points="10 9 9 9 8 9"></polyline>
                            </svg>
                            <span>紀錄</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                    </a>

                    <ul class="collapse submenu list-unstyled {{ Request::is('*/data/record/*') ? 'show' : '' }}"
                        id="record" data-bs-parent="#accordionExample">
                        {{-- @can('view-record-meal')
                            <li class="{{ Request::routeIs('task-meals') ? 'active' : '' }}">
                                <a href="{{ route('task-meals') }}"> 稽核採樣紀錄 </a>
                            </li>
                        @endcan --}}
                        @can('view-record-meal')
                            <li class="{{ Request::routeIs('v2.data.record.meals.index') ? 'active' : '' }}">
                                <a href="{{ route('v2.data.record.meals.index') }}"> 採樣紀錄 v.2 </a>
                            </li>
                        @endcan
                        {{-- @can('view-record-defect')
                            <li
                                class="{{ Request::routeIs('defect-records') || Request::routeIs('defect-chart') ? 'active' : '' }}">
                                <a href="{{ route('defect-records') }}"> 食安缺失紀錄 </a>
                            </li>
                        @endcan --}}
                        @can('view-record-defect')
                            <li class="{{ Request::routeIs('v2.data.record.defects.index') ? 'active' : '' }}">
                                <a href="{{ route('v2.data.record.defects.index') }}"> 食安缺失紀錄 v.2 </a>
                            </li>
                        @endcan
                        @can('view-record-clear-defect')
                            <li
                                class="{{ Request::routeIs('clear-defect-records') || Request::routeIs('clear-defect-chart') ? 'active' : '' }}">
                                <a href="{{ route('clear-defect-records') }}"> 清檢缺失紀錄 </a>
                            </li>
                        @endcan
                        <li
                            class="{{ Request::routeIs('restaurant-records') || Request::routeIs('clear-defect-chart') ? 'active' : '' }} d-none">
                            <a href="{{ route('restaurant-records') }}"> 門市缺失紀錄 </a>
                        </li>
                    </ul>
                </li>
            @endcan

            @can('view-rowdata')
                {{-- RowData --}}
                <li class="menu {{ Request::is('*/data/row-data/*') ? 'active' : '' }}">
                    <a href="#row-data" data-bs-toggle="collapse"
                        aria-expanded="{{ Request::is('*/data/row-data/*') ? 'true' : 'false' }}"
                        class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-layers">
                                <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                                <polyline points="2 17 12 22 22 17"></polyline>
                                <polyline points="2 12 12 17 22 12"></polyline>
                            </svg>
                            <span>ROWDATA</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                    </a>

                    <ul class="collapse submenu list-unstyled {{ Request::is('*/data/row-data/*') ? 'show' : '' }}"
                        id="row-data" data-bs-parent="#accordionExample">
                        <li class="{{ Request::routeIs('row-data-defect') ? 'active' : '' }}">
                            <a href="{{ route('row-data-defect') }}"> 食安及5S </a>
                        </li>
                        <li class="{{ Request::routeIs('row-data-clear-defect') ? 'active' : '' }}">
                            <a href="{{ route('row-data-clear-defect') }}"> 清潔檢查 </a>
                        </li>
                    </ul>
                </li>
            @endcan
            @can('view-eatogether')
                {{-- 集團統計 --}}
                <li class="menu {{ Request::is('*/data/eatogether/*') ? 'active' : '' }}">
                    <a href="#eatogether" data-bs-toggle="collapse"
                        aria-expanded="{{ Request::is('*/data/eatogether/*') ? 'true' : 'false' }}"
                        class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-airplay">
                                <path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1">
                                </path>
                                <polygon points="12 15 17 21 7 21 12 15"></polygon>
                            </svg>
                            <span>集團統計</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                    </a>

                    <ul class="collapse submenu list-unstyled {{ Request::is('*/data/eatogether/*') ? 'show' : '' }}"
                        id="eatogether" data-bs-parent="#accordionExample">
                        <li class="{{ Request::routeIs('eatogether-restaurants') ? 'active' : '' }}">
                            <a href="{{ route('eatogether-restaurants') }}"> 全部門市統計 </a>
                        </li>
                        <li class="{{ Request::routeIs('eatogether-users') ? 'active' : '' }}">
                            <a href="{{ route('eatogether-users') }}"> 食安部同仁統計 </a>
                        </li>
                    </ul>
                </li>
            @endcan
        </ul>
    </nav>
</div>
