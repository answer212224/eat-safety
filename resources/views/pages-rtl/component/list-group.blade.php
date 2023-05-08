<x-rtl.base-layout :scrollspy="true">

    <x-slot:pageTitle>
        {{$title}} 
    </x-slot>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <x-slot:headerFiles>
        <!--  BEGIN CUSTOM STYLE FILE  -->
        @vite(['resources/rtl/scss/light/assets/components/list-group.scss'])
        @vite(['resources/rtl/scss/dark/assets/components/list-group.scss'])
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
                <li class="breadcrumb-item active" aria-current="page">List Group</li>
            </ol>
        </nav>
    </div>
    <!-- /BREADCRUMB -->

    <div id="navSection" data-bs-spy="affix" class="nav  sidenav">
        <div class="sidenav-content">
            <a href="#listGroupBasic" class="active nav-link">Basic</a>
            <a href="#listGroupActive" class="active nav-link">Active</a>
            <a href="#listGroupLinks" class="nav-link">Links</a>
            <a href="#listGroupIcons" class="nav-link">Icons</a>
            <a href="#listGroupImages" class="nav-link">Images</a>
            <a href="#listGroupBadge" class="nav-link">Badges</a>
            <a href="#listGroupCheckbox" class="nav-link">Checkbox</a>
            <a href="#listGroupTabbedInterfaces" class="nav-link">Tabbed Interfaces</a>
        </div>
    </div>

    <div class="row layout-spacing layout-top-spacing" id="cancel-row">

        <div id="listGroupBasic" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Basic</h4> 
                        </div>                   
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <ul class="list-group ">
                        <li class="list-group-item">An item</li>
                        <li class="list-group-item">A second item</li>
                        <li class="list-group-item">A third item</li>
                        <li class="list-group-item">A fourth item</li>
                        <li class="list-group-item">And a fifth one</li>
                    </ul>

                    <div class="code-section-container show-code">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                                <pre>
&lt;ul class=&quot;list-group &quot;&gt;
&lt;li class=&quot;list-group-item&quot;&gt;An item&lt;/li&gt;
&lt;li class=&quot;list-group-item&quot;&gt;A second item&lt;/li&gt;
&lt;li class=&quot;list-group-item&quot;&gt;A third item&lt;/li&gt;
&lt;li class=&quot;list-group-item&quot;&gt;A fourth item&lt;/li&gt;
&lt;li class=&quot;list-group-item&quot;&gt;And a fifth one&lt;/li&gt;
&lt;/ul&gt;</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="listGroupActive" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Active</h4> 
                        </div>                   
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <p class="mb-3">Add <code>.active</code> to a <code>.list-group-item</code> to indicate the current active selection.</p>
                    <ul class="list-group ">
                        <li class="list-group-item">An item</li>
                        <li class="list-group-item active">An active item</li>
                        <li class="list-group-item">A third item</li>
                        <li class="list-group-item">A fourth item</li>
                        <li class="list-group-item">And a fifth one</li>
                    </ul>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                                <pre>
&lt;ul class=&quot;list-group &quot;&gt;
&lt;li class=&quot;list-group-item&quot;&gt;An item&lt;/li&gt;
&lt;li class=&quot;list-group-item active&quot;&gt;An active item&lt;/li&gt;
&lt;li class=&quot;list-group-item&quot;&gt;A third item&lt;/li&gt;
&lt;li class=&quot;list-group-item&quot;&gt;A fourth item&lt;/li&gt;
&lt;li class=&quot;list-group-item&quot;&gt;And a fifth one&lt;/li&gt;
&lt;/ul&gt;</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="listGroupLinks" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Links</h4> 
                        </div>                              
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <p class="mb-3">Change all the <code>li</code> tags to <code>a</code> tags to convert it into a link</p>
                    <div class="list-group">
                        <a href="javascript:void(0);" class="list-group-item list-group-item-action">An item</a>
                        <a href="javascript:void(0);" class="list-group-item list-group-item-action active" aria-current="true">
                          The current link item
                        </a>
                        <a href="javascript:void(0);" class="list-group-item list-group-item-action">A third link item</a>
                        <a href="javascript:void(0);" class="list-group-item list-group-item-action">A fourth link item</a>
                        <a class="list-group-item list-group-item-action disabled">A disabled link item</a>
                    </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Show Code</span></button>

                        <div class="code-section text-left">
                                <pre>
