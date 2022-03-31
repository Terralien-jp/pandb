<?php
/************************************************************************
 テーブルstockListにデータを挿入するためのプログラムです。
 拡張子を.phpに変更して、他のソースプログラムと同じフォルダにおいた上で
 ^^^^^^^^^^^^^^^^^^^^^^
 1回だけ、ブラウザで以下を実行してください
 ^^^^^^^^
 http://localhost/フォルダ名/insertData.php
 stockListに材料データが入ります。
***********************************************************************/
include "dbConnect.php";

$sql  =
"INSERT INTO `stockList` (`stock_name`, `amount`, `type`,`remarks`) VALUES" .
"( '強力粉', '25Kg', 1,'食パン・バターロール・ピザ用')" ;

if($result = mysqli_query($conn , $sql) ){
    //echo mysqli_num_rows($result);
    echo " INSERT  OK<br>";
  }
  else {
    echo mysqli_error($conn);
  }


$sql  =
"INSERT INTO `stockList` (`stock_name`, `amount`, `type`,`remarks`) VALUES" .
"( '薄力粉', '25Kg', 1,'メロンパンの外生地・マフィン')" ;
if($result = mysqli_query($conn , $sql) ){
    //echo mysqli_num_rows($result);
    echo " INSERT  OK<br>";
  }
  else {
    echo mysqli_error($conn);
  }

$sql  =
"INSERT INTO `stockList` (`stock_name`, `amount`, `type`,`remarks`) VALUES" .
"( '米粉', '25Kg', 1,'国産')" ;
if($result = mysqli_query($conn , $sql) ){
    //echo mysqli_num_rows($result);
    echo " INSERT  OK<br>";
  }
  else {
    echo mysqli_error($conn);
  }

$sql  =
"INSERT INTO `stockList` (`stock_name`, `amount`, `type`,`remarks`) VALUES" .
"( 'ドライイースト', '1Kg', 1,'予備発酵なし')" ;
if($result = mysqli_query($conn , $sql) ){
    //echo mysqli_num_rows($result);
    echo " INSERT  OK<br>";
  }
  else {
    echo mysqli_error($conn);
  }

$sql  =
"INSERT INTO `stockList` (`stock_name`, `amount`, `type`,`remarks`) VALUES" .
"( 'バター', '450g', 1,'無塩')" ;
if($result = mysqli_query($conn , $sql) ){
    //echo mysqli_num_rows($result);
    echo " INSERT  OK<br>";
  }
  else {
    echo mysqli_error($conn);
  }

$sql  =
"INSERT INTO `stockList` (`stock_name`, `amount`, `type`,`remarks`) VALUES" .
"( 'ショートニング', '15Kg', 1,'揚げパン')" ;
if($result = mysqli_query($conn , $sql) ){
    //echo mysqli_num_rows($result);
    echo " INSERT  OK<br>";
  }
  else {
    echo mysqli_error($conn);
  }

$sql  =
"INSERT INTO `stockList` (`stock_name`, `amount`, `type`,`remarks`) VALUES" .
"(  'スキムミルク', '25Kg', 1,'高温多湿厳禁　冷暗所に保存')" ;
if($result = mysqli_query($conn , $sql) ){
    //echo mysqli_num_rows($result);
    echo " INSERT  OK<br>";
  }
  else {
    echo mysqli_error($conn);
  }


$sql  =
"INSERT INTO `stockList` (`stock_name`, `amount`, `type`,`remarks`) VALUES" .
"(  '卵', '100個', 1,'')" ;
if($result = mysqli_query($conn , $sql) ){
    //echo mysqli_num_rows($result);
    echo " INSERT  OK<br>";
  }
  else {
    echo mysqli_error($conn);
  }

$sql  =
"INSERT INTO `stockList` (`stock_name`, `amount`, `type`,`remarks`) VALUES" .
"(  '塩', '25Kg', 3,'')" ;
if($result = mysqli_query($conn , $sql) ){
    //echo mysqli_num_rows($result);
    echo " INSERT  OK<br>";
  }
  else {
    echo mysqli_error($conn);
  }


$sql  =
"INSERT INTO `stockList` (`stock_name`, `amount`, `type`,`remarks`) VALUES" .
"(  '白砂糖', '30Kg', 3,'')" ;
if($result = mysqli_query($conn , $sql) ){
    //echo mysqli_num_rows($result);
    echo " INSERT  OK<br>";
  }
  else {
    echo mysqli_error($conn);
  }

$sql  =
"INSERT INTO `stockList` (`stock_name`, `amount`, `type`,`remarks`) VALUES" .
"(  '黒砂糖', '25Kg', 3,'粉状　冷暗所に保管')" ;
if($result = mysqli_query($conn , $sql) ){
    //echo mysqli_num_rows($result);
    echo " INSERT  OK<br>";
  }
  else {
    echo mysqli_error($conn);
  }


$sql  =
"INSERT INTO `stockList` (`stock_name`, `amount`, `type`,`remarks`) VALUES" .
"( 'レーズン', '13.6Kg', 2,'カリフォルニア産　賞味期限に注意')" ;
if($result = mysqli_query($conn , $sql) ){
    //echo mysqli_num_rows($result);
    echo " INSERT  OK<br>";
  }
  else {
    echo mysqli_error($conn);
  }

