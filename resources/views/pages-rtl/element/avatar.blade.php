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
                <li class="breadcrumb-item"><a href="#">Elements</a></li>
                <li class="breadcrumb-item active" aria-current="page">Avatar</li>
            </ol>
        </nav>
    </div>
    <!-- /BREADCRUMB -->

    <div id="navSection" data-bs-spy="affix" class="nav sidenav">
        <div class="sidenav-content">
            <a href="#avatarBasic" class="active nav-link">Basic</a>
            <a href="#avatarIndicators" class="nav-link">Indicators</a>
            <a href="#avatarShapes" class="nav-link">Shapes</a>
            <a href="#avatarIcons" class="nav-link">Icons</a>
            <a href="#avatarInitials" class="nav-link">Initials</a>
            <a href="#avatarGroup" class="nav-link">Group</a>
            <a href="#avatarAnimate" class="nav-link">Animate</a>
            <a href="#avatarTooltip" class="nav-link">Tooltip</a>
            <a href="#avatarChips" class="nav-link">Chips</a>
        </div>
    </div>

    <div class="row layout-top-spacing">
        <div id="avatarBasic" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Avatar</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area image-style-content text-center">

                    <p class="mb-5">Use <code>.badge-collapsed-img</code> class on <code>ul</code> tag.</p>

                    <div class="avatar avatar-xl">
                        <img alt="avatar" src="{{Vite::asset('resources/images/profile-12.jpeg')}}" class="rounded-circle" />
                    </div>
                    <div class="avatar avatar-lg">
                        <img alt="avatar" src="{{Vite::asset('resources/images/profile-12.jpeg')}}" class="rounded-circle" />
                    </div>
                    <div class="avatar">
                        <img alt="avatar" src="{{Vite::asset('resources/images/profile-12.jpeg')}}" class="rounded-circle" />
                    </div>
                    <div class="avatar avatar-sm">
                        <img alt="avatar" src="{{Vite::asset('resources/images/profile-12.jpeg')}}" class="rounded-circle" />
                    </div>

                    <div class="code-section-container show-code">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;div class="avatar avatar-xl"&gt;
&lt;img alt="avatar" src="{{Vite::asset('resources/images/profile-12.jpeg')}}" class="rounded-circle" /&gt;
&lt;/div&gt;
&lt;div class="avatar avatar-lg"&gt;
&lt;img alt="avatar" src="{{Vite::asset('resources/images/profile-12.jpeg')}}" class="rounded-circle" /&gt;
&lt;/div&gt;
&lt;div class="avatar"&gt;
&lt;img alt="avatar" src="{{Vite::asset('resources/images/profile-12.jpeg')}}" class="rounded-circle" /&gt;
&lt;/div&gt;
&lt;div class="avatar avatar-sm"&gt;
&lt;img alt="avatar" src="{{Vite::asset('resources/images/profile-12.jpeg')}}" class="rounded-circle" /&gt;
&lt;/div&gt;
</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="avatarIndicators" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Indicators</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area image-style-content text-center">

                    <p class="mb-5">Use <code>.avatar-indicators</code> class on <code> div.avatar</code> element</p>

                    <div class="avatar avatar-xl avatar-indicators avatar-offline">
                        <img alt="avatar" src="{{Vite::asset('resources/images/profile-12.jpeg')}}" class="rounded-circle" />
                    </div>
                    <div class="avatar avatar-lg avatar-indicators avatar-online">
                        <img alt="avatar" src="{{Vite::asset('resources/images/profile-12.jpeg')}}" class="rounded-circle" />
                    </div>
                    <div class="avatar avatar-indicators avatar-offline">
                        <img alt="avatar" src="{{Vite::asset('resources/images/profile-12.jpeg')}}" class="rounded-circle" />
                    </div>
                    <div class="avatar avatar-sm avatar-indicators avatar-online">
                        <img alt="avatar" src="{{Vite::asset('resources/images/profile-12.jpeg')}}" class="rounded-circle" />
                    </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;div class="avatar avatar-xl avatar-indicators avatar-offline"&gt;
