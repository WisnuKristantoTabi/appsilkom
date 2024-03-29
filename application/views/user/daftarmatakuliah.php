<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Matakuliah</h1>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <div class="d-sm-flex align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Daftar Matakuliah</h6>
        <?php if ($user['name'] != null) { ?>
            <a href="<?= base_url('admin'); ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Ke Halaman Dashboard</a>
        <?php  } ?>
      </div>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Kode</th>
              <th>Nama</th>
              <th>Status</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Kode</th>
              <th>Nama</th>
              <th>Status</th>
            </tr>
          </tfoot>
          <tbody>
            <?php foreach ($matakuliah as $data) : ?>
              <tr>
                <td><?= $data['kode_mk']; ?></td>
                <?php $urlsekarang = current_url();
                     $urlbaselist = base_url ('daftar_matakuliah');
                ?>
               <?php  if ($urlsekarang == $urlbaselist) { ?>
                   <td><a href="<?= base_url('daftar_matakuliah/detail/') . $data['id']; ?>"><?= $data['nama_mk']; ?></a></td>
               <?php }else{?>
                   <td><a href="<?= base_url('welcome/detail/') . $data['id']; ?>"><?= $data['nama_mk']; ?></a></td>
               <?php } ?>

                <td><?= $data['status']; ?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- <?= $matakuliah[0]['deskripsi_mk']; ?> -->
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
