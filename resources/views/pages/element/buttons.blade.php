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
                <li class="breadcrumb-item active" aria-current="page">Buttons</li>
            </ol>
        </nav>
    </div>
    <!-- /BREADCRUMB -->

    <div id="navSection" data-bs-spy="affix" class="nav sidenav">
        <div class="sidenav-content">
            <a href="#buttonsSolid" class="active nav-link">Default</a>
            <a href="#buttonsLight" class="nav-link">Light</a>
            <a href="#buttonsOutline" class="nav-link">Outline</a>
            <a href="#buttonsDisabled" class="nav-link">Disabled</a>
            <a href="#buttonsRounded" class="nav-link">Rounded</a>
            <a href="#buttonsSizes" class="nav-link">Sizes</a>
            <a href="#buttonsIcons" class="nav-link">Icons</a>
            <a href="#buttonsBlock" class="nav-link">Block</a>
        </div>
    </div>

    <div class="row layout-top-spacing">

        <div id="buttonsSolid" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header"> 
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Default</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area text-center split-buttons">
                    <p class="mb-4">Apply <code>.btn-*</code> class followed by <code>.btn </code> class to create <b>default</b> buttons.</p>

                    <button class="btn btn-primary mb-2 me-4">Primary</button>
                    <button class="btn btn-info mb-2 me-4">Info</button>
                    <button class="btn btn-success mb-2 me-4">Success</button>
                    <button class="btn btn-warning mb-2 me-4">Warning</button>
                    <button class="btn btn-danger mb-2 me-4">Danger</button>
                    <button class="btn btn-secondary mb-2 me-4">Secondary</button>
                    <button class="btn btn-dark mb-2 me-4">Dark</button>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;button class=&quot;btn btn-primary mb-2 me-4&quot;&gt;Primary&lt;/button&gt;

&lt;button class=&quot;btn btn-info mb-2 me-4&quot;&gt;Info&lt;/button&gt;

&lt;button class=&quot;btn btn-success mb-2 me-4&quot;&gt;Success&lt;/button&gt;

&lt;button class=&quot;btn btn-warning mb-2 me-4&quot;&gt;Warning&lt;/button&gt;

&lt;button class=&quot;btn btn-danger mb-2 me-4&quot;&gt;Danger&lt;/button&gt;

&lt;button class=&quot;btn btn-secondary mb-2 me-4&quot;&gt;Secondary&lt;/button&gt;

&lt;button class=&quot;btn btn-dark mb-2 me-4&quot;&gt;Dark&lt;/button&gt;</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="buttonsLight" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header"> 
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Light</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area text-center split-buttons">
                    <p class="mb-4">Apply <code>.btn-light-*</code> class followed by <code>.btn </code> class to create <b>light</b> buttons.</p>

                    <button class="btn btn-light-primary mb-2 me-4">Primary</button>
                    <button class="btn btn-light-info mb-2 me-4">Info</button>
                    <button class="btn btn-light-success mb-2 me-4">Success</button>
                    <button class="btn btn-light-warning mb-2 me-4">Warning</button>
                    <button class="btn btn-light-danger mb-2 me-4">Danger</button>
                    <button class="btn btn-light-secondary mb-2 me-4">Secondary</button>
                    <button class="btn btn-light-dark mb-2 me-4">Dark</button>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;button class=&quot;btn btn-light-primary mb-2 me-4&quot;&gt;Primary&lt;/button&gt;

&lt;button class=&quot;btn btn-light-info mb-2 me-4&quot;&gt;Info&lt;/button&gt;

&lt;button class=&quot;btn btn-light-success mb-2 me-4&quot;&gt;Success&lt;/button&gt;

&lt;button class=&quot;btn btn-light-warning mb-2 me-4&quot;&gt;Warning&lt;/button&gt;

&lt;button class=&quot;btn btn-light-danger mb-2 me-4&quot;&gt;Danger&lt;/button&gt;

&lt;button class=&quot;btn btn-light-secondary mb-2 me-4&quot;&gt;Secondary&lt;/button&gt;

&lt;button class=&quot;btn btn-light-dark mb-2 me-4&quot;&gt;Dark&lt;/button&gt;</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="buttonsOutline" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header"> 
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Outline</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area text-center split-buttons">
                    <p class="mb-4">Apply <code>.btn-outline-*</code> class followed by <code>.btn </code> class to create <b>outline</b> buttons.</p>

                    <button class="btn btn-outline-primary mb-2 me-4">Primary</button>
                    <button class="btn btn-outline-info mb-2 me-4">Info</button>
                    <button class="btn btn-outline-success mb-2 me-4">Success</button>
                    <button class="btn btn-outline-warning mb-2 me-4">Warning</button>
                    <button class="btn btn-outline-danger mb-2 me-4">Danger</button>
                    <button class="btn btn-outline-secondary mb-2 me-4">Secondary</button>
                    <button class="btn btn-outline-dark mb-2 me-4">Dark</button>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;button class=&quot;btn btn-outline-primary mb-2 me-4&quot;&gt;Primary&lt;/button&gt;

