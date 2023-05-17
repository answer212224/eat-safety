<x-base-layout :scrollspy="false">

    <x-slot:pageTitle>
        {{ $title }}
    </x-slot:pageTitle>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <x-slot:headerFiles>
        <!--  BEGIN CUSTOM STYLE FILE  -->
        <link rel="stylesheet" href="{{ asset('plugins/stepper/bsStepper.min.css') }}">
        @vite(['resources/scss/light/plugins/stepper/custom-bsStepper.scss'])
        @vite(['resources/scss/dark/plugins/stepper/custom-bsStepper.scss'])
        <!--  END CUSTOM STYLE FILE  -->
    </x-slot:headerFiles>
    <!-- END GLOBAL MANDATORY STYLES -->

    <div class="row layout-top-spacing">


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
                                <button type="button" class="step-trigger" role="tab">
                                    <span class="bs-stepper-circle">1</span>
                                    <span class="bs-stepper-label">Step One</span>
                                </button>
                            </div>
                            <div class="line"></div>
                            <div class="step" data-target="#validationStep-two">
                                <button type="button" class="step-trigger" role="tab">
                                    <span class="bs-stepper-circle">2</span>
                                    <span class="bs-stepper-label">Step Two</span>
                                </button>
                            </div>
                            <div class="line"></div>
                            <div class="step" data-target="#validationStep-three">
                                <button type="button" class="step-trigger" role="tab">
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
                                            <input type="text" class="form-control" id="validationStepform-name"
                                                placeholder="" required>
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
                                            <input type="email" class="form-control " id="validationStepEmailAddress"
                                                placeholder="" required>
                                            <div class="invalid-feedback">Please fill the Address field</div>
                                        </div>
                                    </div>

                                    <div class="button-action mt-5">
                                        <button class="btn btn-secondary btn-prev me-3">Prev</button>
                                        <button class="btn btn-secondary btn-nxt">Next</button>
                                    </div>
                                </div>
                                <div id="validationStep-three" class="content" role="tabpanel">
                                    <div class="row g-3 needs-validation">
                                        <div class="col-12">
                                            <label for="validationInputAddress" class="form-label">Address</label>
                                            <input type="text" class="form-control" id="validationInputAddress"
                                                placeholder="1234 Main St" required>
                                            <div class="invalid-feedback">Please fill the Address field</div>

                                        </div>
                                        <div class="col-12">
                                            <label for="validationInputAddress2" class="form-label">Address 2</label>
                                            <input type="text" class="form-control" id="validationInputAddress2"
                                                placeholder="Apartment, studio, or floor" required>
                                            <div class="invalid-feedback">Please fill the Address field</div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="validationStepInputCity" class="form-label">City</label>
                                            <input type="text" class="form-control" id="validationStepInputCity"
                                                required>
                                            <div class="invalid-feedback">Please fill the City field</div>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationStepInputState" class="form-label">State</label>
                                            <select id="validationStepInputState" class="form-select" required>
                                                <option selected="">Choose...</option>
                                                <option>...</option>
                                            </select>
                                            <div class="invalid-feedback">Please fill the State field</div>
                                        </div>
                                        <div class="col-md-2">
                                            <label for="validationStepInputZip" class="form-label">Zip</label>
                                            <input type="text" class="form-control" id="validationStepInputZip"
                                                required>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    id="validationStepGridCheck" required>
                                                <label class="form-check-label" for="validationStepGridCheck">
                                                    Check me out
                                                </label>
                                                <div class="invalid-feedback">Please fill the checkbox</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="button-action mt-3">
                                        <button class="btn btn-secondary btn-prev me-3">Prev</button>
                                        <button class="btn btn-success btn-submit" type="submit">Submit</button>
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
        <script src="{{ asset('plugins/stepper/bsStepper.min.js') }}"></script>
        <script>
            var stepper1
            var stepper2
            var stepper3
            var stepper4
            var stepperForm

            document.addEventListener('DOMContentLoaded', function() {

                stepper4 = new Stepper(document.querySelector('#stepper4'))

                var stepperFormEl = document.querySelector('#stepperForm')
                stepperForm = new Stepper(stepperFormEl, {
                    animation: true
                })

                var btnNextList = [].slice.call(document.querySelectorAll('.btn-next-form'))
                var stepperPanList = [].slice.call(stepperFormEl.querySelectorAll('.bs-stepper-pane'))
                var inputMailForm = document.getElementById('inputMailForm')
                var inputPasswordForm = document.getElementById('inputPasswordForm')
                var form = stepperFormEl.querySelector('.bs-stepper-content form')

                btnNextList.forEach(function(btn) {
                    btn.addEventListener('click', function() {
                        stepperForm.next()
                    })
                })

                stepperFormEl.addEventListener('show.bs-stepper', function(event) {
                    form.classList.remove('was-validated')
                    var nextStep = event.detail.indexStep
                    var currentStep = nextStep

                    if (currentStep > 0) {
                        currentStep--
                    }

                    var stepperPan = stepperPanList[currentStep]

                    if ((stepperPan.getAttribute('id') === 'test-form-1' && !inputMailForm.value.length) ||
                        (stepperPan.getAttribute('id') === 'test-form-2' && !inputPasswordForm.value.length)) {
                        event.preventDefault()
                        form.classList.add('was-validated')
                    }
                })
            })
        </script>
    </x-slot:footerFiles>
    <!--  END CUSTOM SCRIPTS FILE  -->
</x-base-layout>
