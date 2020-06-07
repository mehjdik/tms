<?php 
// db cred for heroku
private $hostname = "qf5dic2wzyjf1x5x.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
private $username = "q569t9v6ccpidqbe";
private $password = "oauc52jqlah13p2u";
private $db = "lm1wtcanixnoo3oz";
// DB credentials.
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','tms');
// Establish database connection.
try
{
$conn = mysqli_connect('localhost','root', '', 'new123');
//$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>
