Drop database if exists selab;
create database selab;
use selab;

SET foreign_key_checks = 0;
DROP TABLE IF EXISTS `Notice`;
DROP TABLE IF EXISTS `Member`;
DROP TABLE IF EXISTS `Publications`;
DROP TABLE IF EXISTS `Course`;
DROP TABLE IF EXISTS `Course_history`;
DROP TABLE IF EXISTS `Gallery`;
DROP TABLE IF EXISTS `Client`;
DROP TABLE IF EXISTS `Debate`;
DROP TABLE IF EXISTS `Tag`;
DROP TABLE IF EXISTS `Debate_Tag`;
DROP TABLE IF EXISTS `Slide_Lecture`;
DROP TABLE IF EXISTS `Slide_Lab`;
DROP TABLE IF EXISTS `Course_notice`;
DROP TABLE IF EXISTS `Course_schedule`;
DROP TABLE IF EXISTS `Gallery_type`;
DROP TABLE IF EXISTS `Publications_type`;
DROP TABLE IF EXISTS `reply`;

CREATE TABLE `Notice` (
	`Notice_number`	INT	NOT NULL	auto_increment,
	`Title`	VARCHAR(60)	NOT NULL,
	`Name`	VARCHAR(30)	NULL	DEFAULT 'Anonymous',
	`Date`	TIMESTAMP	NULL	DEFAULT current_timestamp,
	`View`	INT	NULL	DEFAULT 0,
	`Content`	TEXT(500)	NULL,
	`open`	TINYINT	NOT NULL	DEFAULT 1,
    CONSTRAINT PK_Notice PRIMARY KEY(Notice_number)

);


CREATE TABLE `Member` (
	`Member_number`	INT	NOT NULL	auto_increment,
	`Name`	VARCHAR(30)	NOT NULL,
	`Email`	VARCHAR(60)	NULL,
	`Homepage`	VARCHAR(60)	NULL,
	`Introduce`	TEXT(500)	NULL,
	`Other`	TEXT(500)	NULL,
	`File`	VARCHAR(60)	NULL,
    CONSTRAINT PK_Member PRIMARY KEY(Member_number)
);


CREATE TABLE `Publications` (
	`Publications_number`	INT	NOT NULL	auto_increment,
	`Type`	VARCHAR(30)	NOT NULL,
	`Title`	VARCHAR(60)	NOT NULL,
	`Url`	VARCHAR(60)	NULL,
    CONSTRAINT PK_Publications PRIMARY KEY(Publications_number,type)
);


CREATE TABLE `Course` (
	`Course_number`	CHAR(10)	NOT NULL,
	`Course_name`	VARCHAR(30)	NOT NULL,
	`Graduate`	VARCHAR(30)	NOT NULL,
	`Url`	VARCHAR(60)	NULL,
	`Introduce`	TEXT(500)	NULL,
    CONSTRAINT PK_Course PRIMARY KEY(Course_number)
);


CREATE TABLE `Course_history` (
	`Date`	DATE	NOT NULL,
	`Course_number`	CHAR(10)	NOT NULL,
    CONSTRAINT PK_Course_history PRIMARY KEY(Date,`Course_number`)
);


CREATE TABLE `Gallery` (
	`Gallery_number`	INT	NOT NULL	auto_increment,
	`Type`	VARCHAR(30)	NOT NULL,
	`File`	VARCHAR(60)	NULL,
    CONSTRAINT PK_Gallery PRIMARY KEY(Gallery_number,Type)
);


CREATE TABLE `Client` (
	`Id`	INT	NOT NULL,
	`Password`	VARCHAR(30)	NOT NULL,
    CONSTRAINT PK_Client PRIMARY KEY(Id)
);


CREATE TABLE `Debate` (
	`Debate_number`	INT	NOT NULL	auto_increment,
	`Course_number`	CHAR(10)	NOT NULL,
	`Title`	VARCHAR(60)	NOT NULL,
	`Name`	VARCHAR(30)	NULL	DEFAULT 'Anonymous',
	`Date`	TIMESTAMP	NULL	DEFAULT current_timestamp,
	`Content`	TEXT(500)	NULL,
	`password`	INT	NULL,
    CONSTRAINT PK_Debate PRIMARY KEY(Debate_number,Course_number)
);

CREATE TABLE `Tag` (
	`Type`	VARCHAR(30)	NOT NULL,
    CONSTRAINT PK_Tag PRIMARY KEY(Type)
);


CREATE TABLE `Debate_Tag` (
	`Debate_number`	INT	NOT NULL,
	`Type`	VARCHAR(30)	NOT NULL,
	`Course_number`	CHAR(10)	NOT NULL,
    CONSTRAINT PK_Debate_Tag PRIMARY KEY(Debate_number,Type)
);


CREATE TABLE `Slide_Lecture` (
	`Lecture_number`	INT	NOT NULL	auto_increment,
	`Course_number`	CHAR(10)	NOT NULL,
	`Title`	VARCHAR(60)	NULL,
	`Url`	VARCHAR(60)	NULL,
    CONSTRAINT PK_Slide_Lecture PRIMARY KEY(Lecture_number,Course_number)
);


