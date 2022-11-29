
import * as FilePond from 'filepond';
import FilePondPluginFileValidateType from 'filepond-plugin-file-validate-type';
import FilePondPluginFileEncode from 'filepond-plugin-file-encode';
import FilePondPluginFileValidateSize from 'filepond-plugin-file-validate-size';


const globalData =  () => ({

    response: 'yes',
    openSidebar: true,

    init(){
        console.log('Init Alpinejs')
        this.filepondConf();
    },

    filepondConf(){
        FilePond.registerPlugin(FilePondPluginFileValidateType, FilePondPluginFileValidateSize);

        FilePond.setOptions({
            allowMultiple: false,
                    // maxFiles: 1,
        acceptedFileTypes: ['application/pdf'],
            allowFileTypeValidation: true,
            labelFileTypeNotAllowed: 'Veuillez téléverser un PDF',
            allowFileSizeValidation: true,
            maxFileSize: '1MB',
            labelMaxFileSizeExceeded: 'Fichier trop grand',
            labelMaxFileSize: 'La taille maximum est 1MB'
    });
    },

    /**
     *
     * @param amount number
     */
    handlePayment(amount= 0){
        openKkiapayWidget({
            amount: amount+'',
            position:"center",
            callback:"",
            theme:"#0095ff",
            sandbox: "true",
            key:"cfa29b803b5611edafa2d398c4589a54",

        })
    },

    /**
     *
     * @param  date string
     */
    formatDate(date) {
        return dayjs(date).local('fr').format('DD MMM YYYY')
    },

    /**
     *
     * @param num number
     */
    formatNumber(num){
        return  new Intl.NumberFormat('fr', { style: 'currency', currency: 'XOF' }).format(num);
    },

    /**
     *
     * @param args
     * @returns {number}
     */
    sumArray(args = []){
        return sumBy(args, (value) =>Number(value));
    }

});

export default globalData;

