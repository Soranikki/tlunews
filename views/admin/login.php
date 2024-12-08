<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?= DOMAIN.'views/admin/login.css'; ?>">
  <title>Sign In</title>

</head>
<body>
  <div class="card">
    <img src="https://images.unsplash.com/photo-1733395445302-297d4cd1f82c?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Sign In Image" class="img-fluid">
    <div class="card-body">
      <h2 class="card-title text-center">Sign In</h2>
      <p class="text-center text-small">
        Don't have an account? <a href="<?= DOMAIN.'views/admin/createacc.php'; ?>" class="text-primary">Create Account</a>
      </p>
      <form>
        <div class="mb-3">
          <label for="email" class="form-label">E-Mail</label>
          <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" placeholder="Enter your password" required>
        </div>
        <div class="form-check mb-3 text-start">
            <input type="checkbox" class="form-check-input" id="keepLoggedIn">
            <label for="keepLoggedIn" class="form-check-label">Keep Me Logged in</label>
          </div>
        <div class="d-grid">
            <a  href="admin.html" class='btn btn-success'>Sign In</a>
          <!-- <button type="submit" class="btn btn-primary"">Sign In</button> -->
        </div>
      </form>
    </div>
  </div>

  <!-- Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
