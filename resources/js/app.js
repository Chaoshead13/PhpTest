import { createApp } from 'vue';
import Index from "./components/Index.vue";
import router from "./router";
import './bootstrap';

const app = createApp({});

app.component('index', Index); 
app.use(router); 
app.mount('#app');
