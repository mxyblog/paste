use yanshi;
create table paste_tab
(
	id integer primary key auto_increment,
	poster varchar(32) not null,
	syntax varchar(32) not null,
	posttime timestamp,
	content text not null
)

