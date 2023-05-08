<x-base-layout :scrollspy="true">

    <x-slot:pageTitle>
        {{$title}} 
    </x-slot>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <x-slot:headerFiles>
        <!--  BEGIN CUSTOM STYLE FILE  -->
        @vite(['resources/scss/light/assets/components/timeline.scss'])
        <!--  END CUSTOM STYLE FILE  -->
        
        <style>
            .toggle-code-snippet { margin-bottom: 0px; }
            body.dark .toggle-code-snippet { margin-bottom: 0px; }
        </style>
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
                <li class="breadcrumb-item active" aria-current="page">Validation</li>
            </ol>
        </nav>
    </div>
    <!-- /BREADCRUMB -->

    <div id="navSection" data-bs-spy="affix" class="nav  sidenav">
        <div class="sidenav-content">
            <a href="#basic" class="active nav-link">Basic</a>
            <a href="#custom_styles" class="nav-link">Custom Styles</a>
            <a href="#browser_default" class="nav-link">Browser Default</a>
            <a href="#tooltips" class="nav-link">Tooltips</a>
        </div>
    </div>
    
    <div class="row layout-top-spacing">

        <div id="basic" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Basic</h4>
                        </div>                 
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <form class="simple-example" action="javascript:void(0);" novalidate>
                        <div class="form-row">
                            <div class="col-md-12 mb-4">
                                <label for="fullName">Full Name</label>
                                <input type="text" class="form-control" id="fullName" placeholder="" value="" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please fill the name
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary submit-fn mt-2" type="submit">Submit form</button>
                    </form>

                    <div class="code-section-container show-code">
                                
                        <button class="btn toggle-code-snippet"><span>HTML</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>
                        <div class="code-section text-left">
                            <pre>
==========
HTML
==========

&lt;form class="simple-example" action="javascript:void(0);" novalidate&gt;
&lt;div class="form-row"&gt;
&lt;div class="col-md-12 mb-4"&gt;
&lt;label for="fullName"&gt;Full Name&lt;/label&gt;
&lt;input type="text" class="form-control" id="fullName" placeholder="" value="" required&gt;
&lt;div class="valid-feedback"&gt;
Looks good!
&lt;/div&gt;
&lt;div class="invalid-feedback"&gt;
Please fill the name
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;button class="btn btn-primary submit-fn mt-2" type="submit"&gt;Submit form&lt;/button&gt;
&lt;/form&gt;

</pre>
                        </div>
                    </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>JS</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
===============
Javascript
===============

window.addEventListener('load', function() {
// Fetch all the forms we want to apply custom Bootstrap validation styles to
var forms = document.getElementsByClassName('simple-example');
var invalid = $('.simple-example .invalid-feedback');

// Loop over them and prevent submission
var validation = Array.prototype.filter.call(forms, function(form) {
form.addEventListener('submit', function(event) {
if (form.checkValidity() === false) {
event.preventDefault();
event.stopPropagation();
invalid.css('display', 'block');
} else {

invalid.css('display', 'none');

form.classList.add('was-validated');
}
}, false);
});

}, false);

