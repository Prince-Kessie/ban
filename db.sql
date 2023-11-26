create table tag(
    tagId varchar(50) primary key,
    name varchar(255) not null,
    date_created date
);

create table author(
    authorId varchar(50) PRIMARY KEY,
    name varchar(255),
    biography text
);

create table blog(
    blogId varchar(50) primary key,
    authorId varchar(50),
    title varchar(255),
    img varchar(255),
    description text,
    date_created date,
    foreign key(authorId) REFERENCES author(authorId)
);

create table blog_tag(
    blogTagsId varchar(50) primary key,
    blogId varchar(50),
    tagId varchar(50),
    foreign key(blogId) REFERENCES blog(blogId),
    foreign key(tagId) REFERENCES tag(tagId)
);

create table blogImages(
    blogImagesId varchar(50) primary key,
    blogId varchar(50),
    filename varchar(50),
    foreign key(blogId) REFERENCES blog(blogId)
);

CREATE TABLE `adminuser` (
  `userId` varchar(50) primary key,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `reset_token` varchar(255) DEFAULT NULL,
  `date_created` date DEFAULT NULL
);

CREATE TABLE client_contact(
id int(11) AUTO_INCREMENT PRIMARY KEY,
fullname varchar(250),
email varchar(250),
contact varchar(250),
comment varchar(250)
);

CREATE TABLE client_signin(
id int(11) AUTO_INCREMENT PRIMARY KEY,
fullname varchar(250),
email varchar(250),
password varchar(250),
contact varchar(250),
address varchar(250)
);

CREATE TABLE client_subscribe(
id int(11) AUTO_INCREMENT PRIMARY KEY,
fullname varchar(250),
email varchar(250),
contact varchar(250),
address varchar(250)
);


--/-->http://localhost/phpmyadmin/index.php?route=/sql&pos=0&db=cdm_db&table=blog_tag