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
status set ("found", "lost", "claimed") not null, 
primary key (stuff_id));

create table if not exists locations(
location_id int auto_increment, 
create_date datetime not null, 
update_date datetime not null, 
name text not null,
primary key (location_id));

insert into locations (create_date, update_date, name)
values (Now(), Now(),"Byrne House"), 
       (Now(), Now(),"Our Lady Seat of Wsdom Chapel"), 
       (Now(), Now(),"Champagnat Hall"), 
       (Now(), Now(),"Cornell Boathouse"), 
       (Now(), Now(),"Donnelly Hall"), 
       (Now(), Now(),"Dyson Center"), 
       (Now(), Now(),"Fern Tor"), 
       (Now(), Now(),"Fontaine Annex"), 
       (Now(), Now(),"Fontaine Hall"), 
       (Now(), Now(),"Foy Townhouses"), 
       (Now(), Now(),"Fulton Street Townhouses"), 
       (Now(), Now(),"New Fulton Townhouses"), 
       (Now(), Now(),"Gartland Commons"), 
       (Now(), Now(),"Greystone Hall"), 
       (Now(), Now(),"Hancock Center"), 
       (Now(), Now(),"Kieran Gatehouse"), 
       (Now(), Now(),"Kirk House"), 
       (Now(), Now(),"Leo Hall"), 
       (Now(), Now(),"James A. Cannavino Library"), 
       (Now(), Now(),"Longview Park"), (Now(), Now(),"Lowell Thomas Communications Center"), 
       (Now(), Now(),"Lower Townhouses"), 
       (Now(), Now(),"Marian Hall"), 
       (Now(), Now(),"Marist Boathouse"), 
       (Now(), Now(),"James J. McCann Recreational Center"), 
       (Now(), Now(),"Midrise Hall"), 
       (Now(), Now(),"New Townhouses"), 
       (Now(), Now(),"St. Ann's Hermitage"), 
       (Now(), Now(),"St. Peter's"), 
       (Now(), Now(),"Sheahan Hall"), 
       (Now(), Now(),"Steel Plant Art Studios"), 
       (Now(), Now(),"Student Center/Rotunda"), 
       (Now(), Now(),"Tenney Stadium"), 
       (Now(), Now(),"Tennis Pavillion"), 
       (Now(), Now(),"Lower West Cedar Townhouses") 
       (Now(), Now(),"Upper West Cedar Townhouses");