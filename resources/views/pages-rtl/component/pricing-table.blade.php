<x-rtl.base-layout :scrollspy="false">

    <x-slot:pageTitle>
        {{$title}} 
    </x-slot>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <x-slot:headerFiles>
        <!--  BEGIN CUSTOM STYLE FILE  -->
        @vite(['resources/rtl/scss/light/assets/forms/switches.scss'])
        @vite(['resources/rtl/scss/light/plugins/pricing-table/css/component.scss'])

        @vite(['resources/rtl/scss/dark/assets/forms/switches.scss'])
        @vite(['resources/rtl/scss/dark/plugins/pricing-table/css/component.scss'])
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
                <li class="breadcrumb-item"><a href="#">Components</a></li>
                <li class="breadcrumb-item active" aria-current="page">Pricing Table</li>
            </ol>
        </nav>
    </div>
    <!-- /BREADCRUMB -->                
    
    <div class="row" id="cancel-row">

        <div class="col-lg-12 layout-spacing layout-top-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Toggle</h4>
                        </div>           
                    </div>
                </div>
                <div class="widget-content widget-content-area">

                    <div class="pricing-table-2 ">
                        
                        <!-- Billing Cycle  -->
                        <div class="billing-cycle-radios mt-5">

                            <div class="switch form-switch-custom switch-inline form-switch-primary form-switch-custom inner-label-toggle show">
                                <div class="input-checkbox">
                                    <span class="switch-chk-label label-left">Monthly</span>
                                    <input class="switch-input" type="checkbox" role="switch" id="toggle-1" checked onchange="this.checked ? this.closest('.inner-label-toggle').classList.add('show') : this.closest('.inner-label-toggle').classList.remove('show')">
                                    <span class="switch-chk-label label-right">Yearly</span>
                                </div>
                            </div>

                        </div>

                        <!-- Pricing Plans Container -->
                        <div class="pricing-plans-container mt-5 billed-yearly">
                            <!-- Plan -->
                            <div class="pricing-plan mb-5">

                                <span class="badge badge-pill badge-warning show">45% Off</span>

                                <div class="pricing-header-section">
                                    <div class="pricing-header">
                                        <h3>Basic</h3>
                                        <p>Most Popular</p>
                                    </div>

                                    <div class="pricing-header-pricing">
                                        <p class="pricing monthly-pricing">$ 9.50</p>
                                        <p class="pricing yearly-pricing">$ 5.50</p>
                                        <p class="sub-title monthly-pricing-label">Per month</p>
                                    </div>
                                </div>
                                
                                <div class="pricing-plan-features mb-4">
                                    <ul>
                                        <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg></span> 100MB Storage</li>
                                        <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg></span> 1 Guests + 2.50 per extra seat</li>
                                        <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg></span> 100 Automations/mo</li>
                                        <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg></span> 1 Domains</li>
                                        <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg></span> 6 Month Update</li>
                                        <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg></span> 48 Hours Support</li>
                                    </ul>
                                </div>
                                <a href="javascript:void(0);" class="button btn btn-dark btn-block margin-top-20">Get Started</a>
                            </div>
                            <!-- Plan -->
                            <div class="pricing-plan mb-5 recommanded">

                                <span class="badge badge-pill badge-warning show">45% Off</span>
                                
                                <div class="pricing-header-section">
                                    <div class="pricing-header">
                                        <h3>Plus</h3>
                                        <p>Recommended</p>
                                    </div>

                                    <div class="pricing-header-pricing">
                                        <p class="pricing monthly-pricing">$ 19.50</p>
                                        <p class="pricing yearly-pricing">$ 9.50</p>
                                        <p class="sub-title monthly-pricing-label">Per month</p>
                                    </div>
                                </div>
                                
                                <div class="pricing-plan-features mb-4">
                                    <ul>
                                        <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg></span> Unlimited</li>
                                        <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg></span> 5 Guests + 2 per extra seat</li>
                                        <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg></span> 1000 Automations/mo</li>
                                        <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg></span> 5 Domains</li>
                                        <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg></span> 1 Year Update</li>
                                        <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg></span> 24 Hours Support</li>
                                    </ul>
                                </div>
                                <a href="javascript:void(0);" class="button btn btn-dark btn-block margin-top-20">Get Started</a>
                            </div>
                            <!-- Plan -->
                            <div class="pricing-plan mb-5">

                                <span class="badge badge-pill badge-warning show">45% Off</span>

                                <div class="pricing-header-section">
                                    <div class="pricing-header">
                                        <h3>Business</h3>
                                        <p>Best Value</p>
                                    </div>

                                    <div class="pricing-header-pricing">
                                        <p class="pricing monthly-pricing">$ 29.50</p>
                                        <p class="pricing yearly-pricing">$ 19.50</p>
                                        <p class="sub-title monthly-pricing-label">Per month</p>
                                    </div>
                                </div>
                                
                                <div class="pricing-plan-features mb-4">
                                    <ul>
                                        <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg></span> Unlimited</li>
                                        <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg></span> 10 Guests + 5 per extra seat</li>
                                        <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg></span> 20k Automations/mo </li>
                                        <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg></span> 10 Domains</li>
                                        <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg></span> 2 Year Update</li>
                                        <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg></span> Priority Support</li>
                                    </ul>
                                </div>
                                <a href="javascript:void(0);" class="button btn btn-dark btn-block margin-top-20">Get Started</a>
                            </div>
                        </div>

                        <div class="code-section-container">
                                    
                    <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                    <div class="code-section text-left">
                        <pre>
