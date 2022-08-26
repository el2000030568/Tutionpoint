<?php
error_reporting(0);
 
$msg = "";
 
// If upload button is clicked ...
if (isset($_POST['upload'])) {
 
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "./uploads/" . $filename;
    $username = $_POST["username"];
    $date = $_POST["date"];
 
    $db = mysqli_connect("localhost", "id19337895_login", "Lokeshkeerthi@143", "id19337895_tution");
    if (!$db) {
	echo "Connection failed!";
}
    // Get all the submitted data from the form
    $sql = "INSERT INTO Exam (username,date,image) VALUES ('$username','$date','$filename')";
 
    // Execute query
    mysqli_query($db, $sql);
 
    // Now let's move the uploaded image into the folder: image
    if ( $sql && move_uploaded_file($tempname, $folder)) {
        echo "<h3>  Image uploaded successfully!</h3>";
    } else {
        echo "<h3>  Failed to upload image!</h3>";
    }
}
?>
 
<!DOCTYPE html>
<html>
 
<head>
    <title>Image Upload</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
 
<body>
    <div id="content">
        <form method="POST" action="" enctype="multipart/form-data">
            <div class="form-group">
                <input type="text" name="username" placeholder="enter usetname"  />
                <input type="date" name="date" placeholder="enter usetname"  />
                <input class="form-control" type="file" name="uploadfile" value="" />
                
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit" name="upload">UPLOAD</button>
            </div>
        </form>
    </div>
    <div id="display-image">
        <?php
        $query = " select * from Exam where username = 'nithin' ";
        $result = mysqli_query($db, $query);
 
        while ($data = mysqli_fetch_assoc($result)) {
        ?>
            <img src="./uploads/<?php echo $data['image']; ?>">
 
        <?php
        }
        ?>
    </div>
</body>
 
</html>