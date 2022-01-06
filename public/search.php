<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>検索</title>
    <link rel="stylesheet" href="../css/search.css">
    <link rel="stylesheet" href="../css/style.css">
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
    <h1>検索</h1>
    <div class="ninzu"> 
        <p>遊ぶ人数を指定してください</p>
        <form>
        <select size="3" name="ryouri">
        <option value="syouninzu">1～4</option>
        <option value="tyuninzu">5～7</option>
        <option value="ouninzu">8～</option>
        </select>
    </div>

    <div class="ninzu">
        <p>すでに遊ぶ内容が決まっている場合</p>
        <input type="text"value="" placeholder="遊びを入力" >
        </form>
    </div>

<div class="nomionly">
    <input type="radio">飲んだり食べたりして過ごす
    <input type="radio">パーティーゲームのみ
    <input type="radio">食べながらゲーム
</div>
<div class = "btn">
<a href="searchlist.html" class="btn btn--orange">search</a>
</div>

</body>