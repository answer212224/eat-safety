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

    <x-slot:scrollspyConfig>
        data-bs-spy="scroll" data-bs-target="#navSection" data-bs-offset="100"
    </x-slot>
    
    <!-- BREADCRUMB -->
    <div class="page-meta">
        <nav class="breadcrumb-style-one" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Components</a></li>
                <li class="breadcrumb-item active" aria-current="page">Cards</li>
            </ol>
        </nav>
    </div>
    <!-- /BREADCRUMB -->

    <div class="row">
    
        <div id="card_1" class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 layout-spacing layout-top-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Card 1</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">

                    <div class="row">
                        
                        <div class="col-xxl-8 col-xl-12 col-lg-12 col-md-12 col-sm-8 mx-auto">
                    
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="mb-0">This is some text within a card body.</p>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;div class=&quot;card&quot;&gt;
&lt;div class=&quot;card-body&quot;&gt;
&lt;h5 class=&quot;card-title&quot;&gt;Card title&lt;/h5&gt;
&lt;p class=&quot;mb-0&quot;&gt;This is some text within a card body.&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="card_2" class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 layout-spacing layout-top-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Card 2</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">

                    <div class="row">

                        <div class="col-xxl-8 col-xl-12 col-lg-12 col-md-12 col-sm-8 mx-auto">
                    
                            <div class="card bg-secondary">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="mb-0">This is some text within a card body.</p>
                                </div>
                            </div>
                            
                        </div>

                    </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;div class=&quot;card bg-secondary&quot;&gt;
&lt;div class=&quot;card-body&quot;&gt;
&lt;h5 class=&quot;card-title&quot;&gt;Card title&lt;/h5&gt;
&lt;p class=&quot;mb-0&quot;&gt;This is some text within a card body.&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="card_3" class="col-xxl-6 col-xl-6 col-lg-6  col-md-6 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Card 3</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">

                    <div class="row">

                        <div class="col-xxl-8 col-xl-12 col-lg-12 col-md-12 col-sm-8 mx-auto">
                    
                            <div class="card">
                                <div class="card-body pt-3">
                                    <h5 class="card-title mb-3">Cork Admin</h5>
                                    <p class="card-text">Powerful CRM admin dashboard template based on Bootstrap and Sass for all kind of back-end projects.</p>
                                </div>
                                <div class="card-footer px-4 pt-0 border-0">
                                    <a href="https://themeforest.net/item/cork-responsive-admin-dashboard-template/25582188" target="_blank">Visit on Themeforest.</a>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;div class=&quot;card style-5  mb-md-0 mb-4&quot;&gt;
&lt;div class=&quot;card-top-content&quot;&gt;
&lt;div class=&quot;avatar avatar-md&quot;&gt;
&lt;img alt=&quot;avatar&quot; src=&quot;assets/img/profile-6.jpeg&quot; class=&quot;rounded-circle&quot;&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;card-content&quot;&gt;
&lt;div class=&quot;card-body&quot;&gt;
&lt;h5 class=&quot;card-title mb-2&quot;&gt;Mary McDonald&lt;/h5&gt;
&lt;p class=&quot;card-text&quot;&gt;Awesome Project, it has been the perfect fit for my Project&lt;/p&gt;
&lt;a href=&quot;javascript:void(0);&quot; class=&quot;text-warning mt-2 d-inline-block&quot;&gt;Follow&lt;/a&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="card_4" class="col-xxl-6 col-xl-6 col-lg-6  col-md-6 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Card 4</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">

                    <div class="row">

                        <div class="col-xxl-8 col-xl-12 col-lg-12 col-md-12 col-sm-8 mx-auto">

                            <div class="card style-5 bg-primary">
                                <div class="card-top-content">
                                    <div class="avatar avatar-md">
                                        <img alt="avatar" src="{{Vite::asset('resources/images/profile-32.jpeg')}}" class="rounded-circle">
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <h5 class="card-title mb-2">Andy King</h5>
                                        <p class="card-text">It's a really good project, love the design and code quality also have great support.</p>
                                        <a href="javascript:void(0);" class="mt-2 d-inline-block">Follow</a>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;!-- Bg Primary --&gt;
