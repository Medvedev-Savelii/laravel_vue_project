import {createRouter} from "vue-router";
import {createWebHistory} from "vue-router";


const routes = [
    {
        path: '/people', component: () => import('./components/Person/Index.vue'),
        name: 'person.index'
    },
    {
        path: '/people/create', component: () => import('./components/Person/Create.vue'),
        name: 'person.create'
    },
    {
        path: '/people/edit', component: () => import('./components/Person/Edit.vue'),
        name: 'person.edit'
    },
    {
        path: '/people/show', component: () => import('./components/Person/Show.vue'),
        name: 'person.show'
    }
]

const router = createRouter({
    routes,
    history: createWebHistory(),
})

export default router

