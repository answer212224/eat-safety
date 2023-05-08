<x-base-layout :scrollspy="true">

    <x-slot:pageTitle>
        {{$title}} 
    </x-slot>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <x-slot:headerFiles>
        <!--  BEGIN CUSTOM STYLE FILE  -->
        @vite(['resources/scss/light/assets/forms/switches.scss'])
        @vite(['resources/scss/dark/assets/forms/switches.scss'])
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
                <li class="breadcrumb-item active" aria-current="page">Switches</li>
            </ol>
        </nav>
    </div>
    <!-- /BREADCRUMB -->

    <div id="navSection" data-bs-spy="affix" class="nav  sidenav">
        <div class="sidenav-content">
            <a href="#default" class="active nav-link">Default</a>
            <a href="#custom_icons" class="active nav-link">Icons</a>
            <a href="#custom_switches" class="nav-link">Custom</a>
        </div>
    </div>

    <div class="row layout-top-spacing">

        <div id="default" class="col-lg-12">
            <div class="seperator-header">
                <h4 class="">Default</h4>
            </div>
        </div>

        <div class="col-lg-12 col-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>States</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <div class="form-check form-switch form-check-inline">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Default</label>
                    </div>
                    <div class="form-check form-switch form-check-inline">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                        <label class="form-check-label" for="flexSwitchCheckChecked">Checked</label>
                    </div>
                    <div class="form-check form-switch form-check-inline">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDisabled" disabled>
                        <label class="form-check-label" for="flexSwitchCheckDisabled">Disabled</label>
                    </div>
                    <div class="form-check form-switch form-check-inline">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckCheckedDisabled" checked disabled>
                        <label class="form-check-label" for="flexSwitchCheckCheckedDisabled">Disabled checked</label>
                    </div>

                    <div class="code-section-container show-code">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
================
Default
================
&lt;div class=&quot;form-check form-switch form-check-inline&quot;&gt;
&lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; role=&quot;switch&quot; id=&quot;flexSwitchCheckDefault&quot;&gt;
&lt;label class=&quot;form-check-label&quot; for=&quot;flexSwitchCheckDefault&quot;&gt;Default&lt;/label&gt;
&lt;/div&gt;

=======================
Default Checked
=======================
&lt;div class=&quot;form-check form-switch form-check-inline&quot;&gt;
&lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; role=&quot;switch&quot; id=&quot;flexSwitchCheckChecked&quot; checked&gt;
&lt;label class=&quot;form-check-label&quot; for=&quot;flexSwitchCheckChecked&quot;&gt;Checked&lt;/label&gt;
&lt;/div&gt;

================
Disabled
================
&lt;div class=&quot;form-check form-switch form-check-inline&quot;&gt;
&lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; role=&quot;switch&quot; id=&quot;flexSwitchCheckDisabled&quot; disabled&gt;
&lt;label class=&quot;form-check-label&quot; for=&quot;flexSwitchCheckDisabled&quot;&gt;Disabled&lt;/label&gt;
&lt;/div&gt;

