--create tables
create table con_question
(id int not null auto_increment,
primary key(id),
questiontext text,
qtype varchar(50),
count int)

create table con_question_answer_mcq
(id int not null auto_increment,
primary key(id),
question_id int,
foreign key(question_id) references con_question(id),
option1 varchar(50),
option2 varchar(50),
option3 varchar(50),
option4 varchar(50),
answer varchar(50))

create table con_question_answer_truefalse
(id int not null auto_increment,
primary key(id),
question_id int,
foreign key(question_id) references con_question(id),
optiontrue varchar(15),
optionfalse varchar(15),
answer varchar(15))


create table con_question_answer_shortanswer
(id int not null auto_increment,
primary key(id),
question_id int,
foreign key(question_id) references con_question(id),
answer varchar(50))
)
)
