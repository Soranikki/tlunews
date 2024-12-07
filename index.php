<?php
require_once('./tlunews/config/config.php');
require_once APP_ROOT.'./tlunews/services/NewService.php';

$newService = new NewService();
$news = $newService->getAllNew();

echo "<pre>";
print_r($news);
echo "</pre>";
