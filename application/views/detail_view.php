<?php $this->load->view('head_view'); ?>

<body class="page-body" data-url="http://neon.dev">

<div class="page-container horizontal-menu">
	
	
	<?php $this->load->view('topheader_view'); ?>	
	<div class="main-content">
		



<div class="row">
	

	
<h3><span class="label label-warning">Administrator</span>&nbsp;Matter Detail View</h3>
<br />

<div class="col-md-12">
	<div class="row">
		<div class="col-md-4">		
			<?php if(isset($records)){
				foreach($records as $row){
					$no_matter = $row->no_matter;
					$matter = $row->matter;
					$paymentType = $row->payment_type;
					$client = $row->client_name;
					$openDate = $row->open_date;
					$closeDate = $row->close_date;
					$keterangan = $row->description;
					$paymentName = $row->paymentName;
					
					if($paymentType == 3){
						$jangkaWaktu = $row->jangkaWaktu;
						$biaya = $row->biaya;
						$jam = $row->jam;
						$disc = $row->disc;
					}elseif($paymentType == 2){
						$managingPartner = $row->managingPartner;
						$partner = $row->partner;
						$juniorPartner = $row->juniorPartner;
						$seniorAssociate = $row->seniorAssociate;
						$midAssociate = $row->midAssociate;
						$juniorAssociate = $row->juniorAssociate;
						$disc = $row->disc;
						
					}elseif($paymentType == 1){
							$term1 = $row->term1;
							$term2 = $row->term2;
							$term3 = $row->term3;
							$descTerm1 = $row->descTerm1;
							$descTerm2 = $row->descTerm2;
							$descTerm3 = $row->descTerm3;
					}elseif($paymentType == 4){
							$biaya = $row->biaya;						
					}elseif($paymentType == 5){
						
					}
				}
			} ?>
			
			<div class="panel panel-primary" data-collapsed="0">					
					<!-- panel head -->
					<div class="panel-heading">
						<div class="panel-title"><?php echo $no_matter; ?></div>
					</div>
					
					<!-- panel body -->
					<div class="panel-body">
						
						<div class="form-group">
								<label for="field-1" class="control-label">ID Matter</label>
								<input type="text" class="form-control" id="txt_idMatter" name="txt_idMatter" value="<?php echo $no_matter; ?>" disabled>										
						</div>

						<div class="form-group">
								<label for="field-1" class="control-label">Matter</label>
								<input type="text" class="form-control" id="txt_matter" name="txt_matter" value="<?php echo $matter; ?>" />
						</div>
							
						<div class="form-group">
								<label for="field-1" class="control-label">Client</label>
								<input type="text" class="form-control" id="txt_client" name="txt_client" value="<?php echo $client; ?>" />
						</div>
						
						<div class="row">
							<div class="col-md-3">
								<div class="form-group">
										<label for="txt_openDate" class="control-label">Open Date</label>
										<input type="text" class="form-control" id="txt_openDate" name="txt_openDate" value="<?php echo $openDate; ?>" />
								</div>
							</div>
								
							<div class="col-md-3">
								<div class="form-group">
										<label for="txt_closeDate" class="control-label">Close Date</label>
										<input type="text" class="form-control" id="txt_closeDate" name="txt_closeDate" value="<?php echo $closeDate; ?>" />
								</div>
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-12">
									<div class="form-group">
										<label for="txt_keterangan" class="control-label">General Description</label>
										<textarea class="form-control" id="txt_keterangan" name="txt_keterangan" style="height:120px;"><?php echo $keterangan; ?></textarea>
									</div>	
							</div>
						</div>
						
							
						<div class="form-group">
								<button type="button" class="btn btn-default" data-dismiss="modal" onclick="location.href = '<?php echo base_url().'index.php/matter/'; ?>';">CANCEL</button>
								<button type="button" class="btn btn-info">UPDATE</button>
						</div>	
					</div>
					
				</div>
		</div>
		
		<?php if($paymentType == 3){ ?>		
		<div class="col-md-3">
				<div class="panel panel-primary" data-collapsed="0">					
					<!-- panel head -->
					<div class="panel-heading">
						<div class="panel-title">Payment Detail</div>
					</div>
					
					<!-- panel body -->
					<div class="panel-body">
						
						<div class="form-group">
								<label for="field-1" class="control-label">Payment Type</label>
								<input type="text" class="form-control" id="txt_idMatter" name="txt_idMatter" value="<?php echo $paymentName; ?>" disabled>										
						</div>

						<div class="form-group">
								<label for="field-1" class="control-label">Jangka Waktu</label>
								<input type="text" class="form-control" id="txt_jangkaWaktu" name="txt_jangkaWaktu" value="<?php echo $jangkaWaktu; ?>" />
						</div>
							
						<div class="form-group">
								<label for="field-1" class="control-label">Biaya</label>
								<input type="text" class="form-control" id="txt_biaya" name="txt_biaya" value="<?php echo $biaya; ?>" />
						</div>
						
						<div class="form-group">
								<label for="field-1" class="control-label">Jam</label>
								<input type="text" class="form-control" id="txt_jam" name="txt_jam" value="<?php echo $jam; ?>" />
						</div>
						
						<div class="form-group">
								<label for="field-1" class="control-label">Disc (%)</label>
								<input type="text" class="form-control" id="txt_disc" name="txt_disc" value="<?php echo $disc; ?>" />
						</div>

					</div>
					
				</div>
		</div>
		<?php }elseif($paymentType == 1){ ?>
			
		<div class="col-md-7">
				<div class="panel panel-primary" data-collapsed="0">					
					<!-- panel head -->
					<div class="panel-heading">
						<div class="panel-title">Payment Detail</div>
					</div>
					
					<!-- panel body -->
					<div class="panel-body">
						
						<div class="row">
							<div class="col-md-3">
								<div class="form-group">
										<label for="field-1" class="control-label">Payment Type</label>
										<input type="text" class="form-control" id="txt_paymentName" name="txt_paymentName" value="<?php echo $paymentName; ?>" disabled>										
								</div>
							</div>
						</div>
						
							
						<div class="row">
							<div class="col-md-3">
								<div class="form-group">
										<label for="txt_term1" class="control-label">Term 1</label>
										<input type="text" class="form-control" id="txt_term1" name="txt_term1" value="<?php echo $term1; ?>" />
								</div>
							</div>
								
							<div class="col-md-3">
								<div class="form-group">
										<label for="txt_term2" class="control-label">Term 2</label>
										<input type="text" class="form-control" id="txt_term2" name="txt_term2" value="<?php echo $term2; ?>" />
								</div>
							</div>
							
							<div class="col-md-3">
								<div class="form-group">
										<label for="txt_term3" class="control-label">Term 3</label>
										<input type="text" class="form-control" id="txt_term3" name="txt_term3" value="<?php echo $term3; ?>" />
								</div>
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-3">
								<div class="form-group">
										<label for="txt_term1" class="control-label">Description Term 1</label>
										<textarea class="form-control" id="txt_descTerm1" name="txt_descTerm1" style="height:120px;"><?php echo $descTerm1; ?></textarea>
								</div>
							</div>
							
							<div class="col-md-3">
								<div class="form-group">
										<label for="txt_term2" class="control-label">Description Term 2</label>
										<textarea class="form-control" id="txt_descTerm2" name="txt_descTerm2" style="height:120px;"><?php echo $descTerm2; ?></textarea>
								</div>
							</div>
							
							<div class="col-md-3">
								<div class="form-group">
										<label for="txt_term3" class="control-label">Description Term 3</label>
										<textarea class="form-control" id="txt_descTerm3" name="txt_descTerm3" style="height:120px;"><?php echo $descTerm3; ?></textarea>
								</div>
							</div>
						</div>

					</div>
					
				</div>
		</div>
		
		<?php }elseif($paymentType == 2){ ?>
			
		<div class="col-md-7">
				<div class="panel panel-primary" data-collapsed="0">					
					<!-- panel head -->
					<div class="panel-heading">
						<div class="panel-title">Payment Detail</div>
					</div>
					
					<!-- panel body -->
					<div class="panel-body">
						
						<div class="row">
							<div class="col-md-3">
								<div class="form-group">
										<label for="field-1" class="control-label">Payment Type</label>
										<input type="text" class="form-control" id="txt_paymentName" name="txt_paymentName" value="<?php echo $paymentName; ?>" disabled>										
								</div>
							</div>
						</div>
						
							
						<div class="row">
							<div class="col-md-3">
								<div class="form-group">
										<label for="txt_term1" class="control-label">Managing Partner</label>
										<input type="text" class="form-control" id="txt_managingPartner" name="txt_managingPartner" value="<?php echo $managingPartner; ?>" />
								</div>
							</div>
								
							<div class="col-md-3">
								<div class="form-group">
										<label for="txt_term2" class="control-label">Partner</label>
										<input type="text" class="form-control" id="txt_partner" name="txt_partner" value="<?php echo $partner; ?>" />
								</div>
							</div>
							
							<div class="col-md-3">
								<div class="form-group">
										<label for="txt_term3" class="control-label">Junior Partner</label>
										<input type="text" class="form-control" id="txt_juniorPartner" name="txt_juniorPartner" value="<?php echo $juniorPartner; ?>" />
								</div>
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-3">
								<div class="form-group">
										<label for="txt_term1" class="control-label">Senior Associate</label>
										<input type="text" class="form-control" id="txt_seniorAssociate" name="txt_seniorAssociate" value="<?php echo $seniorAssociate; ?>" />
								</div>
							</div>
							
							<div class="col-md-3">
								<div class="form-group">
										<label for="txt_term2" class="control-label">Mid Associate</label>
										<input type="text" class="form-control" id="txt_midAssociate" name="txt_midAssociate" value="<?php echo $midAssociate; ?>" />
								</div>
							</div>
							
							<div class="col-md-3">
								<div class="form-group">
										<label for="txt_term3" class="control-label">Junior Associate</label>
										<input type="text" class="form-control" id="txt_juniorAssociate" name="txt_juniorAssociate" value="<?php echo $juniorAssociate; ?>" />
								</div>
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-3">
								<div class="form-group">
										<label for="txt_term3" class="control-label">Disc</label>
										<input type="text" class="form-control" id="txt_disc" name="txt_disc" value="<?php echo $disc; ?>" />
								</div>
							</div>
						</div>

					</div>
					
				</div>
		</div>
		
		<?php }elseif($paymentType == 4){ ?>
		
		<div class="col-md-7">
				<div class="panel panel-primary" data-collapsed="0">					
					<!-- panel head -->
					<div class="panel-heading">
						<div class="panel-title">Payment Detail</div>
					</div>
					
					<!-- panel body -->
					<div class="panel-body">
						
						<div class="row">
							<div class="col-md-3">
								<div class="form-group">
										<label for="field-1" class="control-label">Payment Type</label>
										<input type="text" class="form-control" id="txt_paymentName" name="txt_paymentName" value="<?php echo $paymentName; ?>" disabled>										
								</div>
							</div>
						</div>
						
							
						<div class="row">
							<div class="col-md-3">
								<div class="form-group">
										<label for="txt_term1" class="control-label">Biaya</label>
										<input type="text" class="form-control" id="txt_biaya" name="txt_biaya" value="<?php echo $biaya; ?>" />
								</div>
							</div>
						</div>
					</div>
					
				</div>
		</div>		
			
		<?php }elseif($paymentType == 5){} ?>
	</div>
