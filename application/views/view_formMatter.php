<?php $this->load->view('head_view'); ?>

<body class="page-body" data-url="http://neon.dev">

<div class="page-container horizontal-menu">
	
	
	<?php $this->load->view('topheader_view'); ?>	
	<div class="main-content">
		
				
		
<script type="text/javascript">

function getRandomInt(min, max) 
{
	return Math.floor(Math.random() * (max - min + 1)) + min;
}
</script>


<div class="row">


<div class="panel-body">
<h3><span class="label label-warning">Administrator</span>&nbsp; Add New Matter</h3>
		<div class="col-md-6">	
				<form role="form" class="form-horizontal form-groups-bordered" action="<?php echo base_url(); ?>index.php/matter/addRecord2" method="post">
			
				<div class="row">
					<div class="col-md-6">						
						<div class="form-group">
							<label for="field-1" class="control-label">ID Matter</label>
							
							<input type="text" class="form-control" id="txt_idMatter" name="txt_idMatter" value="<?php echo $newIdMatter;?>" disabled>
							<input type="hidden" class="form-control" id="txt_idMatter2" name="txt_idMatter2" value="<?php echo $newIdMatter;?>">
						</div>							
					</div>
					
					<div class="col-md-6">						
						<div class="form-group" style="padding-left:10px;">
							<label for="combo_idClient" class="control-label">Client</label>							
							<select class="form-control" id="combo_idClient" name="combo_idCLient">
								<option value="0">Select Client</option>
								<?php if(isset($records)){
											foreach($records as $row){				
								?>
								<option value="<?php echo $row->id_client; ?>"><?php echo $row->client_name; ?></option>
								<?php }} ?>
							</select>
						</div>						
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-6">
						
						<div class="form-group">
							<label for="txt_matter" class="control-label">Matter</label>
							<input type="text" class="form-control" id="txt_matter" name="txt_matter" value="">
						</div>	
						
					</div>
				</div>
				
				<div class="row">				
					<div class="col-md-6">
						<div class="form-group" style="padding-left:10px;">
							<label class="col-sm-3 control-label">Open Date</label>
							
							<!--<input type="text" class="form-control" id="txt_openDate" name="txt_openDate" value="">-->
							<div class="col-sm-7">
								<div class="input-group">
									<input type="text" class="form-control datepicker" data-format="yyyy-mm-dd" name="txt_openDate">
									
									<div class="input-group-addon">
										<a href="#"><i class="entypo-calendar"></i></a>
									</div>
								</div>
							</div>
						</div>	
						
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-6">
						<div class="form-group" style="padding-left:10px;">
							<label class="col-sm-3 control-label">Close Date</label>
							
							<!--<input type="text" class="form-control" id="txt_openDate" name="txt_openDate" value="">-->
							<div class="col-sm-7">
								<div class="input-group">
									<input type="text" class="form-control datepicker" data-format="yyyy-mm-dd" name="txt_closeDate">
									
									<div class="input-group-addon">
										<a href="#"><i class="entypo-calendar"></i></a>
									</div>
								</div>
							</div>
						</div>	
						
					</div>
				</div>
				
				<div class="row">
					
					<div class="col-md-5">						
						<div class="form-group" style="padding-left:10px;">
							<label for="combo_idPaymentType" class="control-label">Payment Type</label>							
							<select class="form-control" id="combo_idPaymentType" name="combo_idPaymentType">
							<option value="0">Select Payment Type</option>
							<?php if(isset($paymentType)){
								foreach($paymentType as $row2){									?>
									
									<option value="<?php echo $row2->id_paymentType; ?>"><?php echo $row2->paymentName; ?></option>
									<?
								}								
							}?>								
							</select>
						</div>						
					</div>
				</div>
				

				
			
				
				
				<div class="row">
					<div class="col-md-10">
						<div class="form-group">
							<label for="txt_keterangan" class="control-label">Description</label>
							<textarea class="form-control" id="txt_keterangan" name="txt_keterangan" style="height:120px;"></textarea>
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
				
			</div>


	
</div>

<br />

<br />

<br />



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

</body>
</html>