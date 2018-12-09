<?php

if (filter_input(INPUT_SERVER, 'REQUEST_METHOD') == 'POST') {

// 接続設定
    $user = 'root';
    $pass = '';

    // データベースに接続
    $dsn = 'mysql:host=localhost;dbname=app1';
    $conn = new PDO($dsn, $user, $pass); //「$conn」は、任意のオブジェクト名

    //var_dump($conn);データベース接続を確認

    // SELECT文を変数に格納
    $sql = "SELECT * FROM users";
    // SQLステートメントを実行し、結果を変数に格納
    $res = $conn->query($sql);

    foreach ($res as $value) {
        if ($_POST["id"] == $value['user_loginid'] &&
              $_POST["pass"] == $value['user_password']) {
            header('location: list.php');
        }
    }
}
?>

<html>

<body>
  <h1>ログイン画面</h1>
  <form method="post" action="login.php">
    <input type="text" name="id" value="">
    <input type="text" name="pass" value="">
    <input type="submit" value="ログイン">
  </form>
</body>

</html>