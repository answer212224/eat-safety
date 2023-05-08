<x-base-layout :scrollspy="true">

    <x-slot:pageTitle>
        {{$title}} 
    </x-slot>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <x-slot:headerFiles>
        <!--  BEGIN CUSTOM STYLE FILE  -->
        @vite(['resources/scss/light/assets/elements/popover.scss', 'resources/scss/dark/assets/elements/popover.scss'])
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
                <li class="breadcrumb-item active" aria-current="page">Popovers</li>
            </ol>
        </nav>
    </div>
    <!-- /BREADCRUMB -->

    <div id="navSection" data-bs-spy="affix" class="nav sidenav">
        <div class="sidenav-content">
            <a href="#popoverDefault" class="active nav-link">Default</a>
            <a href="#popoverDirections" class="nav-link">Directions</a>
            <a href="#popoverDismissible" class="nav-link">Dismissible</a>
            <a href="#popoverOptions" class="nav-link">Options</a>
            <a href="#popoverColors" class="nav-link">Colors</a>
        </div>
    </div>

    <div class="row layout-top-spacing">

        <div id="popoverDefault" class="col-xl-12 col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4> Popover </h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area text-center">

                    <a class="btn btn-primary rounded bs-popover  mb-2 me-4" data-bs-container="body" data-bs-content="Tooltip using ANCHOR tag">
                        Link
                    </a>
                    <button type="button" class="btn btn-success rounded bs-popover mb-2" data-bs-container="body" data-bs-content="Tooltip using BUTTON tag">
                        Button
                    </button>

                    <div class="code-section-container show-code">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;a class="btn btn-primary rounded bs-popover  mb-2 me-4" data-bs-container="body" data-bs-content="Tooltip using ANCHOR tag"&gt;
Link
&lt;/a&gt;
&lt;button type="button" class="btn btn-success rounded bs-popover mb-2" data-bs-container="body" data-bs-content="Tooltip using BUTTON tag"&gt;
Button
&lt;/button&gt;</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="popoverDirections" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4> Placement</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area tooltip-section text-center">

                    <div class="row">

                        <div class="col-lg-6">

                            <p class="mt-3"><code>data-placement="top"</code></p>

                            <button type="button" class="btn btn-info mr-2 rounded bs-popover mb-4 ml-2" data-bs-container="body" data-bs-placement="top" data-bs-content="Tooltip on top">
                              Popover on top
                            </button>

                        </div>
                        <div class="col-lg-6">

                            <p class="mt-3"><code>data-bs-placement="right"</code></p>

                            <button type="button" class="btn btn-danger mr-2 rounded bs-popover mb-4 ml-2" data-bs-container="body" data-bs-placement="right" data-bs-content="Tooltip on right">
                              Popover on right
                            </button>

                        </div>
                        <div class="col-lg-6">

                            <p class="mt-3"><code>data-bs-placement="bottom"</code></p>

                            <button type="button" class="btn btn-warning mr-2 rounded bs-popover mb-4 ml-2" data-bs-container="body" data-bs-placement="bottom" data-bs-content="Tooltip on bottom">
                              Popover on bottom
                            </button>

                        </div>
                        <div class="col-lg-6">

                            <p class="mt-3"><code>data-bs-placement="left"</code></p>

                            <button type="button" class="btn btn-secondary mr-2 rounded bs-popover mb-4 ml-2" data-bs-container="body" data-bs-placement="left" data-bs-content="Tooltip on left">
                              Popover on left
                            </button>
                        </div>
                        
                    </div>


                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;!-- TOP --&gt;
&lt;button type="button" class="btn btn-info mr-2 rounded bs-popover mb-4 ml-2" data-bs-container="body" data-bs-placement="top" data-bs-content="Tooltip on top"&gt;
Popover on top
&lt;/button&gt;

&lt;!-- RIGHT --&gt;
&lt;button type="button" class="btn btn-danger mr-2 rounded bs-popover mb-4 ml-2" data-bs-container="body" data-bs-placement="right" data-bs-content="Tooltip on right"&gt;
Popover on right
&lt;/button&gt;

&lt;!-- BOTTOM --&gt;
&lt;button type="button" class="btn btn-warning mr-2 rounded bs-popover mb-4 ml-2" data-bs-container="body" data-bs-placement="bottom" data-bs-content="Tooltip on bottom"&gt;
Popover on bottom
&lt;/button&gt;

&lt;!-- LEFT --&gt;
&lt;button type="button" class="btn btn-secondary mr-2 rounded bs-popover mb-4 ml-2" data-bs-container="body" data-bs-placement="left" data-bs-content="Tooltip on left"&gt;
Popover on left
&lt;/button&gt;</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="popoverDismissible" class="col-xl-12 col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Dismissible popover</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area text-center">

                    <a tabindex="0" class="btn btn-dark rounded bs-popover mb-3" data-bs-container="body" data-bs-trigger="focus" data-bs-placement="left" data-bs-content="Lorem ipsum dolor sit.">
                      Popover on left
                    </a>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;a tabindex="0" class="btn btn-dark rounded bs-popover mb-3" data-bs-container="body" data-bs-trigger="focus" data-bs-placement="left" data-bs-content="Lorem ipsum dolor sit."&gt;
