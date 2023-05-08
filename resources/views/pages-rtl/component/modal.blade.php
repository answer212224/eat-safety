<x-rtl.base-layout :scrollspy="true">

    <x-slot:pageTitle>
        {{$title}} 
    </x-slot>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <x-slot:headerFiles>
        <!--  BEGIN CUSTOM STYLE FILE  -->
        @vite(['resources/rtl/scss/light/assets/components/carousel.scss'])
        @vite(['resources/rtl/scss/light/assets/components/modal.scss'])
        @vite(['resources/rtl/scss/light/assets/components/tabs.scss'])
        @vite(['resources/rtl/scss/dark/assets/components/carousel.scss'])
        @vite(['resources/rtl/scss/dark/assets/components/modal.scss'])
        @vite(['resources/rtl/scss/dark/assets/components/tabs.scss'])
        <link rel="stylesheet" href="{{asset('plugins-rtl/animate/animate.css')}}">
        <link rel="stylesheet" href="{{asset('plugins-rtl/filepond/filepond.min.css')}}">
        <link rel="stylesheet" href="{{asset('plugins-rtl/filepond/FilePondPluginImagePreview.min.css')}}">
        @vite(['resources/rtl/scss/light/plugins/filepond/custom-filepond.scss'])
        @vite(['resources/rtl/scss/dark/plugins/filepond/custom-filepond.scss'])
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
                <li class="breadcrumb-item active" aria-current="page">Modal</li>
            </ol>
        </nav>
    </div>
    <!-- /BREADCRUMB -->

    <div id="navSection" data-bs-spy="affix" class="nav  sidenav">
        <div class="sidenav-content">
            <a href="#modalBasic" class="active nav-link">Basic</a>
            <a href="#modalVerticallyCentered" class="nav-link">Vertically Centered</a>
            <a href="#modalRemoveAnimation" class="nav-link">Remove animation</a>
            <a href="#modalOptionalSizes" class="nav-link">Optional sizes</a>
            <a href="#modalCustom" class="nav-link">Custom</a>
            <a href="#modalVideo" class="nav-link">Video</a>
            <a href="#modalAnimationStyleModal" class="nav-link">Animation Style Modal</a>
        </div>
    </div>

    <div class="row layout-top-spacing">
        <div id="modalBasic" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Basic</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">

                    <!-- Button trigger modal -->
                    <div class="text-center">
                        <button type="button" class="btn btn-primary mr-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                          Launch modal
                        </button>
                    </div>

                    <div class="code-section-container show-code">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;!-- Modal --&gt;
&lt;div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"&gt;
&lt;div class="modal-dialog" role="document"&gt;
&lt;div class="modal-content"&gt;
&lt;div class="modal-header"&gt;
&lt;h5 class="modal-title" id="exampleModalLabel"&gt;Modal title&lt;/h5&gt;
&lt;button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"&gt;
  &lt;svg&gt; ... &lt;/svg&gt;
