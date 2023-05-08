<x-base-layout :scrollspy="false">

    <x-slot:pageTitle>
        {{$title}} 
    </x-slot>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <x-slot:headerFiles>
        <!--  BEGIN CUSTOM STYLE FILE  -->
        <link rel="stylesheet" href="{{asset('plugins/table/datatable/datatables.css')}}">
        @vite(['resources/scss/light/plugins/table/datatable/dt-global_style.scss'])
        @vite(['resources/scss/light/plugins/table/datatable/custom_dt_custom.scss'])
        @vite(['resources/scss/dark/plugins/table/datatable/dt-global_style.scss'])
        @vite(['resources/scss/dark/plugins/table/datatable/custom_dt_custom.scss'])
        <!--  END CUSTOM STYLE FILE  -->
    </x-slot>
    <!-- END GLOBAL MANDATORY STYLES -->
    
    <!-- BREADCRUMB -->
    <div class="page-meta">
        <nav class="breadcrumb-style-one" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Datatables</a></li>
                <li class="breadcrumb-item active" aria-current="page">Custom</li>
            </ol>
        </nav>
    </div>
    <!-- /BREADCRUMB -->
    
    <div class="seperator-header layout-top-spacing">
        <h4 class="">Style 1</h4>
    </div>
    
    <div class="row layout-spacing">
        <div class="col-lg-12">
            <div class="statbox widget box box-shadow">
                <div class="widget-content widget-content-area">
                    <table id="style-2" class="table style-2 dt-table-hover">
                        <thead>
                            <tr>
                                <th class="checkbox-column dt-no-sorting"> Record Id </th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Mobile No.</th>
                                <th class="text-center">Image</th>
                                <th class="text-center">Status</th>
                                <th class="text-center dt-no-sorting">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="checkbox-column"> 1 </td>
                                <td>Jane</td>
                                <td>Lamb</td>
                                <td>johndoe@yahoo.com</td>
                                <td>555-555-5555</td>
                                <td class="text-center">
                                    <span><img src="{{Vite::asset('resources/images/profile-9.jpeg')}}" class="rounded-circle profile-img" alt="avatar"></span>
                                </td>
                                <td class="text-center"><span class="shadow-none badge badge-primary">Approved</span></td>
                                <td class="text-center"><a href="javascript:void(0);" class="bs-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" data-original-title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle table-cancel"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg></a></td>
                            </tr>
                            <tr>
                                <td class="checkbox-column"> 2 </td>
                                <td>Linda</td>
                                <td>Nelson</td>
                                <td>linda@gmail.com</td>
                                <td>555-555-6666</td>
                                <td class="text-center">
                                    <span><img src="{{Vite::asset('resources/images/profile-11.jpeg')}}" class="rounded-circle profile-img" alt="avatar"></span>
                                </td>
                                <td class="text-center"><span class="shadow-none badge badge-warning">Suspended</span></td>
                                <td class="text-center"><a href="javascript:void(0);" class="bs-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" data-original-title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle table-cancel"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg></a></td>
                            </tr>
                            <tr>
                                <td class="checkbox-column"> 3 </td>
                                <td>Kelly</td>
                                <td>Young</td>
                                <td>kelly@live.com</td>
                                <td>777-555-5555</td>
                                <td class="text-center">
                                    <span><img src="{{Vite::asset('resources/images/profile-12.jpeg')}}" class="rounded-circle profile-img" alt="avatar"></span>
                                </td>
                                <td class="text-center"><span class="shadow-none badge badge-danger">Closed</span></td>
                                <td class="text-center"><a href="javascript:void(0);" class="bs-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" data-original-title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle table-cancel"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg></a></td>
                            </tr>
                            <tr>
                                <td class="checkbox-column"> 4 </td>
                                <td>Vincent</td>
                                <td>Carpenter</td>
                                <td>vinnyc@outlook.com</td>
                                <td>555-666-5555</td>
                                <td class="text-center">
                                    <span><img src="{{Vite::asset('resources/images/profile-13.jpeg')}}" class="rounded-circle profile-img" alt="avatar"></span>
                                </td>
                                <td class="text-center"><span class="shadow-none badge badge-primary">Approved</span></td>
                                <td class="text-center"><a href="javascript:void(0);" class="bs-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" data-original-title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle table-cancel"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg></a></td>
                            </tr>
                            <tr>
                                <td class="checkbox-column"> 5 </td>
                                <td>Lila</td>
                                <td>Perry</td>
                                <td>lila@adobe.com</td>
                                <td>444-444-4444</td>
                                <td class="text-center">
                                    <span><img src="{{Vite::asset('resources/images/profile-14.jpeg')}}" class="rounded-circle profile-img" alt="avatar"></span>
                                </td>
                                <td class="text-center"><span class="shadow-none badge badge-warning">Suspended</span></td>
                                <td class="text-center"><a href="javascript:void(0);" class="bs-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" data-original-title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle table-cancel"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg></a></td>
                            </tr>
                            <tr>
                                <td class="checkbox-column"> 6 </td>
                                <td>Traci</td>
                                <td>Lopez</td>
                                <td>traci@gmail.com</td>
                                <td>111-111-1111</td>
                                <td class="text-center">
                                    <span><img src="{{Vite::asset('resources/images/profile-15.jpeg')}}" class="rounded-circle profile-img" alt="avatar"></span>
                                </td>
                                <td class="text-center"><span class="shadow-none badge badge-danger">Closed</span></td>
                                <td class="text-center"><a href="javascript:void(0);" class="bs-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" data-original-title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle table-cancel"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg></a></td>
                            </tr>
                            <tr>
                                <td class="checkbox-column"> 7 </td>
                                <td>Nia</td>
                                <td>Hillyer</td>
                                <td>niaHill@yahoo.com</td>
                                <td>111-666-1111</td>
                                <td class="text-center">
                                    <span><img src="{{Vite::asset('resources/images/profile-16.jpeg')}}" class="rounded-circle profile-img" alt="avatar"></span>
                                </td>
                                <td class="text-center"><span class="shadow-none badge badge-primary">Approved</span></td>
                                <td class="text-center"><a href="javascript:void(0);" class="bs-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" data-original-title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle table-cancel"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="seperator-header">
        <h4 class="">Style 2</h4>
    </div>
    
    <div class="row layout-spacing">
        <div class="col-lg-12">
            <div class="statbox widget box box-shadow">
                <div class="widget-content widget-content-area">
                    <table id="style-1" class="table style-1 dt-table-hover non-hover">
                        <thead>
                            <tr>
                                <th class="checkbox-column dt-no-sorting"> Record no. </th>
                                <th>Name</th>
                                <th>Customers</th>
                                <th>Email</th>
                                <th>Contact</th>
                                <th class="">Status</th>
                                <th class="text-center dt-no-sorting">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="checkbox-column"> 1 </td>
                                <td class="user-name">Sean Freeman</td>
                                <td class="">
                                    <a class="profile-img" href="javascript: void(0);">
                                        <img src="{{Vite::asset('resources/images/profile-3.jpeg')}}" alt="product">
                                    </a>
                                </td>
                                <td>seanfreeman@admin.com</td>
                                <td>555-555-5555</td>
                                <td>
                                    <div class="d-flex">
                                        <div class=" align-self-center d-m-success  mr-1 data-marker"></div>
                                        <span class="label label-success">Approved</span>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                        </a>

                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                                            <a class="dropdown-item" href="javascript:void(0);">View</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                            <a class="dropdown-item" href="javascript:void(0);">View Response</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="checkbox-column"> 2 </td>
                                <td class="user-name">Donna Rogers</td>
                                <td class="">
                                    <a class="profile-img" href="javascript: void(0);">
                                        <img src="{{Vite::asset('resources/images/profile-2.jpeg')}}" alt="product">
                                    </a>
                                </td>
                                <td>donnarogers@user.com</td>
                                <td>555-555-6666</td>
                                <td>
                                    <div class="d-flex">
                                        <div class=" align-self-center d-m-warning  mr-1 data-marker"></div>
                                        <span class="label label-warning">Suspended</span>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink2">
                                            <a class="dropdown-item" href="javascript:void(0);">View</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                            <a class="dropdown-item" href="javascript:void(0);">View Response</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="checkbox-column"> 3 </td>
                                <td class="user-name">Irene Collins</td>
                                <td class="">
                                    <a class="profile-img" href="javascript: void(0);">
                                        <img src="{{Vite::asset('resources/images/profile-4.jpeg')}}" alt="product">
                                    </a>
                                </td>
                                <td>irene@superadmin.com</td>
                                <td>777-555-5555</td>
                                <td>
                                    <div class="d-flex">
                                        <div class=" align-self-center d-m-danger  mr-1 data-marker"></div>
                                        <span class="label label-danger">Closed</span>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                        </a>

                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink3">
                                            <a class="dropdown-item" href="javascript:void(0);">View</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                            <a class="dropdown-item" href="javascript:void(0);">View Response</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="checkbox-column"> 4 </td>
                                <td class="user-name">Vincent Carpenter</td>
                                <td class="">
                                    <a class="profile-img" href="javascript: void(0);">
                                        <img src="{{Vite::asset('resources/images/profile-5.jpeg')}}" alt="product">
                                    </a>
                                </td>
                                <td>vincentC@admin.com</td>
                                <td>555-666-5555</td>
                                <td>
                                    <div class="d-flex">
                                        <div class=" align-self-center d-m-success  mr-1 data-marker"></div>
                                        <span class="label label-success">Approved</span>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink4" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                        </a>

                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink4">
                                            <a class="dropdown-item" href="javascript:void(0);">View</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                            <a class="dropdown-item" href="javascript:void(0);">View Response</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="checkbox-column"> 5 </td>
                                <td class="user-name">Susan Phillips</td>
                                <td class="">
                                    <a class="profile-img" href="javascript: void(0);">
                                        <img src="{{Vite::asset('resources/images/profile-6.jpeg')}}" alt="product">
                                    </a>
                                </td>
                                <td>susan@yahoo.com</td>
                                <td>444-444-4444</td>
                                <td>
                                    <div class="d-flex">
                                        <div class=" align-self-center d-m-warning  mr-1 data-marker"></div>
                                        <span class="label label-warning">Suspended</span>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink5" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                        </a>

                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink5">
                                            <a class="dropdown-item" href="javascript:void(0);">View</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                            <a class="dropdown-item" href="javascript:void(0);">View Response</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="checkbox-column"> 6 </td>
                                <td class="user-name">Alexander Gray</td>
                                <td class="">
                                    <a class="profile-img" href="javascript: void(0);">
                                        <img src="{{Vite::asset('resources/images/profile-7.jpeg')}}" alt="product">
                                    </a>
                                </td>
                                <td>alexander@gmail.com</td>
                                <td>111-111-1111</td>
                                <td>
                                    <div class="d-flex">
                                        <div class=" align-self-center d-m-danger  mr-1 data-marker"></div>
                                        <span class="label label-danger">Closed</span>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink6" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                        </a>

                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink6">
                                            <a class="dropdown-item" href="javascript:void(0);">View</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                            <a class="dropdown-item" href="javascript:void(0);">View Response</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="checkbox-column"> 7 </td>
                                <td class="user-name">Judy Holmes</td>
                                <td class="">
                                    <a class="profile-img" href="javascript: void(0);">
                                        <img src="{{Vite::asset('resources/images/profile-8.jpeg')}}" alt="product">
                                    </a>
                                </td>
                                <td>judy@customer.com</td>
                                <td>111-666-1111</td>
                                <td>
                                    <div class="d-flex">
                                        <div class=" align-self-center d-m-success  mr-1 data-marker"></div>
                                        <span class="label label-success">Approved</span>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink7" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                        </a>

                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink7">
                                            <a class="dropdown-item" href="javascript:void(0);">View</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                            <a class="dropdown-item" href="javascript:void(0);">View Response</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="seperator-header">
        <h4 class="">Style 3</h4>
    </div>

    <div class="row layout-spacing">
        <div class="col-lg-12">
            <div class="statbox widget box box-shadow">
                <div class="widget-content widget-content-area">
                    <table id="style-3" class="table style-3 dt-table-hover">
                        <thead>
                            <tr>
                                <th class="checkbox-column text-center"> Record Id </th>
                                <th class="text-center">Image</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Mobile No.</th>
                                <th class="text-center">Status</th>
                                <th class="text-center dt-no-sorting">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="checkbox-column text-center"> 1 </td>
                                <td class="text-center">
                                    <span><img src="{{Vite::asset('resources/images/profile-17.jpeg')}}" class="profile-img" alt="avatar"></span>
                                </td>
                                <td>Donna</td>
                                <td>Rogers</td>
                                <td>donna@yahoo.com</td>
                                <td>555-555-5555</td>
                                <td class="text-center"><span class="shadow-none badge badge-primary">Approved</span></td>
                                <td class="text-center">
                                    <ul class="table-controls">
                                        <li><a href="javascript:void(0);" class="bs-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" data-original-title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-8 mb-1"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a></li>
                                        <li><a href="javascript:void(0);" class="bs-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" data-original-title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash p-1 br-8 mb-1"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg></a></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td class="checkbox-column text-center"> 2 </td>
                                <td class="text-center">
                                    <span><img src="{{Vite::asset('resources/images/profile-19.jpeg')}}" class="profile-img" alt="avatar"></span>
                                </td>
                                <td>Andy</td>
                                <td>King</td>
                                <td>andyking@gmail.com</td>
                                <td>555-555-6666</td>
                                <td class="text-center"><span class="shadow-none badge badge-warning">Suspended</span></td>
                                <td class="text-center">
                                    <ul class="table-controls">
                                        <li><a href="javascript:void(0);" class="bs-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" data-original-title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-8 mb-1"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a></li>
                                        <li><a href="javascript:void(0);" class="bs-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" data-original-title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash p-1 br-8 mb-1"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg></a></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td class="checkbox-column text-center"> 3 </td>
                                <td class="text-center">
                                    <span><img src="{{Vite::asset('resources/images/profile-20.jpeg')}}" class="profile-img" alt="avatar"></span>
                                </td>
                                <td>Alma</td>
                                <td>Clarke</td>
                                <td>Alma@live.com</td>
                                <td>777-555-5555</td>
                                <td class="text-center"><span class="shadow-none badge badge-danger">Closed</span></td>
                                <td class="text-center">
                                    <ul class="table-controls">
                                        <li><a href="javascript:void(0);" class="bs-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" data-original-title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-8 mb-1"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a></li>
                                        <li><a href="javascript:void(0);" class="bs-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" data-original-title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash p-1 br-8 mb-1"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg></a></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td class="checkbox-column text-center"> 4 </td>
                                <td class="text-center">
                                    <span><img src="{{Vite::asset('resources/images/profile-21.jpeg')}}" class="profile-img" alt="avatar"></span>
                                </td>
                                <td>Vincent</td>
                                <td>Carpenter</td>
                                <td>vinnyc@outlook.com</td>
                                <td>555-666-5555</td>
                                <td class="text-center"><span class="shadow-none badge badge-primary">Approved</span></td>
                                <td class="text-center">
                                    <ul class="table-controls">
                                        <li><a href="javascript:void(0);" class="bs-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" data-original-title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-8 mb-1"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a></li>
                                        <li><a href="javascript:void(0);" class="bs-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" data-original-title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash p-1 br-8 mb-1"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg></a></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td class="checkbox-column text-center"> 5 </td>
                                <td class="text-center">
                                    <span><img src="{{Vite::asset('resources/images/profile-22.jpeg')}}" class="profile-img" alt="avatar"></span>
                                </td>
                                <td>Kristen</td>
                                <td>Beck</td>
                                <td>kristen@adobe.com</td>
                                <td>444-444-4444</td>
                                <td class="text-center"><span class="shadow-none badge badge-warning">Suspended</span></td>
                                <td class="text-center">
                                    <ul class="table-controls">
                                        <li><a href="javascript:void(0);" class="bs-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" data-original-title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-8 mb-1"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a></li>
                                        <li><a href="javascript:void(0);" class="bs-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" data-original-title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash p-1 br-8 mb-1"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg></a></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td class="checkbox-column text-center"> 6 </td>
                                <td class="text-center">
                                    <span><img src="{{Vite::asset('resources/images/profile-23.jpeg')}}" class="profile-img" alt="avatar"></span>
                                </td>
                                <td>Oscar</td>
                                <td>Garner</td>
                                <td>oscar@gmail.com</td>
                                <td>111-111-1111</td>
                                <td class="text-center"><span class="shadow-none badge badge-danger">Closed</span></td>
                                <td class="text-center">
                                    <ul class="table-controls">
                                        <li><a href="javascript:void(0);" class="bs-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" data-original-title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-8 mb-1"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a></li>
                                        <li><a href="javascript:void(0);" class="bs-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" data-original-title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash p-1 br-8 mb-1"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg></a></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td class="checkbox-column text-center"> 7 </td>
                                <td class="text-center">
                                    <span><img src="{{Vite::asset('resources/images/profile-24.jpeg')}}" class="profile-img" alt="avatar"></span>
                                </td>
                                <td>Nia</td>
                                <td>Hillyer</td>
                                <td>niaHill@yahoo.com</td>
                                <td>111-666-1111</td>
                                <td class="text-center"><span class="shadow-none badge badge-primary">Approved</span></td>
                                <td class="text-center">
                                    <ul class="table-controls">
                                        <li><a href="javascript:void(0);" class="bs-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" data-original-title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-8 mb-1"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a></li>
                                        <li><a href="javascript:void(0);" class="bs-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" data-original-title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash p-1 br-8 mb-1"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg></a></li>
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    
    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <x-slot:footerFiles>
        <script type="module" src="{{asset('plugins/global/vendors.min.js')}}"></script>
        @vite(['resources/assets/js/custom.js'])
        <script type="module" src="{{asset('plugins/table/datatable/datatables.js')}}"></script>
        
        <script type="module">
            // var e;
            const c1 = $('#style-1').DataTable({
                headerCallback:function(e, a, t, n, s) {
                    e.getElementsByTagName("th")[0].innerHTML=`
                    <div class="form-check form-check-primary d-block">
                        <input class="form-check-input chk-parent" type="checkbox" id="form-check-default">
                    </div>`
                },
                columnDefs:[{
                    targets:0, width:"30px", className:"", orderable:!1, render:function(e, a, t, n) {
                        return `
                        <div class="form-check form-check-primary d-block">
                            <input class="form-check-input child-chk" type="checkbox" id="form-check-default">
                        </div>`
                    }
                }],
                "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
            "<'table-responsive'tr>" +
            "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
                "oLanguage": {
                    "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                    "sInfo": "Showing page _PAGE_ of _PAGES_",
                    "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                    "sSearchPlaceholder": "Search...",
                   "sLengthMenu": "Results :  _MENU_",
                },
                "lengthMenu": [5, 10, 20, 50],
                "pageLength": 10
            });
    
            multiCheck(c1);
    
            const c2 = $('#style-2').DataTable({
                headerCallback:function(e, a, t, n, s) {
                    e.getElementsByTagName("th")[0].innerHTML=`
                    <div class="form-check form-check-primary d-block new-control">
                        <input class="form-check-input chk-parent" type="checkbox" id="form-check-default">
                    </div>`
                },
                columnDefs:[ {
                    targets:0, width:"30px", className:"", orderable:!1, render:function(e, a, t, n) {
                        return `
                        <div class="form-check form-check-primary d-block new-control">
                            <input class="form-check-input child-chk" type="checkbox" id="form-check-default">
                        </div>`
                    }
                }],
                "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
            "<'table-responsive'tr>" +
            "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
                "oLanguage": {
                    "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                    "sInfo": "Showing page _PAGE_ of _PAGES_",
                    "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                    "sSearchPlaceholder": "Search...",
                   "sLengthMenu": "Results :  _MENU_",
                },
                "lengthMenu": [5, 10, 20, 50],
                "pageLength": 10 
            });
    
            multiCheck(c2);
    
            const c3 = $('#style-3').DataTable({
                "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
            "<'table-responsive'tr>" +
            "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
                "oLanguage": {
                    "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                    "sInfo": "Showing page _PAGE_ of _PAGES_",
                    "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                    "sSearchPlaceholder": "Search...",
                   "sLengthMenu": "Results :  _MENU_",
                },
                "stripeClasses": [],
                "lengthMenu": [5, 10, 20, 50],
                "pageLength": 10
            });
    
            multiCheck(c3);
        </script>
    </x-slot>
    <!--  END CUSTOM SCRIPTS FILE  -->
</x-base-layout>