&lt;img alt="avatar" src="{{Vite::asset('resources/images/profile-12.jpeg')}}" class="rounded-circle" /&gt;
&lt;/div&gt;
&lt;div class="avatar avatar-lg avatar-indicators avatar-online"&gt;
&lt;img alt="avatar" src="{{Vite::asset('resources/images/profile-12.jpeg')}}" class="rounded-circle" /&gt;
&lt;/div&gt;
&lt;div class="avatar avatar-indicators avatar-offline"&gt;
&lt;img alt="avatar" src="{{Vite::asset('resources/images/profile-12.jpeg')}}" class="rounded-circle" /&gt;
&lt;/div&gt;
&lt;div class="avatar avatar-sm avatar-indicators avatar-online"&gt;
&lt;img alt="avatar" src="{{Vite::asset('resources/images/profile-12.jpeg')}}" class="rounded-circle" /&gt;
&lt;/div&gt;
</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="avatarShapes" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Shapes</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area image-style-content text-center">

                    <p class="mb-5">Use <code>.rounded</code> and <code>.rounded-circle</code> class to make avatar rounded and circlular respectively.</p>

                    <div class="avatar avatar-xl">
                        <img alt="avatar" src="{{Vite::asset('resources/images/profile-12.jpeg')}}" class="rounded" />
                    </div>
                    <div class="avatar avatar-xl">
                        <img alt="avatar" src="{{Vite::asset('resources/images/profile-12.jpeg')}}" class="rounded-circle" />
                    </div>

                    <div class="avatar avatar-lg">
                        <img alt="avatar" src="{{Vite::asset('resources/images/profile-12.jpeg')}}" class="rounded" />
                    </div>
                    <div class="avatar avatar-lg">
                        <img alt="avatar" src="{{Vite::asset('resources/images/profile-12.jpeg')}}" class="rounded-circle" />
                    </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;div class="avatar avatar-xl"&gt;
&lt;img alt="avatar" src="{{Vite::asset('resources/images/profile-12.jpeg')}}" class="rounded" /&gt;
&lt;/div&gt;
&lt;div class="avatar avatar-xl"&gt;
&lt;img alt="avatar" src="{{Vite::asset('resources/images/profile-12.jpeg')}}" class="rounded-circle" /&gt;
&lt;/div&gt;

&lt;div class="avatar avatar-lg"&gt;
&lt;img alt="avatar" src="{{Vite::asset('resources/images/profile-12.jpeg')}}" class="rounded" /&gt;
&lt;/div&gt;
&lt;div class="avatar avatar-lg"&gt;
&lt;img alt="avatar" src="{{Vite::asset('resources/images/profile-12.jpeg')}}" class="rounded-circle" /&gt;
&lt;/div&gt;
</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="avatarIcons" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Icons</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area image-style-content text-center">
                    <p class="mb-5">Use <code>span</code> with <code>.avatar-icon</code> class to make Icons avatar.</p>

                    <div class="avatar avatar-xl">
                        <span class="avatar-icon rounded-circle"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg></span>
                    </div>
                    <div class="avatar avatar-lg">
                        <span class="avatar-icon rounded-circle"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg></span>
                    </div>
                    <div class="avatar">
                        <span class="avatar-icon rounded-circle"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg></span>
                    </div>
                    <div class="avatar avatar-sm">
                        <span class="avatar-icon rounded-circle"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg></span>
                    </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;div class=&quot;avatar avatar-xl&quot;&gt;
