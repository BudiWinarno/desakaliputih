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
      <h1 class="text-center">DAFTAR PESAN MASUK</h1>
      </div>
<div class="mr-2 ml-2">
<div class="card-body">
            <?php if (!empty(session()->getFlashdata('message'))) : ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?php echo session()->getFlashdata('message'); ?>
                </div>
            <?php endif; ?>
            
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Lengakap</th>
      <th scope="col">Alamat Email</th>
      <th scope="col">Nomor Tlp/WA</th>
      <th scope="col">Pesan</th>
      <th scope="col">Action</th>
    </tr>
    <?php $no=1+(10*($page-1));
		        	foreach($kontak as $row):?>
		        <tr>
                <td><?=$no;?></td>
                <td><?= $row->nama_lengkap; ?></td>
      <td><?= $row->alamat_email; ?></td>
      <td><?= $row->no_tlp; ?></td>
      <td><?= $row->tulis_pesan; ?></td>
    <td>
    <a title="Delete" href="<?= base_url("kontak/delete/$row->id") ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ?')">Delete</a>
    </td>
		        </tr>
		        <?php $no++; endforeach;?>
		    </table>
		    <?= $pager->Links() ?>
  </tbody>
</table>
</div>
      