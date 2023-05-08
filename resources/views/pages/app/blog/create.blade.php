<x-base-layout :scrollspy="false">

    <x-slot:pageTitle>
        {{$title}} 
    </x-slot>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <x-slot:headerFiles>
        <!--  BEGIN CUSTOM STYLE FILE  -->
        <link rel="stylesheet" href="{{asset('plugins/filepond/filepond.min.css')}}">
        <link rel="stylesheet" href="{{asset('plugins/filepond/FilePondPluginImagePreview.min.css')}}">
        <link rel="stylesheet" href="{{asset('plugins/tagify/tagify.css')}}">

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
        <!--  END CUSTOM STYLE FILE  -->
    </x-slot>
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BREADCRUMB -->
    <div class="page-meta">
        <nav class="breadcrumb-style-one" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">App</a></li>
                <li class="breadcrumb-item"><a href="#">Blog</a></li>
                <li class="breadcrumb-item active" aria-current="page">Create</li>
            </ol>
        </nav>
    </div>
    <!-- /BREADCRUMB -->

    <div class="row mb-4 layout-spacing layout-top-spacing">

        <div class="col-xxl-9 col-xl-12 col-lg-12 col-md-12 col-sm-12">

            <div class="widget-content widget-content-area blog-create-section">

                <div class="row mb-4">
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="post-title" placeholder="Post Title">
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-sm-12">
                        <label>Content</label>
                        <div id="blog-description"></div>
                    </div>
                </div>

            </div>

            <div class="widget-content widget-content-area blog-create-section mt-4">

                <h5 class="mb-4">SEO Settings</h5>
                
                <div class="row mb-4">
                    <div class="col-xxl-12 mb-4">
                        <input type="text" class="form-control" id="post-meta-title" placeholder="Meta Title">
                    </div>
                    <div class="col-xxl-12">
                        <label for="post-meta-description">Meta Description</label>
                        <textarea name="post-meta-description" class="form-control" id="post-meta-description" cols="10" rows="5"></textarea>
                    </div>
                </div>

            </div>
            
        </div>

        <div class="col-xxl-3 col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-xxl-0 mt-4">
            <div class="widget-content widget-content-area blog-create-section">
                <div class="row">
                    <div class="col-xxl-12 mb-4">
                        <div class="switch form-switch-custom switch-inline form-switch-primary">
                            <input class="switch-input" type="checkbox" role="switch" id="showPublicly" checked>
                            <label class="switch-label" for="showPublicly">Publish</label>
                        </div>
                    </div>
                    <div class="col-xxl-12 mb-4">
                        <div class="switch form-switch-custom switch-inline form-switch-primary">
                            <input class="switch-input" type="checkbox" role="switch" id="enableComment" checked>
                            <label class="switch-label" for="enableComment">Enable Comments</label>
                        </div>
                    </div>
                    <div class="col-xxl-12 col-md-12 mb-4">
                        <label for="tags">Tags</label>
                        <input id="tags" class="blog-tags" value="">
                    </div>

                    <div class="col-xxl-12 col-md-12 mb-4">
                        <label for="category">Category</label>
                        <input id="category" name="category" placeholder="Choose...">
                    </div>

                    <div class="col-xxl-12 col-md-12 mb-4">

                        <label for="product-images">Featured Image</label>
                        <div class="multiple-file-upload">
                            <input type="file" 
                                class="filepond file-upload-multiple"
                                name="filepond"
                                id="product-images" 
                                multiple 
                                data-allow-reorder="true"
                                data-max-file-size="3MB"
                                data-max-files="5">
                        </div>

                    </div>

                    <div class="col-xxl-12 col-sm-4 col-12 mx-auto">
                        <button class="btn btn-success w-100">Create Post</button>
                    </div>
                    
                </div>
            </div>
        </div>

    </div>
    
    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <x-slot:footerFiles>
        <script src="{{asset('plugins/editors/quill/quill.js')}}"></script>
        <script src="{{asset('plugins/filepond/filepond.min.js')}}"></script>
        <script src="{{asset('plugins/filepond/FilePondPluginFileValidateType.min.js')}}"></script>
        <script src="{{asset('plugins/filepond/FilePondPluginImageExifOrientation.min.js')}}"></script>
        <script src="{{asset('plugins/filepond/FilePondPluginImagePreview.min.js')}}"></script>
        <script src="{{asset('plugins/filepond/FilePondPluginImageCrop.min.js')}}"></script>
        <script src="{{asset('plugins/filepond/FilePondPluginImageResize.min.js')}}"></script>
        <script src="{{asset('plugins/filepond/FilePondPluginImageTransform.min.js')}}"></script>
        <script src="{{asset('plugins/filepond/filepondPluginFileValidateSize.min.js')}}"></script>
        <script src="{{asset('plugins/tagify/tagify.min.js')}}"></script>

        @vite(['resources/assets/js/apps/blog-create.js'])
    </x-slot>
    <!--  END CUSTOM SCRIPTS FILE  -->
</x-base-layout>