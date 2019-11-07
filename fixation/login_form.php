<?php
include "setting.php";
session_start();
?>
<html>
<body>
<p><?php echo SID; ?></p>
<form action="member_page.php" method="POST">
ユーザID:<input name="id" type="text"><br>
<input type="submit" value="ログイン">
</form>
</body>
</html>
