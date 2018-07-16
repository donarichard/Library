<?php
	
	error_reporting(0);

	include_once 'dbcon.php';

	if(isset($_POST['chk'])=="")
	{
		?>
        <script>
		alert('At least one checkbox Must be Selected !!!');
		window.location.href='addbook.php';
		</script>
        <?php
	}
	$chk = $_POST['chk'];
	$chkcount = count($chk);
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>K.S.R College of Engineering</title>
<!--<link rel="stylesheet" href="style.css" type="text/css" />-->
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
<a href="generate.php" class="btn btn-large btn-info"><i class="glyphicon glyphicon-plus"></i> &nbsp; Add Records</a>
</div>

<div class="clearfix"></div><br />

<div class="container">
<form method="post" action="update_mul.php">
<table class='table table-bordered'>
<tr>
<th>ACC NO</th>
<th>Book Title</th>
    <th>Book Author</th>
<th>Book Publication</th>
    <th>Book Status</th>
</tr>
<?php
for($i=0; $i<$chkcount; $i++)
{
	$id = $chk[$i];			
	$res=$MySQLiconn->query("SELECT BPUBL,BTITL,BACNO,BAUTH,BISSU FROM books WHERE BACNO=".$id);
	while($row=$res->fetch_array())
	{
		?>
		<tr>
		<td>
		<input type="text" name="acc[]" value="<?php echo $row['BACNO'];?>" class="form-control" />
        </td>
        <td>
		<input type="text" name="booktitle[]" value="<?php echo $row['BTITL'];?>" class="form-control" />
		</td>
            <td>
                <input type="text" name="auth[]" value="<?php echo $row['BAUTH'];?>" class="form-control" />
            </td>
        <td>
		<input type="text" name="bookpub[]" value="<?php echo $row['BPUBL'];?>" class="form-control" />
        </td>
            <td>
            <input type="text" name="state[]" value="<?php echo $row['BISSU'];?>" class="form-control" />
		</td>
		</tr>
		<?php	
	}			
}
?>
<tr>
<td colspan="5">
<button type="submit" name="savemul" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i> &nbsp; Update all</button>&nbsp;
<a href="admin-index.php" class="btn btn-large btn-success"> <i class="glyphicon glyphicon-fast-backward"></i> &nbsp; cancel</a>
</td>
</tr>
</table>
</form>
</div>
</body>
</html>