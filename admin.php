<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Admin Login</title>
    <!-- BoxIcons v2.1.2 -->
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet">

    <!-- Varela Round -->
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles1.css" />
  </head>

  <body>
    <div class="login-box">
      <h2>Login to your account</h2>
      <form action="php/checklogin.php" method="POST">
      <div class="form-group">  
      <label for="email">
          Email
        </label>
        <i class="bx bxs-user"></i>
          <input type="email" id="email" placeholder="email" name="email" required />
        </div>
        
        <div class="form-group">
        <label for="password">
          Password
        </label>
        <i class="bx bxs-lock"></i>
          <input
            type="password"
            id="password"
            placeholder="password"
            name="password"
            required
          />
        </div>
       
        <div class="submit-form">
          <input type="submit" id="login" name="login" value="Login" />
        </div>
      </form>
    </div>
  </body>
</html>
