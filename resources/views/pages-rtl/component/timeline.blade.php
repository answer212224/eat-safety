<x-rtl.base-layout :scrollspy="true">

    <x-slot:pageTitle>
        {{$title}} 
    </x-slot>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <x-slot:headerFiles>
        <!--  BEGIN CUSTOM STYLE FILE  -->
        @vite(['resources/rtl/scss/light/assets/components/timeline.scss'])
        @vite(['resources/rtl/scss/dark/assets/components/timeline.scss'])
        <!--  END CUSTOM STYLE FILE  -->
        
        <style>
            .toggle-code-snippet { margin-bottom: 0px; }
            body.dark .toggle-code-snippet { margin-bottom: 0px; }
        </style>
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
                <li class="breadcrumb-item active" aria-current="page">Timeline</li>
            </ol>
        </nav>
    </div>
    <!-- /BREADCRUMB -->

    <div id="navSection" data-bs-spy="affix" class="nav  sidenav">
        <div class="sidenav-content">
            <a href="#timelineBasic" class="nav-link">Basic</a>
            <a href="#timelineMinimal" class="nav-link">Minimal</a>
            <a href="#timelineImages" class="nav-link">Images</a>
            <a href="#timelineModern" class="nav-link">Modern</a>
            <a href="#timelineProfile" class="active nav-link">Profile</a>
        </div>
    </div>

    <div class="row layout-top-spacing">
        <div id="timelineBasic" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4> Basic</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area pb-1">
                    <ol class="timeline">
                        <li class="timeline-item">
                            <span class="timeline-item-icon avatar-icon">
                                <i class="avatar">
                                    <img alt="profile" src="{{Vite::asset('resources/images/profile-5.jpeg')}}" />
                                </i>
                            </span>
                            <div class="new-comment">
                                <input type="text" class="form-control" placeholder="Add a comment..." />
                            </div>
                        </li>
                        <li class="timeline-item">
                            <span class="timeline-item-icon faded-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                            </span>
                            <div class="timeline-item-description">
                                <i>
                                    <img alt="profile" src="{{Vite::asset('resources/images/profile-20.jpeg')}}" />
                                </i>
                                <span class="align-self-center"><a href="#">Mary McDonald</a> has changed <a href="#">2 attributes</a> on <span>May 21, 2022</span></span>
                            </div>
                        </li>
                        <li class="timeline-item">
                            <span class="timeline-item-icon faded-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                            </span>
                            <div class="timeline-item-description">
                                <i>
                                    <img alt="profile" src="{{Vite::asset('resources/images/profile-12.jpeg')}}" />
                                </i>
                                <span class="align-self-center"><a href="#">Linda Park</a> moved <a href="#">Eric Lubin</a> to <a href="#"> Technical Test</a> on <span>May 20, 2022</span></span>
                            </div>
                        </li>
                        <li class="timeline-item extra-space">
                            <span class="timeline-item-icon filled-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                            </span>
                            <div class="timeline-item-wrapper">
                                <div class="timeline-item-description">
                                    <i>
                                        <img alt="profile" src="{{Vite::asset('resources/images/profile-24.jpeg')}}" />
                                    </i>
                                    <span class="align-self-center"><a href="#">Daisy Anderson</a> commented on <span>May 20, 2022</span></span>
                                </div>
                                <div class="comment">
                                    <p>I've sent him the assignment we discussed recently, he is coming back to us this week. Regarding to our last call, I really enjoyed talking to him and so far he has the profile we are looking for. Can't wait to see his technical test, I'll keep you posted and we'll debrief it all together!</p>
                                    <button class="btn btn-secondary btn-like mt-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-thumbs-up"><path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path></svg>
                                        <span class="btn-text-inner">Like</span>
                                    </button>
                                </div>
                                <div class="show-replies">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-forward" width="44" height="44" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M15 11l4 4l-4 4m4 -4h-11a4 4 0 0 1 0 -8h1" />
                                    </svg>
                                    Show 3 replies
                                    <div class="avatar--group ms-3">
                                        <div class="avatar avatar-sm">
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
                            </div>
                        </li>
                    </ol>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;div class="mt-container mx-auto"&gt;
&lt;div class="timeline-line"&gt;

