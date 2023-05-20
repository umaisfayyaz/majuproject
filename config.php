<?php
session_start();
include "connect.php";
if (!$_SESSION['fname']) {
    echo '<script>window.location.replace("login.php");</script>';
}
 ?>