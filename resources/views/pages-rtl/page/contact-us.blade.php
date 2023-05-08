<x-rtl.base-layout :scrollspy="false">

    <x-slot:pageTitle>
        {{$title}} 
    </x-slot>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <x-slot:headerFiles>
        <!--  BEGIN CUSTOM STYLE FILE  -->
        <link rel="stylesheet" href="{{asset('plugins-rtl/leaflet/leaflet.css')}}">
        @vite(['resources/rtl/scss/light/assets/pages/contact_us.scss'])
        @vite(['resources/rtl/scss/dark/assets/pages/contact_us.scss'])
        <!--  END CUSTOM STYLE FILE  -->
    </x-slot>
    <!-- END GLOBAL MANDATORY STYLES -->
    
    <!-- BREADCRUMB -->
    <div class="page-meta">
        <nav class="breadcrumb-style-one" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
            </ol>
        </nav>
    </div>
    <!-- /BREADCRUMB -->

    <div class="statbox widget box box-shadow layout-top-spacing">

        <div class="widget-content widget-content-area">

            <div class="contact-us-form">

                <div class="row gx-5">
                    <div class="col-md-6">
                        <form class="row g-4">
                            <div class="col-md-12">
                                <h5>Send Us Email</h5>
                            </div>
                            <div class="col-md-6">
                                <label for="inputName" class="form-label">Name</label>
                                <input type="text" class="form-control" id="inputName">
                            </div>
                            <div class="col-md-6">
                                <label for="inputEmail" class="form-label">Email</label>
                                <input type="email" class="form-control" id="inputEmail">
                            </div>
                            <div class="col-12">
                                <label for="inputSubject" class="form-label">Subject</label>
                                <input type="text" class="form-control" id="inputSubject">
                            </div>
                            <div class="col-12">
                                <label for="inputMessage" class="form-label">Message</label>
                                <textarea id="inputMessage" class="form-control" cols="30" rows="10"></textarea>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Send Feedback</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6 align-self-center">
                        <div id="contact-map" class="w-100 rounded mb-2 mb-lg-0 mt-2" style="height: 486px"></div>
                        <!-- <div id="contact-map"></div> -->
                    </div>

                    <div class="col-md-12 mt-4">

                        <div class="paper contact-us-info-section-1">

                            <div class="row gx-5">
                                <div class="col-12">
                                    <h4 class="contact-title">Let's Talk</h4>
                                </div>

                                <div class="col-xl-4 col-lg-6 col-md-6 mb-3">
                                    
                                    <div class="widget-paper">
                                        
                                        <h5>New York</h5>
                                        <p>+1 (070) 123 457</p>
                                        
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-6 col-md-6 mb-3">

                                    <div class="widget-paper">
                                        
                                        <h5>Miami</h5>
                                        <p>+1 (120) 456 789</p>
                                        
                                    </div>

                                </div>

                                <div class="col-xl-4 col-lg-6 col-md-6 mb-3 mx-auto">

                                    <div class="widget-paper">
                                        
                                        <h5>Edinburgh</h5>
                                        <p>+1 (218) 356 954</p>
                                        
                                    </div>

                                </div>


                                <div class="col-12 mt-5">
                                    <h4 class="contact-title">Mail Us at</h4>
                                </div>

                                <div class="col-xl-4 col-lg-6 col-md-6 mb-3">

                                    <div class="widget-paper">
                                        
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-help" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <circle cx="12" cy="12" r="9"></circle>
                                                <line x1="12" y1="17" x2="12" y2="17.01"></line>
                                                <path d="M12 13.5a1.5 1.5 0 0 1 1 -1.5a2.6 2.6 0 1 0 -3 -4"></path>
                                                </svg>
                                        </div>
                                        
                                        <h5>Support</h5>
                                        <p>info@mail.com</p>
                                        
                                    </div>

                                </div>


                                <div class="col-xl-4 col-lg-6 col-md-6 mb-3">

                                    <div class="widget-paper">
                                        
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-message-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M12 20l-3 -3h-2a3 3 0 0 1 -3 -3v-6a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-2l-3 3"></path>
                                                <line x1="8" y1="9" x2="16" y2="9"></line>
                                                <line x1="8" y1="13" x2="14" y2="13"></line>
                                                </svg>
                                        </div>
                                        
                                        <h5>Enquire</h5>
                                        <p>enquire@mail.com</p>
                                        
                                    </div>

                                </div>


                                <div class="col-xl-4 col-lg-6 col-md-6 mb-3 mx-auto">

                                    <div class="widget-paper">
                                        
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-report-analytics" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2"></path>
                                                <rect x="9" y="3" width="6" height="4" rx="2"></rect>
                                                <path d="M9 17v-5"></path>
                                                <path d="M12 17v-1"></path>
                                                <path d="M15 17v-3"></path>
                                                </svg>
                                        </div>
                                        
                                        <h5>Sales Office</h5>
                                        <p>sales@mail.com</p>
                                        
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
        <script src="{{asset('plugins-rtl/leaflet/us-states.js')}}"></script>
        <script src="{{asset('plugins-rtl/leaflet/eu-countries.js')}}"></script>
        <script src="{{asset('plugins-rtl/leaflet/leaflet.js')}}"></script>

        <script>
            // / Define Map Location
            var leaflet = L.map('contact-map', {
                center: [40.74785318312211, -73.98370985752007],
                zoom: 30
            });
    
            // Init Leaflet Map. For more info check the plugin's documentation: https://leafletjs.com/
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://osm.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(leaflet);
    
            // Define Marker Layer
            var markerLayer = L.layerGroup().addTo(leaflet);
    
            // Set Custom SVG icon marker
            var leafletIcon = L.divIcon({
                html: `<span><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-pin" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" style="fill: #ffffff80;color: #191e3a;">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <circle cx="12" cy="11" r="3"></circle>
                        <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z"></path>
                        </svg></span>`,
                bgPos: [10, 10],
                iconAnchor: [20, 37],
                popupAnchor: [-7, -37],
                className: 'leaflet-marker'
            });
    
            // Show current address
            L.marker([40.74785318312211, -73.98370985752007], { icon: leafletIcon }).addTo(markerLayer).bindPopup('16 E 34th St, NY 10016, US', { closeButton: false }).openPopup();
        </script>
    </x-slot>
    <!--  END CUSTOM SCRIPTS FILE  -->
</x-rtl.base-layout>