//add dan edit matter lumpsum
	function saveLumpsum(){
		
		if(save_method == 'add'){
			url = "<?php echo site_url('matter/add_record_lumpsum'); ?>";
		}else{
			url = "<?php echo site_url('matter/edit_record_lumpsum'); ?>";
		}

		 $.ajax({
	            url : url,
	            type: "POST",
	            data: $('#formLumpsum').serialize(),
	            dataType: "JSON",
	            success: function(data)
	            {
	               //if success close modal and reload ajax table
	               $('#modalLumpsum').modal('hide');		               
	               window.location = "<?php echo site_url('matter/index/1'); ?>";               
	            },
	            error: function (jqXHR, textStatus, errorThrown)
	            {
	                alert('Error adding / update data');
	            }
        	});
		
	}
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

	function edit_lumpsum(id){
		save_method = 'edit';		
		$('.modal-title').text('Edit Matter');
		$('[name="btnSubmitLumpsum"]').text('Update');      	

      	$.ajax({
				url:"<?php echo site_url('matter/get_record'); ?>/"+id,
				type: "GET",
				dataType: "JSON",
				success: function(data){
					$('[name="txt_id_matter"]').val(data.id_matter);
					$('[name="txt_id_matter_disabled"]').val(data.id_matter);
					$('[name="combo_client"]').val(data.id_client);
					$('[name="txt_matter"]').val(data.matter);
					$('[name="txt_open_date"]').val(data.open_date);
					$('[name="txt_close_date"]').val(data.close_date);
					$('[name="txt_success_fee"]').val(data.success_fee);
					$('[name="txt_term1"]').val(data.term1);
					$('[name="txt_term2"]').val(data.term2);
					$('[name="txt_term3"]').val(data.term3);
					$('[name="txt_desc_term1"]').val(data.desc_term1);
					$('[name="txt_desc_term2"]').val(data.desc_term2);
					$('[name="txt_desc_term3"]').val(data.desc_term3);
					$('[name="txt_keterangan"]').val(data.description);
								
					
					$('html, body').animate({ scrollTop: 0 }, 'fast');
					$('#modalLumpsum').modal('show'); 
				}
			})
	}
	//add dan edit matter lumpsum