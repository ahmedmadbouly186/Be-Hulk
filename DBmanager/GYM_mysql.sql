Create database GYM1;


create table coach(
id int not null AUTO_INCREMENT,
Fname varchar(20) not null,
Lname varchar(20)not null,
num_trainees int default 0,
username varchar(20) ,
passward varchar(20),
phone_number varchar(20),
gender char(1) not null,
age int not null,
salary int not null,
primary key (id)
);

create table court(
id int not null AUTO_INCREMENT,
max_capacity int not null,
primary key (id)
);

create table subscription (
price int not null,
sub_type varchar(20) not null,
no_invitation int not null,
primary key (sub_type)
);
insert into subscription
values ('prime',400,5);


create table device(
id int not null AUTO_INCREMENT,
dev_name varchar(20),
purchase_date date ,
maintenence_date date,
primary key (id)
);

create table supply(
sup_type varchar(30)not null ,
sup_name varchar(30)not null ,
sup_count int ,
price int,
primary key (sup_type,sup_name)
);

create table trainee(
id int not null AUTO_INCREMENT,
Fname varchar(30)not null,
Lname varchar(30)not null,
gender char(1) not null,
age int ,
username varchar (30),
passward varchar (30),
wallet int ,
phone_number varchar (30),
coach_id int,
subscribtion_type varchar(20)   default "prime",
primary key (id),
Foreign key (coach_id) references coach(id) 
	on delete set null
	on update no action,
foreign key (subscribtion_type) references subscription(sub_type)
	on update no action
	on delete set NULL
);
ALTER TABLE trainee AUTO_INCREMENT=1001;


create table exercise(
ex_name varchar(30) not null,
pri_MUS varchar(30) not null,
duration float,
rest_time float,
device_id int not null,
primary key (ex_name),
Foreign key (device_id) references device(id) 
	on delete cascade
	on update no action
);

create table competition (
id int  not null AUTO_INCREMENT,
cmp_day date not null ,
cmp_time float not null,
prize int ,
capacity int ,
cmp_name varchar(30),
duration float,
fees float,
court_id int ,
coach_id int ,
primary key (id,cmp_day,cmp_time),

Foreign key (coach_id) references coach(id) 
	on delete set null
	on update no action,
foreign key (court_id) references court(id)
	on delete set null
	on update no action
);


create table class (
id int  not null AUTO_INCREMENT,
week_day date not null ,
class_time float not null,
class_name varchar(30),
price int ,
capacity int ,
duration float,
court_id int ,
coach_id int ,
primary key (id,week_day,class_time),

Foreign key (coach_id) references coach(id) 
	on delete set null
	on update no action,
foreign key (court_id) references court(id)
	on delete set null
	on update no action
);

create table feedback(
trainee_id int not null,
fb_date date not null,
couch_rating float ,
comment varchar(250),
device_rating float,
primary key(trainee_id,fb_date),

foreign key (trainee_id) references trainee(id)
	on delete  cascade
	on update no action
);

create table depentent(
trainee_id int not null,
Fname varchar(30) not null,
Lname varchar(30) not null,
inv_date date not null , -- day of the invitation
gender char(1)not null,
phone_number varchar(20),
primary key(trainee_id,Fname,Lname,inv_date),

foreign key (trainee_id) references trainee(id)
	on delete  cascade
	on update no action
);

create table trainee_class(
trainee_id int not null,
class_id int not null,
primary key (trainee_id,class_id),
foreign key (trainee_id) references trainee(id)
	on delete  cascade
	on update no action,

foreign key (class_id) references class(id)
	on delete  cascade
	on update no action
);

create table trainee_cmpt(
trainee_id int not null,
cmpt_id int not null,
primary key (trainee_id,cmpt_id),

foreign key (trainee_id) references trainee(id)
	on delete  cascade
	on update no action,

foreign key (cmpt_id) references competition(id)
	on delete  cascade
	on update no action
);

CREATE TABLE inbody(
trainee_id int not null,
FOREIGN KEY(trainee_id) REFERENCES trainee(id),
inbody_date date ,
PRIMARY KEY(trainee_id,inbody_date),
height float,
water_kg float,
fats_kg float,
protien_kg float,
minerals_kg float,
PBF float,
SMM float,
metablolic_rate float,
inbody_score float
);



create table trainee_supply(
trainee_id int not null,
sup_type varchar(30)not null,
sup_name varchar(30)not null,

primary key (trainee_id,sup_type,sup_name),

foreign key (sup_type) references supply(sup_type)
	on delete cascade
	on update no action,

foreign key (sup_name) references supply(sup_name)
	on delete cascade
	on update no action,

foreign key (trainee_id) references trainee(id)
	on delete cascade
	on update no action
);

create table sec_MUS(
exname varchar(30)not null,
MUS_name varchar(30) not null,
 primary key(exname,MUS_name),

 foreign key (exname) references exercise(ex_name)
	on delete cascade
	on update no action

);

create table program(
trainee_id int not null,
exname varchar(30)not null,
prog_day int not null,
way varchar(100) ,
primary key(trainee_id,exname,prog_day),

 foreign key (exname) references exercise(ex_name)
	on delete cascade
	on update no action,
foreign key (trainee_id) references trainee(id)
	on delete cascade
	on update no action

);