&lt;button class=&quot;btn btn-outline-info mb-2 me-4&quot;&gt;Info&lt;/button&gt;

&lt;button class=&quot;btn btn-outline-success mb-2 me-4&quot;&gt;Success&lt;/button&gt;

&lt;button class=&quot;btn btn-outline-warning mb-2 me-4&quot;&gt;Warning&lt;/button&gt;

&lt;button class=&quot;btn btn-outline-danger mb-2 me-4&quot;&gt;Danger&lt;/button&gt;

&lt;button class=&quot;btn btn-outline-secondary mb-2 me-4&quot;&gt;Secondary&lt;/button&gt;

&lt;button class=&quot;btn btn-outline-dark mb-2 me-4&quot;&gt;Dark&lt;/button&gt;</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="buttonsDisabled" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header"> 
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Disabled</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area text-center split-buttons">
                    <p class="mb-4">Use <code>disabled</code> attribute to create <b>Disabled</b> buttons.</p>

                    <button class="btn btn-primary mb-2 me-4" disabled>Primary</button>
                    <button class="btn btn-info mb-2 me-4" disabled>Info</button>
                    <button class="btn btn-success mb-2 me-4" disabled>Success</button>
                    <button class="btn btn-warning mb-2 me-4" disabled>Warning</button>
                    <button class="btn btn-danger mb-2 me-4" disabled>Danger</button>
                    <button class="btn btn-secondary mb-2 me-4" disabled>Secondary</button>
                    <button class="btn btn-dark mb-2 me-4" disabled>Dark</button>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;button class=&quot;btn btn-primary mb-2 me-4&quot; disabled&gt;Primary&lt;/button&gt;

&lt;button class=&quot;btn btn-info mb-2 me-4&quot; disabled&gt;Info&lt;/button&gt;

&lt;button class=&quot;btn btn-success mb-2 me-4&quot; disabled&gt;Success&lt;/button&gt;

&lt;button class=&quot;btn btn-warning mb-2 me-4&quot; disabled&gt;Warning&lt;/button&gt;

&lt;button class=&quot;btn btn-danger mb-2 me-4&quot; disabled&gt;Danger&lt;/button&gt;

&lt;button class=&quot;btn btn-secondary mb-2 me-4&quot; disabled&gt;Secondary&lt;/button&gt;

&lt;button class=&quot;btn btn-dark mb-2 me-4&quot; disabled&gt;Dark&lt;/button&gt;</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="buttonsRounded" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header"> 
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Rounded</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area text-center split-buttons">
                    <p class="mb-4">Use <code>.btn-rounded</code> to make buttons rounded.</p>

                    <button class="btn btn-primary btn-rounded mb-2 me-4">Primary</button>
                    <button class="btn btn-info btn-rounded mb-2 me-4">Info</button>
                    <button class="btn btn-success btn-rounded mb-2 me-4">Success</button>
                    <button class="btn btn-warning btn-rounded mb-2 me-4">Warning</button>
                    <button class="btn btn-danger btn-rounded mb-2 me-4">Danger</button>
                    <button class="btn btn-secondary btn-rounded mb-2 me-4">Secondary</button>
                    <button class="btn btn-dark btn-rounded mb-2 me-4">Dark</button>

                    <br/>
                    <br/>
                    
                    <button class="btn btn-outline-primary btn-rounded mb-2 me-4">Primary</button>
                    <button class="btn btn-outline-info btn-rounded mb-2 me-4">Info</button>
                    <button class="btn btn-outline-success btn-rounded mb-2 me-4">Success</button>
                    <button class="btn btn-outline-warning btn-rounded mb-2 me-4">Warning</button>
                    <button class="btn btn-outline-danger btn-rounded mb-2 me-4">Danger</button>
                    <button class="btn btn-outline-secondary btn-rounded mb-2 me-4">Secondary</button>
                    <button class="btn btn-outline-dark btn-rounded mb-2 me-4">Dark</button>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;!-- Default --&gt;

&lt;button class=&quot;btn btn-primary btn-rounded mb-2 me-4&quot;&gt;Primary&lt;/button&gt;

