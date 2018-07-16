<?php
include_once 'dbcon.php';
$id = $_POST['acc'];
$booktitle = $_POST['booktitle'];
$bookpub = $_POST['bookpub'];
$auth=$_POST['auth'];
$state=$_POST['state'];
$chkcount = count($id);
for($i=0; $i<$chkcount; $i++)
{
	$MySQLiconn->query("UPDATE books SET  BTITL='$booktitle[$i]',BACNO='$id[$i]',BISSU='$state[$i]',BAUTH='$auth[$i]',BPUBL='$bookpub[$i]' WHERE BACNO=".$id[$i]);
}
header("Location: admin-index.php ");
?>