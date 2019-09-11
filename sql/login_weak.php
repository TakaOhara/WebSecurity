<?php

require_once('../config/db_config.php');
session_start();
header('Content-Type: text/html; charset=UTF-8');
$email = @$_POST['email'];  
$password = @$_POST['password']; 

// データベースに接続
$db = new PDO(DSN, DB_USER, DB_PASSWORD);

  // SQLの組み立て
$sql = "SELECT * FROM users WHERE email ='$email' AND password = '$password'";
$ps = $db->query($sql); 
?>
<html>
<body>
<?php
  if ($ps->rowCount() > 0) { 
    $_SESSION['email'] = $email;
    echo 'ログイン成功です';
  } else {
    echo 'ログイン失敗です';
  }
  // pg_close($con);
?>
</body>
</html>
