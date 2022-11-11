import './bootstrap';
import './input';

import Alpine from 'alpinejs';
import dayjs from "dayjs";
import 'dayjs/locale/fr';
import focus from '@alpinejs/focus'
import collapse from '@alpinejs/collapse'
import { sumBy} from "lodash";

window.Alpine = Alpine;

Alpine.plugin(focus)
Alpine.plugin(collapse)


Alpine.start();


Alpine.data('globalData', () => ({

    response: 'yes',

    /**
     *
     * @param  date string
     */
    formatDate(date) {
        // return dayjs(date).local('fr').format('DD MMM YYYY')
        return 'Test'
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


}))

