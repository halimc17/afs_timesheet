<?php $this->load->view('head_view'); ?>

<body class="page-body" data-url="http://neon.dev">

<div class="page-container horizontal-menu">
	
	
	<?php $this->load->view('topheader_view'); ?>



<script type="text/javascript">
	var save_method;
	var url;

	
	jQuery(document).ready(function($)
	{

		$('[name="btnEditAction"]').button().on( "click", function() {
			gotoEdit($(this).attr("id"));
		});

		$('[name="btnDeleteAction"]').button().on( "click", function() {
			var id = $(this).attr("id");
			gotoDelete(id);
		});

		$('[name="btnSubmit"]').button().on( "click", function() {
			var id = document.getElementById("txt_id_user").value;
			save(id);
		});

		var table = $("#table-4").dataTable({
			"sPaginationType": "bootstrap",
			"sDom": "<'row'<'col-xs-6 col-left'l><'col-xs-6 col-right'<'export-data'T>f>r>t<'row'<'col-xs-6 col-left'i><'col-xs-6 col-right'p>>",
			"oTableTools": {
			},
		});


		
	});

	function new_user(){
		save_method = 'add';
		$('#formUser')[0].reset(); // reset form on modals
		$('html, body').animate({ scrollTop: 0 }, 'fast');
		$('.modal-title').text('Add New User');
		$('[name="btnSubmit"]').text('Save');
      	$('#modal-add_user').modal('show'); 
	}

	function gotoDelete(id){
		if(confirm('Are you sure delete this data?')){				
				window.location = "<?php echo site_url('user/delete_record'); ?>/"+id;
			 }
	}

	function gotoEdit(id){
			save_method = 'edit';
			$('#formUser')[0].reset(); // reset form on modals
			$('html, body').animate({ scrollTop: 0 }, 'fast');
			$('.modal-title').text('Edit User');
			$('[name="btnSubmit"]').text('Update');
	      	

	      	$.ajax({
				url:"<?php echo site_url('user/get_record'); ?>/"+id,
				type: "GET",
				dataType: "JSON",
				success: function(data){
					$('[name="txt_id_user"]').val(data.id_user);
					$('[name="txt_nama_user"]').val(data.nama);
					$('[name="txt_inisial"]').val(data.inisial);
					$('[name="txt_mobile1"]').val(data.mobile1);
					$('[name="txt_mobile2"]').val(data.mobile2);
					$('[name="txt_home_phone"]').val(data.home_phone);
					$('[name="txt_email1"]').val(data.email1);
					$('[name="txt_email2"]').val(data.email2);
					$('[name="txt_ext"]').val(data.ext);
					$('[name="combo_jabatan"]').val(data.id_jabatan);
					$('[name="combo_divisi"]').val(data.id_divisi);
					$('[name="txt_username"]').val(data.username);					
					
					$('html, body').animate({ scrollTop: 0 }, 'fast');
					$('#modal-add_user').modal('show');					
				}
			})
		}

		function sukses(){
			alert('data tersimpan');
		}

		function save(){			
			if (save_method == 'add') {
				url = "<?php echo site_url('user/add_record') ?>";
			}else{
				url = "<?php echo site_url('user/edit_record') ?>";
			};

			//alert(url);
			 $.ajax({
	            url : url,
	            type: "POST",
	            data: $('#formUser').serialize(),
	            dataType: "JSON",
	            success: function(data)
	            {
	               //if success close modal and reload ajax table
	               $('#modal-add_user').modal('hide');		               
	               sukses();
	               window.location = "<?php echo site_url('user/'); ?>";               
	            },
	            error: function (jqXHR, textStatus, errorThrown)
	            {
	                alert('Error adding / update data');
	            }
        	});
		}

	

	

		
</script>	

