<!DOCTYPE html>
<!-- Coding By CodingNepal - www.codingnepalweb.com -->
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Tutoring Login Page </title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="container flex">
      <div class="facebook-page flex">
        <div class="text">
          <h1>Web Tutoring</h1>
          <p>Connect with friends and the world </p>
          <p> around you on Web Tutoring.</p>
        </div>
        <form action="admin_authenticate.php" method='POST'>
          <input type="text" id="username" name="username" placeholder="Enter username" required>
         
          <input type="password" id="password" name="password" placeholder="Password" required>
          <div class="link">
            <button type="submit" class="login">Login</button>
            <a href="#" class="forgot">Forgot password?</a>
          </div>
          <hr>
          
        </form>
      </div>
    </div>
  </body>
</html>