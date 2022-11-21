
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

