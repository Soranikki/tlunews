<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Create Account</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #eaf2ff;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }
    .card {
      background-color: #cfe2ff;
      padding: 20px;
      border-radius: 15px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      width: 350px;
      text-align: center;
    }
    .card img {
  border-radius: 10px 10px 0 0;
  max-height: 200px;
  object-fit: cover;
}
    .form-control {
      border-radius: 20px;
    }
    .btn-custom {
      background-color: #007bff;
      color: white;
      border-radius: 20px;
      padding: 10px 0;
      border: none;
    }
    .btn-custom:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
  <div class="card">
    <img src="https://images.unsplash.com/photo-1733395445556-de9323e37a00?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Sign In Image" class="img-fluid">
    <h2 class="mb-4">Create Account</h2>
    <form>
      <div class="mb-3">
        <input type="email" class="form-control" id="email" placeholder="E-Mail" required>
      </div>
      <div class="mb-3">
        <input type="password" class="form-control" id="password" placeholder="Password" required>
      </div>

      <a  href="login.html" class='btn btn-success'>GO!</a>
      <!-- <button type="submit" class="btn btn-custom w-100" >GO!</button> -->
    </form>
  </div>
  <script>
    document.getElementById('createacc').addEventListener('submit', function(event) {
      event.preventDefault(); // Ngăn chặn gửi form
      window.location.href = 'login.html'; // Chuyển hướng đến trang login
    });
  </script>

  <!-- Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
