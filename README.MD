This Repository is an attempt to create a working example of an API call invocation for PoC Purposes.

Step 1:
Configured with a Tomcat, PHP and MySQL as DB.
Before downloading the project, configure tomcat and php. Additionally configure, curl, mysqli.
Also configure phpmyadmin to connect to MySQL database and for management of Database.
Create MySQL Database "Employee" and a table "emp"
SCHEMA Creation script used in the porject has been uploaded to DB_SCHEMA_SCRIPT/employee.sql. 
Run SQL script after creating the Employee Database

Step 2:
Download the project repository to a location and check for entries in following files:
1) inc/db_connect.php -> MySQL DB connection parameters

2) class/Rest.PHP -> MySQL DB connection parameters

About the Project:
emp/*.php -> Files with create.php, delete.php, read.php and update.php respectively are used to perform the CRUD operations.
class/*.php -> Rest.php file performs the DB operation to udpate records to the database.
inc/*.php -> are supporting files for the project. db_connect.php can be used to test the connectivty check to the database.

Attached a JenkinsFile for trigger through JenkinsFile.
