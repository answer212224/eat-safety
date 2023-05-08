<x-rtl.base-layout :scrollspy="false">

    <x-slot:pageTitle>
        {{$title}} 
    </x-slot>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <x-slot:headerFiles>
        <!--  BEGIN CUSTOM STYLE FILE  -->
        <!--  END CUSTOM STYLE FILE  -->
    </x-slot>
    <!-- END GLOBAL MANDATORY STYLES -->

    <div class="row layout-top-spacing">
        <div class="col-lg-3 col-md-3 col-sm-3 mb-4">
            <input id="t-text" type="text" name="txt" placeholder="Search" class="form-control" required="">
        </div>
        <div class="col-xl-2 col-lg-3 col-md-3 col-sm-3 mb-4 ms-auto">
            <select class="form-select form-select" aria-label="Default select example">
                <option selected="">All Category</option>
                <option value="3">Apperal</option>
                <option value="1">Electronics</option>
                <option value="2">Clothing</option>
                <option value="3">Accessories</option>
                <option value="3">Organic</option>
            </select>
        </div>

        <div class="col-xl-2 col-lg-3 col-md-3 col-sm-3 mb-4">
            <select class="form-select form-select" aria-label="Default select example">
                <option selected="">Sort By</option>
                <option value="1">Low to High Price</option>
                <option value="2">Most Viewed</option>
                <option value="3">Hight to Low Price</option>
                <option value="3">On Sale</option>
                <option value="3">Newest</option>
            </select>
        </div>
    </div>
    
    <div class="row">

        <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-4">
            <a class="card style-6" href="{{getRouterValue();}}/app/ecommerce/detail">
                <span class="badge badge-primary">NEW</span>
                <img src="{{Vite::asset('resources/images/product-3.jpg')}}" class="card-img-top" alt="...">
                <div class="card-footer">
                    <div class="row">
                        <div class="col-12 mb-4">
                            <b>Nike Green Shoes</b>
                        </div>
                        <div class="col-3">
                            <div class="badge--group">
                                <div class="badge badge-primary badge-dot"></div>
                                <div class="badge badge-danger badge-dot"></div>
                                <div class="badge badge-info badge-dot"></div>
                            </div>
                        </div>
                        <div class="col-9 text-end">
                            <div class="pricing d-flex justify-content-end">
                                <p class="text-success mb-0">$150.00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>   

        <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-4">
            <a class="card style-6" href="{{getRouterValue();}}/app/ecommerce/detail">
                <span class="badge badge-danger"></span>
                <img src="{{Vite::asset('resources/images/product-8.jpg')}}" class="card-img-top" alt="...">
                <div class="card-footer">
                    <div class="row">
                        <div class="col-12 mb-4">
                            <b>Drone</b>
                        </div>
                        <div class="col-3">
                            <div class="badge--group">
                                <div class="badge badge-secondary badge-dot"></div>
                            </div>
                        </div>
                        <div class="col-9 text-end">
                            <div class="pricing d-flex justify-content-end">
                                <p class="text-success mb-0">$190.00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-4">
            <a class="card style-6" href="{{getRouterValue();}}/app/ecommerce/detail">
                <span class="badge badge-danger"></span>
                <img src="{{Vite::asset('resources/images/product-13.jpg')}}" class="card-img-top" alt="...">
                <div class="card-footer">
                    <div class="row">
                        <div class="col-12 mb-4">
                            <b>Smart Cleaner</b>
                        </div>
                        <div class="col-3">
                            <div class="badge--group">
                                <div class="badge badge-secondary badge-dot"></div>
                            </div>
                        </div>
                        <div class="col-9 text-end">
                            <div class="pricing d-flex justify-content-end">
                                <p class="text-success mb-0">$330.00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-4">
            <a class="card style-6  mb-md-0 mb-4" href="{{getRouterValue();}}/app/ecommerce/detail">
                <span class="badge badge-danger">SALE</span>
                <img src="{{Vite::asset('resources/images/product-4.jpg')}}" class="card-img-top" alt="...">
                <div class="card-footer">
                    <div class="row">
                        <div class="col-12 mb-4">
                            <b>Camera</b>
                        </div>
                        <div class="col-3">
                            <div class="badge--group">
                                <div class="badge badge-success badge-dot"></div>
                                <div class="badge badge-secondary badge-dot"></div>
                                <div class="badge badge-warning badge-dot"></div>
                            </div>
                        </div>
                        <div class="col-9 text-end">
                            <div class="pricing d-flex justify-content-end">
                                <p class="text-success mb-0 me-2">$11.00</p>
                                <p class="mb-0 line-through"><del>$21.00</del></p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        
        <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-4">
            <a class="card style-6" href="{{getRouterValue();}}/app/ecommerce/detail">
                <span class="badge badge-primary">NEW</span>
                <img src="{{Vite::asset('resources/images/product-5.jpg')}}" class="card-img-top" alt="...">
                <div class="card-footer">
                    <div class="row">
                        <div class="col-12 mb-4">
                            <b>Nike Shoes</b>
                        </div>
                        <div class="col-3">
                            <div class="badge--group">
                                <div class="badge badge-primary badge-dot"></div>
                                <div class="badge badge-danger badge-dot"></div>
                                <div class="badge badge-info badge-dot"></div>
                            </div>
                        </div>
                        <div class="col-9 text-end">
                            <div class="pricing d-flex justify-content-end">
                                <p class="text-success mb-0">$130.00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-4">
            <a class="card style-6  mb-md-0 mb-4" href="{{getRouterValue();}}/app/ecommerce/detail">
                <span class="badge badge-danger">SALE</span>
                <img src="{{Vite::asset('resources/images/product-6.jpg')}}" class="card-img-top" alt="...">
                <div class="card-footer">
                    <div class="row">
                        <div class="col-12 mb-4">
                            <b>MicroPhone</b>
                        </div>
                        <div class="col-3">
                            <div class="badge--group">
                                <div class="badge badge-success badge-dot"></div>
                                <div class="badge badge-secondary badge-dot"></div>
                                <div class="badge badge-warning badge-dot"></div>
                            </div>
                        </div>
                        <div class="col-9 text-end">
                            <div class="pricing d-flex justify-content-end">
                                <p class="text-success mb-0 me-2">$110.00</p>
                                <p class="mb-0 line-through"><del>$230.00</del></p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        
        <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-4">
            <a class="card style-6" href="{{getRouterValue();}}/app/ecommerce/detail">
                <span class="badge badge-danger"></span>
                <img src="{{Vite::asset('resources/images/product-7.jpg')}}" class="card-img-top" alt="...">
                <div class="card-footer">
                    <div class="row">
                        <div class="col-12 mb-4">
                            <b>Monitor</b>
                        </div>
                        <div class="col-3">
                            <div class="badge--group">
                                <div class="badge badge-danger badge-dot"></div>
                                <div class="badge badge-success badge-dot"></div>
                                <div class="badge badge-warning badge-dot"></div>
                            </div>
                        </div>
                        <div class="col-9 text-end">
                            <div class="pricing d-flex justify-content-end">
                                <p class="text-success mb-0">$150.00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        
        <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-4">
            <a class="card style-6" href="{{getRouterValue();}}/app/ecommerce/detail">
                <span class="badge badge-danger"></span>
                <img src="{{Vite::asset('resources/images/product-1.jpg')}}" class="card-img-top" alt="...">
                <div class="card-footer">
                    <div class="row">
                        <div class="col-12 mb-4">
                            <b>Shoes</b>
                        </div>
                        <div class="col-3">
                            <div class="badge--group">
                                <div class="badge badge-danger badge-dot"></div>
                                <div class="badge badge-success badge-dot"></div>
                                <div class="badge badge-warning badge-dot"></div>
                            </div>
                        </div>
                        <div class="col-9 text-end">
                            <div class="pricing d-flex justify-content-end">
                                <p class="text-success mb-0">$95.00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-4">
            <a class="card style-6  mb-md-0 mb-4" href="{{getRouterValue();}}/app/ecommerce/detail">
                <span class="badge badge-danger">SALE</span>
                <img src="{{Vite::asset('resources/images/product-9.jpg')}}" class="card-img-top" alt="...">
                <div class="card-footer">
                    <div class="row">
                        <div class="col-12 mb-4">
                            <b>Speakers</b>
                        </div>
                        <div class="col-3">
                            <div class="badge--group">
                                <div class="badge badge-success badge-dot"></div>
                                <div class="badge badge-secondary badge-dot"></div>
                                <div class="badge badge-warning badge-dot"></div>
                            </div>
                        </div>
                        <div class="col-9 text-end">
                            <div class="pricing d-flex justify-content-end">
                                <p class="text-success mb-0 me-2">$20.00</p>
                                <p class="mb-0 line-through"><del>$33.00</del></p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-4">
            <a class="card style-6" href="{{getRouterValue();}}/app/ecommerce/detail">
                <span class="badge badge-danger"></span>
                <img src="{{Vite::asset('resources/images/product-10.jpg')}}" class="card-img-top" alt="...">
                <div class="card-footer">
                    <div class="row">
                        <div class="col-12 mb-4">
                            <b>XBox</b>
                        </div>
                        <div class="col-3">
                            <div class="badge--group">
                                <div class="badge badge-secondary badge-dot"></div>
                            </div>
                        </div>
                        <div class="col-9 text-end">
                            <div class="pricing d-flex justify-content-end">
                                <p class="text-success mb-0">$608.00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        
        <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-4">
            <a class="card style-6" href="{{getRouterValue();}}/app/ecommerce/detail">
                <span class="badge badge-primary">NEW</span>
                <img src="{{Vite::asset('resources/images/product-11.jpg')}}" class="card-img-top" alt="...">
                <div class="card-footer">
                    <div class="row">
                        <div class="col-12 mb-4">
                            <b>Phone</b>
                        </div>
                        <div class="col-3">
                            <div class="badge--group">
                                <div class="badge badge-primary badge-dot"></div>
                                <div class="badge badge-danger badge-dot"></div>
                                <div class="badge badge-info badge-dot"></div>
                            </div>
                        </div>
                        <div class="col-9 text-end">
                            <div class="pricing d-flex justify-content-end">
                                <p class="text-success mb-0">$450.00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        
        <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-4">
            <a class="card style-6" href="{{getRouterValue();}}/app/ecommerce/detail">
                <span class="badge badge-danger"></span>
                <img src="{{Vite::asset('resources/images/product-12.jpg')}}" class="card-img-top" alt="...">
                <div class="card-footer">
                    <div class="row">
                        <div class="col-12 mb-4">
                            <b>Selfi Stick</b>
                        </div>
                        <div class="col-3">
                            <div class="badge--group">
                                <div class="badge badge-danger badge-dot"></div>
                                <div class="badge badge-success badge-dot"></div>
                                <div class="badge badge-warning badge-dot"></div>
                            </div>
                        </div>
                        <div class="col-9 text-end">
                            <div class="pricing d-flex justify-content-end">
                                <p class="text-success mb-0">$120.00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-4">
            <a class="card style-6" href="{{getRouterValue();}}/app/ecommerce/detail">
                <span class="badge badge-danger"></span>
                <img src="{{Vite::asset('resources/images/product-14.jpg')}}" class="card-img-top" alt="...">
                <div class="card-footer">
                    <div class="row">
                        <div class="col-12 mb-4">
                            <b>Sunglasses</b>
                        </div>
                        <div class="col-3">
                            <div class="badge--group">
                                <div class="badge badge-danger badge-dot"></div>
                                <div class="badge badge-success badge-dot"></div>
                                <div class="badge badge-warning badge-dot"></div>
                            </div>
                        </div>
                        <div class="col-9 text-end">
                            <div class="pricing d-flex justify-content-end">
                                <p class="text-success mb-0">$10.00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-4">
            <a class="card style-6" href="{{getRouterValue();}}/app/ecommerce/detail">
                <span class="badge badge-danger"></span>
                <img src="{{Vite::asset('resources/images/product-15.jpg')}}" class="card-img-top" alt="...">
                <div class="card-footer">
                    <div class="row">
                        <div class="col-12 mb-4">
                            <b>Flashlight</b>
                        </div>
                        <div class="col-3">
                            <div class="badge--group">
                                <div class="badge badge-danger badge-dot"></div>
                                <div class="badge badge-success badge-dot"></div>
                                <div class="badge badge-warning badge-dot"></div>
                            </div>
                        </div>
                        <div class="col-9 text-end">
                            <div class="pricing d-flex justify-content-end">
                                <p class="text-success mb-0">$20.00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-4">
            <a class="card style-6" href="{{getRouterValue();}}/app/ecommerce/detail">
                <span class="badge badge-danger"></span>
                <img src="{{Vite::asset('resources/images/product-16.jpg')}}" class="card-img-top" alt="...">
                <div class="card-footer">
                    <div class="row">
                        <div class="col-12 mb-4">
                            <b>Smart Watch</b>
                        </div>
                        <div class="col-3">
                            <div class="badge--group">
                                <div class="badge badge-danger badge-dot"></div>
                                <div class="badge badge-success badge-dot"></div>
                                <div class="badge badge-warning badge-dot"></div>
                            </div>
                        </div>
                        <div class="col-9 text-end">
                            <div class="pricing d-flex justify-content-end">
                                <p class="text-success mb-0">$160.00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-4">
            <a class="card style-6" href="{{getRouterValue();}}/app/ecommerce/detail">
                <span class="badge badge-danger"></span>
                <img src="{{Vite::asset('resources/images/product-17.jpg')}}" class="card-img-top" alt="...">
                <div class="card-footer">
                    <div class="row">
                        <div class="col-12 mb-4">
                            <b>Lamp</b>
                        </div>
                        <div class="col-3">
                            <div class="badge--group">
                                <div class="badge badge-danger badge-dot"></div>
                                <div class="badge badge-success badge-dot"></div>
                                <div class="badge badge-warning badge-dot"></div>
                            </div>
                        </div>
                        <div class="col-9 text-end">
                            <div class="pricing d-flex justify-content-end">
                                <p class="text-success mb-0">$160.00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>


        <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-4">
            <a class="card style-6" href="{{getRouterValue();}}/app/ecommerce/detail">
                <span class="badge badge-danger"></span>
                <img src="{{Vite::asset('resources/images/product-18.jpg')}}" class="card-img-top" alt="...">
                <div class="card-footer">
                    <div class="row">
                        <div class="col-12 mb-4">
                            <b>Tablet</b>
                        </div>
                        <div class="col-3">
                            <div class="badge--group">
                                <div class="badge badge-danger badge-dot"></div>
                                <div class="badge badge-success badge-dot"></div>
                                <div class="badge badge-warning badge-dot"></div>
                            </div>
                        </div>
                        <div class="col-9 text-end">
                            <div class="pricing d-flex justify-content-end">
                                <p class="text-success mb-0">$160.00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>


        <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-4">
            <a class="card style-6" href="{{getRouterValue();}}/app/ecommerce/detail">
                <span class="badge badge-danger"></span>
                <img src="{{Vite::asset('resources/images/product-19.jpg')}}" class="card-img-top" alt="...">
                <div class="card-footer">
                    <div class="row">
                        <div class="col-12 mb-4">
                            <b>Chair</b>
                        </div>
                        <div class="col-3">
                            <div class="badge--group">
                                <div class="badge badge-danger badge-dot"></div>
                                <div class="badge badge-success badge-dot"></div>
                                <div class="badge badge-warning badge-dot"></div>
                            </div>
                        </div>
                        <div class="col-9 text-end">
                            <div class="pricing d-flex justify-content-end">
                                <p class="text-success mb-0">$160.00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

    </div>
    
    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <x-slot:footerFiles>

    </x-slot>
    <!--  END CUSTOM SCRIPTS FILE  -->
</x-rtl.base-layout>