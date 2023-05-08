<x-rtl.base-layout :scrollspy="true">

    <x-slot:pageTitle>
        {{$title}} 
    </x-slot>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <x-slot:headerFiles>
        <!--  BEGIN CUSTOM STYLE FILE  -->
        @vite(['resources/rtl/scss/light/assets/elements/custom-tree_view.scss', 'resources/scss/dark/assets/elements/custom-tree_view.scss'])
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
                <li class="breadcrumb-item active" aria-current="page">TreeView</li>
            </ol>
        </nav>
    </div>
    <!-- /BREADCRUMB -->

    <div id="navSection" data-bs-spy="affix" class="nav sidenav">
        <div class="sidenav-content">
            <a href="#treeviewBasic" class="nav-link">Basic</a>
            <a href="#treeviewFStructure" class="active nav-link">Folder Structure</a>
        </div>
    </div>

    <div class="row layout-top-spacing">

        <div id="treeviewBasic" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Basic</h4>
                        </div>
                    </div>
                </div>                            
                <div class="widget-content widget-content-area">
                    <ul class="treeview" id="treeviewBasicEx">
                        <li class="tv-item">
                            <div class="tv-header" id="main">
                                <div class="tv-collapsible" data-bs-toggle="collapse" data-bs-target="#mainCollapse" aria-expanded="true" aria-controls="mainCollapse">
                                    <div class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <polyline points="9 6 15 12 9 18"></polyline>
                                        </svg>
                                    </div>
                                    <p class="title">Main</p>
                                </div>
                            </div>
                            <div id="mainCollapse" class="treeview-collapse collapse show" aria-labelledby="main" data-bs-parent="#treeviewBasicEx">

                                <ul class="treeview" id="treeviewBasicMainChild">
                                    <li class="tv-item tv-folder">
                                        <div class="tv-header" id="mainChildHeadingOne">
                                            <div class="tv-collapsible" data-bs-toggle="collapse" data-bs-target="#mainChildOne" aria-expanded="true" aria-controls="mainChildOne">
                                                <div class="icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <polyline points="9 6 15 12 9 18"></polyline>
                                                    </svg>
                                                </div>
                                                <p class="title">CSS</p>
                                            </div>
                                        </div>
                                        <div id="mainChildOne" class="treeview-collapse collapse show" aria-labelledby="mainChildHeadingOne" data-bs-parent="#treeviewBasicMainChild">

                                            <ul class="treeview" id="treeviewBasicCSSChild">
                                                <li class="tv-item tv-folder">
                                                    <div class="tv-header" id="cssChildHeadingOne">
                                                        <div class="tv-collapsible collapsed" data-bs-toggle="collapse" data-bs-target="#cssChildOne" aria-expanded="false" aria-controls="cssChildOne">
                                                            <div class="icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                                    <polyline points="9 6 15 12 9 18"></polyline>
                                                                </svg>
                                                            </div>
                                                            <p class="title">Modules</p>
                                                        </div>
                                                    </div>
                                                    <div id="cssChildOne" class="treeview-collapse collapse" aria-labelledby="cssChildHeadingOne" data-bs-parent="#treeviewBasicCSSChild">
                                                        <ul class="treeview" id="treeviewBasicModulesChild">
                                                            <li class="tv-item"><p>style.module.css</p></li>
                                                        </ul>
                                                    </div>
                                                </li>

                                                <li class="tv-item"><p>style.css</p></li>
                                            </ul>
                                            
                                        </div>
                                    </li>

                                    <li class="tv-item tv-folder">
                                        <div class="tv-header" id="mainChildHeadingTwo">
                                            <div class="tv-collapsible collapsed" data-bs-toggle="collapse" data-bs-target="#mainChildTwo" aria-expanded="false" aria-controls="mainChildTwo">
                                                <div class="icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <polyline points="9 6 15 12 9 18"></polyline>
                                                    </svg>
                                                </div>
                                                <p class="title">JS</p>
                                            </div>
                                        </div>
                                        <div id="mainChildTwo" class="treeview-collapse collapse" aria-labelledby="mainChildHeadingTwo" data-bs-parent="#treeviewBasicMainChild">

                                            <ul class="treeview" id="treeviewBasicJSChild">
                                                <li class="tv-item"><p>script.js</p></li>
                                            </ul>
                                            
                                        </div>
                                    </li>

                                    <li class="tv-item tv-folder">
                                        <div class="tv-header" id="mainChildHeadingThree">
                                            <div class="tv-collapsible collapsed" data-bs-toggle="collapse" data-bs-target="#mainChildThree" aria-expanded="false" aria-controls="mainChildThree">
                                                <div class="icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <polyline points="9 6 15 12 9 18"></polyline>
                                                    </svg>
                                                </div>
                                                <p class="title">image</p>
                                            </div>
                                        </div>
                                        <div id="mainChildThree" class="treeview-collapse collapse" aria-labelledby="mainChildHeadingThree" data-bs-parent="#treeviewBasicMainChild">
                                            <ul class="treeview" id="treeviewBasicImgChild">
                                                <li class="tv-item"><p>profile.jpeg</p></li>
                                                <li class="tv-item"><p>background.png</p></li>
                                                <li class="tv-item"><p>arrow.svg</p></li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li class="tv-item"><p>index.html</p></li>
                                </ul>

                            </div>
                        </li>

                    </ul>

                    <div class="code-section-container show-code">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                       <div class="code-section text-left">
                            <pre>
