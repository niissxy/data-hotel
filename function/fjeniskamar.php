<?php 

include('database.php'); 

class fjeniskamar extends  database {   

	function tampil_data()
	{
		$sql = mysqli_query($this->koneksi,"select * from tb_jeniskamar");
		$number = mysqli_num_rows($sql);  
		if ($number==0) {  echo "Data tidak ada..."; exit; } 
		while($row = mysqli_fetch_array($sql,MYSQLI_ASSOC)){
			$hasil[] = $row;
		} 
		return $hasil;
	}



 function input_data($id_jenis,$jen_kamar){   
 $result = mysqli_query($this->koneksi,"insert into tb_jeniskamar (id_jenis,jen_kamar) values ('$id_jenis','$jen_kamar')"); 
        if($result){
            return true;
        }else{
            return false;
        } 
   	   $this->koneksi->close(); 
	}	



 function hapus_data($id_jenis){
         $result = mysqli_query($this->koneksi,"delete from tb_jeniskamar where id_jenis='$id_jenis'");
        if($result){
            return true;
        }else{
            return false;
        } 
 	}


public function cari_data ($id_jenis){ 
$sql = mysqli_query($this->koneksi,"select * from tb_jeniskamar where id_jenis='$id_jenis'"); 
$number = mysqli_num_rows($sql);
if ($number==0) {  echo "Data tidak ditemukan..."; exit; } 
while ($d = mysqli_fetch_array($sql,MYSQLI_ASSOC))
{
	$result[] = $d;
} 
return $result;
}





 function ubah_data($id_jenis,$jen_kamar){   

 	 
 $result = mysqli_query($this->koneksi,"update  tb_jeniskamar
 	set  jen_kamar='$jen_kamar'  where id_jenis='$id_jenis'"); 
        if($result){
            return true;
        }else{
            return false;
        } 
   	   $this->koneksi->close(); 
}	

}
?>