&lt;button class=&quot;btn btn-info btn-rounded mb-2 me-4&quot;&gt;Info&lt;/button&gt;

&lt;button class=&quot;btn btn-success btn-rounded mb-2 me-4&quot;&gt;Success&lt;/button&gt;

&lt;button class=&quot;btn btn-warning btn-rounded mb-2 me-4&quot;&gt;Warning&lt;/button&gt;

&lt;button class=&quot;btn btn-danger btn-rounded mb-2 me-4&quot;&gt;Danger&lt;/button&gt;

&lt;button class=&quot;btn btn-secondary btn-rounded mb-2 me-4&quot;&gt;Secondary&lt;/button&gt;

&lt;button class=&quot;btn btn-dark btn-rounded mb-2 me-4&quot;&gt;Dark&lt;/button&gt;

&lt;!-- Outline --&gt;

&lt;button class=&quot;btn btn-outline-primary btn-rounded mb-2 me-4&quot;&gt;Primary&lt;/button&gt;

&lt;button class=&quot;btn btn-outline-info btn-rounded mb-2 me-4&quot;&gt;Info&lt;/button&gt;

&lt;button class=&quot;btn btn-outline-success btn-rounded mb-2 me-4&quot;&gt;Success&lt;/button&gt;

&lt;button class=&quot;btn btn-outline-warning btn-rounded mb-2 me-4&quot;&gt;Warning&lt;/button&gt;

&lt;button class=&quot;btn btn-outline-danger btn-rounded mb-2 me-4&quot;&gt;Danger&lt;/button&gt;

&lt;button class=&quot;btn btn-outline-secondary btn-rounded mb-2 me-4&quot;&gt;Secondary&lt;/button&gt;

&lt;button class=&quot;btn btn-outline-dark btn-rounded mb-2 me-4&quot;&gt;Dark&lt;/button&gt;</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="buttonsSizes" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Button Sizes</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area text-center">
                    <button class="btn btn-primary  mb-2 me-4 btn-lg">Large button</button>
                    <button class="btn btn-secondary  mb-2 me-4">Default button</button>
                    <button class="btn btn-warning  mb-2 me-4 btn-sm">Small button</button>
                    <button class="btn btn-dark  mb-2 me-4 btn-sm disabled">Disabled Button</button>

                    <br/>
                    <br/>
                    
                    <button class="btn btn-outline-primary  mb-2 me-4 btn-lg">Large button</button>
                    <button class="btn btn-outline-secondary  mb-2 me-4">Default button</button>
                    <button class="btn btn-outline-warning  mb-2 me-4 btn-sm">Small button</button>
                    <button class="btn btn-outline-dark  mb-2 me-4 btn-sm disabled">Disabled Button</button>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;!-- Default --&gt;

&lt;button class=&quot;btn btn-primary  mb-2 me-4 btn-lg&quot;&gt;Large button&lt;/button&gt;

&lt;button class=&quot;btn btn-secondary  mb-2 me-4&quot;&gt;Default button&lt;/button&gt;

&lt;button class=&quot;btn btn-warning  mb-2 me-4 btn-sm&quot;&gt;Small button&lt;/button&gt;

&lt;button class=&quot;btn btn-dark  mb-2 me-4 btn-sm disabled&quot;&gt;Disabled Button&lt;/button&gt;

&lt;!-- Outline --&gt;

&lt;button class=&quot;btn btn-outline-primary  mb-2 me-4 btn-lg&quot;&gt;Large button&lt;/button&gt;

&lt;button class=&quot;btn btn-outline-secondary  mb-2 me-4&quot;&gt;Default button&lt;/button&gt;

&lt;button class=&quot;btn btn-outline-warning  mb-2 me-4 btn-sm&quot;&gt;Small button&lt;/button&gt;

&lt;button class=&quot;btn btn-outline-dark  mb-2 me-4 btn-sm disabled&quot;&gt;Disabled Button&lt;/button&gt;
</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="buttonsIcons" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Button with Icons</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area text-center">
                    <button class="btn btn-success  mb-2 me-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                        <span class="btn-text-inner">Button</span>
                    </button>
                    <button class="btn btn-success btn-icon mb-2 me-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                    </button>
                    <button class="btn btn-success btn-icon mb-2 me-4 btn-rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-flag"><path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"></path><line x1="4" y1="22" x2="4" y2="15"></line></svg>
                    </button>
                    
                    <button class="btn btn-success  mb-2" disabled>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                        <span class="btn-text-inner">Button</span>
                    </button>
                    
                    <br/>
                    <br/>
                    
                    <button class="btn btn-outline-success  mb-2 me-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                        <span class="btn-text-inner">Button</span>
                    </button>
                    
                    <button class="btn btn-outline-success btn-icon mb-2 me-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                    </button>
                    
                    <button class="btn btn-outline-success btn-icon mb-2 me-4 btn-rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-flag"><path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"></path><line x1="4" y1="22" x2="4" y2="15"></line></svg>
                    </button>

                    <button class="btn btn-outline-success" disabled>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                        <span class="btn-text-inner">Button</span>
                    </button>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;!-- Default --&gt;

