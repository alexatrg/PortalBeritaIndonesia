<!DOCTYPE html>
<html lang="en">
<head>
<?php $this->load->view("_partials/header.php") ?>
</head>

<body id="page-top">

<?php $this->load->view("_partials/navbar.php") ?>

<div id="wrapper">

	<div id="content-wrapper">

		<div class="container">

			<div class="row">
			  <div class="col">
			  	<br><br><br>
			  	<?php $this->load->view("berita/berita" . $id . ".php") ?>
			  </div>
			  <div class="col">
			  	<br><br><br>
			  	<?php $this->load->view("_partials/aside.php") ?>
			  </div>
			</div>

		</div>

	</div>

</div>
    
<?php $this->load->view("_partials/footer.php") ?>

</body>
</html>