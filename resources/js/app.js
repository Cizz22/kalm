window.Vue = require('vue').default;
require('./bootstrap');

Vue.component("video-chat", require("./components/VideoChat.vue").default);

const app = new Vue({
    el: '#app',
});