===========================
Checked and Default
===========================
&lt;div class=&quot;form-check form-switch form-check-inline&quot;&gt;
&lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; role=&quot;switch&quot; id=&quot;flexSwitchCheckCheckedDisabled&quot; checked disabled&gt;
&lt;label class=&quot;form-check-label&quot; for=&quot;flexSwitchCheckCheckedDisabled&quot;&gt;Disabled checked&lt;/label&gt;
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
                            <h4>Colors</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <div class="form-check form-switch form-check-inline form-switch-primary">
                        <input class="form-check-input" type="checkbox" role="switch" id="form-switch-primary" checked>
                        <label class="form-check-label" for="form-switch-primary">Primary</label>
                    </div>
                    <div class="form-check form-switch form-check-inline form-switch-info">
                        <input class="form-check-input" type="checkbox" role="switch" id="form-switch-info" checked>
                        <label class="form-check-label" for="form-switch-info">Info</label>
                    </div>
                    <div class="form-check form-switch form-check-inline form-switch-success">
                        <input class="form-check-input" type="checkbox" role="switch" id="form-switch-success" checked>
                        <label class="form-check-label" for="form-switch-success">Success</label>
                    </div>
                    <div class="form-check form-switch form-check-inline form-switch-danger">
                        <input class="form-check-input" type="checkbox" role="switch" id="form-switch-danger" checked>
                        <label class="form-check-label" for="form-switch-danger">Danger</label>
                    </div>
                    <div class="form-check form-switch form-check-inline form-switch-secondary">
                        <input class="form-check-input" type="checkbox" role="switch" id="form-switch-secondary" checked>
                        <label class="form-check-label" for="form-switch-secondary">Secondary</label>
                    </div>
                    <div class="form-check form-switch form-check-inline form-switch-warning">
                        <input class="form-check-input" type="checkbox" role="switch" id="form-switch-warning" checked>
                        <label class="form-check-label" for="form-switch-warning">Warning</label>
                    </div>
                    <div class="form-check form-switch form-check-inline form-switch-dark">
                        <input class="form-check-input" type="checkbox" role="switch" id="form-switch-dark" checked>
                        <label class="form-check-label" for="form-switch-dark">Dark</label>
                    </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
=============
Primary
=============
&lt;div class=&quot;form-check form-switch form-check-inline form-switch-primary&quot;&gt;
&lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; role=&quot;switch&quot; id=&quot;form-switch-primary&quot; checked&gt;
&lt;label class=&quot;form-check-label&quot; for=&quot;form-switch-primary&quot;&gt;Primary&lt;/label&gt;
&lt;/div&gt;

=============
Info
=============

&lt;div class=&quot;form-check form-switch form-check-inline form-switch-info&quot;&gt;
&lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; role=&quot;switch&quot; id=&quot;form-switch-info&quot;&gt;
&lt;label class=&quot;form-check-label&quot; for=&quot;form-switch-info&quot;&gt;Info&lt;/label&gt;
&lt;/div&gt;

=============
Success
=============

&lt;div class=&quot;form-check form-switch form-check-inline form-switch-success&quot;&gt;
&lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; role=&quot;switch&quot; id=&quot;form-switch-success&quot;&gt;
&lt;label class=&quot;form-check-label&quot; for=&quot;form-switch-success&quot;&gt;Success&lt;/label&gt;
&lt;/div&gt;

=============
Danger
=============

&lt;div class=&quot;form-check form-switch form-check-inline form-switch-danger&quot;&gt;
&lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; role=&quot;switch&quot; id=&quot;form-switch-danger&quot;&gt;
&lt;label class=&quot;form-check-label&quot; for=&quot;form-switch-danger&quot;&gt;Danger&lt;/label&gt;
&lt;/div&gt;

=============
Secondary
=============

&lt;div class=&quot;form-check form-switch form-check-inline form-switch-secondary&quot;&gt;
&lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; role=&quot;switch&quot; id=&quot;form-switch-secondary&quot;&gt;
&lt;label class=&quot;form-check-label&quot; for=&quot;form-switch-secondary&quot;&gt;Secondary&lt;/label&gt;
&lt;/div&gt;

=============
Warning
=============

&lt;div class=&quot;form-check form-switch form-check-inline form-switch-warning&quot;&gt;
&lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; role=&quot;switch&quot; id=&quot;form-switch-warning&quot;&gt;
&lt;label class=&quot;form-check-label&quot; for=&quot;form-switch-warning&quot;&gt;Warning&lt;/label&gt;
&lt;/div&gt;

=============
Dark
=============

