<?php
require_once APP_ROOT.'/config/config.php';
require_once APP_ROOT.'/services/NewService.php';

$service = new NewService();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = intval($_POST['id']);

    if ($service->deleteNews($id)) {
        echo "Xóa bài viết thành công!";
    } else {
        echo "Xóa bài viết thất bại!";
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
<!-- Form xác nhận xóa bài viết -->
<form method="post">
    <input type="hidden" name="id" value="<?= $news->getId(); ?>">
    <p>Bạn có chắc chắn muốn xóa bài viết: <strong><?= $news->getTitle(); ?></strong>?</p>
    <button type="submit">Xóa bài viết</button>
    <a href="javascript:history.back()">Hủy</a>
</form>
