<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Semester</h1>
  <?= $this->session->flashdata('message'); ?>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <div class="d-sm-flex align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Daftar Semester</h6>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#addSemester">Tambah Semester</a>
      </div>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Nama</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Nama</th>
              <th>Aksi</th>
            </tr>
          </tfoot>
          <tbody>
            <?php foreach ($semester as $data) : ?>
              <tr>
                <td><?= $data['nama_semester']; ?></td>
                <td class="text-center" width="100px">
                  <a href="#" class="btn btn-info btn-icon-split" data-toggle="modal" data-target="#edit-<?= $data['id']; ?>">
                    <span class="icon text-white-50">
                      <i class="fas fa-info-circle"></i>
                    </span>
                  </a>
                  <a href="<?= base_url('semester/delete/') . $data['id']; ?>" class="btn btn-danger btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-trash"></i>
                    </span>
                  </a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<div class="modal fade" id="addSemester" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newMenuModalLabel">Tambah Semester</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('semester/add'); ?>" method="post">
        <div class="modal-body">
          <div class="form-group">
            <select name="nama" id="nama" class="form-control">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Add</button>
        </div>
      </form>
    </div>
  </div>
</div>

<?php foreach ($semester as $data) : ?>
  <div class="modal fade" id="edit-<?= $data['id']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="newMenuModalLabel">Edit Semester</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="<?= base_url('semester/edit/') . $data['id']; ?>" method="post">
          <div class="modal-body">
            <div class="form-group">
              <select name="nama" id="nama" class="form-control">
                <option value="1" <?= ($data['nama_semester'] === '1') ? "selected" : ""; ?>>1</option>
                <option value="2" <?= ($data['nama_semester'] === '2') ? "selected" : ""; ?>>2</option>
                <option value="3" <?= ($data['nama_semester'] === '3') ? "selected" : ""; ?>>3</option>
                <option value="4" <?= ($data['nama_semester'] === '4') ? "selected" : ""; ?>>4</option>
                <option value="5" <?= ($data['nama_semester'] === '5') ? "selected" : ""; ?>>5</option>
                <option value="6" <?= ($data['nama_semester'] === '6') ? "selected" : ""; ?>>6</option>
                <option value="7" <?= ($data['nama_semester'] === '7') ? "selected" : ""; ?>>7</option>
                <option value="8" <?= ($data['nama_semester'] === '8') ? "selected" : ""; ?>>8</option>
              </select>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Update</button>
          </div>
        </form>
      </div>
    </div>
  </div>
<?php endforeach; ?>