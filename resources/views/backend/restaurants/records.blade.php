<x-base-layout :scrollspy="false">
    <x-slot:pageTitle>
        {{ $title }}
    </x-slot:pageTitle>

    <x-slot:headerFiles>
        {{-- datatable  --}}
        <link rel="stylesheet" href="{{ asset('plugins/table/datatable/datatables.css') }}">
        @vite(['resources/scss/light/plugins/table/datatable/dt-global_style.scss'])
        @vite(['resources/scss/light/plugins/table/datatable/custom_dt_miscellaneous.scss'])
        {{-- tom select --}}
        <link rel="stylesheet" type="text/css" href="{{ asset('plugins/tomSelect/tom-select.default.min.css') }}">
        @vite(['resources/scss/light/plugins/tomSelect/custom-tomSelect.scss'])
        @vite(['resources/scss/dark/plugins/tomSelect/custom-tomSelect.scss'])



    </x-slot:headerFiles>

    <div class="page-meta">
        <nav class="breadcrumb-style-one" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">紀錄</li>
                <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
            </ol>
        </nav>
    </div>

    <div class="row layout-top-spacing">
        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-content widget-content-area">
                    {{-- 門市篩選 --}}
                    <form action="" method="get">
                        <div class="table-form">
                            <label for="restaurants" class="col-sm-1 col-form-label col-form-label-sm">門市篩選:</label>
                            <div class="col-sm-7">
                                <select id="restaurants" name="restaurants[]" autocomplete="off" multiple>
                                    @foreach ($restaurants as $brand => $restaurants)
                                        <optgroup label="{{ $brand }}">
                                            @foreach ($restaurants as $restaurant)
                                                <option value="{{ $restaurant->id }}">
                                                    {{ $restaurant->sid }}{{ $restaurant->brand }}{{ $restaurant->shop }}
                                                </option>
                                            @endforeach

                                        </optgroup>
                                    @endforeach
                                </select>
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
                            </tr>
                        </thead>
                        <tbody>
                            <tr>

                                <td>開發中</td>
                                <td>開發中</td>
                                <td>開發中</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    {{-- CONTENT --}}


    <x-slot:footerFiles>
        {{-- jquery --}}
        <script src="{{ asset('plugins/global/vendors.min.js') }}"></script>
        {{-- datatable  --}}
        <script src="{{ asset('plugins/global/vendors.min.js') }}"></script>
        <script src="{{ asset('plugins/table/datatable/datatables.js') }}"></script>
        <script src="{{ asset('plugins/table/datatable/button-ext/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('plugins/table/datatable/button-ext/jszip.min.js') }}"></script>
        <script src="{{ asset('plugins/table/datatable/button-ext/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('plugins/table/datatable/button-ext/buttons.print.min.js') }}"></script>
        {{-- datatable js --}}
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
                //新到舊
                "order": [
                    [1, "asc"]
                ],
            });
        </script>
        {{-- tom select --}}
        <script src="https://cdn.jsdelivr.net/npm/tom-select@2.2.2/dist/js/tom-select.complete.min.js"></script>

        <script src="{{ asset('plugins/tomSelect/tom-select.base.js') }}"></script>
        <script>
            new TomSelect("#restaurants", {
                sortField: 'text'
            });
        </script>
    </x-slot:footerFiles>
</x-base-layout>
