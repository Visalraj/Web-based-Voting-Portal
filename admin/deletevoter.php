<?php
$v=$_POST["voterid"];
$con=mysql_connect("localhost","root","toor");
if(!$con)
echo"error in connection";
$db=mysql_select_db("project_46",$con);
if(!$db)
echo"error in db";
$delq="delete from votertable where voterid='$v' ";
mysql_query($delq,$con);
?>
<html>
        <body>
                <script>
                        alert("Deleted Successfully.")
                        window.location.replace("managv.php");
</script>
</body>
</html>
