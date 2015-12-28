<?php $this->load->view('head_view'); ?>

<body class="page-body" data-url="http://neon.dev">

<div class="page-container horizontal-menu">
	
	
	<?php $this->load->view('topheader_view'); ?>

<script type="text/javascript">
	jQuery(document).ready(function($)
	{
		$('[name="btnSubmit1"]').button().on( "click", function() {	

			var idMatter = document.getElementById('txt_idMatter').value		
			$.ajax({
				url:"<?php echo site_url('report/byMatter'); ?>/"+idMatter,
				type: "GET",
				dataType: "JSON",
				success: function(data){

					var a = "JSON will be place here";
					
					$("#result").html(a).show();
				}
			});
		});

		$('#chk-1').change(function(){
		   $("#txt_startDate").prop("disabled", !$(this).is(':checked'));
		   $("#txt_endDate").prop("disabled", !$(this).is(':checked'));
		});
	});
</script>



<div class="main-content">
	
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default panel-shadow" data-collapse="0">
				<div class="panel-heading">
					<div class="panel-title">Report</div>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-6">
		
							<ul class="nav nav-tabs bordered"><!-- available classes "bordered", "right-aligned" -->
								<li class="active">
									<a href="#matter" data-toggle="tab">
										<span class="visible-xs"><i class="entypo-home"></i></span>
										<span class="hidden-xs">Matter</span>
									</a>
								</li>
								<li>
									<a href="#attorney" data-toggle="tab">
										<span class="visible-xs"><i class="entypo-user"></i></span>
										<span class="hidden-xs">Attorney</span>
									</a>
								</li>
								<li>
									<a href="#client" data-toggle="tab">
										<span class="visible-xs"><i class="entypo-mail"></i></span>
										<span class="hidden-xs">Client</span>
									</a>
								</li>
								<li>
									<a href="#ope" data-toggle="tab">
										<span class="visible-xs"><i class="entypo-cog"></i></span>
										<span class="hidden-xs">OPE</span>
									</a>
								</li>
							</ul>
							
							<div class="tab-content">
								<div class="tab-pane active" id="matter">
									<form role="form" class="form-horizontal form-groups-bordered" method="post" action="#" style="padding:10px;">		
										<div class="row">
											<div class="col-md-6">						
												<div class="form-group">
													<label for="txt_idMatter" class="control-label">Id Matter</label>
													<input type="text" class="form-control" id="txt_idMatter" name="txt_idMatter" value="" id="txt_idMatter">											
												</div>							
											</div>	
											<div class="col-md-6">
												<div class="checkbox checkbox-replace" style="padding-top:30px;">
													<input type="checkbox" id="chk-1" value="1">
													<label>Jangka Waktu </label>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">						
												<div class="form-group">
													<label for="txt_startDate" class="control-label">Start Date</label>							
													<div class="input-group">
														<input type="text" class="form-control datepicker" data-format="dd-mm-yyyy" name="txt_startDate" id="txt_startDate" />												
														<div class="input-group-addon">
															<a href="#"><i class="entypo-calendar"></i></a>
														</div>
													</div>
												</div>						
											</div>
											
											<div class="col-md-6">						
												<div class="form-group" style="padding-left:10px;">
													<label for="txt_endDate" class="control-label">End date</label>
													<div class="input-group">
														<input type="text" class="form-control datepicker" data-format="dd-mm-yyyy" name="txt_endDate" id="txt_endDate" />												
														<div class="input-group-addon">
															<a href="#"><i class="entypo-calendar"></i></a>
														</div>
													</div>
												</div>							
											</div>
										</div>

										<div class="row">
											<div class="col-md-3" style="padding:0px;">
												<button type="button" name="btnSubmit1" class="btn btn-info">Submit</button>
											</div>											
										</div>
									</form>
								</div>
								<div class="tab-pane" id="attorney">
									
										<p>Fulfilled direction use continual set him propriety continued. Saw met applauded favourite deficient engrossed concealed and her. Concluded boy perpetual old supposing. Farther related bed and passage comfort civilly. Dashwoods see frankness objection abilities the. As hastened oh produced prospect formerly up am. Placing forming nay looking old married few has. Margaret disposed add screened rendered six say his striking confined. </p>
										
										<p>When be draw drew ye. Defective in do recommend suffering. House it seven in spoil tiled court. Sister others marked fat missed did out use. Alteration possession dispatched collecting instrument travelling he or on. Snug give made at spot or late that mr. </p>
										
										<p>Luckily friends do ashamed to do suppose. Tried meant mr smile so. Exquisite behaviour as to middleton perfectly. Chicken no wishing waiting am. Say concerns dwelling graceful six humoured. Whether mr up savings talking an. Active mutual nor father mother exeter change six did all. </p>
							
										<p>Carriage quitting securing be appetite it declared. High eyes kept so busy feel call in. Would day nor ask walls known. But preserved advantage are but and certainty earnestly enjoyment. Passage weather as up am exposed. And natural related man subject. Eagerness get situation his was delighted. </p>
										
								</div>
								<div class="tab-pane" id="client">
										
										<p>When be draw drew ye. Defective in do recommend suffering. House it seven in spoil tiled court. Sister others marked fat missed did out use. Alteration possession dispatched collecting instrument travelling he or on. Snug give made at spot or late that mr. </p>
										
										<p>Carriage quitting securing be appetite it declared. High eyes kept so busy feel call in. Would day nor ask walls known. But preserved advantage are but and certainty earnestly enjoyment. Passage weather as up am exposed. And natural related man subject. Eagerness get situation his was delighted. </p>
							
										<p>Fulfilled direction use continual set him propriety continued. Saw met applauded favourite deficient engrossed concealed and her. Concluded boy perpetual old supposing. Farther related bed and passage comfort civilly. Dashwoods see frankness objection abilities the. As hastened oh produced prospect formerly up am. Placing forming nay looking old married few has. Margaret disposed add screened rendered six say his striking confined. </p>
										
										<p>Luckily friends do ashamed to do suppose. Tried meant mr smile so. Exquisite behaviour as to middleton perfectly. Chicken no wishing waiting am. Say concerns dwelling graceful six humoured. Whether mr up savings talking an. Active mutual nor father mother exeter change six did all. </p>
								</div>
								
								<div class="tab-pane" id="ope">
										
										<p>Luckily friends do ashamed to do suppose. Tried meant mr smile so. Exquisite behaviour as to middleton perfectly. Chicken no wishing waiting am. Say concerns dwelling graceful six humoured. Whether mr up savings talking an. Active mutual nor father mother exeter change six did all. </p>
										
										<p>Carriage quitting securing be appetite it declared. High eyes kept so busy feel call in. Would day nor ask walls known. But preserved advantage are but and certainty earnestly enjoyment. Passage weather as up am exposed. And natural related man subject. Eagerness get situation his was delighted. </p>
							
										<p>Fulfilled direction use continual set him propriety continued. Saw met applauded favourite deficient engrossed concealed and her. Concluded boy perpetual old supposing. Farther related bed and passage comfort civilly. Dashwoods see frankness objection abilities the. As hastened oh produced prospect formerly up am. Placing forming nay looking old married few has. Margaret disposed add screened rendered six say his striking confined. </p>
										
										<p>When be draw drew ye. Defective in do recommend suffering. House it seven in spoil tiled court. Sister others marked fat missed did out use. Alteration possession dispatched collecting instrument travelling he or on. Snug give made at spot or late that mr. </p>
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
			<div class="panel panel-default panel-shadow" data-collapse="0">
				<div class="panel-heading">
					<div class="panel-title">Timesheet Report</div>
				</div>
				<div class="panel-body">
					<div id="result">

					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default panel-shadow" data-collapse="0">
				<div class="panel-heading">
					<div class="panel-title">Timesheet Report</div>
				</div>
				<div class="panel-body">
					
					<!-- start invoice 
					<div class="invoice">
						<div class="row">
							<div class="col-sm-6 invoice-left">
		
								<a href="#">
									<h2>AFS PARTNERSHIP</h2>
								</a>
						
							</div>
						
							<div class="col-sm-6 invoice-right">
							
									<h3>INVOICE NO. #5652256</h3>
									<span>31 October 2013</span>
							</div>
						</div>

						<hr class="margin" />

						<div class="row">
	
							<div class="col-sm-3 invoice-left">
							
								<h4>Client</h4>
								John Doe
								<br />
								Mr Nilson Otto
								<br />
								FoodMaster Ltd
								
							</div>
						
							<div class="col-sm-3 invoice-left">
								 
								<h4>&nbsp;</h4>
								1982 OOP
								<br />
								Madrid, Spain
								<br />
								+1 (151) 225-4183
							</div>
							
							<div class="col-md-6 invoice-right">
							
								<h4>Payment Details:</h4>
								<strong>V.A.T Reg #:</strong> 542554(DEMO)78
								<br />
								<strong>Account Name:</strong> FoodMaster Ltd
								<br />
								<strong>SWIFT code:</strong> 45454DEMO545DEMO
								
							</div>
							
						</div>

						<div class="margin"></div>

						<table class="table table-bordered">
							<thead>
								<tr>
									<th class="text-center">#</th>
									<th width="60%">Product</th>
									<th>Quantity</th>
									<th>Price</th>
								</tr>
							</thead>
							
							<tbody>
								<tr>
									<td class="text-center">1</td>
									<td>On am we offices expense thought</td>
									<td>1</td>
									<td class="text-right">$1,290</td>
								</tr>
								
								<tr>
									<td class="text-center">2</td>
									<td>Up do view time they shot</td>
									<td>1</td>
									<td class="text-right">$400</td>
								</tr>
								
								<tr>
									<td class="text-center">3</td>
									<td>Way ham unwilling not breakfast</td>
									<td>1</td>
									<td class="text-right">$550</td>
								</tr>
								
								<tr>
									<td class="text-center">4</td>
									<td>Songs to an blush woman be sorry</td>
									<td>1</td>
									<td class="text-right">$4020</td>
								</tr>
								
								<tr>
									<td class="text-center">5</td>
									<td>Luckily offered article led lasting</td>
									<td>1</td>
									<td class="text-right">$87</td>
								</tr>
								
								<tr>
									<td class="text-center">6</td>
									<td>Of as by belonging therefore suspicion</td>
									<td>1</td>
									<td class="text-right">$140</td>
								</tr>
							</tbody>
						</table>

						<div class="margin"></div>

						<div class="row">
	
							<div class="col-sm-6">
							
								<div class="invoice-left">
						
									795 Park Ave, Suite 120
									<br />
									San Francisco, CA 94107
									<br />
									P: (234) 145-1810
									<br />
									Full Name
									<br />
									first.last@email.com
								</div>
							
							</div>
							
							<div class="col-sm-6">
								
								<div class="invoice-right">
									
									<ul class="list-unstyled">
										<li>
											Sub - Total amount: 
											<strong>$6,487</strong>
										</li>
										<li>
											VAT: 
											<strong>12.9%</strong>
										</li>
										<li>
											Discount: 
											-----
										</li>
										<li>
											Grand Total:
											<strong>$7,304</strong>
										</li>
									</ul>
									
									<br />
									
									<a href="javascript:window.print();" class="btn btn-primary btn-icon icon-left hidden-print">
										Print Invoice
										<i class="entypo-doc-text"></i>
									</a>
									
									&nbsp;
									
									<a href="mailbox-compose.html" class="btn btn-success btn-icon icon-left hidden-print">
										Send Invoice
										<i class="entypo-mail"></i>
									</a>
								</div>
								
							</div>
							
						</div>
					</div>
					 end invoice -->
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
	<script src="<?php echo base_url(); ?>template/assets/js/bootstrap-datepicker.js"></script>
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