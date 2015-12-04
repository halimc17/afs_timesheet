//add dan edit matter successfee
	function saveSuccessfee(){
		if(save_method == 'add'){
			url = "<?php echo site_url('matter/add_record_successfee'); ?>";
		}else{
			url = "<?php echo site_url('matter/edit_record_successfee'); ?>";
		}
		$.ajax({
	            url : url,
	            type: "POST",
	            data: $('#formSuccessfee').serialize(),
	            dataType: "JSON",
	            success: function(data)
	            {
	               //if success close modal and reload ajax table
	               $('#modalSuccessfee').modal('hide');		               
	               window.location = "<?php echo site_url('matter/index/4'); ?>";               
	            },
	            error: function (jqXHR, textStatus, errorThrown)
	            {
	                alert('Error adding / update data');
	            }
        	});
	}

	function add_successfee(){		
		save_method = 'add';
		$('#formSuccessfee')[0].reset(); // reset form on modals
		$('html, body').animate({ scrollTop: 0 }, 'fast');
		$('.modal-title').text('New Matter Success Fee');
		$('[name="btnSubmitSuccessfee"]').text('Save');
      	$('#modalSuccessfee').modal('show'); 
      	// show bootstrap modal      	      	

	    var id_matter = generateUUID();
      	var textbox = document.getElementById('txt_id_matter_s');
      	var textbox2 = document.getElementById('txt_id_matter_s_disabled');
	    textbox.value = id_matter;
	    textbox2.value = id_matter;

	}

	function edit_successfee(id){
		save_method = 'edit';		
		$('.modal-title').text('Edit Matter Success Fee');
		$('[name="btnSubmitSuccessfee"]').text('Update');      	

      	$.ajax({
				url:"<?php echo site_url('matter/get_record_successfee'); ?>/"+id,
				type: "GET",
				dataType: "JSON",
				success: function(data){
					$('[name="txt_id_matter_s"]').val(data.id_matter);
					$('[name="txt_id_matter_s_disabled"]').val(data.id_matter);
					$('[name="txt_matter"]').val(data.matter);
					$('[name="combo_client"]').val(data.id_client);
					$('[name="txt_open_date"]').val(data.open_date);
					$('[name="txt_close_date"]').val(data.close_date);
					$('[name="txt_biaya"]').val(data.biaya);
					$('[name="txt_keterangan"]').val(data.description);
					
					$('html, body').animate({ scrollTop: 0 }, 'fast');
					$('#modalSuccessfee').modal('show'); 
				}
			})
	}
	//add dan edit matter successfee