&lt;span class=&quot;avatar-icon rounded-circle&quot;&gt;&lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-user&quot;&gt;&lt;path d=&quot;M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2&quot;&gt;&lt;/path&gt;&lt;circle cx=&quot;12&quot; cy=&quot;7&quot; r=&quot;4&quot;&gt;&lt;/circle&gt;&lt;/svg&gt;&lt;/span&gt;
&lt;/div&gt;
&lt;div class=&quot;avatar avatar-lg&quot;&gt;
&lt;span class=&quot;avatar-icon rounded-circle&quot;&gt;&lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-user&quot;&gt;&lt;path d=&quot;M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2&quot;&gt;&lt;/path&gt;&lt;circle cx=&quot;12&quot; cy=&quot;7&quot; r=&quot;4&quot;&gt;&lt;/circle&gt;&lt;/svg&gt;&lt;/span&gt;
&lt;/div&gt;
&lt;div class=&quot;avatar&quot;&gt;
&lt;span class=&quot;avatar-icon rounded-circle&quot;&gt;&lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-user&quot;&gt;&lt;path d=&quot;M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2&quot;&gt;&lt;/path&gt;&lt;circle cx=&quot;12&quot; cy=&quot;7&quot; r=&quot;4&quot;&gt;&lt;/circle&gt;&lt;/svg&gt;&lt;/span&gt;
&lt;/div&gt;
&lt;div class=&quot;avatar avatar-sm&quot;&gt;
&lt;span class=&quot;avatar-icon rounded-circle&quot;&gt;&lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-user&quot;&gt;&lt;path d=&quot;M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2&quot;&gt;&lt;/path&gt;&lt;circle cx=&quot;12&quot; cy=&quot;7&quot; r=&quot;4&quot;&gt;&lt;/circle&gt;&lt;/svg&gt;&lt;/span&gt;
&lt;/div&gt;</pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        <div id="avatarInitials" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Initials</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area image-style-content text-center">
                    <p class="mb-5">Use <code>span</code> with <code>.avatar-title</code> class to make user name tags.</p>

                    <div class="avatar avatar-xl">
                        <span class="avatar-title rounded-circle">AG</span>
                    </div>
                    <div class="avatar avatar-lg">
                        <span class="avatar-title rounded-circle">AG</span>
                    </div>
                    <div class="avatar">
                        <span class="avatar-title rounded-circle">AG</span>
                    </div>
                    <div class="avatar avatar-sm">
                        <span class="avatar-title rounded-circle">AG</span>
                    </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;div class="avatar avatar-xl"&gt;
&lt;span class="avatar-title rounded-circle"&gt;AG&lt;/span&gt;
&lt;/div&gt;
&lt;div class="avatar avatar-lg"&gt;
&lt;span class="avatar-title rounded-circle"&gt;AG&lt;/span&gt;
&lt;/div&gt;
&lt;div class="avatar"&gt;
&lt;span class="avatar-title rounded-circle"&gt;AG&lt;/span&gt;
&lt;/div&gt;
&lt;div class="avatar avatar-sm"&gt;
&lt;span class="avatar-title rounded-circle"&gt;AG&lt;/span&gt;
&lt;/div&gt;
</pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="avatarGroup" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Group</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area image-style-content text-center">

                    <p class="mb-5">Use <code>div</code> with <code>.avatar--group</code> class and put <code>div.avatar</code> inside it.</p>

                    <div class="avatar--group">
                        <div class="avatar avatar-sm">
                            <img alt="avatar" src="{{Vite::asset('resources/images/profile-16.jpeg')}}" class="rounded-circle" />
                        </div>
                        <div class="avatar avatar-sm">
                            <img alt="avatar" src="{{Vite::asset('resources/images/delete-user-4.jpeg')}}" class="rounded-circle" />
                        </div>
                        <div class="avatar avatar-sm">
                            <img alt="avatar" src="{{Vite::asset('resources/images/profile-5.jpeg')}}" class="rounded-circle" />
                        </div>
                        <div class="avatar avatar-sm">
                            <span class="avatar-title rounded-circle">AG</span>
                        </div>
                    </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;div class="avatar--group"&gt;
