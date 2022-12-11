<?php $this->load->view('templates/header') ?>
<form class="container my-5 mx-auto py-5" action="<?= base_url('pengaturan/lokasi/tambahlokasi'); ?>" method="post" >
  <div class="mb-3">
    <label for="nama_lokasi" class="form-label">Nama Lokasi</label>
    <input type="text" class="form-control" id="nama_lokasi" name="nama_lokasi" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="jarak" class="form-label">Jarak</label>
    <input type="number" class="form-control" id="jarak" name="jarak">
  </div>
  <div class="mb-3">
      <label class="form-label" for="harga">Harga</label>
      <input type="number" class="form-control" id="harga" name="harga">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php $this->load->view('templates/footer') ?>
