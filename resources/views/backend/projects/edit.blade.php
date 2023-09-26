<x-base-layout :scrollspy="false">
    <x-slot:pageTitle>
        {{ $title }}
    </x-slot:pageTitle>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <x-slot:headerFiles>
        <!--  BEGIN CUSTOM STYLE FILE  -->
        @vite(['resources/scss/light/assets/apps/blog-create.scss'])
        @vite(['resources/scss/dark/assets/apps/blog-create.scss'])
        {{-- flatpickr --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr@latest/dist/plugins/monthSelect/style.css">
        <!--  END CUSTOM STYLE FILE  -->
        {{-- flatpickr --}}
        <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
        <script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/plugins/monthSelect/index.js"></script>
        <script src="https://npmcdn.com/flatpickr/dist/l10n/zh-tw.js"></script>

        <!--  END CUSTOM STYLE FILE  -->
    </x-slot:headerFiles>
    <!-- END GLOBAL MANDATORY STYLES -->


    <div class="page-meta">
        <nav class="breadcrumb-style-one" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">資料</a></li>
                <li class="breadcrumb-item"><a href="{{ route('project-index') }}">專案資料</a></li>
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
                            <div class="input-group mb-3">
                                <span class="input-group-text">專案名稱</span>
                                <input type="text" class="form-control" name="name" required
                                    value="{{ $project->name }}">
                            </div>

                            @livewire('project-defect-month', ['project' => $project])

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-content widget-content-area">
                        <button type="submit" class="btn btn-outline-success w-100 mb-3">更新</button>
                    </div>
                </div>
            </div>
        </div>
    </form>


    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <x-slot:footerFiles>
        <script>
            flatpickr(".yearMonth", {
                "locale": "zh_tw",
                plugins: [
                    new monthSelectPlugin({
                        shorthand: true,
                        dateFormat: "Y-m",
                        altFormat: "M/Y",

                    }),
                ],

            });
        </script>
    </x-slot:footerFiles>
    <!--  END CUSTOM SCRIPTS FILE  -->
</x-base-layout>
