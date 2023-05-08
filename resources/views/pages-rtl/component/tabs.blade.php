<x-rtl.base-layout :scrollspy="true">

    <x-slot:pageTitle>
        {{$title}} 
    </x-slot>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <x-slot:headerFiles>
        <!--  BEGIN CUSTOM STYLE FILE  -->
        @vite(['resources/rtl/scss/light/assets/components/tabs.scss'])
        @vite(['resources/rtl/scss/dark/assets/components/tabs.scss'])
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
                <li class="breadcrumb-item active" aria-current="page">Tabs</li>
            </ol>
        </nav>
    </div>
    <!-- /BREADCRUMB -->

    <div id="navSection" data-bs-spy="affix" class="nav  sidenav">
        <div class="sidenav-content">
            <a href="#simpleTabs" class="active nav-link">Simple Tabs</a>
            <a href="#withIcons" class="nav-link">With Icons</a>
            <a href="#pill" class="nav-link">Pill</a>
            <a href="#pillWithIcons" class="nav-link">Pill with Icons</a>
            <a href="#verticalPill" class="nav-link">Vertical Pill</a>
            <a href="#verticalPilliwthIcons" class="nav-link">Vertical Pill with Icons</a>
        </div>
    </div>
    
    <div class="row layout-top-spacing">

        <div id="tabsSimple" class="col-xl-12 col-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Simple Tabs</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">

                    <div class="simple-tab">
                        
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Home</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Profile</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Contact</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="disabled-tab" data-bs-toggle="tab" data-bs-target="#disabled-tab-pane" type="button" role="tab" aria-controls="disabled-tab-pane" aria-selected="false" disabled>Disabled</button>
                            </li>
                        </ul>

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                                <p class="mt-3">Etiam iaculis imperdiet maximus. Curabitur at tempus massa, a aliquet ex. Aliquam faucibus sapien ut ex vulputate interdum. Quisque in ex sed eros malesuada vehicula. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Maecenas massa felis, maximus eu risus ut, finibus feugiat neque. In id dictum elit.</p>
                                <p>Aenean ut aliquet dolor. Integer accumsan odio non dignissim lobortis. Sed rhoncus ante eros, vel ullamcorper orci molestie congue. Phasellus vel faucibus dolor. Morbi magna eros, vulputate eu sem nec, venenatis egestas quam. Maecenas hendrerit mollis eros, eget faucibus quam dignissim vel.</p>
                            </div>
                            <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                                <p class="mt-3">Aliquam at sem nunc. Maecenas tincidunt lacus justo, non ultrices mauris egestas eu. Vestibulum ut ipsum ac eros rutrum blandit in eget quam. Nullam et lobortis nunc. Nam sodales, ante sed sodales rhoncus, diam ipsum faucibus mauris, non interdum nisl lacus vel justo.</p>
                                <p>Sed imperdiet mi tincidunt mauris convallis, ut ullamcorper nunc interdum. Praesent maximus massa eu varius gravida. Nullam in malesuada enim. Morbi commodo pellentesque velit sodales pretium. Mauris scelerisque augue vel est pulvinar laoreet.</p>
                            </div>
                            <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                                <p class="mt-3">In diam odio, ullamcorper vitae dolor vel, lobortis rhoncus odio. Nullam lacinia euismod ex vitae ullamcorper. Integer fringilla arcu nunc, et tempus sapien ornare sed. Nam fringilla velit nec bibendum consectetur. Etiam pellentesque eu nulla vel tincidunt. </p>
                                <p>Ut nec nunc sed risus viverra vehicula non non purus. Nunc semper sem ut ante suscipit vulputate. Integer tempus ornare ligula, sed lacinia leo posuere eu. </p>
                            </div>
                            <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">
                                <p class="mt-3">Nullam feugiat, sapien a lacinia condimentum, libero nibh fermentum lectus, eu dictum justo ex sit amet neque. Sed felis arcu, efficitur eget diam eget, maximus dapibus enim. Sed vitae varius lorem. Fusce non accumsan diam, quis porttitor dolor. </p>
                                <p>Aenean ut aliquet dolor. Integer accumsan odio non dignissim lobortis. Sed rhoncus ante eros, vel ullamcorper orci molestie congue. Phasellus vel faucibus dolor. Morbi magna eros, vulputate eu sem nec, venenatis egestas quam. Maecenas hendrerit mollis eros, eget faucibus quam dignissim vel.</p>
                            </div>
                        </div>

                    </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
<pre>
&lt;div class=&quot;simple-tab&quot;&gt;

&lt;ul class=&quot;nav nav-tabs&quot; id=&quot;myTab&quot; role=&quot;tablist&quot;&gt;
&lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
&lt;button class=&quot;nav-link active&quot; id=&quot;home-tab&quot; data-bs-toggle=&quot;tab&quot; data-bs-target=&quot;#home-tab-pane&quot; type=&quot;button&quot; role=&quot;tab&quot; aria-controls=&quot;home-tab-pane&quot; aria-selected=&quot;true&quot;&gt;Home&lt;/button&gt;
&lt;/li&gt;
&lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
&lt;button class=&quot;nav-link&quot; id=&quot;profile-tab&quot; data-bs-toggle=&quot;tab&quot; data-bs-target=&quot;#profile-tab-pane&quot; type=&quot;button&quot; role=&quot;tab&quot; aria-controls=&quot;profile-tab-pane&quot; aria-selected=&quot;false&quot;&gt;Profile&lt;/button&gt;
&lt;/li&gt;
&lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
&lt;button class=&quot;nav-link&quot; id=&quot;contact-tab&quot; data-bs-toggle=&quot;tab&quot; data-bs-target=&quot;#contact-tab-pane&quot; type=&quot;button&quot; role=&quot;tab&quot; aria-controls=&quot;contact-tab-pane&quot; aria-selected=&quot;false&quot;&gt;Contact&lt;/button&gt;
&lt;/li&gt;
&lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
&lt;button class=&quot;nav-link&quot; id=&quot;disabled-tab&quot; data-bs-toggle=&quot;tab&quot; data-bs-target=&quot;#disabled-tab-pane&quot; type=&quot;button&quot; role=&quot;tab&quot; aria-controls=&quot;disabled-tab-pane&quot; aria-selected=&quot;false&quot; disabled&gt;Disabled&lt;/button&gt;
&lt;/li&gt;
&lt;/ul&gt;

