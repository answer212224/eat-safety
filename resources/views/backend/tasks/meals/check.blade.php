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
            <div class="col-xxl-9 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">採樣列表</h5>
                        <p>需帶回有</p>

                        <div class="list-group">
                            @foreach ($task->meals as $meal)
                                <label class="list-group-item">
                                    <input name="meals[]" value="{{ $meal->id }}" class="form-check-input"
                                        type="checkbox" @if ($meal->pivot->is_taken) checked @endif>
                                    {{ $meal->name }}
                                </label>
                            @endforeach
                        </div>


                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-xxl-0 mt-4">
                <div class="card">
                    <div class="card-body">
                        <button type="submit" class="btn btn-success w-100 mb-3">提交</button>
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
