

<?php

    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "Anil@2004";
    $db_name = "acxiom";


    try{
        $conn = mysqli_connect($db_server,$db_user,$db_pass,$db_name);
    }
    catch(mysqli_sql_exception)
    {
echo "could not connect";
    }
?>