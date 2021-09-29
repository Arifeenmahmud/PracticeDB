<?php


if(isset($_POST["lessons"])){
$var=$_POST["lessons"];
}else{
$var="Error";
}

$var3=6;
$var2="<html>
<head></head>
<body>
<h1>Show input Content</h1>

<form action='http://localhost/PracticeDB/index2-POST-lessons.php' method = 'POST'>
<b>What Lessons do You Want to Learn?</b><br>
<select name='lessons[]' size='4' multiple>
<option value='mysql'>My SQL</option>
<option value='web_dev'>Web Dev</option>
<option value='oracale'>Oracle</option>
<option value='Javascript'>JavaScript</option>
</select>
<input type='submit' value='show'></input>
</form>
</body>
</html>";

echo $var2;

foreach($var as $index){
    echo $index."<br>";
    }
?>