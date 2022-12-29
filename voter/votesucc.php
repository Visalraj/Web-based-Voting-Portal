<html>
        <head>
                <title>Vote Success!!</title>
        </head>
        <body>
                
                        <?php
                        session_start();
                        $a=$_POST["buttonvalue"];
                        $b=$_SESSION["voterid"];
$con=mysql_connect("localhost","root","toor");
if(!$con)
echo"error in connection";
$db=mysql_select_db("project_46",$con);
if(!$db)
echo"error in db";
$upq="update candidatetable set votecount=votecount+1 where cid='$a' ";
$upq1="update votertable set sov=1 where voterid='$b' ";
mysql_query($upq1,$con);
if(mysql_query($upq,$con)){
        header('Location:../Home.html');
}
?>
        </body>
</html>
