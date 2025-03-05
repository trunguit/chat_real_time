import { createWebHistory, createRouter } from "vue-router";
import Register from "../components/auth/Register.vue";
import Login from "../components/auth/Login.vue";
import Index from "../components/chat/Index.vue";
import Profile from "../components/chat/Profile.vue";
const routes = [
    {
        path: "/register",
        name: "register",
        component: Register,
    },
    {
        path: "/login",
        name: "login",
        component: Login,
    },
    {
        path: "/index",
        name: "index",
        component: Index,
        meta: {
            requiresAuth: true
        }
    },
    {
        path: "/profile",
        name: "profile",
        component: Profile,
        meta: {
            requiresAuth: true
        }
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});
router.beforeEach((to, from, next) => {
    const isAuthenticated = localStorage.getItem('token'); 
    if (to.path !== '/login') {
        localStorage.setItem('lastVisited', to.fullPath);
    }

    if (to.meta.requiresAuth && !isAuthenticated) {
        next('/login'); 
    } else if (to.path === '/login' && isAuthenticated) {
        const lastVisited = localStorage.getItem('lastVisited') || '/'; 
        next(lastVisited); 
    } else {
        next();
    }
});
export default router;