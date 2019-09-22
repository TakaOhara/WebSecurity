<?php // ログインしたことにする確認用のスクリプト
  session_start();
  $user = filter_input(INPUT_GET, 'user');
  if (empty($user)) $user = 'member1';
  $_SESSION['user'] = $user;
?>
<html>
<head>
  <title>ログイン後</title>
  <meta charset="UTF-8">
</head>
<body>
<p>ログインしました</p>
<p><?php echo htmlspecialchars($user, ENT_NOQUOTES, 'UTF-8'); ?></p>
<a href="click_form.php">掲示板</a>
</body>
</html>
