<html>
        <head>
                <title>Manage Candidate</title>
        </head>
        <style>
                #form1{
        width:350px;
        padding: 20px;
        height:200px;
        margin-top: 15px;
        background:lightblue;
        border: none;
        border-radius: 12px;
}
label{
        margin-left: 18px;
        margin-bottom:5px;
}
h3{
        text-align: center;
}
#textbox{
        margin-top:8px;
        margin-left: 8px;
        width:300px;
        height:26px;
       border-radius: 7px;
        border:none;
        outline-color: lightblue;
}
#tb{
        margin-top:8px;
        margin-left:8px;
        width:270px;
        height:26px;
        border-radius: 7px;
        border:solid 2px black;
}
#button{
        float: left;
        margin-left: 18px;
        padding: 7px;
        border-radius: 10px;
        margin: 15px;
        border: none;
        font-family: sans-serif;
        font-size: 13px;
        color:black;
}
        </style>

        <body>
                
                <form action="managc.php" method="POST" id="form1">
                         <h3>Manage Candidate</h3>
                        <label>Candidate Id:</label><input type="text" name="cid" id="textbox"><br><br>
                        <input type="submit" value="Search" name="sud" id="button">
                        <input type="submit" value="Update" name="sud" id="button">
                        <input type="submit" value="Delete" name="sud" id="button">
                </form>
        </body>
</html>

<?php
if(isset($_POST["sud"])){
$candid=$_POST["cid"];
$butval=$_POST["sud"];
$con=mysql_connect("localhost","root","toor");
if(!$con)
echo"error in connection";
$db=mysql_select_db("project_46",$con);
if(!$db)
echo"error in db";
if($candid==""){
        echo"<h3 style='color:red;'>Please Enter Candidate Id</h3>";
}else{
if($butval=="Search"){
        $q="select* from candidatetable where cid='$candid' ";
        $result=mysql_query($q,$con);
        if(mysql_num_rows($result)>0){
                while($row=mysql_fetch_row($result)){
                ?>
                <label>Candidate Id:</label><input style="pointer-events:none;" id="textbox" type="text" value="<?php echo $row[0] ?>"><br>
                <label>Candidate Name:</label><input style="pointer-events:none;" id="textbox"type="text" value="<?php echo $row[1] ?>"><br>
                <label>Candidate Age:</label><input style="pointer-events:none;" id="textbox" type="text" value="<?php echo $row[2] ?>"><br>
                <label>Candidate Party:</label><input style="pointer-events:none;" id="textbox"  type="text" value="<?php echo $row[3] ?>"><br>
                <?php
        }
}else{
        echo"<h3 style='color:red;'>Candidate Id Doesn't exists.</h3>";
}
}elseif($butval=="Update"){
        $q="select* from candidatetable where cid='$candid' ";
        $result=mysql_query($q,$con);
        if(mysql_num_rows($result)>0){
                while($row=mysql_fetch_row($result)){
                ?>
                <form action="updatecandidate.php" method="POST">
                <label>Candidate Id:</label><input style="pointer-events:none;" id="textbox" type="text" value="<?php echo $row[0] ?>" name="cid"><br><br>
                <label>Candidate Name:</label><input type="text" id="tb" value="<?php echo $row[1] ?>" name="candname"><br><br>
                <label>Candidate Age:</label><input   type="text"  id="tb" value="<?php echo $row[2] ?>" name="candage"><br><br>
                <label>Candidate Party:</label><input    type="text"  id="tb" value="<?php echo $row[3] ?>"name="candparty"><br><br>
                <input type="submit" value="UPDATE" id="button">
                </form>
                <?php
        }
}else{
        echo"<h3 style='color:red;'>Candidate Id Doesn't exists.</h3>";
}
}else{
        $q="select* from candidatetable where cid='$candid' ";
        $result=mysql_query($q,$con);
        if(mysql_num_rows($result)>0){
                while($row=mysql_fetch_row($result)){
                ?>
                <form action="deletecandidate.php" method="POST">
                <label>Candidate Id:</label><input style="pointer-events:none;" id="textbox" type="text" value="<?php echo $row[0] ?> " name='candid'><br>
                <label>Candidate Name:</label><input style="pointer-events:none;" id="textbox"type="text" value="<?php echo $row[1] ?>"><br>
                <label>Candidate Age:</label><input style="pointer-events:none;" id="textbox" type="text" value="<?php echo $row[2] ?>"><br>
                <label>Candidate Party:</label><input style="pointer-events:none;" id="textbox"  type="text" value="<?php echo $row[3] ?>"><br><br>
                <input type="submit" value="DELETE" id="button">
                </form>
                <?php
        }
}else{
        echo"<h3 style='color:red;'>Candidate Id Doesn't exists.</h3>";
}
}
}
}
?>
