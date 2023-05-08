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
                <li class="breadcrumb-item"><a href="#">Forms</a></li>
                <li class="breadcrumb-item active" aria-current="page">Radio</li>
            </ol>
        </nav>
    </div>
    <!-- /BREADCRUMB -->
    
    <div id="navSection" data-bs-spy="affix" class="nav  sidenav">
        <div class="sidenav-content">
            <a href="#radioState" class="active nav-link">States</a>
            <a href="#radioColor" class="nav-link">Colors</a>
        </div>
    </div>

    <div class="row layout-top-spacing">

        <div id="radioState" class="col-xl-12 col-12 layout-spacing">
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
                        <input class="form-check-input" type="radio" name="radio-checked" id="form-check-radio-default">
                        <label class="form-check-label" for="form-check-radio-default">
                            Default
                        </label>
                    </div>

                    <div class="form-check form-check-primary form-check-inline">
                        <input class="form-check-input" type="radio" name="radio-checked" id="form-check-radio-default-checked" checked="">
                        <label class="form-check-label" for="form-check-radio-default-checked">
                            Checked
                        </label>
                    </div>
                    
                    <div class="form-check form-check-primary form-check-inline">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="form-check-radio-disabled-state" disabled="">
                        <label class="form-check-label" for="form-check-radio-disabled-state">
                            Disabled
                        </label>
                    </div>

                    <div class="form-check form-check-info form-check-inline">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="form-check-radio-disabled-checked-state" checked="" disabled="">
                        <label class="form-check-label" for="form-check-radio-disabled-checked-state">
                            Disabled Checked
                        </label>
                    </div>

                    <div class="code-section-container show-code">
                        
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                            <div class="code-section text-left">
                                <pre class="hljs xml">
&lt;div class=&quot;form-check form-check-primary form-check-inline&quot;&gt;
&lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; name=&quot;radio-checked&quot; id=&quot;form-check-radio-default&quot;&gt;
&lt;label class=&quot;form-check-label&quot; for=&quot;form-check-radio-default&quot;&gt;
Default
&lt;/label&gt;
&lt;/div&gt;

&lt;div class=&quot;form-check form-check-primary form-check-inline&quot;&gt;
&lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; name=&quot;radio-checked&quot; id=&quot;form-check-radio-default-checked&quot; checked=&quot;&quot;&gt;
&lt;label class=&quot;form-check-label&quot; for=&quot;form-check-radio-default-checked&quot;&gt;
Checked
&lt;/label&gt;
&lt;/div&gt;

&lt;div class=&quot;form-check form-check-primary form-check-inline&quot;&gt;
&lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; name=&quot;flexRadioDefault&quot; id=&quot;form-check-radio-disabled-state&quot; disabled=&quot;&quot;&gt;
&lt;label class=&quot;form-check-label&quot; for=&quot;form-check-radio-disabled-state&quot;&gt;
Disabled
&lt;/label&gt;
&lt;/div&gt;

&lt;div class=&quot;form-check form-check-info form-check-inline&quot;&gt;
&lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; name=&quot;flexRadioDefault&quot; id=&quot;form-check-radio-disabled-checked-state&quot; checked=&quot;&quot; disabled=&quot;&quot;&gt;
&lt;label class=&quot;form-check-label&quot; for=&quot;form-check-radio-disabled-checked-state&quot;&gt;
Disabled Checked
&lt;/label&gt;
&lt;/div&gt;</pre>
                            </div>
                    </div>


                </div>
            </div>
        </div>

        <div id="radioColor" class="col-xl-12 col-12 layout-spacing">
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
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="form-check-radio-primary" checked="">
                        <label class="form-check-label" for="form-check-radio-primary">
                            Primary
                        </label>
                    </div>

                    <div class="form-check form-check-info form-check-inline">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="form-check-radio-info">
                        <label class="form-check-label" for="form-check-radio-info">
                            Info
                        </label>
                    </div>

                    <div class="form-check form-check-success form-check-inline">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="form-check-radio-success">
                        <label class="form-check-label" for="form-check-radio-success">
                            Success
                        </label>
                    </div>

                    <div class="form-check form-check-danger form-check-inline">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="form-check-radio-danger">
                        <label class="form-check-label" for="form-check-radio-danger">
                            Danger
                        </label>
                    </div>

                    <div class="form-check form-check-secondary form-check-inline">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="form-check-radio-secondary">
                        <label class="form-check-label" for="form-check-radio-secondary">
                            Secondary
                        </label>
                    </div>

                    <div class="form-check form-check-warning form-check-inline">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="form-check-radio-warning">
                        <label class="form-check-label" for="form-check-radio-warning">
                            Warning
                        </label>
                    </div>

                    <div class="form-check form-check-dark form-check-inline">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="form-check-radio-dark">
                        <label class="form-check-label" for="form-check-radio-dark">
                            Dark
                        </label>
                    </div>
                    
                    <div class="code-section-container">
                        
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
<pre class="hljs">
&lt;div class=&quot;form-check form-check-primary form-check-inline&quot;&gt;
&lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; name=&quot;flexRadioDefault&quot; id=&quot;form-check-radio-primary&quot; checked=&quot;&quot;&gt;
&lt;label class=&quot;form-check-label&quot; for=&quot;form-check-radio-primary&quot;&gt;
Primary
&lt;/label&gt;
&lt;/div&gt;

&lt;div class=&quot;form-check form-check-info form-check-inline&quot;&gt;
&lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; name=&quot;flexRadioDefault&quot; id=&quot;form-check-radio-info&quot;&gt;
&lt;label class=&quot;form-check-label&quot; for=&quot;form-check-radio-info&quot;&gt;
Info
&lt;/label&gt;
&lt;/div&gt;

&lt;div class=&quot;form-check form-check-success form-check-inline&quot;&gt;
&lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; name=&quot;flexRadioDefault&quot; id=&quot;form-check-radio-success&quot;&gt;
&lt;label class=&quot;form-check-label&quot; for=&quot;form-check-radio-success&quot;&gt;
Success
&lt;/label&gt;
&lt;/div&gt;

&lt;div class=&quot;form-check form-check-danger form-check-inline&quot;&gt;
&lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; name=&quot;flexRadioDefault&quot; id=&quot;form-check-radio-danger&quot;&gt;
&lt;label class=&quot;form-check-label&quot; for=&quot;form-check-radio-danger&quot;&gt;
Danger
&lt;/label&gt;
&lt;/div&gt;

&lt;div class=&quot;form-check form-check-secondary form-check-inline&quot;&gt;
&lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; name=&quot;flexRadioDefault&quot; id=&quot;form-check-radio-secondary&quot;&gt;
&lt;label class=&quot;form-check-label&quot; for=&quot;form-check-radio-secondary&quot;&gt;
Secondary
&lt;/label&gt;
&lt;/div&gt;

&lt;div class=&quot;form-check form-check-warning form-check-inline&quot;&gt;
&lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; name=&quot;flexRadioDefault&quot; id=&quot;form-check-radio-warning&quot;&gt;
&lt;label class=&quot;form-check-label&quot; for=&quot;form-check-radio-warning&quot;&gt;
Warning
&lt;/label&gt;
&lt;/div&gt;

&lt;div class=&quot;form-check form-check-dark form-check-inline&quot;&gt;
&lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; name=&quot;flexRadioDefault&quot; id=&quot;form-check-radio-dark&quot;&gt;
&lt;label class=&quot;form-check-label&quot; for=&quot;form-check-radio-dark&quot;&gt;
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
</x-base-layout>