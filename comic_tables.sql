DROP TABLE IF EXISTS db_note;
DROP TABLE IF EXISTS db_comment;
DROP TABLE IF EXISTS db_comic;
DROP TABLE IF EXISTS db_user;

CREATE TABLE db_user(
    user_id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT, 
    firstname VARCHAR(40), 
    lastname VARCHAR(40), 
    username VARCHAR(40), 
    user_password VARCHAR(10),
    email VARCHAR(40));

CREATE TABLE db_comic(
    comic_id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT, 
    comic_name VARCHAR(40),
    genre VARCHAR(10), 
    tag VARCHAR(40),
    upload_date DATE,
    image_payload blob not null,
    user_id INTEGER,
    foreign key(user_id) references db_user(user_id),
    rating_total INTEGER, 
    rating_count INTEGER);

CREATE TABLE db_comment(
    comment_id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT, 
    user_id INTEGER,
    comic_id INTEGER,
    foreign key(user_id) references db_user(user_id),
    foreign key(comic_id) references db_comic(comic_id),
    comment_body VARCHAR(1000), 
    timestamp TIMESTAMP);

CREATE TABLE db_note(
    note_id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT, 
    noteContent varchar(100),
    note_time DATE,
    xposition INTEGER,
    yposition INTEGER,
    user_id INTEGER,
    comic_id INTEGER,
    foreign key(user_id) references db_user(user_id), 
    foreign key(comic_id) references db_comic(comic_id));