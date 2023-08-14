<x-base-layout :scrollspy="false">

    <x-slot:pageTitle>
        {{ $title }}
    </x-slot:pageTitle>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <x-slot:headerFiles>
        <!--  BEGIN CUSTOM STYLE FILE  -->
        @vite(['resources/scss/light/assets/components/list-group.scss'])
        @vite(['resources/scss/dark/assets/components/list-group.scss'])
        <!--  END CUSTOM STYLE FILE  -->
    </x-slot:headerFiles>
    <!-- END GLOBAL MANDATORY STYLES -->


    <div class="page-meta">
        <nav class="breadcrumb-style-one" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">稽核任務</a></li>
                <li class="breadcrumb-item" aria-current="page"><a href="{{ route('task-list') }}">稽核清單</a></li>
                <li class="breadcrumb-item active" aria-current="page">開始採樣</li>
            </ol>
        </nav>
    </div>

    <div class="row layout-top-spacing">
    </div>
    <form action="{{ route('task-meal-submit', ['task' => $task]) }}" method="post">
        @csrf


        <div class="row">
            @foreach ($task->meals as $meal)
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-4">
                    <div class="card">
                        <div class="card-body">

                            <h5 class="card-title">名稱: {{ $meal->name }}</h5>




                            <h6 class="card-subtitle mb-2 text-muted">編號: {{ $meal->qno }}</h6>
                            <h6 class="card-subtitle mb-2 text-muted">區站: {{ $meal->workspace }}</h6>
                            <div class="card-text">
                                <div class="form-check form-switch form-check-inline">
                                    <input class="form-check-input" type="checkbox" role="switch" name="is_takens[]"
                                        value="{{ $meal->id }}" id="flexSwitchCheckDefault"
                                        @if ($meal->pivot->is_taken) checked @endif>
                                    <label class="form-check-label" for="flexSwitchCheckDefault">是否有採樣，若無請填寫原因</label>
                                </div>
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text">#</span>
                                <input type="text" class="form-control" name="memos[{{ $meal->id }}]"
                                    placeholder="請填寫原因" aria-label="Username" value="{{ $meal->pivot->memo }}">
                            </div>
                        </div>
                        <div class="card-footer">
                            <h6 class="card-subtitle mb-2 text-muted">備註: {{ $meal->note }}</h6>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <button type="submit" class="btn btn-success w-100 mb-3">提交</button>
                        <a href="{{route('task-meal-export',['task' => $task])}}" class="btn btn-dark w-100 mb-3">採樣單下載</a>
                        <a href="{{ route('task-list') }}" class="btn btn-dark w-100">上一頁</a>
                    </div>
                </div>
            </div>

        </div>
    </form>
    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <x-slot:footerFiles>

    </x-slot:footerFiles>
    <!--  END CUSTOM SCRIPTS FILE  -->
</x-base-layout>
