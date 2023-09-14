<x-base-layout :scrollspy="false">

    <x-slot:pageTitle>
        {{ $title }}
    </x-slot>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <x-slot:headerFiles>
        <!--  BEGIN CUSTOM STYLE FILE  -->
        <link rel="stylesheet" href="{{ asset('plugins/table/datatable/datatables.css') }}">
        @vite(['resources/scss/light/plugins/table/datatable/dt-global_style.scss'])
        @vite(['resources/scss/dark/plugins/table/datatable/dt-global_style.scss'])
        @vite(['resources/scss/light/assets/components/modal.scss'])
        @vite(['resources/scss/dark/assets/components/modal.scss'])
        {{-- flatpickr --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr@latest/dist/plugins/monthSelect/style.css">

        <!--  END CUSTOM STYLE FILE  -->
    </x-slot>
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BREADCRUMB -->
    <div class="page-meta">
        <div class="row justify-content-between mb-3">
            <div class="col-8 align-self-center">
                <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">資料庫</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
                    </ol>

                </nav>
            </div>
            @can('create-defect')
                <div class="col-4 align-self-center text-end">
                    <button class="btn btn-sm btn-rounded btn-success" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">新增</button>
                </div>
            @endcan
        </div>
    </div>
    <!-- /BREADCRUMB -->

    @can('import-data')
        <div class="row mb-3">
            <form action="{{ route('clear-defect-import') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="input-group">
                    <input type="file" class="form-control" id="inputGroupFile04" accept=".xlsx"
                        aria-describedby="inputGroupFileAddon04" aria-label="Upload" name="excel">
                    <button class="btn btn-outline-secondary" type="submit" id="inputGroupFileAddon04" acc>匯入</button>
                </div>
            </form>
        </div>
    @endcan



    <div class="row layout-top-spacing">
        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
            <div class="widget-content widget-content-area br-8">
                <table id="zero-config" class="table dt-table-hover" style="width:100%">
                    <thead>
                        <tr>
                            <th>啟用月份</th>
                            <th>主項目</th>
                            <th>次項目</th>
                            <th class="text-end">更新時間</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clearDefects as $clearDefect)
                            <tr>
                                <td>{{ date('Y-m', strtotime($clearDefect->effective_date)) }}</td>
                                <td>{{ $clearDefect->main_item }}</td>
                                <td>{{ $clearDefect->sub_item }}</td>
                                <td class="text-end">{{ $clearDefect->updated_at }}</td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>

    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form action="{{ route('clear-defect-manualStore') }}" method="post">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">新增缺失</h5>
                    </div>
                    <div class="modal-body">

                        {{-- input 啟用月份欄位 effective_date --}}
                        <div class="input-group mb-3">
                            <span class="input-group-text">啟用月份</span>
                            <input type="text" class="form-control yearMonth" name="effective_date"
                                id="effective_date" value="{{ today()->format('Y-m') }}" required>
                        </div>

                        {{-- input 主項目欄位 main_item --}}
                        <div class="input-group mb-3">
                            <span class="input-group-text">主項目</span>
                            <input type="text" class="form-control" name="main_item" id="main_item" required>
                        </div>

                        {{-- input 次項目欄位 sub_item --}}
                        <div class="input-group mb-3">
                            <span class="input-group-text">次項目</span>
                            <input type="text" class="form-control" name="sub_item" id="sub_item" required>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <a class="btn btn btn-light-dark" data-bs-dismiss="modal"><i class="flaticon-cancel-12"></i>
                            取消</a>
                        <button type="submit" class="btn btn-primary">儲存</button>
                    </div>
                </div>
            </form>
        </div>

    </div>

    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <x-slot:footerFiles>
        <script src="{{ asset('plugins/global/vendors.min.js') }}"></script>
        <script src="{{ asset('plugins/table/datatable/datatables.js') }}"></script>
        {{-- flatpickr --}}
        <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
        <script src="https://npmcdn.com/flatpickr/dist/l10n/zh-tw.js"></script>
        {{-- monthSelectPlugin  cdn --}}
        <script src="https://cdn.jsdelivr.net/npm/flatpickr@latest/dist/plugins/monthSelect/index.js"></script>
        <script>
            $('#zero-config').DataTable({
                "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
                    "<'table-responsive'tr>" +
                    "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
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
                "order": [
                    [0, "desc"]
                ],
            });

            flatpickr(".yearMonth", {
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
    </x-slot>
    <!--  END CUSTOM SCRIPTS FILE  -->
</x-base-layout>
