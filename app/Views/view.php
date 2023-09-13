<div class="container">


	<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class=" mt-3">
                <h2><?php echo $artikel->judul; ?></h2>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
    	<div class="col-lg-12">
    		<div class="row">
                <?php
                        if (!empty($artikel->gambar)) {
                            echo '<img src="'.base_url("assets/images/$artikel->gambar").'" width="30%">';
                        }
                ?>
                <div class="mt-3 mb-3" style="text-align: justify;">
                <?php echo $artikel->isi; ?>
                </div>
    		</div>
    	</div>
    </div>
    </div>
</body>
</html>