<x-rtl.base-layout :scrollspy="true">

    <x-slot:pageTitle>
        {{$title}} 
    </x-slot>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <x-slot:headerFiles>
        <!--  BEGIN CUSTOM STYLE FILE  -->
        <link rel="stylesheet" type="text/css" href="{{asset('plugins-rtl/tomSelect/tom-select.default.min.css')}}">
        @vite(['resources/rtl/scss/light/plugins/tomSelect/custom-tomSelect.scss'])
        @vite(['resources/rtl/scss/dark/plugins/tomSelect/custom-tomSelect.scss'])
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
                <li class="breadcrumb-item active" aria-current="page"><li>
                <a href="./form-tom-select.html"> Tom Select </a>
            </li></li>
            </ol>
        </nav>
    </div>
    <!-- /BREADCRUMB -->

    <div id="navSection" data-bs-spy="affix" class="nav  sidenav">
        <div class="sidenav-content">
            <a href="#tagging" class="active nav-link">Tagging</a>
            <a href="#select-box" class="nav-link">Select Box</a>
            <a href="#multi-select" class="nav-link">Multi Select</a>
            <a href="#disabled-option" class="nav-link">Disabled Option</a>
            <a href="#disabled-select" class="nav-link">Disabled Select</a>
        </div>
    </div>
    
    <div class="row layout-top-spacing">
    
        <div id="tagging" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">                                
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Tagging</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <input id="input-tags" value="awesome,neat" autocomplete="off" placeholder="How cool is this?">

                    <div class="code-section-container show-code">
                        <button class="btn toggle-code-snippet"><span>HTML</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;input id=&quot;input-tags&quot; value=&quot;awesome,neat&quot; autocomplete=&quot;off&quot; placeholder=&quot;How cool is this?&quot;&gt;</pre>
                        </div>
                    </div>

                    <div class="code-section-container show-code">
                        <button class="btn toggle-code-snippet"><span>JS</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
// Basic

new TomSelect("#input-tags",{
persist: false,
createOnBlur: true,
create: true
});</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="select-box" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">                                
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Select Box</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">

                    <select id="select-beast" placeholder="Select a person..." autocomplete="off">
                        <option value="">Select a person...</option>
                        <option value="4">Thomas Edison</option>
                        <option value="1">Nikola</option>
                        <option value="3">Nikola Tesla</option>
                        <option value="5">Arnold Schwarzenegger</option>
                    </select>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>HTML</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;select id=&quot;select-beast&quot; placeholder=&quot;Select a person...&quot; autocomplete=&quot;off&quot;&gt;
&lt;option value=&quot;&quot;&gt;Select a person...&lt;/option&gt;
&lt;option value=&quot;4&quot;&gt;Thomas Edison&lt;/option&gt;
&lt;option value=&quot;1&quot;&gt;Nikola&lt;/option&gt;
&lt;option value=&quot;3&quot;&gt;Nikola Tesla&lt;/option&gt;
&lt;option value=&quot;5&quot;&gt;Arnold Schwarzenegger&lt;/option&gt;
&lt;/select&gt;</pre>
                        </div>
                    </div>

                    <div class="code-section-container">
                        <button class="btn toggle-code-snippet"><span>JS</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
// Select Box

new TomSelect("#select-beast",{
create: true,
sortField: {
field: "text",
direction: "asc"
}
});</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <div id="multi-select" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">                                
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Multi Select</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">

                    <select id="select-state" name="state[]" multiple placeholder="Select a state..." autocomplete="off">
                        <option value="">Select a state...</option>
                        <option value="AL">Alabama</option>
                        <option value="AK">Alaska</option>
                        <option value="AZ">Arizona</option>
                        <option value="AR">Arkansas</option>
                        <option value="CA" selected>California</option>
                        <option value="CO">Colorado</option>
                        <option value="CT">Connecticut</option>
                        <option value="DE">Delaware</option>
                        <option value="DC">District of Columbia</option>
                        <option value="FL">Florida</option>
                        <option value="GA">Georgia</option>
                        <option value="HI">Hawaii</option>
                        <option value="ID">Idaho</option>
                        <option value="IL">Illinois</option>
                        <option value="IN">Indiana</option>
                        <option value="IA">Iowa</option>
                        <option value="KS">Kansas</option>
                        <option value="KY">Kentucky</option>
                        <option value="LA">Louisiana</option>
                        <option value="ME">Maine</option>
                        <option value="MD">Maryland</option>
                        <option value="MA">Massachusetts</option>
                        <option value="MI">Michigan</option>
                        <option value="MN">Minnesota</option>
                        <option value="MS">Mississippi</option>
                        <option value="MO">Missouri</option>
                        <option value="MT">Montana</option>
                        <option value="NE">Nebraska</option>
                        <option value="NV">Nevada</option>
                        <option value="NH">New Hampshire</option>
                        <option value="NJ">New Jersey</option>
                        <option value="NM">New Mexico</option>
                        <option value="NY">New York</option>
                        <option value="NC">North Carolina</option>
                        <option value="ND">North Dakota</option>
                        <option value="OH">Ohio</option>
                        <option value="OK">Oklahoma</option>
                        <option value="OR">Oregon</option>
                        <option value="PA">Pennsylvania</option>
                        <option value="RI">Rhode Island</option>
                        <option value="SC">South Carolina</option>
                        <option value="SD">South Dakota</option>
                        <option value="TN">Tennessee</option>
                        <option value="TX">Texas</option>
                        <option value="UT">Utah</option>
                        <option value="VT">Vermont</option>
                        <option value="VA">Virginia</option>
                        <option value="WA">Washington</option>
                        <option value="WV">West Virginia</option>
                        <option value="WI">Wisconsin</option>
                        <option value="WY" selected>Wyoming</option>
                    </select>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>HTML</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;select id=&quot;select-state&quot; name=&quot;state[]&quot; multiple placeholder=&quot;Select a state...&quot; autocomplete=&quot;off&quot;&gt;
