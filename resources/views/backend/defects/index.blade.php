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

            <!--  END CUSTOM STYLE FILE  -->
            </x-slot>
            <!-- END GLOBAL MANDATORY STYLES -->

            <!-- BREADCRUMB -->
            <div class="page-meta">
                <div class="row justify-content-between mb-3">
                    <div class="col-8 align-self-center">
                        <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">資料</a></li>
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
                    <form action="{{ route('defect-import') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="input-group">
                            <input type="file" class="form-control" id="inputGroupFile04" accept=".xlsx"
                                aria-describedby="inputGroupFileAddon04" aria-label="Upload" name="excel">
                            <button class="btn btn-outline-secondary" type="submit" id="inputGroupFileAddon04"
                                acc>文件上傳</button>
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
                                    <th>缺失分類</th>
                                    <th>子項目</th>
                                    <th>缺失類別</th>
                                    <th>扣分</th>
                                    <th>稽核標準</th>
                                    <th>報告呈現說明</th>
                                    <th class="text-end">更新時間</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($defects as $defect)
                                    <tr>
                                        <td>{{ $defect->effective_date }}</td>
                                        <td>{{ $defect->group }}</td>
                                        <td>{{ $defect->title }}</td>
                                        <td>{{ $defect->category }}</td>
                                        <td>{{ $defect->deduct_point }}</td>
                                        <td>
                                            {{ $defect->description }}
                                        </td>
                                        <td>
                                            {{ $defect->report_description }}
                                        </td>
                                        <td class="text-end">{{ $defect->updated_at }}</td>
                                        {{-- <td>{{ $defect->report_description }}</td> --}}
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

            <!--  BEGIN CUSTOM SCRIPTS FILE  -->
            <x-slot:footerFiles>
                <script src="{{ asset('plugins/global/vendors.min.js') }}"></script>
                <script src="{{ asset('plugins/table/datatable/datatables.js') }}"></script>
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

                    });
                </script>
                </x-slot>
                <!--  END CUSTOM SCRIPTS FILE  -->
</x-base-layout>
