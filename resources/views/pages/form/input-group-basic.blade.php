<x-base-layout :scrollspy="true">

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
                <li class="breadcrumb-item"><a href="#">Form</a></li>
                <li class="breadcrumb-item active" aria-current="page">Input Group</li>
            </ol>
        </nav>
    </div>
    <!-- /BREADCRUMB -->
    
    <div id="navSection" data-bs-spy="affix" class="nav  sidenav">
        <div class="sidenav-content">
            <a href="#basic" class="active nav-link">Basic</a>
            <a href="#sizes" class="nav-link">Sizes</a>
            <a href="#multiple" class="nav-link">Multiple</a>
            <a href="#Input_group_action" class="nav-link">Input group with action</a>
        </div>
    </div>

    <div class="row layout-top-spacing">

        <div id="basic" class="col-lg-12 col-sm-12 col-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">                                
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Default</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <div class="input-group mb-3">
                        <span class="input-group-text" >@</span>
                        <input type="text" class="form-control" placeholder="Username" aria-label="Username" >
                    </div>
                    
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <span class="input-group-text" id="basic-addon2">@example.com</span>
                    </div>
                    
                    <label for="basic-url" class="form-label">Your vanity URL</label>
                        <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                    </div>
                    
                    <div class="input-group mb-3">
                        <span class="input-group-text">$</span>
                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                        <span class="input-group-text">.00</span>
                    </div>
                    
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Username" aria-label="Username">
                        <span class="input-group-text">@</span>
                        <input type="text" class="form-control" placeholder="Server" aria-label="Server">
                    </div>
                    
                    <div class="input-group">
                        <span class="input-group-text">With textarea</span>
                        <textarea class="form-control" aria-label="With textarea"></textarea>
                    </div>

                    <div class="code-section-container show-code">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;div class=&quot;input-group mb-3&quot;&gt;
&lt;span class=&quot;input-group-text&quot; id=&quot;basic-addon1&quot;&gt;@&lt;/span&gt;
&lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Username&quot; aria-label=&quot;Username&quot; aria-describedby=&quot;basic-addon1&quot;&gt;
&lt;/div&gt;

&lt;div class=&quot;input-group mb-3&quot;&gt;
&lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Recipient's username&quot; aria-label=&quot;Recipient's username&quot; aria-describedby=&quot;basic-addon2&quot;&gt;
&lt;span class=&quot;input-group-text&quot; id=&quot;basic-addon2&quot;&gt;@example.com&lt;/span&gt;
&lt;/div&gt;

&lt;label for=&quot;basic-url&quot; class=&quot;form-label&quot;&gt;Your vanity URL&lt;/label&gt;
&lt;div class=&quot;input-group mb-3&quot;&gt;
&lt;span class=&quot;input-group-text&quot; id=&quot;basic-addon3&quot;&gt;https://example.com/users/&lt;/span&gt;
&lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;basic-url&quot; aria-describedby=&quot;basic-addon3&quot;&gt;
&lt;/div&gt;

&lt;div class=&quot;input-group mb-3&quot;&gt;
&lt;span class=&quot;input-group-text&quot;&gt;$&lt;/span&gt;
&lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Amount (to the nearest dollar)&quot;&gt;
&lt;span class=&quot;input-group-text&quot;&gt;.00&lt;/span&gt;
&lt;/div&gt;

&lt;div class=&quot;input-group mb-3&quot;&gt;
&lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Username&quot; aria-label=&quot;Username&quot;&gt;
&lt;span class=&quot;input-group-text&quot;&gt;@&lt;/span&gt;
&lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Server&quot; aria-label=&quot;Server&quot;&gt;
&lt;/div&gt;

&lt;div class=&quot;input-group&quot;&gt;
&lt;span class=&quot;input-group-text&quot;&gt;With textarea&lt;/span&gt;
&lt;textarea class=&quot;form-control&quot; aria-label=&quot;With textarea&quot;&gt;&lt;/textarea&gt;
&lt;/div&gt;
</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Simple Icon</h4>
                        </div>                      
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <p class="">Left</p>

                    <div class="input-group mb-3">
                        <span class="input-group-text" ><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg></span>
                        <input type="text" class="form-control" placeholder="Notification" aria-label="notification" >
                    </div>

                    <p class="">Right</p>

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Notification" aria-label="notification" >
                        <span class="input-group-text" ><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg></span>
                    </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
