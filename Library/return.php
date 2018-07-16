<?php

error_reporting(0);

include_once 'dbcon.php';

$bookno = $_POST['bckno'];

if(isset($bookno))
{



        $sql=$MySQLiconn->query("DELETE FROM bookissu WHERE BACNO= ".$bookno);
    }

    if($sql=true)
    {
        $sql="UPDATE books SET  BISSU ='0'WHERE BACNO=".$bookno;
        $sql = $MySQLiconn->query($sql);
        ?>
        <script>
            alert('<?php ?> Book Returned !!!');
            window.location.href='return_book.php';
        </script>


        <?php
    }
    else
    {

        ?>
        <script>
            alert('Error while Returning , TRY AGAIN');
            window.location.href='return_book.php';
        </script>

        <?php

}


?>