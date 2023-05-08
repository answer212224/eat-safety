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
                <li class="breadcrumb-item active" aria-current="page">Button Groups</li>
            </ol>
        </nav>
    </div>
    <!-- /BREADCRUMB -->

    <div id="navSection" data-bs-spy="affix" class="nav sidenav">
        <div class="sidenav-content">
            <a href="#btnGroupDefault" class="active nav-link">Default</a>
            <a href="#btnGroupOutline" class="nav-link">Outline</a>
            <a href="#btnGroupMixed" class="nav-link">Mixed</a>
            <a href="#btnGroupCheckbox" class="nav-link">Checkbox</a>
            <a href="#btnGroupRadio" class="nav-link">Radio</a>
            <a href="#btnGroupToolbar" class="nav-link">Toolbar</a>
            <a href="#btnGroupInputGroup" class="nav-link">InputGroup</a>
            <a href="#btnGroupSizes" class="nav-link">Sizes</a>
            <a href="#btnGroupDropdown" class="nav-link">Dropdown</a>
            <a href="#btnGroupVertical" class="nav-link">Vertical</a>
            <a href="#btnGroupPosition" class="nav-link">Position</a>
        </div>
    </div>

    <div class="row layout-top-spacing">

        <div id="btnGroupDefault" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header"> 
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Default</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area text-center">
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-primary">Left</button>
                        <button type="button" class="btn btn-primary">Middle</button>
                        <button type="button" class="btn btn-primary">Right</button>
                    </div>

                    <div class="code-section-container show-code">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;div class=&quot;btn-group&quot; role=&quot;group&quot; aria-label=&quot;Basic example&quot;&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Left&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Middle&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Right&lt;/button&gt;
&lt;/div&gt;</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="btnGroupOutline" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header"> 
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Outline</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area text-center">
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-outline-primary">Left</button>
                        <button type="button" class="btn btn-outline-primary">Middle</button>
                        <button type="button" class="btn btn-outline-primary">Right</button>
                    </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;div class=&quot;btn-group&quot; role=&quot;group&quot; aria-label=&quot;Basic example&quot;&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary&quot;&gt;Left&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary&quot;&gt;Middle&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary&quot;&gt;Right&lt;/button&gt;
&lt;/div&gt;</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="btnGroupMixed" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header"> 
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Mixed</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area text-center">
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-primary">Left</button>
                        <button type="button" class="btn btn-danger">Middle</button>
                        <button type="button" class="btn btn-success">Right</button>
                    </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;div class=&quot;btn-group&quot; role=&quot;group&quot; aria-label=&quot;Basic example&quot;&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Left&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-danger&quot;&gt;Middle&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-success&quot;&gt;Right&lt;/button&gt;
&lt;/div&gt;</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="btnGroupCheckbox" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header"> 
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Checkbox</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area text-center">
                    <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                        <input type="checkbox" class="btn-check" id="p1" autocomplete="off">
                        <label class="btn btn-outline-secondary" for="p1">Checkbox 1</label>
                      
                        <input type="checkbox" class="btn-check" id="p2" autocomplete="off">
                        <label class="btn btn-outline-secondary" for="p2">Checkbox 2</label>
                      
                        <input type="checkbox" class="btn-check" id="p3" autocomplete="off">
                        <label class="btn btn-outline-secondary" for="p3">Checkbox 3</label>
                    </div>


                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;div class=&quot;btn-group&quot; role=&quot;group&quot; aria-label=&quot;Basic checkbox toggle button group&quot;&gt;
&lt;input type=&quot;checkbox&quot; class=&quot;btn-check&quot; id=&quot;p1&quot; autocomplete=&quot;off&quot;&gt;
&lt;label class=&quot;btn btn-outline-secondary&quot; for=&quot;p1&quot;&gt;Checkbox 1&lt;/label&gt;

