import './bootstrap';
import { createApp } from 'vue';
import router from "./router";
import store from './store'
import Index from './components/Index.vue'


createApp(Index).use(store).use(router).mount('#app')