&lt;/button&gt;
&lt;/div&gt;
&lt;div class="modal-body"&gt;
&lt;p class="modal-text"&gt;Mauris mi tellus, pharetra vel mattis sed, tempus ultrices eros. Phasellus egestas sit amet velit sed luctus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse potenti. Vivamus ultrices sed urna ac pulvinar. Ut sit amet ullamcorper mi. &lt;/p&gt;
&lt;/div&gt;
&lt;div class="modal-footer"&gt;
&lt;button class="btn btn btn-light-dark" data-bs-dismiss="modal"&gt;&lt;i class="flaticon-cancel-12"&gt;&lt;/i&gt; Discard&lt;/button&gt;
&lt;button type="button" class="btn btn-primary"&gt;Save&lt;/button&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;</pre>
                        </div>
                    </div>


                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                      <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p class="modal-text">Mauris mi tellus, pharetra vel mattis sed, tempus ultrices eros. Phasellus egestas sit amet velit sed luctus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse potenti. Vivamus ultrices sed urna ac pulvinar. Ut sit amet ullamcorper mi. </p>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-light-dark" data-bs-dismiss="modal">Discard</button>
                                    <button type="button" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="modalVerticallyCentered" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Vertically centered</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <p class="mb-3">Use <code>.modal-dialog-centered</code> class to vertically align modal.</p>

                    <div class="text-center">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary mb-2 mr-2" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                          Launch modal
                        </button>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalCenterTitle">Vertically Aligned</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                      <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <h4 class="modal-heading mb-4 mt-2">Aligned Center</h4>
                                        <p class="modal-text">In hac habitasse platea dictumst. Proin sollicitudin et lacus in tincidunt. Integer nisl ex, sollicitudin eget nulla nec, pharetra lacinia nisl. Aenean nec nunc ex. Integer varius neque at dolor scelerisque porttitor.</p>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-light-dark" data-bs-dismiss="modal">Discard</button>
                                    <button type="button" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div id="modalRemoveAnimation" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Remove animation</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <p class="mb-3">Remove <code>.fade</code> class to remove animation.</p>
                    <div class="text-center">
                        <button type="button" class="btn btn-primary mb-2 mr-2" data-bs-toggle="modal" data-bs-target="#exampleModalRemoveAnimation">
                            Launch modal
                        </button> 
                    </div>
                    <div id="exampleModalRemoveAnimation" class="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalPopoversLabel">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header" id="exampleModalPopoversLabel">
                            <h5 class="modal-title" id="exampleModalRemoveAnimationLabel1">No Animations</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                              <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                            </button>
                          </div>
                          <div class="modal-body">
                              <p class="modal-text">Proin sollicitudin et lacus in tincidunt. Integer nisl ex, sollicitudin eget nulla nec, pharetra lacinia nisl. Aenean nec nunc ex. Integer varius neque at dolor scelerisque porttitor. </p>
                          </div>
                          <div class="modal-footer">
                            <button class="btn btn-light-dark" data-bs-dismiss="modal">Discard</button>
                            <button type="button" class="btn btn-primary">Save</button>
                          </div>
                        </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="modalOptionalSizes" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Optional sizes</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">

                    <p class="mb-3">Use <code>.modal-xl</code> class for extra large, <code>.modal-lg</code> class for large and <code>.modal-sm</code> for small ( modal ).</p>

                    <div class="text-center">
                        <!-- xtra Large modal -->
                        <button type="button" class="btn btn-primary mb-2 me-4" data-bs-toggle="modal" data-bs-target=".bd-example-modal-xl">Extra large</button>
                        <!-- Lage modal -->
                        <button type="button" class="btn btn-primary mb-2 me-4" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg">Large</button>
                        <!-- Small modal -->
                        <button type="button" class="btn btn-primary mb-2 me-4" data-bs-toggle="modal" data-bs-target=".bd-example-modal-sm">Small</button>
                    </div>

                    <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-xl" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="myExtraLargeModalLabel">Extra Large</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                  <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p class="modal-text">Mauris mi tellus, pharetra vel mattis sed, tempus ultrices eros. Phasellus egestas sit amet velit sed luctus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse potenti. Vivamus ultrices sed urna ac pulvinar. Ut sit amet ullamcorper mi.</p>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-light-dark" data-bs-dismiss="modal">Discard</button>
                                <button type="button" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                      </div>
                    </div>
                    
                    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="myLargeModalLabel">Large</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                      <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p class="modal-text">Mauris mi tellus, pharetra vel mattis sed, tempus ultrices eros. Phasellus egestas sit amet velit sed luctus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse potenti. Vivamus ultrices sed urna ac pulvinar. Ut sit amet ullamcorper mi.</p>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-light-dark" data-bs-dismiss="modal">Discard</button>
                                    <button type="button" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-sm" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="mySmallModalLabel">Small</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                      <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p class="modal-text">Mauris mi tellus, pharetra vel mattis sed, tempus ultrices eros. Phasellus egestas sit amet velit sed luctus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse potenti. Vivamus ultrices sed urna ac pulvinar. Ut sit amet ullamcorper mi.</p>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-light-dark" data-bs-dismiss="modal">Discard</button>
                                    <button type="button" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        
    </div>

    <div class="row">

        <div id="modalCustom" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Custom</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area  text-center advance-content signinModal-content">
                    <p class="mb-4">More Custom Modals.</p>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-warning mb-2 me-4" data-bs-toggle="modal" data-bs-target="#standardModal">
                      Standard
                    </button>

                    <!-- Modal -->
                    <div class="modal fade modal-notification" id="standardModal" tabindex="-1" role="dialog" aria-labelledby="standardModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document" id="standardModalLabel">
                        <div class="modal-content">
                          <div class="modal-body text-center">
                              <div class="icon-content">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg>
                              </div>
                              <p class="modal-text">Vivamus vitae hendrerit neque. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi consequat auctor turpis, vitae dictum augue efficitur vitae. Vestibulum a risus ipsum. Quisque nec lacus dolor. Quisque ornare tempor orci id rutrum.</p>
                           </div>
                          <div class="modal-footer justify-content-between">
                            <button class="btn btn-light-dark" data-bs-dismiss="modal">Discard</button>
                            <button type="button" class="btn btn-primary">Save</button>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-info mb-2 me-4" data-bs-toggle="modal" data-bs-target="#tabsModal">
                      Tabs
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="tabsModal" tabindex="-1" role="dialog" aria-labelledby="tabsModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="tabsModalLabel">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
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
                            </div>
                          <div class="modal-footer">
                            <button class="btn btn-light-dark" data-bs-dismiss="modal">Discard</button>
                            <button type="button" class="btn btn-primary">Save</button>
                          </div>
                        </div>
                      </div>
                    </div>


                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger mb-2 me-4" data-bs-toggle="modal" data-bs-target="#profileModal">
                      Profile
                    </button>

                    <!-- Modal -->
                    <div class="modal fade profileModal-modal" id="profileModal" tabindex="-1" role="dialog" aria-labelledby="profileModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">

                            <div class="modal-header" id="profileModalLabel">
                                <h5 class="modal-title">Update <b>Profile</b></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"><svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                            </div>
                            <div class="modal-body">

                                <div class="profile-image">

                                    <!-- // The classic file input element we'll enhance
                                    // to a file pond, we moved the configuration
                                    // properties to JavaScript -->
                                
                                    <div class="img-uploader-content">
                                        <input type="file" class="filepond"
                                            name="filepond" accept="image/png, image/jpeg, image/gif"/>
                                    </div>
                                
                                </div>
                                
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-light-danger mt-2 mb-2 btn-no-effect" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary mt-2 mb-2 btn-no-effect" data-bs-dismiss="modal">Update</button>
                            </div>
                          </div>
                        </div>
                    </div>

                    <!-- Form Button trigger modal -->
                    <button type="button" class="btn btn-dark mb-2 me-4" data-bs-toggle="modal" data-bs-target="#inputFormModal">
                        Form
                    </button>

                     <!-- Modal -->
                     <div class="modal fade inputForm-modal" id="inputFormModal" tabindex="-1" role="dialog" aria-labelledby="inputFormModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">

                            <div class="modal-header" id="inputFormModalLabel">
                                <h5 class="modal-title">Welcome to <b>Cork Admin</b></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"><svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                            </div>
                            <div class="modal-body">
                                <form class="mt-0">
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <rect x="3" y="5" width="18" height="14" rx="2"></rect>
                                                    <polyline points="3 7 12 13 21 7"></polyline>
                                                </svg>
                                            </span>
                                            <input type="text" class="form-control" placeholder="Email" aria-label="email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-lock" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <rect x="5" y="11" width="14" height="10" rx="2"></rect>
                                                    <circle cx="12" cy="16" r="1"></circle>
                                                    <path d="M8 11v-4a4 4 0 0 1 8 0v4"></path>
                                                </svg>
                                            </span>
                                            <input type="password" class="form-control" placeholder="Password" aria-label="password">
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <div class="form-check form-check-primary form-check-inline">
                                            <input class="form-check-input" type="checkbox" value="" id="form-check-primary">
                                            <label class="form-check-label mb-0" for="form-check-primary">
                                                Remember me
                                            </label>
                                        </div>

                                        <a href="javascript:void(0);">Forget Password?</a>
                                    </div>
                                    
                                </form>

                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-light-danger mt-2 mb-2 btn-no-effect" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary mt-2 mb-2 btn-no-effect" data-bs-dismiss="modal">Sign in</button>
                            </div>
                          </div>
                        </div>
                    </div>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-success mb-2 me-4" data-bs-toggle="modal" data-bs-target="#sliderModal">
                      Carousel
                    </button>

                    <!-- Modal -->

                    <div class="modal fade" id="sliderModal" tabindex="-1" role="dialog" aria-labelledby="basicModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" id="basicModalLabel" role="document">
                          <div class="modal-content">
                              <div class="modal-body p-0">
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                  </button>

                                  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
                                        <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
                                        <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img class="d-block w-100" src="{{Vite::asset('resources/images/1.jpeg')}}" alt="First slide">
                                            <div class="carousel-caption d-none d-sm-block">
                                                <h3>First slide</h3>
                                                <h5>Lorem ipsum dolor sit amet, dolore magna aliqua.</h5>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="{{Vite::asset('resources/images/3.jpeg')}}" alt="Second slide">
                                            <div class="carousel-caption d-none d-sm-block">
                                                <h3>Second slide</h3>
                                                <h5>Lorem ipsum dolor sit amet, dolore magna aliqua.</h5>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="{{Vite::asset('resources/images/2.jpg')}}" alt="Third slide">
                                            <div class="carousel-caption d-none d-sm-block">
                                                <h3>Third slide</h3>
                                                <h5>Lorem ipsum dolor sit amet, dolore magna aliqua.</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </a>
                                </div>
                              </div>
                          </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        
        <div id="modalVideo" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Video</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area  text-center modal-video">

                    <p class="mb-3">Bootstap Modal has been extended to use videos inside them.</p>

                    <button id="yt-video-link" type="button" class="btn btn-primary mb-2 me-4">Play Youtube</button>

                    <!-- Modal -->
                    <div class="modal fade" id="videoMedia1" tabindex="-1" role="dialog" aria-labelledby="videoMedia1Label" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header" id="videoMedia1Label">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                      <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                    </button>
                                </div>
                                <div class="modal-body p-0">
                                    <div class="video-container yt-container">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button id="vimeo-video-link" type="button" class="btn btn-primary mb-2 mr-2">Play Vimeo</button>
                    <!-- Modal -->
                    <div class="modal fade" id="videoMedia2" tabindex="-1" role="dialog" aria-labelledby="videoMedia2Label" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header" id="videoMedia2Label">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                      <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                    </button>
                                </div>
                                <div class="modal-body p-0">
                                    <div class="video-container vimeo-container">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
