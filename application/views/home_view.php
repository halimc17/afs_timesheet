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
	<div class="col-sm-3">
	
		<div class="tile-stats tile-red">
			<div class="icon"><i class="entypo-users"></i></div>
			<div class="num" data-start="0" data-end="83" data-postfix="" data-duration="1500" data-delay="0">0</div>
			
			<h3>Registered users</h3>
			<p>so far in our blog, and our website.</p>
		</div>
		
	</div>
	
	<div class="col-sm-3">
	
		<div class="tile-stats tile-green">
			<div class="icon"><i class="entypo-chart-bar"></i></div>
			<div class="num" data-start="0" data-end="135" data-postfix="" data-duration="1500" data-delay="600">0</div>
			
			<h3>Daily Visitors</h3>
			<p>this is the average value.</p>
		</div>
		
	</div>
	
	<div class="col-sm-3">
	
		<div class="tile-stats tile-aqua">
			<div class="icon"><i class="entypo-mail"></i></div>
			<div class="num" data-start="0" data-end="23" data-postfix="" data-duration="1500" data-delay="1200">0</div>
			
			<h3>New Messages</h3>
			<p>messages per day.</p>
		</div>
		
	</div>
	
	<div class="col-sm-3">
	
		<div class="tile-stats tile-blue">
			<div class="icon"><i class="entypo-rss"></i></div>
			<div class="num" data-start="0" data-end="52" data-postfix="" data-duration="1500" data-delay="1800">0</div>
			
			<h3>Subscribers</h3>
			<p>on our site right now.</p>
		</div>
		
	</div>
</div>
<?php //echo $this->session->userdata('nama'); ?>


<br />

<br />

<br />



<!-- Footer -->
<?php $this->load->view('footer_view'); ?>
			</div>
	
	
</div>



	<link rel="stylesheet" href="<?php echo base_url(); ?>template/assets/js/jvectormap/jquery-jvectormap-1.2.2.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>template/assets/js/rickshaw/rickshaw.min.css">

	<!-- Bottom Scripts -->
	<script src="<?php echo base_url(); ?>template/assets/js/gsap/main-gsap.js"></script>
	<script src="<?php echo base_url(); ?>template/assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="<?php echo base_url(); ?>template/assets/js/bootstrap.js"></script>
	<script src="<?php echo base_url(); ?>template/assets/js/joinable.js"></script>
	<script src="<?php echo base_url(); ?>template/assets/js/resizeable.js"></script>
	<script src="<?php echo base_url(); ?>template/assets/js/neon-api.js"></script>
	<script src="<?php echo base_url(); ?>template/assets/js/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="<?php echo base_url(); ?>template/assets/js/jvectormap/jquery-jvectormap-europe-merc-en.js"></script>
	<script src="<?php echo base_url(); ?>template/assets/js/jquery.sparkline.min.js"></script>
	<script src="<?php echo base_url(); ?>template/assets/js/rickshaw/vendor/d3.v3.js"></script>
	<script src="<?php echo base_url(); ?>template/assets/js/rickshaw/rickshaw.min.js"></script>
	<script src="<?php echo base_url(); ?>template/assets/js/raphael-min.js"></script>
	<script src="<?php echo base_url(); ?>template/assets/js/morris.min.js"></script>
	<script src="<?php echo base_url(); ?>template/assets/js/toastr.js"></script>
	<script src="<?php echo base_url(); ?>template/assets/js/neon-chat.js"></script>
	<script src="<?php echo base_url(); ?>template/assets/js/neon-custom.js"></script>
	<script src="<?php echo base_url(); ?>template/assets/js/neon-demo.js"></script>

</body>
</html>