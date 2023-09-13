
      <div class="m-4">
      <h1 class="text-center">Login Admin</h1>
      
     
          </div>
          <div class="container text-center">
  <div class="row">
    <div class="col">
    </div>
    <div class="col">
    <main class="form-signin">
        <?php if (!empty(session()->getFlashdata('error'))) : ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <?php echo session()->getFlashdata('error'); ?>
            </div>
        <?php endif; ?>
        <form method="post" action="<?= base_url(); ?>/login/process">
            <?= csrf_field(); ?>
            <input  type="text" name="username" id="username" placeholder="Username" class="form-control" required autofocus>
            <br>
            <input  type="password" name="password" id="password" placeholder="Password" class="form-control" required>
            <br>
            <button type="submit" class="w-100 btn btn-lg btn-primary">Login</button>
        </form>
    </main>
    </div>
    <div class="col">
    </div>
  </div>
</div>
         
      </div>
      <div class="tes">
      </div>
     