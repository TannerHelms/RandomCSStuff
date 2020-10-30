First, create a DB on our local server
 (we will NOT do this on the Internet server, because that will be done
 ONCE for our entire class).


 CREATE DATABASE IF NOT EXISTS DB_alien;



mikem@mikem ~ $ mysql -u root -p
Enter password:

mysql> show databases;

mysql> DROP DATABASE DB_alien;

mysql> show databases;





CREATE TABLE IF NOT EXISTS alien_abduction (
  id INT(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  first_name VARCHAR(30) NOT NULL,
  last_name VARCHAR(30) NOT NULL,
  when_it_happened varchar(50) NOT NULL,
  how_long VARCHAR(30),
  how_many VARCHAR(30),
  alien_description VARCHAR(100) NOT NULL,
  what_they_did VARCHAR(250),
  other_abductees VARCHAR(10),
  abductee_description VARCHAR(100),
  other_info VARCHAR(250),
  email VARCHAR(50),
  report_date TIMESTAMP
);

INSERT INTO alien_abduction VALUES (
null,
'Jane',
'Doe',
'Wednesday',
'5 hours',
'8',
'Tall with big heads',
'They captured me with a tractor beam, knocked me out, later I woke up in a field',
'Yes',
'Frank, Agent K, JJ',
'They took my Nike Air Jordans! I had to walk home barefoot!',
'JD@gmail.com',
null
);

INSERT INTO alien_abduction VALUES (
null,
'Jimmy',
'John',
'Tuesday',
'10 hours',
'95',
'Tall with big heads',
'They captured me with a tractor beam, knocked me out, later I woke up in a field',
'Yes',
'Frank, Agent K, JJ',
'They took my Nike Air Jordans! I had to walk home barefoot!',
'JD@gmail.com',
null
);
