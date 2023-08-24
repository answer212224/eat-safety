<x-base-layout :scrollspy="true">
    <x-slot:pageTitle>
        {{ $title }}
    </x-slot:pageTitle>
    
    <x-slot:headerFiles>
        @vite(['resources/scss/light/assets/apps/blog-create.scss'])
        @vite(['resources/scss/dark/assets/apps/blog-create.scss'])
    </x-slot:headerFiles>

    <x-slot:scrollspyConfig>
        data-bs-spy="scroll" data-bs-target="#navSection" data-bs-offset="100"
    </x-slot:scrollspyConfig>

     <!-- BREADCRUMB -->
     <div class="page-meta">
        <nav class="breadcrumb-style-one" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('restaurant-index') }}">資料</a></li>
                <li class="breadcrumb-item"><a href="{{ route('restaurant-index') }}">門市資料</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $restaurant->brand }} - {{ $restaurant->shop }}</li>
            </ol>
        </nav>
    </div>
    <!-- /BREADCRUMB -->

    <!-- BEGIN PAGE LEVEL STYLES -->
    <div id="navSection" data-bs-spy="affix" class="nav sidenav">
        <div class="sidenav-content">
            @foreach($restaurant->restaurantWorkspaces as $restaurantWorkspace)
                <a href="#{{ $restaurantWorkspace->id }}" class="nav-link">{{ $restaurantWorkspace->area }}</a>
            @endforeach
        </div>
    </div>
    <!-- END PAGE LEVEL STYLES -->

    <div class="row layout-top-spacing">
        @foreach($restaurant->restaurantWorkspaces as $restaurantWorkspace)
            <h3 id="{{ $restaurantWorkspace->id }}" class="border-left">{{ $restaurantWorkspace->area }}</h3>
            @foreach($restaurantWorkspace->taskHasClearDefects as $taskHasClearDefect)
                <div class="card style-2 mb-4">
                    <div class="card-body px-0 pb-0">
                        <div class="row">
                            <div class="col-3">照片</div>
                            <div class="col-9">
                                @foreach ($taskHasClearDefect->images as $image)
                                    <img src="{{ asset('storage/' . $image) }}"
                                        class="card-img-top my-1" alt="...">
                                @endforeach
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-3">主項目</div>
                            <div class="col-9">
                                {{ $taskHasClearDefect->clearDefect->main_item }}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">次項目</div>
                            <div class="col-9">
                                {{ $taskHasClearDefect->clearDefect->sub_item }}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">數量</div>
                            <div class="col-9">
                                {{ $taskHasClearDefect->amount }}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">扣分(計分方式: -2 * 數量)</div>
                            <div class="col-9">
                                {{ $taskHasClearDefect->clearDefect->deduct_point * $taskHasClearDefect->amount }}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">忽略扣分</div>
                            <div class="col-9">
                                {{ $taskHasClearDefect->is_ignore ? '是' : '否' }}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">稽核人員</div>
                            <div class="col-9">
                                {{ $taskHasClearDefect->user->name }}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">建立時間</div>
                            <div class="col-9">
                                {{ $taskHasClearDefect->created_at }}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">備註</div>
                            <div class="col-9">
                                {{ $taskHasClearDefect->memo }}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endforeach
    </div>

    <x-slot:footerFiles>
    </x-slot:footerFiles>    
</x-base-layout>