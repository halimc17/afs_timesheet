<?php $this->load->view('head_view'); ?>

<body class="page-body" data-url="http://neon.dev">

<div class="page-container horizontal-menu">
	
	
	<?php $this->load->view('topheader_view'); ?>


<script type="text/javascript">
	$(document).ready(function(){
	   
	   $('[name="btnEditAction"]').button().on( "click", function() {
			edit_client($(this).attr("id"));
		});
		
		$('[name="btnDeleteAction"]').button().on( "click", function() {
			var id = $(this).attr("id");
			gotoDelete(id);			
			
		});
		
		$('#btnUpdate').button().on( "click", function() {			
			save_update();			
		});
		
		function gotoDelete(id){
			 if(confirm('Are you sure delete this data?')){				
				window.location = "<?php echo site_url('client/delete_record'); ?>/"+id;
			 }
			
		}
		
		function edit_client(id){			
			$('#formEdit')[0].reset();
			
			$.ajax({
				url:"<?php echo site_url('client/get_record'); ?>/"+id,
				type: "GET",
				dataType: "JSON",
				success: function(data){
					$('[name="txt_id_client2"]').val(data.id_client);
					$('[name="txt_nama_client2"]').val(data.nama_client);
					$('[name="txt_contactPerson2"]').val(data.contact_person);
					$('[name="txt_mobile12"]').val(data.mobile1);
					$('[name="txt_mobile22"]').val(data.mobile2);
					$('[name="txt_address2"]').val(data.address);
					$('[name="txt_email2"]').val(data.email);
					$('[name="txt_inisial2"]').val(data.inisial);
					$('[name="txt_keterangan2"]').val(data.keterangan);
					
					
					$('html, body').animate({ scrollTop: 0 }, 'fast');
					$('#modal-7').modal('show')	;
					
				}
			})
		}
		
		function save_update(){
			$.ajax({
				url:"<?php echo site_url('client/update_record'); ?>/",
				type: "POST",
				data: $('#formEdit').serialize(),
				dataType: "JSON",
				success: function(data){
					$("#modal-7").modal('hide');
					//reload_table();
					window.location = "<?php echo site_url('client/'); ?>";
				},
				error: function (jqXHR, textStatus, errorThrown){
					alert('update data error');
				}
			});
		}
		

	});
</script>
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

<div class="main-content">
	
	<div class="row">
		<div class="col-md-3">	
			<button type="button" class="btn btn-info" onclick="jQuery('#modal-6').modal('show', {backdrop: 'static'});">+ Add New Client</button>
		</div>
	</div><br />
	<div class="row">
			<div class="col-md-10">
				<div class="panel panel-default panel-shadow" data-collapsed="0"><!-- to apply shadow add class "panel-shadow" -->
					<!-- panel head -->
					<div class="panel-heading">
						<div class="panel-title">Client List</div>
					</div>
					<!-- panel body -->
					<div class="panel-body">
						<div class="col-md-12">	
							<table class="table table-bordered datatable" id="table-4">
								<thead>
									<tr>
										<th>No</th>
										<th>Nama</th>
										<th>Contact Person</th>
										<th>Mobile 1</th>
										<th>Mobile 2</th>
										<th>Email</th>
										<th>Address</th>
										<th>Inisial</th>
										<th>Potensial</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>	
								<?php 
								$counter = 1;
								if(isset($records)){
									foreach($records as $row){ ?>
									<tr class="odd gradeX">
										<td><?php echo $counter; ?></td>
										<td><?php echo $row->nama_client; ?></td>
										<td><?php echo $row->contact_person; ?></td>
										<td><?php echo $row->mobile1; ?></td>
										<td><?php echo $row->mobile2; ?></td>
										<td><?php echo $row->email; ?></td>
										<td><?php echo $row->address; ?></td>			
										<td><?php echo $row->inisial; ?></td>
										<td align="center"><i class="glyphicon glyphicon-remove"></i></td>
										<td class="center">
											<button type="button" name="btnEditAction" class="btn btn-green btn-icon" id="<?php echo $row->id_client; ?>">
												Edit
												<i class="entypo-pencil"></i>
											</button>
											<button type="button" name="btnDeleteAction" class="btn btn-red btn-icon" id="<?php echo $row->id_client; ?>">
												Delete
												<i class="entypo-trash"></i>
											</button>											
										</td>
									</tr>
								<?php	$counter++; }
								} ?>
									
								</tbody>
								<tfoot>
									<tr>
										<th>No</th>
										<th>Nama</th>
										<th>Contact Person</th>
										<th>Mobile 1</th>
										<th>Mobile 2</th>
										<th>Email</th>
										<th>Address</th>
										<th>Inisial</th>
										<th>Potensial</th>
										<th>Action</th>
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

