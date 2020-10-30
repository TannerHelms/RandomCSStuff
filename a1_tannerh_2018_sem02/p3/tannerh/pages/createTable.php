
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Dev Create DB and Table</title>
    <link rel="stylesheet" type="text/css" href="../master.css">
<style>
h2, p{
color: white;
}
pre{
        font-size: 16px;
        color: white;
      }
      #select{
        font-size: 15px;
      }
      #atag {
          color: #32CD32;
          font-size: 20px;
      }
    </style>
  </head>

  <body>
<a id="atag" href="../index.php"><h1>Back</p></h1></a>
    <h2>MySql creating a Database:</h2>
    <p>We delete the database if it already exists, create the database, make sure it's there, and let MySql know we're going to be using
       it in future code.</p>
    <pre>
DROP DATABASE IF EXISTS DB_alien;
CREATE DATABASE DB_alien;

SHOW DATABASES;
+--------------------+
| Database           |
+--------------------+
| information_schema |
| DB_alien           |
| mysql              |
| performance_schema |
| phpmyadmin         |
| sys                |
+--------------------+

USE DB_alien;
    </pre>
    <hr>

    <h2>MySql creating a Table:</h2>
    <p>We create a table called aliens_abduction (which isn't the best name) and add fields with data types. Then we make sure it was
       created by showing it, and verify it was made correctly by describing the table. This will show the fields and associated data types.</p>
    <pre>
CREATE TABLE aliens_abudction (
	id INT(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
	first_name VARCHAR(30),
	last_name VARCHAR(30),
	when_it_happened VARCAHR(30),
	how_long VARCHAR(30),
	how_many VARCHAR(30),
	alien_description VARCHAR(100),
	what_they_did VARCHAR(250),
	other_abductees VARCHAR(10),
	abductee_description VARCHAR(100),
	other_info VARCHAR(100),
	email VARCHAR(50),
);

SHOW TABLES;
+--------------------+
| Tables_in_DB_alien |
+--------------------+
| aliens_abudction   |
+--------------------+

DESCRIBE aliens_abduction;
+----------------------+--------------+------+-----+---------+----------------+
| Field                | Type         | Null | Key | Default | Extra          |
+----------------------+--------------+------+-----+---------+----------------+
| id                   | int(11)      | NO   | PRI | NULL    | auto_increment |
| first_name           | varchar(30)  | YES  |     | NULL    |                |
| last_name            | varchar(30)  | YES  |     | NULL    |                |
| when_it_happened     | varchar(30)  | YES  |     | NULL    |                |
| how_long             | varchar(30)  | YES  |     | NULL    |                |
| how_many             | varchar(30)  | YES  |     | NULL    |                |
| alien_description    | varchar(100) | YES  |     | NULL    |                |
| what_they_did        | varchar(250) | YES  |     | NULL    |                |
| other_abductees      | varchar(10)  | YES  |     | NULL    |                |
| abductee_description | varchar(100) | YES  |     | NULL    |                |
| other_info           | varchar(100) | YES  |     | NULL    |                |
| email                | varchar(50)  | YES  |     | NULL    |                |
+----------------------+--------------+------+-----+---------+----------------+
    </pre>
    <hr>

    <h2>MySql adding values to a Table:</h2>
    <p>We insert values by using the INSERT INTO command and providing VALUES for each field in the table. Then we use the SELECT
       command to show the inserted values in the table to make sure it worked correctly.</p>
    <pre>
INSERT INTO aliens_abduction
VALUES(
	null,
	'John',
	'House',
	'Wednesday',
	'5 hours',
	'8',
	'Tall with big heads',
	'Tractor beam, knocked out, woke up in a field',
	'Yes',
	'Frank, Agent K, JJ',
	'They took my Nike Air Jordans!',
	'JH@gmail.com'
);

SELECT * FROM aliens_abduction;
</pre>
<pre id="select">
+----+------------+-----------+------------------+----------+----------+---------------------+
| id | first_name | last_name | when_it_happened | how_long | how_many | alien_description   |
+----+------------+-----------+------------------+----------+----------+---------------------+
|  1 | John       | House     | Wednesday        | 5 hours  | 8        | Tall with big heads |
+----+------------+-----------+------------------+----------+----------+---------------------+
+-----------------------------------------------+-----------------+----------------------+--------------------------------+--------------+
| what_they_did                                 | other_abductees | abductee_description | other_info                     | email        |
+-----------------------------------------------+-----------------+----------------------+--------------------------------+--------------+
| Tractor beam, knocked out, woke up in a field | Yes             | Frank, Agent K, JJ   | They took my Nike Air Jordans! | JH@gmail.com |
+-----------------------------------------------+-----------------+----------------------+--------------------------------+--------------+

    </pre>
  </body>
</html>
