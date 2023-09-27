<x-base-layout :scrollspy="false">

    <x-slot:pageTitle>
        {{ $title }}
    </x-slot>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <x-slot:headerFiles>
        <!--  BEGIN CUSTOM STYLE FILE  -->
        <link rel="stylesheet" href="{{ asset('plugins/apex/apexcharts.css') }}">

        @vite(['resources/scss/light/assets/components/list-group.scss'])
        @vite(['resources/scss/light/assets/widgets/modules-widgets.scss'])

        @vite(['resources/scss/dark/assets/components/list-group.scss'])
        @vite(['resources/scss/dark/assets/widgets/modules-widgets.scss'])

        <!--  END CUSTOM STYLE FILE  -->
    </x-slot>
    <!-- END GLOBAL MANDATORY STYLES -->

    <div class="row layout-top-spacing">
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">

                <div class="card-body">
                    <form action="" method="get">
                        <div class="row">
                            <div class="col-5">
                                {{-- 年份篩選select  --}}
                                <div class="form-group">
                                    <select class="form-select" id="year" name="year">
                                        <option value="" {{ request()->year == '' ? 'selected' : '' }}>全部</option>
                                        <option value="2023" {{ request()->year == '2023' ? 'selected' : '' }}>2023
                                        </option>
                                        <option value="2024" {{ request()->year == '2024' ? 'selected' : '' }}>2024
                                        </option>
                                        <option value="2025" {{ request()->year == '2025' ? 'selected' : '' }}>2025
                                        </option>
                                        <option value="2026" {{ request()->year == '2026' ? 'selected' : '' }}>2026
                                        </option>
                                        <option value="2027" {{ request()->year == '2027' ? 'selected' : '' }}>2027
                                        </option>
                                    </select>
                                </div>
                            </div>
                            {{-- 月份篩選select  --}}
                            <div class="col-5">
                                <div class="form-group">
                                    <select class="form-select" name="month" id="month">
                                        {{-- 假如resquest()->month = value selected --}}
                                        <option value="" {{ request()->month == '' ? 'selected' : '' }}>全部
                                        </option>
                                        <option value="1" {{ request()->month == '1' ? 'selected' : '' }}>一月
                                        </option>
                                        <option value="2" {{ request()->month == '2' ? 'selected' : '' }}>二月
                                        </option>
                                        <option value="3" {{ request()->month == '3' ? 'selected' : '' }}>三月
                                        </option>
                                        <option value="4" {{ request()->month == '4' ? 'selected' : '' }}>四月
                                        </option>
                                        <option value="5" {{ request()->month == '5' ? 'selected' : '' }}>五月
                                        </option>
                                        <option value="6" {{ request()->month == '6' ? 'selected' : '' }}>六月
                                        </option>
                                        <option value="7" {{ request()->month == '7' ? 'selected' : '' }}>七月
                                        </option>
                                        <option value="8" {{ request()->month == '8' ? 'selected' : '' }}>八月
                                        </option>
                                        <option value="9" {{ request()->month == '9' ? 'selected' : '' }}>九月
                                        </option>
                                        <option value="10" {{ request()->month == '10' ? 'selected' : '' }}>十月
                                        </option>
                                        <option value="11" {{ request()->month == '11' ? 'selected' : '' }}>十一月
                                        </option>
                                        <option value="12" {{ request()->month == '12' ? 'selected' : '' }}>十二月
                                        </option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-2 ">
                                <button type="submit" class="btn btn-primary w-100 h-100" id="search">篩選</button>
                            </div>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>

    <div class="row layout-top-spacing">
    </div>

    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
        <div class="card">
            <div class="card-header">
                {{ $title }}缺失數量
            </div>
            <div class="card-body">
                <div id="chart"></div>
            </div>
        </div>
    </div>




    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <x-slot:footerFiles>

        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

        <script>
            var options = {
                series: [{
                    name: '食安缺失',
                    data: @json($defectsCount->pluck('count')),
                }, {
                    name: '清檢缺失',
                    data: @json($clearDefectsCount->pluck('count')),
                }],
                chart: {
                    type: 'bar',
                    height: '3600',
                },
                plotOptions: {
                    bar: {
                        horizontal: true,
                        dataLabels: {
                            position: 'top',
                        },
                    }
                },
                dataLabels: {
                    enabled: true,
                    offsetX: -6,
                    style: {
                        fontSize: '12px',
                        colors: ['#fff']
                    }
                },
                stroke: {
                    show: true,
                    width: 1,
                    colors: ['#fff']
                },
                tooltip: {
                    shared: true,
                    intersect: false
                },
                xaxis: {
                    categories: @json($defectsCount->pluck('name')),
                },
            };

            var chart = new ApexCharts(document.querySelector("#chart"), options);
            chart.render();
        </script>

    </x-slot>
    <!--  END CUSTOM SCRIPTS FILE  -->
</x-base-layout>
