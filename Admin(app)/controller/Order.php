<?php
$query = mysqli_query($conn,"SELECT * FROM pemesanan order by idPesanan DESC" );


if(isset($_POST['terima'])){
  $query = mysqli_query($conn,"UPDATE pemesanan set statusPesanan = 'disetujui' WHERE idPesanan = $_POST[idPesanan]");
  header("Refresh:0");
}
?>