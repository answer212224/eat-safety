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
            @vite(['resources/scss/light/assets/forms/switches.scss'])
            @vite(['resources/scss/dark/assets/forms/switches.scss'])
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
                                                        </svg> 所有任務 </a>
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
                                                </svg> 標籤</p>

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
                                        <livewire:switch-task-user :task="$task" />
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
