<html>

<body>
    <h1>削除確認画面</h1>

    <?php echo $_POST['id'] ."<br>"?>
    <?php echo $_POST['name'] ."<br>"?>
    <?php echo $_POST['kana'] ."<br>"?>

    <form method="post" action="delete_complete.php">
        <input type="submit" value="削除しますか？">
        <input type="hidden" name="id" value="<?=$_POST['id']?>">
    </form>
    <form method="post" action="list.php">
        <input type="submit" value="戻る">
    </form>
</body>

</html>