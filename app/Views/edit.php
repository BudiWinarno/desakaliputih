

<div class="m-4">
      <h1 class="text-center">Update Keluarga</h1>
      </div>
      <div class="container m-5">
         <div class="card">
        <div class="card-header">
            <h3>Update Data Keluarga</h3>
        </div>
        <div class="card-body">
            <?php if (!empty(session()->getFlashdata('error'))) : ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <h4>Periksa Entrian Form</h4>
                    </hr />
                    <?php echo session()->getFlashdata('error'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php endif; ?>
            <form method="post" action="<?= base_url('keluarga/update/' . $keluarga->id_keluarga) ?>">
                <?= csrf_field(); ?>

                <div class="form-group">
                    <label for="kepala_keluarga">Nama Kepala Keluarga</label>
                    <input type="text" class="form-control" id="kepala_keluarga" name="kepala_keluarga" value="<?= $keluarga->kepala_keluarga; ?>">
                </div>

                <div class="form-group">
                    <label for="dusun">Dusun</label>
                    <input type="text" class="form-control" id="dusun" name="dusun" value="<?= $keluarga->dusun; ?>" />
                </div>

                <div class="form-group">
                    <label for="jumlah_keluarga">Jumlah Keluarga</label>
                    <input type="text" class="form-control" id="jumlah_keluarga" name="jumlah_keluarga" value="<?= $keluarga->jumlah_keluarga; ?>" />
                </div>

                <div class="form-group">
                    <label for="rt_rw">RT/RW</label>
                    <input type="text" class="form-control" id="rt_rw" name="rt_rw" value="<?= $keluarga->rt_rw; ?>" />
                </div>

                <div class="form-group">
                    <label for="kartu_keluarga">Nomor Kartu Keluarga</label>
                    <input type="text" class="form-control" id="kartu_keluarga" name="kartu_keluarga" value="<?= $keluarga->kartu_keluarga; ?>" />
                </div>

                <div class="form-group">
                    <label for="kecamatan">Kecamatan</label>
                    <input type="text" class="form-control" id="kecamatan" name="kecamatan" value="<?= $keluarga->kecamatan; ?>" />
                </div>

                <div class="form-group">
                    <label for="kabupaten">Kabupaten</label>
                    <input type="text" class="form-control" id="kabupaten" name="kabupaten" value="<?= $keluarga->kabupaten; ?>" />
                </div>
               
                <div class="form-group">
                    <label for="provinsi">Provinsi</label>
                    <input type="text" class="form-control" id="provinsi" name="provinsi" value="<?= $keluarga->provinsi; ?>" />
                </div>
               
                <div class="form-group mt-4" >
                    <input type="submit" value="Update" class="btn btn-warning" />
                </div>
 
</form>
          </div>
         
        </div>

     
      </div>
     