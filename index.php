<?php
require_once('./config/config.php');
require_once APP_ROOT.'./services/NewService.php';
require_once APP_ROOT.'./services/UserService.php';

// Hiển thị tất cả các tín tức
$newService = new NewService();
$news = $newService->getAllNew();

// Hiển thị tất cả các người dùng
$UserService = new UserService();
$users = $UserService->getAllUser();

echo "<pre>";
print_r($users);
echo "</pre>";
