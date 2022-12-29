<html>
<head>
<title>Voter Signin</title>
<style>
form{
        width:300px;
        margin: auto;
        padding: 20px;
        margin-top: 100px;
        background:lightblue;
        border: none;
        border-radius: 12px;
}
label{
        margin-left: 8px;
        margin-bottom:5px;
}
h2{
        text-align: center;
}
#vid,#aad,#drop{
        margin-top:8px;
        margin-left: 8px;
        width:270px;
        height:26px;
        border-radius: 7px;
        border:none;
        outline-color: lightblue;
}
#button{
        width: 200px;
        height:30px;
        margin-top: 10px;
        margin-left:45px;
        margin-bottom: 20px;
        border-radius: 8px;
        border: none;
        cursor: pointer;
        background: lightgreen;
        font-size: 14px;
}
#button:hover{
        background: green;
        color:white;
        font-size: 15px;
}
.error{
        color:red;
}
</style>
</head>
<body>
<form action="votingportal.php" method="POST" onsubmit="return validation()">
<h2>Voting Portal</h2>
<label>Voter Identification Number:</label><input type="text" name="vin" id="vid">
<span class="error" id="vinErr">*</span><br><br>
<label>Aadhar Number:</label><input type="text" name="adno" id="aad">
<span class="error" id="aadErr">*</span><br><br>
<label>Age:</label><select name="age" id="drop"><br><br>
<?php
$age=0;
for($age=18;$age<=103;$age++){
        echo"<option value='$age'>$age</option>";
}
?>
</select><br><br>
<input type="submit" value="Submit" id="button">
</form>
<script>
        function validation(){
                var vin=document.getElementById('vid').value;
               var aadno=document.getElementById('aad').value;
               if(vin.length!=7){
            document.getElementById("vinErr").innerHTML="please enter your 7 digit Voter Id Number";
            return false;
         }
         if(aadno.length!=12){
            document.getElementById("aadErr").innerHTML="please enter your 12 digit Aadhar Number";
            return false;
         }
        }
</script>
</body>
</html>

