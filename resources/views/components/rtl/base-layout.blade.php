{{-- 

/**
*
* Created a new component <x-rtl.base-layout/>.
* 
*/

--}}

@php
    $isBoxed = layoutConfig()['boxed'];
    $isAltMenu = layoutConfig()['alt-menu']; 
    $isRTL = layoutConfig()['rtl']; 
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>{{ $pageTitle }}</title>
    <link rel="icon" type="image/x-icon" href="{{Vite::asset('resources/images/favicon.ico')}}"/>
    @vite(['resources/scss/layouts/modern-light-menu/light/loader.scss'])

    @if (Request::is('rtl/modern-light-menu/*'))
        @vite(['resources/rtl/layouts/vertical-light-menu/loader.js'])
    @elseif ((Request::is('rtl/modern-dark-menu/*')))
        @vite(['resources/rtl/layouts/vertical-dark-menu/loader.js'])
    @elseif ((Request::is('rtl/collapsible-menu/*')))
        @vite(['resources/rtl/layouts/collapsible-menu/loader.js'])
    @elseif ((Request::is('rtl/horizontal-light-menu/*')))
        @vite(['resources/rtl/layouts/horizontal-light-menu/loader.js'])
    @elseif ((Request::is('rtl/horizontal-dark-menu/*')))
        @vite(['resources/rtl/layouts/horizontal-dark-menu/loader.js'])
    @else
        @vite(['resources/layouts/modern-light-menu/loader.js'])
    @endif
    
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins-rtl/bootstrap/bootstrap.rtl.min.css')}}">
    @vite(['resources/rtl/scss/light/assets/main.scss', 'resources/rtl/scss/dark/assets/main.scss'])

    @if (
            !Request::routeIs('404') &&
            !Request::routeIs('maintenance') &&
            !Request::routeIs('signin') &&
            !Request::routeIs('signup') &&
            !Request::routeIs('lockscreen') &&
            !Request::routeIs('password-reset') &&
            !Request::routeIs('2Step')
        )
        @if ($scrollspy == 1) @vite(['resources/rtl/scss/light/assets/scrollspyNav.scss', 'resources/rtl/scss/dark/assets/scrollspyNav.scss']) @endif
        <link rel="stylesheet" type="text/css" href="{{asset('plugins-rtl/waves/waves.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('plugins-rtl/highlight/styles/monokai-sublime.css')}}">

        @vite([
            'resources/rtl/scss/light/plugins/perfect-scrollbar/perfect-scrollbar.scss',
            'resources/rtl/scss/light/assets/custom.scss',
            'resources/rtl/scss/dark/assets/custom.scss',
        ])


        @if (Request::is('rtl/modern-light-menu/*'))

        @vite([
            'resources/rtl/scss/layouts/vertical-light-menu/light/structure.scss',
            'resources/rtl/scss/layouts/vertical-light-menu/dark/structure.scss',
        ])

        @elseif ((Request::is('rtl/modern-dark-menu/*')))

        @vite([
            'resources/rtl/scss/layouts/vertical-dark-menu/light/structure.scss',
            'resources/rtl/scss/layouts/vertical-dark-menu/dark/structure.scss',
        ])

        @elseif ((Request::is('rtl/collapsible-menu/*')))

        @vite([
            'resources/rtl/scss/layouts/collapsible-menu/light/structure.scss',
            'resources/rtl/scss/layouts/collapsible-menu/dark/structure.scss',
        ])

        @elseif ((Request::is('rtl/horizontal-light-menu/*')))

        @vite([
            'resources/rtl/scss/layouts/horizontal-light-menu/light/structure.scss',
            'resources/rtl/scss/layouts/horizontal-light-menu/dark/structure.scss',
        ])

        @elseif ((Request::is('rtl/horizontal-dark-menu/*')))

        @vite([
            'resources/rtl/scss/layouts/horizontal-dark-menu/light/structure.scss',
            'resources/rtl/scss/layouts/horizontal-dark-menu/dark/structure.scss',
        ])

        @else

        @vite([
            'resources/rtl/scss/layouts/vertical-light-menu/light/structure.scss',
            'resources/rtl/scss/layouts/vertical-light-menu/dark/structure.scss',
        ])

        @endif
        

    @endif
    
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    {{$headerFiles}}
    <!-- END GLOBAL MANDATORY STYLES -->
