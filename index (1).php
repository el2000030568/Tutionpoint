<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <div class="border">
 

    <h3 id ="h3">Tution point</h3>

  </div>  
    <div class="box1">
     <form action="login.php" method="post">
     	<h2 id="h2">LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<table>
     <tr><td>	<label id=l11>User Name</label>
     	<input type="text" name="uname" placeholder="User Name" id="i1"><br> </td></tr>

     <tr><td>	<label id="l22">password</label>
     	<input type="password" name="password" placeholder="Password" id="i2"></td></tr>

     <tr><td>	<button type="submit" id="b1" >Login</button></td></tr>
     	</table>
     </form>
     </div>
</body>
</html>