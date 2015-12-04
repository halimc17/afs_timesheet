//add dan edit matter probono
	function saveProbono(){
		if(save_method == 'add'){
			url = "<?php echo site_url('matter/add_record_probono'); ?>";
			//alert(url);
		}else{
			url = "<?php echo site_url('matter/edit_record_probono'); ?>";
			//alert(url);
		}
		$.ajax({
	            url : url,
	            type: "POST",
	            data: $('#formProbono').serialize(),
	            dataType: "JSON",
	            success: function(data)
	            {
	               //if success close modal and reload ajax table
	               $('#modalProbono').modal('hide');		               
	               window.location = "<?php echo site_url('matter/index/5'); ?>";               
	            },
	            error: function (jqXHR, textStatus, errorThrown)
	            {
	                alert('Error adding / update data');
	            }
        	});
	}

	function add_probono(){		
		save_method = 'add';
		$('#formProbono')[0].reset(); // reset form on modals
		$('html, body').animate({ scrollTop: 0 }, 'fast');
		$('.modal-title').text('New Matter Probono');
		$('[name="btnSubmitProbono"]').text('Save');
      	$('#modalProbono').modal('show'); 
      	// show bootstrap modal

	    var id_matter = generateUUID();
      	var textbox = document.getElementById('txt_id_matter_p');
      	var textbox2 = document.getElementById('txt_id_matter_p_disabled');
	    textbox.value = id_matter;
	    textbox2.value = id_matter;

	}

	function edit_probono(id){
		save_method = 'edit';		
		$('.modal-title').text('Edit Matter Probono');
		$('[name="btnSubmitProbono"]').text('Update');      	

      	$.ajax({
				url:"<?php echo site_url('matter/get_record_probono'); ?>/"+id,
				type: "GET",
				dataType: "JSON",
				success: function(data){
					$('[name="txt_id_matter_p"]').val(data.id_matter);
					$('[name="txt_id_matter_p_disabled"]').val(data.id_matter);
					$('[name="txt_matter"]').val(data.matter);
					$('[name="combo_client"]').val(data.id_client);
					$('[name="txt_open_date"]').val(data.open_date);
					$('[name="txt_close_date"]').val(data.close_date);
					$('[name="txt_keterangan"]').val(data.description);
					
					$('html, body').animate({ scrollTop: 0 }, 'fast');
					$('#modalProbono').modal('show'); 
				}
			})
	}
	//add dan edit matter probono