<?php 	 
include('function/fjeniskamar.php'); 
$fjeniskamar = new fjeniskamar();   

if(isset($_GET['xaksi']))
{ 
	
  $status=$_GET['yaksi']; 

	if($status=='1') 
	{ 
      $dataku = $fjeniskamar->tampil_data();
      include "./view/vjeniskamar.php";   
	}



  
  if($status=='2') 
  {  
      include "./view/vjeniskamar_add.php";   
  }
  
  
  if($status=='3')   // simpan tambah data jenis barang
      {  
          if (isset($_POST['simpan']))
           {  
                $id_jenis=$_POST['id_jenis']; 
                $jen_kamar=$_POST['jen_kamar'];  

                $result=$fjeniskamar->input_data($id_jenis,$jen_kamar);  
                if($result)
                  {  
                      echo'<div class="alert alert-success">Data Berhasil ditambah</div>';
                   }
                  else
                  {
                    echo'<div class="alert alert-danger">Data gagal ditambah</div>';   
                  }
               echo '<meta http-equiv="refresh"  content="1;url=?aksi=Components&xaksi=Jenis Kamar&yaksi=1">';   
           }
      }
 
   
     if($status=='4') 
      	{ 
                $id_jenis=$_GET['id_jenis'];
                $result=$fjeniskamar->hapus_data($id_jenis);  
                      if($result)
                        {  
                            echo'<div class="alert alert-success">Data Berhasil dihapus</div>';
                        }
                        else
                        {
                          echo'<div class="alert alert-danger">Data gagal dihapus</div>';  
                         }
                          echo '<meta http-equiv="refresh" content="1;url=?aksi=Components&xaksi=Jenis Kamar&yaksi=1">';  
       
      	}
 

        if($status=='5') 
        { 
            $id_jenis=$_GET['id_jenis'];
            $dataku = $fjeniskamar->cari_data($id_jenis);
            include "./view/vjeniskamar_ubah.php";   
        }


     if($status=='6')  // ubah data jenis barang
          {  
              if (isset($_POST['update']))
               {  
                    $id_jenis=$_POST['id_jenis']; 
                    $jen_kamar=$_POST['jen_kamar'];  

                    $result=$fjeniskamar->ubah_data($id_jenis,$jen_kamar);  
                    if($result)
                      {  
                          echo'<div class="alert alert-success">Data Berhasil diubah</div>';
                       }
                      else
                      {
                        echo'<div class="alert alert-danger">Data gagal diubah</div>';   
                      }
                   echo '<meta http-equiv="refresh"  content="1;url=?aksi=Components&xaksi=Jenis Kamar&yaksi=1">';   
               }
          }
 
} 
?>