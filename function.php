<?php
    function check_login($con){
        //step1
        //(1)查看資料庫的Account是否有其資料
    if(isset($_SESSION['Account'])){
        //(2)
        $id=$_SESSION['Account'];
        //(3)從資料庫裡面找Account，限制輸出一行
        $query="select * from usersdata where Account ='$id' limit 1 ";
        //(4.1)搜尋資料庫(資料庫,欲搜尋項目)
        $result=mysqli_query($con,$query);
        //(4.2)每列都尋找
        if($result && mysqli_num_rows($result)>0){
            //(4.2.1)若有2組相同的只會篩選資料庫最後一筆資料
                $user_data = mysqli_fetch_assoc($result);
                return $user_data;
            }
        }
    }
    //(1.1)回到login
    // header("Location:logIn.php");
    //step2
    //例外處理
    // die;
?>