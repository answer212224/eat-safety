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
                            @if ($task->category == '清潔檢查')
                                <div class="card-body px-0 pb-0">
                                    <div class="row p-1">
                                        <div class="col-3">照片</div>
                                        <div class="col-9">
                                            @foreach ($taskHasDefect->images as $image)
                                                <img src="{{ asset('storage/' . $image) }}" class="card-img-top my-1"
                                                    alt="...">
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
                                    <div class="row p-1">
                                        <div class="col-3"></div>
                                        <div class="col-9">
                                            <a
                                                href="{{ route('task-clear-defect-edit', ['taskHasDefect' => $taskHasDefect]) }}">
                                                <button class="btn btn-primary">編輯</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="card-body px-0 pb-0">
                                    <div class="row p-1">
                                        <div class="col-3">照片</div>
                                        <div class="col-9">
                                            @foreach ($taskHasDefect->images as $image)
                                                <img src="{{ asset('storage/' . $image) }}" class="card-img-top my-1"
                                                    alt="...">
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
                                    {{-- 編輯 --}}
                                    {{-- <a href="{{ route('task-defect-edit', ['taskHasDefect' => $taskHasDefect]) }}"> --}}
                                    <div class="row p-1">
                                        <div class="col-3"></div>
                                        <div class="col-9">
                                            <a
                                                href="{{ route('task-defect-edit', ['taskHasDefect' => $taskHasDefect]) }}">
                                                <button class="btn btn-primary">編輯</button>
                                            </a>
                                        </div>
                                    </div>


                                </div>
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
                                    value="{{ $task->outer_manager }}" id="formGroupExampleInput" placeholder=""
                                    required>
                            </div>

                            <div class="form-group mb-4">
                                <label for="formGroupExampleInput2">內場主管</label>
                                <input type="text" name="inner_manager" value="{{ $task->inner_manager }}"
                                    class="form-control" id="formGroupExampleInput2" placeholder="" required>
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
