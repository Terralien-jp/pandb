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