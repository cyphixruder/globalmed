<?php
    session_start();
    session_destroy();
    header('Location:patients-sign-in.php');
?>  