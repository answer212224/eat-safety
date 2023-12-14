<x-base-layout :scrollspy="false">
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

    <form action="{{ route('task-update', ['task' => $task]) }}" method="post" id="formput">
        @method('put')
        @csrf
        <div class="row layout-top-spacing">
            <div id="Task" class="col-lg-8">
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
                                        {{-- 食安及5S複稽 --}}
                                        <div class="n-chk">
                                            <div class="form-check form-check-danger form-check-inline">
                                                <input class="form-check-input" type="radio" name="category" disabled
                                                    @if ($task->category == '食安及5S複稽') checked @endif value="食安及5S複稽"
                                                    id="re">
                                                <label class="form-check-label" for="re">食安及5S複稽</label>
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

            <div id="Action" class="col-lg-4">
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
                                <a class="btn btn-success mb-3" onclick="checkTask({{ $task->id }})">更新</a>
                            @endcan

                            @if ($task->category != '餐點採樣')
                                <a href="{{ route('task-inner-report', ['task' => $task]) }}"
                                    class="btn btn-info mb-3" target="_blank">內場稽核報告
                                </a>
                                <a href="{{ route('task-outer-report', ['task' => $task]) }}"
                                    class="btn btn-info mb-3" target="_blank">外場稽核報告
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
