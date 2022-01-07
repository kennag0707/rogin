<?php
session_start();
require_once '../classes/UserLogic.php';
$result = UserLogic::checkLogin();
$err = [];


if (!$result){
    $_SESSION['login_err'] = 'ユーザを登録してログインしてください';
    header('Location: signup_form.php');
    return;
}
$token = filter_input(INPUT_POST,'csrf_token');
if (!isset($_SESSION['csrf_token']) || $token !== $_SESSION['csrf_token']) {
    exit('不正なリクエスト');
}

unset($_SESSION['csrf_token']);


if(!$asobiname = filter_input(INPUT_POST, 'asobiname')){
    $err[] = 'タイトルを記入してください';
}

if(!$rule = filter_input(INPUT_POST, 'rule')){
    $err[] = '本文に内容を記入してください';
}

if(!$tag = filter_input(INPUT_POST, 'tag')){
    $err[] = 'ジャンルを選択してください';
}

if(!$kazu = filter_input(INPUT_POST, 'kazu')){
    $err[] = '人数を選択してください';
}


if (count($err) === 0){
    //内容を投稿する処理
    $hasCreated = UserLogic::createpost($_POST);

    if (!$hasCreated) {
        $err = '登録に失敗しました';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>投稿登録完了画面</title>
</head>
<body>
<?php if(count($err) > 0) :?>
<?php foreach($err as $e) :?>
    <p><?php echo $e?></p>
    <?php endforeach ?>
<?php else:?>
    <p>投稿登録が完了しました</p>
<?php endif ?>
    <a href="./mypage.php">戻る</a>
</body>
</html>