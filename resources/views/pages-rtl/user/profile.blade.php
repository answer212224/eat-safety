<x-rtl.base-layout :scrollspy="false">

    <x-slot:pageTitle>
        {{$title}} 
    </x-slot>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <x-slot:headerFiles>
        <!--  BEGIN CUSTOM STYLE FILE  -->
        @vite(['resources/rtl/scss/light/assets/components/list-group.scss'])
        @vite(['resources/rtl/scss/light/assets/users/user-profile.scss'])
        @vite(['resources/rtl/scss/dark/assets/components/list-group.scss'])
        @vite(['resources/rtl/scss/dark/assets/users/user-profile.scss'])
        <!--  END CUSTOM STYLE FILE  -->
    </x-slot>
    <!-- END GLOBAL MANDATORY STYLES -->
    
    <!-- BREADCRUMB -->
    <div class="page-meta">
        <nav class="breadcrumb-style-one" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Users</a></li>
                <li class="breadcrumb-item active" aria-current="page">Profile</li>
            </ol>
        </nav>
    </div>
    <!-- /BREADCRUMB -->

    <div class="row layout-spacing ">

        <!-- Content -->
        <div class="col-xl-5 col-lg-12 col-md-12 col-sm-12 layout-top-spacing">
            <div class="user-profile">
                <div class="widget-content widget-content-area">
                    <div class="d-flex justify-content-between">
                        <h3 class="">Profile</h3>
                        <a href="{{getRouterValue();}}/user/settings" class="mt-2 edit-profile"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg></a>
                    </div>
                    <div class="text-center user-info">
                        <img src="{{Vite::asset('resources/images/profile-3.jpeg')}}" alt="avatar">
                        <p class="">Jimmy Turner</p>
                    </div>
                    <div class="user-info-list">

                        <div class="">
                            <ul class="contacts-block list-unstyled">
                                <li class="contacts-block__item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-coffee me-3"><path d="M18 8h1a4 4 0 0 1 0 8h-1"></path><path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path><line x1="6" y1="1" x2="6" y2="4"></line><line x1="10" y1="1" x2="10" y2="4"></line><line x1="14" y1="1" x2="14" y2="4"></line></svg> Web Developer
                                </li>
                                <li class="contacts-block__item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar me-3"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>Jan 20, 1989
                                </li>
                                <li class="contacts-block__item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin me-3"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>New York, USA
                                </li>
                                <li class="contacts-block__item">
                                    <a href="mailto:example@mail.com"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail me-3"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>Jimmy@gmail.com</a>
                                </li>
                                <li class="contacts-block__item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone me-3"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg> +1 (530) 555-12121
                                </li>
                            </ul>

                            <ul class="list-inline mt-4">
                                <li class="list-inline-item mb-0">
                                    <a class="btn btn-info btn-icon btn-rounded" href="javascript:void(0);">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>
                                    </a>
                                </li>
                                <li class="list-inline-item mb-0">
                                    <a class="btn btn-danger btn-icon btn-rounded" href="javascript:void(0);">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dribbble"><circle cx="12" cy="12" r="10"></circle><path d="M8.56 2.75c4.37 6.03 6.02 9.42 8.03 17.72m2.54-15.38c-3.72 4.35-8.94 5.66-16.88 5.85m19.5 1.9c-3.5-.93-6.63-.82-8.94 0-2.58.92-5.01 2.86-7.44 6.32"></path></svg>
                                    </a>
                                </li>
                                <li class="list-inline-item mb-0">
                                    <a class="btn btn-dark btn-icon btn-rounded" href="javascript:void(0);">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>
                                    </a>
                                </li>
                            </ul>
                        </div>                                    
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-7 col-lg-12 col-md-12 col-sm-12 layout-top-spacing">

            <div class="usr-tasks ">
                <div class="widget-content widget-content-area">
                    <h3 class="">Task</h3>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Projects</th>
                                    <th>Progress</th>
                                    <th>Task Done</th>
                                    <th class="text-center">Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Figma Design</td>
                                    <td>                                                    
                                        <div class="progress br-30">
                                            <div class="progress-bar br-30 bg-danger" role="progressbar" style="width: 29.56%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td><p class="text-danger">29.56%</p></td>
                                    <td class="text-center">
                                        <p>2 mins ago</p>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Vue Migration</td>
                                    <td>
                                        <div class="progress br-30">
                                            <div class="progress-bar br-30 bg-info" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td><p class="text-success">50%</p></td>
                                    <td class="text-center">
                                        <p>4 hrs ago</p>
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td>Flutter App</td>
                                    <td>                                                    
                                        <div class="progress br-30">
                                            <div class="progress-bar br-30 bg-warning" role="progressbar" style="width: 39%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td><p class="text-danger">39%</p></td>
                                    <td class="text-center">
                                        <p>a min ago</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>API Integration</td>
                                    <td>                                                    
                                        <div class="progress br-30">
                                            <div class="progress-bar br-30 bg-success" role="progressbar" style="width: 78.03%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td><p class="text-success">78.03%</p></td>
                                    <td class="text-center">
                                        <p>2 weeks ago</p>
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td>Blog Update</td>
                                    <td>                                                    
                                        <div class="progress br-30">
                                            <div class="progress-bar br-30 bg-secondary" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td><p class="text-success">100%</p></td>
                                    <td class="text-center">
                                        <p>18 hrs ago</p>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Landing Page</td>
                                    <td>                                                    
                                        <div class="progress br-30">
                                            <div class="progress-bar br-30 bg-danger" role="progressbar" style="width: 19.15%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td><p class="text-danger">19.15%</p></td>
                                    <td class="text-center">
                                        <p>5 days ago</p>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Shopify Dev</td>
                                    <td>                                                    
                                        <div class="progress br-30">
                                            <div class="progress-bar br-30 bg-info" role="progressbar" style="width: 60.55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td><p class="text-success">60.55%</p></td>
                                    <td class="text-center">
                                        <p>8 days ago</p>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
        </div>
        
    </div>

    <div class="row">

        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
            <div class="summary layout-spacing ">
                <div class="widget-content widget-content-area">
                    <h3 class="">Summary</h3>
                    <div class="order-summary">

                        <div class="summary-list summary-income">

                            <div class="summery-info">

                                <div class="w-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
                                </div>

                                <div class="w-summary-details">

                                    <div class="w-summary-info">
                                        <h6>Income <span class="summary-count">$92,600 </span></h6>
                                        <p class="summary-average">90%</p>
                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="summary-list summary-profit">

                            <div class="summery-info">

                                <div class="w-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                                </div>
                                
                                <div class="w-summary-details">

                                    <div class="w-summary-info">
                                        <h6>Profit <span class="summary-count">$37,515</span></h6>
                                        <p class="summary-average">65%</p>
                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="summary-list summary-expenses">

                            <div class="summery-info">

                                <div class="w-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg>
                                </div>
                                <div class="w-summary-details">

                                    <div class="w-summary-info">
                                        <h6>Expenses <span class="summary-count">$55,085</span></h6>
                                        <p class="summary-average">42%</p>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">

            <div class="pro-plan layout-spacing">
                <div class="widget">

                    <div class="widget-heading">

                        <div class="task-info">
                            <div class="w-title">
                                <h5>Pro Plan</h5>
                                <span>$25/month</span>
                            </div>
                        </div>

                        <div class="task-action">
                            <button class="btn btn-secondary">Renew Now</button>
                        </div>
                    </div>
                    
                    <div class="widget-content">

                        <ul class="p-2 ps-3 mb-4">
                            <li class="mb-1"><strong>10,000 Monthly Visitors</strong></li>
                            <li class="mb-1"><strong>Unlimited Reports</strong></li>
                            <li class=""><strong>2 Years Data Storage</strong></li>
                        </ul>
                        
                        <div class="progress-data">
                            <div class="progress-info">
                                <div class="due-time">
                                    <p><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg> 5 Days Left</p>
                                </div>
                                <div class="progress-stats"><p class="text-info">$25 / month</p></div>
                            </div>
                            
                            <div class="progress">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 65%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
            
        </div>

        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
            <div class="payment-history layout-spacing ">
                <div class="widget-content widget-content-area">
                    <h3 class="">Payment History</h3>

                    <div class="list-group">
                        <div class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="me-auto">
                                <div class="fw-bold title">March</div>
                                <p class="sub-title mb-0">Pro Membership</p>
                            </div>
                            <span class="pay-pricing align-self-center me-3">$45</span>
                            <div class="btn-group dropstart align-self-center" role="group">
                                <a id="paymentHistory1" href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="paymentHistory1">
                                    <a class="dropdown-item" href="javascript:void(0);">View Invoice</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Download Invoice</a>
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="me-auto">
                                <div class="fw-bold title">February</div>
                                <p class="sub-title mb-0">Pro Membership</p>
                            </div>
                            <span class="pay-pricing align-self-center me-3">$45</span>
                            <div class="btn-group dropstart align-self-center" role="group">
                                <a id="paymentHistory2" href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="paymentHistory2">
                                    <a class="dropdown-item" href="javascript:void(0);">View Invoice</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Download Invoice</a>
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="me-auto">
                                <div class="fw-bold title">January</div>
                                <p class="sub-title mb-0">Pro Membership</p>
                            </div>
                            <span class="pay-pricing align-self-center me-3">$45</span>
                            <div class="btn-group dropstart align-self-center" role="group">
                                <a id="paymentHistory3" href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="paymentHistory3">
                                    <a class="dropdown-item" href="javascript:void(0);">View Invoice</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Download Invoice</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
            <div class="payment-methods layout-spacing ">
                <div class="widget-content widget-content-area">
                    <h3 class="">Payment Methods</h3>

                    <div class="list-group">
                        <div class="list-group-item d-flex justify-content-between align-items-start">
                            <img src="{{Vite::asset('resources/images/card-americanexpress.svg')}}" class="align-self-center me-3" alt="americanexpress">
                            <div class="me-auto">
                                <div class="fw-bold title">American Express</div>
                                <p class="sub-title mb-0">Expires on 12/2025</p>
                            </div>
                            <span class="badge badge-success align-self-center me-3">Primary</span>
                        </div>
                        
                        <div class="list-group-item d-flex justify-content-between align-items-start">
                            <img src="{{Vite::asset('resources/images/card-mastercard.svg')}}" class="align-self-center me-3" alt="mastercard">
                            <div class="me-auto">
                                <div class="fw-bold title">Mastercard</div>
                                <p class="sub-title mb-0">Expires on 03/2025</p>
                            </div>
                        </div>
                        
                        <div class="list-group-item d-flex justify-content-between align-items-start">
                            <img src="{{Vite::asset('resources/images/card-visa.svg')}}" class="align-self-center me-3" alt="visa">
                            <div class="me-auto">
                                <div class="fw-bold title">Visa</div>
                                <p class="sub-title mb-0">Expires on 10/2025</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    
    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <x-slot:footerFiles>

    </x-slot>
    <!--  END CUSTOM SCRIPTS FILE  -->
</x-rtl.base-layout>