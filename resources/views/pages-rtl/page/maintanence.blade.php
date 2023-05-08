<x-rtl.base-layout :scrollspy="false">

    <x-slot:pageTitle>
        {{$title}} 
    </x-slot>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <x-slot:headerFiles>
        <!--  BEGIN CUSTOM STYLE FILE  -->
        @vite(['resources/rtl/scss/light/assets/pages/error/style-maintanence.scss'])
        @vite(['resources/rtl/scss/dark/assets/pages/error/style-maintanence.scss'])

        <style>
            body.layout-dark .theme-logo.dark-element {
                display: inline-block;
            }
            .theme-logo.dark-element {
                display: none;
            }
            body.layout-dark .theme-logo.light-element {
                display: none;
            }
            .theme-logo.light-element {
                display: inline-block;
            }
        </style>
    
        <!--  END CUSTOM STYLE FILE  -->
    </x-slot>
    <!-- END GLOBAL MANDATORY STYLES -->
    
    <div class="container-fluid maintanence-content">
        <div class="">
            <div class="maintanence-hero-img">
                <a href="/dashboard/analytics">
                    <img alt="logo" src="{{Vite::asset('resources/images/logo.svg')}}" class="dark-element theme-logo">
                    <img alt="logo" src="{{Vite::asset('resources/images/logo2.svg')}}" class="light-element theme-logo">
                </a>
            </div>
            <h1 class="error-title">Under Maintenance</h1>
            <p class="error-text">Thank you for visiting us.</p>
            <p class="text">We are currently working on making some improvements <br/> to give you better user experience.</p>
            <p class="text">Please visit us again shortly.</p>
            <a href="{{getRouterValue();}}/dashboard/analytics" class="btn btn-dark mt-4">Home</a>
        </div>
    </div>
    
    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <x-slot:footerFiles>

    </x-slot>
    <!--  END CUSTOM SCRIPTS FILE  -->
</x-rtl.base-layout>