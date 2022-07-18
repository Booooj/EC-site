<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>スタッフを追加しました。</title>
</head>
<body>
    <?php 
     try
     {

        $staff_id=$_POST['id'];
        $staff_name=$_POST['name'];
        $staff_pass=$_POST['pass'];

        $staff_name = htmlspecialchars($staff_name,ENT_QUOTES,'UTF-8');
        $staff_pass = htmlspecialchars($staff_pass,ENT_QUOTES,'UTF-8');

        $dsn = 'mysql:dbname=ec;host=localhost;charset=utf8';
        $user = 'root';
        $password = "";
        $dbh = new PDO($dbh,$user,$password);
        $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        $sql = 'INSERT INTO staff(name,password) VALUES (?,?)';
        $stmt = $dbh->prepare($sql);
        $data[] = $staff_name;
        $data[] = $staff_pass;
        $stmt->execute($data);

        $dbh = null;

        print$staff_name;
        print'さんを追加しました。<br />';
     }
     catch(Exception $e)
     {
         print'サーバー側エラー発生です。';
         exit();
     }

     ?>
     <a href="staff.php">戻る</a>
</body>
</html>