</div>

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
		
</script>
	
	
</div>
<br />
<br />
<br />



<!-- Footer -->
<?php $this->load->view('footer_view'); ?>
			</div>
	
	
</div>


<div class="modal fade" id="modal-6">
	<div class="modal-dialog">
		<div class="modal-content">
			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Edit User</h4>
			</div>
			
			<div class="modal-body">
			
				<div class="row">
					<div class="col-md-6">
						
						<div class="form-group">
							<label for="field-1" class="control-label">Nama</label>
							
							<input type="text" class="form-control" id="txt_nama" name="txt_nama">
						</div>	
						
					</div>
					
					<div class="col-md-6">
						
						<div class="form-group">
							<label for="field-2" class="control-label">Inisial</label>
							
							<input type="text" class="form-control" id="txt_inisial" name="txt_inisial">
						</div>	
					
					</div>
				</div>
			
				<div class="row">
					<div class="col-md-12">
						
						<div class="form-group">
							<label for="field-3" class="control-label">Email 1</label>
							
							<input type="text" class="form-control" id="txt_email1" name="txt_email1">
						</div>	
						
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-12">
						
						<div class="form-group">
							<label for="field-4" class="control-label">Email 2</label>
							
							<input type="text" class="form-control" id="txt_email2" name="txt_email2">
						</div>	
						
					</div>
				</div>
				
			
				<div class="row">
					<div class="col-md-4">
						
						<div class="form-group">
							<label for="field-5" class="control-label">Mobile 1</label>
							
							<input type="text" class="form-control" id="txt_mobile1" name="txt_mobile1">
						</div>	
						
					</div>
					
					<div class="col-md-4">
						
						<div class="form-group">
							<label for="field-6" class="control-label">Mobile 2</label>
							
							<input type="text" class="form-control" id="txt_mobile2" name="txt_mobile2">
						</div>	
					
					</div>
					
					<div class="col-md-4">
						
						<div class="form-group">
							<label for="field-7" class="control-label">Ext</label>
							
							<input type="text" class="form-control" id="txt_ext" name="txt_ext">
						</div>	
					
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-4">
						
						<div class="form-group">
							<label for="field-8" class="control-label">Status</label>
							
							<select class="form-control" name="combo_status" id="combo_status">
								<option value="Managing Partners">Managing Partners</option>
								<option value="Partners">Partners</option>
								<option value="Associates">Associates</option>
								<option value="Staff">Staff</option>								
							</select>
						</div>	
					
					</div>
					
					<div class="col-md-4">
						
						<div class="form-group">
							<label for="field-9" class="control-label">Username</label>
							
							<input type="text" class="form-control" id="txt_username" name="txt_username">
						</div>	
					
					</div>
				</div>
			
				<div class="row">
					<div class="col-md-4">
						
						<div class="form-group">
							<label for="field-10" class="control-label">Password</label>
							
							<input type="password" class="form-control" id="txt_password" name="txt_password">
						</div>	
					
					</div>
					
					<div class="col-md-4">
						
						<div class="form-group">
							<label for="field-11" class="control-label">Repeat Password</label>
							
							<input type="password" class="form-control" id="txt_password2" name="txt_password2">
						</div>	
					
					</div>
				</div>
				
			</div>
			
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-info">Save changes</button>
			</div>
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