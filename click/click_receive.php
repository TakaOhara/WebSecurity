<?php
  session_start();
  $user = @$_SESSION['user']; 
  $msg = filter_input(INPUT_POST, 'msg');
  $token = filter_input(INPUT_POST, 'token');
  if (empty($token) || $token !== $_SESSION['token'])
    die('エラーが発生しました');
?>
<html>
<head>
	<title>クリックジャッキング　攻撃先</title>
	<meta charset="UTF-8">
</head>
<body style="background-color: #FFFFFF">
<p><?php echo htmlspecialchars($user, ENT_QUOTES, 'UTF-8'); ?>さん</p>
<p>投稿内容</p>
<p><?php echo htmlspecialchars($msg, ENT_QUOTES, 'UTF-8'); ?></p>
</body>
</html>
