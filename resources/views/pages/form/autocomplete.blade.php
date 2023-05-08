<x-base-layout :scrollspy="true">

    <x-slot:pageTitle>
        {{$title}} 
    </x-slot>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <x-slot:headerFiles>
        <!--  BEGIN CUSTOM STYLE FILE  -->
        <link rel="stylesheet" href="{{asset('plugins/autocomplete/css/autoComplete.02.css')}}">
        @vite(['resources/scss/light/plugins/autocomplete/css/custom-autoComplete.scss'])
        @vite(['resources/scss/dark/plugins/autocomplete/css/custom-autoComplete.scss'])
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
                <li class="breadcrumb-item active" aria-current="page">AutoComplete</li>
            </ol>
        </nav>
    </div>
    <!-- /BREADCRUMB -->

    <div id="navSection" data-bs-spy="affix" class="nav sidenav">
        <div class="sidenav-content">
            <a href="#ftFormArray" class="active nav-link">Basic</a>
            <a href="#ftFormTwoArray" class="nav-link">Search with Button</a>
        </div>
    </div>
    
    <div class="row layout-top-spacing" id="Basic">
        <div id="ftFormArray" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">                                
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Basic</h4> 
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area custom-autocomplete h-100">

                    <div class="row">
                        <div class="col-lg-6">
                            <input id="autoComplete" class="form-control">
                        </div>
                    </div>

                    <div class="code-section-container show-code">
                                
                        <button class="btn toggle-code-snippet"><span>HTML</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;input id=&quot;autoComplete&quot; class=&quot;form-control&quot;&gt;
</pre>
                        </div>
                    </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>JS</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
