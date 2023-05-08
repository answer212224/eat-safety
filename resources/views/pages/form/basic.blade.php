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
                <li class="breadcrumb-item active" aria-current="page">Basic</li>
            </ol>
        </nav>
    </div>
    <!-- /BREADCRUMB -->

    <div id="navSection" data-bs-spy="affix" class="nav  sidenav">
        <div class="sidenav-content">
            <a href="#basic" class="active nav-link">Basic</a>
            <a href="#form_grid_layouts" class="nav-link">Form Grid Layouts</a>
            <a href="#helper_text" class="nav-link">Helper Text</a>
            <a href="#form_sizing" class="nav-link">Sizing</a>
            <a href="#readonly_input" class="nav-link">Readonly Input</a>
            <a href="#html_custom_file_upload" class="nav-link">HTML Custom File Upload</a>
            <a href="#disabled_form" class="nav-link">Disabled Fields</a>
            <a href="#custom_bs_forms" class="nav-link">Custom Bootstrap Forms</a>
        </div>
    </div>
    
    <div class="row layout-top-spacing">
    
        <div id="basic" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Input Text</h4>
                        </div>                 
                    </div>
                </div>
                <div class="widget-content widget-content-area">

                    <div class="row">
                        <div class="col-lg-6 col-12 ">
                            <form method="post">
                                <div class="form-group">
                                    <p>Use input <code>type="text"</code>.</p>
                                    <label for="t-text" class="visually-hidden">Text</label>
                                    <input id="t-text" type="text" name="txt" placeholder="Some Text..." class="form-control" required>
                                    <input type="submit" name="txt" class="mt-4 btn btn-primary">
                                </div>
                            </form>
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
                            <h4>Input Password</h4>
                        </div>                 
                    </div>
                </div>
                <div class="widget-content widget-content-area">

                    <div class="row">
                        <div class="col-lg-6 col-12 ">
                            <form method="post">
                                <div class="form-group">
                                    <p>Use input <code>type="password"</code>.</p>
                                    <label for="p-text" class="visually-hidden">Password</label>
                                    <input id="p-text" type="password" name="pass" placeholder="Password" class="form-control" required>
                                    <input type="submit" name="pass" class="mt-4 btn btn-primary">
                                </div>
                            </form>
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
                            <h4>Input Email</h4>
                        </div>                 
                    </div>
                </div>
                <div class="widget-content widget-content-area">

                    <div class="row">

                        <div class="col-lg-6 col-12 ">
                            <form method="post">
                                <div class="form-group">
                                    <p>Use input <code>type="email"</code>.</p>
                                    <label for="e-text" class="visually-hidden">Email</label>
                                    <input id="e-text" type="email" name="email" placeholder="email@mail.com" class="form-control" required>
                                    <input type="submit" name="email" class="mt-4 btn btn-primary">
                                </div>
                            </form>
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
                            <h4>Input Url</h4>
                        </div>                 
                    </div>
                </div>
                <div class="widget-content widget-content-area">

                    <div class="row">
                        
                        <div class="col-lg-6 col-12">
                            <form method="post">
                                <div class="form-group">
                                    <p>Use input <code>type="url"</code>.</p>
                                    <label for="url-text" class="visually-hidden">Url</label>
                                    <input id="url-text" type="url" name="url" placeholder="https://dummyurl.com" class="form-control" required>
                                    <input type="submit" name="url" class="mt-4 btn btn-primary">
                                </div>
                            </form>
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
                            <h4>Input Telephone</h4>
                        </div>                 
                    </div>
                </div>
                <div class="widget-content widget-content-area">

                    <div class="row">
                        
                        <div class="col-lg-6 col-12">
                            <form method="post">
                                <div class="form-group">
                                    <p>Use input <code>type="tel"</code>.</p>
                                    <label for="tel-text" class="visually-hidden">Telephone</label>
                                    <input id="tel-text" type="tel" name="tel" placeholder="6-(666)-111-7777" class="form-control" required>
                                    <input type="submit" name="tel" class="mt-4 btn btn-primary">
                                </div>
                            </form>
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
                            <h4>Input Search</h4>
                        </div>                 
                    </div>
                </div>
                <div class="widget-content widget-content-area">

                    <div class="row">
                        
                        <div class="col-lg-6 col-12">
                            <form method="post">
                                <div class="form-group">
                                    <p>Use input <code>type="search"</code>.</p>
                                    <label for="search-text" class="visually-hidden">Search</label>
                                    <input id="search-text" type="search" class="form-control" required>
                                    <input type="submit" name="search" class="mt-4 btn btn-primary">
                                </div>
                            </form>
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
                            <h4>Input Range</h4>
                        </div>                 
                    </div>
                </div>
                <div class="widget-content widget-content-area">

                    <div class="row">
                        
                        <div class="col-lg-6 col-12">
                            <form method="post">
                                <div class="form-group">
                                    <p>Use input <code>type="range"</code>.</p>

                                    <label for="customRange1" class="form-label visually-hidden">Example range</label>
                                    <input type="range" class="form-range" id="customRange1">
                                </div>
                            </form>
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
                            <h4>Input With Label</h4>
                        </div>                 
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Full Name</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" value="Alan Green">
                            </div>
                        </div>
                    </div>

                    <div class="code-section-container show-code">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;div class="form-group"&gt;
