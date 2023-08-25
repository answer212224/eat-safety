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

                <div class="col-xl-9 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                    <div id="chart"></div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                    <livewire:restaurant-activites :restaurant="$restaurant" />
                </div>


            </div>

            <!--  BEGIN CUSTOM SCRIPTS FILE  -->
            <x-slot:footerFiles>

                <script src="{{ asset('plugins/apex/apexcharts.min.js') }}"></script>

                <script>
                        var options = {
                            series: [{
                                name: '食安缺失',
                                data: @json($defects)
                            }, {
                                name: '清檢缺失',
                                data: @json($clearDefects)
                            },],
                            chart: {
                                type: 'bar',
                                height: 500
                            },
                            plotOptions: {
                                bar: {
                                    horizontal: false,
                                    columnWidth: '55%',
                                    endingShape: 'rounded'
                                },
                            },
                            dataLabels: {
                                enabled: false
                            },
                            stroke: {
                                show: true,
                                width: 2,
                                colors: ['transparent']
                            },
                            xaxis: {
                                categories: ['一月', '二月', '三月', '四月', '五月', '六月', '七月', '八月', '九月', '十月', '十一月', '十二月'],
                            },
                            yaxis: {
                                title: {
                                    text: '數量'
                                }
                            },
                            fill: {
                                opacity: 1
                            },
                            tooltip: {

                            }
                        };

                    var chart = new ApexCharts(document.querySelector("#chart"), options);
                    chart.render();
                </script>

                </x-slot>
                <!--  END CUSTOM SCRIPTS FILE  -->
</x-base-layout>
