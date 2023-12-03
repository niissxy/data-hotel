<div class="col-12">
              <div class="card recent-sales overflow-auto">
                 <div class="card-body"> 
              <h5 class="card-title">Ubah data Jenis Kamar </h5>

              <!-- Horizontal Form -->
             <form class="form-horizontal" action="./index.php?aksi=Components&xaksi=Jenis Kamar&yaksi=6" method="post" enctype="multipart/form-data">
                <?php   
                  foreach($dataku as $row)
                  {
                  ?> 
                <div class="row mb-3">
                  <label for="kode_jurusan" class="col-sm-2 col-form-label">Id Jenis </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="<?php  echo $row['id_jenis']; ?>" name="id_jenis" id="id_jenis">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="nama_jur" class="col-sm-2 col-form-label">Jenis Kamar </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="<?php  echo $row['jen_kamar']; ?>"  id="jen_kamar" name="jen_kamar">
                  </div>
                </div>  
                 <?php } ?>

                <div class="text-center">
                  <button type="submit" id="update" name="update" class="btn btn-primary">Update</button>
                  <button type="reset" class="btn btn-secondary">Clear</button>
                </div>
              </form> 

            </div>
          </div>       
        </div>