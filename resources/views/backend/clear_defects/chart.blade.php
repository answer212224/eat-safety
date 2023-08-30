<x-base-layout :scrollspy="false">
    <x-slot:pageTitle>
        {{ $title }}
    </x-slot:pageTitle>

    <x-slot:headerFiles>
        <link rel="stylesheet" href="{{ asset('plugins/apex/apexcharts.css') }}">
        {{-- flatpickr --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr@latest/dist/plugins/monthSelect/style.css">
    </x-slot:headerFiles>

    <div class="row layout-top-spacing">
    </div>

    {{-- 統計btn --}}
    <div class="row mb-3">
        <div class="col-12">
            <div class="card">
                <div class="card-body w-50">
                    {{-- 篩選月份 --}}
                    <form action="{{ route('clear-defect-chart') }}" method="get">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">月份統計圖</span>
                            </div>
                            <input type="text" class="form-control form-control-sm" name="yearMonth" id="yearMonth"
                                placeholder="" value="{{ request()->yearMonth }}">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">查看</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            {{ $title }}
        </div>
        <div class="card-body">
            <div id="chart"></div>
        </div>
    </div>


    <x-slot:footerFiles>
        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
        {{-- flatpickr --}}
        <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
        <script src="https://npmcdn.com/flatpickr/dist/l10n/zh-tw.js"></script>
        {{-- monthSelectPlugin  cdn --}}
        <script src="https://cdn.jsdelivr.net/npm/flatpickr@latest/dist/plugins/monthSelect/index.js"></script>

        <script>
            flatpickr("#yearMonth", {
                "locale": "zh_tw",
                plugins: [
                    new monthSelectPlugin({
                        shorthand: true,
                        dateFormat: "Y-m",
                        altFormat: "M/Y",

                    }),
                ],
                onChange: function(selectedDates, dateStr, instance) {
                    console.log(dateStr);

                }
            });
        </script>

        <script>
            var options = {
                series: @json($series),
                chart: {
                    type: 'bar',
                    height: 450,
                    stacked: true,
                    toolbar: {
                        show: true
                    },
                    zoom: {
                        enabled: true
                    }
                },
                colors: @json($colors),
                responsive: [{
                    breakpoint: 480,
                    options: {
                        legend: {
                            position: 'bottom',
                            offsetX: -10,
                            offsetY: 0
                        }
                    }
                }],
                plotOptions: {
                    bar: {
                        horizontal: false,
                        borderRadius: 10,
                        dataLabels: {
                            total: {
                                enabled: true,
                                style: {
                                    fontSize: '13px',
                                    fontWeight: 900
                                }
                            }
                        }
                    },
                },

                xaxis: {
                    categories: @json($defectGroupByGroupKeys),
                },
                legend: {
                    position: 'right',
                    offsetY: 40
                },
                fill: {
                    opacity: 1
                }

            };

            var chart = new ApexCharts(document.querySelector("#chart"), options);
            chart.render();
        </script>
    </x-slot:footerFiles>
</x-base-layout>