&lt;div class=&quot;tab-content&quot; id=&quot;myTabContent&quot;&gt;
&lt;div class=&quot;tab-pane fade show active&quot; id=&quot;home-tab-pane&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;home-tab&quot; tabindex=&quot;0&quot;&gt;
&lt;p class=&quot;mt-3&quot;&gt;Etiam iaculis imperdiet maximus. Curabitur at tempus massa, a aliquet ex. Aliquam faucibus sapien ut ex vulputate interdum. Quisque in ex sed eros malesuada vehicula. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Maecenas massa felis, maximus eu risus ut, finibus feugiat neque. In id dictum elit.&lt;/p&gt;
&lt;p&gt;Aenean ut aliquet dolor. Integer accumsan odio non dignissim lobortis. Sed rhoncus ante eros, vel ullamcorper orci molestie congue. Phasellus vel faucibus dolor. Morbi magna eros, vulputate eu sem nec, venenatis egestas quam. Maecenas hendrerit mollis eros, eget faucibus quam dignissim vel.&lt;/p&gt;
&lt;/div&gt;
&lt;div class=&quot;tab-pane fade&quot; id=&quot;profile-tab-pane&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;profile-tab&quot; tabindex=&quot;0&quot;&gt;
&lt;p class=&quot;mt-3&quot;&gt;Aliquam at sem nunc. Maecenas tincidunt lacus justo, non ultrices mauris egestas eu. Vestibulum ut ipsum ac eros rutrum blandit in eget quam. Nullam et lobortis nunc. Nam sodales, ante sed sodales rhoncus, diam ipsum faucibus mauris, non interdum nisl lacus vel justo.&lt;/p&gt;
&lt;p&gt;Sed imperdiet mi tincidunt mauris convallis, ut ullamcorper nunc interdum. Praesent maximus massa eu varius gravida. Nullam in malesuada enim. Morbi commodo pellentesque velit sodales pretium. Mauris scelerisque augue vel est pulvinar laoreet.&lt;/p&gt;
&lt;/div&gt;
&lt;div class=&quot;tab-pane fade&quot; id=&quot;contact-tab-pane&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;contact-tab&quot; tabindex=&quot;0&quot;&gt;
&lt;p class=&quot;mt-3&quot;&gt;In diam odio, ullamcorper vitae dolor vel, lobortis rhoncus odio. Nullam lacinia euismod ex vitae ullamcorper. Integer fringilla arcu nunc, et tempus sapien ornare sed. Nam fringilla velit nec bibendum consectetur. Etiam pellentesque eu nulla vel tincidunt. &lt;/p&gt;
&lt;p&gt;Ut nec nunc sed risus viverra vehicula non non purus. Nunc semper sem ut ante suscipit vulputate. Integer tempus ornare ligula, sed lacinia leo posuere eu. &lt;/p&gt;
&lt;/div&gt;
&lt;div class=&quot;tab-pane fade&quot; id=&quot;disabled-tab-pane&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;disabled-tab&quot; tabindex=&quot;0&quot;&gt;
&lt;p class=&quot;mt-3&quot;&gt;Nullam feugiat, sapien a lacinia condimentum, libero nibh fermentum lectus, eu dictum justo ex sit amet neque. Sed felis arcu, efficitur eget diam eget, maximus dapibus enim. Sed vitae varius lorem. Fusce non accumsan diam, quis porttitor dolor. &lt;/p&gt;
&lt;p&gt;Aenean ut aliquet dolor. Integer accumsan odio non dignissim lobortis. Sed rhoncus ante eros, vel ullamcorper orci molestie congue. Phasellus vel faucibus dolor. Morbi magna eros, vulputate eu sem nec, venenatis egestas quam. Maecenas hendrerit mollis eros, eget faucibus quam dignissim vel.&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;

&lt;/div&gt;</pre>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <div id="tabsSimple" class="col-xl-12 col-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>With Icons</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">

                    <div class="simple-tab">
                        
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab-icon" data-bs-toggle="tab" data-bs-target="#home-tab-icon-pane" type="button" role="tab" aria-controls="home-tab-icon-pane" aria-selected="true">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg> Home
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab-icon" data-bs-toggle="tab" data-bs-target="#profile-tab-icon-pane" type="button" role="tab" aria-controls="profile-tab-icon-pane" aria-selected="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                    Profile
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contact-tab-icon" data-bs-toggle="tab" data-bs-target="#contact-tab-icon-pane" type="button" role="tab" aria-controls="contact-tab-icon-pane" aria-selected="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                                    Contact
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="disabled-tab-icon" data-bs-toggle="tab" data-bs-target="#disabled-tab-icon-pane" type="button" role="tab" aria-controls="disabled-tab-icon-pane" aria-selected="false" disabled>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell-off"><path d="M13.73 21a2 2 0 0 1-3.46 0"></path><path d="M18.63 13A17.89 17.89 0 0 1 18 8"></path><path d="M6.26 6.26A5.86 5.86 0 0 0 6 8c0 7-3 9-3 9h14"></path><path d="M18 8a6 6 0 0 0-9.33-5"></path><line x1="1" y1="1" x2="23" y2="23"></line></svg>
                                    Disabled
                                </button>
                            </li>
                        </ul>
                        
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home-tab-icon-pane" role="tabpanel" aria-labelledby="home-tab-icon" tabindex="0">
                                <p class="mt-3">Etiam iaculis imperdiet maximus. Curabitur at tempus massa, a aliquet ex. Aliquam faucibus sapien ut ex vulputate interdum. Quisque in ex sed eros malesuada vehicula. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Maecenas massa felis, maximus eu risus ut, finibus feugiat neque. In id dictum elit.</p>
                                <p>Aenean ut aliquet dolor. Integer accumsan odio non dignissim lobortis. Sed rhoncus ante eros, vel ullamcorper orci molestie congue. Phasellus vel faucibus dolor. Morbi magna eros, vulputate eu sem nec, venenatis egestas quam. Maecenas hendrerit mollis eros, eget faucibus quam dignissim vel.</p>
                            </div>
                            <div class="tab-pane fade" id="profile-tab-icon-pane" role="tabpanel" aria-labelledby="profile-tab-icon" tabindex="0">
                                <p class="mt-3">Aliquam at sem nunc. Maecenas tincidunt lacus justo, non ultrices mauris egestas eu. Vestibulum ut ipsum ac eros rutrum blandit in eget quam. Nullam et lobortis nunc. Nam sodales, ante sed sodales rhoncus, diam ipsum faucibus mauris, non interdum nisl lacus vel justo.</p>
                                <p>Sed imperdiet mi tincidunt mauris convallis, ut ullamcorper nunc interdum. Praesent maximus massa eu varius gravida. Nullam in malesuada enim. Morbi commodo pellentesque velit sodales pretium. Mauris scelerisque augue vel est pulvinar laoreet.</p>
                            </div>
                            <div class="tab-pane fade" id="contact-tab-icon-pane" role="tabpanel" aria-labelledby="contact-tab-icon" tabindex="0">
                                <p class="mt-3">In diam odio, ullamcorper vitae dolor vel, lobortis rhoncus odio. Nullam lacinia euismod ex vitae ullamcorper. Integer fringilla arcu nunc, et tempus sapien ornare sed. Nam fringilla velit nec bibendum consectetur. Etiam pellentesque eu nulla vel tincidunt. </p>
                                <p>Ut nec nunc sed risus viverra vehicula non non purus. Nunc semper sem ut ante suscipit vulputate. Integer tempus ornare ligula, sed lacinia leo posuere eu. </p>
                            </div>
                            <div class="tab-pane fade" id="disabled-tab-icon-pane" role="tabpanel" aria-labelledby="disabled-tab-icon" tabindex="0">
                                <p class="mt-3">Nullam feugiat, sapien a lacinia condimentum, libero nibh fermentum lectus, eu dictum justo ex sit amet neque. Sed felis arcu, efficitur eget diam eget, maximus dapibus enim. Sed vitae varius lorem. Fusce non accumsan diam, quis porttitor dolor. </p>
                                <p>Aenean ut aliquet dolor. Integer accumsan odio non dignissim lobortis. Sed rhoncus ante eros, vel ullamcorper orci molestie congue. Phasellus vel faucibus dolor. Morbi magna eros, vulputate eu sem nec, venenatis egestas quam. Maecenas hendrerit mollis eros, eget faucibus quam dignissim vel.</p>
                            </div>
                        </div>

                    </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
<pre>&lt;div class=&quot;simple-tab&quot;&gt;

