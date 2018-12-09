<html>

<body>
  <h1>お問い合わせ一覧</h1>

  <?php
// 接続設定
$user = 'root';
$pass = '';
// データベースに接続
$dsn = 'mysql:host=localhost;dbname=formdb0';
$conn = new PDO($dsn, $user, $pass); //「$conn」は、任意のオブジェクト名
//var_dump($conn);データベース接続を確認

if (isset($_POST["Search"])) {
    $sql = "SELECT * FROM formtb0 WHERE name = '".$_POST['Search']."' OR kana = '".$_POST['Search']."' ";//SQL文に変数を代入するときはこの書き方
} else {
    $sql = "SELECT * FROM formtb0";
}

// SQLステートメントを実行し、結果を変数に格納
$res = $conn->query($sql);
?>

  <form action="list.php" method="post">
    <input type="text" name="Search" value="">
    <input type="submit" value="検索">
  </form>

  <table border="1">
    <?php     foreach ($res as $value) {
    ; ?>
    <tr>
      <td><?php echo $value['id']; ?>
      </td>
      <td><?php echo $value['name']; ?>
      </td>
      <td><?php echo $value['kana']; ?>
      </td>
      <form action="update.php" method="post">
        <td><input type="submit" value="更新"></td>
        <input type="hidden" name="id" value="<?=$value['id']?>">
        <input type="hidden" name="name" value="<?=$value['name']?>">
        <input type="hidden" name="kana" value="<?=$value['kana']?>">
      </form>
      <form action="delete_confirm.php" method="post">
        <td><input type="submit" value="削除"></td>
        <input type="hidden" name="id" value="<?=$value['id']?>">
        <input type="hidden" name="name" value="<?=$value['name']?>">
        <input type="hidden" name="kana" value="<?=$value['kana']?>">
      </form>
    </tr>
    <?php
}?>

  </table>
</body>

</html>