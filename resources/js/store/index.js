import Vue from 'vue';
import Vuex from 'vuex';

import inquiriesModule from './inquiries';
Vue.use(Vuex);
export default new Vuex.Store({
    modules: {
        inquiriesModule,
    },
})
