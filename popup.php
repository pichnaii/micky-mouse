<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Insert Data</title>
    <link rel="stylesheet" href="style/popup.css">
  </head>
  <body>
    <div class="center">
        <button id="show_login" class="show_login">Login</button>
    </div>
    <div class="popup">
        <div class="close_btn">&times;</div>
        <div class="form">
            <h2>Log in</h2>
            <div class="for_element">
                <label for="email">Email</label>
                <input type="text" id="email" placeholder="Enter email">
            </div>
            <div class="for_element">
                <label for="password">Passowrd</label>
                <input type="password" id="password" placeholder="Enter password">
            </div>
            <div class="for_element">
                <input type="checkbox" id="remember_me">
                <label for="remember_me">Remember_me</label>
            </div>
            <div class="for_element">
                <button>Sign_in</button>
            </div>
            <div class="for_element">
                <a href="#">Forgot_password</a>
            </div>
        </div>
    </div>
      <script src="js/popup.js"></script>
  </body>
</html>