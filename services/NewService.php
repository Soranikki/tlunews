<?php
require_once APP_ROOT.'/models/News.php';

class NewService {
    public function getAllNew(){
            // Kết nối với CSDL
            $dbConnection = new DBConnection();
            $conn = $dbConnection->getConnection();
            if($conn != null) {
                // Truy Vấn dữ liệu
                $sql = "SELECT * FROM news ORDER BY id ASC";
                $stmt = $conn->query($sql);

                // Xuất dữ liệu
                $news = [];
                while($row = $stmt->fetch()){
                    $newsItem = new News($row['id'], $row['title'], $row['content'], $row['image'], $row['created_at'], $row['category_id']);
                    $news[] = $newsItem;
                }
                return $news;
            }
        }
    }
?>
