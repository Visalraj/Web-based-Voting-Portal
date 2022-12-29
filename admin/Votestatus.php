<html>
        <head>
                <title>Voting Status</title>
                <style>
                        button{
        padding:auto;
        border-radius: 10px;
        margin: 15px;
        border: none;
        font-family: sans-serif;
        font-size: 13px;      
        color: black;
}  
                        .main-c{
                                width:470px;
                                margin: auto;
                                margin-top: 25px;
                                background: ed;
                             margin-bottom:25px;
                        }
.candidate_results{
width:500px;
background:rd;
margin:auto;
}
</style>
        </head>
        <body>
        <a href="adminhome.php"><button> Home</button></a>
                <h2 align="center" style="margin-top: 15px;"><u>Current Voter Status</u></h2>
                <div class="main-c">
                        <?php
                        //voterid,votername,ward,booth
                        $con=mysql_connect("localhost","root","toor");
                        if(!$con)
                        echo"error in connection";
                        $db=mysql_select_db("project_46",$con);
                        if(!$db)
                        echo"error in db";
                        
                        $q="select* from votertable";
                        $result=mysql_query($q,$con);
                        echo"<table border='1' cellspacing='3' cellpadding='1' style='border-radius:5px;'>";
                        echo"<tr bgcolor='#f0f0f0 '>";
                        echo"<th>Voter Id</th>";
                        echo"<th>Voter Name</th>";
                        echo"<th>Voter Ward</th>";
                        echo"<th>Voter Booth</th>";
                        echo"<th>StatusOfVote</th>";
                        echo"</tr>";
                        while($row=mysql_fetch_row($result)){
                                echo"<tr>";
                                echo"<td>".$row[0]."</td>"."<td>".$row[1]."</td>"."<td>".$row[5]."</td>".
                                "<td>".$row[6]."</td>"."<td>".$row[7]."</td>";
                                echo"</tr>";
                        }
                        echo"</table>";
                        ?>
                </div>
                <!-- candidate results here-->
<div class="candidate_results">
<h2><center><u>Election Results</u></center></h2>
<?php
 $con=mysql_connect("localhost","root","toor");
                        if(!$con)
                        echo"error in connection";
                        $db=mysql_select_db("project_46",$con);
                        if(!$db)
                        echo"error in db";
                        
                        $q="select * from candidatetable order by(votecount)desc";
                        $result=mysql_query($q,$con);
                        echo"<table border='1' cellspacing='3' cellpadding='1' style='border-radius:5px;'>";
                        echo"<tr bgcolor='#f0f0f0 '>";
                        echo"<th>Candidate Id</th>";
                        echo"<th>Candidate Name</th>";
                        echo"<th>Candidate Age</th>";
                        echo"<th>Candidate Party</th>";
                        echo"<th>Vote Count</th>";
                        echo"</tr>";
                        while($row=mysql_fetch_row($result)){
                                echo"<tr>";
                                echo"<td>".$row[0]."</td>"."<td>".$row[1]."</td>"."<td>".$row[2]."</td>".
                                "<td>".$row[3]."</td>"."<td>".$row[4]."</td>";
                                echo"</tr>";
                        }
                        echo"</table>";
                        ?>

</div>

        </body>
</html>