</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <div class="row">
        <div id="custom_styles" class="col-lg-12 layout-spacing col-md-12">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Custom styles</h4>
                        </div>                 
                    </div>
                </div>
                <div class="widget-content widget-content-area">                                
                    <form class="row g-3 needs-validation" novalidate>
                        <div class="col-md-4">
                          <label for="validationCustom01" class="form-label">First name</label>
                          <input type="text" class="form-control" id="validationCustom01" value="Mark" required>
                          <div class="valid-feedback">
                            Looks good!
                          </div>
                        </div>
                        <div class="col-md-4">
                          <label for="validationCustom02" class="form-label">Last name</label>
                          <input type="text" class="form-control" id="validationCustom02" value="Otto" required>
                          <div class="valid-feedback">
                            Looks good!
                          </div>
                        </div>
                        <div class="col-md-4">
                          <label for="validationCustomUsername" class="form-label">Username</label>
                          <div class="input-group has-validation">
                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                            <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                            <div class="invalid-feedback">
                              Please choose a username.
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <label for="validationCustom03" class="form-label">City</label>
                          <input type="text" class="form-control" id="validationCustom03" required>
                          <div class="invalid-feedback">
                            Please provide a valid city.
                          </div>
                        </div>
                        <div class="col-md-3">
                          <label for="validationCustom04" class="form-label">State</label>
                          <select class="form-select" id="validationCustom04" required>
                            <option selected disabled value="">Choose...</option>
                            <option>...</option>
                          </select>
                          <div class="invalid-feedback">
                            Please select a valid state.
                          </div>
                        </div>
                        <div class="col-md-3">
                          <label for="validationCustom05" class="form-label">Zip</label>
                          <input type="text" class="form-control" id="validationCustom05" required>
                          <div class="invalid-feedback">
                            Please provide a valid zip.
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                            <label class="form-check-label" for="invalidCheck">
                              Agree to terms and conditions
                            </label>
                            <div class="invalid-feedback">
                              You must agree before submitting.
                            </div>
                          </div>
                        </div>
                        <div class="col-12">
                          <button class="btn btn-primary" type="submit">Submit form</button>
                        </div>
                    </form>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>HTML</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>
                        <div class="code-section text-left">
                            <pre>
===============
HTML
===============

&lt;form class=&quot;row g-3 needs-validation&quot; novalidate&gt;
&lt;div class=&quot;col-md-4&quot;&gt;
&lt;label for=&quot;validationCustom01&quot; class=&quot;form-label&quot;&gt;First name&lt;/label&gt;
&lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationCustom01&quot; value=&quot;Mark&quot; required&gt;
&lt;div class=&quot;valid-feedback&quot;&gt;
Looks good!
&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;col-md-4&quot;&gt;
&lt;label for=&quot;validationCustom02&quot; class=&quot;form-label&quot;&gt;Last name&lt;/label&gt;
&lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationCustom02&quot; value=&quot;Otto&quot; required&gt;
&lt;div class=&quot;valid-feedback&quot;&gt;
Looks good!
&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;col-md-4&quot;&gt;
&lt;label for=&quot;validationCustomUsername&quot; class=&quot;form-label&quot;&gt;Username&lt;/label&gt;
&lt;div class=&quot;input-group has-validation&quot;&gt;
&lt;span class=&quot;input-group-text&quot; id=&quot;inputGroupPrepend&quot;&gt;@&lt;/span&gt;
&lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationCustomUsername&quot; aria-describedby=&quot;inputGroupPrepend&quot; required&gt;
&lt;div class=&quot;invalid-feedback&quot;&gt;
Please choose a username.
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;col-md-6&quot;&gt;
&lt;label for=&quot;validationCustom03&quot; class=&quot;form-label&quot;&gt;City&lt;/label&gt;
&lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationCustom03&quot; required&gt;
&lt;div class=&quot;invalid-feedback&quot;&gt;
Please provide a valid city.
&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;col-md-3&quot;&gt;
&lt;label for=&quot;validationCustom04&quot; class=&quot;form-label&quot;&gt;State&lt;/label&gt;
&lt;select class=&quot;form-select&quot; id=&quot;validationCustom04&quot; required&gt;
&lt;option selected disabled value=&quot;&quot;&gt;Choose...&lt;/option&gt;
&lt;option&gt;...&lt;/option&gt;
&lt;/select&gt;
&lt;div class=&quot;invalid-feedback&quot;&gt;
Please select a valid state.
&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;col-md-3&quot;&gt;
&lt;label for=&quot;validationCustom05&quot; class=&quot;form-label&quot;&gt;Zip&lt;/label&gt;
&lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationCustom05&quot; required&gt;
&lt;div class=&quot;invalid-feedback&quot;&gt;
Please provide a valid zip.
&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;col-12&quot;&gt;
&lt;div class=&quot;form-check&quot;&gt;
&lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;invalidCheck&quot; required&gt;
&lt;label class=&quot;form-check-label&quot; for=&quot;invalidCheck&quot;&gt;
Agree to terms and conditions
&lt;/label&gt;
&lt;div class=&quot;invalid-feedback&quot;&gt;
You must agree before submitting.
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;col-12&quot;&gt;
&lt;button class=&quot;btn btn-primary&quot; type=&quot;submit&quot;&gt;Submit form&lt;/button&gt;
&lt;/div&gt;
&lt;/form&gt;
</pre>
                        </div>
                    </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>JS</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>
                        <div class="code-section text-left">
                            <pre>