&lt;ul class=&quot;nav nav-tabs&quot; id=&quot;myTab&quot; role=&quot;tablist&quot;&gt;
&lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
&lt;button class=&quot;nav-link active&quot; id=&quot;home-tab-icon&quot; data-bs-toggle=&quot;tab&quot; data-bs-target=&quot;#home-tab-icon-pane&quot; type=&quot;button&quot; role=&quot;tab&quot; aria-controls=&quot;home-tab-icon-pane&quot; aria-selected=&quot;true&quot;&gt;
&lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-home&quot;&gt;&lt;path d=&quot;M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z&quot;&gt;&lt;/path&gt;&lt;polyline points=&quot;9 22 9 12 15 12 15 22&quot;&gt;&lt;/polyline&gt;&lt;/svg&gt; Home
&lt;/button&gt;
&lt;/li&gt;
&lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
&lt;button class=&quot;nav-link&quot; id=&quot;profile-tab-icon&quot; data-bs-toggle=&quot;tab&quot; data-bs-target=&quot;#profile-tab-icon-pane&quot; type=&quot;button&quot; role=&quot;tab&quot; aria-controls=&quot;profile-tab-icon-pane&quot; aria-selected=&quot;false&quot;&gt;
&lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-user&quot;&gt;&lt;path d=&quot;M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2&quot;&gt;&lt;/path&gt;&lt;circle cx=&quot;12&quot; cy=&quot;7&quot; r=&quot;4&quot;&gt;&lt;/circle&gt;&lt;/svg&gt;
Profile
&lt;/button&gt;
&lt;/li&gt;
&lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
&lt;button class=&quot;nav-link&quot; id=&quot;contact-tab-icon&quot; data-bs-toggle=&quot;tab&quot; data-bs-target=&quot;#contact-tab-icon-pane&quot; type=&quot;button&quot; role=&quot;tab&quot; aria-controls=&quot;contact-tab-icon-pane&quot; aria-selected=&quot;false&quot;&gt;
&lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-phone&quot;&gt;&lt;path d=&quot;M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z&quot;&gt;&lt;/path&gt;&lt;/svg&gt;
Contact
&lt;/button&gt;
&lt;/li&gt;
&lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
&lt;button class=&quot;nav-link&quot; id=&quot;disabled-tab-icon&quot; data-bs-toggle=&quot;tab&quot; data-bs-target=&quot;#disabled-tab-icon-pane&quot; type=&quot;button&quot; role=&quot;tab&quot; aria-controls=&quot;disabled-tab-icon-pane&quot; aria-selected=&quot;false&quot; disabled&gt;
&lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-bell-off&quot;&gt;&lt;path d=&quot;M13.73 21a2 2 0 0 1-3.46 0&quot;&gt;&lt;/path&gt;&lt;path d=&quot;M18.63 13A17.89 17.89 0 0 1 18 8&quot;&gt;&lt;/path&gt;&lt;path d=&quot;M6.26 6.26A5.86 5.86 0 0 0 6 8c0 7-3 9-3 9h14&quot;&gt;&lt;/path&gt;&lt;path d=&quot;M18 8a6 6 0 0 0-9.33-5&quot;&gt;&lt;/path&gt;&lt;line x1=&quot;1&quot; y1=&quot;1&quot; x2=&quot;23&quot; y2=&quot;23&quot;&gt;&lt;/line&gt;&lt;/svg&gt;
Disabled
&lt;/button&gt;
&lt;/li&gt;
&lt;/ul&gt;

&lt;div class=&quot;tab-content&quot; id=&quot;myTabContent&quot;&gt;
&lt;div class=&quot;tab-pane fade show active&quot; id=&quot;home-tab-icon-pane&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;home-tab-icon&quot; tabindex=&quot;0&quot;&gt;
&lt;p class=&quot;mt-3&quot;&gt;Etiam iaculis imperdiet maximus. Curabitur at tempus massa, a aliquet ex. Aliquam faucibus sapien ut ex vulputate interdum. Quisque in ex sed eros malesuada vehicula. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Maecenas massa felis, maximus eu risus ut, finibus feugiat neque. In id dictum elit.&lt;/p&gt;
&lt;p&gt;Aenean ut aliquet dolor. Integer accumsan odio non dignissim lobortis. Sed rhoncus ante eros, vel ullamcorper orci molestie congue. Phasellus vel faucibus dolor. Morbi magna eros, vulputate eu sem nec, venenatis egestas quam. Maecenas hendrerit mollis eros, eget faucibus quam dignissim vel.&lt;/p&gt;
&lt;/div&gt;
&lt;div class=&quot;tab-pane fade&quot; id=&quot;profile-tab-icon-pane&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;profile-tab-icon&quot; tabindex=&quot;0&quot;&gt;
&lt;p class=&quot;mt-3&quot;&gt;Aliquam at sem nunc. Maecenas tincidunt lacus justo, non ultrices mauris egestas eu. Vestibulum ut ipsum ac eros rutrum blandit in eget quam. Nullam et lobortis nunc. Nam sodales, ante sed sodales rhoncus, diam ipsum faucibus mauris, non interdum nisl lacus vel justo.&lt;/p&gt;
&lt;p&gt;Sed imperdiet mi tincidunt mauris convallis, ut ullamcorper nunc interdum. Praesent maximus massa eu varius gravida. Nullam in malesuada enim. Morbi commodo pellentesque velit sodales pretium. Mauris scelerisque augue vel est pulvinar laoreet.&lt;/p&gt;
&lt;/div&gt;
&lt;div class=&quot;tab-pane fade&quot; id=&quot;contact-tab-icon-pane&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;contact-tab-icon&quot; tabindex=&quot;0&quot;&gt;
&lt;p class=&quot;mt-3&quot;&gt;In diam odio, ullamcorper vitae dolor vel, lobortis rhoncus odio. Nullam lacinia euismod ex vitae ullamcorper. Integer fringilla arcu nunc, et tempus sapien ornare sed. Nam fringilla velit nec bibendum consectetur. Etiam pellentesque eu nulla vel tincidunt. &lt;/p&gt;
&lt;p&gt;Ut nec nunc sed risus viverra vehicula non non purus. Nunc semper sem ut ante suscipit vulputate. Integer tempus ornare ligula, sed lacinia leo posuere eu. &lt;/p&gt;
&lt;/div&gt;
&lt;div class=&quot;tab-pane fade&quot; id=&quot;disabled-tab-icon-pane&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;disabled-tab-icon&quot; tabindex=&quot;0&quot;&gt;
&lt;p class=&quot;mt-3&quot;&gt;Nullam feugiat, sapien a lacinia condimentum, libero nibh fermentum lectus, eu dictum justo ex sit amet neque. Sed felis arcu, efficitur eget diam eget, maximus dapibus enim. Sed vitae varius lorem. Fusce non accumsan diam, quis porttitor dolor. &lt;/p&gt;
&lt;p&gt;Aenean ut aliquet dolor. Integer accumsan odio non dignissim lobortis. Sed rhoncus ante eros, vel ullamcorper orci molestie congue. Phasellus vel faucibus dolor. Morbi magna eros, vulputate eu sem nec, venenatis egestas quam. Maecenas hendrerit mollis eros, eget faucibus quam dignissim vel.&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;

&lt;/div&gt;</pre>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <div id="tabsSimple" class="col-xl-12 col-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Pill</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">

                    <div class="simple-pill">
                        
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Home</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#pills-disabled" type="button" role="tab" aria-controls="pills-disabled" aria-selected="false" disabled>Disabled</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                                <p class="mt-3">Etiam iaculis imperdiet maximus. Curabitur at tempus massa, a aliquet ex. Aliquam faucibus sapien ut ex vulputate interdum. Quisque in ex sed eros malesuada vehicula. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Maecenas massa felis, maximus eu risus ut, finibus feugiat neque. In id dictum elit.</p>
                                <p>Aenean ut aliquet dolor. Integer accumsan odio non dignissim lobortis. Sed rhoncus ante eros, vel ullamcorper orci molestie congue. Phasellus vel faucibus dolor. Morbi magna eros, vulputate eu sem nec, venenatis egestas quam. Maecenas hendrerit mollis eros, eget faucibus quam dignissim vel.</p>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                                <p class="mt-3">Aliquam at sem nunc. Maecenas tincidunt lacus justo, non ultrices mauris egestas eu. Vestibulum ut ipsum ac eros rutrum blandit in eget quam. Nullam et lobortis nunc. Nam sodales, ante sed sodales rhoncus, diam ipsum faucibus mauris, non interdum nisl lacus vel justo.</p>
                                <p>Sed imperdiet mi tincidunt mauris convallis, ut ullamcorper nunc interdum. Praesent maximus massa eu varius gravida. Nullam in malesuada enim. Morbi commodo pellentesque velit sodales pretium. Mauris scelerisque augue vel est pulvinar laoreet.</p>
                            </div>
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
                                <p class="mt-3">In diam odio, ullamcorper vitae dolor vel, lobortis rhoncus odio. Nullam lacinia euismod ex vitae ullamcorper. Integer fringilla arcu nunc, et tempus sapien ornare sed. Nam fringilla velit nec bibendum consectetur. Etiam pellentesque eu nulla vel tincidunt. </p>
                                <p>Ut nec nunc sed risus viverra vehicula non non purus. Nunc semper sem ut ante suscipit vulputate. Integer tempus ornare ligula, sed lacinia leo posuere eu. </p>
                            </div>
                            <div class="tab-pane fade" id="pills-disabled" role="tabpanel" aria-labelledby="pills-disabled-tab" tabindex="0">
                                <p class="mt-3">Nullam feugiat, sapien a lacinia condimentum, libero nibh fermentum lectus, eu dictum justo ex sit amet neque. Sed felis arcu, efficitur eget diam eget, maximus dapibus enim. Sed vitae varius lorem. Fusce non accumsan diam, quis porttitor dolor. </p>
                                <p>Aenean ut aliquet dolor. Integer accumsan odio non dignissim lobortis. Sed rhoncus ante eros, vel ullamcorper orci molestie congue. Phasellus vel faucibus dolor. Morbi magna eros, vulputate eu sem nec, venenatis egestas quam. Maecenas hendrerit mollis eros, eget faucibus quam dignissim vel.</p>
                            </div>
                        </div>

                    </div>
                    
                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;div class=&quot;simple-pill&quot;&gt;

