<center><h2>Data Berita</h2><center>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
    	<a href="<?php echo SITE_URL . "/Admin" ?>">
     		<button class="btn btn-primary">Kembali</button>
    	</a>
    	<a href="<?php echo base_url('Article/Add'); ?>">
     		<button class="btn btn-primary">Tambah Berita</button>
    	</a>
    </div>
</div>

<div class="container">
<form class = "form-group" action="#">
  <div class="form-group">
    <input type="text" class="form-control" name="search_article" placeholder="Cari Data">
  </div>
  <button type="submit" class="btn btn-primary">Cari</button>
</form>
</div>

<div class="container">
<table align="center" class="table table-striped">
<thead>
<tr>
	<td>ID</td>
	<td>Judul</td>
	<td>Kategori</td>
	<td>Tanggal</td>
	<td>Konten</td>
	<td>Gambar</td>
	<td>Deskripsi Gambar</td>
	<td>Nama Gambar</td>
	<td>Ukuran Gambar</td>
	<td>Tipe Gambar</td>
	<td colspan="3"></td>
</tr>
</thead>
<tbody>
<?php foreach($data as $artikel) {?>
<tr>
	<td><?php echo $artikel['id_artikel']; ?></td>
	<td><?php echo $artikel['judul']; ?></td>
	<td><?php echo $artikel['kategori']; ?></td>
	<td><?php echo $artikel['tanggal']; ?></td>
	<td><?php echo substr($artikel['konten'], 0, 100); ?></td>
	<td><?php echo "<img src='" . base_url("images/content/" . $artikel['nama_gambar']) . "'width='100' height='100'>" ?></td>
	<td><?php echo $artikel['deskripsi_gambar']; ?></td>
	<td><?php echo $artikel['nama_gambar']; ?></td>
	<td><?php echo $artikel['ukuran_gambar']; ?></td>
	<td><?php echo $artikel['tipe_gambar']; ?></td>
	<td><a href="Article/Edit/<?=$artikel['id_artikel']; ?>"/>Edit</td>
	<td><a href="Article/Delete/<?=$artikel['id_artikel'];?>"/>Delete</td>
</tr>
<?php } ?>
</tbody>
</table>
</div>
