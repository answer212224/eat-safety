<x-base-layout :scrollspy="true">

    <x-slot:pageTitle>
        {{$title}} 
    </x-slot>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <x-slot:headerFiles>
        <!--  BEGIN CUSTOM STYLE FILE  -->
        @vite(['resources/scss/light/assets/elements/infobox.scss', 'resources/scss/dark/assets/elements/infobox.scss'])
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
                <li class="breadcrumb-item active" aria-current="page">Infobox</li>
            </ol>
        </nav>
    </div>
    <!-- /BREADCRUMB -->

    <div id="navSection" data-bs-spy="affix" class="nav sidenav">
        <div class="sidenav-content">
            <a href="#infobox1" class="active nav-link">Infobox 1</a>
            <a href="#infobox2" class="nav-link">Infobox 2</a>
            <a href="#infobox3" class="nav-link">Infobox 3</a>
            <a href="#infobox4" class="nav-link">Infobox 4</a>
        </div>
    </div>

    <div class="row layout-top-spacing">
        <div id="infobox1" class="col-xl-12 col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4> Infobox 1 </h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">

                    <div class="info-box-1 color-2">
                        <div class="info-box-1-icon-wrapper">
                            <div class="info-box-1-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-coffee"><path d="M18 8h1a4 4 0 0 1 0 8h-1"></path><path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path><line x1="6" y1="1" x2="6" y2="4"></line><line x1="10" y1="1" x2="10" y2="4"></line><line x1="14" y1="1" x2="14" y2="4"></line></svg>
                            </div>
                        </div>
                        <div class="info-box-1-content-wrapper">
                          <h3 class="info-box-1-title">CRM Project</h3>
                          <div class="info-box-1-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </div>
                        </div>
                        <a class="info-box-1-button" href="#">View Details </a>
                    </div>

                    <div class="code-section-container show-code">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;div class=&quot;info-box-1 color-2&quot;&gt;
&lt;div class=&quot;info-box-1-icon-wrapper&quot;&gt;
&lt;div class=&quot;info-box-1-icon&quot;&gt;
&lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-coffee&quot;&gt;&lt;path d=&quot;M18 8h1a4 4 0 0 1 0 8h-1&quot;&gt;&lt;/path&gt;&lt;path d=&quot;M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z&quot;&gt;&lt;/path&gt;&lt;line x1=&quot;6&quot; y1=&quot;1&quot; x2=&quot;6&quot; y2=&quot;4&quot;&gt;&lt;/line&gt;&lt;line x1=&quot;10&quot; y1=&quot;1&quot; x2=&quot;10&quot; y2=&quot;4&quot;&gt;&lt;/line&gt;&lt;line x1=&quot;14&quot; y1=&quot;1&quot; x2=&quot;14&quot; y2=&quot;4&quot;&gt;&lt;/line&gt;&lt;/svg&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;info-box-1-content-wrapper&quot;&gt;
&lt;h3 class=&quot;info-box-1-title&quot;&gt;CRM Project&lt;/h3&gt;
&lt;div class=&quot;info-box-1-content&quot;&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. &lt;/div&gt;
&lt;/div&gt;
&lt;a class=&quot;info-box-1-button&quot; href=&quot;#&quot;&gt;View Details &lt;/a&gt;
&lt;/div&gt;</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="infobox2" class="col-xl-12 col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4> Infobox 2 </h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area text-center">
                    <div class="info-box-2">
                        <div class="info-box-2-bg" style="background-image: url({{Vite::asset('resources/images/infobox-1.jpg')}});"></div>
                        <div class="info-box-2-bg-blur"></div>
                        <div class="info-box-2-content-wrapper">
                            <h3 class="info-box-2-title">Kick Start you new project with <br/> ease!</h3>
                            <div class="info-box-2-content">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing.</div>
                            <a class="btn btn-rounded btn-custom mt-4" href="#">Read More</a>
                        </div>
                    </div>
                    
                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;div class=&quot;info-box-2&quot;&gt;
&lt;div class=&quot;info-box-2-bg&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;info-box-2-bg-blur&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;info-box-2-content-wrapper&quot;&gt;
&lt;h3 class=&quot;info-box-2-title&quot;&gt;Kick Start you new project with &lt;br/&gt; ease!&lt;/h3&gt;
&lt;div class=&quot;info-box-2-content&quot;&gt;Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing.&lt;/div&gt;
&lt;a class=&quot;btn btn-rounded btn-custom mt-4&quot; href=&quot;#&quot;&gt;Read More&lt;/a&gt;
&lt;/div&gt;
&lt;/div&gt;</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="infobox3" class="col-xl-12 col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4> Infobox 3 </h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <div class="info-box-3">
                        <div class="info-box-3-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-coffee"><path d="M18 8h1a4 4 0 0 1 0 8h-1"></path><path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path><line x1="6" y1="1" x2="6" y2="4"></line><line x1="10" y1="1" x2="10" y2="4"></line><line x1="14" y1="1" x2="14" y2="4"></line></svg>
                        </div>
                        <div class="info-box-3-content-wrapper">
                            <h3 class="info-box-3-title">Responsive Design</h3>
                            <div class="info-box-3-content">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing.</div>
                        </div>
                    </div>
                    
                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;div class=&quot;info-box-3&quot;&gt;
&lt;div class=&quot;info-box-3-icon&quot;&gt;
&lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-coffee&quot;&gt;&lt;path d=&quot;M18 8h1a4 4 0 0 1 0 8h-1&quot;&gt;&lt;/path&gt;&lt;path d=&quot;M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z&quot;&gt;&lt;/path&gt;&lt;line x1=&quot;6&quot; y1=&quot;1&quot; x2=&quot;6&quot; y2=&quot;4&quot;&gt;&lt;/line&gt;&lt;line x1=&quot;10&quot; y1=&quot;1&quot; x2=&quot;10&quot; y2=&quot;4&quot;&gt;&lt;/line&gt;&lt;line x1=&quot;14&quot; y1=&quot;1&quot; x2=&quot;14&quot; y2=&quot;4&quot;&gt;&lt;/line&gt;&lt;/svg&gt;
&lt;/div&gt;
&lt;div class=&quot;info-box-3-content-wrapper&quot;&gt;
&lt;h3 class=&quot;info-box-3-title&quot;&gt;Responsive Design&lt;/h3&gt;
&lt;div class=&quot;info-box-3-content&quot;&gt;Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing.&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="infobox4" class="col-xl-12 col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4> Infobox 4 </h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area text-center">

                    <div class="info-box-4">
                        <div class="info-box-4-bg"  style="background-image: url({{Vite::asset('resources/images/infobox-2.jpg')}});"></div>
                        <div class="info-box-4-bg-blur"></div>
                        <div class="info-box-4-content-wrapper">
                            <h3 class="info-box-4-title">Kick Start you new project with ease!</h3>
                            <div class="info-box-4-content">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing.</div>
                            <a class="btn btn-rounded btn-custom mt-4" href="#">Read More</a>
                        </div>
                    </div>
                    
                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;div class=&quot;info-box-4&quot;&gt;
&lt;div class=&quot;info-box-4-bg&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;info-box-4-bg-blur&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;info-box-4-content-wrapper&quot;&gt;
&lt;h3 class=&quot;info-box-4-title&quot;&gt;Kick Start you new project with ease!&lt;/h3&gt;
&lt;div class=&quot;info-box-4-content&quot;&gt;Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing.&lt;/div&gt;
&lt;a class=&quot;btn btn-rounded btn-custom mt-4&quot; href=&quot;#&quot;&gt;Read More&lt;/a&gt;
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
</x-base-layout>