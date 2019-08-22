<?php
  session_start();  // セッションの開始
  $user = $_SESSION['user'];
  if ($user == '') {
    die('ログインしてください');
  }
?>
<html>
<head><title>プロフィール</title></head>
<body>
ユーザ:<?php echo htmlspecialchars($user, ENT_NOQUOTES, 'UTF-8'); ?>
</body>
</html>
