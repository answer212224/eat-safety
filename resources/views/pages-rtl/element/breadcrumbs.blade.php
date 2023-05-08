<x-rtl.base-layout :scrollspy="true">

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
                <li class="breadcrumb-item"><a href="#">Elements</a></li>
                <li class="breadcrumb-item active" aria-current="page">Breadcrumbs</li>
            </ol>
        </nav>
    </div>
    <!-- /BREADCRUMB -->

    <div id="navSection" data-bs-spy="affix" class="nav sidenav">
        <div class="sidenav-content">
            <a href="#breadcrumbDefault" class="active nav-link">Default</a>
            <a href="#breadcrumbStyles" class="active nav-link">Styles</a>
            <a href="#breadcrumbIcons" class="active nav-link">Icons</a>
            <a href="#breadcrumbPosition" class="nav-link">Position</a>
        </div>
    </div>

    <div class="row layout-top-spacing">

        <div id="breadcrumbDefault" class="col-xl-12 col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Default</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">

                    <nav class="breadcrumb-style-one mb-3" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                          <li class="breadcrumb-item"><a href="#">Library</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Data</li>
                        </ol>
                    </nav>

                    <div class="code-section-container show-code">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;nav class=&quot;breadcrumb-style-one mb-3&quot; aria-label=&quot;breadcrumb&quot;&gt;
    &lt;ol class=&quot;breadcrumb&quot;&gt;
        &lt;li class=&quot;breadcrumb-item&quot;&gt;&lt;a href=&quot;#&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;breadcrumb-item&quot;&gt;&lt;a href=&quot;#&quot;&gt;Library&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;breadcrumb-item active&quot; aria-current=&quot;page&quot;&gt;Data&lt;/li&gt;
    &lt;/ol&gt;
&lt;/nav&gt;</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="breadcrumbStyles" class="col-xl-12 col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Styles</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">

                    <nav class="breadcrumb-style-two  mb-3" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Library</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Data</li>
                        </ol>
                    </nav>
                    
                    <nav class="breadcrumb-style-three  mb-3" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="#">Home</a></li>
                          <li class="breadcrumb-item"><a href="#">Library</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Data</li>
                        </ol>
                    </nav>
                    
                    <nav class="breadcrumb-style-four  mb-3" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Library</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Data</li>
                        </ol>
                    </nav>
                    
                    <nav class="breadcrumb-style-five  mb-3" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="#">Home</a></li>
                          <li class="breadcrumb-item"><a href="#">Library</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Data</li>
                        </ol>
                    </nav>
                    
                    <nav class="breadcrumb-style-one mb-3" aria-label="breadcrumb">
                        <ol class="breadcrumb">

                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                          <li class="breadcrumb-item"><a href="#">Library</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Data</li>
                        </ol>
                    </nav>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>

&lt;!-- Dotted --&gt;

&lt;nav class=&quot;breadcrumb-style-two  mb-3&quot; aria-label=&quot;breadcrumb&quot;&gt;
&lt;ol class=&quot;breadcrumb&quot;&gt;
&lt;li class=&quot;breadcrumb-item&quot;&gt;&lt;a href=&quot;#&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;
&lt;li class=&quot;breadcrumb-item&quot;&gt;&lt;a href=&quot;#&quot;&gt;Library&lt;/a&gt;&lt;/li&gt;
&lt;li class=&quot;breadcrumb-item active&quot; aria-current=&quot;page&quot;&gt;Data&lt;/li&gt;
&lt;/ol&gt;
&lt;/nav&gt;

&lt;!-- Dashed --&gt;

&lt;nav class=&quot;breadcrumb-style-three  mb-3&quot; aria-label=&quot;breadcrumb&quot;&gt;
&lt;ol class=&quot;breadcrumb&quot;&gt;
&lt;li class=&quot;breadcrumb-item&quot;&gt;&lt;a href=&quot;#&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;
&lt;li class=&quot;breadcrumb-item&quot;&gt;&lt;a href=&quot;#&quot;&gt;Library&lt;/a&gt;&lt;/li&gt;
&lt;li class=&quot;breadcrumb-item active&quot; aria-current=&quot;page&quot;&gt;Data&lt;/li&gt;
&lt;/ol&gt;
&lt;/nav&gt;

