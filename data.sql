CREATE TABLE products(
 id int(11) primary key AUTO_INCREMENT NOT NULL,
  name varchar(255) DEFAULT NULL,
  price varchar(255) DEFAULT NULL,
  image varchar(2000) DEFAULT NULL
);

CREATE TABLE cart (
  id int(11) primary key AUTO_INCREMENT NOT NULL,
  name varchar(255) DEFAULT NULL,
  price varchar(255) DEFAULT NULL,
  image varchar(2000) DEFAULT NULL,
  quantity int(255) DEFAULT NULL
);


CREATE TABLE wishlist (
  id int(11) primary key AUTO_INCREMENT NOT NULL,
  name varchar(255) DEFAULT NULL,
  price varchar(255) DEFAULT NULL,
  image varchar(2000) DEFAULT NULL,
  quantity int(255) DEFAULT NULL
);