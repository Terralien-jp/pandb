<?php 
    $user_name="平敦盛";
 ?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="stock.css">
    <title>在庫管理</title>
</head>
<body>
    <div id="container">
        <div id="header">
            <img src="images/logo.gif">
            <div id="header-title">在庫管理システム</div>
            <div id="header_user"><? $user_name ?>様</div>
        </div>
        <div id="nav">
            <ul>
                <li>
                    メニュー選択
                </li>
                <li>
                    <a href="#">
                        在庫一覧
                    </a>
                </li>
                <li>
                    <a href="#">
                        入庫（仕入れ）
                    </a>
                </li>
                <li>
                    <a href="#">
                        出庫（消費）
                    </a>
                </li>
            </ul>
        </div>
        <div id="main">
        <div id="main_title">在庫一覧</div>
        <form action="stockList.html" method="post">
            種類の選択：<select name="type_select">
                <option value="0" selected>すべて</option>
                <option value="1">パン生地の材料</option>
                <option value="2">ドライフルーツ</option>
                <option value="3">調味料</option>
                <option value="4">和菓子の材料</option>
            </select>
            <input type="submit" value="切り替え">
        </form>
        <table width="100%">
            <tr>
                <th>
                    番号
                </th>
                <th>
                    材料
                </th>
                <th>
                    内容量
                </th>
                <th>
                    種類
                </th>
                <th>
                    個数
                </th>
                <th>
                    備考
                </th>
            </tr>
            <tr>
                <td class="num">1</td>
                <td>強力粉</td>
                <td class="num">25kg</td>
                <td>パン生地の材料</td>
                <td class="num"><? $n1 ?></td>
                <td>食パン・バターロール・ピザ向き</td>
            </tr>
            <tr>
                <td>2</td>
                <td>薄力粉</td>
                <td>25kg</td>
                <td>パン生地の材料</td>
                <td><? $n1 ?></td>
                <td>メロンパンの外生地・クッキー・マフィン</td>
            </tr>
            <tr>
                <td>3</td>
                <td>ドライイースト</td>
                <td>1kg</td>
                <td>パン生地の材料</td>
                <td><? $n1 ?></td>
                <td>予備発酵なし</td>
            </tr>
        </table>
    </div>
        <div id="footer">Copylight © All Right Reserved By JMOOC</div>
    </div>
</body>
</html>