&lt;div class="item-timeline"&gt;
&lt;p class="t-time"&gt;10:00&lt;/p&gt;
&lt;div class="t-dot t-dot-primary"&gt;
&lt;/div&gt;
&lt;div class="t-text"&gt;
&lt;p&gt;Updated Server Logs&lt;/p&gt;
&lt;p class="t-meta-time"&gt;25 mins ago&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;

&lt;div class="item-timeline"&gt;
&lt;p class="t-time"&gt;12:45&lt;/p&gt;
&lt;div class="t-dot t-dot-success"&gt;
&lt;/div&gt;
&lt;div class="t-text"&gt;
&lt;p&gt;Backup Files EOD&lt;/p&gt;
&lt;p class="t-meta-time"&gt;2 hrs ago&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;

&lt;div class="item-timeline"&gt;
&lt;p class="t-time"&gt;14:00&lt;/p&gt;
&lt;div class="t-dot t-dot-warning"&gt;
&lt;/div&gt;
&lt;div class="t-text"&gt;
&lt;p&gt;Send Mail to HR and Admin&lt;/p&gt;
&lt;p class="t-meta-time"&gt;4 hrs ago&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;

&lt;div class="item-timeline"&gt;
&lt;p class="t-time"&gt;16:00&lt;/p&gt;
&lt;div class="t-dot t-dot-info"&gt;
&lt;/div&gt;
&lt;div class="t-text"&gt;
&lt;p&gt;Conference call with Marketing Manager.&lt;/p&gt;
&lt;p class="t-meta-time"&gt;6 hrs ago&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;

&lt;div class="item-timeline"&gt;
&lt;p class="t-time"&gt;17:00&lt;/p&gt;
&lt;div class="t-dot t-dot-danger"&gt;
&lt;/div&gt;
&lt;div class="t-text"&gt;
&lt;p&gt;Collected documents from &lt;a href="javascript:void(0);"&gt;Sara&lt;/a&gt;&lt;/p&gt;
&lt;p class="t-meta-time"&gt;9 hrs ago&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;

&lt;div class="item-timeline"&gt;
&lt;p class="t-time"&gt;16:00&lt;/p&gt;
&lt;div class="t-dot t-dot-dark"&gt;
&lt;/div&gt;
&lt;div class="t-text"&gt;
&lt;p&gt;Server rebooted successfully&lt;/p&gt;
&lt;p class="t-meta-time"&gt;8 hrs ago&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;

&lt;/div&gt;                                    
&lt;/div&gt;</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        
        
        <div id="timelineMinimal" class="col-lg-12 layout-spacing">
                <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Minimal</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area pb-1">
                    <div class="mt-container mx-auto">
                        <div class="timeline-line">
                            
                            <div class="item-timeline">
                                <p class="t-time">10:00</p>
                                <div class="t-dot t-dot-primary">
                                </div>
                                <div class="t-text">
                                    <p>Updated Server Logs</p>
                                    <p class="t-meta-time">25 mins ago</p>
                                </div>
                            </div>

                            <div class="item-timeline">
                                <p class="t-time">12:45</p>
                                <div class="t-dot t-dot-success">
                                </div>
                                <div class="t-text">
                                    <p>Backup Files EOD</p>
                                    <p class="t-meta-time">2 hrs ago</p>
                                </div>
                            </div>

                            <div class="item-timeline">
                                <p class="t-time">14:00</p>
                                <div class="t-dot t-dot-warning">
                                </div>
                                <div class="t-text">
                                    <p>Send Mail to HR and Admin</p>
                                    <p class="t-meta-time">4 hrs ago</p>
                                </div>
                            </div>

                            <div class="item-timeline">
                                <p class="t-time">16:00</p>
                                <div class="t-dot t-dot-info">
                                </div>
                                <div class="t-text">
                                    <p>Conference call with Marketing Manager.</p>
                                    <p class="t-meta-time">6 hrs ago</p>
                                </div>
                            </div>

                            <div class="item-timeline">
                                <p class="t-time">17:00</p>
                                <div class="t-dot t-dot-danger">
                                </div>
                                <div class="t-text">
                                    <p>Collected documents from <a href="javascript:void(0);">Sara</a></p>
                                    <p class="t-meta-time">9 hrs ago</p>
                                </div>
                            </div>

                            <div class="item-timeline">
                                <p class="t-time">16:00</p>
                                <div class="t-dot t-dot-dark">
                                </div>
                                <div class="t-text">
                                    <p>Server rebooted successfully</p>
                                    <p class="t-meta-time">8 hrs ago</p>
                                </div>
                            </div>

                        </div>                                    
                    </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;div class="mt-container mx-auto"&gt;
