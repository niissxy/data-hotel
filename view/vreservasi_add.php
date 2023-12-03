<div class="col-12">
              <div class="card recent-sales overflow-auto">
                 <div class="card-body"> 
              <h5 class="card-title">Tambah Reservasi </h5>

              <!-- Horizontal Form -->
             <form class="form-horizontal" action="./index.php?aksi=Components&xaksi=Reservasi&yaksi=3" method="post" enctype="multipart/form-data">
                <div class="row mb-3">
                  <label for="kode_jurusan" class="col-sm-2 col-form-label">No Kamar </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="no_kamar" id="no_kamar">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="nama_jur" class="col-sm-2 col-form-label">Nama Pelanggan </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="nm_pelanggan" name="nm_pelanggan">
                  </div>
                </div> 
                <div class="row mb-3">
                  <label for="nama_jur" class="col-sm-2 col-form-label">Telepon </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="telepon" name="telepon">
                  </div>
                </div> 
                <div class="row mb-3">
                  <label for="nama_jur" class="col-sm-2 col-form-label">Tanggal Masuk </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="tgl_masuk" name="tgl_masuk">
                  </div>
                </div>  
                <div class="row mb-3">
                  <label for="nama_jur" class="col-sm-2 col-form-label">Tanggal Keluar </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="tgl_keluar" name="tgl_keluar">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="nama_jur" class="col-sm-2 col-form-label">Id Jenis </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="id_jenis" name="id_jenis">
                  </div>
                </div>  
                 
                <div class="text-center">
                  <button type="submit" id="simpan" name="simpan" class="btn btn-primary">Simpan</button>
                  <button type="reset" class="btn btn-secondary">Clear</button>
                </div>
              </form> 

            </div>
          </div>       
        </div>