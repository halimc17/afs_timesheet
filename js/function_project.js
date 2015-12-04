//add dan edit matter project
	function saveProject(){
		if(save_method == 'add'){
			url = "<?php echo site_url('matter/add_record_project'); ?>";
			//alert(url);
		}else{
			url = "<?php echo site_url('matter/edit_record_project'); ?>";
			//alert(url);
		}
		$.ajax({
	            url : url,
	            type: "POST",
	            data: $('#formProject').serialize(),
	            dataType: "JSON",
	            success: function(data)
	            {
	               //if success close modal and reload ajax table
	               $('#modalProject').modal('hide');		               
	               window.location = "<?php echo site_url('matter/index/6'); ?>";               
	            },
	            error: function (jqXHR, textStatus, errorThrown)
	            {
	                alert('Error adding / update data');
	            }
        	});
	}

	function add_project(){		
		save_method = 'add';
		$('#formProject')[0].reset(); // reset form on modals
		$('html, body').animate({ scrollTop: 0 }, 'fast');
		$('.modal-title').text('Add New Matter Project');
		$('[name="btnSubmitProject"]').text('Save');
      	$('#modalProject').modal('show'); 
      	// show bootstrap modal      	
      	
      	var id_matter = generateUUID();
      	var textbox = document.getElementById('txt_id_matter_pr');
      	var textbox2 = document.getElementById('txt_id_matter_pr_disabled');
	    textbox.value = id_matter;
	    textbox2.value = id_matter;
	}

	function edit_project(id){
		save_method = 'edit';		
		$('.modal-title').text('Edit Matter Project');
		$('[name="btnSubmitProject"]').text('Update');      	

      	$.ajax({
				url:"<?php echo site_url('matter/get_record_project'); ?>/"+id,
				type: "GET",
				dataType: "JSON",
				success: function(data){
					$('[name="txt_id_matter_pr"]').val(data.id_matter);
					$('[name="txt_id_matter_pr_disabled"]').val(data.id_matter);
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
					$('#modalProject').modal('show'); 
				}
			})
	}
	//add dan edit matter project