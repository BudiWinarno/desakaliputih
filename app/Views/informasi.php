<div class="container">


	<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="text-center mt-3">
                <h2>Informasi Desa Kaliputih</h2>
            </div>
        </div>
    </div>
    
            <?php if(!empty(session()->getFlashdata('berhasil'))){ ?>
                <div class="alert alert-success">
                    <?php echo session()->getFlashdata('berhasil');?>
                </div>
            <?php } ?>
            
            <?php 
                $errors = $validation->getErrors();
                if(!empty($errors))
                {
                    echo $validation->listErrors();
                }
            ?>
    <div class="row">
    	<div class="col-lg-12">
    		<div class="row">
                <table class="table table-bordered">
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                    <?php 
                      $no = 1;
                    foreach($artikel as $row):?>
                <tr>
                <th scope="row"><?= $no++; ?></th>
                    <td><?=$row['judul'];?></td>
                    <td><?php
                        if (!empty($row["gambar"])) {
                            echo '<img src="'.base_url("assets/images/$row[gambar]").'" width="100">';
                        }
                    ?></td>
                    <td><a href="peges/view/<?=$row['id'];?>" class="btn btn-success">Details</a> |
                </tr>
                <?php endforeach;?>
            </table>
    		</div>
    	</div>
    </div>
    </div>
</body>
</html>