<?php
require_once APP_ROOT.'/models/News.php';

class NewService {
    public function getAllNews(): array
    {
        $dbConnection = new DBConnection();
        $conn = $dbConnection->getConnection();
        if ($conn != null) {
            $sql = "SELECT * FROM news";
            $stmt = $conn->query($sql);
            $news = [];
            while ($row = $stmt->fetch()) {
                $newsItem = new News(
                    $row['id'],
                    $row['title'],
                    $row['content'],
                    $row['image'],
                    $row['created_at'],
                    $row['category_id']
                );
                $news[] = $newsItem;
            }
            return $news;
        }
        return [];
    }

    public function getNewsById(int $id): ?News
    {
        $dbConnection = new DBConnection();
        $conn = $dbConnection->getConnection();
        if ($conn != null) {
            $sql = "SELECT * FROM news WHERE id = :id";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            $row = $stmt->fetch();
            if ($row) {
                return new News(
                    $row['id'],
                    $row['title'],
                    $row['content'],
                    $row['image'],
                    $row['created_at'],
                    $row['category_id']
                );
            }
        }
        return null;
    }

    public function addNews(News $news)  {
        $dbConnection = new DBConnection();
        $conn = $dbConnection->getConnection();
        if ($conn != null) {
            $sql = "INSERT INTO news (title, content, image, created_at, category_id)
                    VALUES (:title, :content, :image, :created_at, :category_id)";
            $stmt = $conn->prepare($sql);
            $title = $news->getTitle();
            $content = $news->getContent();
            $image = $news->getImage();
            $created_at = $news->getCreatedAt();
            $category_id = $news->getCategoryId();

            $stmt->bindParam(':title', $title);
            $stmt->bindParam(':content', $content);
            $stmt->bindParam(':image', $image);
            $stmt->bindParam(':created_at', $created_at);
            $stmt->bindParam(':category_id', $category_id);

            return $stmt->execute();
        }
        return false;
    }

    public function updateNews(News $news): bool
    {
        $dbConnection = new DBConnection();
        $conn = $dbConnection->getConnection();
        if ($conn != null) {
            $sql = "UPDATE news 
                    SET title = :title, content = :content, image = :image, created_at = :created_at, category_id = :category_id 
                    WHERE id = :id";
            $stmt = $conn->prepare($sql);
            $id = $news->getId();
            $title = $news->getTitle();
            $content = $news->getContent();
            $image = $news->getImage();
            $created_at = $news->getCreatedAt();
            $category_id = $news->getCategoryId();
            $stmt->bindParam(':id',$id);        
            $stmt->bindParam(':title', $title);
            $stmt->bindParam(':content', $content);
            $stmt->bindParam(':image', $image);
            $stmt->bindParam(':created_at', $created_at);
            $stmt->bindParam(':category_id', $category_id);
            
            return $stmt->execute();
        }
        return false;
    }

    public function deleteNews(int $id): bool
    {
        $dbConnection = new DBConnection();
        $conn = $dbConnection->getConnection();
        if ($conn != null) {
            $sql = "DELETE FROM news WHERE id = :id";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            return $stmt->execute();
        }
        return false;
    }
}
?>
