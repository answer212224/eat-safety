<x-rtl.base-layout :scrollspy="false">

    <x-slot:pageTitle>
        {{$title}} 
    </x-slot>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <x-slot:headerFiles>
        <!--  BEGIN CUSTOM STYLE FILE  -->
        <link rel="stylesheet" href="{{asset('plugins-rtl/autocomplete/css/autoComplete.02.css')}}">
        
        @vite(['resources/rtl/scss/light/plugins/autocomplete/css/custom-autoComplete.scss'])
        @vite(['resources/rtl/scss/light/assets/pages/knowledge_base.scss'])

        @vite(['resources/rtl/scss/dark/plugins/autocomplete/css/custom-autoComplete.scss'])
        @vite(['resources/rtl/scss/dark/assets/pages/knowledge_base.scss'])
        <!--  END CUSTOM STYLE FILE  -->

    </x-slot>
    <!-- END GLOBAL MANDATORY STYLES -->
    
    <div class="fq-header-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12 align-self-center order-md-0 order-1">
                    <div class="faq-header-content">
                        <h1 class="mb-4">Knowledge Base</h1>
                        <div class="row">
                            <div class="col-lg-5 mx-auto">
                                <div class="autocomplete-btn">
                                    <input id="example2" class="form-control">
                                    <button class="btn btn-primary">Search</button>
                                </div>
                            </div>
                        </div>
                        <p class="mt-4 mb-0">Search instant answers & questions asked by popular users</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="faq container">

        <div class="faq-layouting layout-spacing">

            <div class="kb-widget-section">

                <div class="row justify-content-center">

                    <div class="col-xxl-2 col-xl-3 col-lg-3 mb-lg-0 col-md-6 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-icon mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg>
                                </div>
                                <h5 class="card-title mb-0">General</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-2 col-xl-3 col-lg-3 mb-lg-0 col-md-6 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-icon mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                </div>
                                <h5 class="card-title mb-0">Quick Support</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-2 col-xl-3 col-lg-3 mb-lg-0 col-md-6 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-icon mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-package"><line x1="16.5" y1="9.4" x2="7.5" y2="4.21"></line><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                                </div>
                                <h5 class="card-title mb-0">Free Updates</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-2 col-xl-3 col-lg-3 mb-lg-0 col-md-6 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-icon mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                                </div>
                                <h5 class="card-title mb-0">Pricing</h5>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
            </div>

            <div class="fq-tab-section">
                <div class="row">
                    <div class="col-md-12">

                        <h2 class="text-center">Some common questions</h2>

                        <div class="accordion" id="pagesKnowledgeBase">
                            <div class="card">
                                <div class="card-header" id="fqheadingOne">
                                    <div class="mb-0" data-bs-toggle="collapse" role="navigation" data-bs-target="#fqcollapseOne" aria-expanded="false" aria-controls="fqcollapseOne">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-code"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg> <span class="faq-q-title">How to install Cork Admin</span> <div class="like-faq"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-thumbs-up"><path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path></svg> <span class="faq-like-count">65</span></div>
                                    </div>
                                </div>
                                <div id="fqcollapseOne" class="collapse" aria-labelledby="fqheadingOne" data-bs-parent="#pagesKnowledgeBase">
                                    <div class="card-body">
                                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="fqheadingTwo">
                                    <div class="mb-0" data-bs-toggle="collapse" role="navigation" data-bs-target="#fqcollapseTwo" aria-expanded="true" aria-controls="fqcollapseTwo">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-code"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg> <span class="faq-q-title">How to use Gulp</span> <div class="like-faq"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-thumbs-up"><path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path></svg> <span class="faq-like-count">20</span></div>
                                    </div>
                                </div>
                                <div id="fqcollapseTwo" class="collapse show" aria-labelledby="fqheadingTwo" data-bs-parent="#pagesKnowledgeBase">
                                    <div class="card-body">
                                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="fqheadingThree">
                                    <div class="mb-0" data-bs-toggle="collapse" role="navigation" data-bs-target="#fqcollapseThree" aria-expanded="false" aria-controls="fqcollapseThree">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-code"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg> <span class="faq-q-title">How to use Browser Sync</span> <div class="like-faq"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-thumbs-up"><path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path></svg> <span class="faq-like-count">33</span></div>
                                    </div>
                                </div>
                                <div id="fqcollapseThree" class="collapse" aria-labelledby="fqheadingThree" data-bs-parent="#pagesKnowledgeBase">
                                    <div class="card-body">
                                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="fqheadingFour">
                                    <div class="mb-0" data-bs-toggle="collapse" role="navigation" data-bs-target="#fqcollapseFour" aria-expanded="false" aria-controls="fqcollapseFour">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-code"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg> <span class="faq-q-title">Sidebar not rendering CSS</span> <div class="like-faq"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-thumbs-up"><path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path></svg> <span class="faq-like-count">14</span></div>
                                    </div>
                                </div>
                                <div id="fqcollapseFour" class="collapse" aria-labelledby="fqheadingFour" data-bs-parent="#pagesKnowledgeBase">
                                    <div class="card-body">
                                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="fqheadingFive">
                                    <div class="mb-0" data-bs-toggle="collapse" role="navigation" data-bs-target="#fqcollapseFive" aria-expanded="false" aria-controls="fqcollapseFive">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-code"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg> <span class="faq-q-title">Compilation Issue</span> <div class="like-faq"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-thumbs-up"><path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path></svg> <span class="faq-like-count">09</span></div>
                                    </div>
                                </div>
                                <div id="fqcollapseFive" class="collapse" aria-labelledby="fqheadingFive" data-bs-parent="#pagesKnowledgeBase">
                                    <div class="card-body">
                                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="fqheadingSix">
                                    <div class="mb-0" data-bs-toggle="collapse" role="navigation" data-bs-target="#fqcollapseSix" aria-expanded="false" aria-controls="fqcollapseSix">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-code"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg> <span class="faq-q-title">Connect with us Personally</span> <div class="like-faq"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-thumbs-up"><path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path></svg> <span class="faq-like-count">58</span></div>
                                    </div>
                                </div>
                                <div id="fqcollapseSix" class="collapse" aria-labelledby="fqheadingSix" data-bs-parent="#pagesKnowledgeBase">
                                    <div class="card-body">
                                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>                            
            </div>

            <div class="fq-article-section">
                
                <h2>Popular Topics</h2>
                
                <div class="row">
                    <div class="col-lg-3 col-md-6 mb-lg-0 mb-4">
                        <div class="card style-2 mb-md-0 mb-4">
                            <img src="{{Vite::asset('resources/images/masonry-blog-style-3.jpeg')}}" class="card-img-top" alt="...">
                            <div class="card-body px-0 pb-0">
                                <h5 class="card-title mb-3">Excessive sugar is harmful</h5>
                                <div class="media mt-4 mb-0 pt-1">
                                    <img src="{{Vite::asset('resources/images/profile-14.jpeg')}}" class="card-media-image me-3" alt="">
                                    <div class="media-body">
                                        <h4 class="media-heading mb-1">Alma Clark</h4>
                                        <p class="media-text">06 May</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-lg-0 mb-4">
                        <div class="card style-2 mb-md-0 mb-4">
                            <img src="{{Vite::asset('resources/images/grid-blog-style-2.jpeg')}}" class="card-img-top" alt="...">
                            <div class="card-body px-0 pb-0">
                                <h5 class="card-title mb-3">Creative Photography</h5>
                                <div class="media mt-4 mb-0 pt-1">
                                    <img src="{{Vite::asset('resources/images/profile-21.jpeg')}}" class="card-media-image me-3" alt="">
                                    <div class="media-body">
                                        <h4 class="media-heading mb-1">Vincent</h4>
                                        <p class="media-text">09 June</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-md-0 mb-4">
                        <div class="card style-2 mb-md-0 mb-4">
                            <img src="{{Vite::asset('resources/images/list-blog-style-3.jpeg')}}" class="card-img-top" alt="...">
                            <div class="card-body px-0 pb-0">
                                <h5 class="card-title mb-3">Plan your next trip</h5>
                                <div class="media mt-4 mb-0 pt-1">
                                    <img src="{{Vite::asset('resources/images/profile-2.jpeg')}}" class="card-media-image me-3" alt="">
                                    <div class="media-body">
                                        <h4 class="media-heading mb-1">Vanessa Kirby</h4>
                                        <p class="media-text">06 July</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card style-2 mb-md-0 mb-4">
                            <img src="{{Vite::asset('resources/images/masonry-blog-style-4.jpeg')}}" class="card-img-top" alt="...">
                            <div class="card-body px-0 pb-0">
                                <h5 class="card-title mb-3">My latest Vlog</h5>
                                <div class="media mt-4 mb-0 pt-1">
                                    <img src="{{Vite::asset('resources/images/profile-13.jpeg')}}" class="card-media-image me-3" alt="">
                                    <div class="media-body">
                                        <h4 class="media-heading mb-1">David Andrason</h4>
                                        <p class="media-text">07 July</p>
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
        <script src="{{asset('plugins-rtl/autocomplete/autoComplete.min.js')}}"></script>   
        @vite(['resources/rtl/assets/js/pages/knowledge-base.js'])
    </x-slot>
    <!--  END CUSTOM SCRIPTS FILE  -->
</x-rtl.base-layout>