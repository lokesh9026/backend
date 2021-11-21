lokesh@lokesh-pc:~$ sudo /opt/lampp/lampp start
[sudo] password for lokesh: 
Starting XAMPP for Linux 8.0.11-2...
XAMPP: Starting Apache...ok.
XAMPP: Starting MySQL...ok.
XAMPP: Starting ProFTPD...ok.
lokesh@lokesh-pc:~$ /opt/lampp/bin/mysql.server: 264: kill: No such process

sudo service mysql stop
[sudo] password for lokesh: 
lokesh@lokesh-pc:~$ sudo /opt/lampp/lampp restart
Restarting XAMPP for Linux 8.0.11-2...
XAMPP: Stopping Apache...ok.
XAMPP: Stopping MySQL...not running.
XAMPP: Stopping ProFTPD...ok.
XAMPP: Starting Apache...ok.
XAMPP: Starting MySQL...ok.
XAMPP: Starting ProFTPD...ok.
lokesh@lokesh-pc:~$ sudo /opt/lampp/bin/mysql -u root -p
Enter password: 
Welcome to the MariaDB monitor.  Commands end with ; or \g.
Your MariaDB connection id is 9
Server version: 10.4.21-MariaDB Source distribution

Copyright (c) 2000, 2018, Oracle, MariaDB Corporation Ab and others.

Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.

MariaDB [(none)]> show databases;
+--------------------+
| Database           |
+--------------------+
| PDO                |
| college            |
| db1                |
| ecomm              |
| firstdatabase      |
| information_schema |
| mysql              |
| performance_schema |
| phpmyadmin         |
| project            |
| test               |
+--------------------+
11 rows in set (0.224 sec)

MariaDB [firstdatabase]> delimiter //
MariaDB [firstdatabase]> create trigger salary before insert on sunmax_company for each row if new.salary<0
    -> then set new.salary=0;
    -> end if;
    -> //
Query OK, 0 rows affected (0.127 sec)

MariaDB [firstdatabase]> delimiter ;

MariaDB [firstdatabase]> select * from sunmax_company;
+----+--------+--------+------+---------------+------------+------+-----------------+
| id | name   | salary | Exps | Dept          | commission | DOJ  | Desig           |
+----+--------+--------+------+---------------+------------+------+-----------------+
|  1 | shyam  |  15000 | 5yrs | HR            | 400        | 2003 | Trainee         |
|  2 | Aman   |  30000 | 3    | Quality       | 100        | 2000 | Junior Engineer |
|  3 | Mukesh |  50000 | 5yrs | Customer Care | 200        | 2005 | Engineer        |
|  5 | Anuj   |  50000 | 3yrs | maintenance   | 250        | 2006 | GET             |
|  6 | Anil   |  60000 | 3yrs | Quality       | 160        | 2020 | Engineer        |
|  7 | ajay   |  10000 | 6yrs | hr            | NULL       | NULL | NULL            |
+----+--------+--------+------+---------------+------------+------+-----------------+
6 rows in set (0.001 sec)

MariaDB [firstdatabase]> insert into sunmax_company values (8,"ishan",-200,"3yrs","production",500,2500,"get");
Query OK, 1 row affected (0.073 sec)



MariaDB [firstdatabase]> select * from sunmax_company;
+----+--------+--------+------+---------------+------------+------+-----------------+
| id | name   | salary | Exps | Dept          | commission | DOJ  | Desig           |
+----+--------+--------+------+---------------+------------+------+-----------------+
|  1 | shyam  |  15000 | 5yrs | HR            | 400        | 2003 | Trainee         |
|  2 | Aman   |  30000 | 3    | Quality       | 100        | 2000 | Junior Engineer |
|  3 | Mukesh |  50000 | 5yrs | Customer Care | 200        | 2005 | Engineer        |
|  5 | Anuj   |  50000 | 3yrs | maintenance   | 250        | 2006 | GET             |
|  6 | Anil   |  60000 | 3yrs | Quality       | 160        | 2020 | Engineer        |
|  7 | ajay   |  10000 | 6yrs | hr            | NULL       | NULL | NULL            |
|  8 | ishan  |      0 | 3yrs | production    | 500        | 2500 | get             |
+----+--------+--------+------+---------------+------------+------+-----------------+
7 rows in set (0.001 sec)


MariaDB [firstdatabase]> delimiter //
MariaDB [firstdatabase]> create trigger sunmax2 before update on sunmax_company for each row if new.DOJ<1997 then signal sqlstate "50002" set message_text="person should BORN AFTER 1997"; end if;//
Query OK, 0 rows affected (0.096 sec)

MariaDB [firstdatabase]> DELIMITER ;
MariaDB [firstdatabase]> update sunmax_company set DOJ=1996 where name="Aman";
ERROR 1644 (50002): person should BORN AFTER 1997
MariaDB [firstdatabase]> 



