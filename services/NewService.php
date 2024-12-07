<?php
require_once('../tlunews/config/config.php');
require_once APP_ROOT.'/tlunews/models/News.php';

class NewService {
    public function getAllNew(){
        try{
            $conn = new PDO("mysql:host=localhost;dbname=databkt", "root","");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "SELECT * FROM news";
            $stmt = $conn->query($sql);

            $news = [];
            while($row = $stmt->fetch()){
                $newsItem = new News($row['id'], $row['title'], $row['content'], $row['image'], $row['created_at'], $row['category_id']);
                $news[] = $newsItem;
            }
            echo "Kết nối thành công!";
            return $news;
        }
        catch(PDOException $e){
            echo "Kết nối thất bại: " . $e->getMessage();
            // $conn = null;
            // echo $e->getMessage();
            return $news = [];
        }
    }
}
?>
