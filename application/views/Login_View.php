<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo "Login" .  " - " . SITE_NAME ?></title>
<?php $this->load->view("_partials/header.php") ?>
</head>

<body id="page-top">

<?php $this->load->view("_partials/navbar.php") ?>

<div id="wrapper" style="margin:100px 0 30px 0">

	<div id="content-wrapper">

		<div class="container">

			<div class="row">
			  <div class="col">
			  </div>
			  <div class="col">
			  	<?php $this->load->view("_partials/login_view.php") ?><br><br><br>
			  </div>
			  <div class="col">
			  </div>
			</div>
			
		</div>

	</div>

</div>
    
<?php $this->load->view("_partials/footer.php") ?>

</body>
</html>