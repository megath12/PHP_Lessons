create table posts(
	id int(11) not null PRIMARY KEY AUTO_INCREMENT, 
    subject varchar(120) not null,
    content varchar(120) not null,
    date datetime not null
);


INSERT INTO posts (subject,content,date) VALUE ('yeep','Evasión de obstaculos de un robot móvil basado en funciones controladas de Lyapunov tipo barrera', '2010-01-31 16:34:03');


SELECT * FROM posts WHERE id <=2;

UPDATE posts
SET subject='this is a test', content='this is the content' where id='1';

DELETE FROM posts
WHERE id='3';


SELECT * FROM posts ORDER BY id ASC;
SELECT * FROM posts ORDER BY content DESC;


