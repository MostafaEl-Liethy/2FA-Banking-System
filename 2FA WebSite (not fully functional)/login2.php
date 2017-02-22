<?php header( "refresh:3;url=camera/cam/flip.php" );?>
<?php
ob_start();
session_start();
include_once("includes/functions.php");
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Log In </title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
    </head>
    <style>
        h1{
            margin-top: 60px;
            font-family:Times New Roman;
        }
        #btnlg{
            margin-top: 30px;
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
        .loader {
                margin: auto;
                border: 16px solid #f3f3f3;
                border-radius: 50%;
                border-top: 16px solid red;
                border-bottom: 16px solid red;
                width: 200px;
                height: 200px;
                -webkit-animation: spin 4s linear infinite;
                animation: spin 4s linear infinite;
              }
              
              @-webkit-keyframes spin {
                0% { -webkit-transform: rotate(0deg); }
                100% { -webkit-transform: rotate(360deg); }
              }
              
              @keyframes spin {
                0% { transform: rotate(0deg); }
                100% { transform: rotate(360deg); }
              }
              
        
    </style>
    <body topmargin='200px' leftmargin='0' bottommargin='0' rightmargin='0' >
        <h1 align="center" > <font color="#FF0000"> Please Put Your Device </font> </h1>
        
        <div class="loader"></div>
             
        <form action="camera\cam\flip.php" method="post">
            <div style="text-align: center;">
                <input type="button" value="Back" id="btnlg" onclick="history.go(-1);"/>
                <input type="submit" value="Next" id="btnlg">
            </div>

        </form>
        
    </body>
</html>

