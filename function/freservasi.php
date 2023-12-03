<?php 

include('database.php'); 

class freservasi extends  database {   

	function tampil_data()
	{
		$sql = mysqli_query($this->koneksi,"select * from tb_reservasi");
		$number = mysqli_num_rows($sql);  
		if ($number==0) {  echo "Data tidak ada..."; exit; } 
		while($row = mysqli_fetch_array($sql,MYSQLI_ASSOC)){
			$hasil[] = $row;
		} 
		return $hasil;
	}



 function input_data($no_kamar,$nm_pelanggan,$telepon,$tgl_masuk,$tgl_keluar,$id_jenis){   
 $result = mysqli_query($this->koneksi,"insert into tb_reservasi (no_kamar,nm_pelanggan,telepon,tgl_masuk,tgl_keluar,id_jenis) values ('$no_kamar','$nm_pelanggan','$telepon','$tgl_masuk','$tgl_keluar','$id_jenis')"); 
        if($result){
            return true;
        }else{
            return false;
        } 
   	   $this->koneksi->close(); 
	}	



 function hapus_data($no_kamar){
         $result = mysqli_query($this->koneksi,"delete from tb_reservasi where no_kamar='$no_kamar'");
        if($result){
            return true;
        }else{
            return false;
        } 
 	}


public function cari_data ($no_kamar){ 
$sql = mysqli_query($this->koneksi,"select * from tb_reservasi where no_kamar='$no_kamar'"); 
$number = mysqli_num_rows($sql);
if ($number==0) {  echo "Data tidak ditemukan..."; exit; } 
while ($d = mysqli_fetch_array($sql,MYSQLI_ASSOC))
{
	$result[] = $d;
} 
return $result;
}





 function ubah_data($no_kamar,$nm_pelanggan,$telepon,$tgl_masuk,$tgl_keluar,$id_jenis){   

 	 
 $result = mysqli_query($this->koneksi,"update  tb_reservasi
 	set  nm_pelanggan='$nm_pelanggan'  where no_kamar='$no_kamar'"); 
        if($result){
            return true;
        }else{
            return false;
        } 
   	   $this->koneksi->close(); 
}	

}
?>