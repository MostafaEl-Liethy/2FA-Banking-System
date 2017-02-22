<?php
ob_start();
session_start();
include_once("../../includes/functions.php");
?>

<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Log In</title>
	<style type="text/css">
		body { font-family: Helvetica, sans-serif; }
		h2, h3 { margin-top:0; }
		h1 {margin-top: 60px;}
		
		form { margin-top: 15px; }
		form > input { margin-right: 15px; }
		#results { float:right; margin:20px; padding:20px; border:1px solid; background:#ccc; }
	</style>
</head>
<style>

        body {
                    background-image: url("../../img/log.jpg");
                    background-repeat:no-repeat;
                    background:contain;
                    background-position:center;
                    
                }
		#m{
            width:auto;
            height:auto;
            text-align:center;
            text-decoration: none;
            display: inline-block;
            font-size: 20px;
            font-family:Times New Roman;}
		
    </style>
<body>
	
	
	<div style="text-align: center;">
		<h1 style="color:#FF0000;font-weight:bold;font-family:Times New Roman;">Please Stand Front Of Camera</h1>
		
		<div id="my_camera"></div>
		
		<!-- First, include the Webcam.js JavaScript Library -->
		<script type="text/javascript" src="../webcam.js"></script>
		
		<!-- Configure a few settings and attach camera -->
		<script language="JavaScript">
			Webcam.set({
				
				width: 320,
				height: 243,
				image_format: 'gif',
				jpeg_quality: 90,
				flip_horiz: true
			});
			Webcam.attach( '#my_camera' );
		</script>
		
		<!-- A button for taking snaps -->
		<form action="../../welcom.php" method="post">
			<input type="button" value="Back" id="m" onclick="history.go(-1);"/>
			<input type=button value="Take My Photo" onClick="take_snapshot()" id="m">
			<input type="submit" value="Next" id="m">
		</form>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<!-- Code to handle taking the snapshot and displaying it locally -->
		<script language="JavaScript">
			function take_snapshot() {
				// take snapshot and get image data
				Webcam.snap( function(data_uri) {
					// display results in page
					
					/*
					document.getElementById('results').innerHTML = 
						'<h2>Here is your image:</h2>' + 
						'<img src="'+data_uri+'"/>';
					*/	
					
						
					//ajax call to a php file and pass the image url
					$("document").ready(function(){
										var form_data = new FormData();                  
										form_data.append("file22", data_uri)
										$.ajax({
													url: "mohammed.php",
													dataType: 'script',
													cache: false,
													contentType: false,
													processData: false,
													data: form_data,                         
													type: 'post',
													success: function(result){
														//alert(result); 
													}
										 });
								
						
						});
				} );
			}
		</script>
	</div>
</body>
</html>
