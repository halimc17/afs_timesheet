<?php $this->load->view('head_view'); ?>

<body class="page-body" data-url="http://neon.dev">

<div class="page-container horizontal-menu">
	
	
	<?php $this->load->view('topheader_view'); ?>





<div class="main-content">
	
	<div class="row">
		<div class="col-md-6">
			<div class="panel panel-default panel-shadow" data-collapse="0">
				<div class="panel-heading">
					<div class="panel-title">Setup</div>
				</div>
				<div class="panel-body">
					<div class="row">

						<div class="col-md-6">
						
							<div class="tabs-vertical-env">
							
								<ul class="nav tabs-vertical"><!-- available classes "right-aligned" -->
									<li class="active"><a href="#v-home" data-toggle="tab">Rupiah</a></li>
									<li><a href="#v-profile" data-toggle="tab">Profile</a></li>
									<li><a href="#v-messages" data-toggle="tab">Messages</a></li>
									<li><a href="#v-settings" data-toggle="tab">Settings</a></li>
								</ul>
								
								<div class="tab-content">
									<div class="tab-pane active" id="v-home">
										<p>Input nilai tukar rupiah sesuai keperluan output report</p>
										<form role="form" class="form-horizontal form-groups-bordered" method="post" action="<?php echo site_url('setup/rupiah') ?>" style="padding:10px;">
											
											<div class="form-group">
												<label for="txt_nilaiRupiah" class="control-label">Nilai Rupiah</label>
												<input type="text" class="form-control" id="txt_nilaiRupiah" name="txt_nilaiRupiah" value="">
											</div>


										</form>
									</div>
									<div class="tab-pane" id="v-profile">
										<p>Fulfilled direction use continual set him propriety continued. Saw met applauded favourite deficient engrossed concealed and her. Concluded boy perpetual old supposing. Farther related bed and passage comfort civilly. Dashwoods see frankness objection abilities the. As hastened oh produced prospect formerly up am. Placing forming nay looking old married few has. Margaret disposed add screened rendered six say his striking confined. </p>
									</div>
									<div class="tab-pane" id="v-messages">
										<p>When be draw drew ye. Defective in do recommend suffering. House it seven in spoil tiled court. Sister others marked fat missed did out use. Alteration possession dispatched collecting instrument travelling he or on. Snug give made at spot or late that mr. </p>
									</div>
									<div class="tab-pane" id="v-settings">
										<p>Luckily friends do ashamed to do suppose. Tried meant mr smile so. Exquisite behaviour as to middleton perfectly. Chicken no wishing waiting am. Say concerns dwelling graceful six humoured. Whether mr up savings talking an. Active mutual nor father mother exeter change six did all. </p>
									</div>
								</div>
								
							</div>	
						
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-12">
			<?php $this->load->view('footer_view'); ?>
		</div>
	</div>
</div>






	
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