<!-- 連線資料庫 -->
<?php
//step1 連接資料庫，因為mysqli_connect參數固定，故此為定義告參數數值
//(1)資料庫主機位置
$dbhost='localhost';
//(2)資料庫使用者
$dbuser='guanwei';
//(3)資料庫密碼
$dbpass='delicate0117';
//(4)資料庫名稱，非資料表
$dbname='login_db';
//step2
//(1)呼叫mysqli_connect，將其放入con變數中
$con=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
//(2)檢查是否有此資料庫
if(!mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)){
    die("failed to connect");
}
//step3 避免出現亂碼，使用UTF8
mysqli_query($con,"SET NAMES 'utf8'");
?>