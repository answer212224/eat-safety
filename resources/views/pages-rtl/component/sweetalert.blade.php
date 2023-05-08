<x-rtl.base-layout :scrollspy="true">

    <x-slot:pageTitle>
        {{$title}} 
    </x-slot>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <x-slot:headerFiles>
        <!--  BEGIN CUSTOM STYLE FILE  -->
        <link rel="stylesheet" href="{{asset('plugins-rtl/sweetalerts2/sweetalerts2.css')}}">
        @vite(['resources/rtl/scss/light/plugins/sweetalerts2/custom-sweetalert.scss'])
        @vite(['resources/rtl/scss/dark/plugins/sweetalerts2/custom-sweetalert.scss'])
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
                <li class="breadcrumb-item active" aria-current="page">SweetAlerts</li>
            </ol>
        </nav>
    </div>
    <!-- /BREADCRUMB -->

    <div id="navSection" data-bs-spy="affix" class="nav  sidenav">
        <div class="sidenav-content">
            <a href="#saBasic" class="active nav-link">Basic</a>
            <a href="#saPlacement" class="nav-link">Placement</a>
            <a href="#saAuto" class="nav-link">Auto close timer</a>
            <a href="#saImage" class="nav-link">Custom image</a>
            <a href="#saWarning" class="nav-link">Warning message</a>
            <a href="#saCancel" class="nav-link">Cancel</a>
            <a href="#saRTL" class="nav-link">RTL</a>
            <a href="#saMixin" class="nav-link">Mixin</a>
            <a href="#saIconType" class="nav-link">Icon Type</a>
        </div>
    </div>

    <div class="row layout-top-spacing" id="cancel-row">

        <div id="saBasic" class="col-lg-12 col-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">                                
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Basic message</h4>
                        </div>
                    </div>
                </div>                            
                <div class="widget-content widget-content-area text-center">
                    <button class="mr-2 btn btn-primary message">Basic message</button>

                    <div class="code-section-container show-code">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
document.querySelector('.widget-content .message').addEventListener('click', function() {
Swal.fire('Saved succesfully')
})</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="saPlacement" class="col-lg-12 col-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">                                
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Placement</h4>
                        </div>
                    </div>
                </div>                            
                <div class="widget-content widget-content-area text-center">
                    <button class="btn btn-primary default mb-2 me-4">Default</button>
                    <button class="btn btn-danger top-start mb-2 me-4">Top Left</button>
                    <button class="btn btn-warning top-end mb-2 me-4">Top Right</button>
                    <button class="btn btn-info bottom-start mb-2 me-4">Bottom Left</button>
                    <button class="btn btn-secondary bottom-end  mb-2 me-4">Bottom Right</button>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
/**
*     Placement
*/

// Center
document.querySelector('.widget-content .default').addEventListener('click', function() {
Swal.fire({
position: 'center',
icon: 'success',
title: 'Placement set at default (center)',
showConfirmButton: false,
timer: 1500
})
})

// Top Start
document.querySelector('.widget-content .top-start').addEventListener('click', function() {
Swal.fire({
position: 'top-start',
icon: 'success',
title: 'Placement set at top left',
showConfirmButton: false,
timer: 1500
})
})

// Top End
document.querySelector('.widget-content .top-end').addEventListener('click', function() {
Swal.fire({
position: 'top-end',
icon: 'success',
title: 'Placement set at top right',
showConfirmButton: false,
timer: 1500
})
})

// Bottom Start
document.querySelector('.widget-content .bottom-start').addEventListener('click', function() {
Swal.fire({
position: 'bottom-start',
icon: 'success',
title: 'Placement set at bottom left',
showConfirmButton: false,
timer: 1500
})
})

// Bottom End
document.querySelector('.widget-content .bottom-end').addEventListener('click', function() {
Swal.fire({
position: 'bottom-end',
icon: 'success',
title: 'Placement set at bottom right',
showConfirmButton: false,
timer: 1500
})
})</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="saAuto" class="col-lg-12 col-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">                                
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Auto Timer</h4>
                        </div>
                    </div>
                </div>                            
                <div class="widget-content widget-content-area text-center">
                    <button class="mr-2 btn btn-primary timer">Message timer</button>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
document.querySelector('.widget-content .timer').addEventListener('click', function() {
let timerInterval
Swal.fire({
title: 'Auto close alert!',
html: 'I will close in <b></b> milliseconds.',
timer: 2000,
timerProgressBar: true,
didOpen: () => {
Swal.showLoading()
const b = Swal.getHtmlContainer().querySelector('b')
timerInterval = setInterval(() => {
b.textContent = Swal.getTimerLeft()
}, 100)
},
willClose: () => {
clearInterval(timerInterval)
}
}).then((result) => {
/* Read more about handling dismissals below */
if (result.dismiss === Swal.DismissReason.timer) {
console.log('I was closed by the timer')
}
})
})</pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="saImage" class="col-lg-12 col-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">                                
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Message with custom image</h4>
                        </div>
                    </div>
                </div>                            
                <div class="widget-content widget-content-area text-center">
                    <button class="mr-2 btn btn-success custom-image">Message with custom image</button>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
