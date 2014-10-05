--Assignment 2 for Software Development II--
--Version: 1.0--
--Authors: Matt Pineau, Siting Wang--
--Date: 8/4/14--

delete database if exists limbo_db;
create database if not exists limbo_db;
use limbo_db;

create table if not exists users(
user_id int unsigned not null auto_increment, 
first_name varchar(20) not null, 
last_name varchar(40) not null, 
email varchar(60) not null, 
pass char(40) not null, 
reg_date datetime not null, 
primary key (user_id), 
unique (email) );

insert into users (first_name, pass)
values ("admin", "gazelle");

create table if not exists stuff(
stuff_id int auto_increment, 
location_id int not null, 
description text not null, 
create_date datetime not null, 
update_date datetime not null,
room text, 
owner text, 
finder text, 
status set ("found", "lost", "claimed") not null), 
primary key (stuff_id);


