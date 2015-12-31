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

function billableHour($minutes, $idPayment, $idMatter, $idJabatan){
	if($idPayment == 2){
		$bill = $minutes + 300;

		$ci =& get_instance();
		$class = $ci->db->query("SELECT * FROM tb_matter_hourly WHERE id_matter = '".$idMatter."'");
	    $class = json_encode($class->row());		
		$row = json_decode($class);

		$rateManagingPartner = $row->{'managing_partner'}; 
		$ratePartner = $row->{'partner'}; 
		$rateJuniorPartner = $row->{'junior_partner'}; 
		$rateSeniorAssociate = $row->{'senior_associate'}; 
		$rateMidAssociate = $row->{'mid_associate'}; 
		$rateJuniorAssociate = $row->{'junior_associate'};


		switch ($idJabatan) {
		    case 1: //managing partner
		        $bill = ($rateManagingPartner/60)*$minutes;
		        break;
		    case 2: //partner
		        $bill = ($ratePartner/60)*$minutes;
		        break;
		    case 3: //mid-associate
		        $bill = ($rateMidAssociate/60)*$minutes;
		        break;
		    case 4: //junior Associate
		    	$bill = ($rateJuniorAssociate/60)*$minutes;
		    	break;
		    case 5: // Senior Associate
		    	$bill = ($rateSeniorAssociate/60)*$minutes;
		    	break;
		    case 13: // Senior Associate
		    	$bill = ($rateJuniorPartner/60)*$minutes;
		    	break;
		    case 11: //paralegal
		    	$bill = (120/60)*$minutes;
		    	break;
		    default:
		        echo "$0";
		}
	}else{
		$bill = 0;
	}

	return round($bill);
}

function formatTanggal($date){

	if($date == '0000-00-00'){
		
		$date = 'Not Defined';
		return $date;
	}else{
		$mysql_date = $date;   // date in Y-m-d format as MySQL stores it
		$date_obj = date_create_from_format('Y-m-d',$mysql_date);
		$date = date_format($date_obj, 'd-m-Y');	

		return $date;
	}
	
}


 ?>