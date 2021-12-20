<?php
session_start();

require_once '../classes/UserLogic.php';
require_once '../function.php';


$err = [];

if(!$email = filter_input(INPUT_POST, 'email')){
    $err['email'] = 'メールアドレスを記入してください';
}

if(!$password = filter_input(INPUT_POST, 'password')){
    $err['password'] = 'パスワードをを記入してください';
}


if (count($err) > 0){
    //エラーがあった場合は戻す
    $_SESSION = $err;
    header('Location: login_form.php');
    return;
}

$result = UserLogic::login($email,$password);

if (!$result) {
    header('Location: login_form.php');
    return;
}
/*成功したらホーム画面に移動*/


/*ここから新規登録*/
$result = UserLogic::checkLogin();

if (!$result){
    $_SESSION['login_err'] = 'ユーザを登録してログインしてください';
    header('Location: signup_form.php');
    return;
}


$login_user = $_SESSION['login_user'];
?>

<!--ここからホーム画面 -->
<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>home</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="bg_pattern Paper_v2"></div>
    <div class="header">ホーム画面</div>
    <h1>ホーム</h1>

<div class="main">
    <ul>
    <li><a class="active" href="home.php">Home</a></li>
    <li><a href="post.php" >投稿</a></li>
    <li><a href="search.php">検索</a></li>
    <li><a href="login_form.php">ログイン</a></li>
    </ul>
</div>

<body>
    <p>ログインユーザ：<?php echo h($login_user['name'])?></p>
    <p>メールアドレス：<?php echo h($login_user['email'])?></p>
</body>

<div class="sinki">
    <li><a href="signup_form.php">アカウント作成はこちら</a></li>
</div>

<form action="logout.php" method="POST">
    <input type="submit" name="logout" value="ログアウト">
</form>

<div class="footer">
    <span>Footer領域</span>
    <a href="#">リンク</a>
</div>

</body>
</html>
