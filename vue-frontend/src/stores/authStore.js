import {defineStore} from 'pinia';
import api from '../utils/axios';
export const useAuthStore = defineStore('auth', {
    state: () => ({
        user:  JSON.parse(localStorage.getItem('user'))||null,
    }),
    actions: {
        async setUser(user) {
            await api.get('/api/get-profile').then(res =>{
                this.user = res.data.user
                localStorage.setItem('user', JSON.stringify(this.user));
            } ).catch(err => console.log(err));
            
        },
        login(){
            this.setUser();
        },
        logout() {
            this.user = null;
            localStorage.removeItem('user');
        },

       
    }
})