&lt;div class="avatar avatar-sm"&gt;
&lt;img alt="avatar" src="{{Vite::asset('resources/images/profile-16.jpeg')}}" class="rounded-circle" /&gt;
&lt;/div&gt;
&lt;div class="avatar avatar-sm"&gt;
&lt;img alt="avatar" src="{{Vite::asset('resources/images/delete-user-4.jpeg')}}" class="rounded-circle" /&gt;
&lt;/div&gt;
&lt;div class="avatar avatar-sm"&gt;
&lt;img alt="avatar" src="{{Vite::asset('resources/images/profile-5.jpeg')}}" class="rounded-circle" /&gt;
&lt;/div&gt;
&lt;div class="avatar avatar-sm"&gt;
&lt;span class="avatar-title rounded-circle"&gt;AG&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;
</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <div id="avatarGroupBadge" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Group with badge</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area image-style-content text-center">

                    <p class="mb-5">Use <code>.avatar--group</code> with <code>.avatar-group-badge</code> class also, add <code>.badge</code> element with <code>.counter</code> class.</p>

                    <div class="avatar--group avatar-group-badge">
                        <span class="badge badge-success counter"></span>
                        <div class="avatar avatar-sm">
                            <img alt="avatar" src="{{Vite::asset('resources/images/profile-16.jpeg')}}" class="rounded-circle" />
                        </div>
                        <div class="avatar avatar-sm">
                            <img alt="avatar" src="{{Vite::asset('resources/images/delete-user-4.jpeg')}}" class="rounded-circle" />
                        </div>
                        <div class="avatar avatar-sm">
                            <img alt="avatar" src="{{Vite::asset('resources/images/profile-5.jpeg')}}" class="rounded-circle" />
                        </div>
                        <div class="avatar avatar-sm">
                            <span class="avatar-title rounded-circle">AG</span>
                        </div>
                    </div>

                    <br/>
                    <br/>
                    <br/>

                    <div class="avatar--group avatar-group-badge">
                        <span class="badge badge-success counter">7</span>
                        <div class="avatar avatar-sm">
                            <img alt="avatar" src="{{Vite::asset('resources/images/profile-16.jpeg')}}" class="rounded-circle" />
                        </div>
                        <div class="avatar avatar-sm">
                            <img alt="avatar" src="{{Vite::asset('resources/images/delete-user-4.jpeg')}}" class="rounded-circle" />
                        </div>
                        <div class="avatar avatar-sm">
                            <img alt="avatar" src="{{Vite::asset('resources/images/profile-5.jpeg')}}" class="rounded-circle" />
                        </div>
                        <div class="avatar avatar-sm">
                            <span class="avatar-title rounded-circle">AG</span>
                        </div>
                    </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;div class=&quot;avatar--group avatar-group-badge&quot;&gt;
&lt;span class=&quot;badge badge-primary counter&quot;&gt;&lt;/span&gt;
&lt;div class=&quot;avatar avatar-sm&quot;&gt;
&lt;img alt=&quot;avatar&quot; src=&quot;assets/img/profile-16.jpeg&quot; class=&quot;rounded-circle&quot; /&gt;
&lt;/div&gt;
&lt;div class=&quot;avatar avatar-sm&quot;&gt;
&lt;img alt=&quot;avatar&quot; src=&quot;assets/img/delete-user-4.jpeg&quot; class=&quot;rounded-circle&quot; /&gt;
&lt;/div&gt;
&lt;div class=&quot;avatar avatar-sm&quot;&gt;
&lt;img alt=&quot;avatar&quot; src=&quot;assets/img/profile-5.jpeg&quot; class=&quot;rounded-circle&quot; /&gt;
&lt;/div&gt;
&lt;div class=&quot;avatar avatar-sm&quot;&gt;
&lt;span class=&quot;avatar-title rounded-circle&quot;&gt;AG&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;

<!-- with Counter -->

&lt;div class=&quot;avatar--group avatar-group-badge&quot;&gt;
&lt;span class=&quot;badge badge-primary counter&quot;&gt;9&lt;/span&gt;
&lt;div class=&quot;avatar avatar-sm&quot;&gt;
&lt;img alt=&quot;avatar&quot; src=&quot;assets/img/profile-16.jpeg&quot; class=&quot;rounded-circle&quot; /&gt;
&lt;/div&gt;
&lt;div class=&quot;avatar avatar-sm&quot;&gt;
&lt;img alt=&quot;avatar&quot; src=&quot;assets/img/delete-user-4.jpeg&quot; class=&quot;rounded-circle&quot; /&gt;
&lt;/div&gt;
&lt;div class=&quot;avatar avatar-sm&quot;&gt;
&lt;img alt=&quot;avatar&quot; src=&quot;assets/img/profile-5.jpeg&quot; class=&quot;rounded-circle&quot; /&gt;
&lt;/div&gt;
&lt;div class=&quot;avatar avatar-sm&quot;&gt;
&lt;span class=&quot;avatar-title rounded-circle&quot;&gt;AG&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;