&lt;ul class=&quot;nav nav-pills mb-3&quot; id=&quot;pills-tab&quot; role=&quot;tablist&quot;&gt;
&lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
&lt;button class=&quot;nav-link active&quot; id=&quot;pills-home-tab&quot; data-bs-toggle=&quot;pill&quot; data-bs-target=&quot;#pills-home&quot; type=&quot;button&quot; role=&quot;tab&quot; aria-controls=&quot;pills-home&quot; aria-selected=&quot;true&quot;&gt;Home&lt;/button&gt;
&lt;/li&gt;
&lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
&lt;button class=&quot;nav-link&quot; id=&quot;pills-profile-tab&quot; data-bs-toggle=&quot;pill&quot; data-bs-target=&quot;#pills-profile&quot; type=&quot;button&quot; role=&quot;tab&quot; aria-controls=&quot;pills-profile&quot; aria-selected=&quot;false&quot;&gt;Profile&lt;/button&gt;
&lt;/li&gt;
&lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
&lt;button class=&quot;nav-link&quot; id=&quot;pills-contact-tab&quot; data-bs-toggle=&quot;pill&quot; data-bs-target=&quot;#pills-contact&quot; type=&quot;button&quot; role=&quot;tab&quot; aria-controls=&quot;pills-contact&quot; aria-selected=&quot;false&quot;&gt;Contact&lt;/button&gt;
&lt;/li&gt;
&lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
&lt;button class=&quot;nav-link&quot; id=&quot;pills-disabled-tab&quot; data-bs-toggle=&quot;pill&quot; data-bs-target=&quot;#pills-disabled&quot; type=&quot;button&quot; role=&quot;tab&quot; aria-controls=&quot;pills-disabled&quot; aria-selected=&quot;false&quot; disabled&gt;Disabled&lt;/button&gt;
&lt;/li&gt;
&lt;/ul&gt;
&lt;div class=&quot;tab-content&quot; id=&quot;pills-tabContent&quot;&gt;
&lt;div class=&quot;tab-pane fade show active&quot; id=&quot;pills-home&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;pills-home-tab&quot; tabindex=&quot;0&quot;&gt;
&lt;p class=&quot;mt-3&quot;&gt;Etiam iaculis imperdiet maximus. Curabitur at tempus massa, a aliquet ex. Aliquam faucibus sapien ut ex vulputate interdum. Quisque in ex sed eros malesuada vehicula. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Maecenas massa felis, maximus eu risus ut, finibus feugiat neque. In id dictum elit.&lt;/p&gt;
&lt;p&gt;Aenean ut aliquet dolor. Integer accumsan odio non dignissim lobortis. Sed rhoncus ante eros, vel ullamcorper orci molestie congue. Phasellus vel faucibus dolor. Morbi magna eros, vulputate eu sem nec, venenatis egestas quam. Maecenas hendrerit mollis eros, eget faucibus quam dignissim vel.&lt;/p&gt;
&lt;/div&gt;
&lt;div class=&quot;tab-pane fade&quot; id=&quot;pills-profile&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;pills-profile-tab&quot; tabindex=&quot;0&quot;&gt;
&lt;p class=&quot;mt-3&quot;&gt;Aliquam at sem nunc. Maecenas tincidunt lacus justo, non ultrices mauris egestas eu. Vestibulum ut ipsum ac eros rutrum blandit in eget quam. Nullam et lobortis nunc. Nam sodales, ante sed sodales rhoncus, diam ipsum faucibus mauris, non interdum nisl lacus vel justo.&lt;/p&gt;
&lt;p&gt;Sed imperdiet mi tincidunt mauris convallis, ut ullamcorper nunc interdum. Praesent maximus massa eu varius gravida. Nullam in malesuada enim. Morbi commodo pellentesque velit sodales pretium. Mauris scelerisque augue vel est pulvinar laoreet.&lt;/p&gt;
&lt;/div&gt;
&lt;div class=&quot;tab-pane fade&quot; id=&quot;pills-contact&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;pills-contact-tab&quot; tabindex=&quot;0&quot;&gt;
&lt;p class=&quot;mt-3&quot;&gt;In diam odio, ullamcorper vitae dolor vel, lobortis rhoncus odio. Nullam lacinia euismod ex vitae ullamcorper. Integer fringilla arcu nunc, et tempus sapien ornare sed. Nam fringilla velit nec bibendum consectetur. Etiam pellentesque eu nulla vel tincidunt. &lt;/p&gt;
&lt;p&gt;Ut nec nunc sed risus viverra vehicula non non purus. Nunc semper sem ut ante suscipit vulputate. Integer tempus ornare ligula, sed lacinia leo posuere eu. &lt;/p&gt;
&lt;/div&gt;
&lt;div class=&quot;tab-pane fade&quot; id=&quot;pills-disabled&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;pills-disabled-tab&quot; tabindex=&quot;0&quot;&gt;
&lt;p class=&quot;mt-3&quot;&gt;Nullam feugiat, sapien a lacinia condimentum, libero nibh fermentum lectus, eu dictum justo ex sit amet neque. Sed felis arcu, efficitur eget diam eget, maximus dapibus enim. Sed vitae varius lorem. Fusce non accumsan diam, quis porttitor dolor. &lt;/p&gt;
&lt;p&gt;Aenean ut aliquet dolor. Integer accumsan odio non dignissim lobortis. Sed rhoncus ante eros, vel ullamcorper orci molestie congue. Phasellus vel faucibus dolor. Morbi magna eros, vulputate eu sem nec, venenatis egestas quam. Maecenas hendrerit mollis eros, eget faucibus quam dignissim vel.&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;

