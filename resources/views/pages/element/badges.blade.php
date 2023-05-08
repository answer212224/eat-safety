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
                <li class="breadcrumb-item"><a href="#">Elements</a></li>
                <li class="breadcrumb-item active" aria-current="page">Badges</li>
            </ol>
        </nav>
    </div>
    <!-- /BREADCRUMB -->
    
    <div id="navSection" data-bs-spy="affix" class="nav sidenav">
        <div class="sidenav-content">
            <a href="#badgeDefault" class="active nav-link">Default</a>
            <a href="#badgeLight" class="nav-link">Light</a>
            <a href="#badgeOutline" class="nav-link">Outline</a>
            <a href="#badgeWithIcons" class="nav-link">With Icons</a>
            <a href="#badgeDotted" class="nav-link">Dot</a>
            <a href="#badgeCustom" class="nav-link">Custom</a>
        </div>
    </div>

    <div class="row layout-top-spacing">
        <div id="badgeDefault" class="col-lg-12 mx-auto layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Default</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area text-center">
                    <span class="badge badge-primary mb-2 me-4">Primary</span>
                    <span class="badge badge-info mb-2 me-4">Info</span>
                    <span class="badge badge-success mb-2 me-4">Success</span>
                    <span class="badge badge-secondary mb-2 me-4">Secondary</span>
                    <span class="badge badge-warning mb-2 me-4">Warning</span>
                    <span class="badge badge-danger mb-2 me-4">Danger</span>
                    <span class="badge badge-dark mb-2 me-4">Dark</span>

                    <div class="code-section-container show-code">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;span class=&quot;badge badge-primary mb-2 me-4&quot;&gt;Primary&lt;/span&gt;
&lt;span class=&quot;badge badge-info mb-2 me-4&quot;&gt;Info&lt;/span&gt;
&lt;span class=&quot;badge badge-success mb-2 me-4&quot;&gt;Success&lt;/span&gt;
&lt;span class=&quot;badge badge-secondary mb-2 me-4&quot;&gt;Secondary&lt;/span&gt;
&lt;span class=&quot;badge badge-warning mb-2 me-4&quot;&gt;Warning&lt;/span&gt;
&lt;span class=&quot;badge badge-danger mb-2 me-4&quot;&gt;Danger&lt;/span&gt;
&lt;span class=&quot;badge badge-dark mb-2 me-4&quot;&gt;Dark&lt;/span&gt; </pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="badgeLight" class="col-lg-12 mx-auto layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Light</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area text-center">
                    <span class="badge badge-light-primary mb-2 me-4">Primary</span>
                    <span class="badge badge-light-info mb-2 me-4">Info</span>
                    <span class="badge badge-light-success mb-2 me-4">Success</span>
                    <span class="badge badge-light-secondary mb-2 me-4">Secondary</span>
                    <span class="badge badge-light-warning mb-2 me-4">Warning</span>
                    <span class="badge badge-light-danger mb-2 me-4">Danger</span>
                    <span class="badge badge-light-dark mb-2 me-4">Dark</span>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;span class=&quot;badge badge-light-primary mb-2 me-4&quot;&gt;Primary&lt;/span&gt;
&lt;span class=&quot;badge badge-light-info mb-2 me-4&quot;&gt;Info&lt;/span&gt;
&lt;span class=&quot;badge badge-light-success mb-2 me-4&quot;&gt;Success&lt;/span&gt;
&lt;span class=&quot;badge badge-light-secondary mb-2 me-4&quot;&gt;Secondary&lt;/span&gt;
&lt;span class=&quot;badge badge-light-warning mb-2 me-4&quot;&gt;Warning&lt;/span&gt;
&lt;span class=&quot;badge badge-light-danger mb-2 me-4&quot;&gt;Danger&lt;/span&gt;
&lt;span class=&quot;badge badge-light-dark mb-2 me-4&quot;&gt;Dark&lt;/span&gt; </pre>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

        <div id="badgeOutline" class="col-lg-12 mx-auto layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4> Outline</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area text-center">
                    <span class="badge outline-badge-primary mb-2 me-4">Primary</span>
                    <span class="badge outline-badge-info mb-2 me-4">Info</span>
                    <span class="badge outline-badge-success mb-2 me-4">Success</span>
                    <span class="badge outline-badge-secondary mb-2 me-4">Secondary</span>
                    <span class="badge outline-badge-warning mb-2 me-4">Warning</span>
                    <span class="badge outline-badge-danger mb-2 me-4">Danger</span>
                    <span class="badge outline-badge-dark mb-2 me-4">Dark</span>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>
                        <div class="code-section text-left">
                            <pre>
