<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo "Halaman Admin" .  " - " . SITE_NAME ?></title>
<?php $this->load->view("_partials/header.php") ?>
</head>

<body id="page-top">

<?php $this->load->view("_partials/navbar.php") ?>

<div id="wrapper" style="margin:100px 0 30px 0">

	<div id="content-wrapper">

		<div class="container">

			<div class="row">
			  <div class="col" style="margin: 0 0 250px 0">
			  	<?php $this->load->view("_partials/admin.php") ?>
			  </div>
			</div>
			
		</div>

	</div>

</div>
    
<?php $this->load->view("_partials/footer.php") ?>

</body>
</html>