&lt;!-- Pipe --&gt;

&lt;nav class=&quot;breadcrumb-style-four  mb-3&quot; aria-label=&quot;breadcrumb&quot;&gt;
&lt;ol class=&quot;breadcrumb&quot;&gt;
&lt;li class=&quot;breadcrumb-item&quot;&gt;&lt;a href=&quot;#&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;
&lt;li class=&quot;breadcrumb-item&quot;&gt;&lt;a href=&quot;#&quot;&gt;Library&lt;/a&gt;&lt;/li&gt;
&lt;li class=&quot;breadcrumb-item active&quot; aria-current=&quot;page&quot;&gt;Data&lt;/li&gt;
&lt;/ol&gt;
&lt;/nav&gt;

&lt;!-- Arrowed --&gt;

&lt;nav class=&quot;breadcrumb-style-five  mb-3&quot; aria-label=&quot;breadcrumb&quot;&gt;
&lt;ol class=&quot;breadcrumb&quot;&gt;
&lt;li class=&quot;breadcrumb-item&quot;&gt;&lt;a href=&quot;#&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;
&lt;li class=&quot;breadcrumb-item&quot;&gt;&lt;a href=&quot;#&quot;&gt;Library&lt;/a&gt;&lt;/li&gt;
&lt;li class=&quot;breadcrumb-item active&quot; aria-current=&quot;page&quot;&gt;Data&lt;/li&gt;
&lt;/ol&gt;
&lt;/nav&gt;

&lt;!-- Default --&gt;

&lt;nav class=&quot;breadcrumb-style-one mb-3&quot; aria-label=&quot;breadcrumb&quot;&gt;
&lt;ol class=&quot;breadcrumb&quot;&gt;

&lt;li class=&quot;breadcrumb-item&quot;&gt;&lt;a href=&quot;#&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;
&lt;li class=&quot;breadcrumb-item&quot;&gt;&lt;a href=&quot;#&quot;&gt;Library&lt;/a&gt;&lt;/li&gt;
&lt;li class=&quot;breadcrumb-item active&quot; aria-current=&quot;page&quot;&gt;Data&lt;/li&gt;
&lt;/ol&gt;
&lt;/nav&gt;</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="breadcrumbIcons" class="col-xl-12 col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Icons</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">

                    <nav class="breadcrumb-style-two  mb-3" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg><span class="inner-text">Home</span></a></li>
                            <li class="breadcrumb-item"><a href="#">Library</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Data</li>
                        </ol>
                    </nav>
                    
                    <nav class="breadcrumb-style-three  mb-3" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg><span class="inner-text">Home</span></a></li>
                          <li class="breadcrumb-item"><a href="#">Library</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Data</li>
                        </ol>
                    </nav>
                    
                    <nav class="breadcrumb-style-four  mb-3" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg><span class="inner-text">Home</span></a></li>
                            <li class="breadcrumb-item"><a href="#">Library</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Data</li>
                        </ol>
                    </nav>
                    
                    <nav class="breadcrumb-style-five  mb-3" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg><span class="inner-text">Home</span></a></li>
                          <li class="breadcrumb-item"><a href="#">Library</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Data</li>
                        </ol>
                    </nav>
                    
                    <nav class="breadcrumb-style-one  mb-3" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg><span class="inner-text">Home</span></a></li>
                            <li class="breadcrumb-item"><a href="#">Library</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Data</li>
                        </ol>
                    </nav>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;!-- Dotted --&gt;