const autoCompleteJS = new autoComplete({
selector: &quot;#autoComplete&quot;,
placeHolder: &quot;Search Country Code&quot;,
data: {
src: [
&quot;+93 - Afghanistan&quot;,
&quot;+358 - Aland Islands&quot;,
&quot;+355 - Albania&quot;,
&quot;+213 - Algeria&quot;,
&quot;+1684 - American Samoa&quot;,
&quot;+376 - Andorra&quot;,
&quot;+244 - Angola&quot;,
&quot;+1264 - Anguilla&quot;,
&quot;+672 - Antarctica&quot;,
&quot;+1268 - Antigua and Barbuda&quot;,
&quot;+54 - Argentina&quot;,
&quot;+374 - Armenia&quot;,
&quot;+297 - Aruba&quot;,
&quot;+61 - Australia&quot;,
&quot;+43 - Austria&quot;,
&quot;+994 - Azerbaijan&quot;,
&quot;+1242 - Bahamas&quot;,
&quot;+973 - Bahrain&quot;,
&quot;+880 - Bangladesh&quot;,
&quot;+1246 - Barbados&quot;,
&quot;+375 - Belarus&quot;,
&quot;+32 - Belgium&quot;,
&quot;+501 - Belize&quot;,
&quot;+229 - Benin&quot;,
&quot;+1441 - Bermuda&quot;,
&quot;+975 - Bhutan&quot;,
&quot;+591 - Bolivia&quot;,
&quot;+599 - Bonaire, Sint Eustatius and Saba&quot;,
&quot;+387 - Bosnia and Herzegovina&quot;,
&quot;+267 - Botswana&quot;,
&quot;+55 - Bouvet Island&quot;,
&quot;+55 - Brazil&quot;,
&quot;+246 - British Indian Ocean Territory&quot;,
&quot;+673 - Brunei Darussalam&quot;,
&quot;+359 - Bulgaria&quot;,
&quot;+226 - Burkina Faso&quot;,
&quot;+257 - Burundi&quot;,
&quot;+855 - Cambodia&quot;,
&quot;+237 - Cameroon&quot;,
&quot;+1 - Canada&quot;,
&quot;+238 - Cape Verde&quot;,
&quot;+1345 - Cayman Islands&quot;,
&quot;+236 - Central African Republic&quot;,
&quot;+235 - Chad&quot;,
&quot;+56 - Chile&quot;,
&quot;+86 - China&quot;,
&quot;+61 - Christmas Island&quot;,
&quot;+672 - Cocos (Keeling) Islands&quot;,
&quot;+57 - Colombia&quot;,
&quot;+269 - Comoros&quot;,
&quot;+242 - Congo&quot;,
&quot;+242 - Congo, Democratic Republic of the Congo&quot;,
&quot;+682 - Cook Islands&quot;,
&quot;+506 - Costa Rica&quot;,
&quot;+225 - Cote D'Ivoire&quot;,
&quot;+385 - Croatia&quot;,
&quot;+53 - Cuba&quot;,
&quot;+599 - Curacao&quot;,
&quot;+357 - Cyprus&quot;,
&quot;+420 - Czech Republic&quot;,
&quot;+45 - Denmark&quot;,
&quot;+253 - Djibouti&quot;,
&quot;+1767 - Dominica&quot;,
&quot;+1809 - Dominican Republic&quot;,
&quot;+593 - Ecuador&quot;,
&quot;+20 - Egypt&quot;,
&quot;+503 - El Salvador&quot;,
&quot;+240 - Equatorial Guinea&quot;,
&quot;+291 - Eritrea&quot;,
&quot;+372 - Estonia&quot;,
&quot;+251 - Ethiopia&quot;,
&quot;+500 - Falkland Islands (Malvinas)&quot;,
&quot;+298 - Faroe Islands&quot;,
&quot;+679 - Fiji&quot;,
&quot;+358 - Finland&quot;,
&quot;+33 - France&quot;,
&quot;+594 - French Guiana&quot;,
&quot;+689 - French Polynesia&quot;,
&quot;+262 - French Southern Territories&quot;,
&quot;+241 - Gabon&quot;,
&quot;+220 - Gambia&quot;,
&quot;+995 - Georgia&quot;,
&quot;+49 - Germany&quot;,
&quot;+233 - Ghana&quot;,
&quot;+350 - Gibraltar&quot;,
&quot;+30 - Greece&quot;,
&quot;+299 - Greenland&quot;,
&quot;+1473 - Grenada&quot;,
&quot;+590 - Guadeloupe&quot;,
&quot;+1671 - Guam&quot;,
&quot;+502 - Guatemala&quot;,
&quot;+44 - Guernsey&quot;,
&quot;+224 - Guinea&quot;,
&quot;+245 - Guinea-Bissau&quot;,
&quot;+592 - Guyana&quot;,
&quot;+509 - Haiti&quot;,
&quot;+0 - Heard Island and Mcdonald Islands&quot;,
&quot;+39 - Holy See (Vatican City State)&quot;,
&quot;+504 - Honduras&quot;,
&quot;+852 - Hong Kong&quot;,
&quot;+36 - Hungary&quot;,
&quot;+354 - Iceland&quot;,
&quot;+91 - India&quot;,
&quot;+62 - Indonesia&quot;,
&quot;+98 - Iran, Islamic Republic of&quot;,
&quot;+964 - Iraq&quot;,
&quot;+353 - Ireland&quot;,
&quot;+44 - Isle of Man&quot;,
&quot;+972 - Israel&quot;,
&quot;+39 - Italy&quot;,
&quot;+1876 - Jamaica&quot;,
&quot;+81 - Japan&quot;,
&quot;+44 - Jersey&quot;,
&quot;+962 - Jordan&quot;,
&quot;+7 - Kazakhstan&quot;,
&quot;+254 - Kenya&quot;,
&quot;+686 - Kiribati&quot;,
&quot;+850 - Korea, Democratic People's Republic of&quot;,
&quot;+82 - Korea, Republic of&quot;,
&quot;+381 - Kosovo&quot;,
&quot;+965 - Kuwait&quot;,
&quot;+996 - Kyrgyzstan&quot;,
&quot;+856 - Lao People's Democratic Republic&quot;,
&quot;+371 - Latvia&quot;,
&quot;+961 - Lebanon&quot;,
&quot;+266 - Lesotho&quot;,
&quot;+231 - Liberia&quot;,
&quot;+218 - Libyan Arab Jamahiriya&quot;,
&quot;+423 - Liechtenstein&quot;,
&quot;+370 - Lithuania&quot;,
&quot;+352 - Luxembourg&quot;,
&quot;+853 - Macao&quot;,
&quot;+389 - Macedonia, the Former Yugoslav Republic of&quot;,
&quot;+261 - Madagascar&quot;,
&quot;+265 - Malawi&quot;,
&quot;+60 - Malaysia&quot;,
&quot;+960 - Maldives&quot;,
&quot;+223 - Mali&quot;,
&quot;+356 - Malta&quot;,
&quot;+692 - Marshall Islands&quot;,
&quot;+596 - Martinique&quot;,
&quot;+222 - Mauritania&quot;,
&quot;+230 - Mauritius&quot;,
&quot;+269 - Mayotte&quot;,
&quot;+52 - Mexico&quot;,
&quot;+691 - Micronesia, Federated States of&quot;,
&quot;+373 - Moldova, Republic of&quot;,
&quot;+377 - Monaco&quot;,
&quot;+976 - Mongolia&quot;,
&quot;+382 - Montenegro&quot;,
&quot;+1664 - Montserrat&quot;,
&quot;+212 - Morocco&quot;,
&quot;+258 - Mozambique&quot;,
&quot;+95 - Myanmar&quot;,
&quot;+264 - Namibia&quot;,
&quot;+674 - Nauru&quot;,
&quot;+977 - Nepal&quot;,
&quot;+31 - Netherlands&quot;,
&quot;+599 - Netherlands Antilles&quot;,
&quot;+687 - New Caledonia&quot;,
&quot;+64 - New Zealand&quot;,
&quot;+505 - Nicaragua&quot;,
&quot;+227 - Niger&quot;,
&quot;+234 - Nigeria&quot;,
&quot;+683 - Niue&quot;,
&quot;+672 - Norfolk Island&quot;,
&quot;+1670 - Northern Mariana Islands&quot;,
&quot;+47 - Norway&quot;,
&quot;+968 - Oman&quot;,
&quot;+92 - Pakistan&quot;,
&quot;+680 - Palau&quot;,
&quot;+970 - Palestinian Territory, Occupied&quot;,
&quot;+507 - Panama&quot;,
&quot;+675 - Papua New Guinea&quot;,
&quot;+595 - Paraguay&quot;,
&quot;+51 - Peru&quot;,
&quot;+63 - Philippines&quot;,
&quot;+64 - Pitcairn&quot;,
&quot;+48 - Poland&quot;,
&quot;+351 - Portugal&quot;,
&quot;+1787 - Puerto Rico&quot;,
&quot;+974 - Qatar&quot;,
&quot;+262 - Reunion&quot;,
&quot;+40 - Romania&quot;,
&quot;+70 - Russian Federation&quot;,
&quot;+250 - Rwanda&quot;,
&quot;+590 - Saint Barthelemy&quot;,
&quot;+290 - Saint Helena&quot;,
&quot;+1869 - Saint Kitts and Nevis&quot;,
&quot;+1758 - Saint Lucia&quot;,
&quot;+590 - Saint Martin&quot;,
&quot;+508 - Saint Pierre and Miquelon&quot;,
&quot;+1784 - Saint Vincent and the Grenadines&quot;,
&quot;+684 - Samoa&quot;,
&quot;+378 - San Marino&quot;,
&quot;+239 - Sao Tome and Principe&quot;,
&quot;+966 - Saudi Arabia&quot;,
&quot;+221 - Senegal&quot;,
&quot;+381 - Serbia&quot;,
&quot;+381 - Serbia and Montenegro&quot;,
&quot;+248 - Seychelles&quot;,
&quot;+232 - Sierra Leone&quot;,
&quot;+65 - Singapore&quot;,
&quot;+1 - Sint Maarten&quot;,
&quot;+421 - Slovakia&quot;,
&quot;+386 - Slovenia&quot;,
&quot;+677 - Solomon Islands&quot;,
&quot;+252 - Somalia&quot;,
&quot;+27 - South Africa&quot;,
&quot;+500 - South Georgia and the South Sandwich Islands&quot;,
&quot;+211 - South Sudan&quot;,
&quot;+34 - Spain&quot;,
&quot;+94 - Sri Lanka&quot;,
&quot;+249 - Sudan&quot;,
&quot;+597 - Suriname&quot;,
&quot;+47 - Svalbard and Jan Mayen&quot;,
&quot;+268 - Swaziland&quot;,
&quot;+46 - Sweden&quot;,
&quot;+41 - Switzerland&quot;,
&quot;+963 - Syrian Arab Republic&quot;,
&quot;+886 - Taiwan, Province of China&quot;,
&quot;+992 - Tajikistan&quot;,
&quot;+255 - Tanzania, United Republic of&quot;,
&quot;+66 - Thailand&quot;,
&quot;+670 - Timor-Leste&quot;,
&quot;+228 - Togo&quot;,
&quot;+690 - Tokelau&quot;,
&quot;+676 - Tonga&quot;,
&quot;+1868 - Trinidad and Tobago&quot;,
&quot;+216 - Tunisia&quot;,
&quot;+90 - Turkey&quot;,
&quot;+7370 - Turkmenistan&quot;,
&quot;+1649 - Turks and Caicos Islands&quot;,
&quot;+688 - Tuvalu&quot;,
&quot;+256 - Uganda&quot;,
&quot;+380 - Ukraine&quot;,
&quot;+971 - United Arab Emirates&quot;,
&quot;+44 - United Kingdom&quot;,
&quot;+1 - United States&quot;,
&quot;+1 - United States Minor Outlying Islands&quot;,
&quot;+598 - Uruguay&quot;,
&quot;+998 - Uzbekistan&quot;,
&quot;+678 - Vanuatu&quot;,
&quot;+58 - Venezuela&quot;,
&quot;+84 - Viet Nam&quot;,
&quot;+1284 - Virgin Islands, British&quot;,
&quot;+1340 - Virgin Islands, U.s.&quot;,
&quot;+681 - Wallis and Futuna&quot;,
&quot;+212 - Western Sahara&quot;,
&quot;+967 - Yemen&quot;,
&quot;+260 - Zambia&quot;,
&quot;+263 - Zimbabwe&quot;
],
cache: true,
},
resultsList: {
element: (list, data) =&gt; {
if (!data.results.length) {
// Create &quot;No Results&quot; message element
const message = document.createElement(&quot;div&quot;);
// Add class to the created element
message.setAttribute(&quot;class&quot;, &quot;no_result&quot;);
// Add message text content
message.innerHTML = `&lt;span&gt;Found No Results for &quot;${data.query}&quot;&lt;/span&gt;`;
// Append message element to the results list
list.prepend(message);
}
},
noResults: true,
},
resultItem: {
highlight: {
render: true
}
},
events: {
input: {
focus() {
if (autoCompleteJS.input.value.length) autoCompleteJS.start();
},
selection(event) {
const feedback = event.detail;
// Prepare User's Selected Value
const selection = feedback.selection.value;

// Replace Input value with the selected value
autoCompleteJS.input.value = selection;
},
},
},
});
</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="ftFormTwoArray" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">                                
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Search with Button</h4> 
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="autocomplete-btn">
                                <input id="example2" class="form-control">
                                <button class="btn btn-primary">Search</button>
                            </div>
                        </div>
                    </div>

                    <div class="code-section-container  show-code">
                                
                        <button class="btn toggle-code-snippet"><span>HTML</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;div class=&quot;autocomplete-btn&quot;&gt;
