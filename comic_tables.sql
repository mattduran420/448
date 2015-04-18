DROP TABLE IF EXISTS db_user;
DROP TABLE IF EXISTS db_comment;
DROP TABLE IF EXISTS db_comic;
DROP TABLE IF EXISTS db_favorite;
DROP TABLE IF EXISTS db_note;
DROP TABLE IF EXISTS db_tag;
DROP TABLE IF EXISTS db_comictag;

CREATE TABLE db_user(
    user_id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT, 
    firstname VARCHAR(40), 
    lastname VARCHAR(40), 
    username VARCHAR(40), 
    password VARCHAR(10)
    email VARCHAR(40));

CREATE TABLE db_comic(
    comic_id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT, 
    name VARCHAR(40),
    genre VARCHAR(10), 
    upload_date DATE,
    img_url VARCHAR(40),
    foreign key(user_id) references db_user(user_id),
    foreign key comictag_id) references db_comictag(comictag_id), 
    foreign key(tag_id) references comic_tag(tag_id),
    rating_total INTEGER, 
    rating_count INTEGER);

CREATE TABLE db_comment(
    comment_id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT, 
    foreign key(user_id) references db_user(user_id),
    foreign key(comic_id) references db_comic(comic_id),
    body VARCHAR(1000), 
    timestamp TIMESTAMP;

CREATE TABLE db_tag(
    tag_id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT, 
    tag_name VARCHAR(40));  


CREATE TABLE db_comictag(
    comictag_id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT, 
    foreign key(tag_id) references db_tag(tag_id),
    foreign key(comic_id) refereces db_comic(comic_id));

CREATE TABLE db_note(
    note_id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT, 
    noteContent varchar(100)
    note_time DATE,
    xposition integer,
    yposition integer,
    foreign key(user_id) references comic_users(user_id), 
    foreign key(comic_id) references comic(comic_id));