&lt;option value=&quot;&quot;&gt;Select a state...&lt;/option&gt;
&lt;option value=&quot;AL&quot;&gt;Alabama&lt;/option&gt;
&lt;option value=&quot;AK&quot;&gt;Alaska&lt;/option&gt;
&lt;option value=&quot;AZ&quot;&gt;Arizona&lt;/option&gt;
&lt;option value=&quot;AR&quot;&gt;Arkansas&lt;/option&gt;
&lt;option value=&quot;CA&quot; selected&gt;California&lt;/option&gt;
&lt;option value=&quot;CO&quot;&gt;Colorado&lt;/option&gt;
&lt;option value=&quot;CT&quot;&gt;Connecticut&lt;/option&gt;
&lt;option value=&quot;DE&quot;&gt;Delaware&lt;/option&gt;
&lt;option value=&quot;DC&quot;&gt;District of Columbia&lt;/option&gt;
&lt;option value=&quot;FL&quot;&gt;Florida&lt;/option&gt;
&lt;option value=&quot;GA&quot;&gt;Georgia&lt;/option&gt;
&lt;option value=&quot;HI&quot;&gt;Hawaii&lt;/option&gt;
&lt;option value=&quot;ID&quot;&gt;Idaho&lt;/option&gt;
&lt;option value=&quot;IL&quot;&gt;Illinois&lt;/option&gt;
&lt;option value=&quot;IN&quot;&gt;Indiana&lt;/option&gt;
&lt;option value=&quot;IA&quot;&gt;Iowa&lt;/option&gt;
&lt;option value=&quot;KS&quot;&gt;Kansas&lt;/option&gt;
&lt;option value=&quot;KY&quot;&gt;Kentucky&lt;/option&gt;
&lt;option value=&quot;LA&quot;&gt;Louisiana&lt;/option&gt;
&lt;option value=&quot;ME&quot;&gt;Maine&lt;/option&gt;
&lt;option value=&quot;MD&quot;&gt;Maryland&lt;/option&gt;
&lt;option value=&quot;MA&quot;&gt;Massachusetts&lt;/option&gt;
&lt;option value=&quot;MI&quot;&gt;Michigan&lt;/option&gt;
&lt;option value=&quot;MN&quot;&gt;Minnesota&lt;/option&gt;
&lt;option value=&quot;MS&quot;&gt;Mississippi&lt;/option&gt;
&lt;option value=&quot;MO&quot;&gt;Missouri&lt;/option&gt;
&lt;option value=&quot;MT&quot;&gt;Montana&lt;/option&gt;
&lt;option value=&quot;NE&quot;&gt;Nebraska&lt;/option&gt;
&lt;option value=&quot;NV&quot;&gt;Nevada&lt;/option&gt;
&lt;option value=&quot;NH&quot;&gt;New Hampshire&lt;/option&gt;
&lt;option value=&quot;NJ&quot;&gt;New Jersey&lt;/option&gt;
&lt;option value=&quot;NM&quot;&gt;New Mexico&lt;/option&gt;
&lt;option value=&quot;NY&quot;&gt;New York&lt;/option&gt;
&lt;option value=&quot;NC&quot;&gt;North Carolina&lt;/option&gt;
&lt;option value=&quot;ND&quot;&gt;North Dakota&lt;/option&gt;
&lt;option value=&quot;OH&quot;&gt;Ohio&lt;/option&gt;
&lt;option value=&quot;OK&quot;&gt;Oklahoma&lt;/option&gt;
&lt;option value=&quot;OR&quot;&gt;Oregon&lt;/option&gt;
&lt;option value=&quot;PA&quot;&gt;Pennsylvania&lt;/option&gt;
&lt;option value=&quot;RI&quot;&gt;Rhode Island&lt;/option&gt;
&lt;option value=&quot;SC&quot;&gt;South Carolina&lt;/option&gt;
&lt;option value=&quot;SD&quot;&gt;South Dakota&lt;/option&gt;
&lt;option value=&quot;TN&quot;&gt;Tennessee&lt;/option&gt;
&lt;option value=&quot;TX&quot;&gt;Texas&lt;/option&gt;
&lt;option value=&quot;UT&quot;&gt;Utah&lt;/option&gt;
&lt;option value=&quot;VT&quot;&gt;Vermont&lt;/option&gt;
&lt;option value=&quot;VA&quot;&gt;Virginia&lt;/option&gt;
&lt;option value=&quot;WA&quot;&gt;Washington&lt;/option&gt;
&lt;option value=&quot;WV&quot;&gt;West Virginia&lt;/option&gt;
&lt;option value=&quot;WI&quot;&gt;Wisconsin&lt;/option&gt;
&lt;option value=&quot;WY&quot; selected&gt;Wyoming&lt;/option&gt;
&lt;/select&gt;</pre>
                        </div>
                    </div>

                    <div class="code-section-container">
                        <button class="btn toggle-code-snippet"><span>JS</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
