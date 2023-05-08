<x-base-layout :scrollspy="true">

    <x-slot:pageTitle>
        {{$title}} 
    </x-slot>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <x-slot:headerFiles>
        <!--  BEGIN CUSTOM STYLE FILE  -->
        <link rel="stylesheet" href="{{asset('plugins/flatpickr/flatpickr.css')}}">
        <link rel="stylesheet" href="{{asset('plugins/noUiSlider/nouislider.min.css')}}">
        @vite(['resources/scss/light/plugins/flatpickr/custom-flatpickr.scss'])
        @vite(['resources/scss/dark/plugins/flatpickr/custom-flatpickr.scss'])
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
                <li class="breadcrumb-item"><a href="#">Form</a></li>
                <li class="breadcrumb-item active" aria-current="page">Date Time Picker</li>
            </ol>
        </nav>
    </div>
    <!-- /BREADCRUMB -->

    <div id="navSection" data-bs-spy="affix" class="nav  sidenav">
        <div class="sidenav-content">
            <a href="#basic" class="active nav-link">Basic</a>
            <a href="#date_time" class="nav-link">Date Time</a>
            <a href="#range_calendar" class="nav-link">Range Calendar</a>
            <a href="#preloading_time" class="nav-link">Preloading Time</a>
        </div>
    </div>
    
    <div class="row layout-top-spacing">

        <div id="basic" class="col-lg-12 col-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">                                 
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Basic</h4> 
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <p>Date time picker is powered by <span class="text-danger">flatpickr.js</span> that gives the ability to user to select date or time.</p>
                    <div class="form-group mb-0">
                        <input id="basicFlatpickr" value="2022-09-04" class="form-control flatpickr flatpickr-input active" type="text" placeholder="Select Date..">
                    </div>

                    <div class="code-section-container show-code">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
var f1 = flatpickr(document.getElementById('basicFlatpickr'));
</pre>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <div id="date_time" class="col-lg-12 col-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">                                 
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Date Time</h4> 
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <p>Use <code>enableTime: true</code> and <code>dateFormat: "Y-m-d H:i"</code> option to enable time support</p>
                    <div class="form-group mb-0">
                        <input id="dateTimeFlatpickr" value="2022-09-19 12:00" class="form-control flatpickr flatpickr-input active" type="text" placeholder="Select Date..">
                    </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
var f2 = flatpickr(document.getElementById('dateTimeFlatpickr'), {
enableTime: true,
dateFormat: "Y-m-d H:i",
});
</pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="range_calendar" class="col-lg-12 col-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">                                 
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Range Calendar</h4> 
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <p>Use <code>mode: range</code> select the date with range.</p>

                    <div class="form-group mb-0">
                        <input id="rangeCalendarFlatpickr" class="form-control flatpickr flatpickr-input active" type="text" placeholder="Select Date..">
                    </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
var f3 = flatpickr(document.getElementById('rangeCalendarFlatpickr'), {
mode: "range"
});
</pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="preloading_time" class="col-lg-12 col-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">                                 
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Preloading Time</h4> 
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <p>Use <code>noCalendar: true</code> with Date Time options to disable calendar and show time picker only.</p>
                    <div class="form-group mb-0">
                        <input id="timeFlatpickr" class="form-control flatpickr flatpickr-input active" type="text" placeholder="Select Date..">
                    </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
var f4 = flatpickr(document.getElementById('timeFlatpickr'), {
enableTime: true,
noCalendar: true,
dateFormat: "H:i",
defaultDate: "13:45"
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
        <script type="module" src="{{asset('plugins/flatpickr/flatpickr.js')}}"></script>
        <script type="module" src="{{asset('plugins/flatpickr/custom-flatpickr.js')}}"></script>
    </x-slot>
    <!--  END CUSTOM SCRIPTS FILE  -->
</x-base-layout>