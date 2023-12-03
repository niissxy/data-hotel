<div class="col-12">
              <div class="card recent-sales overflow-auto">
                 <div class="card-body">
				 
				 <table width="100%" border="0" cellpadding="0" cellspacing="0">
					  <tr>
						<td><h5 class="card-title">Data Jenis Kamar</span></h5></td>
						<td> <div align="right"><a href="./index.php?aksi=Components&xaksi=Jenis Kamar&yaksi=2" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-print"></span>Tambah</a></div> 
            </td> 
					  </tr>
				   </table>
                    <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Id Jenis </th>
                        <th scope="col">Jenis Kamar </th>
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
										<td><?php  echo $row['id_jenis']; ?></a></td>
										<td><?php  echo $row['jen_kamar']; ?></td> 
                    <td> <a href="./index.php?aksi=Components&xaksi=Jenis Kamar&yaksi=4&id_jenis=<?php echo  $row['id_jenis'];?>" class="text-primary"><span id="btnConfirm"  class="bi bi-trash"></span></a> 
                     <td><a href="./index.php?aksi=Components&xaksi=Jenis Kamar&yaksi=5&id_jenis=<?php echo  $row['id_jenis'];?>" class="text-primary"><span id="btnConfirm"  class="bi bi-eyedropper"></span></a>
                     </td>  
									  </tr>  
                 <?php } ?>  

                       </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Recent Sales -->