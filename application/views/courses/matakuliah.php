<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Matakuliah</h1>
  <?= $this->session->flashdata('message'); ?>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <div class="d-sm-flex align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Daftar Matakuliah</h6>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#addMatakuliah">Tambah Matakuliah</a>
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
              <th>ID Semester</th>
              <th>ID Dosen 1</th>
              <th>ID Dosen 2</th>
              <th>Deskripsi</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Kode</th>
              <th>Nama</th>
              <th>Status</th>
              <th>ID Semester</th>
              <th>ID Dosen 1</th>
              <th>ID Dosen 2</th>
              <th>Deskripsi</th>
              <th>Aksi</th>
            </tr>
          </tfoot>
          <tbody>
            <?php foreach ($matakuliah as $data) : ?>
              <tr>
                <td><?= $data['kode_mk']; ?></td>
                <td><?= $data['nama_mk']; ?></td>
                <td><?= $data['status']; ?></td>
                <td><?= $data['id_semester']; ?></td>
                <td><?= $data['id_dosen']; ?></td>
                <td><?= $data['id_dosen2']; ?></td>
                <td><?= $data['deskripsi_mk']; ?></td>
                <td class="text-center" width="100px">
                  <a href="#" class="btn btn-info btn-icon-split" data-toggle="modal" data-target="#edit-<?= $data['id']; ?>">
                    <span class="icon text-white-50">
                      <i class="fas fa-pen"></i>
                    </span>
                  </a>
                  <a href="<?= base_url('matakuliah/delete/') . $data['id']; ?>" class="btn btn-danger btn-icon-split">
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
  <!-- <?= $matakuliah[0]['deskripsi_mk']; ?> -->
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<div class="modal fade" id="addMatakuliah" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newMenuModalLabel">Tambah Matakuliah</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('matakuliah/add'); ?>" method="post">
        <div class="modal-body">
          <div class="form-group">
            <input type="text" class="form-control" id="kode" name="kode" placeholder="Kode Matakuliah">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Matakuliah">
          </div>
          <div class="form-group">
            <select name="status" id="status" class="form-control">
              <option value="wajib">Wajib</option>
              <option value="Pilihan">Pilihan</option>
            </select>
          </div>
          <div class="form-group">
            <select name="semester" id="semester" class="form-control">
              <?php foreach ($semester as $data) : ?>
                <option value="<?= $data['id']; ?>"><?= $data['nama_semester']; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="form-group">
            <select name="dosen" id="dosen" class="form-control">
              <?php foreach ($dosen as $data) : ?>
                <option value="<?= $data['id']; ?>"><?= $data['nama']; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="form-group">
            <select name="dosen2" id="dosen2" class="form-control">
              <?php foreach ($dosen as $data) : ?>
                <option value="<?= $data['id']; ?>"><?= $data['nama']; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="form-group">
            <textarea class="form-control" id="deskripsi" name="deskripsi" placeholder="Deskripsi Matakuliah"></textarea>
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

<?php foreach ($matakuliah as $data) : ?>
  <div class="modal fade" id="edit-<?= $data['id']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="newMenuModalLabel">Edit Matakuliah</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="<?= base_url('matakuliah/edit/') . $data['id']; ?>" method="post">
          <div class="modal-body">
            <div class="form-group">
              <input type="text" class="form-control" id="kode" name="kode" placeholder="Kode Matakuliah" value="<?= $data['kode_mk']; ?>">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Matakuliah" value="<?= $data['nama_mk']; ?>">
            </div>
            <div class="form-group">
              <select name="status" id="status" class="form-control">
                <option value="Wajib" <?= ($data['status'] === 'Wajib') ? "selected" : ""; ?>>Wajib</option>
                <option value="Pilihan" <?= ($data['status'] === 'Pilihan') ? "selected" : ""; ?>>Pilihan</option>
              </select>
            </div>
            <div class="form-group">
              <select name="semester" id="semester" class="form-control">
                <?php foreach ($semester as $s) : ?>
                  <option <?= ($s['id'] === $data['id_semester']) ? "selected" : ""; ?> value="<?= $s['id']; ?>"><?= $s['nama_semester']; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="form-group">
              <select name="dosen" id="dosen" class="form-control">
                <?php foreach ($dosen as $d) : ?>
                  <option <?= ($d['id'] === $data['id_dosen']) ? "selected" : ""; ?> value="<?= $d['id']; ?>"><?= $d['nama']; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="form-group">
              <select name="dosen2" id="dosen2" class="form-control">
                <?php foreach ($dosen as $d) : ?>
                  <option <?= ($d['id'] === $data['id_dosen2']) ? "selected" : ""; ?> value="<?= $d['id']; ?>"><?= $d['nama']; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="form-group">
              <textarea class="form-control" id="deskripsi" name="deskripsi" placeholder="Deskripsi Matakuliah">
                <?= $data['deskripsi_mk']; ?>
              </textarea>
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