===========
Youtube
===========

&lt;button id="yt-video-link" type="button" class="btn btn-primary mb-2 me-4"&gt;Play Youtube&lt;/button&gt;
&lt;!-- Modal --&gt;
&lt;div class="modal fade" id="videoMedia1" tabindex="-1" role="dialog" aria-labelledby="videoMedia1Label" aria-hidden="true"&gt;
&lt;div class="modal-dialog modal-lg" role="document"&gt;
&lt;div class="modal-content"&gt;
&lt;div class="modal-header" id="videoMedia1Label"&gt;
&lt;button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"&gt;
  &lt;svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"&gt;&lt;line x1="18" y1="6" x2="6" y2="18"&gt;&lt;/line&gt;&lt;line x1="6" y1="6" x2="18" y2="18"&gt;&lt;/line&gt;&lt;/svg&gt;
&lt;/button&gt;
&lt;/div&gt;
&lt;div class="modal-body p-0"&gt;
&lt;div class="video-container"&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;

===========
Vimeo
===========

&lt;button id="vimeo-video-link" type="button" class="btn btn-primary mb-2 mr-2"&gt;Play Vimeo&lt;/button&gt;
&lt;!-- Modal --&gt;
&lt;div class="modal fade" id="videoMedia2" tabindex="-1" role="dialog" aria-labelledby="videoMedia2Label" aria-hidden="true"&gt;
&lt;div class="modal-dialog modal-lg" role="document"&gt;
&lt;div class="modal-content"&gt;
&lt;div class="modal-header" id="videoMedia2Label"&gt;
&lt;button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"&gt;
  &lt;svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"&gt;&lt;line x1="18" y1="6" x2="6" y2="18"&gt;&lt;/line&gt;&lt;line x1="6" y1="6" x2="18" y2="18"&gt;&lt;/line&gt;&lt;/svg&gt;
