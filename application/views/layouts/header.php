<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url ('assets/img/apple-icon.png')?>">
  <link rel="icon" type="image/png" href="<?php echo base_url ('assets/img/favicon.png')?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>Template</title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css"> -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  
  <!-- CSS Files -->
  <link href="<?php echo base_url ('assets/css/material-dashboard.css?v=2.1.0')?>" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?php echo base_url ('assets/demo/demo.css" rel="stylesheet')?>" />
  <!-- Custom Additions -->
  <script src="<?php echo base_url ('assets/js/core/jquery.min.js')?>"></script>
    <link href="<?php echo base_url ('assets/bootstrap/bootstrap.min.css')?>" rel="stylesheet" />
    <!-- <link href="<?php //echo base_url ('assets/bootstrap/bootstrap.bundle.min.css')?>" rel="stylesheet" /> -->
    <link href="<?php echo base_url ('assets/css/login.css')?>" rel="stylesheet" />
</head>
<body class="dark-edition">
	<div class="wrapper ">
        <!-- sidebar -->
        <?php $this->load->view('layouts/sidebar');?>
        <!-- End Sidebar -->
		<div class="main-panel">
			<!-- Navbar -->
			<?php $this->load->view('layouts/navbar');?>
			<!-- End Navbar -->