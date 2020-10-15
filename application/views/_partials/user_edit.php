<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
    <p class="h2 mb-3">Ubah User</p>
      <a href="<?php echo SITE_URL . "/UserDashboard" ?>">
        <button class="btn btn-primary">Kembali</button>
      </a>
    <label class="text-danger" for="message"><?php echo (isset($message))? $message : ""; ?></label>
    </div>  
</div>

<form class="form-horizontal" method="post" enctype="multipart/form-data" action="<?php echo base_url('User/Update'); ?>">
  <div class="form-group">
    <label class="control-label col-sm-2" for="username">Username</label>
    <div class="col-sm-10">
      <input type="hidden" name="id_user" value="<?php echo $id_user; ?>">
      <input type="text" class="form-control" name="username" value="<?php echo $username; ?>">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" name="email" value="<?php echo $email; ?>">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="password">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="password" value="<?php echo $password; ?>">
    </div>
  </div>
 <div class="form-group">
    <label class="control-label col-sm-2" for="nama">Nama</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nama" value="<?php echo $nama; ?>">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="alamat">Alamat</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="alamat" value="<?php echo $alamat; ?>">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="kategori">Status</label>
    <div class="col-sm-10">
    <select class="form-control" name="status">
      <option value = "<?php echo $status; ?>" selected hidden><?php echo $status; ?></option>

      <?php

      if ($this->session->userdata("status") == "user")
      {
        echo "<option value = 'user'>User</option>";
      }

      else if ($this->session->userdata("status") == "admin")
      {
        echo "<option value = 'user'>User</option>
              <option value = 'admin'>Admin</option>";
      }

      ?>
    </select>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="deskripsi_gambar">Gambar</label>
    <div class="col-sm-10">
      <?php echo "<img src='" . base_url("images/user/" . $nama_gambar) . "'width='350' height='350'>" ?>
      <?php echo "<br>File Name : ". $nama_gambar ?>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="deskripsi_gambar">Deskripsi Gambar</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="deskripsi_gambar" value="<?php echo $username . "_image"; ?>">
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