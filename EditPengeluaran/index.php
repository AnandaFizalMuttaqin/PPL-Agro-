<?php require "../../app/core/MVC_model.php";?>
</head>
<body>
  <?php require "$absolute_path/app/view/sidebar.php"; ?>
  <div class="body-container">
    <form action="" method="POST" style="margin:auto; width: 400px;">
    <br><br>
      <h1 class="text-center">Edit Data Modal</h1>
      <div class="tambah-modal">
        <?= $message ?>
        <input type="hidden" class="form-control" name="idPengeluaran" value="<?= $data['idPengeluaran'] ?>">
        <input type="text" class="form-control" placeholder="id pengeluaran :  <?= $data['idPengeluaran'] ?>"" disabled><br>
        <!-- <input type="hidden" name="tanggal" value="<?= strval(date("d/m/Y")); ?>"> -->
        <input type="text" class="form-control" value="<?= $data['jumlah'] ?>" name="jumlahPengeluaran"><br>
        <input type="text" class="form-control" value="<?= $data['keterangan'] ?>" name="keterangan"><br>
        
        <button class="btn btn-success container" name="edit_pengeluaran" type="submit">Edit Data</button>

      </div>
    </form>
  </div>
  

<?php
require "$absolute_path/app/views/template/footer.php";
?>