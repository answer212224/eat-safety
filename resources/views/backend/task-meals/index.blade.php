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
        <link rel="stylesheet" href="{{ asset('plugins/flatpickr/flatpickr.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/noUiSlider/nouislider.min.css') }}">
        @vite(['resources/scss/light/plugins/flatpickr/custom-flatpickr.scss'])
        @vite(['resources/scss/dark/plugins/flatpickr/custom-flatpickr.scss'])
        <!--  END CUSTOM STYLE FILE  -->
    </x-slot:headerFiles>

    <div class="row layout-top-spacing">
    </div>

    {{-- BREADCRUMB --}}
    <div class="page-meta">
        <nav class="breadcrumb-style-one" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">資料</li>
                <li class="breadcrumb-item active" aria-current="page">稽核採樣資料</li>
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

                            <label for="date-range" class="col-sm-1 col-form-label col-form-label-sm">稽核期間:</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control form-control-sm" name="date-range"
                                    id="date-range" name="date-range" placeholder="" value="{{ $dateRange }}">
                            </div>
                            <div class="col-sm-4 ml-1 text-center">
                                <button class="btn btn-info w-75">篩選</button>
                            </div>
                        </div>
                    </form>
                    <table id="html5-extension" class="table dt-table-hover" style="width:100%">
                        <thead>
                            <tr>
                                <th>月份</th>
                                <th>日期</th>
                                <th>品牌</th>
                                <th>店別</th>
                                <th>類別</th>
                                <th>廚別</th>
                                <th>區站</th>
                                <th>編號</th>
                                <th>名稱</th>
                                <th>備註</th>
                                <th>檢項</th>
                                <th>檢樣項目</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tasks as $task)
                                @foreach ($task->meals as $meal)
                                    <tr>
                                        <td>{{ $meal->effective_date }}</td>
                                        <td>{{ $task->task_date }}</td>
                                        <td>{{ $meal->brand }}</td>
                                        <td>{{ $meal->shop }}</td>
                                        <td>{{ $meal->category }}</td>
                                        <td>{{ $meal->chef }}</td>
                                        <td>{{ $meal->workspace }}</td>
                                        <td>{{ $meal->qno }}</td>
                                        <td>{{ $meal->name }}</td>
                                        <td>{{ $meal->note }}</td>
                                        <td>{{ $meal->item }}</td>
                                        <td>{{ $meal->items }}</td>
                                    </tr>
                                @endforeach
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
        <script src="{{ asset('plugins/flatpickr/flatpickr.js') }}"></script>
        <script src="https://npmcdn.com/flatpickr/dist/l10n/zh-tw.js"></script>

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
                            extend: 'csv',
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
                "pageLength": 10
            });

            // flatpickr
            flatpickr.localize(flatpickr.l10ns.zh_tw);
            var flatpickr = flatpickr(document.getElementById('date-range'), {
                mode: "range",
                dateFormat: "Y-m-d",


            });

            flatpickr.localize(flatpickr.l10ns.zh_tw);
        </script>
    </x-slot:footerFiles>
</x-base-layout>