&lt;ul class=&quot;treeview&quot; id=&quot;treeviewBasicMainChild&quot;&gt;
&lt;li class=&quot;tv-item tv-folder&quot;&gt;
&lt;div class=&quot;tv-header&quot; id=&quot;mainChildHeadingOne&quot;&gt;
&lt;div class=&quot;tv-collapsible&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#mainChildOne&quot; aria-expanded=&quot;true&quot; aria-controls=&quot;mainChildOne&quot;&gt;
&lt;div class=&quot;icon&quot;&gt;
    &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; class=&quot;icon icon-tabler icon-tabler-chevron-right&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; stroke-width=&quot;2&quot; stroke=&quot;currentColor&quot; fill=&quot;none&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot;&gt;
        &lt;path stroke=&quot;none&quot; d=&quot;M0 0h24v24H0z&quot; fill=&quot;none&quot;&gt;&lt;/path&gt;
        &lt;polyline points=&quot;9 6 15 12 9 18&quot;&gt;&lt;/polyline&gt;
    &lt;/svg&gt;
&lt;/div&gt;
&lt;p class=&quot;title&quot;&gt;CSS&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div id=&quot;mainChildOne&quot; class=&quot;treeview-collapse collapse show&quot; aria-labelledby=&quot;mainChildHeadingOne&quot; data-bs-parent=&quot;#treeviewBasicMainChild&quot;&gt;

&lt;ul class=&quot;treeview&quot; id=&quot;treeviewBasicCSSChild&quot;&gt;
&lt;li class=&quot;tv-item tv-folder&quot;&gt;
    &lt;div class=&quot;tv-header&quot; id=&quot;cssChildHeadingOne&quot;&gt;
        &lt;div class=&quot;tv-collapsible collapsed&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#cssChildOne&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;cssChildOne&quot;&gt;
            &lt;div class=&quot;icon&quot;&gt;
                &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; class=&quot;icon icon-tabler icon-tabler-chevron-right&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; stroke-width=&quot;2&quot; stroke=&quot;currentColor&quot; fill=&quot;none&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot;&gt;
                    &lt;path stroke=&quot;none&quot; d=&quot;M0 0h24v24H0z&quot; fill=&quot;none&quot;&gt;&lt;/path&gt;
                    &lt;polyline points=&quot;9 6 15 12 9 18&quot;&gt;&lt;/polyline&gt;
                &lt;/svg&gt;
            &lt;/div&gt;
            &lt;p class=&quot;title&quot;&gt;Modules&lt;/p&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div id=&quot;cssChildOne&quot; class=&quot;treeview-collapse collapse&quot; aria-labelledby=&quot;cssChildHeadingOne&quot; data-bs-parent=&quot;#treeviewBasicCSSChild&quot;&gt;
        &lt;ul class=&quot;treeview&quot; id=&quot;treeviewBasicModulesChild&quot;&gt;
            &lt;li class=&quot;tv-item&quot;&gt;&lt;p&gt;style.module.css&lt;/p&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
