<x-rtl.base-layout :scrollspy="false">

    <x-slot:pageTitle>
        {{$title}} 
    </x-slot>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <x-slot:headerFiles>
        <!--  BEGIN CUSTOM STYLE FILE  -->
        <link rel="stylesheet" href="{{asset('plugins-rtl/table/datatable/datatables.css')}}">
        @vite(['resources/rtl/scss/light/plugins/table/datatable/dt-global_style.scss'])
        @vite(['resources/rtl/scss/dark/plugins/table/datatable/dt-global_style.scss'])
        <!--  END CUSTOM STYLE FILE  -->
    </x-slot>
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BREADCRUMB -->
    <div class="page-meta">
        <nav class="breadcrumb-style-one" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Datatables</a></li>
                <li class="breadcrumb-item active" aria-current="page">Striped</li>
            </ol>
        </nav>
    </div>
    <!-- /BREADCRUMB -->
    

    <div class="row layout-top-spacing">
    
        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
            <div class="widget-content widget-content-area br-8">
                <table id="zero-config" class="table table-striped dt-table-hover" style="width:100%">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="d-flex">                                                        
                                    <div class="usr-img-frame me-2 rounded-circle">
                                        <img alt="avatar" class="img-fluid rounded-circle" src="{{Vite::asset('resources/images/boy.png')}}">
                                    </div>
                                    <p class="align-self-center mb-0 admin-name"> Tiger </p>
                                </div>
                            </td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>$320,800</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex">                                                        
                                    <div class="usr-img-frame me-2 rounded-circle">
                                        <img alt="avatar" class="img-fluid rounded-circle" src="{{Vite::asset('resources/images/boy-2.png')}}">
                                    </div>
                                    <p class="align-self-center mb-0 admin-name"> Garrett </p>
                                </div>
                            </td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>63</td>
                            <td>2011/07/25</td>
                            <td>$170,750</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex">                                                        
                                    <div class="usr-img-frame me-2 rounded-circle">
                                        <img alt="avatar" class="img-fluid rounded-circle" src="{{Vite::asset('resources/images/boy.png')}}">
                                    </div>
                                    <p class="align-self-center mb-0 admin-name"> Ashton </p>
                                </div>
                            </td>
                            <td>Junior Technical Author</td>
                            <td>San Francisco</td>
                            <td>66</td>
                            <td>2009/01/12</td>
                            <td>$86,000</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex">                                                        
                                    <div class="usr-img-frame me-2 rounded-circle">
                                        <img alt="avatar" class="img-fluid rounded-circle" src="{{Vite::asset('resources/images/girl-3.png')}}">
                                    </div>
                                    <p class="align-self-center mb-0 admin-name"> Cedric </p>
                                </div>
                            </td>
                            <td>Senior Javascript Developer</td>
                            <td>Edinburgh</td>
                            <td>22</td>
                            <td>2012/03/29</td>
                            <td>$433,060</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex">                                                        
                                    <div class="usr-img-frame me-2 rounded-circle">
                                        <img alt="avatar" class="img-fluid rounded-circle" src="{{Vite::asset('resources/images/girl-1.png')}}">
                                    </div>
                                    <p class="align-self-center mb-0 admin-name"> Airi </p>
                                </div>
                            </td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>33</td>
                            <td>2008/11/28</td>
                            <td>$162,700</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex">                                                        
                                    <div class="usr-img-frame me-2 rounded-circle">
                                        <img alt="avatar" class="img-fluid rounded-circle" src="{{Vite::asset('resources/images/girl-4.png')}}">
                                    </div>
                                    <p class="align-self-center mb-0 admin-name"> Brielle </p>
                                </div>
                            </td>
                            <td>Integration Specialist</td>
                            <td>New York</td>
                            <td>61</td>
                            <td>2012/12/02</td>
                            <td>$372,000</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex">                                                        
                                    <div class="usr-img-frame me-2 rounded-circle">
                                        <img alt="avatar" class="img-fluid rounded-circle" src="{{Vite::asset('resources/images/boy-2.png')}}">
                                    </div>
                                    <p class="align-self-center mb-0 admin-name"> Herrod </p>
                                </div>
                            </td>
                            <td>Sales Assistant</td>
                            <td>San Francisco</td>
                            <td>59</td>
                            <td>2012/08/06</td>
                            <td>$137,500</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex">
                                    <div class="usr-img-frame me-2 rounded-circle">
                                        <img alt="avatar" class="img-fluid rounded-circle" src="{{Vite::asset('resources/images/girl-2.png')}}">
                                    </div>
                                    <p class="align-self-center mb-0 admin-name"> Rhona </p>
                                </div>
                            </td>
                            <td>Integration Specialist</td>
                            <td>Tokyo</td>
                            <td>55</td>
                            <td>2010/10/14</td>
                            <td>$327,900</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex">                                                        
                                    <div class="usr-img-frame me-2 rounded-circle">
                                        <img alt="avatar" class="img-fluid rounded-circle" src="{{Vite::asset('resources/images/girl-1.png')}}">
                                    </div>
                                    <p class="align-self-center mb-0 admin-name"> Colleen </p>
                                </div>
                            </td>
                            <td>Javascript Developer</td>
                            <td>San Francisco</td>
                            <td>39</td>
                            <td>2009/09/15</td>
                            <td>$205,500</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex">                                                        
                                    <div class="usr-img-frame me-2 rounded-circle">
                                        <img alt="avatar" class="img-fluid rounded-circle" src="{{Vite::asset('resources/images/girl-4.png')}}">
                                    </div>
                                    <p class="align-self-center mb-0 admin-name"> Sonya </p>
                                </div>
                            </td>
                            <td>Software Engineer</td>
                            <td>Edinburgh</td>
                            <td>23</td>
                            <td>2008/12/13</td>
                            <td>$103,600</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex">                                                        
                                    <div class="usr-img-frame me-2 rounded-circle">
                                        <img alt="avatar" class="img-fluid rounded-circle" src="{{Vite::asset('resources/images/girl-1.png')}}">
                                    </div>
                                    <p class="align-self-center mb-0 admin-name"> Jena </p>
                                </div>
                            </td>
                            <td>Office Manager</td>
                            <td>London</td>
                            <td>30</td>
                            <td>2008/12/19</td>
                            <td>$90,560</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex">                                                        
                                    <div class="usr-img-frame me-2 rounded-circle">
                                        <img alt="avatar" class="img-fluid rounded-circle" src="{{Vite::asset('resources/images/boy-2.png')}}">
                                    </div>
                                    <p class="align-self-center mb-0 admin-name"> Quinn </p>
                                </div>
                            </td>
                            <td>Support Lead</td>
                            <td>Edinburgh</td>
                            <td>22</td>
                            <td>2013/03/03</td>
                            <td>$342,000</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex">                                                        
                                    <div class="usr-img-frame me-2 rounded-circle">
                                        <img alt="avatar" class="img-fluid rounded-circle" src="{{Vite::asset('resources/images/boy.png')}}">
                                    </div>
                                    <p class="align-self-center mb-0 admin-name"> Charde </p>                                                        
                                </div>
                            </td>
                            <td>Regional Director</td>
                            <td>San Francisco</td>
                            <td>36</td>
                            <td>2008/10/16</td>
                            <td>$470,600</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex">
                                    <div class="usr-img-frame me-2 rounded-circle">
                                        <img alt="avatar" class="img-fluid rounded-circle" src="{{Vite::asset('resources/images/girl-3.png')}}">
                                    </div>
                                    <p class="align-self-center mb-0 admin-name"> Haley </p>
                                </div>
                            </td>
                            <td>Senior Marketing Designer</td>
                            <td>London</td>
                            <td>43</td>
                            <td>2012/12/18</td>
                            <td>$313,500</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex">
                                    <div class="usr-img-frame me-2 rounded-circle">
                                        <img alt="avatar" class="img-fluid rounded-circle" src="{{Vite::asset('resources/images/girl-4.png')}}">
                                    </div>
                                    <p class="align-self-center mb-0 admin-name"> Tatyana </p>
                                </div>
                            </td>
                            <td>Regional Director</td>
                            <td>London</td>
                            <td>19</td>
                            <td>2010/03/17</td>
                            <td>$385,750</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex">
                                    <div class="usr-img-frame me-2 rounded-circle">
                                        <img alt="avatar" class="img-fluid rounded-circle" src="{{Vite::asset('resources/images/boy.png')}}">
                                    </div>                                                        
                                    <p class="align-self-center mb-0 admin-name"> Michael </p>
                                </div>
                            </td>
                            <td>Marketing Designer</td>
                            <td>London</td>
                            <td>66</td>
                            <td>2012/11/27</td>
                            <td>$198,500</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex">
                                    <div class="usr-img-frame me-2 rounded-circle">
                                        <img alt="avatar" class="img-fluid rounded-circle" src="{{Vite::asset('resources/images/boy.png')}}">
                                    </div>                                                        
                                    <p class="align-self-center mb-0 admin-name"> Paul </p>
                                </div>
                            </td>
                            <td>Chief Financial Officer (CFO)</td>
                            <td>New York</td>
                            <td>64</td>
                            <td>2010/06/09</td>
                            <td>$725,000</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex">
                                    <div class="usr-img-frame me-2 rounded-circle">
                                        <img alt="avatar" class="img-fluid rounded-circle" src="{{Vite::asset('resources/images/girl-2.png')}}">
                                    </div>                                                        
                                    <p class="align-self-center mb-0 admin-name"> Gloria </p>
                                </div>
                            </td>
                            <td>Systems Administrator</td>
                            <td>New York</td>
                            <td>59</td>
                            <td>2009/04/10</td>
                            <td>$237,500</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex">
                                    <div class="usr-img-frame me-2 rounded-circle">
                                        <img alt="avatar" class="img-fluid rounded-circle" src="{{Vite::asset('resources/images/boy.png')}}">
                                    </div>                                                        
                                    <p class="align-self-center mb-0 admin-name"> Bradley </p>
                                </div>
                            </td>
                            <td>Software Engineer</td>
                            <td>London</td>
                            <td>41</td>
                            <td>2012/10/13</td>
                            <td>$132,000</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex">
                                    <div class="usr-img-frame me-2 rounded-circle">
                                        <img alt="avatar" class="img-fluid rounded-circle" src="{{Vite::asset('resources/images/boy-2.png')}}">
                                    </div>                                                        
                                    <p class="align-self-center mb-0 admin-name"> Dai </p>
                                </div>
                            </td>
                            <td>Personnel Lead</td>
                            <td>Edinburgh</td>
                            <td>35</td>
                            <td>2012/09/26</td>
                            <td>$217,500</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex">
                                    <div class="usr-img-frame me-2 rounded-circle">
                                        <img alt="avatar" class="img-fluid rounded-circle" src="{{Vite::asset('resources/images/girl-1.png')}}">
                                    </div>                                                        
                                    <p class="align-self-center mb-0 admin-name"> Jenette </p>                                                        
                                </div>
                            </td>
                            <td>Development Lead</td>
                            <td>New York</td>
                            <td>30</td>
                            <td>2011/09/03</td>
                            <td>$345,000</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex">
                                    <div class="usr-img-frame me-2 rounded-circle">
                                        <img alt="avatar" class="img-fluid rounded-circle" src="{{Vite::asset('resources/images/boy.png')}}">
                                    </div>                                                        
                                    <p class="align-self-center mb-0 admin-name"> Yuri </p>
                                </div>
                            </td>
                            <td>Chief Marketing Officer (CMO)</td>
                            <td>New York</td>
                            <td>40</td>
                            <td>2009/06/25</td>
                            <td>$675,000</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex">
                                    <div class="usr-img-frame me-2 rounded-circle">
                                        <img alt="avatar" class="img-fluid rounded-circle" src="{{Vite::asset('resources/images/boy-2.png')}}">
                                    </div>                                                        
                                    <p class="align-self-center mb-0 admin-name"> Caesar </p>
                                </div>
                            </td>
                            <td>Pre-Sales Support</td>
                            <td>New York</td>
                            <td>21</td>
                            <td>2011/12/12</td>
                            <td>$106,450</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex">                                                        
                                    <div class="usr-img-frame me-2 rounded-circle">
                                        <img alt="avatar" class="img-fluid rounded-circle" src="{{Vite::asset('resources/images/boy.png')}}">
                                    </div>                                                        
                                    <p class="align-self-center mb-0 admin-name"> Doris </p>
                                </div>
                            </td>
                            <td>Sales Assistant</td>
                            <td>Sidney</td>
                            <td>23</td>
                            <td>2010/09/20</td>
                            <td>$85,600</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex">                                                        
                                    <div class="usr-img-frame me-2 rounded-circle">
                                        <img alt="avatar" class="img-fluid rounded-circle" src="{{Vite::asset('resources/images/girl-4.png')}}">
                                    </div>                                                        
                                    <p class="align-self-center mb-0 admin-name"> Angelica </p>                                                        
                                </div>
                            </td>
                            <td>Chief Executive Officer (CEO)</td>
                            <td>London</td>
                            <td>47</td>
                            <td>2009/10/09</td>
                            <td>$1,200,000</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>

    </div>
    
    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <x-slot:footerFiles>
        <script src="{{asset('plugins-rtl/global/vendors.min.js')}}"></script>
        @vite(['resources/rtl/assets/js/custom.js'])
        <script src="{{asset('plugins-rtl/table/datatable/datatables.js')}}"></script>

        <script>
            $('#zero-config').DataTable({
            "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
        "<'table-responsive'tr>" +
        "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
            "oLanguage": {
                "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>' },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
               "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 10 
        });
        </script>
    </x-slot>
    <!--  END CUSTOM SCRIPTS FILE  -->
</x-rtl.base-layout>