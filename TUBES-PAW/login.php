<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login & Register - ARAP RENT</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

<h2 class="text-center">ARAP RENT - Login / Register</h2>

<ul class="nav nav-tabs" id="tabMenu">
  <li class="nav-item">
    <a class="nav-link active" href="#login" data-bs-toggle="tab">Login</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#register" data-bs-toggle="tab">Register</a>
  </li>
</ul>

<div class="tab-content mt-4">
  <div class="tab-pane fade show active" id="login">
    <form action="proses_login.php" method="POST">
      <div class="mb-3">
        <label>Username</label>
        <input type="text" class="form-control" name="username" required>
      </div>
      <div class="mb-3">
        <label>Password</label>
        <input type="password" class="form-control" name="password" required>
      </div>
      <button type="submit" class="btn btn-primary">Login</button>
    </form>
  </div>

  <div class="tab-pane fade" id="register">
    <form action="register.php" method="POST">
      <div class="mb-3">
        <label>Email</label>
        <input type="email" class="form-control" name="email" required>
      </div>
      <div class="mb-3">
        <label>Nama</label>
        <input type="text" class="form-control" name="nama" required>
      </div>
      <div class="mb-3">
        <label>Username</label>
        <input type="text" class="form-control" name="username" required>
      </div>
      <div class="mb-3">
        <label>Password</label>
        <input type="password" class="form-control" name="password" required>
      </div>
      <button type="submit" class="btn btn-success">Register</button>
    </form>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
