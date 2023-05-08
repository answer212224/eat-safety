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
                <li class="breadcrumb-item active" aria-current="page">Dropdown</li>
            </ol>
        </nav>
    </div>
    <!-- /BREADCRUMB -->

    <div id="navSection" data-bs-spy="affix" class="nav sidenav">
        <div class="sidenav-content">
            <a href="#dropdownDefault" class="active nav-link">Default</a>
            <a href="#dropdownOutline" class="nav-link">Outline</a>
            <a href="#dropdownSplitDefault" class="nav-link">Split</a>
            <a href="#dropdownSplitOutline" class="nav-link">Split Outline</a>
            <a href="#dropdownDirections" class="nav-link">Directions</a>
            <a href="#dropdownSizes" class="nav-link">Sizes</a>
            <a href="#dropdownGrouped" class="nav-link">Grouped</a>
            <a href="#dropdownSplit" class="nav-link">Split</a>
            <a href="#dropdownCustom" class="nav-link">Custom</a>
        </div>
    </div>

    <div class="row layout-top-spacing">
        <div id="dropdownDefault" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header"> 
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Default</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area text-center split-buttons">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                
                            <div class="btn-group  mb-2 me-4" role="group">
                                <button id="btndefault" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></button>
                                <div class="dropdown-menu" aria-labelledby="btndefault">
                                    <a href="javascript:void(0);" class="dropdown-item"><i class="flaticon-home-fill-1 mr-1"></i>Action</a>
                                    <a href="javascript:void(0);" class="dropdown-item"><i class="flaticon-gear-fill mr-1"></i>Another action</a>
                                    <a href="javascript:void(0);" class="dropdown-item"><i class="flaticon-bell-fill-2 mr-1"></i>Something else here</a>
                                    <a href="javascript:void(0);" class="dropdown-item"><i class="flaticon-dots mr-1"></i>Separated link</a>
                                </div>
                            </div>

                            <div class="btn-group  mb-2 me-4" role="group">
                                <button id="btndefault1" type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></button>
                                <div class="dropdown-menu" aria-labelledby="btndefault1">
                                    <a href="javascript:void(0);" class="dropdown-item"><i class="flaticon-home-fill-1 mr-1"></i>Action</a>
                                    <a href="javascript:void(0);" class="dropdown-item"><i class="flaticon-gear-fill mr-1"></i>Another action</a>
                                    <a href="javascript:void(0);" class="dropdown-item"><i class="flaticon-bell-fill-2 mr-1"></i>Something else here</a>
                                    <a href="javascript:void(0);" class="dropdown-item"><i class="flaticon-dots mr-1"></i>Separated link</a>
                                </div>
                            </div>
                            

                            <div class="btn-group  mb-2 me-4" role="group">
                                <button id="btndefault2" type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></button>
                                <div class="dropdown-menu" aria-labelledby="btndefault2">
                                    <a href="javascript:void(0);" class="dropdown-item"><i class="flaticon-home-fill-1 mr-1"></i>Action</a>
                                    <a href="javascript:void(0);" class="dropdown-item"><i class="flaticon-gear-fill mr-1"></i>Another action</a>
                                    <a href="javascript:void(0);" class="dropdown-item"><i class="flaticon-bell-fill-2 mr-1"></i>Something else here</a>
                                    <a href="javascript:void(0);" class="dropdown-item"><i class="flaticon-dots mr-1"></i>Separated link</a>
                                </div>
                            </div>

                            <div class="btn-group  mb-2 me-4" role="group">
                                <button id="btndefault3" type="button" class="btn btn-warning dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></button>
                                <div class="dropdown-menu" aria-labelledby="btndefault3">
                                    <a href="javascript:void(0);" class="dropdown-item"><i class="flaticon-home-fill-1 mr-1"></i>Action</a>
                                    <a href="javascript:void(0);" class="dropdown-item"><i class="flaticon-gear-fill mr-1"></i>Another action</a>
                                    <a href="javascript:void(0);" class="dropdown-item"><i class="flaticon-bell-fill-2 mr-1"></i>Something else here</a>
                                    <a href="javascript:void(0);" class="dropdown-item"><i class="flaticon-dots mr-1"></i>Separated link</a>
                                </div>
                            </div>

                            <div class="btn-group  mb-2 me-4" role="group">
                                <button id="btndefault4" type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></button>
                                <div class="dropdown-menu" aria-labelledby="btndefault4">
                                    <a href="javascript:void(0);" class="dropdown-item"><i class="flaticon-home-fill-1 mr-1"></i>Action</a>
                                    <a href="javascript:void(0);" class="dropdown-item"><i class="flaticon-gear-fill mr-1"></i>Another action</a>
                                    <a href="javascript:void(0);" class="dropdown-item"><i class="flaticon-bell-fill-2 mr-1"></i>Something else here</a>
                                    <a href="javascript:void(0);" class="dropdown-item"><i class="flaticon-dots mr-1"></i>Separated link</a>
                                </div>
                            </div>

                            <div class="btn-group  mb-2 me-4" role="group">
                                <button id="btndefault5" type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></button>
                                <div class="dropdown-menu" aria-labelledby="btndefault5">
                                    <a href="javascript:void(0);" class="dropdown-item"><i class="flaticon-home-fill-1 mr-1"></i>Action</a>
                                    <a href="javascript:void(0);" class="dropdown-item"><i class="flaticon-gear-fill mr-1"></i>Another action</a>
                                    <a href="javascript:void(0);" class="dropdown-item"><i class="flaticon-bell-fill-2 mr-1"></i>Something else here</a>
                                    <a href="javascript:void(0);" class="dropdown-item"><i class="flaticon-dots mr-1"></i>Separated link</a>
                                </div>
                            </div>

                            <div class="btn-group  mb-2 me-4" role="group">
                                <button id="btndefault6" type="button" class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></button>
                                <div class="dropdown-menu" aria-labelledby="btndefault6">
                                    <a href="javascript:void(0);" class="dropdown-item"><i class="flaticon-home-fill-1 mr-1"></i>Action</a>
                                    <a href="javascript:void(0);" class="dropdown-item"><i class="flaticon-gear-fill mr-1"></i>Another action</a>
                                    <a href="javascript:void(0);" class="dropdown-item"><i class="flaticon-bell-fill-2 mr-1"></i>Something else here</a>
                                    <a href="javascript:void(0);" class="dropdown-item"><i class="flaticon-dots mr-1"></i>Separated link</a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;div class=&quot;btn-group  mb-2 me-4&quot; role=&quot;group&quot;&gt;
