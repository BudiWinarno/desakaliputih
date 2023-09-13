

      <div class="m-4">
      <h1 class="text-center">INPUT DATA KELUARGA</h1>
      
      </div>
      <div class="container m-5">
        <div class="row">
          <div class="col">
          <div class="card-body">
            <?php if (!empty(session()->getFlashdata('error'))) : ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <h4>Periksa Entrian Form</h4>
                    </hr />
                    <?php echo session()->getFlashdata('error'); ?>
                   
                </div>
            <?php endif; ?>
            <form method="post" action="<?= base_url('keluarga/store') ?>">
                <?= csrf_field(); ?>
                <div class="form-group">
                    <label for="kepala_keluarga">Nama Kepala Keluarga</label>
                    <input type="text" class="form-control" id="kepala_keluarga" name="kepala_keluarga" value="<?= old('kepala_keluarga'); ?>">
                </div>
                <div class="form-group">
                    <label for="dusun">Dusun</label>
                    <input type="text" class="form-control" id="dusun" name="dusun" value="<?= old('dusun'); ?>">
                </div>
                <div class="form-group">
                    <label for="jumlah_keluarga">Jumlah Keluarga</label>
                    <input type="text" class="form-control" id="jumlah_keluarga" name="jumlah_keluarga" value="<?= old('jumlah_keluarga'); ?>">
                </div>
                <div class="form-group">
                    <label for="rt_rw">RT/RW</label>
                    <input type="text" class="form-control" id="rt_rw" name="rt_rw" value="<?= old('rt_rw'); ?>">
                </div>
                <div class="form-group">
                    <label for="kartu_keluarga">Nomor Kartu Keluarga</label>
                    <input type="text" class="form-control" id="kartu_keluarga" name="kartu_keluarga" value="<?= old('kartu_keluarga'); ?>">
                </div>
                <div class="form-group">
                    <label for="kecamatan">Kecamatan</label>
                    <input type="text" class="form-control" id="kecamatan" name="kecamatan" value="<?= old('kecamatan'); ?>">
                </div>
                <div class="form-group">
                    <label for="kabupaten">Kabupaten</label>
                    <input type="text" class="form-control" id="kabupaten" name="kabupaten" value="<?= old('kabupaten'); ?>">
                </div>
                <div class="form-group">
                    <label for="provinsi">Provinsi</label>
                    <input type="text" class="form-control" id="provinsi" name="provinsi" value="<?= old('provinsi'); ?>">
                </div>
                <div class="form-group mt-4">
                    <input type="submit" value="Simpan" class="btn btn-success" />
                </div>
 
</form>
          </div>
         
        </div>

     
      </div>
    