<?php
error_reporting(0);
include_once 'dbcon.php';

if(isset($_POST['save_mul']))
{		
	$total = $_POST['total'];
		
	for($i=1; $i<=$total; $i++)
	{
		$acc = $_POST["acc$i"];
		$booktitle = $_POST["booktitle$i"];
        $auth=$_POST["auth$i"];
        $bookpub = $_POST["bookpub$i"];
        $state=$_POST["status$i"];
		$sql="INSERT INTO books(BACNO,BTITL,BAUTH,BPUBL,BISSU) VALUES('".$acc."','".$booktitle."','".$auth."','".$bookpub."','".$state."')";
		$sql = $MySQLiconn->query($sql);		
	}
	
	if($sql)
	{
		?>
        <script>
		alert('<?php echo $total." Book Added Successfully !!!"; ?>');
		window.location.href='addbook.php';
		</script>
        <?php
	}
	else
	{
		?>
        <script>
		alert('error while Adding Books , TRY AGAIN');
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
<div class="clearfix"></div>

<div class="container">
<a href="generate.php" class="btn btn-large btn-info"><i class="glyphicon glyphicon-plus"></i> &nbsp; Add Books</a>
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
    <th>ACC NO</th>
    <th>Book Title</th>
        <th>Book Author</th>
	<th>Book Publication</th>
        <th>Book Status</th>
    </tr>
	<?php
	for($i=1; $i<=$_POST["no_of_rec"]; $i++) 
	{
		?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><input type="text" name="acc<?php echo $i; ?>" placeholder="ACC NO" class='form-control' /></td>
            <td><input type="text" name="booktitle<?php echo $i; ?>" placeholder="Book Title" class='form-control' /></td>
            <td><input type="text" name="auth<?php echo $i; ?>"placeholder="Book Author" class='form-control' /></td>
            <td><input type="text" name="bookpub<?php echo $i; ?>" placeholder="Book Publication" class='form-control' /></td>
            <td><input type="text" name="status<?php echo $i; ?>" placeholder="0 for aviable -1 for not aviable" class='form-control' /></td>
        </tr>
        <?php
	}
	?>
    <tr>
    <td colspan="6">
    
    <button type="submit" name="save_mul" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> &nbsp; Insert all Records</button> 

    <a href="index.php" class="btn btn-large btn-success"> <i class="glyphicon glyphicon-fast-backward"></i> &nbsp; Back to index</a>
    
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