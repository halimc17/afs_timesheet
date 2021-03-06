<header class="navbar navbar-fixed-top"><!-- set fixed position by adding class "navbar-fixed-top" -->
		
		<div class="navbar-inner">
		
			<!-- logo -->
			<div class="navbar-brand">
				<a href="index.html">
					<img src="<?php echo base_url(); ?>template/assets/images/afs.jpg" width="50" alt="" />
				</a>
			</div>
			
			
			<!-- main menu -->
						
			<ul class="navbar-nav">
				<li>
					<a href="<?php echo base_url(); ?>index.php">
						<i class="entypo-gauge"></i>
						<span>Home</span>
					</a>
					
				</li>
				<li class="opened active">
					<a href="layout-api.html">
						<i class="entypo-layout"></i>
						<span>Attorney</span>
					</a>
					<ul>						
						<li>
							<a href="<?php echo site_url('timesheet/') ?>">
								<span>Timesheet</span>
							</a>
						</li>
						<li>
							<a href="layout-fixed-sidebar.html">
								<span>Reports</span>
							</a>
						</li>
						
					</ul>
				</li>
				<li>
					<a href="#">
						<i class="entypo-newspaper"></i>
						<span>Administrator</span>
					</a>
					<ul>
						<li>
							<a href="<?php echo site_url('setup/'); ?>">
								<span>Setup</span>
							</a>
						</li>						
						<li>
							<a href="<?php echo site_url('client/'); ?>">
								<span>Clients</span>
							</a>
						</li>
						<li>
							<a href="<?php echo site_url('/matter');?>">
								<span>Matter</span>	</a>						
						</li>						
						<li>
							<a href="<?php echo site_url('user/'); ?>">
								<span>User Management</span>
							</a>
							
						</li>
						<li>
							<a href="<?php echo site_url('report/'); ?>">
								<span>Report Timesheet</span>
							</a>
							
						</li>
						
					</ul>
				</li>
				
				
				<!-- Search Bar -->
				<li id="search" class="search-input-collapsed">
					<!-- add class "search-input-collapsed" to auto collapse search input -->
					<form method="get" action="">
						<input type="text" name="q" class="search-input" placeholder="Search something..."/>
						<button type="submit">
							<i class="entypo-search"></i>
						</button>
					</form>
				</li>
			</ul>	


			<!-- notifications and other links -->
			<ul class="nav navbar-right pull-right">
				
				<!-- raw links -->
				
				<li class="sep"></li>

				<li><a href="#"><?php echo $this->session->userdata('nama'); ?></a></li>
				
				<li class="sep"></li>
				
				<li>
					<a href="<?php echo base_url(); ?>index.php/login/logout/">
						Log Out <i class="entypo-logout right"></i>
					</a>
				</li>
				
				
				<!-- mobile only -->
				<li class="visible-xs">	
				
					<!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
					<div class="horizontal-mobile-menu visible-xs">
						<a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
							<i class="entypo-menu"></i>
						</a>
					</div>
					
				</li>
				
			</ul>
	
		</div>
		
	</header>