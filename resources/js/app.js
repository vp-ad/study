/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */
import Vue from 'vue';
// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('group-add', require('./components/GroupAdd.vue').default);
Vue.component('type-add', require('./components/typeAdd.vue').default);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
/*

const app = new Vue({
    el: '#app',
});
*/
Vue.config.ignoredElements = ['select1']

const group = new Vue({
    el: '#group',

    data: {
            fields: [],
            count: 0,
            id: 0,
        },
    methods: {
        addFormElement: function(type) {
            this.fields.push({
                'type': type,
                id: this.count++,

            });
        },
        removeFormElement(id) {
            const index = this.fields.findIndex(f => f.id === id)
            this.fields.splice(index,1)
        }
    }
});

const types = new Vue({
    el: '#types',

    data: {
        fields: [],
        count: 0,
        id: 0,
    },
    methods: {
        addFormElement: function(type) {
            this.fields.push({
                'type': type,
                id: this.count++,

            });
        },
        removeFormElement(id) {
            const index = this.fields.findIndex(f => f.id === id)
            this.fields.splice(index,1)
        }
    }
});
