<?php

define('DSN', 'mysql:host=db;dbname=myapp;cherset=ut8mb4');
define('DB_USER', 'myappuser');
define('DB_PASS', 'myapppass');

try {
  $pdo = new PDO(
    DSN,
    DB_USER,
    DB_PASS,
    [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ]
  );
 } catch(PDOException $e) {
   echo $e->getMessage();
   exit;
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>My Todos</title>
</head>
<body>
  <h1>Todos</h1>

  <ul>
    <li>
      <input type
    </li>
  </ul>
</body>
</html>