=========
LEFT
=========
&lt;div class=&quot;input-group mb-3&quot;&gt;
&lt;span class=&quot;input-group-text&quot; id=&quot;basic-addon1&quot;&gt;&lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-bell&quot;&gt;&lt;path d=&quot;M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9&quot;&gt;&lt;/path&gt;&lt;path d=&quot;M13.73 21a2 2 0 0 1-3.46 0&quot;&gt;&lt;/path&gt;&lt;/svg&gt;&lt;/span&gt;
&lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Notification&quot; aria-label=&quot;notification&quot; aria-describedby=&quot;basic-addon1&quot;&gt;
&lt;/div&gt;

=========
Right
=========
&lt;div class=&quot;input-group mb-3&quot;&gt;
&lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Notification&quot; aria-label=&quot;notification&quot; aria-describedby=&quot;basic-addon1&quot;&gt;
&lt;span class=&quot;input-group-text&quot; id=&quot;basic-addon1&quot;&gt;&lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-bell&quot;&gt;&lt;path d=&quot;M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9&quot;&gt;&lt;/path&gt;&lt;path d=&quot;M13.73 21a2 2 0 0 1-3.46 0&quot;&gt;&lt;/path&gt;&lt;/svg&gt;&lt;/span&gt;
&lt;/div&gt;
</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Spinning Icon</h4>
                        </div>                      
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <p class="">Left</p>
                    
                    <div class="input-group mb-3">
                        <span class="input-group-text" ><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-loader spin"><line x1="12" y1="2" x2="12" y2="6"></line><line x1="12" y1="18" x2="12" y2="22"></line><line x1="4.93" y1="4.93" x2="7.76" y2="7.76"></line><line x1="16.24" y1="16.24" x2="19.07" y2="19.07"></line><line x1="2" y1="12" x2="6" y2="12"></line><line x1="18" y1="12" x2="22" y2="12"></line><line x1="4.93" y1="19.07" x2="7.76" y2="16.24"></line><line x1="16.24" y1="7.76" x2="19.07" y2="4.93"></line></svg></span>
                        <input type="text" class="form-control" placeholder="Notification" aria-label="notification" >
                    </div>

                    <p class="">Right</p>

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Notification" aria-label="notification" >
                        <span class="input-group-text" ><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-loader spin"><line x1="12" y1="2" x2="12" y2="6"></line><line x1="12" y1="18" x2="12" y2="22"></line><line x1="4.93" y1="4.93" x2="7.76" y2="7.76"></line><line x1="16.24" y1="16.24" x2="19.07" y2="19.07"></line><line x1="2" y1="12" x2="6" y2="12"></line><line x1="18" y1="12" x2="22" y2="12"></line><line x1="4.93" y1="19.07" x2="7.76" y2="16.24"></line><line x1="16.24" y1="7.76" x2="19.07" y2="4.93"></line></svg></span>
                    </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
=========
LEFT
=========
&lt;div class=&quot;input-group mb-3&quot;&gt;
&lt;span class=&quot;input-group-text&quot; id=&quot;basic-addon1&quot;&gt;&lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-loader spin&quot;&gt;&lt;line x1=&quot;12&quot; y1=&quot;2&quot; x2=&quot;12&quot; y2=&quot;6&quot;&gt;&lt;/line&gt;&lt;line x1=&quot;12&quot; y1=&quot;18&quot; x2=&quot;12&quot; y2=&quot;22&quot;&gt;&lt;/line&gt;&lt;line x1=&quot;4.93&quot; y1=&quot;4.93&quot; x2=&quot;7.76&quot; y2=&quot;7.76&quot;&gt;&lt;/line&gt;&lt;line x1=&quot;16.24&quot; y1=&quot;16.24&quot; x2=&quot;19.07&quot; y2=&quot;19.07&quot;&gt;&lt;/line&gt;&lt;line x1=&quot;2&quot; y1=&quot;12&quot; x2=&quot;6&quot; y2=&quot;12&quot;&gt;&lt;/line&gt;&lt;line x1=&quot;18&quot; y1=&quot;12&quot; x2=&quot;22&quot; y2=&quot;12&quot;&gt;&lt;/line&gt;&lt;line x1=&quot;4.93&quot; y1=&quot;19.07&quot; x2=&quot;7.76&quot; y2=&quot;16.24&quot;&gt;&lt;/line&gt;&lt;line x1=&quot;16.24&quot; y1=&quot;7.76&quot; x2=&quot;19.07&quot; y2=&quot;4.93&quot;&gt;&lt;/line&gt;&lt;/svg&gt;&lt;/span&gt;
&lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Notification&quot; aria-label=&quot;notification&quot; aria-describedby=&quot;basic-addon1&quot;&gt;
&lt;/div&gt;