&lt;div class=&quot;form-check form-switch form-check-inline form-switch-dark&quot;&gt;
&lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; role=&quot;switch&quot; id=&quot;form-switch-dark&quot;&gt;
&lt;label class=&quot;form-check-label&quot; for=&quot;form-switch-dark&quot;&gt;Dark&lt;/label&gt;
&lt;/div&gt;
</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <div class="row layout-top-spacing">

        <div id="custom_icons" class="col-lg-12">
            <div class="seperator-header">
                <h4 class="">Icons</h4>
            </div>
        </div>
        
        <div class="col-lg-12 col-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>States</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">

                    <div class="switch form-switch-custom switch-inline form-switch-primary">
                        <input class="switch-input" type="checkbox" role="switch" id="form-custom-switch-default">
                        <label class="switch-label" for="form-custom-switch-default">Default</label>
                    </div>

                    <div class="switch form-switch-custom switch-inline form-switch-primary">
                        <input class="switch-input" type="checkbox" role="switch" id="form-custom-switch-checked" checked>
                        <label class="switch-label" for="form-custom-switch-checked">Checked</label>
                    </div>

                    <div class="switch form-switch-custom switch-inline form-switch-primary">
                        <input class="switch-input" type="checkbox" role="switch" id="form-custom-switch-disabled" disabled>
                        <label class="switch-label" for="form-custom-switch-disabled">Disabled</label>
                    </div>

                    <div class="switch form-switch-custom switch-inline form-switch-primary">
                        <input class="switch-input" type="checkbox" role="switch" id="form-custom-switch-disabled-checked" checked disabled>
                        <label class="switch-label" for="form-custom-switch-disabled-checked">Disabled Checked</label>
                    </div>
                    

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;div class=&quot;switch form-switch-custom switch-inline form-switch-primary&quot;&gt;
&lt;input class=&quot;switch-input&quot; type=&quot;checkbox&quot; role=&quot;switch&quot; id=&quot;form-custom-switch-default&quot;&gt;
&lt;label class=&quot;switch-label&quot; for=&quot;form-custom-switch-default&quot;&gt;Default&lt;/label&gt;
&lt;/div&gt;

&lt;div class=&quot;switch form-switch-custom switch-inline form-switch-primary&quot;&gt;
&lt;input class=&quot;switch-input&quot; type=&quot;checkbox&quot; role=&quot;switch&quot; id=&quot;form-custom-switch-checked&quot; checked&gt;
&lt;label class=&quot;switch-label&quot; for=&quot;form-custom-switch-checked&quot;&gt;Checked&lt;/label&gt;
&lt;/div&gt;

&lt;div class=&quot;switch form-switch-custom switch-inline form-switch-primary&quot;&gt;
&lt;input class=&quot;switch-input&quot; type=&quot;checkbox&quot; role=&quot;switch&quot; id=&quot;form-custom-switch-disabled&quot; disabled&gt;
&lt;label class=&quot;switch-label&quot; for=&quot;form-custom-switch-disabled&quot;&gt;Disabled&lt;/label&gt;
&lt;/div&gt;

&lt;div class=&quot;switch form-switch-custom switch-inline form-switch-primary&quot;&gt;
&lt;input class=&quot;switch-input&quot; type=&quot;checkbox&quot; role=&quot;switch&quot; id=&quot;form-custom-switch-disabled-checked&quot; checked disabled&gt;
&lt;label class=&quot;switch-label&quot; for=&quot;form-custom-switch-disabled-checked&quot;&gt;Disabled Checked&lt;/label&gt;
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
                            <h4>Colors</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">

                    <div class="switch form-switch-custom switch-inline mb-3 form-switch-primary">
                        <input class="switch-input" type="checkbox" role="switch" id="form-custom-switch-primary" checked>
                        <label class="switch-label" for="form-custom-switch-primary">Primary</label>
                    </div>


                    <div class="switch form-switch-custom switch-inline mb-3 form-switch-info">
                        <input class="switch-input" type="checkbox" role="switch" id="form-custom-switch-info" checked>
                        <label class="switch-label" for="form-custom-switch-info">Info</label>
                    </div>


                    <div class="switch form-switch-custom switch-inline mb-3 form-switch-success">
                        <input class="switch-input" type="checkbox" role="switch" id="form-custom-switch-success" checked>
                        <label class="switch-label" for="form-custom-switch-success">Success</label>
                    </div>

                    <div class="switch form-switch-custom switch-inline mb-3 form-switch-warning">
                        <input class="switch-input" type="checkbox" role="switch" id="form-custom-switch-warning" checked>
                        <label class="switch-label" for="form-custom-switch-warning">Warning</label>
                    </div>


                    <div class="switch form-switch-custom switch-inline mb-3 form-switch-secondary">
                        <input class="switch-input" type="checkbox" role="switch" id="form-custom-switch-secondary" checked>
                        <label class="switch-label" for="form-custom-switch-secondary">Secondary</label>
                    </div>


                    <div class="switch form-switch-custom switch-inline mb-3 form-switch-danger">
                        <input class="switch-input" type="checkbox" role="switch" id="form-custom-switch-danger" checked>
                        <label class="switch-label" for="form-custom-switch-danger">Danger</label>
                    </div>


                    <div class="switch form-switch-custom switch-inline mb-3 form-switch-dark">
                        <input class="switch-input" type="checkbox" role="switch" id="form-custom-switch-dark" checked>
                        <label class="switch-label" for="form-custom-switch-dark">Dark</label>
                    </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;div class=&quot;switch form-switch-custom switch-inline form-switch-primary&quot;&gt;
