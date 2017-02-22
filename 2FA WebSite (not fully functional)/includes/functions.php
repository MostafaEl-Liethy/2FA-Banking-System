<?php
ob_start();
session_start();

include_once("config.php");
#################################################################
	

function loginOrWelcome()
	{
		if(isLogged())
			{//Is logged in - show welcxome
				welcome();
			}
		else
			{//User is NOT logged in - show login form
				drawLoginForm();
			}	
	}	

function isLogged()
	{
		if($_SESSEION['loggedIn'] == 'yes')
			{//Is logged in - show welcxome
				return true ;
			}
		else
			{//User is NOT logged in - show login form
				return false ;
			}
	}	
	
function connect()
	{
		global $dbHost,$dbUsername,$dbPassword,$dbName ;	
		@mysql_connect($dbHost,$dbUsername,$dbPassword) or die(outputMessage("Connection Error",'failure'));
		
		mysql_select_db($dbName) or die(outputMessage("Selection Error",'failure'));
		return true ;
	}


function outputMessage($message = '',$type='success')
	{
		if($type != 'success')
			{//Failure
				$style= "line-height:50px;width:90%;height:50px;text-align:center;font-weight:bold;background-color:#FFFFFF;color:#ff0000;border:1px solid red;border-radius:10px;margin:auto;";
			}
		else
			{//Success
				$style= "line-height:50px;width:90%;height:50px;text-align:center;font-weight:bold;background-color:#FFFFFF;color:#93ff26;border:1px solid #238c00;border-radius:10px;margin:auto;";
			}	
			
		return "
				<div style='$style'>
					$message
				</div>
			";
	}

	













	

?>















