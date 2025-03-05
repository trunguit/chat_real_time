// src/stores/friendStore.js
import { defineStore } from 'pinia';
import api from '../utils/axios';

export const useFriendStore = defineStore('friend', {
    state: () => ({
        friends: [], // Danh sách bạn bè
    }),
    actions: {
        async getFriendList() {
            try {
                const response = await api.get('/api/friend-list');
                this.friends = response.data.friends;
            } catch (error) {
                console.error("Lỗi tìm kiếm liên hệ:", error);
                throw error;
            }
        },
    },
});