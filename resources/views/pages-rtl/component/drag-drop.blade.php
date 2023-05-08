<x-rtl.base-layout :scrollspy="false">

    <x-slot:pageTitle>
        {{$title}} 
    </x-slot>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <x-slot:headerFiles>
        <!--  BEGIN CUSTOM STYLE FILE  -->
        <link rel="stylesheet" href="{{asset('plugins-rtl/drag-and-drop/dragula/dragula.css')}}">
        @vite(['resources/rtl/scss/light/plugins/drag-and-drop/dragula/example.scss'])
        @vite(['resources/rtl/scss/dark/plugins/drag-and-drop/dragula/example.scss'])
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
                <li class="breadcrumb-item active" aria-current="page">Drag and Drop</li>
            </ol>
        </nav>
    </div>
    <!-- /BREADCRUMB -->

    <div class="row" id="cancel-row">
        <div class="col-lg-12 layout-spacing layout-top-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Dragula</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">

                    <div class='parent ex-1'>
                        <div class="row">

                            <div class="col-sm-6">
                                <div id='left-defaults' class='dragula'>

                                    <div class="media  d-md-flex d-block">
                                        <img alt="avatar" src="{{Vite::asset('resources/images/profile-2.jpeg')}}" class="img-fluid ">
                                        <div class="media-body">
                                            <div class="d-xl-flex d-block justify-content-between">
                                                <div class="">
                                                    <h6 class="">Need to be approved</h6>
                                                    <p class="">Kelly Young</p>
                                                </div>
                                                <div>
                                                    <button class="btn btn-secondary btn-sm">View</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="media  d-md-flex d-block">
                                        <img alt="avatar" src="{{Vite::asset('resources/images/profile-3.jpeg')}}" class="img-fluid ">
                                        <div class="media-body">
                                            <div class="d-xl-flex d-block justify-content-between">
                                                <div class="">
                                                    <h6 class="">Meeting with client</h6>
                                                    <p class="">Andy King</p>
                                                </div>
                                                <div>
                                                    <button class="btn btn-secondary btn-sm">View</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="media  d-md-flex d-block">
                                        <img alt="avatar" src="{{Vite::asset('resources/images/profile-4.jpeg')}}" class="img-fluid ">
                                        <div class="media-body">
                                            <div class="d-xl-flex d-block justify-content-between">
                                                <div class="">
                                                    <h6 class="">Project Detail</h6>
                                                    <p class="">Judy Holmes</p>
                                                </div>
                                                <div>
                                                    <button class="btn btn-secondary btn-sm">View</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="media  d-md-flex d-block">
                                        <img alt="avatar" src="{{Vite::asset('resources/images/profile-5.jpeg')}}" class="img-fluid ">
                                        <div class="media-body">
                                            <div class="d-xl-flex d-block justify-content-between">
                                                <div class="">
                                                    <h6 class="">Edited Post Apporval</h6>
                                                    <p class="">Vincent Carpenter</p>
                                                </div>
                                                <div>
                                                    <button class="btn btn-secondary btn-sm">View</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="media  d-md-flex d-block">
                                        <img alt="avatar" src="{{Vite::asset('resources/images/profile-6.jpeg')}}" class="img-fluid ">
                                        <div class="media-body">
                                            <div class="d-xl-flex d-block justify-content-between">
                                                <div class="">
                                                    <h6 class="">Project Lead Pickup</h6>
                                                    <p class="">Mary McDonald</p>
                                                </div>
                                                <div>
                                                    <button class="btn btn-secondary btn-sm">View</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div id='right-defaults' class='dragula'>
                                    <div class="media  d-md-flex d-block">
                                        <img alt="avatar" src="{{Vite::asset('resources/images/profile-7.jpeg')}}" class="img-fluid ">
                                        <div class="media-body">
                                            <div class="d-xl-flex d-block justify-content-between">
                                                <div class="">
                                                    <h6 class="">Need to be approved</h6>
                                                    <p class="">Shaun Park</p>
                                                </div>
                                                <div>
                                                    <button class="btn btn-secondary btn-sm">View</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="media  d-md-flex d-block">
                                        <img alt="avatar" src="{{Vite::asset('resources/images/profile-8.jpeg')}}" class="img-fluid ">
                                        <div class="media-body">
                                            <div class="d-xl-flex d-block justify-content-between">
                                                <div class="">
                                                    <h6 class="">Meeting with client</h6>
                                                    <p class="">Roxanne</p>
                                                </div>
                                                <div>
                                                    <button class="btn btn-secondary btn-sm">View</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="media  d-md-flex d-block">
                                        <img alt="avatar" src="{{Vite::asset('resources/images/profile-9.jpeg')}}" class="img-fluid ">
                                        <div class="media-body">
                                            <div class="d-xl-flex d-block justify-content-between">
                                                <div class="">
                                                    <h6 class="">Project Detail</h6>
                                                    <p class="">Lisa Doe</p>
                                                </div>
                                                <div>
                                                    <button class="btn btn-secondary btn-sm">View</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="media  d-md-flex d-block">
                                        <img alt="avatar" src="{{Vite::asset('resources/images/profile-10.jpeg')}}" class="img-fluid ">
                                        <div class="media-body">
                                            <div class="d-xl-flex d-block justify-content-between">
                                                <div class="">
                                                    <h6 class="">Edited Post Apporval</h6>
                                                    <p class="">Kristen Beck</p>
                                                </div>
                                                <div>
                                                    <button class="btn btn-secondary btn-sm">View</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="media  d-md-flex d-block">
                                        <img alt="avatar" src="{{Vite::asset('resources/images/profile-11.jpeg')}}" class="img-fluid ">
                                        <div class="media-body">
                                            <div class="d-xl-flex d-block justify-content-between">
                                                <div class="">
                                                    <h6 class="">Project Lead Pickup</h6>
                                                    <p class="">Alma Clarke</p>
                                                </div>
                                                <div>
                                                    <button class="btn btn-secondary btn-sm">View</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="code-section-container show-code">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