&lt;/div&gt;</pre>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <div id="tabsSimple" class="col-xl-12 col-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Pill with Icons</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">

                    <div class="simple-pill">
                        
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-home-icon-tab" data-bs-toggle="pill" data-bs-target="#pills-home-icon" type="button" role="tab" aria-controls="pills-home-icon" aria-selected="true">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                    Home
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-profile-icon-tab" data-bs-toggle="pill" data-bs-target="#pills-profile-icon" type="button" role="tab" aria-controls="pills-profile-icon" aria-selected="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                    Profile
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-contact-icon-tab" data-bs-toggle="pill" data-bs-target="#pills-contact-icon" type="button" role="tab" aria-controls="pills-contact-icon" aria-selected="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                                    Contact
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-disabled-icon-tab" data-bs-toggle="pill" data-bs-target="#pills-disabled-icon" type="button" role="tab" aria-controls="pills-disabled-icon" aria-selected="false" disabled>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell-off"><path d="M13.73 21a2 2 0 0 1-3.46 0"></path><path d="M18.63 13A17.89 17.89 0 0 1 18 8"></path><path d="M6.26 6.26A5.86 5.86 0 0 0 6 8c0 7-3 9-3 9h14"></path><path d="M18 8a6 6 0 0 0-9.33-5"></path><line x1="1" y1="1" x2="23" y2="23"></line></svg>
                                    Disabled
                                </button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home-icon" role="tabpanel" aria-labelledby="pills-home-icon-tab" tabindex="0">
                                <p class="mt-3">Etiam iaculis imperdiet maximus. Curabitur at tempus massa, a aliquet ex. Aliquam faucibus sapien ut ex vulputate interdum. Quisque in ex sed eros malesuada vehicula. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Maecenas massa felis, maximus eu risus ut, finibus feugiat neque. In id dictum elit.</p>
                                <p>Aenean ut aliquet dolor. Integer accumsan odio non dignissim lobortis. Sed rhoncus ante eros, vel ullamcorper orci molestie congue. Phasellus vel faucibus dolor. Morbi magna eros, vulputate eu sem nec, venenatis egestas quam. Maecenas hendrerit mollis eros, eget faucibus quam dignissim vel.</p>
                            </div>
                            <div class="tab-pane fade" id="pills-profile-icon" role="tabpanel" aria-labelledby="pills-profile-icon-tab" tabindex="0">
                                <p class="mt-3">Aliquam at sem nunc. Maecenas tincidunt lacus justo, non ultrices mauris egestas eu. Vestibulum ut ipsum ac eros rutrum blandit in eget quam. Nullam et lobortis nunc. Nam sodales, ante sed sodales rhoncus, diam ipsum faucibus mauris, non interdum nisl lacus vel justo.</p>
                                <p>Sed imperdiet mi tincidunt mauris convallis, ut ullamcorper nunc interdum. Praesent maximus massa eu varius gravida. Nullam in malesuada enim. Morbi commodo pellentesque velit sodales pretium. Mauris scelerisque augue vel est pulvinar laoreet.</p>
                            </div>
                            <div class="tab-pane fade" id="pills-contact-icon" role="tabpanel" aria-labelledby="pills-contact-icon-tab" tabindex="0">
                                <p class="mt-3">In diam odio, ullamcorper vitae dolor vel, lobortis rhoncus odio. Nullam lacinia euismod ex vitae ullamcorper. Integer fringilla arcu nunc, et tempus sapien ornare sed. Nam fringilla velit nec bibendum consectetur. Etiam pellentesque eu nulla vel tincidunt. </p>
                                <p>Ut nec nunc sed risus viverra vehicula non non purus. Nunc semper sem ut ante suscipit vulputate. Integer tempus ornare ligula, sed lacinia leo posuere eu. </p>
                            </div>
                            <div class="tab-pane fade" id="pills-disabled-icon" role="tabpanel" aria-labelledby="pills-disabled-icon-tab" tabindex="0">
                                <p class="mt-3">Nullam feugiat, sapien a lacinia condimentum, libero nibh fermentum lectus, eu dictum justo ex sit amet neque. Sed felis arcu, efficitur eget diam eget, maximus dapibus enim. Sed vitae varius lorem. Fusce non accumsan diam, quis porttitor dolor. </p>
                                <p>Aenean ut aliquet dolor. Integer accumsan odio non dignissim lobortis. Sed rhoncus ante eros, vel ullamcorper orci molestie congue. Phasellus vel faucibus dolor. Morbi magna eros, vulputate eu sem nec, venenatis egestas quam. Maecenas hendrerit mollis eros, eget faucibus quam dignissim vel.</p>
                            </div>
                        </div>

                    </div>
                    
                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
<pre>&lt;div class=&quot;simple-pill&quot;&gt;

&lt;ul class=&quot;nav nav-pills mb-3&quot; id=&quot;pills-tab&quot; role=&quot;tablist&quot;&gt;
&lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
&lt;button class=&quot;nav-link active&quot; id=&quot;pills-home-icon-tab&quot; data-bs-toggle=&quot;pill&quot; data-bs-target=&quot;#pills-home-icon&quot; type=&quot;button&quot; role=&quot;tab&quot; aria-controls=&quot;pills-home-icon&quot; aria-selected=&quot;true&quot;&gt;
&lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-home&quot;&gt;&lt;path d=&quot;M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z&quot;&gt;&lt;/path&gt;&lt;polyline points=&quot;9 22 9 12 15 12 15 22&quot;&gt;&lt;/polyline&gt;&lt;/svg&gt;
Home
&lt;/button&gt;
&lt;/li&gt;
&lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
&lt;button class=&quot;nav-link&quot; id=&quot;pills-profile-icon-tab&quot; data-bs-toggle=&quot;pill&quot; data-bs-target=&quot;#pills-profile-icon&quot; type=&quot;button&quot; role=&quot;tab&quot; aria-controls=&quot;pills-profile-icon&quot; aria-selected=&quot;false&quot;&gt;
&lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-user&quot;&gt;&lt;path d=&quot;M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2&quot;&gt;&lt;/path&gt;&lt;circle cx=&quot;12&quot; cy=&quot;7&quot; r=&quot;4&quot;&gt;&lt;/circle&gt;&lt;/svg&gt;
Profile
&lt;/button&gt;
&lt;/li&gt;
&lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
&lt;button class=&quot;nav-link&quot; id=&quot;pills-contact-icon-tab&quot; data-bs-toggle=&quot;pill&quot; data-bs-target=&quot;#pills-contact-icon&quot; type=&quot;button&quot; role=&quot;tab&quot; aria-controls=&quot;pills-contact-icon&quot; aria-selected=&quot;false&quot;&gt;
&lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-phone&quot;&gt;&lt;path d=&quot;M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z&quot;&gt;&lt;/path&gt;&lt;/svg&gt;
Contact
&lt;/button&gt;
&lt;/li&gt;
&lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
&lt;button class=&quot;nav-link&quot; id=&quot;pills-disabled-icon-tab&quot; data-bs-toggle=&quot;pill&quot; data-bs-target=&quot;#pills-disabled-icon&quot; type=&quot;button&quot; role=&quot;tab&quot; aria-controls=&quot;pills-disabled-icon&quot; aria-selected=&quot;false&quot; disabled&gt;
&lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-bell-off&quot;&gt;&lt;path d=&quot;M13.73 21a2 2 0 0 1-3.46 0&quot;&gt;&lt;/path&gt;&lt;path d=&quot;M18.63 13A17.89 17.89 0 0 1 18 8&quot;&gt;&lt;/path&gt;&lt;path d=&quot;M6.26 6.26A5.86 5.86 0 0 0 6 8c0 7-3 9-3 9h14&quot;&gt;&lt;/path&gt;&lt;path d=&quot;M18 8a6 6 0 0 0-9.33-5&quot;&gt;&lt;/path&gt;&lt;line x1=&quot;1&quot; y1=&quot;1&quot; x2=&quot;23&quot; y2=&quot;23&quot;&gt;&lt;/line&gt;&lt;/svg&gt;
Disabled
&lt;/button&gt;
&lt;/li&gt;
&lt;/ul&gt;
&lt;div class=&quot;tab-content&quot; id=&quot;pills-tabContent&quot;&gt;
&lt;div class=&quot;tab-pane fade show active&quot; id=&quot;pills-home-icon&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;pills-home-icon-tab&quot; tabindex=&quot;0&quot;&gt;
&lt;p class=&quot;mt-3&quot;&gt;Etiam iaculis imperdiet maximus. Curabitur at tempus massa, a aliquet ex. Aliquam faucibus sapien ut ex vulputate interdum. Quisque in ex sed eros malesuada vehicula. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Maecenas massa felis, maximus eu risus ut, finibus feugiat neque. In id dictum elit.&lt;/p&gt;
&lt;p&gt;Aenean ut aliquet dolor. Integer accumsan odio non dignissim lobortis. Sed rhoncus ante eros, vel ullamcorper orci molestie congue. Phasellus vel faucibus dolor. Morbi magna eros, vulputate eu sem nec, venenatis egestas quam. Maecenas hendrerit mollis eros, eget faucibus quam dignissim vel.&lt;/p&gt;
&lt;/div&gt;
&lt;div class=&quot;tab-pane fade&quot; id=&quot;pills-profile-icon&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;pills-profile-icon-tab&quot; tabindex=&quot;0&quot;&gt;
&lt;p class=&quot;mt-3&quot;&gt;Aliquam at sem nunc. Maecenas tincidunt lacus justo, non ultrices mauris egestas eu. Vestibulum ut ipsum ac eros rutrum blandit in eget quam. Nullam et lobortis nunc. Nam sodales, ante sed sodales rhoncus, diam ipsum faucibus mauris, non interdum nisl lacus vel justo.&lt;/p&gt;
&lt;p&gt;Sed imperdiet mi tincidunt mauris convallis, ut ullamcorper nunc interdum. Praesent maximus massa eu varius gravida. Nullam in malesuada enim. Morbi commodo pellentesque velit sodales pretium. Mauris scelerisque augue vel est pulvinar laoreet.&lt;/p&gt;
&lt;/div&gt;
&lt;div class=&quot;tab-pane fade&quot; id=&quot;pills-contact-icon&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;pills-contact-icon-tab&quot; tabindex=&quot;0&quot;&gt;
&lt;p class=&quot;mt-3&quot;&gt;In diam odio, ullamcorper vitae dolor vel, lobortis rhoncus odio. Nullam lacinia euismod ex vitae ullamcorper. Integer fringilla arcu nunc, et tempus sapien ornare sed. Nam fringilla velit nec bibendum consectetur. Etiam pellentesque eu nulla vel tincidunt. &lt;/p&gt;
&lt;p&gt;Ut nec nunc sed risus viverra vehicula non non purus. Nunc semper sem ut ante suscipit vulputate. Integer tempus ornare ligula, sed lacinia leo posuere eu. &lt;/p&gt;
&lt;/div&gt;
&lt;div class=&quot;tab-pane fade&quot; id=&quot;pills-disabled-icon&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;pills-disabled-icon-tab&quot; tabindex=&quot;0&quot;&gt;
&lt;p class=&quot;mt-3&quot;&gt;Nullam feugiat, sapien a lacinia condimentum, libero nibh fermentum lectus, eu dictum justo ex sit amet neque. Sed felis arcu, efficitur eget diam eget, maximus dapibus enim. Sed vitae varius lorem. Fusce non accumsan diam, quis porttitor dolor. &lt;/p&gt;
&lt;p&gt;Aenean ut aliquet dolor. Integer accumsan odio non dignissim lobortis. Sed rhoncus ante eros, vel ullamcorper orci molestie congue. Phasellus vel faucibus dolor. Morbi magna eros, vulputate eu sem nec, venenatis egestas quam. Maecenas hendrerit mollis eros, eget faucibus quam dignissim vel.&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;

