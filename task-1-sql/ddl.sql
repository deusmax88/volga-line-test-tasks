
create table test.users
(
	id int auto_increment
		primary key,
	name varchar(255) null,
	gender int not null comment '0 - не указан, 1 - мужчина, 2 -
  женщина.',
	birth_date int not null comment 'Дата в unixtime.'
)
;

create table test.phone_numbers
(
	id int auto_increment
		primary key,
	user_id int not null,
	phone varchar(255) null
)
;