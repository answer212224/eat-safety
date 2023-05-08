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
                <li class="breadcrumb-item"><a href="#">Table</a></li>
                <li class="breadcrumb-item active" aria-current="page">Bootstrap</li>
            </ol>
        </nav>
    </div>
    <!-- /BREADCRUMB -->

    <div id="navSection" data-bs-spy="affix" class="nav sidenav">
        <div class="sidenav-content">
            <a href="#tableSimple" class="active nav-link">Simple</a>
            <a href="#tableCheckbox" class="nav-link">Checkbox</a>
            <a href="#tableHover" class="nav-link">Hover</a>
            <a href="#tableStriped" class="nav-link">Striped</a>
            <a href="#tableMixed" class="nav-link">Mixed</a>
            <a href="#tableWithoutBorder" class="nav-link">Without Border</a>
            <a href="#customTables" class="nav-link">Custom</a>
        </div>
    </div>

    <div class="row layout-top-spacing">

        <div id="tableSimple" class="col-lg-12 col-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Simple Table</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">

                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Date</th>
                                    <th class="text-center" scope="col">Sales</th>
                                    <th class="text-center" scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Shaun Park</td>
                                    <td>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                        <span class="table-inner-text">25 Apr</span>
                                    </td>
                                    <td class="text-center">320</td>
                                    <td class="text-center">
                                        <span class="badge badge-light-success">Approved</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Alma Clarke</td>
                                    <td>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                        <span class="table-inner-text">26 Apr</span>
                                    </td>
                                    <td class="text-center">110</td>
                                    <td class="text-center">
                                        <span class="badge badge-light-secondary">Pending</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Vincent Carpenter</td>
                                    <td>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                        <span class="table-inner-text">05 May</span>
                                    </td>
                                    <td class="text-center">210</td>
                                    <td class="text-center">
                                        <span class="badge badge-light-danger">Rejected</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Xavier</td>
                                    <td>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                        <span class="table-inner-text">18 May</span>
                                    </td>
                                    <td class="text-center">784</td>
                                    <td class="text-center">
                                        <span class="badge badge-light-info">In Progress</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="code-section-container show-code">

                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;div class=&quot;table-responsive&quot;&gt;
&lt;table class=&quot;table table-bordered&quot;&gt;
&lt;thead&gt;
&lt;tr&gt;
&lt;th scope=&quot;col&quot;&gt;Name&lt;/th&gt;
&lt;th scope=&quot;col&quot;&gt;Date&lt;/th&gt;
&lt;th class=&quot;text-center&quot; scope=&quot;col&quot;&gt;Sales&lt;/th&gt;
&lt;th class=&quot;text-center&quot; scope=&quot;col&quot;&gt;Status&lt;/th&gt;
&lt;/tr&gt;
&lt;/thead&gt;
&lt;tbody&gt;
&lt;tr&gt;
&lt;td&gt;Shaun Park&lt;/td&gt;
&lt;td&gt;
    &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-calendar&quot;&gt;&lt;rect x=&quot;3&quot; y=&quot;4&quot; width=&quot;18&quot; height=&quot;18&quot; rx=&quot;2&quot; ry=&quot;2&quot;&gt;&lt;/rect&gt;&lt;line x1=&quot;16&quot; y1=&quot;2&quot; x2=&quot;16&quot; y2=&quot;6&quot;&gt;&lt;/line&gt;&lt;line x1=&quot;8&quot; y1=&quot;2&quot; x2=&quot;8&quot; y2=&quot;6&quot;&gt;&lt;/line&gt;&lt;line x1=&quot;3&quot; y1=&quot;10&quot; x2=&quot;21&quot; y2=&quot;10&quot;&gt;&lt;/line&gt;&lt;/svg&gt;
    &lt;span class=&quot;table-inner-text&quot;&gt;25 Apr&lt;/span&gt;
&lt;/td&gt;
&lt;td class=&quot;text-center&quot;&gt;320&lt;/td&gt;
&lt;td class=&quot;text-center&quot;&gt;
    &lt;span class=&quot;badge badge-light-success&quot;&gt;Approved&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;Alma Clarke&lt;/td&gt;
&lt;td&gt;
    &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-calendar&quot;&gt;&lt;rect x=&quot;3&quot; y=&quot;4&quot; width=&quot;18&quot; height=&quot;18&quot; rx=&quot;2&quot; ry=&quot;2&quot;&gt;&lt;/rect&gt;&lt;line x1=&quot;16&quot; y1=&quot;2&quot; x2=&quot;16&quot; y2=&quot;6&quot;&gt;&lt;/line&gt;&lt;line x1=&quot;8&quot; y1=&quot;2&quot; x2=&quot;8&quot; y2=&quot;6&quot;&gt;&lt;/line&gt;&lt;line x1=&quot;3&quot; y1=&quot;10&quot; x2=&quot;21&quot; y2=&quot;10&quot;&gt;&lt;/line&gt;&lt;/svg&gt;
    &lt;span class=&quot;table-inner-text&quot;&gt;26 Apr&lt;/span&gt;
&lt;/td&gt;
&lt;td class=&quot;text-center&quot;&gt;110&lt;/td&gt;
&lt;td class=&quot;text-center&quot;&gt;
    &lt;span class=&quot;badge badge-light-secondary&quot;&gt;Pending&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;Vincent Carpenter&lt;/td&gt;
&lt;td&gt;
    &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-calendar&quot;&gt;&lt;rect x=&quot;3&quot; y=&quot;4&quot; width=&quot;18&quot; height=&quot;18&quot; rx=&quot;2&quot; ry=&quot;2&quot;&gt;&lt;/rect&gt;&lt;line x1=&quot;16&quot; y1=&quot;2&quot; x2=&quot;16&quot; y2=&quot;6&quot;&gt;&lt;/line&gt;&lt;line x1=&quot;8&quot; y1=&quot;2&quot; x2=&quot;8&quot; y2=&quot;6&quot;&gt;&lt;/line&gt;&lt;line x1=&quot;3&quot; y1=&quot;10&quot; x2=&quot;21&quot; y2=&quot;10&quot;&gt;&lt;/line&gt;&lt;/svg&gt;
    &lt;span class=&quot;table-inner-text&quot;&gt;05 May&lt;/span&gt;
&lt;/td&gt;
&lt;td class=&quot;text-center&quot;&gt;210&lt;/td&gt;
&lt;td class=&quot;text-center&quot;&gt;
    &lt;span class=&quot;badge badge-light-danger&quot;&gt;Rejected&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;Xavier&lt;/td&gt;
&lt;td&gt;
    &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-calendar&quot;&gt;&lt;rect x=&quot;3&quot; y=&quot;4&quot; width=&quot;18&quot; height=&quot;18&quot; rx=&quot;2&quot; ry=&quot;2&quot;&gt;&lt;/rect&gt;&lt;line x1=&quot;16&quot; y1=&quot;2&quot; x2=&quot;16&quot; y2=&quot;6&quot;&gt;&lt;/line&gt;&lt;line x1=&quot;8&quot; y1=&quot;2&quot; x2=&quot;8&quot; y2=&quot;6&quot;&gt;&lt;/line&gt;&lt;line x1=&quot;3&quot; y1=&quot;10&quot; x2=&quot;21&quot; y2=&quot;10&quot;&gt;&lt;/line&gt;&lt;/svg&gt;
    &lt;span class=&quot;table-inner-text&quot;&gt;18 May&lt;/span&gt;
&lt;/td&gt;
&lt;td class=&quot;text-center&quot;&gt;784&lt;/td&gt;
&lt;td class=&quot;text-center&quot;&gt;
    &lt;span class=&quot;badge badge-light-info&quot;&gt;In Progress&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;
&lt;/tbody&gt;
&lt;/table&gt;
&lt;/div&gt;</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="tableCheckbox" class="col-lg-12 col-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Checkbox</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">

                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="checkbox-area" scope="col">
                                        <div class="form-check form-check-primary">
                                            <input class="form-check-input" id="checkbox_parent_all" type="checkbox">
                                        </div>
                                    </th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Date</th>
                                    <th class="text-center" scope="col">Sales</th>
                                    <th class="text-center" scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-primary">
                                            <input class="form-check-input checkbox_child" type="checkbox">
                                        </div>
                                    </td>
                                    <td>Shaun Park</td>
                                    <td>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                        <span class="table-inner-text">25 Apr</span>
                                    </td>
                                    <td class="text-center">320</td>
                                    <td class="text-center">
                                        <span class="badge badge-light-success">Approved</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-primary">
                                            <input class="form-check-input checkbox_child" type="checkbox">
                                        </div>
                                    </td>
                                    <td>Alma Clarke</td>
                                    <td>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                        <span class="table-inner-text">26 Apr</span>
                                    </td>
                                    <td class="text-center">110</td>
                                    <td class="text-center">
                                        <span class="badge badge-light-secondary">Pending</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-primary">
                                            <input class="form-check-input checkbox_child" type="checkbox">
                                        </div>
                                    </td>
                                    <td>Vincent Carpenter</td>
                                    <td>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                        <span class="table-inner-text">05 May</span>
                                    </td>
                                    <td class="text-center">210</td>
                                    <td class="text-center">
                                        <span class="badge badge-light-danger">Rejected</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-primary">
                                            <input class="form-check-input checkbox_child" type="checkbox">
                                        </div>
                                    </td>
                                    <td>Xavier</td>
                                    <td>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                        <span class="table-inner-text">18 May</span>
                                    </td>
                                    <td class="text-center">784</td>
                                    <td class="text-center">
                                        <span class="badge badge-light-info">In Progress</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="code-section-container">

                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;div class=&quot;table-responsive&quot;&gt;
&lt;table class=&quot;table table-bordered&quot;&gt;
&lt;thead&gt;
&lt;tr&gt;
&lt;th class=&quot;checkbox-area&quot; scope=&quot;col&quot;&gt;
    &lt;div class=&quot;form-check form-check-primary&quot;&gt;
        &lt;input class=&quot;form-check-input&quot; id=&quot;checkbox_parent_all&quot; type=&quot;checkbox&quot;&gt;
    &lt;/div&gt;
&lt;/th&gt;
&lt;th scope=&quot;col&quot;&gt;Name&lt;/th&gt;
&lt;th scope=&quot;col&quot;&gt;Date&lt;/th&gt;
&lt;th class=&quot;text-center&quot; scope=&quot;col&quot;&gt;Sales&lt;/th&gt;
&lt;th class=&quot;text-center&quot; scope=&quot;col&quot;&gt;Status&lt;/th&gt;
&lt;/tr&gt;
&lt;/thead&gt;
&lt;tbody&gt;
&lt;tr&gt;
&lt;td&gt;
    &lt;div class=&quot;form-check form-check-primary&quot;&gt;
        &lt;input class=&quot;form-check-input checkbox_child&quot; type=&quot;checkbox&quot;&gt;
    &lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;Shaun Park&lt;/td&gt;