$sql  =
"INSERT INTO `stockList` (`stock_name`, `amount`, `type`,`remarks`) VALUES" .
"('チェリー', '12.5Kg', 2,'赤・緑')" ;
if($result = mysqli_query($conn , $sql) ){
    //echo mysqli_num_rows($result);
    echo " INSERT  OK<br>";
  }
  else {
    echo mysqli_error($conn);
  }

$sql  =
"INSERT INTO `stockList` (`stock_name`, `amount`, `type`,`remarks`) VALUES" .
"( 'オレンジピール', '12.5Kg', 2,'砂糖・洋酒漬け　5mmカット')" ;
if($result = mysqli_query($conn , $sql) ){
    //echo mysqli_num_rows($result);
    echo " INSERT  OK<br>";
  }
  else {
    echo mysqli_error($conn);
  }

$sql  =
"INSERT INTO `stockList` (`stock_name`, `amount`, `type`,`remarks`) VALUES" .
"( 'マンゴー', '10Kg', 2,'フィリピン産')" ;
if($result = mysqli_query($conn , $sql) ){
    //echo mysqli_num_rows($result);
    echo " INSERT  OK<br>";
  }
  else {
    echo mysqli_error($conn);
  }

$sql  =
"INSERT INTO `stockList` (`stock_name`, `amount`, `type`,`remarks`) VALUES" .
"(  'ラズベリー', '10Kg', 2,'フリーズドライ')" ;
if($result = mysqli_query($conn , $sql) ){
    //echo mysqli_num_rows($result);
    echo " INSERT  OK<br>";
  }
  else {
    echo mysqli_error($conn);
  }


$sql  =
"INSERT INTO `stockList` (`stock_name`, `amount`, `type`,`remarks`) VALUES" .
"(   '寒天', '1kg', 4,'粉末タイプ')" ;
if($result = mysqli_query($conn , $sql) ){
    //echo mysqli_num_rows($result);
    echo " INSERT  OK<br>";
  }
  else {
    echo mysqli_error($conn);
  }

$sql  =
"INSERT INTO `stockList` (`stock_name`, `amount`, `type`,`remarks`) VALUES" .
"( '乾燥よもぎ', '1Kg', 4,'青森県産　固形　食パン・草餅')" ;
if($result = mysqli_query($conn , $sql) ){
    //echo mysqli_num_rows($result);
    echo " INSERT  OK<br>";
  }
  else {
    echo mysqli_error($conn);
  }


$sql  =
"INSERT INTO `stockList` (`stock_name`, `amount`, `type`,`remarks`) VALUES" .
"( '白玉粉', '1Kg', 4,'国産もち米　白玉団子・ぎゅうひ')" ;
if($result = mysqli_query($conn , $sql) ){
    //echo mysqli_num_rows($result);
    echo " INSERT  OK<br>";
  }
  else {
    echo mysqli_error($conn);
  }

$sql  =
"INSERT INTO `stockList` (`stock_name`, `amount`, `type`,`remarks`) VALUES" .
"(  '上新粉', '22kg', 4,'非加熱　団子・草餅・柏餅')" ;
if($result = mysqli_query($conn , $sql) ){
    //echo mysqli_num_rows($result);
    echo " INSERT  OK<br>";
  }
  else {
    echo mysqli_error($conn);
  }


$sql  =
"INSERT INTO `stockList` (`stock_name`, `amount`, `type`,`remarks`) VALUES" .
"( '道明寺粉', '1kg', 4,'国産もち米使用　5分の１割')" ;
if($result = mysqli_query($conn , $sql) ){
    //echo mysqli_num_rows($result);
    echo " INSERT  OK<br>";
  }
  else {
    echo mysqli_error($conn);
  }

$sql  =
"INSERT INTO `stockList` (`stock_name`, `amount`, `type`,`remarks`) VALUES" .
"( 'こしあん', '2.5Kg', 4,'北海道産小豆使用　開封要冷蔵')" ;
if($result = mysqli_query($conn , $sql) ){
    //echo mysqli_num_rows($result);
    echo " INSERT  OK<br>";
  }
  else {
    echo mysqli_error($conn);
  }

$sql  =
"INSERT INTO `stockList` (`stock_name`, `amount`, `type`,`remarks`) VALUES" .
"( 'つぶあん', '2.5Kg', 4,'北海道産小豆使用　開封要冷蔵')" ;
if($result = mysqli_query($conn , $sql) ){
    //echo mysqli_num_rows($result);
    echo " INSERT  OK<br>";
  }
  else {
    echo mysqli_error($conn);
  }

$sql  =
"INSERT INTO `stockList` (`stock_name`, `amount`, `type`,`remarks`) VALUES" .
"( '白あん', '2.5Kg', 4,'北海道産白いんげん豆使用　賞味期限注意')" ;
if($result = mysqli_query($conn , $sql) ){
    //echo mysqli_num_rows($result);
    echo " INSERT  OK<br>";
  }
  else {
    echo mysqli_error($conn);
  }

mysqli_close($conn);



echo "finished";
?>
