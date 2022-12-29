<html>
        <head>
                <title>Manage Voter</title>
        </head>
        <style>
 #form1{
        width:300px;
        padding: 20px;
        margin-top: 15px;
        background:lightblue;
        border: none;
        border-radius: 12px;
}
label{
        margin-left: 8px;
        margin-bottom:5px;
}
h3{
        text-align: center;
}
#textbox{
        margin-top:8px;
        margin-left: 8px;
        width:270px;
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
        margin-left: 8px;
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
                
                <form action="managv.php" method="POST" id="form1">
                         <h3>Manage Voter</h3>
                        <label>Voter Id:</label><input type="text" name="vid" id="textbox"><br><br>
                        <input type="submit" value="Search" name="sud" id="button">
                        <input type="submit" value="Update" name="sud" id="button">
                        <input type="submit" value="Delete" name="sud" id="button">
                       
                </form>
        </body>
</html>
<?php
if(isset($_POST["sud"])){
        $voterid=$_POST["vid"];
        $butval=$_POST["sud"];
        $con=mysql_connect("localhost","root","toor");
        if(!$con)
        echo"ok";
        $db=mysql_select_db("project_46",$con);
        if(!$db)
        echo"db";
        if($voterid==""){
                echo"<h3 style='color:red;'>Please Enter Voter Id</h3>";
        }else{
        if($butval=="Search"){
                $q="select* from votertable where voterid='$voterid' ";
                $result=mysql_query($q,$con);
                if(mysql_num_rows($result)>0){
                        while($row=mysql_fetch_row($result)){
                        ?>
                        <label>Voter Id:</label><input style="pointer-events:none;" id="textbox" type="text" value="<?php echo $row[0] ?>"><br>
                        <label>Voter Name:</label><input style="pointer-events:none;" id="textbox"type="text" value="<?php echo $row[1] ?>"><br>
                        <label>Voter Age:</label><input style="pointer-events:none;" id="textbox" type="text" value="<?php echo $row[2] ?>"><br>
                        <label>Voter Aadhar:</label><input style="pointer-events:none;" id="textbox"  type="text" value="<?php echo $row[3] ?>"><br>
                        <label>Voter Mobile:</label><input style="pointer-events:none;" id="textbox"  type="text" value="<?php echo $row[4] ?>"><br>
                        <label>Voter Ward:</label><input style="pointer-events:none;" id="textbox"  type="text" value="<?php echo $row[5] ?>"><br>
                        <label>Voter Booth</label><input style="pointer-events:none;" id="textbox"  type="text" value="<?php echo $row[6] ?>"><br>
                        <?php
                }
        }else{
                echo"<h3 style='color:red;'>Voter Id Doesn't exists.</h3>";
        }
        }elseif($butval=="Update"){
                $q="select* from votertable where voterid='$voterid' ";
                $result=mysql_query($q,$con);
                if(mysql_num_rows($result)>0){
                        while($row=mysql_fetch_row($result)){
                        ?>
                        <form action="updatevoter.php" method="POST">
                        <label>Voter Id:</label><input style="pointer-events:none;" id="textbox" type="text" value="<?php echo $row[0] ?>" name="vid"><br><br>
                        <label>Voter Name:</label><input type="text" id="tb" value="<?php echo $row[1] ?>" name="votername"><br><br>
                        <label>Voter Age:</label><input   type="text"  id="tb" value="<?php echo $row[2] ?>" name="voterage"><br><br>
                        <label>Voter Aadhar:</label><input    type="text"  id="tb" value="<?php echo $row[3] ?>"name="voteraad"><br><br>
                        <label>Voter Mobile:</label><input type="text" id="tb" value="<?php echo $row[4] ?>" name="votermob"><br><br>
                        <label>Voter Ward:</label><input   type="text"  id="tb" value="<?php echo $row[5] ?>" name="voterward"><br><br>
                        <label>Voter Booth:</label><input    type="text"  id="tb" value="<?php echo $row[6] ?>"name="voterbooth"><br><br>
                        <input type="submit" value="UPDATE" id="button">
                        </form>
                        <?php
                }
        }else{
                echo"<h3 style='color:red;'>Voter Id Doesn't exists.</h3>";
        }
        }else{
                $q="select* from votertable where voterid='$voterid' ";
                $result=mysql_query($q,$con);
                if(mysql_num_rows($result)>0){
                        while($row=mysql_fetch_row($result)){
                        ?>
                        <form action="deletevoter.php" method="POST">
                        <label>Voter Id:</label><input style="pointer-events:none;" id="textbox" type="text" value="<?php echo $row[0] ?> " name='voterid'><br>
                        <label>Voter Name:</label><input style="pointer-events:none;" id="textbox"type="text" value="<?php echo $row[1] ?>"><br>
                        <label>Voter Age:</label><input style="pointer-events:none;" id="textbox" type="text" value="<?php echo $row[2] ?>"><br>
                        <label>Voter Aadhar:</label><input style="pointer-events:none;" id="textbox"  type="text" value="<?php echo $row[3] ?>"><br>
                        <label>Voter Mobile:</label><input style="pointer-events:none;" id="textbox"  type="text" value="<?php echo $row[4] ?>"><br>
                        <label>Voter Ward:</label><input style="pointer-events:none;" id="textbox"  type="text" value="<?php echo $row[5] ?>"><br>
                        <label>Voter Booth</label><input style="pointer-events:none;" id="textbox"  type="text" value="<?php echo $row[6] ?>"><br>
                        <input type="submit" value="DELETE" id="button">
                        </form>
                        <?php
                }
        }else{
                echo"<h3 style='color:red;'>Voter Id Doesn't exists.</h3>";
        }
        }
        }
        }
?>
