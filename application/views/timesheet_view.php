<?php $this->load->view('head_view'); ?>

<body class="page-body" data-url="http://neon.dev">

<div class="page-container horizontal-menu">
	
	
	<?php $this->load->view('topheader_view'); ?>

<script type="text/javascript">
	
	jQuery(document).ready(function($)
	{
		var table = $("#table-4").dataTable({
			"sPaginationType": "bootstrap",
			"sDom": "<'row'<'col-xs-6 col-left'l><'col-xs-6 col-right'<'export-data'T>f>r>t<'row'<'col-xs-6 col-left'i><'col-xs-6 col-right'p>>",
			"oTableTools": {
			},
			
		});
	});

	function inputTimesheet(){		
		$('#formTimesheet')[0].reset(); // reset form on modals
		$('html, body').animate({ scrollTop: 0 }, 'fast');
      	$('#modalTimesheet').modal('show');
	}
		
</script>	

<div class="main-content">
	<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default panel-shadow" data-collapsed="0"><!-- to apply shadow add class "panel-shadow" -->
					<!-- panel head -->
					<div class="panel-heading">
						<div class="panel-title">Timesheet Assign List</div>
					</div>
					<!-- panel body -->
					<div class="panel-body">
						<div class="col-md-12">	
							<table class="table table-bordered datatable" id="table-4">
								<thead>
									<tr>
										<th>No</th>
										<th>Id Matter</th>
										<th>Payment</th>
										<th>Client</th>
										<th>Matter</th>
										<th>Open Date</th>
										<th>Close Date</th>										
										<th style="width:160px;">Action</th>
									</tr>
								</thead>
								<tbody>	
								<?php 
								$counter = 1;
								if(isset($matter_assigned)){
									foreach($matter_assigned as $row){ ?>
									<tr class="odd gradeX">										
										<td><?php echo $counter; ?></td>
										<td><?php echo $row->id_matter; ?></td>
										<td><?php echo $row->payment_name; ?></td>
										<td><?php echo $row->nama_client; ?></td>
										<td><?php echo $row->matter; ?></td>
										<td><?php echo $row->open_date; ?></td>			
										<td><?php echo $row->close_date; ?></td>										
										<td class="center">
											<button type="button" name="btnEditAction" class="btn btn-success" id="<?php echo $row->id_matter; ?>" onclick="inputTimesheet()">												
												<i class="glyphicon glyphicon-arrow-down"></i>
											</button>
										</td>
									</tr>
								<?php	$counter++;}
								} ?>
									
								</tbody>
								<tfoot>
									<tr>
										<th>No</th>
										<th>Id Matter</th>
										<th>Payment</th>
										<th>Client</th>
										<th>Matter</th>
										<th>Open Date</th>
										<th>Close Date</th>										
										<th style="width:160px;">Action</th>
									</tr>
								</tfoot>
							</table>
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
								<input type="text" class="form-control" id="txt_id_matter" name="txt_id_matter" value="">
							</div>							
						</div>
						<div class="col-md-6">						
							<div class="form-group" style="padding-left:10px;">
								<label for="txt_date" class="control-label">Date</label>
								<div class="input-group">
									<input type="text" class="form-control datepicker" data-format="yyyy-mm-dd" name="txt_date">												
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
						<div class="col-md-12">
							<div class="form-group">
								<label for="txt_description" class="control-label">Description</label>								
								<textarea class="form-control" id="txt_description" name="txt_description"></textarea>
							</div>
						</div>
					</div>	

					<div class="row">
						<div class="col-md-2">
							<div class="form-group">
								<label for="txt_hours" class="control-label">Hours</label>
								<input type="text" class="form-control" id="txt_hours" name="txt_hours" value="">
							</div>
						</div>						
					</div>								
				</div>
					
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" name="btnSubmit" class="btn btn-info">Save changes</button>
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
