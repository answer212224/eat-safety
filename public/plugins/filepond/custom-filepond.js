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
    FilePondPluginImageTransform
    //   FilePondPluginImageEdit
);

// Select the file input and use
// create() to turn it into a pond
window.singleFile = FilePond.create(document.querySelector(".filepond"), {
    // labelIdle: `<span class="no-image-placeholder"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg></span> <p class="drag-para">Drag & Drop your picture or <span class="filepond--label-action" tabindex="0">Browse</span></p>`,
    imagePreviewHeight: 170,
    imageCropAspectRatio: "1:1",
    imageResizeTargetWidth: 200,
    imageResizeTargetHeight: 200,
    stylePanelLayout: "compact circle",
    styleLoadIndicatorPosition: "center bottom",
    styleProgressIndicatorPosition: "right bottom",
    styleButtonRemoveItemPosition: "left bottom",
    styleButtonProcessItemPosition: "right bottom",
});

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
    FilePondPluginFileValidateSize
    // FilePondPluginImageEdit
);

// Select the file input and use
// create() to turn it into a pond
window.multifiles = FilePond.create(
    document.querySelector(".file-upload-multiple"),
    {
        labelIdle: `<span class="no-image-placeholder"><i class="flaticon-cloud-upload"></i></span><p class="drag-para">拖曳檔案或<span class="filepond--label-action" tabindex="0">點擊此處上傳</span></p>`,
    }
);

FilePond.setOptions({
    acceptedFileTypes: ["image/png", "image/jpeg", "image/jpg"],
    server: {
        url: "/filepond/api",
        process: "/process",
        revert: "/process",
        patch: "?patch=",
        headers: {
            "X-CSRF-TOKEN": "{{ csrf_token() }}",
        },
    },
});
