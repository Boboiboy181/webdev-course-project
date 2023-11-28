import './bootstrap';

import '../sass/app.scss';

import * as bootstrap from 'bootstrap';

import {backToTop} from './partials/back-to-top';
import {sticky} from './partials/sticky';
import {modal} from './partials/modal';

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