===============
Javascript
===============

window.addEventListener('load', function() {
// Fetch all the forms we want to apply custom Bootstrap validation styles to
var forms = document.getElementsByClassName('needs-validation');
// Loop over them and prevent submission
var validation = Array.prototype.filter.call(forms, function(form) {
form.addEventListener('submit', function(event) {
if (form.checkValidity() === false) {
event.preventDefault();
event.stopPropagation();
}
form.classList.add('was-validated');
}, false);
});
}, false);
</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div id="browser_default" class="col-lg-12 layout-spacing col-md-12">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Browser defaults</h4>
                        </div>                 
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <form class="row g-3">
                        <div class="col-md-4">
                          <label for="validationDefault01" class="form-label">First name</label>
                          <input type="text" class="form-control" id="validationDefault01" value="Mark" required>
                        </div>
                        <div class="col-md-4">
                          <label for="validationDefault02" class="form-label">Last name</label>
                          <input type="text" class="form-control" id="validationDefault02" value="Otto" required>
                        </div>
                        <div class="col-md-4">
                          <label for="validationDefaultUsername" class="form-label">Username</label>
                          <div class="input-group">
                            <span class="input-group-text" id="inputGroupPrepend2">@</span>
                            <input type="text" class="form-control" id="validationDefaultUsername"  aria-describedby="inputGroupPrepend2" required>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <label for="validationDefault03" class="form-label">City</label>
                          <input type="text" class="form-control" id="validationDefault03" required>
                        </div>
                        <div class="col-md-3">
                          <label for="validationDefault04" class="form-label">State</label>
                          <select class="form-select" id="validationDefault04" required>
                            <option selected disabled value="">Choose...</option>
                            <option>...</option>
                          </select>
                        </div>
                        <div class="col-md-3">
                          <label for="validationDefault05" class="form-label">Zip</label>
                          <input type="text" class="form-control" id="validationDefault05" required>
                        </div>
                        <div class="col-12">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                            <label class="form-check-label" for="invalidCheck2">
                              Agree to terms and conditions
                            </label>
                          </div>
                        </div>
                        <div class="col-12">
                          <button class="btn btn-primary" type="submit">Submit form</button>
                        </div>
                    </form>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
===============
HTML
===============