&lt;div class="timeline-line"&gt;

&lt;div class="item-timeline"&gt;
&lt;p class="t-time"&gt;10:00&lt;/p&gt;
&lt;div class="t-dot t-dot-primary"&gt;
&lt;/div&gt;
&lt;div class="t-text"&gt;
&lt;p&gt;Updated Server Logs&lt;/p&gt;
&lt;p class="t-meta-time"&gt;25 mins ago&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;

&lt;div class="item-timeline"&gt;
&lt;p class="t-time"&gt;12:45&lt;/p&gt;
&lt;div class="t-dot t-dot-success"&gt;
&lt;/div&gt;
&lt;div class="t-text"&gt;
&lt;p&gt;Backup Files EOD&lt;/p&gt;
&lt;p class="t-meta-time"&gt;2 hrs ago&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;

&lt;div class="item-timeline"&gt;
&lt;p class="t-time"&gt;14:00&lt;/p&gt;
&lt;div class="t-dot t-dot-warning"&gt;
&lt;/div&gt;
&lt;div class="t-text"&gt;
&lt;p&gt;Send Mail to HR and Admin&lt;/p&gt;
&lt;p class="t-meta-time"&gt;4 hrs ago&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;

&lt;div class="item-timeline"&gt;
&lt;p class="t-time"&gt;16:00&lt;/p&gt;
&lt;div class="t-dot t-dot-info"&gt;
&lt;/div&gt;
&lt;div class="t-text"&gt;
&lt;p&gt;Conference call with Marketing Manager.&lt;/p&gt;
&lt;p class="t-meta-time"&gt;6 hrs ago&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;

&lt;div class="item-timeline"&gt;
&lt;p class="t-time"&gt;17:00&lt;/p&gt;
&lt;div class="t-dot t-dot-danger"&gt;
&lt;/div&gt;
&lt;div class="t-text"&gt;
&lt;p&gt;Collected documents from &lt;a href="javascript:void(0);"&gt;Sara&lt;/a&gt;&lt;/p&gt;
&lt;p class="t-meta-time"&gt;9 hrs ago&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;

&lt;div class="item-timeline"&gt;
&lt;p class="t-time"&gt;16:00&lt;/p&gt;
&lt;div class="t-dot t-dot-dark"&gt;
&lt;/div&gt;
&lt;div class="t-text"&gt;
&lt;p&gt;Server rebooted successfully&lt;/p&gt;
&lt;p class="t-meta-time"&gt;8 hrs ago&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;

&lt;/div&gt;                                    
&lt;/div&gt;</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div id="timelineImages" class="col-lg-12 layout-spacing">
                <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4> With Images </h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <div class="mt-container mx-auto">
                        <div class="timeline-alter">
                            
                            <div class="item-timeline">
                                <div class="t-time">
                                    <p class="">09:00</p>
                                </div>
                                <div class="t-img">
                                    <img src="{{Vite::asset('resources/images/profile-20.jpeg')}}" alt="avatar">
                                </div>
                                <div class="t-meta-time">
                                    <p class="">25 mins ago</p>
                                </div>
                                
                                <div class="t-text">
                                    <p>Conference call with Marketing Manager.</p>
                                </div>
                            </div>

                            <div class="item-timeline">
                                <div class="t-time">
                                    <p class="">10:00</p>
                                </div>
                                <div class="t-usr-txt">
                                    <p><span>L</span></p>
                                </div>
                                <div class="t-meta-time">
                                    <p class="">2 hrs ago</p>
                                </div>
                                
                                <div class="t-text">
                                    <p>Server rebooted successfully</p>
                                </div>
                            </div>

                            <div class="item-timeline">
                                <div class="t-time">
                                    <p class="">11:00</p>
                                </div>
                                <div class="t-img">
                                    <img src="{{Vite::asset('resources/images/profile-6.jpeg')}}" alt="avatar">
                                </div>
                                <div class="t-meta-time">
                                    <p class="">4 hrs ago</p>
                                </div>
                                
                                <div class="t-text">
                                    <p>Backup Files EOD</p>
                                </div>
                            </div>

                            <div class="item-timeline">
                                <div class="t-time">
                                    <p class="">12:00</p>
                                </div>
                                <div class="t-img">
                                    <img src="{{Vite::asset('resources/images/profile-11.jpeg')}}" alt="avatar">
                                </div>
                                <div class="t-meta-time">
                                    <p class="">6 hrs ago</p>
                                </div>
                                
                                <div class="t-text">
                                    <p>Collected documents from <a href="javascript:void(0);">Sara</a></p>
                                </div>
                            </div>

                            <div class="item-timeline">
                                <div class="t-time">
                                    <p class="">14:00</p>
                                </div>
                                <div class="t-usr-txt">
                                    <p><span>G</span></p>
                                </div>
                                <div class="t-meta-time">
                                    <p class="">9 hrs ago</p>
                                </div>
                                
                                <div class="t-text">
                                    <p>PDF file Download</p>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;div class="mt-container mx-auto"&gt;
