<html>
<head>
<title>Candidate Registration</title>
<style>
        body{
                font-family: sans-serif;
        }
#form1{
        width:300px;
        margin: auto;
        padding: 10px;
        background: lightblue;
        border: none;
        border-radius: 10px;
}
label{
        margin-left: 8px;
        margin-bottom:5px;
        margin-top: 5px;
}
h2{
        text-align: center;
}
#candid,#candidatename,#candidateage,#candidateemail,#candidateparty{
        margin-top:8px;
        margin-left: 8px;
        width:270px;
        height:26px;
        border-radius: 7px;
       border:none;
       outline-color: lightblue;
}
#candidatepsym,#candidateimg{
        margin-top:8px;
        margin-left: 8px;
        width:270px;
        height:26px;
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
}
#sub:hover{
        background: green;
        color:white;
        font-size: 15px;
}
button{

        height:20px;
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
<form method="POST" action="candidateinsert.php"id="form1" onsubmit="return validation()">
<h2 >Candidate Registration</h2>
<label>Candidate Id:</label><input type="text" name="candid" id="candid">
<span class="error" id="cidErr">*</span><br><br>
<label>Candidate Name:</label><input type="text" name="candname" id="candidatename" required>
<br><br>
<label>Candidate Age:</label><input type="text" name="candage" id="candidateage" >
<span class="error" id="cageErr">*</span><br><br>
<label>Candidate Email:</label><input type="text" name="candemail" id="candidateemail" >
<span class="error" id="cemErr">*</span><br><br>
<label>Candidate Party:</label><input type="text" name="candparty" id="candidateparty" required><br><br>
<!--<label>Candidate Party Symbol:</label><input type="file" name="candpsym" id="candidatepsym" ><br><br>
<label>Candidate Image:</label><input type="file" name="candimg" id="candidateimg"><br><br><br>-->
<input type="submit" value="Submit" id="sub" name="submit">
</form>
<script>
function validation(){
        var cid=document.getElementById('candid').value;
        var cage=document.getElementById('candidateage').value;
        var cemail=document.getElementById('candidateemail').value;

        if(cid.length!=5){
            document.getElementById("cidErr").innerHTML="please enter 5 digit Candidate Id Number";
            return false;
         }
         if(cage<18){
            document.getElementById("cageErr").innerHTML="please enter valid age";
            return false;
         }
         if(cemail.indexOf('@') <= 0){
            document.getElementById("cemErr").innerHTML="@ invalid position";
            return false;
         }

          if(cemail.charAt(cemail.length -4)!='.'){
            document.getElementById("cemErr").innerHTML=" . invalid position";
            return false;
         }
}



</script>
</body>
</html>
