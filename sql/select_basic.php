<?php
require_once('../config/db_config.php');
header('Content-Type: text/html; charset=UTF-8');

//パラメータの値を取得
if(isset($_GET['author'])){
    $author = $_GET['author'];
}else{
    $author = "";
}

try{
    $data = array();
    $db = new PDO(DSN, DB_USER, DB_PASSWORD);
    $db->query("Set names utf8");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM books WHERE author ='$author' ORDER BY id";
    $ps = $db->query($sql);
    while($row = $ps->fetch(PDO::FETCH_ASSOC)){
        $data[] = $row;
    }
} catch (PDOException $e) {
    echo "Error : " . $e->getMessage() . "\n";
}
?>
<html>
<body>
<table border=1>
<tr>
<th>蔵書ID</th>
<th>タイトル</th>
<th>著者名</th>
<th>価格</th>
</tr>
<?php foreach($data as $row): ?>
<tr>
<td><?php echo $row['id'];?></td>
<td><?php echo $row['title'];?></td>
<td><?php echo $row['author'];?></td>
<td><?php echo $row['price'];?></td>
</tr>
<?php endforeach; ?>
</table>
</body>
</html>
