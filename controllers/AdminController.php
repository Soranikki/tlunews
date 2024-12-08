<?php
require_once APP_ROOT.'/services/NewService.php';
class AdminController
{
    public function index()
    {   
        $newService = new NewService();
        $news = $newService->getAllNew();
        //render
        include APP_ROOT.'/views/admin/dashboard.php';
    }
}