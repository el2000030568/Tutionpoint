<html>
    <head><title> Results update </title></head>
    <body>
        <form action="" method="POST">
            <input type="text" placeholder="enter name"  name="username" />
            <input type="text" placeholder="marks"  name="marks" />
            <input type = "text" placeholder = "out off" name="outoff" />
            <input type = "text" placeholder = "result" name="result" />
            <input type="date"  placeholder ="enter date" name="date" />
            <button type="sumbit" name="submit" >Submit</button>
        </form>
        
    </body>
    
</html>
<?php
  $username = $_POST["username"];
  $marks = $_POST["marks"];
  $outoff = $_POST["outoff"];
  $result = $_POST["result"];
  $date = $_POST["date"];
     if(isset($_POST["submit"])){
          $db = mysqli_connect("localhost", "id19337895_login", "Lokeshkeerthi@143", "id19337895_tution");
    if ($db) {echo "Connection Sucessfull!";}
      $sql = "INSERT INTO result(username,date,marks,outoff,result) VALUES ('$username','$date','$marks','$outoff','$result')";
       mysqli_query($db, $sql);
       if($sql){  echo"<h3> Marks Uploaded    </h3>";   }
       else { echo"<h2> Marks not Uploaded   </h2>";    }
        
    
    
     }
     
?>