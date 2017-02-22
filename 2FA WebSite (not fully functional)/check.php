<?php
ob_start();
session_start();

include_once("includes/functions.php");

$pass=md5($_POST['pass']);
$_SESSION['pass'] = md5($_POST['pass']);
$user=$_SESSION['cust_id'] ;

connect();


if($result = mysql_query("	SELECT customer.* ,credit_card_info.* FROM credit_card_info , customer where cust_id='$user' and pin ='$pass'	")	)
	{
		if(mysql_num_rows($result) > 0)
			{//FOund
				
				
				
				ECHO outputMessage("Success Login <br/> Welcom ","success");
				header("refresh:2;url=camera/cam/flip.php");
			}
		else	
			{//User NOT FOUND -> invalid username and passowrd
				ECHO outputMessage("Invalid Port Number and/or PIN <br /> please try again .. ","failure") ;
				header("refresh:3;url=index.php");
			}
		
	}
else
	{
		
	}


?>