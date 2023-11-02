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

        <link rel="stylesheet" type="text/css" href="{{ asset('plugins/tomSelect/tom-select.default.min.css') }}">
        @vite(['resources/scss/light/plugins/tomSelect/custom-tomSelect.scss'])
        @vite(['resources/scss/dark/plugins/tomSelect/custom-tomSelect.scss'])

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
                            <div class="col-md-2">
                                {{-- yearMonth --}}
                                <input type="text" class="form-control form-control-sm yearMonth" name="yearMonth"
                                    placeholder="" value="{{ $yearMonth }}" id="yearMonth">
                            </div>
                            <div class="col-md-8">
                                {{-- brands --}}
                                <select class="form-control" name="selectBrands[]" multiple autocomplete="off"
                                    id="select-brands">
                                    @foreach ($brands as $brand)
                                        <option value="{{ $brand }}"
                                            @if (in_array($brand, $selectBrands)) selected @endif>
                                            {{ $brand }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-2 ">
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
        {{-- flatpickr --}}
        <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
        <script src="https://npmcdn.com/flatpickr/dist/l10n/zh-tw.js"></script>
        {{-- monthSelectPlugin  cdn --}}
        <script src="https://cdn.jsdelivr.net/npm/flatpickr@latest/dist/plugins/monthSelect/index.js"></script>
        <script src="{{ asset('plugins/tomSelect/tom-select.base.js') }}"></script>

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
                    @if ($restaurants->count() > 10)
                        height: '{{ $restaurants->count() * 50 }}px',
                    @endif
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


        <script>
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
            new TomSelect("#select-brands", {

            });

            new TomSelect("#select-shops", {

            });
        </script>

    </x-slot>
    <!--  END CUSTOM SCRIPTS FILE  -->
</x-base-layout>