&lt;td&gt;
    &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-calendar&quot;&gt;&lt;rect x=&quot;3&quot; y=&quot;4&quot; width=&quot;18&quot; height=&quot;18&quot; rx=&quot;2&quot; ry=&quot;2&quot;&gt;&lt;/rect&gt;&lt;line x1=&quot;16&quot; y1=&quot;2&quot; x2=&quot;16&quot; y2=&quot;6&quot;&gt;&lt;/line&gt;&lt;line x1=&quot;8&quot; y1=&quot;2&quot; x2=&quot;8&quot; y2=&quot;6&quot;&gt;&lt;/line&gt;&lt;line x1=&quot;3&quot; y1=&quot;10&quot; x2=&quot;21&quot; y2=&quot;10&quot;&gt;&lt;/line&gt;&lt;/svg&gt;
    &lt;span class=&quot;table-inner-text&quot;&gt;25 Apr&lt;/span&gt;
&lt;/td&gt;
&lt;td class=&quot;text-center&quot;&gt;320&lt;/td&gt;
&lt;td class=&quot;text-center&quot;&gt;
    &lt;span class=&quot;badge badge-light-success&quot;&gt;Approved&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;
    &lt;div class=&quot;form-check form-check-primary&quot;&gt;
        &lt;input class=&quot;form-check-input checkbox_child&quot; type=&quot;checkbox&quot;&gt;
    &lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;Alma Clarke&lt;/td&gt;
&lt;td&gt;
    &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-calendar&quot;&gt;&lt;rect x=&quot;3&quot; y=&quot;4&quot; width=&quot;18&quot; height=&quot;18&quot; rx=&quot;2&quot; ry=&quot;2&quot;&gt;&lt;/rect&gt;&lt;line x1=&quot;16&quot; y1=&quot;2&quot; x2=&quot;16&quot; y2=&quot;6&quot;&gt;&lt;/line&gt;&lt;line x1=&quot;8&quot; y1=&quot;2&quot; x2=&quot;8&quot; y2=&quot;6&quot;&gt;&lt;/line&gt;&lt;line x1=&quot;3&quot; y1=&quot;10&quot; x2=&quot;21&quot; y2=&quot;10&quot;&gt;&lt;/line&gt;&lt;/svg&gt;
    &lt;span class=&quot;table-inner-text&quot;&gt;26 Apr&lt;/span&gt;
&lt;/td&gt;
&lt;td class=&quot;text-center&quot;&gt;110&lt;/td&gt;
&lt;td class=&quot;text-center&quot;&gt;
    &lt;span class=&quot;badge badge-light-secondary&quot;&gt;Pending&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;
    &lt;div class=&quot;form-check form-check-primary&quot;&gt;
        &lt;input class=&quot;form-check-input checkbox_child&quot; type=&quot;checkbox&quot;&gt;
    &lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;Vincent Carpenter&lt;/td&gt;
&lt;td&gt;
    &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-calendar&quot;&gt;&lt;rect x=&quot;3&quot; y=&quot;4&quot; width=&quot;18&quot; height=&quot;18&quot; rx=&quot;2&quot; ry=&quot;2&quot;&gt;&lt;/rect&gt;&lt;line x1=&quot;16&quot; y1=&quot;2&quot; x2=&quot;16&quot; y2=&quot;6&quot;&gt;&lt;/line&gt;&lt;line x1=&quot;8&quot; y1=&quot;2&quot; x2=&quot;8&quot; y2=&quot;6&quot;&gt;&lt;/line&gt;&lt;line x1=&quot;3&quot; y1=&quot;10&quot; x2=&quot;21&quot; y2=&quot;10&quot;&gt;&lt;/line&gt;&lt;/svg&gt;
    &lt;span class=&quot;table-inner-text&quot;&gt;05 May&lt;/span&gt;
&lt;/td&gt;
&lt;td class=&quot;text-center&quot;&gt;210&lt;/td&gt;
&lt;td class=&quot;text-center&quot;&gt;
    &lt;span class=&quot;badge badge-light-danger&quot;&gt;Rejected&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;
    &lt;div class=&quot;form-check form-check-primary&quot;&gt;
        &lt;input class=&quot;form-check-input checkbox_child&quot; type=&quot;checkbox&quot;&gt;
    &lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;Xavier&lt;/td&gt;
&lt;td&gt;
    &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-calendar&quot;&gt;&lt;rect x=&quot;3&quot; y=&quot;4&quot; width=&quot;18&quot; height=&quot;18&quot; rx=&quot;2&quot; ry=&quot;2&quot;&gt;&lt;/rect&gt;&lt;line x1=&quot;16&quot; y1=&quot;2&quot; x2=&quot;16&quot; y2=&quot;6&quot;&gt;&lt;/line&gt;&lt;line x1=&quot;8&quot; y1=&quot;2&quot; x2=&quot;8&quot; y2=&quot;6&quot;&gt;&lt;/line&gt;&lt;line x1=&quot;3&quot; y1=&quot;10&quot; x2=&quot;21&quot; y2=&quot;10&quot;&gt;&lt;/line&gt;&lt;/svg&gt;
    &lt;span class=&quot;table-inner-text&quot;&gt;18 May&lt;/span&gt;
&lt;/td&gt;
&lt;td class=&quot;text-center&quot;&gt;784&lt;/td&gt;
&lt;td class=&quot;text-center&quot;&gt;
    &lt;span class=&quot;badge badge-light-info&quot;&gt;In Progress&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;
&lt;/tbody&gt;
&lt;/table&gt;
&lt;/div&gt;</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="tableHover" class="col-lg-12 col-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Hover</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">

                    <div class="table-responsive">
                        <table class="table table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th class="checkbox-area" scope="col">
                                        <div class="form-check form-check-primary">
                                            <input class="form-check-input" id="hover_parent_all" type="checkbox">
                                        </div>
                                    </th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Date</th>
                                    <th class="text-center" scope="col">Sales</th>
                                    <th class="text-center" scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-primary">
                                            <input class="form-check-input hover_child" type="checkbox">
                                        </div>
                                    </td>
                                    <td>Shaun Park</td>
                                    <td>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                        <span class="table-inner-text">25 Apr</span>
                                    </td>
                                    <td class="text-center">320</td>
                                    <td class="text-center">
                                        <span class="badge badge-light-success">Approved</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-primary">
                                            <input class="form-check-input hover_child" type="checkbox">
                                        </div>
                                    </td>
                                    <td>Alma Clarke</td>
                                    <td>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                        <span class="table-inner-text">26 Apr</span>
                                    </td>
                                    <td class="text-center">110</td>
                                    <td class="text-center">
                                        <span class="badge badge-light-secondary">Pending</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-primary">
                                            <input class="form-check-input hover_child" type="checkbox">
                                        </div>
                                    </td>
                                    <td>Vincent Carpenter</td>
                                    <td>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                        <span class="table-inner-text">05 May</span>
                                    </td>
                                    <td class="text-center">210</td>
                                    <td class="text-center">
                                        <span class="badge badge-light-danger">Rejected</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-primary">
                                            <input class="form-check-input hover_child" type="checkbox">
                                        </div>
                                    </td>
                                    <td>Xavier</td>
                                    <td>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                        <span class="table-inner-text">18 May</span>
                                    </td>
                                    <td class="text-center">784</td>
                                    <td class="text-center">
                                        <span class="badge badge-light-info">In Progress</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="code-section-container">

                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;div class=&quot;table-responsive&quot;&gt;
&lt;table class=&quot;table table-hover table-bordered&quot;&gt;
&lt;thead&gt;
&lt;tr&gt;
&lt;th class=&quot;checkbox-area&quot; scope=&quot;col&quot;&gt;
    &lt;div class=&quot;form-check form-check-primary&quot;&gt;
        &lt;input class=&quot;form-check-input&quot; id=&quot;hover_parent_all&quot; type=&quot;checkbox&quot;&gt;
    &lt;/div&gt;
&lt;/th&gt;
&lt;th scope=&quot;col&quot;&gt;Name&lt;/th&gt;
&lt;th scope=&quot;col&quot;&gt;Date&lt;/th&gt;
&lt;th class=&quot;text-center&quot; scope=&quot;col&quot;&gt;Sales&lt;/th&gt;
&lt;th class=&quot;text-center&quot; scope=&quot;col&quot;&gt;Status&lt;/th&gt;
&lt;/tr&gt;
&lt;/thead&gt;
&lt;tbody&gt;
&lt;tr&gt;
&lt;td&gt;
    &lt;div class=&quot;form-check form-check-primary&quot;&gt;
        &lt;input class=&quot;form-check-input hover_child&quot; type=&quot;checkbox&quot;&gt;
    &lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;Shaun Park&lt;/td&gt;
&lt;td&gt;
    &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-calendar&quot;&gt;&lt;rect x=&quot;3&quot; y=&quot;4&quot; width=&quot;18&quot; height=&quot;18&quot; rx=&quot;2&quot; ry=&quot;2&quot;&gt;&lt;/rect&gt;&lt;line x1=&quot;16&quot; y1=&quot;2&quot; x2=&quot;16&quot; y2=&quot;6&quot;&gt;&lt;/line&gt;&lt;line x1=&quot;8&quot; y1=&quot;2&quot; x2=&quot;8&quot; y2=&quot;6&quot;&gt;&lt;/line&gt;&lt;line x1=&quot;3&quot; y1=&quot;10&quot; x2=&quot;21&quot; y2=&quot;10&quot;&gt;&lt;/line&gt;&lt;/svg&gt;
    &lt;span class=&quot;table-inner-text&quot;&gt;25 Apr&lt;/span&gt;
&lt;/td&gt;
&lt;td class=&quot;text-center&quot;&gt;320&lt;/td&gt;
&lt;td class=&quot;text-center&quot;&gt;
    &lt;span class=&quot;badge badge-light-success&quot;&gt;Approved&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;
    &lt;div class=&quot;form-check form-check-primary&quot;&gt;
        &lt;input class=&quot;form-check-input hover_child&quot; type=&quot;checkbox&quot;&gt;
    &lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;Alma Clarke&lt;/td&gt;
&lt;td&gt;
    &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-calendar&quot;&gt;&lt;rect x=&quot;3&quot; y=&quot;4&quot; width=&quot;18&quot; height=&quot;18&quot; rx=&quot;2&quot; ry=&quot;2&quot;&gt;&lt;/rect&gt;&lt;line x1=&quot;16&quot; y1=&quot;2&quot; x2=&quot;16&quot; y2=&quot;6&quot;&gt;&lt;/line&gt;&lt;line x1=&quot;8&quot; y1=&quot;2&quot; x2=&quot;8&quot; y2=&quot;6&quot;&gt;&lt;/line&gt;&lt;line x1=&quot;3&quot; y1=&quot;10&quot; x2=&quot;21&quot; y2=&quot;10&quot;&gt;&lt;/line&gt;&lt;/svg&gt;
    &lt;span class=&quot;table-inner-text&quot;&gt;26 Apr&lt;/span&gt;
&lt;/td&gt;
&lt;td class=&quot;text-center&quot;&gt;110&lt;/td&gt;
&lt;td class=&quot;text-center&quot;&gt;
    &lt;span class=&quot;badge badge-light-secondary&quot;&gt;Pending&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;
    &lt;div class=&quot;form-check form-check-primary&quot;&gt;
        &lt;input class=&quot;form-check-input hover_child&quot; type=&quot;checkbox&quot;&gt;
    &lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;Vincent Carpenter&lt;/td&gt;
