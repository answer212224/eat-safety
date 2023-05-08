<x-rtl.base-layout :scrollspy="false">

    <x-slot:pageTitle>
        {{$title}} 
    </x-slot>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <x-slot:headerFiles>
        <!--  BEGIN CUSTOM STYLE FILE  -->
        <link rel="stylesheet" href="{{asset('plugins-rtl/table/datatable/datatables.css')}}">
        @vite(['resources/rtl/scss/light/plugins/table/datatable/dt-global_style.scss'])
        @vite(['resources/rtl/scss/dark/plugins/table/datatable/dt-global_style.scss'])
        <!--  END CUSTOM STYLE FILE  -->
    </x-slot>
    <!-- END GLOBAL MANDATORY STYLES -->
    
    <!-- BREADCRUMB -->
    <div class="page-meta">
        <nav class="breadcrumb-style-one" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">App</a></li>
                <li class="breadcrumb-item"><a href="#">Blog</a></li>
                <li class="breadcrumb-item active" aria-current="page">List</li>
            </ol>
        </nav>
    </div>
    <!-- /BREADCRUMB -->

    <div class="row layout-top-spacing">
                
        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
            <div class="widget-content widget-content-area br-8">
                <table id="blog-list" class="table dt-table-hover" style="width:100%">
                    <thead>
                        <tr>
                            <th class="checkbox-column"></th>
                            <th>Posts</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th class="no-content text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>
                                <div class="d-flex justify-content-left align-items-center">
                                    <div class="avatar  me-3">
                                        <img src="{{Vite::asset('resources/images/avatars-1.svg')}}" alt="Avatar" width="64" height="64">
                                    </div>
                                    <div class="d-flex flex-column">
                                        <span class="text-truncate fw-bold">Digital Marketing Guide</span>
                                    </div>
                                </div>
                            </td>
                            <td>2021/04/25</td>
                            <td><span class="badge badge-danger">Draft</span></td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink20" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink20">
                                        <a class="dropdown-item" href="javascript:void(0);">View</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>
                                <div class="d-flex justify-content-left align-items-center">
                                    <div class="avatar  me-3">
                                        <img src="{{Vite::asset('resources/images/avatars-2.svg')}}" alt="Avatar" width="64" height="64">
                                    </div>
                                    <div class="d-flex flex-column">
                                        <span class="text-truncate fw-bold">How to make money blogging</span>
                                    </div>
                                </div>
                            </td>
                            <td>2021/07/25</td>
                            <td><span class="badge badge-primary">Recently Updated</span></td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink2">
                                        <a class="dropdown-item" href="javascript:void(0);">View</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                    </div>
                                </div>                                                
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>
                                <div class="d-flex justify-content-left align-items-center">
                                    <div class="avatar  me-3">
                                        <img src="{{Vite::asset('resources/images/avatars-3.svg')}}" alt="Avatar" width="64" height="64">
                                    </div>
                                    <div class="d-flex flex-column">
                                        <span class="text-truncate fw-bold">33 On-Page SEO Tips</span>
                                    </div>
                                </div>
                            </td>
                            <td>2021/01/12</td>
                            <td><span class="badge badge-success">Published</span></td>
                            <td class="text-center">

                                <div class="dropdown">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink4" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink4">
                                        <a class="dropdown-item" href="javascript:void(0);">View</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                    </div>
                                </div>
                                
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>
                                <div class="d-flex justify-content-left align-items-center">
                                    <div class="avatar  me-3">
                                        <img src="{{Vite::asset('resources/images/avatars-1.svg')}}" alt="Avatar" width="64" height="64">
                                    </div>
                                    <div class="d-flex flex-column">
                                        <span class="text-truncate fw-bold">How to start an Ad agency</span>
                                    </div>
                                </div>
                            </td>
                            <td>2022/03/29</td>
                            <td><span class="badge badge-danger">Draft</span></td>
                            <td class="text-center">

                                <div class="dropdown">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink5" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink5">
                                        <a class="dropdown-item" href="javascript:void(0);">View</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                    </div>
                                </div>
                                
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>
                                <div class="d-flex justify-content-left align-items-center">
                                    <div class="avatar  me-3">
                                        <img src="{{Vite::asset('resources/images/avatars-2.svg')}}" alt="Avatar" width="64" height="64">
                                    </div>
                                    <div class="d-flex flex-column">
                                        <span class="text-truncate fw-bold">Elegant Admin Templates on Themeforeset</span>
                                    </div>
                                </div>
                            </td>
                            <td>2022/11/28</td>
                            <td><span class="badge badge-primary">Recently Updated</span></td>
                            <td class="text-center">

                                <div class="dropdown">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink6" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink6">
                                        <a class="dropdown-item" href="javascript:void(0);">View</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                    </div>
                                </div>
                                
                            </td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>
                                <div class="d-flex justify-content-left align-items-center">
                                    <div class="avatar  me-3">
                                        <img src="{{Vite::asset('resources/images/avatars-3.svg')}}" alt="Avatar" width="64" height="64">
                                    </div>
                                    <div class="d-flex flex-column">
                                        <span class="text-truncate fw-bold">List of Best Wordpress Themes</span>
                                    </div>
                                </div>
                            </td>
                            <td>2022/12/02</td>
                            <td><span class="badge badge-success">Published</span></td>
                            <td class="text-center">

                                <div class="dropdown">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink7" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink7">
                                        <a class="dropdown-item" href="javascript:void(0);">View</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                    </div>
                                </div>
                                
                            </td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>
                                <div class="d-flex justify-content-left align-items-center">
                                    <div class="avatar  me-3">
                                        <img src="{{Vite::asset('resources/images/avatars-1.svg')}}" alt="Avatar" width="64" height="64">
                                    </div>
                                    <div class="d-flex flex-column">
                                        <span class="text-truncate fw-bold">MailChimp VS Aweber</span>
                                    </div>
                                </div>
                            </td>
                            <td>2022/08/06</td>
                            <td><span class="badge badge-success">Published</span></td>
                            <td class="text-center">

                                <div class="dropdown">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink8" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink8">
                                        <a class="dropdown-item" href="javascript:void(0);">View</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                    </div>
                                </div>
                                
                            </td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>
                                <div class="d-flex justify-content-left align-items-center">
                                    <div class="avatar  me-3">
                                        <img src="{{Vite::asset('resources/images/avatars-2.svg')}}" alt="Avatar" width="64" height="64">
                                    </div>
                                    <div class="d-flex flex-column">
                                        <span class="text-truncate fw-bold">Tesla Modal 3 Review</span>
                                    </div>
                                </div>
                            </td>
                            <td>2022/10/14</td>
                            <td><span class="badge badge-primary">Recently Updated</span></td>
                            <td class="text-center">

                                <div class="dropdown">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink9" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink9">
                                        <a class="dropdown-item" href="javascript:void(0);">View</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                    </div>
                                </div>
                                
                            </td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>
                                <div class="d-flex justify-content-left align-items-center">
                                    <div class="avatar  me-3">
                                        <img src="{{Vite::asset('resources/images/avatars-3.svg')}}" alt="Avatar" width="64" height="64">
                                    </div>
                                    <div class="d-flex flex-column">
                                        <span class="text-truncate fw-bold">The Best Web3 Resources</span>
                                    </div>
                                </div>
                            </td>
                            <td>2021/09/15</td>
                            <td><span class="badge badge-success">Published</span></td>
                            <td class="text-center">

                                <div class="dropdown">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink10" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink10">
                                        <a class="dropdown-item" href="javascript:void(0);">View</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                    </div>
                                </div>
                                
                            </td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>
                                <div class="d-flex justify-content-left align-items-center">
                                    <div class="avatar  me-3">
                                        <img src="{{Vite::asset('resources/images/avatars-1.svg')}}" alt="Avatar" width="64" height="64">
                                    </div>
                                    <div class="d-flex flex-column">
                                        <span class="text-truncate fw-bold">List of Best Javascript Frameworks</span>
                                    </div>
                                </div>
                            </td>
                            <td>2022/12/13</td>
                            <td><span class="badge badge-danger">Draft</span></td>
                            <td class="text-center">

                                <div class="dropdown">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink11" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink11">
                                        <a class="dropdown-item" href="javascript:void(0);">View</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                    </div>
                                </div>
                                
                            </td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>
                                <div class="d-flex justify-content-left align-items-center">
                                    <div class="avatar  me-3">
                                        <img src="{{Vite::asset('resources/images/avatars-2.svg')}}" alt="Avatar" width="64" height="64">
                                    </div>
                                    <div class="d-flex flex-column">
                                        <span class="text-truncate fw-bold">14 Tips to improve your photography</span>
                                    </div>
                                </div>
                            </td>
                            <td>2022/03/03</td>
                            <td><span class="badge badge-danger">Draft</span></td>
                            <td class="text-center">

                                <div class="dropdown">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink21" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink21">
                                        <a class="dropdown-item" href="javascript:void(0);">View</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                    </div>
                                </div>
                                
                            </td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td>
                                <div class="d-flex justify-content-left align-items-center">
                                    <div class="avatar  me-3">
                                        <img src="{{Vite::asset('resources/images/avatars-3.svg')}}" alt="Avatar" width="64" height="64">
                                    </div>
                                    <div class="d-flex flex-column">
                                        <span class="text-truncate fw-bold">The ideal work from home office setup</span>
                                    </div>
                                </div>
                            </td>
                            <td>2022/10/16</td>
                            <td><span class="badge badge-success">Published</span></td>
                            <td class="text-center">

                                <div class="dropdown">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink12" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink12">
                                        <a class="dropdown-item" href="javascript:void(0);">View</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                    </div>
                                </div>
                                
                            </td>
                        </tr>
                        <tr>
                            <td>17</td>
                            <td>
                                <div class="d-flex justify-content-left align-items-center">
                                    <div class="avatar  me-3">
                                        <img src="{{Vite::asset('resources/images/avatars-1.svg')}}" alt="Avatar" width="64" height="64">
                                    </div>
                                    <div class="d-flex flex-column">
                                        <span class="text-truncate fw-bold">Top haunted houses in Great Britain</span>
                                    </div>
                                </div>
                            </td>
                            <td>2022/06/09</td>
                            <td><span class="badge badge-success">Published</span></td>
                            <td class="text-center">

                                <div class="dropdown">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink13" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink13">
                                        <a class="dropdown-item" href="javascript:void(0);">View</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                    </div>
                                </div>
                                
                            </td>
                        </tr>
                        <tr>
                            <td>18</td>
                            <td>
                                <div class="d-flex justify-content-left align-items-center">
                                    <div class="avatar  me-3">
                                        <img src="{{Vite::asset('resources/images/avatars-2.svg')}}" alt="Avatar" width="64" height="64">
                                    </div>
                                    <div class="d-flex flex-column">
                                        <span class="text-truncate fw-bold">29 Most Beautiful Places in the World</span>
                                    </div>
                                </div>
                            </td>
                            <td>2021/04/10</td>
                            <td><span class="badge badge-success">Published</span></td>
                            <td class="text-center">

                                <div class="dropdown">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink14" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink14">
                                        <a class="dropdown-item" href="javascript:void(0);">View</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                    </div>
                                </div>
                                
                            </td>
                        </tr>
                        <tr>
                            <td>20</td>
                            <td>
                                <div class="d-flex justify-content-left align-items-center">
                                    <div class="avatar  me-3">
                                        <img src="{{Vite::asset('resources/images/avatars-3.svg')}}" alt="Avatar" width="64" height="64">
                                    </div>
                                    <div class="d-flex flex-column">
                                        <span class="text-truncate fw-bold">21 Habits of highly productive people</span>
                                    </div>
                                </div>
                            </td>
                            <td>2022/09/26</td>
                            <td><span class="badge badge-danger">Draft</span></td>
                            <td class="text-center">

                                <div class="dropdown">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink15" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink15">
                                        <a class="dropdown-item" href="javascript:void(0);">View</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                    </div>
                                </div>
                                
                            </td>
                        </tr>
                        <tr>
                            <td>21</td>
                            <td>
                                <div class="d-flex justify-content-left align-items-center">
                                    <div class="avatar  me-3">
                                        <img src="{{Vite::asset('resources/images/avatars-1.svg')}}" alt="Avatar" width="64" height="64">
                                    </div>
                                    <div class="d-flex flex-column">
                                        <span class="text-truncate fw-bold">9 Reasons why sugar is bad for your health</span>
                                    </div>
                                </div>
                            </td>
                            <td>2021/09/03</td>
                            <td><span class="badge badge-success">Published</span></td>
                            <td class="text-center">

                                <div class="dropdown">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink16" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink16">
                                        <a class="dropdown-item" href="javascript:void(0);">View</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                    </div>
                                </div>
                                
                            </td>
                        </tr>
                        <tr>
                            <td>22</td>
                            <td>
                                <div class="d-flex justify-content-left align-items-center">
                                    <div class="avatar  me-3">
                                        <img src="{{Vite::asset('resources/images/avatars-2.svg')}}" alt="Avatar" width="64" height="64">
                                    </div>
                                    <div class="d-flex flex-column">
                                        <span class="text-truncate fw-bold">7 Effective ways to instantly look more faishonable</span>
                                    </div>
                                </div>
                            </td>
                            <td>2021/06/25</td>
                            <td><span class="badge badge-success">Published</span></td>
                            <td class="text-center">

                                <div class="dropdown">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink17" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink17">
                                        <a class="dropdown-item" href="javascript:void(0);">View</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                    </div>
                                </div>
                                
                            </td>
                        </tr>
                        <tr>
                            <td>23</td>
                            <td>
                                <div class="d-flex justify-content-left align-items-center">
                                    <div class="avatar  me-3">
                                        <img src="{{Vite::asset('resources/images/avatars-3.svg')}}" alt="Avatar" width="64" height="64">
                                    </div>
                                    <div class="d-flex flex-column">
                                        <span class="text-truncate fw-bold">How to plan a trip in 7 easy steps</span>
                                    </div>
                                </div>
                            </td>
                            <td>2021/12/12</td>
                            <td><span class="badge badge-success">Published</span></td>
                            <td class="text-center">

                                <div class="dropdown">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink18" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink18">
                                        <a class="dropdown-item" href="javascript:void(0);">View</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                    </div>
                                </div>
                                
                            </td>
                        </tr>
                        <tr>
                            <td>26</td>
                            <td>
                                <div class="d-flex justify-content-left align-items-center">
                                    <div class="avatar  me-3">
                                        <img src="{{Vite::asset('resources/images/avatars-1.svg')}}" alt="Avatar" width="64" height="64">
                                    </div>
                                    <div class="d-flex flex-column">
                                        <span class="text-truncate fw-bold">14 Tips to improve your photography</span>
                                    </div>
                                </div>
                            </td>
                            <td>2022/12/22</td>
                            <td><span class="badge badge-danger">Draft</span></td>
                            <td class="text-center">

                                <div class="dropdown">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink19" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink19">
                                        <a class="dropdown-item" href="javascript:void(0);">View</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
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
    
    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <x-slot:footerFiles>
        <script type="module" src="{{asset('plugins-rtl/global/vendors.min.js')}}"></script>
        @vite(['resources/rtl/assets/js/custom.js'])
        <script type="module" src="{{asset('plugins-rtl/table/datatable/datatables.js')}}"></script>
        <script type="module">
            let blogList = $('#blog-list').DataTable({
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
                "stripeClasses": [],
                "lengthMenu": [7, 10, 20, 50],
                "pageLength": 10 
            });
            multiCheck(blogList);
        </script>
    </x-slot>
    <!--  END CUSTOM SCRIPTS FILE  -->
</x-rtl.base-layout>