&lt;div class=&quot;card style-5 bg-primary mb-md-0 mb-4&quot;&gt;
&lt;div class=&quot;card-top-content&quot;&gt;
&lt;div class=&quot;avatar avatar-md&quot;&gt;
&lt;img alt=&quot;avatar&quot; src=&quot;assets/img/profile-6.jpeg&quot; class=&quot;rounded-circle&quot;&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;card-content&quot;&gt;
&lt;div class=&quot;card-body&quot;&gt;
&lt;h5 class=&quot;card-title mb-2&quot;&gt;Mary McDonald&lt;/h5&gt;
&lt;p class=&quot;card-text&quot;&gt;Awesome Project, it has been the perfect fit for my Project&lt;/p&gt;
&lt;a href=&quot;javascript:void(0);&quot; class=&quot;text-warning mt-2 d-inline-block&quot;&gt;Follow&lt;/a&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="card_5" class="col-xxl-6 col-xl-6 col-lg-6  col-md-6 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Card 5</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">

                    <div class="row">
                        
                        <div class="col-xxl-7 col-xl-12 col-lg-12 col-md-12 col-sm-7 mx-auto">

                            <a class="card style-7" href="https://themeforest.net/item/cork-responsive-admin-dashboard-template/25582188" target="_blank">
                                <img src="{{Vite::asset('resources/images/grid-blog-style-4.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-footer">
                                    <h5 class="card-title mb-0">Andy King</h5>
                                    <p class="card-text">Project manager</p>
                                </div>
                            </a>
                            
                        </div>
                        
                    </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;a class=&quot;card style-7&quot; href=&quot;https://themeforest.net/item/cork-responsive-admin-dashboard-template/25582188&quot; target=&quot;_blank&quot;&gt;
&lt;img src=&quot;./assets/img/tl-2.jpeg&quot; class=&quot;card-img-top&quot; alt=&quot;...&quot;&gt;
&lt;div class=&quot;card-footer&quot;&gt;
&lt;h5 class=&quot;card-title mb-0&quot;&gt;Kelly Young&lt;/h5&gt;
&lt;p class=&quot;card-text&quot;&gt;Project manager&lt;/p&gt;
&lt;/div&gt;
&lt;/a&gt;</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="card_6" class="col-xxl-6 col-xl-6 col-lg-6  col-md-6 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Card 6</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">

                    <div class="row">
                        
                        <div class="col-xxl-7 col-xl-12 col-lg-12 col-md-12 col-sm-7 mx-auto">

                            <a class="card style-7" href="https://themeforest.net/item/cork-responsive-admin-dashboard-template/25582188" target="_blank">
                                <img src="{{Vite::asset('resources/images/tl-2.jpeg')}}" class="card-img-top" alt="...">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Kelly Young</h5>
                                    <p class="card-text">Project manager</p>
                                </div>
                            </a>

                        </div>
                        
                    </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;a class=&quot;card style-7&quot; href=&quot;https://themeforest.net/item/cork-responsive-admin-dashboard-template/25582188&quot; target=&quot;_blank&quot;&gt;
&lt;img src=&quot;./assets/img/tl-2.jpeg&quot; class=&quot;card-img-top&quot; alt=&quot;...&quot;&gt;
&lt;div class=&quot;card-header&quot;&gt;
&lt;h5 class=&quot;card-title mb-0&quot;&gt;Kelly Young&lt;/h5&gt;
&lt;p class=&quot;card-text&quot;&gt;Project manager&lt;/p&gt;
&lt;/div&gt;
&lt;/a&gt;</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="card_7" class="col-xxl-6 col-xl-6 col-lg-6  col-md-6 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Card 7</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">

                    <div class="row">
                        
                        <div class="col-xxl-6 col-xl-12 col-lg-12 col-md-12 col-sm-6 mx-auto">
                            <a class="card style-6" href="javascript:void(0);">
                                <span class="badge badge-danger"></span>
                                <img src="{{Vite::asset('resources/images/product-4.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-12 mb-4">
                                            <b>Nikon</b>
                                        </div>
                                        <div class="col-3">
                                            <div class="badge--group">
                                                <div class="badge badge-secondary badge-dot"></div>
                                            </div>
                                        </div>
                                        <div class="col-9 text-end">
                                            <div class="pricing d-flex justify-content-end">
                                                <p class="text-success mb-0">$2100.00</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        
                    </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;a class=&quot;card style-6&quot; href=&quot;javascript:void(0);&quot;&gt;