&lt;form class=&quot;row g-3&quot;&gt;
&lt;div class=&quot;col-md-4&quot;&gt;
&lt;label for=&quot;validationDefault01&quot; class=&quot;form-label&quot;&gt;First name&lt;/label&gt;
&lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationDefault01&quot; value=&quot;Mark&quot; required&gt;
&lt;/div&gt;
&lt;div class=&quot;col-md-4&quot;&gt;
&lt;label for=&quot;validationDefault02&quot; class=&quot;form-label&quot;&gt;Last name&lt;/label&gt;
&lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationDefault02&quot; value=&quot;Otto&quot; required&gt;
&lt;/div&gt;
&lt;div class=&quot;col-md-4&quot;&gt;
&lt;label for=&quot;validationDefaultUsername&quot; class=&quot;form-label&quot;&gt;Username&lt;/label&gt;
&lt;div class=&quot;input-group&quot;&gt;
&lt;span class=&quot;input-group-text&quot; id=&quot;inputGroupPrepend2&quot;&gt;@&lt;/span&gt;
&lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationDefaultUsername&quot;  aria-describedby=&quot;inputGroupPrepend2&quot; required&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;col-md-6&quot;&gt;
&lt;label for=&quot;validationDefault03&quot; class=&quot;form-label&quot;&gt;City&lt;/label&gt;
&lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationDefault03&quot; required&gt;
&lt;/div&gt;
&lt;div class=&quot;col-md-3&quot;&gt;
&lt;label for=&quot;validationDefault04&quot; class=&quot;form-label&quot;&gt;State&lt;/label&gt;
&lt;select class=&quot;form-select&quot; id=&quot;validationDefault04&quot; required&gt;
&lt;option selected disabled value=&quot;&quot;&gt;Choose...&lt;/option&gt;
&lt;option&gt;...&lt;/option&gt;
&lt;/select&gt;
&lt;/div&gt;
&lt;div class=&quot;col-md-3&quot;&gt;
&lt;label for=&quot;validationDefault05&quot; class=&quot;form-label&quot;&gt;Zip&lt;/label&gt;
&lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationDefault05&quot; required&gt;
&lt;/div&gt;
&lt;div class=&quot;col-12&quot;&gt;
&lt;div class=&quot;form-check&quot;&gt;
&lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;invalidCheck2&quot; required&gt;
&lt;label class=&quot;form-check-label&quot; for=&quot;invalidCheck2&quot;&gt;
Agree to terms and conditions
&lt;/label&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;col-12&quot;&gt;
&lt;button class=&quot;btn btn-primary&quot; type=&quot;submit&quot;&gt;Submit form&lt;/button&gt;
&lt;/div&gt;
&lt;/form&gt;
</pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div id="tooltips" class="col-lg-12 layout-spacing col-md-12">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Tooltips</h4>
                        </div>                 
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <form class="row g-3 needs-validation" novalidate>
                        <div class="col-md-4 position-relative">
                          <label for="validationTooltip01" class="form-label">First name</label>
                          <input type="text" class="form-control" id="validationTooltip01" value="Mark" required>
                          <div class="valid-tooltip">
                            Looks good!
                          </div>
                        </div>
                        <div class="col-md-4 position-relative">
                          <label for="validationTooltip02" class="form-label">Last name</label>
                          <input type="text" class="form-control" id="validationTooltip02" value="Otto" required>
                          <div class="valid-tooltip">
                            Looks good!
                          </div>
                        </div>
                        <div class="col-md-4 position-relative">
                          <label for="validationTooltipUsername" class="form-label">Username</label>
                          <div class="input-group has-validation">
                            <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
                            <input type="text" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
                            <div class="invalid-tooltip">
                              Please choose a unique and valid username.
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6 position-relative">
                          <label for="validationTooltip03" class="form-label">City</label>
                          <input type="text" class="form-control" id="validationTooltip03" required>
                          <div class="invalid-tooltip">
                            Please provide a valid city.
                          </div>
                        </div>
                        <div class="col-md-3 position-relative">
                          <label for="validationTooltip04" class="form-label">State</label>
                          <select class="form-select" id="validationTooltip04" required>
                            <option selected disabled value="">Choose...</option>
                            <option>...</option>
                          </select>
                          <div class="invalid-tooltip">
                            Please select a valid state.
                          </div>
                        </div>
                        <div class="col-md-3 position-relative">
                          <label for="validationTooltip05" class="form-label">Zip</label>
                          <input type="text" class="form-control" id="validationTooltip05" required>
                          <div class="invalid-tooltip">
                            Please provide a valid zip.
                          </div>
                        </div>
                        <div class="col-12">
                          <button class="btn btn-primary" type="submit">Submit form</button>
                        </div>
                    </form>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>HTML</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>
                        <div class="code-section text-left">
                            <pre>
