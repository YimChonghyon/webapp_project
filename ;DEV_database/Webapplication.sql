Drop database if exists selab;
create database selab;
use selab;

SET foreign_key_checks = 0;
DROP TABLE IF EXISTS Publications_type;
DROP TABLE IF EXISTS Publications;
DROP TABLE IF EXISTS Gallery_type;
DROP TABLE IF EXISTS Gallery;
DROP TABLE IF EXISTS Notice;
DROP TABLE IF EXISTS User;
DROP TABLE IF EXISTS Course;
DROP TABLE IF EXISTS Course_history;
DROP TABLE IF EXISTS Slide_Lecture;
DROP TABLE IF EXISTS Division;
DROP TABLE IF EXISTS Course_schedule;
DROP TABLE IF EXISTS Course_notice;
DROP TABLE IF EXISTS Debate;
DROP TABLE IF EXISTS Tag;
DROP TABLE IF EXISTS Debate_Tag;
DROP TABLE IF EXISTS reply;
DROP TABLE IF EXISTS re_reply;
SET foreign_key_checks = 1;

CREATE TABLE Publications_type (
    Type Varchar(30) not null,
    CONSTRAINT PK_Publications_type PRIMARY KEY(Type)
);

CREATE TABLE Publications (
    Number INT not null auto_increment,
    Type varchar(30) not null,
    Title varchar(200) not null,
    Url varchar(255),
    CONSTRAINT PK_Publications PRIMARY KEY(Number,Type),
    CONSTRAINT FK_Publications foreign key(Type)
    REFERENCES Publications_type(Type) ON UPDATE CASCADE ON DELETE RESTRICT
);

CREATE TABLE Gallery_type (
    Type Varchar(30) not null,
    CONSTRAINT PK_Gallery_type PRIMARY KEY(Type)
);

CREATE TABLE Gallery (
    Number INT not null auto_increment,
    Type varchar(30) not null,
    Title varchar(30) not null,
    CONSTRAINT PK_Gallery PRIMARY KEY(Number,Type),
    CONSTRAINT FK_Gallery foreign key(Type)
    REFERENCES Gallery_type(Type) ON UPDATE CASCADE ON DELETE RESTRICT
);

CREATE TABLE Notice (
    Number INT not null auto_increment,
    Title varchar(60) not null,
    Name varchar(30) default 'Anonymous',
    Date timestamp default current_timestamp,
    Content TEXT,
    Open tinyint not null default 1,
    CONSTRAINT PK_Notice PRIMARY KEY(Number)
);

CREATE TABLE User_type (
    Type varchar(20) not null,
    Privilege tinyint not null,
    CONSTRAINT PK_User_type PRIMARY KEY(Type)
);

CREATE TABLE User (
    Id char(20) not null,
    Password varchar(255) not null,
    Name varchar(30) not null,
    Type varchar(20) not null,
    Email varchar(100),
    Homepage varchar(100),
    Introduce text,
    Other text,
    CONSTRAINT PK_User PRIMARY KEY(Id),
    CONSTRAINT FK_User foreign key(Type)
    REFERENCES User_type(Type) ON UPDATE CASCADE ON DELETE RESTRICT
);

CREATE TABLE Debate (
    Debate_number int not null auto_increment,
    Title Varchar(60) not null,
    Name varchar(30) default 'Anonymous',
    Date timestamp default current_timestamp,
    Content text,
    Wanted int not null default 0,
    Password int,
    CONSTRAINT PK_Debate PRIMARY KEY(Debate_number)
);

CREATE TABLE Tag (
    Type varchar(30) not null,
    CONSTRAINT PK_Tag PRIMARY KEY(Type)
);

CREATE TABLE Debate_Tag (
    Debate_number int not null,
    Type varchar(30) not null,
    CONSTRAINT PK_Debate_Tag PRIMARY KEY(Debate_number,Type),
    CONSTRAINT FK_Debate_Tag_1 foreign key(Debate_number)
    REFERENCES Debate(Debate_number) ON UPDATE CASCADE ON DELETE RESTRICT,
    CONSTRAINT FK_Debate_Tag_2 foreign key(Type)
    REFERENCES Tag(Type) ON UPDATE CASCADE
);

CREATE TABLE Reply (
    Reply_number int not null auto_increment,
    Debate_number int not null,
    Name varchar(30) default 'Anonymous',
    Date timestamp default current_timestamp,
    Content text,
    Password int,
    Likes int not null default 0,
    CONSTRAINT PK_Reply PRIMARY KEY(Reply_number,Debate_number),
    CONSTRAINT FK_Reply_1 foreign key(Debate_number)
    REFERENCES Debate(Debate_number) ON UPDATE CASCADE
);