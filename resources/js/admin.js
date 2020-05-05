import '@fortawesome/fontawesome-free/js/all';

import Vue from 'vue';
import tinymce from 'tinymce/tinymce'

tinymce.init({
    selector: '.tinymce',
    language: 'ru',
    language_url :  baseUrl() + '/build/ru.js', 
   // images_upload_url: baseUrl() + '/upload-tinymce',
    automatic_uploads: false,
    relative_urls : false,

    plugins : 'advlist autolink link image lists charmap print preview code',
    toolbar: 'insert | undo redo |  formatselect | bold italic backcolor image | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | code'
    /*images_upload_handler: function (blobInfo, success, failure) {
        var xhr, formData;
        xhr = new XMLHttpRequest();
        xhr.withCredentials = false;
        xhr.open('POST', baseUrl() + '/upload-tinymce');
        var token = $('meta[name="csrf-token"]').attr('content');
        xhr.setRequestHeader("X-CSRF-Token", token);
        xhr.onload = function() {
            var json;
            if (xhr.status != 200) {
                failure('HTTP Error: ' + xhr.status);
                return;
            }
            json = JSON.parse(xhr.responseText);

            if (!json || typeof json.location != 'string') {
                failure('Invalid JSON: ' + xhr.responseText);
                return;
            }
            success(json.location);
        };
        formData = new FormData();
        formData.append('file', blobInfo.blob(), blobInfo.filename());
        xhr.send(formData);
    }*/
});


function baseUrl(){
    let getUrl = window.location;

    if (getUrl.host === 'localhost')
        return getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1] + '/' + getUrl.pathname.split('/')[2];

    return getUrl .protocol + "//" + getUrl.host + "/";
}