&lt;/div&gt;</pre>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        
        <div id="tabsSimple" class="col-xl-12 col-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Vertical Pill</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">

                    <div class="vertical-pill">
                        
                        <div class="d-flex align-items-start">
                            <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</button>
                                <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</button>
                                <button class="nav-link" id="v-pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#v-pills-disabled" type="button" role="tab" aria-controls="v-pills-disabled" aria-selected="false" disabled>Disabled</button>
                                <button class="nav-link" id="v-pills-contact-tab" data-bs-toggle="pill" data-bs-target="#v-pills-contact" type="button" role="tab" aria-controls="v-pills-contact" aria-selected="false">Contact</button>
                            </div>
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
                                    <p>Etiam iaculis imperdiet maximus. Curabitur at tempus massa, a aliquet ex. Aliquam faucibus sapien ut ex vulputate interdum. Quisque in ex sed eros malesuada vehicula. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Maecenas massa felis, maximus eu risus ut, finibus feugiat neque. In id dictum elit.</p>
                                    <p>Aenean ut aliquet dolor. Integer accumsan odio non dignissim lobortis. Sed rhoncus ante eros, vel ullamcorper orci molestie congue. Phasellus vel faucibus dolor. Morbi magna eros, vulputate eu sem nec, venenatis egestas quam. Maecenas hendrerit mollis eros, eget faucibus quam dignissim vel.</p>
                                </div>
                                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">
                                    <p>Aliquam at sem nunc. Maecenas tincidunt lacus justo, non ultrices mauris egestas eu. Vestibulum ut ipsum ac eros rutrum blandit in eget quam. Nullam et lobortis nunc. Nam sodales, ante sed sodales rhoncus, diam ipsum faucibus mauris, non interdum nisl lacus vel justo.</p>
                                    <p>Sed imperdiet mi tincidunt mauris convallis, ut ullamcorper nunc interdum. Praesent maximus massa eu varius gravida. Nullam in malesuada enim. Morbi commodo pellentesque velit sodales pretium. Mauris scelerisque augue vel est pulvinar laoreet.</p>
                                </div>
                                <div class="tab-pane fade" id="v-pills-disabled" role="tabpanel" aria-labelledby="v-pills-disabled-tab" tabindex="0">
                                    <p>In diam odio, ullamcorper vitae dolor vel, lobortis rhoncus odio. Nullam lacinia euismod ex vitae ullamcorper. Integer fringilla arcu nunc, et tempus sapien ornare sed. Nam fringilla velit nec bibendum consectetur. Etiam pellentesque eu nulla vel tincidunt. </p>
                                    <p>Ut nec nunc sed risus viverra vehicula non non purus. Nunc semper sem ut ante suscipit vulputate. Integer tempus ornare ligula, sed lacinia leo posuere eu. </p>
                                </div>
                                <div class="tab-pane fade" id="v-pills-contact" role="tabpanel" aria-labelledby="v-pills-contact-tab" tabindex="0">
                                    <p>Nullam feugiat, sapien a lacinia condimentum, libero nibh fermentum lectus, eu dictum justo ex sit amet neque. Sed felis arcu, efficitur eget diam eget, maximus dapibus enim. Sed vitae varius lorem. Fusce non accumsan diam, quis porttitor dolor. </p>
                                    <p>Aenean ut aliquet dolor. Integer accumsan odio non dignissim lobortis. Sed rhoncus ante eros, vel ullamcorper orci molestie congue. Phasellus vel faucibus dolor. Morbi magna eros, vulputate eu sem nec, venenatis egestas quam. Maecenas hendrerit mollis eros, eget faucibus quam dignissim vel.</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
<pre>&lt;div class=&quot;vertical-pill&quot;&gt;

