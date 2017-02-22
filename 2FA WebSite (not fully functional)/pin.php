<?php
ob_start();
session_start();

include_once("includes/functions.php");

$cust_id = $_POST['cust_id'];
$_SESSION['cust_id'] = $_POST['cust_id'];
?>
<html>
    <head>
        <title> Log In </title>
    </head>
    <style>
        #btnlg{
            width:70px;
            height:auto;
            text-align:center;
            text-decoration: none;
            display: inline-block;
            font-size: 20px;
            font-family:Times New Roman;}
        body {
                    background-image: url("img/log.jpg");
                    background-repeat:no-repeat;
                    background:contain;
                    background-position:center;
                    
                }
    </style>
    <body topmargin='200px' leftmargin='0' bottommargin='0' rightmargin='0' >
        <h1 align="center"> <font color="#FF0000"> Please Enter Your PIN </font> </h1>
        <form action="check.php" method="post">
            <div style="text-align: center;">
                <input type="password" name="pass" placeholder="Enter Pin ..." size="30px"> <br/> <br/>
                <input type="button" value="Back" id="btnlg" onclick="history.go(-1);"/>
                
                <input type="submit" value="Next" id="btnlg">
            </div>

        </form>
    </body>
</html>

