<x-base-layout :scrollspy="false">

    <x-slot:pageTitle>
        {{ $title }}
    </x-slot:pageTitle>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <x-slot:headerFiles>
        <!--  BEGIN CUSTOM STYLE FILE  -->
        @vite(['resources/scss/light/plugins/editors/quill/quill.snow.scss'])
        @vite(['resources/scss/light/assets/apps/todolist.scss'])
        @vite(['resources/scss/light/assets/components/modal.scss'])

        @vite(['resources/scss/dark/plugins/editors/quill/quill.snow.scss'])
        @vite(['resources/scss/dark/assets/apps/todolist.scss'])
        @vite(['resources/scss/dark/assets/components/modal.scss'])
        <!--  END CUSTOM STYLE FILE  -->
    </x-slot:headerFiles>
    <!-- END GLOBAL MANDATORY STYLES -->

    <div class="row layout-top-spacing">

        <!-- CONTENT HERE -->

        <div class="col-xl-12 col-lg-12 col-md-12">

            <div class="mail-box-container">
                <div class="mail-overlay"></div>

                <div class="tab-title">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-12 text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-clipboard">
                                <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2">
                                </path>
                                <rect x="8" y="2" width="8" height="4" rx="1"
                                    ry="1"></rect>
                            </svg>
                            <h5 class="app-title">任務清單</h5>
                        </div>
                        <div class="col-md-12 col-sm-12 col-12 ps-0">
                            <div class="todoList-sidebar-scroll mt-4">
                                <ul class="nav nav-pills d-block" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link list-actions active" id="all-list" data-toggle="pill"
                                            href="#pills-inbox" role="tab" aria-selected="true"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-list">
                                                <line x1="8" y1="6" x2="21" y2="6">
                                                </line>
                                                <line x1="8" y1="12" x2="21" y2="12">
                                                </line>
                                                <line x1="8" y1="18" x2="21" y2="18">
                                                </line>
                                                <line x1="3" y1="6" x2="3" y2="6">
                                                </line>
                                                <line x1="3" y1="12" x2="3" y2="12">
                                                </line>
                                                <line x1="3" y1="18" x2="3" y2="18">
                                                </line>
                                            </svg> 任務清單 <span class="todo-badge badge"></span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link list-actions" id="todo-task-done" data-toggle="pill"
                                            href="#pills-sentmail" role="tab" aria-selected="false"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-thumbs-up">
                                                <path
                                                    d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3">
                                                </path>
                                            </svg> 已完成 <span class="todo-badge badge"></span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link list-actions" id="todo-task-important" data-toggle="pill"
                                            href="#pills-important" role="tab" aria-selected="false"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-star">
                                                <polygon
                                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                </polygon>
                                            </svg> 執行中 <span class="todo-badge badge"></span></a>
                                    </li>

                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

                <div id="todo-inbox" class="accordion todo-inbox">
                    <div class="search">
                        <input type="text" class="form-control input-search" placeholder="Search Task...">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-menu mail-menu d-lg-none">
                            <line x1="3" y1="12" x2="21" y2="12"></line>
                            <line x1="3" y1="6" x2="21" y2="6"></line>
                            <line x1="3" y1="18" x2="21" y2="18"></line>
                        </svg>
                    </div>

                    <div class="todo-box">

                        <div id="ct" class="todo-box-scroll">
                            @foreach ($tasks as $task)
                                <div
                                    class="todo-item all-list @if ($task->status == '已完成') todo-task-done @endif">
                                    <div class="todo-item-inner">


                                        <div class="todo-content">
                                            <h5 class="todo-heading">
                                                <p>{{ $task->task_date }} 的 {{ $task->category }}</p>
                                                <p>地點: {{ $task->restaurant->brand }}{{ $task->restaurant->shop }}</p>
                                                <p>同仁:
                                                    @foreach ($task->users as $user)
                                                        {{ $user->name }}
                                                    @endforeach
                                                </p>
                                            </h5>

                                        </div>

                                        <div class="priority-dropdown custom-dropdown-icon">
                                            <div class="dropdown p-dropdown">
                                                <a class="dropdown-toggle warning" href="#" role="button"
                                                    id="dropdownMenuLink-1" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="true">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-alert-octagon">
                                                        <polygon
                                                            points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2">
                                                        </polygon>
                                                        <line x1="12" y1="8" x2="12"
                                                            y2="12"></line>
                                                        <line x1="12" y1="16" x2="12"
                                                            y2="16"></line>
                                                    </svg>
                                                </a>

                                                <div class="dropdown-menu left" aria-labelledby="dropdownMenuLink-1">
                                                    <a class="dropdown-item danger" href="javascript:void(0);"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-alert-octagon">
                                                            <polygon
                                                                points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2">
                                                            </polygon>
                                                            <line x1="12" y1="8" x2="12"
                                                                y2="12"></line>
                                                            <line x1="12" y1="16" x2="12"
                                                                y2="16"></line>
                                                        </svg> High</a>
                                                    <a class="dropdown-item warning" href="javascript:void(0);"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-alert-octagon">
                                                            <polygon
                                                                points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2">
                                                            </polygon>
                                                            <line x1="12" y1="8" x2="12"
                                                                y2="12"></line>
                                                            <line x1="12" y1="16" x2="12"
                                                                y2="16"></line>
                                                        </svg> Middle</a>
                                                    <a class="dropdown-item primary" href="javascript:void(0);"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-alert-octagon">
                                                            <polygon
                                                                points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2">
                                                            </polygon>
                                                            <line x1="12" y1="8" x2="12"
                                                                y2="12"></line>
                                                            <line x1="12" y1="16" x2="12"
                                                                y2="16"></line>
                                                        </svg> Low</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="action-dropdown custom-dropdown-icon">
                                            <div class="dropdown">
                                                <a class="dropdown-toggle" href="#" role="button"
                                                    id="dropdownMenuLink-2" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="true">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-more-vertical">
                                                        <circle cx="12" cy="12" r="1">
                                                        </circle>
                                                        <circle cx="12" cy="5" r="1">
                                                        </circle>
                                                        <circle cx="12" cy="19" r="1">
                                                        </circle>
                                                    </svg>
                                                </a>

                                                <div class="dropdown-menu left" aria-labelledby="dropdownMenuLink-2">
                                                    <a class="dropdown-item" href="{{ route('task-edit') }}">開始稽核</a>
                                                    <a class="important dropdown-item"
                                                        href="javascript:void(0);">主管核對</a>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            @endforeach


                        </div>

                        <div class="modal fade" id="" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="task-heading modal-title mb-0"></h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close">
                                            <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="feather feather-x">
                                                <line x1="18" y1="6" x2="6" y2="18">
                                                </line>
                                                <line x1="6" y1="6" x2="18" y2="18">
                                                </line>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="compose-box">
                                            <div class="compose-content">
                                                <p class="task-text"></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>


    </div>

    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <x-slot:footerFiles>
        <script src="{{ asset('plugins/global/vendors.min.js') }}"></script>
        <script src="{{ asset('plugins/editors/quill/quill.js') }}"></script>
        @vite(['resources/assets/js/apps/todoList.js'])
    </x-slot:footerFiles>
    <!--  END CUSTOM SCRIPTS FILE  -->
</x-base-layout>
