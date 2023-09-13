<div class="container">


	<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="text-center mt-3">
                <h2>FORM INPUT BERITA </h2>
            </div>
        </div>
    </div>
    <hr>
    <?=form_open_multipart(base_url('blog/simpan'));?>
    <div class="row">
    	<div class="col-lg-12">
    		<div class="row">
    			<div class="col-md-12">
    				<label>Judul</label>
    				<div class="form-group">
                   		 <input type="text" name="judul" class="form-control"> 
                	</div>	
    			</div>
    			<div class="col-md-12">
    				<label>ISI BLOG</label>
    				<div class="form-group">
                   		 <textarea name="isi" id="editor1"></textarea>
                            <script>
                                CKEDITOR.replace( 'editor1' );
                            </script>
                	</div>	
    			</div>
                <div class="col-md-12">
                    <label>Photo</label>
                    <div class="form-group">
                         <input type="file" name="file_upload" class="form-control"> 
                    </div>  
                </div>
    			<div class="col-md-12">
    				<div class="form-group">
                   		  <button class="btn btn-primary">Simpan</button> 
                	</div>	
    			</div>
    		</div>
    	</div>
    </div>
    <?= form_close(); ?>
	</div>
</body>
</html>