<h1>Selamat Datang, <?php echo $this->session->userdata("nama"); ?></h1>
<br>

<div class="form-group">
	<a href="<?php echo base_URL('User/Edit/') . $this->session->userdata("id_user"); ?>">
 		<button type="submit" class="btn btn-primary">Edit Profile</button>
	</a>
	<a href="<?php echo base_url('UserDashboard/Logout'); ?>">
 		<button type="submit" class="btn btn-primary">Logout</button>
	</a>
</div>