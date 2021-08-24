require('./bootstrap');

window.Vue = require('vue').default;
import VueSweetalert2 from 'vue-sweetalert2';
import 'sweetalert2/dist/sweetalert2.min.css';

Vue.use(VueSweetalert2);

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('managecate-component', require('./components/ManageCate.vue').default);
Vue.component('createuser-component', require('./components/CreateUser.vue').default);


const app = new Vue({
    el: '#app',
});
