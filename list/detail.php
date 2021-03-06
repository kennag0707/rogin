<?php

require_once('dbc.php');

$dbc = new Dbc();
$result = $dbc->getBlog($_GET['id']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>詳細</title>
</head>
<body>
    <h2>ブログ詳細</h2>
    <h3>タイトル：<?php echo $result['title']?></h3>
    <p>投稿日時：<?php echo $result['post_at']?></p>
    <p>カテゴリ：<?php echo $dbc->setCategoryName($result['category'])?></p>
    <p>時間：<?php echo $dbc->settimeName($result['time'])?></p>
    <hr>
    <p>本文：<?php echo $result['content']?></p>
</body>
</html>