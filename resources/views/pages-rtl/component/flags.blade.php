<x-rtl.base-layout :scrollspy="false">

    <x-slot:pageTitle>
        {{$title}} 
    </x-slot>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <x-slot:headerFiles>
        <!--  BEGIN CUSTOM STYLE FILE  -->
        @vite(['resources/rtl/scss/light/assets/elements/alert.scss'])
        @vite(['resources/rtl/scss/light/assets/components/flags.scss'])
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
                <li class="breadcrumb-item active" aria-current="page">Flags</li>
            </ol>
        </nav>
    </div>
    <!-- /BREADCRUMB -->

    <div class="row layout-spacing layout-top-spacing">

        <div class="col-md-12">
            <div class="alert alert-arrow-right alert-icon-right alert-light-success alert-dismissible fade show mb-4" role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12" y2="16"></line></svg>
                To view complete list of svg flag icons. Please refer to <a target="_blank" href="https://flagicons.lipis.dev/">Country Flags Website</a>
            </div>
        </div>
        

        <div class="col-lg-12 col-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">                                
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>SVG Icons</h4>
                        </div>
                    </div>
                </div>                            
                <div class="widget-content widget-content-area text-center">

                    <div class="row">

                        <div class="col-md-2 col-sm-3 col-6">
                            <div class="flags-svg">
                                <img src="{{Vite::asset('resources/images/1x1/us.svg')}}" alt="flag-us">
                                <div class="flag-name">
                                    <p>USA</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-3 col-6">
                            <div class="flags-svg">
                                <img src="{{Vite::asset('resources/images/1x1/de.svg')}}" alt="flag-us">
                                <div class="flag-name">
                                    <p>GERMANY</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2 col-sm-3 col-6">
                            <div class="flags-svg">
                                <img src="{{Vite::asset('resources/images/1x1/ca.svg')}}" alt="flag-us">
                                <div class="flag-name">
                                    <p>CANADA</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-2 col-sm-3 col-6">
                            <div class="flags-svg">
                                <img src="{{Vite::asset('resources/images/1x1/in.svg')}}" alt="flag-us">
                                <div class="flag-name">
                                    <p>INDIA</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-3 col-6">
                            <div class="flags-svg">
                                <img src="{{Vite::asset('resources/images/1x1/jp.svg')}}" alt="flag-us">
                                <div class="flag-name">
                                    <p>JAPAN</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-3 col-6">
                            <div class="flags-svg">
                                <img src="{{Vite::asset('resources/images/1x1/tr.svg')}}" alt="flag-us">
                                <div class="flag-name">
                                    <p>TURKEY</p>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-2 col-sm-3 col-6">
                            <div class="flags-svg">
                                <img src="{{Vite::asset('resources/images/1x1/br.svg')}}" alt="flag-us">
                                <div class="flag-name">
                                    <p>BRAZIL</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2 col-sm-3 col-6">
                            <div class="flags-svg">
                                <img src="{{Vite::asset('resources/images/1x1/it.svg')}}" alt="flag-us">
                                <div class="flag-name">
                                    <p>ITALY</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2 col-sm-3 col-6">
                            <div class="flags-svg">
                                <img src="{{Vite::asset('resources/images/1x1/fi.svg')}}" alt="flag-us">
                                <div class="flag-name">
                                    <p>FINLAND</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-2 col-sm-3 col-6">
                            <div class="flags-svg">
                                <img src="{{Vite::asset('resources/images/1x1/ph.svg')}}" alt="flag-us">
                                <div class="flag-name">
                                    <p>PHILIPPINES</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2 col-sm-3 col-6">
                            <div class="flags-svg">
                                <img src="{{Vite::asset('resources/images/1x1/fr.svg')}}" alt="flag-us">
                                <div class="flag-name">
                                    <p>FRANCE</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-2 col-sm-3 col-6">
                            <div class="flags-svg">
                                <img src="{{Vite::asset('resources/images/1x1/sv.svg')}}" alt="flag-us">
                                <div class="flag-name">
                                    <p>El SALVADOR</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2 col-sm-3 col-6">
                            <div class="flags-svg">
                                <img src="{{Vite::asset('resources/images/1x1/qa.svg')}}" alt="flag-us">
                                <div class="flag-name">
                                    <p>QATAR</p>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-2 col-sm-3 col-6">
                            <div class="flags-svg">
                                <img src="{{Vite::asset('resources/images/1x1/vn.svg')}}" alt="flag-us">
                                <div class="flag-name">
                                    <p>VIETNAM</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-3 col-6">
                            <div class="flags-svg">
                                <img src="{{Vite::asset('resources/images/1x1/ua.svg')}}" alt="flag-us">
                                <div class="flag-name">
                                    <p>UKRAINE</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2 col-sm-3 col-6">
                            <div class="flags-svg">
                                <img src="{{Vite::asset('resources/images/1x1/mx.svg')}}" alt="flag-us">
                                <div class="flag-name">
                                    <p>MEXICO</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2 col-sm-3 col-6">
                            <div class="flags-svg">
                                <img src="{{Vite::asset('resources/images/1x1/es.svg')}}" alt="flag-us">
                                <div class="flag-name">
                                    <p>SPAIN</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2 col-sm-3 col-6">
                            <div class="flags-svg">
                                <img src="{{Vite::asset('resources/images/1x1/id.svg')}}" alt="flag-us">
                                <div class="flag-name">
                                    <p>INDONESIA</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2 col-sm-3 col-6">
                            <div class="flags-svg">
                                <img src="{{Vite::asset('resources/images/1x1/au.svg')}}" alt="flag-us">
                                <div class="flag-name">
                                    <p>AUSTRALIA</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2 col-sm-3 col-6">
                            <div class="flags-svg">
                                <img src="{{Vite::asset('resources/images/1x1/gb.svg')}}" alt="flag-us">
                                <div class="flag-name">
                                    <p>UNITED KINGDOM</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2 col-sm-3 col-6">
                            <div class="flags-svg">
                                <img src="{{Vite::asset('resources/images/1x1/kr.svg')}}" alt="flag-us">
                                <div class="flag-name">
                                    <p>SOUTH KOREA</p>
                                </div>
                            </div>
                        </div> 

                        <div class="col-md-2 col-sm-3 col-6">
                            <div class="flags-svg">
                                <img src="{{Vite::asset('resources/images/1x1/my.svg')}}" alt="flag-us">
                                <div class="flag-name">
                                    <p>MALAYSIA</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2 col-sm-3 col-6">
                            <div class="flags-svg">
                                <img src="{{Vite::asset('resources/images/1x1/ng.svg')}}" alt="flag-us">
                                <div class="flag-name">
                                    <p>NIGERIA</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2 col-sm-3 col-6">
                            <div class="flags-svg">
                                <img src="{{Vite::asset('resources/images/1x1/th.svg')}}" alt="flag-us">
                                <div class="flag-name">
                                    <p>THAILAND</p>
                                </div>
                            </div>
                        </div>
                        
                    </div>


                </div>
            </div>
        </div>
        
    </div>
    
    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <x-slot:footerFiles>

    </x-slot>
    <!--  END CUSTOM SCRIPTS FILE  -->
</x-rtl.base-layout>