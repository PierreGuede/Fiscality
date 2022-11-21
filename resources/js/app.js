import './bootstrap';
// import './input';


import dayjs from "dayjs";
import 'dayjs/locale/fr';
import focus from '@alpinejs/focus'
import collapse from '@alpinejs/collapse'
import { sumBy} from "lodash";
import * as FilePond from 'filepond';
import FilePondPluginFileValidateType from 'filepond-plugin-file-validate-type';
import FilePondPluginFileEncode from 'filepond-plugin-file-encode';
import FilePondPluginFileValidateSize from 'filepond-plugin-file-validate-size';

FilePond.registerPlugin(FilePondPluginFileValidateType, FilePondPluginFileEncode, FilePondPluginFileValidateSize);


// Get a reference to all the file input element
// const ifuElement = document.querySelector('input[data-name="ifu"]');
// const rccmElement = document.querySelector('input[data-name="rccm"]');
//
// FilePond.create(ifuElement, {
//     name: 'ifu_file',
//     acceptedFileTypes: ['application/pdf'],
//     allowFileTypeValidation: true,
//     labelFileTypeNotAllowed: 'Veuillez téléverser un PDF',
//     allowFileSizeValidation: true,
//     maxFileSize: '1MB',
//     labelMaxFileSizeExceeded: 'Fichier trop grand',
//     labelMaxFileSize: 'La taille maximum est 1MB'
// });
//
//  FilePond.create(rccmElement, {
//      name: 'rccm_file',
//      acceptedFileTypes: ['application/pdf'],
//      allowFileTypeValidation: true,
//      labelFileTypeNotAllowed: 'Veuillez téléverser un PDF',
//      allowFileSizeValidation: true,
//      maxFileSize: '1MB',
//      labelMaxFileSizeExceeded: 'Fichier trop grand',
//      labelMaxFileSize: 'La taille maximum est 1MB'
//  });
//
// FilePond.setOptions({
//     server: {
//         url: '/upload',
//         headers: {
//             'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
//         }
//     },
//     allowMultiple: true,
// })

const paymentButton = document.querySelector('#payment');
const price = document.querySelector('#price');


// paymentButton.addEventListener('click', (evt) => {
//         openKkiapayWidget({
//             amount:'' +price.attributes['value'].value,
//             position:"center",
//             callback:"",
//             theme:"#0095ff",
//             sandbox: "true",
//             key:"cfa29b803b5611edafa2d398c4589a54",
//
//         })
// })


// addSuccessListener(response => {
//     Livewire.emit('save', response.transactionId);
// });




