<div class="col-12">
              <div class="card recent-sales overflow-auto">
                 <div class="card-body">
				 
				 <table width="100%" border="0" cellpadding="0" cellspacing="0">
					  <tr>
						<td><h5 class="card-title">Data Reservasi</span></h5></td>
						<td> <div align="right"><a href="./index.php?aksi=Components&xaksi=Reservasi&yaksi=2" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-print"></span>Tambah</a></div> 
            </td> 
					  </tr>
				   </table>
                    <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">No Kamar </th>
                        <th scope="col">Nama Pelanggan </th>
                        <th scope="col">Telepon </th>
                        <th scope="col">Tanggal Masuk </th>
                        <th scope="col">Tanggal Keluar </th>
                        <th scope="col">Id Jenis </th>
                        <th scope="col">Delete</th>
                       <th scope="col">Edit</th>
                      </tr>
                    </thead>
                    <tbody> 
             <?php  
                  $no=1;
                  foreach($dataku as $row)
                  {
                  ?> 
									  <tr>
										<td><?php  echo $no++; ?> </td>
										<td><?php  echo $row['no_kamar']; ?></a></td>
										<td><?php  echo $row['nm_pelanggan']; ?></td>
                    <td><?php  echo $row['telepon']; ?></td> 
                    <td><?php  echo $row['tgl_masuk']; ?></td>
                    <td><?php  echo $row['tgl_keluar']; ?></td>
                    <td><?php  echo $row['id_jenis']; ?></td>
                    <td> <a href="./index.php?aksi=Components&xaksi=Reservasi&yaksi=4&no_kamar=<?php echo  $row['no_kamar'];?>" class="text-primary"><span id="btnConfirm"  class="bi bi-trash"></span></a> 
                     <td><a href="./index.php?aksi=Components&xaksi=Reservasi&yaksi=5&no_kamar=<?php echo  $row['no_kamar'];?>" class="text-primary"><span id="btnConfirm"  class="bi bi-eyedropper"></span></a>
                    </td> 

									  </tr>  
                 <?php } ?>  

                       </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Recent Sales -->