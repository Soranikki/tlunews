<?php
require_once('./config/config.php');
require_once APP_ROOT.'./services/NewService.php';

$newService = new NewService();
$news = $newService->getAllNew();

echo "<pre>";
print_r($news);
echo "</pre>";