&lt;input class=&quot;switch-input&quot; type=&quot;checkbox&quot; role=&quot;switch&quot; id=&quot;form-custom-switch-primary&quot; checked&gt;
&lt;label class=&quot;switch-label&quot; for=&quot;form-custom-switch-primary&quot;&gt;Primary&lt;/label&gt;
&lt;/div&gt;


&lt;div class=&quot;switch form-switch-custom switch-inline form-switch-info&quot;&gt;
&lt;input class=&quot;switch-input&quot; type=&quot;checkbox&quot; role=&quot;switch&quot; id=&quot;form-custom-switch-info&quot;&gt;
&lt;label class=&quot;switch-label&quot; for=&quot;form-custom-switch-info&quot;&gt;Info&lt;/label&gt;
&lt;/div&gt;


&lt;div class=&quot;switch form-switch-custom switch-inline form-switch-success&quot;&gt;
&lt;input class=&quot;switch-input&quot; type=&quot;checkbox&quot; role=&quot;switch&quot; id=&quot;form-custom-switch-success&quot;&gt;
&lt;label class=&quot;switch-label&quot; for=&quot;form-custom-switch-success&quot;&gt;Success&lt;/label&gt;
&lt;/div&gt;

&lt;div class=&quot;switch form-switch-custom switch-inline form-switch-warning&quot;&gt;
&lt;input class=&quot;switch-input&quot; type=&quot;checkbox&quot; role=&quot;switch&quot; id=&quot;form-custom-switch-warning&quot;&gt;
&lt;label class=&quot;switch-label&quot; for=&quot;form-custom-switch-warning&quot;&gt;Warning&lt;/label&gt;
&lt;/div&gt;


&lt;div class=&quot;switch form-switch-custom switch-inline form-switch-secondary&quot;&gt;
&lt;input class=&quot;switch-input&quot; type=&quot;checkbox&quot; role=&quot;switch&quot; id=&quot;form-custom-switch-secondary&quot;&gt;
&lt;label class=&quot;switch-label&quot; for=&quot;form-custom-switch-secondary&quot;&gt;Secondary&lt;/label&gt;
&lt;/div&gt;


&lt;div class=&quot;switch form-switch-custom switch-inline form-switch-danger&quot;&gt;
&lt;input class=&quot;switch-input&quot; type=&quot;checkbox&quot; role=&quot;switch&quot; id=&quot;form-custom-switch-danger&quot;&gt;
&lt;label class=&quot;switch-label&quot; for=&quot;form-custom-switch-danger&quot;&gt;Danger&lt;/label&gt;
&lt;/div&gt;