&lt;div class="timeline-alter"&gt;

&lt;div class="item-timeline"&gt;
&lt;div class="t-time"&gt;
&lt;p class=""&gt;09:00&lt;/p&gt;
&lt;/div&gt;
&lt;div class="t-img"&gt;
&lt;img src="{{Vite::asset('resources/images/profile-20.jpeg')}}"&gt;
&lt;/div&gt;
&lt;div class="t-meta-time"&gt;
&lt;p class=""&gt;25 mins ago&lt;/p&gt;
&lt;/div&gt;

&lt;div class="t-text"&gt;
&lt;p&gt;Conference call with Marketing Manager.&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;

&lt;div class="item-timeline"&gt;
&lt;div class="t-time"&gt;
&lt;p class=""&gt;10:00&lt;/p&gt;
&lt;/div&gt;
&lt;div class="t-usr-txt"&gt;
&lt;p&gt;&lt;span&gt;L&lt;/span&gt;&lt;/p&gt;
&lt;/div&gt;
&lt;div class="t-meta-time"&gt;
&lt;p class=""&gt;2 hrs ago&lt;/p&gt;
&lt;/div&gt;

&lt;div class="t-text"&gt;
&lt;p&gt;Server rebooted successfully&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;

&lt;div class="item-timeline"&gt;
&lt;div class="t-time"&gt;
&lt;p class=""&gt;11:00&lt;/p&gt;
&lt;/div&gt;
&lt;div class="t-img"&gt;
&lt;img src="{{Vite::asset('resources/images/profile-6.jpeg')}}"&gt;
&lt;/div&gt;
&lt;div class="t-meta-time"&gt;
&lt;p class=""&gt;4 hrs ago&lt;/p&gt;
&lt;/div&gt;

&lt;div class="t-text"&gt;
&lt;p&gt;Backup Files EOD&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;

&lt;div class="item-timeline"&gt;
&lt;div class="t-time"&gt;
&lt;p class=""&gt;12:00&lt;/p&gt;
&lt;/div&gt;
&lt;div class="t-img"&gt;
&lt;img src="{{Vite::asset('resources/images/profile-11.jpeg')}}"&gt;
&lt;/div&gt;
&lt;div class="t-meta-time"&gt;
&lt;p class=""&gt;6 hrs ago&lt;/p&gt;
&lt;/div&gt;

&lt;div class="t-text"&gt;
&lt;p&gt;Collected documents from &lt;a href="javascript:void(0);"&gt;Sara&lt;/a&gt;&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;

&lt;div class="item-timeline"&gt;
&lt;div class="t-time"&gt;
&lt;p class=""&gt;14:00&lt;/p&gt;
&lt;/div&gt;
&lt;div class="t-usr-txt"&gt;
&lt;p&gt;&lt;span&gt;G&lt;/span&gt;&lt;/p&gt;
&lt;/div&gt;
&lt;div class="t-meta-time"&gt;
&lt;p class=""&gt;9 hrs ago&lt;/p&gt;
&lt;/div&gt;

