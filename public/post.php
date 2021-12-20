<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>投稿</title>
    <link rel="stylesheet" href="./css/post.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<header>
    <ul>
    <li><a class="active" href="home.php">Home</a></li>
    <li><a href="post.php" >投稿</a></li>
    <li><a href="search.php">検索</a></li>
    <li><a href="login.php">ログイン</a></li>
    </ul>
</header>

<body>
    <div class="bg_pattern Paper_v2"></div>
    <h1>投稿</h1>
<form class="contact-form" action="" method="post">

    <p>お客様の情報をご記載下さい。</p>
    <div class="File">
        <input type="file" name="example" accept="image/jpeg, image/png">
    </div>


    <div class="item">
        <label class="label" for="message">本文</label>
        <textarea rows="4" id="message" placeholder="ご意見をお寄せ下さい。" name="comment"></textarea>
    </div>

    <div class="item">

        <p class="label">ジャンル選択</p>
            <div class="radio-group">
                <label><input type="radio" name="source">飲んだり食べたりして過ごす</label><br>
                <label><input type="radio" name="source">パーティーゲームのみ</label><br>
                <label><input type="radio" name="source">両方で過ごす</label>
            </div>

    </div>

    <div class="item no-label">
    <input type="submit">
    </div>

</form>
</body>