&lt;span class=&quot;badge badge-danger&quot;&gt;&lt;/span&gt;
&lt;img src=&quot;./assets/img/product-4.jpg&quot; class=&quot;card-img-top&quot; alt=&quot;...&quot;&gt;
&lt;div class=&quot;card-footer&quot;&gt;
&lt;div class=&quot;row&quot;&gt;
&lt;div class=&quot;col-12 mb-4&quot;&gt;
&lt;b&gt;Nikon&lt;/b&gt;
&lt;/div&gt;
&lt;div class=&quot;col-3&quot;&gt;
&lt;div class=&quot;badge--group&quot;&gt;
&lt;div class=&quot;badge badge-primary badge-dot&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;col-9 text-end&quot;&gt;
&lt;div class=&quot;pricing d-flex justify-content-end&quot;&gt;
&lt;p class=&quot;text-success mb-0&quot;&gt;$2100.00&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/a&gt;</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="card_8" class="col-xxl-6 col-xl-6 col-lg-6  col-md-6 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Card 8</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">

                    <div class="row">

                        <div class="col-xxl-6 col-xl-12 col-lg-12 col-md-12 col-sm-6 mx-auto">
                            <a class="card style-6" href="javascript:void(0);">
                                <span class="badge badge-danger"></span>
                                <img src="{{Vite::asset('resources/images/product-5.jpg')}}" class="card-img-top" alt="...">
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
                        
                    </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;a class=&quot;card style-6&quot; href=&quot;javascript:void(0);&quot;&gt;
&lt;span class=&quot;badge badge-danger&quot;&gt;&lt;/span&gt;
&lt;img src=&quot;./assets/img/product-4.jpg&quot; class=&quot;card-img-top&quot; alt=&quot;...&quot;&gt;
&lt;div class=&quot;card-footer&quot;&gt;
&lt;div class=&quot;row&quot;&gt;
&lt;div class=&quot;col-12 mb-4&quot;&gt;
&lt;b&gt;Shoes&lt;/b&gt;
&lt;/div&gt;
&lt;div class=&quot;col-3&quot;&gt;
&lt;div class=&quot;badge--group&quot;&gt;
&lt;div class=&quot;badge badge-danger badge-dot&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;badge badge-success badge-dot&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;badge badge-warning badge-dot&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;col-9 text-end&quot;&gt;
&lt;div class=&quot;pricing d-flex justify-content-end&quot;&gt;
&lt;p class=&quot;text-success mb-0&quot;&gt;$95.00&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/a&gt;</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="card_9" class="col-xxl-6 col-xl-6 col-lg-6  col-md-6 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Card 9</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">

                    <div class="row">
                        
                        <div class="col-xxl-6 col-xl-12 col-lg-12 col-md-12 col-sm-6 mx-auto">
                            <a class="card style-6  mb-md-0 mb-4" href="javascript:void(0);">
                                <span class="badge badge-danger">SALE</span>
                                <img src="{{Vite::asset('resources/images/product-3.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-12 mb-4">
                                            <b>Nike Shoes Green</b>
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
                                                <p class="mb-0 line-through"><del>$200.00</del></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        
                    </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;!-- Sale --&gt;
                            
&lt;a class=&quot;card style-6  mb-md-0 mb-4&quot; href=&quot;javascript:void(0);&quot;&gt;
&lt;span class=&quot;badge badge-danger&quot;&gt;SALE&lt;/span&gt;
&lt;img src=&quot;./assets/img/product-3.jpg&quot; class=&quot;card-img-top&quot; alt=&quot;...&quot;&gt;
&lt;div class=&quot;card-footer&quot;&gt;
&lt;div class=&quot;row&quot;&gt;
&lt;div class=&quot;col-12 mb-4&quot;&gt;
&lt;b&gt;Nike Shoes Green&lt;/b&gt;
&lt;/div&gt;
&lt;div class=&quot;col-3&quot;&gt;
&lt;div class=&quot;badge--group&quot;&gt;
&lt;div class=&quot;badge badge-success badge-dot&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;badge badge-secondary badge-dot&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;badge badge-warning badge-dot&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;col-9 text-end&quot;&gt;
&lt;div class=&quot;pricing d-flex justify-content-end&quot;&gt;
&lt;p class=&quot;text-success mb-0 me-2&quot;&gt;$1100.00&lt;/p&gt;
&lt;p class=&quot;mb-0 line-through&quot;&gt;&lt;del&gt;$2100.00&lt;/del&gt;&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/a&gt;</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="card_10" class="col-xxl-6 col-xl-6 col-lg-6  col-md-6 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Card 10</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">

                    <div class="row">
                            
                        <div class="col-xxl-6 col-xl-12 col-lg-12 col-md-12 col-sm-6 mx-auto">
                            <a class="card style-6" href="javascript:void(0);">
                                <span class="badge badge-primary">NEW</span>
                                <img src="{{Vite::asset('resources/images/product-1.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-12 mb-4">
                                            <b>Nike Shoes Red</b>
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
                        
                    </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;!-- New --&gt;