<div class="main-content">
	
	<div class="row">
		<div class="col-md-3">	
			<button type="button" class="btn btn-info" onclick="new_user()">+ Add New User</button>
		</div>
	</div><br />
	<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default panel-shadow" data-collapsed="0"><!-- to apply shadow add class "panel-shadow" -->
					<!-- panel head -->
					<div class="panel-heading">
						<div class="panel-title">User List</div>
					</div>
					<!-- panel body -->
					<div class="panel-body">
						<div class="col-md-12">	
							<table class="table table-bordered datatable" id="table-4">
								<thead>
									<tr>
										<th>No</th>
										<th>Nama</th>
										<th>Inisial</th>
										<th>Mobile 1</th>
										<th>Mobile 2</th>
										<th>Home Phone</th>
										<th>Email 1</th>
										<th>Email 2</th>
										<th>Ext</th>
										<th>Divisi</th>
										<th>Jabatan</th>
										<th>Active</th>
										<th style="width:160px;">Action</th>
									</tr>
								</thead>
								<tbody>	
								<?php 
								$counter = 1;
								if(isset($records)){
									foreach($records as $row){ ?>
									<tr class="odd gradeX">
										<td><?php echo $counter; ?></td>
										<td><?php echo $row->nama; ?></td>
										<td><?php echo $row->inisial; ?></td>
										<td><?php echo $row->mobile1; ?></td>
										<td><?php echo $row->mobile2; ?></td>
										<td><?php echo $row->home_phone; ?></td>
										<td><?php echo $row->email1; ?></td>			
										<td><?php echo $row->email2; ?></td>
										<td><?php echo $row->ext; ?></td>
										<td><?php echo $row->nama_divisi; ?></td>
										<td><?php echo $row->nama_jabatan; ?></td>										
										
										<td align="center">
												<?php if ($row->active == 1) { ?>													
														<button type="button" name="btnActive" class="btn btn-success" onclick="location.href='<?php echo site_url('user/change_active/'.$row->id_user.'/0') ?>';" />
															<i class="entypo-check"></i>
														</button>
												<?php }else{ ?>
														<button type="button" name="btnNotActive" class="btn btn-danger" onclick="location.href='<?php echo site_url('user/change_active/'.$row->id_user.'/1') ?>';">
															<i class="entypo-cancel"></i>
														</button>
												<?php } ?>												
										</td>
										<td class="center">
											<button type="button" name="btnEditAction" class="btn btn-success" id="<?php echo $row->id_user; ?>">
												
												<i class="entypo-pencil"></i>
											</button>
											<button type="button" name="btnDeleteAction" class="btn btn-danger" id="<?php echo $row->id_user; ?>">
												
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
										<th>Inisial</th>
										<th>Mobile 1</th>
										<th>Mobile 2</th>
										<th>Home Phone</th>
										<th>Email 1</th>
										<th>Email 2</th>
										<th>Ext</th>
										<th>Divisi</th>
										<th>Jabatan</th>
										<th>Active</th>
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



<div class="modal fade" id="modal-add_user">
	<div class="modal-dialog">
		<div class="modal-content">
			<form role="form" class="form-horizontal form-groups-bordered" method="post" id="formUser" action="" style="padding:10px;">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title">New User</h3>
			</div>
			<div class="modal-body">			
				
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="txt_nama_user" class="control-label">Nama</label>
								<input type="text" class="form-control" id="txt_nama_user" name="txt_nama_user" value=""  />
								<input type="hidden" class="form-control" id="txt_id_user" name="txt_id_user" value=""  />
							</div>	
						</div>
						<div class="col-md-6">
							<div class="form-group" style="padding-left:10px;">
								<label for="txt_inisial" class="control-label">Inisial</label>
								<input type="text" class="form-control" id="txt_inisial" name="txt_inisial" value=""  />
							</div>	
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="txt_mobile1" class="control-label">Mobile 1</label>
								<input type="text" class="form-control" id="txt_mobile1" name="txt_mobile1" value=""  />
							</div>	
						</div>
						<div class="col-md-6">
							<div class="form-group" style="padding-left:10px;">
								<label for="txt_mobile2" class="control-label">Mobile 2</label>
								<input type="text" class="form-control" id="txt_mobile2" name="txt_mobile2" value=""  />
							</div>	
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="txt_home_phone" class="control-label">Home Phone</label>
								<input type="text" class="form-control" id="txt_home_phone" name="txt_home_phone" value=""  />
							</div>	
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="txt_email1" class="control-label">Email 1</label>
								<input type="text" class="form-control" id="txt_email1" name="txt_email1" value=""  />
							</div>	
						</div>
						<div class="col-md-6">
							<div class="form-group" style="padding-left:10px;">
								<label for="txt_email2" class="control-label">Email 2</label>
								<input type="text" class="form-control" id="txt_email2" name="txt_email2" value=""  />
							</div>	
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="txt_ext" class="control-label">Ext</label>
								<input type="text" class="form-control" id="txt_ext" name="txt_ext" value=""  />
							</div>	
						</div>
						<div class="col-md-6">
							<div class="form-group" style="padding-left:10px;">
								<label for="combo_status" class="control-label">Status</label>
								<select class="form-control" id="combo_status" name="combo_status">
									<option value="Managing Partner">Managing Partner</option>	
									<option value="Partner">Partner</option>	
									<option value="Associates">Associates</option>	
									<option value="Staff">Staff</option>	
								</select>
							</div>	
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="combo_divisi" class="control-label">Divisi</label>
								<select class="form-control" id="combo_divisi" name="combo_divisi">
									<?php if (isset($records_divisi)) {
										foreach ($records_divisi as $row1) { ?>
											<option value="<?php echo $row1->id_divisi; ?>"><?php echo $row1->nama_divisi; ?></option>			
									<?php	}
									} ?>									
								</select>
							</div>	
						</div>
						<div class="col-md-6">
							<div class="form-group" style="padding-left:10px;">
								<label for="combo_jabatan" class="control-label">Jabatan</label>
								<select class="form-control" id="combo_jabatan" name="combo_jabatan">
									<?php if (isset($records_jabatan)) {
										foreach ($records_jabatan as $row2) { ?>
											<option value="<?php echo $row2->id_jabatan; ?>"><?php echo $row2->nama_jabatan; ?></option>			
									<?php	}
									} ?>
								</select>
							</div>	
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="txt_username" class="control-label">Username</label>
								<input type="text" class="form-control" id="txt_username" name="txt_username" value=""  />
							</div>	
						</div>
						<div class="col-md-6">
							<div class="form-group" style="padding-left:10px;">
								<label for="txt_password" class="control-label">Password</label>
								<input type="password" class="form-control" id="txt_password" name="txt_password" value=""  />
							</div>	
						</div>
					</div>

					<div class="row">
						<div class="form-group">
							<div class="col-md-6">
								<div class="checkbox">
									<label>
										<input type="checkbox" value="1" name="check_administrator">Set as Administrator
									</label>
								</div>
							</div>
						</div>
					</div>
				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-info" name="btnSubmit">Save changes</button>
			</div>
			</form>
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