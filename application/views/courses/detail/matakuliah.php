<!-- Begin Page Content -->
<div class="container-fluid">

  <div class="card shadow m-4">
    <!-- Card Header - Dropdown -->
    <div class="card-header py-3">
      <div class="d-sm-flex align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Matakuliah</h6>
        <a href="<?= base_url('daftar_matakuliah/print/') . $detail['id_mk']; ?>" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm">Cetak</a>
      </div>
      <h6 class="m-0 font-weight-bold text-primary">Nama Matakuliah : <?= $detail['nama'] ?></h6>
      <h6 class="m-0 font-weight-bold text-primary">Kode Matakuliah : <?= $detail['kode_mk'] ?></h6>
      <h6 class="m-0 font-weight-bold text-primary">Semester : <?= $detail['semester'] ?></h6>
      <h6 class="m-0 font-weight-bold text-primary">Pengajar 1 : <?= $detail['pengajar'] ?></h6>
      <h6 class="m-0 font-weight-bold text-primary">Pengajar 2 : <?= $detail['pengajar2'] ?></h6>
      <h6 class="m-0 font-weight-bold text-primary">Status : <?= $detail['status'] ?></h6>
      <h6 class="m-0 font-weight-bold text-primary">Deskripsi :<?= $detail['deskripsi_mk'] ?></h6>

      <!-- <a href="<?= base_url('daftar_matakuliah'); ?>" class="btn btn-primary">Back</a> -->

    </div>
  </div>
</div>
