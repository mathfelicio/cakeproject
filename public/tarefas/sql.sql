create table users (
	id int AUTO_INCREMENT PRIMARY KEY,
	email VARCHARACTER(255) not null,
	password VARCHARACTER(255) not null,
	created datetime,
	modified datetime
);

ALTER TABLE `users`
	ADD COLUMN `role` VARCHAR(20) NOT NULL AFTER `modified`;
	
create table states (
	id int not null AUTO_INCREMENT primary key,
	title VARCHARACTER(50),
	created datetime, 
	modified datetime
);

create table types (
	id int AUTO_INCREMENT primary key,
	title VARCHARACTER(50),
	created datetime, 
	modified datetime
);

create table tasks (
	id INT AUTO_INCREMENT PRIMARY KEY,
	type_id int not null,
	state_id int not null, 
	title VARCHARACTER(255),
	created datetime, 
	modified datetime,

	FOREIGN KEY type_key(type_id) references types(id),
	FOREIGN KEY state_key(state_id) references states(id)
);

create table tasks_users(
	task_id int not null,
	user_id int not null,
	primary key (task_id, user_id),

	FOREIGN KEY task_key(task_id) references tasks(id),
	FOREIGN KEY user_key(user_id) references users(id)
 )



