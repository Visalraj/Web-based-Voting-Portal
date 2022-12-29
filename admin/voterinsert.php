<?php
$voterid=$_POST["voterid"];
$votername=$_POST["votername"];
$voterage=$_POST["voterage"];
$voteraadhar=$_POST["voteraadhar"];
$votermobile=$_POST["votermobile"];
$ward=$_POST["dropdownward"];
$booth=$_POST["dropdownbooth"];
$email=$_POST["voteremail"];
if($voterid==""||$votername==""||$voterage==""||$voteraadhar==""||$votermobile==""){
        echo"<h3 style='color:red;'>Please Fill up form.</h3>";
}else{
$con=mysql_connect("localhost","root","toor");
if(!$con)
echo"error in connection";
$db=mysql_select_db("project_46",$con);
if(!$db)
echo"error in db";
$chk="select voteraadhar,votermobile,email from votertable where (voteraadhar='$voteraadhar' or votermobile='$votermobile' or email='$email')  ";
$result=mysql_query($chk,$con);
if(mysql_num_rows($result)>0){
        echo"<script>alert('Aadhar Number OR Mobile Number OR Email already exists!!')
        window.location.replace('voterreg.php')
        </script>";
}else{
$q="insert into votertable(voterid,votername,voterage,voteraadhar,votermobile,voterward,voterbooth,sov,email) values
 ('$voterid','$votername',$voterage,'$voteraadhar','$votermobile','$ward','$booth',0,'$email')";
if(mysql_query($q,$con))
{
?>
<script>
        alert("Voter Inserted Successfully");
        window.location.replace("voterreg.php");
        </script>
<?php
}
else
{
        ?>
        <script>
                alert("Error occured while adding");
                window.location.replace("voterreg.php");
                </script>
        <?php
}
}
}
?>
