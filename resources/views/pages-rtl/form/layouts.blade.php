<x-rtl.base-layout :scrollspy="true">

    <x-slot:pageTitle>
        {{$title}} 
    </x-slot>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <x-slot:headerFiles>
        <!--  BEGIN CUSTOM STYLE FILE  -->
        @vite(['resources/rtl/scss/light/assets/components/timeline.scss'])
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
                <li class="breadcrumb-item active" aria-current="page">Layouts</li>
            </ol>
        </nav>
    </div>
    <!-- /BREADCRUMB -->

    <div id="navSection" data-bs-spy="affix" class="nav  sidenav">
        <div class="sidenav-content">
            <a href="#flStackForm" class="active nav-link">Utilities</a>
            <a href="#flHorizontalForm" class="nav-link">Horizontal form</a>
            <a href="#flHorizontalFormlabel" class="nav-link">Horizontal form label</a>
            <a href="#flLoginForm" class="nav-link">Gutter</a>
            <a href="#flFormsGrid" class="nav-link">Form Grid</a>
            <a href="#flAutoSizing" class="nav-link">Auto-sizing</a>
            <a href="#flInlineForm" class="nav-link">Inline Forms</a>
        </div>
    </div>
    
    <div class="row">
        <div id="flStackForm" class="col-lg-12 layout-spacing layout-top-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">                                
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Registration Forms</h4>
                        </div>                                                                        
                    </div>
                </div>
                <div class="widget-content widget-content-area">

                    <form>
                        <div class="row mb-4">
                          <div class="col-sm-12">
                            <input type="email" class="form-control" id="inputEmail1" placeholder="Email address *">
                          </div>
                        </div>
                        <div class="row mb-4">
                          <div class="col-sm-12">
                            <input type="password" class="form-control" id="inputPassword1" placeholder="Password *">
                          </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-sm-12">
                              <input type="password" class="form-control" id="inputConfirmPassword1" placeholder="Confirm Password *">
                            </div>
                          </div>
                        <div class="row mb-4">
                          <div class="col-sm-12">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="gridCheck1">
                              <label class="form-check-label" for="gridCheck1">
                                Subscribe to weekly newsletter
                              </label>
                            </div>
                          </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                    <div class="code-section-container show-code">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;form&gt;
&lt;div class=&quot;row mb-4&quot;&gt;
&lt;div class=&quot;col-sm-12&quot;&gt;
&lt;input type=&quot;email&quot; class=&quot;form-control&quot; id=&quot;inputEmail3&quot; placeholder=&quot;Email address *&quot;&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;row mb-4&quot;&gt;
&lt;div class=&quot;col-sm-12&quot;&gt;
&lt;input type=&quot;password&quot; class=&quot;form-control&quot; id=&quot;inputPassword3&quot; placeholder=&quot;Password *&quot;&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;row mb-4&quot;&gt;
&lt;div class=&quot;col-sm-12&quot;&gt;
&lt;input type=&quot;password&quot; class=&quot;form-control&quot; id=&quot;inputPassword3&quot; placeholder=&quot;Confirm Password *&quot;&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;row mb-4&quot;&gt;
&lt;div class=&quot;col-sm-12&quot;&gt;
&lt;div class=&quot;form-check&quot;&gt;
&lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; id=&quot;gridCheck1&quot;&gt;
&lt;label class=&quot;form-check-label&quot; for=&quot;gridCheck1&quot;&gt;
    Subscribe to weekly newsletter
&lt;/label&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;button type=&quot;submit&quot; class=&quot;btn btn-primary&quot;&gt;Submit&lt;/button&gt;
&lt;/form&gt;
</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        
        <div id="flHorizontalForm" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">                                
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Horizontal form</h4>
                        </div>                                                                        
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <form>
                        <div class="row mb-3">
                          <label for="inputEmail2" class="col-sm-2 col-form-label">Email</label>
                          <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail2">
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="inputPassword2" class="col-sm-2 col-form-label">Password</label>
                          <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputPassword2">
                          </div>
                        </div>
                        <fieldset class="row mb-3">
                          <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
                          <div class="col-sm-10">
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                              <label class="form-check-label" for="gridRadios1">
                                First radio
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                              <label class="form-check-label" for="gridRadios2">
                                Second radio
                              </label>
                            </div>
                            <div class="form-check disabled">
                              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
                              <label class="form-check-label" for="gridRadios3">
                                Third disabled radio
                              </label>
                            </div>
                          </div>
                        </fieldset>
                        <div class="row mb-3">
                          <div class="col-sm-10 offset-sm-2">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="gridCheck2">
                              <label class="form-check-label" for="gridCheck2">
                                Example checkbox
                              </label>
                            </div>
                          </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Sign in</button>
                    </form>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;form&gt;
