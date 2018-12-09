<html>

<body>
    <h1>更新確認画面</h1>

    <?php echo $_POST['id'] ."<br>"?>
    <?php echo $_POST['name'] ."<br>"?>
    <?php echo $_POST['kana'] ."<br>"?>

    <form method="post" action="update_complete.php">
        <input type="submit" value="変更しますか？">
        <input type="hidden" name="id" value="<?=$_POST['id']?>">
        <input type="hidden" name="name" value="<?=$_POST['name']?>">
        <input type="hidden" name="kana" value="<?=$_POST['kana']?>">
    </form>
    <form method="post" action="update.php">
        <input type="submit" value="戻る">
    </form>
</body>

</html>