&lt;td&gt;
    &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-calendar&quot;&gt;&lt;rect x=&quot;3&quot; y=&quot;4&quot; width=&quot;18&quot; height=&quot;18&quot; rx=&quot;2&quot; ry=&quot;2&quot;&gt;&lt;/rect&gt;&lt;line x1=&quot;16&quot; y1=&quot;2&quot; x2=&quot;16&quot; y2=&quot;6&quot;&gt;&lt;/line&gt;&lt;line x1=&quot;8&quot; y1=&quot;2&quot; x2=&quot;8&quot; y2=&quot;6&quot;&gt;&lt;/line&gt;&lt;line x1=&quot;3&quot; y1=&quot;10&quot; x2=&quot;21&quot; y2=&quot;10&quot;&gt;&lt;/line&gt;&lt;/svg&gt;
    &lt;span class=&quot;table-inner-text&quot;&gt;05 May&lt;/span&gt;
&lt;/td&gt;
&lt;td class=&quot;text-center&quot;&gt;210&lt;/td&gt;
&lt;td class=&quot;text-center&quot;&gt;
    &lt;span class=&quot;badge badge-light-danger&quot;&gt;Rejected&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;
    &lt;div class=&quot;form-check form-check-primary&quot;&gt;
        &lt;input class=&quot;form-check-input hover_child&quot; type=&quot;checkbox&quot;&gt;
    &lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;Xavier&lt;/td&gt;
&lt;td&gt;
    &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-calendar&quot;&gt;&lt;rect x=&quot;3&quot; y=&quot;4&quot; width=&quot;18&quot; height=&quot;18&quot; rx=&quot;2&quot; ry=&quot;2&quot;&gt;&lt;/rect&gt;&lt;line x1=&quot;16&quot; y1=&quot;2&quot; x2=&quot;16&quot; y2=&quot;6&quot;&gt;&lt;/line&gt;&lt;line x1=&quot;8&quot; y1=&quot;2&quot; x2=&quot;8&quot; y2=&quot;6&quot;&gt;&lt;/line&gt;&lt;line x1=&quot;3&quot; y1=&quot;10&quot; x2=&quot;21&quot; y2=&quot;10&quot;&gt;&lt;/line&gt;&lt;/svg&gt;
    &lt;span class=&quot;table-inner-text&quot;&gt;18 May&lt;/span&gt;
&lt;/td&gt;
&lt;td class=&quot;text-center&quot;&gt;784&lt;/td&gt;
&lt;td class=&quot;text-center&quot;&gt;
    &lt;span class=&quot;badge badge-light-info&quot;&gt;In Progress&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;
&lt;/tbody&gt;
&lt;/table&gt;
&lt;/div&gt;</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="tableStriped" class="col-lg-12 col-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Striped</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th class="checkbox-area" scope="col">
                                        <div class="form-check form-check-primary">
                                            <input class="form-check-input" id="striped_parent_all" type="checkbox">
                                        </div>
                                    </th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Date</th>
                                    <th class="text-center" scope="col">Sales</th>
                                    <th class="text-center" scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-primary">
                                            <input class="form-check-input striped_child" type="checkbox">
                                        </div>
                                    </td>
                                    <td>Shaun Park</td>
                                    <td>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                        <span class="table-inner-text">25 Apr</span>
                                    </td>
                                    <td class="text-center">320</td>
                                    <td class="text-center">
                                        <span class="badge badge-light-success">Approved</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-primary">
                                            <input class="form-check-input striped_child" type="checkbox">
                                        </div>
                                    </td>
                                    <td>Alma Clarke</td>
                                    <td>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                        <span class="table-inner-text">26 Apr</span>
                                    </td>
                                    <td class="text-center">110</td>
                                    <td class="text-center">
                                        <span class="badge badge-light-secondary">Pending</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-primary">
                                            <input class="form-check-input striped_child" type="checkbox">
                                        </div>
                                    </td>
                                    <td>Vincent Carpenter</td>
                                    <td>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                        <span class="table-inner-text">05 May</span>
                                    </td>
                                    <td class="text-center">210</td>
                                    <td class="text-center">
                                        <span class="badge badge-light-danger">Rejected</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-primary">
                                            <input class="form-check-input striped_child" type="checkbox">
                                        </div>
                                    </td>
                                    <td>Xavier</td>
                                    <td>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                        <span class="table-inner-text">18 May</span>
                                    </td>
                                    <td class="text-center">784</td>
                                    <td class="text-center">
                                        <span class="badge badge-light-info">In Progress</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="code-section-container">

                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;div class=&quot;table-responsive&quot;&gt;
&lt;table class=&quot;table table-striped table-bordered&quot;&gt;
&lt;thead&gt;
&lt;tr&gt;
&lt;th class=&quot;checkbox-area&quot; scope=&quot;col&quot;&gt;
    &lt;div class=&quot;form-check form-check-primary&quot;&gt;
        &lt;input class=&quot;form-check-input&quot; id=&quot;striped_parent_all&quot; type=&quot;checkbox&quot;&gt;
    &lt;/div&gt;
&lt;/th&gt;
&lt;th scope=&quot;col&quot;&gt;Name&lt;/th&gt;
&lt;th scope=&quot;col&quot;&gt;Date&lt;/th&gt;
&lt;th class=&quot;text-center&quot; scope=&quot;col&quot;&gt;Sales&lt;/th&gt;
&lt;th class=&quot;text-center&quot; scope=&quot;col&quot;&gt;Status&lt;/th&gt;
&lt;/tr&gt;
&lt;/thead&gt;
&lt;tbody&gt;
&lt;tr&gt;
&lt;td&gt;
    &lt;div class=&quot;form-check form-check-primary&quot;&gt;
        &lt;input class=&quot;form-check-input striped_child&quot; type=&quot;checkbox&quot;&gt;
    &lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;Shaun Park&lt;/td&gt;
&lt;td&gt;
    &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-calendar&quot;&gt;&lt;rect x=&quot;3&quot; y=&quot;4&quot; width=&quot;18&quot; height=&quot;18&quot; rx=&quot;2&quot; ry=&quot;2&quot;&gt;&lt;/rect&gt;&lt;line x1=&quot;16&quot; y1=&quot;2&quot; x2=&quot;16&quot; y2=&quot;6&quot;&gt;&lt;/line&gt;&lt;line x1=&quot;8&quot; y1=&quot;2&quot; x2=&quot;8&quot; y2=&quot;6&quot;&gt;&lt;/line&gt;&lt;line x1=&quot;3&quot; y1=&quot;10&quot; x2=&quot;21&quot; y2=&quot;10&quot;&gt;&lt;/line&gt;&lt;/svg&gt;
    &lt;span class=&quot;table-inner-text&quot;&gt;25 Apr&lt;/span&gt;
&lt;/td&gt;
&lt;td class=&quot;text-center&quot;&gt;320&lt;/td&gt;
&lt;td class=&quot;text-center&quot;&gt;
    &lt;span class=&quot;badge badge-light-success&quot;&gt;Approved&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;
    &lt;div class=&quot;form-check form-check-primary&quot;&gt;
        &lt;input class=&quot;form-check-input striped_child&quot; type=&quot;checkbox&quot;&gt;
    &lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;Alma Clarke&lt;/td&gt;
&lt;td&gt;
    &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-calendar&quot;&gt;&lt;rect x=&quot;3&quot; y=&quot;4&quot; width=&quot;18&quot; height=&quot;18&quot; rx=&quot;2&quot; ry=&quot;2&quot;&gt;&lt;/rect&gt;&lt;line x1=&quot;16&quot; y1=&quot;2&quot; x2=&quot;16&quot; y2=&quot;6&quot;&gt;&lt;/line&gt;&lt;line x1=&quot;8&quot; y1=&quot;2&quot; x2=&quot;8&quot; y2=&quot;6&quot;&gt;&lt;/line&gt;&lt;line x1=&quot;3&quot; y1=&quot;10&quot; x2=&quot;21&quot; y2=&quot;10&quot;&gt;&lt;/line&gt;&lt;/svg&gt;
    &lt;span class=&quot;table-inner-text&quot;&gt;26 Apr&lt;/span&gt;
&lt;/td&gt;
&lt;td class=&quot;text-center&quot;&gt;110&lt;/td&gt;
&lt;td class=&quot;text-center&quot;&gt;
    &lt;span class=&quot;badge badge-light-secondary&quot;&gt;Pending&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;
    &lt;div class=&quot;form-check form-check-primary&quot;&gt;
        &lt;input class=&quot;form-check-input striped_child&quot; type=&quot;checkbox&quot;&gt;
    &lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;Vincent Carpenter&lt;/td&gt;
&lt;td&gt;
    &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-calendar&quot;&gt;&lt;rect x=&quot;3&quot; y=&quot;4&quot; width=&quot;18&quot; height=&quot;18&quot; rx=&quot;2&quot; ry=&quot;2&quot;&gt;&lt;/rect&gt;&lt;line x1=&quot;16&quot; y1=&quot;2&quot; x2=&quot;16&quot; y2=&quot;6&quot;&gt;&lt;/line&gt;&lt;line x1=&quot;8&quot; y1=&quot;2&quot; x2=&quot;8&quot; y2=&quot;6&quot;&gt;&lt;/line&gt;&lt;line x1=&quot;3&quot; y1=&quot;10&quot; x2=&quot;21&quot; y2=&quot;10&quot;&gt;&lt;/line&gt;&lt;/svg&gt;
    &lt;span class=&quot;table-inner-text&quot;&gt;05 May&lt;/span&gt;
&lt;/td&gt;
&lt;td class=&quot;text-center&quot;&gt;210&lt;/td&gt;
&lt;td class=&quot;text-center&quot;&gt;
    &lt;span class=&quot;badge badge-light-danger&quot;&gt;Rejected&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;
    &lt;div class=&quot;form-check form-check-primary&quot;&gt;
        &lt;input class=&quot;form-check-input striped_child&quot; type=&quot;checkbox&quot;&gt;
    &lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;Xavier&lt;/td&gt;
&lt;td&gt;
    &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-calendar&quot;&gt;&lt;rect x=&quot;3&quot; y=&quot;4&quot; width=&quot;18&quot; height=&quot;18&quot; rx=&quot;2&quot; ry=&quot;2&quot;&gt;&lt;/rect&gt;&lt;line x1=&quot;16&quot; y1=&quot;2&quot; x2=&quot;16&quot; y2=&quot;6&quot;&gt;&lt;/line&gt;&lt;line x1=&quot;8&quot; y1=&quot;2&quot; x2=&quot;8&quot; y2=&quot;6&quot;&gt;&lt;/line&gt;&lt;line x1=&quot;3&quot; y1=&quot;10&quot; x2=&quot;21&quot; y2=&quot;10&quot;&gt;&lt;/line&gt;&lt;/svg&gt;
    &lt;span class=&quot;table-inner-text&quot;&gt;18 May&lt;/span&gt;
&lt;/td&gt;
&lt;td class=&quot;text-center&quot;&gt;784&lt;/td&gt;
&lt;td class=&quot;text-center&quot;&gt;
    &lt;span class=&quot;badge badge-light-info&quot;&gt;In Progress&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;
