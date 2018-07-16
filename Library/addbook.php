<?php
	include_once 'dbcon.php';
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
<a href="generate.php" class="btn btn-large btn-info"><i class="glyphicon glyphicon-plus"></i> &nbsp; Add Records</a>
</div>

<div class="clearfix"></div><br />

<div class="container">
<form method="post" name="frm">
<table class='table table-bordered table-responsive'>
<tr>
<th>##</th>
<th>ACC No</th>
<th>Book Titile</th>
    <th>Book Author</th>
<th>Publication</th>
    <th>Status</th>
</tr>
<?php
	$res = $MySQLiconn->query("select BAUTH,BISSU,BPUBL,BAUTH,BTITL,BACNO from books");
	$count = $res->num_rows;

	if($count > 0)
	{
		while($row=$res->fetch_array())
		{
			?>
			<tr>
			<td><input type="checkbox" name="chk[]" class="chk-box" value="<?php echo $row['BACNO']; ?>"  /></td>
			<td><?php echo $row['BACNO']; ?></td>
			<td><?php echo $row['BTITL']; ?></td>
                <td><?php echo $row['BAUTH']; ?></td>
				<td><?php echo $row['BPUBL']; ?></td>
                <?php
                $a=$row["BISSU"];
                if($a<0) {

                    echo "<td>";echo "Issued";
                    echo"</td>";
                }else
                {
                    echo "<td>";echo "Available";
                    echo"</td>";
                }
                ?>
			</tr>
			<?php
		}	
	}
	else
	{
		?>
        <tr>
        <td colspan="3"> No Records Found ...</td>
        </tr>
        <?php
	}
?>

<?php

if($count > 0)
{
	?>
	<tr>
    <td colspan="6">
    <label><input type="checkbox" class="select-all" /> Check / Uncheck All</label>

    
    <label style="margin-left:100px;">
    <span style="word-spacing:normal;"> with selected :</span>
    <span><img src="edit.png" onClick="edit_records();" alt="edit" />edit</span> 
    <span><img src="delete.png" onClick="delete_records();" alt="delete" />delete</span>
    </label>
    
    
    </td>
	</tr>    
    <?php
}

?>

</table>
</form>
</div>

</body>
</html>