=========
Right
=========
&lt;div class=&quot;input-group mb-3&quot;&gt;
&lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Notification&quot; aria-label=&quot;notification&quot; aria-describedby=&quot;basic-addon1&quot;&gt;
&lt;span class=&quot;input-group-text&quot; id=&quot;basic-addon1&quot;&gt;&lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-loader spin&quot;&gt;&lt;line x1=&quot;12&quot; y1=&quot;2&quot; x2=&quot;12&quot; y2=&quot;6&quot;&gt;&lt;/line&gt;&lt;line x1=&quot;12&quot; y1=&quot;18&quot; x2=&quot;12&quot; y2=&quot;22&quot;&gt;&lt;/line&gt;&lt;line x1=&quot;4.93&quot; y1=&quot;4.93&quot; x2=&quot;7.76&quot; y2=&quot;7.76&quot;&gt;&lt;/line&gt;&lt;line x1=&quot;16.24&quot; y1=&quot;16.24&quot; x2=&quot;19.07&quot; y2=&quot;19.07&quot;&gt;&lt;/line&gt;&lt;line x1=&quot;2&quot; y1=&quot;12&quot; x2=&quot;6&quot; y2=&quot;12&quot;&gt;&lt;/line&gt;&lt;line x1=&quot;18&quot; y1=&quot;12&quot; x2=&quot;22&quot; y2=&quot;12&quot;&gt;&lt;/line&gt;&lt;line x1=&quot;4.93&quot; y1=&quot;19.07&quot; x2=&quot;7.76&quot; y2=&quot;16.24&quot;&gt;&lt;/line&gt;&lt;line x1=&quot;16.24&quot; y1=&quot;7.76&quot; x2=&quot;19.07&quot; y2=&quot;4.93&quot;&gt;&lt;/line&gt;&lt;/svg&gt;&lt;/span&gt;
&lt;/div&gt;
</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Dropdown Icon</h4>
                        </div>                      
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <p class="">Left</p>

                    <div class="input-group mb-3">
                        <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg></button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Action</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="#">Separated link</a></li>
                        </ul>
                        <input type="text" class="form-control" aria-label="Text input with dropdown button">
                    </div>

                    <p class="">Right</p>

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" aria-label="Text input with dropdown button">
                        <button class="btn btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg></button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="#">Separated link</a></li>
                        </ul>
                    </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
=========
LEFT
=========
&lt;div class=&quot;input-group mb-3&quot;&gt;
&lt;button class=&quot;btn btn-primary dropdown-toggle&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt;&lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-settings&quot;&gt;&lt;circle cx=&quot;12&quot; cy=&quot;12&quot; r=&quot;3&quot;&gt;&lt;/circle&gt;&lt;path d=&quot;M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z&quot;&gt;&lt;/path&gt;&lt;/svg&gt;&lt;/button&gt;
&lt;ul class=&quot;dropdown-menu&quot;&gt;
&lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;hr class=&quot;dropdown-divider&quot;&gt;&lt;/li&gt;
&lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Text input with dropdown button&quot;&gt;
&lt;/div&gt;

