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
                            {{ $restaurant->brand }}{{ $restaurant->shop }}{{ $title }}</li>
                    </ol>
                </nav>
            </div>

            @can('create-restaurant')
                <div class="col-4 align-self-center text-end">
                    <button class="btn btn-sm btn-rounded btn-success" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">新增</button>
                </div>
            @endcan

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
                            <th>區站</th>
                            <th>上下線</th>
                            <th>類別代碼</th>
                            <th>更新時間</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($restaurant->restaurantWorkspaces as $workspaces)
                            <tr>
                                <td>{{ $workspaces->area }}</td>
                                {{-- checkbox --}}
                                <td>
                                    <div class="form-check form-check-success form-check-inline">
                                        <input class="form-check-input" type="checkbox" data-id="{{ $workspaces->id }}"
                                            id="workspace_{{ $workspaces->id }}"
                                            @if ($workspaces->status == 1) checked @endif>
                                    </div>
                                </td>
                                <td>{{ $workspaces->category_value }}</td>
                                <td>{{ $workspaces->updated_at }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
        wire:i>
        <div class="modal-dialog">
            <form action="{{ route('restaurant-workspace-store', ['restaurant' => $restaurant]) }}" method="post">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">新增區站</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="category_value" value="{{ $restaurant->sid }}">
                        <div class="input-group mb-3">
                            <span class="input-group-text">區站名稱</span>
                            <input type="text" class="form-control" name="area" required>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn" data-bs-dismiss="modal" aria-label="Close">關閉</button>
                        <button type="submit" class="btn btn-primary btn-add-event">新增區站</button>
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
                "order": [
                    [2, "asc"]
                ],
            });
        </script>

        {{--  --}}
        <script>
            $(document).ready(function() {
                $('input[type="checkbox"]').click(function() {
                    // 要有權限才能操作
                    @if (auth()->user()->can('update-restaurant'))
                        // 有權限才能操作
                        var id = $(this).attr('data-id');
                        var status = $(this).prop('checked');
                        var url = "{{ route('restaurant-workspace-status') }}";

                        $.ajax({
                            url: url,
                            type: 'POST',
                            data: {
                                workspace_id: id,
                                status: status,
                                _token: '{{ csrf_token() }}'
                            },
                            success: function(response) {
                                alert(response.message);
                            }
                        });
                    @else
                        alert('沒有權限');
                        return false;
                    @endif

                });
            });
        </script>
    </x-slot>
    <!--  END CUSTOM SCRIPTS FILE  -->
</x-base-layout>
