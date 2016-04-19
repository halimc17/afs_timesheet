<?php $this->load->view('head_view'); ?>

<body class="page-body" data-url="http://neon.dev">

<div class="page-container horizontal-menu">
	
	
	<?php $this->load->view('topheader_view'); ?>

<script type="text/javascript">
	
	jQuery(document).ready(function($)
	{
		$('[name="btnAssignUser"]').button().on( "click", function() {
			submit_assign($(this).attr("id"));
		});

		var table = $("#table-4").dataTable({
			"sPaginationType": "bootstrap",
			"sDom": "<'row'<'col-xs-6 col-left'l><'col-xs-6 col-right'<'export-data'T>f>r>t<'row'<'col-xs-6 col-left'i><'col-xs-6 col-right'p>>",
			"oTableTools": {
			},
			
		});
	});

	function submit_assign(id){
		//alert(id);		
		 $.ajax({
	            url : "<?php echo site_url('matter/assign_user'); ?>",
	            type: "POST",
	            data: $('#formAssign').serialize(),
	            dataType: "JSON",
	            success: function(data)
	            {             
	             	//alert('User Assigned');
	             	window.location = "<?php echo site_url('matter/assign/').'/'.$this->uri->segment(3) ?>";
	            },
	            error: function (jqXHR, textStatus, errorThrown)
	            {
	                alert('Error adding / update data');
	            }
        	});
	}
		
</script>	

<div class="main-content">
	
	
	<div class="row">
			<div class="col-md-7">
				<div class="panel panel-default panel-shadow" data-collapsed="0"><!-- to apply shadow add class "panel-shadow" -->
					<!-- panel head -->
					<div class="panel-heading">
						<div class="panel-title">Assign Matter</div>
					</div>
					<!-- panel body -->
					<div class="panel-body">
						<div class="row">
							<div class="col-md-6">	
								<div class="panel panel-default panel-shadow" data-collapsed="0"><!-- to apply shadow add class "panel-shadow" -->

									<!-- panel head -->
									<div class="panel-heading">
										<div class="panel-title">Matter Detail</div>
										
										<div class="panel-options">
											
											<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
										</div>
									</div>
									
									<form role="form"  id="formAssign" method="post" action="#" style="padding:10px;">
									<!-- panel body -->
									<div class="panel-body">
									<?php if (isset($records_retainer)) {
											foreach($records_retainer as $row){
												$id_matter = $row->id_matter;
												$matter = $row->matter;
												$open_date = $row->open_date;
												$close_date = $row->close_date;
												$nama_client = $row->nama_client;
											}
										} ?>
										
										<div class="row">
											<div class="col-md-12">						
												<div class="form-group">
													<label for="txt_id_matter" class="control-label">Id Matter</label>							
													<input type="text" class="form-control" id="txt_id_matter" name="txt_id_matter" value="<?php echo $id_matter; ?>">
												</div>						
											</div>
										</div>

										<div class="row">
											<div class="col-md-12">						
												<div class="form-group">
													<label for="txt_matter" class="control-label">Matter</label>							
													<input type="text" class="form-control" id="txt_matter" name="txt_matter" value="<?php echo $matter; ?>">
												</div>						
											</div>
										</div>

										<div class="row">
											<div class="col-md-6">						
												<div class="form-group">
													<label for="txt_open_date" class="control-label">Open Date</label>							
													<input type="text" class="form-control" id="txt_open_date" name="txt_open_date" value="<?php echo $open_date; ?>">
												</div>						
											</div>

											<div class="col-md-6">						
												<div class="form-group">
													<label for="txt_close_date" class="control-label">Close Date</label>							
													<input type="text" class="form-control" id="txt_close_date" name="txt_close_date" value="<?php echo $close_date; ?>">
												</div>						
											</div>
										</div>

										<div class="row">
											<div class="col-md-12">						
												<div class="form-group">
													<label for="txt_client" class="control-label">Client</label>							
													<input type="text" class="form-control" id="txt_client" name="txt_client" value="<?php echo $nama_client; ?>">
												</div>						
											</div>
										</div>

										<div class="row">
											<div class="col-md-12">						
												<div class="form-group">
													<label for="combo_user" class="control-label">User</label>																				
													<select class="form-control" id="combo_user" name="combo_user">
														<?php if (isset($records_user)) {
															foreach($records_user as $row2){ ?>
														<option value="<?php echo $row2->id_user; ?>"><?php echo $row2->nama ?></option>
														<?php	}
														} ?>
													</select>
												</div>						
											</div>
										</div>

										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<button type="button" class="btn btn-default" data-dismiss="modal" onclick="#">DONE</button>
													<button type="button" name="btnAssignUser" class="btn btn-info" id="#">ASSIGN</button>
												</div>
											</div>
										</div>
										
									</div>
									</form>
								</div>
							</div>

							<div class="col-md-6">	
								<div class="panel panel-default panel-shadow" data-collapsed="0"><!-- to apply shadow add class "panel-shadow" -->
									<!-- panel head -->
									<div class="panel-heading">
										<div class="panel-title">Assigned Personel</div>
										
										<div class="panel-options">
											
											<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
										</div>
									</div>
									
									<!-- panel body -->
									<div class="panel-body">
										
										<div class="col-md-12">		
											<table class="table table-striped" id="tableAssign">
												<thead>
													<tr>
														<th>#</th>
														<th>Nama</th>
														<th>Action</th>
													</tr>
												</thead>												
												<tbody>
													<?php 
													$counter = 1;
													if (isset($records_assign)) {
														foreach($records_assign as $row3){ ?>
														<tr>
														<td><?php echo $counter; ?></td>
														<td><?php echo $row3->nama; ?></td>
														<td><a href="<?php echo site_url('matter/delete_assign/')."/".$this->uri->segment(3)."/".$row3->id_matter_assign; ?>"><i class="glyphicon glyphicon-remove"></i></a></td>
													</tr>
													<?php $counter++;	}
													} ?>
													
												</tbody>
											</table>											
										</div>
										
									</div>
									
								</div>
							</div>
						</div>
						
					</div>	
				</div>
			</div>

	<!-- Footer -->
	
	</div>	
	
	<div class="row">
		<?php $this->load->view('footer_view'); ?>
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