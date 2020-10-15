<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo "Halaman Tambah Berita" .  " - " . SITE_NAME ?></title>
<?php $this->load->view("_partials/header.php") ?>
</head>

<body id="page-top">

<?php $this->load->view("_partials/navbar.php") ?>

<div id="wrapper" style="margin:100px 0 30px 0">

	<div id="content-wrapper">

		<div class="container">

			<div class="row">
			  <div class="col">
			  	<?php $this->load->view("_partials/article_add.php") ?>
			  </div>
			</div>
			
		</div>

	</div>

</div>
    
<?php $this->load->view("_partials/footer.php") ?>

</body>
</html>