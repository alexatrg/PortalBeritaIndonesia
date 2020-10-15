<!DOCTYPE html>
<html lang="en">
<head>
<?php $this->load->view("_partials/header.php") ?>
</head>

<body id="page-top">

<?php $this->load->view("_partials/navbar.php") ?>

<div id="wrapper" style="margin:100px 0 30px 0">

	<div id="content-wrapper">

		<div class="container">

			<div class="row text-center">
			  <div class="col-md-12">
			  	<?php $this->load->view("_partials/contact_view.php") ?>
			  </div>
			</div>

		</div>

	</div>

</div>
    
<?php $this->load->view("_partials/footer.php") ?>

</body>
</html>