<?php 
    $user_name="平敦盛";
    $stock_data[] = array(
        "stock_id" => 1,
        "stock_name" => "バター",
        "amount" => "450g",
        "n" => 9,
        "remarks" => "食パン・バターロール・ピザ向き"
    );
    $stock_data[] = array(
        "stock_id" => 2,
        "stock_name" => "強力粉",
        "amount" => "25kg",
        "n" => 3,
        "remarks" => "メロンパンの外生地・クッキー・マフィン"
    );
    $stock_data[] = array(
        "stock_id" => 3,
        "stock_name" => "薄力粉",
        "amount" => "15kg",
        "n" => 4,
        "remarks" => "無塩"
    );
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
            <div id="header_user"><?= $user_name ?>様</div>
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
                <td class="num"><?= $stock_data[0]["stock_id"] ?></td>
                <td><?= $stock_data[0]["stock_name"] ?></td>
                <td class="num"><?= $stock_data[0]["amount"] ?></td>
                <td>パン生地の材料</td>
                <td class="num"><?= $stock_data[0]["n"] ?></td>
                <td><?= $stock_data[0]["remarks"] ?></td>
            </tr>
            <tr>
            <td class="num"><?= $stock_data[1]["stock_id"] ?></td>
                <td><?= $stock_data[1]["stock_name"] ?></td>
                <td class="num"><?= $stock_data[1]["amount"] ?></td>
                <td>パン生地の材料</td>
                <td class="num"><?= $stock_data[1]["n"] ?></td>
                <td><?= $stock_data[1]["remarks"] ?></td>
            </tr>
            <tr>
            <td class="num"><?= $stock_data[2]["stock_id"] ?></td>
                <td><?= $stock_data[2]["stock_name"] ?></td>
                <td class="num"><?= $stock_data[2]["amount"] ?></td>
                <td>パン生地の材料</td>
                <td class="num"><?= $stock_data[2]["n"] ?></td>
                <td><?= $stock_data[2]["remarks"] ?></td>
            </tr>
        </table>
    </div>
        <div id="footer">Copylight © All Right Reserved By JMOOC</div>
    </div>
</body>
</html>