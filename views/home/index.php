<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <div class="container">
        <h3 class="text-center text-uppercase text-success my-3">Quản lý tin tức</h3>
        <form action="" method="GET" class="mb-3 d-flex">
            <input type="text" name="search" class="form-control me-2" placeholder="Tìm kiếm tin tức..." value="<?= isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>">
            <button type="submit" class="btn btn-primary">Tìm kiếm</button>
        </form>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">title</th>
      <th scope="col">content</th>
      <th scope="col">image</th>
      <th scope="col">created_at</th>
      <th scope="col">category_id</th>
    </tr>
  </thead>
  <tbody>
    <?php 
        foreach($news as $new) {
    ?>
            <tr>
                <th scope="row"><?= $new->getId(); ?></th>
                <td><?= $new->getTitle(); ?></td>
                <td><?= $new->getContent(); ?></td>
                <td><?= $new->getImage(); ?></td>
                <td><?= $new->getCreatedAt(); ?></td>
                <td><?= $new->getCategoryId(); ?></td>
            </tr>
    <?php
        }
    ?>

      </tbody>
</table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>