&lt;div class=&quot;switch form-switch-custom switch-inline form-switch-dark&quot;&gt;
&lt;input class=&quot;switch-input&quot; type=&quot;checkbox&quot; role=&quot;switch&quot; id=&quot;form-custom-switch-dark&quot;&gt;
&lt;label class=&quot;switch-label&quot; for=&quot;form-custom-switch-dark&quot;&gt;Dark&lt;/label&gt;
&lt;/div&gt;
</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        
    </div>
        
    <div class="row layout-top-spacing">

        <div id="custom_switches" class="col-lg-12">
            <div class="seperator-header">
                <h4 class="">Custom</h4>
            </div>
        </div>

        <div class="col-lg-12 col-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Mutiple</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">

                    <div class="switch form-switch-custom switch-inline form-switch-primary form-switch-custom slim-toggle">
                        <div class="input-checkbox">
                            <input class="switch-input" type="checkbox" role="switch" id="form-custom-switch-slim" checked>
                        </div>
                        <label class="switch-label" for="form-custom-switch-slim">Slim</label>
                    </div>

                    <div class="switch form-switch-custom switch-inline form-switch-primary form-switch-custom material-toggle">
                        <div class="input-checkbox">
                            <input class="switch-input" type="checkbox" role="switch" id="form-custom-switch-primary-ss" checked>
                        </div>
                        <label class="switch-label" for="form-custom-switch-primary-ss">Rounded</label>
                    </div>

                    <div class="switch form-switch-custom switch-inline form-switch-primary form-switch-custom inner-text-toggle">
                        <div class="input-checkbox">
                            <span class="switch-chk-label label-left">ON</span>
                            <input class="switch-input" type="checkbox" role="switch" id="form-custom-switch-inner-text" checked>
                            <span class="switch-chk-label label-right">OFF</span>
                        </div>
                        <label class="switch-label" for="form-custom-switch-inner-text">Inner Text</label>
                    </div>

                    <div class="switch form-switch-custom switch-inline form-switch-primary form-switch-custom inner-icon-toggle">
                        <div class="input-checkbox">
                            <span class="switch-chk-label label-left"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M6.995 12c0 2.761 2.246 5.007 5.007 5.007s5.007-2.246 5.007-5.007-2.246-5.007-5.007-5.007S6.995 9.239 6.995 12zM11 19h2v3h-2zm0-17h2v3h-2zm-9 9h3v2H2zm17 0h3v2h-3zM5.637 19.778l-1.414-1.414 2.121-2.121 1.414 1.414zM16.242 6.344l2.122-2.122 1.414 1.414-2.122 2.122zM6.344 7.759 4.223 5.637l1.415-1.414 2.12 2.122zm13.434 10.605-1.414 1.414-2.122-2.122 1.414-1.414z"></path></svg></span>
                            <input class="switch-input" type="checkbox" role="switch" id="form-custom-switch-inner-icon" checked>
                            <span class="switch-chk-label label-right"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 11.807A9.002 9.002 0 0 1 10.049 2a9.942 9.942 0 0 0-5.12 2.735c-3.905 3.905-3.905 10.237 0 14.142 3.906 3.906 10.237 3.905 14.143 0a9.946 9.946 0 0 0 2.735-5.119A9.003 9.003 0 0 1 12 11.807z"></path></svg></span>
                        </div>
                        <label class="switch-label" for="form-custom-switch-inner-icon">Inner Icon</label>
                    </div>

                    <div class="switch form-switch-custom switch-inline form-switch-primary form-switch-custom inner-icon-circle-toggle">
                        <div class="input-checkbox">
                            <input class="switch-input" type="checkbox" role="switch" id="form-custom-switch-circular-inner-icon">
                        </div>
                        <label class="switch-label" for="form-custom-switch-circular-inner-icon">Circlular Icon</label>
                    </div>
                    
                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;div class=&quot;switch form-switch-custom switch-inline form-switch-primary form-switch-custom slim-toggle&quot;&gt;
&lt;div class=&quot;input-checkbox&quot;&gt;
&lt;input class=&quot;switch-input&quot; type=&quot;checkbox&quot; role=&quot;switch&quot; id=&quot;form-custom-switch-slim&quot; checked&gt;
&lt;/div&gt;
&lt;label class=&quot;switch-label&quot; for=&quot;form-custom-switch-slim&quot;&gt;Slim&lt;/label&gt;
&lt;/div&gt;

