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
        <div class="row">
            <div class="col-lg-9 col-6">
                <nav class="breadcrumb-style-one" aria-label="breadcrumb">

                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">資料</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>

                    </ol>
                </nav>
            </div>

            <div class="col-lg-3 col-6">

                <div class="col text-end">
                    <form action="{{ route('pos-restaurant-upsert') }}" method="post">
                        @csrf
                        @method('put')
                        <span>AM 06:00 自動更新</span>
                        @can('update-restaurant')
                            <button class="btn btn-sm btn-rounded btn-success">更新</button>
                        @endcan
                    </form>
                </div>


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
                            <th>品牌店代碼</th>
                            <th>品牌</th>
                            <th>店別</th>
                            <th>區域</th>
                            <th>地址</th>
                            <th>狀態</th>
                            <th>更新時間</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($restaurants as $restaurant)
                            <tr>
                                <td>{{ $restaurant->sid }}</td>
                                <td>{{ $restaurant->brand }}</td>
                                <td>{{ $restaurant->shop }}</td>
                                <td>{{ $restaurant->location }}</td>
                                <td>{{ $restaurant->address }}</td>
                                <td>
                                    @if ($restaurant->status)
                                        <span class="badge badge-success">啟用</span>
                                    @else
                                        <span class="badge badge-danger">停用</span>
                                    @endif
                                </td>
                                <td>{{ $restaurant->updated_at }}</td>
                                <td>
                                    <a href="{{ route('restaurant-workspace', ['restaurant' => $restaurant]) }}"
                                        class="badge badge-dark">
                                        區站
                                    </a>
                                    <a href="{{ route('restaurant-chart', ['restaurant' => $restaurant]) }}">
                                        <span class="badge badge-primary">圖表</span>
                                    </a>
                                    <a href="{{ route('restaurant-defects', ['restaurant' => $restaurant]) }}"
                                        class="badge badge-warning">
                                        食安缺失
                                    </a>
                                    <a href="{{ route('restaurant-clear-defects', ['restaurant' => $restaurant]) }}"
                                        class="badge badge-info">
                                        清檢缺失
                                </td>


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
                //新到舊
                "order": [
                    [5, "desc"]
                ],
            });
        </script>
    </x-slot>
    <!--  END CUSTOM SCRIPTS FILE  -->
</x-base-layout>
