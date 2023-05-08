<x-rtl.base-layout :scrollspy="true">

    <x-slot:pageTitle>
        {{$title}} 
    </x-slot>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <x-slot:headerFiles>
        <!--  BEGIN CUSTOM STYLE FILE  -->
        @vite(['resources/rtl/scss/light/assets/elements/color_library.scss', 'resources/rtl/scss/dark/assets/elements/color_library.scss'])
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
                <li class="breadcrumb-item active" aria-current="page">Color Library</li>
            </ol>
        </nav>
    </div>
    <!-- /BREADCRUMB -->

    <div id="navSection" data-bs-spy="affix" class="nav sidenav">
        <div class="sidenav-content">
            <a href="#colorLibMain" class="active nav-link">Main</a>
            <a href="#colorLibMore" class="nav-link">More</a>
        </div>
    </div>
    
    <div class="row layout-top-spacing">

        <div id="colorLibMain" class="col-lg-12">
            <div class="seperator-header">
                <h4 class=""> Main Colors </h4>
            </div>
        </div>

        <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col layout-spacing">
            <div class="color-box">
                <span class="cl-example" style="background-color: #4361ee;"></span>
                <div class="cl-info">
                    <h5 class="cl-title">Primary</h5>
                    <span>#4361ee</span>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col layout-spacing">
            <div class="color-box">
                <span class="cl-example"    style="background-color: #2196f3;"></span>
                <div class="cl-info">
                    <h5 class="cl-title">Info</h5>
                    <span>#2196f3</span>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col layout-spacing">
            <div class="color-box">
                <span class="cl-example" style="background-color: #00ab55;"></span>
                <div class="cl-info">
                    <h5 class="cl-title">Success</h5>
                    <span>#00ab55</span>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col layout-spacing">
            <div class="color-box">
                <span class="cl-example" style="background-color: #e2a03f;"></span>
                <div class="cl-info">
                    <h5 class="cl-title">Warning</h5>
                    <span>#e2a03f</span>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col layout-spacing">
            <div class="color-box">
                <span class="cl-example" style="background-color: #e7515a;"></span>
                <div class="cl-info">
                    <h5 class="cl-title">Danger</h5>
                    <span>#e7515a</span>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col layout-spacing">
            <div class="color-box">
                <span class="cl-example" style="background-color: #805dca;"></span>
                <div class="cl-info">
                    <h5 class="cl-title">Secondry</h5>
                    <span>#805dca</span>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col layout-spacing">
            <div class="color-box">
                <span class="cl-example" style="background-color: #3b3f5c;"></span>
                <div class="cl-info">
                    <h5 class="cl-title">Dark</h5>
                    <span>#3b3f5c</span>
                </div>
            </div>
        </div>

    </div>

    <div class="light-element">
        <div class="row">

            <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col layout-spacing">
                <div class="color-box">
                    <span class="cl-example bg-light-primary"></span>
                    <div class="cl-info">
                        <h5 class="cl-title">Primary-Light</h5>
                        <span>#eceffe</span>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col layout-spacing">
                <div class="color-box">
                    <span class="cl-example bg-light-info"></span>
                    <div class="cl-info">
                        <h5 class="cl-title">Info-Light</h5>
                        <span>#e6f4ff</span>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col layout-spacing">
                <div class="color-box">
                    <span class="cl-example bg-light-success"></span>
                    <div class="cl-info">
                        <h5 class="cl-title">Success-Light</h5>
                        <span>#ddf5f0</span>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col layout-spacing">
                <div class="color-box">
                    <span class="cl-example bg-light-warning"></span>
                    <div class="cl-info">
                        <h5 class="cl-title">Warning-Light</h5>
                        <span>#fcf5e9</span>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col layout-spacing">
                <div class="color-box">
                    <span class="cl-example bg-light-danger"></span>
                    <div class="cl-info">
                        <h5 class="cl-title">Danger-Light</h5>
                        <span>#fbeced</span>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col layout-spacing">
                <div class="color-box">
                    <span class="cl-example bg-light-secondary"></span>
                    <div class="cl-info">
                        <h5 class="cl-title">Secondary-Light</h5>
                        <span>#f2eafa</span>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col layout-spacing">
                <div class="color-box">
                    <span class="cl-example bg-light-dark"></span>
                    <div class="cl-info">
                        <h5 class="cl-title">Dark-Light</h5>
                        <span>#eaeaec</span>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="dark-element">
        <div class="row">

            <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col layout-spacing">
                <div class="color-box">
                    <span class="cl-example bg-light-primary"></span>
                    <div class="cl-info">
                        <h5 class="cl-title">Primary-Light</h5>
                        <span>#152143</span>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col layout-spacing">
                <div class="color-box">
                    <span class="cl-example bg-light-info"></span>
                    <div class="cl-info">
                        <h5 class="cl-title">Info-Light</h5>
                        <span>#0b2f52</span>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col layout-spacing">
                <div class="color-box">
                    <span class="cl-example bg-light-success"></span>
                    <div class="cl-info">
                        <h5 class="cl-title">Success-Light</h5>
                        <span>#0c272b</span>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col layout-spacing">
                <div class="color-box">
                    <span class="cl-example bg-light-warning"></span>
                    <div class="cl-info">
                        <h5 class="cl-title">Warning-Light</h5>
                        <span>#282625</span>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col layout-spacing">
                <div class="color-box">
                    <span class="cl-example bg-light-danger"></span>
                    <div class="cl-info">
                        <h5 class="cl-title">Danger-Light</h5>
                        <span>#2c1c2b</span>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col layout-spacing">
                <div class="color-box">
                    <span class="cl-example bg-light-secondary"></span>
                    <div class="cl-info">
                        <h5 class="cl-title">Secondary-Light</h5>
                        <span>#1d1a3b</span>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col layout-spacing">
                <div class="color-box">
                    <span class="cl-example bg-light-dark"></span>
                    <div class="cl-info">
                        <h5 class="cl-title">Dark-Light</h5>
                        <span>#181e2e</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
    

    <div class="row">

        <div id="colorLibMore" class="col-lg-12">
            <div class="seperator-header">
                <h4 class=""> More Colors</h4>
            </div>
        </div>

        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col layout-spacing">
            <div class="color-box">
                <span class="cl-example" style="background-color: #fafafa;"></span>
                <div class="cl-info">
                    <h5 class="cl-title">#fafafa</h5>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col layout-spacing">
            <div class="color-box">
                <span class="cl-example" style="background-color: #f1f2f3;"></span>
                <div class="cl-info">
                    <h5 class="cl-title">#f1f2f3</h5>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col layout-spacing">
            <div class="color-box">
                <span class="cl-example" style="background-color: #ebedf2;"></span>
                <div class="cl-info">
                    <h5 class="cl-title">#ebedf2</h5>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col layout-spacing">
            <div class="color-box">
                <span class="cl-example" style="background-color: #e0e6ed;"></span>
                <div class="cl-info">
                    <h5 class="cl-title">#e0e6ed</h5>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col layout-spacing">
            <div class="color-box">
                <span class="cl-example" style="background-color: #bfc9d4;"></span>
                <div class="cl-info">
                    <h5 class="cl-title">#bfc9d4</h5>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col layout-spacing">
            <div class="color-box">
                <span class="cl-example" style="background-color: #d3d3d3;"></span>
                <div class="cl-info">
                    <h5 class="cl-title">#d3d3d3</h5>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col layout-spacing">
            <div class="color-box">
                <span class="cl-example" style="background-color: #888ea8;"></span>
                <div class="cl-info">
                    <h5 class="cl-title">#888ea8</h5>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col layout-spacing">
            <div class="color-box">
                <span class="cl-example" style="background-color: #506690;"></span>
                <div class="cl-info">
                    <h5 class="cl-title">#506690</h5>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col layout-spacing">
            <div class="color-box">
                <span class="cl-example" style="background-color: #607d8b;"></span>
                <div class="cl-info">
                    <h5 class="cl-title">#607d8b</h5>
                </div>
            </div>
        </div>
        
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col layout-spacing">
            <div class="color-box">
                <span class="cl-example" style="background-color: #555555;"></span>
                <div class="cl-info">
                    <h5 class="cl-title">#555555</h5>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col layout-spacing">
            <div class="color-box">
                <span class="cl-example" style="background-color: #515365;"></span>
                <div class="cl-info">
                    <h5 class="cl-title">#515365</h5>
                </div>
            </div>
        </div>



        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col layout-spacing">
            <div class="color-box">
                <span class="cl-example" style="background-color: #1b2e4b;"></span>
                <div class="cl-info">
                    <h5 class="cl-title">#1b2e4b</h5>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col layout-spacing">
            <div class="color-box">
                <span class="cl-example" style="background-color: #191e3a;"></span>
                <div class="cl-info">
                    <h5 class="cl-title">#191e3a</h5>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col layout-spacing">
            <div class="color-box">
                <span class="cl-example" style="background-color: #0e1726;"></span>
                <div class="cl-info">
                    <h5 class="cl-title">#0e1726</h5>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col layout-spacing">
            <div class="color-box">
                <span class="cl-example" style="background-color: #060818;"></span>
                <div class="cl-info">
                    <h5 class="cl-title">#060818</h5>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col layout-spacing">
            <div class="color-box">
                <span class="cl-example" style="background-color: #008eff;"></span>
                <div class="cl-info">
                    <h5 class="cl-title">#008eff</h5>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col layout-spacing">
            <div class="color-box">
                <span class="cl-example" style="background-color: #009688;"></span>
                <div class="cl-info">
                    <h5 class="cl-title">#009688</h5>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col layout-spacing">
            <div class="color-box">
                <span class="cl-example" style="background-color: #ffbb44;"></span>
                <div class="cl-info">
                    <h5 class="cl-title">#ffbb44</h5>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col layout-spacing">
            <div class="color-box">
                <span class="cl-example" style="background-color: #e95f2b;"></span>
                <div class="cl-info">
                    <h5 class="cl-title">#e95f2b</h5>
                </div>
            </div>
        </div>
        
        <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col layout-spacing">
            <div class="color-box">
                <span class="cl-example" style="background-color: #f8538d;"></span>
                <div class="cl-info">
                    <h5 class="cl-title">#f8538d</h5>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col layout-spacing">
            <div class="color-box">
                <span class="cl-example" style="background-color: #445ede;"></span>
                <div class="cl-info">
                    <h5 class="cl-title">#445ede</h5>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col layout-spacing">
            <div class="color-box">
                <span class="cl-example" style="background-color: #304aca;"></span>
                <div class="cl-info">
                    <h5 class="cl-title">#304aca</h5>
                </div>
            </div>
        </div>
        
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col layout-spacing">
            <div class="color-box">
                <span class="cl-example" style="background-color: #22c7d5;"></span>
                <div class="cl-info">
                    <h5 class="cl-title">#22c7d5</h5>
                </div>
            </div>
        </div>
        
        <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col layout-spacing">
            <div class="color-box">
                <span class="cl-example" style="background-color: #7d30cb;"></span>
                <div class="cl-info">
                    <h5 class="cl-title">#7d30cb</h5>
                </div>
            </div>
        </div>

    </div>

    
    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <x-slot:footerFiles>

    </x-slot>
    <!--  END CUSTOM SCRIPTS FILE  -->
</x-rtl.base-layout>