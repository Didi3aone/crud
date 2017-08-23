<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Crud Mahasiswa</title>
	<link rel="stylesheet" href="<?php echo base_url()?>asset/bootstrap/css/bootstrap.min.css">
</head>
<body>
<div style="height: 10px;"></div>
	<div class="container">
	<a href="<?php echo site_url() ?>crud/add_data" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i>Tambah</a>
	<div style="height: 10px;"></div>
		<table class="table table-striped">
			<tr>
				<th>No</th>
				<th>NPM</th>
				<th>Nama</th>
				<th>Email</th>
				<th>Alamat</th>
				<th>Action</th>
			</tr>
			<tr>
			<?php 
			$no=1;
			    if(!empty($mahasiswa)):
			    foreach($mahasiswa as $record):
	    	?>
	            <td><?php echo $no++ ?></td>
				<td><?php echo $record->npm ?></td>
				<td><?php echo $record->nama ?></td>
				<td><?php echo $record->email ?></td>
				<td><?php echo $record->alamat?></td>
				<td><a href="<" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i>Delete</a>
				<a href="" class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i>Edit</a></td>
			</tr>
			<?php endforeach;?>
			<?php endif?>
		</table>
	</div>

<script src="<?php echo base_url() ?>asset/bootstrap/js/jquery.min.js"></script>
<script src="<?php echo base_url() ?>asset/bootstrap/js/bootstrap.min.js"></script>	
</body>
</html>