&lt;a class=&quot;card style-6&quot; href=&quot;javascript:void(0);&quot;&gt;
&lt;span class=&quot;badge badge-primary&quot;&gt;NEW&lt;/span&gt;
&lt;img src=&quot;./assets/img/product-1.jpg&quot; class=&quot;card-img-top&quot; alt=&quot;...&quot;&gt;
&lt;div class=&quot;card-footer&quot;&gt;
&lt;div class=&quot;row&quot;&gt;
&lt;div class=&quot;col-12 mb-4&quot;&gt;
&lt;b&gt;Nike Shoes Red&lt;/b&gt;
&lt;/div&gt;
&lt;div class=&quot;col-3&quot;&gt;
&lt;div class=&quot;badge--group&quot;&gt;
&lt;div class=&quot;badge badge-primary badge-dot&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;badge badge-danger badge-dot&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;badge badge-info badge-dot&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;col-9 text-end&quot;&gt;
&lt;div class=&quot;pricing d-flex justify-content-end&quot;&gt;
&lt;p class=&quot;text-success mb-0&quot;&gt;$2100.00&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/a&gt;</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="card_11" class="col-xxl-6 col-xl-6 col-lg-6  col-md-6 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Card 11</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">

                    <div class="row">
                        
                        <div class="col-xxl-6 col-xl-12 col-lg-12 col-md-12 col-sm-6 mx-auto">

                            <div class="card style-2 mb-md-0 mb-4">
                                <img src="{{Vite::asset('resources/images/grid-blog-style-2.jpeg')}}" class="card-img-top" alt="...">
                                <div class="card-body px-0 pb-0">
                                    <h5 class="card-title mb-3">Elegant and useful Admin Templates on Themeforest</h5>
                                    <div class="media mt-4 mb-0 pt-1">
                                        <img src="{{Vite::asset('resources/images/profile-2.jpeg')}}" class="card-media-image me-3" alt="">
                                        <div class="media-body">
                                            <h4 class="media-heading mb-1">Vanessa Kirby</h4>
                                            <p class="media-text">14 Mar</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;div class=&quot;card style-2 mb-md-0 mb-4&quot;&gt;
&lt;img src=&quot;./assets/img/grid-blog-style-2.jpeg&quot; class=&quot;card-img-top&quot; alt=&quot;...&quot;&gt;
&lt;div class=&quot;card-body px-0 pb-0&quot;&gt;
&lt;h5 class=&quot;card-title mb-3&quot;&gt;Elegant and useful Admin Templates on Themeforest&lt;/h5&gt;
&lt;div class=&quot;media mt-4 mb-0 pt-1&quot;&gt;
&lt;img src=&quot;./assets/img/profile-2.jpeg&quot; class=&quot;card-media-image me-3&quot; alt=&quot;&quot;&gt;
&lt;div class=&quot;media-body&quot;&gt;
&lt;h4 class=&quot;media-heading mb-1&quot;&gt;Vanessa Kirby&lt;/h4&gt;
&lt;p class=&quot;media-text&quot;&gt;14 Mar&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="card_12" class="col-xxl-6 col-xl-6 col-lg-6  col-md-6 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Card 12</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">

                    <div class="row">
                        
                        <div class="col-xxl-6 col-xl-12 col-lg-12 col-md-12 col-sm-6 mx-auto">

                            <div class="card">
                                <img src="{{Vite::asset('resources/images/lightbox-3.jpeg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title mb-3">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and card's content.</p>
                                    <a href="#" class="btn btn-secondary mt-3">Go somewhere</a>
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;div class=&quot;card&quot;&gt;
&lt;img src=&quot;./assets/img/lightbox-3.jpeg&quot; class=&quot;card-img-top&quot; alt=&quot;...&quot;&gt;
&lt;div class=&quot;card-body&quot;&gt;
&lt;h5 class=&quot;card-title mb-3&quot;&gt;Card title&lt;/h5&gt;
&lt;p class=&quot;card-text&quot;&gt;Some quick example text to build on the card title and card's content.&lt;/p&gt;
&lt;a href=&quot;#&quot; class=&quot;btn btn-secondary mt-3&quot;&gt;Go somewhere&lt;/a&gt;
&lt;/div&gt;
&lt;/div&gt;</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="card_13" class="col-xxl-6 col-xl-6 col-lg-12  col-md-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Card 13</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">

                    <div class="row">
                        
                        <div class="col-xxl-10 col-xl-12 col-lg-10 col-md-10 col-sm-10 mx-auto">

                            <div class="card style-3">
                                <img src="{{Vite::asset('resources/images/list-blog-style-3.jpeg')}}" class="card-img-top" alt="...">
                                <div class="card-body px-0 py-0 align-self-center">
                                    <p class="card-category mb-2">Photography</p>
                                    <h5 class="card-title mb-3">Elegant and useful Admin Templates on Themeforest</h5>
                                    <div class="media mt-4 mb-0 pt-1">
                                        <img src="{{Vite::asset('resources/images/profile-2.jpeg')}}" class="card-media-image me-3" alt="">
                                        <div class="media-body">
                                            <h4 class="media-heading mb-1">Vanessa Kirby</h4>
                                            <p class="media-text">14 Mar</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;div class=&quot;card style-3&quot;&gt;
