<?php
  session_start();  // セッションの開始
  $user = $_POST['user'];
  $password = $_POST['password'];
  // IDとパスワードのどちからかが空の場合はログイン失敗
  if ($user == '' || $password == '') {
    die('ログインできませんでした');
  }
  $_SESSION['user'] = $user;
?>
<html>
<head><title>会員ページ</title></head>
<body>
ログインしました
<a href="profile.php">プロフィール</a>
</body>
</html>
