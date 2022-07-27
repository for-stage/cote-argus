import { createApp } from 'vue'
import App from './App.vue'

import router from './router'
import vueResource from 'vue-resource'





createApp(App)
.use(router,vueResource)
.mount('#app')

