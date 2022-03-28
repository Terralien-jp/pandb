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
