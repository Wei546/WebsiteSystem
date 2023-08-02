<?php
session_start();
  include("connection.php");
  include("function.php");
  //step1
  //(1)檢查伺服器要求的和客戶端提供的有無一致
  if($_SERVER['REQUEST_METHOD']=="POST"){
    $userAccount = $_POST['userAccount'];
    $userPassword = $_POST['userPassword'];
    //(2)檢查是否沒有值
    if(!empty($userAccount)&&!empty($userPassword)){
      //(3)動態新增資料庫的內容
      $query="insert into usersdata (Account,Password) values ('$userAccount','$userPassword')";
      //(4)搜尋是否有新增
      //(5)回到log in page
      mysqli_query($con,$query);
      header("Location:logIn.php");
      die;
    }
    //step2
    else{
      echo "error";
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./logInStyle.css" />
    <script
      src="https://kit.fontawesome.com/3033a8eae9.js"
      crossorigin="anonymous"
    ></script>
    <title>Document</title>
  </head>
  
  <body>
    <div class="container">
      <div class="form-box">
        <h1>Sign up</h1>
        <form method="post">
          <div class="input-group">
            <div class="input-field">
              <i class="fa-solid fa-user"></i>
              <input type="text" placeholder="Account" name="userAccount"/>
            </div>
            <div class="input-field">
              <i class="fa-solid fa-lock"></i>
              <input type="password" placeholder="Password" name="userPassword"/>
            </div>
          </div>
          <div class="btn-field">
            <button>Sign up</button>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