&lt;button id=&quot;btndefault&quot; type=&quot;button&quot; class=&quot;btn btn-primary dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;Action &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-chevron-down&quot;&gt;&lt;polyline points=&quot;6 9 12 15 18 9&quot;&gt;&lt;/polyline&gt;&lt;/svg&gt;&lt;/button&gt;
&lt;div class=&quot;dropdown-menu&quot; aria-labelledby=&quot;btndefault&quot;&gt;
&lt;a href=&quot;javascript:void(0);&quot; class=&quot;dropdown-item&quot;&gt;&lt;i class=&quot;flaticon-home-fill-1 mr-1&quot;&gt;&lt;/i&gt;Action&lt;/a&gt;
&lt;a href=&quot;javascript:void(0);&quot; class=&quot;dropdown-item&quot;&gt;&lt;i class=&quot;flaticon-gear-fill mr-1&quot;&gt;&lt;/i&gt;Another action&lt;/a&gt;
&lt;a href=&quot;javascript:void(0);&quot; class=&quot;dropdown-item&quot;&gt;&lt;i class=&quot;flaticon-bell-fill-2 mr-1&quot;&gt;&lt;/i&gt;Something else here&lt;/a&gt;
&lt;a href=&quot;javascript:void(0);&quot; class=&quot;dropdown-item&quot;&gt;&lt;i class=&quot;flaticon-dots mr-1&quot;&gt;&lt;/i&gt;Separated link&lt;/a&gt;
&lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;btn-group  mb-2 me-4&quot; role=&quot;group&quot;&gt;
&lt;button id=&quot;btndefault&quot; type=&quot;button&quot; class=&quot;btn btn-info dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;Action &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-chevron-down&quot;&gt;&lt;polyline points=&quot;6 9 12 15 18 9&quot;&gt;&lt;/polyline&gt;&lt;/svg&gt;&lt;/button&gt;
&lt;div class=&quot;dropdown-menu&quot; aria-labelledby=&quot;btndefault&quot;&gt;
&lt;a href=&quot;javascript:void(0);&quot; class=&quot;dropdown-item&quot;&gt;&lt;i class=&quot;flaticon-home-fill-1 mr-1&quot;&gt;&lt;/i&gt;Action&lt;/a&gt;
&lt;a href=&quot;javascript:void(0);&quot; class=&quot;dropdown-item&quot;&gt;&lt;i class=&quot;flaticon-gear-fill mr-1&quot;&gt;&lt;/i&gt;Another action&lt;/a&gt;
&lt;a href=&quot;javascript:void(0);&quot; class=&quot;dropdown-item&quot;&gt;&lt;i class=&quot;flaticon-bell-fill-2 mr-1&quot;&gt;&lt;/i&gt;Something else here&lt;/a&gt;
&lt;a href=&quot;javascript:void(0);&quot; class=&quot;dropdown-item&quot;&gt;&lt;i class=&quot;flaticon-dots mr-1&quot;&gt;&lt;/i&gt;Separated link&lt;/a&gt;
&lt;/div&gt;
&lt;/div&gt;


