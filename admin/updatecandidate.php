<?php
$cid=$_POST["cid"];
$cname=$_POST["candname"];
$cage=$_POST["candage"];
$cparty=$_POST["candparty"];
$con=mysql_connect("localhost","root","toor");
if(!$con)
echo"error in connection";
$db=mysql_select_db("project_46",$con);
if(!$db)
echo"db";
$updq="update candidatetable set cname='$cname',cage=$cage,cparty='$cparty' where cid=$cid ";
mysql_query($updq,$con);
?>
<html>
        <body>
                <script>
                        alert("Updated Successfully.")
                        window.location.replace("managc.php");
</script>
</body>
</html>
