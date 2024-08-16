import * as VueRouter from "vue-router";



export default VueRouter.createRouter ({

    history: VueRouter.createWebHistory('/dashboard/shop/public/'),
    routes: [
      
        {
            path: '/',
            name: 'home',
            component: () => import('../views/website/index.vue')
        },
        {
            path: '/products',
            name: 'product',
            component: () => import('../views/product/index.vue')
        }
    ]
    

})

