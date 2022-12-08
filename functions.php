<?php
// My SQL に接続するコード
function connect_to_db()
{
    $dbn = 'mysql:dbname=gsacf_l08_06;charset=utf8mb4;port=3306;host=localhost';
    $user = 'root';
    $pwd = '';


    // returnを使う
    try {
        return new PDO($dbn, $user, $pwd);
    } catch (PDOException $e) {
    echo json_encode(["db error" => "{$e->getMessage()}"]);
    exit();
    }

}