// Multi Select

new TomSelect("#select-state",{
maxItems: 3
});</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <div id="disabled-option" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">                                
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Disabled Option</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">

                    <select id="select-beast-single-disabled" placeholder="Select a person..." autocomplete="off">
                        <option value="">Select a person...</option>
                        <option value="4" disabled>Thomas Edison</option>
                        <option value="1">Nikola</option>
                        <option value="3" selected>Nikola Tesla</option>
                    </select>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>HTML</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;select id=&quot;select-beast-single-disabled&quot; placeholder=&quot;Select a person...&quot; autocomplete=&quot;off&quot;&gt;
&lt;option value=&quot;&quot;&gt;Select a person...&lt;/option&gt;
&lt;option value=&quot;4&quot; disabled&gt;Thomas Edison&lt;/option&gt;
&lt;option value=&quot;1&quot;&gt;Nikola&lt;/option&gt;
&lt;option value=&quot;3&quot; selected&gt;Nikola Tesla&lt;/option&gt;
&lt;/select&gt;</pre>
                        </div>
                    </div>

                    <div class="code-section-container">
                        <button class="btn toggle-code-snippet"><span>JS</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
// Disabled Option

new TomSelect("#select-beast-single-disabled",{
create: true,
sortField: {field: "text"}
});</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <div id="disabled-select" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">                                
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Disabled Select</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">

                    <select id="select-beast-disabled" class="form-select" disabled placeholder="Select a person..."  autocomplete="off">
                        <option value="">Select a person...</option>
                        <option value="4">Thomas Edison</option>
                        <option value="1">Nikola</option>
                        <option value="3" selected>Nikola Tesla</option>
                    </select>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>HTML</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;select id=&quot;select-beast-disabled&quot; class=&quot;form-select&quot; disabled placeholder=&quot;Select a person...&quot;  autocomplete=&quot;off&quot;&gt;
&lt;option value=&quot;&quot;&gt;Select a person...&lt;/option&gt;
&lt;option value=&quot;4&quot;&gt;Thomas Edison&lt;/option&gt;
&lt;option value=&quot;1&quot;&gt;Nikola&lt;/option&gt;
&lt;option value=&quot;3&quot; selected&gt;Nikola Tesla&lt;/option&gt;
&lt;/select&gt;efault&lt;/button&gt;</pre>
                        </div>
                    </div>

                    <div class="code-section-container">
                        <button class="btn toggle-code-snippet"><span>JS</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
// Disabled Select

new TomSelect("#select-beast-disabled");</pre>
                        </div>
                    </div>
                    

                </div>
            </div>
        </div>

    </div>
    
    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <x-slot:footerFiles>
        <script src="{{asset('plugins-rtl/tomSelect/tom-select.base.js')}}"></script>
        <script src="{{asset('plugins-rtl/tomSelect/custom-tom-select.js')}}"></script>
    </x-slot>
    <!--  END CUSTOM SCRIPTS FILE  -->
</x-rtl.base-layout>