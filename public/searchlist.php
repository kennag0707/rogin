<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>検索結果</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/searchlist.css">
    <div class="bg_pattern Paper_v2"></div>
</head>

<header>

    <ul>
    <li><a class="active" href="home.php">Home</a></li>
    <li><a href="post.php" >投稿</a></li>
    <li><a href="search.php">検索</a></li>
    <li><a href="login.php">ログイン</a></li>
    </ul>
</header>
    <center><h1>検索結果</h1></center>
    <div class="search">

    <input type="radio">人気順
    <input type="radio">新着順
    <form id="form5" action="searchlist.php">
    <input id="sbox5"  id="s" name="s" type="text" placeholder="キーワードを入力" />
    <input id="sbtn5" type="submit" value="検索" />
    </form>

    </div>
<table>
    <tr>
    <th>お名前</th>
    <th>特技</th>
    <th>担当カラー</th>
    <th>住所</th>
    </tr>
    <tr>
    <td class="icon bird">トリさん</td>
    <td>空を飛ぶこと</td>
    <td>グリーン</td>
    <td>山</td>
    </tr>
    <tr>
    <td class="icon whale">クジラさん</td>
    <td>潮を吹くこと</td>
    <td>ブルー</td>
    <td>海</td>
    </tr>
    <tr>
    <td class="icon crab">カニさん</td>
    <td>反復横飛び</td>
    <td>レッド</td>
    <td>川</td>
    </tr>
</table>