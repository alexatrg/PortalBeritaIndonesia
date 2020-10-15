<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
    <p class="h2 mb-3">Tambah Berita</p>
      <a href="<?php echo SITE_URL . "/Article" ?>">
        <button class="btn btn-primary">Kembali</button>
      </a>
    <label class="text-danger" for="message"><?php echo (isset($message))? $message : ""; ?></label>
    </div>
</div>

<form class="form-horizontal" method="post" enctype="multipart/form-data" action="<?php echo base_url('Article/Insert'); ?>">
  <div class="form-group">
    <label class="control-label col-sm-2" for="judul">Judul Berita</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="judul" placeholder="Masukkan Judul Berita">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="kategori">Kategori Berita</label>
    <div class="col-sm-10">
    <select class="form-control" name="kategori">
      <option value = "Berita Viral">Berita Viral</option>
      <option value = "Berita Harian">Berita Harian</option>
      <option value = "Berita Regional">Berita Regional</option>
      <option value = "Berita Khusus">Berita Khusus</option>
      <option value = "Berita Utama">Berita Utama</option>
    </select>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="tanggal">Tanggal Berita</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" name="tanggal" placeholder="Masukkan Tanggal Berita">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="deskripsi_gambar">Deskripsi Gambar</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="deskripsi_gambar" placeholder="Masukkan Deskripsi Gambar Berita">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="input_gambar">Pilih Gambar</label>
    <div class="col-sm-10">
      <input type="file" class="form-control" name="input_gambar">
    </div>
  </div>
  <div class="form-group">
  	<label class="control-label col-sm-2" for="konten">Konten Berita</label>
  	<div class="col-sm-10">
      	<textarea class="form-control" name="konten" rows="15" placeholder="Masukkan Konten Berita"></textarea>
    </div>
  </div>

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>

</form>