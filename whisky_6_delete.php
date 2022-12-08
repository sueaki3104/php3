<?php
// データ受け取り
// var_dump($_GET);
// exit();

// 持ってくるカラムを指定
$id = $_GET['id'];



// DB接続
include('functions.php');
$pdo = connect_to_db();


// SQL実行
// WHEREしないと全部消える
$sql = 'DELETE FROM whisky_table WHERE id=:id';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_STR);

try {
  $status = $stmt->execute();
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}

header("Location:whisky_3_read.php");
exit();