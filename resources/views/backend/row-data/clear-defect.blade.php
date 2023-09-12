<x-base-layout :scrollspy="false">
    <x-slot:pageTitle>
        {{ $title }}
    </x-slot:pageTitle>

    <x-slot:headerFiles>
        <link rel="stylesheet" href="{{ asset('plugins/table/datatable/datatables.css') }}">
        @vite(['resources/scss/light/plugins/table/datatable/dt-global_style.scss'])
        @vite(['resources/scss/light/plugins/table/datatable/custom_dt_miscellaneous.scss'])
        @vite(['resources/scss/dark/plugins/table/datatable/dt-global_style.scss'])
        @vite(['resources/scss/dark/plugins/table/datatable/custom_dt_miscellaneous.scss'])
        {{-- flatpickr --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr@latest/dist/plugins/monthSelect/style.css">
        <!--  END CUSTOM STYLE FILE  -->
    </x-slot:headerFiles>

    {{-- BREADCRUMB --}}
    <div class="page-meta">
        <nav class="breadcrumb-style-one" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">紀錄</li>
                <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
            </ol>
        </nav>
    </div>

    {{-- CONTENT --}}
    <div class="row layout-top-spacing">
        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-content widget-content-area">
                    <form action="" method="get">
                        <div class="table-form">

                            <label for="yearMonth" class="col-sm-1 col-form-label col-form-label-sm">稽核月份:</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control form-control-sm" name="yearMonth"
                                    id="yearMonth" name="yearMonth" placeholder="" value="{{ $yearMonth }}">
                            </div>
                            <div class="col-sm-4 ml-1 text-center">
                                <button class="btn btn-info w-75">篩選</button>
                            </div>
                        </div>
                    </form>

                    <table id="html5-extension" class="table dt-table-hover" style="width:100%">
                        <thead>
                            <tr>
                                @foreach ($tableHeader as $header)
                                    <th>{{ $header }}</th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tableBodys as $body)
                                <tr>

                                    <td>{{ $body['restaurant'] }}</td>
                                    <td>{{ $body['score'] }}</td>
                                    @foreach ($body['backTask'] as $item)
                                        @if (is_array($item))
                                            {{-- 提示區站名稱 --}}
                                            <td class="bs-tooltip" title="{{ $item['area'] }}">
                                                {{ $item['count'] }}
                                            </td>
                                        @else
                                            <td>{{ $item }}</td>
                                        @endif
                                    @endforeach
                                    <td class="bs-tooltip" title="{{ $body['frontTask']['area'] }}">
                                        {{ $body['frontTask']['count'] }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

    <x-slot:footerFiles>
        <script src="{{ asset('plugins/global/vendors.min.js') }}"></script>
        <script src="{{ asset('plugins/table/datatable/datatables.js') }}"></script>
        <script src="{{ asset('plugins/table/datatable/button-ext/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('plugins/table/datatable/button-ext/jszip.min.js') }}"></script>
        <script src="{{ asset('plugins/table/datatable/button-ext/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('plugins/table/datatable/button-ext/buttons.print.min.js') }}"></script>
        {{-- flatpickr --}}
        <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
        <script src="https://npmcdn.com/flatpickr/dist/l10n/zh-tw.js"></script>
        {{-- monthSelectPlugin  cdn --}}
        <script src="https://cdn.jsdelivr.net/npm/flatpickr@latest/dist/plugins/monthSelect/index.js"></script>

        <script>
            $('#html5-extension').DataTable({
                "dom": "<'dt--top-section'<'row'<'col-sm-12 col-md-6 d-flex justify-content-md-start justify-content-center'B><'col-sm-12 col-md-6 d-flex justify-content-md-end justify-content-center mt-md-0 mt-3'f>>>" +
                    "<'table-responsive'tr>" +
                    "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
                buttons: {
                    buttons: [{
                            extend: 'copy',
                            className: 'btn'
                        },
                        {
                            extend: 'excel',
                            className: 'btn'
                        },
                        {
                            extend: 'print',
                            className: 'btn'
                        }
                    ]
                },
                "oLanguage": {
                    "oPaginate": {
                        "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                        "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
                    },
                    "sInfo": "Showing page _PAGE_ of _PAGES_",
                    "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                    "sSearchPlaceholder": "Search...",
                    "sLengthMenu": "Results :  _MENU_",
                },
                "stripeClasses": [],
                "lengthMenu": [7, 10, 20, 50],
                "pageLength": 10,

            });

            flatpickr("#yearMonth", {
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
    </x-slot:footerFiles>
</x-base-layout>
