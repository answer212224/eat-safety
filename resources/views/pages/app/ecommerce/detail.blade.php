<x-base-layout :scrollspy="false">

    <x-slot:pageTitle>
        {{$title}} 
    </x-slot>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <x-slot:headerFiles>
        <!--  BEGIN CUSTOM STYLE FILE  -->
        <link rel="stylesheet" href="{{asset('plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css')}}">
        <link rel="stylesheet" href="{{asset('plugins/glightbox/glightbox.min.css')}}">
        <link rel="stylesheet" href="{{asset('plugins/splide/splide.min.css')}}">

        @vite(['resources/scss/light/assets/components/tabs.scss'])
        @vite(['resources/scss/light/assets/components/accordions.scss'])
        @vite(['resources/scss/light/assets/apps/ecommerce-details.scss'])
        @vite(['resources/scss/dark/assets/components/tabs.scss'])
        @vite(['resources/scss/dark/assets/components/accordions.scss'])
        @vite(['resources/scss/dark/assets/apps/ecommerce-details.scss'])        
        <!--  END CUSTOM STYLE FILE  -->
    </x-slot>
    <!-- END GLOBAL MANDATORY STYLES -->

    <div class="row layout-top-spacing">

        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-4">

            <div class="widget-content widget-content-area br-8">

                <div class="row justify-content-center">
                    <div class="col-xxl-5 col-xl-6 col-lg-7 col-md-7 col-sm-9 col-12 pe-3">
                        <!-- Swiper -->
                        <div id="main-slider" class="splide">
                            <div class="splide__track">
                                <ul class="splide__list">
                                    <li class="splide__slide">
                                        <a href="{{Vite::asset('resources/images/ecommerce-1.jpg')}}" class="glightbox">
                                            <img alt="ecommerce" src="{{Vite::asset('resources/images/ecommerce-1.jpg')}}">
                                        </a>
                                    </li>
                                    <li class="splide__slide">
                                        <a href="{{Vite::asset('resources/images/ecommerce-2.jpg')}}" class="glightbox">
                                            <img alt="ecommerce" src="{{Vite::asset('resources/images/ecommerce-2.jpg')}}">
                                        </a>
                                    </li>
                                    <li class="splide__slide">
                                        <a href="{{Vite::asset('resources/images/ecommerce-4.jpg')}}" class="glightbox">
                                            <img alt="ecommerce" src="{{Vite::asset('resources/images/ecommerce-4.jpg')}}">
                                        </a>
                                    </li>
                                    <li class="splide__slide">
                                        <a href="{{Vite::asset('resources/images/ecommerce-5.jpg')}}" class="glightbox">
                                            <img alt="ecommerce" src="{{Vite::asset('resources/images/ecommerce-5.jpg')}}">
                                        </a>
                                    </li>
                                    <li class="splide__slide">
                                        <a href="{{Vite::asset('resources/images/ecommerce-6.jpg')}}" class="glightbox">
                                            <img alt="ecommerce" src="{{Vite::asset('resources/images/ecommerce-6.jpg')}}">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div id="thumbnail-slider" class="splide">
                            <div class="splide__track">
                                <ul class="splide__list">
                                    <li class="splide__slide"><img alt="ecommerce" src="{{Vite::asset('resources/images/ecommerce-1.jpg')}}"></li>
                                    <li class="splide__slide"><img alt="ecommerce" src="{{Vite::asset('resources/images/ecommerce-2.jpg')}}"></li>
                                    <li class="splide__slide"><img alt="ecommerce" src="{{Vite::asset('resources/images/ecommerce-4.jpg')}}"></li>
                                    <li class="splide__slide"><img alt="ecommerce" src="{{Vite::asset('resources/images/ecommerce-5.jpg')}}"></li>
                                    <li class="splide__slide"><img alt="ecommerce" src="{{Vite::asset('resources/images/ecommerce-6.jpg')}}"></li>
                                </ul>
                            </div>
                        </div>

                    </div>

                    <div class="col-xxl-4 col-xl-5 col-lg-12 col-md-12 col-12 mt-xl-0 mt-5 align-self-center">

                        <div class="product-details-content">
                            
                            <span class="badge badge-light-danger mb-3">40% Sale off</span>
                            
                            <h3 class="product-title mb-0">Cotton T-Shit</h3>
                            
                            <div class="review mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                <span class="rating-score">4.88 <span class="rating-count">(200 Reviews)</span></span>
                            </div>

                            <div class="row">

                                <div class="col-md-9 col-sm-9 col-9">

                                    <div class="pricing">

                                        <span class="discounted-price">$20</span>
                                        <span class="regular-price">$30</span>
                                        
                                    </div>
                                    
                                </div>
                                <div class="col-md-3 col-sm-3 col-3 text-end">
                                    <div class="product-share">
                                        <button class="btn btn-light-success btn-icon btn-rounded">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg>
                                        </button>
                                    </div>
                                </div>
                                
                            </div>                                            

                            <hr class="mb-4">
                            
                            <div class="row color-swatch mb-4">
                                <div class="col-xl-3 col-lg-6 col-sm-6 align-self-center">Color</div>
                                <div class="col-xl-9 col-lg-6 col-sm-6">
                                    <div class="color-options text-xl-end">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4" checked>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault5">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault6">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault7">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row size-selector mb-4">
                                <div class="col-xl-9 col-lg-6 col-sm-6 align-self-center">Size</div>
                                <div class="col-xl-3 col-lg-6 col-sm-6 align-self-center">
                                    <select class="form-select form-control-sm" aria-label="Default select example">
                                        <option value="S">S</option>
                                        <option value="M">M</option>
                                        <option value="L" selected>L</option>
                                        <option value="XL">XL</option>
                                        <option value="2XL">2XL</option>
                                    </select>
                                    <a href="javascript:void(0);" class="product-helpers text-end d-block mt-2">Size Chart</a>
                                </div>
                            </div>

                            <div class="row quantity-selector mb-4">
                                <div class="col-xl-6 col-lg-6 col-sm-6 mt-sm-3">Quantity</div>
                                <div class="col-xl-6 col-lg-6 col-sm-6">
                                    <input id="demo1" type="text" value="1" name="demo1">
                                    <p class="text-danger product-helpers text-end mt-2">Low Stock</p>
                                </div>
                            </div>

                            <hr class="mb-5 mt-4">

                            <div class="action-button text-center">

                                <div class="row">

                                    <div class="col-xxl-7 col-xl-7 col-sm-6 mb-sm-0 mb-3">
                                        <button class="btn btn-primary w-100 btn-lg"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg> <span class="btn-text-inner">Add To Cart</span></button>
                                    </div>

                                    <div class="col-xxl-5 col-xl-5 col-sm-6">
                                        <button class="btn btn-success w-100 btn-lg">Buy Now</button>
                                    </div>
                                    
                                </div>
                                
                            </div>

                            <div class="secure-info mt-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shield"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                                <p>Safe and Secure Payments. Easy returns. 100% Authentic products.</p>
                            </div>
                            
                        </div>
                        
                    </div>
                </div>

            </div>

        </div>

        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-4">

            <div class="widget-content widget-content-area br-8">

                <div class="production-descriptions simple-pills">

                    <div class="pro-des-content">

                        <div class="row">
                            <div class="col-xxl-6 col-xl-8 col-lg-9 col-md-9 col-sm-12 mx-auto">
                                <div class="product-reviews mb-5">
                                        
                                    <div class="row">
                                        <div class="col-sm-6 align-self-center">
                                            <div class="reviews">
                                                <h1 class="mb-0">4.88</h1>
                                                <span>(200 reviews)</span>
                                                <div class="stars mt-3 mb-sm-0 mb-4">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star empty-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">

                                            <div class="row review-progress mb-sm-1 mb-3">
                                                <div class="col-sm-4">
                                                    <p>5 Star</p>
                                                </div>
                                                <div class="col-sm-8 align-self-center">
                                                    <div class="progress">
                                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row review-progress mb-sm-1 mb-3">
                                                <div class="col-sm-4">
                                                    <p>4 Star</p>
                                                </div>
                                                <div class="col-sm-8 align-self-center">
                                                    <div class="progress">
                                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row review-progress mb-sm-1 mb-3">
                                                <div class="col-sm-4">
                                                    <p>3 Star</p>
                                                </div>
                                                <div class="col-sm-8 align-self-center">
                                                    <div class="progress">
                                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row review-progress mb-sm-1 mb-3">
                                                <div class="col-sm-4">
                                                    <p>2 Star</p>
                                                </div>
                                                <div class="col-sm-8 align-self-center">
                                                    <div class="progress">
                                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row review-progress mb-sm-1 mb-3">
                                                <div class="col-sm-4">
                                                    <p>1 Star</p>
                                                </div>
                                                <div class="col-sm-8 align-self-center">
                                                    <div class="progress">
                                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                        
                        
                        <div id="iconsAccordion" class="accordion-icons accordion">

                            <div class="card">
                                <div class="card-header" id="headingTwo3">
                                    <section class="mb-0 mt-0">
                                        <div role="menu" class="collapsed" data-bs-toggle="collapse" data-bs-target="#iconAccordionTwo" aria-expanded="false" aria-controls="iconAccordionTwo">
                                            <div class="accordion-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg></div>
                                            Reviews  <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                        </div>
                                    </section>
                                </div>
                                <div id="iconAccordionTwo" class="collapse" aria-labelledby="headingTwo3" data-bs-parent="#iconsAccordion">
                                    <div class="card-body">
                                
                                        <div class="row">
                                                                                                        
                                            <div class="col-md-12 mx-auto">

                                                <div class="media mb-4">
                                                    <div class="avatar me-sm-4 mb-sm-0 me-0 mb-3">
                                                        <img alt="avatar" src="{{Vite::asset('resources/images/profile-2.jpeg')}}" class="rounded-circle">
                                                    </div>
                                                    <div class="media-body">
                                                        <h4 class="media-heading mb-1">Kelly Young</h4>
                                                        <div class="stars">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                        </div>
                                                        <div class="meta-tags">a min ago</div>
                                                        <p class="media-text mt-2">Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus. Sed dapibus nulla elementum, rutrum neque eu, gravida neque.</p>
                                                    </div>
                                                </div>
    
                                                <div class="media mb-4">
                                                    <div class="avatar me-sm-4 mb-sm-0 me-0 mb-3">
                                                        <img alt="avatar" src="{{Vite::asset('resources/images/profile-4.jpeg')}}" class="rounded-circle">
                                                    </div>
                                                    <div class="media-body">
                                                        <h4 class="media-heading mb-1">Mary McDonald</h4>
                                                        <div class="stars">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                        </div>
                                                        <div class="meta-tags">40 mins ago</div>
                                                        <p class="media-text mt-2">Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus. Sed dapibus nulla elementum, rutrum neque eu, gravida neque.</p>
                                                    </div>
                                                </div>
    
                                                <div class="media mb-4">
                                                    <div class="avatar me-sm-4 mb-sm-0 me-0 mb-3">
                                                        <img alt="avatar" src="{{Vite::asset('resources/images/profile-21.jpeg')}}" class="rounded-circle">
                                                    </div>
                                                    <div class="media-body">
                                                        <h4 class="media-heading mb-1">Oscar Garner</h4>
                                                        <div class="stars">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star empty-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                        </div>
                                                        <div class="meta-tags">1 hr ago</div>
                                                        <p class="media-text mt-2">Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus. Sed dapibus nulla elementum, rutrum neque eu, gravida neque.</p>
                                                    </div>
                                                </div>
    
                                                <div class="media mb-4">
                                                    <div class="avatar me-sm-4 mb-sm-0 me-0 mb-3">
                                                        <img alt="avatar" src="{{Vite::asset('resources/images/profile-24.jpeg')}}" class="rounded-circle">
                                                    </div>
                                                    <div class="media-body">
                                                        <h4 class="media-heading mb-1">Daisy Anderson</h4>
                                                        <div class="stars">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                        </div>
                                                        <div class="meta-tags">15 hrs ago</div>
                                                        <p class="media-text mt-2">Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus. Sed dapibus nulla elementum, rutrum neque eu, gravida neque.</p>
                                                    </div>
                                                </div>
    
                                                <div class="media mb-4">
                                                    <div class="avatar me-sm-4 mb-sm-0 me-0 mb-3">
                                                        <img alt="avatar" src="{{Vite::asset('resources/images/profile-5.jpeg')}}" class="rounded-circle">
                                                    </div>
                                                    <div class="media-body">
                                                        <h4 class="media-heading mb-1">Andy King</h4>
                                                        <div class="stars">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                        </div>
                                                        <div class="meta-tags">1 day ago</div>
                                                        <p class="media-text mt-2">Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus. Sed dapibus nulla elementum, rutrum neque eu, gravida neque.</p>
                                                    </div>
                                                </div>
    
                                                <div class="media mb-4">
                                                    <div class="avatar me-sm-4 mb-sm-0 me-0 mb-3">
                                                        <img alt="avatar" src="{{Vite::asset('resources/images/profile-30.png')}}" class="rounded-circle">
                                                    </div>
                                                    <div class="media-body">
                                                        <h4 class="media-heading mb-1">Andy King</h4>
                                                        <div class="stars">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                        </div>
                                                        <div class="meta-tags">2 days ago</div>
                                                        <p class="media-text mt-2">Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus. Sed dapibus nulla elementum, rutrum neque eu, gravida neque.</p>
                                                    </div>
                                                </div>
    
                                                <div class="media mb-4">
                                                    <div class="avatar me-sm-4 mb-sm-0 me-0 mb-3">
                                                        <img alt="avatar" src="{{Vite::asset('resources/images/profile-34.jpeg')}}" class="rounded-circle">
                                                    </div>
                                                    <div class="media-body">
                                                        <h4 class="media-heading mb-1">Shaun Park</h4>
                                                        <div class="stars">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                        </div>
                                                        <div class="meta-tags">a week ago</div>
                                                        <p class="media-text mt-2">Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus. Sed dapibus nulla elementum, rutrum neque eu, gravida neque.</p>
                                                    </div>
                                                </div>
    
                                                <div class="media">
                                                    <div class="avatar me-sm-4 mb-sm-0 me-0 mb-3">
                                                        <img alt="avatar" src="{{Vite::asset('resources/images/profile-32.jpeg')}}" class="rounded-circle">
                                                    </div>
                                                    <div class="media-body">
                                                        <h4 class="media-heading mb-1">Xavier</h4>
                                                        <div class="stars">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star empty-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                        </div>
                                                        <div class="meta-tags">2 weeks ago</div>
                                                        <p class="media-text mt-2">Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus. Sed dapibus nulla elementum, rutrum neque eu, gravida neque.</p>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="card">
                                <div class="card-header" id="headingOne3">
                                    <section class="mb-0 mt-0">
                                        <div role="menu" class="collapsed" data-bs-toggle="collapse" data-bs-target="#iconAccordionOne" aria-expanded="false" aria-controls="iconAccordionOne">
                                            <div class="accordion-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg></div>
                                            Product Details  <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                        </div>
                                    </section>
                                </div>

                                <div id="iconAccordionOne" class="collapse" aria-labelledby="headingOne3" data-bs-parent="#iconsAccordion">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p class="mb-4">Flattering pleats silhouette sartorial cuffs luxurious pearl buttons fitted around the waist silver. Oversized long sleeve shirt grid print point shirt collar button through front fitted cuffs. Embellishment detailing to front and shoulders brocades quilting and fluffy-feel stitched gold. Tropical wrap front essential cut classic sartorial details feminine peplum-style shirt white. Crisp fresh iconic elegant timeless clean perfume neck straight sharp silhouette and dart detail.</p>
                                                <p class="mb-5">Stripe shirts plain button-down collar short-sleeved three-color button navy top-fused collar. Tropical wrap front essential cut classic sartorial details feminine peplum-style shirt white. Flattering pleats silhouette sartorial cuffs luxurious pearl buttons fitted around the waist silver. Sophisticated kymono-style neckline satin finish manly cloth check black and red precious. Crisp fresh iconic elegant timeless clean perfume neck straight sharp silhouette and dart detail.</p>
                                                
                                                <h5><strong>Packaging & Delivery</strong></h5>
                                                <hr/>
                                                <p class="mb-4">Sophisticated kymono-style neckline satin finish manly cloth check black and red precious. Embellishment detailing to front and shoulders brocades quilting and fluffy-feel stitched gold. Embroidered logo chest pocket locker loop button-flap breast pockets fastening jetted. Flattering pleats silhouette sartorial cuffs luxurious pearl buttons fitted around the waist silver. Cotton canvas chacket silk mixing classic quirky work wear primary colour cropped.</p>
                                                <p class="mb-5">Duis vehicula lectus condimentum, tincidunt odio a, posuere magna. Aliquam vitae orci a metus volutpat sagittis. Quisque volutpat, nulla non efficitur aliquet, turpis felis fringilla sem, quis pellentesque erat diam sit amet mi.</p>
                                                
                                                <h5><strong>Specifications</strong></h5>
                                                <hr/>
                                                <p class="mb-3">Etiam imperdiet nulla.</p>
                                                <p class="mb-3">Maecenas fringilla posuere fringilla.</p>
                                                <p class="mb-5">Crisp fresh iconic elegant timeless clean perfume neck straight sharp silhouette and dart detail. Sophisticated kymono-style neckline satin finish manly cloth check black and red precious. Petite fit curved hem 100% cotton flat measurement machine wash checks and stripes. Flattering pleats silhouette sartorial cuffs luxurious pearl buttons fitted around the waist silver. Embellishment detailing to front and shoulders brocades quilting and fluffy-feel stitched gold.</p>
            
                                                <h5><strong>Material And Washing Instructions</strong></h5>
                                                <hr/>
                                                <p class="mb-3">Petite fit curved hem 100% cotton flat measurement machine wash checks and stripes. Embroidered logo chest pocket locker loop button-flap breast pockets fastening jetted. Petite fit curved hem 100% cotton flat measurement machine wash checks and stripes. Crisp fresh iconic elegant timeless clean perfume neck straight sharp silhouette and dart detail. Stripe shirts plain button-down collar short-sleeved three-color button navy top-fused collar.</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="card">
                                <div class="card-header" id="headingOne4">
                                    <section class="mb-0 mt-0">
                                        <div role="menu" class="collapsed" data-bs-toggle="collapse" data-bs-target="#iconAccordionFour" aria-expanded="false" aria-controls="iconAccordionFour">
                                            <div class="accordion-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-truck"><rect x="1" y="3" width="15" height="13"></rect><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon><circle cx="5.5" cy="18.5" r="2.5"></circle><circle cx="18.5" cy="18.5" r="2.5"></circle></svg></div>
                                            Shipping Information  <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                        </div>
                                    </section>
                                </div>

                                <div id="iconAccordionFour" class="collapse" aria-labelledby="headingOne4" data-bs-parent="#iconsAccordion">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">

                                                <h5><strong>Shipping methods</strong></h5>
                                                <hr/>
                                                <p class="mb-2">We ship with these shipping options:</p>
                                                <p class="mb-5">Duis vehicula lectus condimentum, tincidunt odio a, posuere magna. Aliquam vitae orci a metus volutpat sagittis. Quisque volutpat, nulla non efficitur aliquet, turpis felis fringilla sem, quis pellentesque erat diam sit amet mi.</p>
                                                
                                                <h5><strong>DHL Express</strong></h5>
                                                <hr/>
                                                <p class="mb-3"> Worldwide shipping with DHL Express and you'll get a tracking number for your order. All orders usually arrive within 1 business day in North American countries.</p>
                                                <p class="mb-5">Please see estimated delivery information at checkout.</p>
           
                                                <h5><strong>Local pickup in Washington</strong></h5>
                                                <hr/>
                                                <p class="mb-3">You can pickup your order from our office here in Washington. We will send you an E-mail when your order is ready for pickup. Please note: In the case of pickup orders, which need to be sent by US Post at the request of the customer, a processing fee of USD 10.00 will be charged in addition to the shipping costs.</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            
        </div>

    </div>
    
    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <x-slot:footerFiles>
        <script src="{{asset('plugins/global/vendors.min.js')}}"></script>
        <script src="{{asset('plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js')}}"></script>
        <script src="{{asset('plugins/glightbox/glightbox.min.js')}}"></script>
        <script src="{{asset('plugins/splide/splide.min.js')}}"></script>
        @vite(['resources/assets/js/apps/ecommerce-details.js'])
    </x-slot>
    <!--  END CUSTOM SCRIPTS FILE  -->
</x-base-layout>