<?php $this->load->view('head_view'); ?>

<body class="page-body" data-url="http://neon.dev">

<div class="page-container horizontal-menu">
	
	
	<?php $this->load->view('topheader_view'); ?>	
	<div class="main-content">


<div class="row">
<h3><span class="label label-warning">Administrator</span>&nbsp; Edit Payment Type</h3>

<script type="text/javascript">
	$(document).ready(function(){
		
		
	   /*$('#btnSubmit').click(function() {
			// ambil value combo box
			var value = $('#combo_paymentType').val();
			// replace the contents of the div with the link text
			if(value == 1){$('#formContent').html($('#modalform1').html());}
			if(value == 2){$('#formContent').html($('#modalform2').html());}
			if(value == 3){$('#formContent').html($('#modalform3').html());}
			if(value == 4){$('#formContent').html($('#modalform4').html());}
			if(value == 5){$('#formContent').html($('#modalform5').html());}
			
			
			return false;
		});*/
		
		$('#combo_paymentType').change(function(){
			var value = $('#combo_paymentType').val();
			//alert(value);
			if(value == 1){
				$('#formContent').fadeOut('slow', function() {
					$('#formContent').html($('#modalform1').html());
					$('#formContent').fadeIn('slow');
				});
			}
			if(value == 2){
				$('#formContent').fadeOut('slow', function() {
					$('#formContent').html($('#modalform2').html());
					$('#formContent').fadeIn('slow');
				});
			}
			if(value == 3){
				$('#formContent').fadeOut('slow', function() {
					$('#formContent').html($('#modalform3').html());
					$('#formContent').fadeIn('slow');
				});
			}
			if(value == 4){
				$('#formContent').fadeOut('slow', function() {
					$('#formContent').html($('#modalform4').html());
					$('#formContent').fadeIn('slow');
				});
			}
			if(value == 5){
				$('#formContent').fadeOut('slow', function() {
					$('#formContent').html($('#modalform5').html());
					$('#formContent').fadeIn('slow');
				});
			}
			
			//if(value == 11){$('#formContent').html($('#modalform1').html());}
			//if(value == 2){$('#formContent').html($('#modalform2').html());}
			//if(value == 3){$('#formContent').html($('#modalform3').html());}
			//if(value == 4){$('#formContent').html($('#modalform4').html());}
			//if(value == 5){$('#formContent').html($('#modalform5').html());}	
			
			return false;
		});
	});
		
</script>
<br />
	<div class="col-md-12">	
		<div class="row">
			<div class="col-md-3">	
				<div class="panel panel-primary" data-collapsed="0">
					
					<!-- panel head -->
					<div class="panel-heading">
						<div class="panel-title">Matter Detail</div>
						
						<div class="panel-options">
							<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
							<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
							<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
						</div>
					</div>
					
					<!-- panel body -->
					<?php if(isset($records)){
						foreach($records as $row){ ?>					
					
					<div class="panel-body">
						
						<div class="form-group">
								<label for="field-1" class="control-label">ID Matter</label>
								<input type="text" class="form-control" id="txt_idMatter" name="txt_idMatter" value="<?php echo $this->uri->segment(4); ?>" disabled>										
							</div>

							<div class="form-group">
								<label for="field-1" class="control-label">Matter</label>
								<input type="text" class="form-control" id="txt_matter" name="txt_matter" value="<?php echo $row->matter; ?>" disabled />
							</div>
							
							<div class="form-group">
								<label for="field-1" class="control-label">Client</label>
								<input type="text" class="form-control" id="txt_client" name="txt_client" value="<?php echo $row->client_name;?>" disabled />
							</div>
							
							<div class="form-group">
								<label for="field-1" class="control-label">Payment Type</label>
								<input type="text" class="form-control" id="txt_paymentType" name="txt_paymentType" value="<?php echo $row->paymentName;?>" disabled />
							</div>
							
							<form method="post" action="">
								<div class="form-group">
											<label for="combo_idClient" class="control-label">Change Payment Type to :</label>							
											<select class="form-control" id="combo_paymentType" name="combo_paymentType">
												<option value="0">-- Select Payment Type --</option>															
												<option value="1" <?php if($row->payment_type == 1){echo "disabled";} ?>>LUMPSUM</option>															
												<option value="2" <?php if($row->payment_type == 2){echo "disabled";} ?>>HOURLY</option>															
												<option value="3" <?php if($row->payment_type == 3){echo "disabled";} ?>>RETAINER</option>															
												<option value="4" <?php if($row->payment_type == 4){echo "disabled";} ?>>SUCCESS FEE</option>															
												<option value="5" <?php if($row->payment_type == 5){echo "disabled";} ?>>PROBONO</option>															
											</select>
								</div>
							
										<div class="form-group">
											<!--<button type="button" class="btn btn-default" data-dismiss="modal" onclick="location.href = '<?php //echo base_url(); ?>index.php/matter';">CANCEL</button>-->
											<!--<button type="submit" class="btn btn-info" id="btnSubmit">SUBMIT</button>-->
										</div>								
							</form>
						
					</div>
					<?php	}
					} ?>
					
				</div>
			
			</div>
			
			<!-- PANEL 2 -->
			<div class="col-md-7">	
				<div class="panel panel-primary" data-collapsed="0">
					
					<!-- panel head -->
					<div class="panel-heading">
						<div class="panel-title">Payment Detail</div>
						
						<div class="panel-options">
							<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
							<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
							<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
						</div>
					</div>
					
					<!-- panel body -->
							
					
					<div class="panel-body">
						
						<div id="formContent">
							
						</div>
						
					</div>
					
					
				</div>
			
			</div>
		</div>
	</div>
