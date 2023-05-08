<x-base-layout :scrollspy="false">

    <x-slot:pageTitle>
        {{-- {{$title}}  --}}
        </x-slot>

        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <x-slot:headerFiles>
            <!--  BEGIN CUSTOM STYLE FILE  -->
            @vite(['resources/scss/light/assets/authentication/auth-boxed.scss'])
            @vite(['resources/scss/dark/assets/authentication/auth-boxed.scss'])

            <style>
                #load_screen {
                    display: none;
                }
            </style>
            <!--  END CUSTOM STYLE FILE  -->
            </x-slot>
            <!-- END GLOBAL MANDATORY STYLES -->

            <div class="auth-container d-flex">

                <div class="container mx-auto align-self-center">

                    <div class="row">

                        <div
                            class="col-xxl-4 col-xl-5 col-lg-5 col-md-8 col-12 d-flex flex-column align-self-center mx-auto">
                            <div class="card mt-3 mb-3">
                                <div class="card-body">

                                    <div class="row">
                                        <div class="col-md-12 mb-3">

                                            <h2>Sign In</h2>
                                            <p>Enter your email and password to login</p>

                                        </div>
                                        <form action="{{ route('login') }}" method="post">
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Email</label>
                                                    <input type="email" class="form-control" name="email">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-4">
                                                    <label class="form-label">Password</label>
                                                    <input type="text" class="form-control" name="password">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <div class="form-check form-check-primary form-check-inline">
                                                        <input class="form-check-input me-3" type="checkbox"
                                                            id="form-check-default">
                                                        <label class="form-check-label" for="form-check-default">
                                                            Remember me
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            @csrf
                                            <div class="col-12">
                                                <div class="mb-4">
                                                    <button class="btn btn-secondary w-100">SIGN IN</button>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="col-12">
                                            <div class="text-center">
                                                <p class="mb-0">Dont't have an account ? <a href="javascript:void(0);"
                                                        class="text-warning">Sign Up</a></p>
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

                </x-slot>
                <!--  END CUSTOM SCRIPTS FILE  -->
</x-base-layout>