=========
Right
=========
&lt;div class=&quot;input-group mb-3&quot;&gt;
&lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Text input with dropdown button&quot;&gt;
&lt;button class=&quot;btn btn-success dropdown-toggle&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt;&lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-settings&quot;&gt;&lt;circle cx=&quot;12&quot; cy=&quot;12&quot; r=&quot;3&quot;&gt;&lt;/circle&gt;&lt;path d=&quot;M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z&quot;&gt;&lt;/path&gt;&lt;/svg&gt;&lt;/button&gt;
&lt;ul class=&quot;dropdown-menu&quot;&gt;
&lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;hr class=&quot;dropdown-divider&quot;&gt;&lt;/li&gt;
&lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;/div&gt;
</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-lg-12 col-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">                                
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Checkboxes</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <p class="">Left</p>
                    <div class="input-group mb-3">
                        <div class="input-group-text">
                            <input class="form-check-input mt-0" type="checkbox" id="form-check-default-checked" checked="">
                        </div>
                        <input type="text" class="form-control" aria-label="Text input with checkbox">
                    </div>

                    <p class="">Right</p>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" aria-label="Text input with checkbox">
                        <div class="input-group-text">
                            <input class="form-check-input mt-0" type="checkbox" id="form-check-default-checked2" checked="">
                        </div>
                    </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
=========
LEFT
=========
&lt;div class=&quot;input-group mb-3&quot;&gt;
&lt;div class=&quot;input-group-text&quot;&gt;
&lt;input class=&quot;form-check-input mt-0&quot; type=&quot;checkbox&quot; value=&quot;&quot; aria-label=&quot;Checkbox for following text input&quot;&gt;
&lt;/div&gt;
&lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Text input with checkbox&quot;&gt;
&lt;/div&gt;

=========
Right
=========
&lt;div class=&quot;input-group mb-3&quot;&gt;
&lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Text input with checkbox&quot;&gt;
&lt;div class=&quot;input-group-text&quot;&gt;
&lt;input class=&quot;form-check-input mt-0&quot; type=&quot;checkbox&quot; value=&quot;&quot; aria-label=&quot;Checkbox for following text input&quot;&gt;
&lt;/div&gt;
&lt;/div&gt;
</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-lg-12 col-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">                                
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Radios</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <p class="">Left</p>
                    <div class="input-group mb-3">
                        <div class="input-group-text">
                          <input class="form-check-input mt-0" type="radio" value="" aria-label="Radio button for following text input">
                        </div>
                        <input type="text" class="form-control" aria-label="Text input with radio button">
                    </div>

                    <p class="">Right</p>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" aria-label="Text input with radio button">
                        <div class="input-group-text">
                            <input class="form-check-input mt-0" type="radio" value="" aria-label="Radio button for following text input">
                        </div>
                    </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
=========
LEFT
=========
&lt;div class=&quot;input-group&quot;&gt;
&lt;div class=&quot;input-group-text&quot;&gt;
&lt;input class=&quot;form-check-input mt-0&quot; type=&quot;radio&quot; value=&quot;&quot; aria-label=&quot;Radio button for following text input&quot;&gt;
&lt;/div&gt;
&lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Text input with radio button&quot;&gt;
&lt;/div&gt;

=========
Right
=========
&lt;div class=&quot;input-group&quot;&gt;
&lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Text input with radio button&quot;&gt;
&lt;div class=&quot;input-group-text&quot;&gt;
&lt;input class=&quot;form-check-input mt-0&quot; type=&quot;radio&quot; value=&quot;&quot; aria-label=&quot;Radio button for following text input&quot;&gt;
&lt;/div&gt;
&lt;/div&gt;

</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <div class="row layout-spacing">

        <div id="sizes" class="col-lg-12">
            <div class="seperator-header">
                <h4 class="">Sizing</h4>
            </div>
        </div>

        <div class="col-lg-12 col-sm-12 col-12 layout-spacing">
            <div class="row">
                <div class="col-md-12 mb-4">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">                                
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Sizing</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Small</span>
                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                            </div>
                            
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">Default</span>
                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                            </div>
                            
                            <div class="input-group input-group-lg">
                                <span class="input-group-text" id="inputGroup-sizing-lg">Large</span>
                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                            </div>

                            <div class="code-section-container">
                                
                                <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                                <div class="code-section text-left">
                                    <pre>
&lt;div class=&quot;input-group input-group-sm mb-3&quot;&gt;
&lt;span class=&quot;input-group-text&quot; id=&quot;inputGroup-sizing-sm&quot;&gt;Small&lt;/span&gt;
&lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Sizing example input&quot; aria-describedby=&quot;inputGroup-sizing-sm&quot;&gt;
&lt;/div&gt;

&lt;div class=&quot;input-group mb-3&quot;&gt;
&lt;span class=&quot;input-group-text&quot; id=&quot;inputGroup-sizing-default&quot;&gt;Default&lt;/span&gt;
&lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Sizing example input&quot; aria-describedby=&quot;inputGroup-sizing-default&quot;&gt;
&lt;/div&gt;

