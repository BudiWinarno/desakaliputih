
<div class="m-5">
      <h1 class="text-center">DAFTAR KELUARGA </h1>
      </div>
<div class="container">

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
    </tr>
    <?php
                $no = 1;
                foreach ($keluarga as $row) {
                ?>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?= $no++; ?></th>
      <td><?= $row->kepala_keluarga; ?></td>
      <td><?= $row->dusun; ?></td>
      <td><?= $row->jumlah_keluarga; ?></td>
      <td><?= $row->rt_rw; ?></td>
      <td><?= $row->kartu_keluarga; ?></td>
      <td><?= $row->kecamatan; ?></td>
      <td><?= $row->kabupaten; ?></td>
      <td><?= $row->provinsi; ?></td>
    </tr>
    <?php
                }
                ?>
  </tbody>
</table>
</div>
      