&lt;/li&gt;

&lt;li class=&quot;tv-item&quot;&gt;&lt;p&gt;style.css&lt;/p&gt;&lt;/li&gt;
&lt;/ul&gt;

&lt;/div&gt;
&lt;/li&gt;

&lt;li class=&quot;tv-item tv-folder&quot;&gt;
&lt;div class=&quot;tv-header&quot; id=&quot;mainChildHeadingTwo&quot;&gt;
&lt;div class=&quot;tv-collapsible collapsed&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#mainChildTwo&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;mainChildTwo&quot;&gt;
&lt;div class=&quot;icon&quot;&gt;
    &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; class=&quot;icon icon-tabler icon-tabler-chevron-right&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; stroke-width=&quot;2&quot; stroke=&quot;currentColor&quot; fill=&quot;none&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot;&gt;
        &lt;path stroke=&quot;none&quot; d=&quot;M0 0h24v24H0z&quot; fill=&quot;none&quot;&gt;&lt;/path&gt;
        &lt;polyline points=&quot;9 6 15 12 9 18&quot;&gt;&lt;/polyline&gt;
    &lt;/svg&gt;
&lt;/div&gt;
&lt;p class=&quot;title&quot;&gt;JS&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div id=&quot;mainChildTwo&quot; class=&quot;treeview-collapse collapse&quot; aria-labelledby=&quot;mainChildHeadingTwo&quot; data-bs-parent=&quot;#treeviewBasicMainChild&quot;&gt;

&lt;ul class=&quot;treeview&quot; id=&quot;treeviewBasicJSChild&quot;&gt;
&lt;li class=&quot;tv-item&quot;&gt;&lt;p&gt;script.js&lt;/p&gt;&lt;/li&gt;
&lt;/ul&gt;

&lt;/div&gt;
&lt;/li&gt;

&lt;li class=&quot;tv-item tv-folder&quot;&gt;
&lt;div class=&quot;tv-header&quot; id=&quot;mainChildHeadingThree&quot;&gt;
&lt;div class=&quot;tv-collapsible collapsed&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#mainChildThree&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;mainChildThree&quot;&gt;
&lt;div class=&quot;icon&quot;&gt;
    &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; class=&quot;icon icon-tabler icon-tabler-chevron-right&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; stroke-width=&quot;2&quot; stroke=&quot;currentColor&quot; fill=&quot;none&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot;&gt;
        &lt;path stroke=&quot;none&quot; d=&quot;M0 0h24v24H0z&quot; fill=&quot;none&quot;&gt;&lt;/path&gt;
        &lt;polyline points=&quot;9 6 15 12 9 18&quot;&gt;&lt;/polyline&gt;
    &lt;/svg&gt;
&lt;/div&gt;
&lt;p class=&quot;title&quot;&gt;image&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div id=&quot;mainChildThree&quot; class=&quot;treeview-collapse collapse&quot; aria-labelledby=&quot;mainChildHeadingThree&quot; data-bs-parent=&quot;#treeviewBasicMainChild&quot;&gt;
&lt;ul class=&quot;treeview&quot; id=&quot;treeviewBasicImgChild&quot;&gt;
&lt;li class=&quot;tv-item&quot;&gt;&lt;p&gt;profile.jpeg&lt;/p&gt;&lt;/li&gt;
&lt;li class=&quot;tv-item&quot;&gt;&lt;p&gt;background.png&lt;/p&gt;&lt;/li&gt;
&lt;li class=&quot;tv-item&quot;&gt;&lt;p&gt;arrow.svg&lt;/p&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;/div&gt;
&lt;/li&gt;

