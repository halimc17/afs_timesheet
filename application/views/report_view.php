<?php $this->load->view('head_view'); ?>

<body class="page-body" data-url="http://neon.dev">

<div class="page-container horizontal-menu">
	
	
	<?php $this->load->view('topheader_view'); ?>

<script type="text/javascript">
	jQuery(document).ready(function($)
	{
		

		$('#chk-1').change(function(){
		   $("#txt_startDate").prop("disabled", !$(this).is(':checked'));
		   $("#txt_endDate").prop("disabled", !$(this).is(':checked'));
		});

		$("#btnExport").click(function(){
		   ExportToExcel();
		});
	});

	

	function ExportToExcel(){
       var htmltable= document.getElementById('tblExport');
       var html = htmltable.outerHTML;
       window.open('data:application/vnd.ms-excel,' + encodeURIComponent(html));
    }
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
								<li <?php if($this->uri->segment(2) == "byMatter" OR $this->uri->segment(2) == NULL){echo "class='active'";} ?>>
									<a href="#matter" data-toggle="tab">
										<span class="visible-xs"><i class="entypo-home"></i></span>
										<span class="hidden-xs">Matter</span>
									</a>
								</li>
								<li <?php if($this->uri->segment(2) == "byAttorney"){echo "class='active'";} ?>>
									<a href="#attorney" data-toggle="tab">
										<span class="visible-xs"><i class="entypo-user"></i></span>
										<span class="hidden-xs">Attorney</span>
									</a>
								</li>
								<li <?php if($this->uri->segment(2) == "byClient"){echo "class='active'";} ?>>
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
								<div class="tab-pane <?php if($this->uri->segment(2) == "byMatter" OR $this->uri->segment(2) == NULL){echo "active";} ?>" id="matter">
									<form role="form" class="form-horizontal form-groups-bordered" method="post" action="<?php echo site_url('report/byMatter'); ?>" style="padding:10px;">		
										<div class="row">
											<div class="col-md-6">						
												<div class="form-group">
													<label for="txt_idMatter" class="control-label">Id Matter</label>
													<input type="text" class="form-control" id="txt_idMatter" name="txt_idMatter" value="" id="txt_idMatter">											
												</div>							
											</div>	
											<div class="col-md-6">
												<div class="checkbox checkbox-replace" style="padding-top:30px;">
													<input type="checkbox" id="chk-1" value="1" name="chk-1">
													<label>Jangka Waktu </label>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">						
												<div class="form-group">
													<label for="txt_startDate" class="control-label">Start Date</label>							
													<div class="input-group">
														<input type="text" class="form-control datepicker" data-format="yyyy-mm-dd" name="txt_startDate" id="txt_startDate" />												
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
														<input type="text" class="form-control datepicker" data-format="yyyy-mm-dd" name="txt_endDate" id="txt_endDate" />												
														<div class="input-group-addon">
															<a href="#"><i class="entypo-calendar"></i></a>
														</div>
													</div>
												</div>							
											</div>
										</div>

										<div class="row">
											<div class="col-md-3" style="padding:0px;">
												<button type="submit" name="btnSubmit1" class="btn btn-info">Submit</button>
											</div>											
										</div>
									</form>
								</div>
								<div class="tab-pane <?php if($this->uri->segment(2) == "byAttorney"){echo "active";} ?>" id="attorney">
									
										<form role="form" class="form-horizontal form-groups-bordered" method="post" action="<?php echo site_url('report/byAttorney'); ?>" style="padding:10px;">
											<div class="row">
												<div class="col-md-6">						
													<div class="form-group">
														<label for="txt_idMatter" class="control-label">Attorney</label>												
														<select class="form-control" id="comboAttorney" name="comboAttorney">
															<?php if(isset($attorney)){
																foreach($attorney as $rowAttorney){ ?>
																	<option value="<?php echo $rowAttorney->id_user; ?>"><?php echo $rowAttorney->nama." (".$rowAttorney->inisial.")"; ?></option>
															<?php	}
															} ?>															
														</select>
													</div>							
												</div>													
											</div>

											<div class="row">
												<div class="col-md-3" style="padding:0px;">
													<button type="submit" name="btnSubmit2" class="btn btn-info">Submit</button>
												</div>											
											</div>
										</form>
										
								</div>
								<div class="tab-pane <?php if($this->uri->segment(2) == "byClient"){echo "active";} ?>" id="client">
										
										<form role="form" class="form-horizontal form-groups-bordered" method="post" action="<?php echo site_url('report/byClient'); ?>" style="padding:10px;">
											<div class="row">
												<div class="col-md-6">						
													<div class="form-group">
														<label for="txt_idMatter" class="control-label">Client</label>												
														<select class="form-control" id="comboClient" name="comboClient">
															<?php if(isset($client)){
																foreach($client as $rowClient){ ?>
																	<option value="<?php echo $rowClient->id_client; ?>"><?php echo $rowClient->nama_client; ?></option>
															<?php	}
															} ?>															
														</select>
													</div>							
												</div>	

												<div class="col-md-6">
													<div class="checkbox checkbox-replace" style="padding-top:30px;">
														<input type="checkbox" id="chk-2" value="1" name="chk-2">
														<label>Rekap</label>
													</div>
												</div>												
											</div>

											<div class="row">
												<div class="col-md-3" style="padding:0px;">
													<button type="submit" name="btnSubmit3" class="btn btn-info">Submit</button>
												</div>											
											</div>
										</form>
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

	
	<?php if(isset($timesheet)){ ?>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default panel-shadow" data-collapse="0">
				<div class="panel-heading">
					<div class="panel-title">Attorney Daily Timesheet</div>
				</div>
				<div class="panel-body">
					<table border="0" class="table responsive">
						<tr>
							<td colspan="4"><h2>AFS PARTNERSHIP</h2></td>								
							<td colspan="5" align="right">
								<h3>PERSONNEL ID. #asdasd</h3>
								<span>asdasd</span>
							</td>
						</tr>						
					</table>

					<table class="table table-bordered">
						<thead>
							<tr>
								<th class="text-center">#</th>
								<th>Attorney</th>
								<th>ID Matter</th>
								<th>Client</th>
								<th>Matter</th>
								<th>Input Date</th>
								<th>Description</th>
								<th>Start</th>
								<th>End</th>
								<th>Minutes</th>
								<th>Billable Hour</th>
							</tr>
						</thead>
						<tbody>
						<?php $counter = 1;
						foreach($timesheet as $rowTimesheet){ ?>
							<tr>
								<td><?php echo $counter; ?></td>
								<td><?php echo $rowTimesheet->inisial; ?></td>
								<td><?php echo $rowTimesheet->id_matter; ?></td>
								<td><?php echo $rowTimesheet->nama_client; ?></td>
								<td><?php echo $rowTimesheet->matter; ?></td>
								<td><?php echo formatTanggal($rowTimesheet->input_date); ?></td>
								<td><?php echo $rowTimesheet->description; ?></td>
								<td><?php echo $rowTimesheet->start; ?></td>
								<td><?php echo $rowTimesheet->end; ?></td>
								<td><?php echo timeDiff($rowTimesheet->start,$rowTimesheet->end); ?></td>
								<td><?php echo "$".billableHour(timeDiff($rowTimesheet->start,$rowTimesheet->end), $rowTimesheet->id_payment, $rowTimesheet->id_matter, $rowTimesheet->id_jabatan);  ?></td>
							</tr>
						<?php $counter++; } ?>							
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<?php } ?>

	<?php if(isset($timesheetClient)){ ?>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default panel-shadow" data-collapse="0">
				<div class="panel-heading">
					<div class="panel-title">Timesheet by Client</div>
				</div>
				<div class="panel-body">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th class="text-center">#</th>
								<th>Client</th>
								<th>Inisial</th>
								<th>Input Date</th>
								<th>Matter</th>
								<th>Description</th>
								<th>Worktype</th>
								<th>Start</th>
								<th>End</th>
								<th>Minutes</th>
								<th>Billable Hour</th>
							</tr>
						</thead>
						<tbody>
						<?php $counter = 1;
						foreach($timesheetClient as $rowTimesheetClient){ ?>
							<tr>
								<td><?php echo $counter; ?></td>
								<td><?php echo $rowTimesheetClient->inisial; ?></td>
								<td><?php echo $rowTimesheetClient->id_matter; ?></td>
								<td><?php echo $rowTimesheetClient->nama_client; ?></td>
								<td><?php echo $rowTimesheetClient->matter; ?></td>
								<td><?php echo formatTanggal($rowTimesheetClient->input_date); ?></td>
								<td><?php echo $rowTimesheetClient->description; ?></td>
								<td><?php echo $rowTimesheetClient->start; ?></td>
								<td><?php echo $rowTimesheetClient->end; ?></td>
								<td><?php echo timeDiff($rowTimesheetClient->start,$rowTimesheetClient->end); ?></td>
								<td><?php echo "$".billableHour(timeDiff($rowTimesheetClient->start,$rowTimesheetClient->end), $rowTimesheetClient->id_payment, $rowTimesheetClient->id_matter, $rowTimesheetClient->id_jabatan);  ?></td>
							</tr>
						<?php $counter++; } ?>							
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<?php } ?>

	<?php if(isset($timesheetClient_rekap)){ ?>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default panel-shadow" data-collapse="0">
				<div class="panel-heading">
					<div class="panel-title">Timesheet by Client</div>
				</div>
				<div class="panel-body">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th class="text-center" width="30">#</th>
								<th>Client</th>
								<th>Matter</th>								
								<th>Timesheet</th>								
							</tr>
						</thead>
						<tbody>
						<?php $counter = 1;
						foreach($timesheetClient_rekap as $rowTimesheetClient_rekap){ ?>
							<tr>
								<td><?php echo $counter; ?></td>
								<td><?php echo $rowTimesheetClient_rekap->nama_client; ?></td>
								<td><?php echo $rowTimesheetClient_rekap->matter; ?></td>
								<td>
									<table class="table table-bordered">
										<thead>
											<th>#</th>
											<th>Attorney</th>
											<th>Total minutes</th>
											<th>Billable Hour</th>
										</thead>
										<tbody>
											<tr>
												<td>asdasd</td>
												<td>asdasd</td>
												<td>asdasd</td>
												<td>asdasdads</td>
											</tr>
										</tbody>
									</table>
								</td>
							</tr>
						<?php $counter++; } ?>							
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<?php } ?>
	

	<?php if(isset($reports) AND isset($matter)){ ?>
	<div class="row" id="tblExport">
		<div class="col-md-12">
			<div class="panel panel-default panel-shadow" data-collapse="0">
				<div class="panel-heading">
					<div class="panel-title">Timesheet Report</div>
				</div>
				<div class="panel-body">
					
					<!-- start invoice -->
					<div class="invoice">
						<div class="row">
						<?php if(isset($matter)){
							foreach($matter as $row1){
								$idMatter = $row1->id_matter;
								$matterName = $row1->matter;
								$openDate = $row1->open_date;
								$namaClient = $row1->nama_client;
								$payment = $row1->payment_name;
							}
						} ?>
							
						</div>

						

						<div class="margin"></div>

						<table border="0" class="table responsive">
							<tr>
								<td colspan="4"><h2>AFS PARTNERSHIP</h2></td>								
								<td colspan="5" align="right">
									<h3>MATTER ID. #<?php echo $idMatter ?></h3>
									<span><?php echo date('d-m-Y') ?></span>
								</td>
							</tr>
							<tr>
								<td colspan="4">
									<strong>Client</strong><br />
									<?php echo $namaClient; ?><br />
									<strong>Matter</strong><br />
									<?php echo $matterName; ?>
								</td>
								<td colspan="5" align="right">
									<strong>Payment Details:</strong><br />
									<?php echo $payment; ?><br />
									<strong>Open Date</strong><br />
									<?php echo $openDate; ?>
								</td>
							</tr>
						</table>

						<table class="table table-bordered" border="1">
							<thead>
								<tr>
									<th class="text-center">#</th>
									<th>Attorney</th>
									<th>Input Date</th>
									<th>Description</th>
									<th>Type</th>
									<th>Start</th>
									<th>End</th>
									<th>Minutes</th>
									<th>Billable Hour ($)</th>
								</tr>
							</thead>
							
							<tbody>
								<?php 
									$subTotal = 0;
									$counter = 1;
									if(isset($reports)){
										foreach($reports as $row){ ?>
									<tr>
											<td class="text-center"><?php echo $counter; ?></td>
											<td><?php echo $row->inisial; ?></td>
											<td><?php 
													$inputDate = new DateTime($row->input_date);
													echo $inputDate->format('d-m-Y');
											 ?></td>
											<td><?php echo $row->description; ?></td>										
											<td><?php echo $row->worktype; ?></td>										
											<td><?php echo $row->start; ?></td>										
											<td><?php echo $row->end; ?></td>										
											<td class="text-center"><?php echo timeDiff($row->start,$row->end); ?></td>										
											<td class="text-right"><?php echo billableHour(timeDiff($row->start,$row->end), $row->id_payment, $row->id_matter, $row->id_jabatan);  ?></td>										
										</tr>
								<?php
										$counter++;
										$subTotal = $subTotal + billableHour(timeDiff($row->start,$row->end), $row->id_payment, $row->id_matter, $row->id_jabatan);
										}
									} ?>

									<tr>
										<td colspan="4"></td>										
										<td></td>
										<td></td>										
										<td colspan="3" align="right"></td>
									</tr>
									<tr border="2">
										<td colspan="4">
											<div class="invoice-left">						
												Menara Thamrin, 14th Floor Suite 1408
												<br />
												Jl. MH. Thamrin, Kav 3
												<br />
												Jakarta 10250
												<br />
												Telp. 021-39830488 / Fax. 021-39830456
												<br />
												Email : afs@afs-partnership.com
											</div>	
										</td>										
										<td></td>
										<td></td>										
										<td colspan="3" align="right">
											Total amount: <strong>$<?php echo number_format($subTotal); ?></strong>
										</td>
									</tr>
							</tbody>
						</table>

						<div class="margin"></div>

						<div class="row">
	
							<div class="col-md-5">
									<a href="javascript:window.print();" class="btn btn-primary btn-icon icon-left hidden-print">
										Print Invoice
										<i class="entypo-doc-text"></i>
									</a>
									
									&nbsp;
									
									<a href="#" class="btn btn-success btn-icon icon-left hidden-print" id="btnExport">
										Export to XLS
										<i class="entypo-mail"></i>
									</a>
							</div>
							
						</div>
					</div>
					<!-- end invoice -->
				</div>
			</div>
		</div>
	</div>
	<?php } ?>

	
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