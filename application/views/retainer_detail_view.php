<?php $this->load->view('head_view'); ?>

<body class="page-body" data-url="http://neon.dev">

<div class="page-container horizontal-menu">
	
	
	<?php $this->load->view('topheader_view'); ?>



<script type="text/javascript">	
	
	jQuery(document).ready(function($)
	{
		
	});
		
</script>	

<div class="main-content">
	<div class="row">
		<div class="col-md-6">
			<div class="panel panel-default panel-shadow" data-collapse="0">
				<div class="panel-heading">
					<div class="panel-title">Retainer Client</div>
				</div>
				<div class="panel-body">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th width="50">No</th>
								<th>Parameter</th>
								<th>Value</th>
							</tr>							
						</thead>
						<?php if(isset($records_client)){
							foreach($records_client as $row2){ ?>								
						<tbody>
							<tr>
								<td>1</td>
								<td>Id CLient</td>
								<td><?php echo $row2->id_client; ?></td>
							</tr>
							<tr>
								<td>2</td>
								<td>Nama CLient</td>
								<td><?php echo $row2->nama_client; ?></td>
							</tr>
							<tr>
								<td>3</td>
								<td>Open Date</td>
								<td><?php echo $row2->open_date; ?></td>
							</tr>
							<tr>
								<td>4</td>
								<td>Close Date</td>
								<td><?php echo $row2->close_date; ?></td>
							</tr>
							<tr>
								<td>5</td>
								<td>Jangka Waktu</td>
								<td><?php echo $row2->jangka_waktu; ?></td>
							</tr>
							<tr>
								<td>6</td>
								<td>Biaya</td>
								<td><?php echo $row2->biaya; ?></td>
							</tr>
							<tr>
								<td>7</td>
								<td>Menit</td>
								<td><?php echo $row2->menit; ?></td>
							</tr>
						</tbody>
						<?php }
							} ?>
					</table>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default panel-shadow" data-collapse="0">
					<div class="panel-heading">
						<div class="panel-title">Retainer Detail</div>
					</div>
					<div class="panel-body">
						<table class="table table-bordered">
								<table class="table table-bordered">
									<thead>
										<tr>
											<th>No</th>
											<th>Id Matter</th>
											<th>Matter</th>
											<th>Assign</th>
											<th>Active</th>
											<th>Action</th>
										</tr>
									</thead>
									<?php 
									$counter = 1;
									if(isset($records_retainer)){
								foreach($records_retainer as $row){ ?>
								
									<tr>
										<td><?php echo $counter; ?></td>
										<td><?php echo $row->id_matter; ?></td>
										<td><?php echo $row->matter; ?></td>
										<td><a href="<?php echo site_url('matter/assign_retainer/'.$row->id_matter); ?>">0</a></td>
										<td>
												<button type="button" name="btnActive" class="btn btn-success" onclick="" />
													<i class="entypo-check"></i>
												</button>
										</td>
										<td class="center">
											<button type="button" name="btnEditActionRetainer" class="btn btn-success" id="">
												<i class="entypo-pencil"></i>
											</button>
											<button type="button" name="btnDeleteAction" onclick="" class="btn btn-danger" id="">
												<i class="entypo-trash"></i>
											</button>												
										</td>
									</tr>
									<?php	
									$counter++;}
								} ?>
								</table>
						</table>
					</div>
			</div> <!-- row header  matter --> <!-- row matter detail -->
		<!-- Footer -->
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