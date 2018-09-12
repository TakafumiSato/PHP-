
// 認証ダイアログ

<?php
$user = 'admin';
$password = 'passs';

// Authorizationヘッダの有無を確認
// 初めてのアクセスの場合、ついていない
if (!isset($_SERVER['PHP_AUTH_USER'])){
    // 表示
    header('WWW-Authenticate: Basic realm="Private Page"');
    header('HTTP/1.0 401 Unauthorized');

    // キャンセルが押された
    die('このページを見るにはログインが必要です');
}else{
    // 入力が一致しているか
    if ($_SERVER['PHP_AUTH_USER'] != $user
        || $_SERVER['PHP_AUTH_PW'] != $password){

        header('WWW-Authenticate: Basic realm="Private Page"');
        header('HTTP/1.0 401 Unauthorized');

        // キャンセルが押された場合
        die('このページを見るにはログインが必要です');
    }
}

?>

// ログインするとここを表示
<html>
<head><title>PHP TEST</title></head>
<body>

<p>ようこそ、会員向けページへ</p>

</body>
</html>
