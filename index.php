<?php
$var=4;
$var3=30;
$var2="Hi, This Is Practice File.";

echo $var+$var3."<p>".$var2;


$newvar="<br> This Is THe New Lesson For Practice.";
$check=3;
if($check==5){
    echo  $newvar;
}
elseif ($check>=4){
    echo "<p>Second Result";
}
else {
    echo " <br>Third Result";
}
while($check<7) {
    echo "<br>".$check; 
    $check++;
    }
?>