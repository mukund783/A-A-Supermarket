<?php   

session_start();  

if(!isset($_SESSION["sess_user"])){  
    
header("location:adminlogin.php");  

} else {  

?>  

<!doctype html>
<html>
<head>
<title>Employees</title><br><br>
<div id="view" style="position:absolute; top: 30px; left: 1000px;"><b><i><a href="adminhome.php" align="right"> Home </a>| <a href="logout.php">Logout</a></i></b></div>

<h5><marquee direction="right" scrollamount="5" hspace="80%" width="20%">SHOPPING MART</marquee><h5>
<h1><CENTER><font color="rosybrown"><u>EMPLOYEES</u><font></CENTER></h1>
<hr color="rosybrown" width=400 height=400 />
<style type="text/css">
INPUT:hover{color:rosybrown;}
INPUT:focus{color:red;}
</style>
</head>
<body bgcolor="ivory">
<fieldset>
<legend> <marquee><h3><i>Personal Information of the Employee</i></h3> </marquee></legend>
<center><table width="500" cellpadding="5" cellspacing="5" border="5">
<tr>
<th>EMPLOYEE ID </th><th> EMPLOYEE NAME</th><th> GENDER</th><th> DOB</th><th> BLOOD GROUP</th><th> POST</th><th> ADHAAR NUMBER</th><th> PHONE NUMBER</th><th> EMAIL ID</th><th> ADDRESS</th><th> PIN</th>
</tr>
<?php
$con=mysqli_connect('localhost','root','') or die(mysql_error());  
    
mysqli_select_db($con,'super_market') or die("Cannot select DB!"); 
$result=mysqli_query($con,"SELECT * FROM employee");

while($row=mysqli_fetch_array($result))
{
?>
<tr>
<td><?php echo $row['Emp_Id']; ?></td>
<td><?php echo $row['Emp_Name']; ?></td>
<td><?php echo $row['Gender']; ?></td>
<td><?php echo $row['DOB']; ?></td>
<td><?php echo $row['B_Group']; ?></td>
<td><?php echo $row['Post']; ?></td>
<td><?php echo $row['Adhaar_no']; ?></td>
<td><?php echo $row['Phone_no']; ?></td>
<td><?php echo $row['Email_Id']; ?></td>
<td><?php echo $row['Address']; ?></td>
<td><?php echo $row['Pin']; ?></td>
</tr>
<?php
}
?>
</table></center>
</fieldset>
</body>
</html>
<?php  

}  

?>  