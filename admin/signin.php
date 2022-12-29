<html>
<head>
<title>Admin Signin</title>
<link rel="stylesheet" href="css/admins.css">
<style>
        form{
        width:300px;
        margin: auto;
        padding: 20px;
        margin-top: 100px;
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
#username,#password,#sck{
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

</style>
</head>
<body>
<form  action="adminchk.php" method="POST">     
<h2 id="header">Admin Signin</h2>
<label>Username:</label><br>
<input type="text" id="username"  name="username"><br><br>
<label>Password:</label><br>
<input type="password" id="password"  name="password"><br><br>
<label>Security Code Key:</label><br>
<input type="text" id="sck"name="sck" ><br><br>
<input type="submit"id="button" value="Signin">
</form>
</body>
</html>
