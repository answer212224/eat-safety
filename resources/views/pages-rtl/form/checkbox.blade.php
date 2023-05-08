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
                <li class="breadcrumb-item"><a href="#">Forms</a></li>
                <li class="breadcrumb-item active" aria-current="page">Checkbox</li>
            </ol>
        </nav>
    </div>
    <!-- /BREADCRUMB -->
    
    <div id="navSection" data-bs-spy="affix" class="nav  sidenav">
        <div class="sidenav-content">
            <a href="#checkboxState" class="active nav-link">States</a>
            <a href="#checkboxColor" class="nav-link">Colors</a>
        </div>
    </div>

    <div class="row layout-top-spacing">

        <div id="checkboxState" class="col-xl-12 col-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">                                
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>States</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    
                    <div class="form-check form-check-primary form-check-inline">
                        <input class="form-check-input" type="checkbox" id="form-check-default">
                        <label class="form-check-label" for="form-check-default">
                          Default
                        </label>
                    </div>

                    <div class="form-check form-check-primary form-check-inline">
                        <input class="form-check-input" type="checkbox" id="form-check-default-checked" checked="">
                        <label class="form-check-label" for="form-check-default-checked">
                          Checked
                        </label>
                    </div>
                    
                    <div class="form-check form-check-primary form-check-inline">
                        <input class="form-check-input" type="checkbox" id="form-check-disabled" disabled="">
                        <label class="form-check-label" for="form-check-disabled">
                          Disabled
                        </label>
                    </div>

                    <div class="form-check form-check-primary form-check-inline">
                        <input class="form-check-input" type="checkbox" id="form-check-checked-disabled" checked="" disabled="">
                        <label class="form-check-label" for="form-check-checked-disabled">
                          Checked and Disabled
                        </label>
                    </div>

                    <div class="code-section-container show-code">
                        
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                            <div class="code-section text-left">
                                <pre class="hljs">
&lt;div class=&quot;form-check form-check-primary form-check-inline&quot;&gt;
&lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; id=&quot;form-check-default&quot;&gt;
&lt;label class=&quot;form-check-label&quot; for=&quot;form-check-default&quot;&gt;
Default
&lt;/label&gt;
&lt;/div&gt;

&lt;div class=&quot;form-check form-check-primary form-check-inline&quot;&gt;
&lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; id=&quot;form-check-default-checked&quot; checked=&quot;&quot;&gt;
&lt;label class=&quot;form-check-label&quot; for=&quot;form-check-default-checked&quot;&gt;
Checked
&lt;/label&gt;
&lt;/div&gt;

&lt;div class=&quot;form-check form-check-primary form-check-inline&quot;&gt;
&lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; id=&quot;form-check-disabled&quot; disabled=&quot;&quot;&gt;
&lt;label class=&quot;form-check-label&quot; for=&quot;form-check-disabled&quot;&gt;
Disabled
&lt;/label&gt;
&lt;/div&gt;

&lt;div class=&quot;form-check form-check-primary form-check-inline&quot;&gt;
&lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; id=&quot;form-check-checked-disabled&quot; checked=&quot;&quot; disabled=&quot;&quot;&gt;
&lt;label class=&quot;form-check-label&quot; for=&quot;form-check-checked-disabled&quot;&gt;
Checked and Disabled
&lt;/label&gt;
&lt;/div&gt;</pre>
                            </div>
                    </div>


                </div>
            </div>
        </div>

        <div id="checkboxColor" class="col-xl-12 col-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">                                
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Colors</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    
                    <div class="form-check form-check-primary form-check-inline">
                        <input class="form-check-input" type="checkbox" value="" id="form-check-primary" checked="">
                        <label class="form-check-label" for="form-check-primary">
                          Primary
                        </label>
                    </div>
                    
                    <div class="form-check form-check-info form-check-inline">
                        <input class="form-check-input" type="checkbox" value="" id="form-check-info" checked="">
                        <label class="form-check-label" for="form-check-info">
                          Info
                        </label>
                    </div>

                    <div class="form-check form-check-success form-check-inline">
                        <input class="form-check-input" type="checkbox" value="" id="form-check-success" checked="">
                        <label class="form-check-label" for="form-check-success">
                          Success
                        </label>
                    </div>

                    <div class="form-check form-check-danger form-check-inline">
                        <input class="form-check-input" type="checkbox" value="" id="form-check-danger" checked="">
                        <label class="form-check-label" for="form-check-danger">
                          Danger
                        </label>
                    </div>

                    <div class="form-check form-check-secondary form-check-inline">
                        <input class="form-check-input" type="checkbox" value="" id="form-check-secondary" checked="">
                        <label class="form-check-label" for="form-check-secondary">
                          Secondary
                        </label>
                    </div>

                    <div class="form-check form-check-warning form-check-inline">
                        <input class="form-check-input" type="checkbox" value="" id="form-check-warning" checked="">
                        <label class="form-check-label" for="form-check-warning">
                          Warning
                        </label>
                    </div>

                    <div class="form-check form-check-dark form-check-inline">
                        <input class="form-check-input" type="checkbox" value="" id="form-check-dark" checked="">
                        <label class="form-check-label" for="form-check-dark">
                          Dark
                        </label>
                    </div>
                      

                    <div class="code-section-container">
                        
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                            <div class="code-section text-left">
                                <pre class="hljs">
&lt;div class=&quot;form-check form-check-primary form-check-inline&quot;&gt;
&lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;form-check-primary&quot; checked=&quot;&quot;&gt;
&lt;label class=&quot;form-check-label&quot; for=&quot;form-check-primary&quot;&gt;
Primary
&lt;/label&gt;
&lt;/div&gt;

&lt;div class=&quot;form-check form-check-info form-check-inline&quot;&gt;
&lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;form-check-info&quot; checked=&quot;&quot;&gt;
&lt;label class=&quot;form-check-label&quot; for=&quot;form-check-info&quot;&gt;
Info
&lt;/label&gt;
&lt;/div&gt;

&lt;div class=&quot;form-check form-check-success form-check-inline&quot;&gt;
&lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;form-check-success&quot; checked=&quot;&quot;&gt;
&lt;label class=&quot;form-check-label&quot; for=&quot;form-check-success&quot;&gt;
Success
&lt;/label&gt;
&lt;/div&gt;

&lt;div class=&quot;form-check form-check-danger form-check-inline&quot;&gt;
&lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;form-check-danger&quot; checked=&quot;&quot;&gt;
&lt;label class=&quot;form-check-label&quot; for=&quot;form-check-danger&quot;&gt;
Danger
&lt;/label&gt;
&lt;/div&gt;

&lt;div class=&quot;form-check form-check-secondary form-check-inline&quot;&gt;
&lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;form-check-secondary&quot; checked=&quot;&quot;&gt;
&lt;label class=&quot;form-check-label&quot; for=&quot;form-check-secondary&quot;&gt;
Secondary
&lt;/label&gt;
&lt;/div&gt;

&lt;div class=&quot;form-check form-check-warning form-check-inline&quot;&gt;
&lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;form-check-warning&quot; checked=&quot;&quot;&gt;
&lt;label class=&quot;form-check-label&quot; for=&quot;form-check-warning&quot;&gt;
Warning
&lt;/label&gt;
&lt;/div&gt;

&lt;div class=&quot;form-check form-check-dark form-check-inline&quot;&gt;
&lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;form-check-dark&quot; checked=&quot;&quot;&gt;
&lt;label class=&quot;form-check-label&quot; for=&quot;form-check-dark&quot;&gt;
Dark
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