CREATE TABLE `Slide_Lab` (
	`Lab_number`	INT	NOT NULL	auto_increment,
	`Course_number`	CHAR(10)	NOT NULL,
	`Title`	VARCHAR(60)	NULL,
	`Url`	VARCHAR(60)	NULL,
    CONSTRAINT PK_Slide_Lab PRIMARY KEY(Lab_number,Course_number)
);


CREATE TABLE `Course_notice` (
	`Course_notice_number`	INT	NOT NULL	auto_increment,
	`Course_number`	CHAR(10)	NOT NULL,
	`Title`	VARCHAR(60)	NOT NULL,
	`Name`	VARCHAR(30)	NULL	DEFAULT ' Anonymous',
	`Date`	TIMESTAMP	NULL	DEFAULT current_timestamp,
	`VIew`	INT	NULL	DEFAULT 0,
	`Content`	TEXT(500)	NULL,
    CONSTRAINT PK_Course_notice PRIMARY KEY(Course_notice_number,Course_number)
);


CREATE TABLE `Course_schedule` (
	`Week`	INT	NOT NULL,
	`Course_number`	CHAR(10)	NOT NULL,
	`Content`	VARCHAR(100)	NOT NULL,
	`Date`	DATETIME	NOT NULL,
	`Title`	VARCHAR(100)	NULL,
    CONSTRAINT PK_Course_schedule PRIMARY KEY(Week,Course_number)
);


CREATE TABLE `Gallery_type` (
	`Type`	VARCHAR(30)	NOT NULL,
    CONSTRAINT PK_Gallery_type PRIMARY KEY(Type)
);


CREATE TABLE `Publications_type` (
	`Type`	VARCHAR(30)	NOT NULL,
    CONSTRAINT PK_Publications_type PRIMARY KEY(Type)
);


CREATE TABLE `reply` (
	`reply_numbr`	INT	NOT NULL	auto_increment,
	`Debate_number`	INT	NOT NULL,
	`Course_number`	CHAR(10)NOT NULL,
	`Name`	VARCHAR(30)	NULL	DEFAULT ' Anonymous',
	`Date`	TIMESTAMP	NULL	DEFAULT current_timestamp,
	`Content`	TEXT(500)	NULL,
	`password`	INT	NULL,
    CONSTRAINT PK_reply PRIMARY KEY(reply_numbr,Debate_number,Course_number)
);

ALTER TABLE `Publications` ADD CONSTRAINT `FK_Publications_type_TO_Publications_1` FOREIGN KEY (
	`Type`
)
REFERENCES `Publications_type` (
	`Type`
);

ALTER TABLE `Course_history` ADD CONSTRAINT `FK_Course_TO_Course_history_1` FOREIGN KEY (
	`Course_number`
)
REFERENCES `Course` (
	`Course_number`
);

ALTER TABLE `Gallery` ADD CONSTRAINT `FK_Gallery_type_TO_Gallery_1` FOREIGN KEY (
	`Type`
)
REFERENCES `Gallery_type` (
	`Type`
);

ALTER TABLE `Debate` ADD CONSTRAINT `FK_Course_TO_Debate_1` FOREIGN KEY (
	`Course_number`
)
REFERENCES `Course` (
	`Course_number`
);

ALTER TABLE `Debate_Tag` ADD CONSTRAINT `FK_Debate_TO_Debate_Tag_1` FOREIGN KEY (
	`Debate_number`
)
REFERENCES `Debate` (
	`Debate_number`
);

ALTER TABLE `Debate_Tag` ADD CONSTRAINT `FK_Debate_TO_Debate_Tag_2` FOREIGN KEY (
	`Course_number`
)
REFERENCES `Debate` (
	`Course_number`
);

ALTER TABLE `Debate_Tag` ADD CONSTRAINT `FK_Tag_TO_Debate_Tag_1` FOREIGN KEY (
	`Type`
)
REFERENCES `Tag` (
	`Type`
);

ALTER TABLE `Slide_Lecture` ADD CONSTRAINT `FK_Course_TO_Slide_Lecture_1` FOREIGN KEY (
	`Course_number`
)
REFERENCES `Course` (
	`Course_number`
);

ALTER TABLE `Slide_Lab` ADD CONSTRAINT `FK_Course_TO_Slide_Lab_1` FOREIGN KEY (
	`Course_number`
)
REFERENCES `Course` (
	`Course_number`
);

ALTER TABLE `Course_notice` ADD CONSTRAINT `FK_Course_TO_Course_notice_1` FOREIGN KEY (
	`Course_number`
)
REFERENCES `Course` (
	`Course_number`
);

ALTER TABLE `Course_schedule` ADD CONSTRAINT `FK_Course_TO_Course_schedule_1` FOREIGN KEY (
	`Course_number`
)
REFERENCES `Course` (
	`Course_number`
);

ALTER TABLE `reply` ADD CONSTRAINT `FK_Debate_TO_reply_1` FOREIGN KEY (
	`Debate_number`
)
REFERENCES `Debate` (
	`Debate_number`
);

ALTER TABLE `reply` ADD CONSTRAINT `FK_Debate_TO_reply_2` FOREIGN KEY (
	`Course_number`
)
REFERENCES `Debate` (
	`Course_number`
);
