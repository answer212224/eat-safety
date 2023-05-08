<x-base-layout :scrollspy="false">

    <x-slot:pageTitle>
        {{$title}} 
    </x-slot>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <x-slot:headerFiles>
        <!--  BEGIN CUSTOM STYLE FILE  -->
        <link rel="stylesheet" href="{{asset('plugins/apex/apexcharts.css')}}">

        @vite(['resources/scss/light/assets/components/list-group.scss'])
        @vite(['resources/scss/light/assets/widgets/modules-widgets.scss'])

        @vite(['resources/scss/dark/assets/components/list-group.scss'])
        @vite(['resources/scss/dark/assets/widgets/modules-widgets.scss'])
        <!--  END CUSTOM STYLE FILE  -->
    </x-slot>
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- Analytics -->

    <div class="row layout-top-spacing">

        <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
            <x-widgets._w-six title="Statistics"/>
        </div>
        
        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
            <x-widgets._w-card-four title="Expenses"/>
        </div>  
    
        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
            <x-widgets._w-card-five title="Total Balance" balance="$41,741.42" percentage="+ 13.6%" button="View Report" link="javascript:void(0);"/>
        </div>
    
        <div class="col-xl-9 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
            <x-widgets._w-chart-three title="Unique Visitors"/>
        </div>
    
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
            <x-widgets._w-activity-five title="Activity Log"/>
        </div>
    
        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
             <x-widgets._w-four title="Visitors by Browser"/>
        </div>
    
        <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12">
            <x-widgets._w-hybrid-one title="Followers" chart-id="hybrid_followers"/>
        </div>
    
        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
            <x-widgets._w-five title="Figma Design"/>
        </div>
    
        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
            <x-widgets._w-card-one title="Jimmy Turner"/>
        </div>
    
        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
            <x-widgets._w-card-two title="Dev Summit - New York"/>
        </div>

    </div>
    
    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <x-slot:footerFiles>
        <script src="{{asset('plugins/apex/apexcharts.min.js')}}"></script>
        
        {{-- Analytics --}}
        @vite(['resources/assets/js/widgets/_wSix.js'])
        @vite(['resources/assets/js/widgets/_wChartThree.js'])
        @vite(['resources/assets/js/widgets/_wHybridOne.js'])
        @vite(['resources/assets/js/widgets/_wActivityFive.js'])
    </x-slot>
    <!--  END CUSTOM SCRIPTS FILE  -->
</x-base-layout>