</div>

<br /><br /><br />

<!--Start Form Payment Type-->
<div class="modal fade" id="modal-1">
	<div class="modal-dialog">
		<div class="modal-content">
			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Basic Modal</h4>
			</div>
			
			<div class="modal-body" id="modalform1"> <!--LUMPSUM-->
				<h3>LUMPSUM</h3>
				<form role="form" class="form-horizontal form-groups-bordered" action="<?php echo base_url(); ?>index.php/matter/editPayment2/<?php echo $this->uri->segment(4); ?>/1" method="post" style="padding:10px;">
			
							<div class="row">
								<div class="col-md-4">						
									<div class="form-group">
										<label for="field-1" class="control-label">ID Matter</label>
										
										<input type="text" class="form-control" id="txt_idMatter" name="txt_idMatter" value="<?php echo $this->uri->segment(4);?>" disabled>
										<input type="hidden" class="form-control" id="txt_idMatter2" name="txt_idMatter2" value="<?php echo $this->uri->segment(4);?>">
										
										
										<input type="hidden" class="form-control" id="txt_idPayment" name="txt_idPayment" value="1">
										<input type="hidden" class="form-control" id="txt_idPayment_old" name="txt_idPayment_old" value="<?php echo $this->uri->segment(5); ?>">
									</div>							
								</div>
								
								<div class="col-md-4">						
									<div class="form-group" style="padding-left:10px;">
										<label for="field-1" class="control-label">Client</label>
										<input type="text" class="form-control" id="txt_client" name="txt_client" value="<?php echo $row->client_name; ?>" disabled />
									</div>						
								</div>
							</div>
										
							<div class="row">
								<div class="col-md-4">
									
									<div class="form-group">
										<label for="field-1" class="control-label">Matter</label>
										<input type="text" class="form-control" id="txt_matter" name="txt_matter" value="<?php echo $row->matter; ?>" disabled />
									</div>	
									
								</div>
							</div>
				
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label for="open_date" class="control-label">Open Date</label>
										<div class="input-group">
												<input type="text" class="form-control datepicker" data-format="yyyy-mm-dd" name="txt_openDate" value="<?php echo $row->open_date; ?>" disabled>
												
												<div class="input-group-addon">
													<a href="#"><i class="entypo-calendar"></i></a>
												</div>
											</div>
									</div>
								</div>
								
								<div class="col-md-4">
									<div class="form-group" style="padding-left:10px;">
										<label for="open_date" class="control-label">Close Date</label>
										<div class="input-group">
												<input type="text" class="form-control datepicker" data-format="yyyy-mm-dd" name="txt_closeDate" value="<?php echo $row->close_date; ?>" disabled>
												
												<div class="input-group-addon">
													<a href="#"><i class="entypo-calendar"></i></a>
												</div>
											</div>
									</div>
								</div>
							</div>
				
														
							<div class="row">
								<label  class="control-label">Payment Term</label>
							</div>
							<div class="row">
								<div class="col-md-3">									
									<div class="form-group">
										<label for="txt_matter" class="control-label">Term 1</label>
										<input type="text" class="form-control" id="txt_term1" name="txt_term1" />
										<!--<input type="text" class="form-control" id="txt_term1" name="txt_term1" value="">-->
									</div>										
								</div>
								
								<div class="col-md-3">									
									<div class="form-group" style="padding-left:10px;">
										<label for="txt_matter" class="control-label">Term 2</label>
										<input type="text" class="form-control" id="txt_term2" name="txt_term2" />
									</div>										
								</div>
								
								<div class="col-md-3">									
									<div class="form-group" style="padding-left:10px;">
										<label for="txt_matter" class="control-label">Term 3</label>
										<!--<input type="text" class="form-control" id="txt_term3" name="txt_term3" data-mask="currency" data-sign="Rp.">-->
										<input type="text" class="form-control" id="txt_term3" name="txt_term3" />
									</div>										
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<label for="txt_term1Desc" class="control-label">Description Term 1</label>
										<textarea class="form-control" id="txt_term1Desc" name="txt_term1Desc" style="height:120px;"></textarea>
									</div>	
								</div>
								
								<div class="col-md-3">
									<div class="form-group" style="padding-left:10px;">
										<label for="txt_term2Desc" class="control-label">Description Term 2</label>
										<textarea class="form-control" id="txt_term2Desc" name="txt_term2Desc" style="height:120px;"></textarea>
									</div>	
								</div>
								
								<div class="col-md-3">
									<div class="form-group" style="padding-left:10px;">
										<label for="txt_term2Desc" class="control-label">Description Term 3</label>
										<textarea class="form-control" id="txt_term3Desc" name="txt_term3Desc" style="height:120px;"></textarea>
									</div>	
								</div>
							</div>
							
							<!--
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="txt_keterangan" class="control-label">General Description</label>
										<textarea class="form-control" id="txt_keterangan" name="txt_keterangan" style="height:120px;"></textarea>
									</div>	
								</div>
							</div>
							-->
							
						
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<button type="button" class="btn btn-default" data-dismiss="modal" onclick="location.href = '<?php echo base_url().'index.php/matter/'; ?>';">CANCEL</button>
										<button type="submit" class="btn btn-info">SAVE</button>
									</div>
								</div>
							</div>			
						</form>
			</div>
			
			<div class="modal-body" id="modalform2"> <!--HOURLY-->
				<h3>HOURLY</h3>
				<form role="form" class="form-horizontal form-groups-bordered" action="<?php echo base_url(); ?>index.php/matter/editPayment2/<?php echo $this->uri->segment(4); ?>/2" method="post" style="padding:10px;">			
							<div class="row">
								<div class="col-md-6">						
									<div class="form-group">
										<label for="field-1" class="control-label">ID Matter</label>
										
										<input type="text" class="form-control" id="txt_idMatter" name="txt_idMatter" value="<?php echo $this->uri->segment(4);?>" disabled>	
										
										<input type="hidden" class="form-control" id="txt_idPayment" name="txt_idPayment" value="2">
										<input type="hidden" class="form-control" id="txt_idPayment_old" name="txt_idPayment_old" value="<?php echo $this->uri->segment(5); ?>">
									</div>							
								</div>
								
								<div class="col-md-6">						
									<div class="form-group" style="padding-left:10px;">
										<label for="field-1" class="control-label">Client</label>
										<input type="text" class="form-control" id="txt_client" name="txt_client" value="<?php echo $row->client_name; ?>" disabled />
									</div>						
								</div>
							</div>
										
							<div class="row">
								<div class="col-md-6">
									
									<div class="form-group">
										<label for="txt_matter" class="control-label">Matter</label>
										<input type="text" class="form-control" id="txt_matter" name="txt_matter" value="<?php echo $row->matter; ?>" disabled />
									</div>	
									
								</div>
							</div>
				
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label for="open_date" class="control-label">Open Date</label>
										<div class="input-group">
												<input type="text" class="form-control datepicker" data-format="yyyy-mm-dd" name="txt_openDate" value="<?php echo $row->open_date; ?>" disabled />
												
												<div class="input-group-addon">
													<a href="#"><i class="entypo-calendar"></i></a>
												</div>
											</div>
									</div>
								</div>
								
								<div class="col-md-4">
									<div class="form-group" style="padding-left:10px;">
										<label for="open_date" class="control-label">Close Date</label>
										<div class="input-group">
												<input type="text" class="form-control datepicker" data-format="yyyy-mm-dd" name="txt_closeDate" value="<?php echo $row->close_date; ?>"disabled />
												
												<div class="input-group-addon">
													<a href="#"><i class="entypo-calendar"></i></a>
												</div>
											</div>
									</div>
								</div>
							</div>
				
														
							
							<div class="row">
								<div class="col-md-3">									
									<div class="form-group">
										<label for="txt_matter" class="control-label">MANAGING PARTNER</label>
										<input type="text" class="form-control" id="txt_managingPartner" name="txt_managingPartner"  />
										<!--<input type="text" class="form-control" id="txt_term1" name="txt_term1" value="">-->
									</div>										
								</div>
								
								<div class="col-md-3">									
									<div class="form-group" style="padding-left:10px;">
										<label for="txt_matter" class="control-label">PARTNER</label>
										<input type="text" class="form-control" id="txt_partner" name="txt_partner" />
									</div>										
								</div>
								
								<div class="col-md-3">									
									<div class="form-group" style="padding-left:10px;">
										<label for="txt_matter" class="control-label">JUNIOR PARTNER</label>
										<input type="text" class="form-control" id="txt_juniorPartner" name="txt_juniorPartner" />
									</div>										
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-3">									
									<div class="form-group">
										<label for="txt_matter" class="control-label">SENIOR ASSOCIATE</label>
										<input type="text" class="form-control" id="txt_seniorAssociate" name="txt_seniorAssociate"  />
										<!--<input type="text" class="form-control" id="txt_term1" name="txt_term1" value="">-->
									</div>										
								</div>
								
								<div class="col-md-3">									
									<div class="form-group" style="padding-left:10px;">
										<label for="txt_matter" class="control-label">MID ASSOCIATE</label>
										<input type="text" class="form-control" id="txt_midAssociate" name="txt_midAssociate" />
									</div>										
								</div>
								
								<div class="col-md-3">									
									<div class="form-group" style="padding-left:10px;">
										<label for="txt_matter" class="control-label">JUNIOR ASSOCIATE</label>
										<input type="text" class="form-control" id="txt_juniorAssociate" name="txt_juniorAssociate" />
									</div>										
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-3">									
									<div class="form-group">
										<label for="txt_matter" class="control-label">DISC (%)</label>
										<input type="text" class="form-control" id="txt_disc" name="txt_disc"  />
										<!--<input type="text" class="form-control" id="txt_term1" name="txt_term1" value="">-->
									</div>										
								</div>
							</div>
							
							
							
						
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<button type="button" class="btn btn-default" data-dismiss="modal" onclick="location.href = '<?php echo base_url().'index.php/matter/'; ?>';">CANCEL</button>
										<button type="submit" class="btn btn-info">SAVE</button>
									</div>
								</div>
							</div>
						</form>
			</div>
			
			<div class="modal-body" id="modalform3"> <!--RETAINER-->
				<h3>RETAINER</h3>
				<form role="form" class="form-horizontal form-groups-bordered" action="<?php echo base_url(); ?>index.php/matter/editPayment2/<?php echo $this->uri->segment(4); ?>/3" method="post" style="padding:10px;">
			
							<div class="row">
								<div class="col-md-6">						
									<div class="form-group">
										<label for="field-1" class="control-label">ID Matter</label>
										
										<input type="text" class="form-control" id="txt_idMatter" name="txt_idMatter" value="<?php echo $this->uri->segment(4);?>" disabled>
										<input type="hidden" class="form-control" id="txt_idPayment" name="txt_idPayment" value="3">
										<input type="hidden" class="form-control" id="txt_idPayment_old" name="txt_idPayment_old" value="<?php echo $this->uri->segment(5); ?>">
									</div>							
								</div>
								
								<div class="col-md-6">						
									<div class="form-group" style="padding-left:10px;">
										<label for="field-1" class="control-label">Client</label>
										<input type="text" class="form-control" id="txt_client" name="txt_client" value="<?php echo $row->client_name; ?>" disabled />
									</div>						
								</div>
							</div>
										
							<div class="row">
								<div class="col-md-6">
									
									<div class="form-group">
										<label for="txt_matter" class="control-label">Matter</label>
										<input type="text" class="form-control" id="txt_matter" name="txt_matter" value="<?php echo $row->matter; ?>" disabled />
									</div>	
									
								</div>
							</div>
				
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label for="open_date" class="control-label">Open Date</label>
										<div class="input-group">
												<input type="text" class="form-control datepicker" data-format="yyyy-mm-dd" name="txt_openDate" value="<?php echo $row->open_date; ?>" disabled />
												
												<div class="input-group-addon">
													<a href="#"><i class="entypo-calendar"></i></a>
												</div>
											</div>
									</div>
								</div>
								
								<div class="col-md-4">
									<div class="form-group" style="padding-left:10px;">
										<label for="open_date" class="control-label">Close Date</label>
										<div class="input-group">
												<input type="text" class="form-control datepicker" data-format="yyyy-mm-dd" name="txt_closeDate" value="<?php echo $row->close_date; ?>" disabled />
												
												<div class="input-group-addon">
													<a href="#"><i class="entypo-calendar"></i></a>
												</div>
											</div>
									</div>
								</div>
							</div>
				
														
							
							<div class="row">
								<div class="col-md-3">									
									<div class="form-group">
										<label for="txt_matter" class="control-label">Jangka Waktu (hari)</label>
										<input type="text" class="form-control" id="txt_jangkaWaktu" name="txt_jangkaWaktu" />
										<!--<input type="text" class="form-control" id="txt_term1" name="txt_term1" value="">-->
									</div>										
								</div>
								
								<div class="col-md-3">									
									<div class="form-group" style="padding-left:10px;">
										<label for="txt_matter" class="control-label">Biaya</label>
										<input type="text" class="form-control" id="txt_biaya" name="txt_biaya" />
									</div>										
								</div>
								
								<div class="col-md-3">									
									<div class="form-group" style="padding-left:10px;">
										<label for="txt_matter" class="control-label">Jam</label>
										<input type="text" class="form-control" id="txt_jam" name="txt_jam" />
									</div>										
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-3">									
									<div class="form-group">
										<label for="txt_matter" class="control-label">Disc (%)</label>
										<input type="text" class="form-control" id="txt_disc" name="txt_disc" />
									</div>										
								</div>
							</div>
							
							
						
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<button type="button" class="btn btn-default" data-dismiss="modal" onclick="location.href = '<?php echo base_url().'index.php/matter/'; ?>';">CANCEL</button>
										<button type="submit" class="btn btn-info">SAVE</button>
									</div>
								</div>
							</div>
				
						</form>
			</div>
			
			<div class="modal-body" id="modalform4"> <!--SUCCESS FEE-->
				<h3>SUCCESS FEE</h3>
				<form role="form" class="form-horizontal form-groups-bordered" action="<?php echo base_url(); ?>index.php/matter/editPayment2/<?php echo $this->uri->segment(4); ?>/4" method="post" style="padding:10px;">
			
							<div class="row">
								<div class="col-md-6">						
									<div class="form-group">
										<label for="field-1" class="control-label">ID Matter</label>
										
										<input type="text" class="form-control" id="txt_idMatter" name="txt_idMatter" value="<?php echo $this->uri->segment(4);?>" disabled>
										<input type="hidden" class="form-control" id="txt_idPayment" name="txt_idPayment" value="4">
										<input type="hidden" class="form-control" id="txt_idPayment_old" name="txt_idPayment_old" value="<?php echo $this->uri->segment(5); ?>">
									</div>							
								</div>
								
								<div class="col-md-6">						
									<div class="form-group" style="padding-left:10px;">
										<label for="field-1" class="control-label">Client</label>
										<input type="text" class="form-control" id="txt_client" name="txt_client" value="<?php echo $row->client_name; ?>" disabled />
									</div>						
								</div>
							</div>
										
							<div class="row">
								<div class="col-md-6">
									
									<div class="form-group">
										<label for="txt_matter" class="control-label">Matter</label>
										<input type="text" class="form-control" id="txt_matter" name="txt_matter" value="<?php echo $row->matter; ?>" disabled />
									</div>	
									
								</div>
							</div>
				
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label for="open_date" class="control-label">Open Date</label>
										<div class="input-group">
												<input type="text" class="form-control datepicker" data-format="yyyy-mm-dd" name="txt_openDate" value="<?php echo $row->open_date; ?>" disabled />
												
												<div class="input-group-addon">
													<a href="#"><i class="entypo-calendar"></i></a>
												</div>
											</div>
									</div>
								</div>
								
								<div class="col-md-4">
									<div class="form-group" style="padding-left:10px;">
										<label for="open_date" class="control-label">Close Date</label>
										<div class="input-group">
												<input type="text" class="form-control datepicker" data-format="yyyy-mm-dd" name="txt_closeDate" value="<?php echo $row->close_date; ?>" disabled />
												
												<div class="input-group-addon">
													<a href="#"><i class="entypo-calendar"></i></a>
												</div>
											</div>
									</div>
								</div>
							</div>
							<div class="row">
							
								
								<div class="col-md-3">									
									<div class="form-group">
										<label for="txt_matter" class="control-label">Biaya</label>
										<input type="text" class="form-control" id="txt_biaya" name="txt_biaya" />
									</div>										
								</div>
							</div>	
							
							
						
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<button type="button" class="btn btn-default" data-dismiss="modal" onclick="location.href = '<?php echo base_url().'index.php/matter/'; ?>';">CANCEL</button>
										<button type="submit" class="btn btn-info">SAVE</button>
									</div>
								</div>
							</div>
				
					
				
			
						</form>
			</div>
			
			<div class="modal-body" id="modalform5"> <!--PROBONO-->
			<h3>PROBONO</h3>
				<form role="form" class="form-horizontal form-groups-bordered" action="<?php echo base_url(); ?>index.php/matter/editPayment2/<?php echo $this->uri->segment(4); ?>/5" method="post" style="padding:10px;">
			
							<div class="row">
								<div class="col-md-3">						
									<div class="form-group">
										<label for="field-1" class="control-label">ID Matter</label>
										
										<input type="text" class="form-control" id="txt_idMatter" name="txt_idMatter" value="<?php echo $this->uri->segment(4);?>" disabled>
										
										<input type="hidden" class="form-control" id="txt_idPayment" name="txt_idPayment" value="5">
										<input type="hidden" class="form-control" id="txt_idPayment_old" name="txt_idPayment_old" value="<?php echo $this->uri->segment(5); ?>">
									</div>							
								</div>
								
								<div class="col-md-4">						
									<div class="form-group" style="padding-left:10px;">
										<label for="field-1" class="control-label">Client</label>
										<input type="text" class="form-control" id="txt_client" name="txt_client" value="<?php echo $row->client_name; ?>" disabled />
									</div>						
								</div>
							</div>
										
							<div class="row">
								<div class="col-md-4">
									
									<div class="form-group">
										<label for="txt_matter" class="control-label">Matter</label>
										<input type="text" class="form-control" id="txt_matter" name="txt_matter" value="<?php echo $row->matter; ?>" disabled />
									</div>	
									
								</div>
							</div>
				
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label for="open_date" class="control-label">Open Date</label>
										<div class="input-group">
												<input type="text" class="form-control datepicker" data-format="yyyy-mm-dd" name="txt_openDate" value="<?php echo $row->open_date; ?>" disabled />
												
												<div class="input-group-addon">
													<a href="#"><i class="entypo-calendar"></i></a>
												</div>
											</div>
									</div>
								</div>
								
								<div class="col-md-4">
									<div class="form-group" style="padding-left:10px;">
										<label for="open_date" class="control-label">Close Date</label>
										<div class="input-group">
												<input type="text" class="form-control datepicker" data-format="yyyy-mm-dd" name="txt_closeDate" value="<?php echo $row->close_date; ?>" disabled />
												
												<div class="input-group-addon">
													<a href="#"><i class="entypo-calendar"></i></a>
												</div>
											</div>
									</div>
								</div>
							</div>
							
						
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<button type="button" class="btn btn-default" data-dismiss="modal" onclick="location.href = '<?php echo base_url().'index.php/matter/'; ?>';">CANCEL</button>
										<button type="submit" class="btn btn-info">SAVE</button>
									</div>
								</div>
							</div>
			
						</form>
			</div>
			
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-info">Save changes</button>
			</div>
		</div>
	</div>
</div>
<!--End Form Payment Type-->

<!-- Footer -->
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

	<script src="<?php echo base_url(); ?>template/assets/js/jquery.inputmask.bundle.min.js"></script>
	<script src="<?php echo base_url(); ?>template/assets/js/jquery.multi-select.js"></script>




</body>
</html>