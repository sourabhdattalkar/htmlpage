<?php
$host ='localhost';
$username ='root';
$password ='';
$db ="abc";
$con=mysqli_connect($host,$username,$password,$db);
if($con)
{
print("successfull");
}
else
{
print("unsuccessfull");
}

?>
