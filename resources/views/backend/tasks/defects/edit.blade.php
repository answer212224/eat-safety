<x-base-layout :scrollspy="false">

    <x-slot:pageTitle>
        {{ $title }}
        </x-slot>

        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <x-slot:headerFiles>
            <!--  BEGIN CUSTOM STYLE FILE  -->

            <link rel="stylesheet" href="{{ asset('plugins/tagify/tagify.css') }}">

            <link rel="stylesheet" href="{{ asset('plugins/filepond/filepond.min.css') }}">
            <link rel="stylesheet" href="{{ asset('plugins/filepond/FilePondPluginImagePreview.min.css') }}">
            @vite(['resources/scss/light/plugins/filepond/custom-filepond.scss'])
            @vite(['resources/scss/dark/plugins/filepond/custom-filepond.scss'])

            @vite(['resources/scss/light/assets/forms/switches.scss'])
            @vite(['resources/scss/light/plugins/editors/quill/quill.snow.scss'])
            @vite(['resources/scss/light/plugins/editors/quill/quill.snow.scss'])
            @vite(['resources/scss/light/plugins/tagify/custom-tagify.scss'])
            @vite(['resources/scss/light/assets/apps/blog-create.scss'])

            @vite(['resources/scss/dark/assets/forms/switches.scss'])
            @vite(['resources/scss/dark/plugins/editors/quill/quill.snow.scss'])
            @vite(['resources/scss/dark/plugins/editors/quill/quill.snow.scss'])
            @vite(['resources/scss/dark/plugins/tagify/custom-tagify.scss'])
            @vite(['resources/scss/dark/assets/apps/blog-create.scss'])

            <link rel="stylesheet" type="text/css" href="{{ asset('plugins/tomSelect/tom-select.default.min.css') }}">
            @vite(['resources/scss/light/plugins/tomSelect/custom-tomSelect.scss'])
            @vite(['resources/scss/dark/plugins/tomSelect/custom-tomSelect.scss'])

            <link rel="stylesheet" type="text/css"
                href="{{ asset('plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css') }}">
            @vite(['resources/scss/light/plugins/bootstrap-touchspin/custom-jquery.bootstrap-touchspin.min.scss'])
            @vite(['resources/scss/dark/plugins/bootstrap-touchspin/custom-jquery.bootstrap-touchspin.min.scss'])
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

            @if ($taskHasDefect->task->category == '清潔檢查')
                <form action="{{ route('task-clear-defect-update', ['taskHasDefect' => $taskHasDefect]) }}"
                    method="post">
                @else
                    <form action="{{ route('task-defect-update', ['taskHasDefect' => $taskHasDefect]) }}"
                        method="post">
            @endif

            @csrf
            <div class="row mb-4 layout-spacing layout-top-spacing">

                <div class="col-xxl-9 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="widget-content widget-content-area blog-create-section mb-4">
                        <label for="workspace">工作區</label>
                        <select class="form-select" name="workspace" id="">
                            @foreach ($taskHasDefect->task->restaurant->restaurantWorkspaces as $restaurantWorkspace)
                                @if ($taskHasDefect->restaurant_workspace_id == $restaurantWorkspace->id)
                                    <option value="{{ $restaurantWorkspace->id }}" selected>
                                        {{ $restaurantWorkspace->area }}</option>
                                @else
                                    <option value="{{ $restaurantWorkspace->id }}">
                                        {{ $restaurantWorkspace->area }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>

                    <div class="widget-content widget-content-area blog-create-section">
                        @if ($taskHasDefect->task->category == '清潔檢查')
                            <livewire:cleaning-select :taskHasDefect="$taskHasDefect" />
                        @else
                            <livewire:defect-select :taskHasDefect="$taskHasDefect" />
                        @endif
                    </div>
                </div>

                <div class="col-xxl-3 col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-xxl-0 mt-4">
                    <div class="widget-content widget-content-area blog-create-section">
                        <div class="row">

                            <div class="col-xxl-12 col-md-12 mb-4">
                                <label for="product-images">缺失照片</label>
                                <div class="multiple-file-upload">
                                    <input type="file" class="file-upload-multiple" name="filepond[]"
                                        id="product-images" multiple data-allow-reorder="true" data-max-file-size="10MB"
                                        data-max-files="2">
                                </div>
                            </div>

                            <div class="col-xxl-12 col-sm-4 col-12 mx-auto">
                                <button class="btn btn-success w-100">更新</button>
                                <a href="{{ url()->previous() }}" class="btn btn-dark w-100 my-3">上一頁</a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            </form>

            <div class="col-xxl-3 col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-xxl-0 mt-4">
                <div class="widget-content widget-content-area blog-create-section">
                    <div class="row">
                        @if ($taskHasDefect->task->category == '清潔檢查')
                            <form action="{{ route('task-clear-defect-delete', ['taskHasDefect' => $taskHasDefect]) }}"
                                method="post">
                            @else
                                <form action="{{ route('task-defect-delete', ['taskHasDefect' => $taskHasDefect]) }}"
                                    method="post">
                        @endif

                        @csrf
                        <div class="col-xxl-12 col-sm-4 col-12 mx-auto">
                            <button class="btn btn-danger w-100">刪除</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--  BEGIN CUSTOM SCRIPTS FILE  -->
            <x-slot:footerFiles>
                <script src="{{ asset('plugins/editors/quill/quill.js') }}"></script>
                <script src="{{ asset('plugins/filepond/filepond.min.js') }}"></script>
                <script src="{{ asset('plugins/filepond/FilePondPluginFileValidateType.min.js') }}"></script>
                <script src="{{ asset('plugins/filepond/FilePondPluginImageExifOrientation.min.js') }}"></script>
                <script src="{{ asset('plugins/filepond/FilePondPluginImagePreview.min.js') }}"></script>
                <script src="{{ asset('plugins/filepond/FilePondPluginImageCrop.min.js') }}"></script>
                <script src="{{ asset('plugins/filepond/FilePondPluginImageResize.min.js') }}"></script>
                <script src="{{ asset('plugins/filepond/FilePondPluginImageTransform.min.js') }}"></script>
                <script src="{{ asset('plugins/filepond/filepondPluginFileValidateSize.min.js') }}"></script>


                <script src="{{ asset('plugins/tagify/tagify.min.js') }}"></script>
                <script src="{{ asset('plugins/filepond/custom-filepond.js') }}?20230602"></script>
                <script type="module">

                    @foreach ($taskHasDefect->images as $image)
                        multifiles.addFiles('{{ asset('storage/' . $image) }}');
                    @endforeach


                </script>
                </x-slot>
                <!--  END CUSTOM SCRIPTS FILE  -->
</x-base-layout>
