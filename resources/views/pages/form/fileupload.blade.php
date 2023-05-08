<x-base-layout :scrollspy="true">

    <x-slot:pageTitle>
        {{$title}} 
    </x-slot>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <x-slot:headerFiles>
        <!--  BEGIN CUSTOM STYLE FILE  -->
        <link rel="stylesheet" href="{{asset('plugins/filepond/filepond.min.css')}}">
        <link rel="stylesheet" href="{{asset('plugins/filepond/FilePondPluginImagePreview.min.css')}}">
        @vite(['resources/scss/light/plugins/filepond/custom-filepond.scss'])
        @vite(['resources/scss/dark/plugins/filepond/custom-filepond.scss'])
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
                <li class="breadcrumb-item active" aria-current="page">File Upload</li>
            </ol>
        </nav>
    </div>
    <!-- /BREADCRUMB -->

    <div id="navSection" data-bs-spy="affix" class="nav  sidenav">
        <div class="sidenav-content">
            <a href="#fuSingleFile" class="active nav-link">Single File</a>
            <a href="#fuMultipleFile" class="nav-link">Multiple File</a>
        </div>
    </div>

    <div class="row layout-top-spacing">

        <div id="fuSingleFile" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Single File</h4>
                        </div>      
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <div class="profile-image">

                        <!-- // The classic file input element we'll enhance
                        // to a file pond, we moved the configuration
                        // properties to JavaScript -->
    
                        <div class="img-uploader-content">
                            <input type="file" class="filepond"
                                name="filepond" accept="image/png, image/jpeg, image/gif"/>
                        </div>
    
                    </div>


                    <div class="code-section-container show-code">
                                
                        <button class="btn toggle-code-snippet"><span>HTML</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;div class=&quot;profile-image&quot;&gt;

&lt;!-- // The classic file input element we'll enhance
// to a file pond, we moved the configuration
// properties to JavaScript --&gt;

&lt;div class=&quot;img-uploader-content&quot;&gt;
&lt;input type=&quot;file&quot; class=&quot;filepond&quot;
name=&quot;filepond&quot; accept=&quot;image/png, image/jpeg, image/gif&quot;/&gt;
&lt;/div&gt;

&lt;/div&gt;
</pre>
                        </div>
                    </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>JS</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
/**
* ==================
* Single File Upload
* ==================
*/

// We register the plugins required to do 
// image previews, cropping, resizing, etc.
FilePond.registerPlugin(
FilePondPluginFileValidateType,
FilePondPluginImageExifOrientation,
FilePondPluginImagePreview,
FilePondPluginImageCrop,
FilePondPluginImageResize,
FilePondPluginImageTransform,
//   FilePondPluginImageEdit
);

// Select the file input and use 
// create() to turn it into a pond
FilePond.create(
document.querySelector('.filepond'),
{
// labelIdle: `&lt;span class=&quot;no-image-placeholder&quot;&gt;&lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-user&quot;&gt;&lt;path d=&quot;M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2&quot;&gt;&lt;/path&gt;&lt;circle cx=&quot;12&quot; cy=&quot;7&quot; r=&quot;4&quot;&gt;&lt;/circle&gt;&lt;/svg&gt;&lt;/span&gt; &lt;p class=&quot;drag-para&quot;&gt;Drag &amp; Drop your picture or &lt;span class=&quot;filepond--label-action&quot; tabindex=&quot;0&quot;&gt;Browse&lt;/span&gt;&lt;/p&gt;`,
imagePreviewHeight: 170,
imageCropAspectRatio: '1:1',
imageResizeTargetWidth: 200,
imageResizeTargetHeight: 200,
stylePanelLayout: 'compact circle',
styleLoadIndicatorPosition: 'center bottom',
styleProgressIndicatorPosition: 'right bottom',
styleButtonRemoveItemPosition: 'left bottom',
styleButtonProcessItemPosition: 'right bottom',
files: [
{
// the server file reference
source: './assets/img/drag-1.jpeg',

// set type to limbo to tell FilePond this is a temp file
options: {
type: 'image/png',
},
},
],
}
);</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="fuMultipleFile" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Multiple File</h4>
                        </div>      
                    </div>
                </div>
                <div class="widget-content widget-content-area">

                    <div class="row">
                        <div class="col-md-6 mx-auto">
                            
                            <div class="multiple-file-upload">
                                
                                <input type="file" 
                                    class="filepond file-upload-multiple"
                                    name="filepond" 
                                    multiple 
                                    data-allow-reorder="true"
                                    data-max-file-size="3MB"
                                    data-max-files="3">
                            </div>
                        </div>
                    </div>
                    


                    <div class="code-section-container show-code">
                                
                        <button class="btn toggle-code-snippet"><span>HTML</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;div class=&quot;multiple-file-upload&quot;&gt;
&lt;input type=&quot;file&quot; 
class=&quot;filepond file-upload-multiple&quot;
name=&quot;filepond&quot; 
multiple 
data-allow-reorder=&quot;true&quot;
data-max-file-size=&quot;3MB&quot;
data-max-files=&quot;3&quot;&gt;
&lt;/div&gt;</pre>
                        </div>
                    </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>JS</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
/**
* ====================
* Multiple File Upload
* ====================
*/

// We want to preview images, so we register
// the Image Preview plugin, We also register 
// exif orientation (to correct mobile image
// orientation) and size validation, to prevent
// large files from being added
FilePond.registerPlugin(
FilePondPluginImagePreview,
FilePondPluginImageExifOrientation,
FilePondPluginFileValidateSize,
// FilePondPluginImageEdit
);

// Select the file input and use 
// create() to turn it into a pond
FilePond.create(
document.querySelector('.file-upload-multiple')
);</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
    
    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <x-slot:footerFiles>
        <script src="{{asset('plugins/filepond/filepond.min.js')}}"></script>
        <script src="{{asset('plugins/filepond/FilePondPluginFileValidateType.min.js')}}"></script>
        <script src="{{asset('plugins/filepond/FilePondPluginImageExifOrientation.min.js')}}"></script>
        <script src="{{asset('plugins/filepond/FilePondPluginImagePreview.min.js')}}"></script>
        <script src="{{asset('plugins/filepond/FilePondPluginImageCrop.min.js')}}"></script>
        <script src="{{asset('plugins/filepond/FilePondPluginImageResize.min.js')}}"></script>
        <script src="{{asset('plugins/filepond/FilePondPluginImageTransform.min.js')}}"></script>
        <script src="{{asset('plugins/filepond/filepondPluginFileValidateSize.min.js')}}"></script>
        <script src="{{asset('plugins/filepond/custom-filepond.js')}}"></script>
        <script>
            singleFile.addFiles("{{Vite::asset('resources/images/drag-1.jpeg')}}");
            multifiles.addFiles("{{Vite::asset('resources/images/list-blog-style-2.jpeg')}}");
        </script>
    </x-slot>
    <!--  END CUSTOM SCRIPTS FILE  -->
</x-base-layout>