&lt;div class=&quot;input-group input-group-lg&quot;&gt;
&lt;span class=&quot;input-group-text&quot; id=&quot;inputGroup-sizing-lg&quot;&gt;Large&lt;/span&gt;
&lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Sizing example input&quot; aria-describedby=&quot;inputGroup-sizing-lg&quot;&gt;
&lt;/div&gt;
</pre>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div id="multiple" class="col-lg-12">
                    <div class="seperator-header">
                        <h4 class="">Multiple Fields</h4>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">                                
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Multiple inputs</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <div class="input-group">
                                <span class="input-group-text">First and last name</span>
                                <input type="text" aria-label="First name" class="form-control">
                                <input type="text" aria-label="Last name" class="form-control">
                            </div>

                            <div class="code-section-container">
                                
                                <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                                <div class="code-section text-left">
                                    <pre>
&lt;div class=&quot;input-group&quot;&gt;
&lt;span class=&quot;input-group-text&quot;&gt;First and last name&lt;/span&gt;
&lt;input type=&quot;text&quot; aria-label=&quot;First name&quot; class=&quot;form-control&quot;&gt;
&lt;input type=&quot;text&quot; aria-label=&quot;Last name&quot; class=&quot;form-control&quot;&gt;
&lt;/div&gt;
</pre>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12 col-sm-12 col-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">                                
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Multiple addons</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <p class="">Left</p>
                    <div class="input-group mb-3">
                        <span class="input-group-text">$</span>
                        <span class="input-group-text">0.00</span>
                        <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
                    </div>

                    <p class="">Right</p>
                    <div class="input-group">
                        <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
                        <span class="input-group-text">$</span>
                        <span class="input-group-text">0.00</span>
                    </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
=========
LEFT
=========
&lt;div class=&quot;input-group mb-3&quot;&gt;
&lt;span class=&quot;input-group-text&quot;&gt;$&lt;/span&gt;
&lt;span class=&quot;input-group-text&quot;&gt;0.00&lt;/span&gt;
&lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Dollar amount (with dot and two decimal places)&quot;&gt;
&lt;/div&gt;

=========
RIGHT
=========
&lt;div class=&quot;input-group&quot;&gt;
&lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Dollar amount (with dot and two decimal places)&quot;&gt;
&lt;span class=&quot;input-group-text&quot;&gt;$&lt;/span&gt;
&lt;span class=&quot;input-group-text&quot;&gt;0.00&lt;/span&gt;
&lt;/div&gt;
</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="Input_group_action" class="col-lg-12">
            <div class="seperator-header">
                <h4 class="">Input Group with Action</h4>
            </div>
        </div>

        <div class="col-lg-12 col-sm-12 col-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">                                
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Buttons with dropdowns</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <p class="">Left</p>
                    <div class="input-group mb-3">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                        </ul>
                        <input type="text" class="form-control" aria-label="Text input with dropdown button">
                    </div>

                    <p class="">Right</p>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" aria-label="Text input with dropdown button">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                        </ul>
                    </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
=========
LEFT
=========
&lt;div class=&quot;input-group mb-3&quot;&gt;
&lt;button class=&quot;btn btn-secondary dropdown-toggle&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt;Dropdown&lt;/button&gt;
&lt;ul class=&quot;dropdown-menu&quot;&gt;
&lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;hr class=&quot;dropdown-divider&quot;&gt;&lt;/li&gt;
&lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Text input with dropdown button&quot;&gt;
&lt;/div&gt;

=========
RIGHT
=========
&lt;div class=&quot;input-group mb-3&quot;&gt;
&lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Text input with dropdown button&quot;&gt;
&lt;button class=&quot;btn btn-secondary dropdown-toggle&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt;Dropdown&lt;/button&gt;
&lt;ul class=&quot;dropdown-menu dropdown-menu-end&quot;&gt;
&lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;hr class=&quot;dropdown-divider&quot;&gt;&lt;/li&gt;
&lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;/div&gt;
</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-lg-12 col-sm-12 col-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">                                
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Segmented buttons</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <p class="">Left</p>
                    <div class="input-group mb-3">
                        <button type="button" class="btn btn-primary">Action</button>
                        <button type="button" class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Action</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="#">Separated link</a></li>
                        </ul>
                        <input type="text" class="form-control" aria-label="Text input with segmented dropdown button">
                    </div>
                      
                    <p class="">Right</p>
                    <div class="input-group">
                        <input type="text" class="form-control" aria-label="Text input with segmented dropdown button">
                        <button type="button" class="btn btn-outline-primary">Action</button>
                        <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                        </ul>
                    </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
