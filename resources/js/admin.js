import '@fortawesome/fontawesome-free/js/all';

import Vue from 'vue';


function baseUrl(){
    let getUrl = window.location;

    if (getUrl.host === 'localhost')
        return getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1] + '/' + getUrl.pathname.split('/')[2];

    return getUrl .protocol + "//" + getUrl.host + "/";
}