&lt;li class=&quot;tv-item&quot;&gt;&lt;p&gt;index.html&lt;/p&gt;&lt;/li&gt;
&lt;/ul&gt;</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="treeviewFStructure" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Folder Structure</h4>
                        </div>
                    </div>
                </div>                            
                <div class="widget-content widget-content-area">
                    <ul class="treeview folder-structure" id="treeviewFolderStructureEx">
                        <li class="tv-item">
                            <div class="tv-header" id="main">
                                <div class="tv-collapsible" data-bs-toggle="collapse" data-bs-target="#folderMainCollapse" aria-expanded="true" aria-controls="folderMainCollapse">
                                    <div class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-folder" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M5 4h4l3 3h7a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-11a2 2 0 0 1 2 -2"></path>
                                        </svg>
                                    </div>
                                    <p class="title">Main</p>
                                </div>
                            </div>
                            <div id="folderMainCollapse" class="treeview-collapse collapse show" aria-labelledby="main" data-bs-parent="#treeviewFolderStructureEx">

                                <ul class="treeview" id="treeviewFolderStructureMainChild">
                                    <li class="tv-item">
                                        <div class="tv-header" id="folderMainChildHeadingOne">
                                            <div class="tv-collapsible" data-bs-toggle="collapse" data-bs-target="#folderMainChildOne" aria-expanded="true" aria-controls="folderMainChildOne">
                                                <div class="icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-folder" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M5 4h4l3 3h7a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-11a2 2 0 0 1 2 -2"></path>
                                                    </svg>
                                                </div>
                                                <p class="title">CSS</p>
                                            </div>
                                        </div>
                                        <div id="folderMainChildOne" class="treeview-collapse collapse show" aria-labelledby="folderMainChildHeadingOne" data-bs-parent="#treeviewFolderStructureMainChild">

                                            <ul class="treeview" id="treeviewFolderCSSChild">
                                                <li class="tv-item">
                                                    <div class="tv-header" id="folderCSSChildHeadingOne">
                                                        <div class="tv-collapsible collapsed" data-bs-toggle="collapse" data-bs-target="#folderCSSChildOne" aria-expanded="false" aria-controls="folderCSSChildOne">
                                                            <div class="icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-folder" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                                    <path d="M5 4h4l3 3h7a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-11a2 2 0 0 1 2 -2"></path>
                                                                </svg>
                                                            </div>
                                                            <p class="title">Modules</p>
                                                        </div>
                                                    </div>
                                                    <div id="folderCSSChildOne" class="treeview-collapse collapse" aria-labelledby="folderCSSChildHeadingOne" data-bs-parent="#treeviewFolderCSSChild">
                                                        <ul class="treeview" id="treeviewFolderModulesChild">
                                                            <li class="tv-item"> <span class="icon"> <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                                <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                                                                <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"></path>
                                                             </svg> </span><p>style.module.css</p></li>
                                                        </ul>
                                                    </div>
                                                </li>

                                                <li class="tv-item"> <span class="icon"> <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                                                    <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"></path>
                                                 </svg> </span> <p>style.css</p></li>
                                            </ul>
                                            
                                        </div>
                                    </li>

                                    <li class="tv-item">
                                        <div class="tv-header" id="folderMainChildHeadingTwo">
                                            <div class="tv-collapsible collapsed" data-bs-toggle="collapse" data-bs-target="#folderMainChildTwo" aria-expanded="false" aria-controls="folderMainChildTwo">
                                                <div class="icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-folder" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M5 4h4l3 3h7a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-11a2 2 0 0 1 2 -2"></path>
                                                    </svg>
                                                </div>
                                                <p class="title">JS</p>
                                            </div>
                                        </div>
                                        <div id="folderMainChildTwo" class="treeview-collapse collapse" aria-labelledby="folderMainChildHeadingTwo" data-bs-parent="#treeviewFolderStructureMainChild">

                                            <ul class="treeview" id="treeviewBasicJSChild">
                                                <li class="tv-item"> <span class="icon"> <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                                                    <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"></path>
                                                 </svg> </span><p>script.js</p></li>
                                            </ul>
                                            
                                        </div>
                                    </li>

                                    <li class="tv-item">
                                        <div class="tv-header" id="folderMainChildHeadingThree">
                                            <div class="tv-collapsible collapsed" data-bs-toggle="collapse" data-bs-target="#folderMainChildThree" aria-expanded="false" aria-controls="folderMainChildThree">
                                                <div class="icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-folder" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M5 4h4l3 3h7a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-11a2 2 0 0 1 2 -2"></path>
                                                    </svg>
                                                </div>
                                                <p class="title">image</p>
                                            </div>
                                        </div>
                                        <div id="folderMainChildThree" class="treeview-collapse collapse" aria-labelledby="folderMainChildHeadingThree" data-bs-parent="#treeviewFolderStructureMainChild">
                                            <ul class="treeview" id="treeviewBasicImgChild">
                                                <li><li class="tv-item"> <span class="icon"> <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                                                    <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"></path>
                                                    </svg> </span><p>profile.jpeg</p></li>
                                                <li><li class="tv-item"> <span class="icon"> <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                                                    <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"></path>
                                                    </svg> </span><p>background.png</p></li>
                                                <li><li class="tv-item"> <span class="icon"> <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                                                    <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"></path>
                                                    </svg> </span><p>arrow.svg</p></li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li><li class="tv-item"> <span class="icon"> <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                                        <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"></path>
                                     </svg> </span><p>index.html</p></li>
                                </ul>

                            </div>
                        </li>

                    </ul>
                    
                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;ul class=&quot;treeview folder-structure&quot; id=&quot;treeviewFolderStructureEx&quot;&gt;
