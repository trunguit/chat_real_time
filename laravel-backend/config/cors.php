<?php

return [
    'paths' => ['api/*', 'sanctum/csrf-cookie','broadcasting/auth'],
    'allowed_methods' => ['*'], // Cho phép tất cả phương thức HTTP
    'allowed_origins' => ['http://localhost:5173'], // Chỉ định đúng domain frontend
    'allowed_origins_patterns' => [],
    'allowed_headers' => ['*'], // Cho phép tất cả headers
    'exposed_headers' => [],
    'max_age' => 0,
    'supports_credentials' => true, // Bật nếu dùng Sanctum hoặc gửi credentials
];

