create database events;

use events;

create table event(
    eventId int(100) auto_increment primary key,
    eventName varchar(255) not null,
    eventDate date not null,
    eventInit time,
    eventEnd time,
    eventDesc varchar(255), 
    eventRes varchar(255) 
);