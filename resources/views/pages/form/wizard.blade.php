<x-base-layout :scrollspy="true">

    <x-slot:pageTitle>
        {{$title}} 
    </x-slot>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <x-slot:headerFiles>
        <!--  BEGIN CUSTOM STYLE FILE  -->
        <link rel="stylesheet" href="{{asset('plugins/stepper/bsStepper.min.css')}}">
        @vite(['resources/scss/light/plugins/stepper/custom-bsStepper.scss'])
        @vite(['resources/scss/dark/plugins/stepper/custom-bsStepper.scss'])
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
                <li class="breadcrumb-item active" aria-current="page">Wizards</li>
            </ol>
        </nav>
    </div>
    <!-- /BREADCRUMB -->

    <div id="navSection" data-bs-spy="affix" class="nav  sidenav">
        <div class="sidenav-content">
            <a href="#wizard_Default" class="active nav-link">Default</a>
            <a href="#wizard_Vertical" class="nav-link">Vertical</a>
            <a href="#wizard_Icons" class="nav-link">Icons</a>
            <a href="#wizard_Vertical_Icons" class="nav-link">Vertical Icons</a>
            <a href="#wizard_Vertical_Validation" class="nav-link">Vertical Validation</a>
            <a href="#wizard_Validation" class="nav-link">Validation</a>
        </div>
    </div>

    <div class="row layout-top-spacing" id="cancel-row">

        <div id="wizard_Default" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Default</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <div class="bs-stepper stepper-form-one">
                        <div class="bs-stepper-header" role="tablist">
                            <div class="step" data-target="#defaultStep-one">
                                <button type="button" class="step-trigger" role="tab" >
                                    <span class="bs-stepper-circle">1</span>
                                    <span class="bs-stepper-label">Step One</span>
                                </button>
                            </div>
                            <div class="line"></div>
                            <div class="step" data-target="#defaultStep-two">
                                <button type="button" class="step-trigger" role="tab"  >
                                    <span class="bs-stepper-circle">2</span>
                                    <span class="bs-stepper-label">Step Two</span>
                                </button>
                            </div>
                            <div class="line"></div>
                            <div class="step" data-target="#defaultStep-three">
                                <button type="button" class="step-trigger" role="tab"  >
                                    <span class="bs-stepper-circle">3</span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Step Three</span>
                                    </span>
                                </button>
                            </div>
                        </div>
                        <div class="bs-stepper-content">
                            <div id="defaultStep-one" class="content" role="tabpanel">
                                <form>
                                    <div class="form-group mb-4">
                                        <label for="defaultForm-name">Name</label>
                                        <input type="text" class="form-control" id="defaultForm-name">
                                    </div>
                                </form>
                                
                                <div class="button-action mt-5">
                                    <button class="btn btn-secondary btn-prev me-3" disabled>Prev</button>
                                    <button class="btn btn-secondary btn-nxt">Next</button>
                                </div>
                            </div>
                            <div id="defaultStep-two" class="content" role="tabpanel">
                                <form>
                                    <div class="form-group mb-4">
                                        <label for="defaultEmailAddress">Email Address</label>
                                        <input type="email" class="form-control" id="defaultEmailAddress">
                                    </div>
                                </form>
                                
                                <div class="button-action mt-5">
                                    <button class="btn btn-secondary btn-prev me-3">Prev</button>
                                    <button class="btn btn-secondary btn-nxt">Next</button>
                                </div>
                            </div>
                            <div id="defaultStep-three" class="content" role="tabpanel" >
                                <form class="row g-3">
                                    <div class="col-12">
                                        <label for="defaultInputAddress" class="form-label">Address</label>
                                        <input type="text" class="form-control" id="defaultInputAddress" placeholder="1234 Main St">
                                    </div>
                                    <div class="col-12">
                                        <label for="defaultInputAddress2" class="form-label">Address 2</label>
                                        <input type="text" class="form-control" id="defaultInputAddress2" placeholder="Apartment, studio, or floor">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="defaultInputCity" class="form-label">City</label>
                                        <input type="text" class="form-control" id="defaultInputCity">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="defaultInputState" class="form-label">State</label>
                                        <select id="defaultInputState" class="form-select">
                                            <option selected="">Choose...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="defaultInputZip" class="form-label">Zip</label>
                                        <input type="text" class="form-control" id="defaultInputZip">
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="defaultGridCheck">
                                            <label class="form-check-label" for="defaultGridCheck">
                                                Check me out
                                            </label>
                                        </div>
                                    </div>
                                </form>

                                <div class="button-action mt-3">
                                    <button class="btn btn-secondary btn-prev me-3">Prev</button>
                                    <button class="btn btn-success me-3">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="wizard_Vertical" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Vertical Form</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    
                    <div class="bs-stepper stepper-form-vertical vertical linear">
                        <div class="bs-stepper-header" role="tablist">
                            <div class="step" data-target="#verticalFormStep-one">
                                <button type="button" class="step-trigger" role="tab" >
                                    <span class="bs-stepper-circle">1</span>
                                    <span class="bs-stepper-label">Step One</span>
                                </button>
                            </div>
                            <div class="line"></div>
                            <div class="step" data-target="#verticalFormStep-two">
                                <button type="button" class="step-trigger" role="tab"  >
                                    <span class="bs-stepper-circle">2</span>
                                    <span class="bs-stepper-label">Step Two</span>
                                </button>
                            </div>
                            <div class="line"></div>
                            <div class="step" data-target="#verticalFormStep-three">
                                <button type="button" class="step-trigger" role="tab"  >
                                    <span class="bs-stepper-circle">3</span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Step Three</span>
                                    </span>
                                </button>
                            </div>
                        </div>

                        <div class="bs-stepper-content">
                            <div id="verticalFormStep-one" class="content" role="tabpanel">
                                <form>
                                    <div class="form-group mb-4">
                                        <label for="verticalFormStepform-name">Name</label>
                                        <input type="text" class="form-control" id="verticalFormStepform-name" placeholder="name@example.com">
                                    </div>
                                </form>
                                
                                <div class="button-action mt-3">
                                    <button class="btn btn-secondary btn-prev me-3" disabled>Prev</button>
                                    <button class="btn btn-secondary btn-nxt">Next</button>
                                </div>
                            </div>
                            <div id="verticalFormStep-two" class="content" role="tabpanel">
                                <form>
                                    <div class="form-group mb-4">
                                        <label for="verticalFormStepEmailAddress">Email Address</label>
                                        <input type="email" class="form-control" id="verticalFormStepEmailAddress" placeholder="name@example.com">
                                    </div>
                                </form>
                                
                                <div class="button-action mt-3">
                                    <button class="btn btn-secondary btn-prev me-3">Prev</button>
                                    <button class="btn btn-secondary btn-nxt">Next</button>
                                </div>
                            </div>
                            <div id="verticalFormStep-three" class="content" role="tabpanel" >
                                <form class="row g-3">
                                    <div class="col-12">
                                        <label for="verticalFormInputAddress" class="form-label">Address</label>
                                        <input type="text" class="form-control" id="verticalFormInputAddress" placeholder="1234 Main St">
                                    </div>
                                    <div class="col-12">
                                        <label for="verticalFormInputAddress2" class="form-label">Address 2</label>
                                        <input type="text" class="form-control" id="verticalFormInputAddress2" placeholder="Apartment, studio, or floor">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="verticalFormStepInputCity" class="form-label">City</label>
                                        <input type="text" class="form-control" id="verticalFormStepInputCity">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="verticalFormStepInputState" class="form-label">State</label>
                                        <select id="verticalFormStepInputState" class="form-select">
                                            <option selected="">Choose...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="verticalFormStepInputZip" class="form-label">Zip</label>
                                        <input type="text" class="form-control" id="verticalFormStepInputZip">
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="verticalFormStepGridCheck">
                                            <label class="form-check-label" for="verticalFormStepGridCheck">
                                                Check me out
                                            </label>
                                        </div>
                                    </div>
                                </form>

                                <div class="button-action mt-3">
                                    <button class="btn btn-secondary btn-prev me-3">Prev</button>
                                    <button class="btn btn-success me-3">Submit</button>
                                </div>
                            </div>
                        </div>
                        
                    </div>

                </div>
            </div>
        </div>

        <div id="wizard_Icons" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>With icons</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <div class="bs-stepper stepper-icons">
                        <div class="bs-stepper-header" role="tablist">
                            <div class="step" data-target="#withIconsStep-one">
                                <button type="button" class="step-trigger" role="tab" >
                                    <span class="bs-stepper-circle"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg></span>
                                    <span class="bs-stepper-label">Step One</span>
                                </button>
                            </div>
                            <div class="line"></div>
                            <div class="step" data-target="#withIconsStep-two">
                                <button type="button" class="step-trigger" role="tab"  >
                                    <span class="bs-stepper-circle"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-send"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg></span>
                                    <span class="bs-stepper-label">Step Two</span>
                                </button>
                            </div>
                            <div class="line"></div>
                            <div class="step" data-target="#withIconsStep-three">
                                <button type="button" class="step-trigger" role="tab"  >
                                    <span class="bs-stepper-circle"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg></span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Step Three</span>
                                    </span>
                                </button>
                            </div>
                        </div>
                        <div class="bs-stepper-content">
                            <div id="withIconsStep-one" class="content" role="tabpanel">
                                <form>
                                    <div class="form-group mb-4">
                                        <label for="withIconsStepForm-name">Name</label>
                                        <input type="text" class="form-control" id="withIconsStepForm-name">
                                    </div>
                                </form>
                                
                                <div class="button-action mt-5">
                                    <button class="btn btn-secondary btn-prev me-3" disabled>Prev</button>
                                    <button class="btn btn-secondary btn-nxt">Next</button>
                                </div>
                            </div>
                            <div id="withIconsStep-two" class="content" role="tabpanel">
                                <form>
                                    <div class="form-group mb-4">
                                        <label for="withIconsStepEmailAddress">Email Address</label>
                                        <input type="email" class="form-control" id="withIconsStepEmailAddress">
                                    </div>
                                </form>
                                
                                <div class="button-action mt-5">
                                    <button class="btn btn-secondary btn-prev me-3">Prev</button>
                                    <button class="btn btn-secondary btn-nxt">Next</button>
                                </div>
                            </div>
                            <div id="withIconsStep-three" class="content" role="tabpanel" >
                                <form class="row g-3">
                                    <div class="col-12">
                                        <label for="withIconsInputAddress" class="form-label">Address</label>
                                        <input type="text" class="form-control" id="withIconsInputAddress" placeholder="1234 Main St">
                                    </div>
                                    <div class="col-12">
                                        <label for="withIconsInputAddress2" class="form-label">Address 2</label>
                                        <input type="text" class="form-control" id="withIconsInputAddress2" placeholder="Apartment, studio, or floor">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="withIconsStepInputCity" class="form-label">City</label>
                                        <input type="text" class="form-control" id="withIconsStepInputCity">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="withIconsStepInputState" class="form-label">State</label>
                                        <select id="withIconsStepInputState" class="form-select">
                                            <option selected="">Choose...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="withIconsStepInputZip" class="form-label">Zip</label>
                                        <input type="text" class="form-control" id="withIconsStepInputZip">
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="withIconsStepGridCheck">
                                            <label class="form-check-label" for="withIconsStepGridCheck">
                                                Check me out
                                            </label>
                                        </div>
                                    </div>
                                </form>

                                <div class="button-action mt-3">
                                    <button class="btn btn-secondary btn-prev me-3">Prev</button>
                                    <button class="btn btn-success me-3">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="wizard_Vertical_Icons" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Vertical with icons</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <div class="bs-stepper stepper-vertical-icons vertical linear">
                        <div class="bs-stepper-header" role="tablist">
                            <div class="step" data-target="#verticalWithIconsStep-one">
                                <button type="button" class="step-trigger" role="tab" >
                                    <span class="bs-stepper-circle"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg></span>
                                    <span class="bs-stepper-label">Step One</span>
                                </button>
                            </div>
                            <div class="line"></div>
                            <div class="step" data-target="#verticalWithIconsStep-two">
                                <button type="button" class="step-trigger" role="tab"  >
                                    <span class="bs-stepper-circle"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-send"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg></span>
                                    <span class="bs-stepper-label">Step Two</span>
                                </button>
                            </div>
                            <div class="line"></div>
                            <div class="step" data-target="#verticalWithIconsStep-three">
                                <button type="button" class="step-trigger" role="tab"  >
                                    <span class="bs-stepper-circle"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg></span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Step Three</span>
                                    </span>
                                </button>
                            </div>
                        </div>
                        <div class="bs-stepper-content">
                            <div id="verticalWithIconsStep-one" class="content" role="tabpanel">
                                <form>
                                    <div class="form-group mb-4">
                                        <label for="verticalWithIconsStepform-name">Name</label>
                                        <input type="text" class="form-control" id="verticalWithIconsStepform-name">
                                    </div>
                                </form>
                                
                                <div class="button-action mt-5">
                                    <button class="btn btn-secondary btn-prev me-3" disabled>Prev</button>
                                    <button class="btn btn-secondary btn-nxt">Next</button>
                                </div>
                            </div>
                            <div id="verticalWithIconsStep-two" class="content" role="tabpanel">
                                <form>
                                    <div class="form-group mb-4">
                                        <label for="verticalWithIconsStepEmailAddress">Email Address</label>
                                        <input type="email" class="form-control" id="verticalWithIconsStepEmailAddress">
                                    </div>
                                </form>
                                
                                <div class="button-action mt-5">
                                    <button class="btn btn-secondary btn-prev me-3">Prev</button>
                                    <button class="btn btn-secondary btn-nxt">Next</button>
                                </div>
                            </div>
                            <div id="verticalWithIconsStep-three" class="content" role="tabpanel" >
                                <form class="row g-3">
                                    <div class="col-12">
                                        <label for="verticalIconsInputAddress" class="form-label">Address</label>
                                        <input type="text" class="form-control" id="verticalIconsInputAddress" placeholder="1234 Main St">
                                    </div>
                                    <div class="col-12">
                                        <label for="verticalIconsInputAddress2" class="form-label">Address 2</label>
                                        <input type="text" class="form-control" id="verticalIconsInputAddress2" placeholder="Apartment, studio, or floor">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="verticalWithIconsStepInputCity" class="form-label">City</label>
                                        <input type="text" class="form-control" id="verticalWithIconsStepInputCity">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="verticalWithIconsStepInputState" class="form-label">State</label>
                                        <select id="verticalWithIconsStepInputState" class="form-select">
                                            <option selected="">Choose...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="verticalWithIconsStepInputZip" class="form-label">Zip</label>
                                        <input type="text" class="form-control" id="verticalWithIconsStepInputZip">
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="verticalWithIconsStepGridCheck">
                                            <label class="form-check-label" for="verticalWithIconsStepGridCheck">
                                                Check me out
                                            </label>
                                        </div>
                                    </div>
                                </form>

                                <div class="button-action mt-3">
                                    <button class="btn btn-secondary btn-prev me-3">Prev</button>
                                    <button class="btn btn-success me-3">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="wizard_Vertical_Validation" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Validation</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <div class="bs-stepper stepper-form-validation-one">
                        <div class="bs-stepper-header" role="tablist">
                            <div class="step" data-target="#validationStep-one">
                                <button type="button" class="step-trigger" role="tab" >
                                    <span class="bs-stepper-circle">1</span>
                                    <span class="bs-stepper-label">Step One</span>
                                </button>
                            </div>
                            <div class="line"></div>
                            <div class="step" data-target="#validationStep-two">
                                <button type="button" class="step-trigger" role="tab"  >
                                    <span class="bs-stepper-circle">2</span>
                                    <span class="bs-stepper-label">Step Two</span>
                                </button>
                            </div>
                            <div class="line"></div>
                            <div class="step" data-target="#validationStep-three">
                                <button type="button" class="step-trigger" role="tab"  >
                                    <span class="bs-stepper-circle">3</span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Step Three</span>
                                    </span>
                                </button>
                            </div>
                        </div>
                        <div class="bs-stepper-content">
                            <form class="needs-validation" onsubmit="return false" novalidate>

                                <div id="validationStep-one" class="content" role="tabpanel">
                                    <div id="test-form-1" class="needs-validation">
                                        <div class="form-group mb-4">
                                            <label for="validationStepform-name">Name</label>
                                            <input type="text" class="form-control" id="validationStepform-name" placeholder="" required>
                                            <div class="invalid-feedback">Please enter your name</div>
                                        </div>
                                    </div>
                                    
                                    <div class="button-action mt-5">
                                        <button class="btn btn-secondary btn-prev me-3" disabled>Prev</button>
                                        <button class="btn btn-secondary btn-nxt">Next</button>
                                    </div>
                                </div>
                                <div id="validationStep-two" class="content" role="tabpanel">
                                    <div class="needs-validation">
                                        <div class="form-group mb-4">
                                            <label for="validationStepEmailAddress">Email Address</label>
                                            <input type="email" class="form-control" id="validationStepEmailAddress" placeholder="" required>
                                            <div class="invalid-feedback">Please fill the email field</div>
                                        </div>
                                    </div>
                                    
                                    <div class="button-action mt-5">
                                        <button class="btn btn-secondary btn-prev me-3">Prev</button>
                                        <button class="btn btn-secondary btn-nxt">Next</button>
                                    </div>
                                </div>
                                <div id="validationStep-three" class="content" role="tabpanel" >
                                    <div class="row g-3 needs-validation">
                                        <div class="col-12">
                                            <label for="validationInputAddress" class="form-label">Address</label>
                                            <input type="text" class="form-control" id="validationInputAddress" placeholder="1234 Main St" required>
                                            <div class="invalid-feedback">Please fill the email field</div>
                                        </div>
                                        <div class="col-12">
                                            <label for="validationInputAddress2" class="form-label">Address 2</label>
                                            <input type="text" class="form-control" id="validationInputAddress2" placeholder="Apartment, studio, or floor" required>
                                            <div class="invalid-feedback">Please fill the email field</div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="validationStepInputCity" class="form-label">City</label>
                                            <input type="text" class="form-control" id="validationStepInputCity" required>
                                            <div class="invalid-feedback">Please fill the email field</div>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationStepInputState" class="form-label">State</label>
                                            <select id="validationStepInputState" class="form-select" required>
                                                <option selected="">Choose...</option>
                                                <option>...</option>
                                            </select>
                                            <div class="invalid-feedback">Please fill the email field</div>
                                        </div>
                                        <div class="col-md-2">
                                            <label for="validationStepInputZip" class="form-label">Zip</label>
                                            <input type="text" class="form-control" id="validationStepInputZip" required>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="validationStepGridCheck" required>
                                                <label class="form-check-label" for="validationStepGridCheck">
                                                    Check me out
                                                </label>
                                                <div class="invalid-feedback">Please fill the email field</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="button-action mt-3">
                                        <button class="btn btn-secondary btn-prev me-3">Prev</button>
                                        <button class="btn btn-success btn-submit">Submit</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="wizard_Validation" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Vertical Form Validation</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    
                    <div class="bs-stepper stepper-form-validation-vertical vertical linear">
                        <div class="bs-stepper-header" role="tablist">
                            <div class="step" data-target="#verticalFormValidationStep-one">
                                <button type="button" class="step-trigger" role="tab" >
                                    <span class="bs-stepper-circle">1</span>
                                    <span class="bs-stepper-label">Step One</span>
                                </button>
                            </div>
                            <div class="line"></div>
                            <div class="step" data-target="#verticalFormValidationStep-two">
                                <button type="button" class="step-trigger" role="tab"  >
                                    <span class="bs-stepper-circle">2</span>
                                    <span class="bs-stepper-label">Step Two</span>
                                </button>
                            </div>
                            <div class="line"></div>
                            <div class="step" data-target="#verticalFormValidationStep-three">
                                <button type="button" class="step-trigger" role="tab"  >
                                    <span class="bs-stepper-circle">3</span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Step Three</span>
                                    </span>
                                </button>
                            </div>
                        </div>
                        <div class="bs-stepper-content">
                            <form class="needs-validation" onsubmit="return false" novalidate>

                                <div id="verticalFormValidationStep-one" class="content" role="tabpanel">
                                    <div id="test-form-2" class="needs-validation">
                                        <div class="form-group mb-4">
                                            <label for="verticalFormValidationStepform-name">Name</label>
                                            <input type="text" class="form-control" id="verticalFormValidationStepform-name" placeholder="" required>
                                            <div class="invalid-feedback">Please enter your name</div>
                                        </div>
                                    </div>
                                    
                                    <div class="button-action mt-5">
                                        <button class="btn btn-secondary btn-prev me-3" disabled>Prev</button>
                                        <button class="btn btn-secondary btn-nxt">Next</button>
                                    </div>
                                </div>
                                <div id="verticalFormValidationStep-two" class="content" role="tabpanel">
                                    <div class="needs-validation">
                                        <div class="form-group mb-4">
                                            <label for="verticalFormValidationStepEmailAddress">Email Address</label>
                                            <input type="email" class="form-control" id="verticalFormValidationStepEmailAddress" placeholder="" required>
                                            <div class="invalid-feedback">Please fill the email field</div>
                                        </div>
                                    </div>
                                    
                                    <div class="button-action mt-5">
                                        <button class="btn btn-secondary btn-prev me-3">Prev</button>
                                        <button class="btn btn-secondary btn-nxt">Next</button>
                                    </div>
                                </div>
                                <div id="verticalFormValidationStep-three" class="content" role="tabpanel" >
                                    <div class="row g-3 needs-validation">
                                        <div class="col-12">
                                            <label for="verticalValidationinputAddress" class="form-label">Address</label>
                                            <input type="text" class="form-control" id="verticalValidationinputAddress" placeholder="1234 Main St" required>
                                            <div class="invalid-feedback">Please fill the email field</div>
                                        </div>
                                        <div class="col-12">
                                            <label for="verticalValidationinputAddress2" class="form-label">Address 2</label>
                                            <input type="text" class="form-control" id="verticalValidationinputAddress2" placeholder="Apartment, studio, or floor" required>
                                            <div class="invalid-feedback">Please fill the email field</div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="verticalFormValidationStepInputCity" class="form-label">City</label>
                                            <input type="text" class="form-control" id="verticalFormValidationStepInputCity" required>
                                            <div class="invalid-feedback">Please fill the email field</div>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="verticalFormValidationStepInputState" class="form-label">State</label>
                                            <select id="verticalFormValidationStepInputState" class="form-select" required>
                                                <option selected="">Choose...</option>
                                                <option>...</option>
                                            </select>
                                            <div class="invalid-feedback">Please fill the email field</div>
                                        </div>
                                        <div class="col-md-2">
                                            <label for="verticalFormValidationStepInputZip" class="form-label">Zip</label>
                                            <input type="text" class="form-control" id="verticalFormValidationStepInputZip" required>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="verticalFormValidationStepGridCheck" required>
                                                <label class="form-check-label" for="verticalFormValidationStepGridCheck">
                                                    Check me out
                                                </label>
                                                <div class="invalid-feedback">Please fill the email field</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="button-action mt-3">
                                        <button class="btn btn-secondary btn-prev me-3">Prev</button>
                                        <button class="btn btn-success btn-submit">Submit</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

    </div>
    
    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <x-slot:footerFiles>
        <script src="{{asset('plugins/stepper/bsStepper.min.js')}}"></script>
        <script src="{{asset('plugins/stepper/custom-bsStepper.min.js')}}"></script>
    </x-slot>
    <!--  END CUSTOM SCRIPTS FILE  -->
</x-base-layout>