&lt;!-- Links --&gt;
&lt;div class=&quot;list-group&quot;&gt;
&lt;a href=&quot;javascript:void(0);&quot; class=&quot;list-group-item list-group-item-action&quot;&gt;An item&lt;/a&gt;
&lt;a href=&quot;javascript:void(0);&quot; class=&quot;list-group-item list-group-item-action active&quot; aria-current=&quot;true&quot;&gt;The current link item&lt;/a&gt;
&lt;a href=&quot;javascript:void(0);&quot; class=&quot;list-group-item list-group-item-action&quot;&gt;A third link item&lt;/a&gt;
&lt;a href=&quot;javascript:void(0);&quot; class=&quot;list-group-item list-group-item-action&quot;&gt;A fourth link item&lt;/a&gt;
&lt;a class=&quot;list-group-item list-group-item-action disabled&quot;&gt;A disabled link item&lt;/a&gt;
&lt;/div&gt;</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="listGroupIcons" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Icons</h4> 
                        </div>                   
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <ul class="list-group list-group-icons-meta">
                        <li class="list-group-item ">
                            <div class="media">
                                <div class="d-flex me-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                </div>
                                <div class="media-body">
                                    <h6 class="tx-inverse">Messages</h6>
                                    <p class="mg-b-0">4 New Messages</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item  active">
                            <div class="media">
                                <div class="d-flex me-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                                </div>
                                <div class="media-body">
                                    <h6 class="tx-inverse">Locations</h6>
                                    <p class="mg-b-0">25 New Travel Locations</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item ">
                            <div class="media">
                                <div class="d-flex me-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-droplet"><path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"></path></svg>
                                </div>
                                <div class="media-body">
                                    <h6 class="tx-inverse">Flexible</h6>
                                    <p class="mg-b-0">Customization Flexibility</p>
                                </div>
                            </div>
                        </li>
                    </ul>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                                <pre>
&lt;!-- Icons --&gt;
&lt;ul class="list-group list-group-icons-meta"&gt;
&lt;li class="list-group-item "&gt;
&lt;div class="media"&gt;
&lt;div class="d-flex me-3"&gt;
&lt;svg&gt; ... &lt;/svg&gt;
&lt;/div&gt;
&lt;div class="media-body"&gt;
&lt;h6 class="tx-inverse"&gt;Messages&lt;/h6&gt;
&lt;p class="mg-b-0"&gt;4 New Messages&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/li&gt;
&lt;li class="list-group-item  active"&gt;
&lt;div class="media"&gt;
&lt;div class="d-flex me-3"&gt;
&lt;svg&gt; ... &lt;/svg&gt;
&lt;/div&gt;
&lt;div class="media-body"&gt;
&lt;h6 class="tx-inverse"&gt;Locations&lt;/h6&gt;
&lt;p class="mg-b-0"&gt;25 New Travel Locations&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/li&gt;
&lt;li class="list-group-item "&gt;
&lt;div class="media"&gt;
&lt;div class="d-flex me-3"&gt;
&lt;svg&gt; ... &lt;/svg&gt;
&lt;/div&gt;
&lt;div class="media-body"&gt;
&lt;h6 class="tx-inverse"&gt;Flexible&lt;/h6&gt;
&lt;p class="mg-b-0"&gt;Customization Flexibility&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/li&gt;
&lt;/ul&gt;</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="listGroupImages" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Images</h4> 
                        </div>                   
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <ul class="list-group list-group-media">
                        <li class="list-group-item ">
                            <div class="media">
                                <div class="me-3">
                                    <img alt="avatar" src="{{Vite::asset('resources/images/profile-1.jpeg')}}" class="img-fluid rounded-circle">
                                </div>
                                <div class="media-body">
                                    <h6 class="tx-inverse">Luke Ivory</h6>
                                    <p class="mg-b-0">Project Lead</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item  active">
                            <div class="media">
                                <div class="me-3">
                                    <img alt="avatar" src="{{Vite::asset('resources/images/profile-2.jpeg')}}" class="img-fluid rounded-circle">
                                </div>
                                <div class="media-body">
                                    <h6 class="tx-inverse">Sonia Shaw</h6>
                                    <p class="mg-b-0">Web Designer</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item  ">
                            <div class="media">
                                <div class="me-3">
                                    <img alt="avatar" src="{{Vite::asset('resources/images/profile-3.jpeg')}}" class="img-fluid rounded-circle">
                                </div>
                                <div class="media-body">
                                    <h6 class="tx-inverse">Dale Butler</h6>
                                    <p class="mg-b-0">Developer</p>
                                </div>
                            </div>
                        </li>
                    </ul>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                                <pre>