&lt;label for="exampleFormControlInput1"&gt;Full Name&lt;/label&gt;
&lt;input type="text" class="form-control" id="exampleFormControlInput1" value="Alan Green"&gt;
&lt;/div&gt; </pre>
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
                            <h4>Form controls</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <form>
                        <div class="form-group mb-4">
                            <label for="exampleFormControlInput2">Email address</label>
                            <input type="email" class="form-control" id="exampleFormControlInput2" placeholder="name@example.com">
                        </div>
                        <div class="form-group mb-4">
                            <label for="exampleFormControlSelect1">Example select</label>
                            <select class="form-select" id="exampleFormControlSelect1">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div class="form-group mb-4">
                            <label for="exampleFormControlSelect2">Example multiple select</label>
                            <select multiple class="form-control" id="exampleFormControlSelect2">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div class="form-group mb-4">
                            <label for="exampleFormControlTextarea1">Example textarea</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="form-group mb-4 mt-3">
                            <label for="exampleFormControlFile1">Example file input</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                        <input type="submit" name="time" class="mt-4 mb-4 btn btn-primary">
                    </form>
                </div>
            </div>
        </div>

    </div>

    <div class="row">

        <div id="form_grid_layouts" class="col-lg-12">
            <div class="seperator-header">
                <h4 class="">Form Grid Layouts</h4>
            </div>
        </div>

        <div class="col-lg-12 col-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">                                
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Form grid</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                   <form>
                        <div class="row mb-4">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="First name">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Last name">
                            </div>
                        </div>
                        <input type="submit" name="time" class="btn btn-primary">
                    </form>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>
                        <div class="code-section text-left">
                            <pre>
&lt;form&gt;
&lt;div class="row mb-4"&gt;
&lt;div class="col"&gt;
&lt;input type="text" class="form-control" placeholder="First name"&gt;
&lt;/div&gt;
&lt;div class="col"&gt;
&lt;input type="text" class="form-control" placeholder="Last name"&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;input type="submit" name="time" class="btn btn-primary"&gt;
&lt;/form&gt;
</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-lg-12 col-12  layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">                                
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Form groups</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <form>
                        <div class="form-group mb-4">
                            <label for="formGroupExampleInput">Example label</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                        </div>
                        <div class="form-group mb-4">
                            <label for="formGroupExampleInput2">Another label</label>
                            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
                        </div>
                        <input type="submit" name="time" class="btn btn-primary">
                    </form>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;form&gt;
&lt;div class="form-group mb-4"&gt;
&lt;label for="formGroupExampleInput"&gt;Example label&lt;/label&gt;
&lt;input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input"&gt;
&lt;/div&gt;
&lt;div class="form-group mb-4"&gt;
&lt;label for="formGroupExampleInput2"&gt;Another label&lt;/label&gt;
&lt;input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input"&gt;
&lt;/div&gt;
&lt;input type="submit" name="time" class="btn btn-primary"&gt;
&lt;/form&gt;
</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-lg-12 col-12  layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">                                
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Column sizing</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                   <form>
                        <div class="row mb-4">
                            <div class="col-7">
                                <input type="text" class="form-control" placeholder="City">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="State">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Zip">
                            </div>
                        </div>
                        <input type="submit" name="time" class="btn btn-primary">
                    </form>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;form&gt;