&lt;div class="container"&gt;
&lt;div class="row"&gt;
&lt;div class="col-lg-12"&gt;
&lt;!-- Billing Cycle  --&gt;
&lt;div class="billing-cycle-radios mt-5"&gt;
    &lt;div class="radio billed-yearly-radio"&gt;
        &lt;div class="d-flex justify-content-center"&gt;
            &lt;span class="txt-monthly"&gt;Monthly&lt;/span&gt;
            &lt;label class="switch s-icons s-outline  s-outline-success"&gt;
                &lt;input type="checkbox" id="radio-6"&gt;
                &lt;span class="slider round"&gt;&lt;/span&gt;
            &lt;/label&gt;
            &lt;span class="txt-yearly"&gt;Yearly &lt;span class="badge badge-pill badge-primary"&gt;20% Off&lt;/span&gt;&lt;/span&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Pricing Plans Container --&gt;
&lt;div class="pricing-plans-container mt-5 d-md-flex d-block"&gt;
    &lt;!-- Plan --&gt;
    &lt;div class="pricing-plan mb-5"&gt;
        &lt;h3&gt;Cloud Hosting&lt;/h3&gt;
        &lt;p class="margin-top-10"&gt;cPanel/WHM included. Intel Xeon E3 with guaranteed 2GB RAM.&lt;/p&gt;
        &lt;div class="pricing-plan-label billed-monthly-label"&gt;&lt;strong&gt;$25&lt;/strong&gt;/ monthly&lt;/div&gt;
        &lt;div class="pricing-plan-label billed-yearly-label"&gt;&lt;strong&gt;$290&lt;/strong&gt;/ yearly&lt;/div&gt;
        &lt;div class="pricing-plan-features mb-4"&gt;
            &lt;strong&gt;Cloud Hosting Features&lt;/strong&gt;
            &lt;ul&gt;
                &lt;li&gt;Single Domain&lt;/li&gt;
                &lt;li&gt;50 GB SSD&lt;/li&gt;
                &lt;li&gt;1 TB Premium Bandwidth&lt;/li&gt;
            &lt;/ul&gt;
        &lt;/div&gt;
        &lt;a href="javascript:void(0);" class="button btn btn-primary btn-block margin-top-20"&gt;Buy Now&lt;/a&gt;
    &lt;/div&gt;
    &lt;!-- Plan --&gt;
    &lt;div class="pricing-plan mb-5 mt-md-0 recommended"&gt;
        &lt;div class="recommended-badge"&gt;Most Popular&lt;/div&gt;
        &lt;h3&gt;VPS Hosting&lt;/h3&gt;
        &lt;p class="margin-top-10"&gt;cPanel/WHM included. Intel Xeon E5 with guaranteed 4GB RAM.&lt;/p&gt;
        &lt;div class="pricing-plan-label billed-monthly-label"&gt;&lt;strong&gt;$70&lt;/strong&gt;/ monthly&lt;/div&gt;
        &lt;div class="pricing-plan-label billed-yearly-label"&gt;&lt;strong&gt;$670&lt;/strong&gt;/ yearly&lt;/div&gt;
        &lt;div class="pricing-plan-features mb-4"&gt;
            &lt;strong&gt;VPS Hosting Features&lt;/strong&gt;
            &lt;ul&gt;
                &lt;li&gt;5 Domains&lt;/li&gt;
                &lt;li&gt;100 GB SSD&lt;/li&gt;
                &lt;li&gt;2 TB Premium Bandwidth&lt;/li&gt;
            &lt;/ul&gt;
        &lt;/div&gt;
        &lt;a href="javascript:void(0);" class="button btn btn-default btn-block margin-top-20"&gt;Buy Now&lt;/a&gt;
    &lt;/div&gt;
    &lt;!-- Plan --&gt;
    &lt;div class="pricing-plan mb-5"&gt;
        &lt;h3&gt;Business Hosting&lt;/h3&gt;
        &lt;p class="margin-top-10"&gt;cPanel/WHM included. Intel Xeon E5 with guaranteed 8GB RAM.&lt;/p&gt;
        &lt;div class="pricing-plan-label billed-monthly-label"&gt;&lt;strong&gt;$115&lt;/strong&gt;/ monthly&lt;/div&gt;
        &lt;div class="pricing-plan-label billed-yearly-label"&gt;&lt;strong&gt;$1100&lt;/strong&gt;/ yearly&lt;/div&gt;
        &lt;div class="pricing-plan-features mb-4"&gt;
            &lt;strong&gt;Business Hosting Features&lt;/strong&gt;
            &lt;ul&gt;
                &lt;li&gt;Unlimited Domains&lt;/li&gt;
                &lt;li&gt;1 TB SSD&lt;/li&gt;
                &lt;li&gt;5 TB Premium Bandwidth&lt;/li&gt;
            &lt;/ul&gt;
        &lt;/div&gt;
        &lt;a href="javascript:void(0);" class="button btn btn-primary btn-block margin-top-20"&gt;Buy Now&lt;/a&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;</pre>
                    </div>
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
                            <h4>Basic</h4>
                        </div>           
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <div class="">
                        <section class="pricing-section bg-7 mt-5">
                            <div class="pricing pricing--norbu">
                                <div class="pricing__item">
                                    <h3 class="pricing__title">Beginner Savers</h3>
                                    <p class="pricing__sentence">For people who are starting out in the water saving business</p>
                                    <div class="pricing__price"><span class="pricing__currency">$</span>19<span class="pricing__period">/ month</span></div>
                                    <ul class="pricing__feature-list text-start">
                                        <li class="pricing__feature"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg> Free water saving e-book</li>
                                        <li class="pricing__feature"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg> Free access to forums</li>
                                        <li class="pricing__feature"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg> Beginners tips</li>
                                    </ul>
                                    <button class="pricing__action mx-auto mb-4">Buy</button>
                                </div>
                                <div class="pricing__item pricing__item--featured">
                                    <h3 class="pricing__title">Advanced Savers</h3>
                                    <p class="pricing__sentence">For experienced water savers who'd like to push their limits</p>
                                    <div class="pricing__price"><span class="pricing__currency">$</span>29<span class="pricing__period">/ month</span></div>
                                    <ul class="pricing__feature-list text-start">
                                        <li class="pricing__feature"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg> Free water saving e-book</li>
                                        <li class="pricing__feature"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg> Free access to forums</li>
                                        <li class="pricing__feature"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg> Advanced saving tips</li>
                                    </ul>
                                    <button class="pricing__action mx-auto mb-4">Buy</button>
                                </div>
                                <div class="pricing__item">
                                    <h3 class="pricing__title">Pro Savers</h3>
                                    <p class="pricing__sentence">For all the professionals who'd like to educate others, too</p>
                                    <div class="pricing__price"><span class="pricing__currency">$</span>79<span class="pricing__period">/ month</span></div>
                                    <ul class="pricing__feature-list text-start">
                                        <li class="pricing__feature"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg> Access to all books</li>
                                        <li class="pricing__feature"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg> Unlimited board topics</li>
                                        <li class="pricing__feature"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg> Beginners tips</li>
                                    </ul>
                                    <button class="pricing__action mx-auto mb-4">Buy</button>
                                </div>
                            </div>
                        </section>

                        <div class="code-section-container">

                            <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                            <div class="code-section text-left">
                                <pre>
