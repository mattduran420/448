DROP TABLE IF EXISTS comic_users;
DROP TABLE IF EXISTS comic_comment;
DROP TABLE IF EXISTS comic;
DROP TABLE IF EXISTS comic_favorite;
DROP TABLE IF EXISTS comic_note;
DROP TABLE IF EXISTS comic_tag;

CREATE TABLE comic_users (
	user_id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT, 
	firstname VARCHAR(40), 
	lastname VARCHAR(40), 
	username VARCHAR(40), 
	password VARCHAR(10)
	email VARCHAR(40));

CREATE TABLE comic_tag (
	tag_id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT, 
	tag_name VARCHAR(40));  
	
CREATE TABLE comic(
	comic_id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT, 
	name VARCHAR(40),
	genre VARCHAR(10), 
	user_id INTEGER,  
	foreign key(user_id) references comic_users(user_id),
	tag_id INTEGER, 
	foreign key(tag_id) references comic_tag(tag_id),
	rating_total INTEGER, 
	rating_vote INTEGER);

CREATE TABLE comic_comment (
	comment_id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT, 
	user_id INTEGER,  
	foreign key(user_id) references comic_users(user_id),
	comic_id INTEGER,
	foreign key(comic_id) references comic(comic_id),
	body VARCHAR(1000), 
	timestamp TIMESTAMP;

CREATE TABLE comic_favorite(
	favorite_id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT, 
	user_id INTEGER,  
	foreign key(user_id) references comic_users(user_id),
	comic_id INTEGER, 
	foreign key(comic_id) references comic(comic_id));
	/*timestamp TIMESTAMP);*/
}

CREATE TABLE comic_note(
	note_id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT, 
	user_id INTEGER,  
	foreign key(user_id) references comic_users(user_id),
	comic_id INTEGER, 
	foreign key(comic_id) references comic(comic_id));
	/*timestamp TIMESTAMP);*/
}

