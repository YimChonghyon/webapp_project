#sample notice
insert into notice(Title,Name,Content) values
("연구원 모집","Scott Uk-Jin Lee","SELab에서는 소프트웨어공학 전 분야, 멀티쓰레드 소프트웨어 및 웹 기술을 함께 연구할 석사, 박사, 석박통합 및 박사후 과정의 연구원을 모집하고 있습니다.

현재 SELab에서는 미래창조과학부 주체 NIPA주관의 대규모 프로젝트에 활발히 참여하고 있으며 이를 통하여 연구원들의 연구가 원활히 진행될 수 있도록 프로젝트 인건비를 지원하고 있습니다. 이 밖에도 연구조교, 교육조교 장학금 외 다양한 장학금을 지원하고 있으며 입학시 쾌적한 연구공간과 연구 장비 (PC/iMac 등) 지원도 하고 있습니다.

SELab 연구 분야에 관심이 있으신 분은 아래로 연락주세요!

한양대학교 ERICA 제 3공학관 403호, 421호
scottlee@hanyang.ac.kr
031-400-5238 / 031-400-4754"),
("2014 PL-SE First Joint Workshop","Scott Uk-Jin Lee","내용 몰라유"),
("Welcome to SELab Homepage!","Scott Uk-Jin Lee","비공개라 몰라유"),
("임시계정","UROPA_ISO","ISO,vector,scalar");

#sample courese
insert into course values
("CSE326","Web Application Development","Undergraduate Courses","hello world!"),
("CSE6050","Advanced Software Engineering","Postgraduate Courses","hell world!");

#sample user_type
insert into user_type values ("Professor");
insert into user_type values ("Ph.D.");
insert into user_type values ("M.E.");
insert into user_type values ("Intern");
insert into user_type values ("Alumni");

#sample user
insert into user(Id,Password,Name,Type) values
('ISO','$2y$10$Jv0KYrfZWH0ILao4PLjWk.6z4Pn1xYdadJ/pxKfewNkBJ.2gz6JQ2','masteraccount','Professor'),
('vector','$2y$10$efi.igR3EozpWvL58WWwAOnbSfFo1xmF3Z.XTRkRn1kxIQ47yifXy','superaccount','Ph.D.'),
('scalar','$2y$10$xKhViHgtT.ECbiwd1mizO.1r13txETV3e8g8pAITbG9tJJ3gI6Ok6','Gil Dong Hong','Ph.D.');

#sample publications_type
insert into publications_type values
('all'),
('International Conference'),
('International Journal'),
('Domestic Conference'),
('Domestic Journal');

#sample gallery_type
insert into gallery_type values
('all'),
('Social Activity'),
('Conference'),
('Etc');

#sample Tag
insert into tag values
('Question'),
('Debate'),
('HTML'),
('CSS'),
('JavaScript'),
('SQL'),
('Solved'),
('HELP'),
('HOT'),
('NEW');