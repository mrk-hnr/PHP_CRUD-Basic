# Friend List - PHP CRUD

A painfully basic PHP CRUD project. It's a simple web project that allows users to add and remove friend(s) from their friend list. The friend being added and removed are saved/deleted from MySQL.

<hr>

### How It's Made:

- Manually created table in MySQL
- Connected PHP with MySQL via PDO method (dbh_inc.php).
  - mysql is outdated
  - mysqli has more security
  - PDO has security AND more flexible
- Adding Data

  - Created PHP that when the input box are filled, it is saved into MySQL when submit is clicked.

- Modifying Data
  - PHP syntax the same as when adding a data except the MySQL query is changed to UPDATE.
- Removing Data
  - PHP syntax the same as when adding a data except the MySQL query to reflect deleting data.

Quickstart MySQL Query:

```
CREATE TABLE friends (
    id INT(11) NOT NULL AUTO_INCREMENT,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    assoc VARCHAR(30) NOT NULL,
    friended_at DATETIME NOT NULL DEFAULT CURRENT_TIME,
    PRIMARY KEY (id)
);

```

Quickstart Table Data:

```
INSERT INTO friends (firstname, lastname, assoc) VALUES ("John", "Smith", "Colleague");
INSERT INTO friends (firstname, lastname, assoc) VALUES ("Jane", "Doe", "Classmate");
INSERT INTO friends (firstname, lastname, assoc) VALUES ("SpongeBob", "SquarePants", "Neighbor");
INSERT INTO friends (firstname, lastname, assoc) VALUES ("Patrick", "Star", "Neighbor");
INSERT INTO friends (firstname, lastname, assoc) VALUES ("Squidward", "Tentacles", "Neighbor");

```

<hr>

## Tech used:

![HTML5](https://img.shields.io/badge/-HTML5-1d1f21?style=flat&logo=HTML5&logoColor=E34F26)
![PHP](https://img.shields.io/badge/PHP-1d1f21?&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/-MySQL-1d1f21?style=flat&logo=MySQL&logoColor=white)