</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        
        <div id="avatarAnimate" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Animate Y-axis</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area image-style-content text-center">

                    <p class="mb-5">Use <code>.translateY-axis</code> class to make animate profile on Y-axis.</p>

                    <div class="avatar--group">
                        <div class="avatar avatar-sm translateY-axis">
                            <img alt="avatar" src="{{Vite::asset('resources/images/profile-16.jpeg')}}" class="rounded-circle" />
                        </div>
                        <div class="avatar avatar-sm translateY-axis">
                            <img alt="avatar" src="{{Vite::asset('resources/images/delete-user-4.jpeg')}}" class="rounded-circle" />
                        </div>
                        <div class="avatar avatar-sm translateY-axis">
                            <img alt="avatar" src="{{Vite::asset('resources/images/profile-5.jpeg')}}" class="rounded-circle" />
                        </div>
                        <div class="avatar avatar-sm translateY-axis">
                            <span class="avatar-title rounded-circle">AG</span>
                        </div>
                    </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;div class="avatar--group"&gt;
&lt;div class="avatar avatar-sm translateY-axis"&gt;
&lt;img alt="avatar" src="{{Vite::asset('resources/images/profile-16.jpeg')}}" class="rounded-circle" /&gt;
&lt;/div&gt;
&lt;div class="avatar avatar-sm translateY-axis"&gt;
&lt;img alt="avatar" src="{{Vite::asset('resources/images/delete-user-4.jpeg')}}" class="rounded-circle" /&gt;
&lt;/div&gt;
&lt;div class="avatar avatar-sm translateY-axis"&gt;
&lt;img alt="avatar" src="{{Vite::asset('resources/images/profile-5.jpeg')}}" class="rounded-circle" /&gt;
&lt;/div&gt;
&lt;div class="avatar avatar-sm translateY-axis"&gt;
&lt;span class="avatar-title rounded-circle"&gt;AG&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;
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
                            <h4>Animate X-axis</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area image-style-content text-center">

                    <p class="mb-5">Use <code>.translateX-axis</code> class to make animate profile on X-axis.</p>

                    <div class="avatar--group">
                        <div class="avatar avatar-sm translateX-axis">
                            <img alt="avatar" src="{{Vite::asset('resources/images/profile-16.jpeg')}}" class="rounded-circle" />
                        </div>
                        <div class="avatar avatar-sm translateX-axis">
                            <img alt="avatar" src="{{Vite::asset('resources/images/delete-user-4.jpeg')}}" class="rounded-circle" />
                        </div>
                        <div class="avatar avatar-sm translateX-axis">
                            <img alt="avatar" src="{{Vite::asset('resources/images/profile-5.jpeg')}}" class="rounded-circle" />
                        </div>
                        <div class="avatar avatar-sm translateX-axis">
                            <span class="avatar-title rounded-circle">AG</span>
                        </div>
                    </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;div class="avatar--group"&gt;
&lt;div class="avatar avatar-sm translateX-axis"&gt;
&lt;img alt="avatar" src="{{Vite::asset('resources/images/profile-16.jpeg')}}" class="rounded-circle" /&gt;
&lt;/div&gt;
&lt;div class="avatar avatar-sm translateX-axis"&gt;
&lt;img alt="avatar" src="{{Vite::asset('resources/images/delete-user-4.jpeg')}}" class="rounded-circle" /&gt;
&lt;/div&gt;
&lt;div class="avatar avatar-sm translateX-axis"&gt;
&lt;img alt="avatar" src="{{Vite::asset('resources/images/profile-5.jpeg')}}" class="rounded-circle" /&gt;
&lt;/div&gt;
&lt;div class="avatar avatar-sm translateX-axis"&gt;
&lt;span class="avatar-title rounded-circle"&gt;AG&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;
</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        
        <div id="avatarTooltip" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Tooltip</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area image-style-content text-center">

                    <p class="mb-5">Use Bootstrap Tooltip on <code>img</code> tag and <code>span.avatar-title</code> tag</p>

                    <div class="avatar--group">
                        <div class="avatar avatar-sm">
                            <img alt="avatar" src="{{Vite::asset('resources/images/profile-16.jpeg')}}" class="rounded-circle  bs-tooltip" data-bs-original-title="Lisa" />
                        </div>
                        <div class="avatar avatar-sm">
                            <img alt="avatar" src="{{Vite::asset('resources/images/delete-user-4.jpeg')}}" class="rounded-circle  bs-tooltip" data-bs-original-title="Mary" />
                        </div>
                        <div class="avatar avatar-sm">
                            <img alt="avatar" src="{{Vite::asset('resources/images/profile-5.jpeg')}}" class="rounded-circle  bs-tooltip" data-bs-original-title="Andy" />
                        </div>
                        <div class="avatar avatar-sm">
                            <span class="avatar-title rounded-circle  bs-tooltip" data-bs-original-title="Alan Green">AG</span>
                        </div>
                    </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;div class="avatar--group"&gt;
