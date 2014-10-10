#Assignment 2 for Software Development II
#This file will: 
#                create a database- limbo_db
#                create tables- users, stuff, locations
#                populate tables- users, locations

#Version: 1.0
#Authors: Matt Pineau, Siting Wang
#Date: 8/4/14

drop database if exists limbo_db;
create database if not exists limbo_db;
use limbo_db;

create table if not exists users (
user_id int unsigned not null auto_increment, 
first_name varchar(20) not null, 
last_name varchar(40) not null, 
email varchar(60) not null unique, 
pass char(40) not null, 
reg_date datetime not null, 
primary key (user_id)
);

insert into users (first_name, pass) 
values ('admin', 'gaze11e');

create table if not exists stuff (
stuff_id int auto_increment, 
location_id int not null, 
description text not null, 
create_date datetime not null, 
update_date datetime not null,
room text, 
owner text, 
finder text, 
status set ("found", "lost", "claimed") not null, 
primary key (stuff_id)
);

create table if not exists locations (
location_id int auto_increment, 
create_date datetime not null default now(), 
update_date datetime not null default now(), 
name text not null,
primary key (location_id)
);

insert into locations (name)
values ('Byrne House'), 
       ('Our Lady Seat of Wisdom Chapel'), 
       ('Champagnat Hall'), 
       ('Cornell Boathouse'), 
       ('Donnelly Hall'), 
       ('Dyson Center'), 
       ('Fern Tor'), 
       ('Fontaine Annex'), 
       ('Fontaine Hall'), 
       ('Foy Townhouses'), 
       ('Fulton Street Townhouses'), 
       ('New Fulton Townhouses'), 
       ('Gartland Commons'), 
       ('Greystone Hall'), 
       ('Hancock Center'), 
       ('Kieran Gatehouse'), 
       ('Kirk House'), 
       ('Leo Hall'), 
       ('James A. Cannavino Library'), 
       ('Longview Park'), 
       ('Lowell Thomas Communications Center'), 
       ('Lower Townhouses'), 
       ('Marian Hall'), 
       ('Marist Boathouse'), 
       ('James J. McCann Recreational Center'), 
       ('Midrise Hall'), 
       ('New Townhouses'), 
       ('St. Ann\'s Hermitage'), 
       ('St. Peter\'s'), 
       ('Sheahan Hall'), 
       ('Steel Plant Art Studios'), 
       ('Student Center/Rotunda'), 
       ('Tenney Stadium'), 
       ('Tennis Pavillion'), 
       ('Lower West Cedar Townhouses'), 
       ('Upper West Cedar Townhouses');