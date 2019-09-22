<?php
header('X-Frame-Options: deny');
session_start();
if (empty($_SESSION['user'])) {
  header('Location: login.php');
  exit;
}
$user = @$_SESSION['user']; // ユーザuserの取り出し
if (empty($_SESSION['token'])) {
  $token = bin2hex(openssl_random_pseudo_bytes(24));
  $_SESSION['token'] = $token; 
} else {
  $token = $_SESSION['token'];
}
$msg = '';
if (!empty($_GET['msg'])) {
  $msg = $_GET['msg'];
}
?>
<html>
<head>
  <title>クリックジャッキング攻撃サンプル</title>
  <meta charset="UTF-8">
</head>
<p>掲示板フォーム(クリックジャッキング未対策)</p>
<form action="click_receive.php" method="post">
<textarea cols="40" name="msg"><?php echo htmlspecialchars($msg, ENT_QUOTES, 'UTF-8'); ?></textarea><br>
<input type="hidden" name="token" value="<?php echo　htmlspecialchars($token, ENT_QUOTES, 'UTF-8'); ?>">
<input type="submit" value="投稿">
</form>
</body>
