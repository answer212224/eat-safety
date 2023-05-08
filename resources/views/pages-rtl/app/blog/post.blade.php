<x-rtl.base-layout :scrollspy="false">

    <x-slot:pageTitle>
        {{$title}} 
    </x-slot>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <x-slot:headerFiles>
        <!--  BEGIN CUSTOM STYLE FILE  -->
        @vite(['resources/rtl/scss/light/assets/elements/custom-pagination.scss'])
        @vite(['resources/rtl/scss/light/assets/apps/blog-post.scss'])
        @vite(['resources/rtl/scss/dark/assets/elements/custom-pagination.scss'])
        @vite(['resources/rtl/scss/dark/assets/apps/blog-post.scss'])
        <!--  END CUSTOM STYLE FILE  -->
    </x-slot>
    <!-- END GLOBAL MANDATORY STYLES -->
    
    <!-- BREADCRUMB -->
    <div class="page-meta">
        <nav class="breadcrumb-style-one" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">App</a></li>
                <li class="breadcrumb-item"><a href="#">Blog</a></li>
                <li class="breadcrumb-item active" aria-current="page">Post</li>
            </ol>
        </nav>
    </div>
    <!-- /BREADCRUMB -->

    <div class="row layout-top-spacing">
    
        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-4">


            <div class="single-post-content">

                <div class="featured-image" style='background-image: url("{{Vite::asset('resources/images/lightbox-2.jpeg')}}");'>

                    <div class="featured-image-overlay"></div>

                    <div class="post-header">
                        
                        <div class="post-title">
                            <h1 class="mb-0">List of Best Restaurant WordPress Themes</h1>
                        </div>
                        
                        <div class="post-meta-info d-flex justify-content-between">

                            <div class="media">
                                <img src="{{Vite::asset('resources/images/profile-12.jpeg')}}" alt="profile">
                                <div class="media-body">
                                    <h5>Kelly Young</h5>
                                    <p>15 May 2022</p>
                                </div>
                            </div>

                            <div class="align-self-center">
                                <button class="btn btn-success btn-icon btn-share btn-rounded">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg>
                                </button>
                            </div>
                            
                        </div>

                    </div>
                    
                </div>

                <div class="post-content">

                    <p class="mb-5">Aenean non tempor justo. Donec faucibus sapien a urna interdum porta. Quisque fermentum nisi felis, quis aliquam quam volutpat porta. Nullam aliquet scelerisque massa, quis tincidunt velit. Vivamus semper placerat ornare. Maecenas eget accumsan eros. Donec non felis vitae tortor elementum euismod sit amet vitae risus. Nam nunc turpis, porttitor ut tempor eu, efficitur nec risus.</p>

                    <h4>Cinyras ea tulit in inducit qui mater</h4>

                    <p class="mb-5">Lorem markdownum facit? Hinc tutus serisque, mihi iaculum curam, vicibus aliquando se posses gentis quidem. Meta  tenebat diversa dixerat celeberrimus molle require; prendique urnam  Pyreneus? Haut mei sive digna noctisque percussit dicta, in pars certaminis iuvenalis. Praemonuisse esse  inter in huic, Cinyras pallentem vi sistere cubat ne causa.</p>

                    <h4>Utque tu canibus</h4>

                    <p class="mb-5">Possent quippe. Conata fera ab Hersilie iam auditur haesit. Culpa ignis retia Aonides ictus crescendo micantes, petere, ambustaque vicem in digitos iubet cornigeris.</p>
                    
                    <ul class="mb-5">
                        <li class="mb-1">Consectetur adipiscing elit</li>
                        <li class="mb-1">Integer massa</li>
                        <li class="mb-1">Facilisis nisl aliquet</li>
                    </ul>
                    
                    <h4>Fregit aut Caystro equos</h4>

                    <p>Manet pro aere superest adiacet sua purpura Tereus in multis conantem culpa, inque fingit et referebat? Materiaque mentes et, quo omnia  captiva ore mandat cepit triformis filia. Prius sorte nomina in repellite sentit facunde te aures, vires.</p>
                    
                    
                    <hr class="my-5">

                    <h2 class="my-4">Code Block</h2>

                    <div class="code-section-container show-code">
                            
                        <div class="code-section text-left">
                            <pre>