&lt;div class="t-text"&gt;
&lt;p&gt;PDF file Download&lt;/p&gt;
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
        <div id="timelineModern" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Modern</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="container mt-container p-0">
                                <ul class="modern-timeline pl-0">
                                    <li>
                                        <div class="modern-timeline-badge"></div>
                                        <div class="modern-timeline-panel">
                                            <div class="modern-timeline-preview"><img src="{{Vite::asset('resources/images/tl-2.jpeg')}}" alt="timeline"></div>
                                            <div class="modern-timeline-body">
                                                <h4 class="mb-4">Front-End Framework</h4>
                                                <p class="mb-4">Map where your photos were taken and discover local points of interest. Map where your photos. Map where your photos were taken and discover.</p>
                                                <p><a href="javascript:void(0);" class="btn btn-dark mt-2">Read more</a></p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="modern-timeline-badge"></div>
                                        <div class="modern-timeline-panel">
                                            <div class="modern-timeline-preview"><img src="{{Vite::asset('resources/images/tl-4.jpeg')}}" alt="timeline"></div>
                                            <div class="modern-timeline-body">
                                                <h4 class="mb-4">Web Development</h4>
                                                <p class="mb-4">Map where your photos were taken and discover local points of interest. Map where your photos. Map where your photos were taken and discover.</p>
                                                <p><a href="javascript:void(0);" class="btn btn-dark mt-2">Read more</a></p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="modern-timeline-badge"></div>
                                        <div class="modern-timeline-panel">
                                            <div class="modern-timeline-preview"><img src="{{Vite::asset('resources/images/tl-3.jpeg')}}" alt="timeline"></div>
                                            <div class="modern-timeline-body">
                                                <h4 class="mb-4">Theme Development</h4>
                                                <p class="mb-4">Map where your photos were taken and discover local points of interest. Map where your photos. Map where your photos were taken and discover.</p>
                                                <p><a href="javascript:void(0);" class="btn btn-dark mt-2">Read more</a></p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="modern-timeline-badge"></div>
                                        <div class="modern-timeline-panel">
                                            <div class="modern-timeline-preview"><img src="{{Vite::asset('resources/images/tl-5.jpeg')}}" alt="timeline"></div>
                                            <div class="modern-timeline-body">
                                                <h4 class="mb-4">Plugin Development</h4>
                                                <p class="mb-4">Map where your photos were taken and discover local points of interest. Map where your photos. Map where your photos were taken and discover.</p>
                                                <p><a href="javascript:void(0);" class="btn btn-dark mt-2">Read more</a></p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="position-static">
                                        <div class="modern-timeline-top"></div>
                                    </li>
                                    <li class="position-static">
                                        <div class="modern-timeline-bottom"></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;div class="container mt-container"&gt;
&lt;ul class="modern-timeline pl-0"&gt;
&lt;li&gt;
&lt;div class="modern-timeline-badge"&gt;&lt;/div&gt;
&lt;div class="modern-timeline-panel"&gt;
&lt;div class="modern-timeline-preview"&gt;&lt;img src="{{Vite::asset('resources/images/tl-5.jpeg')}}" alt="timeline"&gt;&lt;/div&gt;
&lt;div class="modern-timeline-body"&gt;
    &lt;h4 class="mb-4"&gt;Front-End Framework&lt;/h4&gt;
    &lt;p class="mb-4"&gt;Map where your photos were taken and discover local points of interest. Map where your photos. Map where your photos were taken and discover.&lt;/p&gt;
    &lt;p&gt;&lt;a href="javascript:void(0);" class="btn btn-outline-primary mt-2"&gt;Read more&lt;/a&gt;&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/li&gt;
&lt;li&gt;
&lt;div class="modern-timeline-badge"&gt;&lt;/div&gt;
&lt;div class="modern-timeline-panel"&gt;
&lt;div class="modern-timeline-preview"&gt;&lt;img src="{{Vite::asset('resources/images/tl-2.jpeg')}}" alt="timeline"&gt;&lt;/div&gt;
&lt;div class="modern-timeline-body"&gt;
    &lt;h4 class="mb-4"&gt;Web Development&lt;/h4&gt;
    &lt;p class="mb-4"&gt;Map where your photos were taken and discover local points of interest. Map where your photos. Map where your photos were taken and discover.&lt;/p&gt;
    &lt;p&gt;&lt;a href="javascript:void(0);" class="btn btn-outline-primary mt-2"&gt;Read more&lt;/a&gt;&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/li&gt;
