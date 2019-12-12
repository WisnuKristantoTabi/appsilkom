<div class="container-fluid">
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
  <?= $this->session->flashdata('message'); ?>
  <form class="user" method="post" action="<?= base_url('user/beasiswa'); ?>">
    <div class="form-group">
      Nama <input type="text" class="form-control" id="nama" name="nama" value="<?= set_value('nama'); ?>">
      <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
    </div>
    <div class="form-group">
      NIM<input type="text" class="form-control" id="nim" name="nim" value="<?= set_value('nim'); ?>">
      <?= form_error('nim', '<small class="text-danger pl-3">', '</small>'); ?>
    </div>
    <div class="form-group">
      Prodi<select name="prodi" id="prodi" class="form-control">
        <option value="">Pilih Data</option>
        <?php foreach ($prodi as $p) : ?>
          <option value="<?= $p['id']; ?>"><?= $p['nama']; ?></option>
        <?php endforeach; ?>
      </select>
      <?= form_error('prodi', '<small class="text-danger pl-3">', '</small>'); ?>
    </div>
    <div class="form-group">
      Jenis Kelamin<select name="kelamin" id="kelamin" class="form-control">
        <option value="">Pilih Data</option>
        <?php foreach ($kelamin as $k) : ?>
          <option value="<?= $k['id']; ?>"><?= $k['nama']; ?></option>
        <?php endforeach; ?>
      </select>
      <?= form_error('kelamin', '<small class="text-danger pl-3">', '</small>'); ?>
    </div>
    <div class="form-group">
      No.Handphone<input type="number" class="form-control" id="no" name="no" value="<?= set_value('no'); ?>">
      <?= form_error('no', '<small class="text-danger pl-3">', '</small>'); ?>
    </div>
    <div class="form-group">
      Email<input type="text" class="form-control" id="email" name="email" value="<?= set_value('email'); ?>">
      <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
    </div>
    <div class="form-group">
      Alamat<input type="text" class="form-control" id="alamat" name="alamat" value="<?= set_value('alamat'); ?>">
      <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
    </div>
    <div class="form-group">
      Tanggal Masuk<input type="date" class="form-control" id="masuk" name="masuk" value="<?= set_value('masuk'); ?>">
      <?= form_error('masuk', '<small class="text-danger pl-3">', '</small>'); ?>
    </div>
    <div class="form-group">
      Tanggal Lulus<input type="date" class="form-control" id="keluar" name="keluar" value="<?= set_value('keluar'); ?>">
      <?= form_error('keluar', '<small class="text-danger pl-3">', '</small>'); ?>
    </div>
    <div class="form-group">
      Status<select name="status" id="status" class="form-control">
        <option value="">Pilih Data</option>
        <?php foreach ($status as $s) : ?>
          <option value="<?= $s['id']; ?>"><?= $s['nama']; ?></option>
        <?php endforeach; ?>
      </select>
      <?= form_error('status', '<small class="text-danger pl-3">', '</small>'); ?>
    </div>
    <div>
      <button type="submit" class="btn btn-primary btn-user btn-block">
        Daftar Beasiswa
      </button>
      <button type="submit" class="btn btn-secondary btn-user btn-block" formaction="<?= base_url('user'); ?>">
        Batal
      </button>
    </div>
  </form>
</div>