import { createApp } from 'vue';
import App from './components/app.vue';
import router from "./router";
import './bootstrap';

const app = createApp({});

app.component('app', App); 
app.use(router); 
app.mount('#app');