&lt;nav class=&quot;breadcrumb-style-two  mb-3&quot; aria-label=&quot;breadcrumb&quot;&gt;
&lt;ol class=&quot;breadcrumb&quot;&gt;
&lt;li class=&quot;breadcrumb-item&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-home&quot;&gt;&lt;path d=&quot;M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z&quot;&gt;&lt;/path&gt;&lt;polyline points=&quot;9 22 9 12 15 12 15 22&quot;&gt;&lt;/polyline&gt;&lt;/svg&gt;&lt;span class=&quot;inner-text&quot;&gt;Home&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
&lt;li class=&quot;breadcrumb-item&quot;&gt;&lt;a href=&quot;#&quot;&gt;Library&lt;/a&gt;&lt;/li&gt;
&lt;li class=&quot;breadcrumb-item active&quot; aria-current=&quot;page&quot;&gt;Data&lt;/li&gt;
&lt;/ol&gt;
&lt;/nav&gt;

&lt;!-- Dashed --&gt;

&lt;nav class=&quot;breadcrumb-style-three  mb-3&quot; aria-label=&quot;breadcrumb&quot;&gt;
&lt;ol class=&quot;breadcrumb&quot;&gt;
&lt;li class=&quot;breadcrumb-item&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-home&quot;&gt;&lt;path d=&quot;M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z&quot;&gt;&lt;/path&gt;&lt;polyline points=&quot;9 22 9 12 15 12 15 22&quot;&gt;&lt;/polyline&gt;&lt;/svg&gt;&lt;span class=&quot;inner-text&quot;&gt;Home&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
&lt;li class=&quot;breadcrumb-item&quot;&gt;&lt;a href=&quot;#&quot;&gt;Library&lt;/a&gt;&lt;/li&gt;
&lt;li class=&quot;breadcrumb-item active&quot; aria-current=&quot;page&quot;&gt;Data&lt;/li&gt;
&lt;/ol&gt;
&lt;/nav&gt;

&lt;!-- Pipe --&gt;

&lt;nav class=&quot;breadcrumb-style-four  mb-3&quot; aria-label=&quot;breadcrumb&quot;&gt;
&lt;ol class=&quot;breadcrumb&quot;&gt;
&lt;li class=&quot;breadcrumb-item&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-home&quot;&gt;&lt;path d=&quot;M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z&quot;&gt;&lt;/path&gt;&lt;polyline points=&quot;9 22 9 12 15 12 15 22&quot;&gt;&lt;/polyline&gt;&lt;/svg&gt;&lt;span class=&quot;inner-text&quot;&gt;Home&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
&lt;li class=&quot;breadcrumb-item&quot;&gt;&lt;a href=&quot;#&quot;&gt;Library&lt;/a&gt;&lt;/li&gt;
&lt;li class=&quot;breadcrumb-item active&quot; aria-current=&quot;page&quot;&gt;Data&lt;/li&gt;
&lt;/ol&gt;
&lt;/nav&gt;

&lt;!-- Arrowed --&gt;

&lt;nav class=&quot;breadcrumb-style-five  mb-3&quot; aria-label=&quot;breadcrumb&quot;&gt;
&lt;ol class=&quot;breadcrumb&quot;&gt;
&lt;li class=&quot;breadcrumb-item&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-home&quot;&gt;&lt;path d=&quot;M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z&quot;&gt;&lt;/path&gt;&lt;polyline points=&quot;9 22 9 12 15 12 15 22&quot;&gt;&lt;/polyline&gt;&lt;/svg&gt;&lt;span class=&quot;inner-text&quot;&gt;Home&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
&lt;li class=&quot;breadcrumb-item&quot;&gt;&lt;a href=&quot;#&quot;&gt;Library&lt;/a&gt;&lt;/li&gt;
&lt;li class=&quot;breadcrumb-item active&quot; aria-current=&quot;page&quot;&gt;Data&lt;/li&gt;
&lt;/ol&gt;
&lt;/nav&gt;

&lt;!-- Default --&gt;