=========
LEFT
=========
&lt;div class=&quot;input-group mb-3&quot;&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Action&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary dropdown-toggle dropdown-toggle-split&quot; data-bs-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt;
&lt;span class=&quot;visually-hidden&quot;&gt;Toggle Dropdown&lt;/span&gt;
&lt;/button&gt;
&lt;ul class=&quot;dropdown-menu&quot;&gt;
&lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;hr class=&quot;dropdown-divider&quot;&gt;&lt;/li&gt;
&lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Text input with segmented dropdown button&quot;&gt;
&lt;/div&gt;

=========
RIGHT
=========
&lt;div class=&quot;input-group&quot;&gt;
&lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Text input with segmented dropdown button&quot;&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary&quot;&gt;Action&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary dropdown-toggle dropdown-toggle-split&quot; data-bs-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt;
&lt;span class=&quot;visually-hidden&quot;&gt;Toggle Dropdown&lt;/span&gt;
&lt;/button&gt;
&lt;ul class=&quot;dropdown-menu dropdown-menu-end&quot;&gt;
&lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;hr class=&quot;dropdown-divider&quot;&gt;&lt;/li&gt;
&lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;/div&gt;

</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-lg-12 col-sm-12 col-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">                                
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Button addons</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <p class="">Left</p>
                    <div class="input-group mb-3">
                        <button class="btn btn-primary" type="button" id="button-addon1">Button</button>
                        <input type="text" class="form-control" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                    </div>

                    <p class="">Right</p>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
                        <button class="btn btn-primary" type="button" id="button-addon2">Button</button>
                    </div>

                    <p class="">Left</p>
                    <div class="input-group mb-3">
                        <button class="btn btn-outline-primary" type="button">Button</button>
                        <button class="btn btn-outline-primary" type="button">Button</button>
                        <input type="text" class="form-control" placeholder="" aria-label="Example text with two button addons">
                    </div>
                    
                    <p class="">Right</p>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username with two button addons">
                        <button class="btn btn-outline-primary" type="button">Button</button>
                        <button class="btn btn-outline-primary" type="button">Button</button>
                    </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
=========
LEFT
=========
&lt;div class=&quot;input-group mb-3&quot;&gt;
&lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot; id=&quot;button-addon1&quot;&gt;Button&lt;/button&gt;
&lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;&quot; aria-label=&quot;Example text with button addon&quot; aria-describedby=&quot;button-addon1&quot;&gt;
&lt;/div&gt;

=========
RIGHT
=========
&lt;div class=&quot;input-group mb-3&quot;&gt;
&lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Recipient's username&quot; aria-label=&quot;Recipient's username&quot; aria-describedby=&quot;button-addon2&quot;&gt;
&lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot; id=&quot;button-addon2&quot;&gt;Button&lt;/button&gt;
&lt;/div&gt;

=========
LEFT
=========
&lt;div class=&quot;input-group mb-3&quot;&gt;
&lt;button class=&quot;btn btn-outline-primary&quot; type=&quot;button&quot;&gt;Button&lt;/button&gt;
&lt;button class=&quot;btn btn-outline-primary&quot; type=&quot;button&quot;&gt;Button&lt;/button&gt;
&lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;&quot; aria-label=&quot;Example text with two button addons&quot;&gt;
&lt;/div&gt;

=========
RIGHT
=========
&lt;div class=&quot;input-group&quot;&gt;
&lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Recipient's username&quot; aria-label=&quot;Recipient's username with two button addons&quot;&gt;
&lt;button class=&quot;btn btn-outline-primary&quot; type=&quot;button&quot;&gt;Button&lt;/button&gt;
&lt;button class=&quot;btn btn-outline-primary&quot; type=&quot;button&quot;&gt;Button&lt;/button&gt;
&lt;/div&gt;

</pre>
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
</x-base-layout>