document.querySelector('.widget-content .custom-image').addEventListener('click', function() {
Swal.fire({
title: 'Sweet!',
text: 'Modal with a custom image.',
imageUrl: 'https://unsplash.it/400/200',
imageWidth: 400,
imageHeight: 200,
imageAlt: 'Custom image',
})
})</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="saWarning" class="col-lg-12 col-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">                                
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Warning message, with "Confirm" button</h4>
                        </div>
                    </div>
                </div>                            
                <div class="widget-content widget-content-area text-center">
                    <button class="mr-2 btn btn-primary  warning confirm">Confirm</button>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
document.querySelector('.widget-content .warning.confirm').addEventListener('click', function() {
Swal.fire({
title: 'Are you sure?',
text: "You won't be able to revert this!",
icon: 'warning',
showCancelButton: true,
confirmButtonColor: '#3085d6',
cancelButtonColor: '#d33',
confirmButtonText: 'Yes, delete it!'
}).then((result) => {
if (result.isConfirmed) {
Swal.fire(
'Deleted!',
'Your file has been deleted.',
'success'
)
}
})
})</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="saCancel" class="col-lg-12 col-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">                                
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Execute something else for "Cancel".</h4>
                        </div>
                    </div>
                </div>                            
                <div class="widget-content widget-content-area text-center">
                    <button class="mr-2 btn btn-secondary  warning cancel">Addition else for "Cancel".</button>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
const swalWithBootstrapButtons = Swal.mixin({
customClass: {
confirmButton: 'btn btn-success',
cancelButton: 'btn btn-danger'
},
buttonsStyling: false
})

document.querySelector('.widget-content .warning.cancel').addEventListener('click', function() {
Swal.fire({
title: 'Are you sure?',
text: "You won't be able to revert this!",
icon: 'warning',
showCancelButton: true,
confirmButtonText: 'Yes, delete it!',
cancelButtonText: 'No, cancel!',
reverseButtons: true
}).then((result) => {
if (result.isConfirmed) {
swalWithBootstrapButtons.fire(
'Deleted!',
'Your file has been deleted.',
'success'
)
} else if (
/* Read more about handling dismissals below */
result.dismiss === Swal.DismissReason.cancel
) {
swalWithBootstrapButtons.fire(
'Cancelled',
'Your imaginary file is safe :)',
'error'
)
}
})
})</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="saRTL" class="col-lg-12 col-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">                                
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>RTL Support</h4>
                        </div>
                    </div>
                </div>                            
                <div class="widget-content widget-content-area text-center">
                    <button class="mr-2 btn btn-primary  RTL">RTL</button>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
document.querySelector('.widget-content .RTL').addEventListener('click', function() {
Swal.fire({
title: 'هل تريد الاستمرار؟',
icon: 'question',
iconHtml: '؟',
confirmButtonText: 'نعم',
cancelButtonText: 'لا',
showCancelButton: true,
showCloseButton: true
})
})</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="saMixin" class="col-lg-12 col-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">                                
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Mixin</h4>
                        </div>
                    </div>
                </div>                            
                <div class="widget-content widget-content-area text-center">
                    <button class="mr-2 btn btn-primary  mixin">Mixin</button>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
document.querySelector('.widget-content .mixin').addEventListener('click', function() {
const Toast = Swal.mixin({
toast: true,
position: 'top-end',
showConfirmButton: false,
timer: 3000,
timerProgressBar: true,
didOpen: (toast) => {
toast.addEventListener('mouseenter', Swal.stopTimer)
toast.addEventListener('mouseleave', Swal.resumeTimer)
}
})

Toast.fire({
icon: 'success',
title: 'Signed in successfully'
})
})</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="saIconType" class="col-lg-12 col-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">                                
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Icons Type</h4>
                        </div>
                    </div>
                </div>                            
                <div class="widget-content widget-content-area text-center">
                    <button class="mr-2 btn btn-success icon-success  mb-2 me-4">Success</button>
                    <button class="mr-2 btn btn-danger icon-error  mb-2 me-4">Error</button>
                    <button class="mr-2 btn btn-warning icon-warning  mb-2 me-4">Warning</button>
                    <button class="mr-2 btn btn-info icon-info  mb-2 me-4">Info</button>
                    <button class="mr-2 btn btn-secondary icon-question  mb-2 me-4">Question</button>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
/**
*     Icons Type
*/
                                
// Succcess
document.querySelector('.widget-content .icon-success').addEventListener('click', function() {
Swal.fire({
icon: 'success',
title: 'Icon Success',
})
})

// Error
document.querySelector('.widget-content .icon-error').addEventListener('click', function() {
Swal.fire({
icon: 'error',
title: 'Icon Error',
})
})

// Warning
document.querySelector('.widget-content .icon-warning').addEventListener('click', function() {
Swal.fire({
icon: 'warning',
title: 'Icon Warning',
})
})

// Info
document.querySelector('.widget-content .icon-info').addEventListener('click', function() {
Swal.fire({
icon: 'info',
title: 'Icon Info',
})
})

// Question
document.querySelector('.widget-content .icon-question').addEventListener('click', function() {
Swal.fire({
icon: 'question',
title: 'Icon Question',
})
})</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
    
    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <x-slot:footerFiles>
        <script src="{{asset('plugins-rtl/sweetalerts2/sweetalerts2.min.js')}}"></script>
        <script src="{{asset('plugins-rtl/sweetalerts2/custom-sweetalert.js')}}"></script>
    </x-slot>
    <!--  END CUSTOM SCRIPTS FILE  -->
</x-rtl.base-layout>