<?php
  header('Content-Type: text/html; charset=UTF-8');
  $db = new PDO("mysql:host=localhost;dbname=websec;charset=utf8", "root", "");
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $db->query("SET NAMES utf8");
  $sql = <<<EOS

DROP TABLE IF EXISTS books;
DROP TABLE IF EXISTS users;

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

INSERT INTO books VALUES (1, '夏の夜の夢','Shakespeare', 600);
INSERT INTO books VALUES (2, 'ハムレット','Shakespeare', 1260);
INSERT INTO books VALUES (3, 'マクベス','Shakespeare',  1530);
INSERT INTO books VALUES (4, 'リア王','Shakespeare',1890);

INSERT INTO users VALUES (1, 'suzuki@example.jp', 'pass');
INSERT INTO users VALUES (2, 'takana@example.com','pass123');
INSERT INTO users VALUES (3, 'sato@example.net', 'password');

EOS;

  $db->query($sql);
?>
<body>
データベースをリセットしました
</body>
