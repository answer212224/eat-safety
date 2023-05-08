<x-rtl.base-layout :scrollspy="true">

    <x-slot:pageTitle>
        {{$title}} 
    </x-slot>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <x-slot:headerFiles>
        <!--  BEGIN CUSTOM STYLE FILE  -->
        {{-- @vite(['resources/rtl/scss/light/assets/components/timeline.scss']) --}}
        <link rel="stylesheet" href="{{asset('plugins-rtl/splide/splide.min.css')}}">
        @vite(['resources/rtl/scss/light/plugins/splide/custom-splide.min.scss'])
        @vite(['resources/rtl/scss/dark/plugins/splide/custom-splide.min.scss'])
        <!--  END CUSTOM STYLE FILE  -->
</x-slot>
    <!-- END GLOBAL MANDATORY STYLES -->

    <x-slot:scrollspyConfig>
        data-bs-spy="scroll" data-bs-target="#navSection" data-bs-offset="100"
    </x-slot>
    
    <!-- BREADCRUMB -->
    <div class="page-meta">
        <nav class="breadcrumb-style-one" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Components</a></li>
                <li class="breadcrumb-item active" aria-current="page">Splide</li>
            </ol>
        </nav>
    </div>
    <!-- /BREADCRUMB -->

    <div id="navSection" data-bs-spy="affix" class="nav  sidenav">
        <div class="sidenav-content">
            <a href="#splider_Basic" class="active nav-link">Basic</a>
            <a href="#splider_MultipleSlider" class="nav-link">Multiple Slider</a>
            <a href="#splider_Pagination" class="nav-link">Pagination</a>
            <a href="#splider_Thumbnails" class="nav-link">Thumbnails</a>
        </div>
    </div>

    <div class="row layout-top-spacing">
        <div id="splider_Basic" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Default</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area  style-custom-1">

                    <div class="position-relative">
                        <div class="container" style="max-width: 560px">
                            <div class="splide">
                                <div class="splide__track">
                                      <ul class="splide__list">
                                            <li class="splide__slide">
                                                <img alt="slider-image" class="img-fluid" src="{{Vite::asset('resources/images/product-1.jpg')}}">
                                            </li>
                                            <li class="splide__slide">
                                                <img alt="slider-image" class="img-fluid" src="{{Vite::asset('resources/images/product-2.jpg')}}">
                                            </li>
                                            <li class="splide__slide">
                                                <img alt="slider-image" class="img-fluid" src="{{Vite::asset('resources/images/product-3.jpg')}}">
                                            </li>
                                      </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="code-section-container show-code">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                                <pre>
// Basic

var splide = new Splide( '.splide' );
splide.mount();</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div id="splider_MultipleSlider" class="col-lg-12 col-md-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Multiple Slides</h4> 
                        </div>                             
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <div class="position-relative">
                        <div class="container" style="max-width: 700px">
                            <div class="splide-multiple">
                                <div class="splide__track">
                                      <ul class="splide__list">
                                            <li class="splide__slide">
                                                <img alt="slider-image" class="img-fluid" src="{{Vite::asset('resources/images/product-1.jpg')}}">
                                            </li>
                                            <li class="splide__slide">
                                                <img alt="slider-image" class="img-fluid" src="{{Vite::asset('resources/images/product-2.jpg')}}">
                                            </li>
                                            <li class="splide__slide">
                                                <img alt="slider-image" class="img-fluid" src="{{Vite::asset('resources/images/product-3.jpg')}}">
                                            </li>

                                            <li class="splide__slide">
                                                <img alt="slider-image" class="img-fluid" src="{{Vite::asset('resources/images/product-1.jpg')}}">
                                            </li>
                                            <li class="splide__slide">
                                                <img alt="slider-image" class="img-fluid" src="{{Vite::asset('resources/images/product-2.jpg')}}">
                                            </li>
                                            <li class="splide__slide">
                                                <img alt="slider-image" class="img-fluid" src="{{Vite::asset('resources/images/product-3.jpg')}}">
                                            </li>

                                            <li class="splide__slide">
                                                <img alt="slider-image" class="img-fluid" src="{{Vite::asset('resources/images/product-1.jpg')}}">
                                            </li>
                                            <li class="splide__slide">
                                                <img alt="slider-image" class="img-fluid" src="{{Vite::asset('resources/images/product-2.jpg')}}">
                                            </li>
                                            <li class="splide__slide">
                                                <img alt="slider-image" class="img-fluid" src="{{Vite::asset('resources/images/product-3.jpg')}}">
                                            </li>

                                            <li class="splide__slide">
                                                <img alt="slider-image" class="img-fluid" src="{{Vite::asset('resources/images/product-1.jpg')}}">
                                            </li>
                                            <li class="splide__slide">
                                                <img alt="slider-image" class="img-fluid" src="{{Vite::asset('resources/images/product-2.jpg')}}">
                                            </li>
                                            <li class="splide__slide">
                                                <img alt="slider-image" class="img-fluid" src="{{Vite::asset('resources/images/product-3.jpg')}}">
                                            </li>
                                      </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
