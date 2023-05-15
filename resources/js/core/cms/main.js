import Vue from "vue";

import LocaleDatetimePicker from './modules/fdp_component';




import store from './store/store'

window._ = _;

window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

window.redirect = function (route) {
    window.location.href = route;
};
window.reload = function () {
    window.location.reload();
};


window.Vue = require('vue');

Vue.prototype._ = _;


require('./modules');

const vm = new Vue({
    el: '#vApp',
    data: { store },
    methods: {
        handleAxiosError(error) {
        },
        handleError(error) {
        }
    },
});

global.vm = vm;
