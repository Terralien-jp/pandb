<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="styleseet" type="text/css" href="user.css">
    <title>新規登録</title>
</head>
<body>
    <div id="container">
        <img src="images/large_logo.gif">
        <h2>在庫管理システム　社員登録</h2>
        <form action="userCheck.php" method="post">
            <table>
            <tr>
                <th>社員番号</th>
                <td><?= $_POST["user_number"] ?></td>
            </tr>
            <tr>
                <th>氏名</th>
                <td><?= $_POST["user_name"] ?></td>
            </tr>
            <tr>
                <th>パスワード</th>
                <td><?= $_POST["user_password"] ?></td>
            </tr>
            <tr>
                <th>パスワード確認</th>
                <td><?= $_POST["user_password2"] ?></td>
            </tr>
            <tr>
                <th colspan="2"><input type="submit" value="新規登録"></th>
            </tr>
            </table>
        </form>
        <a href="index.html">ログインに戻る</a>
    </div>
</body>
</html>