&lt;div class=&quot;btn-group  mb-2 me-4&quot; role=&quot;group&quot;&gt;
&lt;button id=&quot;btndefault&quot; type=&quot;button&quot; class=&quot;btn btn-success dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;Action &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-chevron-down&quot;&gt;&lt;polyline points=&quot;6 9 12 15 18 9&quot;&gt;&lt;/polyline&gt;&lt;/svg&gt;&lt;/button&gt;
&lt;div class=&quot;dropdown-menu&quot; aria-labelledby=&quot;btndefault&quot;&gt;
&lt;a href=&quot;javascript:void(0);&quot; class=&quot;dropdown-item&quot;&gt;&lt;i class=&quot;flaticon-home-fill-1 mr-1&quot;&gt;&lt;/i&gt;Action&lt;/a&gt;
&lt;a href=&quot;javascript:void(0);&quot; class=&quot;dropdown-item&quot;&gt;&lt;i class=&quot;flaticon-gear-fill mr-1&quot;&gt;&lt;/i&gt;Another action&lt;/a&gt;
&lt;a href=&quot;javascript:void(0);&quot; class=&quot;dropdown-item&quot;&gt;&lt;i class=&quot;flaticon-bell-fill-2 mr-1&quot;&gt;&lt;/i&gt;Something else here&lt;/a&gt;
&lt;a href=&quot;javascript:void(0);&quot; class=&quot;dropdown-item&quot;&gt;&lt;i class=&quot;flaticon-dots mr-1&quot;&gt;&lt;/i&gt;Separated link&lt;/a&gt;
&lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;btn-group  mb-2 me-4&quot; role=&quot;group&quot;&gt;
&lt;button id=&quot;btndefault&quot; type=&quot;button&quot; class=&quot;btn btn-warning dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;Action &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-chevron-down&quot;&gt;&lt;polyline points=&quot;6 9 12 15 18 9&quot;&gt;&lt;/polyline&gt;&lt;/svg&gt;&lt;/button&gt;
&lt;div class=&quot;dropdown-menu&quot; aria-labelledby=&quot;btndefault&quot;&gt;
&lt;a href=&quot;javascript:void(0);&quot; class=&quot;dropdown-item&quot;&gt;&lt;i class=&quot;flaticon-home-fill-1 mr-1&quot;&gt;&lt;/i&gt;Action&lt;/a&gt;
&lt;a href=&quot;javascript:void(0);&quot; class=&quot;dropdown-item&quot;&gt;&lt;i class=&quot;flaticon-gear-fill mr-1&quot;&gt;&lt;/i&gt;Another action&lt;/a&gt;
&lt;a href=&quot;javascript:void(0);&quot; class=&quot;dropdown-item&quot;&gt;&lt;i class=&quot;flaticon-bell-fill-2 mr-1&quot;&gt;&lt;/i&gt;Something else here&lt;/a&gt;
&lt;a href=&quot;javascript:void(0);&quot; class=&quot;dropdown-item&quot;&gt;&lt;i class=&quot;flaticon-dots mr-1&quot;&gt;&lt;/i&gt;Separated link&lt;/a&gt;
&lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;btn-group  mb-2 me-4&quot; role=&quot;group&quot;&gt;
&lt;button id=&quot;btndefault&quot; type=&quot;button&quot; class=&quot;btn btn-danger dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;Action &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-chevron-down&quot;&gt;&lt;polyline points=&quot;6 9 12 15 18 9&quot;&gt;&lt;/polyline&gt;&lt;/svg&gt;&lt;/button&gt;
&lt;div class=&quot;dropdown-menu&quot; aria-labelledby=&quot;btndefault&quot;&gt;
&lt;a href=&quot;javascript:void(0);&quot; class=&quot;dropdown-item&quot;&gt;&lt;i class=&quot;flaticon-home-fill-1 mr-1&quot;&gt;&lt;/i&gt;Action&lt;/a&gt;
&lt;a href=&quot;javascript:void(0);&quot; class=&quot;dropdown-item&quot;&gt;&lt;i class=&quot;flaticon-gear-fill mr-1&quot;&gt;&lt;/i&gt;Another action&lt;/a&gt;
&lt;a href=&quot;javascript:void(0);&quot; class=&quot;dropdown-item&quot;&gt;&lt;i class=&quot;flaticon-bell-fill-2 mr-1&quot;&gt;&lt;/i&gt;Something else here&lt;/a&gt;
&lt;a href=&quot;javascript:void(0);&quot; class=&quot;dropdown-item&quot;&gt;&lt;i class=&quot;flaticon-dots mr-1&quot;&gt;&lt;/i&gt;Separated link&lt;/a&gt;
&lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;btn-group  mb-2 me-4&quot; role=&quot;group&quot;&gt;
&lt;button id=&quot;btndefault&quot; type=&quot;button&quot; class=&quot;btn btn-secondary dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;Action &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-chevron-down&quot;&gt;&lt;polyline points=&quot;6 9 12 15 18 9&quot;&gt;&lt;/polyline&gt;&lt;/svg&gt;&lt;/button&gt;
&lt;div class=&quot;dropdown-menu&quot; aria-labelledby=&quot;btndefault&quot;&gt;
&lt;a href=&quot;javascript:void(0);&quot; class=&quot;dropdown-item&quot;&gt;&lt;i class=&quot;flaticon-home-fill-1 mr-1&quot;&gt;&lt;/i&gt;Action&lt;/a&gt;
&lt;a href=&quot;javascript:void(0);&quot; class=&quot;dropdown-item&quot;&gt;&lt;i class=&quot;flaticon-gear-fill mr-1&quot;&gt;&lt;/i&gt;Another action&lt;/a&gt;
&lt;a href=&quot;javascript:void(0);&quot; class=&quot;dropdown-item&quot;&gt;&lt;i class=&quot;flaticon-bell-fill-2 mr-1&quot;&gt;&lt;/i&gt;Something else here&lt;/a&gt;
&lt;a href=&quot;javascript:void(0);&quot; class=&quot;dropdown-item&quot;&gt;&lt;i class=&quot;flaticon-dots mr-1&quot;&gt;&lt;/i&gt;Separated link&lt;/a&gt;
&lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;btn-group  mb-2 me-4&quot; role=&quot;group&quot;&gt;
&lt;button id=&quot;btndefault&quot; type=&quot;button&quot; class=&quot;btn btn-dark dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;Action &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-chevron-down&quot;&gt;&lt;polyline points=&quot;6 9 12 15 18 9&quot;&gt;&lt;/polyline&gt;&lt;/svg&gt;&lt;/button&gt;
&lt;div class=&quot;dropdown-menu&quot; aria-labelledby=&quot;btndefault&quot;&gt;
&lt;a href=&quot;javascript:void(0);&quot; class=&quot;dropdown-item&quot;&gt;&lt;i class=&quot;flaticon-home-fill-1 mr-1&quot;&gt;&lt;/i&gt;Action&lt;/a&gt;
&lt;a href=&quot;javascript:void(0);&quot; class=&quot;dropdown-item&quot;&gt;&lt;i class=&quot;flaticon-gear-fill mr-1&quot;&gt;&lt;/i&gt;Another action&lt;/a&gt;
&lt;a href=&quot;javascript:void(0);&quot; class=&quot;dropdown-item&quot;&gt;&lt;i class=&quot;flaticon-bell-fill-2 mr-1&quot;&gt;&lt;/i&gt;Something else here&lt;/a&gt;
&lt;a href=&quot;javascript:void(0);&quot; class=&quot;dropdown-item&quot;&gt;&lt;i class=&quot;flaticon-dots mr-1&quot;&gt;&lt;/i&gt;Separated link&lt;/a&gt;
&lt;/div&gt;
&lt;/div&gt;
</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="dropdownOutline" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header"> 
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4> Outline </h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area text-center split-buttons">
                                
                    <div class="btn-group  mb-2 me-4" role="group">
                        <button id="outlineDropdown1" type="button" class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></button>
                        <div class="dropdown-menu" aria-labelledby="outlineDropdown1">
                            <a href="javascript:void(0);" class="dropdown-item"><i class="flaticon-home-fill-1 mr-1"></i>Action</a>
                            <a href="javascript:void(0);" class="dropdown-item"><i class="flaticon-gear-fill mr-1"></i>Another action</a>
                            <a href="javascript:void(0);" class="dropdown-item"><i class="flaticon-bell-fill-2 mr-1"></i>Something else here</a>
                            <a href="javascript:void(0);" class="dropdown-item"><i class="flaticon-dots mr-1"></i>Separated link</a>
                        </div>
                    </div>

                    <div class="btn-group  mb-2 me-4" role="group">
                        <button id="outlineDropdown2" type="button" class="btn btn-outline-info dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></button>
                        <div class="dropdown-menu" aria-labelledby="outlineDropdown2">
                            <a href="javascript:void(0);" class="dropdown-item"><i class="flaticon-home-fill-1 mr-1"></i>Action</a>
                            <a href="javascript:void(0);" class="dropdown-item"><i class="flaticon-gear-fill mr-1"></i>Another action</a>
                            <a href="javascript:void(0);" class="dropdown-item"><i class="flaticon-bell-fill-2 mr-1"></i>Something else here</a>
                            <a href="javascript:void(0);" class="dropdown-item"><i class="flaticon-dots mr-1"></i>Separated link</a>
                        </div>
                    </div>
                    

                    <div class="btn-group  mb-2 me-4" role="group">
                        <button id="outlineDropdown3" type="button" class="btn btn-outline-success dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></button>
                        <div class="dropdown-menu" aria-labelledby="outlineDropdown3">
                            <a href="javascript:void(0);" class="dropdown-item"><i class="flaticon-home-fill-1 mr-1"></i>Action</a>
                            <a href="javascript:void(0);" class="dropdown-item"><i class="flaticon-gear-fill mr-1"></i>Another action</a>
                            <a href="javascript:void(0);" class="dropdown-item"><i class="flaticon-bell-fill-2 mr-1"></i>Something else here</a>
                            <a href="javascript:void(0);" class="dropdown-item"><i class="flaticon-dots mr-1"></i>Separated link</a>
                        </div>
                    </div>

                    <div class="btn-group  mb-2 me-4" role="group">
                        <button id="outlineDropdown4" type="button" class="btn btn-outline-warning dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></button>
                        <div class="dropdown-menu" aria-labelledby="outlineDropdown4">
                            <a href="javascript:void(0);" class="dropdown-item"><i class="flaticon-home-fill-1 mr-1"></i>Action</a>
                            <a href="javascript:void(0);" class="dropdown-item"><i class="flaticon-gear-fill mr-1"></i>Another action</a>
                            <a href="javascript:void(0);" class="dropdown-item"><i class="flaticon-bell-fill-2 mr-1"></i>Something else here</a>
                            <a href="javascript:void(0);" class="dropdown-item"><i class="flaticon-dots mr-1"></i>Separated link</a>
                        </div>
                    </div>

                    <div class="btn-group  mb-2 me-4" role="group">
                        <button id="outlineDropdown5" type="button" class="btn btn-outline-danger dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></button>
                        <div class="dropdown-menu" aria-labelledby="outlineDropdown5">
                            <a href="javascript:void(0);" class="dropdown-item"><i class="flaticon-home-fill-1 mr-1"></i>Action</a>
                            <a href="javascript:void(0);" class="dropdown-item"><i class="flaticon-gear-fill mr-1"></i>Another action</a>
                            <a href="javascript:void(0);" class="dropdown-item"><i class="flaticon-bell-fill-2 mr-1"></i>Something else here</a>
                            <a href="javascript:void(0);" class="dropdown-item"><i class="flaticon-dots mr-1"></i>Separated link</a>
                        </div>
                    </div>

                    <div class="btn-group  mb-2 me-4" role="group">
                        <button id="outlineDropdown6" type="button" class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></button>
                        <div class="dropdown-menu" aria-labelledby="outlineDropdown6">
                            <a href="javascript:void(0);" class="dropdown-item"><i class="flaticon-home-fill-1 mr-1"></i>Action</a>
                            <a href="javascript:void(0);" class="dropdown-item"><i class="flaticon-gear-fill mr-1"></i>Another action</a>
                            <a href="javascript:void(0);" class="dropdown-item"><i class="flaticon-bell-fill-2 mr-1"></i>Something else here</a>
                            <a href="javascript:void(0);" class="dropdown-item"><i class="flaticon-dots mr-1"></i>Separated link</a>
                        </div>
                    </div>

                    <div class="btn-group  mb-2 me-4" role="group">
                        <button id="outlineDropdown7" type="button" class="btn btn-outline-dark dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></button>
                        <div class="dropdown-menu" aria-labelledby="outlineDropdown7">
                            <a href="javascript:void(0);" class="dropdown-item"><i class="flaticon-home-fill-1 mr-1"></i>Action</a>
                            <a href="javascript:void(0);" class="dropdown-item"><i class="flaticon-gear-fill mr-1"></i>Another action</a>
                            <a href="javascript:void(0);" class="dropdown-item"><i class="flaticon-bell-fill-2 mr-1"></i>Something else here</a>
                            <a href="javascript:void(0);" class="dropdown-item"><i class="flaticon-dots mr-1"></i>Separated link</a>
                        </div>
                    </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;div class=&quot;btn-group  mb-2 me-4&quot; role=&quot;group&quot;&gt;
