<?php 
// DB credentials.
define('DB_HOST','qf5dic2wzyjf1x5x.cbetxkdyhwsb.us-east-1.rds.amazonaws.com');
define('DB_USER','q569t9v6ccpidqbe');
define('DB_PASS','oauc52jqlah13p2u');
define('DB_NAME','lm1wtcanixnoo3oz');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>
