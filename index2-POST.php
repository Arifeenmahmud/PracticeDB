<?php
if(isset($_POST["name"])){
$var=$_POST["name"];
}
else{
$var="Error";
}

$var3=6;
$var2="<html>
<head></head>
<body>
<h1>Show input Content</h1>
<form action='http://localhost/PracticeDB/index2-POST.php' method = 'POST'>
<input type='text' name='name'></input> <br>
<input type='submit' value='show'></input>
</form>
</body>
</html>";

echo $var2;
echo $var;
?>