&lt;input id=&quot;example2&quot; class=&quot;form-control&quot;&gt;
&lt;button class=&quot;btn btn-primary&quot;&gt;Search&lt;/button&gt;
&lt;/div&gt;
</pre>
                        </div>
                    </div>

                    <div class="code-section-container  show-code">
                                
                        <button class="btn toggle-code-snippet"><span>JS</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
const example2 = new autoComplete({
selector: &quot;#example2&quot;,
placeHolder: &quot;Enter Country Code&quot;,
data: {
src: [
&quot;+93 - Afghanistan&quot;,
&quot;+358 - Aland Islands&quot;,
&quot;+355 - Albania&quot;,
&quot;+213 - Algeria&quot;,
&quot;+1684 - American Samoa&quot;,
&quot;+376 - Andorra&quot;,
&quot;+244 - Angola&quot;,
&quot;+1264 - Anguilla&quot;,
&quot;+672 - Antarctica&quot;,
&quot;+1268 - Antigua and Barbuda&quot;,
&quot;+54 - Argentina&quot;,
&quot;+374 - Armenia&quot;,
&quot;+297 - Aruba&quot;,
&quot;+61 - Australia&quot;,
&quot;+43 - Austria&quot;,
&quot;+994 - Azerbaijan&quot;,
&quot;+1242 - Bahamas&quot;,
&quot;+973 - Bahrain&quot;,
&quot;+880 - Bangladesh&quot;,
&quot;+1246 - Barbados&quot;,
&quot;+375 - Belarus&quot;,
&quot;+32 - Belgium&quot;,
&quot;+501 - Belize&quot;,
&quot;+229 - Benin&quot;,
&quot;+1441 - Bermuda&quot;,
&quot;+975 - Bhutan&quot;,
&quot;+591 - Bolivia&quot;,
&quot;+599 - Bonaire, Sint Eustatius and Saba&quot;,
&quot;+387 - Bosnia and Herzegovina&quot;,
&quot;+267 - Botswana&quot;,
&quot;+55 - Bouvet Island&quot;,
&quot;+55 - Brazil&quot;,
&quot;+246 - British Indian Ocean Territory&quot;,
&quot;+673 - Brunei Darussalam&quot;,
&quot;+359 - Bulgaria&quot;,
&quot;+226 - Burkina Faso&quot;,
&quot;+257 - Burundi&quot;,
&quot;+855 - Cambodia&quot;,
&quot;+237 - Cameroon&quot;,
&quot;+1 - Canada&quot;,
&quot;+238 - Cape Verde&quot;,
&quot;+1345 - Cayman Islands&quot;,
&quot;+236 - Central African Republic&quot;,
&quot;+235 - Chad&quot;,
&quot;+56 - Chile&quot;,
&quot;+86 - China&quot;,
&quot;+61 - Christmas Island&quot;,
&quot;+672 - Cocos (Keeling) Islands&quot;,
&quot;+57 - Colombia&quot;,
&quot;+269 - Comoros&quot;,
&quot;+242 - Congo&quot;,
&quot;+242 - Congo, Democratic Republic of the Congo&quot;,
&quot;+682 - Cook Islands&quot;,
&quot;+506 - Costa Rica&quot;,
&quot;+225 - Cote D'Ivoire&quot;,
&quot;+385 - Croatia&quot;,
&quot;+53 - Cuba&quot;,
&quot;+599 - Curacao&quot;,
&quot;+357 - Cyprus&quot;,
&quot;+420 - Czech Republic&quot;,
&quot;+45 - Denmark&quot;,
&quot;+253 - Djibouti&quot;,
&quot;+1767 - Dominica&quot;,
&quot;+1809 - Dominican Republic&quot;,
&quot;+593 - Ecuador&quot;,
&quot;+20 - Egypt&quot;,
&quot;+503 - El Salvador&quot;,
&quot;+240 - Equatorial Guinea&quot;,
&quot;+291 - Eritrea&quot;,
&quot;+372 - Estonia&quot;,
&quot;+251 - Ethiopia&quot;,
&quot;+500 - Falkland Islands (Malvinas)&quot;,
&quot;+298 - Faroe Islands&quot;,
&quot;+679 - Fiji&quot;,
&quot;+358 - Finland&quot;,
&quot;+33 - France&quot;,
&quot;+594 - French Guiana&quot;,
&quot;+689 - French Polynesia&quot;,
&quot;+262 - French Southern Territories&quot;,
&quot;+241 - Gabon&quot;,
&quot;+220 - Gambia&quot;,
&quot;+995 - Georgia&quot;,
&quot;+49 - Germany&quot;,
&quot;+233 - Ghana&quot;,
&quot;+350 - Gibraltar&quot;,
&quot;+30 - Greece&quot;,
&quot;+299 - Greenland&quot;,
&quot;+1473 - Grenada&quot;,
&quot;+590 - Guadeloupe&quot;,
&quot;+1671 - Guam&quot;,
&quot;+502 - Guatemala&quot;,
&quot;+44 - Guernsey&quot;,
&quot;+224 - Guinea&quot;,
&quot;+245 - Guinea-Bissau&quot;,
&quot;+592 - Guyana&quot;,
&quot;+509 - Haiti&quot;,
&quot;+0 - Heard Island and Mcdonald Islands&quot;,
&quot;+39 - Holy See (Vatican City State)&quot;,
&quot;+504 - Honduras&quot;,
&quot;+852 - Hong Kong&quot;,
&quot;+36 - Hungary&quot;,
&quot;+354 - Iceland&quot;,
&quot;+91 - India&quot;,
&quot;+62 - Indonesia&quot;,
&quot;+98 - Iran, Islamic Republic of&quot;,
&quot;+964 - Iraq&quot;,
&quot;+353 - Ireland&quot;,
&quot;+44 - Isle of Man&quot;,
&quot;+972 - Israel&quot;,
&quot;+39 - Italy&quot;,
&quot;+1876 - Jamaica&quot;,
&quot;+81 - Japan&quot;,
&quot;+44 - Jersey&quot;,
&quot;+962 - Jordan&quot;,
&quot;+7 - Kazakhstan&quot;,
&quot;+254 - Kenya&quot;,
&quot;+686 - Kiribati&quot;,
&quot;+850 - Korea, Democratic People's Republic of&quot;,
&quot;+82 - Korea, Republic of&quot;,
&quot;+381 - Kosovo&quot;,
&quot;+965 - Kuwait&quot;,
&quot;+996 - Kyrgyzstan&quot;,
&quot;+856 - Lao People's Democratic Republic&quot;,
&quot;+371 - Latvia&quot;,
&quot;+961 - Lebanon&quot;,
&quot;+266 - Lesotho&quot;,
&quot;+231 - Liberia&quot;,
&quot;+218 - Libyan Arab Jamahiriya&quot;,
&quot;+423 - Liechtenstein&quot;,
&quot;+370 - Lithuania&quot;,
&quot;+352 - Luxembourg&quot;,
&quot;+853 - Macao&quot;,
&quot;+389 - Macedonia, the Former Yugoslav Republic of&quot;,
&quot;+261 - Madagascar&quot;,
&quot;+265 - Malawi&quot;,
&quot;+60 - Malaysia&quot;,
&quot;+960 - Maldives&quot;,
&quot;+223 - Mali&quot;,
&quot;+356 - Malta&quot;,
&quot;+692 - Marshall Islands&quot;,
&quot;+596 - Martinique&quot;,
&quot;+222 - Mauritania&quot;,
&quot;+230 - Mauritius&quot;,
&quot;+269 - Mayotte&quot;,
&quot;+52 - Mexico&quot;,
&quot;+691 - Micronesia, Federated States of&quot;,
&quot;+373 - Moldova, Republic of&quot;,
&quot;+377 - Monaco&quot;,
&quot;+976 - Mongolia&quot;,
&quot;+382 - Montenegro&quot;,
&quot;+1664 - Montserrat&quot;,
&quot;+212 - Morocco&quot;,
&quot;+258 - Mozambique&quot;,
&quot;+95 - Myanmar&quot;,
&quot;+264 - Namibia&quot;,
&quot;+674 - Nauru&quot;,
&quot;+977 - Nepal&quot;,
&quot;+31 - Netherlands&quot;,
&quot;+599 - Netherlands Antilles&quot;,
&quot;+687 - New Caledonia&quot;,
&quot;+64 - New Zealand&quot;,
&quot;+505 - Nicaragua&quot;,
&quot;+227 - Niger&quot;,
&quot;+234 - Nigeria&quot;,
&quot;+683 - Niue&quot;,
&quot;+672 - Norfolk Island&quot;,
&quot;+1670 - Northern Mariana Islands&quot;,
&quot;+47 - Norway&quot;,
&quot;+968 - Oman&quot;,
&quot;+92 - Pakistan&quot;,
&quot;+680 - Palau&quot;,
&quot;+970 - Palestinian Territory, Occupied&quot;,
&quot;+507 - Panama&quot;,
&quot;+675 - Papua New Guinea&quot;,
&quot;+595 - Paraguay&quot;,
&quot;+51 - Peru&quot;,
&quot;+63 - Philippines&quot;,
&quot;+64 - Pitcairn&quot;,
&quot;+48 - Poland&quot;,
&quot;+351 - Portugal&quot;,
&quot;+1787 - Puerto Rico&quot;,
&quot;+974 - Qatar&quot;,
&quot;+262 - Reunion&quot;,
&quot;+40 - Romania&quot;,
&quot;+70 - Russian Federation&quot;,
&quot;+250 - Rwanda&quot;,
&quot;+590 - Saint Barthelemy&quot;,
&quot;+290 - Saint Helena&quot;,
&quot;+1869 - Saint Kitts and Nevis&quot;,
&quot;+1758 - Saint Lucia&quot;,
&quot;+590 - Saint Martin&quot;,
&quot;+508 - Saint Pierre and Miquelon&quot;,
&quot;+1784 - Saint Vincent and the Grenadines&quot;,
&quot;+684 - Samoa&quot;,
&quot;+378 - San Marino&quot;,
&quot;+239 - Sao Tome and Principe&quot;,
&quot;+966 - Saudi Arabia&quot;,
&quot;+221 - Senegal&quot;,
&quot;+381 - Serbia&quot;,
&quot;+381 - Serbia and Montenegro&quot;,
&quot;+248 - Seychelles&quot;,
&quot;+232 - Sierra Leone&quot;,
&quot;+65 - Singapore&quot;,
&quot;+1 - Sint Maarten&quot;,
&quot;+421 - Slovakia&quot;,
&quot;+386 - Slovenia&quot;,
&quot;+677 - Solomon Islands&quot;,
&quot;+252 - Somalia&quot;,
&quot;+27 - South Africa&quot;,
&quot;+500 - South Georgia and the South Sandwich Islands&quot;,
&quot;+211 - South Sudan&quot;,
&quot;+34 - Spain&quot;,
&quot;+94 - Sri Lanka&quot;,
&quot;+249 - Sudan&quot;,
&quot;+597 - Suriname&quot;,
&quot;+47 - Svalbard and Jan Mayen&quot;,
&quot;+268 - Swaziland&quot;,
&quot;+46 - Sweden&quot;,
&quot;+41 - Switzerland&quot;,
&quot;+963 - Syrian Arab Republic&quot;,
&quot;+886 - Taiwan, Province of China&quot;,
&quot;+992 - Tajikistan&quot;,
&quot;+255 - Tanzania, United Republic of&quot;,
&quot;+66 - Thailand&quot;,
&quot;+670 - Timor-Leste&quot;,
&quot;+228 - Togo&quot;,
&quot;+690 - Tokelau&quot;,
&quot;+676 - Tonga&quot;,
&quot;+1868 - Trinidad and Tobago&quot;,
&quot;+216 - Tunisia&quot;,
&quot;+90 - Turkey&quot;,
&quot;+7370 - Turkmenistan&quot;,
&quot;+1649 - Turks and Caicos Islands&quot;,
&quot;+688 - Tuvalu&quot;,
&quot;+256 - Uganda&quot;,
&quot;+380 - Ukraine&quot;,
&quot;+971 - United Arab Emirates&quot;,
&quot;+44 - United Kingdom&quot;,
&quot;+1 - United States&quot;,
&quot;+1 - United States Minor Outlying Islands&quot;,
&quot;+598 - Uruguay&quot;,
&quot;+998 - Uzbekistan&quot;,
&quot;+678 - Vanuatu&quot;,
&quot;+58 - Venezuela&quot;,
&quot;+84 - Viet Nam&quot;,
&quot;+1284 - Virgin Islands, British&quot;,
&quot;+1340 - Virgin Islands, U.s.&quot;,
&quot;+681 - Wallis and Futuna&quot;,
&quot;+212 - Western Sahara&quot;,
&quot;+967 - Yemen&quot;,
&quot;+260 - Zambia&quot;,
&quot;+263 - Zimbabwe&quot;
],
cache: true,
},
resultsList: {
element: (list, data) =&gt; {
if (!data.results.length) {
// Create &quot;No Results&quot; message element
const message = document.createElement(&quot;div&quot;);
// Add class to the created element
message.setAttribute(&quot;class&quot;, &quot;no_result&quot;);
// Add message text content
message.innerHTML = `&lt;span&gt;Found No Results for &quot;${data.query}&quot;&lt;/span&gt;`;
// Append message element to the results list
list.prepend(message);
}
},
noResults: true,
},
resultItem: {
highlight: {
render: true
}
},
events: {
input: {
focus() {
if (example2.input.value.length) example2.start();
},
selection(event) {
const feedback = event.detail;
// Prepare User's Selected Value
const selection = feedback.selection.value;

// Replace Input value with the selected value
example2.input.value = selection;
},
},
},
});
</pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <x-slot:footerFiles>
        <script src="{{asset('plugins/autocomplete/autoComplete.min.js')}}"></script>
        <script src="{{asset('plugins/autocomplete/custom-autoComplete.js')}}"></script>
    </x-slot>
    <!--  END CUSTOM SCRIPTS FILE  -->
</x-base-layout>