&lt;div class=&quot;row mb-3&quot;&gt;
&lt;label for=&quot;inputEmail3&quot; class=&quot;col-sm-2 col-form-label&quot;&gt;Email&lt;/label&gt;
&lt;div class=&quot;col-sm-10&quot;&gt;
&lt;input type=&quot;email&quot; class=&quot;form-control&quot; id=&quot;inputEmail3&quot;&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;row mb-3&quot;&gt;
&lt;label for=&quot;inputPassword3&quot; class=&quot;col-sm-2 col-form-label&quot;&gt;Password&lt;/label&gt;
&lt;div class=&quot;col-sm-10&quot;&gt;
&lt;input type=&quot;password&quot; class=&quot;form-control&quot; id=&quot;inputPassword3&quot;&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;fieldset class=&quot;row mb-3&quot;&gt;
&lt;legend class=&quot;col-form-label col-sm-2 pt-0&quot;&gt;Radios&lt;/legend&gt;
&lt;div class=&quot;col-sm-10&quot;&gt;
&lt;div class=&quot;form-check&quot;&gt;
&lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; name=&quot;gridRadios&quot; id=&quot;gridRadios1&quot; value=&quot;option1&quot; checked&gt;
&lt;label class=&quot;form-check-label&quot; for=&quot;gridRadios1&quot;&gt;
First radio
&lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;form-check&quot;&gt;
&lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; name=&quot;gridRadios&quot; id=&quot;gridRadios2&quot; value=&quot;option2&quot;&gt;
&lt;label class=&quot;form-check-label&quot; for=&quot;gridRadios2&quot;&gt;
Second radio
&lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;form-check disabled&quot;&gt;
&lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; name=&quot;gridRadios&quot; id=&quot;gridRadios3&quot; value=&quot;option3&quot; disabled&gt;
&lt;label class=&quot;form-check-label&quot; for=&quot;gridRadios3&quot;&gt;
Third disabled radio
&lt;/label&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/fieldset&gt;
&lt;div class=&quot;row mb-3&quot;&gt;
&lt;div class=&quot;col-sm-10 offset-sm-2&quot;&gt;
&lt;div class=&quot;form-check&quot;&gt;
&lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; id=&quot;gridCheck1&quot;&gt;
&lt;label class=&quot;form-check-label&quot; for=&quot;gridCheck1&quot;&gt;
Example checkbox
&lt;/label&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;button type=&quot;submit&quot; class=&quot;btn btn-primary&quot;&gt;Sign in&lt;/button&gt;
&lt;/form&gt;
</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="row">

        <div id="flHorizontalFormlabel" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Horizontal form label sizing</h4>
                        </div>                                                                        
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <div class="row mb-3">
                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control form-control-sm" id="colFormLabelSm" placeholder="col-form-label-sm">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="colFormLabel" placeholder="col-form-label">
                        </div>
                    </div>
                    <div class="row">
                        <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control form-control-lg" id="colFormLabelLg" placeholder="col-form-label-lg">
                        </div>
                    </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>
                        <div class="code-section text-left">
                            <pre>
&lt;div class=&quot;row mb-3&quot;&gt;
&lt;label for=&quot;colFormLabelSm&quot; class=&quot;col-sm-2 col-form-label col-form-label-sm&quot;&gt;Email&lt;/label&gt;
&lt;div class=&quot;col-sm-10&quot;&gt;
&lt;input type=&quot;email&quot; class=&quot;form-control form-control-sm&quot; id=&quot;colFormLabelSm&quot; placeholder=&quot;col-form-label-sm&quot;&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;row mb-3&quot;&gt;
&lt;label for=&quot;colFormLabel&quot; class=&quot;col-sm-2 col-form-label&quot;&gt;Email&lt;/label&gt;
&lt;div class=&quot;col-sm-10&quot;&gt;
&lt;input type=&quot;email&quot; class=&quot;form-control&quot; id=&quot;colFormLabel&quot; placeholder=&quot;col-form-label&quot;&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;row&quot;&gt;
&lt;label for=&quot;colFormLabelLg&quot; class=&quot;col-sm-2 col-form-label col-form-label-lg&quot;&gt;Email&lt;/label&gt;
&lt;div class=&quot;col-sm-10&quot;&gt;
&lt;input type=&quot;email&quot; class=&quot;form-control form-control-lg&quot; id=&quot;colFormLabelLg&quot; placeholder=&quot;col-form-label-lg&quot;&gt;
&lt;/div&gt;
&lt;/div&gt;
</pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="flFormsGrid" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Form grid</h4>
                        </div>                                                                        
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
                        </div>
                    </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>
                        <div class="code-section text-left">
                            <pre>