&lt;div class="row mb-4"&gt;
&lt;div class="col-7"&gt;
&lt;input type="text" class="form-control" placeholder="City"&gt;
&lt;/div&gt;
&lt;div class="col"&gt;
&lt;input type="text" class="form-control" placeholder="State"&gt;
&lt;/div&gt;
&lt;div class="col"&gt;
&lt;input type="text" class="form-control" placeholder="Zip"&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;input type="submit" name="time" class="mb-4 btn btn-primary"&gt;
&lt;/form&gt;
</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <div class="row">

        <div id="helper_text" class="col-lg-12">
            <div class="seperator-header">
                <h4 class="">Helper Text</h4>
            </div>
        </div>

        <div class="col-xl-12 col-lg-12 col-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Input with help text ( Default Left)</h4>
                        </div>                      
                    </div>
                </div>
                <div class="widget-content widget-content-area">

                    <div class="row">
                        <div class="col-xl-7">
                            <div class="form-group">
                                <p>Use <code>small</code> tag and <code>.text-muted</code> for helper text. </p>
                                <label for="h-text1" class="visually-hidden">Email address</label>
                                <input type="text" class="form-control" id="h-text1" aria-describedby="h-text1" placeholder="">
                                <small id="sh-text1" class="form-text text-muted">I am the helper text.</small>
                            </div>
                        </div>
                    </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;div class="form-group"&gt;
&lt;p&gt;Use &lt;code&gt;small&lt;/code&gt; tag and &lt;code&gt;.text-muted&lt;/code&gt; for helper text. &lt;/p&gt;
&lt;label for="h-text1" class="visually-hidden"&gt;Email address&lt;/label&gt;
&lt;input type="text" class="form-control" id="h-text1" aria-describedby="h-text1" placeholder=""&gt;
&lt;small id="sh-text1" class="form-text text-muted"&gt;I am the helper text.&lt;/small&gt;
&lt;/div&gt;</pre>
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
                            <h4>Input with badge help text (Default Left)</h4>
                        </div>                      
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <div class="row">
                        <div class="col-xl-7">
                            <div class="form-group">
                                <p>Wrap the <code>small</code> tag inside the <code>span</code> tag with  <code>.badge</code></p>
                                <label for="h-text4" class="visually-hidden">Email address</label>
                                <input type="text" class="form-control" id="h-text4" aria-describedby="h-text4" placeholder="">
                                <div class=" mt-1">
                                    <span class="badge badge-primary">
                                        <small id="sh-text4" class="form-text mt-0">I am the helper text.</small>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;div class="form-group"&gt;
&lt;p&gt;Wrap the &lt;code&gt;small&lt;/code&gt; tag inside the &lt;code&gt;span&lt;/code&gt; tag with  &lt;code&gt;.badge&lt;/code&gt;&lt;/p&gt;
&lt;label for="h-text4" class="visually-hidden"&gt;Email address&lt;/label&gt;
&lt;input type="text" class="form-control" id="h-text4" aria-describedby="h-text4" placeholder=""&gt;
&lt;div class=" mt-1"&gt;
&lt;span class="badge badge-primary"&gt;
&lt;small id="sh-text4" class="form-text mt-0"&gt;I am the helper text.&lt;/small&gt;
&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;</pre>
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
                            <h4>Input with block badge help text (Default Left)</h4>
                        </div>                      
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <div class="row">
                        <div class="col-xl-7">
                            <div class="form-group">
                                <p>Use <code>.w-100</code> class to the <code>span</code> tag to make block.</p>
                                <label for="h-text7" class="visually-hidden">Email address</label>
                                <input type="text" class="form-control" id="h-text7" aria-describedby="h-text7" placeholder="">
                                <div class="mt-1">
                                    <span class="badge badge-primary w-100">
                                        <small id="sh-text7" class="form-text mt-0 text-left">I am the helper text.</small>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                        <pre>
