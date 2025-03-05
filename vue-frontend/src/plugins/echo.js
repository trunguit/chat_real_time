import Echo from "laravel-echo";
import Pusher from "pusher-js";

// Khởi tạo Pusher
window.Pusher = Pusher;
window.Echo = new Echo({
    broadcaster: "pusher",
    key: "fbfd5900f7e09809e159",
    cluster: "ap1",
    encrypted: true,
    authEndpoint: "http://127.0.0.1:8000/broadcasting/auth",
    auth: {
        headers: {
            Authorization: `Bearer ${localStorage.getItem("token")}`, 
        },
    },
});

export default window.Echo;
