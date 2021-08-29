require('./bootstrap');

window.Vue = require('vue').default;
import VueSweetalert2 from 'vue-sweetalert2';
import 'sweetalert2/dist/sweetalert2.min.css';
import VueCarousel from 'vue-carousel';

Vue.use(VueCarousel);
Vue.use(VueSweetalert2);

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('managecate-component', require('./components/ManageCate.vue').default);
Vue.component('createuser-component', require('./components/CreateUser.vue').default);
Vue.component('manageuser-component', require('./components/ShowUser.vue').default);
Vue.component('createcontent-component', require('./components/CreateContent.vue').default);
Vue.component('carouselhome-component', require('./components/CarouselHome.vue').default);
Vue.component('home-component', require('./components/Home.vue').default);
Vue.component('managecontent-component', require('./components/ManageContent.vue').default);
Vue.component('detailcontent-component', require('./components/DetailContent.vue').default);
Vue.component('editcontent-component', require('./components/EditContent.vue').default);


const app = new Vue({
    el: '#app',
});
