<?php

ob_start();
session_start();
include_once("../../includes/functions.php");

$imageURL =  $_POST['file22'] ;

$image = imagecreatefrompng($imageURL);
imagefilter($image, IMG_FILTER_GRAYSCALE);
imagepng($image, "captured/".time().'.gif');
imagedestroy($image);

/*if(copy($imageURL,"captured/".time().'.jpg'))
	{
		//ECHO "DONE";
	}
else
	{
		//ECHO "SO SORRY";
	}*/
?>