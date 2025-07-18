/*create database admin login*/
/*feedbacks table*/
create table feedbacks(id int unsigned auto_increment primary key,
name varchar(45),
email varchar(34),
message varchar(78));

/*login table*/
create table login(username varchar(23),password varchar(23));

/*orders table*/
create table orders(name varchar(45),
phoneno int(34),
email varchar(67),
address varchar(78),
pin int(67),
payment varchar(74),
total int(78));

/*products table*/
create table products(pid int unsigned auto_increment primary key,
pname varchar(45),
pdesc varchar(500),     
price int(34),
quantity int(67),
pimage varchar(78));
