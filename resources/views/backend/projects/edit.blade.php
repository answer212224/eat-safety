<x-base-layout :scrollspy="false">
    <x-slot:pageTitle>
        {{ $title }}
    </x-slot:pageTitle>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <x-slot:headerFiles>
        <!--  BEGIN CUSTOM STYLE FILE  -->
        @vite(['resources/scss/light/assets/apps/blog-create.scss'])
        @vite(['resources/scss/dark/assets/apps/blog-create.scss'])


        <!--  END CUSTOM STYLE FILE  -->
    </x-slot:headerFiles>
    <!-- END GLOBAL MANDATORY STYLES -->


    <div class="page-meta">
        <nav class="breadcrumb-style-one" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">資料</a></li>
                <li class="breadcrumb-item"><a href="{{ route('meal-index') }}">專案資料</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
            </ol>
        </nav>
    </div>
    <form action="{{ route('project-update', ['project' => $project]) }}" method="post">
        @method('PUT')
        @csrf
        <div class="row layout-top-spacing">
            <div class="col-lg-9 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-content widget-content-area">


                        <div class="row">
                            <div class="col-lg-6">

                                <div class="input-group mb-3">
                                    <span class="input-group-text">名稱</span>
                                    <input type="text" class="form-control" value="{{ $project->name }}"
                                        name="name" required>
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text">細項</span>
                                    <input type="text" class="form-control" value="{{ $project->description }}"
                                        name="description" required>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-content widget-content-area">
                        <button type="submit" class="btn btn-outline-success w-100 mb-3">更新</button>
                        <a class="btn btn-outline-dark w-100" href="{{ url()->previous() }}">上一頁</a>
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
