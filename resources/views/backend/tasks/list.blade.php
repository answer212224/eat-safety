<x-base-layout :scrollspy="false">

    <x-slot:pageTitle>
        {{ $title }}
        </x-slot>

        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <x-slot:headerFiles>
            <!--  BEGIN CUSTOM STYLE FILE  -->
            @vite(['resources/scss/light/assets/components/modal.scss'])
            @vite(['resources/scss/light/assets/apps/notes.scss'])
            @vite(['resources/scss/dark/assets/components/modal.scss'])
            @vite(['resources/scss/dark/assets/apps/notes.scss'])
            <!--  END CUSTOM STYLE FILE  -->
            </x-slot>
            <!-- END GLOBAL MANDATORY STYLES -->

            <x-slot:scrollspyConfig>
                data-bs-spy="scroll" data-bs-target="#navSection" data-bs-offset="100"
                </x-slot>

                <div class="row app-notes layout-top-spacing" id="cancel-row">
                    <div class="col-lg-12">
                        <div class="app-hamburger-container">
                            <div class="hamburger"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-menu chat-menu d-xl-none">
                                    <line x1="3" y1="12" x2="21" y2="12"></line>
                                    <line x1="3" y1="6" x2="21" y2="6"></line>
                                    <line x1="3" y1="18" x2="21" y2="18"></line>
                                </svg></div>
                        </div>

                        <div class="app-container">

                            <div class="app-note-container">

                                <div class="app-note-overlay"></div>

                                <div class="tab-title">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-12 mb-5">
                                            <ul class="nav nav-pills d-block" id="pills-tab3" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link list-actions active" id="all-notes"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-edit">
                                                            <path
                                                                d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7">
                                                            </path>
                                                            <path
                                                                d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z">
                                                            </path>
                                                        </svg> All Notes</a>
                                                </li>

                                            </ul>

                                            <hr />

                                            <p class="group-section"><svg xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" class="feather feather-tag">
                                                    <path
                                                        d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z">
                                                    </path>
                                                    <line x1="7" y1="7" x2="7" y2="7">
                                                    </line>
                                                </svg> Tags</p>

                                            <ul class="nav nav-pills d-block group-list" id="pills-tab" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link list-actions g-dot-primary"
                                                        id="note-personal">已完成</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link list-actions g-dot-warning"
                                                        id="note-work">稽核中</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link list-actions g-dot-success"
                                                        id="note-social">未稽核</a>
                                                </li>

                                            </ul>
                                        </div>

                                    </div>
                                </div>

                                <div id="ct" class="note-container note-grid">
                                    @foreach ($tasks as $task)
                                        <div
                                            class="note-item all-notes @if ($task->status == 'completed') note-personal
                                            @elseif ($task->status == 'processing') note-work @else note-social @endif">

                                            <div class="note-inner-content">
                                                <div class="note-content">
                                                    <p class="note-title">
                                                        {{ $task->category }}
                                                    </p>
                                                    <hr />



                                                    <div class="note-description-content">
                                                        <p class="note-description">
                                                            {{ $task->meals->pluck('name')->implode('、') }}
                                                        </p>
                                                        <p class="note-description">
                                                            {{ $task->projects->pluck('name')->implode('、') }}
                                                        </p>
                                                    </div>
                                                    <hr />
                                                    <p class="meta-time">
                                                        {{ $task->task_date }}
                                                        {{ $task->users->pluck('name')->implode('、') }}
                                                        {{ $task->restaurant->brand }}{{ $task->restaurant->shop }}
                                                    </p>


                                                </div>
                                                <div class="note-action">
                                                    <div class="dropdown d-inline-block">
                                                        <a class="dropdown-toggle" href="#" role="button"
                                                            id="elementDrodpown" data-bs-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="true">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-more-vertical">
                                                                <circle cx="12" cy="12" r="1">
                                                                </circle>
                                                                <circle cx="12" cy="5" r="1">
                                                                </circle>
                                                                <circle cx="12" cy="19" r="1">
                                                                </circle>
                                                            </svg>
                                                        </a>

                                                        <div class="dropdown-menu right"
                                                            aria-labelledby="elementDrodpown"
                                                            style="will-change: transform; position: absolute; transform: translate3d(105px, 0, 0px); top: 0px; left: 0px;">
                                                            <a class="dropdown-item"
                                                                href="{{ route('task-create', ['task' => $task]) }}">開始稽核</a>
                                                            @if ($task->meals->count() > 0)
                                                                <a class="dropdown-item"
                                                                    href="{{ route('task-meal-check', ['task' => $task]) }}">
                                                                    餐點採樣</a>
                                                            @endif
                                                            @if ($task->projects->count() > 0)
                                                                <a class="dropdown-item"
                                                                    href="{{ route('task-project-check', ['task' => $task]) }}">
                                                                    專案執行</a>
                                                            @endif
                                                            <a class="dropdown-item"
                                                                href="{{ route('task-defect-show', ['task' => $task]) }}">
                                                                主管核對</a>
                                                        </div>
                                                    </div>


                                                </div>
                                                <div class="note-footer">
                                                    @if ($task->status == 'completed')
                                                        <span class="badge badge-light-success">已完成</span>
                                                    @elseif($task->status == 'processing')
                                                        <span class="badge badge-light-warning">稽核中</span>
                                                    @else
                                                        <span class="badge badge-light-secondary">未稽核</span>
                                                    @endif

                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                            </div>

                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="notesMailModal" tabindex="-1" role="dialog"
                            aria-labelledby="notesMailModalTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title add-title" id="notesMailModalTitleeLabel">Add Task</h5>
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
                                        <div class="notes-box">
                                            <div class="notes-content">

                                                <form action="javascript:void(0);" id="notesMailModalTitle">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="d-flex note-title">
                                                                <input type="text" id="n-title"
                                                                    class="form-control" maxlength="25"
                                                                    placeholder="Title">
                                                            </div>
                                                            <span class="validation-text"></span>
                                                        </div>

                                                        <div class="col-md-12">
                                                            <div class="d-flex note-description">
                                                                <textarea id="n-description" class="form-control" maxlength="60" placeholder="Description" rows="3"></textarea>
                                                            </div>
                                                            <span class="validation-text"></span>
                                                            <span class="d-inline-block mt-1 text-danger">Maximum Limit
                                                                60 characters</span>
                                                        </div>
                                                    </div>

                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button id="btn-n-save" class="float-left btn">Save</button>
                                        <button class="btn" data-bs-dismiss="modal">Discard</button>
                                        <button id="btn-n-add" class="btn btn-primary">Add</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!--  BEGIN CUSTOM SCRIPTS FILE  -->
                <x-slot:footerFiles>
                    <script src="{{ asset('plugins/global/vendors.min.js') }}"></script>
                    @vite(['resources/assets/js/apps/notes.js'])
                    </x-slot>
                    <!--  END CUSTOM SCRIPTS FILE  -->
</x-base-layout>
