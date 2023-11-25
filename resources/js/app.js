import './bootstrap';

import '../sass/app.scss';

import * as bootstrap from 'bootstrap';

import jQuery from 'jquery';
import {backToTop} from "./partials/back-to-top.js";
import {sticky} from "./partials/sticky.js";
import {modal} from "./partials/modal.js";

window.$ = jQuery;

backToTop();
sticky();
modal();

const toastTrigger = document.getElementById('liveToastBtn')
const toastLiveExample = document.getElementById('liveToast')

if (toastTrigger) {
    const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample)
    toastTrigger.addEventListener('click', () => {
        toastBootstrap.show()
    })
}