&lt;div class="avatar avatar-sm"&gt;
&lt;img alt="avatar" src="{{Vite::asset('resources/images/profile-16.jpeg')}}" class="rounded-circle  bs-tooltip" data-bs-original-title="Judy Holmes" /&gt;
&lt;/div&gt;
&lt;div class="avatar avatar-sm"&gt;
&lt;img alt="avatar" src="{{Vite::asset('resources/images/delete-user-4.jpeg')}}" class="rounded-circle  bs-tooltip" data-bs-original-title="Judy Holmes" /&gt;
&lt;/div&gt;
&lt;div class="avatar avatar-sm"&gt;
&lt;img alt="avatar" src="{{Vite::asset('resources/images/profile-5.jpeg')}}" class="rounded-circle  bs-tooltip" data-bs-original-title="Judy Holmes" /&gt;
&lt;/div&gt;
&lt;div class="avatar avatar-sm"&gt;
&lt;span class="avatar-title rounded-circle  bs-tooltip" data-bs-original-title="Alan Green"&gt;AG&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;
</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <div id="avatarChips" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Avatar Chips</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area image-style-content text-center">

                    <span class="avatar-chip bg-primary mb-2 me-4 position-relative">
                        <img src="{{Vite::asset('resources/images/profile-2.jpeg')}}" alt="Person" width="96" height="96">
                        <span class="text">Kelly</span>
                    </span>

                    <span class="avatar-chip bg-success mb-2 me-4">
                        <img src="{{Vite::asset('resources/images/delete-user-4.jpeg')}}" alt="Person" width="96" height="96">
                        <span class="text">Mary</span>
                    </span>

                    <span class="avatar-chip bg-info mb-2 me-4 position-relative">
                        <img src="{{Vite::asset('resources/images/profile-16.jpeg')}}" alt="Person" width="96" height="96">
                        <span class="text">Lisa</span>
                    </span>

                    <span class="avatar-chip bg-danger mb-2 me-4">
                        <img src="{{Vite::asset('resources/images/profile-5.jpeg')}}" alt="Person" width="96" height="96">
                        <span class="text">Andy</span>
                    </span>

                    <span class="avatar-chip bg-warning mb-2 me-4 position-relative">
                        <img src="{{Vite::asset('resources/images/profile-12.jpeg')}}" alt="Person" width="96" height="96">
                        <span class="text">Daisy</span>
                    </span>
                    
                    <span class="avatar-chip bg-secondary mb-2 me-4 position-relative">
                        <img src="{{Vite::asset('resources/images/delete-user-17.jpeg')}}" alt="Person" width="96" height="96">
                        <span class="text">James</span>
                    </span>

                    <span class="avatar-chip bg-dark mb-2 me-4">
                        <img src="{{Vite::asset('resources/images/profile-1.jpeg')}}" alt="Person" width="96" height="96">
                        <span class="text">Oscar</span>
                    </span>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;div class="avatar--group"&gt;
