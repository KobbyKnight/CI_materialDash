<div class="sidebar" data-color="purple" data-background-color="black" data-image="<?php echo base_url ('assets/img/sidebar-2.jpg')?>">
<!--
    Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"
    Tip 2: you can also add an image using data-image tag
-->
<div class="logo">
	<a href="#" class="simple-text logo-normal">
		Base Template
	</a>
</div>
<div class="sidebar-wrapper">
	<ul class="nav">
		<li class="nav-item active  ">
			<a class="nav-link" href="<?= site_url('dashboard/dash');?>">
				<i class="material-icons">dashboard</i>
				<p>Dashboard</p>
			</a>
		</li>
		<li class="nav-item ">
			<a class="nav-link" href="<?= site_url('user/index');?>">
				<i class="material-icons">person</i>
				<p>User Profile</p>
			</a>
		</li>
		<li class="nav-item ">
			<a class="nav-link" href="<?= site_url('table/index');?>">
				<i class="material-icons">content_paste</i>
				<p>Table List</p>
			</a>
		</li>
		<li class="nav-item ">
			<a class="nav-link" href="<?= site_url('font/index');?>">
				<i class="material-icons">library_books</i>
				<p>Typography</p>
			</a>
		</li>
		<li class="nav-item ">
			<a class="nav-link" href="<?= site_url('icon/index');?>">
				<i class="material-icons">bubble_chart</i>
				<p>Icons</p>
			</a>
		</li>
		<li class="nav-item ">
			<a class="nav-link" href="<?= site_url('map/index');?>">
				<i class="material-icons">location_ons</i>
				<p>Maps</p>
			</a>
		</li>
		<li class="nav-item ">
			<a class="nav-link" href="<?= site_url('notification/index');?>">
				<i class="material-icons">notifications</i>
				<p>Notifications</p>
			</a>
		</li>

	</ul>
</div>
</div>