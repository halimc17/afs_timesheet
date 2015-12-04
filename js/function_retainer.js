// add dan edit matter retainer
	function saveRetainer(){
		if(save_method == 'add'){
			url = "<?php echo site_url('matter/add_record_retainer'); ?>";
		}else{
			url = "<?php echo site_url('matter/edit_record_retainer'); ?>";
		}
		$.ajax({
	            url : url,
	            type: "POST",
	            data: $('#formRetainer').serialize(),
	            dataType: "JSON",
	            success: function(data)
	            {
	               //if success close modal and reload ajax table
	               $('#modalRetainer').modal('hide');		               
	               window.location = "<?php echo site_url('matter/index/3'); ?>";               
	            },
	            error: function (jqXHR, textStatus, errorThrown)
	            {
	                alert('Error adding / update data');
	            }
        	});
	}

	function add_retainer(){		
		save_method = 'add';
		$('#formRetainer')[0].reset(); // reset form on modals
		$('html, body').animate({ scrollTop: 0 }, 'fast');
		$('[name="btnSubmitRetainer"]').text('Save');      	
      	$('#modalRetainer').modal('show'); 
      	// show bootstrap modal      	      	

	    var id_matter = generateUUID();
      	var textbox = document.getElementById('txt_id_matter_r');
      	var textbox2 = document.getElementById('txt_id_matter_r_disabled');
	    textbox.value = id_matter;
	    textbox2.value = id_matter;

	}

	function edit_retainer(id){
		save_method = 'edit';		
		$('.modal-title').text('Edit Matter Retainer');
		$('[name="btnSubmitRetainer"]').text('Update');      	

      	$.ajax({
				url:"<?php echo site_url('matter/get_record_retainer'); ?>/"+id,
				type: "GET",
				dataType: "JSON",
				success: function(data){
					$('[name="txt_id_matter_r"]').val(data.id_matter);
					$('[name="txt_id_matter_r_disabled"]').val(data.id_matter);
					$('[name="txt_matter"]').val(data.matter);
					$('[name="combo_client"]').val(data.id_client);
					$('[name="txt_open_date"]').val(data.open_date);
					$('[name="txt_close_date"]').val(data.close_date);
					$('[name="txt_jangka_waktu"]').val(data.jangka_waktu);
					$('[name="txt_biaya"]').val(data.biaya);
					$('[name="txt_jam"]').val(data.jam);
					$('[name="txt_disc"]').val(data.disc);
					$('[name="txt_keterangan"]').val(data.description);
					
								
					
					$('html, body').animate({ scrollTop: 0 }, 'fast');
					$('#modalRetainer').modal('show'); 
				}
			})
	}
	// add dan edit matter retainer