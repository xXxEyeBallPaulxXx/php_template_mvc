create user maik@localhost identified by 'maik';
create database website;

grant all privileges on website.* to maik@localhost;
flush privileges;

use website;


create table users (
  id int(11) unsigned not null auto_increment,
  username varchar(50) not null,
  password varchar(255) not null,
  email varchar(100) not null,
  created_at timestamp default current_timestamp,
  updated_at timestamp default current_timestamp on update current_timestamp,
  primary key (id)
) engine=innodb default charset=utf8;   

insert into users (username, password, email) values ('maik', 'password', 'maik@localhost');

create table posts (
  id int(11) unsigned not null auto_increment,
  user_id int(11) unsigned not null,
  title varchar(255) not null,
  content text not null,
  created_at timestamp default current_timestamp,
  updated_at timestamp default current_timestamp on update current_timestamp,
  primary key (id),
  foreign key (user_id) references users(id) on delete cascade
) engine=innodb default charset=utf8;   