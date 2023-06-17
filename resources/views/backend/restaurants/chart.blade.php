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
                    <x-widgets._w-chart-three
                        title="{{ today()->format('Y') }}年 {{ $restaurant->brand }}{{ $restaurant->shop }} 稽核任務每月數量" />
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                    <livewire:restaurant-activites :restaurant="$restaurant" />
                </div>


            </div>

            <!--  BEGIN CUSTOM SCRIPTS FILE  -->
            <x-slot:footerFiles>

                <script src="{{ asset('plugins/apex/apexcharts.min.js') }}"></script>

                <script>
                    /**
                     *
                     * Widget Chart Three
                     *
                     **/

                    window.addEventListener("load", function() {
                        try {

                            let getcorkThemeObject = sessionStorage.getItem("theme");
                            let getParseObject = JSON.parse(getcorkThemeObject)
                            let ParsedObject = getParseObject;

                            if (ParsedObject.settings.layout.darkMode) {

                                var Theme = 'dark';

                                Apex.tooltip = {
                                    theme: Theme
                                }

                                /**
                                  ==============================
                                  |    @Options Charts Script   |
                                  ==============================
                                */

                                /*
                                  ===================================
                                      Unique Visitors | Options
                                  ===================================
                                */

                                var d_1options1 = {
                                    chart: {
                                        height: 350,
                                        type: 'bar',
                                        toolbar: {
                                            show: false,
                                        }
                                    },
                                    colors: ['#622bd7', '#ffbb44', '#00ab55'],
                                    plotOptions: {
                                        bar: {
                                            horizontal: false,
                                            columnWidth: '55%',
                                            endingShape: 'rounded',
                                            borderRadius: 10,

                                        },
                                    },
                                    dataLabels: {
                                        enabled: false
                                    },
                                    legend: {
                                        position: 'bottom',
                                        horizontalAlign: 'center',
                                        fontSize: '14px',
                                        markers: {
                                            width: 10,
                                            height: 10,
                                            offsetX: -5,
                                            offsetY: 0
                                        },
                                        itemMargin: {
                                            horizontal: 10,
                                            vertical: 8
                                        }
                                    },
                                    grid: {
                                        borderColor: '#191e3a',
                                    },
                                    stroke: {
                                        show: true,
                                        width: 2,
                                        colors: ['transparent']
                                    },
                                    series: [
                                        @isset($tasks['食安及5S'])
                                            {
                                                name: '食安及5S',
                                                data: @json($tasks['食安及5S']->values())

                                            },
                                        @endisset
                                        @isset($tasks['清潔檢查'])
                                            {
                                                name: '清潔檢查',
                                                data: @json($tasks['清潔檢查']->values())

                                            },
                                        @endisset
                                        @isset($tasks['餐點採樣'])
                                            {
                                                name: '餐點採樣',
                                                data: @json($tasks['餐點採樣']->values())

                                            },
                                        @endisset
                                    ],
                                    xaxis: {
                                        categories: ['一月', '二月', '三月', '四月', '五月', '六月', '七月', '八月', '九月', '十月',
                                            '十一月', '十二月'
                                        ],
                                    },
                                    fill: {
                                        type: 'gradient',
                                        gradient: {
                                            shade: Theme,
                                            type: 'vertical',
                                            shadeIntensity: 0.3,
                                            inverseColors: false,
                                            opacityFrom: 1,
                                            opacityTo: 0.8,
                                            stops: [0, 100]
                                        }
                                    },
                                    tooltip: {
                                        marker: {
                                            show: false,
                                        },
                                        theme: Theme,
                                        y: {
                                            formatter: function(val) {
                                                return val
                                            }
                                        }
                                    },
                                    responsive: [{
                                        breakpoint: 767,
                                        options: {
                                            plotOptions: {
                                                bar: {
                                                    borderRadius: 0,
                                                    columnWidth: "50%"
                                                }
                                            }
                                        }
                                    }, ]
                                }


                            } else {

                                var Theme = 'dark';

                                Apex.tooltip = {
                                    theme: Theme
                                }

                                /**
                                  ==============================
                                  |    @Options Charts Script   |
                                  ==============================
                                */

                                /*
                                  ===================================
                                      Unique Visitors | Options
                                  ===================================
                                */

                                var d_1options1 = {
                                    chart: {
                                        height: 350,
                                        type: 'bar',
                                        toolbar: {
                                            show: false,
                                        }
                                    },
                                    colors: ['#622bd7', '#ffbb44'],
                                    plotOptions: {
                                        bar: {
                                            horizontal: false,
                                            columnWidth: '55%',
                                            endingShape: 'rounded',
                                            borderRadius: 10,

                                        },
                                    },
                                    dataLabels: {
                                        enabled: false
                                    },
                                    legend: {
                                        position: 'bottom',
                                        horizontalAlign: 'center',
                                        fontSize: '14px',
                                        markers: {
                                            width: 10,
                                            height: 10,
                                            offsetX: -5,
                                            offsetY: 0
                                        },
                                        itemMargin: {
                                            horizontal: 10,
                                            vertical: 8
                                        }
                                    },
                                    grid: {
                                        borderColor: '#e0e6ed',
                                    },
                                    stroke: {
                                        show: true,
                                        width: 2,
                                        colors: ['transparent']
                                    },
                                    series: [{
                                        name: 'Direct',
                                        data: [58, 44, 55, 57, 56, 61, 58, 63, 60, 66, 56, 63]
                                    }, {
                                        name: 'Organic',
                                        data: [91, 76, 85, 101, 98, 87, 105, 91, 114, 94, 66, 70]
                                    }],
                                    xaxis: {
                                        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep',
                                            'Oct',
                                            'Nov', 'Dec'
                                        ],
                                    },
                                    fill: {
                                        type: 'gradient',
                                        gradient: {
                                            shade: Theme,
                                            type: 'vertical',
                                            shadeIntensity: 0.3,
                                            inverseColors: false,
                                            opacityFrom: 1,
                                            opacityTo: 0.8,
                                            stops: [0, 100]
                                        }
                                    },
                                    tooltip: {
                                        marker: {
                                            show: false,
                                        },
                                        theme: Theme,
                                        y: {
                                            formatter: function(val) {
                                                return val
                                            }
                                        }
                                    },
                                    responsive: [{
                                        breakpoint: 767,
                                        options: {
                                            plotOptions: {
                                                bar: {
                                                    borderRadius: 0,
                                                    columnWidth: "50%"
                                                }
                                            }
                                        }
                                    }, ]
                                }

                            }

                            /**
                                ==============================
                                |    @Render Charts Script    |
                                ==============================
                            */

                            /*
                                ===================================
                                    Unique Visitors | Script
                                ===================================
                            */

                            let d_1C_3 = new ApexCharts(
                                document.querySelector("#uniqueVisits"),
                                d_1options1
                            );
                            d_1C_3.render();


                            /**
                             * =================================================================================================
                             * |     @Re_Render | Re render all the necessary JS when clicked to switch/toggle theme           |
                             * =================================================================================================
                             */

                            document.querySelector('.theme-toggle').addEventListener('click', function() {

                                let getcorkThemeObject = sessionStorage.getItem("theme");
                                let getParseObject = JSON.parse(getcorkThemeObject)
                                let ParsedObject = getParseObject;

                                // console.log(ParsedObject.settings.layout.darkMode)

                                if (ParsedObject.settings.layout.darkMode) {

                                    /*
                                                ==============================
                                                |    @Re-Render Charts Script    |
                                                ==============================
                                            */

                                    /*
                                        ===================================
                                            Unique Visitors | Script
                                        ===================================
                                    */

                                    d_1C_3.updateOptions({
                                        grid: {
                                            borderColor: '#191e3a',
                                        },
                                    })

                                } else {

                                    /*
                                        ==============================
                                        |    @Re-Render Charts Script    |
                                        ==============================
                                    */

                                    /*
                                        ===================================
                                            Unique Visitors | Script
                                        ===================================
                                    */

                                    d_1C_3.updateOptions({
                                        grid: {
                                            borderColor: '#e0e6ed',
                                        },
                                    })

                                }

                            })


                        } catch (e) {
                            // statements
                            console.log(e);
                        }
                    })
                </script>

                </x-slot>
                <!--  END CUSTOM SCRIPTS FILE  -->
</x-base-layout>
