<?php require "../../app/core/MVC_model.php";?>

</head>
<body>
    <?php require "$absolute_path/app/view/sidebar.php"; ?>
    <div class="body-container">
    <div class="order-form">
      <table class="table">
        <tr class="table table-primary">
          <td><h5>id pesanan</h5></td>
          <td><h5>nama pemesan</h5></td>
          <td><h5>no hp</h5></td>
          <td><h5>alamat</h5></td>
          <td><h5>nama produk</h5></td>
          <td><h5>jumlah</h5></td>
          <td><h5>jadwal</h5></td>
          <td><h5>status pesanan</h5></td>
          <td><h5>waktu pesan</h5></td>
        </tr>

        <?php 
        while($data = mysqli_fetch_assoc($query)){ ?>

          <form action="" method="POST">
          <tr>
            <td><h5><?= $data['idPesanan'] ?></h5></td>
            <td><h5><?= $data['nama'] ?></h5></td>
            <td><h5><?= $data['noHp'] ?></h5></td>
            <td><h5><?= $data['alamat'] ?></h5></td>
            <td><h5><?= $data['namaProduk'] ?></h5></td>
            <td><h5><?= $data['jumlah'] ?></h5></td>
            <td><h5><?= $data['jadwal'] ?></h5></td>
            <?php
            if($data['statusPesanan'] == "dalam request"){ ?>
              <td>
                <button class="btn btn-outline-success">accept</button>
                <button class="btn btn-outline-danger">decline</button>
              </td>
            <?php
            }
            else if($data['statusPesanan'] == "disetujui" ){ ?>

              <td><h5>disetuijui</h5></td>
            <?php
            }
            ?>
            
            
            <td><h5><?= $data['waktuPesan'] ?></h5></td>
          </tr>
          </form>
        <?php
        }
        ?>
        
      </table>
    </div>
    </div>
    
    
  <?php
require "$absolute_path/app/views/template/footer.php";
?>