&lt;div class=&quot;switch form-switch-custom switch-inline form-switch-primary form-switch-custom material-toggle&quot;&gt;
&lt;div class=&quot;input-checkbox&quot;&gt;
&lt;input class=&quot;switch-input&quot; type=&quot;checkbox&quot; role=&quot;switch&quot; id=&quot;form-custom-switch-primary-ss&quot; checked&gt;
&lt;/div&gt;
&lt;label class=&quot;switch-label&quot; for=&quot;form-custom-switch-primary-ss&quot;&gt;Rounded&lt;/label&gt;
&lt;/div&gt;

&lt;div class=&quot;switch form-switch-custom switch-inline form-switch-primary form-switch-custom inner-text-toggle&quot;&gt;
&lt;div class=&quot;input-checkbox&quot;&gt;
&lt;span class=&quot;switch-chk-label label-left&quot;&gt;ON&lt;/span&gt;
&lt;input class=&quot;switch-input&quot; type=&quot;checkbox&quot; role=&quot;switch&quot; id=&quot;form-custom-switch-inner-text&quot; checked&gt;
&lt;span class=&quot;switch-chk-label label-right&quot;&gt;OFF&lt;/span&gt;
&lt;/div&gt;
&lt;label class=&quot;switch-label&quot; for=&quot;form-custom-switch-inner-text&quot;&gt;Inner Text&lt;/label&gt;
&lt;/div&gt;

&lt;div class=&quot;switch form-switch-custom switch-inline form-switch-primary form-switch-custom inner-icon-toggle&quot;&gt;
&lt;div class=&quot;input-checkbox&quot;&gt;
&lt;span class=&quot;switch-chk-label label-left&quot;&gt;&lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot;&gt;&lt;path d=&quot;M6.995 12c0 2.761 2.246 5.007 5.007 5.007s5.007-2.246 5.007-5.007-2.246-5.007-5.007-5.007S6.995 9.239 6.995 12zM11 19h2v3h-2zm0-17h2v3h-2zm-9 9h3v2H2zm17 0h3v2h-3zM5.637 19.778l-1.414-1.414 2.121-2.121 1.414 1.414zM16.242 6.344l2.122-2.122 1.414 1.414-2.122 2.122zM6.344 7.759 4.223 5.637l1.415-1.414 2.12 2.122zm13.434 10.605-1.414 1.414-2.122-2.122 1.414-1.414z&quot;&gt;&lt;/path&gt;&lt;/svg&gt;&lt;/span&gt;
&lt;input class=&quot;switch-input&quot; type=&quot;checkbox&quot; role=&quot;switch&quot; id=&quot;form-custom-switch-inner-icon&quot; checked&gt;
&lt;span class=&quot;switch-chk-label label-right&quot;&gt;&lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot;&gt;&lt;path d=&quot;M12 11.807A9.002 9.002 0 0 1 10.049 2a9.942 9.942 0 0 0-5.12 2.735c-3.905 3.905-3.905 10.237 0 14.142 3.906 3.906 10.237 3.905 14.143 0a9.946 9.946 0 0 0 2.735-5.119A9.003 9.003 0 0 1 12 11.807z&quot;&gt;&lt;/path&gt;&lt;/svg&gt;&lt;/span&gt;
&lt;/div&gt;
&lt;label class=&quot;switch-label&quot; for=&quot;form-custom-switch-inner-icon&quot;&gt;Inner Icon&lt;/label&gt;
&lt;/div&gt;

