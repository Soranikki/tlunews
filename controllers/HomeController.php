<?php
require_once APP_ROOT.'/services/NewService.php';
class HomeController
{
    public function index()
    {   
        $newService = new NewService();
        $news = $newService->getAllNew();
        //render
        include APP_ROOT.'/views/home/index.php';
    }
}