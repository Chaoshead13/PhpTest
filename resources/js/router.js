import * as VueRouter from "vue-router";



export default VueRouter.createRouter ({

    history: VueRouter.createWebHistory('/dashboard/shop/public/'),
    routes: [
        {
            path: '/app',
            name: 'app',
            component: () => import('./components/app.vue')
        },
        {
            path: '/some',
            name: 'some',
            component: () => import('./components/some.vue')
        }
    ]
    

})