&lt;/button&gt;
&lt;/div&gt;
&lt;div class="modal-body p-0"&gt;
&lt;div class="video-container"&gt;
&lt;/div&gt;
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
    
    <div class="row">
        <div id="modalAnimationStyleModal" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Animation Style Modal</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area  text-center">
                    <p class="mb-2 mt-3">Use the following class given below for modal animation.</p>

                    <div class="row">
                            
                        <div class="col-lg-6">
                            <p class="mb-2 mt-3"><code>.fadeInDown</code></p>
                            <!-- Fade in down modal -->
                            <button type="button" class="btn btn-primary mb-2 mr-2" data-bs-toggle="modal" data-bs-target="#fadeinModal">FadeIn</button>
                        </div>
                        <div class="col-lg-6">
                            <p class="mb-2 mt-3"><code>.slideInUp</code></p>
                            <!-- Slide in up modal -->
                            <button type="button" class="btn btn-warning mb-2 mr-2" data-bs-toggle="modal" data-bs-target="#slideupModal">SlideIn Up</button>
                        </div>
                        <div class="col-lg-6">
                            <p class="mb-2 mt-3"><code>.fadeInUp</code></p>
                            <!-- Fade in up modal -->
                            <button type="button" class="btn btn-success mb-2 mr-2" data-bs-toggle="modal" data-bs-target="#fadeupModal">FadeIn Up</button>
                        </div>
                        <div class="col-lg-6">
                            <p class="mb-2 mt-3"><code>.rotateInDownLeft</code></p>
                            <!-- Rotate in right modal -->
                            <button type="button" class="btn btn-info mb-2 mr-2" data-bs-toggle="modal" data-bs-target="#rotateleftModal">RotateIn Left</button>
                        </div>
                        <div class="col-lg-6">
                            <p class="mb-2 mt-3"><code>.fadeInLeft</code></p>
                            <!-- Fade in left modal -->
                            <button type="button" class="btn btn-secondary mb-2 mr-2" data-bs-toggle="modal" data-bs-target="#fadeleftModal">FadeIn Left</button>
                        </div>
                        <div class="col-lg-6">
                            <p class="mb-2 mt-3"><code>.zoomInUp</code></p>
                            <!-- Zoom in up modal -->
                            <button type="button" class="btn btn-danger mb-2 mr-2" data-bs-toggle="modal" data-bs-target="#zoomupModal">ZoomIn Up</button>
                        </div>
                        <div class="col-lg-6">
                            <p class="mb-2 mt-3"><code>.fadeInRight</code></p>
                            <!-- Fade in right modal -->
                            <button type="button" class="btn btn-dark mb-2 mr-2" data-bs-toggle="modal" data-bs-target="#faderightModal">FadeIn Right</button>
                        </div>

                    </div>

                        <div id="fadeinModal" class="modal animated fadeInDown" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Modal Header</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                          <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                        </button>
                                    </div>

                                    <div class="modal-body">
                                          <p class="modal-text">Nulla imperdiet sed ipsum non lacinia. Duis accumsan egestas nulla, vel commodo orci tempus quis. Fusce malesuada felis nec vehicula luctus. Proin luctus sapien nunc, quis varius dui gravida quis. Sed eget elit a augue porta elementum ut nec nibh. Morbi non dolor ac quam commodo interdum.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-light-dark" data-bs-dismiss="modal">Discard</button>
                                        <button type="button" class="btn btn-primary">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                        <div id="slideupModal" class="modal animated slideInUp custo-slideInUp" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Modal Header</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                          <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                      <p class="modal-text">Nulla imperdiet sed ipsum non lacinia. Duis accumsan egestas nulla, vel commodo orci tempus quis. Fusce malesuada felis nec vehicula luctus. Proin luctus sapien nunc, quis varius dui gravida quis. Sed eget elit a augue porta elementum ut nec nibh. Morbi non dolor ac quam commodo interdum.</p>
                                    </div>
                                    <div class="modal-footer md-button">
                                        <button class="btn btn-light-dark" data-bs-dismiss="modal">Discard</button>
                                        <button type="button" class="btn btn-primary">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                        <div id="fadeupModal" class="modal animated fadeInUp custo-fadeInUp" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Modal Header</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                          <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                          <p class="modal-text">Nulla imperdiet sed ipsum non lacinia. Duis accumsan egestas nulla, vel commodo orci tempus quis. Fusce malesuada felis nec vehicula luctus. Proin luctus sapien nunc, quis varius dui gravida quis. Sed eget elit a augue porta elementum ut nec nibh. Morbi non dolor ac quam commodo interdum.</p>
                                    </div>
                                    <div class="modal-footer md-button">
                                        <button class="btn btn-light-dark" data-bs-dismiss="modal">Discard</button>
                                        <button type="button" class="btn btn-primary">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                        <div id="rotateleftModal" class="modal animated rotateInDownLeft custo-rotateInDownLeft" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Modal Header</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                          <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                          <p class="modal-text">Nulla imperdiet sed ipsum non lacinia. Duis accumsan egestas nulla, vel commodo orci tempus quis. Fusce malesuada felis nec vehicula luctus. Proin luctus sapien nunc, quis varius dui gravida quis. Sed eget elit a augue porta elementum ut nec nibh. Morbi non dolor ac quam commodo interdum.</p>
                                    </div>
                                    <div class="modal-footer md-button">
                                        <button class="btn btn-light-dark" data-bs-dismiss="modal">Discard</button>
                                        <button type="button" class="btn btn-primary">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                        <div id="fadeleftModal" class="modal animated fadeInLeft custo-fadeInLeft" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Modal Header</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                          <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                          <p class="modal-text">Nulla imperdiet sed ipsum non lacinia. Duis accumsan egestas nulla, vel commodo orci tempus quis. Fusce malesuada felis nec vehicula luctus. Proin luctus sapien nunc, quis varius dui gravida quis. Sed eget elit a augue porta elementum ut nec nibh. Morbi non dolor ac quam commodo interdum.</p>
                                    </div>
                                    <div class="modal-footer md-button">
                                        <button class="btn btn-light-dark" data-bs-dismiss="modal">Discard</button>
                                        <button type="button" class="btn btn-primary">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                        <div id="zoomupModal" class="modal animated zoomInUp custo-zoomInUp" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Modal Header</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                          <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                          <p class="modal-text">Nulla imperdiet sed ipsum non lacinia. Duis accumsan egestas nulla, vel commodo orci tempus quis. Fusce malesuada felis nec vehicula luctus. Proin luctus sapien nunc, quis varius dui gravida quis. Sed eget elit a augue porta elementum ut nec nibh. Morbi non dolor ac quam commodo interdum.</p>
                                    </div>
                                    <div class="modal-footer md-button">
                                        <button class="btn btn-light-dark" data-bs-dismiss="modal">Discard</button>
                                        <button type="button" class="btn btn-primary">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="faderightModal" class="modal animated fadeInRight custo-fadeInRight" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Modal Header</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                          <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                          <p class="modal-text">Nulla imperdiet sed ipsum non lacinia. Duis accumsan egestas nulla, vel commodo orci tempus quis. Fusce malesuada felis nec vehicula luctus. Proin luctus sapien nunc, quis varius dui gravida quis. Sed eget elit a augue porta elementum ut nec nibh. Morbi non dolor ac quam commodo interdum.</p>
                                    </div>
                                    <div class="modal-footer md-button">
                                        <button class="btn btn-light-dark" data-bs-dismiss="modal">Discard</button>
                                        <button type="button" class="btn btn-primary">Save</button>
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

        <script src="{{asset('plugins-rtl/editors/quill/quill.js')}}"></script>
        <script src="{{asset('plugins-rtl/filepond/filepond.min.js')}}"></script>
        <script src="{{asset('plugins-rtl/filepond/FilePondPluginFileValidateType.min.js')}}"></script>
        <script src="{{asset('plugins-rtl/filepond/FilePondPluginImageExifOrientation.min.js')}}"></script>
        <script src="{{asset('plugins-rtl/filepond/FilePondPluginImagePreview.min.js')}}"></script>
        <script src="{{asset('plugins-rtl/filepond/FilePondPluginImageCrop.min.js')}}"></script>
        <script src="{{asset('plugins-rtl/filepond/FilePondPluginImageResize.min.js')}}"></script>
        <script src="{{asset('plugins-rtl/filepond/FilePondPluginImageTransform.min.js')}}"></script>
        <script src="{{asset('plugins-rtl/filepond/filepondPluginFileValidateSize.min.js')}}"></script>

        <script type="module">

            function addVideoInModal(btnSelector, videoSource, modalSelector, iframeHeight, iframeWidth, iframeContainer) {
                var myModal = new bootstrap.Modal(document.getElementById(modalSelector), {
                    keyboard: false
                })            
                document.querySelector(btnSelector).addEventListener('click', function() {
                    var src = videoSource;
                    myModal.show('show');
                    var ifrm = document.createElement("iframe");
                    ifrm.setAttribute("src", src);
                    ifrm.setAttribute('width', iframeWidth);
                    ifrm.setAttribute('height', iframeHeight);
                    ifrm.style.border = "0";
                    ifrm.setAttribute("allow", "encrypted-media");
                    document.querySelector(iframeContainer).appendChild(ifrm);
                })
            }
            
            addVideoInModal('#yt-video-link', 'https://www.youtube.com/embed/YE7VzlLtp-4', 'videoMedia1', '315', '560', '.yt-container')
            
            addVideoInModal('#vimeo-video-link', 'https://player.vimeo.com/video/1084537', 'videoMedia2', '315', '560', '.vimeo-container')
    
    
    
    
            /**
             * ==================
             * Single File Upload
             * ==================
            */
    
            // We register the plugins required to do 
            // image previews, cropping, resizing, etc.
            FilePond.registerPlugin(
            FilePondPluginFileValidateType,
            FilePondPluginImageExifOrientation,
            FilePondPluginImagePreview,
            FilePondPluginImageCrop,
            FilePondPluginImageResize,
            FilePondPluginImageTransform,
            //   FilePondPluginImageEdit
            );
    
            // Select the file input and use 
            // create() to turn it into a pond
            var modalImage = FilePond.create(
            document.querySelector('.filepond'),
            {
                // labelIdle: `<span class="no-image-placeholder"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg></span> <p class="drag-para">Drag & Drop your picture or <span class="filepond--label-action" tabindex="0">Browse</span></p>`,
                imagePreviewHeight: 170,
                imageCropAspectRatio: '1:1',
                imageResizeTargetWidth: 200,
                imageResizeTargetHeight: 200,
                stylePanelLayout: 'compact circle',
                styleLoadIndicatorPosition: 'center bottom',
                styleProgressIndicatorPosition: 'right bottom',
                styleButtonRemoveItemPosition: 'left bottom',
                styleButtonProcessItemPosition: 'right bottom',
            }
            );
    
            const myModalEl = document.getElementById('profileModal')
            myModalEl.addEventListener('shown.bs.modal', event => {
                modalImage.addFiles("{{Vite::asset('resources/images/drag-1.jpeg')}}");
            })
    
        </script>    

    </x-slot>
    <!--  END CUSTOM SCRIPTS FILE  -->
</x-rtl.base-layout>