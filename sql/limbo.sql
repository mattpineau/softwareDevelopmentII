0#Assignment 2 for Software Development II
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
username varchar(20) not null,
first_name varchar(20) not null, 
last_name varchar(40) not null, 
email varchar(60) not null, 
pass varchar(40) not null, 
reg_date datetime not null default now(), 
primary key (user_id),
unique (username, email)
);

insert into users (username, pass, first_name, last_name, email) 
values ('admin', 'gaze11e', 'Matt', 'Pineau', 'abc@def.com');

create table if not exists stuff (
stuff_id int auto_increment, 
location int not null, 
item text not null,
description text, 
create_date datetime not null default now(), 
update_date datetime not null default now(),
lost_found_date date not null,
room text, 
owner text,
finder text, 
status set ('Found', 'Lost', 'Claimed') not null, 
primary key (stuff_id),
foreign key (location) references locations(name)
);

insert into stuff (item, location_id, status, lost_found_date)
values ('Cell Phone', 3, 'Lost', '2012-03-03'),
        ('Sun Glasses', 2, 'Found', '2013-07-20'),
        ('Cell Phone', 12, 'Found', '2013-04-16'),
        ('Pants', 19, 'Lost', '2014-04-20'),
        ('Dignity', 2, 'Lost', '2011-07-30'),
        ('CWID', 1, 'Found', '2012-09-30');

create table if not exists locations (
name text not null,
create_date datetime not null default now(), 
update_date datetime not null default now(), 
primary key (name)
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