&lt;div class=&quot;row&quot;&gt;
&lt;div class=&quot;col&quot;&gt;
&lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;First name&quot; aria-label=&quot;First name&quot;&gt;
&lt;/div&gt;
&lt;div class=&quot;col&quot;&gt;
&lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Last name&quot; aria-label=&quot;Last name&quot;&gt;
&lt;/div&gt;
&lt;/div&gt;
</pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

    <div class="row">

        <div id="flLoginForm" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Gutters</h4>
                        </div>                                                                        
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <form class="row g-3">
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Email</label>
                            <input type="email" class="form-control" id="inputEmail4">
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Password</label>
                            <input type="password" class="form-control" id="inputPassword4">
                        </div>
                        <div class="col-12">
                            <label for="inputAddress" class="form-label">Address</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                        </div>
                        <div class="col-12">
                            <label for="inputAddress2" class="form-label">Address 2</label>
                            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                        </div>
                        <div class="col-md-6">
                            <label for="inputCity" class="form-label">City</label>
                            <input type="text" class="form-control" id="inputCity">
                        </div>
                        <div class="col-md-4">
                            <label for="inputState" class="form-label">State</label>
                            <select id="inputState" class="form-select">
                                <option selected>Choose...</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label for="inputZip" class="form-label">Zip</label>
                            <input type="text" class="form-control" id="inputZip">
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    Check me out
                                </label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Sign in</button>
                        </div>
                    </form>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>
                        <div class="code-section text-left">
                            <pre>
&lt;form class=&quot;row g-3&quot;&gt;
&lt;div class=&quot;col-md-6&quot;&gt;
&lt;label for=&quot;inputEmail4&quot; class=&quot;form-label&quot;&gt;Email&lt;/label&gt;
&lt;input type=&quot;email&quot; class=&quot;form-control&quot; id=&quot;inputEmail4&quot;&gt;
&lt;/div&gt;
&lt;div class=&quot;col-md-6&quot;&gt;
&lt;label for=&quot;inputPassword4&quot; class=&quot;form-label&quot;&gt;Password&lt;/label&gt;
&lt;input type=&quot;password&quot; class=&quot;form-control&quot; id=&quot;inputPassword4&quot;&gt;
&lt;/div&gt;
&lt;div class=&quot;col-12&quot;&gt;
&lt;label for=&quot;inputAddress&quot; class=&quot;form-label&quot;&gt;Address&lt;/label&gt;
&lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;inputAddress&quot; placeholder=&quot;1234 Main St&quot;&gt;
&lt;/div&gt;
&lt;div class=&quot;col-12&quot;&gt;
&lt;label for=&quot;inputAddress2&quot; class=&quot;form-label&quot;&gt;Address 2&lt;/label&gt;
&lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;inputAddress2&quot; placeholder=&quot;Apartment, studio, or floor&quot;&gt;
&lt;/div&gt;
&lt;div class=&quot;col-md-6&quot;&gt;
&lt;label for=&quot;inputCity&quot; class=&quot;form-label&quot;&gt;City&lt;/label&gt;
&lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;inputCity&quot;&gt;
&lt;/div&gt;
&lt;div class=&quot;col-md-4&quot;&gt;
&lt;label for=&quot;inputState&quot; class=&quot;form-label&quot;&gt;State&lt;/label&gt;
&lt;select id=&quot;inputState&quot; class=&quot;form-select&quot;&gt;
&lt;option selected&gt;Choose...&lt;/option&gt;
&lt;option&gt;...&lt;/option&gt;
&lt;/select&gt;
&lt;/div&gt;
&lt;div class=&quot;col-md-2&quot;&gt;
&lt;label for=&quot;inputZip&quot; class=&quot;form-label&quot;&gt;Zip&lt;/label&gt;
&lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;inputZip&quot;&gt;
&lt;/div&gt;
&lt;div class=&quot;col-12&quot;&gt;
&lt;div class=&quot;form-check&quot;&gt;
&lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; id=&quot;gridCheck&quot;&gt;
&lt;label class=&quot;form-check-label&quot; for=&quot;gridCheck&quot;&gt;
Check me out
&lt;/label&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;col-12&quot;&gt;
&lt;button type=&quot;submit&quot; class=&quot;btn btn-primary&quot;&gt;Sign in&lt;/button&gt;
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

        <div id="flAutoSizing" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">                                
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Column sizing</h4>
                        </div>                                                                        
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <div class="row g-3">
                        <div class="col-sm-7">
                          <input type="text" class="form-control" placeholder="City" aria-label="City">
                        </div>
                        <div class="col-sm">
                          <input type="text" class="form-control" placeholder="State" aria-label="State">
                        </div>
                        <div class="col-sm">
                          <input type="text" class="form-control" placeholder="Zip" aria-label="Zip">
                        </div>
                    </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>
                        <div class="code-section text-left">
                            <pre>