&lt;button class=&quot;btn btn-success  mb-2 me-4&quot;&gt;
&lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-message-circle&quot;&gt;&lt;path d=&quot;M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z&quot;&gt;&lt;/path&gt;&lt;/svg&gt;
&lt;span class=&quot;btn-text-inner&quot;&gt;Button&lt;/span&gt;
&lt;/button&gt;

&lt;button class=&quot;btn btn-success btn-icon mb-2 me-4&quot;&gt;
&lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-heart&quot;&gt;&lt;path d=&quot;M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z&quot;&gt;&lt;/path&gt;&lt;/svg&gt;
&lt;/button&gt;

&lt;button class=&quot;btn btn-success btn-icon mb-2 me-4 btn-rounded&quot;&gt;
&lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-flag&quot;&gt;&lt;path d=&quot;M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z&quot;&gt;&lt;/path&gt;&lt;line x1=&quot;4&quot; y1=&quot;22&quot; x2=&quot;4&quot; y2=&quot;15&quot;&gt;&lt;/line&gt;&lt;/svg&gt;
&lt;/button&gt;

&lt;button class=&quot;btn btn-success  mb-2&quot; disabled&gt;
&lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-message-circle&quot;&gt;&lt;path d=&quot;M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z&quot;&gt;&lt;/path&gt;&lt;/svg&gt;
&lt;span class=&quot;btn-text-inner&quot;&gt;Button&lt;/span&gt;
&lt;/button&gt;

&lt;!-- Outline --&gt;

&lt;button class=&quot;btn btn-outline-success  mb-2 me-4&quot;&gt;
&lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-message-circle&quot;&gt;&lt;path d=&quot;M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z&quot;&gt;&lt;/path&gt;&lt;/svg&gt;
&lt;span class=&quot;btn-text-inner&quot;&gt;Button&lt;/span&gt;
&lt;/button&gt;

&lt;button class=&quot;btn btn-outline-success btn-icon mb-2 me-4&quot;&gt;
&lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-heart&quot;&gt;&lt;path d=&quot;M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z&quot;&gt;&lt;/path&gt;&lt;/svg&gt;
&lt;/button&gt;

&lt;button class=&quot;btn btn-outline-success btn-icon mb-2 me-4 btn-rounded&quot;&gt;
&lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-flag&quot;&gt;&lt;path d=&quot;M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z&quot;&gt;&lt;/path&gt;&lt;line x1=&quot;4&quot; y1=&quot;22&quot; x2=&quot;4&quot; y2=&quot;15&quot;&gt;&lt;/line&gt;&lt;/svg&gt;
&lt;/button&gt;

&lt;button class=&quot;btn btn-outline-success&quot; disabled&gt;
&lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-message-circle&quot;&gt;&lt;path d=&quot;M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z&quot;&gt;&lt;/path&gt;&lt;/svg&gt;
&lt;span class=&quot;btn-text-inner&quot;&gt;Button&lt;/span&gt;
&lt;/button&gt;</pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div id="buttonsBlock" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header"> 
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4> Block Buttons </h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area text-center">
                    
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button class="btn btn-secondary mb-4" type="button">Default</button>
                        <button class="btn btn-outline-secondary mb-4" type="button">Outline</button>
                        <button class="btn btn-secondary mb-4" type="button" disabled>Disabled</button>
                    </div>
                    
                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>
                        <div class="code-section text-left">
                            <pre>
&lt;div class=&quot;d-grid gap-2 col-6 mx-auto&quot;&gt;
&lt;!-- Default --&gt;
&lt;button class=&quot;btn btn-secondary mb-4&quot; type=&quot;button&quot;&gt;Default&lt;/button&gt;
&lt;!-- Outline --&gt;
&lt;button class=&quot;btn btn-outline-secondary mb-4&quot; type=&quot;button&quot;&gt;Outline&lt;/button&gt;
&lt;!-- Disabled --&gt;
&lt;button class=&quot;btn btn-secondary mb-4&quot; type=&quot;button&quot; disabled&gt;Disabled&lt;/button&gt;
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