&lt;img src=&quot;./assets/img/grid-blog-style-2.jpeg&quot; class=&quot;card-img-top&quot; alt=&quot;...&quot;&gt;
&lt;div class=&quot;card-body px-0 py-0 align-self-center&quot;&gt;
&lt;p class=&quot;card-category mb-1&quot;&gt;Photography&lt;/p&gt;
&lt;h5 class=&quot;card-title mb-3&quot;&gt;Elegant and useful Admin Templates on Themeforest&lt;/h5&gt;
&lt;div class=&quot;media mt-4 mb-0 pt-1&quot;&gt;
&lt;img src=&quot;./assets/img/profile-2.jpeg&quot; class=&quot;card-media-image me-3&quot; alt=&quot;&quot;&gt;
&lt;div class=&quot;media-body&quot;&gt;
&lt;h4 class=&quot;media-heading mb-1&quot;&gt;Vanessa Kirby&lt;/h4&gt;
&lt;p class=&quot;media-text&quot;&gt;14 Mar&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        
        <div id="card_14" class="col-xxl-6 col-xl-6 col-lg-12  col-md-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Card 14</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">

                    <div class="row">
                        
                        <div class="col-xxl-10 col-xl-12 col-lg-10 col-md-10 col-sm-10 mx-auto">

                            <div class="card">
                                <div class="card-header">
                                  Card Title
                                </div>
                                <div class="card-body">
                                    <p class="card-text">Ut purus elit, molestie et dignissim ac, maximus sit amet massa. Suspendisse luctus molestie luctus. Curabitur pharetra commodo ornare. Suspendisse cursus leo non magna sollicitudin, in blandit leo euismod. </p>
                                </div>
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-6">
                                            <a href="javascript:void(0);" class="btn btn-dark w-100">Cancel</a>
                                        </div>
                                        <div class="col-6">
                                            <a href="javascript:void(0);" class="btn btn-secondary w-100">Agree</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;div class=&quot;card&quot;&gt;
&lt;div class=&quot;card-header&quot;&gt;
Card Title
&lt;/div&gt;
&lt;div class=&quot;card-body&quot;&gt;
&lt;p class=&quot;card-text&quot;&gt;Ut purus elit, molestie et dignissim ac, maximus sit amet massa. Suspendisse luctus molestie luctus. Curabitur pharetra commodo ornare. Suspendisse cursus leo non magna sollicitudin, in blandit leo euismod. &lt;/p&gt;
&lt;/div&gt;
&lt;div class=&quot;card-footer&quot;&gt;
&lt;div class=&quot;row&quot;&gt;
&lt;div class=&quot;col-6&quot;&gt;
&lt;a href=&quot;javascript:void(0);&quot; class=&quot;btn btn-dark w-100&quot;&gt;Cancel&lt;/a&gt;
&lt;/div&gt;
&lt;div class=&quot;col-6&quot;&gt;
&lt;a href=&quot;javascript:void(0);&quot; class=&quot;btn btn-secondary w-100&quot;&gt;Agree&lt;/a&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="card_15" class="col-xxl-6 col-xl-6 col-lg-6  col-md-6 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Card 15</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">

                    <div class="row">

                        <div class="col-xxl-6 col-xl-12 col-lg-12 col-md-12 col-sm-6 mx-auto">
                            <a class="card mb-md-0 mb-4" href="https://themeforest.net/item/cork-responsive-admin-dashboard-template/25582188" target="_blank">
                                <img src="{{Vite::asset('resources/images/product-2.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-6">
                                            <b>Avocado</b>
                                        </div>
                                        <div class="col-6 text-end">
                                            <p class="text-success mb-0">$100.00</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        
                    </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;a class=&quot;card&quot; href=&quot;https://themeforest.net/item/cork-responsive-admin-dashboard-template/25582188&quot; target=&quot;_blank&quot;&gt;
