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
            <div class="card">
                <div class="card-header">
                    {{ $title }} 清檢缺失數量
                </div>
                <div class="card-body">
                    <div id="chart"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
            <livewire:restaurant-activites :restaurant="$restaurant" />
        </div>


    </div>

    <div class="row">
        <div class="card">
            <div id="linechart"></div>
        </div>
    </div>

    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <x-slot:footerFiles>

        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

        <script>
            var options = {
                series: [{
                        name: '清檢缺失',
                        data: @json($defectsCount->values())
                    },

                ],
                chart: {
                    type: 'bar',
                    height: 500
                },
                // plotOptions用途是設定圖表的樣式
                plotOptions: {
                    bar: {
                        horizontal: false,
                        columnWidth: '55%',
                        endingShape: 'rounded'
                    },
                },
                // dataLabels用途是顯示數值
                dataLabels: {
                    enabled: true
                },

                xaxis: {
                    categories: @json($defectsCount->keys()),
                },
                yaxis: {
                    title: {
                        text: '數量'
                    }
                },
                fill: {
                    opacity: 1
                },

            };

            var chart = new ApexCharts(document.querySelector("#chart"), options);
            chart.render();
        </script>

        <script>
            var options = {
                series: [{
                        name: "清檢",
                        data: @json($yearMonthDateDeductPoints->values())
                    },


                ],
                chart: {
                    height: 500,
                    type: 'line',
                    dropShadow: {
                        enabled: true,
                        color: '#000',
                        top: 18,
                        left: 7,
                        blur: 10,
                        opacity: 0.2
                    },
                    toolbar: {
                        show: true,
                        tools: {
                            download: true,
                            selection: false,
                            zoom: true,
                            zoomin: true,
                            zoomout: true,
                            pan: false,
                            reset: false | '<img src="/static/icons/reset.png" width="20">',
                            customIcons: []
                        }
                    }
                },
                colors: ['#77B6EA', '#545454'],
                dataLabels: {
                    enabled: true,
                },
                stroke: {
                    curve: 'smooth'
                },
                title: {
                    text: '{{ $title }} 清檢平均分數',
                    style: {
                        fontSize: '24px',
                        fontWeight: 'bold',
                        fontFamily: undefined,
                        color: '#263238'
                    },
                },
                grid: {
                    borderColor: '#e7e7e7',
                    row: {
                        colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
                        opacity: 0.5
                    },
                },
                markers: {
                    size: 1
                },
                xaxis: {
                    categories: @json($yearMonthDateDeductPoints->keys()),
                    title: {
                        text: '年月'
                    }
                },
                yaxis: {
                    title: {
                        text: '平均分數'
                    },

                },
                // legend用途是設定圖表的樣式
                legend: {
                    position: 'top',
                    horizontalAlign: 'right',
                    floating: true,
                    offsetY: -25,
                    offsetX: -5
                }
            };

            var chart = new ApexCharts(document.querySelector("#linechart"), options);
            chart.render();
        </script>

    </x-slot>
    <!--  END CUSTOM SCRIPTS FILE  -->
</x-base-layout>
