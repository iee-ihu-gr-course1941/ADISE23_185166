
<?php
/* Information for the connection to Uni Database */
require_once '../credentials.php';

$servername = $creds['servername'];
$username = $creds['username'];
$password = $creds['password']; 
$dbname = $creds['dbname'];

/* Database Connection */
$conn = new mysqli($servername, $username, $password, $dbname);

/* Connection Error Handling */
if ($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);
} else {
    echo "Connection was successful!";
}

?>