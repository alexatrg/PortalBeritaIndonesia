<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
    <p class="h2 mb-3">Tambah User</p>
      <a href="<?php echo SITE_URL . "/User" ?>">
        <button class="btn btn-primary">Kembali</button>
      </a>
    <label class="text-danger" for="message"><?php echo (isset($message))? $message : ""; ?></label>
    </div>
</div>

<form class="form-horizontal" method="post" enctype="multipart/form-data" action="<?php echo base_url('User/Insert'); ?>">
  <div class="form-group">
    <label class="control-label col-sm-2" for="username">Username</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="username" placeholder="Masukkan Username">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" name="email" placeholder="Masukkan Email">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="password">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="password" placeholder="Masukkan Password">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="nama">Nama</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama">
    </div>
  </div>
 <div class="form-group">
    <label class="control-label col-sm-2" for="alamat">Alamat</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="alamat" placeholder="Masukkan Alamat">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="status">Status</label>
    <div class="col-sm-10">
    <select class="form-control" name="status">
      <option value = "user">User</option>
      <option value = "admin">Admin</option>
    </select>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="deskripsi_gambar">Deskripsi Gambar</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="deskripsi_gambar" placeholder="Masukkan Deskripsi Gambar">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="input_gambar">Pilih Gambar</label>
    <div class="col-sm-10">
      <input type="file" class="form-control" name="input_gambar">
    </div>
  </div>

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>

</form>