<?php
// 接続設定
$user = 'root';
$pass = '';
// データベースに接続
$dsn = 'mysql:host=localhost;dbname=formdb0';
$conn = new PDO($dsn, $user, $pass); //「$conn」は、任意のオブジェクト名
//var_dump($conn);データベース接続を確認

// UPDATE文を変数に格納
$sql = 'update formtb0 set name =:name, kana =:kana where id = :id';

// 更新する値と該当のIDは空のまま、SQL実行の準備をする
$stmt = $conn->prepare($sql);
 
// 修正する値と該当のIDが入った変数をexecuteにセットしてSQLを実行
$params = array(':name' => $_POST['name'], ':kana' => $_POST['kana'], ':id' => $_POST['id']);
 
// 削除するレコードのIDが入った変数をexecuteにセットしてSQLを実行
$stmt->execute($params);
?>

<html>

<body>
    <h1>更新完了画面</h1>
    <form>
        <?php echo $_POST['id'] ."<br>"?>
        update完了
    </form>
</body>

</html>