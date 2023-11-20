import './bootstrap';

import '../sass/app.scss';

import * as bootstrap from 'bootstrap';

import './utils/back-to-top';
import './utils/sticky';
import './utils/modal';

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

