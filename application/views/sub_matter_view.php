<?php $this->load->view('head_view'); ?>

<body class="page-body" data-url="http://neon.dev">

<div class="page-container horizontal-menu">
	
	
	<?php $this->load->view('topheader_view'); ?>



<script type="text/javascript">	
	
	jQuery(document).ready(function($)
	{
		$('[name="btnSubmitLumpsum"]').button().on( "click", function() {			
			saveSubLumpsum();
		});

		$('[name="btnEditActionLumpsum"]').button().on( "click", function() {	
			var id = $(this).attr("id");		
			editSubLumpsum(id);
		});


		var table = $("#tableSubLumpsum").dataTable({
			"sPaginationType": "bootstrap",
			"sDom": "<'row'<'col-xs-6 col-left'l><'col-xs-6 col-right'<'export-data'T>f>r>t<'row'<'col-xs-6 col-left'i><'col-xs-6 col-right'p>>",
			"oTableTools": {
			},
			
		});

		var table2 = $("#tableSubHourly").dataTable({
			"sPaginationType": "bootstrap",
			"sDom": "<'row'<'col-xs-6 col-left'l><'col-xs-6 col-right'<'export-data'T>f>r>t<'row'<'col-xs-6 col-left'i><'col-xs-6 col-right'p>>",
			"oTableTools": {
			},
			
		});

		var table3 = $("#tableSubRetainer").dataTable({
			"sPaginationType": "bootstrap",
			"sDom": "<'row'<'col-xs-6 col-left'l><'col-xs-6 col-right'<'export-data'T>f>r>t<'row'<'col-xs-6 col-left'i><'col-xs-6 col-right'p>>",
			"oTableTools": {
			},
			
		});

		var table4 = $("#tableSubSuccessfee").dataTable({
			"sPaginationType": "bootstrap",
			"sDom": "<'row'<'col-xs-6 col-left'l><'col-xs-6 col-right'<'export-data'T>f>r>t<'row'<'col-xs-6 col-left'i><'col-xs-6 col-right'p>>",
			"oTableTools": {
			},
			
		});

		var table5 = $("#tableSubProbono").dataTable({
			"sPaginationType": "bootstrap",
			"sDom": "<'row'<'col-xs-6 col-left'l><'col-xs-6 col-right'<'export-data'T>f>r>t<'row'<'col-xs-6 col-left'i><'col-xs-6 col-right'p>>",
			"oTableTools": {
			},
			
		});

		var table6 = $("#tableSubProject").dataTable({
			"sPaginationType": "bootstrap",
			"sDom": "<'row'<'col-xs-6 col-left'l><'col-xs-6 col-right'<'export-data'T>f>r>t<'row'<'col-xs-6 col-left'i><'col-xs-6 col-right'p>>",
			"oTableTools": {
			},
			
		});
	});

	function paymentType(){
		var id = "<?php echo $this->uri->segment(3); ?>";
		var paymentType = "<?php echo $this->uri->segment(4); ?>";

		if(paymentType == 1){
			var a = "<?php echo site_url('matter/get_record'); ?>/"+id;
		}else if(paymentType == 2){
			var a = "<?php echo site_url('matter/get_record_hourly'); ?>/"+id;
		}else if(paymentType == 3){
			var a = "<?php echo site_url('matter/get_record_retainer'); ?>/"+id;
		}else if(paymentType == 4){
			var a = "<?php echo site_url('matter/get_record_successfee'); ?>/"+id;
		}else if(paymentType == 5){
			var a = "<?php echo site_url('matter/get_record_probono'); ?>/"+id;
		}else if(paymentType == 6){
			var a = "<?php echo site_url('matter/get_record_project'); ?>/"+id;
		}
		return a;
	}

	function editSubLumpsum(id){
		save_method = 'edit';
		$('.modal-title').text('Edit Sub Matter (LUMPSUM)');
		$('[name="btnSubmitLumpsum"]').text('Update');

		//$('#formSubLumpsum')[0].reset();		

		$.ajax({
			url : "<?php echo site_url('sub_matter/getRecord_lumpsum'); ?>/"+id,
			type: "GET",
			dataType: "JSON",
			success: function(data){
				$('[name="txt_nama_client"]').val(data.nama_client);								
				$('[name="txt_matter"]').val(data.matter);	
				$('[name="txt_sub_matter"]').val(data.submatter);	
				$('[name="txt_id_subMatter"]').val(data.id_submatter);	
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

	function saveSubLumpsum(){
		if(save_method == 'add'){
			url = "<?php echo site_url('sub_matter/addRecord_subLumpsum'); ?>";
		}else{
			url = "<?php echo site_url('sub_matter/editRecord_subLumpsum'); ?>";
		}

		$.ajax({
			url : url,
			type : "POST",
			data : $('#formSubLumpsum').serialize(),
			dataType : "JSON",
			success : function(data){
				$('#modalLumpsum').modal('hide');				
				window.location = "<?php echo site_url('sub_matter/get_record/'.$this->uri->segment(3).'/'.$this->uri->segment(4)); ?>";
			},
			error: function (jqXHR, textStatus, errorThrown)
	            {
	                alert('Error adding / update data');
	            } 
		});
	}

	
	function add_subLumpsum(){		
		
		save_method = 'add';
		$('html, body').animate({ scrollTop: 0 }, 'fast');
		$('#modalLumpsum').modal('show');
		$('#formSubLumpsum')[0].reset();

		var id = "<?php echo $this->uri->segment(3); ?>";
		var url = paymentType();
		$.ajax({
			url: url,
			type: "GET",
			dataType: "JSON",
			success: function(data){
				$('[name="txt_id_matter_disabled"]').val(data.id_matter);
				$('[name="txt_id_matter_h"]').val(data.id_matter);
				$('[name="txt_nama_client"]').val(data.nama_client);
				$('[name="txt_matter"]').val(data.matter);
			}
		});

		var id_matter = generateUUID();
      	var textbox = document.getElementById('txt_id_subMatter');      	
	    textbox.value = id_matter;	    
	}

	

	function add_subHourly(){
		$('html, body').animate({ scrollTop: 0 }, 'fast');
		$('#modalHourly').modal('show');	

		var id = "<?php echo $this->uri->segment(3); ?>";
		var url = paymentType();
		$.ajax({
			url: url,
			type: "GET",
			dataType: "JSON",
			success: function(data){
				$('[name="txt_id_matter_disabled"]').val(data.id_matter);				
				$('[name="txt_nama_client"]').val(data.nama_client);
				$('[name="txt_matter"]').val(data.matter);
			}
		});

		var id_matter = generateUUID();
      	var textbox = document.getElementById('txt_id_subMatter');      	
	    textbox.value = id_matter;	
	}

	function add_subRetainer(){
		$('html, body').animate({ scrollTop: 0 }, 'fast');
		$('#modalRetainer').modal('show');

		var id = "<?php echo $this->uri->segment(3); ?>";
		var url = paymentType();
		$.ajax({
			url: url,
			type: "GET",
			dataType: "JSON",
			success: function(data){
				$('[name="txt_id_matter_disabled"]').val(data.id_matter);
				$('[name="txt_nama_client"]').val(data.nama_client);
				$('[name="txt_matter"]').val(data.matter);
			}
		});

		var id_matter = generateUUID();
      	var textbox = document.getElementById('txt_id_subMatter');      	
	    textbox.value = id_matter;	
	}

	function add_subSuccessfee(){
		$('html, body').animate({ scrollTop: 0 }, 'fast');
		$('#modalSuccessfee').modal('show');

		var id = "<?php echo $this->uri->segment(3); ?>";
		var url = paymentType();
		$.ajax({
			url: url,
			type: "GET",
			dataType: "JSON",
			success: function(data){
				$('[name="txt_id_matter_disabled"]').val(data.id_matter);
				$('[name="txt_nama_client"]').val(data.nama_client);
				$('[name="txt_matter"]').val(data.matter);
			}
		});

		var id_matter = generateUUID();
      	var textbox = document.getElementById('txt_id_subMatter');      	
	    textbox.value = id_matter;	
	}

	function add_subProbono(){
		$('html, body').animate({ scrollTop: 0 }, 'fast');
		$('#modalProbono').modal('show');

		var id = "<?php echo $this->uri->segment(3); ?>";
		var url = paymentType();
		$.ajax({
			url: url,
			type: "GET",
			dataType: "JSON",
			success: function(data){
				$('[name="txt_id_matter_disabled"]').val(data.id_matter);
				$('[name="txt_nama_client"]').val(data.nama_client);
				$('[name="txt_matter"]').val(data.matter);
			}
		});

		var id_matter = generateUUID();
      	var textbox = document.getElementById('txt_id_subMatter');      	
	    textbox.value = id_matter;	
	}

	function add_subProject(){
		//alert('project')
		$('html, body').animate({ scrollTop: 0 }, 'fast');
		$('#modalProject').modal('show');

		var id = "<?php echo $this->uri->segment(3); ?>";
		var url = paymentType();
		$.ajax({
			url: url,
			type: "GET",
			dataType: "JSON",
			success: function(data){
				$('[name="txt_id_matter_disabled"]').val(data.id_matter);
				$('[name="txt_nama_client"]').val(data.nama_client);
				$('[name="txt_matter"]').val(data.matter);
			}
		});

		var id_matter = generateUUID();
      	var textbox = document.getElementById('txt_id_subMatter');      	
	    textbox.value = id_matter;	
	}

	function generateUUID(){
	    var d = new Date().getTime();
	    if(window.performance && typeof window.performance.now === "function"){
	        d += performance.now();; //use high-precision timer if available
	    }
	    var uuid = 'S-AFSxxxxx4xxyxxxxx'.replace(/[xy]/g, function(c) {
	        var r = (d + Math.random()*16)%16 | 0;
	        d = Math.floor(d/16);
	        return (c=='x' ? r : (r&0x3|0x8)).toString(16);
	    });

	    return uuid.toUpperCase();	   
	}
		
</script>	

<div class="main-content">
	<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default panel-shadow" data-collapse="0">
					<div class="panel-heading">
						<div class="panel-title">Matter Detail</div>
					</div>
					<div class="panel-body">
						<?php 							
							if(isset($lumpsum)){
								$row = json_decode($lumpsum);								
								?>
								<div class="row">
									<div class="col-md-6">
										<table class="table table-bordered">
											<thead>
												<tr>
													<th width="40px">No</th>
													<th>Parameter</th>
													<th>value</th>
												</tr>
											</thead>
											
											<tbody>
												<tr>
													<td>1</td>
													<td>Id Matter</td>
													<td><?php echo $row->{'id_matter'}; ?></td>
												</tr>
												
												<tr>
													<td>2</td>
													<td>Client</td>
													<td><?php echo $row->{'nama_client'} ?></td>
												</tr>
												
												<tr>
													<td>3</td>
													<td>Matter</td>
													<td><?php echo $row->{'matter'}; ?></td>
												</tr>

												<tr>
													<td>4</td>
													<td>Open Date</td>
													<td><?php 
													$openDate = new DateTime($row->{'open_date'});
													echo $openDate->format('d-m-Y'); ?></td>
												</tr>

												<tr>
													<td>5</td>
													<td>Close Date</td>
													<td><?php 
													$closeDate = new DateTime($row->{'close_date'});
													echo $closeDate->format('d-m-Y'); ?></td>
												</tr>

												<tr>
													<td>6</td>
													<td>Description</td>
													<td><?php echo $row->{'description'}; ?></td>
												</tr>
												
											</tbody>
										</table>	
									</div>
									<div class="col-md-6">
										<table class="table table-bordered">
											<thead>
												<tr>
													<th width="40px">No</th>
													<th width="200px">Parameter</th>
													<th>value</th>
												</tr>
											</thead>
											
											<tbody>												
												<tr>
													<td>1</td>
													<td>Success Fee</td>
													<td><?php echo number_format($row->{'success_fee'}); ?></td>
												</tr>
												<tr>
													<td>2</td>
													<td>Term 1</td>
													<td><?php echo number_format($row->{'term1'}); ?></td>
												</tr>
												<tr>
													<td>3</td>
													<td>Term 2</td>
													<td><?php echo number_format($row->{'term2'}); ?></td>
												</tr>
												<tr>
													<td>4</td>
													<td>Term 3</td>
													<td><?php echo number_format($row->{'term3'}); ?></td>
												</tr>
												<tr>
													<td>5</td>
													<td>Description Term 1</td>
													<td><?php echo $row->{'desc_term1'}; ?></td>
												</tr>
												<tr>
													<td>6</td>
													<td>Description Term 2</td>
													<td><?php echo $row->{'desc_term2'}; ?></td>
												</tr>
												<tr>
													<td>7</td>
													<td>Description Term 3</td>
													<td><?php echo $row->{'desc_term3'}; ?></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<?php

							}elseif(isset($hourly)){
								$row = json_decode($hourly);
								?>
								<div class="row">
									<div class="col-md-6">
										<table class="table table-bordered">
											<thead>
												<tr>
													<th width="40px">No</th>
													<th>Parameter</th>
													<th>value</th>
												</tr>
											</thead>
											
											<tbody>
												<tr>
													<td>1</td>
													<td>Id Matter</td>
													<td><?php echo $row->{'id_matter'}; ?></td>
												</tr>
												
												<tr>
													<td>2</td>
													<td>Client</td>
													<td><?php echo $row->{'nama_client'} ?></td>
												</tr>
												
												<tr>
													<td>3</td>
													<td>Matter</td>
													<td><?php echo $row->{'matter'}; ?></td>
												</tr>

												<tr>
													<td>4</td>
													<td>Open Date</td>
													<td><?php echo $row->{'open_date'}; ?></td>
												</tr>

												<tr>
													<td>5</td>
													<td>Close Date</td>
													<td><?php echo $row->{'close_date'}; ?></td>
												</tr>

												<tr>
													<td>6</td>
													<td>Description</td>
													<td><?php echo $row->{'description'}; ?></td>
												</tr>
												
											</tbody>
										</table>	
									</div>
									<div class="col-md-6">
										<table class="table table-bordered">
											<thead>
												<tr>
													<th width="40px">No</th>
													<th width="200px">Parameter</th>
													<th>value</th>
												</tr>
											</thead>
											
											<tbody>												
												<tr>
													<td>1</td>
													<td>Managing Partner</td>
													<td><?php echo number_format($row->{'managing_partner'}); ?></td>
												</tr>
												<tr>
													<td>2</td>
													<td>Partner</td>
													<td><?php echo number_format($row->{'partner'}); ?></td>
												</tr>
												<tr>
													<td>3</td>
													<td>Junior Partner</td>
													<td><?php echo number_format($row->{'junior_partner'}); ?></td>
												</tr>
												<tr>
													<td>4</td>
													<td>Senior Associate</td>
													<td><?php echo number_format($row->{'senior_associate'}); ?></td>
												</tr>
												<tr>
													<td>5</td>
													<td>Mid Associate</td>
													<td><?php echo number_format($row->{'mid_associate'}); ?></td>
												</tr>
												<tr>
													<td>6</td>
													<td>Junior Associate</td>
													<td><?php echo number_format($row->{'junior_associate'}); ?></td>
												</tr>
												<tr>
													<td>7</td>
													<td>Disc (%)</td>
													<td><?php echo $row->{'disc'}; ?></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<?php
							}elseif(isset($retainer)){
								$row = json_decode($retainer);
								?>
								<div class="row">
									<div class="col-md-6">
										<table class="table table-bordered">
											<thead>
												<tr>
													<th width="40px">No</th>
													<th width="200px">Parameter</th>
													<th>value</th>
												</tr>
											</thead>
											
											<tbody>
												<tr>
													<td>1</td>
													<td>Id Matter</td>
													<td><?php echo $row->{'id_matter'}; ?></td>
												</tr>
												
												<tr>
													<td>2</td>
													<td>Client</td>
													<td><?php echo $row->{'nama_client'} ?></td>
												</tr>
												
												<tr>
													<td>3</td>
													<td>Matter</td>
													<td><?php echo $row->{'matter'}; ?></td>
												</tr>

												<tr>
													<td>4</td>
													<td>Open Date</td>
													<td><?php echo $row->{'open_date'}; ?></td>
												</tr>

												<tr>
													<td>5</td>
													<td>Close Date</td>
													<td><?php echo $row->{'close_date'}; ?></td>
												</tr>

												<tr>
													<td>6</td>
													<td>Description</td>
													<td><?php echo $row->{'description'}; ?></td>
												</tr>
												
											</tbody>
										</table>	
									</div>
									<div class="col-md-6">
										<table class="table table-bordered">
											<thead>
												<tr>
													<th width="40px">No</th>
													<th width="200px">Parameter</th>
													<th>value</th>
												</tr>
											</thead>
											
											<tbody>												
												<tr>
													<td>1</td>
													<td>Jangka Waktu</td>
													<td><?php echo number_format($row->{'jangka_waktu'}); ?></td>
												</tr>
												<tr>
													<td>2</td>
													<td>Biaya</td>
													<td><?php echo number_format($row->{'biaya'}); ?></td>
												</tr>
												<tr>
													<td>3</td>
													<td>Jam</td>
													<td><?php echo number_format($row->{'jam'}); ?></td>
												</tr>
												<tr>
													<td>4</td>
													<td>Disc</td>
													<td><?php echo number_format($row->{'disc'}); ?></td>
												</tr>												
											</tbody>
										</table>
									</div>
								</div>
								<?php
							}elseif(isset($successfee)){
								$row = json_decode($successfee);
								?>
								<div class="row">
									<div class="col-md-6">
										<table class="table table-bordered">
											<thead>
												<tr>
													<th width="40px">No</th>
													<th width="200px">Parameter</th>
													<th>value</th>
												</tr>
											</thead>
											
											<tbody>
												<tr>
													<td>1</td>
													<td>Id Matter</td>
													<td><?php echo $row->{'id_matter'}; ?></td>
												</tr>
												
												<tr>
													<td>2</td>
													<td>Client</td>
													<td><?php echo $row->{'nama_client'} ?></td>
												</tr>
												
												<tr>
													<td>3</td>
													<td>Matter</td>
													<td><?php echo $row->{'matter'}; ?></td>
												</tr>

												<tr>
													<td>4</td>
													<td>Open Date</td>
													<td><?php echo $row->{'open_date'}; ?></td>
												</tr>

												<tr>
													<td>5</td>
													<td>Close Date</td>
													<td><?php echo $row->{'close_date'}; ?></td>
												</tr>

												<tr>
													<td>6</td>
													<td>Description</td>
													<td><?php echo $row->{'description'}; ?></td>
												</tr>
												
											</tbody>
										</table>	
									</div>
									<div class="col-md-6">
										<table class="table table-bordered">
											<thead>
												<tr>
													<th width="40px">No</th>
													<th width="200px">Parameter</th>
													<th>value</th>
												</tr>
											</thead>
											
											<tbody>												
												<tr>
													<td>1</td>
													<td>Biaya</td>
													<td><?php echo number_format($row->{'biaya'}); ?></td>
												</tr>																							
											</tbody>
										</table>
									</div>
								</div>
								<?php
							}elseif(isset($probono)){
								$row = json_decode($probono);
								?>
								<div class="row">
									<div class="col-md-6">
										<table class="table table-bordered">
											<thead>
												<tr>
													<th width="40px">No</th>
													<th width="200px">Parameter</th>
													<th>value</th>
												</tr>
											</thead>
											
											<tbody>
												<tr>
													<td>1</td>
													<td>Id Matter</td>
													<td><?php echo $row->{'id_matter'}; ?></td>
												</tr>
												
												<tr>
													<td>2</td>
													<td>Client</td>
													<td><?php echo $row->{'nama_client'} ?></td>
												</tr>
												
												<tr>
													<td>3</td>
													<td>Matter</td>
													<td><?php echo $row->{'matter'}; ?></td>
												</tr>

												<tr>
													<td>4</td>
													<td>Open Date</td>
													<td><?php echo $row->{'open_date'}; ?></td>
												</tr>

												<tr>
													<td>5</td>
													<td>Close Date</td>
													<td><?php echo $row->{'close_date'}; ?></td>
												</tr>

												<tr>
													<td>6</td>
													<td>Description</td>
													<td><?php echo $row->{'description'}; ?></td>
												</tr>
												
											</tbody>
										</table>	
									</div>									
								</div>
								<?php
							}elseif(isset($project)){
								$row = json_decode($project);
								?>
								<div class="row">
									<div class="col-md-6">
										<table class="table table-bordered">
											<thead>
												<tr>
													<th width="40px">No</th>
													<th>Parameter</th>
													<th>value</th>
												</tr>
											</thead>
											
											<tbody>
												<tr>
													<td>1</td>
													<td>Id Matter</td>
													<td><?php echo $row->{'id_matter'}; ?></td>
												</tr>
												
												<tr>
													<td>2</td>
													<td>Client</td>
													<td><?php echo $row->{'nama_client'} ?></td>
												</tr>
												
												<tr>
													<td>3</td>
													<td>Matter</td>
													<td><?php echo $row->{'matter'}; ?></td>
												</tr>

												<tr>
													<td>4</td>
													<td>Open Date</td>
													<td><?php echo $row->{'open_date'}; ?></td>
												</tr>

												<tr>
													<td>5</td>
													<td>Close Date</td>
													<td><?php echo $row->{'close_date'}; ?></td>
												</tr>

												<tr>
													<td>6</td>
													<td>Description</td>
													<td><?php echo $row->{'description'}; ?></td>
												</tr>
												
											</tbody>
										</table>	
									</div>
									<div class="col-md-6">
										<table class="table table-bordered">
											<thead>
												<tr>
													<th width="40px">No</th>
													<th width="200px">Parameter</th>
													<th>value</th>
												</tr>
											</thead>
											
											<tbody>												
												<tr>
													<td>1</td>
													<td>Success Fee</td>
													<td><?php echo number_format($row->{'success_fee'}); ?></td>
												</tr>
												<tr>
													<td>2</td>
													<td>Term 1</td>
													<td><?php echo number_format($row->{'term1'}); ?></td>
												</tr>
												<tr>
													<td>3</td>
													<td>Term 2</td>
													<td><?php echo number_format($row->{'term2'}); ?></td>
												</tr>
												<tr>
													<td>4</td>
													<td>Term 3</td>
													<td><?php echo number_format($row->{'term3'}); ?></td>
												</tr>
												<tr>
													<td>5</td>
													<td>Description Term 1</td>
													<td><?php echo $row->{'desc_term1'}; ?></td>
												</tr>
												<tr>
													<td>6</td>
													<td>Description Term 2</td>
													<td><?php echo $row->{'desc_term2'}; ?></td>
												</tr>
												<tr>
													<td>7</td>
													<td>Description Term 3</td>
													<td><?php echo $row->{'desc_term3'}; ?></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<?php
							}
							
						 ?>						
					</div>
				</div>
			</div> <!-- row header  matter --> <!-- row matter detail -->
		<!-- Footer -->
	</div>	

	<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default panel-shadow" data-collapse="0">
					<div class="panel-heading">
						<div class="panel-title">SUB MATTER</div>
					</div>
					<div class="panel-body">
						
						<!--tabs-->
						<div class="col-md-12">
		
							<ul class="nav nav-tabs bordered"><!-- available classes "bordered", "right-aligned" -->
								<li class="active">
									<a href="#lumpsum" data-toggle="tab">
										<span class="visible-xs"><i class="entypo-home"></i></span>
										<span class="hidden-xs">LUMPSUM</span>
									</a>
								</li>
								<li>
									<a href="#hourly" data-toggle="tab">
										<span class="visible-xs"><i class="entypo-user"></i></span>
										<span class="hidden-xs">HOURLY</span>
									</a>
								</li>
								<li>
									<a href="#retainer" data-toggle="tab">
										<span class="visible-xs"><i class="entypo-mail"></i></span>
										<span class="hidden-xs">RETAINER</span>
									</a>
								</li>
								<li>
									<a href="#successfee" data-toggle="tab">
										<span class="visible-xs"><i class="entypo-cog"></i></span>
										<span class="hidden-xs">SUCCESS FEE</span>
									</a>
								</li>
								<li>
									<a href="#probono" data-toggle="tab">
										<span class="visible-xs"><i class="entypo-cog"></i></span>
										<span class="hidden-xs">PROBONO</span>
									</a>
								</li>
								<li>
									<a href="#project" data-toggle="tab">
										<span class="visible-xs"><i class="entypo-cog"></i></span>
										<span class="hidden-xs">PROJECT</span>
									</a>
								</li>
							</ul>
							
							<div class="tab-content">
								<div class="tab-pane active" id="lumpsum">
									<div class="row">
										<div class="col-md-12">	
											<button type="button" class="btn btn-info" onclick="add_subLumpsum()" style="float:right;">+ Add New</button>
										</div>
									</div>
									<br />	
									<div class="row">
										<div class="col-md-12">
											<table class="table table-bordered datatable" id="tableSubLumpsum">
												<thead>
													<tr>
														<th>No</th>														
														<th>Id Sub Matter</th>														
														<th>Matter</th>
														<th>Open Date</th>
														<th>Close Date</th>
														<th>Success Fee</th>
														<th>Assign</th>
														<th>Active</th>
														<th>Action</th>
													</tr>
												</thead>
												<tbody>	
												<?php 
												$counter = 1;
												if(isset($records)){
													foreach($records as $row){ ?>

												
													<tr>
														<td><?php echo $counter; ?></td>														
														<td><?php echo $row->id_submatter; ?></td>
														<td><?php echo $row->submatter; ?></td>
														<td><?php 
														$openDate = new DateTime($row->open_date);
														echo $openDate->format('d-m-Y'); ?></td>
														<td><?php 
														$closeDate = new DateTime($row->close_date);
														echo $closeDate->format('d-m-Y'); ?></td>
														<td><?php echo number_format($row->success_fee); ?></td>
														<td>0</td>														
														<td align="center">
															<button type="button" name="btnActive" class="btn btn-success" onclick="#" />
																<i class="entypo-check"></i>
															</button>
														</td>														
														<td align="center">
															<button type="button" name="btnEditActionLumpsum" class="btn btn-success" id="<?php echo $row->id_submatter; ?>">																				
																<i class="entypo-pencil"></i>
															</button>
															<button type="button" name="btnDeleteAction" onclick="#" class="btn btn-danger" id="">	
																<i class="entypo-trash"></i>
															</button>
														</td>
													</tr>																																				
												<?php $counter++;}
												} ?>												
												</tbody>
												<tfoot>
													<tr>
														<th>No</th>														
														<th>Id Sub Matter</th>														
														<th>Matter</th>
														<th>Open Date</th>
														<th>Close Date</th>
														<th>Success Fee</th>
														<th>Assign</th>
														<th>Active</th>
														<th>Action</th>
													</tr>
												</tfoot>
											</table>
										</div>
									</div>
									
								</div>
								<div class="tab-pane" id="hourly">
									<div class="row">
										<div class="col-md-12">	
											<button type="button" class="btn btn-info" onclick="add_subHourly()" style="float:right;">+ Add New</button>
										</div>
									</div>
									<br />
									<div class="row">
										<div class="col-md-12">
											<table class="table table-bordered datatable" id="tableSubHourly">
												<thead>
													<tr>
														<th>No</th>
														<th>Id Matter</th>														
														<th>Id Sub Matter</th>
														<th>Client</th>
														<th>Matter</th>
														<th>Open Date</th>
														<th>Close Date</th>														
														<th>Assign</th>
														<th>Active</th>
														<th>Action</th>
													</tr>
												</thead>
												<tbody>													
													<tr>
														<td>Gecko</td>
														<td>Firefox 1.0</td>
														<td>Firefox 1.0</td>
														<td>Firefox 1.0</td>
														<td>Firefox 1.0</td>
														<td>Firefox 1.0</td>
														<td>Firefox 1.0</td>														
														<td>Firefox 1.0</td>
														<td align="center">
															<button type="button" name="btnActive" class="btn btn-success" onclick="#" />
																<i class="entypo-check"></i>
															</button>
														</td>														
														<td align="center">
															<button type="button" name="btnEditActionProject" class="btn btn-success" id="#">																				
																<i class="entypo-pencil"></i>
															</button>
															<button type="button" name="btnDeleteAction" onclick="#" class="btn btn-danger" id="">	
																<i class="entypo-trash"></i>
															</button>
														</td>
													</tr>																																					
												</tbody>
												<tfoot>
													<tr>
														<th>No</th>
														<th>Id Matter</th>														
														<th>Id Sub Matter</th>
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
								<div class="tab-pane" id="retainer">
									<div class="row">
										<div class="col-md-12">	
											<button type="button" class="btn btn-info" onclick="add_subRetainer()" style="float:right;">+ Add New</button>
										</div>
									</div>
									<br />	
									<div class="row">
										<div class="col-md-12">
											<table class="table table-bordered datatable" id="tableSubRetainer">
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
													<tr>
														<td>Gecko</td>
														<td>Firefox 1.0</td>
														<td>Firefox 1.0</td>
														<td>Firefox 1.0</td>
														<td>Firefox 1.0</td>
														<td>Firefox 1.0</td>
														<td>Firefox 1.0</td>
														<td>Firefox 1.0</td>
														<td>Firefox 1.0</td>
														<td>Firefox 1.0</td>														
														<td>Firefox 1.0</td>
														<td>Firefox 1.0</td>
														<td align="center">
															<button type="button" name="btnActive" class="btn btn-success" onclick="#" />
																<i class="entypo-check"></i>
															</button>
														</td>
														<td align="center">
															<button type="button" name="btnEditActionProject" class="btn btn-success" id="#">																				
																<i class="entypo-pencil"></i>
															</button>
															<button type="button" name="btnDeleteAction" onclick="#" class="btn btn-danger" id="">	
																<i class="entypo-trash"></i>
															</button>
														</td>
													</tr>																																				
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
														<th style="width:250px;">Description</th>																		
														<th>Assign</th>
														<th>Active</th>
														<th style="width:160px;">Action</th>
													</tr>
												</tfoot>
											</table>
											
										</div>
									</div>
										
								</div>
								
								<div class="tab-pane" id="successfee">

									<div class="row">
										<div class="col-md-12">	
											<button type="button" class="btn btn-info" onclick="add_subSuccessfee()" style="float:right;">+ Add New</button>
										</div>
									</div>
									<br />
									<div class="row">
										<div class="col-md-12">
											<table class="table table-bordered datatable" id="tableSubSuccessfee">
												<thead>
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
												</thead>
												<tbody>													
													<tr>
														<td>Gecko</td>
														<td>Firefox 1.0</td>
														<td>Firefox 1.0</td>
														<td>Firefox 1.0</td>
														<td>Firefox 1.0</td>
														<td>Firefox 1.0</td>
														<td>Firefox 1.0</td>
														<td>Firefox 1.0</td>
														<td>Firefox 1.0</td>
														<td align="center">
															<button type="button" name="btnActive" class="btn btn-success" onclick="#" />
																<i class="entypo-check"></i>
															</button>
														</td>														
														<td align="center">
															<button type="button" name="btnEditActionProject" class="btn btn-success" id="#">																				
																<i class="entypo-pencil"></i>
															</button>
															<button type="button" name="btnDeleteAction" onclick="#" class="btn btn-danger" id="">	
																<i class="entypo-trash"></i>
															</button>
														</td>
													</tr>																								
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

								<div class="tab-pane" id="probono">
									<div class="row">
										<div class="col-md-12">	
											<button type="button" class="btn btn-info" onclick="add_subProbono()" style="float:right;">+ Add New</button>
										</div>
									</div>
									<br />
									<div class="row">
										<div class="col-md-12">
											<table class="table table-bordered datatable" id="tableSubProbono">
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
													<tr>
														<td>Gecko</td>
														<td>Firefox 1.0</td>
														<td>Firefox 1.0</td>
														<td>Firefox 1.0</td>
														<td>Firefox 1.0</td>
														<td>Firefox 1.0</td>
														<td>Firefox 1.0</td>
														<td>Firefox 1.0</td>
														<td>Firefox 1.0</td>
														<td align="center">
															<button type="button" name="btnActive" class="btn btn-success" onclick="#" />
																<i class="entypo-check"></i>
															</button>
														</td>														
														<td align="center">
															<button type="button" name="btnEditActionProject" class="btn btn-success" id="#">																				
																<i class="entypo-pencil"></i>
															</button>
															<button type="button" name="btnDeleteAction" onclick="#" class="btn btn-danger" id="">	
																<i class="entypo-trash"></i>
															</button>
														</td>
													</tr>																																				
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
														<th style="width:160px;">Action</th>
													</tr>
												</tfoot>
											</table>
											
										</div>
									</div>

								</div>

								<div class="tab-pane" id="project">
									<div class="row">
										<div class="col-md-12">	
											<button type="button" class="btn btn-info" onclick="add_subProject()" style="float:right;">+ Add New</button>
										</div>
									</div>
									<br />	
									<div class="row">
										<div class="col-md-12">
											<table class="table table-bordered datatable" id="tableSubProject">
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
													<tr>
														<td>Gecko</td>
														<td>Firefox 1.0</td>
														<td>Firefox 1.0</td>
														<td>Firefox 1.0</td>
														<td>Firefox 1.0</td>
														<td>Firefox 1.0</td>
														<td>Firefox 1.0</td>
														<td>Firefox 1.0</td>
														<td>Firefox 1.0</td>
														<td align="center">
															<button type="button" name="btnActive" class="btn btn-success" onclick="#" />
																<i class="entypo-check"></i>
															</button>
														</td>														
														<td align="center">
															<button type="button" name="btnEditActionProject" class="btn btn-success" id="#">																				
																<i class="entypo-pencil"></i>
															</button>
															<button type="button" name="btnDeleteAction" onclick="#" class="btn btn-danger" id="">	
																<i class="entypo-trash"></i>
															</button>
														</td>
													</tr>																							
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
														<th style="width:169px;">Action</th>
													</tr>
												</tfoot>
											</table>
										</div>
									</div>

								</div>
							</div>
							
							
						</div>
						<!--tabs-->

					</div>
				</div>
			</div> <!-- row sub matter -->
	</div>

		
	<div class="row">
		<?php $this->load->view('footer_view'); ?>
	</div>
</div>

<!-- modal lumpsum-->
<div class="modal fade" id="modalLumpsum">
		<div class="modal-dialog">
			<div class="modal-content">
				
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">New Sub Matter (LUMPSUM)</h4>
				</div>
				
				<div class="modal-body">
				
				<form role="form" class="form-horizontal form-groups-bordered" method="post" action="" style="padding:10px;" id="formSubLumpsum">
								<div class="row">
									<div class="col-md-6">						
										<div class="form-group">
											<label for="txt_id_matter" class="control-label">Id Matter</label>
											<input type="text" class="form-control" id="txt_id_matter_disabled" name="txt_id_matter_disabled" value="<?php echo $this->uri->segment(3) ?>" disabled />
											<input type="hidden" class="form-control" id="txt_id_matter_h" name="txt_id_matter_h" value="<?php echo $this->uri->segment(3) ?>" />
										</div>							
									</div>									
									<div class="col-md-6">						
										<div class="form-group" style="padding-left:10px;">
											<label for="txt_nama_client" class="control-label">Client</label>																		
											<input type="text" class="form-control" id="txt_nama_client" name="txt_nama_client" value="" disabled />
										</div>						
									</div>
								</div>
								
								<div class="row">
									<div class="col-md-12">						
										<div class="form-group">
											<label for="txt_matter" class="control-label">Matter</label>
											<input type="text" class="form-control" id="txt_matter" name="txt_matter" value="" disabled />
											<input type="hidden" class="form-control" id="txt_id_payment" name="txt_id_payment" value="1">
										</div>							
									</div>									
								</div>

								<div class="row">
									<div class="col-md-12">						
										<div class="form-group">
											<label for="txt_id_subMatter" class="control-label">Id Sub Matter</label>
											<input type="text" class="form-control" id="txt_id_subMatter" name="txt_id_subMatter" value="" />											
										</div>							
									</div>									
								</div>

								<div class="row">
									<div class="col-md-12">						
										<div class="form-group">
											<label for="txt_sub_matter" class="control-label">Sub Matter</label>
											<input type="text" class="form-control" id="txt_sub_matter" name="txt_sub_matter" value="" />											
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
<!-- modal lumpsum-->

<!-- modal hourly -->
<div class="modal fade" id="modalHourly">
		<div class="modal-dialog">
			<div class="modal-content">
				
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">New Sub Matter (HOURLY)</h4>
				</div>
				
				<div class="modal-body">
				
				<form role="form" class="form-horizontal form-groups-bordered" method="post" id="formHourly" action="#" style="padding:10px;">
								<div class="row">
									<div class="col-md-6">						
										<div class="form-group">
											<label for="txt_id_matter_disabled" class="control-label">Id Matter</label>
											<input type="text" class="form-control" id="txt_id_matter_disabled" name="txt_id_matter_disabled" value="" disabled />
											<input type="hidden" class="form-control" id="txt_id_matter_h" name="txt_id_matter_h" value=""  />
											<input type="hidden" class="form-control" id="txt_id_payment" name="txt_id_payment" value="2"> <!--id payment hourly-->
										</div>							
									</div>
									<div class="col-md-6">						
										<div class="form-group" style="padding-left:10px;">
											<label for="txt_nama_client" class="control-label">Client</label>							
											<input type="text" class="form-control" id="txt_nama_client" name="txt_nama_client" value="" disabled />										
										</div>						
									</div>
								</div>
								
								<div class="row">
									<div class="col-md-12">						
										<div class="form-group">
											<label for="txt_matter" class="control-label">Matter</label>
											<input type="text" class="form-control" id="txt_matter" name="txt_matter" value="" disabled />											
										</div>							
									</div>
									
								</div>

								<div class="row">
									<div class="col-md-12">						
										<div class="form-group">
											<label for="txt_sub_matter" class="control-label">Sub Matter</label>
											<input type="text" class="form-control" id="txt_sub_matter" name="txt_sub_matter" value="" />											
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
<!-- modal hourly -->


<!-- modal retainer -->
<div class="modal fade" id="modalRetainer">
		<div class="modal-dialog">
			<div class="modal-content">
				
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">New Sub Matter (RETAINER)</h4>
				</div>
				
				<div class="modal-body">
				
				<form role="form" class="form-horizontal form-groups-bordered" id="formRetainer" method="post" action="#" style="padding:10px;">
								<div class="row">
									<div class="col-md-6">						
										<div class="form-group">
											<label for="txt_id_matter_disabled" class="control-label">Id Matter</label>
											<input type="text" class="form-control" id="txt_id_matter_disabled" name="txt_id_matter_disabled" value="" disabled />
											<input type="hidden" class="form-control" id="txt_id_matter_r" name="txt_id_matter_r" value=""  />
											<input type="hidden" class="form-control" id="txt_id_payment" name="txt_id_payment" value="3"  />
										</div>							
									</div>
									<div class="col-md-6">						
										<div class="form-group" style="padding-left:10px;">
											<label for="txt_nama_client" class="control-label">Client</label>							
											<input type="text" class="form-control" id="txt_nama_client" name="txt_nama_client" value="" disabled />											
										</div>						
									</div>
								</div>
								
								<div class="row">
									<div class="col-md-12">						
										<div class="form-group">
											<label for="txt_matter" class="control-label">Matter</label>
											<input type="text" class="form-control" id="txt_matter" name="txt_matter" value="" disabled />
										</div>							
									</div>
									
								</div>

								<div class="row">
									<div class="col-md-12">						
										<div class="form-group">
											<label for="txt_sub_matter" class="control-label">Sub Matter</label>
											<input type="text" class="form-control" id="txt_sub_matter" name="txt_sub_matter" value="">
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
<!-- modal retainer -->

<!-- modal success fee -->
<div class="modal fade" id="modalSuccessfee">
		<div class="modal-dialog">
			<div class="modal-content">
				
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">New Sub Matter (SUCCESS FEE)</h4>
				</div>
				
				<div class="modal-body">
				
				<form role="form" class="form-horizontal form-groups-bordered" id="formSuccessfee" method="post" action="" style="padding:10px;">
								<div class="row">
									<div class="col-md-6">						
										<div class="form-group">
											<label for="txt_id_matter_disabled" class="control-label">Id Matter</label>
											<input type="text" class="form-control" id="txt_id_matter_disabled" name="txt_id_matter_disabled" value="" disabled />
											<input type="hidden" class="form-control" id="txt_id_matter_s" name="txt_id_matter_s" value="" />
											<input type="hidden" class="form-control" id="txt_id_payment" name="txt_id_payment" value="4" />
										</div>							
									</div>
									<div class="col-md-6">						
										<div class="form-group" style="padding-left:10px;">
											<label for="txt_nama_client" class="control-label">Client</label>							
											<input type="text" class="form-control" id="txt_nama_client" name="txt_nama_client" value="" disabled />											
										</div>						
									</div>
								</div>
								
								<div class="row">
									<div class="col-md-12">						
										<div class="form-group">
											<label for="txt_matter" class="control-label">Matter</label>
											<input type="text" class="form-control" id="txt_matter" name="txt_matter" value="" disabled />
										</div>							
									</div>									
								</div>

								<div class="row">
									<div class="col-md-12">						
										<div class="form-group">
											<label for="txt_sub_matter" class="control-label">Sub Matter</label>
											<input type="text" class="form-control" id="txt_sub_matter" name="txt_sub_matter" value="">
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
<!-- modal success fee -->

<!-- modal probono -->
<div class="modal fade" id="modalProbono">
		<div class="modal-dialog">
			<div class="modal-content">
				
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">New Sub Matter (PROBONO)</h4>
				</div>
				
				<div class="modal-body">
				
				<form role="form" class="form-horizontal form-groups-bordered" id="formProbono" method="post" action="" style="padding:10px;">
								<div class="row">
									<div class="col-md-6">						
										<div class="form-group">
											<label for="txt_id_matter_disabled" class="control-label">Id Matter</label>
											<input type="text" class="form-control" id="txt_id_matter_disabled" name="txt_id_matter_disabled" value="" disabled />
											<input type="hidden" class="form-control" id="txt_id_matter_p" name="txt_id_matter_p" value="" />
											<input type="hidden" class="form-control" id="txt_id_payment" name="txt_id_payment" value="5" />
										</div>							
									</div>
									<div class="col-md-6">						
										<div class="form-group" style="padding-left:10px;">
											<label for="txt_nama_client" class="control-label">Client</label>							
											<input type="text" class="form-control" id="txt_nama_client" name="txt_nama_client" value="" disabled />										
										</div>						
									</div>
								</div>
								
								<div class="row">
									<div class="col-md-12">						
										<div class="form-group">
											<label for="txt_matter" class="control-label">Matter</label>
											<input type="text" class="form-control" id="txt_matter" name="txt_matter" value="" disabled />
										</div>							
									</div>									
								</div>

								<div class="row">
									<div class="col-md-12">						
										<div class="form-group">
											<label for="txt_sub_matter" class="control-label">Sub Matter</label>
											<input type="text" class="form-control" id="txt_sub_matter" name="txt_sub_matter" value="" />
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
<!-- modal probono -->

<!-- modal project -->
<div class="modal fade" id="modalProject">
		<div class="modal-dialog">
			<div class="modal-content">				
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">New Sub Matter (PROJECT)</h4>
				</div>
				
				<div class="modal-body">
				
				<form role="form" class="form-horizontal form-groups-bordered" id="formProject" method="post" action="" style="padding:10px;">
								<div class="row">
									<div class="col-md-6">						
										<div class="form-group">
											<label for="txt_id_matter_disabled" class="control-label">Id Matter</label>
											<input type="text" class="form-control" id="txt_id_matter_disabled" name="txt_id_matter_disabled" value="" disabled />
											<input type="hidden" class="form-control" id="txt_id_matter_pr" name="txt_id_matter_pr" value=""  />
											<input type="hidden" class="form-control" id="txt_id_payment" name="txt_id_payment" value="6" />
										</div>							
									</div>
									<div class="col-md-6">						
										<div class="form-group" style="padding-left:10px;">
											<label for="txt_nama_client" class="control-label">Client</label>																		
											<input type="text" class="form-control" id="txt_nama_client" name="txt_nama_client" value="" disabled />
										</div>						
									</div>
								</div>
								
								<div class="row">
									<div class="col-md-12">						
										<div class="form-group">
											<label for="txt_matter" class="control-label">Matter</label>
											<input type="text" class="form-control" id="txt_matter" name="txt_matter" value="" disabled />
										</div>							
									</div>									
								</div>

								<div class="row">
									<div class="col-md-12">						
										<div class="form-group">
											<label for="txt_sub_matter" class="control-label">Sub Matter</label>
											<input type="text" class="form-control" id="txt_sub_matter" name="txt_sub_matter" value="">
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
</div> 
<!-- modal project -->



	
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