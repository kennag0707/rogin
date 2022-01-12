<?php
require_once('dbc.php');
//取得したデータを表示

$dbc = new Dbc();
$blogData = $dbc->getAllBlog();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/searchlist.css">
    <title>一覧</title>
</head>
<body>
    <h2>ブログ一覧</h2>
    <p><a href="form.html">新規作成</a></p>
    <table>
        <tr>
            <th>No</th>
            <th>タイトル</th>
            <th>カテゴリ</th>
        </tr>
        <?php foreach($blogData as $colum): ?>
        <tr>
            <td><?php echo $colum['id']?></td>
            <td><?php echo $colum['title']?></td>
            <td><?php echo $dbc->setCategoryName($colum['category'])?></td>
            <td><?php echo $dbc->settimeName($colum['time'])?></td>
            <td><a href="detail.php?id=<?php echo $colum['id']?>">詳細</a></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>