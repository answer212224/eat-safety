<x-base-layout :scrollspy="true">

    <x-slot:pageTitle>
        {{$title}} 
    </x-slot>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <x-slot:headerFiles>
        <!--  BEGIN CUSTOM STYLE FILE  -->
        @vite(['resources/scss/light/plugins/clipboard/custom-clipboard.scss'])
        @vite(['resources/scss/dark/plugins/clipboard/custom-clipboard.scss'])
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
                <li class="breadcrumb-item active" aria-current="page">Clipboard</li>
            </ol>
        </nav>
    </div>
    <!-- /BREADCRUMB -->

    <div id="navSection" data-bs-spy="affix" class="nav  sidenav">
        <div class="sidenav-content">
            <a href="#fclBasic" class="active nav-link">Basic</a>
            <a href="#fclCopyFromInput" class="nav-link">Copy From Input</a>
            <a href="#fclCopyFromTextarea" class="nav-link">Copy From Textarea</a>
        </div>
    </div>
    
    <div class="row layout-top-spacing">

        <div id="fclBasic" class="col-lg-12 layout-spacing"> 
            <div class="statbox widget box box-shadow">
                <div class="widget-header">                                 
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Basic</h4> 
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area clipboard-copy-input">

                    <p class="">The global Code for all the clipboards is <code>new ClipboardJS('.jsclipboard');</code></p>


                    <div class="clipboard">
                        <form class="form-horizontal">
                            <div class="clipboard-input">
                                <input type="text" class="form-control" id="copy-basic-input" value="http://www.admin-dashboard.com">
                                <div class="copy-icon jsclipboard cbBasic" data-bs-trigger="click" title="Copied" data-clipboard-target="#copy-basic-input"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg></div>
                            </div>
                        </form>
                    </div>

                    <div class="code-section-container show-code">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;div class="clipboard"&gt;
&lt;form class="form-horizontal"&gt;
&lt;input type="text" class="form-control mb-4" id="input-copy" value="http://www.admin-dashboard.com"&gt;
&lt;a class="mb-1 btn btn-primary" href="javascript:;" data-clipboard-action="copy" data-clipboard-target="#input-copy"&gt;&lt;svg&gt; ... &lt;/svg&gt; Copy from Input&lt;/a&gt;
&lt;a class="mb-1 btn btn-dark" href="javascript:;" data-clipboard-action="cut" data-clipboard-target="#input-copy"&gt;&lt;svg&gt; ... &lt;/svg&gt; Cut from Input&lt;/a&gt;
&lt;/form&gt;
&lt;/div&gt;
</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        
        <div id="fclCopyFromInput" class="col-lg-12 layout-spacing"> 
            <div class="statbox widget box box-shadow">
                <div class="widget-header">                                 
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Copy from input</h4> 
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area clipboard-copy-input">

                    <div class="clipboard">
                        <form class="form-horizontal">
                            <input type="text" class="form-control mb-4" id="input-copy" value="http://www.admin-dashboard.com">
                            <a class="mb-1 btn btn-primary jsclipboard" href="javascript:;" data-clipboard-action="copy" data-clipboard-target="#input-copy"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg> Copy from Input</a>
                            <a class="mb-1 btn btn-dark jsclipboard" href="javascript:;" data-clipboard-action="cut" data-clipboard-target="#input-copy"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg> Cut from Input</a>
                        </form>
                    </div>

                    <div class="code-section-container show-code">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;div class="clipboard"&gt;
&lt;form class="form-horizontal"&gt;
&lt;input type="text" class="form-control mb-4" id="input-copy" value="http://www.admin-dashboard.com"&gt;
&lt;a class="mb-1 btn btn-primary" href="javascript:;" data-clipboard-action="copy" data-clipboard-target="#input-copy"&gt;&lt;svg&gt; ... &lt;/svg&gt; Copy from Input&lt;/a&gt;
&lt;a class="mb-1 btn btn-dark" href="javascript:;" data-clipboard-action="cut" data-clipboard-target="#input-copy"&gt;&lt;svg&gt; ... &lt;/svg&gt; Cut from Input&lt;/a&gt;
&lt;/form&gt;
&lt;/div&gt;
</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="fclCopyFromTextarea" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">                                
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Copy from Text Area</h4> 
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area clipboard-copy-textarea">
                    <div class="clipboard">
                        <form class="form-horizontal">
                            <textarea class="form-control mb-4" rows="3" id="textarea-copy">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</textarea>
                            <a class="mb-1 btn btn-primary jsclipboard" href="javascript:;" data-clipboard-action="copy" data-clipboard-target="#textarea-copy"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg> Copy from Input</a>
                            <a class="mb-1 btn btn-dark jsclipboard" href="javascript:;" data-clipboard-action="cut" data-clipboard-target="#textarea-copy"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg> Cut from Input</a>
                        </form>
                    </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;div class="clipboard"&gt;
&lt;form class="form-horizontal"&gt;
&lt;textarea class="form-control mb-4" rows="3" id="textarea-copy"&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit...&lt;/textarea&gt;
&lt;a class="mb-1 btn btn-primary" href="javascript:;" data-clipboard-action="copy" data-clipboard-target="#textarea-copy"&gt;&lt;svg&gt; ... &lt;/svg&gt; Copy from Input&lt;/a&gt;
&lt;a class="mb-1 btn btn-dark" href="javascript:;" data-clipboard-action="cut" data-clipboard-target="#textarea-copy"&gt;&lt;svg&gt; ... &lt;/svg&gt; Cut from Input&lt;/a&gt;
&lt;/form&gt;
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
        <script src="{{asset('plugins/clipboard/clipboard.min.js')}}"></script>
        <script type="module" src="{{asset('plugins/clipboard/custom-clipboard.min.js')}}"></script>
    </x-slot>
    <!--  END CUSTOM SCRIPTS FILE  -->
</x-base-layout>