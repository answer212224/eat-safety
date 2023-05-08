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
    
    <div class="row layout-top-spacing">

        <!-- Sales -->
        
        <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
            <x-widgets._w-chart-one title="Revenue"/>
        </div>
    
        <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
            <x-widgets._w-chart-two title="Sales by Category"/>
        </div>
    
        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
            <x-widgets._w-two title="Daily sales"/>
        </div>
    
        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
            <x-widgets._w-three title="Summary"/>
        </div>
    
        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
            <x-widgets._w-one title=""/>
        </div>
    
        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
            <x-widgets._w-activity-four title="Recent Activities"/>
        </div>
    
        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
            <x-widgets._w-table-one title="Transactions"/>
        </div>
    
        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
            <x-widgets._w-wallet-one title="Total Balance"/>
        </div>
        
        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
            <x-widgets._w-table-two title="Recent Orders"/>
        </div>
    
        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
            <x-widgets._w-table-three title="Top Selling Product"/>
        </div>
        
    </div>
    
    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <x-slot:footerFiles>

        <script src="{{asset('plugins/apex/apexcharts.min.js')}}"></script>

        {{-- Sales --}}
        @vite(['resources/assets/js/widgets/_wTwo.js'])
        @vite(['resources/assets/js/widgets/_wOne.js'])
        @vite(['resources/assets/js/widgets/_wChartOne.js'])
        @vite(['resources/assets/js/widgets/_wChartTwo.js'])
        @vite(['resources/assets/js/widgets/_wActivityFour.js'])

    </x-slot>
    <!--  END CUSTOM SCRIPTS FILE  -->
</x-base-layout>