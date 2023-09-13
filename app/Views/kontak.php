
      <div class="m-4">
      <h1 class="text-center">Kontak Kami </h1>
      
      </div>
      <div class="container m-5">
       <div class="row">
        <div class="col-6">
        <div class="card-body">
            <?php if (!empty(session()->getFlashdata('message'))) : ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?php echo session()->getFlashdata('message'); ?>
                </div>
            <?php endif; ?>
        </div>
       </div> 
    
        <div class="row">
          <div class="col">
        
          <form method="post" action="<?= base_url('pesan/store') ?>">
                <?= csrf_field(); ?>
                <div class="form-group">
                    <label for="nama_lengkap">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="<?= old('nama_lengkap'); ?>">
                </div>
                <div class="form-group">
                    <label for="alamat_email">Alamat Email</label>
                    <input type="text" class="form-control" id="alamat_email" name="alamat_email" value="<?= old('alamat_email'); ?>">
                </div>
                <div class="form-group">
                    <label for="no_tlp">No Tlp/WA</label>
                    <input type="text" class="form-control" id="no_tlp" name="no_tlp" value="<?= old('no_tlp'); ?>">
                </div>
                <div class="form-group">
                    <label for="tulis_pesan">Tulis Pesan</label>
                    <input type="text" class="form-control" id="tulis_pesan" name="tulis_pesan" value="<?= old('tulis_pesan'); ?>">
                </div>
    
                <div class="form-group mt-4">
                    <input type="submit" value="Kirim Pesan" class="btn btn-success" />
                </div>
 
</form>
          </div>
          <div class="col">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">Kantor Kelurahan</h5>
                  <p class="card-text">Jalan Slento Kec.Singorojo,Kab.Kendal</p>
                </div>
              </div>
              
              <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">No Tlp/WA</h5>
                  <p class="card-text">+6285877755638</p>
                </div>
              </div>
              
              <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">Alamat Email</h5>
                  <p class="card-text">desakaliputih@gmail.com</p>
                </div>
              </div>
          </div>
        </div>

     
      