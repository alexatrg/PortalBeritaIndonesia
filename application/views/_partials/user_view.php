<center><h2>Data User</h2><center>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
    	<a href="<?php echo SITE_URL . "/Admin" ?>">
     		<button class="btn btn-primary">Kembali</button>
    	</a>
    	<a href="<?php echo base_url('User/Add'); ?>">
     		<button class="btn btn-primary">Tambah User</button>
    	</a>
    </div>
</div>

<div class="container">
<form class = "form-group" action="#">
  <div class="form-group">
    <input type="text" class="form-control" name="search_user" placeholder="Cari Data">
  </div>
  <button type="submit" class="btn btn-primary">Cari</button>
</form>
</div>

<div class="container">
<table align="center" class="table table-striped">
<thead>
<tr>
	<td>ID</td>
	<td>Username</td>
	<td>Email</td>
	<td>Password</td>
	<td>Nama</td>
	<td>Alamat</td>
	<td>Status</td>
	<td>Gambar</td>
	<td>Deskripsi Gambar</td>
	<td>Nama Gambar</td>
	<td>Ukuran Gambar</td>
	<td>Tipe Gambar</td>
	<td colspan="3"></td>
</tr>
</thead>
<tbody>
<?php foreach($data as $user) {?>
<tr>
	<td><?php echo $user['id_user']; ?></td>
	<td><?php echo $user['username']; ?></td>
	<td><?php echo $user['email']; ?></td>
	<td><?php echo $user['password']; ?></td>
	<td><?php echo $user['nama']; ?></td>
	<td><?php echo $user['alamat']; ?></td>
	<td><?php echo $user['status']; ?></td>
	<td><?php echo "<img src='" . base_url("images/user/" . $user['nama_gambar']) . "'width='100' height='100'>" ?></td>
	<td><?php echo $user['deskripsi_gambar']; ?></td>
	<td><?php echo $user['nama_gambar']; ?></td>
	<td><?php echo $user['ukuran_gambar']; ?></td>
	<td><?php echo $user['tipe_gambar']; ?></td>
	<td><a href="User/Edit/<?=$user['id_user']; ?>"/>Edit</td>
	<td><a href="User/Delete/<?=$user['id_user'];?>"/>Delete</td>
</tr>
<?php } ?>
</tbody>
</table>
</div>
