<?php
session_start();
$username=$_POST["username"];
$password=$_POST["password"];
$sck=$_POST["sck"];
$con=mysql_connect("localhost","root","toor");
if(!$con)
{
echo"success connection";
}
$db=mysql_select_db("project_46",$con);
if(!$db)
{
echo"success db";
}
$query="select username,password from admin where username='$username' and password='$password'";
$result=mysql_query($query);
if(mysql_num_rows($result)>0&&$sck=="1")
{
$_SESSION["username"]=$username;
header("location:adminhome.php");
}
else{
echo"<h2 style='color:red;' >You're no longer an admin</h2>";
}
?>
