import { createRouter,createWebHistory } from 'vue-router'
import About from '../views/AboutView.vue'

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
];
const router = createRouter({
    
    history:createWebHistory(),
    routes


    
})
export default router;