&lt;div class=&quot;d-flex align-items-start&quot;&gt;
&lt;div class=&quot;nav flex-column nav-pills me-3&quot; id=&quot;v-pills-tab&quot; role=&quot;tablist&quot; aria-orientation=&quot;vertical&quot;&gt;
&lt;button class=&quot;nav-link active&quot; id=&quot;v-pills-home-tab&quot; data-bs-toggle=&quot;pill&quot; data-bs-target=&quot;#v-pills-home&quot; type=&quot;button&quot; role=&quot;tab&quot; aria-controls=&quot;v-pills-home&quot; aria-selected=&quot;true&quot;&gt;Home&lt;/button&gt;
&lt;button class=&quot;nav-link&quot; id=&quot;v-pills-profile-tab&quot; data-bs-toggle=&quot;pill&quot; data-bs-target=&quot;#v-pills-profile&quot; type=&quot;button&quot; role=&quot;tab&quot; aria-controls=&quot;v-pills-profile&quot; aria-selected=&quot;false&quot;&gt;Profile&lt;/button&gt;
&lt;button class=&quot;nav-link&quot; id=&quot;v-pills-disabled-tab&quot; data-bs-toggle=&quot;pill&quot; data-bs-target=&quot;#v-pills-disabled&quot; type=&quot;button&quot; role=&quot;tab&quot; aria-controls=&quot;v-pills-disabled&quot; aria-selected=&quot;false&quot; disabled&gt;Disabled&lt;/button&gt;
&lt;button class=&quot;nav-link&quot; id=&quot;v-pills-contact-tab&quot; data-bs-toggle=&quot;pill&quot; data-bs-target=&quot;#v-pills-contact&quot; type=&quot;button&quot; role=&quot;tab&quot; aria-controls=&quot;v-pills-contact&quot; aria-selected=&quot;false&quot;&gt;Contact&lt;/button&gt;
&lt;/div&gt;
&lt;div class=&quot;tab-content&quot; id=&quot;v-pills-tabContent&quot;&gt;
&lt;div class=&quot;tab-pane fade show active&quot; id=&quot;v-pills-home&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;v-pills-home-tab&quot; tabindex=&quot;0&quot;&gt;
&lt;p&gt;Etiam iaculis imperdiet maximus. Curabitur at tempus massa, a aliquet ex. Aliquam faucibus sapien ut ex vulputate interdum. Quisque in ex sed eros malesuada vehicula. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Maecenas massa felis, maximus eu risus ut, finibus feugiat neque. In id dictum elit.&lt;/p&gt;
&lt;p&gt;Aenean ut aliquet dolor. Integer accumsan odio non dignissim lobortis. Sed rhoncus ante eros, vel ullamcorper orci molestie congue. Phasellus vel faucibus dolor. Morbi magna eros, vulputate eu sem nec, venenatis egestas quam. Maecenas hendrerit mollis eros, eget faucibus quam dignissim vel.&lt;/p&gt;
&lt;/div&gt;
&lt;div class=&quot;tab-pane fade&quot; id=&quot;v-pills-profile&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;v-pills-profile-tab&quot; tabindex=&quot;0&quot;&gt;
&lt;p&gt;Aliquam at sem nunc. Maecenas tincidunt lacus justo, non ultrices mauris egestas eu. Vestibulum ut ipsum ac eros rutrum blandit in eget quam. Nullam et lobortis nunc. Nam sodales, ante sed sodales rhoncus, diam ipsum faucibus mauris, non interdum nisl lacus vel justo.&lt;/p&gt;
&lt;p&gt;Sed imperdiet mi tincidunt mauris convallis, ut ullamcorper nunc interdum. Praesent maximus massa eu varius gravida. Nullam in malesuada enim. Morbi commodo pellentesque velit sodales pretium. Mauris scelerisque augue vel est pulvinar laoreet.&lt;/p&gt;
&lt;/div&gt;
&lt;div class=&quot;tab-pane fade&quot; id=&quot;v-pills-disabled&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;v-pills-disabled-tab&quot; tabindex=&quot;0&quot;&gt;
&lt;p&gt;In diam odio, ullamcorper vitae dolor vel, lobortis rhoncus odio. Nullam lacinia euismod ex vitae ullamcorper. Integer fringilla arcu nunc, et tempus sapien ornare sed. Nam fringilla velit nec bibendum consectetur. Etiam pellentesque eu nulla vel tincidunt. &lt;/p&gt;
&lt;p&gt;Ut nec nunc sed risus viverra vehicula non non purus. Nunc semper sem ut ante suscipit vulputate. Integer tempus ornare ligula, sed lacinia leo posuere eu. &lt;/p&gt;
&lt;/div&gt;
&lt;div class=&quot;tab-pane fade&quot; id=&quot;v-pills-contact&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;v-pills-contact-tab&quot; tabindex=&quot;0&quot;&gt;
&lt;p&gt;Nullam feugiat, sapien a lacinia condimentum, libero nibh fermentum lectus, eu dictum justo ex sit amet neque. Sed felis arcu, efficitur eget diam eget, maximus dapibus enim. Sed vitae varius lorem. Fusce non accumsan diam, quis porttitor dolor. &lt;/p&gt;
&lt;p&gt;Aenean ut aliquet dolor. Integer accumsan odio non dignissim lobortis. Sed rhoncus ante eros, vel ullamcorper orci molestie congue. Phasellus vel faucibus dolor. Morbi magna eros, vulputate eu sem nec, venenatis egestas quam. Maecenas hendrerit mollis eros, eget faucibus quam dignissim vel.&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;

&lt;/div&gt;</pre>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <div id="tabsSimple" class="col-xl-12 col-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Vertical Pill with Icons</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">

                    <div class="vertical-pill">
                        
                        <div class="d-flex align-items-start">
                            <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <button class="nav-link active" id="v-pills-home-icon-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home-icon" type="button" role="tab" aria-controls="v-pills-home-icon" aria-selected="true">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                    Home
                                </button>
                                <button class="nav-link" id="v-pills-profile-icon-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile-icon" type="button" role="tab" aria-controls="v-pills-profile-icon" aria-selected="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                    Profile
                                </button>
                                <button class="nav-link" id="v-pills-disabled-icon-tab" data-bs-toggle="pill" data-bs-target="#v-pills-disabled-icon" type="button" role="tab" aria-controls="v-pills-disabled-icon" aria-selected="false" disabled>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                                    Disabled
                                </button>
                                <button class="nav-link" id="v-pills-contact-icon-tab" data-bs-toggle="pill" data-bs-target="#v-pills-contact-icon" type="button" role="tab" aria-controls="v-pills-contact-icon" aria-selected="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell-off"><path d="M13.73 21a2 2 0 0 1-3.46 0"></path><path d="M18.63 13A17.89 17.89 0 0 1 18 8"></path><path d="M6.26 6.26A5.86 5.86 0 0 0 6 8c0 7-3 9-3 9h14"></path><path d="M18 8a6 6 0 0 0-9.33-5"></path><line x1="1" y1="1" x2="23" y2="23"></line></svg>
                                    Contact
                                </button>
                            </div>
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-home-icon" role="tabpanel" aria-labelledby="v-pills-home-icon-tab" tabindex="0">
                                    <p>Etiam iaculis imperdiet maximus. Curabitur at tempus massa, a aliquet ex. Aliquam faucibus sapien ut ex vulputate interdum. Quisque in ex sed eros malesuada vehicula. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Maecenas massa felis, maximus eu risus ut, finibus feugiat neque. In id dictum elit.</p>
                                    <p>Aenean ut aliquet dolor. Integer accumsan odio non dignissim lobortis. Sed rhoncus ante eros, vel ullamcorper orci molestie congue. Phasellus vel faucibus dolor. Morbi magna eros, vulputate eu sem nec, venenatis egestas quam. Maecenas hendrerit mollis eros, eget faucibus quam dignissim vel.</p>
                                </div>
                                <div class="tab-pane fade" id="v-pills-profile-icon" role="tabpanel" aria-labelledby="v-pills-profile-icon-tab" tabindex="0">
                                    <p>Aliquam at sem nunc. Maecenas tincidunt lacus justo, non ultrices mauris egestas eu. Vestibulum ut ipsum ac eros rutrum blandit in eget quam. Nullam et lobortis nunc. Nam sodales, ante sed sodales rhoncus, diam ipsum faucibus mauris, non interdum nisl lacus vel justo.</p>
                                    <p>Sed imperdiet mi tincidunt mauris convallis, ut ullamcorper nunc interdum. Praesent maximus massa eu varius gravida. Nullam in malesuada enim. Morbi commodo pellentesque velit sodales pretium. Mauris scelerisque augue vel est pulvinar laoreet.</p>
                                </div>
                                <div class="tab-pane fade" id="v-pills-disabled-icon" role="tabpanel" aria-labelledby="v-pills-disabled-icon-tab" tabindex="0">
                                    <p>In diam odio, ullamcorper vitae dolor vel, lobortis rhoncus odio. Nullam lacinia euismod ex vitae ullamcorper. Integer fringilla arcu nunc, et tempus sapien ornare sed. Nam fringilla velit nec bibendum consectetur. Etiam pellentesque eu nulla vel tincidunt. </p>
                                    <p>Ut nec nunc sed risus viverra vehicula non non purus. Nunc semper sem ut ante suscipit vulputate. Integer tempus ornare ligula, sed lacinia leo posuere eu. </p>
                                </div>
                                <div class="tab-pane fade" id="v-pills-contact-icon" role="tabpanel" aria-labelledby="v-pills-contact-icon-tab" tabindex="0">
                                    <p>Nullam feugiat, sapien a lacinia condimentum, libero nibh fermentum lectus, eu dictum justo ex sit amet neque. Sed felis arcu, efficitur eget diam eget, maximus dapibus enim. Sed vitae varius lorem. Fusce non accumsan diam, quis porttitor dolor. </p>
                                    <p>Aenean ut aliquet dolor. Integer accumsan odio non dignissim lobortis. Sed rhoncus ante eros, vel ullamcorper orci molestie congue. Phasellus vel faucibus dolor. Morbi magna eros, vulputate eu sem nec, venenatis egestas quam. Maecenas hendrerit mollis eros, eget faucibus quam dignissim vel.</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