&lt;li class=&quot;tv-item&quot;&gt;
&lt;div class=&quot;tv-header&quot; id=&quot;main&quot;&gt;
&lt;div class=&quot;tv-collapsible&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#folderMainCollapse&quot; aria-expanded=&quot;true&quot; aria-controls=&quot;folderMainCollapse&quot;&gt;
&lt;div class=&quot;icon&quot;&gt;
    &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; class=&quot;icon icon-tabler icon-tabler-folder&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; stroke-width=&quot;2&quot; stroke=&quot;currentColor&quot; fill=&quot;none&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot;&gt;
        &lt;path stroke=&quot;none&quot; d=&quot;M0 0h24v24H0z&quot; fill=&quot;none&quot;&gt;&lt;/path&gt;
        &lt;path d=&quot;M5 4h4l3 3h7a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-11a2 2 0 0 1 2 -2&quot;&gt;&lt;/path&gt;
    &lt;/svg&gt;
&lt;/div&gt;
&lt;p class=&quot;title&quot;&gt;Main&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div id=&quot;folderMainCollapse&quot; class=&quot;treeview-collapse collapse show&quot; aria-labelledby=&quot;main&quot; data-bs-parent=&quot;#treeviewFolderStructureEx&quot;&gt;

&lt;ul class=&quot;treeview&quot; id=&quot;treeviewFolderStructureMainChild&quot;&gt;
&lt;li class=&quot;tv-item&quot;&gt;
    &lt;div class=&quot;tv-header&quot; id=&quot;folderMainChildHeadingOne&quot;&gt;
        &lt;div class=&quot;tv-collapsible&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#folderMainChildOne&quot; aria-expanded=&quot;true&quot; aria-controls=&quot;folderMainChildOne&quot;&gt;
            &lt;div class=&quot;icon&quot;&gt;
                &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; class=&quot;icon icon-tabler icon-tabler-folder&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; stroke-width=&quot;2&quot; stroke=&quot;currentColor&quot; fill=&quot;none&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot;&gt;
                    &lt;path stroke=&quot;none&quot; d=&quot;M0 0h24v24H0z&quot; fill=&quot;none&quot;&gt;&lt;/path&gt;
                    &lt;path d=&quot;M5 4h4l3 3h7a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-11a2 2 0 0 1 2 -2&quot;&gt;&lt;/path&gt;
                &lt;/svg&gt;
            &lt;/div&gt;
            &lt;p class=&quot;title&quot;&gt;CSS&lt;/p&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div id=&quot;folderMainChildOne&quot; class=&quot;treeview-collapse collapse show&quot; aria-labelledby=&quot;folderMainChildHeadingOne&quot; data-bs-parent=&quot;#treeviewFolderStructureMainChild&quot;&gt;

        &lt;ul class=&quot;treeview&quot; id=&quot;treeviewFolderCSSChild&quot;&gt;
            &lt;li class=&quot;tv-item&quot;&gt;
                &lt;div class=&quot;tv-header&quot; id=&quot;folderCSSChildHeadingOne&quot;&gt;
                    &lt;div class=&quot;tv-collapsible collapsed&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#folderCSSChildOne&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;folderCSSChildOne&quot;&gt;
                        &lt;div class=&quot;icon&quot;&gt;
                            &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; class=&quot;icon icon-tabler icon-tabler-folder&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; stroke-width=&quot;2&quot; stroke=&quot;currentColor&quot; fill=&quot;none&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot;&gt;
                                &lt;path stroke=&quot;none&quot; d=&quot;M0 0h24v24H0z&quot; fill=&quot;none&quot;&gt;&lt;/path&gt;
                                &lt;path d=&quot;M5 4h4l3 3h7a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-11a2 2 0 0 1 2 -2&quot;&gt;&lt;/path&gt;
                            &lt;/svg&gt;
                        &lt;/div&gt;
                        &lt;p class=&quot;title&quot;&gt;Modules&lt;/p&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;div id=&quot;folderCSSChildOne&quot; class=&quot;treeview-collapse collapse&quot; aria-labelledby=&quot;folderCSSChildHeadingOne&quot; data-bs-parent=&quot;#treeviewFolderCSSChild&quot;&gt;
                    &lt;ul class=&quot;treeview&quot; id=&quot;treeviewFolderModulesChild&quot;&gt;
                        &lt;li class=&quot;tv-item&quot;&gt; &lt;span class=&quot;icon&quot;&gt; &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; class=&quot;icon icon-tabler icon-tabler-file&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; stroke-width=&quot;2&quot; stroke=&quot;currentColor&quot; fill=&quot;none&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot;&gt;
                            &lt;path stroke=&quot;none&quot; d=&quot;M0 0h24v24H0z&quot; fill=&quot;none&quot;&gt;&lt;/path&gt;
                            &lt;path d=&quot;M14 3v4a1 1 0 0 0 1 1h4&quot;&gt;&lt;/path&gt;
                            &lt;path d=&quot;M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z&quot;&gt;&lt;/path&gt;
                            &lt;/svg&gt; &lt;/span&gt;&lt;p&gt;style.module.css&lt;/p&gt;&lt;/li&gt;
                    &lt;/ul&gt;
                &lt;/div&gt;
            &lt;/li&gt;

            &lt;li class=&quot;tv-item&quot;&gt; &lt;span class=&quot;icon&quot;&gt; &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; class=&quot;icon icon-tabler icon-tabler-file&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; stroke-width=&quot;2&quot; stroke=&quot;currentColor&quot; fill=&quot;none&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot;&gt;
                &lt;path stroke=&quot;none&quot; d=&quot;M0 0h24v24H0z&quot; fill=&quot;none&quot;&gt;&lt;/path&gt;
                &lt;path d=&quot;M14 3v4a1 1 0 0 0 1 1h4&quot;&gt;&lt;/path&gt;
                &lt;path d=&quot;M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z&quot;&gt;&lt;/path&gt;
                &lt;/svg&gt; &lt;/span&gt; &lt;p&gt;style.css&lt;/p&gt;&lt;/li&gt;
        &lt;/ul&gt;
        
    &lt;/div&gt;
