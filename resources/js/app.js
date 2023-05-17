import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import { functionsIn } from 'lodash';
import.meta.glob([
    '../img/**'
])

const domBox = document.querySelector('.box');

domBox.addEventListener('click', function () {
    bootstrap.Alert('ciao');
})