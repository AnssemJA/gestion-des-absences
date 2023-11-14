<?php

    $con=mysqli_connect('localhost','root','','gestion_employe');

    if(!$con)
    {
        die(' Please Check Your Connection'.mysqli_error($con));
    }
?>