&lt;/li&gt;

&lt;li class=&quot;tv-item&quot;&gt;
    &lt;div class=&quot;tv-header&quot; id=&quot;folderMainChildHeadingTwo&quot;&gt;
        &lt;div class=&quot;tv-collapsible collapsed&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#folderMainChildTwo&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;folderMainChildTwo&quot;&gt;
            &lt;div class=&quot;icon&quot;&gt;
                &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; class=&quot;icon icon-tabler icon-tabler-folder&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; stroke-width=&quot;2&quot; stroke=&quot;currentColor&quot; fill=&quot;none&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot;&gt;
                    &lt;path stroke=&quot;none&quot; d=&quot;M0 0h24v24H0z&quot; fill=&quot;none&quot;&gt;&lt;/path&gt;
                    &lt;path d=&quot;M5 4h4l3 3h7a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-11a2 2 0 0 1 2 -2&quot;&gt;&lt;/path&gt;
                &lt;/svg&gt;
            &lt;/div&gt;
            &lt;p class=&quot;title&quot;&gt;JS&lt;/p&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div id=&quot;folderMainChildTwo&quot; class=&quot;treeview-collapse collapse&quot; aria-labelledby=&quot;folderMainChildHeadingTwo&quot; data-bs-parent=&quot;#treeviewFolderStructureMainChild&quot;&gt;

        &lt;ul class=&quot;treeview&quot; id=&quot;treeviewBasicJSChild&quot;&gt;
            &lt;li class=&quot;tv-item&quot;&gt; &lt;span class=&quot;icon&quot;&gt; &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; class=&quot;icon icon-tabler icon-tabler-file&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; stroke-width=&quot;2&quot; stroke=&quot;currentColor&quot; fill=&quot;none&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot;&gt;
                &lt;path stroke=&quot;none&quot; d=&quot;M0 0h24v24H0z&quot; fill=&quot;none&quot;&gt;&lt;/path&gt;
                &lt;path d=&quot;M14 3v4a1 1 0 0 0 1 1h4&quot;&gt;&lt;/path&gt;
                &lt;path d=&quot;M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z&quot;&gt;&lt;/path&gt;
                &lt;/svg&gt; &lt;/span&gt;&lt;p&gt;script.js&lt;/p&gt;&lt;/li&gt;
        &lt;/ul&gt;
        
    &lt;/div&gt;