Popover on left
&lt;/a&gt;</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="popoverOptions" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Options</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area align-center basic-tooltip text-center">
                    <div class="row">
                        <div class="col-lg-6 mb-4">
                            <p class="mt-3"><code>data-bs-trigger="hover"</code></p>
                            <button type="button" class="btn btn-primary bs-popover rounded" data-bs-container="body" data-bs-trigger="hover" data-bs-content="On Hover">
                                On Hover
                            </button>
                        </div>

                        <div class="col-lg-6 mb-4">
                            <p class="mt-3"><code>Default</code></p>
                            <button type="button" class="btn btn-secondary bs-popover rounded" data-bs-container="body" data-bs-content="On Focus">
                                On Focus
                            </button>
                        </div>

                        <div class="col-lg-6 mb-4">
                            <p class="mt-3"><code>data-bs-delay="1000"</code></p>
                            <button type="button" class="btn btn-info bs-popover rounded" data-bs-container="body" data-bs-delay="1000" data-bs-content="Delay 1s">
                                Delay
                            </button>
                        </div>

                        <div class="col-lg-6 mb-4">
                            <p class="mt-3"><code>data-bs-animation="false"</code></p>
                            <button type="button" class="btn btn-dark bs-popover rounded" data-bs-container="body" data-bs-animation="false" data-bs-content="Disabled Animation">
                                Disabled Animation
                            </button>
                        </div>
                    </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;!-- On Hover --&gt;
&lt;button type="button" class="btn btn-button-2 bs-popover rounded" data-bs-container="body" data-bs-trigger="hover" data-bs-content="On Hover"&gt;
On Hover
&lt;/button&gt;

&lt;!-- On Focus --&gt;
&lt;button type="button" class="btn btn-button-3 bs-popover rounded" data-bs-container="body" data-bs-content="On Focus"&gt;
On Focus
&lt;/button&gt;

&lt;!-- Delay --&gt;
&lt;button type="button" class="btn btn-button-4 bs-popover rounded" data-bs-container="body" data-bs-delay="1000" data-bs-content="Delay 1s"&gt;
Delay
&lt;/button&gt;

&lt;!-- Disabled Animation --&gt;
&lt;button type="button" class="btn btn-button-5 bs-popover rounded" data-bs-container="body" data-bs-animation="false" data-bs-content="Disabled Animation"&gt;
Disabled Animation
&lt;/button&gt;</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <div id="popoverColors" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4> Colors </h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area align-center text-center">

                    <p class="mb-4">Change popover template html as shown below to add color scheme.</p>

                    <button type="button" class="btn btn-primary btn-popover-primary  mb-2 me-4 rounded" data-bs-container="body" data-html="true" data-placement="top"> Primary </button>
                    <button type="button" class="btn btn-success btn-popover-success  mb-2 me-4 rounded" data-bs-container="body" data-html="true" data-placement="top"> Success </button>
                    <button type="button" class="btn btn-info btn-popover-info  mb-2 me-4 rounded" data-bs-container="body" data-html="true" data-placement="top"> Info </button>
                    <button type="button" class="btn btn-danger btn-popover-danger  mb-2 me-4 rounded" data-bs-container="body" data-html="true" data-placement="top"> Danger </button>
                    <button type="button" class="btn btn-warning btn-popover-warning  mb-2 me-4 rounded" data-bs-container="body" data-html="true" data-placement="top"> Warning </button>
                    <button type="button" class="btn btn-secondary btn-popover-secondary  mb-2 me-4 rounded" data-bs-container="body" data-html="true" data-placement="top"> Secondary </button>
                    <button type="button" class="btn btn-dark btn-popover-dark  mb-2 me-4 rounded" data-bs-container="body" data-html="true" data-placement="top"> Dark </button>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;!-- Primary --&gt;
&lt;button type="button" class="btn btn-primary btn-popover-primary mb-2 rounded" data-bs-container="body" data-html="true" data-placement="top"&gt; Primary &lt;/button&gt;

$('.btn-popover-primary').popover({
template: '&lt;div class="popover popover-primary" role="tooltip"&gt;&lt;div class="arrow"&gt;&lt;/div&gt;&lt;h3 class="popover-header"&gt;&lt;/h3&gt;&lt;div class="popover-body"&gt;&lt;/div&gt;&lt;/div&gt;',
title: "Primary",
content: "Primary popover"
});</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
    
    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <x-slot:footerFiles>
        @vite(['resources/assets/js/elements/popovers.js'])
    </x-slot>
    <!--  END CUSTOM SCRIPTS FILE  -->
</x-base-layout>