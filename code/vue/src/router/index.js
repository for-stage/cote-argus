import { createRouter,createWebHistory } from 'vue-router'
import About from '../views/AboutView.vue'
import Detail from '../views/DetailAchat.vue'

const routes = [


    {
        path: '/',
        name: 'app',

    },
    {
        path: '/about',
        name: 'about',
        component: About,
    },
    {
        path: '/details',
        name: 'details',
        component: Detail,
    },
];
const router = createRouter({
    
    history:createWebHistory(),
    routes


    
})
export default router;