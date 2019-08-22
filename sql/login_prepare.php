<?php
  session_start();
  header('Content-Type: text/html; charset=UTF-8');
  $email = @$_POST['email'];  
  $password = @$_POST['password']; 

  // データベースに接続
  $opt = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                 PDO::MYSQL_ATTR_MULTI_STATEMENTS => false,
                 PDO::ATTR_EMULATE_PREPARES => false);
  $db = new PDO("mysql:host=localhost;dbname=websec;charset=utf8", "root", "", $opt);

  // SQLの組み立て
  $sql = "SELECT * FROM users WHERE email = ? AND password = ?";
  $ps = $db->prepare($sql);
  $ps->bindValue(1, $email, PDO::PARAM_STR);
  $ps->bindValue(2, $password, PDO::PARAM_STR);
  $ps->execute();

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

