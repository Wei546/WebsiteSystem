<?php
  session_start();
  include("connection.php");
  include("function.php");
  $user_data=check_login($con);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./style.css" />
    <title>Document</title>
  </head>
  <body>
    <header>
      <h1 class="logo">台蠓場地租用</h1>
      <nav>
        <ul class="info">
          <li><a href="">常見問題</a></li>
          <li><a href="">關於</a></li>
          <li><a href="">最新公告</a></li>
        </ul>
      </nav>
      <a href="./logIn.php" class="logIn"><button>登入</button></a>
    </header>
  </body>
</html>