&lt;!-- Images --&gt;
&lt;ul class="list-group list-group-media"&gt;
&lt;li class="list-group-item "&gt;
&lt;div class="media"&gt;
&lt;div class="me-3"&gt;
&lt;img alt="avatar" src="{{Vite::asset('resources/images/profile-1.jpeg')}}" class="img-fluid rounded-circle"&gt;
&lt;/div&gt;
&lt;div class="media-body"&gt;
&lt;h6 class="tx-inverse"&gt;Luke Ivory&lt;/h6&gt;
&lt;p class="mg-b-0"&gt;Project Lead&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/li&gt;
&lt;li class="list-group-item  active"&gt;
&lt;div class="media"&gt;
&lt;div class="me-3"&gt;
&lt;img alt="avatar" src="{{Vite::asset('resources/images/profile-2.jpeg')}}" class="img-fluid rounded-circle"&gt;
&lt;/div&gt;
&lt;div class="media-body"&gt;
&lt;h6 class="tx-inverse"&gt;Sonia Shaw&lt;/h6&gt;
&lt;p class="mg-b-0"&gt;Web Designer&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/li&gt;
&lt;li class="list-group-item  "&gt;
&lt;div class="media"&gt;
&lt;div class="me-3"&gt;
&lt;img alt="avatar" src="{{Vite::asset('resources/images/profile-3.jpeg')}}" class="img-fluid rounded-circle"&gt;
&lt;/div&gt;
&lt;div class="media-body"&gt;
&lt;h6 class="tx-inverse"&gt;Dale Butler&lt;/h6&gt;
&lt;p class="mg-b-0"&gt;Developer&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/li&gt;
&lt;/ul&gt;</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="listGroupBadge" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Badges</h4> 
                        </div>                   
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                          A list item
                          <span class="badge bg-primary rounded-pill">14</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                          A second list item
                          <span class="badge bg-primary rounded-pill">2</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                          A third list item
                          <span class="badge bg-primary rounded-pill">1</span>
                        </li>
                    </ul>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                                <pre>
&lt;ul class=&quot;list-group&quot;&gt;
&lt;li class=&quot;list-group-item d-flex justify-content-between align-items-center&quot;&gt;
A list item
&lt;span class=&quot;badge bg-primary rounded-pill&quot;&gt;14&lt;/span&gt;
&lt;/li&gt;
&lt;li class=&quot;list-group-item d-flex justify-content-between align-items-center&quot;&gt;
A second list item
&lt;span class=&quot;badge bg-primary rounded-pill&quot;&gt;2&lt;/span&gt;
&lt;/li&gt;
&lt;li class=&quot;list-group-item d-flex justify-content-between align-items-center&quot;&gt;
A third list item
&lt;span class=&quot;badge bg-primary rounded-pill&quot;&gt;1&lt;/span&gt;
&lt;/li&gt;
&lt;/ul&gt;</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="listGroupCheckbox" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Checkbox</h4> 
                        </div>                   
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <div class="list-group">
                        <label class="list-group-item">
                          <input class="form-check-input me-1" type="checkbox" value="">
                          First checkbox
                        </label>
                        <label class="list-group-item">
                          <input class="form-check-input me-1" type="checkbox" value="">
                          Second checkbox
                        </label>
                        <label class="list-group-item">
                          <input class="form-check-input me-1" type="checkbox" value="">
                          Third checkbox
                        </label>
                        <label class="list-group-item">
                          <input class="form-check-input me-1" type="checkbox" value="">
                          Fourth checkbox
                        </label>
                        <label class="list-group-item">
                          <input class="form-check-input me-1" type="checkbox" value="">
                          Fifth checkbox
                        </label>
                    </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                                <pre>