&lt;button id=&quot;btndefault&quot; type=&quot;button&quot; class=&quot;btn btn-outline-primary dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;Action &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-chevron-down&quot;&gt;&lt;polyline points=&quot;6 9 12 15 18 9&quot;&gt;&lt;/polyline&gt;&lt;/svg&gt;&lt;/button&gt;
&lt;div class=&quot;dropdown-menu&quot; aria-labelledby=&quot;btndefault&quot;&gt;
&lt;a href=&quot;javascript:void(0);&quot; class=&quot;dropdown-item&quot;&gt;&lt;i class=&quot;flaticon-home-fill-1 mr-1&quot;&gt;&lt;/i&gt;Action&lt;/a&gt;
&lt;a href=&quot;javascript:void(0);&quot; class=&quot;dropdown-item&quot;&gt;&lt;i class=&quot;flaticon-gear-fill mr-1&quot;&gt;&lt;/i&gt;Another action&lt;/a&gt;
&lt;a href=&quot;javascript:void(0);&quot; class=&quot;dropdown-item&quot;&gt;&lt;i class=&quot;flaticon-bell-fill-2 mr-1&quot;&gt;&lt;/i&gt;Something else here&lt;/a&gt;
&lt;a href=&quot;javascript:void(0);&quot; class=&quot;dropdown-item&quot;&gt;&lt;i class=&quot;flaticon-dots mr-1&quot;&gt;&lt;/i&gt;Separated link&lt;/a&gt;
&lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;btn-group  mb-2 me-4&quot; role=&quot;group&quot;&gt;
&lt;button id=&quot;btndefault&quot; type=&quot;button&quot; class=&quot;btn btn-outline-info dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;Action &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-chevron-down&quot;&gt;&lt;polyline points=&quot;6 9 12 15 18 9&quot;&gt;&lt;/polyline&gt;&lt;/svg&gt;&lt;/button&gt;
&lt;div class=&quot;dropdown-menu&quot; aria-labelledby=&quot;btndefault&quot;&gt;
&lt;a href=&quot;javascript:void(0);&quot; class=&quot;dropdown-item&quot;&gt;&lt;i class=&quot;flaticon-home-fill-1 mr-1&quot;&gt;&lt;/i&gt;Action&lt;/a&gt;
&lt;a href=&quot;javascript:void(0);&quot; class=&quot;dropdown-item&quot;&gt;&lt;i class=&quot;flaticon-gear-fill mr-1&quot;&gt;&lt;/i&gt;Another action&lt;/a&gt;
&lt;a href=&quot;javascript:void(0);&quot; class=&quot;dropdown-item&quot;&gt;&lt;i class=&quot;flaticon-bell-fill-2 mr-1&quot;&gt;&lt;/i&gt;Something else here&lt;/a&gt;
&lt;a href=&quot;javascript:void(0);&quot; class=&quot;dropdown-item&quot;&gt;&lt;i class=&quot;flaticon-dots mr-1&quot;&gt;&lt;/i&gt;Separated link&lt;/a&gt;
&lt;/div&gt;
&lt;/div&gt;