</head>
<body @class([
        // 'layout-dark' => $isDark,
        'layout-rtl' => $isRTL,
        'layout-boxed' => $isBoxed,
        'alt-menu' => ($isAltMenu || Request::routeIs('collapsibleMenu') ? true : false),
        'error' => (Request::routeIs('404') ? true : false),
        'maintanence' => (Request::routeIs('maintenance') ? true : false),
    ]) @if ($scrollspy == 1) {{ $scrollspyConfig }} @else {{''}} @endif   @if (Request::routeIs('fullWidth')) layout="full-width"  @endif >

    <!-- BEGIN LOADER -->
    <x-rtl.layout-loader/>
    <!--  END LOADER -->

    {{--
        
    /*
    *
    *   Check if the routes are not single pages ( which does not contains sidebar or topbar  ) such as :-
    *   - 404
    *   - maintenance
    *   - authentication
    *
    */

    --}}

    @if (
            !Request::routeIs('404') &&
            !Request::routeIs('maintenance') &&
            !Request::routeIs('signin') &&
            !Request::routeIs('signup') &&
            !Request::routeIs('lockscreen') &&
            !Request::routeIs('password-reset') &&
            !Request::routeIs('2Step')
        )

        @if (!Request::routeIs('blank'))  
        <!--  BEGIN NAVBAR  -->
        {{-- <x-rtl.navbar.style-vertical-menu classes="{{($isBoxed ? 'container-xxl' : '')}}"/> --}}
        <!--  END NAVBAR  -->


            @if (Request::is('rtl/modern-light-menu/*'))

                <!--  BEGIN NAVBAR  -->
                <x-rtl.navbar.style-vertical-menu classes="{{($isBoxed ? 'container-xxl' : '')}}"/>
                <!--  END NAVBAR  -->
            
            @elseif ((Request::is('rtl/modern-dark-menu/*')))

                <!--  BEGIN NAVBAR  -->
                <x-rtl.navbar.style-vertical-menu classes="{{($isBoxed ? 'container-xxl' : '')}}"/>
                <!--  END NAVBAR  -->
            
            @elseif ((Request::is('rtl/collapsible-menu/*')))

                <!--  BEGIN NAVBAR  -->
                <x-rtl.navbar.style-vertical-menu classes="{{($isBoxed ? 'container-xxl' : '')}}"/>
                <!--  END NAVBAR  -->

            @elseif ((Request::is('rtl/horizontal-light-menu/*')))

                <!--  BEGIN NAVBAR  -->
                <x-rtl.navbar.style-horizontal-menu/>
                <!--  END NAVBAR  -->

            @elseif ((Request::is('rtl/horizontal-dark-menu/*')))

                <!--  BEGIN NAVBAR  -->
                <x-rtl.navbar.style-horizontal-menu/>
                <!--  END NAVBAR  -->

            @else
                <!--  BEGIN NAVBAR  -->
                <x-rtl.navbar.style-vertical-menu classes="{{($isBoxed ? 'container-xxl' : '')}}"/>
                <!--  END NAVBAR  -->
            
            @endif
        
        @endif

        <!--  BEGIN MAIN CONTAINER  -->
        <div class="main-container " id="container">
            
            <!--  BEGIN LOADER  -->
            <x-rtl.layout-overlay/>
            <!--  END LOADER  -->

            @if (!Request::routeIs('blank')) 
            <!--  BEGIN SIDEBAR  -->
            {{-- <x-rtl.menu.vertical-menu/> --}}
            <!--  END SIDEBAR  -->   

                @if (Request::is('rtl/modern-light-menu/*'))

                    <!--  BEGIN SIDEBAR  -->
                    <x-rtl.menu.vertical-menu/>
                    <!--  END SIDEBAR  --> 
                
                @elseif ((Request::is('rtl/modern-dark-menu/*')))

                    <!--  BEGIN SIDEBAR  -->
                    <x-rtl.menu.vertical-menu/>
                    <!--  END SIDEBAR  --> 
                
                @elseif ((Request::is('rtl/collapsible-menu/*')))

                    <!--  BEGIN SIDEBAR  -->
                    <x-rtl.menu.vertical-menu/>
                    <!--  END SIDEBAR  --> 


                @elseif ((Request::is('rtl/horizontal-light-menu/*')))

                    <!--  BEGIN SIDEBAR  -->
                    <x-rtl.menu.horizontal-menu/>
                    <!--  END SIDEBAR  -->

                @elseif ((Request::is('rtl/horizontal-dark-menu/*')))

                    <!--  BEGIN SIDEBAR  -->
                    <x-rtl.menu.horizontal-menu/>
                    <!--  END SIDEBAR  -->
                
                @else 
                    <!--  BEGIN SIDEBAR  -->
                    <x-rtl.menu.vertical-menu/>
                    <!--  END SIDEBAR  --> 

                @endif
            
            
            @endif
            
            <!--  BEGIN CONTENT AREA  -->
            <div id="content" class="main-content {{(Request::routeIs('blank') ? 'ms-0 mt-0' : '')}}">

                @if ($scrollspy == 1)
                    <div class="container">
                        <div class="container">
                            {{ $slot }}
                        </div>
                    </div>                
                @else
                    <div class="layout-px-spacing">
                        <div class="middle-content {{($isBoxed ? 'container-xxl' : '')}} p-0">
                            {{ $slot }}
                        </div>
                    </div>
                @endif

                <!--  BEGIN FOOTER  -->
                <x-rtl.layout-footer/>
                <!--  END FOOTER  -->
                
            </div>
            <!--  END CONTENT AREA  -->

        </div>
        <!--  END MAIN CONTAINER  -->
        
    @else
        {{ $slot }}
    @endif

    @if (
            !Request::routeIs('404') &&
            !Request::routeIs('maintenance') &&
            !Request::routeIs('signin') &&
            !Request::routeIs('signup') &&
            !Request::routeIs('lockscreen') &&
            !Request::routeIs('password-reset') &&
            !Request::routeIs('2Step')
        )
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <script src="{{asset('plugins-rtl/bootstrap/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('plugins-rtl/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
        <script src="{{asset('plugins-rtl/mousetrap/mousetrap.min.js')}}"></script>
        <script src="{{asset('plugins-rtl/waves/waves.min.js')}}"></script>
        <script src="{{asset('plugins-rtl/highlight/highlight.pack.js')}}"></script>
        @if ($scrollspy == 1) @vite(['resources/rtl/assets/js/scrollspyNav.js']) @endif

        @if (Request::is('rtl/modern-light-menu/*'))
            @vite(['resources/rtl/layouts/vertical-light-menu/app.js'])
        @elseif ((Request::is('rtl/modern-dark-menu/*')))
            @vite(['resources/rtl/layouts/vertical-dark-menu/app.js'])
        @elseif ((Request::is('rtl/collapsible-menu/*')))
            @vite(['resources/rtl/layouts/collapsible-menu/app.js'])
        @elseif ((Request::is('rtl/horizontal-light-menu/*')))
            @vite(['resources/rtl/layouts/horizontal-light-menu/app.js'])
        @elseif ((Request::is('rtl/horizontal-dark-menu/*')))
            @vite(['resources/rtl/layouts/horizontal-dark-menu/app.js'])
        @endif
        <!-- END GLOBAL MANDATORY STYLES -->

    @endif
         
        {{$footerFiles}}
</body>
</html>