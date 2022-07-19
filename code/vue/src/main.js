import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import vueResource from 'vue-resource'


// vue.use(vueResource)



createApp(App)
.use(router,vueResource)
.mount('#app')

createApp.http.options.root = 'http://localhost:3000/api/';