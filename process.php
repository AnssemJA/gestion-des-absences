<?php 
require('dbconnect.php');
session_start();
    if(isset($_POST['Login']))
    {
       if(empty($_POST['UName']) || empty($_POST['Password']))
       {
            header("location:login.php?Empty= Veuillez remplir les blancs");
       }
       else
       {
            $query="select * from authen where login='".$_POST['UName']."' and password='".$_POST['Password']."'";
            $result=mysqli_query($con,$query);

            if(mysqli_fetch_assoc($result))
            {
                header("location:index.php");
            }
            else
            {
                header("location:login.php?Invalid= Veuillez saisir un adresse e-mail et un mot de passe corrects ");
            }
       }
    }
    else
    {
        echo 'Not Working Now Guys';
    }

?>