&lt;div class=&quot;btn-group  mb-2 me-4&quot; role=&quot;group&quot;&gt;
&lt;button id=&quot;btndefault&quot; type=&quot;button&quot; class=&quot;btn btn-outline-success dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;Action &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-chevron-down&quot;&gt;&lt;polyline points=&quot;6 9 12 15 18 9&quot;&gt;&lt;/polyline&gt;&lt;/svg&gt;&lt;/button&gt;
&lt;div class=&quot;dropdown-menu&quot; aria-labelledby=&quot;btndefault&quot;&gt;
&lt;a href=&quot;javascript:void(0);&quot; class=&quot;dropdown-item&quot;&gt;&lt;i class=&quot;flaticon-home-fill-1 mr-1&quot;&gt;&lt;/i&gt;Action&lt;/a&gt;
&lt;a href=&quot;javascript:void(0);&quot; class=&quot;dropdown-item&quot;&gt;&lt;i class=&quot;flaticon-gear-fill mr-1&quot;&gt;&lt;/i&gt;Another action&lt;/a&gt;
&lt;a href=&quot;javascript:void(0);&quot; class=&quot;dropdown-item&quot;&gt;&lt;i class=&quot;flaticon-bell-fill-2 mr-1&quot;&gt;&lt;/i&gt;Something else here&lt;/a&gt;
&lt;a href=&quot;javascript:void(0);&quot; class=&quot;dropdown-item&quot;&gt;&lt;i class=&quot;flaticon-dots mr-1&quot;&gt;&lt;/i&gt;Separated link&lt;/a&gt;
&lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;btn-group  mb-2 me-4&quot; role=&quot;group&quot;&gt;
&lt;button id=&quot;btndefault&quot; type=&quot;button&quot; class=&quot;btn btn-outline-warning dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;Action &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-chevron-down&quot;&gt;&lt;polyline points=&quot;6 9 12 15 18 9&quot;&gt;&lt;/polyline&gt;&lt;/svg&gt;&lt;/button&gt;
&lt;div class=&quot;dropdown-menu&quot; aria-labelledby=&quot;btndefault&quot;&gt;
&lt;a href=&quot;javascript:void(0);&quot; class=&quot;dropdown-item&quot;&gt;&lt;i class=&quot;flaticon-home-fill-1 mr-1&quot;&gt;&lt;/i&gt;Action&lt;/a&gt;
&lt;a href=&quot;javascript:void(0);&quot; class=&quot;dropdown-item&quot;&gt;&lt;i class=&quot;flaticon-gear-fill mr-1&quot;&gt;&lt;/i&gt;Another action&lt;/a&gt;
&lt;a href=&quot;javascript:void(0);&quot; class=&quot;dropdown-item&quot;&gt;&lt;i class=&quot;flaticon-bell-fill-2 mr-1&quot;&gt;&lt;/i&gt;Something else here&lt;/a&gt;
&lt;a href=&quot;javascript:void(0);&quot; class=&quot;dropdown-item&quot;&gt;&lt;i class=&quot;flaticon-dots mr-1&quot;&gt;&lt;/i&gt;Separated link&lt;/a&gt;
&lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;btn-group  mb-2 me-4&quot; role=&quot;group&quot;&gt;
&lt;button id=&quot;btndefault&quot; type=&quot;button&quot; class=&quot;btn btn-outline-danger dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;Action &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-chevron-down&quot;&gt;&lt;polyline points=&quot;6 9 12 15 18 9&quot;&gt;&lt;/polyline&gt;&lt;/svg&gt;&lt;/button&gt;
&lt;div class=&quot;dropdown-menu&quot; aria-labelledby=&quot;btndefault&quot;&gt;
&lt;a href=&quot;javascript:void(0);&quot; class=&quot;dropdown-item&quot;&gt;&lt;i class=&quot;flaticon-home-fill-1 mr-1&quot;&gt;&lt;/i&gt;Action&lt;/a&gt;
&lt;a href=&quot;javascript:void(0);&quot; class=&quot;dropdown-item&quot;&gt;&lt;i class=&quot;flaticon-gear-fill mr-1&quot;&gt;&lt;/i&gt;Another action&lt;/a&gt;
&lt;a href=&quot;javascript:void(0);&quot; class=&quot;dropdown-item&quot;&gt;&lt;i class=&quot;flaticon-bell-fill-2 mr-1&quot;&gt;&lt;/i&gt;Something else here&lt;/a&gt;
&lt;a href=&quot;javascript:void(0);&quot; class=&quot;dropdown-item&quot;&gt;&lt;i class=&quot;flaticon-dots mr-1&quot;&gt;&lt;/i&gt;Separated link&lt;/a&gt;
&lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;btn-group  mb-2 me-4&quot; role=&quot;group&quot;&gt;
&lt;button id=&quot;btndefault&quot; type=&quot;button&quot; class=&quot;btn btn-outline-secondary dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;Action &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-chevron-down&quot;&gt;&lt;polyline points=&quot;6 9 12 15 18 9&quot;&gt;&lt;/polyline&gt;&lt;/svg&gt;&lt;/button&gt;
&lt;div class=&quot;dropdown-menu&quot; aria-labelledby=&quot;btndefault&quot;&gt;
&lt;a href=&quot;javascript:void(0);&quot; class=&quot;dropdown-item&quot;&gt;&lt;i class=&quot;flaticon-home-fill-1 mr-1&quot;&gt;&lt;/i&gt;Action&lt;/a&gt;
&lt;a href=&quot;javascript:void(0);&quot; class=&quot;dropdown-item&quot;&gt;&lt;i class=&quot;flaticon-gear-fill mr-1&quot;&gt;&lt;/i&gt;Another action&lt;/a&gt;
&lt;a href=&quot;javascript:void(0);&quot; class=&quot;dropdown-item&quot;&gt;&lt;i class=&quot;flaticon-bell-fill-2 mr-1&quot;&gt;&lt;/i&gt;Something else here&lt;/a&gt;
&lt;a href=&quot;javascript:void(0);&quot; class=&quot;dropdown-item&quot;&gt;&lt;i class=&quot;flaticon-dots mr-1&quot;&gt;&lt;/i&gt;Separated link&lt;/a&gt;
&lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;btn-group  mb-2 me-4&quot; role=&quot;group&quot;&gt;
&lt;button id=&quot;btndefault&quot; type=&quot;button&quot; class=&quot;btn btn-outline-dark dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;Action &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-chevron-down&quot;&gt;&lt;polyline points=&quot;6 9 12 15 18 9&quot;&gt;&lt;/polyline&gt;&lt;/svg&gt;&lt;/button&gt;
&lt;div class=&quot;dropdown-menu&quot; aria-labelledby=&quot;btndefault&quot;&gt;
&lt;a href=&quot;javascript:void(0);&quot; class=&quot;dropdown-item&quot;&gt;&lt;i class=&quot;flaticon-home-fill-1 mr-1&quot;&gt;&lt;/i&gt;Action&lt;/a&gt;
&lt;a href=&quot;javascript:void(0);&quot; class=&quot;dropdown-item&quot;&gt;&lt;i class=&quot;flaticon-gear-fill mr-1&quot;&gt;&lt;/i&gt;Another action&lt;/a&gt;
&lt;a href=&quot;javascript:void(0);&quot; class=&quot;dropdown-item&quot;&gt;&lt;i class=&quot;flaticon-bell-fill-2 mr-1&quot;&gt;&lt;/i&gt;Something else here&lt;/a&gt;
&lt;a href=&quot;javascript:void(0);&quot; class=&quot;dropdown-item&quot;&gt;&lt;i class=&quot;flaticon-dots mr-1&quot;&gt;&lt;/i&gt;Separated link&lt;/a&gt;
&lt;/div&gt;
&lt;/div&gt;
</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="dropdownSplitDefault" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header"> 
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4> Split </h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area text-center split-buttons">
                                
                    <div class="btn-group mb-2 me-4">
                        <button type="button" class="btn btn-primary">Action</button>
                        <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                            <span class="visually-hidden ">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);">Action</a>
                            <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                            <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:void(0);">Separated link</a>
                        </div>
                    </div>

                    <div class="btn-group mb-2 me-4">
                        <button type="button" class="btn btn-info">Action</button>
                        <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                            <span class="visually-hidden ">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);">Action</a>
                            <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                            <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:void(0);">Separated link</a>
                        </div>
                    </div>

                    <div class="btn-group mb-2 me-4">
                        <button type="button" class="btn btn-success">Action</button>
                        <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                            <span class="visually-hidden ">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);">Action</a>
                            <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                            <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:void(0);">Separated link</a>
                        </div>
                    </div>

                    <div class="btn-group mb-2 me-4">
                        <button type="button" class="btn btn-warning">Action</button>
                        <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                            <span class="visually-hidden ">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);">Action</a>
                            <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                            <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:void(0);">Separated link</a>
                        </div>
                    </div>

                    <div class="btn-group mb-2 me-4">
                        <button type="button" class="btn btn-danger">Action</button>
                        <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                            <span class="visually-hidden ">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);">Action</a>
                            <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                            <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:void(0);">Separated link</a>
                        </div>
                    </div>

                    <div class="btn-group mb-2 me-4">
                        <button type="button" class="btn btn-secondary">Action</button>
                        <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                            <span class="visually-hidden ">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);">Action</a>
                            <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                            <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:void(0);">Separated link</a>
                        </div>
                    </div>

                    <div class="btn-group mb-2 me-4">
                        <button type="button" class="btn btn-dark">Action</button>
                        <button type="button" class="btn btn-dark dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                            <span class="visually-hidden ">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);">Action</a>
                            <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                            <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:void(0);">Separated link</a>
                        </div>
                    </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;div class=&quot;btn-group mb-2 me-4&quot;&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Action&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary dropdown-toggle dropdown-toggle-split&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;&lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-chevron-down&quot;&gt;&lt;polyline points=&quot;6 9 12 15 18 9&quot;&gt;&lt;/polyline&gt;&lt;/svg&gt;
