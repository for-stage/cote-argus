import { createRouter,createWebHistory } from 'vue-router'
import About from '../views/AboutView.vue'
import Detail from '../views/DetailAchat.vue'
import Marque from '../views/MarqueView.vue'
import Model from '../views/ModelView.vue'
import Infos from '../views/InfosView.vue'
import Admin from '../views/AdminPage.vue'
import Table from '../views/Table.vue'

const routes = [


    {
        path: '/',
        name: 'marque',
        component: Marque

    },
    {
        path: '/Model',
        name: 'model',
        component: Model
    },
    {
        path: '/details',
        name: 'details',
        component: Detail,
    },
    {
        path: '/infos',
        name: 'infos',
        component: Infos,
    }   ,
    {
        path: '/about',
        name: 'about',
        component: About,
    }   ,
    {
        path: '/admin',
        name: 'admin',
        component: Admin,
    },
    {
        path:'/table',
        name:'table',
        component:Table,
    },
    {
        path:'/page',
        name:'page',
        component:()=>import('../views/Page.vue'),
    }
    
];
const router = createRouter({
    
    history:createWebHistory(),
    routes


    
})
export default router;