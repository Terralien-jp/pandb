CREATE TABLE stockUser(
    user_id INT AUTO_INCREMENT ,
    user_number VARCHAR(10) NOT NULL ,
    user_name TEXT NOT NULL ,
    user_password VARCHAR(20) NOT NULL ,
    enable TINYINT(1) NOT NULL ,

    PRIMARY KEY(user_id) ,
    UNIQUE KEY(user_number)
);

CREATE TABLE stockList(
    stock_id INT AUTO_INCREMENT ,
    stock_name TEXT NOT NULL ,
    amount VARCHAR(20) ,
    type INT NOT NULL ,
    remarkd TEXT ,

    PRIMARY KEY(stock_id)
);

CREATE TABLE stockLog(
    log_id INT AUTO_INCREMENT ,
    stock_id INT NOT NULL ,
    user_id INT NOT NULL ,
    in_out_n INT NOT NULL ,
    update_date DATETIME NOT NULL ,

    PRIMARY KEY(log_id)
);

insert into stockList (stock_name , amount , type , remarks)
values ("stock1" , "25kg" , 1 , "");

insert into stockList (stock_name , amount , type , remarks)
values ("stock2" , "25kg" , 1 , "");

insert into stockList (stock_name , amount , type , remarks)
values ("stock3" , "25kg" , 1 , "");

insert into stockLog (stock_id , user_id , in_out_n , update_date)
values (1 , 2 , 10 , "2019-04-01 10:00:00");

# レコードの変更（下記は全部変更される）
update stockList set type=2;

# レコードのデリート（下記は全部消える）
delete from stockList;

# 射影
SELECT stock_id , stock_name FROM stockList;
SELECT stock_id  as id , stock_name as name FROM stockList;

# レコードの選択
SELECT * FROM stockList WHERE stock_id = 4;
SELECT * FROM stockList WHERE stock_id <= 5;

SELECT * FROM stockUser WHERE user_number = "A11" AND user_password="111" AND enable=1;
SELECT * FROM stockUser WHERE user_number = "A11" AND user_password=“222" AND enable=1;

# 指定データの更新
UPDATE stockList SET type=2 WHERE stock_id=6;

# 指定typeの材料の取り出し
SELECT * FROM stockList WHERE type=1;
SELECT * FROM stockList WHERE type=2;

# 重複を排除した取り出し
SELECT DISTINCT type from stockList;

# 並び替え
SELECT * FROM stockList ORDER BY stock_id DESC;

# limit
SELECT * FROM stockList LIMIT 2;

# SUM
SELECT SUM(in_out_n) FROM stockLog;
SELECT SUM(in_out_n) AS sum_n FROM stockLog;

# 最新の材料の個数
SELECT stock_id , SUM(in_out_n) AS sum_n FROM stockLog GROUP BY stock_id;

# 副問い合わせ
SELECT stock_id , SUM(in_out_n) AS sum_n FROM stockLog GROUP BY stock_id
HAVING stock_id IN(SELECT DISTINCT stock_id FROM stockList);

# 最後に更新されたのは
SELECT stock_id , MAX(update_date) AS last_update FROM stockLog GROUP BY stock_id
HAVING stock_id IN(SELECT DISTINCT stock_id FROM stockList);

# 仕入れの回数は
SELECT stock_id , COUNT(*) AS in_n FROM stockLog WHERE in_out_n > 0 GROUP BY stock_id
HAVING stock_id IN(SELECT DISTINCT stock_id FROM stockList) ORDER BY in_n DESC;

#入出庫個数の集計
SELECT stockList.stock_id , stock_name , amount ,type ,  SUM(in_out_n) AS sum_n , remarks
FROM stockList INNER JOIN stockLog
ON stockLog.stock_id = stockList.stock_id  GROUP BY stock_id;

# 副問合せ
select list.stock_id , list.stock_name , list.amount , list.type , log.sum_n , remarks
from stocklist as list left join
(select stock_id , sum(in_out_n) as sum_n from stocklog group by stock_id) as log
on list.stock_id = log.stock_id
where list.type=1 order by list.stock_id ;