&lt;img src=&quot;./assets/img/product-2.jpg&quot; class=&quot;card-img-top&quot; alt=&quot;...&quot;&gt;
&lt;div class=&quot;card-footer&quot;&gt;
&lt;div class=&quot;row&quot;&gt;
&lt;div class=&quot;col-6&quot;&gt;
&lt;b&gt;Avocado&lt;/b&gt;
&lt;/div&gt;
&lt;div class=&quot;col-6 text-end&quot;&gt;
&lt;p class=&quot;text-success mb-0&quot;&gt;$100.00&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/a&gt;</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="card_16" class="col-xxl-6 col-xl-6 col-lg-6  col-md-6 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Card 16</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">

                    <div class="row">
                        
                        <div class="col-xxl-6 col-xl-12 col-lg-12 col-md-12 col-sm-6 mx-auto">
                            <a class="card" href="https://themeforest.net/item/cork-responsive-admin-dashboard-template/25582188" target="_blank">
                                <img src="{{Vite::asset('resources/images/product-3.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-6">
                                            <p class="text-success mb-0">$623.00</p>
                                        </div>
                                        <div class="col-6 text-end">
                                            <b>Shoes</b>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        
                    </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;a class=&quot;card&quot; href=&quot;https://themeforest.net/item/cork-responsive-admin-dashboard-template/25582188&quot; target=&quot;_blank&quot;&gt;
&lt;img src=&quot;./assets/img/product-3.jpg&quot; class=&quot;card-img-top&quot; alt=&quot;...&quot;&gt;
&lt;div class=&quot;card-footer&quot;&gt;
&lt;div class=&quot;row&quot;&gt;
&lt;div class=&quot;col-6&quot;&gt;
&lt;p class=&quot;text-success mb-0&quot;&gt;$623.00&lt;/p&gt;
&lt;/div&gt;        
&lt;div class=&quot;col-6 text-end&quot;&gt;
&lt;b&gt;Shoes&lt;/b&gt;
&lt;/div&gt;            
&lt;/div&gt;
&lt;/div&gt;
&lt;/a&gt;</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="card_17" class="col-xxl-6 col-xl-6 col-lg-6  col-md-6 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Card 17</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">

                    <div class="row">
                        
                        <div class="col-xxl-7 col-xl-12 col-lg-12 col-md-12 col-sm-8 mx-auto">

                            <div class="card style-4">
                                <div class="card-body pt-3">
                                    
                                    <div class="media mt-0 mb-3">
                                        <div class="">
                                            <div class="avatar avatar-md avatar-indicators avatar-online me-3">
                                                <img alt="avatar" src="{{Vite::asset('resources/images/profile-2.jpeg')}}" class="rounded-circle avatar-img">
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading mb-0">Kelly Young</h4>
                                            <p class="media-text">Project Manager</p>
                                        </div>
                                    </div>
                                    <p class="card-text mt-4 mb-0">Powerful CRM admin dashboard template based on Bootstrap and Sass for all kind of back-end projects.</p>
                                </div>
                                <div class="card-footer pt-0 border-0 text-center">
                                    <a href="javascript:void(0);" class="btn btn-secondary w-100"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-slack"><path d="M14.5 10c-.83 0-1.5-.67-1.5-1.5v-5c0-.83.67-1.5 1.5-1.5s1.5.67 1.5 1.5v5c0 .83-.67 1.5-1.5 1.5z"></path><path d="M20.5 10H19V8.5c0-.83.67-1.5 1.5-1.5s1.5.67 1.5 1.5-.67 1.5-1.5 1.5z"></path><path d="M9.5 14c.83 0 1.5.67 1.5 1.5v5c0 .83-.67 1.5-1.5 1.5S8 21.33 8 20.5v-5c0-.83.67-1.5 1.5-1.5z"></path><path d="M3.5 14H5v1.5c0 .83-.67 1.5-1.5 1.5S2 16.33 2 15.5 2.67 14 3.5 14z"></path><path d="M14 14.5c0-.83.67-1.5 1.5-1.5h5c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5h-5c-.83 0-1.5-.67-1.5-1.5z"></path><path d="M15.5 19H14v1.5c0 .83.67 1.5 1.5 1.5s1.5-.67 1.5-1.5-.67-1.5-1.5-1.5z"></path><path d="M10 9.5C10 8.67 9.33 8 8.5 8h-5C2.67 8 2 8.67 2 9.5S2.67 11 3.5 11h5c.83 0 1.5-.67 1.5-1.5z"></path><path d="M8.5 5H10V3.5C10 2.67 9.33 2 8.5 2S7 2.67 7 3.5 7.67 5 8.5 5z"></path></svg> <span class="btn-text-inner ms-3">Join her on Slack</span></a>
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;div class=&quot;card style-4&quot;&gt;
&lt;div class=&quot;card-body pt-3&quot;&gt;

