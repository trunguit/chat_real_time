import { defineStore } from 'pinia';
import api from '../utils/axios';

export const useAuthStore = defineStore('auth', {
    state: () => ({
        user: JSON.parse(localStorage.getItem('user')) || null,
    }),
    actions: {
        async setUser(user = null) {
            if (user) {
                this.user = user; // Cập nhật user ngay lập tức
                localStorage.setItem('user', JSON.stringify(user));
            }

            try {
                const response = await api.get('/api/get-profile');
                this.updateUser(response);
            } catch (error) {
                console.log(error);
            }
        },

        login(userData) {
            this.setUser(userData); // Truyền dữ liệu user vào setUser
        },

        logout() {
            this.user = null;
            localStorage.removeItem('user');
        },

        updateUser(response) {
            this.user = response.data.user;
            localStorage.setItem('user', JSON.stringify(this.user));
        },

        async uploadAvatar(file) {
            try {
                const formData = new FormData();
                formData.append("avatar", file);
                const response = await api.post("api/change-avatar", formData, {
                    headers: {
                        "Content-Type": "multipart/form-data",
                    },
                });

                this.updateUser(response);
            } catch (error) {
                console.error("Lỗi khi upload avatar:", error);
            }
        },
    },
});