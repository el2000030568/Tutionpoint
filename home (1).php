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
	    #hb1{
	        width:200px;
	        height:30px;
	        border-radius:4px;
	        border:2px solid black;
	        background-color:red;
	        position:relative;
	        top:-130px;
	        left:1200px;
	        
	    }
	    #hb1:focus{
	         background-color:black;
	         color:white;
	    }
	    table, th, td {
  border:1px solid black;
  border-collapse: collapse; 
  width:1300px;
  padding:15px;
}
table{
    position:absolute;
    left:100px;
}
td{
    
    background-color:#C1D2D5;
}
#b11{
    width:250px;
    height:50px;
    background-color:red;
    color:white;
    border:none;
    position:absolute;
    top:700px;
    left:100px;
    border-radius:3px;
}
#b12{
    width:250px;
    height:50px;
    background-color:red;
    color:white;
    border:none;
    position:absolute;
    top:700px;
    left:800px;
    border-radius:3px;
}
footer{
    width:1500px;
    height:100px;
    background-color:black;
    position:relative;
    top:1000px;
}
label{
     position:absolute;
    top:710px;
    left:400px;
    font-size:18px;
    
}
#ll{
     position:absolute;
    top:710px;
    left:1100px;
    font-size:18px;
    
}
	</style>
	
</head>
<body style="background-color:white;">
    <div class="border">
        <h3>Opened potral</h3>
        
    </div>
     <h1 style="text-align:center;margin-top:-10px;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;box-shadow:1px 3px 5px red;width:100%; ">Hello, <?php echo $_SESSION['name']; ?></h1>
     <form action="logout.php"> <input  type="submit" value="logout" id="hb1"/></form>
     <div>
         <table>
             <tr> <td style="font-size:20px;background-color:#07F7F7;margin-top:-70px;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;margin-left:550px; " > Time table </td> </tr>
             
            <tr>
                <th>&nbsp;</th>
                <th> &nbsp;</th>
                <th>&nbsp;</th>
                <th style="background-color:#E49BEA;">6:00pm to 7:00 pm</th>
                <th style="background-color:#E49BEA;">7:00pm to 7:15 pm</th>
                 <th style="background-color:#E49BEA;">7:30pm to 8:30 pm</th>
                 <th style="background-color:#E49BEA;">8:30pm to 9:00 pm</th>
                
            </tr>
            <tr>
                <td>Monday</td>
                <td> ----------- </td>
                <td> ----------- </td>
                <td> BREAK </td>
                <td> BREAK </td>
                <td> MATHS </td>
                <td> Maths</td>
            </tr>
             <tr>
                <td>Tuesday</td>
                <td> ----------- </td>
                <td> ----------- </td>
                <td> BREAK </td>
                <td> BREAK </td>
                <td> MATHS </td>
                <td> Maths</td>
            </tr>
             <tr>
                <td>wednesday</td>
                <td> ----------- </td>
                <td> ----------- </td>
                <td> BREAK </td>
                <td> BREAK </td>
                <td> MATHS </td>
                <td> Maths</td>
            </tr>
             <tr>
                <td>Thursday</td>
                <td> ----------- </td>
                <td> ----------- </td>
                <td> BREAK </td>
                <td> BREAK </td>
                <td> MATHS </td>
                <td> Maths</td>
            </tr>
             <tr>
                <td>Friday</td>
                <td> ----------- </td>
                <td> ----------- </td>
                <td> BREAK </td>
                <td> BREAK </td>
                <td> MATHS </td>
                <td> Maths</td>
            </tr>
             <tr>
                <td>Saturday</td>
                <td> ----------- </td>
                <td> ----------- </td>
                <td> BREAK </td>
                <td> BREAK </td>
                <td> EXAM </td>
                <td> EXAM </td>
            </tr>
             <tr>
                <td>Sunday</td>
                <td> ----------- </td>
                <td> ----------- </td>
                <td> Self </td>
                <td> Self </td>
                <td> Self </td>
                <td> Self </td>
            </tr>
         </table>
         
     </div>
     
     <div class="buttons">
         <form action="exam.php">
             <button type="submit" id="b11" >Exam potrol</button> <label>Ready for exam click here</label>
             
         </form> 
         <form action = "examresult.php">
             <button type="submit" id="b12">Exam Results </button>  <label id="ll">Check results</label>
         </form>
         
     </div>
     <footer>
         <h3 style="color:white;text-align:center;padding:40px;">Taken rights 2022</h3>
     </footer>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>