<?php
require_once('./config/config.php');
require_once('./libs/DBConnection.php');
// require_once APP_ROOT.'./controllers/HomeController.php';

// $homeController = new HomeController();
// $homeController->index();

$controller = isset($_GET['controller']) ? $_GET['controller'] : 'login';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

if ($controller == 'home') {
    require_once APP_ROOT.'/controllers/HomeController.php';
    $homeController = new HomeController();
    $homeController->index();
} else if ($controller == 'admin') {
    require_once APP_ROOT.'/controllers/AdminController.php';
    $adminController = new AdminController();
    $adminController->index();
} else if ($controller == 'login') {
    require_once APP_ROOT.'/controllers/LoginController.php';
    $loginController = new LoginController();
    $loginController->index();
}
else {
    echo "Trang không tồn tại";
}