<x-base-layout :scrollspy="false">

    <x-slot:pageTitle>
        {{ $title }}
    </x-slot:pageTitle>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <x-slot:headerFiles>
        <!--  BEGIN CUSTOM STYLE FILE  -->

        <!--  END CUSTOM STYLE FILE  -->
    </x-slot:headerFiles>
    <!-- END GLOBAL MANDATORY STYLES -->

    <div class="row layout-top-spacing">

        @dump(asset($taskHasDefect->images[0]))
        image: <img src="{{ asset('storage/' . $taskHasDefect->images[0]) }}" alt="">
        image: <img src="{{ asset('storage/' . $taskHasDefect->images[1]) }}" alt="">

    </div>

    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <x-slot:footerFiles>

    </x-slot:footerFiles>
    <!--  END CUSTOM SCRIPTS FILE  -->
</x-base-layout>
