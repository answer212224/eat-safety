<x-rtl.base-layout :scrollspy="false">

    <x-slot:pageTitle>
        {{$title}} 
    </x-slot>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <x-slot:headerFiles>
        <!--  BEGIN CUSTOM STYLE FILE  -->
        <link rel="stylesheet" href="{{asset('plugins-rtl/glightbox/glightbox.min.css')}}">
        <!--  END CUSTOM STYLE FILE  -->
    </x-slot>
    <!-- END GLOBAL MANDATORY STYLES -->
    
    <!-- BREADCRUMB -->
    <div class="page-meta">
        <nav class="breadcrumb-style-one" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Components</a></li>
                <li class="breadcrumb-item active" aria-current="page">Lightbox</li>
            </ol>
        </nav>
    </div>
    <!-- /BREADCRUMB -->

    <div class="row">
    
        <!-- Lightbox -->
        <div class="col-lg-12 layout-spacing layout-top-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Default</h4> 
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">

                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 mb-4">
                            <a href="{{Vite::asset('resources/images/lightbox-1.jpg')}}" class="defaultGlightbox glightbox-content">
                                <img src="{{Vite::asset('resources/images/lightbox-1.jpg')}}" alt="image" class="img-fluid" />
                            </a>
                        </div>
                        
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 mb-4">
                            <a href="{{Vite::asset('resources/images/lightbox-2.jpeg')}}" class="defaultGlightbox glightbox-content">
                                <img src="{{Vite::asset('resources/images/lightbox-2.jpeg')}}" alt="image" class="img-fluid" />
                            </a>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 mb-4">
                            <a href="{{Vite::asset('resources/images/lightbox-3.jpeg')}}" class="defaultGlightbox glightbox-content">
                                <img src="{{Vite::asset('resources/images/lightbox-3.jpeg')}}" alt="image" class="img-fluid" />
                            </a>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 mb-4">
                            <a href="{{Vite::asset('resources/images/lightbox-4.jpeg')}}" class="defaultGlightbox glightbox-content">
                                <img src="{{Vite::asset('resources/images/lightbox-4.jpeg')}}" alt="image" class="img-fluid" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Descriptions -->
        <div class="col-lg-12 layout-spacing layout-top-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>With Description</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">

                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 mb-4">
                            <a href="{{Vite::asset('resources/images/lightbox-3.jpeg')}}" class="withDescriptionGlightbox glightbox-content" data-glightbox="title: My title; description: this is the slide description;">
                                <img src="{{Vite::asset('resources/images/lightbox-3.jpeg')}}" alt="image" class="img-fluid" />
                            </a>
                        </div>

                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 mb-4">
                            <a href="{{Vite::asset('resources/images/lightbox-6.jpeg')}}" class="withDescriptionGlightbox glightbox-content" data-glightbox="title: My title; description: this is the slide description; descPosition: left;">
                                <img src="{{Vite::asset('resources/images/lightbox-6.jpeg')}}" alt="image" class="img-fluid" />
                            </a>
                        </div>

                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 mb-4">
                            <a href="{{Vite::asset('resources/images/lightbox-1.jpg')}}" class="withDescriptionGlightbox glightbox-content" data-glightbox="title: My title; description: this is the slide description; descPosition: right;">
                                <img src="{{Vite::asset('resources/images/lightbox-1.jpg')}}" alt="image" class="img-fluid" />
                            </a>
                        </div>

                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 mb-4">
                            <a href="{{Vite::asset('resources/images/lightbox-2.jpeg')}}" class="withDescriptionGlightbox glightbox-content" data-glightbox="title: My title; description: this is the slide description; descPosition: top;">
                                <img src="{{Vite::asset('resources/images/lightbox-2.jpeg')}}" alt="image" class="img-fluid" />
                            </a>
                        </div>
                        
                    </div>
                                                    
                </div>
            </div>
        </div>

        <!-- Iframe -->
        <div class="col-lg-12 layout-spacing layout-top-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Iframe</h4> 
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">

                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 mb-4 ms-auto">
                            <p><span class="text-info">Vimeo</span> Integration</p>
                            <a href="https://player.vimeo.com/video/1084537" class="iframeGlightbox glightbox-content">
                                <img src="{{Vite::asset('resources/images/lightbox-1.jpg')}}" alt="image" class="img-fluid" />
                            </a>
                        </div>                                        
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 mb-4 me-auto">
                            <p> <span class="text-danger">YouTube</span> Integration</p>
                            
                            <a href="https://www.youtube.com/embed/YE7VzlLtp-4" class="iframeGlightbox glightbox-content">
                                <img src="{{Vite::asset('resources/images/lightbox-5.jpeg')}}" alt="image" class="img-fluid" />
                            </a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
    </div>
    
    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <x-slot:footerFiles>

        <script src="{{asset('plugins-rtl/glightbox/glightbox.min.js')}}"></script>
        <script src="{{asset('plugins-rtl/glightbox/custom-glightbox.min.js')}}"></script>
    </x-slot>
    <!--  END CUSTOM SCRIPTS FILE  -->
</x-rtl.base-layout>