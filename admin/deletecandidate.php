<?php
$c=$_POST["candid"];
$con=mysql_connect("localhost","root","toor");
if(!$con)
echo"error in connection";
$db=mysql_select_db("project_46",$con);
if(!$db)
echo"db";
$delq="delete from candidatetable where cid='$c' ";
mysql_query($delq,$con);
?>
<html>
        <body>
                <script>
                        alert("Deleted Successfully.")
                        window.location.replace("managc.php");
</script>
</body>
</html>
