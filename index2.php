<?php
if(isset($_GET["name"])){
$var=$_GET["name"];
}
else{
$var=4;
}

$var3=6;
$var2="<html>
<head></head>
<body>
<h1>Show input Content</h1>
<form action='http://localhost/PracticeDB/index2.php' method = 'GET'>
<input type='text' name='name'></input> <br>
<input type='submit' value='show'></input>
</form>
</body>
</html>";

echo $var2;
echo $var;
?>