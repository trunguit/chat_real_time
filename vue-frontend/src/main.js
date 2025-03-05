import { createApp } from 'vue'
// import './style.css'
import App from './App.vue'
import router from './router'
import 'bootstrap/dist/css/bootstrap.min.css'
import './assets/css/bundle0ae1.css';
import './assets/css/app0ae1.css';
import { createPinia } from 'pinia';
import echo from "./plugins/echo";
const pinia = createPinia()
const app = createApp(App);

app.config.globalProperties.$echo = echo;
app.use(router).use(pinia).mount('#app')