&lt;div class="form-group"&gt;
&lt;p&gt;Use &lt;code&gt;.w-100&lt;/code&gt; class to the &lt;code&gt;span&lt;/code&gt; tag to make block.&lt;/p&gt;
&lt;label for="h-text7" class="visually-hidden"&gt;Email address&lt;/label&gt;
&lt;input type="text" class="form-control" id="h-text7" aria-describedby="h-text7" placeholder=""&gt;
&lt;div class="mt-1"&gt;
&lt;span class="badge badge-primary w-100"&gt;
&lt;small id="sh-text7" class="form-text mt-0 text-left"&gt;I am the helper text.&lt;/small&gt;
&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-lg-12 col-12  layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">                                
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Inline Help text</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <form class="form-inline mb-4">
                        <div class="form-group  d-block text-left">
                            <label for="inputPassword6" class="d-block">Password</label>
                            <input type="password" id="inputPassword6" class=" form-control mt-2" aria-describedby="passwordHelpInline">
                            <small id="passwordHelpInline" class="text-muted">
                                I am the helper text.
                            </small>
                        </div>
                    </form>
                    <input type="submit" name="time" class="btn btn-primary">

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;form class="form-inline mb-4"&gt;
&lt;div class="form-group  d-block text-left"&gt;
&lt;label for="inputPassword6" class="d-block"&gt;Password&lt;/label&gt;
&lt;input type="password" id="inputPassword6" class=" form-control mt-2" aria-describedby="passwordHelpInline"&gt;
&lt;small id="passwordHelpInline" class="text-muted"&gt;
I am the helper text.
&lt;/small&gt;
&lt;/div&gt;
&lt;/form&gt;
&lt;input type="submit" name="time" class="btn btn-primary"&gt;
</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <div class="row">

        <div id="form_sizing" class="col-lg-12">
            <div class="seperator-header">
                <h4 class="">Sizing</h4>
            </div>
        </div>

        <div class="col-lg-12 col-12  layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">                                
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Input Fields</h4>
                        </div>     
                    </div>
                </div>
                <div class="widget-content widget-content-area">

                    <div class="row">
                        
                        <div class="col-xl-4">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Large Input</label>
                                <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg">
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Default Input</label>
                                <input class="form-control" type="text" placeholder="Default input">
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Small Input</label>
                                <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm">
                            </div>
                        </div>

                    </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;!-- Large Input --&gt;
&lt;div class="form-group"&gt;
&lt;label for="exampleFormControlInput1"&gt;Large Input&lt;/label&gt;
&lt;input class="form-control form-control-lg" type="text" placeholder=".form-control-lg"&gt;
&lt;/div&gt;

&lt;!-- Default Input --&gt;
&lt;div class="form-group"&gt;
&lt;label for="exampleFormControlInput1"&gt;Default Input&lt;/label&gt;
&lt;input class="form-control" type="text" placeholder="Default input"&gt;
&lt;/div&gt;

&lt;!-- Small Input --&gt;
&lt;div class="form-group"&gt;
&lt;label for="exampleFormControlInput1"&gt;Small Input&lt;/label&gt;
&lt;input class="form-control form-control-sm" type="text" placeholder=".form-control-sm"&gt;
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
                            <h4>Select Field</h4>
                        </div>     
                    </div>
                </div>
                <div class="widget-content widget-content-area">

                    <div class="row">
                        
                        <div class="col-xl-4 mb-xl-0 mb-2">
                            <select class="form-select  form-select-lg">
                                <option>Large select</option>
                                <option>One</option>
                                <option>Two</option>
                                <option>Three</option>
                            </select>
                        </div>
                        <div class="col-xl-4 mb-xl-0 mb-2">
                            <select class="form-select ">
                                <option>Default select</option>
                                <option>One</option>
                                <option>Two</option>
                                <option>Three</option>
                            </select>
                        </div>
                        <div class="col-xl-4 mb-xl-0 mb-2">
                            <select class="form-select  form-select-sm">
                                <option>Small select</option>
                                <option>One</option>
                                <option>Two</option>
                                <option>Three</option>
                            </select>
                        </div>

                    </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;!-- Large Input --&gt;
&lt;select class="form-control form-control-lg"&gt;
&lt;option&gt;Large select&lt;/option&gt;
&lt;option&gt;One&lt;/option&gt;
&lt;option&gt;Two&lt;/option&gt;
&lt;option&gt;Three&lt;/option&gt;
&lt;/select&gt;

&lt;!-- Default Input --&gt;
&lt;select class="form-control"&gt;
&lt;option&gt;Default select&lt;/option&gt;
&lt;option&gt;One&lt;/option&gt;
&lt;option&gt;Two&lt;/option&gt;
&lt;option&gt;Three&lt;/option&gt;
&lt;/select&gt;

&lt;!-- Small Input --&gt;
&lt;select class="form-control form-control-sm"&gt;
&lt;option&gt;Small select&lt;/option&gt;
&lt;option&gt;One&lt;/option&gt;
&lt;option&gt;Two&lt;/option&gt;
&lt;option&gt;Three&lt;/option&gt;
&lt;/select&gt;
</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-lg-12 col-12  layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">                                
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Horizontal form label sizing</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <form>
                        <div class="form-group row  mb-4">
                            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control form-control-sm" id="colFormLabelSm" placeholder="col-form-label-sm">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="colFormLabel" placeholder="col-form-label">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control form-control-lg" id="colFormLabelLg" placeholder="col-form-label-lg">
                            </div>
                        </div>
                    </form>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;div class="form-group row  mb-4"&gt;
