<?php
session_start();
session_destroy();
header("location:masterpage.php");
?>