&lt;/tbody&gt;
&lt;/table&gt;
&lt;/div&gt;</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <div id="tableMixed" class="col-lg-12 col-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Mixed</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">

                    <p class="mb-4">Mixed Table is made of <code class="text-success">Hover</code>, <code class="text-success">Striped</code> and <code class="text-success">Border</code> combined</p>
                    
                    <div class="table-responsive">
                        <table class="table table-hover table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th class="checkbox-area" scope="col">
                                        <div class="form-check form-check-primary">
                                            <input class="form-check-input" id="mixed_parent_all" type="checkbox">
                                        </div>
                                    </th>
                                    <th class="" scope="col">Name</th>
                                    <th scope="col">Date</th>
                                    <th class="text-center" scope="col">Sales</th>
                                    <th class="text-center" scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-primary">
                                            <input class="form-check-input mixed_child" type="checkbox">
                                        </div>
                                    </td>
                                    <td class="">Shaun Park</td>
                                    <td>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                        <span class="table-inner-text">25 Apr</span>
                                    </td>
                                    <td class="text-center">320</td>
                                    <td class="text-center">
                                        <span class="badge badge-light-success">Approved</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-primary">
                                            <input class="form-check-input mixed_child" type="checkbox">
                                        </div>
                                    </td>
                                    <td class="">Alma Clarke</td>
                                    <td>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                        <span class="table-inner-text">26 Apr</span>
                                    </td>
                                    <td class="text-center">110</td>
                                    <td class="text-center">
                                        <span class="badge badge-light-secondary">Pending</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-primary">
                                            <input class="form-check-input mixed_child" type="checkbox">
                                        </div>
                                    </td>
                                    <td class="">Vincent Carpenter</td>
                                    <td>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                        <span class="table-inner-text">05 May</span>
                                    </td>
                                    <td class="text-center">210</td>
                                    <td class="text-center">
                                        <span class="badge badge-light-danger">Rejected</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-primary">
                                            <input class="form-check-input mixed_child" type="checkbox">
                                        </div>
                                    </td>
                                    <td class="">Xavier</td>
                                    <td>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                        <span class="table-inner-text">18 May</span>
                                    </td>
                                    <td class="text-center">784</td>
                                    <td class="text-center">
                                        <span class="badge badge-light-info">In Progress</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="code-section-container">

                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;div class=&quot;table-responsive&quot;&gt;
&lt;table class=&quot;table table-hover table-striped table-bordered&quot;&gt;
&lt;thead&gt;
&lt;tr&gt;
&lt;th class=&quot;checkbox-area&quot; scope=&quot;col&quot;&gt;
    &lt;div class=&quot;form-check form-check-primary&quot;&gt;
        &lt;input class=&quot;form-check-input&quot; id=&quot;mixed_parent_all&quot; type=&quot;checkbox&quot;&gt;
    &lt;/div&gt;
&lt;/th&gt;
&lt;th class=&quot;&quot; scope=&quot;col&quot;&gt;Name&lt;/th&gt;
&lt;th scope=&quot;col&quot;&gt;Date&lt;/th&gt;
&lt;th class=&quot;text-center&quot; scope=&quot;col&quot;&gt;Sales&lt;/th&gt;
&lt;th class=&quot;text-center&quot; scope=&quot;col&quot;&gt;Status&lt;/th&gt;
&lt;/tr&gt;
&lt;/thead&gt;
&lt;tbody&gt;
&lt;tr&gt;
&lt;td&gt;
    &lt;div class=&quot;form-check form-check-primary&quot;&gt;
        &lt;input class=&quot;form-check-input mixed_child&quot; type=&quot;checkbox&quot;&gt;
    &lt;/div&gt;
&lt;/td&gt;
&lt;td class=&quot;&quot;&gt;Shaun Park&lt;/td&gt;
&lt;td&gt;
    &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-calendar&quot;&gt;&lt;rect x=&quot;3&quot; y=&quot;4&quot; width=&quot;18&quot; height=&quot;18&quot; rx=&quot;2&quot; ry=&quot;2&quot;&gt;&lt;/rect&gt;&lt;line x1=&quot;16&quot; y1=&quot;2&quot; x2=&quot;16&quot; y2=&quot;6&quot;&gt;&lt;/line&gt;&lt;line x1=&quot;8&quot; y1=&quot;2&quot; x2=&quot;8&quot; y2=&quot;6&quot;&gt;&lt;/line&gt;&lt;line x1=&quot;3&quot; y1=&quot;10&quot; x2=&quot;21&quot; y2=&quot;10&quot;&gt;&lt;/line&gt;&lt;/svg&gt;
    &lt;span class=&quot;table-inner-text&quot;&gt;25 Apr&lt;/span&gt;
&lt;/td&gt;
&lt;td class=&quot;text-center&quot;&gt;320&lt;/td&gt;
&lt;td class=&quot;text-center&quot;&gt;
    &lt;span class=&quot;badge badge-light-success&quot;&gt;Approved&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;
    &lt;div class=&quot;form-check form-check-primary&quot;&gt;
        &lt;input class=&quot;form-check-input mixed_child&quot; type=&quot;checkbox&quot;&gt;
    &lt;/div&gt;
&lt;/td&gt;
&lt;td class=&quot;&quot;&gt;Alma Clarke&lt;/td&gt;
&lt;td&gt;
    &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-calendar&quot;&gt;&lt;rect x=&quot;3&quot; y=&quot;4&quot; width=&quot;18&quot; height=&quot;18&quot; rx=&quot;2&quot; ry=&quot;2&quot;&gt;&lt;/rect&gt;&lt;line x1=&quot;16&quot; y1=&quot;2&quot; x2=&quot;16&quot; y2=&quot;6&quot;&gt;&lt;/line&gt;&lt;line x1=&quot;8&quot; y1=&quot;2&quot; x2=&quot;8&quot; y2=&quot;6&quot;&gt;&lt;/line&gt;&lt;line x1=&quot;3&quot; y1=&quot;10&quot; x2=&quot;21&quot; y2=&quot;10&quot;&gt;&lt;/line&gt;&lt;/svg&gt;
    &lt;span class=&quot;table-inner-text&quot;&gt;26 Apr&lt;/span&gt;
&lt;/td&gt;
&lt;td class=&quot;text-center&quot;&gt;110&lt;/td&gt;
&lt;td class=&quot;text-center&quot;&gt;
    &lt;span class=&quot;badge badge-light-secondary&quot;&gt;Pending&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;
    &lt;div class=&quot;form-check form-check-primary&quot;&gt;
        &lt;input class=&quot;form-check-input mixed_child&quot; type=&quot;checkbox&quot;&gt;
    &lt;/div&gt;
&lt;/td&gt;
&lt;td class=&quot;&quot;&gt;Vincent Carpenter&lt;/td&gt;
&lt;td&gt;
    &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-calendar&quot;&gt;&lt;rect x=&quot;3&quot; y=&quot;4&quot; width=&quot;18&quot; height=&quot;18&quot; rx=&quot;2&quot; ry=&quot;2&quot;&gt;&lt;/rect&gt;&lt;line x1=&quot;16&quot; y1=&quot;2&quot; x2=&quot;16&quot; y2=&quot;6&quot;&gt;&lt;/line&gt;&lt;line x1=&quot;8&quot; y1=&quot;2&quot; x2=&quot;8&quot; y2=&quot;6&quot;&gt;&lt;/line&gt;&lt;line x1=&quot;3&quot; y1=&quot;10&quot; x2=&quot;21&quot; y2=&quot;10&quot;&gt;&lt;/line&gt;&lt;/svg&gt;
    &lt;span class=&quot;table-inner-text&quot;&gt;05 May&lt;/span&gt;
&lt;/td&gt;
&lt;td class=&quot;text-center&quot;&gt;210&lt;/td&gt;
&lt;td class=&quot;text-center&quot;&gt;
    &lt;span class=&quot;badge badge-light-danger&quot;&gt;Rejected&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;
    &lt;div class=&quot;form-check form-check-primary&quot;&gt;
        &lt;input class=&quot;form-check-input mixed_child&quot; type=&quot;checkbox&quot;&gt;
    &lt;/div&gt;
&lt;/td&gt;
&lt;td class=&quot;&quot;&gt;Xavier&lt;/td&gt;
&lt;td&gt;
    &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-calendar&quot;&gt;&lt;rect x=&quot;3&quot; y=&quot;4&quot; width=&quot;18&quot; height=&quot;18&quot; rx=&quot;2&quot; ry=&quot;2&quot;&gt;&lt;/rect&gt;&lt;line x1=&quot;16&quot; y1=&quot;2&quot; x2=&quot;16&quot; y2=&quot;6&quot;&gt;&lt;/line&gt;&lt;line x1=&quot;8&quot; y1=&quot;2&quot; x2=&quot;8&quot; y2=&quot;6&quot;&gt;&lt;/line&gt;&lt;line x1=&quot;3&quot; y1=&quot;10&quot; x2=&quot;21&quot; y2=&quot;10&quot;&gt;&lt;/line&gt;&lt;/svg&gt;
    &lt;span class=&quot;table-inner-text&quot;&gt;18 May&lt;/span&gt;
&lt;/td&gt;
&lt;td class=&quot;text-center&quot;&gt;784&lt;/td&gt;
&lt;td class=&quot;text-center&quot;&gt;
    &lt;span class=&quot;badge badge-light-info&quot;&gt;In Progress&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;
&lt;/tbody&gt;
&lt;/table&gt;
&lt;/div&gt;</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="tableWithoutBorder" class="col-lg-12 col-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Without Border</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">

                    <p class="mb-4"> Remove <code class="text-success">.table-bordered</code> class to remove border from the table itself.</p>
                    
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="checkbox-area" scope="col">
                                        <div class="form-check form-check-primary">
                                            <input class="form-check-input" id="noBorder_parent_all" type="checkbox">
                                        </div>
                                    </th>
                                    <th class="" scope="col">Name</th>
                                    <th scope="col">Date</th>
                                    <th class="text-center" scope="col">Sales</th>
                                    <th class="text-center" scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-primary">
                                            <input class="form-check-input noBorder_child" type="checkbox">
                                        </div>
                                    </td>
                                    <td class="">Shaun Park</td>
                                    <td>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                        <span class="table-inner-text">25 Apr</span>
                                    </td>
                                    <td class="text-center">320</td>
                                    <td class="text-center">
                                        <span class="badge badge-light-success">Approved</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-primary">
                                            <input class="form-check-input noBorder_child" type="checkbox">
                                        </div>
                                    </td>
                                    <td class="">Alma Clarke</td>
                                    <td>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                        <span class="table-inner-text">26 Apr</span>
                                    </td>
                                    <td class="text-center">110</td>
                                    <td class="text-center">
                                        <span class="badge badge-light-secondary">Pending</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-primary">
                                            <input class="form-check-input noBorder_child" type="checkbox">
                                        </div>
                                    </td>
                                    <td class="">Vincent Carpenter</td>
                                    <td>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                        <span class="table-inner-text">05 May</span>
                                    </td>
                                    <td class="text-center">210</td>
                                    <td class="text-center">
                                        <span class="badge badge-light-danger">Rejected</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-primary">
                                            <input class="form-check-input noBorder_child" type="checkbox">
                                        </div>
                                    </td>
                                    <td class="">Xavier</td>
                                    <td>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                        <span class="table-inner-text">18 May</span>
                                    </td>
                                    <td class="text-center">784</td>
                                    <td class="text-center">
                                        <span class="badge badge-light-info">In Progress</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="code-section-container">

                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;div class=&quot;table-responsive&quot;&gt;
