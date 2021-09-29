<?php
$conn=new mysqli("localhost","root","","persone");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
 }
   echo "Connected successfully";
   //$conn->query("INSERT INTO name set ID='08', First_nane='Jabbar',Last_name='hossin'");
   
   $data=mysqli_query($conn,"SELECT `ID`,`First_nane`,`Last_name` FROM `name`");
   echo "<center><table border=1>";
   while($row=mysqli_fetch_assoc($data)){
   echo "<tr>";
       echo "<td>".$row['ID']."</td>".
            "<td>".$row['First_nane']."</td>".
            "<td>".$row['Last_name']."</td>";
   echo "</tr>";
   }
   echo "</table></center>";
?>