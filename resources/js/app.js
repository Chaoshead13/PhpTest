import { createApp } from 'vue';
import App from './components/app.vue';
import router from "./router";
import './bootstrap';
import axios from 'axios';

const app = createApp({});

app.component('app', App); 
app.use(router); 
app.config.globalProperties.axios = axios
app.mount('#app');