&lt;table class=&quot;table&quot;&gt;
&lt;thead&gt;
&lt;tr&gt;
&lt;th class=&quot;checkbox-area&quot; scope=&quot;col&quot;&gt;
    &lt;div class=&quot;form-check form-check-primary&quot;&gt;
        &lt;input class=&quot;form-check-input&quot; id=&quot;noBorder_parent_all&quot; type=&quot;checkbox&quot;&gt;
    &lt;/div&gt;
&lt;/th&gt;
&lt;th class=&quot;&quot; scope=&quot;col&quot;&gt;Name&lt;/th&gt;
&lt;th scope=&quot;col&quot;&gt;Date&lt;/th&gt;
&lt;th class=&quot;text-center&quot; scope=&quot;col&quot;&gt;Sales&lt;/th&gt;
&lt;th class=&quot;text-center&quot; scope=&quot;col&quot;&gt;Status&lt;/th&gt;
&lt;/tr&gt;
&lt;/thead&gt;
&lt;tbody&gt;
&lt;tr&gt;
&lt;td&gt;
    &lt;div class=&quot;form-check form-check-primary&quot;&gt;
        &lt;input class=&quot;form-check-input noBorder_child&quot; type=&quot;checkbox&quot;&gt;
    &lt;/div&gt;
&lt;/td&gt;
&lt;td class=&quot;&quot;&gt;Shaun Park&lt;/td&gt;
&lt;td&gt;
    &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-calendar&quot;&gt;&lt;rect x=&quot;3&quot; y=&quot;4&quot; width=&quot;18&quot; height=&quot;18&quot; rx=&quot;2&quot; ry=&quot;2&quot;&gt;&lt;/rect&gt;&lt;line x1=&quot;16&quot; y1=&quot;2&quot; x2=&quot;16&quot; y2=&quot;6&quot;&gt;&lt;/line&gt;&lt;line x1=&quot;8&quot; y1=&quot;2&quot; x2=&quot;8&quot; y2=&quot;6&quot;&gt;&lt;/line&gt;&lt;line x1=&quot;3&quot; y1=&quot;10&quot; x2=&quot;21&quot; y2=&quot;10&quot;&gt;&lt;/line&gt;&lt;/svg&gt;
    &lt;span class=&quot;table-inner-text&quot;&gt;25 Apr&lt;/span&gt;
&lt;/td&gt;
&lt;td class=&quot;text-center&quot;&gt;320&lt;/td&gt;
&lt;td class=&quot;text-center&quot;&gt;
    &lt;span class=&quot;badge badge-light-success&quot;&gt;Approved&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;
    &lt;div class=&quot;form-check form-check-primary&quot;&gt;
        &lt;input class=&quot;form-check-input noBorder_child&quot; type=&quot;checkbox&quot;&gt;
    &lt;/div&gt;
&lt;/td&gt;
&lt;td class=&quot;&quot;&gt;Alma Clarke&lt;/td&gt;
&lt;td&gt;
    &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-calendar&quot;&gt;&lt;rect x=&quot;3&quot; y=&quot;4&quot; width=&quot;18&quot; height=&quot;18&quot; rx=&quot;2&quot; ry=&quot;2&quot;&gt;&lt;/rect&gt;&lt;line x1=&quot;16&quot; y1=&quot;2&quot; x2=&quot;16&quot; y2=&quot;6&quot;&gt;&lt;/line&gt;&lt;line x1=&quot;8&quot; y1=&quot;2&quot; x2=&quot;8&quot; y2=&quot;6&quot;&gt;&lt;/line&gt;&lt;line x1=&quot;3&quot; y1=&quot;10&quot; x2=&quot;21&quot; y2=&quot;10&quot;&gt;&lt;/line&gt;&lt;/svg&gt;
    &lt;span class=&quot;table-inner-text&quot;&gt;26 Apr&lt;/span&gt;
&lt;/td&gt;
&lt;td class=&quot;text-center&quot;&gt;110&lt;/td&gt;
&lt;td class=&quot;text-center&quot;&gt;
    &lt;span class=&quot;badge badge-light-secondary&quot;&gt;Pending&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;
    &lt;div class=&quot;form-check form-check-primary&quot;&gt;
        &lt;input class=&quot;form-check-input noBorder_child&quot; type=&quot;checkbox&quot;&gt;
    &lt;/div&gt;
&lt;/td&gt;
&lt;td class=&quot;&quot;&gt;Vincent Carpenter&lt;/td&gt;
&lt;td&gt;
    &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-calendar&quot;&gt;&lt;rect x=&quot;3&quot; y=&quot;4&quot; width=&quot;18&quot; height=&quot;18&quot; rx=&quot;2&quot; ry=&quot;2&quot;&gt;&lt;/rect&gt;&lt;line x1=&quot;16&quot; y1=&quot;2&quot; x2=&quot;16&quot; y2=&quot;6&quot;&gt;&lt;/line&gt;&lt;line x1=&quot;8&quot; y1=&quot;2&quot; x2=&quot;8&quot; y2=&quot;6&quot;&gt;&lt;/line&gt;&lt;line x1=&quot;3&quot; y1=&quot;10&quot; x2=&quot;21&quot; y2=&quot;10&quot;&gt;&lt;/line&gt;&lt;/svg&gt;
    &lt;span class=&quot;table-inner-text&quot;&gt;05 May&lt;/span&gt;
&lt;/td&gt;
&lt;td class=&quot;text-center&quot;&gt;210&lt;/td&gt;
&lt;td class=&quot;text-center&quot;&gt;
    &lt;span class=&quot;badge badge-light-danger&quot;&gt;Rejected&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;
    &lt;div class=&quot;form-check form-check-primary&quot;&gt;
        &lt;input class=&quot;form-check-input noBorder_child&quot; type=&quot;checkbox&quot;&gt;
    &lt;/div&gt;
&lt;/td&gt;
&lt;td class=&quot;&quot;&gt;Xavier&lt;/td&gt;
&lt;td&gt;
    &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-calendar&quot;&gt;&lt;rect x=&quot;3&quot; y=&quot;4&quot; width=&quot;18&quot; height=&quot;18&quot; rx=&quot;2&quot; ry=&quot;2&quot;&gt;&lt;/rect&gt;&lt;line x1=&quot;16&quot; y1=&quot;2&quot; x2=&quot;16&quot; y2=&quot;6&quot;&gt;&lt;/line&gt;&lt;line x1=&quot;8&quot; y1=&quot;2&quot; x2=&quot;8&quot; y2=&quot;6&quot;&gt;&lt;/line&gt;&lt;line x1=&quot;3&quot; y1=&quot;10&quot; x2=&quot;21&quot; y2=&quot;10&quot;&gt;&lt;/line&gt;&lt;/svg&gt;
    &lt;span class=&quot;table-inner-text&quot;&gt;18 May&lt;/span&gt;
&lt;/td&gt;
&lt;td class=&quot;text-center&quot;&gt;784&lt;/td&gt;
&lt;td class=&quot;text-center&quot;&gt;
    &lt;span class=&quot;badge badge-light-info&quot;&gt;In Progress&lt;/span&gt;
&lt;/td&gt;
&lt;/tr&gt;
&lt;/tbody&gt;
&lt;/table&gt;
&lt;/div&gt;</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="customTables" class="col-lg-12 mt-4">
            <div class="seperator-header">
                <h4 class="">Custom</h4>
            </div>
        </div>

        <div id="tableCustomBasic" class="col-lg-12 col-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Simple</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">

                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Role</th>
                                    <th class="text-center" scope="col">Status</th>
                                    <th class="text-center" scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="media">
                                            <div class="avatar me-2">
                                                <img alt="avatar" src="{{Vite::asset('resources/images/profile-7.jpeg')}}" class="rounded-circle" />
                                            </div>
                                            <div class="media-body align-self-center">
                                                <h6 class="mb-0">Shaun Park</h6>
                                                <span>shaun.park@mail.com</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="mb-0">CEO</p>
                                        <span class="text-success">Management</span>
                                    </td>
                                    <td class="text-center">
                                        <span class="badge badge-light-success">Online</span>
                                    </td>
                                    <td class="text-center">
                                        <div class="action-btns">
                                            <a href="javascript:void(0);" class="action-btn btn-view bs-tooltip me-2" data-toggle="tooltip" data-placement="top" title="View">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                            </a>
                                            <a href="javascript:void(0);" class="action-btn btn-edit bs-tooltip me-2" data-toggle="tooltip" data-placement="top" title="Edit">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                                            </a>
                                            <a href="javascript:void(0);" class="action-btn btn-delete bs-tooltip" data-toggle="tooltip" data-placement="top" title="Delete">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                            </a>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="media">
                                            <div class="avatar me-2">
                                                <img alt="avatar" src="{{Vite::asset('resources/images/profile-11.jpeg')}}" class="rounded-circle" />
                                            </div>
                                            <div class="media-body align-self-center">
                                                <h6 class="mb-0">Alma Clarke</h6>
                                                <span>almaClarke@mail.com</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="mb-0">Lead Developer</p>
                                        <span class="text-secondary">Programmer</span>
                                    </td>
                                    <td class="text-center">
                                        <span class="badge badge-light-secondary">Waiting</span>
                                    </td>
                                    <td class="text-center">
                                        <div class="action-btns">
                                            <a href="javascript:void(0);" class="action-btn btn-view bs-tooltip me-2" data-toggle="tooltip" data-placement="top" title="View">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                            </a>
                                            <a href="javascript:void(0);" class="action-btn btn-edit bs-tooltip me-2" data-toggle="tooltip" data-placement="top" title="Edit">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                                            </a>
                                            <a href="javascript:void(0);" class="action-btn btn-delete bs-tooltip" data-toggle="tooltip" data-placement="top" title="Delete">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                            </a>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="media">
                                            <div class="avatar me-2">
                                                <img alt="avatar" src="{{Vite::asset('resources/images/profile-5.jpeg')}}" class="rounded-circle" />
                                            </div>
                                            <div class="media-body align-self-center">
                                                <h6 class="mb-0">Vincent Carpenter</h6>
                                                <span>vincent@mail.com</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="mb-0">HR</p>
                                        <span class="text-danger">Management</span>
                                    </td>
                                    <td class="text-center">
                                        <span class="badge badge-light-danger">Offline</span>
                                    </td>
                                    <td class="text-center">
                                        <div class="action-btns">
                                            <a href="javascript:void(0);" class="action-btn btn-view bs-tooltip me-2" data-toggle="tooltip" data-placement="top" title="View">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                            </a>
                                            <a href="javascript:void(0);" class="action-btn btn-edit bs-tooltip me-2" data-toggle="tooltip" data-placement="top" title="Edit">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                                            </a>
                                            <a href="javascript:void(0);" class="action-btn btn-delete bs-tooltip" data-toggle="tooltip" data-placement="top" title="Delete">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                            </a>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="media">
                                            <div class="avatar me-2">
                                                <img alt="avatar" src="{{Vite::asset('resources/images/profile-34.jpeg')}}" class="rounded-circle" />
                                            </div>
                                            <div class="media-body align-self-center">
                                                <h6 class="mb-0">Xavier</h6>
                                                <span>xavier@mail.com</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="mb-0">Lead Designer</p>
                                        <span class="text-info">Graphic</span>
                                    </td>
                                    
                                    <td class="text-center">
                                        <span class="badge badge-light-info">On Hold</span>
                                    </td>
                                    <td class="text-center">
                                        <div class="action-btns">
                                            <a href="javascript:void(0);" class="action-btn btn-view bs-tooltip me-2" data-toggle="tooltip" data-placement="top" title="View">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                            </a>
                                            <a href="javascript:void(0);" class="action-btn btn-edit bs-tooltip me-2" data-toggle="tooltip" data-placement="top" title="Edit">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                                            </a>
                                            <a href="javascript:void(0);" class="action-btn btn-delete bs-tooltip" data-toggle="tooltip" data-placement="top" title="Delete">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                            </a>
                                        </div>
                                    </td>
                                </tr>

                               
                            </tbody>
                        </table>
                    </div>

                    <div class="code-section-container">

                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;div class=&quot;table-responsive&quot;&gt;
