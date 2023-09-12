<x-base-layout :scrollspy="false">

    <x-slot:pageTitle>
        {{ $title }}
    </x-slot>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <x-slot:headerFiles>

    </x-slot>
    <!-- END GLOBAL MANDATORY STYLES -->



    <img src="{{ Vite::asset('resources/images/error.svg') }}" alt="cork-admin-404" class="error-img">
    <img src="{{ Vite::asset('resources/images/error.svg') }}" alt="cork-admin-404" class="error-img">
    <img src="{{ Vite::asset('resources/images/error.svg') }}" alt="cork-admin-404" class="error-img">
    <img src="{{ Vite::asset('resources/images/error.svg') }}" alt="cork-admin-404" class="error-img">
    <img src="{{ Vite::asset('resources/images/error.svg') }}" alt="cork-admin-404" class="error-img">
    <img src="{{ Vite::asset('resources/images/error.svg') }}" alt="cork-admin-404" class="error-img">




    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <x-slot:footerFiles>

    </x-slot>
    <!--  END CUSTOM SCRIPTS FILE  -->
</x-base-layout>
