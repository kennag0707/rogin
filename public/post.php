<?php
session_start();

require_once '../function.php';
require_once '../classes/UserLogic.php';




$login_err = isset($_SESSION['login_err']) ? $_SESSION['login_err'] : null;
unset($_SESSION['login_err']);


?>

<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザ登録画面</title>
    <link rel="stylesheet" href="../css/post.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<header>
    <ul>
    <li><a class="active" href="mypage.php">Home</a></li>
    <li><a href="post.php" >投稿</a></li>
    <li><a href="search.php">検索</a></li>
    <li><a href="login_form.php">ログイン</a></li>
    </ul>
</header>

<body>

    <div class="bg_pattern Paper_v2"></div>

    <h1>投稿</h1>
     
    <?php if (isset($login_err)): ?>
    <p><?php echo $login_err; ?></p>
    <?php endif; ?>
<form class="contact-form" action="./registerpost.php" method="post">

    <p>お客様の情報をご記載下さい。</p>

    <div class="File">
        <input type="file" name="example" accept="image/jpeg, image/png">
    </div>

    <div class="item">
        <p>
            <label for="asobiname">タイトル:</label>
            <input type="text" name="asobiname">
        </p>
        <p>
            <label for="rule">本文:</label><br>
            <textarea rows="4" id="message" placeholder="ご意見をお寄せ下さい。" name="rule"></textarea>
        </p>
        
    </div>

    <div class="item">
        <p class="label">ジャンル選択</p>
            <div class="radio-group">

                <label for="tag"><input type="radio" name="tag" value="1">飲んだり食べたりして過ごす</label><br>
                <label for="tag"><input type="radio" name="tag" value="2">パーティーゲームのみ</label><br>
                <label for="tag"><input type="radio" name="tag" value="3">両方で過ごす</label>

            </div>

        <p class="label">人数を選択</p>
            <div class="radio-group">

            <label for="kazu"><input type="radio" name="kazu" value="1">1～5</label><br>
            <label for="kazu"><input type="radio" name="kazu" value="2">5～9</label><br>
            <label for="kazu"><input type="radio" name="kazu" value="3">10～</label>

    </div>

    <input type="hidden" name="csrf_token" value="<?php echo h(setToken()); ?>">

    <div class="item no-label">

    <input type="submit">

    </div>

</form>

</body>