<nav>
    <div class="logo">
      <h4>Si Demand</h4>
    </div>

    <button class="btn btn-light identiy">
      <h4 class="text-center"><?= $page->page_name ?></h4><p class="text-center"><?= $page->method ?></p>
    </button>
  </nav>
  <br><br>

<div class="side-bar">
  <!-- <h1 class="text-center text-light">E-Learning</h1> -->
  <div class="link">
    <a href="<?= $header_path ?>/Public/Order" class="btn side-bar-link">Order</a>
    <a href="<?= $header_path ?>/Public/Modal" class="btn side-bar-link">Modal</a>
    <a href="<?= $header_path ?>/Public/Omset" class="btn side-bar-link">Omset</a>
    <a href="<?= $header_path ?>/Public/Pengeluaran" class="btn side-bar-link">Pengeluaran</a>
    <a href="<?= $header_path ?>/Public/LabaRugi" class="btn side-bar-link">Laba Rugi</a>
  </div>
</div>
<div class="side-bar-toggle">
  <h1 class="text-light">></h1>
</div>