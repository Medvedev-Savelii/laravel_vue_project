import {createRouter} from "vue-router";
import {createWebHistory} from "vue-router";
import PostComponent from "./components/PostComponent.vue";

const routes = [
    {path: '/posts', component: PostComponent},
]

const router = createRouter({
    routes,
    history: createWebHistory(),

})

export default router