&lt;input type=&quot;checkbox&quot; class=&quot;btn-check&quot; id=&quot;p2&quot; autocomplete=&quot;off&quot;&gt;
&lt;label class=&quot;btn btn-outline-secondary&quot; for=&quot;p2&quot;&gt;Checkbox 2&lt;/label&gt;

&lt;input type=&quot;checkbox&quot; class=&quot;btn-check&quot; id=&quot;p3&quot; autocomplete=&quot;off&quot;&gt;
&lt;label class=&quot;btn btn-outline-secondary&quot; for=&quot;p3&quot;&gt;Checkbox 3&lt;/label&gt;
&lt;/div&gt;</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="btnGroupRadio" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header"> 
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Radio</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area text-center">
                    <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                        <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
                        <label class="btn btn-outline-warning" for="btnradio1">Radio 1</label>
                      
                        <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                        <label class="btn btn-outline-warning" for="btnradio2">Radio 2</label>
                      
                        <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                        <label class="btn btn-outline-warning" for="btnradio3">Radio 3</label>
                    </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;div class=&quot;btn-group&quot; role=&quot;group&quot; aria-label=&quot;Basic radio toggle button group&quot;&gt;
&lt;input type=&quot;radio&quot; class=&quot;btn-check&quot; name=&quot;btnradio&quot; id=&quot;btnradio1&quot; autocomplete=&quot;off&quot; checked&gt;
&lt;label class=&quot;btn btn-outline-warning&quot; for=&quot;btnradio1&quot;&gt;Radio 1&lt;/label&gt;

&lt;input type=&quot;radio&quot; class=&quot;btn-check&quot; name=&quot;btnradio&quot; id=&quot;btnradio2&quot; autocomplete=&quot;off&quot;&gt;
&lt;label class=&quot;btn btn-outline-warning&quot; for=&quot;btnradio2&quot;&gt;Radio 2&lt;/label&gt;

&lt;input type=&quot;radio&quot; class=&quot;btn-check&quot; name=&quot;btnradio&quot; id=&quot;btnradio3&quot; autocomplete=&quot;off&quot;&gt;
&lt;label class=&quot;btn btn-outline-warning&quot; for=&quot;btnradio3&quot;&gt;Radio 3&lt;/label&gt;
&lt;/div&gt;</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="btnGroupToolbar" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header"> 
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Toolbar</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area text-center">
                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                        <div class="btn-group me-2" role="group" aria-label="First group">
                            <button type="button" class="btn btn-primary">1</button>
                            <button type="button" class="btn btn-primary">2</button>
                            <button type="button" class="btn btn-primary">3</button>
                            <button type="button" class="btn btn-primary">4</button>
                        </div>
                        <div class="btn-group me-2" role="group" aria-label="Second group">
                            <button type="button" class="btn btn-secondary">5</button>
                            <button type="button" class="btn btn-secondary">6</button>
                            <button type="button" class="btn btn-secondary">7</button>
                        </div>
                        <div class="btn-group" role="group" aria-label="Third group">
                            <button type="button" class="btn btn-success">8</button>
                        </div>
                    </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;div class=&quot;btn-toolbar&quot; role=&quot;toolbar&quot; aria-label=&quot;Toolbar with button groups&quot;&gt;
&lt;div class=&quot;btn-group me-2&quot; role=&quot;group&quot; aria-label=&quot;First group&quot;&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;1&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;2&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;3&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;4&lt;/button&gt;
&lt;/div&gt;
&lt;div class=&quot;btn-group me-2&quot; role=&quot;group&quot; aria-label=&quot;Second group&quot;&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;5&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;6&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;7&lt;/button&gt;
&lt;/div&gt;
&lt;div class=&quot;btn-group&quot; role=&quot;group&quot; aria-label=&quot;Third group&quot;&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-success&quot;&gt;8&lt;/button&gt;
&lt;/div&gt;
&lt;/div&gt;</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="btnGroupInputGroup" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header"> 
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Input Group</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area text-center split-buttons">

                    <div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
                        <div class="btn-group" role="group" aria-label="First group">
                            <button type="button" class="btn btn-info">1</button>
                            <button type="button" class="btn btn-info">2</button>
                            <button type="button" class="btn btn-info">3</button>
                            <button type="button" class="btn btn-info">4</button>
                        </div>
                        <div class="input-group">
                            <div class="input-group-text" id="btnGroupAddon2">@</div>
                            <input type="text" class="form-control" placeholder="Input group example" aria-label="Input group example" aria-describedby="btnGroupAddon2">
                        </div>
                    </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;div class=&quot;btn-toolbar justify-content-between&quot; role=&quot;toolbar&quot; aria-label=&quot;Toolbar with button groups&quot;&gt;
