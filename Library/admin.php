<?php
// this will trigger when submit button click
if(isset($_POST['submit'])){

    $db = new mysqli("localhost","sa","root","movedb");

    // create query
    $query = "SELECT * FROM admin WHERE username='".$_POST['name']."' AND password='".$_POST['pwd']."'";

    // execute query
    $sql = $db->query($query);
    // num_rows will count the affected rows base on your sql query. so $n will return a number base on your query
    $n = $sql->num_rows;

    // if $n is > 0 it mean their is an existing record that match base on your query above
    if($n > 0){

        header("location:/test/admin-index.php");
    } else {

        echo "<script type='text/javascript'>alert('UserName & password Incorrect ')</script>";

    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>K.S.R College of Engineering</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css" />
        <script src="jquery.js" type="text/javascript"></script>
        <script src="js-script.js" type="text/javascript"></script>

</head>
<body>

<div class="jumbotron">
    <h1><center>K.S.R College of Engineering </center></h1>
</div>
<div class="container ">
    <div class="row">
        <div class="">
            <form action="" method="post">
                <center>
                    <h2 class="">Admin Login</h2>
                    <br>
                    <span><i class="glyphicon glyphicon-user"></i></span>
                    <label><input type="text" class="form-control" name="name" placeholder="Username" required="*"></label>
                </center>
        </div>
        <br>
        <div class="">
            <center>
                <span><i class="glyphicon glyphicon-lock"></i></span>
                <label><input type="password" class="form-control" name="pwd" placeholder="Password" required="*"></label>
            </center>
        </div>
        <br>
        <div class="">
            <center>
                <button type="submit" class="btn btn-primary" name="submit" id="login">Login</button>
            </center>
        </div>
        </form>
    </div>
</div>

<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>