&lt;div class=&quot;switch form-switch-custom switch-inline form-switch-primary form-switch-custom inner-icon-circle-toggle&quot;&gt;
&lt;div class=&quot;input-checkbox&quot;&gt;
&lt;input class=&quot;switch-input&quot; type=&quot;checkbox&quot; role=&quot;switch&quot; id=&quot;form-custom-switch-circular-inner-icon&quot; checked&gt;
&lt;/div&gt;
&lt;label class=&quot;switch-label&quot; for=&quot;form-custom-switch-circular-inner-icon&quot;&gt;Circlular Icon&lt;/label&gt;
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
                            <h4>Double Label</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">

                    <div class="row">

                        <div class="col-md-6 text-center">
                            <div class="switch form-switch-custom switch-inline form-switch-primary form-switch-custom inner-label-toggle show mb-sm-0 mb-3">
                                <div class="input-checkbox">
                                    <span class="switch-chk-label label-left">Light</span>
                                    <input class="switch-input" type="checkbox" role="switch" id="form-custom-switch-inner-label" onchange="this.checked ? this.closest('.inner-label-toggle').classList.add('show') : this.closest('.inner-label-toggle').classList.remove('show')" checked>
                                    <span class="switch-chk-label label-right">Dark</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 text-center">
                            <div class="switch form-switch-custom switch-inline form-switch-primary form-switch-custom inner-label-toggle show">
                                <div class="input-checkbox">
                                    <span class="switch-chk-label label-left"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M6.995 12c0 2.761 2.246 5.007 5.007 5.007s5.007-2.246 5.007-5.007-2.246-5.007-5.007-5.007S6.995 9.239 6.995 12zM11 19h2v3h-2zm0-17h2v3h-2zm-9 9h3v2H2zm17 0h3v2h-3zM5.637 19.778l-1.414-1.414 2.121-2.121 1.414 1.414zM16.242 6.344l2.122-2.122 1.414 1.414-2.122 2.122zM6.344 7.759 4.223 5.637l1.415-1.414 2.12 2.122zm13.434 10.605-1.414 1.414-2.122-2.122 1.414-1.414z"></path></svg> Light</span>
                                    <input class="switch-input" type="checkbox" role="switch" id="form-custom-switch-inner-label2" onchange="this.checked ? this.closest('.inner-label-toggle').classList.add('show') : this.closest('.inner-label-toggle').classList.remove('show')" checked>
                                    <span class="switch-chk-label label-right"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 11.807A9.002 9.002 0 0 1 10.049 2a9.942 9.942 0 0 0-5.12 2.735c-3.905 3.905-3.905 10.237 0 14.142 3.906 3.906 10.237 3.905 14.143 0a9.946 9.946 0 0 0 2.735-5.119A9.003 9.003 0 0 1 12 11.807z"></path></svg> Dark</span>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    
                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;div class=&quot;switch form-switch-custom switch-inline form-switch-primary form-switch-custom dual-label-toggle&quot;&gt;
&lt;label class=&quot;switch-label switch-label-left&quot; for=&quot;form-custom-switch-dual-label&quot;&gt;Monthly&lt;/label&gt;
&lt;div class=&quot;input-checkbox&quot;&gt;
&lt;input class=&quot;switch-input&quot; type=&quot;checkbox&quot; role=&quot;switch&quot; id=&quot;form-custom-switch-dual-label&quot; checked&gt;
&lt;/div&gt;
&lt;label class=&quot;switch-label switch-label-right&quot; for=&quot;form-custom-switch-dual-label&quot;&gt;Yearly&lt;/label&gt;
&lt;/div&gt;

&lt;br/&gt;
&lt;br/&gt;

&lt;div class=&quot;switch form-switch-custom switch-inline form-switch-primary form-switch-custom inner-label-toggle show&quot;&gt;
&lt;div class=&quot;input-checkbox&quot;&gt;
&lt;span class=&quot;switch-chk-label label-left&quot;&gt;OFF&lt;/span&gt;
&lt;input class=&quot;switch-input&quot; type=&quot;checkbox&quot; role=&quot;switch&quot; id=&quot;form-custom-switch-inner-label&quot; onchange=&quot;this.checked ? this.closest('.inner-label-toggle').classList.add('show') : this.closest('.inner-label-toggle').classList.remove('show')&quot; checked&gt;
&lt;span class=&quot;switch-chk-label label-right&quot;&gt;ON&lt;/span&gt;
&lt;/div&gt;
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