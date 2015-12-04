function add_lumpsum(){
		save_method = 'add';
		$('#formLumpsum')[0].reset(); // reset form on modals
      	$('#modalLumpsum').modal('show'); 
      	// show bootstrap modal      	
      	var id_matter = generateUUID();
      	var textbox = document.getElementById('txt_id_matter');
      	var textbox2 = document.getElementById('txt_id_matter_disabled');
	    textbox.value = id_matter;
	    textbox2.value = id_matter;

	}

	function add_hourly(){		
		save_method = 'add';
		$('#formHourly')[0].reset(); // reset form on modals
		$('html, body').animate({ scrollTop: 0 }, 'fast');
      	$('#modalHourly').modal('show'); 
      	// show bootstrap modal      	
      	
      	var id_matter = generateUUID();
      	var textbox = document.getElementById('txt_id_matter_h');
      	var textbox2 = document.getElementById('txt_id_matter_h_disabled');
	    textbox.value = id_matter;
	    textbox2.value = id_matter;
	}

	function add_retainer(){		
		save_method = 'add';
		$('#formRetainer')[0].reset(); // reset form on modals
		$('html, body').animate({ scrollTop: 0 }, 'fast');
      	$('#modalRetainer').modal('show'); 
      	// show bootstrap modal      	      	

	    var id_matter = generateUUID();
      	var textbox = document.getElementById('txt_id_matter_r');
      	var textbox2 = document.getElementById('txt_id_matter_r_disabled');
	    textbox.value = id_matter;
	    textbox2.value = id_matter;

	}

	function add_successfee(){		
		save_method = 'add';
		$('#formSuccessfee')[0].reset(); // reset form on modals
		$('html, body').animate({ scrollTop: 0 }, 'fast');
      	$('#modalSuccessfee').modal('show'); 
      	// show bootstrap modal      	      	

	    var id_matter = generateUUID();
      	var textbox = document.getElementById('txt_id_matter_s');
      	var textbox2 = document.getElementById('txt_id_matter_s_disabled');
	    textbox.value = id_matter;
	    textbox2.value = id_matter;

	}

	function add_probono(){		
		save_method = 'add';
		$('#formProbono')[0].reset(); // reset form on modals
		$('html, body').animate({ scrollTop: 0 }, 'fast');
      	$('#modalProbono').modal('show'); 
      	// show bootstrap modal      	      	

	    var id_matter = generateUUID();
      	var textbox = document.getElementById('txt_id_matter_p');
      	var textbox2 = document.getElementById('txt_id_matter_p_disabled');
	    textbox.value = id_matter;
	    textbox2.value = id_matter;

	}

	function add_project(){		
		save_method = 'add';
		$('#formProject')[0].reset(); // reset form on modals
		$('html, body').animate({ scrollTop: 0 }, 'fast');
      	$('#modalProject').modal('show'); 
      	// show bootstrap modal      	
      	
      	var id_matter = generateUUID();
      	var textbox = document.getElementById('txt_id_matter_pr');
      	var textbox2 = document.getElementById('txt_id_matter_pr_disabled');
	    textbox.value = id_matter;
	    textbox2.value = id_matter;
	}