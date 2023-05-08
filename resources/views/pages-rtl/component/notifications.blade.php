<x-rtl.base-layout :scrollspy="true">

    <x-slot:pageTitle>
        {{$title}} 
    </x-slot>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <x-slot:headerFiles>
        <!--  BEGIN CUSTOM STYLE FILE  -->
        <link rel="stylesheet" href="{{asset('plugins-rtl/notification/snackbar/snackbar.min.css')}}">
        @vite(['resources/rtl/scss/light/plugins/notification/snackbar/custom-snackbar.scss'])
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
                <li class="breadcrumb-item"><a href="#">Components</a></li>
                <li class="breadcrumb-item active" aria-current="page">SnackBar</li>
            </ol>
        </nav>
    </div>
    <!-- /BREADCRUMB -->

    <div id="navSection" data-bs-spy="affix" class="nav  sidenav">
        <div class="sidenav-content">
            <a href="#snackbar_toast" class="active nav-link">SnackBar</a>
            <a href="#bs_toast" class="nav-link">Bootstrap Toast</a>
        </div>
    </div>

    <div class="row layout-top-spacing">


        <div id="snackbar_toast" class="col-lg-12">
            <div class="seperator-header">
                <h4 class="">SnackBar</h4>
            </div>
        </div>

        <div class="col-lg-12 col-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">                                
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Basic</h4>
                        </div>
                    </div>
                </div>                            
                <div class="widget-content widget-content-area text-center">
                    <button class="btn btn-primary default">Default</button>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;button class="btn btn-primary default"&gt;Default&lt;/button&gt;

add_notification('.default', {text: 'Example notification text.', duration: 100000});</pre>
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
                            <h4>Direction</h4>
                        </div>
                    </div>
                </div>                            
                <div class="widget-content widget-content-area text-center">
                    <button class="btn btn-success top-left mb-2 me-4">Top Left</button>

                    <button class="btn btn-info top-center mb-2 me-4">Top Center</button>

                    <button class="btn btn-danger top-right mb-2 me-4">Top Right</button>

                    <button class="btn btn-warning bottom-left mb-2 me-4">Bottom Left</button>

                    <button class="btn btn-secondary bottom-center mb-2 me-4">Bottom Center</button>

                    <button class="btn btn-dark bottom-right mb-2 me-4">Bottom right</button>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
// Top Left
add_notification('.top-left', {text: 'Example notification text.', pos: 'top-left'})

// Top Center
add_notification('.top-center', {text: 'Example notification text.', pos: 'top-center'})

// Top Right
add_notification('.top-right', {text: 'Example notification text.', pos: 'top-right'})

// Bottom Left
add_notification('.bottom-left', {text: 'Example notification text.', pos: 'bottom-left'})

// Bottom Center
add_notification('.bottom-center', {text: 'Example notification text.', pos: 'bottom-center'})

// Bottom Right
add_notification('.bottom-right', {text: 'Example notification text.', pos: 'bottom-right'})
</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="snackbarBGColor" class="col-lg-12 col-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Background Color</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area text-center">
                    <button class="btn mb-2 btn-primary snackbar-bg-primary mb-2 me-4">Primary</button>
                    <button class="btn mb-2 btn-info snackbar-bg-info mb-2 me-4">Info</button>
                    <button class="btn mb-2 btn-success snackbar-bg-success mb-2 me-4">Success</button>
                    <button class="btn mb-2 btn-warning snackbar-bg-warning mb-2 me-4">Warning</button>
                    <button class="btn mb-2 btn-danger snackbar-bg-danger mb-2 me-4">Danger</button>
                    <button class="btn mb-2 btn-secondary snackbar-bg-secondary mb-2 me-4">Secondary</button>
                    <button class="btn mb-2 btn-dark snackbar-bg-dark">Dark</button>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre class="HTML">
============= 
Primary 
=============

&lt;button class="btn btn-primary snackbar-bg-primary"&gt;Primary&lt;/button&gt;

add_notification('.snackbar-bg-primary', { 
text: 'Primary',
actionTextColor: '#fff',
backgroundColor: '#4361ee'
})

============= 
Info 
=============

&lt;button class="btn btn-info snackbar-bg-info"&gt;Info&lt;/button&gt;

add_notification('.snackbar-bg-info', { 
text: 'Primary',
actionTextColor: '#fff',
backgroundColor: '#4361ee'
})

============= 
Success 
=============

&lt;button class="btn btn-success snackbar-bg-success"&gt;Success&lt;/button&gt;

add_notification('.snackbar-bg-success', { 
text: 'Success',
actionTextColor: '#fff',
backgroundColor: '#00ab55'
})

============= 
Warning 
=============

&lt;button class="btn btn-warning snackbar-bg-warning"&gt;Warning&lt;/button&gt;

add_notification('.snackbar-bg-warning', { 
text: 'Warning',
actionTextColor: '#fff',
backgroundColor: '#e2a03f'
})

============= 
Danger 
=============

&lt;button class="btn btn-danger snackbar-bg-danger"&gt;Danger&lt;/button&gt;

add_notification('.snackbar-bg-danger', { 
text: 'Danger',
actionTextColor: '#fff',
backgroundColor: '#e7515a'
})

================== 
Secondary 
==================

&lt;button class="btn btn-secondary snackbar-bg-secondary"&gt;Secondary&lt;/button&gt;

add_notification('.snackbar-bg-secondary', { 
text: 'Secondary',
actionTextColor: '#fff',
backgroundColor: '#805dca'
})

============= 
Dark 
=============

