<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SEARCHING DATA DENGAN CODEIGNITER 4</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
	<link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet"> 
</head>
<div class="container">
            <h5>Hai ! <?= session()->get('name'); ?></h5>
            
        </div>
<div class="mb-5">
      <h1 class="text-center">DAFTAR KELUARGA </h1>
      </div>
<div class="mr-5 ml-5">
<div class="card-body">
            <?php if (!empty(session()->getFlashdata('message'))) : ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?php echo session()->getFlashdata('message'); ?>
                </div>
            <?php endif; ?>
            <form method="GET" action="" class="form-group">
    <div class="row">
    	<div class="col-lg-12">
			<div class="input-group mb-3">
			  <input type="text" class="form-control" name="cari" placeholder="Mencari Data Berdasarkan Nama">
			  <div class="input-group-append">
			    <button class="btn btn-outline-secondary" type="Submit">CARI DATA</button>
			  </div>
			</div>
            
		</div>
    	<div class="col-lg-12">
    		<?php echo $jumlah; ?>
    	</div>
    </div>
    </form>

            
 
<a href="<?= base_url('/keluargacreate'); ?>" class="btn btn-success mb-4">Tambah</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Kepala Keluarga</th>
      <th scope="col">Dusun</th>
      <th scope="col">Jumlah Keluarga</th>
      <th scope="col">Rt/Rw</th>
      <th scope="col">Kartu Keluarga</th>
      <th scope="col">Kecamatan</th>
      <th scope="col">Kabupaten</th>
      <th scope="col">Provinsi</th>
      <th scope="col">Action</th>
    </tr>
   
  </thead>
  <tbody>
  <?php $no=1+(10*($page-1));
		        	foreach($keluarga as $row):?>
		        <tr>
                <td><?=$no;?></td>
		            <td><?= $row->kepala_keluarga; ?></td>
      <td><?= $row->dusun; ?></td>
      <td><?= $row->jumlah_keluarga; ?></td>
      <td><?= $row->rt_rw; ?></td>
      <td><?= $row->kartu_keluarga; ?></td>
      <td><?= $row->kecamatan; ?></td>
      <td><?= $row->kabupaten; ?></td>
      <td><?= $row->provinsi; ?></td>
                    <td>
                            <a title="Edit" href="<?= base_url("keluarga/edit/$row->id_keluarga"); ?>" class="btn btn-warning">Edit</a>
                            <a title="Delete" href="<?= base_url("keluarga/delete/$row->id_keluarga") ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ?')">Delete</a>
                            
                        </td>
		        </tr>
		        <?php $no++; endforeach;?>
		    </table>
		    <?= $pager->Links() ?>
  </tbody>
</table>
</div>
      