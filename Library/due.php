<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>K.S.R. College of Engineering Library OPAC</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<style>
	.textbox {
    width: 50%;
}
	</style>
    </head>
<body>
<div class="jumbotron">
<center>
<img src="KSR Logo.png">
<h2>K.S.R. College of Engineering</h2>
<h5>(Autonomous)</h5>
<h2><span style="font-family: Bradley Hand ITC">OPAC-LIBRARY SYSTEM</span></h2></center>
<h3 style="font-family:Verdana;color:white;font-size:26px;"><h3/>
  </div>
  <center><label for="inputdefault">Enter the title of the book or select type of searching :</label>
</center>
<form action = "" method="POST">

<input type="text" name="search"class="textbox form-control">
<br></br>
<input type="submit" class="btn" name="" value="Search">
<input type="reset" class="btn" value="Reset">
</center>
</form>
</body>
 
<?php
include("dbcon.php");
 if(isset($_POST['search']))
 {
$search = $_POST['search'];
 
$query = "SELECT IISSU,IDUEE,ICARD FROM issue WHERE ICARD = '%$search%'";
$result = mysqli_query($db,$query);
 
 
if(mysqli_num_rows($result)>0)if(mysqli_num_rows($result)>0)
 
{

?>
 
<table border="2" align="center" cellpadding="5" cellspacing="5">
 
<tr>
<th>ID CARD </th>
<th>Issue Date </th>
<th>Due Date</th>

 
<?php 
while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row["ICARD"];?> </td>
<td><?php echo $row["IISSU"];?> </td>
<td><?php echo $row["IDUEE"];?> </td>
</tr>
<?php
}
}
else
{
echo "No books found in the library by the name $search" ;
 }
 }
?>
</table>

</body>
</html>