&lt;div class=&quot;btn-group&quot; role=&quot;group&quot; aria-label=&quot;First group&quot;&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-info&quot;&gt;1&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-info&quot;&gt;2&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-info&quot;&gt;3&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-info&quot;&gt;4&lt;/button&gt;
&lt;/div&gt;
&lt;div class=&quot;input-group&quot;&gt;
&lt;div class=&quot;input-group-text&quot; id=&quot;btnGroupAddon2&quot;&gt;@&lt;/div&gt;
&lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Input group example&quot; aria-label=&quot;Input group example&quot; aria-describedby=&quot;btnGroupAddon2&quot;&gt;
&lt;/div&gt;
&lt;/div&gt;</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="btnGroupSizes" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header"> 
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Sizes</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area text-center">
                    <div class="btn-group btn-group-lg" role="group" aria-label="Large button group">
                        <button type="button" class="btn btn-outline-dark">Left</button>
                        <button type="button" class="btn btn-outline-dark">Middle</button>
                        <button type="button" class="btn btn-outline-dark">Right</button>
                    </div>

                    <br/>
                    <br/>
                    
                    <div class="btn-group" role="group" aria-label="Default button group">
                        <button type="button" class="btn btn-outline-dark">Left</button>
                        <button type="button" class="btn btn-outline-dark">Middle</button>
                        <button type="button" class="btn btn-outline-dark">Right</button>
                    </div>

                    <br/>
                    <br/>

                    <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                        <button type="button" class="btn btn-outline-dark">Left</button>
                        <button type="button" class="btn btn-outline-dark">Middle</button>
                        <button type="button" class="btn btn-outline-dark">Right</button>
                    </div>
                    
                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;!-- Large --&gt;

&lt;div class=&quot;btn-group btn-group-lg&quot; role=&quot;group&quot; aria-label=&quot;Large button group&quot;&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-dark&quot;&gt;Left&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-dark&quot;&gt;Middle&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-dark&quot;&gt;Right&lt;/button&gt;
&lt;/div&gt;

&lt;!-- Default --&gt;

&lt;div class=&quot;btn-group&quot; role=&quot;group&quot; aria-label=&quot;Default button group&quot;&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-dark&quot;&gt;Left&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-dark&quot;&gt;Middle&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-dark&quot;&gt;Right&lt;/button&gt;
&lt;/div&gt;

&lt;!-- Small --&gt;

&lt;div class=&quot;btn-group btn-group-sm&quot; role=&quot;group&quot; aria-label=&quot;Small button group&quot;&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-dark&quot;&gt;Left&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-dark&quot;&gt;Middle&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-dark&quot;&gt;Right&lt;/button&gt;
&lt;/div&gt;</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="btnGroupDropdown" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header"> 
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Dropdown</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area text-center">
                    <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                        <button type="button" class="btn btn-primary">1</button>
                        <button type="button" class="btn btn-primary">2</button>
                      
                        <div class="btn-group" role="group">
                          <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                          </button>
                          <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                            <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                            <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                          </ul>
                        </div>
                    </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;div class=&quot;btn-group&quot; role=&quot;group&quot; aria-label=&quot;Button group with nested dropdown&quot;&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;1&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;2&lt;/button&gt;

