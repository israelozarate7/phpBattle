# DB Optimizations (Second session)

####Close Database Connections
- Un-setting variables and closing database connections in your code will save precious memory.
```
$connection = null;
```
####Avoid doing SQL queries within a loop
- A common mistake is placing a SQL query inside of a loop. This results in multiple round trips to the database, and significantly slower scripts. In the example below, you can change the loop to build a single SQL query and insert all of your users at once.
```
foreach ($userList as $user) {
  $query = 'INSERT INTO users (first_name,last_name) VALUES("' . $user['first_name'] . '", "' . $user['last_name'] . '")';
  mysql_query($query);
  }
```
Produces:
```
INSERT INTO users (first_name,last_name) VALUES("John", "Doe")
```
- Instead of using a loop, you can combine the data into a single database query:
```
$userData = array();
foreach ($userList as $user) {
    $userData[] = '("' . $user['first_name'] . '", "' . $user['last_name'] . '")';
 }
$query = 'INSERT INTO users (first_name,last_name) VALUES' . implode(',', $userData);
mysql_query($query);
```
Produces:
```
INSERT INTO users (first_name,last_name) VALUES("John", "Doe"),("Jane", "Doe")...
```
####Use LIMIT when you can.
```
SELECT column_name(s)
FROM table_name
WHERE condition
LIMIT number;
```