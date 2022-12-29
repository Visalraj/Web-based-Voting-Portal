<?php
session_start();
echo"<h3 style='text-align:right; margin-right:20px;color:green;'>Welcome ".$_SESSION["username"];
?>
<html>
<head>
<title>Admin Home</title>
<style>
.main{
width: auto;
margin-top: 25px;
padding: 5px;
text-align: center;
}
a{
text-decoration:none;
}
#c{
        margin-left: 5px;
}    
button{
        width:200px;
        padding: 7px;
        border-radius: 10px;
        margin: 15px;
        border: none;
  
        font-family: sans-serif;
        font-size: 13px;
        
}            
a{
        color:black;
}                 
</style>
</head>
<body>
<a href="../Home.html" style="color:red;text-align:right;">logout</a>
<hr>
<div class="main">
<button id="c"><a href="candidatereg.php"> Add Candidates</a></button>
<button id="c"><a href="voterreg.php"> Add Voters</a></button>
<button  id="c" ><a href="managc.php"> Manage Candidates</a></button>
<button  id="c"><a href="managv.php"> Manage Voters</a></button>
<button id="c"><a href="Votestatus.php"> Vote Status</a></button>
</div>
</body>
</html>

