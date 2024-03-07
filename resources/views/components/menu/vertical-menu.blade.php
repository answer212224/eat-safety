{{--

/**
*
* Created a new component <x-menu.vertical-menu/>.
*
*/

--}}

<div class="sidebar-wrapper sidebar-theme">
    <nav id="sidebar">
        <div class="navbar-nav theme-brand flex-row">
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
                    <a href="/" class="nav-link">巡檢平台</a>
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
                <li class="menu {{ Request::is('*/app/task/*') ? 'active' : '' }}">
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
                            <span>食安巡檢</span>
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
                        <li class="{{ Request::routeIs('v2.app.tasks.calendar') ? 'active' : '' }}">
                            <a href="{{ route('v2.app.tasks.calendar') }}" style="align-items: center;">
                                巡檢月曆
                                <span class="badge badge-light-danger">食安</span>
                            </a>
                        </li>
                        {{-- 任務列表v2 --}}
                        <li class="{{ Request::routeIs('v2.app.tasks.index') ? 'active' : '' }}" class="d-none">
                            <a href="{{ route('v2.app.tasks.index') }}" style="align-items: center;">
                                巡檢任務
                                <span class="badge badge-light-danger">食安</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="menu {{ Request::is('*/app/quality-task/*') ? 'active' : '' }}">
                    <a href="#quality-task" data-bs-toggle="collapse"
                        aria-expanded="{{ Request::is('*/app/quality-task/*') ? 'true' : 'false' }}"
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
                            <span>品保巡檢</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled {{ Request::is('*/app/quality-task/*') ? 'show' : '' }}"
                        id="quality-task" data-bs-parent="#accordionExample">
                        <li class="{{ Request::routeIs('v2.app.quality-tasks.calendar') ? 'active' : '' }}">
                            <a href="{{ route('v2.app.quality-tasks.calendar') }}" style="align-items: center;">
                                巡檢月曆
                                <span class="badge badge-light-success">品保</span>
                            </a>
                        </li>

                        <li class="{{ Request::routeIs('v2.app.quality-tasks.index') ? 'active' : '' }}">
                            <a href="{{ route('v2.app.quality-tasks.index') }}" style="align-items: center;">
                                巡檢任務
                                <span class="badge badge-light-success">品保</span>
                            </a>
                        </li>

                    </ul>
                </li>
            @endcan
            <li class="menu menu-heading">
                <div class="heading">DATA</div>
            </li>
            @can('view-table')
                {{-- 共用資料庫 --}}
                <li class="menu {{ Request::is('*/data/shared/*') ? 'active' : '' }}">
                    <a href="#shared" data-bs-toggle="collapse"
                        aria-expanded="{{ Request::is('*/data/shared/*') ? 'true' : 'false' }}" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-database">
                                <ellipse cx="12" cy="5" rx="9" ry="3"></ellipse>
                                <path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3 4-3 9-3 9 1.34 9 3z">
                                </path>
                            </svg>
                            <span>共用資料庫</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled {{ Request::is('*/data/shared/*') ? 'show' : '' }}"
                        id="shared" data-bs-parent="#accordionExample">
                        <li class="{{ Request::routeIs('v2.data.shared.restaurants.index') ? 'active' : '' }}">
                            <a href="{{ route('v2.data.shared.restaurants.index') }}"> 門市資料庫</a>
                        </li>

                        <li class="{{ Request::routeIs('v2.data.shared.users.index') ? 'active' : '' }}">
                            <a href="{{ route('v2.data.shared.users.index') }}">同仁資料庫</a>
                        </li>
                    </ul>


                </li>


                {{-- 食安資料庫 --}}
                <li class="menu {{ Request::is('*/data/foodsafety/table/*') ? 'active' : '' }}">
                    <a href="#table" data-bs-toggle="collapse"
                        aria-expanded="{{ Request::is('*/data/foodsafety/table/*') ? 'true' : 'false' }}"
                        class="dropdown-toggle">
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
                            <span>食安資料庫</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled {{ Request::is('*/data/foodsafety/table/*') ? 'show' : '' }}"
                        id="table" data-bs-parent="#accordionExample">
                        <li class="{{ Request::routeIs('v2.data.foodsafety.table.meals.index') ? 'active' : '' }} ">
                            <a href="{{ route('v2.data.foodsafety.table.meals.index') }}"
                                style="align-items: center;">採樣資料庫
                                <span class="badge badge-light-danger">食安</span>
                            </a>
                        </li>
                        <li class="{{ Request::routeIs('v2.data.foodsafety.table.projects.index') ? 'active' : '' }}">
                            <a href="{{ route('v2.data.foodsafety.table.projects.index') }}"
                                style="align-items: center;">
                                專案資料庫
                                <span class="badge badge-light-danger">食安</span>
                            </a>
                        </li>
                        <li class="{{ Request::routeIs('v2.data.foodsafety.table.defects.index') ? 'active' : '' }}">
                            <a href="{{ route('v2.data.foodsafety.table.defects.index') }}" style="align-items: center;">
                                食安條文資料庫
                                <span class="badge badge-light-danger">食安</span>
                            </a>
                        </li>
                        <li
                            class="{{ Request::routeIs('v2.data.foodsafety.table.clear-defects.index') ? 'active' : '' }}">
                            <a href="{{ route('v2.data.foodsafety.table.clear-defects.index') }}"
                                style="align-items: center;">
                                清檢條文資料庫
                                <span class="badge badge-light-danger">食安</span>
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- 品保資料庫 --}}
                <li class="menu {{ Request::is('*/data/quality/table/*') ? 'active' : '' }}">
                    <a href="#quality" data-bs-toggle="collapse"
                        aria-expanded="{{ Request::is('*/data/quality/table/*') ? 'true' : 'false' }}"
                        class="dropdown-toggle">
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
                            <span>品保資料庫</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled {{ Request::is('*/data/quality/table/*') ? 'show' : '' }}"
                        id="quality" data-bs-parent="#accordionExample">
                        <li class="{{ Request::routeIs('v2.data.quality.table.meals.index') ? 'active' : '' }} ">
                            <a href="{{ route('v2.data.quality.table.meals.index') }}" style="align-items: center;">
                                食材/成品採樣資料庫
                                <span class="badge badge-light-success">品保</span>
                            </a>
                        </li>
                        <li class="{{ Request::routeIs('v2.data.quality.table.defects.index') ? 'active' : '' }} ">
                            <a href="{{ route('v2.data.quality.table.defects.index') }}" style="align-items: center;">
                                食安條文資料庫
                                <span class="badge badge-light-success">品保</span>
                            </a>
                        </li>
                        <li class="{{ Request::routeIs('v2.data.quality.table.clear-defects.index') ? 'active' : '' }}">
                            <a href="{{ route('v2.data.quality.table.clear-defects.index') }}"
                                style="align-items: center;">
                                清檢條文資料庫
                                <span class="badge badge-light-success">品保</span>
                            </a>
                        </li>
                    </ul>
                </li>
            @endcan
            @can('view-record')
                {{-- 食安紀錄 --}}
                <li class="menu {{ Request::is('*/data/foodsafety/record/*') ? 'active' : '' }}">
                    <a href="#record" data-bs-toggle="collapse"
                        aria-expanded="{{ Request::is('*/data/foodsafety/record/*') ? 'true' : 'false' }}"
                        class="dropdown-toggle">
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
                            <span>食安紀錄</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                    </a>

                    <ul class="collapse submenu list-unstyled {{ Request::is('*/data/foodsafety/record/*') ? 'show' : '' }}"
                        id="record" data-bs-parent="#accordionExample">
                        @can('view-record-meal')
                            <li class="{{ Request::routeIs('v2.data.foodsafety.record.meals.index') ? 'active' : '' }}">
                                <a href="{{ route('v2.data.foodsafety.record.meals.index') }}" style="align-items: center;">
                                    採樣紀錄
                                    <span class="badge badge-light-danger">食安</span>
                                </a>
                            </li>
                        @endcan

                        @can('view-record-defect')
                            <li class="{{ Request::routeIs('v2.data.foodsafety.record.defects.index') ? 'active' : '' }}">
                                <a href="{{ route('v2.data.foodsafety.record.defects.index') }}"
                                    style="align-items: center;">
                                    食安及5S紀錄
                                    <span class="badge badge-light-danger">食安</span>
                                </a>
                            </li>
                        @endcan
                        @can('view-record-clear-defect')
                            <li
                                class="{{ Request::routeIs('v2.data.foodsafety.record.clear-defects.index') ? 'active' : '' }}">
                                <a href="{{ route('v2.data.foodsafety.record.clear-defects.index') }}"
                                    style="align-items: center;">
                                    清潔檢查紀錄
                                    <span class="badge badge-light-danger">食安</span>
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>

                {{-- 品保紀錄 --}}
                <li class="menu {{ Request::is('*/data/quality/record/*') ? 'active' : '' }}">
                    <a href="#quality-record" data-bs-toggle="collapse"
                        aria-expanded="{{ Request::is('*/data/quality/record/*') ? 'true' : 'false' }}"
                        class="dropdown-toggle">
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
                            <span>品保紀錄</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                    </a>

                    <ul class="collapse submenu list-unstyled {{ Request::is('*/data/quality/record/*') ? 'show' : '' }}"
                        id="quality-record" data-bs-parent="#accordionExample">
                        @can('view-record-meal')
                            <li class="{{ Request::routeIs('v2.data.quality.record.meals.index') ? 'active' : '' }}">
                                <a href="{{ route('v2.data.quality.record.meals.index') }}" style="align-items: center;">
                                    食材/成品採樣紀錄
                                    <span class="badge badge-light-success">品保</span>
                                </a>
                            </li>
                        @endcan

                        @can('view-record-defect')
                            <li class="{{ Request::routeIs('v2.data.quality.record.defects.index') ? 'active' : '' }}">
                                <a href="{{ route('v2.data.quality.record.defects.index') }}" style="align-items: center;">
                                    食安巡檢紀錄
                                    <span class="badge badge-light-success">品保</span>
                                </a>
                            </li>
                        @endcan
                        @can('view-record-clear-defect')
                            <li class="{{ Request::routeIs('v2.data.quality.record.clear-defects.index') ? 'active' : '' }}">
                                <a href="{{ route('v2.data.quality.record.clear-defects.index') }}"
                                    style="align-items: center;">
                                    清潔檢查紀錄
                                    <span class="badge badge-light-success">品保</span>
                                </a>
                            </li>
                        @endcan
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
