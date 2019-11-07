<?php
require_once('./config/db_config.php');
header('Content-Type: text/html; charset=UTF-8');

$db = new PDO(DSN, DB_USER, DB_PASSWORD, $opt);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->query("SET NAMES utf8");
$sql = <<<EOS

DROP TABLE IF EXISTS books;
DROP TABLE IF EXISTS users;
DROP TABLE IF EXISTS members;

CREATE TABLE books (
    id INT(10),
    title VARCHAR (250),
    author VARCHAR (250),
    price INT(5)
);

CREATE TABLE users (
    id INT(10),
    email VARCHAR (50),
    password VARCHAR (70)
);

INSERT INTO books VALUES (1, 'PHP入門','鈴木太郎', 2000);
INSERT INTO books VALUES (2, 'WEBセキュリティ','佐藤花子', 3500);
INSERT INTO books VALUES (3, 'Java入門','中村次郎',  2300);
INSERT INTO books VALUES (4, 'AI概論','田中涼子',3100);

INSERT INTO users VALUES (1, 'suzuki@example.jp', 'pass');
INSERT INTO users VALUES (2, 'takana@example.com','pass123');
INSERT INTO users VALUES (3, 'sato@example.net', 'password');

CREATE TABLE members (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    email VARCHAR(255) UNIQUE,
    password VARCHAR(255),
    created DATETIME,
    modified DATETIME
);

EOS;
$db->query($sql);
?>
<body>
<p>データベースをリセットしました</p>
<p><a href="index.html">戻る</a></p>
</body>
