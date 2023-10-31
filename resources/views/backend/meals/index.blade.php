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
        {{-- flatpickr --}}
        <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
        <script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/plugins/monthSelect/index.js"></script>
        <script src="https://npmcdn.com/flatpickr/dist/l10n/zh-tw.js"></script>
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
            @can('create-meal')
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
            <form action="{{ route('meal-import') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="input-group">
                    <input type="file" class="form-control" id="inputGroupFile04" accept=".xlsx"
                        aria-describedby="inputGroupFileAddon04" aria-label="Upload" name="excel">
                    <button class="btn btn-outline-secondary" type="submit" id="inputGroupFileAddon04" acc>匯入</button>
                </div>
            </form>
        </div>
    @endcan


    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
        <div class="widget-content widget-content-area br-8">

            <table id="zero-config" class="table dt-table-hover" style="width:100%">
                <thead>
                    <tr>
                        <th>月份</th>
                        <th>品牌店代碼</th>
                        <th>品牌</th>
                        <th>店別</th>
                        <th>類別</th>
                        <th>廚別</th>
                        <th>區站</th>
                        <th>編號</th>
                        <th>名稱</th>
                        <th>備註</th>
                        <th>檢項</th>
                        <th>檢驗項目</th>
                        @can('update-meal')
                            <th>動作</th>
                        @endcan
                    </tr>
                </thead>
                <tbody>
                    @foreach ($meals as $meal)
                        <tr>
                            <td>{{ $meal->effective_date }}</td>
                            <td>{{ $meal->sid }}</td>
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
                            @can('update-meal')
                                <td> <a class="badge badge-light-primary"
                                        href="{{ route('meal-edit', ['meal' => $meal]) }}">編輯</a>
                                    {{-- <a class="badge badge-light-danger" data-confirm-delete="true"
                                                href="{{ route('meal-destroy', ['meal' => $meal]) }}">刪除</a> --}}
                                </td>
                            @endcan
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form action="{{ route('meal-store') }}" method="post">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">新增採樣</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="input-group mb-3">
                            <span class="input-group-text">月份</span>
                            <input type="text" class="form-control yearMonth" name="effective_date" required>
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text">品牌店代碼</span>
                            <input type="text" class="form-control" name="sid" required>
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text">品牌</span>
                            <input type="text" class="form-control" name="brand" required>
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text">店別</span>
                            <input type="text" class="form-control" name="shop">
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text">類別</span>
                            <input type="text" class="form-control" name="category" required>
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text">廚別</span>
                            <input type="text" class="form-control" name="chef" required>
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text">區站</span>
                            <input type="text" class="form-control" name="workspace" required>
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text">編號</span>
                            <input type="text" class="form-control" name="qno" required>
                        </div>


                        <div class="input-group mb-3">
                            <span class="input-group-text">名稱</span>
                            <input type="text" class="form-control" name="name" required>
                        </div>


                        <div class="input-group mb-3">
                            <span class="input-group-text">備註</span>
                            <input type="text" class="form-control" name="note">
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text">檢項</span>
                            <input type="text" class="form-control" name="item" required>
                        </div>



                        <div class="input-group mb-3">
                            <span class="input-group-text">檢驗項目</span>
                            <input type="text" class="form-control" name="items" required>
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn" data-bs-dismiss="modal" aria-label="Close">關閉</button>
                        <button type="submit" class="btn btn-primary btn-add-event">新增採樣</button>
                    </div>
                </div>
            </form>
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
                //新到舊
                "order": [
                    [0, "desc"]
                ],

            });

            flatpickr(".yearMonth", {
                "locale": "zh_tw",
                plugins: [
                    new monthSelectPlugin({
                        shorthand: true,
                        dateFormat: "Y-m-d",
                        altFormat: "M/Y/d",

                    }),
                ],

            });
        </script>
    </x-slot>
    <!--  END CUSTOM SCRIPTS FILE  -->
</x-base-layout>
