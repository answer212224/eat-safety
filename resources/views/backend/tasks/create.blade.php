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

            <link rel="stylesheet" type="text/css" href="{{ asset('plugins/tomSelect/tom-select.default.min.css') }}">
            @vite(['resources/scss/light/plugins/tomSelect/custom-tomSelect.scss'])
            @vite(['resources/scss/dark/plugins/tomSelect/custom-tomSelect.scss'])

            <link rel="stylesheet" type="text/css"
                href="{{ asset('plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css') }}">
            @vite(['resources/scss/light/plugins/bootstrap-touchspin/custom-jquery.bootstrap-touchspin.min.scss'])
            @vite(['resources/scss/dark/plugins/bootstrap-touchspin/custom-jquery.bootstrap-touchspin.min.scss'])
            {{-- jq cdn --}}
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

            <style>
                input[type="number"]::-webkit-inner-spin-button,
                input[type="number"]::-webkit-outer-spin-button {
                    -webkit-appearance: none;
                    margin: 0;
                }

                /* 隱藏输入框默认样式 */
                input[type="number"] {
                    -moz-appearance: textfield;
                    /* Firefox */
                }
            </style>

            <!--  END CUSTOM STYLE FILE  -->
            </x-slot>
            <!-- END GLOBAL MANDATORY STYLES -->

            <!-- BREADCRUMB -->
            <div class="page-meta">
                <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">稽核任務列表</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $task->category }}</li>
                    </ol>
                </nav>
            </div>
            <!-- /BREADCRUMB -->

            <!-- CONTENT HERE -->

            <div class="row layout-top-spacing">
                <div class="col-xxl-9 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>開始稽核</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <div class="bs-stepper stepper-form-one">
                                <div class="bs-stepper-header" role="tablist">
                                    <div class="step" data-target="#one">
                                        <button type="button" class="step-trigger" role="tab" id="stepper1"
                                            aria-controls="one">
                                            <span class="bs-stepper-circle">1</span>
                                            <span class="bs-stepper-label">上傳照片</span>
                                        </button>
                                    </div>
                                    <div class="line"></div>
                                    <div class="step" data-target="#two">
                                        <button type="button" class="step-trigger" role="tab" id="stepper2"
                                            aria-controls="two">
                                            <span class="bs-stepper-circle">2</span>
                                            <span class="bs-stepper-label">選擇工作區</span>
                                        </button>
                                    </div>
                                    <div class="line"></div>
                                    <div class="step" data-target="#three">
                                        <button type="button" class="step-trigger" role="tab" id="stepper3"
                                            aria-controls="three">
                                            <span class="bs-stepper-circle">3</span>
                                            <span class="bs-stepper-label">
                                                <span class="bs-stepper-title">選擇缺失</span>
                                            </span>
                                        </button>
                                    </div>
                                </div>

                                @if ($task->category == '清潔檢查')
                                    <form action="{{ route('task-clear-defect-store', ['task' => $task->id]) }}"
                                        method="post" enctype="multipart/form-data" id="defect_form">
                                    @else
                                        <form action="{{ route('task-defect-store', ['task' => $task->id]) }}"
                                            method="post" enctype="multipart/form-data" id="defect_form">
                                @endif

                                @csrf
                                <div class="bs-stepper-content">
                                    <div id="one" class="content" role="tabpanel">

                                        {{-- 上傳圖片 --}}
                                        <div class="multiple-file-upload">
                                            <label for="filepond">上傳照片</label>
                                            <input type="file" class="file-upload-multiple" name="filepond[]"
                                                multiple data-allow-reorder="true" data-max-file-size="4MB"
                                                data-max-files="2" id="filepond">
                                        </div>


                                        <div class="button-action mt-5 text-center">
                                            <a class="btn btn-secondary btn-prev me-3" disabled>上一步</a>
                                            <a class="btn btn-secondary btn-nxt" onclick="stepper.next()">下一步</a>
                                        </div>
                                    </div>

                                    <div id="two" class="content" role="tabpanel">

                                        <div class="form-group mb-4">
                                            <label for="workspace">工作區</label>
                                            <select class="form-select" name="workspace" id="inputWorkspace">
                                                @foreach ($task->restaurant->restaurantWorkspaces as $restaurantWorkspace)
                                                    <option value="{{ $restaurantWorkspace->id }}">
                                                        {{ $restaurantWorkspace->area }}</option>
                                                @endforeach
                                            </select>
                                        </div>


                                        <div class="button-action mt-5 text-center">
                                            <a class="btn btn-secondary btn-prev me-3"
                                                onclick="stepper.previous()">上一步</a>
                                            <a class="btn btn-secondary btn-nxt" onclick="stepper.next()">下一步</a>
                                        </div>
                                    </div>
                                    <div id="three" class="content" role="tabpanel">
                                        @if ($task->category == '清潔檢查')
                                            <livewire:cleaning-select :task="$task" />
                                        @else
                                            <livewire:defect-select :task="$task" />
                                        @endif



                                        <div class="button-action mt-3 text-center">
                                            <a class="btn btn-secondary btn-prev me-3"
                                                onclick="stepper.previous()">上一步</a>
                                            <button class="btn btn-success me-3">提交</button>
                                        </div>

                                    </div>

                                </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-xxl-3 col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-xxl-0 mt-4">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{ route('task-list') }}" class="btn btn-dark w-100">上一頁</a>
                        </div>
                    </div>
                </div>

            </div>

            <!--  BEGIN CUSTOM SCRIPTS FILE  -->
            <x-slot:footerFiles>

                <script src="{{ asset('plugins/stepper/bsStepper.min.js') }}"></script>

                <script src="{{ asset('plugins/filepond/filepond.min.js') }}"></script>
                <script src="{{ asset('plugins/filepond/FilePondPluginFileValidateType.min.js') }}"></script>
                <script src="{{ asset('plugins/filepond/FilePondPluginImageExifOrientation.min.js') }}"></script>
                <script src="{{ asset('plugins/filepond/FilePondPluginImagePreview.min.js') }}"></script>
                <script src="{{ asset('plugins/filepond/FilePondPluginImageCrop.min.js') }}"></script>
                <script src="{{ asset('plugins/filepond/FilePondPluginImageResize.min.js') }}"></script>
                <script src="{{ asset('plugins/filepond/FilePondPluginImageTransform.min.js') }}"></script>
                <script src="{{ asset('plugins/filepond/filepondPluginFileValidateSize.min.js') }}"></script>
                {{-- <script src="{{ asset('plugins/filepond/custom-filepond.js') }}"></script> --}}

                <script>
                    FilePond.registerPlugin(
                        FilePondPluginImagePreview,
                        FilePondPluginImageExifOrientation,
                        FilePondPluginFileValidateSize
                        // FilePondPluginImageEdit
                    );


                    window.multifiles = FilePond.create(
                        document.querySelector(".file-upload-multiple"), {
                            labelIdle: `<span class="no-image-placeholder"><i class="flaticon-cloud-upload"></i></span><p class="drag-para">拖曳檔案或<span class="filepond--label-action" tabindex="0">點擊此處上傳</span></p>`,
                        }
                    );

                    FilePond.setOptions({
                        acceptedFileTypes: ["image/png", "image/jpeg", "image/jpg"],
                        server: {
                            url: "/filepond/api",
                            process: "/process",
                            revert: "/process",
                            patch: "?patch=",
                            headers: {
                                "X-CSRF-TOKEN": "{{ csrf_token() }}",
                            },
                        },
                    });

                    var stepperEl = document.querySelector('.bs-stepper')
                    var stepper = new Stepper(stepperEl)
                    // 在下一步時，檢查是否有上傳圖片
                    stepperEl.addEventListener('show.bs-stepper', function(event) {
                        if (event.detail.indexStep == 1) {
                            if (window.multifiles.getFiles().length == 0) {
                                event.preventDefault();
                                alert('請上傳圖片');
                            }
                        }
                    })
                </script>

            </x-slot:footerFiles>
            <!--  END CUSTOM SCRIPTS FILE  -->
</x-base-layout>