&lt;span class=&quot;visually-hidden &quot;&gt;Toggle Dropdown&lt;/span&gt;
&lt;/button&gt;
&lt;div class=&quot;dropdown-menu&quot;&gt;
&lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0);&quot;&gt;Action&lt;/a&gt;
&lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0);&quot;&gt;Another action&lt;/a&gt;
&lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0);&quot;&gt;Something else here&lt;/a&gt;
&lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
&lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0);&quot;&gt;Separated link&lt;/a&gt;
&lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;btn-group mb-2 me-4&quot;&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-info&quot;&gt;Action&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-info dropdown-toggle dropdown-toggle-split&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;&lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-chevron-down&quot;&gt;&lt;polyline points=&quot;6 9 12 15 18 9&quot;&gt;&lt;/polyline&gt;&lt;/svg&gt;
&lt;span class=&quot;visually-hidden &quot;&gt;Toggle Dropdown&lt;/span&gt;
&lt;/button&gt;
&lt;div class=&quot;dropdown-menu&quot;&gt;
&lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0);&quot;&gt;Action&lt;/a&gt;
&lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0);&quot;&gt;Another action&lt;/a&gt;
&lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0);&quot;&gt;Something else here&lt;/a&gt;
&lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
&lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0);&quot;&gt;Separated link&lt;/a&gt;
&lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;btn-group mb-2 me-4&quot;&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-success&quot;&gt;Action&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-success dropdown-toggle dropdown-toggle-split&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;&lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-chevron-down&quot;&gt;&lt;polyline points=&quot;6 9 12 15 18 9&quot;&gt;&lt;/polyline&gt;&lt;/svg&gt;
&lt;span class=&quot;visually-hidden &quot;&gt;Toggle Dropdown&lt;/span&gt;
&lt;/button&gt;
&lt;div class=&quot;dropdown-menu&quot;&gt;
&lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0);&quot;&gt;Action&lt;/a&gt;
&lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0);&quot;&gt;Another action&lt;/a&gt;
&lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0);&quot;&gt;Something else here&lt;/a&gt;
&lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
&lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0);&quot;&gt;Separated link&lt;/a&gt;
&lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;btn-group mb-2 me-4&quot;&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-warning&quot;&gt;Action&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-warning dropdown-toggle dropdown-toggle-split&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;&lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-chevron-down&quot;&gt;&lt;polyline points=&quot;6 9 12 15 18 9&quot;&gt;&lt;/polyline&gt;&lt;/svg&gt;
&lt;span class=&quot;visually-hidden &quot;&gt;Toggle Dropdown&lt;/span&gt;
&lt;/button&gt;
&lt;div class=&quot;dropdown-menu&quot;&gt;
&lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0);&quot;&gt;Action&lt;/a&gt;
&lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0);&quot;&gt;Another action&lt;/a&gt;
&lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0);&quot;&gt;Something else here&lt;/a&gt;
&lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
&lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0);&quot;&gt;Separated link&lt;/a&gt;
&lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;btn-group mb-2 me-4&quot;&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-danger&quot;&gt;Action&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-danger dropdown-toggle dropdown-toggle-split&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;&lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-chevron-down&quot;&gt;&lt;polyline points=&quot;6 9 12 15 18 9&quot;&gt;&lt;/polyline&gt;&lt;/svg&gt;
&lt;span class=&quot;visually-hidden &quot;&gt;Toggle Dropdown&lt;/span&gt;
&lt;/button&gt;
&lt;div class=&quot;dropdown-menu&quot;&gt;
&lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0);&quot;&gt;Action&lt;/a&gt;
&lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0);&quot;&gt;Another action&lt;/a&gt;
&lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0);&quot;&gt;Something else here&lt;/a&gt;
&lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
&lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0);&quot;&gt;Separated link&lt;/a&gt;
&lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;btn-group mb-2 me-4&quot;&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;Action&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-secondary dropdown-toggle dropdown-toggle-split&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;&lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-chevron-down&quot;&gt;&lt;polyline points=&quot;6 9 12 15 18 9&quot;&gt;&lt;/polyline&gt;&lt;/svg&gt;
&lt;span class=&quot;visually-hidden &quot;&gt;Toggle Dropdown&lt;/span&gt;
&lt;/button&gt;
&lt;div class=&quot;dropdown-menu&quot;&gt;
&lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0);&quot;&gt;Action&lt;/a&gt;
&lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0);&quot;&gt;Another action&lt;/a&gt;
&lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0);&quot;&gt;Something else here&lt;/a&gt;
&lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
&lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0);&quot;&gt;Separated link&lt;/a&gt;
&lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;btn-group mb-2 me-4&quot;&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-dark&quot;&gt;Action&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-dark dropdown-toggle dropdown-toggle-split&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;&lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-chevron-down&quot;&gt;&lt;polyline points=&quot;6 9 12 15 18 9&quot;&gt;&lt;/polyline&gt;&lt;/svg&gt;
&lt;span class=&quot;visually-hidden &quot;&gt;Toggle Dropdown&lt;/span&gt;
&lt;/button&gt;
&lt;div class=&quot;dropdown-menu&quot;&gt;
&lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0);&quot;&gt;Action&lt;/a&gt;
&lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0);&quot;&gt;Another action&lt;/a&gt;
&lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0);&quot;&gt;Something else here&lt;/a&gt;
&lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
&lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0);&quot;&gt;Separated link&lt;/a&gt;
&lt;/div&gt;
&lt;/div&gt;
</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="dropdownSplitOutline" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header"> 
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4> Split Outline </h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area text-center split-buttons">

                    <div class="btn-group mb-2 me-4">
                        <button type="button" class="btn btn-outline-primary">Action</button>
                        <button type="button" class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                            <span class="visually-hidden ">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);">Action</a>
                            <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                            <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:void(0);">Separated link</a>
                        </div>
                    </div>

                    <div class="btn-group mb-2 me-4">
                        <button type="button" class="btn btn-outline-info">Action</button>
                        <button type="button" class="btn btn-outline-info dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                            <span class="visually-hidden ">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);">Action</a>
                            <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                            <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:void(0);">Separated link</a>
                        </div>
                    </div>

                    <div class="btn-group mb-2 me-4">
                        <button type="button" class="btn btn-outline-success">Action</button>
                        <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                            <span class="visually-hidden ">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);">Action</a>
                            <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                            <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:void(0);">Separated link</a>
                        </div>
                    </div>

                    <div class="btn-group mb-2 me-4">
                        <button type="button" class="btn btn-outline-warning">Action</button>
                        <button type="button" class="btn btn-outline-warning dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                            <span class="visually-hidden ">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);">Action</a>
                            <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                            <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:void(0);">Separated link</a>
                        </div>
                    </div>

                    <div class="btn-group mb-2 me-4">
                        <button type="button" class="btn btn-outline-danger">Action</button>
                        <button type="button" class="btn btn-outline-danger dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                            <span class="visually-hidden ">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);">Action</a>
                            <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                            <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:void(0);">Separated link</a>
                        </div>
                    </div>

                    <div class="btn-group mb-2 me-4">
                        <button type="button" class="btn btn-outline-secondary">Action</button>
                        <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                            <span class="visually-hidden ">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);">Action</a>
                            <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                            <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:void(0);">Separated link</a>
                        </div>
                    </div>

                    <div class="btn-group mb-2 me-4">
                        <button type="button" class="btn btn-outline-dark">Action</button>
                        <button type="button" class="btn btn-outline-dark dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                            <span class="visually-hidden ">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);">Action</a>
                            <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                            <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:void(0);">Separated link</a>
                        </div>
                    </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;div class=&quot;btn-group mb-2 me-4&quot;&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary&quot;&gt;Action&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary dropdown-toggle dropdown-toggle-split&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;&lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-chevron-down&quot;&gt;&lt;polyline points=&quot;6 9 12 15 18 9&quot;&gt;&lt;/polyline&gt;&lt;/svg&gt;
