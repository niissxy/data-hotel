<?php 	 
include('function/freservasi.php'); 
$freservasi = new freservasi();   

if(isset($_GET['xaksi']))
{ 
	
  $status=$_GET['yaksi']; 

	if($status=='1') 
	{ 
      $dataku = $freservasi->tampil_data();
      include "./view/vreservasi.php";   
	}



  
  if($status=='2') 
  {  
      include "./view/vreservasi_add.php";   
  }
  
  
  if($status=='3')   // simpan tambah data jenis barang
      {  
          if (isset($_POST['simpan']))
           {  
                $no_kamar=$_POST['no_kamar']; 
                $nm_pelanggan=$_POST['nm_pelanggan']; 
                $telepon=$_POST['telepon'];
                $tgl_masuk=$_POST['tgl_masuk'];
                $tgl_keluar=$_POST['tgl_keluar'];
                $id_jenis=$_POST['id_jenis'];     

                $result=$freservasi->input_data($no_kamar,$nm_pelanggan,$telepon,$tgl_masuk,$tgl_keluar,$id_jenis);  
                if($result)
                  {  
                      echo'<div class="alert alert-success">Data Berhasil ditambah</div>';
                   }
                  else
                  {
                    echo'<div class="alert alert-danger">Data gagal ditambah</div>';   
                  }
               echo '<meta http-equiv="refresh"  content="1;url=?aksi=Components&xaksi=Reservasi&yaksi=1">';   
           }
      }
 
   
     if($status=='4') 
      	{ 
                $no_kamar=$_GET['no_kamar'];
                $result=$freservasi->hapus_data($no_kamar);  
                      if($result)
                        {  
                            echo'<div class="alert alert-success">Data Berhasil dihapus</div>';
                        }
                        else
                        {
                          echo'<div class="alert alert-danger">Data gagal dihapus</div>';  
                         }
                          echo '<meta http-equiv="refresh" content="1;url=?aksi=Components&xaksi=Reservasi&yaksi=1">';  
       
      	}
 

        if($status=='5') 
        { 
            $no_kamar=$_GET['no_kamar'];
            $dataku = $freservasi->cari_data($no_kamar);
            include "./view/vreservasi_ubah.php";   
        }


     if($status=='6')  // ubah data jenis barang
          {  
              if (isset($_POST['update']))
               {  
                $no_kamar=$_POST['no_kamar']; 
                $nm_pelanggan=$_POST['nm_pelanggan']; 
                $telepon=$_POST['telepon'];
                $tgl_masuk=$_POST['tgl_masuk'];
                $tgl_keluar=$_POST['tgl_keluar'];
                $id_jenis=$_POST['id_jenis'];     
 

                    $result=$freservasi->ubah_data($no_kamar,$nm_pelanggan,$telepon,$tgl_masuk,$tgl_keluar,$id_jenis);  
                    if($result)
                      {  
                          echo'<div class="alert alert-success">Data Berhasil diubah</div>';
                       }
                      else
                      {
                        echo'<div class="alert alert-danger">Data gagal diubah</div>';   
                      }
                   echo '<meta http-equiv="refresh"  content="1;url=?aksi=Components&xaksi=Reservasi&yaksi=1">';   
               }
          }

} 
?>