&lt;table class=&quot;table table-bordered&quot;&gt;
&lt;thead&gt;
&lt;tr&gt;
&lt;th scope=&quot;col&quot;&gt;Name&lt;/th&gt;
&lt;th scope=&quot;col&quot;&gt;Role&lt;/th&gt;
&lt;th class=&quot;text-center&quot; scope=&quot;col&quot;&gt;Status&lt;/th&gt;
&lt;th class=&quot;text-center&quot; scope=&quot;col&quot;&gt;&lt;/th&gt;
&lt;/tr&gt;
&lt;/thead&gt;
&lt;tbody&gt;
&lt;tr&gt;
&lt;td&gt;
    &lt;div class=&quot;media&quot;&gt;
        &lt;div class=&quot;avatar me-2&quot;&gt;
            &lt;img alt=&quot;avatar&quot; src=&quot;../src/assets/img/profile-7.jpeg&quot; class=&quot;rounded-circle&quot; /&gt;
        &lt;/div&gt;
        &lt;div class=&quot;media-body align-self-center&quot;&gt;
            &lt;h6 class=&quot;mb-0&quot;&gt;Shaun Park&lt;/h6&gt;
            &lt;span&gt;shaun.park@mail.com&lt;/span&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
    &lt;p class=&quot;mb-0&quot;&gt;CEO&lt;/p&gt;
    &lt;span class=&quot;text-success&quot;&gt;Management&lt;/span&gt;
&lt;/td&gt;
&lt;td class=&quot;text-center&quot;&gt;
    &lt;span class=&quot;badge badge-light-success&quot;&gt;Online&lt;/span&gt;
&lt;/td&gt;
&lt;td class=&quot;text-center&quot;&gt;
    &lt;div class=&quot;action-btns&quot;&gt;
        &lt;a href=&quot;javascript:void(0);&quot; class=&quot;action-btn btn-view bs-tooltip me-2&quot; data-toggle=&quot;tooltip&quot; data-placement=&quot;top&quot; title=&quot;View&quot;&gt;
            &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-eye&quot;&gt;&lt;path d=&quot;M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z&quot;&gt;&lt;/path&gt;&lt;circle cx=&quot;12&quot; cy=&quot;12&quot; r=&quot;3&quot;&gt;&lt;/circle&gt;&lt;/svg&gt;
        &lt;/a&gt;
        &lt;a href=&quot;javascript:void(0);&quot; class=&quot;action-btn btn-edit bs-tooltip me-2&quot; data-toggle=&quot;tooltip&quot; data-placement=&quot;top&quot; title=&quot;Edit&quot;&gt;
            &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-edit-2&quot;&gt;&lt;path d=&quot;M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z&quot;&gt;&lt;/path&gt;&lt;/svg&gt;
        &lt;/a&gt;
        &lt;a href=&quot;javascript:void(0);&quot; class=&quot;action-btn btn-delete bs-tooltip&quot; data-toggle=&quot;tooltip&quot; data-placement=&quot;top&quot; title=&quot;Delete&quot;&gt;
            &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-trash-2&quot;&gt;&lt;polyline points=&quot;3 6 5 6 21 6&quot;&gt;&lt;/polyline&gt;&lt;path d=&quot;M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2&quot;&gt;&lt;/path&gt;&lt;line x1=&quot;10&quot; y1=&quot;11&quot; x2=&quot;10&quot; y2=&quot;17&quot;&gt;&lt;/line&gt;&lt;line x1=&quot;14&quot; y1=&quot;11&quot; x2=&quot;14&quot; y2=&quot;17&quot;&gt;&lt;/line&gt;&lt;/svg&gt;
        &lt;/a&gt;
    &lt;/div&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
    &lt;div class=&quot;media&quot;&gt;
        &lt;div class=&quot;avatar me-2&quot;&gt;
            &lt;img alt=&quot;avatar&quot; src=&quot;../src/assets/img/profile-11.jpeg&quot; class=&quot;rounded-circle&quot; /&gt;
        &lt;/div&gt;
        &lt;div class=&quot;media-body align-self-center&quot;&gt;
            &lt;h6 class=&quot;mb-0&quot;&gt;Alma Clarke&lt;/h6&gt;
            &lt;span&gt;almaClarke@mail.com&lt;/span&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
    &lt;p class=&quot;mb-0&quot;&gt;Lead Developer&lt;/p&gt;
    &lt;span class=&quot;text-secondary&quot;&gt;Programmer&lt;/span&gt;
&lt;/td&gt;
&lt;td class=&quot;text-center&quot;&gt;
    &lt;span class=&quot;badge badge-light-secondary&quot;&gt;Waiting&lt;/span&gt;
&lt;/td&gt;
&lt;td class=&quot;text-center&quot;&gt;
    &lt;div class=&quot;action-btns&quot;&gt;
        &lt;a href=&quot;javascript:void(0);&quot; class=&quot;action-btn btn-view bs-tooltip me-2&quot; data-toggle=&quot;tooltip&quot; data-placement=&quot;top&quot; title=&quot;View&quot;&gt;
            &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-eye&quot;&gt;&lt;path d=&quot;M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z&quot;&gt;&lt;/path&gt;&lt;circle cx=&quot;12&quot; cy=&quot;12&quot; r=&quot;3&quot;&gt;&lt;/circle&gt;&lt;/svg&gt;
        &lt;/a&gt;
        &lt;a href=&quot;javascript:void(0);&quot; class=&quot;action-btn btn-edit bs-tooltip me-2&quot; data-toggle=&quot;tooltip&quot; data-placement=&quot;top&quot; title=&quot;Edit&quot;&gt;
            &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-edit-2&quot;&gt;&lt;path d=&quot;M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z&quot;&gt;&lt;/path&gt;&lt;/svg&gt;
        &lt;/a&gt;
        &lt;a href=&quot;javascript:void(0);&quot; class=&quot;action-btn btn-delete bs-tooltip&quot; data-toggle=&quot;tooltip&quot; data-placement=&quot;top&quot; title=&quot;Delete&quot;&gt;
            &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-trash-2&quot;&gt;&lt;polyline points=&quot;3 6 5 6 21 6&quot;&gt;&lt;/polyline&gt;&lt;path d=&quot;M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2&quot;&gt;&lt;/path&gt;&lt;line x1=&quot;10&quot; y1=&quot;11&quot; x2=&quot;10&quot; y2=&quot;17&quot;&gt;&lt;/line&gt;&lt;line x1=&quot;14&quot; y1=&quot;11&quot; x2=&quot;14&quot; y2=&quot;17&quot;&gt;&lt;/line&gt;&lt;/svg&gt;
        &lt;/a&gt;
    &lt;/div&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
    &lt;div class=&quot;media&quot;&gt;
        &lt;div class=&quot;avatar me-2&quot;&gt;
            &lt;img alt=&quot;avatar&quot; src=&quot;../src/assets/img/profile-5.jpeg&quot; class=&quot;rounded-circle&quot; /&gt;
        &lt;/div&gt;
        &lt;div class=&quot;media-body align-self-center&quot;&gt;
            &lt;h6 class=&quot;mb-0&quot;&gt;Vincent Carpenter&lt;/h6&gt;
            &lt;span&gt;vincent@mail.com&lt;/span&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
    &lt;p class=&quot;mb-0&quot;&gt;HR&lt;/p&gt;
    &lt;span class=&quot;text-danger&quot;&gt;Management&lt;/span&gt;
&lt;/td&gt;
&lt;td class=&quot;text-center&quot;&gt;
    &lt;span class=&quot;badge badge-light-danger&quot;&gt;Offline&lt;/span&gt;
&lt;/td&gt;
&lt;td class=&quot;text-center&quot;&gt;
    &lt;div class=&quot;action-btns&quot;&gt;
        &lt;a href=&quot;javascript:void(0);&quot; class=&quot;action-btn btn-view bs-tooltip me-2&quot; data-toggle=&quot;tooltip&quot; data-placement=&quot;top&quot; title=&quot;View&quot;&gt;
            &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-eye&quot;&gt;&lt;path d=&quot;M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z&quot;&gt;&lt;/path&gt;&lt;circle cx=&quot;12&quot; cy=&quot;12&quot; r=&quot;3&quot;&gt;&lt;/circle&gt;&lt;/svg&gt;
        &lt;/a&gt;
        &lt;a href=&quot;javascript:void(0);&quot; class=&quot;action-btn btn-edit bs-tooltip me-2&quot; data-toggle=&quot;tooltip&quot; data-placement=&quot;top&quot; title=&quot;Edit&quot;&gt;
            &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-edit-2&quot;&gt;&lt;path d=&quot;M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z&quot;&gt;&lt;/path&gt;&lt;/svg&gt;
        &lt;/a&gt;
        &lt;a href=&quot;javascript:void(0);&quot; class=&quot;action-btn btn-delete bs-tooltip&quot; data-toggle=&quot;tooltip&quot; data-placement=&quot;top&quot; title=&quot;Delete&quot;&gt;
            &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-trash-2&quot;&gt;&lt;polyline points=&quot;3 6 5 6 21 6&quot;&gt;&lt;/polyline&gt;&lt;path d=&quot;M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2&quot;&gt;&lt;/path&gt;&lt;line x1=&quot;10&quot; y1=&quot;11&quot; x2=&quot;10&quot; y2=&quot;17&quot;&gt;&lt;/line&gt;&lt;line x1=&quot;14&quot; y1=&quot;11&quot; x2=&quot;14&quot; y2=&quot;17&quot;&gt;&lt;/line&gt;&lt;/svg&gt;
        &lt;/a&gt;
    &lt;/div&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
    &lt;div class=&quot;media&quot;&gt;
        &lt;div class=&quot;avatar me-2&quot;&gt;
            &lt;img alt=&quot;avatar&quot; src=&quot;../src/assets/img/profile-34.jpeg&quot; class=&quot;rounded-circle&quot; /&gt;
        &lt;/div&gt;
        &lt;div class=&quot;media-body align-self-center&quot;&gt;
            &lt;h6 class=&quot;mb-0&quot;&gt;Xavier&lt;/h6&gt;
            &lt;span&gt;xavier@mail.com&lt;/span&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
    &lt;p class=&quot;mb-0&quot;&gt;Lead Designer&lt;/p&gt;
    &lt;span class=&quot;text-info&quot;&gt;Graphic&lt;/span&gt;
