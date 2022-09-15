import './bootstrap';
import { createApp } from 'vue';
import router from "./router";
import Index from './components/Index.vue'


createApp(Index).use(router).mount('#app')
