<x-base-layout :scrollspy="false">

    <x-slot:pageTitle>
        {{ $title }}
        </x-slot>

        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <x-slot:headerFiles>
            <!--  BEGIN CUSTOM STYLE FILE  -->
            <link rel="stylesheet" href="{{ asset('plugins/stepper/bsStepper.min.css') }}">
            @vite(['resources/scss/light/plugins/stepper/custom-bsStepper.scss'])
            @vite(['resources/scss/dark/plugins/stepper/custom-bsStepper.scss'])
            <link rel="stylesheet" href="{{ asset('plugins/filepond/filepond.min.css') }}">
            <link rel="stylesheet" href="{{ asset('plugins/filepond/FilePondPluginImagePreview.min.css') }}">
            @vite(['resources/scss/light/plugins/filepond/custom-filepond.scss'])
            @vite(['resources/scss/dark/plugins/filepond/custom-filepond.scss'])
            <link rel="stylesheet" href="{{ asset('plugins/stepper/bsStepper.min.css') }}">
            <!--  END CUSTOM STYLE FILE  -->
            </x-slot>
            <!-- END GLOBAL MANDATORY STYLES -->

            <!-- BREADCRUMB -->
            <div class="page-meta">
                <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">稽核任務</a></li>
                        <li class="breadcrumb-item" aria-current="page"><a href="{{ route('task-list') }}">稽核清單</a></li>
                        <li class="breadcrumb-item active" aria-current="page">開始稽核</li>
                    </ol>
                </nav>
            </div>
            <!-- /BREADCRUMB -->

            <!-- CONTENT HERE -->

            <div class="row layout-top-spacing" id="cancel-row">
                <div id="wizard_Default" class="col-xxl-9 col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-4">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>{{ $title }}</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <div class="bs-stepper stepper-form-one">
                                <div class="bs-stepper-header" role="tablist">
                                    <div class="step" data-target="#defaultStep-one">
                                        <button type="button" class="step-trigger" role="tab">
                                            <span class="bs-stepper-circle">1</span>
                                            <span class="bs-stepper-label">上傳照片</span>
                                        </button>
                                    </div>
                                    <div class="line"></div>
                                    <div class="step" data-target="#defaultStep-two">
                                        <button type="button" class="step-trigger" role="tab">
                                            <span class="bs-stepper-circle">2</span>
                                            <span class="bs-stepper-label">選擇工作區</span>
                                        </button>
                                    </div>
                                    <div class="line"></div>
                                    <div class="step" data-target="#defaultStep-three">
                                        <button type="button" class="step-trigger" role="tab">
                                            <span class="bs-stepper-circle">3</span>
                                            <span class="bs-stepper-label">
                                                <span class="bs-stepper-title">選擇缺失</span>
                                            </span>
                                        </button>
                                    </div>
                                </div>


                                <form action="{{ route('task-defect-store', ['task' => $task->id]) }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="bs-stepper-content">
                                        <div id="defaultStep-one" class="content" role="tabpanel">

                                            {{-- 上傳圖片 --}}
                                            <div class="multiple-file-upload">
                                                <label for="filepond">上傳照片</label>
                                                <input type="file" class="file-upload-multiple" name="filepond[]"
                                                    multiple data-allow-reorder="true" data-max-file-size="4MB"
                                                    accept="image/png, image/jpeg, image/gif, image/jpg"
                                                    data-max-files="2">
                                            </div>


                                            <div class="button-action mt-5 text-center">
                                                <a class="btn btn-secondary btn-prev me-3" disabled>上一步</a>
                                                <a class="btn btn-secondary btn-nxt">下一步</a>
                                            </div>
                                        </div>

                                        <div id="defaultStep-two" class="content" role="tabpanel">

                                            <div class="form-group mb-4">
                                                <label for="workspace">工作區</label>
                                                <select class="form-select" name="workspace" id="">
                                                    @foreach ($task->restaurant->restaurantWorkspaces as $restaurantWorkspace)
                                                        <option value="{{ $restaurantWorkspace->id }}">
                                                            {{ $restaurantWorkspace->area }}</option>
                                                    @endforeach
                                                </select>
                                            </div>


                                            <div class="button-action mt-5 text-center">
                                                <a class="btn btn-secondary btn-prev me-3">上一步</a>
                                                <a class="btn btn-secondary btn-nxt">下一步</a>
                                            </div>
                                        </div>
                                        <div id="defaultStep-three" class="content" role="tabpanel">

                                            <livewire:defect-select />


                                            <div class="button-action mt-3 text-center">
                                                <a class="btn btn-secondary btn-prev me-3">上一步</a>
                                                <button class="btn btn-success me-3">提交</button>
                                            </div>

                                        </div>

                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>



            </div>

            <!--  BEGIN CUSTOM SCRIPTS FILE  -->
            <x-slot:footerFiles>

                <script src="{{ asset('plugins/stepper/bsStepper.min.js') }}"></script>
                <script src="{{ asset('plugins/stepper/custom-bsStepper.min.js') }}"></script>
                <script src="{{ asset('plugins/filepond/filepond.min.js') }}"></script>
                <script src="{{ asset('plugins/filepond/FilePondPluginFileValidateType.min.js') }}"></script>
                <script src="{{ asset('plugins/filepond/FilePondPluginImageExifOrientation.min.js') }}"></script>
                <script src="{{ asset('plugins/filepond/FilePondPluginImagePreview.min.js') }}"></script>
                <script src="{{ asset('plugins/filepond/FilePondPluginImageCrop.min.js') }}"></script>
                <script src="{{ asset('plugins/filepond/FilePondPluginImageResize.min.js') }}"></script>
                <script src="{{ asset('plugins/filepond/FilePondPluginImageTransform.min.js') }}"></script>
                <script src="{{ asset('plugins/filepond/filepondPluginFileValidateSize.min.js') }}"></script>


                <script src="{{ asset('plugins/filepond/custom-filepond.js') }}?20230602"></script>

                </x-slot>
                <!--  END CUSTOM SCRIPTS FILE  -->
</x-base-layout>
