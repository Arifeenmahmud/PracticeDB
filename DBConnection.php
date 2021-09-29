<?php
$conn=new mysqli("localhost","root","","persone");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
 }
   echo "Connected successfully";
   //$conn->query("INSERT INTO name set ID='08', First_nane='Jabbar',Last_name='hossin'");

?>