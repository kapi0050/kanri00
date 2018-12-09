<html>

<body>
    <h1>更新変更画面</h1>
    <?php

if (!empty($_POST)) {
    echo $_POST['id'] ."<br>";
    echo $_POST['name'] ."<br>";
    echo $_POST['kana'] ."<br>";
}
$name=null;
$kana=null;
?>
    <form method="post" action="update_confirm.php">
        <input type="text" name="name" value="<?=htmlspecialchars($name, ENT_QUOTES, 'UTF-8')?>">
        <input type="text" name="kana" value="<?=htmlspecialchars($kana, ENT_QUOTES, 'UTF-8')?>">
        <input type="hidden" name="id" value="<?=$_POST['id']?>">
        <input type="submit" value="変更">
    </form>
    <form method="post" action="list.php">
        <input type="submit" value="戻る">
    </form>
</body>

</html>