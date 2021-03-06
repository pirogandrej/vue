
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import VueChatScroll from 'vue-chat-scroll'
window.Vue.use(VueChatScroll);

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

Vue.component('start-component', require('./components/StartComponent.vue'));
Vue.component('data-component', require('./components/DataComponent.vue'));
Vue.component('ajax-component', require('./components/AjaxComponent.vue'));
Vue.component('chartline-component', require('./components/ChartLineComponent.vue'));
Vue.component('chartpie-component', require('./components/ChartPieComponent.vue'));
Vue.component('chartrandom-component', require('./components/ChartRandomComponent.vue'));

Vue.component('socket-component', require('./components/SocketComponent.vue'));
Vue.component('socket-chat-component', require('./components/SocketChatComponent.vue'));
Vue.component('translation-component', require('./components/TranslationComponent.vue'));
Vue.component('chat-component', require('./components/ChatComponent.vue'));
Vue.component('io-component', require('./components/IoComponent.vue'));
// const files = require.context('./', true, /\.vue$/i)

// files.keys().map(key => {
//     return Vue.component(_.last(key.split('/')).split('.')[0], files(key))
// })

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app'
});
