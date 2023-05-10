<x-base-layout :scrollspy="true">

    <x-slot:pageTitle>
        {{ $title }}
        </x-slot>

        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <x-slot:headerFiles>
            <!--  BEGIN CUSTOM STYLE FILE  -->
            <link rel="stylesheet" href="{{ asset('plugins/filepond/filepond.min.css') }}">
            <link rel="stylesheet" href="{{ asset('plugins/filepond/FilePondPluginImagePreview.min.css') }}">
            @vite(['resources/scss/light/plugins/filepond/custom-filepond.scss'])
            @vite(['resources/scss/dark/plugins/filepond/custom-filepond.scss'])
            <!--  END CUSTOM STYLE FILE  -->
            </x-slot>
            <!-- END GLOBAL MANDATORY STYLES -->

            <x-slot:scrollspyConfig>
                data-bs-spy="scroll" data-bs-target="#navSection" data-bs-offset="100"
                </x-slot>





                <div class="row layout-top-spacing">



                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <div class="widget-content widget-content-area">
                                    <div class="profile-image">
                                        <div class="img-uploader-content">
                                            <input type="file" class="filepond" name="filepond"
                                                accept="image/png, image/jpeg, image/gif" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                <!--  BEGIN CUSTOM SCRIPTS FILE  -->
                <x-slot:footerFiles>
                    <script src="{{ asset('plugins/filepond/filepond.min.js') }}"></script>
                    <script src="{{ asset('plugins/filepond/FilePondPluginFileValidateType.min.js') }}"></script>
                    <script src="{{ asset('plugins/filepond/FilePondPluginImageExifOrientation.min.js') }}"></script>
                    <script src="{{ asset('plugins/filepond/FilePondPluginImagePreview.min.js') }}"></script>
                    <script src="{{ asset('plugins/filepond/FilePondPluginImageCrop.min.js') }}"></script>
                    <script src="{{ asset('plugins/filepond/FilePondPluginImageResize.min.js') }}"></script>
                    <script src="{{ asset('plugins/filepond/FilePondPluginImageTransform.min.js') }}"></script>
                    <script src="{{ asset('plugins/filepond/filepondPluginFileValidateSize.min.js') }}"></script>
                    <script src="{{ asset('plugins/filepond/custom-filepond.js') }}"></script>
                    <script>
                        multifiles.addFiles("{{ Vite::asset('resources/images/list-blog-style-2.jpeg') }}");
                    </script>
                    </x-slot>
                    <!--  END CUSTOM SCRIPTS FILE  -->
</x-base-layout>
