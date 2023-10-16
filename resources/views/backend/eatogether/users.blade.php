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

        {{-- flatpickr --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr@latest/dist/plugins/monthSelect/style.css">

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
                            <label for="yearMonthe" class="col-md-1 col-form-label col-form-label-sm">稽核月份:</label>
                            <div class="col-md-6">
                                {{-- yearMonth篩選 --}}
                                <input type="text" class="form-control form-control-sm yearMonth" name="yearMonth"
                                    placeholder="" value="{{ $yearMonth }}" id="yearMonth">
                            </div>
                            <div class="col-md-5">
                                {{-- 篩選月份 --}}
                                <button class="btn btn-primary w-100" type="submit">查看</button>
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
                {{ $title }}
            </div>
            <div class="card-body">
                <div id="chart"></div>

            </div>
        </div>
    </div>




    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <x-slot:footerFiles>

        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
        {{-- flatpickr --}}
        <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
        <script src="https://npmcdn.com/flatpickr/dist/l10n/zh-tw.js"></script>
        {{-- monthSelectPlugin  cdn --}}
        <script src="https://cdn.jsdelivr.net/npm/flatpickr@latest/dist/plugins/monthSelect/index.js"></script>

        <script>
            var options = {
                series: [{
                    name: '{{ $yearMonth }} 食安平均缺失數',
                    data: @json($users->pluck('defectAverage')),
                }, {
                    name: '{{ $yearMonth }} 清檢平均缺失數',
                    data: @json($users->pluck('clearDefectAverage')),
                }],
                chart: {
                    type: 'bar',
                    height: '1200',
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
                    categories: @json($users->pluck('name')),
                },
            };

            var chart = new ApexCharts(document.querySelector("#chart"), options);
            chart.render();

            // flatpickr
            flatpickr(".yearMonth", {
                "locale": "zh_tw",
                plugins: [
                    new monthSelectPlugin({
                        shorthand: true,
                        dateFormat: "Y-m",
                        altFormat: "M/Y",

                    }),
                ],

            });
        </script>

    </x-slot>
    <!--  END CUSTOM SCRIPTS FILE  -->
</x-base-layout>