&lt;span class=&quot;badge outline-badge-primary mb-2 me-4&quot;&gt;Primary&lt;/span&gt;
&lt;span class=&quot;badge outline-badge-info mb-2 me-4&quot;&gt;Info&lt;/span&gt;
&lt;span class=&quot;badge outline-badge-success mb-2 me-4&quot;&gt;Success&lt;/span&gt;
&lt;span class=&quot;badge outline-badge-secondary mb-2 me-4&quot;&gt;Secondary&lt;/span&gt;
&lt;span class=&quot;badge outline-badge-warning mb-2 me-4&quot;&gt;Warning&lt;/span&gt;
&lt;span class=&quot;badge outline-badge-danger mb-2 me-4&quot;&gt;Danger&lt;/span&gt;
&lt;span class=&quot;badge outline-badge-dark mb-2 me-4&quot;&gt;Dark&lt;/span&gt;</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="badgeWithIcons" class="col-lg-12 mx-auto layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>With Icons</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area text-center">

                    <p class="mb-4">To apply icons just add the <code>SVG</code> code inside the <code>badge</code></p>
                    
                    <span class="badge badge-primary mb-2 me-4"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg> Primary</span>
                    <span class="badge badge-light-info mb-2 me-4"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg> Info</span>
                    <span class="badge outline-badge-success mb-2 me-4"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg> Success</span>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;span class=&quot;badge badge-primary mb-2 me-4&quot;&gt;&lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-heart&quot;&gt;&lt;path d=&quot;M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z&quot;&gt;&lt;/path&gt;&lt;/svg&gt; Primary&lt;/span&gt;
&lt;span class=&quot;badge badge-light-info mb-2 me-4&quot;&gt;&lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-heart&quot;&gt;&lt;path d=&quot;M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z&quot;&gt;&lt;/path&gt;&lt;/svg&gt; Info&lt;/span&gt;
&lt;span class=&quot;badge outline-badge-success mb-2 me-4&quot;&gt;&lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-heart&quot;&gt;&lt;path d=&quot;M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z&quot;&gt;&lt;/path&gt;&lt;/svg&gt; Success&lt;/span&gt;</pre>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

        <div id="badgeDotted" class="col-lg-12 mx-auto layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Dot</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area text-center">

                    <p class="mb-4">Add <code>.badge-dot</code> class to badges and wrap it with a <code>.badge--group</code> div</p>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="badge--group">
                                <div class="badge badge-success badge-dot"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="badge--group">
                                <div class="badge badge-primary badge-dot"></div>
                                <div class="badge badge-danger badge-dot"></div>
                                <div class="badge badge-info badge-dot"></div>
                            </div>
                        </div>
                    </div>

                    <div class="code-section-container">

                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>
                        <div class="code-section text-left">
                            <pre>
&lt;div class=&quot;badge--group&quot;&gt;
&lt;div class=&quot;badge badge-primary badge-dot&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;badge badge-danger badge-dot&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;badge badge-info badge-dot&quot;&gt;&lt;/div&gt;
&lt;/div&gt; </pre>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

        <div id="badgeCustom" class="col-lg-12 mx-auto layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4> Custom Badges</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area text-center">
                    
                    <button class="btn btn-success _no--effects position-relative mb-2 me-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                        <span class="btn-text-inner">Chat</span>
                        <span class="badge badge-danger counter">9</span>
                    </button>

                    <button class="btn btn-info _no--effects position-relative mb-2 me-4">
                        <span class="btn-text-inner">Tweets</span>
                        <span class="badge badge-danger counter">4</span>
                    </button>

                    <button class="btn btn-primary _no--effects position-relative btn-icon mb-2 me-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                        <span class="badge badge-danger counter">2</span>
                    </button>

                    <button class="btn btn-secondary _no--effects position-relative btn-icon btn-rounded mb-2 me-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                        <span class="badge badge-danger counter">8</span>
                    </button>

                    <button type="button" class="btn btn-dark _no--effects mb-2 me-4">
                        Notifications <span class="badge bg-light text-dark ms-2">4</span>
                    </button>

                    <div class="code-section-container">

                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>
                        <div class="code-section text-left">
                            <pre>
&lt;button class=&quot;btn btn-success position-relative mb-2 me-4&quot;&gt;
&lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-message-circle&quot;&gt;&lt;path d=&quot;M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z&quot;&gt;&lt;/path&gt;&lt;/svg&gt;
&lt;span class=&quot;btn-text-inner&quot;&gt;Chat&lt;/span&gt;
&lt;span class=&quot;badge badge-danger counter&quot;&gt;9&lt;/span&gt;
&lt;/button&gt;

&lt;button class=&quot;btn btn-info position-relative mb-2 me-4&quot;&gt;
&lt;span class=&quot;btn-text-inner&quot;&gt;Tweets&lt;/span&gt;
&lt;span class=&quot;badge badge-danger counter&quot;&gt;4&lt;/span&gt;
&lt;/button&gt;

&lt;button class=&quot;btn btn-primary position-relative btn-icon mb-2 me-4&quot;&gt;
&lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-message-circle&quot;&gt;&lt;path d=&quot;M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z&quot;&gt;&lt;/path&gt;&lt;/svg&gt;
&lt;span class=&quot;badge badge-danger counter&quot;&gt;2&lt;/span&gt;
&lt;/button&gt;

&lt;button class=&quot;btn btn-secondary position-relative btn-icon btn-rounded mb-2 me-4&quot;&gt;
&lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-message-circle&quot;&gt;&lt;path d=&quot;M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z&quot;&gt;&lt;/path&gt;&lt;/svg&gt;
&lt;span class=&quot;badge badge-danger counter&quot;&gt;8&lt;/span&gt;
&lt;/button&gt;

&lt;button type=&quot;button&quot; class=&quot;btn btn-dark mb-2 me-4&quot;&gt;
Notifications &lt;span class=&quot;badge bg-light text-dark ms-2&quot;&gt;4&lt;/span&gt;
&lt;/button&gt; </pre>
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