&lt;label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm"&gt;Email&lt;/label&gt;
&lt;div class="col-sm-10"&gt;
&lt;input type="email" class="form-control form-control-sm" id="colFormLabelSm" placeholder="col-form-label-sm"&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="form-group row mb-4"&gt;
&lt;label for="colFormLabel" class="col-sm-2 col-form-label"&gt;Email&lt;/label&gt;
&lt;div class="col-sm-10"&gt;
&lt;input type="email" class="form-control" id="colFormLabel" placeholder="col-form-label"&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="form-group row mb-4"&gt;
&lt;label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg"&gt;Email&lt;/label&gt;
&lt;div class="col-sm-10"&gt;
&lt;input type="email" class="form-control form-control-lg" id="colFormLabelLg" placeholder="col-form-label-lg"&gt;
&lt;/div&gt;
&lt;/div&gt;
</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="readonly_input" class="col-lg-12">
            <div class="seperator-header">
                <h4 class="">Readonly</h4>
            </div>
        </div>

        <div class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">                                
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Input Readonly</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                   <input class="form-control" type="text" placeholder="Readonly input here…" readonly>

                   <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>
                       <div class="code-section text-left">
                            <pre>
&lt;input class="form-control" type="text" placeholder="Readonly input here…" readonly&gt;
</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="html_custom_file_upload" class="col-lg-12">
            <div class="seperator-header">
                <h4 class="">HTML Custom File Upload</h4>
            </div>
        </div>

        <div class="col-lg-12 col-12  layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">                                
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>File Upload</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">

                    <div class="mb-3">
                        <input class="form-control file-upload-input" type="file" id="formFile">
                    </div>
                    
                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;div class=&quot;mb-3&quot;&gt;
&lt;input class=&quot;form-control file-upload-input&quot; type=&quot;file&quot; id=&quot;formFile&quot;&gt;
&lt;/div&gt;
</pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="disabled_form" class="col-lg-12">
            <div class="seperator-header">
                <h4 class="">Disabled</h4>
            </div>
        </div>

        <div class="col-lg-12 col-12  layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">                                
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Disabled Fields</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <form>
                        <fieldset disabled>
                            <div class="form-group mb-4">
                                <label for="disabledTextInput">Disabled input</label>
                                <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">
                            </div>
                            <div class="form-group mb-4">
                                <label for="disabledSelect">Disabled select menu</label>
                                <select id="disabledSelect" class="form-control">
                                    <option>Disabled select</option>
                                </select>
                            </div>
                            <div class="form-group mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Can't check this
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mt-0">Submit</button>
                        </fieldset>
                    </form>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;form&gt;
&lt;fieldset disabled&gt;
&lt;div class="form-group mb-4"&gt;
&lt;label for="disabledTextInput"&gt;Disabled input&lt;/label&gt;
&lt;input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input"&gt;
&lt;/div&gt;
&lt;div class="form-group mb-4"&gt;
&lt;label for="disabledSelect"&gt;Disabled select menu&lt;/label&gt;
&lt;select id="disabledSelect" class="form-control"&gt;
&lt;option&gt;Disabled select&lt;/option&gt;
&lt;/select&gt;
&lt;/div&gt;
&lt;div class=&quot;form-group mb-4&quot;&gt;
&lt;div class=&quot;form-check&quot;&gt;
&lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;flexCheckDefault&quot;&gt;
&lt;label class=&quot;form-check-label&quot; for=&quot;flexCheckDefault&quot;&gt;
    Can't check this
&lt;/label&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;button type="submit" class="btn btn-primary mt-0"&gt;Submit&lt;/button&gt;
&lt;/fieldset&gt;
&lt;/form&gt;
</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <div class="row layout-spacing">

        <div id="custom_bs_forms" class="col-lg-12">
            <div class="seperator-header">
                <h4 class="">Custom</h4>
            </div>
        </div>

        <div class="col-lg-12 col-12  layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">                                
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Checkboxes</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="customCheck1">
                        <label class="form-check-label" for="customCheck1">Check this custom checkbox</label>
                    </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;div class=&quot;form-check&quot;&gt;
&lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;customCheck1&quot;&gt;
&lt;label class=&quot;form-check-label&quot; for=&quot;customCheck1&quot;&gt;Check this custom checkbox&lt;/label&gt;
&lt;/div&gt;
</pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12 col-12  layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">                                
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Inline radio</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                          Default radio
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                          Default checked radio
                        </label>
                    </div>
                    
                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;div class="custom-control custom-radio custom-control-inline"&gt;
    &lt;input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input"&gt;
    &lt;label class="custom-control-label" for="customRadioInline1"&gt;Toggle this custom radio&lt;/label&gt;
&lt;/div&gt;
&lt;div class="custom-control custom-radio custom-control-inline"&gt;
    &lt;input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input"&gt;
    &lt;label class="custom-control-label" for="customRadioInline2"&gt;Toggle this custom radio&lt;/label&gt;
&lt;/div&gt;
</pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12 col-12  layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">                                
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Radio</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio1">
                        <label class="form-check-label" for="customRadio1">
                            Toggle this custom radio
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio2">
                        <label class="form-check-label" for="customRadio2">
                            Or toggle this other custom radio
                        </label>
                    </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;div class="custom-control custom-radio"&gt;
    &lt;input type="radio" id="customRadio1" name="customRadio" class="custom-control-input"&gt;
    &lt;label class="custom-control-label" for="customRadio1"&gt;Toggle this custom radio&lt;/label&gt;
&lt;/div&gt;
&lt;div class="custom-control custom-radio"&gt;
    &lt;input type="radio" id="customRadio2" name="customRadio" class="custom-control-input"&gt;
    &lt;label class="custom-control-label" for="customRadio2"&gt;Or toggle this other custom radio&lt;/label&gt;
&lt;/div&gt;
</pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12 col-12  layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">                                
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Disabled</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" disabled>
                        <label class="form-check-label" for="inlineCheckbox3">Check this custom checkbox</label>
                      </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" disabled>
                        <label class="form-check-label" for="inlineRadio3">Toggle this custom radio</label>
                    </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>
                        <div class="code-section text-left">
                            <pre>
&lt;div class="custom-control custom-checkbox mb-3"&gt;
    &lt;input type="checkbox" class="custom-control-input" id="customCheckDisabled" disabled&gt;
    &lt;label class="custom-control-label" for="customCheckDisabled"&gt;Check this custom checkbox&lt;/label&gt;
&lt;/div&gt;

&lt;div class="custom-control custom-radio mb-4"&gt;
    &lt;input type="radio" id="radio3" name="radioDisabled" class="custom-control-input" disabled&gt;
    &lt;label class="custom-control-label" for="radio3"&gt;Toggle this custom radio&lt;/label&gt;
&lt;/div&gt;
</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-lg-12 col-12  layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">                                
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Select menu</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <select class="form-select form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>
                        <div class="code-section text-left">
                            <pre>
&lt;select class=&quot;form-select&quot; aria-label=&quot;Default select example&quot;&gt;
    &lt;option selected&gt;Open this select menu&lt;/option&gt;
    &lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
    &lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
    &lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
&lt;/select&gt;
</pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12 col-12  layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">                                
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Select menu sizing</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <select class="form-select form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                      
                    <select class="form-select form-select form-select-sm" aria-label=".form-select-sm example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>
                        <div class="code-section text-left">
                            <pre>
&lt;select class=&quot;form-select form-select-lg mb-3&quot; aria-label=&quot;.form-select-lg example&quot;&gt;
    &lt;option selected&gt;Open this select menu&lt;/option&gt;
    &lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
    &lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
    &lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
&lt;/select&gt;

&lt;select class=&quot;form-select form-select-sm&quot; aria-label=&quot;.form-select-sm example&quot;&gt;
    &lt;option selected&gt;Open this select menu&lt;/option&gt;
    &lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
    &lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
    &lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
&lt;/select&gt;
</pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12 col-12  layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">                                
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Multi select</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <select class="form-select form-select" multiple aria-label="multiple select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>
                        <div class="code-section text-left">
                            <pre>
&lt;select class=&quot;form-select&quot; multiple aria-label=&quot;multiple select example&quot;&gt;
    &lt;option selected&gt;Open this select menu&lt;/option&gt;
    &lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
    &lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
    &lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
&lt;/select&gt;
</pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12 col-12  layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">                                
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Select size</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <select class="form-select form-select" size="3" aria-label="size 3 select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;select class=&quot;form-select&quot; size=&quot;3&quot; aria-label=&quot;size 3 select example&quot;&gt;
    &lt;option selected&gt;Open this select menu&lt;/option&gt;
    &lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
    &lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
    &lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
&lt;/select&gt;
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