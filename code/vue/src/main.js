import { createApp } from 'vue'
import App from './App.vue'
 
// import './index.css'
import router from './router'
import vueResource from 'vue-resource'
//importationde jw-vue-pagination pour la pagination

// Vue.component('jw-pagination', JwPagination);
// import { Bar } from 'vue-chartjs'
// import ApexCharts from 'apexcharts'
// import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'
// import 'bootstrap/dist/css/bootstrap.css'
// import 'bootstrap-vue/dist/bootstrap-vue.css'
// import Vue from 'vue'

// vue.use(vueResource)



createApp(App)
.use(router,vueResource)
.mount('#app')


// createApp.http.options.root = 'http://localhost:3000/api/';

// Vue.use(BootstrapVue)