===============
HTML
===============

&lt;form class=&quot;row g-3 needs-validation&quot; novalidate&gt;
&lt;div class=&quot;col-md-4 position-relative&quot;&gt;
&lt;label for=&quot;validationTooltip01&quot; class=&quot;form-label&quot;&gt;First name&lt;/label&gt;
&lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationTooltip01&quot; value=&quot;Mark&quot; required&gt;
&lt;div class=&quot;valid-tooltip&quot;&gt;
Looks good!
&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;col-md-4 position-relative&quot;&gt;
&lt;label for=&quot;validationTooltip02&quot; class=&quot;form-label&quot;&gt;Last name&lt;/label&gt;
&lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationTooltip02&quot; value=&quot;Otto&quot; required&gt;
&lt;div class=&quot;valid-tooltip&quot;&gt;
Looks good!
&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;col-md-4 position-relative&quot;&gt;
&lt;label for=&quot;validationTooltipUsername&quot; class=&quot;form-label&quot;&gt;Username&lt;/label&gt;
&lt;div class=&quot;input-group has-validation&quot;&gt;
&lt;span class=&quot;input-group-text&quot; id=&quot;validationTooltipUsernamePrepend&quot;&gt;@&lt;/span&gt;
&lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationTooltipUsername&quot; aria-describedby=&quot;validationTooltipUsernamePrepend&quot; required&gt;
&lt;div class=&quot;invalid-tooltip&quot;&gt;
Please choose a unique and valid username.
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;col-md-6 position-relative&quot;&gt;
&lt;label for=&quot;validationTooltip03&quot; class=&quot;form-label&quot;&gt;City&lt;/label&gt;
&lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationTooltip03&quot; required&gt;
&lt;div class=&quot;invalid-tooltip&quot;&gt;
Please provide a valid city.
&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;col-md-3 position-relative&quot;&gt;
&lt;label for=&quot;validationTooltip04&quot; class=&quot;form-label&quot;&gt;State&lt;/label&gt;
&lt;select class=&quot;form-select&quot; id=&quot;validationTooltip04&quot; required&gt;
&lt;option selected disabled value=&quot;&quot;&gt;Choose...&lt;/option&gt;
&lt;option&gt;...&lt;/option&gt;
&lt;/select&gt;
&lt;div class=&quot;invalid-tooltip&quot;&gt;
Please select a valid state.
&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;col-md-3 position-relative&quot;&gt;
&lt;label for=&quot;validationTooltip05&quot; class=&quot;form-label&quot;&gt;Zip&lt;/label&gt;
&lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationTooltip05&quot; required&gt;
&lt;div class=&quot;invalid-tooltip&quot;&gt;
Please provide a valid zip.
&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;col-12&quot;&gt;
&lt;button class=&quot;btn btn-primary&quot; type=&quot;submit&quot;&gt;Submit form&lt;/button&gt;
&lt;/div&gt;
&lt;/form&gt;
</pre>
                        </div>
                    </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>JS</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
===============
Javascript
===============

window.addEventListener('load', function() {
// Fetch all the forms we want to apply custom Bootstrap validation styles to
var forms = document.getElementsByClassName('needs-validation');
// Loop over them and prevent submission
var validation = Array.prototype.filter.call(forms, function(form) {
form.addEventListener('submit', function(event) {
if (form.checkValidity() === false) {
event.preventDefault();
event.stopPropagation();
}
form.classList.add('was-validated');
}, false);
});
}, false);
</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    
    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <x-slot:footerFiles>
      @vite(['resources/assets/js/forms/bootstrap_validation/bs_validation_script.js'])
    </x-slot>
    <!--  END CUSTOM SCRIPTS FILE  -->
</x-base-layout>