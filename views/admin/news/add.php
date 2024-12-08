<?php
require_once('../../../config/config.php');
require_once APP_ROOT.'/services/NewService.php';
require_once APP_ROOT.'/models/News.php';
require_once APP_ROOT.'/libs/DBConnection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Lấy dữ liệu từ form
    $title = $_POST['title'];
    $content = $_POST['content'];
    $category_id = intval($_POST['category_id']);
    $created_at = $_POST['created_at'];

    // Xử lý upload ảnh
    $image = null;
    $uploadDir = APP_ROOT . '/uploads/';
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true); // Tạo thư mục nếu chưa tồn tại
    }
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $image = basename($_FILES['image']['name']);
        $uploadFile = $uploadDir . $image;
        if (!move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile)) {
            echo "Lỗi khi upload ảnh!";
            exit;
        }
    }

    $news = new News(0, $title, $content, $image, $created_at, $category_id);
    
    // Khởi tạo đối tượng NewService
    $service = new NewService();
    
    // Gọi phương thức addNews() của NewService
    if ($service->addNews($news)) {
        echo "Thêm bài viết thành công!";
    } else {
        echo "Thêm bài viết thất bại!";
    }
}
?>
<!-- Form thêm bài viết -->
<form method="post" enctype="multipart/form-data">
    <label>Tiêu đề:</label>
    <input type="text" name="title" required>
    <label>Nội dung:</label>
    <textarea name="content" required></textarea>
    <label>Hình ảnh:</label>
    <input type="file" name="image" accept="image/*">
    <label>Danh mục:</label>
    <input type="number" name="category_id" required>
    <label>Ngày tạo:</label>
    <input type="date" name="created_at" required>
    <button type="submit">Thêm bài viết</button>
</form>