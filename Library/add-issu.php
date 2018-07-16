<?php
error_reporting(0);
include_once 'dbcon.php';

if(isset($_POST['save_mul']))
{
	$total = $_POST['total'];

	for($i=1; $i<=$total; $i++)
	{
		$acc = $_POST["idd$i"];
		$bookno = $_POST["bookno$i"];
        $booktitle = $_POST["booktitle$i"];
        $bookissu=$_POST["bookissu$i"];
        $bookreturn = $_POST["bookreturn$i"];
		$sql="INSERT INTO bookissu(ICARD,BTITL,BACNO,IDUEE,IISSU) VALUES('".$acc."','".$booktitle."','".$bookno."','".$bookreturn."','".$bookissu."')";


		$sql = $MySQLiconn->query($sql);
	}

	if($sql)
	{
        $sql="UPDATE books SET  BISSU ='-1'WHERE BACNO=".$bookno;

        $sql = $MySQLiconn->query($sql);
		?>
        <script>
		alert('<?php echo $total." Books Issue Sucessfully !!!"; ?>');
		window.location.href='admin-index.php';
		</script>
        <?php
	}
	else
	{
		?>
        <script>
		alert('error while Issue Books , TRY AGAIN');
		</script>
        <?php
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>K.S.R College of Engineering</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css" />
<script src="jquery.js" type="text/javascript"></script>
<script src="js-script.js" type="text/javascript"></script>
</head>

<body>

<div class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">

        <div class="navbar-header">
            <a class="navbar-brand"><strong>K.S.R College of Engineering</strong></a>

        </div>
    </div>
</div>
<nav class="navbar navbar-inverse bg-success">
    <div class="navbar-header">
        <ul class="nav navbar-nav  ">
            <li><a  class="navbar-brand" href="admin-index.php"><i class="glyphicon glyphicon glyphicon-home "></i>&nbsp;Home</a></li>
            <li><a class="navbar-brand" href="addbook.php" ><i class="glyphicon glyphicon-plus "></i>&nbsp;Add Books</a></li>
            <li><a class="navbar-brand" href="generate_issu.php"><i class="glyphicon glyphicon-plus "></i>&nbsp;Issu</a></li>
            <li><a class="navbar-brand" href="return_book.php"><i class="glyphicon glyphicon-minus "></i>&nbsp;return</a></li>
            <li><a class="navbar-brand" href="admin.php"><i class="glyphicon glyphicon-log-out"></i>&nbsp;Logout</a></li>
        </ul>
</nav>
</div>
<div class="clearfix"></div>

<div class="container">
</div>

<div class="clearfix"></div><br />

<div class="container">
<?php
if(isset($_POST['btn-gen-form']))
{
	?>
    <form method="post">
    <input type="hidden" name="total" value="<?php echo $_POST["no_of_rec"]; ?>" />
	<table class='table table-bordered'>

    <tr>
    <th>##</th>
    <th>ID NO</th>
        <th>BOOK NO</th>
    <th>Book Title</th>
        <th>Book ISSUE</th>
	<th>Book Return</th>
    </tr>
	<?php
	for($i=1; $i<=$_POST["no_of_rec"]; $i++)
	{
		?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><input type="text" name="idd<?php echo $i; ?>" placeholder="ID NO" class='form-control' /></td>
            <td><input type="text" name="bookno<?php echo $i; ?>" placeholder="ACC NO" class='form-control' /></td>
            <td><input type="text" name="booktitle<?php echo $i; ?>" placeholder="Book Title" class='form-control' /></td>
            <td><input type="text" name="bookissu<?php echo $i; ?>"placeholder="Book Issu" class='form-control' /></td>
            <td><input type="text" name="bookreturn<?php echo $i; ?>" placeholder="Book Return" class='form-control' /></td>
        </tr>
        <?php
	}
	?>
    <tr>
    <td colspan="6">

    <button type="submit" name="save_mul" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> &nbsp; ISSSU BOOKS</button>

    <a href="admin-index.php" class="btn btn-large btn-success"> <i class="glyphicon glyphicon-fast-backward"></i> &nbsp; Back to index</a>

    </td>
    </tr>
    </table>
    </form>
	<?php
}
?>
</div>

</body>
</html>