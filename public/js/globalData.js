
const globalData =  () => ({

    response: 'yes',

    init(){
        console.log('Init Alpinejs')
    },

    /**
     *
     * @param amount number
     */
    handlePayment(amount= 0){
        openKkiapayWidget({
            amount:"1",
            position:"center",
            callback:"",
            theme:"#0095ff",
            sandbox: "true",
            key:"cfa29b803b5611edafa2d398c4589a54",

        })
    },

    /**
     *
     * @param companyName string
     */
    handleCompanyAccess(companyName) {
        window.$wireui.confirmDialog({
            title: 'Vérification',
            description: `Vous êtes sur le point d'accéder à l'espace de travail de ${companyName}  . Veuillez renseigner son nom tel quel pour confirmer l'accès à cet espace de travail.`,
            icon: 'question',
            accept: {
                label: 'Confirmer',
                method: 'save',
                params: 'name',
            },
            reject: {
                label: 'Annuler',
            }
        },1)
    }

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
        console.log(num)
        return  new Intl.NumberFormat('fr', { style: 'currency', currency: 'XOF' }).format(number);
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