&lt;/li&gt;

&lt;li class=&quot;tv-item&quot;&gt;
    &lt;div class=&quot;tv-header&quot; id=&quot;folderMainChildHeadingThree&quot;&gt;
        &lt;div class=&quot;tv-collapsible collapsed&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#folderMainChildThree&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;folderMainChildThree&quot;&gt;
            &lt;div class=&quot;icon&quot;&gt;
                &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; class=&quot;icon icon-tabler icon-tabler-folder&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; stroke-width=&quot;2&quot; stroke=&quot;currentColor&quot; fill=&quot;none&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot;&gt;
                    &lt;path stroke=&quot;none&quot; d=&quot;M0 0h24v24H0z&quot; fill=&quot;none&quot;&gt;&lt;/path&gt;
                    &lt;path d=&quot;M5 4h4l3 3h7a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-11a2 2 0 0 1 2 -2&quot;&gt;&lt;/path&gt;
                &lt;/svg&gt;
            &lt;/div&gt;
            &lt;p class=&quot;title&quot;&gt;image&lt;/p&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div id=&quot;folderMainChildThree&quot; class=&quot;treeview-collapse collapse&quot; aria-labelledby=&quot;folderMainChildHeadingThree&quot; data-bs-parent=&quot;#treeviewFolderStructureMainChild&quot;&gt;
        &lt;ul class=&quot;treeview&quot; id=&quot;treeviewBasicImgChild&quot;&gt;
            &lt;li&gt;&lt;li class=&quot;tv-item&quot;&gt; &lt;span class=&quot;icon&quot;&gt; &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; class=&quot;icon icon-tabler icon-tabler-file&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; stroke-width=&quot;2&quot; stroke=&quot;currentColor&quot; fill=&quot;none&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot;&gt;
                &lt;path stroke=&quot;none&quot; d=&quot;M0 0h24v24H0z&quot; fill=&quot;none&quot;&gt;&lt;/path&gt;
                &lt;path d=&quot;M14 3v4a1 1 0 0 0 1 1h4&quot;&gt;&lt;/path&gt;
                &lt;path d=&quot;M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z&quot;&gt;&lt;/path&gt;
                &lt;/svg&gt; &lt;/span&gt;&lt;p&gt;profile.jpeg&lt;/p&gt;&lt;/li&gt;
            &lt;li&gt;&lt;li class=&quot;tv-item&quot;&gt; &lt;span class=&quot;icon&quot;&gt; &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; class=&quot;icon icon-tabler icon-tabler-file&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; stroke-width=&quot;2&quot; stroke=&quot;currentColor&quot; fill=&quot;none&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot;&gt;
                &lt;path stroke=&quot;none&quot; d=&quot;M0 0h24v24H0z&quot; fill=&quot;none&quot;&gt;&lt;/path&gt;
                &lt;path d=&quot;M14 3v4a1 1 0 0 0 1 1h4&quot;&gt;&lt;/path&gt;
                &lt;path d=&quot;M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z&quot;&gt;&lt;/path&gt;
                &lt;/svg&gt; &lt;/span&gt;&lt;p&gt;background.png&lt;/p&gt;&lt;/li&gt;
            &lt;li&gt;&lt;li class=&quot;tv-item&quot;&gt; &lt;span class=&quot;icon&quot;&gt; &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; class=&quot;icon icon-tabler icon-tabler-file&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; stroke-width=&quot;2&quot; stroke=&quot;currentColor&quot; fill=&quot;none&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot;&gt;
                &lt;path stroke=&quot;none&quot; d=&quot;M0 0h24v24H0z&quot; fill=&quot;none&quot;&gt;&lt;/path&gt;
                &lt;path d=&quot;M14 3v4a1 1 0 0 0 1 1h4&quot;&gt;&lt;/path&gt;
                &lt;path d=&quot;M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z&quot;&gt;&lt;/path&gt;
                &lt;/svg&gt; &lt;/span&gt;&lt;p&gt;arrow.svg&lt;/p&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
&lt;/li&gt;

&lt;li&gt;&lt;li class=&quot;tv-item&quot;&gt; &lt;span class=&quot;icon&quot;&gt; &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; class=&quot;icon icon-tabler icon-tabler-file&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; stroke-width=&quot;2&quot; stroke=&quot;currentColor&quot; fill=&quot;none&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot;&gt;
    &lt;path stroke=&quot;none&quot; d=&quot;M0 0h24v24H0z&quot; fill=&quot;none&quot;&gt;&lt;/path&gt;
    &lt;path d=&quot;M14 3v4a1 1 0 0 0 1 1h4&quot;&gt;&lt;/path&gt;
    &lt;path d=&quot;M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z&quot;&gt;&lt;/path&gt;
    &lt;/svg&gt; &lt;/span&gt;&lt;p&gt;index.html&lt;/p&gt;&lt;/li&gt;
&lt;/ul&gt;

&lt;/div&gt;
&lt;/li&gt;

&lt;/ul&gt;</pre>
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