&lt;div class=&quot;btn-group&quot; role=&quot;group&quot;&gt;
&lt;button id=&quot;btnGroupDrop1&quot; type=&quot;button&quot; class=&quot;btn btn-primary dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt;
Dropdown
&lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-chevron-down&quot;&gt;&lt;polyline points=&quot;6 9 12 15 18 9&quot;&gt;&lt;/polyline&gt;&lt;/svg&gt;
&lt;/button&gt;
&lt;ul class=&quot;dropdown-menu&quot; aria-labelledby=&quot;btnGroupDrop1&quot;&gt;
&lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;/div&gt;
&lt;/div&gt;</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        
        <div id="btnGroupVertical" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header"> 
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Vertical Default</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area text-center">

                    <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
                        <button type="button" class="btn btn-secondary">Button</button>
                        <button type="button" class="btn btn-secondary">Button</button>
                        <div class="btn-group" role="group">
                          <button id="btnGroupVerticalDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                          </button>
                          <ul class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                            <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                            <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                          </ul>
                        </div>
                        <button type="button" class="btn btn-secondary">Button</button>
                        <button type="button" class="btn btn-secondary">Button</button>
                        <div class="btn-group" role="group">
                          <button id="btnGroupVerticalDrop2" type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                          </button>
                          <ul class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop2" style="">
                            <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                            <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                          </ul>
                        </div>
                        <div class="btn-group" role="group">
                          <button id="btnGroupVerticalDrop3" type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                          </button>
                          <ul class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop3">
                            <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                            <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                          </ul>
                        </div>
                        <div class="btn-group" role="group">
                          <button id="btnGroupVerticalDrop4" type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                          </button>
                          <ul class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop4">
                            <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                            <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                          </ul>
                        </div>
                      </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;!-- Vertical Default --&gt;

&lt;div class=&quot;btn-group-vertical me-4&quot; role=&quot;group&quot; aria-label=&quot;Vertical button group&quot;&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;Button&lt;/button&gt;
&lt;div class=&quot;btn-group&quot; role=&quot;group&quot;&gt;
&lt;button id=&quot;btnGroupVerticalDrop1&quot; type=&quot;button&quot; class=&quot;btn btn-secondary dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt;
Dropdown &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-chevron-down&quot;&gt;&lt;polyline points=&quot;6 9 12 15 18 9&quot;&gt;&lt;/polyline&gt;&lt;/svg&gt;
&lt;/button&gt;
&lt;ul class=&quot;dropdown-menu&quot; aria-labelledby=&quot;btnGroupVerticalDrop1&quot;&gt;
&lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;/div&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;Button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;Button&lt;/button&gt;
&lt;div class=&quot;btn-group&quot; role=&quot;group&quot;&gt;
&lt;button id=&quot;btnGroupVerticalDrop2&quot; type=&quot;button&quot; class=&quot;btn btn-secondary dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt;
Dropdown &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-chevron-down&quot;&gt;&lt;polyline points=&quot;6 9 12 15 18 9&quot;&gt;&lt;/polyline&gt;&lt;/svg&gt;
&lt;/button&gt;
&lt;ul class=&quot;dropdown-menu&quot; aria-labelledby=&quot;btnGroupVerticalDrop2&quot;&gt;
&lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;/div&gt;
&lt;/div&gt;

&lt;!-- With Radio --&gt;

