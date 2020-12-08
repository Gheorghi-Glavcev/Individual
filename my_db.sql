create database my_db;
use my_db;
create table teacher(
    id int not null AUTO_INCREMENT primary key,
    name nvarchar(255) not null,
    lesson nvarchar(255) not null
);
create table student(
    id int not null AUTO_INCREMENT primary key,
    name nvarchar(255) not null,
    average int null,
    teacher_id int null
);