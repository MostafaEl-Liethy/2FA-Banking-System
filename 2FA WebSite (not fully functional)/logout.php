<?php
ob_start();
session_start();
include_once("includes/functions.php");
session_destroy();
header("refresh:0;url=index.php");
?>