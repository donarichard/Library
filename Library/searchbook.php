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
.book2{
	float:left;

}
.book1{
	float:right;

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
  </div>

<div class="container-fluid">
    <nav class="navbar navbar-inverse bg-success">
        <div class="navbar-header">
            <ul class="nav navbar-nav  ">
                <li><a  class="navbar-brand" href="index.php"><i class="glyphicon glyphicon glyphicon-home "></i>&nbsp;Home</a></li>
                <li><a class="navbar-brand" href="id.php" ><i class="glyphicon glyphicon-search "></i>&nbsp;Student ID</a></li>
                <li><a class="navbar-brand" href="searchbook.php"><i class="glyphicon glyphicon-search "></i>&nbsp;Book Search</a></li>
                <li><a class="navbar-brand" href=""><i class="glyphicon glyphicon glyphicon-phone-alt"></i>&nbsp;About</a></li>
            </ul>
    </nav>
</div>
  <div class="book2">
<img src="book2.png">
</div>
  <div class="book1">
<img src="book2.png">
</div>
  <center><label for="inputdefault">Enter the title of the book or select type of searching :</label>
</center>
<form action = "books.php" method="POST">
<center>
<select class="btn" onchange="la(this.value)">
<option value="">Choose Type</option>
<option value=books.php>Title</option>
<option value=auth.php>Author</option>
<option value=pub.php>Publisher</option></center>
</select>
<center>
<input type="text" name="search"class="textbox form-control" required>
<br></br>
<input type="submit" class="btn" value="Search">
<input type="reset" class="btn" value="Reset">
</center>

</form>

<script>
function la(src)
{
	window.location=src;
}

</script>
</body>
</html>