&lt;div class=&quot;btn-group-vertical&quot; role=&quot;group&quot; aria-label=&quot;Vertical radio toggle button group&quot;&gt;
&lt;input type=&quot;radio&quot; class=&quot;btn-check&quot; name=&quot;vbtn-radio&quot; id=&quot;vbtn-radio1&quot; autocomplete=&quot;off&quot; checked=&quot;&quot;&gt;
&lt;label class=&quot;btn btn-outline-danger&quot; for=&quot;vbtn-radio1&quot;&gt;Radio 1&lt;/label&gt;
&lt;input type=&quot;radio&quot; class=&quot;btn-check&quot; name=&quot;vbtn-radio&quot; id=&quot;vbtn-radio2&quot; autocomplete=&quot;off&quot;&gt;
&lt;label class=&quot;btn btn-outline-danger&quot; for=&quot;vbtn-radio2&quot;&gt;Radio 2&lt;/label&gt;
&lt;input type=&quot;radio&quot; class=&quot;btn-check&quot; name=&quot;vbtn-radio&quot; id=&quot;vbtn-radio3&quot; autocomplete=&quot;off&quot;&gt;
&lt;label class=&quot;btn btn-outline-danger&quot; for=&quot;vbtn-radio3&quot;&gt;Radio 3&lt;/label&gt;
&lt;/div&gt;</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <div id="btnGroupVerticalRadio" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header"> 
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Vertical Radio</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area text-center">

                    <div class="btn-group-vertical" role="group" aria-label="Vertical radio toggle button group">
                        <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio1" autocomplete="off" checked="">
                        <label class="btn btn-outline-danger" for="vbtn-radio1">Radio 1</label>
                        <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio2" autocomplete="off">
                        <label class="btn btn-outline-danger" for="vbtn-radio2">Radio 2</label>
                        <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio3" autocomplete="off">
                        <label class="btn btn-outline-danger" for="vbtn-radio3">Radio 3</label>
                    </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>

&lt;!-- With Radio --&gt;

&lt;div class=&quot;btn-group-vertical&quot; role=&quot;group&quot; aria-label=&quot;Vertical radio toggle button group&quot;&gt;
&lt;input type=&quot;radio&quot; class=&quot;btn-check&quot; name=&quot;vbtn-radio&quot; id=&quot;vbtn-radio1&quot; autocomplete=&quot;off&quot; checked=&quot;&quot;&gt;
&lt;label class=&quot;btn btn-outline-danger&quot; for=&quot;vbtn-radio1&quot;&gt;Radio 1&lt;/label&gt;
&lt;input type=&quot;radio&quot; class=&quot;btn-check&quot; name=&quot;vbtn-radio&quot; id=&quot;vbtn-radio2&quot; autocomplete=&quot;off&quot;&gt;
&lt;label class=&quot;btn btn-outline-danger&quot; for=&quot;vbtn-radio2&quot;&gt;Radio 2&lt;/label&gt;
&lt;input type=&quot;radio&quot; class=&quot;btn-check&quot; name=&quot;vbtn-radio&quot; id=&quot;vbtn-radio3&quot; autocomplete=&quot;off&quot;&gt;
&lt;label class=&quot;btn btn-outline-danger&quot; for=&quot;vbtn-radio3&quot;&gt;Radio 3&lt;/label&gt;
&lt;/div&gt;</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="btnGroupPosition" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header"> 
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Positions</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">

                    <div class="">
                        <div class="btn-group mb-3" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-primary">Left</button>
                            <button type="button" class="btn btn-primary">Middle</button>
                            <button type="button" class="btn btn-primary">Right</button>
                        </div>
                    </div>

                    <div class="text-center">
                        <div class="btn-group mb-3" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-primary">Left</button>
                            <button type="button" class="btn btn-primary">Middle</button>
                            <button type="button" class="btn btn-primary">Right</button>
                        </div>
                    </div>

                    <div class="text-end">
                        <div class="btn-group mb-3" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-primary">Left</button>
                            <button type="button" class="btn btn-primary">Middle</button>
                            <button type="button" class="btn btn-primary">Right</button>
                        </div>
                    </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;div class=&quot;&quot;&gt;
&lt;div class=&quot;btn-group&quot; role=&quot;group&quot; aria-label=&quot;Basic example&quot;&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Left&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Middle&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Right&lt;/button&gt;
&lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;text-center&quot;&gt;
&lt;div class=&quot;btn-group&quot; role=&quot;group&quot; aria-label=&quot;Basic example&quot;&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Left&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Middle&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Right&lt;/button&gt;
&lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;text-end&quot;&gt;
&lt;div class=&quot;btn-group&quot; role=&quot;group&quot; aria-label=&quot;Basic example&quot;&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Left&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Middle&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Right&lt;/button&gt;
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