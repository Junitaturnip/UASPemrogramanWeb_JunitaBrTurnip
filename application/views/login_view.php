<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?= $title_web; ?> | Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap" rel="stylesheet">

  <!-- Custom CSS -->
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #b388eb, #f7c6ff); /* ungu ke pink */
      height: 100vh;
      margin: 0;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .login-card {
      background: rgba(255, 255, 255, 0.2);
      backdrop-filter: blur(15px);
      border: 1px solid rgba(255,255,255,0.2);
      padding: 40px 30px;
      border-radius: 20px;
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
      max-width: 400px;
      width: 100%;
    }

    .login-logo {
      text-align: center;
      margin-bottom: 25px;
      color: #fff;
    }

    .login-logo i {
      font-size: 40px;
      color: #ffffff;
      margin-bottom: 10px;
    }

    .login-logo h4 {
      font-weight: 600;
      margin: 0;
    }

    .form-label {
      color: #fff;
      font-weight: 600;
    }

    .form-control {
      border-radius: 12px;
      border: none;
      padding: 10px 15px;
    }

    .form-control:focus {
      outline: none;
      box-shadow: 0 0 0 0.2rem rgba(179, 136, 235, 0.4);
    }

    .btn-login {
      background: #6a1b9a;
      color: #fff;
      font-weight: bold;
      border-radius: 12px;
      transition: 0.3s;
    }

    .btn-login:hover {
      background: #4a148c;
    }

    @media (max-width: 500px) {
      .login-card {
        padding: 30px 20px;
      }
    }
  </style>
</head>
<body>

  <div class="login-card">
    <div class="login-logo">
      <i class="fas fa-book-open-reader"></i>
      <h4>Perpustakaan<br><strong>Buku Digital</strong></h4>
    </div>

    <form action="<?= base_url('login/auth'); ?>" method="POST">
      <div class="mb-3">
        <label for="user" class="form-label">Username</label>
        <input type="text" class="form-control" id="user" name="user" placeholder="Masukkan username" required>
      </div>

      <div class="mb-3">
        <label for="pass" class="form-label">Password</label>
        <input type="password" class="form-control" id="pass" name="pass" placeholder="Masukkan password" required>
      </div>

      <div class="d-grid mt-4">
        <button type="submit" class="btn btn-login">Login</button>
      </div>
    </form>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
