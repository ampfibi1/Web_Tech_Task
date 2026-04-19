<!doctype html>
<html>
  <head>
    <title>My Website</title>
    <link rel="stylesheet" href="style.css"/>
  </head>
  <body>
    <div class="content">
      <form class="content contentForm" method="POST" action="login.php">
        <img src="user.png" alt="Logo" /> <br><br><br>
        <input type="email" name="email" placeholder="email" class="valInput"/> <br><br>
        <input type="password" name="password" placeholder="password" class="valInput"/><br><br>

        <div class="reminder">
          <div class="reminder--checkbox">
            <input type="checkbox" id="remember" class="reminder reminder--checkbox"/>
            <label for="remember">Remember me</label>
          </div>
          
          <a href="#">Forgot password?</a> <br> <br>
        </div>
        
        <button type="submit" class="content--button">Login</button>
      </form>
    </div>
  </body>
</html>
