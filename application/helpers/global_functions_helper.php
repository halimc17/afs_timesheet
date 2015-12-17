<?php 
function timeDiff($firstTime,$lastTime)
{

	// convert to unix timestamps
	$firstTime=strtotime($firstTime);
	$lastTime=strtotime($lastTime);

	// perform subtraction to get the difference (in seconds) between times
	$timeDiff=($lastTime-$firstTime)/60;

	// return the difference
	return $timeDiff;

	//Usage :
	//echo timeDiff("2002-04-16 10:00:00","2002-03-16 18:56:32");
}


 ?>