var splideMultiple = new Splide( '.splide-multiple', {
perPage: 3,
rewind : true,
} );

splideMultiple.mount();</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div id="splider_Pagination" class="col-lg-12 col-md-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">                                
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Pagination</h4> 
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <div class="position-relative">
                        <div class="container" style="max-width: 560px">
                            <div class="splide-pagination">
                                <div class="splide__track">
                                    <ul class="splide__list">
                                        <li class="splide__slide">
                                            <img alt="slider-image" class="img-fluid" src="{{Vite::asset('resources/images/product-1.jpg')}}">
                                        </li>
                                        <li class="splide__slide">
                                            <img alt="slider-image" class="img-fluid" src="{{Vite::asset('resources/images/product-2.jpg')}}">
                                        </li>
                                        <li class="splide__slide">
                                            <img alt="slider-image" class="img-fluid" src="{{Vite::asset('resources/images/product-3.jpg')}}">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
var splidePagiantion = new Splide( '.splide-pagination' );

splidePagiantion.on( 'pagination:mounted', function( data ) {
// data.items contains all dot items
data.items.forEach( function( item ) {
item.button.textContent = String( item.page + 1 );
item.li.parentNode.classList.add('numberic-pagination')
} );
} );

splidePagiantion.mount();</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="row">

        <div id="splider_Thumbnails" class="col-lg-12 col-md-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">                                
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Thumbnails</h4> 
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">

                    <div class="position-relative">
                        <div class="container" style="max-width: 700px">
                            <div class="splide-mainThubnail">
                                <div class="splide__track">
                                      <ul class="splide__list">
                                          <li class="splide__slide">
                                                <a href="./assets/img/product-1.jpg" class="glightbox"><img alt="slider-image" src="{{Vite::asset('resources/images/product-1.jpg')}}"></a>
                                            </li>
                                          <li class="splide__slide">
                                                <a href="./assets/img/product-2.jpg" class="glightbox"><img alt="slider-image" src="{{Vite::asset('resources/images/product-2.jpg')}}"></a>
                                            </li>
                                          <li class="splide__slide">
                                                <a href="./assets/img/product-3.jpg" class="glightbox"><img alt="slider-image" src="{{Vite::asset('resources/images/product-3.jpg')}}"></a>
                                            </li>
                                          <li class="splide__slide">
                                                <a href="./assets/img/product-1.jpg" class="glightbox"><img alt="slider-image" src="{{Vite::asset('resources/images/product-1.jpg')}}"></a>
                                            </li>
                                          <li class="splide__slide">
                                                <a href="./assets/img/product-2.jpg" class="glightbox"><img alt="slider-image" src="{{Vite::asset('resources/images/product-2.jpg')}}"></a>
                                            </li>
                                          <li class="splide__slide">
                                                <a href="./assets/img/product-3.jpg" class="glightbox"><img alt="slider-image" src="{{Vite::asset('resources/images/product-3.jpg')}}"></a>
                                            </li>
                                      </ul>
                                </div>
                              </div>

                            <div id="thumbnail-slider" class="splide">
                                <div class="splide__track">
                                    <ul class="splide__list">
                                        <li class="splide__slide"><img alt="slider-image" src="{{Vite::asset('resources/images/product-1.jpg')}}"></li>
                                        <li class="splide__slide"><img alt="slider-image" src="{{Vite::asset('resources/images/product-2.jpg')}}"></li>
                                        <li class="splide__slide"><img alt="slider-image" src="{{Vite::asset('resources/images/product-3.jpg')}}"></li>
                                        <li class="splide__slide"><img alt="slider-image" src="{{Vite::asset('resources/images/product-1.jpg')}}"></li>
                                        <li class="splide__slide"><img alt="slider-image" src="{{Vite::asset('resources/images/product-2.jpg')}}"></li>
                                        <li class="splide__slide"><img alt="slider-image" src="{{Vite::asset('resources/images/product-3.jpg')}}"></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
var main = new Splide( '.splide-mainThubnail', {
type       : 'fade',
heightRatio: 0.5,
pagination : false,
arrows     : false,
cover      : true,
//   fixedWidth: 656,
fixedHeight: 556,
} );

var thumbnails = new Splide( '#thumbnail-slider', {
rewind          : true,
fixedWidth      : 104,
fixedHeight     : 58,
isNavigation    : true,
gap             : 10,
focus           : 'center',
pagination      : false,
cover           : true,
dragMinThreshold: {
mouse: 4,
touch: 10,
},
breakpoints : {
640: {
fixedWidth  : 66,
fixedHeight : 38,
},
},
} );

main.sync( thumbnails );
main.mount();
thumbnails.mount();
</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    
    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <x-slot:footerFiles>
        <script src="{{asset('plugins-rtl/splide/splide.min.js')}}"></script>
        <script src="{{asset('plugins-rtl/splide/custom-splide.js')}}"></script>
    </x-slot>
    <!--  END CUSTOM SCRIPTS FILE  -->
</x-rtl.base-layout>