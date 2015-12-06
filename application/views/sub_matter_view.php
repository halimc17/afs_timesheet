<?php $this->load->view('head_view'); ?>

<body class="page-body" data-url="http://neon.dev">

<div class="page-container horizontal-menu">
	
	
	<?php $this->load->view('topheader_view'); ?>



<script type="text/javascript">	
	
	jQuery(document).ready(function($)
	{
		var table = $("#tableLumpsum").dataTable({
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
						<p>This is panel</p>
					</div>
				</div>
			</div>
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
									<a href="#projects" data-toggle="tab">
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
											<table class="table table-bordered datatable" id="tableLumpsum">
												<thead>
													<tr>
														<th>No</th>
														<th>Id Matter</th>														
														<th>Id Sub Matter</th>
														<th>Client</th>
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
													</tr>
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
								<div class="tab-pane" id="retainer">
									<div class="row">
										<div class="col-md-12">	
											<button type="button" class="btn btn-info" onclick="add_subRetainer()" style="float:right;">+ Add New</button>
										</div>
									</div>
										
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
								
								<div class="tab-pane" id="successfee">
									<div class="row">
										<div class="col-md-12">	
											<button type="button" class="btn btn-info" onclick="add_subSuccessfee()" style="float:right;">+ Add New</button>
										</div>
									</div>
										
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

								<div class="tab-pane" id="probono">
									<div class="row">
										<div class="col-md-12">	
											<button type="button" class="btn btn-info" onclick="add_subProbono()" style="float:right;">+ Add New</button>
										</div>
									</div>
									<br />
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

								<div class="tab-pane" id="project">
									<div class="row">
										<div class="col-md-12">	
											<button type="button" class="btn btn-info" onclick="add_subProject()" style="float:right;">+ Add New</button>
										</div>
									</div>
										
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
						<!--tabs-->

					</div>
				</div>
			</div>
	</div>

	<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default panel-shadow" data-collapse="0">
					<div class="panel-heading">
						<div class="panel-title">Panel 3</div>
					</div>
					<div class="panel-body">
						<p>This is panel</p>
					</div>
				</div>
			</div>
		<!-- Footer -->
	</div>	
	<div class="row">
		<?php $this->load->view('footer_view'); ?>
	</div>
</div>

<!-- Modal 6 (Long Modal)-->



	
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