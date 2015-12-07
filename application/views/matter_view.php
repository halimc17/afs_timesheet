<?php $this->load->view('head_view'); ?>

<body class="page-body" data-url="http://neon.dev">

<div class="page-container horizontal-menu">

<script type="text/javascript">
	var save_method;

	jQuery(document).ready(function($)
	{
		$('[name="btnSubmitLumpsum"]').button().on( "click", function() {			
			saveLumpsum();
		});

		$('[name="btnEditActionLumpsum"]').button().on( "click", function() {	
			var id = $(this).attr("id");		
			edit_lumpsum(id);
		});

		$('[name="btnSubmitHourly"]').button().on( "click", function() {			
			saveHourly();
		});

		$('[name="btnEditActionHourly"]').button().on( "click", function() {	
			var id = $(this).attr("id");		
			edit_hourly(id);
		});

		$('[name="btnSubmitRetainer"]').button().on( "click", function() {			
			saveRetainer();
		});

		$('[name="btnEditActionRetainer"]').button().on( "click", function() {	
			var id = $(this).attr("id");		
			edit_retainer(id);
		});

		$('[name="btnSubmitSuccessfee"]').button().on( "click", function() {			
			saveSuccessfee();
		});

		$('[name="btnEditActionSuccessfee"]').button().on( "click", function() {	
			var id = $(this).attr("id");		
			edit_successfee(id);
		});

		$('[name="btnSubmitProbono"]').button().on( "click", function() {			
			saveProbono();
		});

		$('[name="btnEditActionProbono"]').button().on( "click", function() {	
			var id = $(this).attr("id");		
			edit_probono(id);
		});

		$('[name="btnSubmitProject"]').button().on( "click", function() {			
			saveProject();
		});

		$('[name="btnEditActionProject"]').button().on( "click", function() {	
			var id = $(this).attr("id");		
			edit_project(id);
		});

		$('[name="btnAddSub"]').button().on( "click", function() {	
			var id = $(this).attr("id");		
			addSubMatter(id);
		});


		var table = $("#table-lumpsum").dataTable({
			"sPaginationType": "bootstrap",
			"sDom": "<'row'<'col-xs-6 col-left'l><'col-xs-6 col-right'<'export-data'T>f>r>t<'row'<'col-xs-6 col-left'i><'col-xs-6 col-right'p>>",
			"oTableTools": {
			},
			
		});
		
		var table2 = $("#table-hourly").dataTable({
			"sPaginationType": "bootstrap",
			"sDom": "<'row'<'col-xs-6 col-left'l><'col-xs-6 col-right'<'export-data'T>f>r>t<'row'<'col-xs-6 col-left'i><'col-xs-6 col-right'p>>",
			"oTableTools": {
			},
			
		});
		
		var table3 = $("#table-retainer").dataTable({
			"sPaginationType": "bootstrap",
			"sDom": "<'row'<'col-xs-6 col-left'l><'col-xs-6 col-right'<'export-data'T>f>r>t<'row'<'col-xs-6 col-left'i><'col-xs-6 col-right'p>>",
			"oTableTools": {
			},
			
		});
		
		var table4 = $("#table-successfee").dataTable({
			"sPaginationType": "bootstrap",
			"sDom": "<'row'<'col-xs-6 col-left'l><'col-xs-6 col-right'<'export-data'T>f>r>t<'row'<'col-xs-6 col-left'i><'col-xs-6 col-right'p>>",
			"oTableTools": {
			},
			
		});
		
		var table5 = $("#table-probono").dataTable({
			"sPaginationType": "bootstrap",
			"sDom": "<'row'<'col-xs-6 col-left'l><'col-xs-6 col-right'<'export-data'T>f>r>t<'row'<'col-xs-6 col-left'i><'col-xs-6 col-right'p>>",
			"oTableTools": {
			},
			
		});
		
		var table6 = $("#table-project").dataTable({
			"sPaginationType": "bootstrap",
			"sDom": "<'row'<'col-xs-6 col-left'l><'col-xs-6 col-right'<'export-data'T>f>r>t<'row'<'col-xs-6 col-left'i><'col-xs-6 col-right'p>>",
			"oTableTools": {
			},
			
		});
	});

	function addSubMatter(id){
		$('#modal-subMatter').modal('show'); 
	}
	
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

	function gotodelete(id){
		var a = id;		
		if(confirm('Are you sure delete this data?')){				
			window.location = "<?php echo site_url('matter/delete_record'); ?>/"+a;
		 }
	}

	function generateUUID(){
	    var d = new Date().getTime();
	    if(window.performance && typeof window.performance.now === "function"){
	        d += performance.now();; //use high-precision timer if available
	    }
	    var uuid = 'AFSxxxxx4xxxyxxxxxx'.replace(/[xy]/g, function(c) {
	        var r = (d + Math.random()*16)%16 | 0;
	        d = Math.floor(d/16);
	        return (c=='x' ? r : (r&0x3|0x8)).toString(16);
	    });

	    return uuid.toUpperCase();	   
	}
		
