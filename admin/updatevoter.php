<?php
$vid=$_POST["vid"];
$vname=$_POST["votername"];
$vage=$_POST["voterage"];
$vaad=$_POST["voteraad"];
$vmob=$_POST["votermob"];
$vward=$_POST["voterward"];
$vbooth=$_POST["voterbooth"];
$con=mysql_connect("localhost","root","toor");
if(!$con)
echo"error in connection";
$db=mysql_select_db("project_46",$con);
if(!$db)
echo"error in db";
$updq="update votertable set votername='$vname',voterage=$vage,voteraadhar='$vaad',votermobile='$vmob',
voterward='$vward',voterbooth='$vbooth' where voterid=$vid ";
mysql_query($updq,$con);
?>
<html>
        <body>
                <script>
                        alert("Updated Successfully.")
                        window.location.replace("managv.php");
</script>
</body>
</html>