&lt;nav class=&quot;breadcrumb-style-one  mb-3&quot; aria-label=&quot;breadcrumb&quot;&gt;
&lt;ol class=&quot;breadcrumb&quot;&gt;
&lt;li class=&quot;breadcrumb-item&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-home&quot;&gt;&lt;path d=&quot;M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z&quot;&gt;&lt;/path&gt;&lt;polyline points=&quot;9 22 9 12 15 12 15 22&quot;&gt;&lt;/polyline&gt;&lt;/svg&gt;&lt;span class=&quot;inner-text&quot;&gt;Home&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
&lt;li class=&quot;breadcrumb-item&quot;&gt;&lt;a href=&quot;#&quot;&gt;Library&lt;/a&gt;&lt;/li&gt;
&lt;li class=&quot;breadcrumb-item active&quot; aria-current=&quot;page&quot;&gt;Data&lt;/li&gt;
&lt;/ol&gt;
&lt;/nav&gt;</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="breadcrumbPosition" class="col-xl-12 col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Position</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">

                    <div class="breadcrumb-wrapper-content  mb-5 d-flex justify-content-start">
                        <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                            <ol class="breadcrumb">

                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                              <li class="breadcrumb-item"><a href="#">Library</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Data</li>
                            </ol>
                        </nav>
                    </div>

                    <div class="breadcrumb-wrapper-content mb-5 d-flex justify-content-center">
                        <nav class="breadcrumb-style-one " aria-label="breadcrumb">
                            <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="#">Home</a></li>
                              <li class="breadcrumb-item"><a href="#">Library</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Data</li>
                            </ol>
                        </nav>
                    </div>
                    
                    <div class="breadcrumb-wrapper-content d-flex justify-content-end">
                        <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="#">Home</a></li>
                              <li class="breadcrumb-item"><a href="#">Library</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Data</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;!-- Start --&gt;

&lt;div class=&quot;breadcrumb-wrapper-content  mb-5 d-flex justify-content-start&quot;&gt;
&lt;nav class=&quot;breadcrumb-style-one&quot; aria-label=&quot;breadcrumb&quot;&gt;
&lt;ol class=&quot;breadcrumb&quot;&gt;

&lt;li class=&quot;breadcrumb-item&quot;&gt;&lt;a href=&quot;#&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;
&lt;li class=&quot;breadcrumb-item&quot;&gt;&lt;a href=&quot;#&quot;&gt;Library&lt;/a&gt;&lt;/li&gt;
&lt;li class=&quot;breadcrumb-item active&quot; aria-current=&quot;page&quot;&gt;Data&lt;/li&gt;
&lt;/ol&gt;
&lt;/nav&gt;
&lt;/div&gt;

&lt;!-- Center --&gt;

&lt;div class=&quot;breadcrumb-wrapper-content mb-5 d-flex justify-content-center&quot;&gt;
&lt;nav class=&quot;breadcrumb-style-one &quot; aria-label=&quot;breadcrumb&quot;&gt;
&lt;ol class=&quot;breadcrumb&quot;&gt;
&lt;li class=&quot;breadcrumb-item&quot;&gt;&lt;a href=&quot;#&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;
&lt;li class=&quot;breadcrumb-item&quot;&gt;&lt;a href=&quot;#&quot;&gt;Library&lt;/a&gt;&lt;/li&gt;
&lt;li class=&quot;breadcrumb-item active&quot; aria-current=&quot;page&quot;&gt;Data&lt;/li&gt;
&lt;/ol&gt;
&lt;/nav&gt;
&lt;/div&gt;

&lt;!-- End --&gt;

&lt;div class=&quot;breadcrumb-wrapper-content d-flex justify-content-end&quot;&gt;
&lt;nav class=&quot;breadcrumb-style-one&quot; aria-label=&quot;breadcrumb&quot;&gt;
&lt;ol class=&quot;breadcrumb&quot;&gt;
&lt;li class=&quot;breadcrumb-item&quot;&gt;&lt;a href=&quot;#&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;
&lt;li class=&quot;breadcrumb-item&quot;&gt;&lt;a href=&quot;#&quot;&gt;Library&lt;/a&gt;&lt;/li&gt;
&lt;li class=&quot;breadcrumb-item active&quot; aria-current=&quot;page&quot;&gt;Data&lt;/li&gt;
&lt;/ol&gt;
&lt;/nav&gt;
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