</script>	
	
	<?php $this->load->view('topheader_view'); ?>	
	<div class="main-content">
		<?php $active = $this->uri->segment(3); ?>
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default panel-shadow" data-collapsed="0"><!-- to apply shadow add class "panel-shadow" -->
					<!-- panel head -->
					<div class="panel-heading">
						<div class="panel-title">Matter List</div>
					</div>
					<!-- panel body -->
					<div class="panel-body">
						<div class="col-md-12">	
							<div class="col-md-12">
		
								<ul class="nav nav-tabs bordered"><!-- available classes "bordered", "right-aligned" -->
									<li <?php if(($active == 1) OR ($active == "")){echo "class='active'";} ?>>
										<a href="#lumpsum" data-toggle="tab">
											<span class="visible-xs"><i class="entypo-home"></i></span>
											<span class="hidden-xs">LUMPSUM</span>
										</a>
									</li>
									<li <?php if($active == 2){echo "class='active'";} ?>>
										<a href="#hourly" data-toggle="tab">
											<span class="visible-xs"><i class="entypo-user"></i></span>
											<span class="hidden-xs">HOURLY</span>
										</a>
									</li>
									<li <?php if($active == 3){echo "class='active'";} ?>>
										<a href="#retainer" data-toggle="tab">
											<span class="visible-xs"><i class="entypo-mail"></i></span>
											<span class="hidden-xs">RETAINER</span>
										</a>
									</li>
									<li <?php if($active == 4){echo "class='active'";} ?>>
										<a href="#success_fee" data-toggle="tab">
											<span class="visible-xs"><i class="entypo-cog"></i></span>
											<span class="hidden-xs">SUCCESS FEE</span>
										</a>
									</li>
									<li <?php if($active == 5){echo "class='active'";} ?>>
										<a href="#probono" data-toggle="tab">
											<span class="visible-xs"><i class="entypo-cog"></i></span>
											<span class="hidden-xs">PROBONO</span>
										</a>
									</li>
									<li <?php if($active == 6){echo "class='active'";} ?>>
										<a href="#project" data-toggle="tab">
											<span class="visible-xs"><i class="entypo-cog"></i></span>
											<span class="hidden-xs">PROJECT</span>
										</a>
									</li>
								</ul>
								
								<div class="tab-content">
									<div class="tab-pane <?php if(($active == 1) OR ($active == "")){echo "active";} ?>" id="lumpsum">
										<div class="row">
											<div class="col-md-12">	
												<button type="button" class="btn btn-info" onclick="add_lumpsum()" style="float:right;">+ Add New</button>
											</div>
										</div>
										<br />
										<div class="row">
											<!--<div class="scrollable" data-height="120">-->											
											<div class="col-md-12">	
															<table class="table table-bordered datatable" id="table-lumpsum">
																<thead>
																	<tr>
																		<th>No</th>
																		<th>Id Matter</th>																		
																		<th>Client</th>
																		<th>Matter</th>
																		<th>Open Date</th>
																		<th>Close Date</th>
																		<th>Success Fee</th>
																																
																		<th>Sub Matter</th>
																		<th>Assign</th>
																		<th>Active</th>
																		<th style="width:160px;">Action</th>
																	</tr>
																</thead>
																<tbody>	
																<?php 
																$counter = 1;
																if(isset($records)){
																	foreach($records as $row){ ?>
																	<tr class="odd gradeX">
																		<td><?php echo $counter; ?></td>																				
																		<td><a href="<?php echo site_url('sub_matter/get_record/')."/".$row->id_matter."/".$row->id_payment; ?>"><?php echo $row->id_matter; ?></a></td>																				
																		<td><?php echo $row->nama_client; ?></td>																				
																		<td><?php echo $row->matter; ?></td>																																																																										
																		<td><?php echo $row->open_date; ?></td>																				
																		<td><?php echo $row->close_date; ?></td>																				
																		<td><?php echo number_format($row->success_fee); ?></td>																				
																																				<td>0</td>																																																																																														
																		<td align="center">
																			<a href="<?php echo site_url('matter/assign/'); ?>/<?php echo $row->id_matter; ?>">
																				<?php echo $row->assigned; ?>
																			</a>
																		</td>
																		
																		<td align="center">
																				<?php if ($row->active == 1) { ?>													
																						<button type="button" name="btnActive" class="btn btn-success" onclick="location.href='<?php echo site_url('matter/change_active/'.$row->id_matter.'/0') ?>';" />
																							<i class="entypo-check"></i>
																						</button>
																				<?php }else{ ?>
																						<button type="button" name="btnNotActive" class="btn btn-danger" onclick="location.href='<?php echo site_url('matter/change_active/'.$row->id_matter.'/1') ?>';">
																							<i class="entypo-cancel"></i>
																						</button>
																				<?php } ?>												
																		</td>
																		
																		<td>																			
																			<button type="button" name="btnEditActionLumpsum" class="btn btn-success" id="<?php echo $row->id_matter; ?>">
																				
																				<i class="entypo-pencil"></i>
																			</button>
																			
																			<button type="button" name="btnDeleteAction" onclick="gotodelete('<?php echo $row->id_matter; ?>')" class="btn btn-danger" id="1">
																			
																				<i class="entypo-trash"></i>
																			</button>																																																
																		</td>
																	</tr>
																<?php	$counter++;}
																}?>																	
																</tbody>
																<tfoot>
																	<tr>
																		<th>No</th>
																		<th>Id Matter</th>																		
																		<th>Client</th>
																		<th>Matter</th>
																		<th>Open Date</th>
																		<th>Close Date</th>
																		<th>Success Fee</th>													
																		<th>Sub Matter</th>
																		<th>Assign</th>
																		<th>Active</th>
																		<th>Action</th>
																	</tr>
																</tfoot>
															</table>
														</div>
										</div>
										
											
								
										<!--</div>-->
										
									</div>
									
									<div class="tab-pane <?php if($active == 2){echo "active";} ?>" id="hourly">
										<div class="row">
											<div class="col-md-12">	
												<button type="button" class="btn btn-info" onclick="add_hourly()" style="float:right;">+ Add New</button>
											</div>
										</div>	
										<br />
										<div class="row">
										<div class="col-md-12">	
															<table class="table table-bordered datatable" id="table-hourly">
																<thead>
																	<tr>
																		<th>No</th>
																		<th>Id Matter</th>																		
																		<th>Client</th>
																		<th>Matter</th>
																		<th>Open Date</th>
																		<th>Close Date</th>
																		
																		<th>Assign</th>
																		<th>Active</th>
																		<th style="width:160px;">Action</th>
																	</tr>
																</thead>
																<tbody>	
																<?php 
																$counter2 = 1;
																if(isset($records_hourly)){
																	foreach($records_hourly as $row2){ ?>
																	<tr class="odd gradeX">
																		<td><?php echo $counter2; ?></td>																				
																		<td><a href="<?php echo site_url('sub_matter/get_record/')."/".$row2->id_matter."/".$row2->id_payment; ?>"><?php echo $row2->id_matter; ?></a></td>
																		<td><?php echo $row2->nama_client; ?></td>																				
																		<td><?php echo $row2->matter; ?></td>																																																																										
																		<td><?php echo $row2->open_date; ?></td>																				
																		<td><?php echo $row2->close_date; ?></td>																				
																																																																										
																		<td>
																			<a href="<?php echo site_url('matter/assign/'); ?>/<?php echo $row2->id_matter; ?>">
																				<?php echo $row2->assigned; ?>
																			</a>
																		</td>																																																								
																		<td align="center"><i class="entypo entypo-check"></i></td>
																		<td class="center">
																			<button type="button" name="btnEditActionHourly" class="btn btn-success" id="<?php echo $row2->id_matter; ?>">
																				
																				<i class="entypo-pencil"></i>
																			</button>
																			<button type="button" name="btnDeleteAction" onclick="gotodelete('<?php echo $row2->id_matter; ?>')" class="btn btn-danger" id="2">
																				
																				<i class="entypo-trash"></i>
																			</button>											
																		</td>
																	</tr>
																<?php	$counter2++;}
																}?>																	
																</tbody>
																<tfoot>
																	<tr>
																		<th>No</th>
																		<th>Id Matter</th>																		
																		<th>Client</th>
																		<th>Matter</th>
																		<th>Open Date</th>
																		<th>Close Date</th>
																		
																		<th>Assign</th>
																		<th>Active</th>
																		<th>Action</th>
																	</tr>
																</tfoot>
															</table>
														</div>
										</div>
											
											
									</div>
									
									<div class="tab-pane <?php if($active == 3){echo "active";} ?>" id="retainer">
											
											<div class="row">
												<div class="col-md-12">	
													<button type="button" class="btn btn-info" onclick="add_retainer()" style="float:right;">+ Add New</button>
												</div>
											</div>	
											<br />
											<div class="row">
											<div class="col-md-12">	
																<table class="table table-bordered datatable" id="table-retainer">
																	<thead>
																		<tr>
																			<th>No</th>
																			<th>Id Matter</th>																		
																			<th>Client</th>
																			<th>Matter</th>
																			<th>Open Date</th>
																			<th>Close Date</th>
																			<th>Jangka Waktu</th>
																			<th>Biaya</th>
																			<th>Jam</th>
																			<th>Disc (%)</th>
																			<th style="width:250px;">Description</th>																		
																			<th>Assign</th>
																			<th>Active</th>
																			<th style="width:160px;">Action</th>
																		</tr>
																	</thead>
																	<tbody>	
																	<?php 
																	$counter3 = 1;
																	if(isset($records_retainer)){
																		foreach($records_retainer as $row3){ ?>
																		<tr class="odd gradeX">
																			<td><?php echo $counter3; ?></td>																				
																			<td><a href="<?php echo site_url('sub_matter/get_record/')."/".$row3->id_matter."/".$row3->id_payment; ?>"><?php echo $row3->id_matter; ?></a></td>																				
																			<td><?php echo $row3->nama_client; ?></td>																				
																			<td><?php echo $row3->matter; ?></td>																																																																										
																			<td><?php echo $row3->open_date; ?></td>																				
																			<td><?php echo $row3->close_date; ?></td>																				
																			<td><?php echo $row3->jangka_waktu; ?></td>																				
																			<td><?php echo number_format($row3->biaya); ?></td>																				
																			<td><?php echo $row3->jam; ?></td>																				
																			<td><?php echo $row3->disc; ?></td>																																																								
																			<td><?php echo $row3->description; ?></td>																																																								
																			<td>
																				<a href="<?php echo site_url('matter/assign/'); ?>/<?php echo $row3->id_matter; ?>">
																				<?php echo $row3->assigned; ?>
																			</a>
																			</td>																																																								
																			<td align="center"><i class="entypo entypo-check"></i></td>
																			<td class="center">
																				<button type="button" name="btnEditActionRetainer" class="btn btn-success" id="<?php echo $row3->id_matter; ?>">
																					
																					<i class="entypo-pencil"></i>
																				</button>
																				<button type="button" name="btnDeleteAction" onclick="gotodelete('<?php echo $row3->id_matter; ?>')" class="btn btn-danger" id="">
																				
																					<i class="entypo-trash"></i>
																				</button>											
																			</td>
																		</tr>
																	<?php	$counter3++;}
																	}?>																	
																	</tbody>
																	<tfoot>
																		<tr>
																			<th>No</th>
																			<th>Id Matter</th>																		
																			<th>Client</th>
																			<th>Matter</th>
																			<th>Open Date</th>
																			<th>Close Date</th>
																			<th>Jangka Waktu</th>
																			<th>Biaya</th>
																			<th>Jam</th>
																			<th>Disc (%)</th>
																			<th>Description</th>																		
																			<th>Assign</th>
																			<th>Active</th>
																			<th>Action</th>
																		</tr>
																	</tfoot>
																</table>
															</div>
											</div>
									</div>
									
									<div class="tab-pane <?php if($active == 4){echo "active";} ?>" id="success_fee">
											
											<div class="row">
												<div class="col-md-12">	
													<button type="button" class="btn btn-info" onclick="add_successfee()" style="float:right;">+ Add New</button>
												</div>
											</div>	
											<br />
											<div class="row">
											<div class="col-md-12">	
																<table class="table table-bordered datatable" id="table-successfee">
																	<thead>
																		<tr>
																			<th>No</th>
																			<th>Id Matter</th>																		
																			<th>Client</th>
																			<th>Matter</th>
																			<th>Open Date</th>
																			<th>Close Date</th>																			
																			<th>Biaya</th>																			
																			<th style="width:250px;">Description</th>																		
																			<th>Assign</th>
																			<th>Active</th>
																			<th style="width:160px;">Action</th>
																		</tr>
																	</thead>
																	<tbody>	
																	<?php 
																	$counter4 = 1;
																	if(isset($records_successfee)){
																		foreach($records_successfee as $row4){ ?>
																		<tr class="odd gradeX">
																			<td><?php echo $counter4; ?></td>																				
																			<td><a href="<?php echo site_url('sub_matter/get_record/')."/".$row4->id_matter."/".$row4->id_payment; ?>"><?php echo $row4->id_matter; ?></a></td>																				
																			<td><?php echo $row4->nama_client; ?></td>																				
																			<td><?php echo $row4->matter; ?></td>																																																																										
																			<td><?php echo $row4->open_date; ?></td>																																																																										
																			<td><?php echo $row4->close_date; ?></td>																																																																										
																			<td><?php echo $row4->biaya; ?></td>																																																																										
																			<td><?php echo $row4->description; ?></td>																																																																										
																			<td>
																				<a href="<?php echo site_url('matter/assign/'); ?>/<?php echo $row4->id_matter; ?>">
																				<?php echo $row4->assigned; ?>
																			</a>
																			</td>																																																																										
																			<td align="center"><i class="entypo entypo-check"></i></td>
																			<td class="center">
																				<button type="button" name="btnEditActionSuccessfee" class="btn btn-success" id="<?php echo $row4->id_matter; ?>">
																					
																					<i class="entypo-pencil"></i>
																				</button>
																				<button type="button" name="btnDeleteAction" onclick="gotodelete('<?php echo $row4->id_matter; ?>')" class="btn btn-danger" id="">
																					
																					<i class="entypo-trash"></i>
																				</button>											
																			</td>
																		</tr>
																	<?php	$counter4++;}
																	}?>																	
																	</tbody>
																	<tfoot>
																		<tr>
																			<th>No</th>
																			<th>Id Matter</th>																		
																			<th>Client</th>
																			<th>Matter</th>
																			<th>Open Date</th>
																			<th>Close Date</th>																			
																			<th>Biaya</th>																			
																			<th>Description</th>																		
																			<th>Assign</th>
																			<th>Active</th>
																			<th>Action</th>
																		</tr>
																	</tfoot>
																</table>
															</div>
											</div>
									</div>
									
									<div class="tab-pane <?php if($active == 5){echo "active";} ?>" id="probono">
											
											<div class="row">
												<div class="col-md-12">	
													<button type="button" class="btn btn-info" onclick="add_probono()" style="float:right;">+ Add New</button>
												</div>
											</div>	
											<br />
											<div class="row">
											<div class="col-md-12">	
																<table class="table table-bordered datatable" id="table-probono">
																	<thead>
																		<tr>
																			<th>No</th>
																			<th>Id Matter</th>																		
																			<th>Client</th>
																			<th>Matter</th>
																			<th>Open Date</th>
																			<th>Close Date</th>																			
																			<th>Description</th>																		
																			<th>Sub Matter</th>
																			<th>Assign</th>
																			<th>Active</th>
																			<th style="width:160px;">Action</th>
																		</tr>
																	</thead>
																	<tbody>	
																	<?php 
																	$counter5 = 1;
																	if(isset($records_probono)){
																		foreach($records_probono as $row5){ ?>
																		<tr class="odd gradeX">
																			<td><?php echo $counter5; ?></td>																				
																			<td><a href="<?php echo site_url('sub_matter/get_record/')."/".$row5->id_matter."/".$row5->id_payment; ?>"><?php echo $row5->id_matter; ?></a></td>
																			<td><?php echo $row5->nama_client; ?></td>																				
																			<td><?php echo $row5->matter; ?></td>																																																																										
																			<td><?php echo $row5->open_date; ?></td>																				
																			<td><?php echo $row5->close_date; ?></td>																																																										
																			<td style="width:250px;"><?php echo $row5->description; ?></td>																																																								
																			<td>0</td>																																																								
																			<td>
																				<a href="<?php echo site_url('matter/assign/'); ?>/<?php echo $row5->id_matter; ?>">
																				<?php echo $row5->assigned; ?>
																			</a>
																			</td>																																																								
																			<td align="center"><i class="entypo entypo-check"></i></td>
																			<td class="center">
																				<button type="button" name="btnEditActionProbono" class="btn btn-success" id="<?php echo $row5->id_matter; ?>">
																					
																					<i class="entypo-pencil"></i>
																				</button>
																				<button type="button" name="btnDeleteAction" onclick="gotodelete('<?php echo $row5->id_matter; ?>')" class="btn btn-danger" id="">
																					
																					<i class="entypo-trash"></i>
																				</button>											
																			</td>
																		</tr>
																	<?php	$counter5++;}
																	}?>																	
																	</tbody>
																	<tfoot>
																		<tr>
																			<th>No</th>
																			<th>Id Matter</th>																		
																			<th>Client</th>
																			<th>Matter</th>
																			<th>Open Date</th>
																			<th>Close Date</th>																			
																			<th>Description</th>																		
																			<th>Sub Matter</th>
																			<th>Assign</th>
																			<th>Active</th>
																			<th style="width:140px;">Action</th>
																		</tr>
																	</tfoot>
																</table>
															</div>
											</div>
									</div>
									
									<div class="tab-pane <?php if($active == 6){echo "active";} ?>" id="project">
											
										<div class="row">
											<div class="col-md-12">	
												<button type="button" class="btn btn-info" onclick="add_project()" style="float:right;">+ Add New</button>
											</div>
										</div>
										<br />
										<div class="row">
											<!--<div class="scrollable" data-height="120">-->											
											<div class="col-md-12">	
												<table class="table table-bordered datatable" id="table-project">
																<thead>
																	<tr>
																		<th>No</th>
																		<th>Id Matter</th>																		
																		<th>Client</th>
																		<th>Matter</th>
																		<th>Open Date</th>
																		<th>Close Date</th>
																		<th>Success Fee</th>
																		<th>Sub Matter</th>
																		<th>Assign</th>
																		<th>Active</th>
																		<th style="width:169px;">Action</th>
																	</tr>
																</thead>
																<tbody>	
																<?php 
																$counter6 = 1;
																if(isset($records_project)){
																	foreach($records_project as $row6){ ?>
																	<tr class="odd gradeX">
																		<td><?php echo $counter6; ?></td>																				
																		<td><a href="<?php echo site_url('sub_matter/get_record/')."/".$row6->id_matter."/".$row6->id_payment; ?>"><?php echo $row6->id_matter; ?></a></td>																				
																		<td><?php echo $row6->nama_client; ?></td>																				
																		<td><?php echo $row6->matter; ?></td>																																																																										
																		<td><?php echo $row6->open_date; ?></td>																				
																		<td><?php echo $row6->close_date; ?></td>																				
																		<td><?php echo number_format($row6->success_fee); ?></td>																				
																		<td>0</td>																				
																																																																										
																		<td align="center">
																			<a href="<?php echo site_url('matter/assign/'); ?>/<?php echo $row6->id_matter; ?>">
																				<?php echo $row6->assigned; ?>
																			</a>
																		</td>																																																								
																		<td align="center"><i class="entypo entypo-check"></i></td>
																		<td class="center">
																			<button type="button" name="btnEditActionProject" class="btn btn-success" id="<?php echo $row6->id_matter; ?>">
																				
																				<i class="entypo-pencil"></i>
																			</button>
																			<button type="button" name="btnDeleteAction" onclick="gotodelete('<?php echo $row6->id_matter; ?>')" class="btn btn-danger" id="">
																				
																				<i class="entypo-trash"></i>
																			</button>											
																		</td>
																	</tr>
																<?php	$counter6++;}
																}?>																	
																</tbody>
																<tfoot>
																	<tr>
																		<th>No</th>
																		<th>Id Matter</th>																		
																		<th>Client</th>
																		<th>Matter</th>
																		<th>Open Date</th>
																		<th>Close Date</th>
																		<th>Success Fee</th>																		
																		<th>Sub Matter</th>
																		<th>Assign</th>
																		<th>Active</th>
																		<th>Action</th>
																	</tr>
																</tfoot>
															</table>
														</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
					</div>	
				</div>
			</div>
		</div>
	<!-- Footer -->
		<?php $this->load->view('footer_view'); ?>	
	</div>
	
	<div class="modal fade" id="modalLumpsum">
		<div class="modal-dialog">
			<div class="modal-content">
				
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">New Matter (LUMPSUM)</h4>
				</div>
				
				<div class="modal-body">
				
				<form role="form" class="form-horizontal form-groups-bordered" method="post" action="" style="padding:10px;" id="formLumpsum">
								<div class="row">
									<div class="col-md-6">						
										<div class="form-group">
											<label for="txt_id_matter" class="control-label">Id Matter</label>
											<input type="text" class="form-control" id="txt_id_matter_disabled" name="txt_id_matter_disabled" value="" disabled />
											<input type="hidden" class="form-control" id="txt_id_matter" name="txt_id_matter" value="" />
										</div>							
									</div>									
									<div class="col-md-6">						
										<div class="form-group" style="padding-left:10px;">
											<label for="combo_client" class="control-label">Client</label>																		
											<select class="form-control" id="combo_client" name="combo_client">
												<?php if (isset($records_client)) {
													foreach ($records_client as $row6) { ?>														
														<option value="<?php echo $row6->id_client; ?>"><?php echo $row6->nama_client; ?></option>
												<?php	}
												} ?>												
											</select>
										</div>						
									</div>
								</div>
								
								<div class="row">
									<div class="col-md-12">						
										<div class="form-group">
											<label for="txt_matter" class="control-label">Matter</label>
											<input type="text" class="form-control" id="txt_matter" name="txt_matter" value="">
											<input type="hidden" class="form-control" id="txt_id_payment" name="txt_id_payment" value="1">
										</div>							
									</div>
									
								</div>
								
								<div class="row">
									<div class="col-md-6">						
										<div class="form-group">
											<label for="txt_open_date" class="control-label">Open Date</label>							
											<div class="input-group">
												<input type="text" class="form-control datepicker" data-format="yyyy-mm-dd" name="txt_open_date">												
												<div class="input-group-addon">
													<a href="#"><i class="entypo-calendar"></i></a>
												</div>
											</div>
										</div>						
									</div>
									
									<div class="col-md-6">						
										<div class="form-group" style="padding-left:10px;">
											<label for="txt_close_date" class="control-label">Close date</label>
											<div class="input-group">
												<input type="text" class="form-control datepicker" data-format="yyyy-mm-dd" name="txt_close_date">												
												<div class="input-group-addon">
													<a href="#"><i class="entypo-calendar"></i></a>
												</div>
											</div>
										</div>							
									</div>
								</div>
								
								<div class="row">
									<div class="col-md-6">						
										<div class="form-group">
											<label for="txt_success_fee" class="control-label">Success Fee</label>
											<input type="text" class="form-control" id="txt_success_fee" name="txt_success_fee" value="">
										</div>							
									</div>									
								</div>
								
								<div class="row">
									<div class="col-md-4">						
										<div class="form-group">
											<label for="txt_term1" class="control-label">Term 1</label>							
											<input type="text" class="form-control" id="txt_term1" name="txt_term1" value="">
										</div>						
									</div>
									<div class="col-md-4">						
										<div class="form-group" style="padding-left:10px;">
											<label for="txt_term2" class="control-label">Term 2</label>							
											<input type="text" class="form-control" id="txt_term2" name="txt_term2" value="">
										</div>						
									</div>
									<div class="col-md-4">						
										<div class="form-group" style="padding-left:10px;">
											<label for="txt_term3" class="control-label">Term 3</label>							
											<input type="text" class="form-control" id="txt_term3" name="txt_term3" value="">
										</div>						
									</div>
								</div>
								
								<div class="row">
									<div class="col-md-4">						
										<div class="form-group">
											<label for="txt_desc_term1" class="control-label">Desc Term 1</label>																		
											<textarea class="form-control" id="txt_desc_term1" name="txt_desc_term1"></textarea>
										</div>						
									</div>
									<div class="col-md-4">						
										<div class="form-group" style="padding-left:10px;">
											<label for="txt_desc_term2" class="control-label">Desc Term 2</label>																		
											<textarea class="form-control" id="txt_desc_term2" name="txt_desc_term2"></textarea>
										</div>						
									</div>
									<div class="col-md-4">						
										<div class="form-group" style="padding-left:10px;">
											<label for="txt_desc_term3" class="control-label">Desc Term 3</label>																		
											<textarea class="form-control" id="txt_desc_term3" name="txt_desc_term3"></textarea>
										</div>						
									</div>
								</div>
								
								<div class="row">
									<div class="col-md-12">						
										<div class="form-group">
											<label for="txt_keterangan" class="control-label">Keterangan</label>
											<textarea class="form-control" id="txt_keterangan" name="txt_keterangan"></textarea>
										</div>							
									</div>
								</div>
							
					
				</div>
				
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" name="btnSubmitLumpsum" class="btn btn-info">Save changes</button>
				</div>
				</form>	
			</div>
		</div>
	</div>
	

	<div class="modal fade" id="modalHourly">
		<div class="modal-dialog">
			<div class="modal-content">
				
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">New Matter (HOURLY)</h4>
				</div>
				
				<div class="modal-body">
				
				<form role="form" class="form-horizontal form-groups-bordered" method="post" id="formHourly" action="#" style="padding:10px;">
								<div class="row">
									<div class="col-md-6">						
										<div class="form-group">
											<label for="txt_id_matter_h" class="control-label">Id Matter</label>
											<input type="text" class="form-control" id="txt_id_matter_h_disabled" name="txt_id_matter_h_disabled" value="" disabled />
											<input type="hidden" class="form-control" id="txt_id_matter_h" name="txt_id_matter_h" value=""  />
											<input type="hidden" class="form-control" id="txt_id_payment" name="txt_id_payment" value="2"> <!--id payment hourly-->
										</div>							
									</div>
									<div class="col-md-6">						
										<div class="form-group" style="padding-left:10px;">
											<label for="combo_client" class="control-label">Client</label>							
											<select class="form-control" id="combo_client" name="combo_client">
												<?php if (isset($records_client)) {
													foreach ($records_client as $row6) { ?>														
														<option value="<?php echo $row6->id_client; ?>"><?php echo $row6->nama_client; ?></option>
												<?php	}
												} ?>												
											</select>											
										</div>						
									</div>
								</div>
								
								<div class="row">
									<div class="col-md-12">						
										<div class="form-group">
											<label for="txt_matter" class="control-label">Matter</label>
											<input type="text" class="form-control" id="txt_matter" name="txt_matter" value="">											
										</div>							
									</div>
									
								</div>
								
								<div class="row">
									<div class="col-md-6">						
										<div class="form-group">
											<label for="txt_open_date" class="control-label">Open Date</label>							
											<div class="input-group">
												<input type="text" class="form-control datepicker" data-format="yyyy-mm-dd" name="txt_open_date">												
												<div class="input-group-addon">
													<a href="#"><i class="entypo-calendar"></i></a>
												</div>
											</div>
										</div>						
									</div>
									
									<div class="col-md-6">						
										<div class="form-group" style="padding-left:10px;">
											<label for="txt_close_date" class="control-label">Close date</label>
											<div class="input-group">
												<input type="text" class="form-control datepicker" data-format="yyyy-mm-dd" name="txt_close_date">												
												<div class="input-group-addon">
													<a href="#"><i class="entypo-calendar"></i></a>
												</div>
											</div>
										</div>							
									</div>
								</div>
								
								<div class="row">
									<div class="col-md-6">						
										<div class="form-group">
											<label for="txt_managing_partner" class="control-label">Managing Partner</label>
											<input type="text" class="form-control" id="txt_managing_partner" name="txt_managing_partner" value="">
										</div>							
									</div>

									<div class="col-md-6">						
										<div class="form-group" style="padding-left:10px;">
											<label for="txt_partner" class="control-label">Partner</label>
											<input type="text" class="form-control" id="txt_partner" name="txt_partner" value="">
										</div>							
									</div>									
								</div>
								
								<div class="row">
									<div class="col-md-6">						
										<div class="form-group">
											<label for="txt_junior_partner" class="control-label">Junior Partner</label>							
											<input type="text" class="form-control" id="txt_junior_partner" name="txt_junior_partner" value="">
										</div>						
									</div>
									<div class="col-md-6">						
										<div class="form-group" style="padding-left:10px;">
											<label for="txt_senior_associate" class="control-label">Senior Associate</label>							
											<input type="text" class="form-control" id="txt_senior_associate" name="txt_senior_associate" value="">
										</div>						
									</div>									
								</div>

								<div class="row">
									<div class="col-md-6">						
										<div class="form-group">
											<label for="txt_mid_associate" class="control-label">Mid Associate</label>							
											<input type="text" class="form-control" id="txt_mid_associate" name="txt_mid_associate" value="">
										</div>						
									</div>
									<div class="col-md-6">						
										<div class="form-group" style="padding-left:10px;">
											<label for="txt_junior_associate" class="control-label">Junior Associate</label>							
											<input type="text" class="form-control" id="txt_junior_associate" name="txt_junior_associate" value="">
										</div>						
									</div>									
								</div>

								<div class="row">
									<div class="col-md-6">						
										<div class="form-group">
											<label for="txt_disc" class="control-label">Disc (%)</label>							
											<input type="text" class="form-control" id="txt_disc" name="txt_disc" value="">
										</div>						
									</div>									
								</div>
								
								<div class="row">
									<div class="col-md-12">						
										<div class="form-group">
											<label for="txt_keterangan" class="control-label">Keterangan</label>
											<textarea class="form-control" id="txt_keterangan" name="txt_keterangan"></textarea>
										</div>							
									</div>
								</div>
							
					
				</div>
				
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" name="btnSubmitHourly" class="btn btn-info">Save changes</button>
				</div>
				</form>	
			</div>
		</div> <!-- form modal matter Hourly -->	
	</div>
	
	<div class="modal fade" id="modalRetainer">
		<div class="modal-dialog">
			<div class="modal-content">
				
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">New Matter (RETAINER)</h4>
				</div>
				
				<div class="modal-body">
				
				<form role="form" class="form-horizontal form-groups-bordered" id="formRetainer" method="post" action="#" style="padding:10px;">
								<div class="row">
									<div class="col-md-6">						
										<div class="form-group">
											<label for="txt_id_matter_r" class="control-label">Id Matter</label>
											<input type="text" class="form-control" id="txt_id_matter_r_disabled" name="txt_id_matter_r_disabled" value="" disabled />
											<input type="hidden" class="form-control" id="txt_id_matter_r" name="txt_id_matter_r" value=""  />
											<input type="hidden" class="form-control" id="txt_id_payment" name="txt_id_payment" value="3"  />
										</div>							
									</div>
									<div class="col-md-6">						
										<div class="form-group" style="padding-left:10px;">
											<label for="combo_client" class="control-label">Client</label>							
											<select class="form-control" id="combo_client" name="combo_client">
												<?php if (isset($records_client)) {
													foreach ($records_client as $row6) { ?>														
														<option value="<?php echo $row6->id_client; ?>"><?php echo $row6->nama_client; ?></option>
												<?php	}
												} ?>												
											</select>											
										</div>						
									</div>
								</div>
								
								<div class="row">
									<div class="col-md-12">						
										<div class="form-group">
											<label for="txt_matter" class="control-label">Matter</label>
											<input type="text" class="form-control" id="txt_matter" name="txt_matter" value="">
										</div>							
									</div>
									
								</div>
								
								<div class="row">
									<div class="col-md-6">						
										<div class="form-group">
											<label for="txt_open_date" class="control-label">Open Date</label>							
											<div class="input-group">
												<input type="text" class="form-control datepicker" data-format="yyyy-mm-dd" name="txt_open_date">												
												<div class="input-group-addon">
													<a href="#"><i class="entypo-calendar"></i></a>
												</div>
											</div>
										</div>						
									</div>
									
									<div class="col-md-6">						
										<div class="form-group" style="padding-left:10px;">
											<label for="txt_close_date" class="control-label">Close date</label>
											<div class="input-group">
												<input type="text" class="form-control datepicker" data-format="yyyy-mm-dd" name="txt_close_date">												
												<div class="input-group-addon">
													<a href="#"><i class="entypo-calendar"></i></a>
												</div>
											</div>
										</div>							
									</div>
								</div>
								
								<div class="row">
									<div class="col-md-6">						
										<div class="form-group">
											<label for="txt_jangka_waktu" class="control-label">Jangka Waktu (hari)</label>
											<input type="text" class="form-control" id="txt_jangka_waktu" name="txt_jangka_waktu" value="">
										</div>							
									</div>

									<div class="col-md-6">						
										<div class="form-group" style="padding-left:10px;">
											<label for="txt_biaya" class="control-label">Biaya</label>
											<input type="text" class="form-control" id="txt_biaya" name="txt_biaya" value="">
										</div>							
									</div>									
								</div>
								
								<div class="row">
									<div class="col-md-6">						
										<div class="form-group">
											<label for="txt_jam" class="control-label">Jam</label>							
											<input type="text" class="form-control" id="txt_jam" name="txt_jam" value="">
										</div>						
									</div>
									<div class="col-md-6">						
										<div class="form-group" style="padding-left:10px;">
											<label for="txt_disc" class="control-label">Disc (%)</label>							
											<input type="text" class="form-control" id="txt_disc" name="txt_disc" value="">
										</div>						
									</div>									
								</div>
								<div class="row">
									<div class="col-md-12">						
										<div class="form-group">
											<label for="txt_keterangan" class="control-label">Keterangan</label>
											<textarea class="form-control" id="txt_keterangan" name="txt_keterangan"></textarea>
										</div>							
									</div>
								</div>
							
					
				</div>
				
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" name="btnSubmitRetainer" class="btn btn-info">Save changes</button>
				</div>
				</form>	
			</div>
		</div> <!-- form modal matter Retainer -->	
	</div>
	
	<div class="modal fade" id="modalSuccessfee">
		<div class="modal-dialog">
			<div class="modal-content">
				
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">New Matter (SUCCESS FEE)</h4>
				</div>
				
				<div class="modal-body">
				
				<form role="form" class="form-horizontal form-groups-bordered" id="formSuccessfee" method="post" action="" style="padding:10px;">
								<div class="row">
									<div class="col-md-6">						
										<div class="form-group">
											<label for="txt_id_matter" class="control-label">Id Matter</label>
											<input type="text" class="form-control" id="txt_id_matter_s_disabled" name="txt_id_matter_s_disabled" value="" disabled />
											<input type="hidden" class="form-control" id="txt_id_matter_s" name="txt_id_matter_s" value="" />
											<input type="hidden" class="form-control" id="txt_id_payment" name="txt_id_payment" value="4" />
										</div>							
									</div>
									<div class="col-md-6">						
										<div class="form-group" style="padding-left:10px;">
											<label for="combo_client" class="control-label">Client</label>							
											<select class="form-control" id="combo_client" name="combo_client">
												<?php if (isset($records_client)) {
													foreach ($records_client as $row6) { ?>														
														<option value="<?php echo $row6->id_client; ?>"><?php echo $row6->nama_client; ?></option>
												<?php	}
												} ?>												
											</select>											
										</div>						
									</div>
								</div>
								
								<div class="row">
									<div class="col-md-12">						
										<div class="form-group">
											<label for="txt_matter" class="control-label">Matter</label>
											<input type="text" class="form-control" id="txt_matter" name="txt_matter" value="">
										</div>							
									</div>
									
								</div>
								
								<div class="row">
									<div class="col-md-6">						
										<div class="form-group">
											<label for="txt_open_date" class="control-label">Open Date</label>							
											<div class="input-group">
												<input type="text" class="form-control datepicker" data-format="yyyy-mm-dd" name="txt_open_date">												
												<div class="input-group-addon">
													<a href="#"><i class="entypo-calendar"></i></a>
												</div>
											</div>
										</div>						
									</div>
									
									<div class="col-md-6">						
										<div class="form-group" style="padding-left:10px;">
											<label for="txt_close_date" class="control-label">Close date</label>
											<div class="input-group">
												<input type="text" class="form-control datepicker" data-format="yyyy-mm-dd" name="txt_close_date">												
												<div class="input-group-addon">
													<a href="#"><i class="entypo-calendar"></i></a>
												</div>
											</div>
										</div>							
									</div>
								</div>
								
								

								<div class="row">
									<div class="col-md-6">						
										<div class="form-group">
											<label for="txt_biaya" class="control-label">Biaya</label>							
											<input type="text" class="form-control" id="txt_biaya" name="txt_biaya" value="">
										</div>						
									</div>
																	
								</div>
								
								<div class="row">
									<div class="col-md-12">						
										<div class="form-group">
											<label for="txt_keterangan" class="control-label">Keterangan</label>
											<textarea class="form-control" id="txt_keterangan" name="txt_keterangan"></textarea>
										</div>							
									</div>
								</div>
							
					
				</div>
				
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" name="btnSubmitSuccessfee" class="btn btn-info">Save changes</button>
				</div>
				</form>	
			</div>
		</div> <!-- form modal matter Success Fee -->	
	</div>
	
	<div class="modal fade" id="modalProbono">
		<div class="modal-dialog">
			<div class="modal-content">
				
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">New Matter (PROBONO)</h4>
				</div>
				
				<div class="modal-body">
				
				<form role="form" class="form-horizontal form-groups-bordered" id="formProbono" method="post" action="" style="padding:10px;">
								<div class="row">
									<div class="col-md-6">						
										<div class="form-group">
											<label for="txt_id_matter" class="control-label">Id Matter</label>
											<input type="text" class="form-control" id="txt_id_matter_p_disabled" name="txt_id_matter_p_disabled" value="" disabled />
											<input type="hidden" class="form-control" id="txt_id_matter_p" name="txt_id_matter_p" value="" />
											<input type="hidden" class="form-control" id="txt_id_payment" name="txt_id_payment" value="5" />
										</div>							
									</div>
									<div class="col-md-6">						
										<div class="form-group" style="padding-left:10px;">
											<label for="combo_client" class="control-label">Client</label>							
											<select class="form-control" id="combo_client" name="combo_client">
												<?php if (isset($records_client)) {
													foreach ($records_client as $row6) { ?>														
														<option value="<?php echo $row6->id_client; ?>"><?php echo $row6->nama_client; ?></option>
												<?php	}
												} ?>												
											</select>											
										</div>						
									</div>
								</div>
								
								<div class="row">
									<div class="col-md-12">						
										<div class="form-group">
											<label for="txt_matter" class="control-label">Matter</label>
											<input type="text" class="form-control" id="txt_matter" name="txt_matter" value="">
										</div>							
									</div>
									
								</div>
								
								<div class="row">
									<div class="col-md-6">						
										<div class="form-group">
											<label for="txt_open_date" class="control-label">Open Date</label>							
											<div class="input-group">
												<input type="text" class="form-control datepicker" data-format="yyyy-mm-dd" name="txt_open_date">												
												<div class="input-group-addon">
													<a href="#"><i class="entypo-calendar"></i></a>
												</div>
											</div>
										</div>						
									</div>
									
									<div class="col-md-6">						
										<div class="form-group" style="padding-left:10px;">
											<label for="txt_close_date" class="control-label">Close date</label>
											<div class="input-group">
												<input type="text" class="form-control datepicker" data-format="yyyy-mm-dd" name="txt_close_date">												
												<div class="input-group-addon">
													<a href="#"><i class="entypo-calendar"></i></a>
												</div>
											</div>
										</div>							
									</div>
								</div>
								
								
								
								<div class="row">
									<div class="col-md-12">						
										<div class="form-group">
											<label for="txt_keterangan" class="control-label">Keterangan</label>
											<textarea class="form-control" id="txt_keterangan" name="txt_keterangan"></textarea>
										</div>							
									</div>
								</div>
							
					
				</div>
				
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" name="btnSubmitProbono" class="btn btn-info">Save changes</button>
				</div>
				</form>	
			</div>
		</div> <!-- form modal matter pROBONO -->	
	</div>
	
	<div class="modal fade" id="modalProject">
		<div class="modal-dialog">
			<div class="modal-content">
				
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">New Matter (PROJECT)</h4>
				</div>
				
				<div class="modal-body">
				
				<form role="form" class="form-horizontal form-groups-bordered" id="formProject" method="post" action="" style="padding:10px;">
								<div class="row">
									<div class="col-md-6">						
										<div class="form-group">
											<label for="txt_id_matter" class="control-label">Id Matter</label>
											<input type="text" class="form-control" id="txt_id_matter_pr_disabled" name="txt_id_matter_pr_disabled" value="" disabled />
											<input type="hidden" class="form-control" id="txt_id_matter_pr" name="txt_id_matter_pr" value=""  />
											<input type="hidden" class="form-control" id="txt_id_payment" name="txt_id_payment" value="6" />
										</div>							
									</div>
									<div class="col-md-6">						
										<div class="form-group" style="padding-left:10px;">
											<label for="combo_client" class="control-label">Client</label>																		
											<select class="form-control" id="combo_client" name="combo_client">
												<?php if (isset($records_client)) {
													foreach ($records_client as $row6) { ?>														
														<option value="<?php echo $row6->id_client; ?>"><?php echo $row6->nama_client; ?></option>
												<?php	}
												} ?>												
											</select>
										</div>						
									</div>
								</div>
								
								<div class="row">
									<div class="col-md-12">						
										<div class="form-group">
											<label for="txt_matter" class="control-label">Matter</label>
											<input type="text" class="form-control" id="txt_matter" name="txt_matter" value="">
										</div>							
									</div>
									
								</div>
								
								<div class="row">
									<div class="col-md-6">						
										<div class="form-group">
											<label for="txt_open_date" class="control-label">Open Date</label>							
											<div class="input-group">
												<input type="text" class="form-control datepicker" data-format="yyyy-mm-dd" name="txt_open_date">												
												<div class="input-group-addon">
													<a href="#"><i class="entypo-calendar"></i></a>
												</div>
											</div>
										</div>						
									</div>
									
									<div class="col-md-6">						
										<div class="form-group" style="padding-left:10px;">
											<label for="txt_close_date" class="control-label">Close date</label>
											<div class="input-group">
												<input type="text" class="form-control datepicker" data-format="yyyy-mm-dd" name="txt_close_date">												
												<div class="input-group-addon">
													<a href="#"><i class="entypo-calendar"></i></a>
												</div>
											</div>
										</div>							
									</div>
								</div>
								
								<div class="row">
									<div class="col-md-6">						
										<div class="form-group">
											<label for="txt_success_fee" class="control-label">Success Fee</label>
											<input type="text" class="form-control" id="txt_success_fee" name="txt_success_fee" value="">
										</div>							
									</div>									
								</div>
								
								<div class="row">
									<div class="col-md-4">						
										<div class="form-group">
											<label for="txt_term1" class="control-label">Term 1</label>							
											<input type="text" class="form-control" id="txt_term1" name="txt_term1" value="">
										</div>						
									</div>
									<div class="col-md-4">						
										<div class="form-group" style="padding-left:10px;">
											<label for="txt_term2" class="control-label">Term 2</label>							
											<input type="text" class="form-control" id="txt_term2" name="txt_term2" value="">
										</div>						
									</div>
									<div class="col-md-4">						
										<div class="form-group" style="padding-left:10px;">
											<label for="txt_term3" class="control-label">Term 3</label>							
											<input type="text" class="form-control" id="txt_term3" name="txt_term3" value="">
										</div>						
									</div>
								</div>
								
								<div class="row">
									<div class="col-md-4">						
										<div class="form-group">
											<label for="txt_desc_term1" class="control-label">Desc Term 1</label>																		
											<textarea class="form-control" id="txt_desc_term1" name="txt_desc_term1"></textarea>
										</div>						
									</div>
									<div class="col-md-4">						
										<div class="form-group" style="padding-left:10px;">
											<label for="txt_desc_term2" class="control-label">Desc Term 2</label>																		
											<textarea class="form-control" id="txt_desc_term2" name="txt_desc_term2"></textarea>
										</div>						
									</div>
									<div class="col-md-4">						
										<div class="form-group" style="padding-left:10px;">
											<label for="txt_desc_term3" class="control-label">Desc Term 3</label>																		
											<textarea class="form-control" id="txt_desc_term3" name="txt_desc_term3"></textarea>
										</div>						
									</div>
								</div>
								
								<div class="row">
									<div class="col-md-12">						
										<div class="form-group">
											<label for="txt_keterangan" class="control-label">Keterangan</label>
											<textarea class="form-control" id="txt_keterangan" name="txt_keterangan"></textarea>
										</div>							
									</div>
								</div>
							
					
				</div>
				
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" name="btnSubmitProject" class="btn btn-info">Save changes</button>
				</div>
				</form>	
			</div>
		</div>
	</div> <!-- form Project -->

	<div class="modal fade custom-width" id="modal-subMatter">
		<div class="modal-dialog" style="width: 800px;">
			<div class="modal-content">
				
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title-subMatter">Add new Sub Matter</h4>
				</div>
				
				<div class="modal-body">

					<!-- begin tab panel-->					
					<div class="col-md-12">					
										<ul class="nav nav-tabs bordered"><!-- available classes "bordered", "right-aligned" -->
											<li class="active">
												<a href="#subLumpsum" data-toggle="tab">
													<span class="visible-xs"><i class="entypo-home"></i></span>
													<span class="hidden-xs">LUMPSUM</span>
												</a>
											</li>
											<li>
												<a href="#subHourly" data-toggle="tab">
													<span class="visible-xs"><i class="entypo-user"></i></span>
													<span class="hidden-xs">HOURLY</span>
												</a>
											</li>
											<li>
												<a href="#subRetainer" data-toggle="tab">
													<span class="visible-xs"><i class="entypo-mail"></i></span>
													<span class="hidden-xs">RETAINER</span>
												</a>
											</li>
											<li>
												<a href="#subSuccessfee" data-toggle="tab">
													<span class="visible-xs"><i class="entypo-cog"></i></span>
													<span class="hidden-xs">SUCCESS FEE</span>
												</a>
											</li>
											<li>
												<a href="#subProbono" data-toggle="tab">
													<span class="visible-xs"><i class="entypo-cog"></i></span>
													<span class="hidden-xs">PROBONO</span>
												</a>
											</li>
											<li>
												<a href="#subProjects" data-toggle="tab">
													<span class="visible-xs"><i class="entypo-cog"></i></span>
													<span class="hidden-xs">PROJECT</span>
												</a>
											</li>
										</ul>
										
										<div class="tab-content">
											<div class="tab-pane active" id="subLumpsum">																								
												<div class="row">
													<div class="col-md-12">
														<!-- form sub lumsump -->
														<form role="form" class="form-horizontal form-groups-bordered" method="post" action="" style="padding:10px;" id="formSubLumpsum">
															<div class="row">
																<div class="col-md-6">						
																	<div class="form-group">
																		<label for="sub_id_matter" class="control-label">Id Matter</label>
																		<input type="text" class="form-control" id="sub_id_matter" name="sub_id_matter" value="" />																		
																	</div>							
																</div>	
																<div class="col-md-6">						
																	<div class="form-group" style="padding-left:10px;">
																		<label for="sub_id_sub_matter" class="control-label">Id Sub Matter</label>
																		<input type="text" class="form-control" id="sub_id_sub_matter" name="sub_id_sub_matter" value="" />																		
																	</div>							
																</div>																								
															</div>

															<div class="row">
																<div class="col-md-12">						
																	<div class="form-group">
																		<label for="sub_matter" class="control-label">Matter</label>
																		<input type="text" class="form-control" id="sub_matter" name="sub_matter" value="">
																		<input type="hidden" class="form-control" id="sub_id_payment" name="sub_id_payment" value="1">
																	</div>							
																</div>
																
															</div>
															
															<div class="row">
																<div class="col-md-6">						
																	<div class="form-group">
																		<label for="sub_open_date" class="control-label">Open Date</label>							
																		<div class="input-group">
																			<input type="text" class="form-control datepicker" data-format="yyyy-mm-dd" name="sub_open_date">												
																			<div class="input-group-addon">
																				<a href="#"><i class="entypo-calendar"></i></a>
																			</div>
																		</div>
																	</div>						
																</div>
																
																<div class="col-md-6">						
																	<div class="form-group" style="padding-left:10px;">
																		<label for="sub_close_date" class="control-label">Close date</label>
																		<div class="input-group">
																			<input type="text" class="form-control datepicker" data-format="yyyy-mm-dd" name="sub_close_date">												
																			<div class="input-group-addon">
																				<a href="#"><i class="entypo-calendar"></i></a>
																			</div>
																		</div>
																	</div>							
																</div>
															</div>

															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																		<label for="sub_successfee" class="control-label">Success Fee</label>
																		<input type="text" class="form-control" id="sub_successfee" name="sub_successfee" value="" />																		
																	</div>
																</div>	
															</div>

															<div class="row">
																<div class="col-md-4">
																	<div class="form-group">
																		<label for="sub_term1" class="control-label">Term 1</label>
																		<input type="text" class="form-control" id="sub_term1" name="sub_term1" value="" />																		
																	</div>
																</div>
																<div class="col-md-4">
																	<div class="form-group" style="padding-left:10px;">
																		<label for="sub_term2" class="control-label">Term 2</label>
																		<input type="text" class="form-control" id="sub_term2" name="sub_term2" value="" />																		
																	</div>
																</div>
																<div class="col-md-4">
																	<div class="form-group" style="padding-left:10px;">
																		<label for="sub_term3" class="control-label">Term 3</label>
																		<input type="text" class="form-control" id="sub_term3" name="sub_term3" value="" />																		
																	</div>
																</div>	
															</div>

															<div class="row">
																<div class="col-md-4">
																	<div class="form-group">
																		<label for="sub_desc_term1" class="control-label">Desc Term 1</label>																		
																		<textarea class="form-control" id="sub_desc_term1" name="sub_desc_term1"></textarea>
																	</div>
																</div>
																<div class="col-md-4">
																	<div class="form-group" style="padding-left:10px;">
																		<label for="sub_desc_term2" class="control-label">Desc Term 2</label>
																		<textarea class="form-control" id="sub_desc_term2" name="sub_desc_term2"></textarea>
																	</div>
																</div>
																<div class="col-md-4">
																	<div class="form-group" style="padding-left:10px;">
																		<label for="sub_desc_term3" class="control-label">Desc Term 3</label>
																		<textarea class="form-control" id="sub_desc_term3" name="sub_desc_term3"></textarea>
																	</div>
																</div>	
															</div>

															<div class="row">
																<div class="col-md-12">
																	<div class="form-group">
																		<label for="sub_description" class="control-label">Keterangan</label>
																		<textarea class="form-control" id="sub_description" name="sub_description"></textarea>
																	</div>
																</div>
															</div>

															<div class="row">
																<div class="col-md-12">																	
																	<div class="form-group">
																		<button type="button" class="btn btn-info">SUBMIT</button>
																	</div>																	
																</div>
															</div>

														</form>
														<!-- end form sub lumsump -->
													</div>
												</div>
												
											</div>
											<div class="tab-pane" id="subHourly">
												
												<div class="row">
													<div class="col-md-12">
														<form role="form" class="form-horizontal form-groups-bordered" method="post" action="" style="padding:10px;" id="formSubHourly">
															<div class="row">
																<div class="col-md-6">						
																	<div class="form-group">
																		<label for="sub_id_matter" class="control-label">Id Matter</label>
																		<input type="text" class="form-control" id="sub_id_matter" name="sub_id_matter" value="" />																		
																	</div>							
																</div>	
																<div class="col-md-6">						
																	<div class="form-group" style="padding-left:10px;">
																		<label for="sub_id_sub_matter" class="control-label">Id Sub Matter</label>
																		<input type="text" class="form-control" id="sub_id_sub_matter" name="sub_id_sub_matter" value="" />																		
																	</div>							
																</div>
															</div>

															<div class="row">
																<div class="col-md-12">						
																	<div class="form-group">
																		<label for="sub_matter" class="control-label">Matter</label>
																		<input type="text" class="form-control" id="sub_matter" name="sub_matter" value="" />																		
																	</div>							
																</div>																	
															</div>

															<div class="row">
																<div class="col-md-6">						
																	<div class="form-group">
																		<label for="sub_open_date" class="control-label">Open Date</label>							
																		<div class="input-group">
																			<input type="text" class="form-control datepicker" data-format="yyyy-mm-dd" name="sub_open_date">												
																			<div class="input-group-addon">
																				<a href="#"><i class="entypo-calendar"></i></a>
																			</div>
																		</div>
																	</div>						
																</div>
																
																<div class="col-md-6">						
																	<div class="form-group" style="padding-left:10px;">
																		<label for="sub_close_date" class="control-label">Close date</label>
																		<div class="input-group">
																			<input type="text" class="form-control datepicker" data-format="yyyy-mm-dd" name="sub_close_date">												
																			<div class="input-group-addon">
																				<a href="#"><i class="entypo-calendar"></i></a>
																			</div>
																		</div>
																	</div>							
																</div>
															</div>

															<div class="row">
																<div class="col-md-6">						
																	<div class="form-group">
																		<label for="sub_managing_partner" class="control-label">Managing Partner</label>
																		<input type="text" class="form-control" id="sub_managing_partner" name="sub_managing_partner" value="" />																		
																	</div>							
																</div>	
																<div class="col-md-6">						
																	<div class="form-group" style="padding-left:10px;">
																		<label for="sub_partner" class="control-label">Partner</label>
																		<input type="text" class="form-control" id="sub_partner" name="sub_partner" value="" />																		
																	</div>							
																</div>
															</div>

															<div class="row">
																<div class="col-md-6">						
																	<div class="form-group">
																		<label for="sub_junior_partner" class="control-label">Junior Partner</label>
																		<input type="text" class="form-control" id="sub_junior_partner" name="sub_junior_partner" value="" />																		
																	</div>							
																</div>	
																<div class="col-md-6">						
																	<div class="form-group" style="padding-left:10px;">
																		<label for="sub_senior_associate" class="control-label">Senior Associate</label>
																		<input type="text" class="form-control" id="sub_senior_associate" name="sub_senior_associate" value="" />																		
																	</div>							
																</div>
															</div>

															<div class="row">
																<div class="col-md-6">						
																	<div class="form-group">
																		<label for="sub_mid_associate" class="control-label">Mid Associate</label>
																		<input type="text" class="form-control" id="sub_mid_associate" name="sub_mid_associate" value="" />																		
																	</div>							
																</div>	
																<div class="col-md-6">						
																	<div class="form-group" style="padding-left:10px;">
																		<label for="sub_junior_associate" class="control-label">Junior Associate</label>
																		<input type="text" class="form-control" id="sub_junior_associate" name="sub_junior_associate" value="" />																		
																	</div>							
																</div>
															</div>

															<div class="row">
																<div class="col-md-6">						
																	<div class="form-group">
																		<label for="sub_disc" class="control-label">Disc (%)</label>
																		<input type="text" class="form-control" id="sub_disc" name="sub_disc" value="" />																		
																	</div>							
																</div>																	
															</div>

															<div class="row">
																<div class="col-md-12">
																	<div class="form-group">
																		<label for="sub_description" class="control-label">Keterangan</label>
																		<textarea class="form-control" id="sub_description" name="sub_description"></textarea>
																	</div>
																</div>
															</div>

															<div class="row">
																<div class="col-md-12">																	
																	<div class="form-group">
																		<button type="button" class="btn btn-info">SUBMIT</button>
																	</div>																	
																</div>
															</div>
														</form>
														
													</div>
												</div>

											</div>
											<div class="tab-pane" id="subRetainer">
												
													
												<div class="row">
													<div class="col-md-12">
														<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
														proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
														
													</div>
												</div>
													
											</div>
											
											<div class="tab-pane" id="subSuccessfee">
																									
												<div class="row">
													<div class="col-md-12">
														<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
														proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
														
													</div>
												</div>

											</div>

											<div class="tab-pane" id="subProbono">
												
												
												<div class="row">
													<div class="col-md-12">
														<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
														proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

														<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
														proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

														<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
														proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
														
													</div>
												</div>

											</div>

											<div class="tab-pane" id="subProject">
													
												<div class="row">
													<div class="col-md-12">
														<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
														proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
														
													</div>
												</div>

											</div>
										</div>
										
										
									</div>
					<!-- end tab panel-->					

				</div>
				
				<div class="modal-footer">
					<!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
					<!--<button type="button" class="btn btn-info">Save changes</button>-->
				</div>
			</div>
		</div>
	</div>


		
	<link rel="stylesheet" href="<?php echo base_url(); ?>template/assets/js/datatables/responsive/css/datatables.responsive.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>template/assets/js/select2/select2-bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>template/assets/js/select2/select2.css">

	<!-- Bottom Scripts -->
	<script src="<?php echo base_url(); ?>template/assets/js/gsap/main-gsap.js"></script>
	<script src="<?php echo base_url(); ?>template/assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="<?php echo base_url(); ?>template/assets/js/bootstrap.js"></script>
	<script src="<?php echo base_url(); ?>template/assets/js/joinable.js"></script>
	<script src="<?php echo base_url(); ?>template/assets/js/resizeable.js"></script>
	<script src="<?php echo base_url(); ?>template/assets/js/neon-api.js"></script>
	<script src="<?php echo base_url(); ?>template/assets/js/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url(); ?>template/assets/js/bootstrap-datepicker.js"></script>
	<script src="<?php echo base_url(); ?>template/assets/js/datatables/TableTools.min.js"></script>
	<script src="<?php echo base_url(); ?>template/assets/js/dataTables.bootstrap.js"></script>
	<script src="<?php echo base_url(); ?>template/assets/js/datatables/jquery.dataTables.columnFilter.js"></script>
	<script src="<?php echo base_url(); ?>template/assets/js/datatables/lodash.min.js"></script>
	<script src="<?php echo base_url(); ?>template/assets/js/datatables/responsive/js/datatables.responsive.js"></script>
	<script src="<?php echo base_url(); ?>template/assets/js/select2/select2.min.js"></script>
	<script src="<?php echo base_url(); ?>template/assets/js/neon-chat.js"></script>
	<script src="<?php echo base_url(); ?>template/assets/js/neon-custom.js"></script>
	<script src="<?php echo base_url(); ?>template/assets/js/neon-demo.js"></script>

</body>
</html>