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
	

	
<h3><span class="label label-warning">User</span>&nbsp;Input Timesheet</h3>
<br />
<div class="panel-body">
		<div class="col-md-6">		
				<form role="form" class="form-horizontal form-groups-bordered" method="post" action="<?php echo base_url(); ?>index.php/user/addRecord2">
	
					
			
				<div class="row">
					<div class="col-md-6">						
						<div class="form-group">
							<label for="field-1" class="control-label">Client</label>
							
							<input type="text" class="form-control" id="txt_nama" name="txt_nama" value="">
						</div>							
					</div>			
					
				</div>
			
				<div class="row">
					<div class="col-md-6">
						
						<div class="form-group">
							<label for="field-3" class="control-label">Matter</label>
							
							<input type="text" class="form-control" id="txt_email1" name="txt_email1" value="">
						</div>	
						
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-6">
						
						<div class="form-group">
							<label for="field-4" class="control-label">Sub Matter</label>
							
							<input type="text" class="form-control" id="txt_email2" name="txt_email2" value="">
						</div>	
						
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-6">
						
						<div class="form-group">
							<label for="field-4" class="control-label">Reimburstment</label>
							
							<!--<input type="text" class="form-control" id="txt_reimburstmen" name="txt_reimburstmen" value="">-->
							<select class="form-control" id="combo_reimburstment" name="combo_reimburstment">
								<option value="0">Transportasi</option>						
								<option value="1">Kurir</option>							
								<option value="2">Fotocopy</option>							
								<option value="3">Stationery</option>							
								<option value="4">Binding</option>							
								<option value="5">Materai</option>							
								<option value="6">Nasegel Pos</option>							
								<option value="7">Fax Out</option>																
							</select>
						</div>	
						
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-6">
						
						<div class="form-group">
							<label for="field-4" class="control-label">Jumlah</label>
							<input type="text" class="form-control" id="txt_jumlah" name="txt_jumlah" value="">							
						</div>	
						
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-2">
						
						<div class="form-group">
							<label for="field-4" class="control-label">Durasi (Minutes)</label>
							
							<input type="text" class="form-control" id="txt_durasi" name="txt_durasi" value="">
						</div>	
						
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-6">
						
						<div class="form-group">
							<label for="field-4" class="control-label">Tempat</label>
							
							<select class="form-control" id="combo_tempat" name="combo_tempat">
								<option value="0">Office</option>						
								<option value="1">PN Pusat</option>							
								<option value="2">PN Selatan</option>							
								<option value="3">PN Timur</option>							
								<option value="4">PN Barat</option>							
								<option value="5">PN Bodetabek</option>							
								<option value="6">Jaksel</option>							
								<option value="7">Jaktim</option>							
								<option value="8">Jakbar</option>							
								<option value="9">Bodetabek</option>							
								<option value="10">Lain-Lain</option>							
							</select>
						</div>	
						
					</div>
				</div>
				
			
				<div class="row">
					<div class="col-md-6">
						
						<div class="form-group">
							<label for="txt_keterangan" class="control-label">Description</label>
							<textarea class="form-control" id="txt_keterangan" name="txt_keterangan" style="height:120px;"></textarea>
						</div>	
					
					</div>
				</div>				
				
				
				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<button type="button" class="btn btn-default" data-dismiss="modal" onclick="location.href = '<?php echo base_url().'index.php/user/'; ?>';">CANCEL</button>
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