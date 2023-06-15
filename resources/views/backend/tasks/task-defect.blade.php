<x-base-layout :scrollspy="false">

    <x-slot:pageTitle>
        {{ $title }}
    </x-slot:pageTitle>


    <x-slot:headerFiles>
        <!--  BEGIN CUSTOM STYLE FILE  -->
        <!--  END CUSTOM STYLE FILE  -->
    </x-slot:headerFiles>


    <div class="page-meta">
        <nav class="breadcrumb-style-one" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">稽核任務</a></li>
                <li class="breadcrumb-item" aria-current="page"><a href="{{ route('task-list') }}">稽核任務列表</a></li>
                @if (Request::routeIs('task-defect-show'))
                    <li class="breadcrumb-item active" aria-current="page">主管核對</li>
                @else
                    <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
                @endif
            </ol>
        </nav>
    </div>

    <div class="row layout-top-spacing">

    </div>

    <div class="row">
        <div class="col-xxl-9 col-xl-12 col-lg-12 col-md-12 col-sm-12">
            @foreach ($defectsGroup as $defects)
                <a class="btn btn-outline-secondary my-1 d-grid gap-2" data-bs-toggle="collapse"
                    href="#collapseExample{{ $defects[0]->id }}" aria-expanded="true">
                    {{ $defects[0]->restaurantWorkspace->area }}
                </a>
                <div class="collapse my-1" id="collapseExample{{ $defects[0]->id }}">
                    @foreach ($defects as $taskHasDefect)
                        <div class="card style-2 mb-4">
                            @foreach ($taskHasDefect->images as $image)
                                <img src="{{ asset('storage/' . $image) }}" class="card-img-top my-1" alt="...">
                            @endforeach
                            // TODO: 還沒做清檢編輯
                            @if ($task->category == '清潔檢查')
                                <a href="">
                                    <div class="card-body px-0 pb-0">

                                        <p>主項目 : {{ $taskHasDefect->clearDefect->main_item }}</p>
                                        <p>次項目 : {{ $taskHasDefect->clearDefect->sub_item }}</p>
                                        <p>缺失說明 : {{ collect($taskHasDefect->description)->implode('、') }}</p>
                                        <p>數量 : {{ $taskHasDefect->amount }}</p>
                                        <p>忽略扣分 : {{ $taskHasDefect->is_ignore ? '是' : '否' }}</p>
                                        <p>備註 : {{ $taskHasDefect->memo }}</p>

                                        <div class="media mt-4 mb-0 pt-1">
                                            <div class="media-body">
                                                <p class="media-heading mb-1">同仁 : {{ $taskHasDefect->user->name }}</p>
                                                <p class="media-text">時間 : {{ $taskHasDefect->updated_at }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            @else
                                <a href="{{ route('task-defect-edit', ['taskHasDefect' => $taskHasDefect]) }}">
                                    <div class="card-body px-0 pb-0">
                                        <p>缺失分類 : {{ $taskHasDefect->defect->group }}</p>
                                        <p>子項目 : {{ $taskHasDefect->defect->title }}</p>
                                        <p>稽核標準 : {{ $taskHasDefect->defect->description }}</p>
                                        <p>報告呈現說明 : {{ $taskHasDefect->defect->report_description }}</p>
                                        <p class="media-heading mb-1">扣分 : {{ $taskHasDefect->defect->deduct_point }}
                                        </p>
                                        <p>忽略扣分 : {{ $taskHasDefect->is_ignore ? '是' : '否' }}</p>
                                        <p>備註 : {{ $taskHasDefect->memo }}</p>
                                        <div class="media mt-4 mb-0 pt-1">
                                            <div class="media-body">
                                                <p class="media-heading mb-1">同仁 : {{ $taskHasDefect->user->name }}</p>
                                                <p class="media-text">時間 : {{ $taskHasDefect->updated_at }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            @endif

                        </div>
                    @endforeach
                </div>
            @endforeach
            @if (Request::routeIs('task-defect-show') || Request::routeIs('task-clear-defect-show'))
                <div class="widget-content widget-content-area blog-create-section mt-4">

                    <h5 class="mb-4">採樣 {{ $task->meals->count() }} 項: </h5>

                    <div class="row mb-4">
                        <div class="col-xxl-12 mb-4">
                            <p>
                                @foreach ($task->meals as $meal)
                                    {{ $meal->name }}#{{ $meal->pivot->memo }}。
                                @endforeach
                            </p>
                        </div>

                    </div>
                    <hr />
                    <h5 class="mb-4">專案 {{ $task->projects->count() }} 項: </h5>

                    <div class="row mb-4">
                        <div class="col-xxl-12">
                            <p class="">
                                {{ $task->projects->pluck('description')->implode('。') }}
                            </p>
                        </div>

                    </div>

                </div>
            @endif

        </div>

        @if (Request::routeIs('task-defect-show') || Request::routeIs('task-clear-defect-show'))
            <div class="col-xxl-3 col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-xxl-0 mt-4">
                <div class="widget-content widget-content-area blog-create-section">
                    <div class="row">
                        <form action="{{ route('task-sign', ['task' => $task]) }}" method="post">
                            @csrf
                            <div class="form-group mb-4">
                                <label for="formGroupExampleInput">外場主管</label>
                                <input type="text" name="outer_manager" class="form-control"
                                    value="{{ $task->outer_manager }}" id="formGroupExampleInput" placeholder="主管姓名"
                                    required>
                            </div>

                            <div class="form-group mb-4">
                                <label for="formGroupExampleInput2">內場主管</label>
                                <input type="text" name="inner_manager" value="{{ $task->inner_manager }}"
                                    class="form-control" id="formGroupExampleInput2" placeholder="主管姓名" required>
                            </div>

                            <button type="submit" class="btn btn-success w-100">核對完成</button>

                        </form>
                    </div>
                </div>
            </div>
        @endif
        <div class="col-xxl-9 col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-4">
            <div class="card">
                <div class="card-body">
                    <a href="{{ route('task-list') }}" class="btn btn-dark w-100">上一頁</a>
                </div>
            </div>
        </div>
    </div>



    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <x-slot:footerFiles>

        </x-slot>
        <!--  END CUSTOM SCRIPTS FILE  -->
</x-base-layout>