&lt;span class=&quot;visually-hidden &quot;&gt;Toggle Dropdown&lt;/span&gt;
&lt;/button&gt;
&lt;div class=&quot;dropdown-menu&quot;&gt;
&lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0);&quot;&gt;Action&lt;/a&gt;
&lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0);&quot;&gt;Another action&lt;/a&gt;
&lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0);&quot;&gt;Something else here&lt;/a&gt;
&lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
&lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0);&quot;&gt;Separated link&lt;/a&gt;
&lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;btn-group mb-2 me-4&quot;&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-info&quot;&gt;Action&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-info dropdown-toggle dropdown-toggle-split&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;&lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-chevron-down&quot;&gt;&lt;polyline points=&quot;6 9 12 15 18 9&quot;&gt;&lt;/polyline&gt;&lt;/svg&gt;
&lt;span class=&quot;visually-hidden &quot;&gt;Toggle Dropdown&lt;/span&gt;
&lt;/button&gt;
&lt;div class=&quot;dropdown-menu&quot;&gt;
&lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0);&quot;&gt;Action&lt;/a&gt;
&lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0);&quot;&gt;Another action&lt;/a&gt;
&lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0);&quot;&gt;Something else here&lt;/a&gt;
&lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
&lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0);&quot;&gt;Separated link&lt;/a&gt;
&lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;btn-group mb-2 me-4&quot;&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-success&quot;&gt;Action&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-success dropdown-toggle dropdown-toggle-split&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;&lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-chevron-down&quot;&gt;&lt;polyline points=&quot;6 9 12 15 18 9&quot;&gt;&lt;/polyline&gt;&lt;/svg&gt;
&lt;span class=&quot;visually-hidden &quot;&gt;Toggle Dropdown&lt;/span&gt;
&lt;/button&gt;
&lt;div class=&quot;dropdown-menu&quot;&gt;
&lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0);&quot;&gt;Action&lt;/a&gt;
&lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0);&quot;&gt;Another action&lt;/a&gt;
&lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0);&quot;&gt;Something else here&lt;/a&gt;
&lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
&lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0);&quot;&gt;Separated link&lt;/a&gt;
&lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;btn-group mb-2 me-4&quot;&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-warning&quot;&gt;Action&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-warning dropdown-toggle dropdown-toggle-split&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;&lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-chevron-down&quot;&gt;&lt;polyline points=&quot;6 9 12 15 18 9&quot;&gt;&lt;/polyline&gt;&lt;/svg&gt;
&lt;span class=&quot;visually-hidden &quot;&gt;Toggle Dropdown&lt;/span&gt;
&lt;/button&gt;
&lt;div class=&quot;dropdown-menu&quot;&gt;
&lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0);&quot;&gt;Action&lt;/a&gt;
&lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0);&quot;&gt;Another action&lt;/a&gt;
&lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0);&quot;&gt;Something else here&lt;/a&gt;
&lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
&lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0);&quot;&gt;Separated link&lt;/a&gt;
&lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;btn-group mb-2 me-4&quot;&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-danger&quot;&gt;Action&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-danger dropdown-toggle dropdown-toggle-split&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;&lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-chevron-down&quot;&gt;&lt;polyline points=&quot;6 9 12 15 18 9&quot;&gt;&lt;/polyline&gt;&lt;/svg&gt;
&lt;span class=&quot;visually-hidden &quot;&gt;Toggle Dropdown&lt;/span&gt;
&lt;/button&gt;
&lt;div class=&quot;dropdown-menu&quot;&gt;
&lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0);&quot;&gt;Action&lt;/a&gt;
&lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0);&quot;&gt;Another action&lt;/a&gt;
&lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0);&quot;&gt;Something else here&lt;/a&gt;
&lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
&lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0);&quot;&gt;Separated link&lt;/a&gt;
&lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;btn-group mb-2 me-4&quot;&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary&quot;&gt;Action&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary dropdown-toggle dropdown-toggle-split&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;&lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-chevron-down&quot;&gt;&lt;polyline points=&quot;6 9 12 15 18 9&quot;&gt;&lt;/polyline&gt;&lt;/svg&gt;
&lt;span class=&quot;visually-hidden &quot;&gt;Toggle Dropdown&lt;/span&gt;
&lt;/button&gt;
&lt;div class=&quot;dropdown-menu&quot;&gt;
&lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0);&quot;&gt;Action&lt;/a&gt;
&lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0);&quot;&gt;Another action&lt;/a&gt;
&lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0);&quot;&gt;Something else here&lt;/a&gt;
&lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
&lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0);&quot;&gt;Separated link&lt;/a&gt;
&lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;btn-group mb-2 me-4&quot;&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-dark&quot;&gt;Action&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-dark dropdown-toggle dropdown-toggle-split&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;&lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-chevron-down&quot;&gt;&lt;polyline points=&quot;6 9 12 15 18 9&quot;&gt;&lt;/polyline&gt;&lt;/svg&gt;
&lt;span class=&quot;visually-hidden &quot;&gt;Toggle Dropdown&lt;/span&gt;
&lt;/button&gt;
&lt;div class=&quot;dropdown-menu&quot;&gt;
&lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0);&quot;&gt;Action&lt;/a&gt;
&lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0);&quot;&gt;Another action&lt;/a&gt;
&lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0);&quot;&gt;Something else here&lt;/a&gt;
&lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
&lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0);&quot;&gt;Separated link&lt;/a&gt;
&lt;/div&gt;
&lt;/div&gt;
</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="dropdownDirections" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header"> 
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Dropup </h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area text-center split-buttons">

                    <p class="mb-4">Use <code>.dropup</code> class to open dropdown menu in upward direction.</p>

                    <div class="row">
                        
                        <div class="col-lg-6">
                            <div class="btn-group dropup mb-4 mr-2" role="group">
                                <button id="btnDropUp" type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Up <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-up"><polyline points="18 15 12 9 6 15"></polyline></svg></button>
                                <div class="dropdown-menu" aria-labelledby="btnDropUp">
                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                    <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                    <a href="javascript:void(0);" class="dropdown-item">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                </div>
                            </div>
                            
                        </div>

                        <div class="col-lg-6">
                            <div class="btn-group dropup mb-4 mr-2" role="group">
                                <button id="btnDropUpOutline" type="button" class="btn btn-outline-info dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Up <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-up"><polyline points="18 15 12 9 6 15"></polyline></svg></button>
                                <div class="dropdown-menu" aria-labelledby="btnDropUpOutline">
                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                    <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                    <a href="javascript:void(0);" class="dropdown-item">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                </div>
                            </div>
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
                            <h4>Dropright </h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area text-center split-buttons">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                            <p class="mb-4">Use <code>.dropend</code> class to open dropdown menu in right direction.</p>

                            <div class="row">
                                
                                <div class="col-lg-6">
                                    <div class="btn-group dropend mb-4 mr-2" role="group">
                                        <button id="btnDropRight" type="button" class="btn btn-warning dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Right <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg></button>
                                        <div class="dropdown-menu" aria-labelledby="btnDropRight">
                                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                            <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                            <a href="javascript:void(0);" class="dropdown-item">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="btn-group dropend mb-4 mr-2" role="group">
                                        <button id="btnDropRightOutline" type="button" class="btn btn-outline-warning dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Right <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg></button>
                                        <div class="dropdown-menu" aria-labelledby="btnDropRightOutline">
                                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                            <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                            <a href="javascript:void(0);" class="dropdown-item">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                        </div>
                                    </div>
                                </div>

                            </div>

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
                            <h4>Dropleft </h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area text-center split-buttons">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                            <p class="mb-4">Use <code>.dropstart</code> class to open dropdown menu in left direction.</p>

                            <div class="row">
                                
                                <div class="col-lg-6">
                                    <div class="btn-group dropstart mb-4 mr-2" role="group">
                                        <button id="btnDropLeft" type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg> Left</button>
                                        <div class="dropdown-menu" aria-labelledby="btnDropLeft">
                                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                            <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                            <a href="javascript:void(0);" class="dropdown-item">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="btn-group dropstart mb-4 mr-2" role="group">
                                        <button id="btnDropLeftOutline" type="button" class="btn btn-outline-danger dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg> Left</button>
                                        <div class="dropdown-menu" aria-labelledby="btnDropLeftOutline">
                                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                            <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                            <a href="javascript:void(0);" class="dropdown-item">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="dropdownSizes" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header"> 
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Small Button </h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area text-center split-buttons">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                            <p class="mb-4">Use <code>.btn-sm</code> class to make small button dropdown menu.</p>

                            <div class="row">
                                
                                <div class="col-lg-6">
                                    <div class="btn-group mb-4 mr-2">
                                        <button class="btn btn-dark btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Small button <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                            <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                            <a href="javascript:void(0);" class="dropdown-item">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="btn-group mb-4 mr-2">
                                        <button class="btn btn-outline-dark btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Small button <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                            <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                            <a href="javascript:void(0);" class="dropdown-item">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                        </div>
                                    </div>
                                </div>

                            </div>

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
                            <h4>Large Button </h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area text-center split-buttons">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                            <p class="mb-4">Use <code>.btn-lg</code> class to make large button dropdown menu.</p>

                            <div class="row">
                                
                                <div class="col-lg-6">
                                    <div class="btn-group mb-4 mr-2 btn-group-lg">
                                        <button class="btn btn-success btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Large button <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                            <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                            <a href="javascript:void(0);" class="dropdown-item">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="btn-group mb-4 mr-2 btn-group-lg">
                                        <button class="btn btn-outline-success btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Large button <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                            <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                            <a href="javascript:void(0);" class="dropdown-item">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="dropdownGrouped" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header"> 
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Grouped Dropdown Buttons</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area text-center split-buttons">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                            <p class="mb-4">Use <code>.btn-group</code> class to make group buttons.</p>

                            <div class="row">

                                <div class="col-lg-6">
                                    <div class="btn-group  mb-4 mr-2" role="group" aria-label="Button group with nested dropdown">
                                        <button type="button" class="btn btn-secondary">1</button>
                                        <button type="button" class="btn btn-secondary">2</button>
                                        <div class="btn-group" role="group">
                                            <button id="btnGroupDefault" type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Dropdown <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="btnGroupDefault">
                                                <a class="dropdown-item" href="javascript:void(0);">Dropdown link</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Dropdown link</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="btn-group  mb-4 mr-2" role="group" aria-label="Button group with nested dropdown">
                                        <button type="button" class="btn btn-outline-secondary">1</button>
                                        <button type="button" class="btn btn-outline-secondary">2</button>
                                        <div class="btn-group" role="group">
                                            <button id="btnGroupOutline" type="button" class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Dropdown <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="btnGroupOutline">
                                                <a class="dropdown-item" href="javascript:void(0);">Dropdown link</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Dropdown link</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="code-section-container">
                                
                                <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                                <div class="code-section text-left">
                                    <pre>
