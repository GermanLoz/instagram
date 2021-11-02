/*CREATE DATABASE IF NOT EXISTS insta;*/

/*USE insta;*/

CREATE TABLE users(
    id int(255) auto_increment NOT NULL,
    role varchar(20),
    name varchar(100),
    nick varchar(100),
    email varchar(255),
    password varchar(255),
    image varchar(255),
    create_at datetime,
    update_at datetime,
    remember_token varchar(255),
    CONSTRAINT pk_users PRIMARY KEY(id)
)ENGINE=InnoDb;

INSERT INTO users VALUES(null, 'user', 'German Lozickyj', 'germanlozickyj03','germanlozickyj2003@gmail.com', null, null, CURTIME(), CURTIME(), NULL );

CREATE TABLE images(
    id int(255) NOT NULL auto_increment,
    user_Id int(255), 
    image_path varchar(255),
    descripction text,
    create_at datetime,
    update_at datetime,
    CONSTRAINT pk_images PRIMARY KEY(id),
    CONSTRAINT pk_images_users FOREIGN KEY(user_id) REFERENCES users(id)
)ENGINE=InnoDb;

INSERT INTO images VALUES(null, 1 , 'text.jpg', 'descripcion de prueba prueba', CURTIME(), CURTIME() );

CREATE TABLE comments(
    id int(255) auto_increment NOT NULL,
    users_id int(255),
    image_id int(255),
    content TEXT,
    create_at datetime,
    update_at datetime,
    CONSTRAINT pk_comments PRIMARY KEY(id),
    CONSTRAINT fk_comments_users FOREIGN KEY (users_id) REFERENCES users(id),
    CONSTRAINT fk_comments_images FOREIGN KEY (image_id) REFERENCES images(id)
)ENGINE=InnoDb;

INSERT INTO comments VALUES(null, 1 , 1 ,'fachera la imagen',  CURTIME(), CURTIME() );

CREATE TABLE likes(
    id int(255) auto_increment NOT NULL,
    user_id int(255),
    image_id int(255),
    create_at datetime,
    update_at datetime,
    CONSTRAINT pk_likes PRIMARY KEY(id),
    CONSTRAINT fk_likes_users FOREIGN KEY (user_id) REFERENCES users(id),
    CONSTRAINT fk_likes_images FOREIGN KEY (image_id) REFERENCES images(id)
)ENGINE=InnoDb;


INSERT INTO comments VALUES(null, 1 , 1 , 1,  CURTIME(), CURTIME() );