&lt;li&gt;
&lt;div class="modern-timeline-badge"&gt;&lt;/div&gt;
&lt;div class="modern-timeline-panel"&gt;
&lt;div class="modern-timeline-preview"&gt;&lt;img src="{{Vite::asset('resources/images/tl-3.jpeg')}}" alt="timeline"&gt;&lt;/div&gt;
&lt;div class="modern-timeline-body"&gt;
    &lt;h4 class="mb-4"&gt;Theme Development&lt;/h4&gt;
    &lt;p class="mb-4"&gt;Map where your photos were taken and discover local points of interest. Map where your photos. Map where your photos were taken and discover.&lt;/p&gt;
    &lt;p&gt;&lt;a href="javascript:void(0);" class="btn btn-outline-primary mt-2"&gt;Read more&lt;/a&gt;&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/li&gt;
&lt;li&gt;
&lt;div class="modern-timeline-badge"&gt;&lt;/div&gt;
&lt;div class="modern-timeline-panel"&gt;
&lt;div class="modern-timeline-preview"&gt;&lt;img src="{{Vite::asset('resources/images/tl-4.jpeg')}}" alt="timeline"&gt;&lt;/div&gt;
&lt;div class="modern-timeline-body"&gt;
    &lt;h4 class="mb-4"&gt;Plugin Development&lt;/h4&gt;
    &lt;p class="mb-4"&gt;Map where your photos were taken and discover local points of interest. Map where your photos. Map where your photos were taken and discover.&lt;/p&gt;
    &lt;p&gt;&lt;a href="javascript:void(0);" class="btn btn-outline-primary mt-2"&gt;Read more&lt;/a&gt;&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/li&gt;
&lt;li class="position-static"&gt;
&lt;div class="modern-timeline-top"&gt;&lt;/div&gt;
&lt;/li&gt;
&lt;li class="position-static"&gt;
&lt;div class="modern-timeline-bottom"&gt;&lt;/div&gt;
&lt;/li&gt;
&lt;/ul&gt;
&lt;/div&gt;</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div id="timelineProfile" class="col-lg-12 layout-spacing">
                <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4> Profile</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <div class="timeline-simple">
                        <p class="timeline-title">History</p>

                        <div class="timeline-list">
                            <p class="meta-update-day">Today</p>
                            
                            <div class="timeline-post-content">
                                <div class="user-profile">
                                    <img src="{{Vite::asset('resources/images/profile-11.jpeg')}}" alt="">
                                </div>
                                <div class="">
                                    <h4>Laurie Fox</h4>
                                    <p class="meta-time-date">5 sec</p>
                                    <div class="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
                                        <h6 class="">Trending Style</h6>
                                        <p class="post-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.</p>
                                        <div class="post-contributers">
                                            <img src="{{Vite::asset('resources/images/profile-25.jpeg')}}" alt="">
                                            <img src="{{Vite::asset('resources/images/profile-15.jpeg')}}" alt="">
                                            <img src="{{Vite::asset('resources/images/profile-8.jpeg')}}" alt="">
                                            <img src="{{Vite::asset('resources/images/profile-10.jpeg')}}" alt="">
                                            <img src="{{Vite::asset('resources/images/profile-12.jpeg')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="timeline-post-content post-gallery">
                                <div class="user-profile">
                                    <img src="{{Vite::asset('resources/images/profile-7.jpeg')}}" alt="avatar">
                                </div>
                                <div class="">
                                    <h4>Justin Cross</h4>
                                    <p class="meta-time-date">45 min</p>
                                    <div class="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-image"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><polyline points="21 15 16 10 5 21"></polyline></svg>
                                        <h6 class="">Nature Photography</h6>
                                        <p class="post-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.</p>
                                        <div class="post-gallery-img">
                                            <img src="{{Vite::asset('resources/images/grid-blog-style-2.jpeg')}}" alt="timeline">
                                            <img src="{{Vite::asset('resources/images/grid-blog-style-1.jpg')}}" alt="timeline">
                                            <img src="{{Vite::asset('resources/images/list-blog-style-2.jpeg')}}" alt="timeline">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="timeline-post-content">
                                <div class="user-profile">
                                    <img src="{{Vite::asset('resources/images/profile-25.jpeg')}}" alt="avatar">
                                </div>
                                <div class="">
                                    <h4>Sonia Shaw</h4>
                                    <p class="meta-time-date">2 hr</p>
                                    <div class="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                        <h6 class="">Create new Project</h6>
                                        <p class="post-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.</p>
                                        <div class="post-contributers">
                                            <img src="{{Vite::asset('resources/images/profile-6.jpeg')}}" alt="timeline">
                                            <img src="{{Vite::asset('resources/images/profile-16.jpeg')}}" alt="timeline">
                                            <img src="{{Vite::asset('resources/images/profile-11.jpeg')}}" alt="timeline">
                                            <img src="{{Vite::asset('resources/images/profile-7.jpeg')}}" alt="timeline">
                                            <img src="{{Vite::asset('resources/images/profile-10.jpeg')}}" alt="timeline">
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
&lt;div class="timeline-simple"&gt;
&lt;p class="timeline-title"&gt;History&lt;/p&gt;

