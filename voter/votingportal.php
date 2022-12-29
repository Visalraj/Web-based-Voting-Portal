<html>
<head>
<title>Voting Portal</title>
<style>
label{
 margin: 25px;
 padding: 3px;
display:inline-block;
width: 120px;
}
#header{
width:auto;
text-decoration:underline;
background:ble;
}
.left_bar{
width:300px;
height:500px;
background:lightblue;
float:left;
border-radius: 15px;
}
.timer{
float:right;
background:yllow;
width:300px;
height:25px;
text-align:right;
font-size: 18px;

}
.main-content{
float:left;
width:845px;
height:450px;
background:gry;
margin:20px;
}
#timetext,#ind{
        font-size: 15px;
    
}
#countdown{
        color:red;
}

</style>
</head>
<body>

<h3 id="header"><center>Welcome to Voting Portal</center></h3>
<div class="left_bar">
<?php
session_start();
        $vid=$_POST["vin"];
        $aad=$_POST["adno"];
         $age=$_POST["age"];

  if($vid=="" && $aad=="")
        {
                header('Location:../error.php');
        }elseif($vid==""){
                header('Location:../error.php');
        }
        elseif($aad==""){
                header('Location:../error.php'); 
          }  elseif($age==""){
                header('Location:../error.php'); 
        }
                else{
$con=mysql_connect("localhost","root","toor");
if(!$con)
echo"error in connection";
$db=mysql_select_db("project_46",$con);
if(!$db)
echo"db";
$query="select* from votertable where (voterid='$vid' and voteraadhar='$aad'   and voterage='$age' and sov='0')  ";
echo"<form action='votesucc.php' method='post'>";
echo"</form>";
$_SESSION["voterid"]=$vid;
$result=mysql_query($query,$con);
if(mysql_num_rows($result)>0){
while($row=mysql_fetch_row($result))
{
?>
<!--<?php echo $row[7] ?><br>   image -->
<label>Voter Id:</label><?php echo $row[0] ?><br>
<label>Voter Name:</label><?php echo $row[1] ?><br>
<label>Voter Age:</label><?php echo $row[2] ?><br>
<label>Voter Aadhar:</label><?php echo $row[3] ?><br>
<label>Voter Ward:</label><?php echo $row[5] ?><br>
<label>Voter Booth:</label><?php echo $row[6] ?><br>

<?php
  }
}else{
        header('Location:../error.php'); 
}
} //put }
?>

</div>
<div class="timer">
       <span id="timetext"> you will be redirected in</span> <span id="countdown">01:00<span id="ind">min</span></span>
<script>
        const startingMinutes=01;
        let time=startingMinutes*60;
        const countdown=document.getElementById('countdown');
        setInterval(upCount,1000);
        function upCount(){
                const min=Math.floor(time/60);
                let seconds=time%60;
                seconds=seconds<10 ? '0'+ seconds : seconds;
                countdown.innerHTML="0"+min+":"+seconds +"sec";
                time--;

        }
        const timeout=setTimeout(timer, 60000);
function timer(){
        window.location.replace("Votersignin.php");
}
        </script>

</div>
<div class="main-content">
        <?php
        $que="select* from candidatetable";
        $res=mysql_query($que,$con);
        echo"<table border='1' cellspacing='3' cellpadding='1'>";
                        echo"<tr>";
                        echo"<th>Candidate Id</th>";
                        echo"<th>Candidate Name</th>";
                        echo"<th>Candidate Age</th>";
                        echo"<th>Candidate Party</th>";
                        echo"<th>Action</th>";
                        echo"</tr>";
        while($row=mysql_fetch_row($res))
        {
                echo"<tr>";
                echo"<td>".$row[0]."</td>"."<td>".$row[1]."</td>"."<td>".$row[2]."</td>"."<td>".$row[3]."</td>";
                echo"<form action='votesucc.php' method='post'>";
               echo "<td><button value='$row[0]' onclick='voteCount()' name='buttonvalue'>vote</button></td>";
               echo"</form>";
                          echo"</tr>";
        }

echo "</table>"
        ?>
</div>
<script type="text/javascript">
        function voteCount(){
          alert("You are voted successfully");
          window.location.replace("votesucc.php");
        }
        </script>
</body>
</html>



