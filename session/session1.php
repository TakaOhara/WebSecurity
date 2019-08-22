<?php
  session_start();  // セッションの開始
?>
<html>
<head><title>ログインフォーム</title></head>
<body>
<form action="session2.php" method="POST">
ユーザ名<input type="text" name="user"><BR>
パスワード<input type="password" name="password"><BR>
<input type="submit" value="ログイン">
</form>
</body>
</html>
