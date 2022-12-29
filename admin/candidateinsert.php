<?php
$cid=$_POST["candid"];
$cname=$_POST["candname"];
$cage=$_POST["candage"];
$cparty=$_POST["candparty"];
$email=$_POST["candemail"];
if($cid==""||$cname==""||$cage==""||$cparty==""){
       echo"<h3 style='color:red;'>Please fill up form.</h3>";
}else{
$con=mysql_connect("localhost","root","toor");
if(!$con)
echo"error in connection";
$db=mysql_select_db("project_46",$con);
if(!$db)
echo"error in db";
$q="insert into candidatetable(cid,cname,cage,cparty,votecount,email) values
 ($cid,'$cname',$cage,'$cparty',0,'$email')";
 if(mysql_query($q,$con))
 {
?>
<script>
alert("Candidate Inserted Successfully ");
window.location.replace("candidatereg.php");
       </script>
<?php
}
 else{
       ?>
       <script>
       alert("Error Occured while adding");
       window.location.replace("candidatereg.php");
              </script>
       <?php
 }
}
?>
