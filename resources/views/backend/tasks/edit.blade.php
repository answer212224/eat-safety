<x-base-layout :scrollspy="true">
    <x-slot:pageTitle>
        {{ $title }}
    </x-slot:pageTitle>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <x-slot:headerFiles>
        <!--  BEGIN CUSTOM STYLE FILE  -->
        @vite(['resources/scss/light/assets/apps/blog-create.scss'])
        @vite(['resources/scss/dark/assets/apps/blog-create.scss'])

        <link rel="stylesheet" type="text/css" href="{{ asset('plugins/tomSelect/tom-select.default.min.css') }}">
        @vite(['resources/scss/light/plugins/tomSelect/custom-tomSelect.scss'])
        @vite(['resources/scss/dark/plugins/tomSelect/custom-tomSelect.scss'])
        <!--  END CUSTOM STYLE FILE  -->
    </x-slot:headerFiles>
    <!-- END GLOBAL MANDATORY STYLES -->
    <x-slot:scrollspyConfig>
        data-bs-spy="scroll" data-bs-target="#navSection" data-bs-offset="100"
        </x-slot>

        <div class="page-meta">
            <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">稽核任務</a></li>
                    <li class="breadcrumb-item" aria-current="page"><a href="{{ route('task-assign') }}">指派稽核</a></li>
                    <li class="breadcrumb-item active" aria-current="page">稽核詳細</li>
                </ol>
            </nav>
        </div>


        <div id="navSection" data-bs-spy="affix" class="nav sidenav">
            <div class="sidenav-content">
                <a href="#Task" class="active nav-link">稽核任務</a>

                <a href="#Defect" class="nav-link">稽核缺失</a>

                @can('delete-task')
                    <a href="#Action" class="nav-link">操作</a>
                @endcan

            </div>
        </div>

        <div class="row layout-top-spacing">
            <div id="Task" class="col-lg-12 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <livewire:task-status-change :task="$task">
                    </div>
                    <div class="widget-content widget-content-area">
                        <div class="row">
                            <div class="col-lg-6 col-12">

                                <div class="form-group">
                                    <div class="d-flex">
                                        <div class="n-chk">
                                            <div class="form-check form-check-primary form-check-inline">
                                                <input class="form-check-input" type="radio" name="category" disabled
                                                    @if ($task->category == '食安及5S') checked @endif value="食安及5S"
                                                    id="rwork">
                                                <label class="form-check-label" for="rwork">食安及5S</label>
                                            </div>
                                        </div>
                                        <div class="n-chk">
                                            <div class="form-check form-check-warning form-check-inline">
                                                <input class="form-check-input" type="radio" name="category" disabled
                                                    @if ($task->category == '清潔檢查') checked @endif value="清潔檢查"
                                                    id="rtravel">
                                                <label class="form-check-label" for="rtravel">清潔檢查</label>
                                            </div>
                                        </div>
                                        <div class="n-chk">
                                            <div class="form-check form-check-success form-check-inline">
                                                <input class="form-check-input" type="radio" name="category" disabled
                                                    @if ($task->category == '餐點採樣') checked @endif value="餐點採樣"
                                                    id="rtravel">
                                                <label class="form-check-label" for="rtravel">餐點採樣</label>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="form-group mt-3">
                                    <label class="form-label">選擇稽核員</label>
                                    <select class="form-control" name="users[]" multiple autocomplete="off" required
                                        id="select-users" disabled>
                                        @foreach ($task->users as $user)
                                            <option value="{{ $user->id }}" selected>{{ $user->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>


                                <div class="form-group mt-3">
                                    <label class="form-label">選擇分店代號</label>
                                    <select class="form-control" name="restaurant_id" placeholder="選擇分店代號..."
                                        autocomplete="off" id="select-sid" required disabled>
                                        <option value="{{ $task->restaurant->id }}" selected>
                                            {{ $task->restaurant->sid }} {{ $task->restaurant->brand }}
                                            {{ $task->restaurant->shop }}
                                        </option>
                                    </select>
                                </div>

                                <div class="form-group mt-3">
                                    <label class="form-label">稽核日期</label>
                                    <input id="event-start-date" name="task_date" type="date" class="form-control"
                                        disabled value="{{ $task->task_date }}">
                                </div>

                                <div class="form-group mt-3">
                                    <label class="form-label">分數</label>
                                    <input type="text" value="{{ $task->total }}" class="form-control" disabled>
                                </div>

                                <div class="form-group mt-3">
                                    <label class="form-label">外場主管</label>
                                    <input type="text" value="{{ $task->outer_manager }}" class="form-control"
                                        disabled>
                                </div>

                                <div class="form-group mt-3">
                                    <label class="form-label">內場主管</label>
                                    <input type="text" value="{{ $task->inner_manager }}" class="form-control"
                                        disabled>
                                </div>
                            </div>

                            <div class="col-lg-6 col-12 ">

                                <div class="form-group mt-3">
                                    <label class="form-label">採樣</label>
                                    <select multiple class="form-control" name='defaltMeals[]' id="select-meals"
                                        disabled>
                                        @foreach ($task->meals as $meal)
                                            <option value="{{ $meal->id }}" selected>{{ $meal->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group mt-3">
                                    <label class="form-label">專案</label>
                                    <select multiple class="form-control" name='defaltMeals[]' id="select-projects"
                                        disabled>
                                        @foreach ($task->projects as $project)
                                            <option value="{{ $project->id }}" selected>{{ $project->description }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>



                        </div>

                    </div>
                </div>


            </div>


            <div id="Defect" class="col-lg-12 layout-spacing mt-4">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>稽核缺失</h4>
                            </div>

                        </div>
                    </div>
                    <div class="widget-content widget-content-area">

                        <div class="row">
                            @foreach ($defectsGroup as $defects)
                                <a class="btn btn-outline-secondary my-1 d-grid gap-2" data-bs-toggle="collapse"
                                    href="#collapseExample{{ $defects[0]->id }}" aria-expanded="true">
                                    {{ $defects[0]->restaurantWorkspace->area }}
                                </a>
                                <div class="collapse show my-1" id="collapseExample{{ $defects[0]->id }}">
                                    @foreach ($defects as $taskHasDefect)
                                        <div class="card style-2 mb-4">
                                            @foreach ($taskHasDefect->images as $image)
                                                <a href="{{ asset('storage/' . $image) }}"><img
                                                        src="{{ asset('storage/' . $image) }}"
                                                        class="card-img-top my-1" alt="..."></a>
                                            @endforeach

                                            <a
                                                href="{{ route('task-defect-edit', ['taskHasDefect' => $taskHasDefect]) }}">
                                                <div class="card-body px-0 pb-0">
                                                    <h5 class="card-title mb-3">
                                                        {{ $taskHasDefect->defect->group }}
                                                    </h5>
                                                    <h6>{{ $taskHasDefect->defect->title }}</h6>
                                                    <p>{{ $taskHasDefect->defect->description }}</p>
                                                    <div class="media mt-4 mb-0 pt-1">
                                                        {{-- <img src="" class="card-media-image me-3" alt=""> --}}
                                                        <div class="media-body">
                                                            <h4 class="media-heading mb-1">
                                                                {{ $taskHasDefect->user->name }}</h4>
                                                            <p class="media-text">
                                                                {{ $taskHasDefect->created_at }}</p>

                                                        </div>
                                                    </div>
                                                </div>
                                            </a>


                                        </div>
                                    @endforeach
                                </div>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
            @can('delete-task')
                <div id="Action" class="col-lg-12 layout-spacing mt-4">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>操作</h4>
                                </div>
                            </div>
                        </div>

                        <div class="widget-content widget-content-area">
                            <div class="row">
                                <a href="{{ route('task-delete', ['task' => $task]) }}" class="btn btn-danger"
                                    data-confirm-delete="true">刪除</a>
                            </div>
                        </div>


                    </div>
                </div>
            @endcan
        </div>


        <!--  BEGIN CUSTOM SCRIPTS FILE  -->
        <x-slot:footerFiles>
            <script src="{{ asset('plugins/tomSelect/tom-select.base.js') }}"></script>
            <script>
                new TomSelect("#select-users", {
                    maxItems: 2
                });

                new TomSelect("#select-meals");
                new TomSelect("#select-projects");
            </script>
        </x-slot:footerFiles>
        <!--  END CUSTOM SCRIPTS FILE  -->
</x-base-layout>
