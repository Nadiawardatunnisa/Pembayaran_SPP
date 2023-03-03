<!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css" media="screen" title="no title">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
      <div class="login">

          <div class="avatar">
            <i class="fa fa-user"></i>
          </div>

          <h2>Login Admin</h2>

          <div class="box-login">
          <form action="proses-login-petugas.php"method="post">
            <i class="fas fa-lock"></i>
            <input name="username" type="text" class="form-control" placeholder="Username">
          </div>

          <div class="box-login">
            <i class="fas fa-lock"></i>
            <input name="password" type="password" class="form-control" placeholder="Password">
          </div>

          <button type="submit" name="login" class="btn-login">Login</button>
         <a href="index2.php" class="a">Login Sebagai Administrator / Petugas </a>
         </form>
          </div>
      </div>
  </head>
  </html>