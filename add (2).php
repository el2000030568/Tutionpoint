<?php 
//This is the directory where images will be saved 
$target = 'images/'; 
$target = $target . basename( $_FILES['photo']['name']); 

//This gets all the other information from the form 
$name=$_POST['name']; 
$phone=$_POST['date']; 
$pic=($_FILES['photo']['name']); 

// Connects to your Database 
$conn = mysqli_connect("localhost", "id19337895_login", "Lokeshkeerthi@143","id19337895_tution") or die(mysql_error()) ; 

//Writes the information to the database 
$db="INSERT INTO `Exam` VALUES ('$name', '$phone', '$pic')" ; 
 $result = mysqli_query($conn, $db);
//Writes the photo to the server 
if($result) 
{ 

//Tells you if its all ok 
echo " has been uploaded, and your information has been added to the directory"; 
} 
else { 

//Gives and error if its not 
echo "Sorry, there was a problem uploading your file."; 
} 
?>
  <?php
$sql = "SELECT * FROM Exam";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>id</th>";
                echo "<th>cena</th>";
                echo "<th>model</th>";
                echo "<th>slika</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['username'] . "</td>";
                echo "<td>" . $row['date'] . "</td>";
                
                echo '<img src="'.$row['image'].'JPG" style="width:100px;height:100px;"/>';
                echo "</br>";
                
                
            echo "</tr>";
        }
        echo "</table>";
    }
}   

// Close connection
mysqli_close($conn);
?>