&lt;div class=&quot;media mt-0 mb-3&quot;&gt;
&lt;div class=&quot;&quot;&gt;
&lt;div class=&quot;avatar avatar-md avatar-indicators avatar-online me-3&quot;&gt;
    &lt;img alt=&quot;avatar&quot; src=&quot;assets/img/profile-2.jpeg&quot; class=&quot;rounded-circle&quot;&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;media-body&quot;&gt;
&lt;h4 class=&quot;media-heading mb-0&quot;&gt;Kelly Young&lt;/h4&gt;
&lt;p class=&quot;media-text&quot;&gt;Project Manager&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;p class=&quot;card-text mt-4 mb-0&quot;&gt;Powerful CRM admin dashboard template based on Bootstrap and Sass for all kind of back-end projects.&lt;/p&gt;
&lt;/div&gt;
&lt;div class=&quot;card-footer pt-0 border-0 text-center&quot;&gt;
&lt;a href=&quot;javascript:void(0);&quot; class=&quot;btn btn-secondary w-100&quot;&gt;&lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-slack&quot;&gt;&lt;path d=&quot;M14.5 10c-.83 0-1.5-.67-1.5-1.5v-5c0-.83.67-1.5 1.5-1.5s1.5.67 1.5 1.5v5c0 .83-.67 1.5-1.5 1.5z&quot;&gt;&lt;/path&gt;&lt;path d=&quot;M20.5 10H19V8.5c0-.83.67-1.5 1.5-1.5s1.5.67 1.5 1.5-.67 1.5-1.5 1.5z&quot;&gt;&lt;/path&gt;&lt;path d=&quot;M9.5 14c.83 0 1.5.67 1.5 1.5v5c0 .83-.67 1.5-1.5 1.5S8 21.33 8 20.5v-5c0-.83.67-1.5 1.5-1.5z&quot;&gt;&lt;/path&gt;&lt;path d=&quot;M3.5 14H5v1.5c0 .83-.67 1.5-1.5 1.5S2 16.33 2 15.5 2.67 14 3.5 14z&quot;&gt;&lt;/path&gt;&lt;path d=&quot;M14 14.5c0-.83.67-1.5 1.5-1.5h5c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5h-5c-.83 0-1.5-.67-1.5-1.5z&quot;&gt;&lt;/path&gt;&lt;path d=&quot;M15.5 19H14v1.5c0 .83.67 1.5 1.5 1.5s1.5-.67 1.5-1.5-.67-1.5-1.5-1.5z&quot;&gt;&lt;/path&gt;&lt;path d=&quot;M10 9.5C10 8.67 9.33 8 8.5 8h-5C2.67 8 2 8.67 2 9.5S2.67 11 3.5 11h5c.83 0 1.5-.67 1.5-1.5z&quot;&gt;&lt;/path&gt;&lt;path d=&quot;M8.5 5H10V3.5C10 2.67 9.33 2 8.5 2S7 2.67 7 3.5 7.67 5 8.5 5z&quot;&gt;&lt;/path&gt;&lt;/svg&gt; &lt;span class=&quot;btn-text-inner ms-3&quot;&gt;Join her on Slack&lt;/span&gt;&lt;/a&gt;
&lt;/div&gt;
&lt;/div&gt;</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="card_18" class="col-xxl-6 col-xl-6 col-lg-6  col-md-6 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Card 18</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">

                    <div class="row">
                        
                        <div class="col-xxl-8 col-xl-12 col-lg-12 col-md-12 col-sm-8 mx-auto">

                            <div class="card style-4">
                                <div class="card-body pt-3">
                                    
                                    <div class="m-o-dropdown-list">
                                        <div class="media mt-0 mb-3">
                                            <div class="badge--group me-3">
                                                <div class="badge badge-success badge-dot"></div>
                                            </div> 
                                            <div class="media-body">
                                                <h4 class="media-heading mb-0">
                                                    <span class="media-title">Web Design</span>
                                                    <div class="dropdown-list dropdown" role="group">
                                                        <a href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                                        </a>
                                                        <div class="dropdown-menu left">
                                                            <a class="dropdown-item" href="javascript:void(0);"><span>Start chat</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg></a>
                                                            <a class="dropdown-item" href="javascript:void(0);"><span>Todo</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg></a>
                                                            <a class="dropdown-item" href="javascript:void(0);"><span>Statistics</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bar-chart-2"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg></a>
                                                        </div>
                                                    </div>
                                                </h4>
                                            </div>
                                        </div>

                                    </div>
                                    
                                    <p class="card-text mt-4 mb-0">Powerful CRM admin dashboard template based on Bootstrap and Sass for all kind of back-end projects.</p>
                                </div>
                                <div class="card-footer pt-0 border-0">
                                    <div class="progress br-30 progress-sm">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>

                                    <div class="d-flex justify-content-between">
                                        
                                        <div class="avatar--group">
                                            <div class="avatar avatar-sm ms-0">
                                                <img alt="avatar" src="{{Vite::asset('resources/images/profile-16.jpeg')}}" class="rounded-circle" />
                                            </div>
                                            <div class="avatar avatar-sm">
                                                <img alt="avatar" src="{{Vite::asset('resources/images/delete-user-4.jpeg')}}" class="rounded-circle" />
                                            </div>
                                            <div class="avatar avatar-sm">
                                                <img alt="avatar" src="{{Vite::asset('resources/images/profile-5.jpeg')}}" class="rounded-circle" />
                                            </div>
                                            <div class="avatar avatar-sm">
                                                <img alt="avatar" src="{{Vite::asset('resources/images/profile-12.jpeg')}}" class="rounded-circle" />
                                            </div>
                                        </div>

                                        <div class="attachments align-self-center">
                                            <span class="image me-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-paperclip"><path d="M21.44 11.05l-9.19 9.19a6 6 0 0 1-8.49-8.49l9.19-9.19a4 4 0 0 1 5.66 5.66l-9.2 9.19a2 2 0 0 1-2.83-2.83l8.49-8.48"></path></svg>
                                            </span>
                                            <span class="count">4</span>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;div class=&quot;card style-4&quot;&gt;
