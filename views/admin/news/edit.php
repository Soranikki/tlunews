<?php
require_once('../../../config/config.php');
require_once APP_ROOT.'/services/NewService.php';
require_once APP_ROOT.'/models/News.php';
require_once APP_ROOT.'/libs/DBConnection.php';

$service = new NewService();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = intval($_POST['id']);
    $title = $_POST['title'];
    $content = $_POST['content'];
    $category_id = intval($_POST['category_id']);
    $created_at = $_POST['created_at'];

    // Xử lý upload ảnh (nếu có upload mới)
    $image = $_POST['existing_image'];
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $uploadDir = APP_ROOT . '/uploads/';
        $image = basename($_FILES['image']['name']);
        $uploadFile = $uploadDir . $image;

        if (!move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile)) {
            echo "Lỗi khi upload ảnh!";
            exit;
        }
    }

    $news = new News($id, $title, $content, $image, $created_at, $category_id);
    if ($service->updateNews($news)) {
        echo "Cập nhật bài viết thành công!";
    } else {
        echo "Cập nhật bài viết thất bại!";
    }
} else {
    $id = intval($_GET['id']);
    $news = $service->getNewsById($id);
    if (!$news) {
        echo "Bài viết không tồn tại!";
        exit;
    }
}
?>
<!-- Form chỉnh sửa bài viết -->
<form method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $news->getId(); ?>">
    <label>Tiêu đề:</label>
    <input type="text" name="title" value="<?= $news->getTitle(); ?>" required>
    <label>Nội dung:</label>
    <textarea name="content" required><?= $news->getContent(); ?></textarea>
    <label>Hình ảnh:</label>
    <input type="file" name="image" accept="image/*">
    <input type="hidden" name="existing_image" value="<?= $news->getImage(); ?>">
    <small>Ảnh hiện tại: <?= $news->getImage(); ?></small>
    <label>Danh mục:</label>
    <input type="number" name="category_id" value="<?= $news->getCategoryId(); ?>" required>
    <label>Ngày tạo:</label>
    <input type="date" name="created_at" value="<?= $news->getCreatedAt(); ?>" required>
    <button type="submit">Cập nhật bài viết</button>
</form>