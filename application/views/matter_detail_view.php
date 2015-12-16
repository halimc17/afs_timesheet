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
											<td>Payment</td>
											<td><?php echo $row->payment_name; ?></td>
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
												<th>Action</th>												
											</tr>
										</thead>
										<tbody>
											<?php 
											$counter = 1;
											if(isset($timesheet)){
												foreach($timesheet as $row2){ ?>
											<tr>
												<td><?php echo $counter; ?></td>												
												<td><?php echo $row2->input_date; ?></td>																								
												<td><?php echo $row2->inisial; ?></td>																								
												<td><?php echo $row2->description; ?></td>																								
												<td><?php echo $row2->start; ?></td>																								
												<td><?php echo $row2->end; ?></td>																								
												<td>
													<button type="button" name="btnEditActionTimesheet" class="btn btn-success" id="<?php echo $row2->id_timesheet; ?>">																				
														<i class="entypo-pencil"></i>
													</button>
													<button type="button" name="btnDeleteAction" onclick="#" class="btn btn-danger" id="">	
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