&lt;div class=&quot;row g-3&quot;&gt;
&lt;div class=&quot;col-sm-7&quot;&gt;
&lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;City&quot; aria-label=&quot;City&quot;&gt;
&lt;/div&gt;
&lt;div class=&quot;col-sm&quot;&gt;
&lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;State&quot; aria-label=&quot;State&quot;&gt;
&lt;/div&gt;
&lt;div class=&quot;col-sm&quot;&gt;
&lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Zip&quot; aria-label=&quot;Zip&quot;&gt;
&lt;/div&gt;
&lt;/div&gt;
</pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div id="flInlineForm" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Inline forms</h4>
                        </div>                                                                        
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <form class="row row-cols-lg-auto g-3 align-items-center">
                        <div class="col-12">
                            <label class="visually-hidden" for="inlineFormInputGroupUsername">Username</label>
                            <div class="input-group">
                                <div class="input-group-text">@</div>
                                <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Username">
                            </div>
                        </div>
                      
                        <div class="col-12">
                            <label class="visually-hidden" for="inlineFormSelectPref">Preference</label>
                            <select class="form-select" id="inlineFormSelectPref">
                                <option selected>Choose...</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                      
                        <div class="col-12">
                            <div class="form-check mb-0">
                                <input class="form-check-input" type="checkbox" id="inlineFormCheck">
                                <label class="form-check-label mb-0" for="inlineFormCheck">
                                Remember me
                                </label>
                            </div>
                        </div>
                      
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>
                        <div class="code-section text-left">
                            <pre>
&lt;form class=&quot;row row-cols-lg-auto g-3 align-items-center&quot;&gt;
&lt;div class=&quot;col-12&quot;&gt;
&lt;label class=&quot;visually-hidden&quot; for=&quot;inlineFormInputGroupUsername&quot;&gt;Username&lt;/label&gt;
&lt;div class=&quot;input-group&quot;&gt;
&lt;div class=&quot;input-group-text&quot;&gt;@&lt;/div&gt;
&lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;inlineFormInputGroupUsername&quot; placeholder=&quot;Username&quot;&gt;
&lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;col-12&quot;&gt;
&lt;label class=&quot;visually-hidden&quot; for=&quot;inlineFormSelectPref&quot;&gt;Preference&lt;/label&gt;
&lt;select class=&quot;form-select&quot; id=&quot;inlineFormSelectPref&quot;&gt;
&lt;option selected&gt;Choose...&lt;/option&gt;
&lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
&lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
&lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
&lt;/select&gt;
&lt;/div&gt;

&lt;div class=&quot;col-12&quot;&gt;
&lt;div class=&quot;form-check mb-0&quot;&gt;
&lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; id=&quot;inlineFormCheck&quot;&gt;
&lt;label class=&quot;form-check-label mb-0&quot; for=&quot;inlineFormCheck&quot;&gt;
Remember me
&lt;/label&gt;
&lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;col-12&quot;&gt;
&lt;button type=&quot;submit&quot; class=&quot;btn btn-primary&quot;&gt;Submit&lt;/button&gt;
&lt;/div&gt;
&lt;/form&gt;
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
</x-rtl.base-layout>