&lt;/td&gt;

&lt;td class=&quot;text-center&quot;&gt;
    &lt;span class=&quot;badge badge-light-info&quot;&gt;On Hold&lt;/span&gt;
&lt;/td&gt;
&lt;td class=&quot;text-center&quot;&gt;
    &lt;div class=&quot;action-btns&quot;&gt;
        &lt;a href=&quot;javascript:void(0);&quot; class=&quot;action-btn btn-view bs-tooltip me-2&quot; data-toggle=&quot;tooltip&quot; data-placement=&quot;top&quot; title=&quot;View&quot;&gt;
            &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-eye&quot;&gt;&lt;path d=&quot;M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z&quot;&gt;&lt;/path&gt;&lt;circle cx=&quot;12&quot; cy=&quot;12&quot; r=&quot;3&quot;&gt;&lt;/circle&gt;&lt;/svg&gt;
        &lt;/a&gt;
        &lt;a href=&quot;javascript:void(0);&quot; class=&quot;action-btn btn-edit bs-tooltip me-2&quot; data-toggle=&quot;tooltip&quot; data-placement=&quot;top&quot; title=&quot;Edit&quot;&gt;
            &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-edit-2&quot;&gt;&lt;path d=&quot;M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z&quot;&gt;&lt;/path&gt;&lt;/svg&gt;
        &lt;/a&gt;
        &lt;a href=&quot;javascript:void(0);&quot; class=&quot;action-btn btn-delete bs-tooltip&quot; data-toggle=&quot;tooltip&quot; data-placement=&quot;top&quot; title=&quot;Delete&quot;&gt;
            &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-trash-2&quot;&gt;&lt;polyline points=&quot;3 6 5 6 21 6&quot;&gt;&lt;/polyline&gt;&lt;path d=&quot;M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2&quot;&gt;&lt;/path&gt;&lt;line x1=&quot;10&quot; y1=&quot;11&quot; x2=&quot;10&quot; y2=&quot;17&quot;&gt;&lt;/line&gt;&lt;line x1=&quot;14&quot; y1=&quot;11&quot; x2=&quot;14&quot; y2=&quot;17&quot;&gt;&lt;/line&gt;&lt;/svg&gt;
        &lt;/a&gt;
    &lt;/div&gt;
&lt;/td&gt;
&lt;/tr&gt;


&lt;/tbody&gt;
&lt;/table&gt;
&lt;/div&gt;</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="tableCustomMixed" class="col-lg-12 col-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Mixed</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">

                    <p class="mb-4">Mixed Table is made of <code class="text-success">Hover</code>, <code class="text-success">Striped</code> and <code class="text-success">Border</code> combined</p>

                    <div class="table-responsive">
                        <table class="table table-hover table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th class="checkbox-area" scope="col">
                                        <div class="form-check form-check-primary">
                                            <input class="form-check-input" id="custom_mixed_parent_all" type="checkbox">
                                        </div>
                                    </th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Role</th>
                                    <th class="text-center" scope="col">Status</th>
                                    <th class="text-center" scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-primary">
                                            <input class="form-check-input custom_mixed_child" type="checkbox">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="media">
                                            <div class="avatar me-2">
                                                <img alt="avatar" src="{{Vite::asset('resources/images/profile-7.jpeg')}}" class="rounded-circle" />
                                            </div>
                                            <div class="media-body align-self-center">
                                                <h6 class="mb-0">Shaun Park</h6>
                                                <span>shaun.park@mail.com</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="mb-0">CEO</p>
                                        <span class="text-success">Management</span>
                                    </td>
                                    <td class="text-center">
                                        <span class="badge badge-light-success">Online</span>
                                    </td>
                                    <td class="text-center">
                                        <div class="action-btns">
                                            <a href="javascript:void(0);" class="action-btn btn-view bs-tooltip me-2" data-toggle="tooltip" data-placement="top" title="View">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                            </a>
                                            <a href="javascript:void(0);" class="action-btn btn-edit bs-tooltip me-2" data-toggle="tooltip" data-placement="top" title="Edit">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                                            </a>
                                            <a href="javascript:void(0);" class="action-btn btn-delete bs-tooltip" data-toggle="tooltip" data-placement="top" title="Delete">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                            </a>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="form-check form-check-primary">
                                            <input class="form-check-input custom_mixed_child" type="checkbox">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="media">
                                            <div class="avatar me-2">
                                                <img alt="avatar" src="{{Vite::asset('resources/images/profile-11.jpeg')}}" class="rounded-circle" />
                                            </div>
                                            <div class="media-body align-self-center">
                                                <h6 class="mb-0">Alma Clarke</h6>
                                                <span>almaClarke@mail.com</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="mb-0">Lead Developer</p>
                                        <span class="text-secondary">Programmer</span>
                                    </td>
                                    <td class="text-center">
                                        <span class="badge badge-light-secondary">Waiting</span>
                                    </td>
                                    <td class="text-center">
                                        <div class="action-btns">
                                            <a href="javascript:void(0);" class="action-btn btn-view bs-tooltip me-2" data-toggle="tooltip" data-placement="top" title="View">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                            </a>
                                            <a href="javascript:void(0);" class="action-btn btn-edit bs-tooltip me-2" data-toggle="tooltip" data-placement="top" title="Edit">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                                            </a>
                                            <a href="javascript:void(0);" class="action-btn btn-delete bs-tooltip" data-toggle="tooltip" data-placement="top" title="Delete">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                            </a>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="form-check form-check-primary">
                                            <input class="form-check-input custom_mixed_child" type="checkbox">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="media">
                                            <div class="avatar me-2">
                                                <img alt="avatar" src="{{Vite::asset('resources/images/profile-5.jpeg')}}" class="rounded-circle" />
                                            </div>
                                            <div class="media-body align-self-center">
                                                <h6 class="mb-0">Vincent Carpenter</h6>
                                                <span>vincent@mail.com</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="mb-0">HR</p>
                                        <span class="text-danger">Management</span>
                                    </td>
                                    <td class="text-center">
                                        <span class="badge badge-light-danger">Offline</span>
                                    </td>
                                    <td class="text-center">
                                        <div class="action-btns">
                                            <a href="javascript:void(0);" class="action-btn btn-view bs-tooltip me-2" data-toggle="tooltip" data-placement="top" title="View">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                            </a>
                                            <a href="javascript:void(0);" class="action-btn btn-edit bs-tooltip me-2" data-toggle="tooltip" data-placement="top" title="Edit">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                                            </a>
                                            <a href="javascript:void(0);" class="action-btn btn-delete bs-tooltip" data-toggle="tooltip" data-placement="top" title="Delete">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                            </a>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="form-check form-check-primary">
                                            <input class="form-check-input custom_mixed_child" type="checkbox">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="media">
                                            <div class="avatar me-2">
                                                <img alt="avatar" src="{{Vite::asset('resources/images/profile-34.jpeg')}}" class="rounded-circle" />
                                            </div>
                                            <div class="media-body align-self-center">
                                                <h6 class="mb-0">Xavier</h6>
                                                <span>xavier@mail.com</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="mb-0">Lead Designer</p>
                                        <span class="text-info">Graphic</span>
                                    </td>
                                    
                                    <td class="text-center">
                                        <span class="badge badge-light-info">On Hold</span>
                                    </td>
                                    <td class="text-center">
                                        <div class="action-btns">
                                            <a href="javascript:void(0);" class="action-btn btn-view bs-tooltip me-2" data-toggle="tooltip" data-placement="top" title="View">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                            </a>
                                            <a href="javascript:void(0);" class="action-btn btn-edit bs-tooltip me-2" data-toggle="tooltip" data-placement="top" title="Edit">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                                            </a>
                                            <a href="javascript:void(0);" class="action-btn btn-delete bs-tooltip" data-toggle="tooltip" data-placement="top" title="Delete">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                            </a>
                                        </div>
                                    </td>
                                </tr>

                               
                            </tbody>
                        </table>
                    </div>

                    <div class="code-section-container">

                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;div class=&quot;table-responsive&quot;&gt;
&lt;table class=&quot;table table-hover table-striped table-bordered&quot;&gt;
&lt;thead&gt;
&lt;tr&gt;
&lt;th class=&quot;checkbox-area&quot; scope=&quot;col&quot;&gt;
    &lt;div class=&quot;form-check form-check-primary&quot;&gt;
        &lt;input class=&quot;form-check-input&quot; id=&quot;custom_mixed_parent_all&quot; type=&quot;checkbox&quot;&gt;
    &lt;/div&gt;
&lt;/th&gt;
&lt;th scope=&quot;col&quot;&gt;Name&lt;/th&gt;
&lt;th scope=&quot;col&quot;&gt;Role&lt;/th&gt;
&lt;th class=&quot;text-center&quot; scope=&quot;col&quot;&gt;Status&lt;/th&gt;
&lt;th class=&quot;text-center&quot; scope=&quot;col&quot;&gt;&lt;/th&gt;
&lt;/tr&gt;
&lt;/thead&gt;
&lt;tbody&gt;
&lt;tr&gt;
&lt;td&gt;
    &lt;div class=&quot;form-check form-check-primary&quot;&gt;
        &lt;input class=&quot;form-check-input custom_mixed_child&quot; type=&quot;checkbox&quot;&gt;
    &lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
    &lt;div class=&quot;media&quot;&gt;
        &lt;div class=&quot;avatar me-2&quot;&gt;
            &lt;img alt=&quot;avatar&quot; src=&quot;../src/assets/img/profile-7.jpeg&quot; class=&quot;rounded-circle&quot; /&gt;
        &lt;/div&gt;
        &lt;div class=&quot;media-body align-self-center&quot;&gt;
            &lt;h6 class=&quot;mb-0&quot;&gt;Shaun Park&lt;/h6&gt;
            &lt;span&gt;shaun.park@mail.com&lt;/span&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
    &lt;p class=&quot;mb-0&quot;&gt;CEO&lt;/p&gt;
    &lt;span class=&quot;text-success&quot;&gt;Management&lt;/span&gt;
&lt;/td&gt;
&lt;td class=&quot;text-center&quot;&gt;
    &lt;span class=&quot;badge badge-light-success&quot;&gt;Online&lt;/span&gt;
