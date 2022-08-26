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
        <h3>Exam potral</h3>
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
        
        $query = " select * from Exam where username = '$username' and date='$date' ";
        $result = mysqli_query($db, $query);
 
        $data = mysqli_fetch_assoc($result)
        
        ?>
        <?php 
        if($data){
        ?>
            <img src="./uploads/<?php echo $data['image']; ?>" id="i1"> 
             <?php    } 
             
             else{
                 echo "<h3 style='text-align:center;'> There is no question paper uploaded  </h3>";
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