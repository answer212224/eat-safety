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
                <li class="breadcrumb-item"><a href="#">Form</a></li>
                <li class="breadcrumb-item active" aria-current="page">Maxlength</li>
            </ol>
        </nav>
    </div>
    <!-- /BREADCRUMB -->

    <div id="navSection" data-bs-spy="affix" class="nav  sidenav">
        <div class="sidenav-content">
            <a href="#basic" class="active nav-link">Basic</a>
            <a href="#positions" class="nav-link">Positions</a>
        </div>
    </div>
    
    <div class="row layout-top-spacing">
    
        <div id="basic" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Default usage</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <p>Use <code>maxlength();</code> to enable maxlength.</p>
                    <input type="text" class="form-control basic" maxlength="25" name="defaultconfig" id="defaultconfig">

                    <div class="code-section-container show-code">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
$('selector').maxlength();
</pre>
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
                            <h4>Change the threshold value</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <p>Use <code>threshold</code> option to show up when there are 20 chars or less</p>
                    <input type="text" class="form-control threshold" maxlength="25" name="moreoptions" id="moreoptions" />

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>
                        <div class="code-section text-left">
                            <pre>
$('input.threshold').maxlength({
threshold: 20,
});
</pre>
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
                            <h4>Few options</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <p>Use <code>warningClass</code> option to change default badge color and <code>limitReachedClass</code> option to change the badge after limit reached.</p>
                    <input type="text" class="form-control few-options" maxlength="25" name="alloptions" id="alloptions1" />

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
$('input.few-options').maxlength({
warningClass: "badge badge-success",
limitReachedClass: "badge badge-warning"
});
</pre>
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
                            <h4>All the options</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <p>Use <code>preText</code> option to prepend text, <code>postText</code> option to postpend text and <code>separator</code> option to add a seperator in between max and min length .</p>
                    <input type="text" class="form-control alloptions" maxlength="25" name="alloptions" id="alloptions2" />

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
$('input.alloptions').maxlength({
separator: ' of ',
preText: 'You have ',
postText: ' chars remaining.'
});
</pre>
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
                            <h4>What about textareas?</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <textarea id="textarea" class="form-control textarea" maxlength="225" rows="2" placeholder="This textarea has a limit of 225 chars."></textarea>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
$('textarea.textarea').maxlength({
alwaysShow: true,
});
</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <div class="row">

        <div id="positions" class="col-lg-12">
            <div class="seperator-header">
                <h4 class="">Positions</h4>
            </div>
        </div>

        <div class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Top Left</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <p>Use <code>placement: top-left</code> to align badge at the top left corner.</p>
                    <input type="text" class="form-control placement-top-left" maxlength="25" name="placement" id="placement1" />

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
$(selector).maxlength({
placement:"top-left"
});
</pre>
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
                            <h4>Top</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <p>Use <code>placement: top</code> to align badge at the top.</p>
                    <input type="text" class="form-control placement-top" maxlength="25" name="placement" id="placement2" />

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
$(selector).maxlength({
placement:"top"
});
</pre>
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
                            <h4>Top Right</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <p>Use <code>placement: top-right</code> to align badge at the top right corner.</p>
                    <input type="text" class="form-control placement-top-right" maxlength="25" name="placement" id="placement3" />

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
$(selector).maxlength({
placement:"top-right"
});
</pre>
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
                            <h4>Vertically Center Left</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <p>Use <code>placement: left</code> to align badge at the left corner.</p>
                    <input type="text" class="form-control placement-left" maxlength="25" name="placement" id="placement4" />

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
$(selector).maxlength({
placement:"left"
});
</pre>
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
                            <h4>Vertically Center Right</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <p>Use <code>placement: right</code> to align badge at the right corner.</p>
                    <input type="text" class="form-control placement-right" maxlength="25" name="placement" id="placement5" />

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
$(selector).maxlength({
placement:"right"
});
</pre>
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
                            <h4>Bottom Left</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <p>Use <code>placement: bottom-left</code> to align badge at the bottom left corner.</p>
                    <input type="text" class="form-control placement-bottom-left" maxlength="25" name="placement" id="placement6" />

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>

$(selector).maxlength({
placement:"bottom-left"
});
</pre>
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
                            <h4>Bottom Right</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <p>Use <code>placement: bottom-right</code> to align badge at the bottom right corner.</p>
                    <input type="text" class="form-control placement-bottom-right" maxlength="25" name="placement" id="placement7" />

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
$(selector').maxlength({
placement:"bottom-right",
});
</pre>
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
                            <h4>Bottom</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <p>Use <code>placement: bottom</code> to align badge at the bottom corner.</p>
                    <input type="text" class="form-control placement-bottom" maxlength="25" name="placement" id="placement8" />

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
$(selector).maxlength({
placement:"bottom",
});
</pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    
    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <x-slot:footerFiles>
        <script src="{{asset('plugins/global/vendors.min.js')}}"></script>
        <script src="{{asset('plugins/bootstrap-maxlength/bootstrap-maxlength.js')}}"></script>
        <script src="{{asset('plugins/bootstrap-maxlength/custom-bs-maxlength.js')}}"></script>
    </x-slot>
    <!--  END CUSTOM SCRIPTS FILE  -->
</x-base-layout>