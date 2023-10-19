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
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
        <script src="https://npmcdn.com/flatpickr/dist/flatpickr.min.js"></script>
        <script src="https://npmcdn.com/flatpickr/dist/l10n/zh-tw.js"></script>
        {{-- jq --}}
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
                <li class="breadcrumb-item" aria-current="page"><a href="{{ route('task-assign') }}">稽核行事曆</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
            </ol>
        </nav>
    </div>


    <div id="navSection" data-bs-spy="affix" class="nav sidenav">
        <div class="sidenav-content">
            <a href="#Task" class="active nav-link">稽核任務</a>
            <a href="#Defect" class="nav-link">稽核缺失</a>
            <a href="#Action" class="nav-link">操作</a>
        </div>
    </div>
    <form action="{{ route('task-update', ['task' => $task]) }}" method="post" id="formput">
        @method('put')
        @csrf
        <div class="row layout-top-spacing">
            <div id="Task" class="col-lg-12 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">


                    </div>
                    <div class="widget-content widget-content-area">
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <div class="d-flex">
                                        <div class="form-check form-check-secondary form-check-inline">
                                            <input class="form-check-input" type="radio" name="status"
                                                value="pending" id="form-check-radio-pending"
                                                @if ($task->status == 'pending') checked @endif>
                                            <label class="form-check-label" for="form-check-radio-pending">
                                                未稽核
                                            </label>
                                        </div>
                                        <div class="form-check form-check-warning form-check-inline">
                                            <input class="form-check-input" type="radio" name="status"
                                                id="form-check-radio-processing" value="processing"
                                                @if ($task->status == 'processing') checked @endif>
                                            <label class="form-check-label" for="form-check-radio-processing">
                                                稽核中
                                            </label>
                                        </div>
                                        <div class="form-check form-check-danger form-check-inline">
                                            <input class="form-check-input" type="radio" name="status"
                                                id="form-check-radio-pending_approval" value="pending_approval"
                                                @if ($task->status == 'pending_approval') checked @endif>
                                            <label class="form-check-label" for="form-check-radio-pending_approval">
                                                待核對
                                            </label>
                                        </div>
                                        <div class="form-check form-check-success form-check-inline">
                                            <input class="form-check-input" type="radio" name="status"
                                                id="form-check-radio-completed" value="completed"
                                                @if ($task->status == 'completed') checked @endif>
                                            <label class="form-check-label" for="form-check-radio-completed">
                                                已完成
                                            </label>
                                        </div>
                                    </div>
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
                                        id="select-users">
                                        @foreach ($task->users as $user)
                                            <option value="{{ $user->id }}" selected>{{ $user->name }}
                                            </option>
                                        @endforeach
                                        @foreach ($users as $user)
                                            <option value="{{ $user->id }}">{{ $user->name }}
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
                                    <input id="event-start-date" name="task_date" class="form-control flatpickr">
                                </div>

                                <div class="form-group mt-3">
                                    <label>稽核開始時間</label>
                                    <input type="text" name="start_time" class="form-control" disabled
                                        value="{{ $task->start_at }}">
                                </div>

                                <div class="form-group mt-3">
                                    <label>稽核結束時間</label>
                                    <input type="text" name="end_time" class="form-control" disabled
                                        value="{{ $task->end_at }}">
                                </div>

                                <div class="form-group mt-3">
                                    <label class="form-label">內場分數</label>
                                    <input type="text" value="{{ 100 + $backScore }}" class="form-control"
                                        disabled>
                                </div>

                                <div class="form-group mt-3">
                                    <label class="form-label">外場分數</label>
                                    <input type="text" value="{{ 100 + $frontScore }}" class="form-control"
                                        disabled>
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
                                    <select multiple class="form-control" name='meals[]' id="select-meals">
                                        @foreach ($task->meals as $meal)
                                            <option value="{{ $meal->id }}" selected>
                                                @if ($meal->pivot->is_taken)
                                                    已採樣:
                                                    @endif{{ $meal->name }}@if (isset($meal->pivot->memo))
                                                        #{{ $meal->pivot->memo }}
                                                    @endif
                                            </option>
                                        @endforeach
                                        @foreach ($meals as $meal)
                                            <option value="{{ $meal->id }}">
                                                {{ $meal->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group mt-3">
                                    <label class="form-label">專案</label>
                                    <select multiple class="form-control" name='projects[]' id="select-projects">
                                        @foreach ($task->projects as $project)
                                            <option value="{{ $project->id }}" selected>
                                                @if ($project->pivot->is_checked)
                                                    已執行:
                                                @endif{{ $project->description }}
                                            </option>
                                        @endforeach
                                        @foreach ($projects as $project)
                                            <option value="{{ $project->id }}">
                                                {{ $project->description }}
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
                                            @if ($task->category == '食安及5S')
                                                <div class="card-body px-0 pb-0">
                                                    <div class="row p-1">
                                                        <div class="col-3">照片</div>
                                                        <div class="col-9">
                                                            @foreach ($taskHasDefect->images as $image)
                                                                <img src="{{ asset('storage/' . $image) }}"
                                                                    class="card-img-top my-1" alt="...">
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                    <div class="row p-1">
                                                        <div class="col-3">缺失分類</div>
                                                        <div class="col-9">
                                                            {{ $taskHasDefect->defect->group }}
                                                        </div>
                                                    </div>
                                                    <div class="row p-1">
                                                        <div class="col-3">子項目</div>
                                                        <div class="col-9">
                                                            {{ $taskHasDefect->defect->title }}
                                                        </div>
                                                    </div>
                                                    <div class="row p-1">
                                                        <div class="col-3">稽核標準</div>
                                                        <div class="col-9">
                                                            {{ $taskHasDefect->defect->description }}
                                                        </div>
                                                    </div>
                                                    <div class="row p-1">
                                                        <div class="col-3">扣分</div>
                                                        <div class="col-9">
                                                            {{ $taskHasDefect->defect->deduct_point }}
                                                        </div>
                                                    </div>
                                                    <div class="row p-1">
                                                        <div class="col-3">忽略扣分</div>
                                                        <div class="col-9">
                                                            {{ $taskHasDefect->is_ignore ? '是' : '否' }}
                                                        </div>
                                                    </div>
                                                    <div class="row p-1">
                                                        <div class="col-3">稽核人員</div>
                                                        <div class="col-9">
                                                            {{ $taskHasDefect->user->name }}
                                                        </div>
                                                    </div>
                                                    <div class="row p-1">
                                                        <div class="col-3">建立時間</div>
                                                        <div class="col-9">
                                                            {{ $taskHasDefect->created_at }}
                                                        </div>
                                                    </div>

                                                    <div class="row p-1">
                                                        <div class="col-3">備註</div>
                                                        <div class="col-9">
                                                            {{ $taskHasDefect->memo }}
                                                        </div>
                                                    </div>

                                                </div>
                                            @else
                                                <div class="card-body px-0 pb-0">
                                                    <div class="row p-1">
                                                        <div class="col-3">照片</div>
                                                        <div class="col-9">
                                                            @foreach ($taskHasDefect->images as $image)
                                                                <img src="{{ asset('storage/' . $image) }}"
                                                                    class="card-img-top my-1" alt="...">
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                    <div class="row p-1">
                                                        <div class="col-3">主項目</div>
                                                        <div class="col-9">
                                                            {{ $taskHasDefect->clearDefect->main_item }}
                                                        </div>
                                                    </div>
                                                    <div class="row p-1">
                                                        <div class="col-3">次項目</div>
                                                        <div class="col-9">
                                                            {{ $taskHasDefect->clearDefect->sub_item }}
                                                        </div>
                                                    </div>
                                                    <div class="row p-1">
                                                        <div class="col-3">數量</div>
                                                        <div class="col-9">
                                                            {{ $taskHasDefect->amount }}
                                                        </div>
                                                    </div>
                                                    <div class="row p-1">
                                                        <div class="col-3">缺失說明</div>
                                                        <div class="col-9">
                                                            @if ($taskHasDefect->description == null)
                                                                無
                                                            @else
                                                                {{-- array to string --}}
                                                                @foreach ($taskHasDefect->description as $description)
                                                                    {{ $description }}
                                                                @endforeach
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="row p-1">
                                                        <div class="col-3">扣分(計分方式: -2 * 數量)</div>
                                                        <div class="col-9">
                                                            {{ $taskHasDefect->clearDefect->deduct_point * $taskHasDefect->amount }}
                                                        </div>
                                                    </div>
                                                    <div class="row p-1">
                                                        <div class="col-3">忽略扣分</div>
                                                        <div class="col-9">
                                                            {{ $taskHasDefect->is_ignore ? '是' : '否' }}
                                                        </div>
                                                    </div>
                                                    <div class="row p-1">
                                                        <div class="col-3">稽核人員</div>
                                                        <div class="col-9">
                                                            {{ $taskHasDefect->user->name }}
                                                        </div>
                                                    </div>
                                                    <div class="row p-1">
                                                        <div class="col-3">建立時間</div>
                                                        <div class="col-9">
                                                            {{ $taskHasDefect->created_at }}
                                                        </div>
                                                    </div>
                                                    <div class="row p-1">
                                                        <div class="col-3">備註</div>
                                                        <div class="col-9">
                                                            {{ $taskHasDefect->memo }}
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>

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
                            @can('update-task')
                                <a class="btn btn-primary mb-3" onclick="checkTask({{ $task->id }})">更新</a>
                            @endcan

                            @if ($task->status == 'completed' && $task->category != '餐點採樣')
                                <a href="{{ route('task-inner-report', ['task' => $task]) }}"
                                    class="btn btn-info mb-3" target="_blank">內場稽核報告下載
                                </a>
                                <a href="{{ route('task-outer-report', ['task' => $task]) }}"
                                    class="btn btn-info mb-3" target="_blank">外場稽核報告下載
                                </a>
                            @endif

                            <a href="{{ route('task-assign') }}" class="btn btn-dark mb-3">上一頁</a>
                            @can('delete-task')
                                <a href="{{ route('task-delete', ['task' => $task]) }}" class="btn btn-danger"
                                    data-confirm-delete="true">刪除</a>
                            @endcan
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </form>

    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <x-slot:footerFiles>
        <script src="{{ asset('plugins/tomSelect/tom-select.base.js') }}"></script>
        <script>
            new TomSelect("#select-users", {
                maxItems: 3
            });

            new TomSelect("#select-meals");
            new TomSelect("#select-projects");



            document.addEventListener("DOMContentLoaded", () => {
                flatpickr.localize(flatpickr.l10ns.zh_tw);
                flatpickr(".flatpickr");
                flatpickr("#event-start-date", {
                    dateFormat: "Y-m-d H:i",
                    defaultDate: "{{ $task->task_date }}",
                    enableTime: true,
                    hourIncrement: 2,
                    minuteIncrement: 30,
                    time_24hr: true,
                });
            });
        </script>

        <script>
            function checkTask(task) {
                $.ajax({
                    url: "{{ url('api/checkTask') }}/" + task,
                    type: "GET",
                    dataType: "json",

                    data: {
                        "task_date": $("#event-start-date").val(),
                        "users": $("#select-users").val(),
                    },

                    success: function(data) {
                        if (data.status == 'error') {
                            Swal.fire({
                                title: data.message,
                                showDenyButton: true,
                                confirmButtonText: '繼續更新',
                                denyButtonText: `取消更新`,
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    $("#formput").submit();
                                } else if (result.isDenied) {
                                    Swal.fire('變更未儲存', '', 'info')
                                }
                            })
                        } else {
                            $("#formput").submit();
                        }
                    },
                });
            }
        </script>

    </x-slot:footerFiles>
    <!--  END CUSTOM SCRIPTS FILE  -->
</x-base-layout>