dragula([$('left-defaults'), $('right-defaults')])
.on('drag', function (el) {
console.log(el);
el.className += ' el-drag-ex-1';
}).on('drop', function (el) {
console.log(el);
el.className = el.className.replace('el-drag-ex-1', '');
}).on('cancel', function (el) {
console.log(el);
el.className = el.className.replace('el-drag-ex-1', '');
});
</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Icon Change</h4>
                        </div>           
                    </div>
                </div>
                <div class="widget-content widget-content-area">

                    <div class='parent ex-2'>
                        <div class='row'>

                            <div class="col-md-6">
                                <div id='left-events' class='dragula'>
                                    <div class="media   d-block d-sm-flex">
                                        <img alt="avatar" src="{{Vite::asset('resources/images/profile-16.jpeg')}}" class="img-fluid ">
                                        <div class="media-body">
                                            <div class="d-flex justify-content-between">
                                                <div class="">
                                                    <h6 class="">Lisa Doe</h6>
                                                    <p class="">New post is written by Andy.</p>
                                                </div>
                                                <div class="">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star f-icon-line" style="display:block"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                    <i class="f-icon-fill flaticon-star-fill-1" style="display: none"></i>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart f-icon-fill"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="media   d-block d-sm-flex">
                                        <img alt="avatar" src="{{Vite::asset('resources/images/drag-4.jpg')}}" class="img-fluid ">
                                        <div class="media-body">
                                            <div class="d-flex justify-content-between">
                                                <div class="">
                                                    <h6 class="">Shaun Park</h6>
                                                    <p class="">New project meeting.</p>
                                                </div>
                                                <div class="">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star f-icon-line" style="display:block"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                    <i class="f-icon-fill flaticon-star-fill-1" style="display: none"></i>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart f-icon-fill" style="display: none"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="media   d-block d-sm-flex">
                                        <img alt="avatar" src="{{Vite::asset('resources/images/profile-26.jpeg')}}" class="img-fluid ">
                                        <div class="media-body">
                                            <div class="d-flex justify-content-between">
                                                <div class="">
                                                    <h6 class="">Andy King</h6>
                                                    <p class="">Get new project details from Shaun</p>
                                                </div>
                                                <div class="">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star f-icon-line" style="display:block"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                    <i class="f-icon-fill flaticon-star-fill-1" style="display: none"></i>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart f-icon-fill" style="display: none"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="media   d-block d-sm-flex">
                                        <img alt="avatar" src="{{Vite::asset('resources/images/g-7.png')}}" class="img-fluid ">
                                        <div class="media-body">
                                            <div class="d-flex justify-content-between">
                                                <div class="">
                                                    <h6 class="">Judy Holmes</h6>
                                                    <p class="">A post is edited by Mary.</p>
                                                </div>
                                                <div class="">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star f-icon-line" style="display:block"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                    <i class="f-icon-fill flaticon-star-fill-1" style="display: none"></i>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart f-icon-fill" style="display: none"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="media   d-block d-sm-flex">
                                        <img alt="avatar" src="{{Vite::asset('resources/images/drag-2.jpeg')}}" class="img-fluid ">
                                        <div class="media-body">
                                            <div class="d-flex justify-content-between">
                                                <div class="">
                                                    <h6 class="">Alma Clarke</h6>
                                                    <p class="">Pick up Lisa Doe from the airport.</p>
                                                </div>
                                                <div class="">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star f-icon-line" style="display:block"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                    <i class="f-icon-fill flaticon-star-fill-1" style="display: none"></i>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart f-icon-fill" style="display: none"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div id='right-events' class='dragula'>
                                    <div class="media   d-block d-sm-flex">
                                        <img alt="avatar" src="{{Vite::asset('resources/images/p7.jpeg')}}" class="img-fluid ">
                                        <div class="media-body">
                                            <div class="d-flex justify-content-between">
                                                <div class="">
                                                    <h6 class="">John Doe</h6>
                                                    <p class="">New post is written by Andy.</p>
                                                </div>
                                                <div class="">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star f-icon-line" style="display:none"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                    <i class="f-icon-fill flaticon-star-fill-1" style="display: block"></i>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart f-icon-fill" style="display: none"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="media   d-block d-sm-flex">
                                        <img alt="avatar" src="{{Vite::asset('resources/images/drag-1.jpeg')}}" class="img-fluid ">
                                        <div class="media-body">
                                            <div class="d-flex justify-content-between">
                                                <div class="">
                                                    <h6 class="">Linda Nelson</h6>
                                                    <p class="">New project meeting.</p>
                                                </div>
                                                <div class="">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star f-icon-line" style="display:none"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                    <i class="f-icon-fill flaticon-star-fill-1" style="display: block"></i>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart f-icon-fill" style="display: none"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="media   d-block d-sm-flex">
                                        <img alt="avatar" src="{{Vite::asset('resources/images/g-8.png')}}" class="img-fluid ">
                                        <div class="media-body">
                                            <div class="d-flex justify-content-between">
                                                <div class="">
                                                    <h6 class="">Angie Young</h6>
                                                    <p class="">Get new project details from Shaun</p>
                                                </div>
                                                <div class="">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star f-icon-line" style="display:none"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                    <i class="f-icon-fill flaticon-star-fill-1" style="display: block"></i>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart f-icon-fill" style="display: none"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="media   d-block d-sm-flex">
                                        <img alt="avatar" src="{{Vite::asset('resources/images/p9.jpeg')}}" class="img-fluid ">
                                        <div class="media-body">
                                            <div class="d-flex justify-content-between">
                                                <div class="">
                                                    <h6 class="">Amy Diaz</h6>
                                                    <p class="">A post is edited by Mary.</p>
                                                </div>
                                                <div class="">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star f-icon-line" style="display:none"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                    <i class="f-icon-fill flaticon-star-fill-1" style="display: block"></i>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart f-icon-fill" style="display: none"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="media   d-block d-sm-flex">
                                        <img alt="avatar" src="{{Vite::asset('resources/images/p6.jpeg')}}" class="img-fluid ">
                                        <div class="media-body">
                                            <div class="d-flex justify-content-between">
                                                <div class="">
                                                    <h6 class="">Lila Perry</h6>
                                                    <p class="">Pick up Lisa Doe from the airport.</p>
                                                </div>
                                                <div class="">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star f-icon-line" style="display:none"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                    <i class="f-icon-fill flaticon-star-fill-1" style="display: block"></i>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart f-icon-fill" style="display: none"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