&lt;div class="n-chk"&gt;
&lt;label class="new-control new-radio square-radio new-radio-text radio-primary"&gt;
&lt;input type="radio" class="new-control-input" name="custom-radio-6"&gt;
&lt;span class="new-control-indicator"&gt;&lt;/span&gt;&lt;span class="new-radio-content"&gt;Primary&lt;/span&gt;
&lt;/label&gt;
&lt;/div&gt;
</pre>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        

        <div id="dropdownCustom" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Custom Dropdown</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area text-center">
                    <p class="mb-5">Use <code>.custom-dropdown</code> class on <code>div</code> tag of a dropdown .</p>

                    <div class="row">
                                   <div class="col-md-3 col-sm-3 col-3 mb-5">

                                        <div class="dropdown d-inline-block">
                                            <a class="dropdown-toggle" href="#" role="button" id="elementDrodpown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                            </a>

                                            <div class="dropdown-menu right" aria-labelledby="elementDrodpown" style="will-change: transform; position: absolute; transform: translate3d(105px, 0, 0px); top: 0px; left: 0px;">
                                                <a class="dropdown-item" href="javascript:void(0);">View Project</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Edit Project</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Mark as Done</a>
                                            </div>
                                        </div>
                                   </div> 
                                   <div class="col-md-3 col-sm-3 col-3 mb-5">

                                        <div class="dropdown d-inline-block">
                                            <a class="dropdown-toggle" href="#" role="button" id="elementDrodpown1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                            </a>

                                            <div class="dropdown-menu left" aria-labelledby="elementDrodpown1" style="will-change: transform; position: absolute; transform: translate3d(-141px, 19px, 0px); top: 0px; left: 0px;">
                                                <a class="dropdown-item" href="javascript:void(0);">View Project</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Edit Project</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Mark as Done</a>
                                            </div>
                                        </div>
                                   </div>

                                   <div class="col-md-3 col-sm-3 col-3 mb-5">

                                        <div class="dropdown d-inline-block">
                                            <a class="dropdown-toggle" href="#" role="button" id="elementDrodpown2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                            </a>

                                            <div class="dropdown-menu right" aria-labelledby="elementDrodpown2" style="will-change: transform; position: absolute; transform: translate3d(-141px, 19px, 0px); top: 0px; left: 0px;">
                                                <a class="dropdown-item" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> View Project</a>
                                                <a class="dropdown-item" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg> Edit Project</a>
                                                <a class="dropdown-item" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg> Mark as Done</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-sm-3 col-3 mb-5">

                                        <div class="dropdown d-inline-block">
                                            <a class="dropdown-toggle" href="#" role="button" id="elementDrodpown3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                            </a>

                                            <div class="dropdown-menu left" aria-labelledby="elementDrodpown3" style="will-change: transform; position: absolute; transform: translate3d(-141px, 19px, 0px); top: 0px; left: 0px;">
                                                <a class="dropdown-item" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> View Project</a>
                                                <a class="dropdown-item" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg> Edit Project</a>
                                                <a class="dropdown-item" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg> Mark as Done</a>
                                            </div>
                                        </div>
                                    </div>
                                   
                                </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;div class="n-chk"&gt;
&lt;label class="new-control new-radio square-radio new-radio-text radio-primary"&gt;
&lt;input type="radio" class="new-control-input" name="custom-radio-6"&gt;
&lt;span class="new-control-indicator"&gt;&lt;/span&gt;&lt;span class="new-radio-content"&gt;Primary&lt;/span&gt;
&lt;/label&gt;
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