&lt;div class="avatar"&gt;
&lt;img alt="avatar" src="{{Vite::asset('resources/images/profile-12.jpeg')}}" class="rounded-circle  bs-tooltip" data-original-title="Judy Holmes" /&gt;
&lt;/div&gt;
&lt;div class="avatar"&gt;
&lt;img alt="avatar" src="{{Vite::asset('resources/images/profile-12.jpeg')}}" class="rounded-circle  bs-tooltip" data-original-title="Judy Holmes" /&gt;
&lt;/div&gt;
&lt;div class="avatar"&gt;
&lt;img alt="avatar" src="{{Vite::asset('resources/images/profile-12.jpeg')}}" class="rounded-circle  bs-tooltip" data-original-title="Judy Holmes" /&gt;
&lt;/div&gt;
&lt;div class="avatar"&gt;
&lt;span class="avatar-title rounded-circle  bs-tooltip" data-original-title="Alan Green"&gt;AG&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;
</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="avatarDismissable" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Dismissable Chips</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area image-style-content text-center">

                    <span class="avatar-chip avatar-dismiss bg-primary mb-2 me-4 position-relative">
                        <img src="{{Vite::asset('resources/images/profile-2.jpeg')}}" alt="Person" width="96" height="96">
                        <span class="text">Kelly</span>
                        <span class="closebtn ms-2" onclick="this.parentElement.style.display='none'">&times;</span>
                    </span>

                    <span class="avatar-chip avatar-dismiss bg-success mb-2 me-4">
                        <img src="{{Vite::asset('resources/images/delete-user-4.jpeg')}}" alt="Person" width="96" height="96">
                        <span class="text">Mary</span>
                        <span class="closebtn ms-2" onclick="this.parentElement.style.display='none'">&times;</span>
                    </span>

                    <span class="avatar-chip avatar-dismiss bg-info mb-2 me-4 position-relative">
                        <img src="{{Vite::asset('resources/images/profile-16.jpeg')}}" alt="Person" width="96" height="96">
                        <span class="text">Lisa</span>
                        <span class="closebtn ms-2" onclick="this.parentElement.style.display='none'">&times;</span>
                    </span>

                    <span class="avatar-chip avatar-dismiss bg-danger mb-2 me-4">
                        <img src="{{Vite::asset('resources/images/profile-5.jpeg')}}" alt="Person" width="96" height="96">
                        <span class="text">Andy</span>
                        <span class="closebtn ms-2" onclick="this.parentElement.style.display='none'">&times;</span>
                    </span>

                    <span class="avatar-chip avatar-dismiss bg-warning mb-2 me-4 position-relative">
                        <img src="{{Vite::asset('resources/images/profile-12.jpeg')}}" alt="Person" width="96" height="96">
                        <span class="text">Daisy</span>
                        <span class="closebtn ms-2" onclick="this.parentElement.style.display='none'">&times;</span>
                    </span>
                    
                    <span class="avatar-chip avatar-dismiss bg-secondary mb-2 me-4 position-relative">
                        <img src="{{Vite::asset('resources/images/delete-user-17.jpeg')}}" alt="Person" width="96" height="96">
                        <span class="text">James</span>
                        <span class="closebtn ms-2" onclick="this.parentElement.style.display='none'">&times;</span>
                    </span>

                    <span class="avatar-chip avatar-dismiss bg-dark mb-2 me-4">
                        <img src="{{Vite::asset('resources/images/profile-1.jpeg')}}" alt="Person" width="96" height="96">
                        <span class="text">Oscar</span>
                        <span class="closebtn ms-2" onclick="this.parentElement.style.display='none'">&times;</span>
                    </span>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;div class="avatar--group"&gt;
&lt;div class="avatar"&gt;
&lt;img alt="avatar" src="{{Vite::asset('resources/images/profile-12.jpeg')}}" class="rounded-circle  bs-tooltip" data-original-title="Judy Holmes" /&gt;
&lt;/div&gt;
&lt;div class="avatar"&gt;
&lt;img alt="avatar" src="{{Vite::asset('resources/images/profile-12.jpeg')}}" class="rounded-circle  bs-tooltip" data-original-title="Judy Holmes" /&gt;
&lt;/div&gt;
&lt;div class="avatar"&gt;
&lt;img alt="avatar" src="{{Vite::asset('resources/images/profile-12.jpeg')}}" class="rounded-circle  bs-tooltip" data-original-title="Judy Holmes" /&gt;
&lt;/div&gt;
&lt;div class="avatar"&gt;
&lt;span class="avatar-title rounded-circle  bs-tooltip" data-original-title="Alan Green"&gt;AG&lt;/span&gt;
&lt;/div&gt;
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
</x-rtl.base-layout>