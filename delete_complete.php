<?php
// 接続設定
$user = 'root';
$pass = '';
// データベースに接続
$dsn = 'mysql:host=localhost;dbname=formdb0';
$conn = new PDO($dsn, $user, $pass); //「$conn」は、任意のオブジェクト名
//var_dump($conn);データベース接続を確認

// DELETE文を変数に格納
$sql = "DELETE FROM formtb0 WHERE id = :id";
 
// 削除するレコードのIDは空のまま、SQL実行の準備をする
$stmt = $conn->prepare($sql);
 
// 削除するレコードのIDを配列に格納する
$params = array(':id'=>$_POST['id']);
 
// 削除するレコードのIDが入った変数をexecuteにセットしてSQLを実行
$stmt->execute($params);

?>

<html>

<body>
    <h1>削除完了画面</h1>
    <form>
        <?php echo $_POST['id'] ."<br>"?>
        Delete完了
    </form>
</body>

</html>