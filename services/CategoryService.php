<?php
require_once APP_ROOT.'/models/Category.php';

class CategoryService {
    public function getAllCategory(){
        try{
            $conn = new PDO("mysql:host=localhost;dbname=TinTuc", "root","");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "SELECT * FROM categories";
            $stmt = $conn->query($sql);

            $categorys = [];
            while($row = $stmt->fetch()){
                $categorysItem = new Category($row['id'], $row['name']);
                $categorys[] = $categorysItem;
            }
            echo "Kết nối thành";
            return $categorys;
        }
        catch(PDOException $e){
            echo "Kết nối thất bại: " . $e->getMessage();
            // $conn = null;
            // echo $e->getMessage();
            return $categorys = [];
        }
    }
}
?>