npm install </pre>
                        </div>
                    </div>

                    <h2 class="mb-4 mt-5">Code Block with Toggle</h2>

                    <div class="code-section-container show-code mb-5">
                            
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;button type=&quot;button&quot; onclick=&quot;document.getElementById('demo').innerHTML = Date()&quot;&gt;
Click me to display Date and Time.
&lt;/button&gt; </pre>
                        </div>
                    </div>

                    <p class="mb-5">Fama creatis cum; ait atque et ictaque stabat, si texit continuere exsatiata vestes, humana arces. Moriens carissime  pudet dextra et aures micantes est, in. Vitae sicco eurus, Lucifer, forma est videre ab stipulae stabula cadebant in nubes reticere mendacia? Adice  Ladon petis. Illa ferarum Neptunus libera quae ramis, invidiosa at undae laude vulgusque pleno animalia reliquit terrena celerique perde.</p>

                    <h4>Nocte populusque</h4>

                    <p>Lorem markdownum, ponere patent ista, Cadme, adesse humum non forem putares; adiuro ore viresque est. Inde labores si sustinet regia, levi oris pascere! Rhodon ad lingua perdidit inpia alis! Maiorque de duro!</p>

                    <p class="mb-5">Sit et angues referente proxima Emathiique nemo: herbae servant eo  corpus cornua tenuata recuso; natis parentem. Nisi nec aquarum, nymphae.</p>
                    
                    <img src="{{Vite::asset('resources/images/lightbox-3.jpeg')}}" alt="image-1" class="full-width img-fluid mt-4 mb-5">

                    <h4>Novato extrema monimenta clivo ille</h4>

                    <p class="mb-5">Recessit mox patrem ille mea, tumulatus teneri hominis, favilla enim recentes deam cur nocte pro eburnea. Favilla iam suis horruerant Chiae quotiensque ingemuit locumque ducere postquam alebat. Iovi caeli esse superet contraria conscia transierant verae; ut vetuere, suo gerat lumina rugis velletque. Facta innecte de relicta Chrysenque morte, laedor dea aequaret dedit! Sustinui attulit proles potentior.</p>

                    
                    <h4>Aliquod corpora sororibus crimine ornata</h4>

                    <p class="mb-5">Est convicia et nubibus negate. In nisi inbellibus sui, cruribus vult hostes solum invitat. Vino faciam stratis; non modo in eurus igitur, ambit, mentitus periclo? Ullo dextra, extemplo commenta ultima, quid ire vos toto quia, in habili Gradivus ferarum certaminis attulerat.</p>
                    

                    <h4>Nemus dolet monstravit</h4>

                    <p class="mb-5">Est et hic volucres, rursus; simul, cauda tamen cacumine pars intendensque . Maius dignior caret coniuge, demugitaeque duce, exponimur anus inritata. Quoque sum casusve corpora, dat caecis doloris scelus domesticus laboris heu quod reliquit. Albenti infra sed Pergama vivere fusus de fecerat sublime prosunt illic. Consensu pavet insistit terras!</p>
                    
                    <hr class="my-5">

                    <div class="text-center mb-5">
                        <img src="{{Vite::asset('resources/images/slider-3.jpeg')}}" alt="image-1" class="img-fluid">
                    </div>

                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>


                </div>
                
                
                <div class="post-info">
                    
                    <hr>

                    <div class="post-tags mt-5">

                        <span class="badge badge-primary mb-2">Admin</span>
                        <span class="badge badge-primary mb-2">Themeforeset</span>
                        <span class="badge badge-primary mb-2">Dashboard</span>
                        <span class="badge badge-primary mb-2">Top 10</span>
                        
                    </div>

                    <div class="post-dynamic-meta mt-5 mb-5">

                        <button class="btn btn-secondary me-4 mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                            <span class="btn-text-inner">1.1k</span>
                        </button>
                        
                        <div class="avatar--group mb-2">
                            <div class="avatar avatar-sm m-0">
                                <img alt="avatar" src="{{Vite::asset('resources/images/profile-16.jpeg')}}" class="rounded-circle">
                            </div>
                            <div class="avatar avatar-sm">
                                <img alt="avatar" src="{{Vite::asset('resources/images/delete-user-4.jpeg')}}" class="rounded-circle">
                            </div>
                            <div class="avatar avatar-sm">
                                <img alt="avatar" src="{{Vite::asset('resources/images/profile-5.jpeg')}}" class="rounded-circle">
                            </div>
                            <div class="avatar avatar-sm">
                                <span class="avatar-title rounded-circle">AG</span>
                            </div>
                        </div>
                    </div>
                    
                    <hr>

                    <h2 class="mb-5">Comments <span class="comment-count">(4)</span></h2>

                    <div class="post-comments">

                        <div class="media mb-5 pb-5 primary-comment">
                            <div class="avatar me-4">
                                <img alt="avatar" src="{{Vite::asset('resources/images/profile-2.jpeg')}}" class="rounded-circle" />
                            </div>
                            <div class="media-body">
                                <h5 class="media-heading mb-1">Daisy Andrason</h5>
                                <div class="meta-info mb-0">14 April</div>
                                <p class="media-text mt-2 mb-0">Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus. Sed dapibus nulla elementum, rutrum neque eu, gravida neque.</p>

                                <button class="btn btn-success btn-icon btn-reply btn-rounded">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                                </button>
                                
                                <div class="media mb-4 mt-4">
                                    <div class="avatar me-4">
                                        <img alt="avatar" src="{{Vite::asset('resources/images/profile-3.jpeg')}}" class="rounded-circle" />
                                    </div>
                                    <div class="media-body">
                                        <h5 class="media-heading mb-1">Xavier</h5>
                                        <div class="meta-info mb-0">15 April</div>
                                        <p class="media-text mt-2 mb-0">Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus. Sed dapibus nulla elementum, rutrum neque eu, gravida neque.</p>
                                    </div>
                                </div>

                                <div class="media mt-4">
                                    <div class="avatar me-4">
                                        <img alt="avatar" src="{{Vite::asset('resources/images/profile-25.jpeg')}}" class="rounded-circle" />
                                    </div>
                                    <div class="media-body">
                                        <h5 class="media-heading mb-1">Mary McDonald</h5>
                                        <div class="meta-info mb-0">15 April</div>
                                        <p class="media-text mt-2 mb-0">Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus. Sed dapibus nulla elementum, rutrum neque eu, gravida neque.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="media mb-5 pb-5 primary-comment">
                            <div class="avatar me-4">
                                <img alt="avatar" src="{{Vite::asset('resources/images/profile-12.jpeg')}}" class="rounded-circle" />
                            </div>
                            <div class="media-body">
                                <h5 class="media-heading mb-1">Kelly Young</h5>
                                <div class="meta-info mb-0">12 April</div>
                                <p class="media-text mt-2 mb-0">Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus. Sed dapibus nulla elementum, rutrum neque eu, gravida neque.</p>

                                <button class="btn btn-success btn-icon btn-reply btn-rounded">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                                </button>

                                <div class="media mt-4">
                                    <div class="avatar me-4">
                                        <img alt="avatar" src="{{Vite::asset('resources/images/profile-21.jpeg')}}" class="rounded-circle" />
                                    </div>
                                    <div class="media-body">
                                        <h5 class="media-heading mb-1">Andy King</h5>
                                        <div class="meta-info mb-0">13 April</div>
                                        <p class="media-text mt-2 mb-0">Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus. Sed dapibus nulla elementum, rutrum neque eu, gravida neque.</p>
                                    </div>
                                </div>
                                
                            </div>
                        </div>

                        <div class="media mb-5 pb-5 primary-comment">
                            <div class="avatar me-4">
                                <img alt="avatar" src="{{Vite::asset('resources/images/profile-9.jpeg')}}" class="rounded-circle" />
                            </div>
                            <div class="media-body">
                                <h5 class="media-heading mb-1">Alma Clarke</h5>
                                <div class="meta-info mb-0">10 April</div>
                                <p class="media-text mt-2 mb-0">Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus. Sed dapibus nulla elementum, rutrum neque eu, gravida neque.</p>

                                <button class="btn btn-success btn-icon btn-reply btn-rounded">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                                </button>
                                
                            </div>
                        </div>

                        <div class="post-pagination">

                            <div class="pagination-no_spacing">

                                <ul class="pagination">
                                    <li><a href="javascript:void(0);" class="prev"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg></a></li>
                                    <li><a href="javascript:void(0);">1</a></li>
                                    <li><a href="javascript:void(0);" class="active">2</a></li>
                                    <li><a href="javascript:void(0);">3</a></li>
                                    <li><a href="javascript:void(0);" class="next"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg></a></li>
                                </ul>

                            </div>
                            
                        </div>
                        

                    </div>
                    
                    <div class="post-form mt-5">

                        <div class="section add-comment">
                            <div class="info">
                                <h6 class="">Add Comment</h6>
                                <p>Add your <span class="text-success">comment</span> to this post.</p>

                                <div class="row mt-4">

                                        <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Write Comment</label>
                                            <textarea class="form-control" cols="30" rows="10"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Name</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Email</label>
                                            <input type="email" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="text-end mt-4">
                                    <button class="btn btn-primary me-3">Clear</button>
                                    <button class="btn btn-success">Add Comment</button>
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

    </x-slot>
    <!--  END CUSTOM SCRIPTS FILE  -->
</x-rtl.base-layout>