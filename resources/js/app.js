import './bootstrap';
import Alpine from 'alpinejs';

window.Alpine = Alpine;

import dayjs from "dayjs";
import 'dayjs/locale/fr';
import focus from '@alpinejs/focus'
import collapse from '@alpinejs/collapse'
import {sumBy} from "lodash";
import * as FilePond from 'filepond';
import FilePondPluginFileValidateType from 'filepond-plugin-file-validate-type';
import FilePondPluginFileEncode from 'filepond-plugin-file-encode';
import FilePondPluginFileValidateSize from 'filepond-plugin-file-validate-size';
import globalData from "./globalData";

import './../../vendor/power-components/livewire-powergrid/dist/powergrid'


FilePond.registerPlugin(FilePondPluginFileValidateType, FilePondPluginFileEncode, FilePondPluginFileValidateSize);

// const paymentButton = document.querySelector('#payment');
// const price = document.querySelector('#price');
//
//
// if (paymentButton != undefined && price != undefined) {
//
//     paymentButton.addEventListener('click', (evt) => {
//         console.log(price.attributes['value'].value);
//         openKkiapayWidget({
//             amount: '' + price.attributes['value'].value,
//             position: "center",
//             callback: "",
//             theme: "#0095ff",
//             sandbox: "true",
//             key: "cfa29b803b5611edafa2d398c4589a54",
//
//         })
//     })
//
// }
    addSuccessListener(response => {
        Livewire.emit('save', response.transactionId);
    });
Alpine.data('globalData', globalData);


Alpine.data('data', () => ({
    isProfileMenuOpen: false,
    workToggle:false,
    // handlePayment() {
    //
    // },
    toggleworkToggle() {
        this.workToggle = !this.workToggle
    },
    toggleProfileMenu() {
        this.isProfileMenuOpen = !this.isProfileMenuOpen
    },

    closeProfileMenu() {
        this.isProfileMenuOpen = false
    },

    isSideMenuOpen: false,
    toggleSideMenu() {
        this.isSideMenuOpen = !this.isSideMenuOpen
    },

    closeSideMenu() {
        this.isSideMenuOpen = false
    },

    isMultiLevelMenuOpen: false,
    toggleMultiLevelMenu() {
        this.isMultiLevelMenuOpen = !this.isMultiLevelMenuOpen
    }
}))

