CREATE TABLE customers(
    customerid int unsigned not null auto_increment primary key,
    name char(50) not null,
    address char(100) not null,
    city char(30) not null
);

CREATE TABLE orders(
    orderid int unsignd not null auto_invrement primary key,
    customerid int unsigned not null,
    anount float(6, 2),
    data02 date not null
);

CREATE TABLE books(
    isbn char(13) not null primary key,
    author char(50) 
    title char(100) 
    price float(4, 2)
);

CREATE TABLE order_items(
    orderid int unsignd not null 
    isbn char(13) not null,
    quantity tinyint unsigned,
    primary key(orderid, isbn)
);

CREATE TABLE book_reviews(
    isbn char(13) not null primary key,
    review text
);
