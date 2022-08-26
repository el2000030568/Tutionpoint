<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {
      
 ?>
<!DOCTYPE html>
<html>
<head>
    
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="main.css">
	<style type="text/css">
	    #b1{
	        position:absolute;
	        top:200px;
	        left:630px; 
	    }
	    #date{
	        width:200px;
	        height:35px;
	        position:absolute;
	        top:150px;
	        left:650px;
	    }
	    #i1{
	        width:auto;
	        height:100%;
	        position:absolute;
	        top:300px;
	        left:auto;
	        margin-left:100px;
	        box-shadow:1px 10px 10px black;
	    }
	    #b2{
	        width:150px;
	        height:30px;
	        background-color:red;
	        border-radius:3px;
	        border:0.1px solid white;
	        position:absolute;
	        top:20px;
	    }
	    #b2:focus{
	        background-color:white;
	        
	    }
	</style>
	
</head>
<body style="background-color:white;">
    <div class="border">
        <h3>Results potral</h3>
        </div>
     <div>
         <form action="" method="POST">
             <input type="date" name="date" id="date" />
              <button type="submit" name="sumbit" id="b1" >submit</button>
         </form>
     </div>
     <div>
         <form action="home.php">
             <button type="submit" id="b2">Back</button>
         </form>
         
     </div>
     <div
      <div id="display-image">
        <?php
        if (isset($_POST['sumbit'])) {
           $username = $_SESSION['username'];
            $date = $_POST["date"];
          

 
    $db = mysqli_connect("localhost", "id19337895_login", "Lokeshkeerthi@143", "id19337895_tution");
    if (!$db) {
	echo "Connection failed!";
    }
        
        $query = " select * from result where username = '$username' and date='$date' ";
        $result = mysqli_query($db, $query);
 
        $data = mysqli_fetch_assoc($result)
        
        ?>
        <?php 
        if($data){
           echo "<h1 style='position:relative;top:130px;box-shadow:1px 3px 5px red;text-align:center'> Result </h1>";
            echo "<h2 style='position:relative;top:100px;text-align:center;font-size:40px;color:green';background-color:black;>  {$data['result']}  </h2>";
            
            echo "<h1 style='position:relative;top:100px;left:700px;border:5px solid #F8D70A;width:185px;height:50px;color:green'  >Marks : {$data['marks']} </h1>";
           echo "<h3 style='position:relative;top:42px;left:855px;color:#F86B0A;' >/ {$data['outoff']} </h3>";
            echo "<h4 style='position:relative;top:80px;left:750px;color:#F80ACD;' >{$data['date']} </h4>";
        ?>
                <h1> <?php $marks  ?>     </h1>
             <?php    } 
             
             else{
                 echo "<h3 style='text-align:center;'> There is no Marks  </h3>";
             }
             
             ?>
        <?php
        
        }
        ?>
    </div>
</body>
</html>




<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>