<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo SITE_NAME ?></title>

<?php $this->load->view("_partials/header.php") ?>

</head>

<body id="page-top">

<?php $this->load->view("_partials/navbar.php") ?>

<div id="wrapper">

	<div id="content-wrapper">

		<div class="container">

			<div class="row mt-5">
			  <div class="col">
				<?php $this->load->view("_partials/carousel.php") ?>
			  </div>
			</div>

		</div>

		<div class="container">

			<div class="row">
			  <div class="col">
			  	<?php $this->load->view("_partials/beritautama.php") ?>
			  </div>
			</div>

		</div>

	</div>

</div>
    
<?php $this->load->view("_partials/footer.php") ?>

</body>
</html>