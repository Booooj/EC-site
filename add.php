<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>スタッフ追加</title>
</head>
<body>
    スタッフ追加<br/>
    <br />
    <form method="post" action="staffcheck.php">
        スタッフ名を入力してください。<br />
        <input type="text" name="name"><br />
        パスワードを入力してください。<br />
        <input type="password" name="pass"><br />
        パスワードをもう一度入力してください。
        <input type="password" name="pass2"><br />
        <br />
        <input type="button" onclick="back()"value="戻る">
        <input type="submit"value="保存">
</form>
    <?php
 
   ?>

</body>
</html>
