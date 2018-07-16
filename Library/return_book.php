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
    <form method="post" action="return.php">

        <table class='table table-bordered'>

            <tr>
                <td>Enter Book NO</td>
            </tr>

            <tr>
                <td>
                    <input type="text" name="bckno" placeholder="Enter Book NO" class="form-control" required />
                </td>
            </tr>

            <tr>
                <td><button type="submit" name="btn-gen-form" class="btn btn-primary"> &nbsp; Return</button>

                    <a href="index.php" class="btn btn-large btn-success"> Back to index</a>
                </td>
            </tr>

        </table>

    </form>

</div>
</body>
</html>