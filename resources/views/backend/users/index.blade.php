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
                        <li class="breadcrumb-item"><a href="#">資料庫</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>

                    </ol>
                </nav>
            </div>

            <div class="col-lg-3 col-6">

                <div class="col text-end">
                    <form action="{{ route('pos-user-upsert') }}" method="post">
                        @csrf
                        @method('put')
                        {{-- <span>AM 06:30 自動更新</span> --}}
                        @can('update-user')
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
                            <th>ID</th>
                            <th>員工編號</th>
                            <th>姓名</th>
                            <th>電子信箱</th>
                            <th>部門</th>
                            <th>角色</th>
                            {{-- <th>狀態</th> --}}
                            <th>更新時間</th>
                            <th></th>
                            @can('update-user')
                                <th class="text-end"></th>
                            @endcan
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->uid }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->department }}</td>
                                <td><span class="badge badge-dark bs-tooltip"
                                        title="{{ $user->getPermissionsViaRoles()->pluck('name')->implode('、') }}">{{ $user->getRoleNames()->implode('、') }}</span>
                                </td>
                                {{-- <td>
                                    @switch($user->status)
                                        @case(0)
                                            <span class="badge badge-danger">試用</span>
                                        @break

                                        @case(1)
                                            <span class="badge badge-success">正式</span>
                                        @break

                                        @case(2)
                                            <span class="badge badge-warning">離職</span>
                                        @break

                                        @case(3)
                                            <span class="badge badge-info">約聘</span>
                                        @break

                                        @case(4)
                                            <span class="badge badge-primary">留職</span>
                                        @break

                                        @case(5)
                                            <span class="badge badge-secondary">未</span>
                                        @break

                                        @case(8)
                                            <span class="badge badge-light-primary">永不</span>
                                        @break
                                    @endswitch
                                </td> --}}
                                <td class="text-end">{{ $user->updated_at }}</td>
                                <td>
                                    {{-- 統計 --}}
                                    <a href="{{ route('user-chart', ['user' => $user]) }}"
                                        class="badge badge-primary">統計</a>
                                    {{-- 查看缺失 --}}
                                    <a href="{{ route('user-show', ['user' => $user]) }}"
                                        class="badge badge-warning">查看缺失</a>

                                </td>
                                @can('update-user')
                                    <td class="text-end">
                                        <a href="{{ route('user-edit', ['user' => $user]) }}"
                                            class="badge badge-success">編輯</a>
                                    </td>
                                @endcan
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
                "order": [
                    [6, "asc"]
                ]


            });
        </script>
    </x-slot>
    <!--  END CUSTOM SCRIPTS FILE  -->
</x-base-layout>
