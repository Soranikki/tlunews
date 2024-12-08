<?php
require_once APP_ROOT.'/models/User.php';

class UserService {
    public function getAllUser(){
        // kết nối với CSDL
        try{
            $conn = new PDO("mysql:host=localhost;dbname=TinTuc", "root","");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Truy vấn dữ liệu
            $sql = "SELECT * FROM users";
            $stmt = $conn->query($sql);

            $users = [];
            while($row = $stmt->fetch()){
                $usersItem = new User($row['id'], $row['username'],$row['password'],$row['role']);
                $users[] = $usersItem;
            }
            return $users;
        }
        catch(PDOException $e){
            echo "Kết nối thất bại: " . $e->getMessage();
            // $conn = null;
            // echo $e->getMessage();
            return $users = [];
        }
    }
}
?>
