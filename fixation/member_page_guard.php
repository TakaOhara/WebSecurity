<?php
include "setting.php";
session_start();
//認証データの取得
$id = filter_input(INPUT_POST, 'id');

//ログイン認証（今回は省略)

// セッションIDの変更
session_regenerate_id(true);  
$_SESSION['id'] = $id; 
?>
<body>
<p><?php echo SID; ?></p>
<p>ID:<?php echo htmlspecialchars($id, ENT_COMPAT, 'UTF-8'); ?></p>
<p>ログインしました。</p>
<p><a href="dashboard.php">個人データ</a></p>
</body>