&lt;div class="timeline-list"&gt;
&lt;p class="meta-update-day"&gt;Today&lt;/p&gt;

&lt;div class="timeline-post-content"&gt;
&lt;div class="user-profile"&gt;
&lt;img src="{{Vite::asset('resources/images/profile-11.jpeg')}}" class=""&gt;
&lt;/div&gt;
&lt;div class=""&gt;
&lt;h4&gt;Laurie Fox&lt;/h4&gt;
&lt;p class="meta-time-date"&gt;5 sec&lt;/p&gt;
&lt;div class=""&gt;
    &lt;svg&gt; ... &lt;/svg&gt;
    &lt;h6 class=""&gt;Trending Style&lt;/h6&gt;
    &lt;p class="post-text"&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat.&lt;/p&gt;
    &lt;div class="post-contributers"&gt;
        &lt;img src="{{Vite::asset('resources/images/profile-25.jpeg')}}" class=""&gt;
        &lt;img src="{{Vite::asset('resources/images/profile-15.jpeg')}}" class=""&gt;
        &lt;img src="{{Vite::asset('resources/images/profile-8.jpeg')}}" class=""&gt;
        &lt;img src="{{Vite::asset('resources/images/profile-10.jpeg')}}" class=""&gt;
        &lt;img src="{{Vite::asset('resources/images/profile-12.jpeg')}}" class=""&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;

&lt;div class="timeline-post-content post-gallery"&gt;
&lt;div class="user-profile"&gt;
&lt;img src="{{Vite::asset('resources/images/profile-7.jpeg')}}" class=""&gt;
&lt;/div&gt;
&lt;div class=""&gt;
&lt;h4&gt;Justin Cross&lt;/h4&gt;
&lt;p class="meta-time-date"&gt;45 min&lt;/p&gt;
&lt;div class=""&gt;
    &lt;svg&gt; ... &lt;/svg&gt;
    &lt;h6 class=""&gt;Nature Photography&lt;/h6&gt;
    &lt;p class="post-text"&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat.&lt;/p&gt;
    &lt;div class="post-gallery-img"&gt;
        &lt;img src="{{Vite::asset('resources/images/grid-blog-style-2.jpeg')}}" class=""&gt;
        &lt;img src="{{Vite::asset('resources/images/grid-blog-style-1.jpg')}}" class=""&gt;
        &lt;img src="{{Vite::asset('resources/images/list-blog-style-2.jpeg')}}" class=""&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;

&lt;div class="timeline-post-content"&gt;
&lt;div class="user-profile"&gt;
&lt;img src="{{Vite::asset('resources/images/profile-25.jpeg')}}" class=""&gt;
&lt;/div&gt;
&lt;div class=""&gt;
&lt;h4&gt;Sonia Shaw&lt;/h4&gt;
&lt;p class="meta-time-date"&gt;2 hr&lt;/p&gt;
&lt;div class=""&gt;
    &lt;svg&gt; ... &lt;/svg&gt;
    &lt;h6 class=""&gt;Create new Project&lt;/h6&gt;
    &lt;p class="post-text"&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat.&lt;/p&gt;
    &lt;div class="post-contributers"&gt;
        &lt;img src="{{Vite::asset('resources/images/profile-6.jpeg')}}" class=""&gt;
        &lt;img src="{{Vite::asset('resources/images/profile-16.jpeg')}}" class=""&gt;
        &lt;img src="{{Vite::asset('resources/images/profile-11.jpeg')}}" class=""&gt;
        &lt;img src="{{Vite::asset('resources/images/profile-7.jpeg')}}" class=""&gt;
        &lt;img src="{{Vite::asset('resources/images/profile-10.jpeg')}}" class=""&gt;
    &lt;/div&gt;
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

    
    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <x-slot:footerFiles>

    </x-slot>
    <!--  END CUSTOM SCRIPTS FILE  -->
</x-rtl.base-layout>