<pre>&lt;div class=&quot;vertical-pill&quot;&gt;

&lt;div class=&quot;d-flex align-items-start&quot;&gt;
&lt;div class=&quot;nav flex-column nav-pills me-3&quot; id=&quot;v-pills-tab&quot; role=&quot;tablist&quot; aria-orientation=&quot;vertical&quot;&gt;
&lt;button class=&quot;nav-link active&quot; id=&quot;v-pills-home-icon-tab&quot; data-bs-toggle=&quot;pill&quot; data-bs-target=&quot;#v-pills-home-icon&quot; type=&quot;button&quot; role=&quot;tab&quot; aria-controls=&quot;v-pills-home-icon&quot; aria-selected=&quot;true&quot;&gt;
&lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-home&quot;&gt;&lt;path d=&quot;M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z&quot;&gt;&lt;/path&gt;&lt;polyline points=&quot;9 22 9 12 15 12 15 22&quot;&gt;&lt;/polyline&gt;&lt;/svg&gt;
Home
&lt;/button&gt;
&lt;button class=&quot;nav-link&quot; id=&quot;v-pills-profile-icon-tab&quot; data-bs-toggle=&quot;pill&quot; data-bs-target=&quot;#v-pills-profile-icon&quot; type=&quot;button&quot; role=&quot;tab&quot; aria-controls=&quot;v-pills-profile-icon&quot; aria-selected=&quot;false&quot;&gt;
&lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-user&quot;&gt;&lt;path d=&quot;M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2&quot;&gt;&lt;/path&gt;&lt;circle cx=&quot;12&quot; cy=&quot;7&quot; r=&quot;4&quot;&gt;&lt;/circle&gt;&lt;/svg&gt;
Profile
&lt;/button&gt;
&lt;button class=&quot;nav-link&quot; id=&quot;v-pills-disabled-icon-tab&quot; data-bs-toggle=&quot;pill&quot; data-bs-target=&quot;#v-pills-disabled-icon&quot; type=&quot;button&quot; role=&quot;tab&quot; aria-controls=&quot;v-pills-disabled-icon&quot; aria-selected=&quot;false&quot; disabled&gt;
&lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-phone&quot;&gt;&lt;path d=&quot;M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z&quot;&gt;&lt;/path&gt;&lt;/svg&gt;
Disabled
&lt;/button&gt;
&lt;button class=&quot;nav-link&quot; id=&quot;v-pills-contact-icon-tab&quot; data-bs-toggle=&quot;pill&quot; data-bs-target=&quot;#v-pills-contact-icon&quot; type=&quot;button&quot; role=&quot;tab&quot; aria-controls=&quot;v-pills-contact-icon&quot; aria-selected=&quot;false&quot;&gt;
&lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-bell-off&quot;&gt;&lt;path d=&quot;M13.73 21a2 2 0 0 1-3.46 0&quot;&gt;&lt;/path&gt;&lt;path d=&quot;M18.63 13A17.89 17.89 0 0 1 18 8&quot;&gt;&lt;/path&gt;&lt;path d=&quot;M6.26 6.26A5.86 5.86 0 0 0 6 8c0 7-3 9-3 9h14&quot;&gt;&lt;/path&gt;&lt;path d=&quot;M18 8a6 6 0 0 0-9.33-5&quot;&gt;&lt;/path&gt;&lt;line x1=&quot;1&quot; y1=&quot;1&quot; x2=&quot;23&quot; y2=&quot;23&quot;&gt;&lt;/line&gt;&lt;/svg&gt;
Contact
&lt;/button&gt;
&lt;/div&gt;
&lt;div class=&quot;tab-content&quot; id=&quot;v-pills-tabContent&quot;&gt;
&lt;div class=&quot;tab-pane fade show active&quot; id=&quot;v-pills-home-icon&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;v-pills-home-icon-tab&quot; tabindex=&quot;0&quot;&gt;
&lt;p&gt;Etiam iaculis imperdiet maximus. Curabitur at tempus massa, a aliquet ex. Aliquam faucibus sapien ut ex vulputate interdum. Quisque in ex sed eros malesuada vehicula. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Maecenas massa felis, maximus eu risus ut, finibus feugiat neque. In id dictum elit.&lt;/p&gt;
&lt;p&gt;Aenean ut aliquet dolor. Integer accumsan odio non dignissim lobortis. Sed rhoncus ante eros, vel ullamcorper orci molestie congue. Phasellus vel faucibus dolor. Morbi magna eros, vulputate eu sem nec, venenatis egestas quam. Maecenas hendrerit mollis eros, eget faucibus quam dignissim vel.&lt;/p&gt;
&lt;/div&gt;
&lt;div class=&quot;tab-pane fade&quot; id=&quot;v-pills-profile-icon&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;v-pills-profile-icon-tab&quot; tabindex=&quot;0&quot;&gt;
&lt;p&gt;Aliquam at sem nunc. Maecenas tincidunt lacus justo, non ultrices mauris egestas eu. Vestibulum ut ipsum ac eros rutrum blandit in eget quam. Nullam et lobortis nunc. Nam sodales, ante sed sodales rhoncus, diam ipsum faucibus mauris, non interdum nisl lacus vel justo.&lt;/p&gt;
&lt;p&gt;Sed imperdiet mi tincidunt mauris convallis, ut ullamcorper nunc interdum. Praesent maximus massa eu varius gravida. Nullam in malesuada enim. Morbi commodo pellentesque velit sodales pretium. Mauris scelerisque augue vel est pulvinar laoreet.&lt;/p&gt;
&lt;/div&gt;
&lt;div class=&quot;tab-pane fade&quot; id=&quot;v-pills-disabled-icon&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;v-pills-disabled-icon-tab&quot; tabindex=&quot;0&quot;&gt;
&lt;p&gt;In diam odio, ullamcorper vitae dolor vel, lobortis rhoncus odio. Nullam lacinia euismod ex vitae ullamcorper. Integer fringilla arcu nunc, et tempus sapien ornare sed. Nam fringilla velit nec bibendum consectetur. Etiam pellentesque eu nulla vel tincidunt. &lt;/p&gt;
&lt;p&gt;Ut nec nunc sed risus viverra vehicula non non purus. Nunc semper sem ut ante suscipit vulputate. Integer tempus ornare ligula, sed lacinia leo posuere eu. &lt;/p&gt;
&lt;/div&gt;
&lt;div class=&quot;tab-pane fade&quot; id=&quot;v-pills-contact-icon&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;v-pills-contact-icon-tab&quot; tabindex=&quot;0&quot;&gt;
&lt;p&gt;Nullam feugiat, sapien a lacinia condimentum, libero nibh fermentum lectus, eu dictum justo ex sit amet neque. Sed felis arcu, efficitur eget diam eget, maximus dapibus enim. Sed vitae varius lorem. Fusce non accumsan diam, quis porttitor dolor. &lt;/p&gt;
&lt;p&gt;Aenean ut aliquet dolor. Integer accumsan odio non dignissim lobortis. Sed rhoncus ante eros, vel ullamcorper orci molestie congue. Phasellus vel faucibus dolor. Morbi magna eros, vulputate eu sem nec, venenatis egestas quam. Maecenas hendrerit mollis eros, eget faucibus quam dignissim vel.&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;
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