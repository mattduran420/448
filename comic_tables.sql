DROP TABLE IF EXISTS db_note;
DROP TABLE IF EXISTS db_comment;
DROP TABLE IF EXISTS db_comic;
DROP TABLE IF EXISTS db_user;

CREATE TABLE db_user(
    user_id INTEGER NOT NULL AUTO_INCREMENT, 
    firstname VARCHAR(40), 
    lastname VARCHAR(40), 
    username VARCHAR(40), 
    user_password VARCHAR(10),
    PRIMARY KEY (user_id),
    email VARCHAR(40));

CREATE TABLE db_comic(
    comic_id INTEGER AUTO_INCREMENT NOT NULL, 
    comic_name VARCHAR(40),
    genre VARCHAR(40), 
    tag VARCHAR(40),
    upload_date DATE,
    image_payload BLOB NOT NULL,
    user_id INTEGER,
    comic_status INTEGER,
    rating_total INTEGER, 
    rating_count INTEGER,
    PRIMARY KEY (comic_id),
    foreign key(user_id) references db_user(user_id));

CREATE TABLE db_comment(
    comment_id INTEGER NOT NULL AUTO_INCREMENT, 
    user_id INTEGER,
    comic_id INTEGER,
    PRIMARY KEY (comment_id),
    foreign key(user_id) references db_user(user_id),
    foreign key(comic_id) references db_comic(comic_id),
    comment_body VARCHAR(1000), 
    timestamp TIMESTAMP);

CREATE TABLE db_note(
    note_id INTEGER NOT NULL AUTO_INCREMENT, 
    noteContent varchar(100),
    note_time DATE,
    xposition INTEGER,
    yposition INTEGER,
    user_id INTEGER,
    comic_id INTEGER,
    PRIMARY KEY (note_id),
    foreign key(user_id) references db_user(user_id), 
    foreign key(comic_id) references db_comic(comic_id));