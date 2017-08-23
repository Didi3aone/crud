<!DOCTYPE html>   
<html>   
<head>   
    <title>   
        TAMBAH Data MAHASISWA   
    </title>   
    <link rel="stylesheet" href="<?php echo base_url()?>asset/bootstrap/css/bootstrap.min.css">
</head>   
<body>   
<div style="height: 30px;"></div>
<div class="col-md-6">
    <?php echo form_open('crud/add_data'); ?>   
    <form>
        <div class="form-group">
            <label for="exampleInputEmail1">NPM</label>
            <input type="text" name="npm" class="form-control" id="exampleInputEmail1" placeholder="Email">
        </div>

         <div class="form-group">
            <label for="exampleInputEmail1">Nama</label>
            <input type="text" name="nama" class="form-control" id="exampleInputEmail1" placeholder="Email">
        </div>

         <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="text" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Alamat</label>
            <input type="text" name="alamat" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
      <button type="submit" class="btn btn-primary">Submit</button>
      <a href="<?php echo site_url('crud') ?>" class="btn btn-danger"><i class="glyphicon glyphicon-arrow-left"></i>Cancel</a>
  </form>
  </div>
  <?php echo form_close(); ?>   
  <script src="<?php echo base_url() ?>asset/bootstrap/js/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>asset/bootstrap/js/bootstrap.min.js"></script>
</body>   
</html>   