&lt;/td&gt;
&lt;td class=&quot;text-center&quot;&gt;
    &lt;div class=&quot;action-btns&quot;&gt;
        &lt;a href=&quot;javascript:void(0);&quot; class=&quot;action-btn btn-view bs-tooltip me-2&quot; data-toggle=&quot;tooltip&quot; data-placement=&quot;top&quot; title=&quot;View&quot;&gt;
            &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-eye&quot;&gt;&lt;path d=&quot;M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z&quot;&gt;&lt;/path&gt;&lt;circle cx=&quot;12&quot; cy=&quot;12&quot; r=&quot;3&quot;&gt;&lt;/circle&gt;&lt;/svg&gt;
        &lt;/a&gt;
        &lt;a href=&quot;javascript:void(0);&quot; class=&quot;action-btn btn-edit bs-tooltip me-2&quot; data-toggle=&quot;tooltip&quot; data-placement=&quot;top&quot; title=&quot;Edit&quot;&gt;
            &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-edit-2&quot;&gt;&lt;path d=&quot;M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z&quot;&gt;&lt;/path&gt;&lt;/svg&gt;
        &lt;/a&gt;
        &lt;a href=&quot;javascript:void(0);&quot; class=&quot;action-btn btn-delete bs-tooltip&quot; data-toggle=&quot;tooltip&quot; data-placement=&quot;top&quot; title=&quot;Delete&quot;&gt;
            &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-trash-2&quot;&gt;&lt;polyline points=&quot;3 6 5 6 21 6&quot;&gt;&lt;/polyline&gt;&lt;path d=&quot;M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2&quot;&gt;&lt;/path&gt;&lt;line x1=&quot;10&quot; y1=&quot;11&quot; x2=&quot;10&quot; y2=&quot;17&quot;&gt;&lt;/line&gt;&lt;line x1=&quot;14&quot; y1=&quot;11&quot; x2=&quot;14&quot; y2=&quot;17&quot;&gt;&lt;/line&gt;&lt;/svg&gt;
        &lt;/a&gt;
    &lt;/div&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
    &lt;div class=&quot;form-check form-check-primary&quot;&gt;
        &lt;input class=&quot;form-check-input custom_mixed_child&quot; type=&quot;checkbox&quot;&gt;
    &lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
    &lt;div class=&quot;media&quot;&gt;
        &lt;div class=&quot;avatar me-2&quot;&gt;
            &lt;img alt=&quot;avatar&quot; src=&quot;../src/assets/img/profile-11.jpeg&quot; class=&quot;rounded-circle&quot; /&gt;
        &lt;/div&gt;
        &lt;div class=&quot;media-body align-self-center&quot;&gt;
            &lt;h6 class=&quot;mb-0&quot;&gt;Alma Clarke&lt;/h6&gt;
            &lt;span&gt;almaClarke@mail.com&lt;/span&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
    &lt;p class=&quot;mb-0&quot;&gt;Lead Developer&lt;/p&gt;
    &lt;span class=&quot;text-secondary&quot;&gt;Programmer&lt;/span&gt;
&lt;/td&gt;
&lt;td class=&quot;text-center&quot;&gt;
    &lt;span class=&quot;badge badge-light-secondary&quot;&gt;Waiting&lt;/span&gt;
&lt;/td&gt;
&lt;td class=&quot;text-center&quot;&gt;
    &lt;div class=&quot;action-btns&quot;&gt;
        &lt;a href=&quot;javascript:void(0);&quot; class=&quot;action-btn btn-view bs-tooltip me-2&quot; data-toggle=&quot;tooltip&quot; data-placement=&quot;top&quot; title=&quot;View&quot;&gt;
            &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-eye&quot;&gt;&lt;path d=&quot;M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z&quot;&gt;&lt;/path&gt;&lt;circle cx=&quot;12&quot; cy=&quot;12&quot; r=&quot;3&quot;&gt;&lt;/circle&gt;&lt;/svg&gt;
        &lt;/a&gt;
        &lt;a href=&quot;javascript:void(0);&quot; class=&quot;action-btn btn-edit bs-tooltip me-2&quot; data-toggle=&quot;tooltip&quot; data-placement=&quot;top&quot; title=&quot;Edit&quot;&gt;
            &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-edit-2&quot;&gt;&lt;path d=&quot;M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z&quot;&gt;&lt;/path&gt;&lt;/svg&gt;
        &lt;/a&gt;
        &lt;a href=&quot;javascript:void(0);&quot; class=&quot;action-btn btn-delete bs-tooltip&quot; data-toggle=&quot;tooltip&quot; data-placement=&quot;top&quot; title=&quot;Delete&quot;&gt;
            &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-trash-2&quot;&gt;&lt;polyline points=&quot;3 6 5 6 21 6&quot;&gt;&lt;/polyline&gt;&lt;path d=&quot;M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2&quot;&gt;&lt;/path&gt;&lt;line x1=&quot;10&quot; y1=&quot;11&quot; x2=&quot;10&quot; y2=&quot;17&quot;&gt;&lt;/line&gt;&lt;line x1=&quot;14&quot; y1=&quot;11&quot; x2=&quot;14&quot; y2=&quot;17&quot;&gt;&lt;/line&gt;&lt;/svg&gt;
        &lt;/a&gt;
    &lt;/div&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
    &lt;div class=&quot;form-check form-check-primary&quot;&gt;
        &lt;input class=&quot;form-check-input custom_mixed_child&quot; type=&quot;checkbox&quot;&gt;
    &lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
    &lt;div class=&quot;media&quot;&gt;
        &lt;div class=&quot;avatar me-2&quot;&gt;
            &lt;img alt=&quot;avatar&quot; src=&quot;../src/assets/img/profile-5.jpeg&quot; class=&quot;rounded-circle&quot; /&gt;
        &lt;/div&gt;
        &lt;div class=&quot;media-body align-self-center&quot;&gt;
            &lt;h6 class=&quot;mb-0&quot;&gt;Vincent Carpenter&lt;/h6&gt;
            &lt;span&gt;vincent@mail.com&lt;/span&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
    &lt;p class=&quot;mb-0&quot;&gt;HR&lt;/p&gt;
    &lt;span class=&quot;text-danger&quot;&gt;Management&lt;/span&gt;
&lt;/td&gt;
&lt;td class=&quot;text-center&quot;&gt;
    &lt;span class=&quot;badge badge-light-danger&quot;&gt;Offline&lt;/span&gt;
&lt;/td&gt;
&lt;td class=&quot;text-center&quot;&gt;
    &lt;div class=&quot;action-btns&quot;&gt;
        &lt;a href=&quot;javascript:void(0);&quot; class=&quot;action-btn btn-view bs-tooltip me-2&quot; data-toggle=&quot;tooltip&quot; data-placement=&quot;top&quot; title=&quot;View&quot;&gt;
            &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-eye&quot;&gt;&lt;path d=&quot;M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z&quot;&gt;&lt;/path&gt;&lt;circle cx=&quot;12&quot; cy=&quot;12&quot; r=&quot;3&quot;&gt;&lt;/circle&gt;&lt;/svg&gt;
        &lt;/a&gt;
        &lt;a href=&quot;javascript:void(0);&quot; class=&quot;action-btn btn-edit bs-tooltip me-2&quot; data-toggle=&quot;tooltip&quot; data-placement=&quot;top&quot; title=&quot;Edit&quot;&gt;
            &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-edit-2&quot;&gt;&lt;path d=&quot;M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z&quot;&gt;&lt;/path&gt;&lt;/svg&gt;
        &lt;/a&gt;
        &lt;a href=&quot;javascript:void(0);&quot; class=&quot;action-btn btn-delete bs-tooltip&quot; data-toggle=&quot;tooltip&quot; data-placement=&quot;top&quot; title=&quot;Delete&quot;&gt;
            &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-trash-2&quot;&gt;&lt;polyline points=&quot;3 6 5 6 21 6&quot;&gt;&lt;/polyline&gt;&lt;path d=&quot;M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2&quot;&gt;&lt;/path&gt;&lt;line x1=&quot;10&quot; y1=&quot;11&quot; x2=&quot;10&quot; y2=&quot;17&quot;&gt;&lt;/line&gt;&lt;line x1=&quot;14&quot; y1=&quot;11&quot; x2=&quot;14&quot; y2=&quot;17&quot;&gt;&lt;/line&gt;&lt;/svg&gt;
        &lt;/a&gt;
    &lt;/div&gt;
&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;
    &lt;div class=&quot;form-check form-check-primary&quot;&gt;
        &lt;input class=&quot;form-check-input custom_mixed_child&quot; type=&quot;checkbox&quot;&gt;
    &lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
    &lt;div class=&quot;media&quot;&gt;
        &lt;div class=&quot;avatar me-2&quot;&gt;
            &lt;img alt=&quot;avatar&quot; src=&quot;../src/assets/img/profile-34.jpeg&quot; class=&quot;rounded-circle&quot; /&gt;
        &lt;/div&gt;
        &lt;div class=&quot;media-body align-self-center&quot;&gt;
            &lt;h6 class=&quot;mb-0&quot;&gt;Xavier&lt;/h6&gt;
            &lt;span&gt;xavier@mail.com&lt;/span&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;
    &lt;p class=&quot;mb-0&quot;&gt;Lead Designer&lt;/p&gt;
    &lt;span class=&quot;text-info&quot;&gt;Graphic&lt;/span&gt;
&lt;/td&gt;

&lt;td class=&quot;text-center&quot;&gt;
    &lt;span class=&quot;badge badge-light-info&quot;&gt;On Hold&lt;/span&gt;
&lt;/td&gt;
&lt;td class=&quot;text-center&quot;&gt;
    &lt;div class=&quot;action-btns&quot;&gt;
        &lt;a href=&quot;javascript:void(0);&quot; class=&quot;action-btn btn-view bs-tooltip me-2&quot; data-toggle=&quot;tooltip&quot; data-placement=&quot;top&quot; title=&quot;View&quot;&gt;
            &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-eye&quot;&gt;&lt;path d=&quot;M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z&quot;&gt;&lt;/path&gt;&lt;circle cx=&quot;12&quot; cy=&quot;12&quot; r=&quot;3&quot;&gt;&lt;/circle&gt;&lt;/svg&gt;
        &lt;/a&gt;
        &lt;a href=&quot;javascript:void(0);&quot; class=&quot;action-btn btn-edit bs-tooltip me-2&quot; data-toggle=&quot;tooltip&quot; data-placement=&quot;top&quot; title=&quot;Edit&quot;&gt;
            &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-edit-2&quot;&gt;&lt;path d=&quot;M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z&quot;&gt;&lt;/path&gt;&lt;/svg&gt;
        &lt;/a&gt;
        &lt;a href=&quot;javascript:void(0);&quot; class=&quot;action-btn btn-delete bs-tooltip&quot; data-toggle=&quot;tooltip&quot; data-placement=&quot;top&quot; title=&quot;Delete&quot;&gt;
            &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-trash-2&quot;&gt;&lt;polyline points=&quot;3 6 5 6 21 6&quot;&gt;&lt;/polyline&gt;&lt;path d=&quot;M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2&quot;&gt;&lt;/path&gt;&lt;line x1=&quot;10&quot; y1=&quot;11&quot; x2=&quot;10&quot; y2=&quot;17&quot;&gt;&lt;/line&gt;&lt;line x1=&quot;14&quot; y1=&quot;11&quot; x2=&quot;14&quot; y2=&quot;17&quot;&gt;&lt;/line&gt;&lt;/svg&gt;
        &lt;/a&gt;
    &lt;/div&gt;
&lt;/td&gt;
&lt;/tr&gt;


&lt;/tbody&gt;
&lt;/table&gt;
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