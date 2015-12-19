<?php $this->load->view('head_view'); ?>

<body class="page-body" data-url="http://neon.dev">

<div class="page-container horizontal-menu">
	
	
	<?php $this->load->view('topheader_view'); ?>



<script type="text/javascript">	
	
	jQuery(document).ready(function($)
	{
		
		var table = $("#tableTimesheet").dataTable({
			"sPaginationType": "bootstrap",
			"sDom": "<'row'<'col-xs-6 col-left'l><'col-xs-6 col-right'<'export-data'T>f>r>t<'row'<'col-xs-6 col-left'i><'col-xs-6 col-right'p>>",
			"oTableTools": {
			},
			
		});

		
	});

	function editTimesheet(id){
  		$.ajax({
			url:"<?php echo site_url('timesheet/get_record'); ?>/"+id,
			type: "GET",
			dataType: "JSON",
			success: function(data){
				$('[name="combo_worktype"]').val(data.id_work_type);
				$('[name="txt_description"]').val(data.description);
				$('[name="txt_start"]').val(data.start);
				$('[name="txt_end"]').val(data.end);			
				$('[name="txt_date"]').val(data.input_date);			
				$('[name="txt_id_timesheet"]').val(data.id_timesheet);			
							
				
				$('html, body').animate({ scrollTop: 0 }, 'fast');
				$('#modalTimesheet').modal('show'); 
			}
		})
	}

	function saveTimesheet(){
		$.ajax({
			 url : "<?php echo site_url('timesheet/edit_record'); ?>",
	            type: "POST",
	            data: $('#formTimesheet').serialize(),
	            dataType: "JSON",
	            success: function(data)
	            {
	               alert('Data Tersimpan');
	               $('#modalTimesheet').modal('hide');		               	               
	               window.location = "<?php echo site_url('timesheet/detail')."/".$this->uri->segment(3); ?>";               
	            },
	            error: function (jqXHR, textStatus, errorThrown)
	            {
	                alert('Error adding / update data');
	            }
		});
	}

	function deleteTimesheet(id){
		alert('hapus' + id);

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
						<?php if(isset($matter)){
							$row = json_decode($matter) ?>						
						<div class="row">
							<div class="col-md-5">
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
											<td>Payment</td>
											<td><?php echo $row->payment_name; ?></td>
										</tr>
									</tbody>
								</table>
							</div>

							<div class="col-md-2">
								<table class="table table-bordered">
									<thead>
										<tr>
											<th>Total Time (minutes)</th>											
										</tr>
									</thead>
									<tbody>
										<?php 
										$totalTime = 0;
										if(isset($timesheet)){
											foreach($timesheet as $row3){
												$totalTime = $totalTime + timeDiff($row3->start,$row3->end);
											}
										} ?>
										<tr>
											<td align="center"><h2><?php echo $totalTime; ?></h2></td>											
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<?php } ?>
						</div>					
					</div>
				</div>
			</div> 
		<!-- Footer -->

	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default panel-shadow" data-collapse="0">
				<div class="panel-heading">
					<div class="panel-title">Timesheet</div>
				</div>
				<div class="panel-body">														
					<div class="row">
						<div class="col-md-8">
							<table class="table table-bordered datatable" id="tableTimesheet">
								<thead>
									<tr>
										<th>No</th>														
										<th>Date</th>														
										<th>Work Type</th>
										<th>Description</th>
										<th>Start</th>
										<th>End</th>
										<th>Minutes</th>
										<th width="120">Action</th>												
									</tr>
								</thead>
								<tbody>
									<?php 
									$counter = 1;
									if(isset($timesheet)){
										foreach($timesheet as $row2){ ?>
									<tr>
										<td><?php echo $counter; ?></td>												
										<td><?php 
											$inputDate = new DateTime($row2->input_date);
											echo $inputDate->format('d-m-Y'); ?></td>																								
										<td><?php echo $row2->inisial; ?></td>																								
										<td><?php echo $row2->description; ?></td>																								
										<td><?php echo $row2->start; ?></td>																								
										<td><?php echo $row2->end; ?></td>																								
										<td><?php echo timeDiff($row2->start,$row2->end); ?></td>																								
										<td>
											<button type="button" name="btnEditActionTimesheet" class="btn btn-success" onclick="editTimesheet(<?php echo $row2->id_timesheet; ?>)" id="<?php echo $row2->id_timesheet; ?>">																				
												<i class="entypo-pencil"></i>
											</button>
											<button type="button" name="btnDeleteAction" class="btn btn-danger" id="<?php echo $row2->id_timesheet; ?>" onclick="deleteTimesheet(<?php echo $row2->id_timesheet; ?>)">	
												<i class="entypo-trash"></i>
											</button>
										</td>																								
									</tr>
									<?php	$counter++; }
									} ?>											
								</tbody>	
								<tfoot>
									<tr>
										<th>No</th>														
										<th>Date</th>														
										<th>Work Type</th>
										<th>Description</th>
										<th>Start</th>
										<th>End</th>
										<th>Minutes</th>
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




		
	<div class="row">
		<?php $this->load->view('footer_view'); ?>
	</div>
</div>

<div class="modal fade" id="modalTimesheet">
	<div class="modal-dialog">
		<div class="modal-content">
				
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Input Timesheet</h4>
			</div>
			<form role="form" class="form-horizontal form-groups-bordered" method="post" action="" style="padding:10px;" id="formTimesheet">
				<div class="modal-body">

					<div class="row">
						<div class="col-md-6">						
							<div class="form-group">
								<label for="txt_id_matter" class="control-label">Id Matter</label>
								<input type="text" class="form-control" id="txt_id_matter" name="txt_id_matter" value="<?php echo $this->uri->segment(3); ?>" disabled />
								<input type="hidden" class="form-control" id="txt_id_matter_" name="txt_id_matter_" value="<?php echo $this->uri->segment(3); ?>"  />
								<input type="hidden" class="form-control" id="txt_id_timesheet" name="txt_id_timesheet" value=""  />
							</div>							
						</div>
						<div class="col-md-6">						
							<div class="form-group" style="padding-left:10px;">
								<label for="txt_date" class="control-label">Date</label>
								<div class="input-group">
									<input type="text" class="form-control datepicker" data-format="yyyy-mm-dd" name="txt_date" value="<?php echo date("Y-m-d"); ?>">												
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
								<label for="txt_lawyer" class="control-label">Lawyer</label>
								<input type="text" class="form-control" id="txt_lawyer" name="txt_lawyer" value="<?php echo $this->session->userdata('nama'); ?>" disabled />
							</div>							
						</div>
						<div class="col-md-3">						
							<div class="form-group" style="padding-left:10px;">
								<label for="txt_inisial" class="control-label">Inisial</label>							
								<input type="text" class="form-control" id="txt_inisial" name="txt_inisial" value="<?php echo $this->session->userdata('inisial'); ?>" disabled />
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="combo_worktype" class="control-label">Work Type</label>																
								<select class="form-control" id="combo_worktype" name="combo_worktype">
									<?php if(isset($worktype)){
										foreach($worktype as $a){ ?>
										<option value="<?php echo $a->id_work_type; ?>"><?php echo $a->worktype; ?></option>
									<?php	}
									} ?>
								</select>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="txt_description" class="control-label">Description</label>								
								<textarea class="form-control" id="txt_description" name="txt_description"></textarea>
							</div>
						</div>
					</div>	

					<div class="row">						
						<div class="col-md-4">
							<div class="form-group">
								<label for="txt_start" class="control-label">Start</label>
								<div class="input-group">
									<input type="text" name="txt_start" class="form-control timepicker" data-template="dropdown" data-show-seconds="false" data-default-time="00:00 AM" data-show-meridian="false" data-minute-step="5" data-second-step="5" />
									<div class="input-group-addon">
											<a href="#"><i class="entypo-clock"></i></a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="form-group" style="padding-left:10px;">
								<label for="txt_end" class="control-label">End</label>
								<div class="input-group">
									<input type="text" name="txt_end" class="form-control timepicker" data-template="dropdown" data-show-seconds="false" data-default-time="00:00 AM" data-show-meridian="false" data-minute-step="5" data-second-step="5" />
									<div class="input-group-addon">
											<a href="#"><i class="entypo-clock"></i></a>
									</div>
								</div>
							</div>
						</div>				
					</div>								
				</div>
					
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" name="btnSubmit" class="btn btn-info" onclick="saveTimesheet()">Save changes</button>
				</div>				
			</form>
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
	<script src="<?php echo base_url(); ?>template/assets/js/bootstrap-timepicker.min.js"></script>
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