<!-- Modal 6 (Long Modal)-->
<div class="modal fade" id="modal-6">
	<div class="modal-dialog">
		<div class="modal-content">
			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Add New Client</h4>
			</div>
			
			<div class="modal-body">
			
			<form role="form" class="form-horizontal form-groups-bordered" method="post" action="<?php echo base_url(); ?>index.php/client/add_record/" style="padding:10px;">
							<div class="row">
								<div class="col-md-6">						
									<div class="form-group">
										<label for="field-1" class="control-label">Nama</label>
										<input type="text" class="form-control" id="txt_nama_client" name="txt_nama_client" value="">
									</div>							
								</div>
								<div class="col-md-6">						
									<div class="form-group" style="padding-left:10px;">
										<label for="field-2" class="control-label">Contact Person</label>							
										<input type="text" class="form-control" id="txt_contactPerson" name="txt_contactPerson" value="">
									</div>						
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-6">						
									<div class="form-group">
										<label for="txt_mobile1" class="control-label">Mobile 1</label>
										<input type="text" class="form-control" id="txt_mobile1" name="txt_mobile1" value="">
									</div>							
								</div>
								<div class="col-md-6">						
									<div class="form-group" style="padding-left:10px;">
										<label for="txt_mobile2" class="control-label">Mobile 2</label>							
										<input type="text" class="form-control" id="txt_mobile2" name="txt_mobile2" value="">
									</div>						
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-6">						
									<div class="form-group">
										<label for="txt_address" class="control-label">Address</label>
										<input type="text" class="form-control" id="txt_address" name="txt_address" value="">
									</div>							
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-6">						
									<div class="form-group">
										<label for="txt_email" class="control-label">Email</label>
										<input type="text" class="form-control" id="txt_email" name="txt_email" value="">
									</div>							
								</div>
								<div class="col-md-6">						
									<div class="form-group" style="padding-left:10px;">
										<label for="txt_inisial" class="control-label">Inisial</label>							
										<input type="text" class="form-control" id="txt_inisial" name="txt_inisial" value="">
									</div>						
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-12">						
									<div class="form-group">
										<label for="txt_keterangan" class="control-label">Keterangan</label>
										<textarea class="form-control" id="txt_keterangan" name="txt_keterangan"></textarea>
									</div>							
								</div>
							</div>
						
				
			</div>
			
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-info">Save changes</button>
			</div>
			</form>	
		</div>
	</div>
</div>

<!-- long modal 7 -->
<div class="modal fade" id="modal-7">
	<div class="modal-dialog">
		<div class="modal-content">
			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Edit Client</h4>
			</div>
			
			<div class="modal-body">
			
			<form role="form" class="form-horizontal form-groups-bordered" id="formEdit" method="post" action="<?php echo base_url(); ?>index.php/client/update_record/" style="padding:10px;">
							<div class="row">
								<div class="col-md-6">						
									<div class="form-group">
										<label for="txt_nama_client2" class="control-label">Nama</label>
										<input type="text" class="form-control" id="txt_nama_client" name="txt_nama_client2" value="">
										<input type="hidden" class="form-control" id="txt_id_client2" name="txt_id_client2" value="">
									</div>							
								</div>
								<div class="col-md-6">						
									<div class="form-group" style="padding-left:10px;">
										<label for="txt_contactPerson2" class="control-label">Contact Person</label>							
										<input type="text" class="form-control" id="txt_contactPerson2" name="txt_contactPerson2" value="">
									</div>						
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-6">						
									<div class="form-group">
										<label for="txt_mobile12" class="control-label">Mobile 1</label>
										<input type="text" class="form-control" id="txt_mobile12" name="txt_mobile12" value="">
									</div>							
								</div>
								<div class="col-md-6">						
									<div class="form-group" style="padding-left:10px;">
										<label for="txt_mobile22" class="control-label">Mobile 2</label>							
										<input type="text" class="form-control" id="txt_mobile22" name="txt_mobile22" value="">
									</div>						
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-6">						
									<div class="form-group">
										<label for="txt_address2" class="control-label">Address</label>
										<input type="text" class="form-control" id="txt_address2" name="txt_address2" value="">
									</div>							
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-6">						
									<div class="form-group">
										<label for="txt_email2" class="control-label">Email</label>
										<input type="text" class="form-control" id="txt_email2" name="txt_email2" value="">
									</div>							
								</div>
								<div class="col-md-6">						
									<div class="form-group" style="padding-left:10px;">
										<label for="txt_inisial2" class="control-label">Inisial</label>							
										<input type="text" class="form-control" id="txt_inisial2" name="txt_inisial2" value="">
									</div>						
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-12">						
									<div class="form-group">
										<label for="txt_keterangan2" class="control-label">Keterangan</label>
										<textarea class="form-control" id="txt_keterangan2" name="txt_keterangan2"></textarea>
									</div>							
								</div>
							</div>
						
				
			</div>
			
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" id="btnUpdate" class="btn btn-info" >Save changes</button>
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