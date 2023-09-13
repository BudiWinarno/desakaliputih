<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SEARCHING DATA DENGAN CODEIGNITER 4</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
	<link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet"> 
</head>
<body >
	<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="text-center mt-3">
                <h2>Data Kepala Keluarga Desa Kaliputih </h2>
            </div>
        </div>
    </div>
    <div class="container">

    <hr>
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
    	
    </div>
    </form>

    <div class="row">
        <div class="col-lg-12 margin-tb">
			<table class="table table-bordered">
		        <tr>
		            <th>No</th>
		            <th>Nama Kepala Keluarga</th>
		            <th>Dusun</th>
                    <th>Jumlah Keluarga</th>
                    <th>RT/RW</th>
                    <th>No Kartu Keluarga</th>
                    <th>Kecamatan</th>
                    <th>Kabupaten</th>
                    <th>Provinsi</th>
		        </tr>
		        	<?php $no=1+(10*($page-1));
		        	foreach($keluarga as $row):?>
		        <tr>
                <td><?=$no;?></td>
		            <td><?=$row['kepala_keluarga'];?></td>
		            <td><?=$row['dusun'];?></td>
                    <td><?=$row['jumlah_keluarga'];?></td>
                    <td><?=$row['rt_rw'];?></td>
                    <td><?=$row['kartu_keluarga'];?></td>
                    <td><?=$row['kecamatan'];?></td>
                    <td><?=$row['kabupaten'];?></td>
                    <td><?=$row['provinsi'];?></td>
		        </tr>
		        <?php $no++; endforeach;?>
		    </table>
		    <?= $pager->Links() ?>
		</div>
	</div>
    </div>
</body>
</html>