-- 创建数据库
create database info charset utf8;
use info;
-- 创建留言表
create table message(id smallint primary key auto_increment,title char(20),content char(200),time char(20));
-- 创建管理员表
create table admin(id smallint primary key auto_increment,username char(20),pwd char(32));
-- 插入管理员
insert into admin values(default,'admin',md5('admin'));
