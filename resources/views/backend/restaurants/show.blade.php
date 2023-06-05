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

            <!--  END CUSTOM STYLE FILE  -->
            </x-slot>
            <!-- END GLOBAL MANDATORY STYLES -->

            <!-- BREADCRUMB -->
            <div class="page-meta">
                <div class="row justify-content-between">
                    <div class="col-8 align-self-center">
                        <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">資料</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('restaurant-index') }}">門市資料</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    {{ $restaurant->brand }}{{ $restaurant->shop }}工作站</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-4 align-self-center text-end">
                        <button type="button" class="btn btn-sm btn-rounded btn-success" data-bs-toggle="modal"
                            data-bs-target="#addModal">
                            新增
                        </button>
                    </div>
                </div>
            </div>
            <!-- /BREADCRUMB -->

            <div class="row layout-top-spacing">

                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="widget-content widget-content-area br-8">
                        <table id="zero-config" class="table dt-table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>廚別</th>
                                    <th>區站</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($restaurant->restaurantWorkspaces as $workspaces)
                                    <tr>
                                        <td>{{ $workspaces->chef }}</td>
                                        <td>{{ $workspaces->area }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

            <!-- Modal -->
            <form action="{{ route('restaurant-workspace-store', ['restaurant' => $restaurant]) }}" method="post">
                @csrf
                <div class="modal fade inputForm-modal" id="addModal" tabindex="-1" role="dialog"
                    aria-labelledby="addModal" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">


                        <div class="modal-content">

                            <div class="modal-header" id="addModal">
                                <h5 class="modal-title">新增區站</b></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"><svg
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-x">
                                        <line x1="18" y1="6" x2="6" y2="18"></line>
                                        <line x1="6" y1="6" x2="18" y2="18"></line>
                                    </svg></button>
                            </div>
                            <div class="modal-body">
                                <form class="mt-0">
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-grid-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zm8 0A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm-8 8A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm8 0A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3z" />
                                                </svg>
                                            </span>
                                            <input type="text" class="form-control" placeholder="廚別" required
                                                aria-label="role" name="chef">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-grid-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zm8 0A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm-8 8A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm8 0A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3z" />
                                                </svg>
                                            </span>
                                            <input type="text" class="form-control" placeholder="區站"
                                                aria-label="role" name="area" required>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <a class="btn btn-light-danger mt-2 mb-2 btn-no-effect" data-bs-dismiss="modal">取消</a>
                                <button type="submit" class="btn btn-primary mt-2 mb-2 btn-no-effect"
                                    data-bs-dismiss="modal">新增</button>
                            </div>
                        </div>

                    </div>
                </div>
            </form>

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
                        "pageLength": 10
                    });
                </script>
                </x-slot>
                <!--  END CUSTOM SCRIPTS FILE  -->
</x-base-layout>
