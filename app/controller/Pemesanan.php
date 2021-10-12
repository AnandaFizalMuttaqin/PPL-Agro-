<?php


if(isset($_POST['pesan'])){
  // var_dump($_POST);
  if($_POST['nama'] != "" || $_POST['noHp'] != "" || $_POST['alamat'] != "" || $_POST['jadwal'] != "" ){

      // echo "validate";
      $namaProduk = "";
      $jumlah_pesanan = 0;
      if(isset($_POST['jumlahPisang'])){
        $namaProduk = $namaProduk." Pisang";
        $jumlah_pesanan += (int)$_POST['jumlahPisang'];
      }
      if(isset($_POST['jumlahAlpukat'])){
        $namaProduk = $namaProduk." Alpukat";
        $jumlah_pesanan += (int)$_POST['jumlahAlpukat'];
      }
      if(isset($_POST['jumlahJeruk'])){
        $namaProduk = $namaProduk." jeruk";
        $jumlah_pesanan += (int)$_POST['jumlahJeruk'];
      }
      if(isset($_POST['jumlahSemangkat'])){
        $namaProduk = $namaProduk." Semangkat";
        $jumlah_pesanan += (int)$_POST['jumlahSemangat'];
      }
      if(isset($_POST['jumlahApel'])){
        $namaProduk = $namaProduk." Apel";
        $jumlah_pesanan += (int)$_POST['jumlahApel'];
      }
      if(isset($_POST['jumlahMelon'])){
        $namaProduk = $namaProduk." Melon";
        $jumlah_pesanan += (int)$_POST['jumlahMelon'];
      }
      // var_dump( $namaProduk );
      $waktuPesan = strval(date("d/m/Y"));
      // echo "0,'$_POST[nama]','$_POST[no_hp]','$_POST[alamat]','$namaProduk',$jumlah_pesanan, 'null', 'dalam request', '$waktuPesan' ";
      $query = mysqli_query($conn,"INSERT INTO pemesanan VALUES(0,'$_POST[nama]','$_POST[no_hp]','$_POST[alamat]','$namaProduk',$jumlah_pesanan, '$_POST[jadwal]', 'dalam request', '$waktuPesan' )");

      echo '
      <div class="alert alert-success" role="alert">
        Pesanan Berhasil dikirim!
      </div>
      ';
    
    
  }
  else{
    echo "not validate 1";
  }
}

?>