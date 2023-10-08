<!DOCTYPE html>
<html lang="en">
    
<head>
        <title>Login | Dinas Pariwisata & Kebudayaan</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="../assets/images/logo2.png" rel="icon">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/css/login.css">
</head>
<body>
    <main>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6 login-section-wrapper">
          <div>
            <a href="../front/index.php">
              <img src="../assets3/img/clients/pesona-kalisalak-logo.png" alt="logo" class="logo" width="250">
            </a>
          </div>
          <div class="login-wrapper my-auto">
            <h1 class="login-title">LOGIN DISPARBUD</h1>
            <p>Masukan Username dan Password Anda dengan Benar!</p>
            <form class="form-signin" method="POST" action="cek_login.php">
              <div class="form-group">
                <label for="text">Username</label>
                <input type="text" name="username" class="form-control" placeholder="Masukan Username Anda!">
              </div>
              <div class="form-group mb-4">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Masukan Password Anda!">
              </div>

              <br>
              <div class="checkbox mb-3">
               <label>
                <input type="checkbox" value="remember-me"> Remember me
               </label>
               </div>
                <div class="form-actions">
                    <span class="pull-right"><button type="submit" class="btn btn-block login-btn">LOGIN</button></span>
                </div>

    <p class="mt-5 mb-3 text-muted text-center">&copy;Dinas Pariwisata & Kebudayaan 2022-<?= date('Y') ?></p>
          </div>
        </div>
        <div class="col-sm-6 px-0 d-none d-sm-block">
          <img src="../back/img/pdp.jpg" alt="login image" class="login-img">
        </div>
      </div>
    </div>
  </main>
        
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</body>
</html>

