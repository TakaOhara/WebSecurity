<?php
$name = @$_POST['name'];
$mail = @$_POST['mail'];
$gender = @$_POST['gender'];
?>
<html>
<head>
	<title>確認</title>
</head>
<body>
<p>氏名:<?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?></p>
<p>メールアドレス:<?php echo htmlspecialchars($mail, ENT_QUOTES, 'UTF-8'); ?></p>
<p>性別:<?php echo htmlspecialchars($gender, ENT_QUOTES, 'UTF-8'); ?></p>
<form action="post_complete.php" method="POST">
<input type="hidden" name="name" value="<?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?>">
<input type="hidden" name="mail" value="<?php echo htmlspecialchars($mail, ENT_QUOTES, 'UTF-8'); ?>">
<input type="hidden" name="gender" value="<?php echo htmlspecialchars($gender, ENT_QUOTES, 'UTF-8'); ?>">
<input type="submit" value="登録">
</form>
</body>
</html>
