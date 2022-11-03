import './bootstrap';

import Alpine from 'alpinejs';
import dayjs from "dayjs";
import 'dayjs/locale/fr';
import focus from '@alpinejs/focus'

window.Alpine = Alpine;

Alpine.plugin(focus)
Alpine.start();


Alpine.data('globalData', () => ({
    /**
     *
     * @param  date string
     */
    formatDate(date) {
        // return dayjs(date).local('fr').format('DD MMM YYYY')
        return 'Test'
    }
}))