&lt;button class="btn btn-dark snackbar-bg-dark"&gt;Dark&lt;/button&gt;

add_notification('.snackbar-bg-dark', { 
text: 'Dark',
actionTextColor: '#fff',
backgroundColor: '#3b3f5c'
})

</pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="snackbarMethods" class="col-lg-12 col-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">                                
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>No Action</h4>
                        </div>
                    </div>
                </div>                            
                <div class="widget-content widget-content-area text-center">
                    <button class="btn btn-warning no-action">No Action</button>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;button class="btn btn-default no-action"&gt;No Action&lt;/button&gt;

add_notification('.no-action', {showAction: false})

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
                            <h4>Action Text</h4>
                        </div>
                    </div>
                </div>                            
                <div class="widget-content widget-content-area text-center">
                    <button class="btn btn-primary action-text">Action Text</button>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;button class="btn btn-button-2 action-text"&gt;Action Text&lt;/button&gt;

add_notification('.action-text', {actionText: 'Thanks!'})

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
                            <h4>Text Color</h4>
                        </div>
                    </div>
                </div>                            
                <div class="widget-content widget-content-area text-center">
                    <button class="btn btn-danger text-color">Text Color</button>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;button class="btn btn-button-3 text-color"&gt;Text Color&lt;/button&gt;

add_notification('.text-color', {actionTextColor: '#e2a03f'})

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
                            <h4>Click Callback</h4>
                        </div>
                    </div>
                </div>                            
                <div class="widget-content widget-content-area text-center">
                    <button class="btn btn-info click-callback">Click Callback</button>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;button class="btn btn-button-4 click-callback"&gt;Click Callback&lt;/button&gt;

add_notification('.click-callback', {
text: 'Custom callback when action button is clicked.',
width: 'auto',
onActionClick: function(element) {
document.querySelector(`.${element.classList[0]}`).addEventListener('click', function() {
Snackbar.show({text: 'Thanks for clicking.',});
})
}
})
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
                            <h4>Duration</h4>
                        </div>
                    </div>
                </div>                            
                <div class="widget-content widget-content-area text-center">
                    <button class="btn btn-dark duration">Duration</button>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;button class="btn btn-button-5 duration"&gt;Duration&lt;/button&gt;

add_notification('.duration', { text: 'Duration set to 5s', duration: 5000,})

</pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="row">

        <div id="bs_toast" class="col-lg-12">
            <div class="seperator-header">
                <h4 class="">Bootstrap Toast</h4>
            </div>
        </div>

        <div id="snackbarBasic" class="col-lg-12 col-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">                                
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Basic</h4>
                        </div>
                    </div>
                </div>                            
                <div class="widget-content widget-content-area">

                    <button id="toast-btn" class="btn btn-primary">Open Toast</button>

                    <div style="position: absolute; top: 0; left: 0;z-index: 9999; margin-left: 20px; margin-right: 20px;">
                        <div class="toast toast-primary fade hide" role="alert" data-bs-delay="6000" aria-live="assertive" aria-atomic="true">
                            <div class="toast-header">
                                <strong class="me-auto">Bootstrap</strong>
                                <small class="meta-time">just now</small>
                                <button type="button" class="ms-2 mb-1 btn-close" data-bs-dismiss="toast" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="toast-body">
                                Hello, world! This is a toast message.
                            </div>
                        </div>
                    </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>HTML</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;button id="toast-btn" class="btn btn-primary"&gt;Open Toast&lt;/button&gt;

&lt;!-- Toast Element --&gt;

&lt;div style="position: absolute; top: 0; right: 22px;left: 22px;z-index: 9999;"&gt;
&lt;div class="toast toast-primary fade hide" role="alert" data-bs-delay="6000" aria-live="assertive" aria-atomic="true"&gt;
&lt;div class="toast-header"&gt;
&lt;strong class="mr-auto"&gt;Bootstrap&lt;/strong&gt;
&lt;small class="meta-time"&gt;just now&lt;/small&gt;
&lt;button type="button" class="ml-2 mb-1 close" data-bs-dismiss="toast" aria-label="Close"&gt;
&lt;span aria-hidden="true"&gt;&times;&lt;/span&gt;
&lt;/button&gt;
&lt;/div&gt;
&lt;div class="toast-body"&gt;
Hello, world! This is a toast message.
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
</pre>
                        </div>
                    </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>JS</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
// Get the Toast button
var toastButton = document.getElementById("toast-btn");
// Get the Toast element
var toastElement = document.getElementsByClassName("toast")[0];

var toast = new bootstrap.Toast(toastElement)
toastButton.onclick = function() {
toast.show();
}
</pre>
                        </div>
                    </div>


                </div>
            </div>
        </div>

    </div>
    
    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <x-slot:footerFiles>
        
        <script src="{{asset('plugins-rtl/notification/snackbar/snackbar.min.js')}}"></script>
        {{-- <script src="{{asset('plugins-rtl/notification/snackbar/snackbar.min.js')}}"></script> --}}
        @vite(['resources/rtl/assets/js/components/notification/custom-snackbar.js'])
    

        <script class="module">
            // Get the Toast button
            var toastButton = document.getElementById("toast-btn");
            // Get the Toast element
            var toastElement = document.getElementsByClassName("toast")[0];
    
            var toast = new bootstrap.Toast(toastElement)
            toastButton.onclick = function() {
                toast.show();
            }
        </script>
        
    </x-slot>
    <!--  END CUSTOM SCRIPTS FILE  -->
</x-rtl.base-layout>