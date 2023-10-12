<x-base-layout :scrollspy="true">
    <x-slot:pageTitle>
        {{ $title }}
    </x-slot:pageTitle>

    <x-slot:headerFiles>
        @vite(['resources/scss/light/assets/apps/blog-create.scss'])
        @vite(['resources/scss/dark/assets/apps/blog-create.scss'])
        {{-- flatpickr --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr@latest/dist/plugins/monthSelect/style.css">
    </x-slot:headerFiles>

    <x-slot:scrollspyConfig>
        data-bs-spy="scroll" data-bs-target="#navSection" data-bs-offset="100"
    </x-slot>

    <!-- BREADCRUMB -->
    <div class="page-meta">
        <nav class="breadcrumb-style-one" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('user-index') }}">資料</a></li>
                <li class="breadcrumb-item"><a href="{{ route('user-index') }}">同仁資料</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $user->name }}</li>
            </ol>
        </nav>
    </div>
    <!-- /BREADCRUMB -->

    <div class="row layout-top-spacing">
        <div class="col-12">
            <div class="card">
                <div class="card-body w-100">
                    {{-- 篩選月份 --}}
                    <form action="{{ route('user-show', ['user' => $user]) }}" method="get">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">年月</span>
                            </div>
                            <input type="text" class="form-control form-control-sm" name="yearMonth" id="yearMonth"
                                placeholder="" value="{{ request()->yearMonth }}">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">篩選</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- BEGIN PAGE LEVEL STYLES -->
    <div id="navSection" data-bs-spy="affix" class="nav sidenav">
        <div class="sidenav-content">
            <a href="#food" class="active nav-link">食安及5S</a>
            <a href="#clear" class="nav-link">清潔檢查</a>
        </div>
    </div>
    <!-- END PAGE LEVEL STYLES -->



    <div class="row layout-top-spacing">

        <h4 id="food" class="border-left">食安及5S</h4>
        @foreach ($user->taskHasDefects as $taskHasDefect)
            <div class="card style-2 mb-4">

                <div class="card-header">
                    <h4>{{ $taskHasDefect->restaurantWorkspace->restaurant->brand }} -
                        {{ $taskHasDefect->restaurantWorkspace->restaurant->shop }} -
                        {{ $taskHasDefect->restaurantWorkspace->area }}</h4>
                </div>

                <div class="card-body px-0 pb-0">
                    <div class="row">
                        <div class="col-3">照片</div>
                        <div class="col-9">
                            @foreach ($taskHasDefect->images as $image)
                                <img src="{{ asset('storage/' . $image) }}" class="card-img-top my-1" alt="...">
                            @endforeach
                        </div>
                    </div>
                    <div class="row p-1">
                        <div class="col-3">缺失分類</div>
                        <div class="col-9">
                            {{ $taskHasDefect->defect->category }}
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
            </div>
        @endforeach
        <hr>
        <h4 id="clear" class="border-left">清潔檢查</h4>
        @foreach ($user->taskHasClearDefects as $taskHasClearDefect)
            <div class="card style-2 mb-4">
                <div class="card-header">
                    <h4>{{ $taskHasClearDefect->restaurantWorkspace->restaurant->brand }} -
                        {{ $taskHasDefect->restaurantWorkspace->restaurant->shop }} -
                        {{ $taskHasClearDefect->restaurantWorkspace->area }}</h4>
                </div>
                <div class="card-body px-0 pb-0">
                    <div class="row p-1">
                        <div class="col-3">照片</div>
                        <div class="col-9">
                            @foreach ($taskHasClearDefect->images as $image)
                                <img src="{{ asset('storage/' . $image) }}" class="card-img-top my-1" alt="...">
                            @endforeach
                        </div>
                    </div>
                    <div class="row p-1">
                        <div class="col-3">主項目</div>
                        <div class="col-9">
                            {{ $taskHasClearDefect->clearDefect->main_item }}
                        </div>
                    </div>
                    <div class="row p-1">
                        <div class="col-3">次項目</div>
                        <div class="col-9">
                            {{ $taskHasClearDefect->clearDefect->sub_item }}
                        </div>
                    </div>
                    <div class="row p-1">
                        <div class="col-3">描述</div>
                        <div class="col-9">
                            {{-- pluck $taskHasClearDefect->description --}}
                            @foreach ($taskHasClearDefect->description as $description)
                                {{ $description }}
                                @if (!$loop->last)
                                    <br>
                                @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="row p-1">
                        <div class="col-3">數量</div>
                        <div class="col-9">
                            {{ $taskHasClearDefect->amount }}
                        </div>
                    </div>
                    <div class="row p-1">
                        <div class="col-3">扣分(計分方式: -2 * 數量)</div>
                        <div class="col-9">
                            {{ $taskHasClearDefect->clearDefect->deduct_point * $taskHasClearDefect->amount }}
                        </div>
                    </div>
                    <div class="row p-1">
                        <div class="col-3">忽略扣分</div>
                        <div class="col-9">
                            {{ $taskHasClearDefect->is_ignore ? '是' : '否' }}
                        </div>
                    </div>
                    <div class="row p-1">
                        <div class="col-3">建立時間</div>
                        <div class="col-9">
                            {{ $taskHasClearDefect->created_at }}
                        </div>
                    </div>
                    <div class="row p-1">
                        <div class="col-3">備註</div>
                        <div class="col-9">
                            {{ $taskHasClearDefect->memo }}
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <x-slot:footerFiles>
        {{-- flatpickr --}}
        <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
        <script src="https://npmcdn.com/flatpickr/dist/l10n/zh-tw.js"></script>
        {{-- monthSelectPlugin  cdn --}}
        <script src="https://cdn.jsdelivr.net/npm/flatpickr@latest/dist/plugins/monthSelect/index.js"></script>
        <script>
            flatpickr("#yearMonth", {
                "locale": "zh_tw",
                plugins: [
                    new monthSelectPlugin({
                        shorthand: true,
                        dateFormat: "Y-m",
                        altFormat: "M/Y",

                    }),
                ],
                onChange: function(selectedDates, dateStr, instance) {
                    console.log(dateStr);

                }
            });
        </script>
    </x-slot:footerFiles>
</x-base-layout>
