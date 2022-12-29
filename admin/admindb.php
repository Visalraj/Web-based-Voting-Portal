<?php
$uname=$_POST["uname"];
$upass=$_POST["upass"];
$con=mysql_connect("localhost","root","toor");
if(!$con)
{
echo"success";
}
$db=mysql_select_db("project_46",$con);
if(!$db)
{
echo"success";
}
if(($uname=="")||($upass==""))
{
echo"<h4 style='color:red;'>Please Enter Username and Password Correctly!!</h4>";
}
else
{
$query="insert into admin(username,password) values ('$uname','$upass')";
if(mysql_query($query,$con))
{
header("Location:signin.php");
}

else
{
echo"error in adding";
}
}
mysql_close($con);
?>