&lt;div class=&quot;card-body pt-3&quot;&gt;

&lt;div class=&quot;media mt-0 mb-3&quot;&gt;
&lt;div class=&quot;&quot;&gt;
&lt;div class=&quot;avatar avatar-md avatar-indicators avatar-online me-3&quot;&gt;
    &lt;img alt=&quot;avatar&quot; src=&quot;assets/img/profile-2.jpeg&quot; class=&quot;rounded-circle&quot;&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;media-body&quot;&gt;
&lt;h4 class=&quot;media-heading mb-0&quot;&gt;Kelly Young&lt;/h4&gt;
&lt;p class=&quot;media-text&quot;&gt;Project Manager&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;p class=&quot;card-text mt-4 mb-0&quot;&gt;Powerful CRM admin dashboard template based on Bootstrap and Sass for all kind of back-end projects.&lt;/p&gt;
&lt;/div&gt;
&lt;div class=&quot;card-footer pt-0 border-0 text-center&quot;&gt;
&lt;a href=&quot;javascript:void(0);&quot; class=&quot;btn btn-secondary w-100&quot;&gt;&lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-slack&quot;&gt;&lt;path d=&quot;M14.5 10c-.83 0-1.5-.67-1.5-1.5v-5c0-.83.67-1.5 1.5-1.5s1.5.67 1.5 1.5v5c0 .83-.67 1.5-1.5 1.5z&quot;&gt;&lt;/path&gt;&lt;path d=&quot;M20.5 10H19V8.5c0-.83.67-1.5 1.5-1.5s1.5.67 1.5 1.5-.67 1.5-1.5 1.5z&quot;&gt;&lt;/path&gt;&lt;path d=&quot;M9.5 14c.83 0 1.5.67 1.5 1.5v5c0 .83-.67 1.5-1.5 1.5S8 21.33 8 20.5v-5c0-.83.67-1.5 1.5-1.5z&quot;&gt;&lt;/path&gt;&lt;path d=&quot;M3.5 14H5v1.5c0 .83-.67 1.5-1.5 1.5S2 16.33 2 15.5 2.67 14 3.5 14z&quot;&gt;&lt;/path&gt;&lt;path d=&quot;M14 14.5c0-.83.67-1.5 1.5-1.5h5c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5h-5c-.83 0-1.5-.67-1.5-1.5z&quot;&gt;&lt;/path&gt;&lt;path d=&quot;M15.5 19H14v1.5c0 .83.67 1.5 1.5 1.5s1.5-.67 1.5-1.5-.67-1.5-1.5-1.5z&quot;&gt;&lt;/path&gt;&lt;path d=&quot;M10 9.5C10 8.67 9.33 8 8.5 8h-5C2.67 8 2 8.67 2 9.5S2.67 11 3.5 11h5c.83 0 1.5-.67 1.5-1.5z&quot;&gt;&lt;/path&gt;&lt;path d=&quot;M8.5 5H10V3.5C10 2.67 9.33 2 8.5 2S7 2.67 7 3.5 7.67 5 8.5 5z&quot;&gt;&lt;/path&gt;&lt;/svg&gt; &lt;span class=&quot;btn-text-inner ms-3&quot;&gt;Join her on Slack&lt;/span&gt;&lt;/a&gt;
&lt;/div&gt;
&lt;/div&gt;</pre>
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