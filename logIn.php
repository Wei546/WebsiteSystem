  <?php
  session_start();
    include("connection.php");
    include("function.php");
    
    //step1
    //(1)檢查伺服器要求的和客戶端提供的有無一致
    if($_SERVER['REQUEST_METHOD']=="POST"){
      $account=$_POST['userAccount'];
      $password=$_POST['userPassword'];
      $query="select * from usersdata where Account='$account' limit 1";
      $result=mysqli_query($con,$query);
      if($result){
        //(2)檢查是否沒有值
        if($result && mysqli_num_rows($result) > 0){
        //(3)暫存到user_data
        $user_data=mysqli_fetch_assoc($result);
        //===代表完全符合，變數與資料庫的password比對
        if($user_data['Password']=== $password){
          header("Location:index.php");
          die;
          }
        else{
          echo "wrong";
          die;
        }
        return $user_data;
        }       
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
          <h1>Log in</h1>
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
              <p>Lost password <a href="">Click here</a></p>
              <a href="./signUp.php" class="signUp" style="text-decoration:none; color:bisque;margin:30px">Sign up</a>
            </div>
            <div class="btn-field">
              <button>log in</button>
            </div>
          </form>
        </div>
      </div>
    
    </body>
  </html>
