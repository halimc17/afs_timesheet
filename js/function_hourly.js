// add dan edit matter hourly
	function saveHourly(){
		if(save_method == 'add'){
			url = "<?php echo site_url('matter/add_record_hourly'); ?>";
			//alert(url);
		}else{
			url = "<?php echo site_url('matter/edit_record_hourly'); ?>";
			//alert(url);
		}

		$.ajax({
	            url : url,
	            type: "POST",
	            data: $('#formHourly').serialize(),
	            dataType: "JSON",
	            success: function(data)
	            {
	               //if success close modal and reload ajax table
	               $('#modalHourly').modal('hide');		               
	               window.location = "<?php echo site_url('matter/index/2'); ?>";               
	            },
	            error: function (jqXHR, textStatus, errorThrown)
	            {
	                alert('Error adding / update data');
	            }
        	});
	}

	function add_hourly(){		
		save_method = 'add';
		$('#formHourly')[0].reset(); // reset form on modals
		$('html, body').animate({ scrollTop: 0 }, 'fast');
		$('.modal-title').text('Add New Matter');
		$('[name="btnSubmitHourly"]').text('Save');
      	$('#modalHourly').modal('show'); 
      	// show bootstrap modal      	
      	
      	var id_matter = generateUUID();
      	var textbox = document.getElementById('txt_id_matter_h');
      	var textbox2 = document.getElementById('txt_id_matter_h_disabled');
	    textbox.value = id_matter;
	    textbox2.value = id_matter;
	}

	function edit_hourly(id){
		save_method = 'edit';		
		$('.modal-title').text('Edit Matter');
		$('[name="btnSubmitHourly"]').text('Update');      	

      	$.ajax({
				url:"<?php echo site_url('matter/get_record_hourly'); ?>/"+id,
				type: "GET",
				dataType: "JSON",
				success: function(data){
					$('[name="txt_id_matter_h"]').val(data.id_matter);
					$('[name="txt_id_matter_h_disabled"]').val(data.id_matter);
					$('[name="combo_client"]').val(data.id_client);
					$('[name="txt_matter"]').val(data.matter);
					$('[name="txt_open_date"]').val(data.open_date);
					$('[name="txt_close_date"]').val(data.close_date);
					$('[name="txt_success_fee"]').val(data.success_fee);
					$('[name="txt_managing_partner"]').val(data.managing_partner);
					$('[name="txt_partner"]').val(data.partner);
					$('[name="txt_junior_partner"]').val(data.junior_partner);
					$('[name="txt_senior_associate"]').val(data.senior_associate);
					$('[name="txt_mid_associate"]').val(data.mid_associate);
					$('[name="txt_junior_associate"]').val(data.junior_associate);
					$('[name="txt_disc"]').val(data.disc);
					$('[name="txt_keterangan"]').val(data.description);
								
					
					$('html, body').animate({ scrollTop: 0 }, 'fast');
					$('#modalHourly').modal('show'); 
				}
			})
	}
	// add dan edit matter hourly