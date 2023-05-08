<x-base-layout :scrollspy="false">

    <x-slot:pageTitle>
        {{$title}} 
    </x-slot>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <x-slot:headerFiles>
        <!--  BEGIN CUSTOM STYLE FILE  -->
        <link rel="stylesheet" href="{{asset('plugins/table/datatable/datatables.css')}}">
        @vite(['resources/scss/light/plugins/table/datatable/dt-global_style.scss'])
        @vite(['resources/scss/dark/plugins/table/datatable/dt-global_style.scss'])
        <!--  END CUSTOM STYLE FILE  -->
        
        <style>
            #ecommerce-list img {
                border-radius: 18px;
            }
        </style>
    </x-slot>
    <!-- END GLOBAL MANDATORY STYLES -->

    <div class="row layout-top-spacing">

        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
            <div class="widget-content widget-content-area br-8">
                <table id="ecommerce-list" class="table dt-table-hover" style="width:100%">
                    <thead>
                        <tr>
                            <th class="checkbox-column"></th>
                            <th>Product</th>
                            <th>Added on</th>
                            <th>Status</th>
                            <th>Price</th>
                            <th class="no-content text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>
                                <div class="d-flex justify-content-left align-items-center">
                                    <div class="avatar  me-3">
                                        <img src="{{Vite::asset('resources/images/product-3.jpg')}}" alt="Avatar" width="64" height="64">
                                    </div>
                                    <div class="d-flex flex-column">
                                        <span class="text-truncate fw-bold">Nike Green Shoes</span>
                                    </div>
                                </div>
                            </td>
                            <td>2022/04/25</td>
                            <td><span class="badge badge-danger">Out of stock</span></td>
                            <td>$61</td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
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
                                        <img src="{{Vite::asset('resources/images/product-8.jpg')}}" alt="Avatar" width="64" height="64">
                                    </div>
                                    <div class="d-flex flex-column">
                                        <span class="text-truncate fw-bold">Drone</span>
                                    </div>
                                </div>
                            </td>
                            <td>2022/07/25</td>
                            <td><span class="badge badge-warning">Low Stock</span></td>
                            <td>$63</td>
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
                                        <img src="{{Vite::asset('resources/images/product-13.jpg')}}" alt="Avatar" width="64" height="64">
                                    </div>
                                    <div class="d-flex flex-column">
                                        <span class="text-truncate fw-bold">Smart Cleaner</span>
                                    </div>
                                </div>
                            </td>
                            <td>2022/01/12</td>
                            <td><span class="badge badge-success">In Stock</span></td>
                            <td>$66</td>
                            <td class="text-center">

                                <div class="dropdown">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink3">
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
                                        <img src="{{Vite::asset('resources/images/product-4.jpg')}}" alt="Avatar" width="64" height="64">
                                    </div>
                                    <div class="d-flex flex-column">
                                        <span class="text-truncate fw-bold">Camera</span>
                                    </div>
                                </div>
                            </td>
                            <td>2022/03/29</td>
                            <td><span class="badge badge-danger">Out of stock</span></td>
                            <td>$22</td>
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
                            <td>5</td>
                            <td>
                                <div class="d-flex justify-content-left align-items-center">
                                    <div class="avatar  me-3">
                                        <img src="{{Vite::asset('resources/images/product-5.jpg')}}" alt="Avatar" width="64" height="64">
                                    </div>
                                    <div class="d-flex flex-column">
                                        <span class="text-truncate fw-bold">Nike Shoes</span>
                                    </div>
                                </div>
                            </td>
                            <td>2022/11/28</td>
                            <td><span class="badge badge-warning">Low Stock</span></td>
                            <td>$33</td>
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
                            <td>6</td>
                            <td>
                                <div class="d-flex justify-content-left align-items-center">
                                    <div class="avatar  me-3">
                                        <img src="{{Vite::asset('resources/images/product-6.jpg')}}" alt="Avatar" width="64" height="64">
                                    </div>
                                    <div class="d-flex flex-column">
                                        <span class="text-truncate fw-bold">MicroPhone</span>
                                    </div>
                                </div>
                            </td>
                            <td>2022/12/02</td>
                            <td><span class="badge badge-success">In Stock</span></td>
                            <td>$61</td>
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
                            <td>7</td>
                            <td>
                                <div class="d-flex justify-content-left align-items-center">
                                    <div class="avatar  me-3">
                                        <img src="{{Vite::asset('resources/images/product-7.jpg')}}" alt="Avatar" width="64" height="64">
                                    </div>
                                    <div class="d-flex flex-column">
                                        <span class="text-truncate fw-bold">Monitor</span>
                                    </div>
                                </div>
                            </td>
                            <td>2022/08/06</td>
                            <td><span class="badge badge-success">In Stock</span></td>
                            <td>$59</td>
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
                            <td>8</td>
                            <td>
                                <div class="d-flex justify-content-left align-items-center">
                                    <div class="avatar  me-3">
                                        <img src="{{Vite::asset('resources/images/product-1.jpg')}}" alt="Avatar" width="64" height="64">
                                    </div>
                                    <div class="d-flex flex-column">
                                        <span class="text-truncate fw-bold">Shoes</span>
                                    </div>
                                </div>
                            </td>
                            <td>2022/10/14</td>
                            <td><span class="badge badge-warning">Low Stock</span></td>
                            <td>$55</td>
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
                            <td>9</td>
                            <td>
                                <div class="d-flex justify-content-left align-items-center">
                                    <div class="avatar  me-3">
                                        <img src="{{Vite::asset('resources/images/product-9.jpg')}}" alt="Avatar" width="64" height="64">
                                    </div>
                                    <div class="d-flex flex-column">
                                        <span class="text-truncate fw-bold">Speakers</span>
                                    </div>
                                </div>
                            </td>
                            <td>2022/09/15</td>
                            <td><span class="badge badge-success">In Stock</span></td>
                            <td>$39</td>
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
                            <td>10</td>
                            <td>
                                <div class="d-flex justify-content-left align-items-center">
                                    <div class="avatar  me-3">
                                        <img src="{{Vite::asset('resources/images/product-10.jpg')}}" alt="Avatar" width="64" height="64">
                                    </div>
                                    <div class="d-flex flex-column">
                                        <span class="text-truncate fw-bold">XBox</span>
                                    </div>
                                </div>
                            </td>
                            <td>2022/12/13</td>
                            <td><span class="badge badge-danger">Out of stock</span></td>
                            <td>$23</td>
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
                            <td>12</td>
                            <td>
                                <div class="d-flex justify-content-left align-items-center">
                                    <div class="avatar  me-3">
                                        <img src="{{Vite::asset('resources/images/product-11.jpg')}}" alt="Avatar" width="64" height="64">
                                    </div>
                                    <div class="d-flex flex-column">
                                        <span class="text-truncate fw-bold">Phone</span>
                                    </div>
                                </div>
                            </td>
                            <td>2013/03/03</td>
                            <td><span class="badge badge-danger">Out of stock</span></td>
                            <td>$22</td>
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
                            <td>13</td>
                            <td>
                                <div class="d-flex justify-content-left align-items-center">
                                    <div class="avatar  me-3">
                                        <img src="{{Vite::asset('resources/images/product-12.jpg')}}" alt="Avatar" width="64" height="64">
                                    </div>
                                    <div class="d-flex flex-column">
                                        <span class="text-truncate fw-bold">Selfi Stick</span>
                                    </div>
                                </div>
                            </td>
                            <td>2022/10/16</td>
                            <td><span class="badge badge-success">In Stock</span></td>
                            <td>$36</td>
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
                                        <img src="{{Vite::asset('resources/images/product-14.jpg')}}" alt="Avatar" width="64" height="64">
                                    </div>
                                    <div class="d-flex flex-column">
                                        <span class="text-truncate fw-bold">Sunglasses</span>
                                    </div>
                                </div>
                            </td>
                            <td>2022/06/09</td>
                            <td><span class="badge badge-success">In Stock</span></td>
                            <td>$64</td>
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
                        <tr>
                            <td>18</td>
                            <td>
                                <div class="d-flex justify-content-left align-items-center">
                                    <div class="avatar  me-3">
                                        <img src="{{Vite::asset('resources/images/product-15.jpg')}}" alt="Avatar" width="64" height="64">
                                    </div>
                                    <div class="d-flex flex-column">
                                        <span class="text-truncate fw-bold">Flashlight</span>
                                    </div>
                                </div>
                            </td>
                            <td>2022/04/10</td>
                            <td><span class="badge badge-success">In Stock</span></td>
                            <td>$59</td>
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
                            <td>20</td>
                            <td>
                                <div class="d-flex justify-content-left align-items-center">
                                    <div class="avatar  me-3">
                                        <img src="{{Vite::asset('resources/images/product-16.jpg')}}" alt="Avatar" width="64" height="64">
                                    </div>
                                    <div class="d-flex flex-column">
                                        <span class="text-truncate fw-bold">Smart Watch</span>
                                    </div>
                                </div>
                            </td>
                            <td>2022/09/26</td>
                            <td><span class="badge badge-danger">Out of stock</span></td>
                            <td>$35</td>
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
                            <td>21</td>
                            <td>
                                <div class="d-flex justify-content-left align-items-center">
                                    <div class="avatar  me-3">
                                        <img src="{{Vite::asset('resources/images/product-17.jpg')}}" alt="Avatar" width="64" height="64">
                                    </div>
                                    <div class="d-flex flex-column">
                                        <span class="text-truncate fw-bold">Lamp</span>
                                    </div>
                                </div>
                            </td>
                            <td>2022/09/03</td>
                            <td><span class="badge badge-success">In Stock</span></td>
                            <td>$30</td>
                            <td class="text-center">

                                <div class="dropdown">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink22" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink22">
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
                                        <img src="{{Vite::asset('resources/images/product-18.jpg')}}" alt="Avatar" width="64" height="64">
                                    </div>
                                    <div class="d-flex flex-column">
                                        <span class="text-truncate fw-bold">Tablet</span>
                                    </div>
                                </div>
                            </td>
                            <td>2022/06/25</td>
                            <td><span class="badge badge-success">In Stock</span></td>
                            <td>$40</td>
                            <td class="text-center">

                                <div class="dropdown">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink23" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink23">
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
                                        <img src="{{Vite::asset('resources/images/product-19.jpg')}}" alt="Avatar" width="64" height="64">
                                    </div>
                                    <div class="d-flex flex-column">
                                        <span class="text-truncate fw-bold">Chair</span>
                                    </div>
                                </div>
                            </td>
                            <td>2022/12/12</td>
                            <td><span class="badge badge-success">In Stock</span></td>
                            <td>$21</td>
                            <td class="text-center">

                                <div class="dropdown">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink24" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink24">
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
                                        <img src="{{Vite::asset('resources/images/product-14.jpg')}}" alt="Avatar" width="64" height="64">
                                    </div>
                                    <div class="d-flex flex-column">
                                        <span class="text-truncate fw-bold">Sunglasses</span>
                                    </div>
                                </div>
                            </td>
                            <td>2022/12/22</td>
                            <td><span class="badge badge-danger">Out of stock</span></td>
                            <td>$42</td>
                            <td class="text-center">

                                <div class="dropdown">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink25" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink25">
                                        <a class="dropdown-item" href="javascript:void(0);">View</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                    </div>
                                </div>
                                
                            </td>
                            <!-- <td>$92,575</td> -->
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    
    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <x-slot:footerFiles>
        <script type="module" src="{{asset('plugins/global/vendors.min.js')}}"></script>
        @vite(['resources/assets/js/custom.js'])
        <script type="module" src="{{asset('plugins/table/datatable/datatables.js')}}"></script>
        <script type="module">
            let ecommerceList = $('#ecommerce-list').DataTable({
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
            multiCheck(ecommerceList);
        </script>
    </x-slot>
    <!--  END CUSTOM SCRIPTS FILE  -->
</x-base-layout>