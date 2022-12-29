<html>
<head>
<title>Voter Registration</title>
<style>
form{
        width:300px;
        margin: auto;
        padding: 3px;
        background: lightblue;
        border: none;
        border-radius: 10px;
}
label{
        margin-left: 8px;
        margin-bottom:5px;
}
h2{
        text-align: center;
}
#voterid,#votername,#voterage,#voteremail,#voteraadhar,#voternum,#drop,#voterimg{
        margin-top:8px;
        margin-left: 8px;
        width:270px;
        height:26px;
        border-radius: 7px;
       border:none;
       outline-color: lightblue;
}
#sub{
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
#sub:hover{
        background: green;
        color:white;
        font-size: 15px;
}
.error{
color:red;
}
button{
        padding:auto;
        border-radius: 10px;
        margin: 15px;
        border: none;
        font-family: sans-serif;
        font-size: 13px;      
        color: black;
}  
.error{
        color:red;
}
</style>
</head>
<body>
<a href="adminhome.php"><button> Home</button></a>
<form method="POST" action="voterinsert.php" onsubmit="return validation()">
<h2>Voter Registration</h2>
<label> Voter Id:</label><input type="text" name="voterid" id="voterid" >
<span class="error" id="vidErr">*</span><br><br>
<label>Voter Name:</label><input type="text" name="votername"  id="votername" required>
<br><br>
<label>Voter Age:</label><input type="text" name="voterage"  id="voterage" >
<span class="error" id="vageErr">*</span><br><br>
<label>Aadhar Number:</label><input type="text" name="voteraadhar"  id="voteraadhar" >
<span class="error" id="vaadErr">*</span><br><br>
<label>Mobile Number:</label><input type="text" name="votermobile"  id="voternum">
<span class="error" id="vmobErr">*</span><br><br>
<label>Email:</label><input type="email" name="voteremail"  id="voteremail">
<span class="error" id="vemErr">*</span><br><br>
<label>Ward:</label><select name="dropdownward"  id="drop">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select><br><br>
<label>Booth:</label><select name="dropdownbooth" id="drop">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select><br><br><br>
<!--<label>Voter Image:</label><input type="file" name="voterimg"  id="voterimg"> <br><br>-->
<input type="submit" value="Submit" id="sub" name="submit">
</form>
<script>
function validation(){
       
        var vid=document.getElementById('voterid').value;
        var age=document.getElementById('voterage').value;
        var aad=document.getElementById('voteraadhar').value;
        var em=document.getElementById('voteremail').value;
        var mob=document.getElementById('voternum').value;
       if(mob.length!=10){
        document.getElementById("vmobErr").innerHTML="please enter 10 digit  Number";
       }
        if(vid.length!=7){
            document.getElementById("vidErr").innerHTML="please enter 7 digit Voter Id Number";
            return false;
         }
         if(age<18){
            document.getElementById("vageErr").innerHTML="please enter valid age";
            return false;
         }
         if(aad.length!=12){
            document.getElementById("vaadErr").innerHTML="please enter 12 digit AadharNumber";
            return false;
         }
        
         if(em.indexOf('@') <= 0){
            document.getElementById("vemErr").innerHTML="@ invalid position";
            return false;
         }

          if(em.charAt(cemail.length -4)!='.'){
            document.getElementById("vemErr").innerHTML=" . invalid position";
            return false;
         }
         

}
</script>
</body>
</html>