&lt;div class="row"&gt;
    &lt;div class="col-lg-12"&gt;
        &lt;section class="pricing-section bg-7 mt-5"&gt;
            &lt;div class="pricing pricing--norbu"&gt;
                &lt;div class="pricing__item"&gt;
                    &lt;h3 class="pricing__title"&gt;Beginner Savers&lt;/h3&gt;
                    &lt;p class="pricing__sentence"&gt;For people who are starting out in the water saving business&lt;/p&gt;
                    &lt;div class="pricing__price"&gt;&lt;span class="pricing__currency"&gt;$&lt;/span&gt;19&lt;span class="pricing__period"&gt;/ month&lt;/span&gt;&lt;/div&gt;
                    &lt;ul class="pricing__feature-list text-center"&gt;
                        &lt;li class="pricing__feature"&gt;&lt;svg&gt; ... &lt;/svg&gt; Free water saving e-book&lt;/li&gt;
                        &lt;li class="pricing__feature"&gt;&lt;svg&gt; ... &lt;/svg&gt; Free access to forums&lt;/li&gt;
                        &lt;li class="pricing__feature"&gt;&lt;svg&gt; ... &lt;/svg&gt; Beginners tips&lt;/li&gt;
                    &lt;/ul&gt;
                    &lt;button class="pricing__action mx-auto mb-4"&gt;Buy&lt;/button&gt;
                &lt;/div&gt;
                &lt;div class="pricing__item pricing__item--featured"&gt;
                    &lt;h3 class="pricing__title"&gt;Advanced Savers&lt;/h3&gt;
                    &lt;p class="pricing__sentence"&gt;For experienced water savers who'd like to push their limits&lt;/p&gt;
                    &lt;div class="pricing__price"&gt;&lt;span class="pricing__currency"&gt;$&lt;/span&gt;29&lt;span class="pricing__period"&gt;/ month&lt;/span&gt;&lt;/div&gt;
                    &lt;ul class="pricing__feature-list text-center"&gt;
                        &lt;li class="pricing__feature"&gt;&lt;svg&gt; ... &lt;/svg&gt; Free water saving e-book&lt;/li&gt;
                        &lt;li class="pricing__feature"&gt;&lt;svg&gt; ... &lt;/svg&gt; Free access to forums&lt;/li&gt;
                        &lt;li class="pricing__feature"&gt;&lt;svg&gt; ... &lt;/svg&gt; Advanced saving tips&lt;/li&gt;
                    &lt;/ul&gt;
                    &lt;button class="pricing__action mx-auto mb-4"&gt;Buy&lt;/button&gt;
                &lt;/div&gt;
                &lt;div class="pricing__item"&gt;
                    &lt;h3 class="pricing__title"&gt;Pro Savers&lt;/h3&gt;
                    &lt;p class="pricing__sentence"&gt;For all the professionals who'd like to educate others, too&lt;/p&gt;
                    &lt;div class="pricing__price"&gt;&lt;span class="pricing__currency"&gt;$&lt;/span&gt;79&lt;span class="pricing__period"&gt;/ month&lt;/span&gt;&lt;/div&gt;
                    &lt;ul class="pricing__feature-list text-center"&gt;
                        &lt;li class="pricing__feature"&gt;&lt;svg&gt; ... &lt;/svg&gt; Access to all books&lt;/li&gt;
                        &lt;li class="pricing__feature"&gt;&lt;svg&gt; ... &lt;/svg&gt; Unlimited board topics&lt;/li&gt;
                        &lt;li class="pricing__feature"&gt;&lt;svg&gt; ... &lt;/svg&gt; Beginners tips&lt;/li&gt;
                    &lt;/ul&gt;
                    &lt;button class="pricing__action mx-auto mb-4"&gt;Buy&lt;/button&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/section&gt;    
    &lt;/div&gt;
&lt;/div&gt;</pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    
    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <x-slot:footerFiles>
        <script type="module">
            var getSwithchInput = document.querySelector('#toggle-1');
            var pricingContainer = document.querySelector('.pricing-plans-container')
            
            getSwithchInput.addEventListener('change', function() {
                var isChecked = getSwithchInput.checked;
                if (isChecked) {
                    pricingContainer.classList.add('billed-yearly');
                    
                    pricingContainer.querySelectorAll('.badge').forEach(element => {
                        element.classList.add('show')
                    });
                    
                } else {
                    pricingContainer.classList.remove('billed-yearly')
                    pricingContainer.querySelectorAll('.badge').forEach(element => {
                        element.classList.remove('show')
                    });
                }
            })
        </script>
    </x-slot>
    <!--  END CUSTOM SCRIPTS FILE  -->
</x-rtl.base-layout>