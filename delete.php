<?php
    include 'classes/gestion_absence.class.php';
    $gestion_absence = new Gestion_absence;
    $gestion_absence->deleteGestion_absences($_GET['id']);
    header('Location:archiver.php?notif=delete');