dragula([document.getElementById("left-events"), document.getElementById("right-events")])
.on('drag', function (el) {
console.log(el);
el.className += ' el-drag-ex-2';
el.className = el.className.replace('ex-moved', '');
})
.on('drop', function (el, target, source, sibling) {
console.log(el);
el.className = el.className.replace('el-drag-ex-2', '');
el.className += ' ex-moved';
})
.on('over', function (el, container) {
container.className += ' ex-over';
})
.on('out', function (el, container) {
container.className = container.className.replace('ex-over', '');
})
.on('cancel', function (el) {
console.log(el);
el.className = el.className.replace('el-drag-ex-2', '');
});
</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Delete User</h4>
                        </div>           
                    </div>
                </div>
                <div class="widget-content widget-content-area">

                    <div class='parent ex-3'>
                        <div class='row'>

                            <div class="col-md-6">
                                <div id='left-rm-spill' class='dragula'>
                                    <div class="media d-block d-sm-flex">
                                        <img class="" src="{{Vite::asset('resources/images/delete-user-15.jpeg')}}" alt="avatar">
                                        <div class="media-body">
                                            <h5 class=""><span class="usr-commented">Alma Clarke</span> commented on Irene Collins's <span class="comment-topic">Status</span></h5>
                                            <p class="meta-time">18 min ago</p>
                                        </div>
                                    </div>

                                    <div class="media d-block d-sm-flex">
                                        <img class="" src="{{Vite::asset('resources/images/delete-user-4.jpeg')}}" alt="avatar">
                                        <div class="media-body">
                                            <h5 class=""><span class="usr-commented">Susan Phillips</span> commented on Vincent Carpenter's <span class="comment-topic">Status</span></h5>
                                            <p class="meta-time">18 min ago</p>
                                        </div>
                                    </div>

                                    <div class="media d-block d-sm-flex">
                                        <img class="" src="{{Vite::asset('resources/images/delete-user-11.jpeg')}}" alt="avatar">
                                        <div class="media-body">
                                            <h5 class=""><span class="usr-commented">Linda Nelson</span> commented on James Taylor's <span class="comment-topic">Status</span></h5>
                                            <p class="meta-time">18 min ago</p>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div id='right-rm-spill' class='dragula'>
                                    <div class="media d-block d-sm-flex">
                                        <img class="" src="{{Vite::asset('resources/images/delete-user-12.jpeg')}}" alt="avatar">
                                        <div class="media-body">
                                            <h5 class=""><span class="usr-commented">Grace Roberts</span> commented on Amy Diaz's <span class="comment-topic">Status</span></h5>
                                            <p class="meta-time">18 min ago</p>
                                        </div>
                                    </div>

                                    <div class="media d-block d-sm-flex">
                                        <img class="" src="{{Vite::asset('resources/images/delete-user-16.jpeg')}}" alt="avatar">
                                        <div class="media-body">
                                            <h5 class=""><span class="usr-commented">Mary Mcdonald</span> commented on Judy Holmes's <span class="comment-topic">Status</span></h5>
                                            <p class="meta-time">18 min ago</p>
                                        </div>
                                    </div>

                                    <div class="media d-block d-sm-flex">
                                        <img class="" src="{{Vite::asset('resources/images/delete-user-17.jpeg')}}" alt="avatar">
                                        <div class="media-body">
                                            <h5 class=""><span class="usr-commented">Oscar Garner</span> commented on Justin Cross's <span class="comment-topic">Status</span></h5>
                                            <p class="meta-time">18 min ago</p>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
dragula([$('left-rm-spill'), $('right-rm-spill')], { removeOnSpill: true })
.on('drag', function (el) {
console.log(el);
el.className += ' el-drag-ex-3';
}).on('drop', function (el) {
console.log(el);
el.className = el.className.replace('el-drag-ex-3', '');
}).on('cancel', function (el) {
console.log(el);
el.className = el.className.replace('el-drag-ex-3', '');
});
</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
    
    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <x-slot:footerFiles>
        <script src="{{asset('plugins-rtl/drag-and-drop/dragula/dragula.min.js')}}"></script>
        <script src="{{asset('plugins-rtl/drag-and-drop/dragula/custom-dragula.js')}}"></script>
    </x-slot>
    <!--  END CUSTOM SCRIPTS FILE  -->
</x-rtl.base-layout>