&lt;div class=&quot;list-group&quot;&gt;
&lt;label class=&quot;list-group-item&quot;&gt;
&lt;input class=&quot;form-check-input me-1&quot; type=&quot;checkbox&quot; value=&quot;&quot;&gt;
First checkbox
&lt;/label&gt;
&lt;label class=&quot;list-group-item&quot;&gt;
&lt;input class=&quot;form-check-input me-1&quot; type=&quot;checkbox&quot; value=&quot;&quot;&gt;
Second checkbox
&lt;/label&gt;
&lt;label class=&quot;list-group-item&quot;&gt;
&lt;input class=&quot;form-check-input me-1&quot; type=&quot;checkbox&quot; value=&quot;&quot;&gt;
Third checkbox
&lt;/label&gt;
&lt;label class=&quot;list-group-item&quot;&gt;
&lt;input class=&quot;form-check-input me-1&quot; type=&quot;checkbox&quot; value=&quot;&quot;&gt;
Fourth checkbox
&lt;/label&gt;
&lt;label class=&quot;list-group-item&quot;&gt;
&lt;input class=&quot;form-check-input me-1&quot; type=&quot;checkbox&quot; value=&quot;&quot;&gt;
Fifth checkbox
&lt;/label&gt;
&lt;/div&gt;</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="listGroupTabbedInterfaces" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Tabbed Interfaces</h4> 
                        </div>                   
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <div class="row">
                        <div class="col-4">
                            <div class="list-group" id="list-tab" role="tablist">
                                <a class="list-group-item list-group-item-action active" id="list-home-list" data-bs-toggle="list" href="#list-home" role="tab" aria-controls="list-home">Home</a>
                                <a class="list-group-item list-group-item-action" id="list-profile-list" data-bs-toggle="list" href="#list-profile" role="tab" aria-controls="list-profile">Profile</a>
                                <a class="list-group-item list-group-item-action" id="list-messages-list" data-bs-toggle="list" href="#list-messages" role="tab" aria-controls="list-messages">Messages</a>
                                <a class="list-group-item list-group-item-action" id="list-settings-list" data-bs-toggle="list" href="#list-settings" role="tab" aria-controls="list-settings">Settings</a>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                                <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                                <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                                <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
                                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                                <pre>
&lt;div class=&quot;list-group&quot;&gt;
&lt;label class=&quot;list-group-item&quot;&gt;
&lt;input class=&quot;form-check-input me-1&quot; type=&quot;checkbox&quot; value=&quot;&quot;&gt;
First checkbox
&lt;/label&gt;
&lt;label class=&quot;list-group-item&quot;&gt;
&lt;input class=&quot;form-check-input me-1&quot; type=&quot;checkbox&quot; value=&quot;&quot;&gt;
Second checkbox
&lt;/label&gt;
&lt;label class=&quot;list-group-item&quot;&gt;
&lt;input class=&quot;form-check-input me-1&quot; type=&quot;checkbox&quot; value=&quot;&quot;&gt;
Third checkbox
&lt;/label&gt;
&lt;label class=&quot;list-group-item&quot;&gt;
&lt;input class=&quot;form-check-input me-1&quot; type=&quot;checkbox&quot; value=&quot;&quot;&gt;
Fourth checkbox
&lt;/label&gt;
&lt;label class=&quot;list-group-item&quot;&gt;
&lt;input class=&quot;form-check-input me-1&quot; type=&quot;checkbox&quot; value=&quot;&quot;&gt;
Fifth checkbox
&lt;/label&gt;
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