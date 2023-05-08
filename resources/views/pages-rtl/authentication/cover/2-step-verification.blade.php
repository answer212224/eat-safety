<x-rtl.base-layout :scrollspy="false">

    <x-slot:pageTitle>
        {{$title}} 
    </x-slot>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <x-slot:headerFiles>
        <!--  BEGIN CUSTOM STYLE FILE  -->
        @vite(['resources/rtl/scss/light/assets/authentication/auth-cover.scss'])
        @vite(['resources/rtl/scss/dark/assets/authentication/auth-cover.scss'])
        <!--  END CUSTOM STYLE FILE  -->
    </x-slot>
    <!-- END GLOBAL MANDATORY STYLES -->
    
    <div class="auth-container d-flex h-100">

        <div class="container mx-auto align-self-center">
    
            <div class="row">
    
                <div class="col-6 d-lg-flex d-none h-100 my-auto top-0 start-0 text-center justify-content-center flex-column">
                    <div class="auth-cover-bg-image"></div>
                    <div class="auth-overlay"></div>
                        
                    <div class="auth-cover">
    
                        <div class="position-relative">
    
                            <img src="{{Vite::asset('resources/images/auth-cover.svg')}}" alt="auth-img">
    
                            <h2 class="mt-5 text-white font-weight-bolder px-2">Join the community of expert developers</h2>
                            <p class="text-white px-2">It is easy to setup with great customer experience. Start your 7-day free trial</p>
                        </div>
                        
                    </div>

                </div>

                <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-8 col-12 d-flex flex-column align-self-center ms-lg-auto me-lg-0 mx-auto">
                    <div class="card">
                        <div class="card-body">
    
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    
                                    <h2>2-Step Verification</h2>
                                    <p>Enter the code for verification.</p>
                                    
                                </div>
                                <div class="col-sm-2 col-3 ms-auto">
                                    <div class="mb-3">
                                        <input type="text" class="form-control opt-input">
                                    </div>
                                </div>
                                <div class="col-sm-2 col-3">
                                    <div class="mb-3">
                                        <input type="email" class="form-control opt-input">
                                    </div>
                                </div>
                                <div class="col-sm-2 col-3">
                                    <div class="mb-3">
                                        <input type="text" class="form-control opt-input">
                                    </div>
                                </div>
                                <div class="col-sm-2 col-3 me-auto">
                                    <div class="mb-3">
                                        <input type="text" class="form-control opt-input">
                                    </div>
                                </div>
                                
                                <div class="col-12 mt-4">
                                    <div class="mb-4">
                                        <button class="btn btn-secondary w-100">VERIFY</button>
                                    </div>
                                </div>
                                
                                <div class="col-12">
                                    <div class="text-center">
                                        <p class="mb-0">Didn't receive the code ? <a href="javascript:void(0);" class="text-warning">Resend</a></p>
                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>

    </div>
    
    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <x-slot:footerFiles>
        @vite(['resources/rtl/assets/js/authentication/2-Step-Verification.js'])
    </x-slot>
    <!--  END CUSTOM SCRIPTS FILE  -->
</x-rtl.base-layout>