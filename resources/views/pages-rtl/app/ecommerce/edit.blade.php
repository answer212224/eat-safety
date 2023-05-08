<x-rtl.base-layout :scrollspy="false">

    <x-slot:pageTitle>
        {{$title}} 
    </x-slot>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <x-slot:headerFiles>
        <!--  BEGIN CUSTOM STYLE FILE  -->
        <link rel="stylesheet" href="{{asset('plugins-rtl/filepond/filepond.min.css')}}">
        <link rel="stylesheet" href="{{asset('plugins-rtl/filepond/FilePondPluginImagePreview.min.css')}}">
        <link rel="stylesheet" href="{{asset('plugins-rtl/tagify/tagify.css')}}">

        @vite(['resources/rtl/scss/light/assets/forms/switches.scss'])
        @vite(['resources/rtl/scss/light/plugins/editors/quill/quill.snow.scss'])
        @vite(['resources/rtl/scss/light/plugins/tagify/custom-tagify.scss'])
        @vite(['resources/rtl/scss/light/plugins/filepond/custom-filepond.scss'])
        
        @vite(['resources/rtl/scss/dark/assets/forms/switches.scss'])
        @vite(['resources/rtl/scss/dark/plugins/editors/quill/quill.snow.scss'])
        @vite(['resources/rtl/scss/dark/plugins/tagify/custom-tagify.scss'])
        @vite(['resources/rtl/scss/dark/plugins/filepond/custom-filepond.scss'])

        @vite(['resources/rtl/scss/light/assets/apps/ecommerce-create.scss'])
        @vite(['resources/rtl/scss/dark/assets/apps/ecommerce-create.scss'])
        <!--  END CUSTOM STYLE FILE  -->
    </x-slot>
    <!-- END GLOBAL MANDATORY STYLES -->

    <div class="row mb-4 layout-spacing layout-top-spacing">

        <div class="col-xxl-9 col-xl-12 col-lg-12 col-md-12 col-sm-12">

            <div class="widget-content widget-content-area ecommerce-create-section">

                <div class="row mb-4">
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="inputEmail3" placeholder="Product Name" value="Nike Shoes Red">
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-sm-12">
                        <label>Description</label>
                        <div id="product-description">
                            Perspiciatis maxime facilis velit tenetur, iste expedita in dignissimos iure aut excepturi sapiente eligendi repellat. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut blanditiis assumenda doloremque fugiat minima tempora!
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8">
                        <label for="product-images">Upload Images</label>
                        <div class="multiple-file-upload">
                            <input type="file" 
                                class="filepond file-upload-multiple"
                                name="filepond"
                                id="product-images" 
                                multiple 
                                data-allow-reorder="true"
                                data-instant-upload="false"
                                data-max-file-size="3MB"
                                data-max-files="5">
                        </div>
                    </div>

                    <div class="col-md-4 text-center">
                        <div class="switch form-switch-custom switch-inline form-switch-primary mt-4">
                            <input class="switch-input" type="checkbox" role="switch" id="showPublicly" checked>
                            <label class="switch-label" for="showPublicly">Display publicly</label>
                        </div>
                    </div>
                    
                </div>

            </div>
            
        </div>

        <div class="col-xxl-3 col-xl-12 col-lg-12 col-md-12 col-sm-12">

            <div class="row">
                <div class="col-xxl-12 col-xl-8 col-lg-8 col-md-7 mt-xxl-0 mt-4">
                    <div class="widget-content widget-content-area ecommerce-create-section">
                        <div class="row">
                            <div class="col-xxl-12 mb-4">
                                <div class="switch form-switch-custom switch-inline form-switch-secondary">
                                    <input class="switch-input" type="checkbox" role="switch" id="in-stock" checked>
                                    <label class="switch-label" for="in-stock">In Stock</label>
                                </div>
                            </div>
                            <div class="col-xxl-12 col-md-6 mb-4">
                                <label for="proCode">Product Code</label>
                                <input type="text" class="form-control" id="proCode" value="79WEL56A">
                            </div>
                            <div class="col-xxl-12 col-md-6 mb-4">
                                <label for="proSKU">Product SKU</label>
                                <input type="text" class="form-control" id="proSKU" value="QQ69SOP3D/T2">
                            </div>
                            <div class="col-xxl-12 col-md-6 mb-4">
                                <label for="gender">Gender</label>
                                <select class="form-select" id="gender">
                                    <option value="">Choose...</option>
                                    <option value="men" selected>Men</option>
                                    <option value="women">Women</option>
                                    <option value="kids">Kids</option>
                                    <option value="unisex">Unisex</option>
                                </select>
                            </div>
                            <div class="col-xxl-12 col-md-6 mb-4">
                                <label for="category">Category</label>
                                <select class="form-select" id="category">
                                    <option value="">Choose...</option>
                                    <option value="electronics">Electronics</option>
                                    <option value="clothing" selected>Clothing</option>
                                    <option value="organic">Organic</option>
                                    <option value="apperal">Apperal</option>
                                    <option value="accessories">Accessories</option>
                                </select>
                            </div>
                            <div class="col-xxl-12 col-lg-6 col-md-12">
                                <label for="tags">Tags</label>
                                <input id="tags" class="product-tags" value="shoes, 2021 : Edition">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-12 col-xl-4 col-lg-4 col-md-5 mt-4">
                    <div class="widget-content widget-content-area ecommerce-create-section">
                        <div class="row">
                            <div class="col-sm-12 mb-4">
                                <label for="regular-price">Regular Price</label>
                                <input type="text" class="form-control" id="regular-price" value="180">
                            </div>
                            <div class="col-sm-12 mb-4">
                                <label for="sale-price">Sale Price</label>
                                <input type="text" class="form-control" id="sale-price" value="30">
                            </div>
                            <div class="col-sm-12 mb-4">
                                <div class="switch form-switch-custom switch-inline form-switch-danger">
                                    <input class="switch-input" type="checkbox" role="switch" id="pricing-includes-texes" checked>
                                    <label class="switch-label" for="pricing-includes-texes">Price includes taxes</label>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <button class="btn btn-success w-100">Save Changes</button>
                            </div>
                        </div>                                            
                    </div>
                </div>
            </div>
        </div>

    </div>
    
    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <x-slot:footerFiles>
        <script src="{{asset('plugins-rtl/editors/quill/quill.js')}}"></script>
        <script src="{{asset('plugins-rtl/filepond/filepond.min.js')}}"></script>
        <script src="{{asset('plugins-rtl/filepond/FilePondPluginFileValidateType.min.js')}}"></script>
        <script src="{{asset('plugins-rtl/filepond/FilePondPluginImageExifOrientation.min.js')}}"></script>
        <script src="{{asset('plugins-rtl/filepond/FilePondPluginImagePreview.min.js')}}"></script>
        <script src="{{asset('plugins-rtl/filepond/FilePondPluginImageCrop.min.js')}}"></script>
        <script src="{{asset('plugins-rtl/filepond/FilePondPluginImageResize.min.js')}}"></script>
        <script src="{{asset('plugins-rtl/filepond/FilePondPluginImageTransform.min.js')}}"></script>
        <script src="{{asset('plugins-rtl/filepond/filepondPluginFileValidateSize.min.js')}}"></script>
        <script src="{{asset('plugins-rtl/tagify/tagify.min.js')}}"></script>
        @vite(['resources/rtl/assets/js/apps/ecommerce-create.js'])
        <script type="module">
            ecommerce.addFiles("{{Vite::asset('resources/images/product-1.jpg')}}", "{{Vite::asset('resources/images/product-3.jpg')}}", "{{Vite::asset('resources/images/product-5.jpg')}}");
        </script>
    </x-slot>
    <!--  END CUSTOM SCRIPTS FILE  -->
</x-rtl.base-layout>