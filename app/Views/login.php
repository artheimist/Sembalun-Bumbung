
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/login/style.css">
  </head>
  <body>
    <div class="center">
      <h1>Login Admin</h1>
      <form method="post" action="<?= base_url('/login/auth') ?>">
        <div class="txt_field">
          <input type="text" name="username" required>
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="password" name="password" required>
          <span></span>
          <label>Password</label>
        </div>
        <div class="pass">Forgot Password?</div>
        <input type="submit" value="Login" name="login">
        <div class="signup_link">
         
        </div>
      </form>
    </div>
  </body>
</html>
