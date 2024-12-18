<div class="content">
<div class="container">
<!-- Custom fonts for this template-->
  <link href="<?= base_url('assets/');?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/');?>css/sb-admin-2.min.css" rel="stylesheet">
    <div class="row mt-3">
        <div class="col-md-6">

        <div class="card">
            <div class="card-header">
                Form Tambah Riwayat Kerja
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control" id="nama">
                        <small class="form-text text-danger"><?=form_error('nama');?></small>
                    </div>
                    <div class="form-group">
                        <label for="departemen">Departemen</label>
                        <select class="form-control" id="departemen" name="departemen">
                        <option value="BAPKK">BAPKK</option>
                        <option value="BKU">BKU</option>
                        <option value="LPPM">LPPM</option>
                        <option value="LPMPP">LPMPP</option>
                        <option value="UPA TIK">UPA TIK</option>
                        <option value="UPA PERPSUTAKAAN">UPA PERPUSTAKAAN</option>
                        <option value="UPA BAHASA">UPA BAHASA</option>
                        <option value="UPA PKK">UPA PKK</option>
                        <option value="UPA LABTERPADU">UPA LABTERPADU</option>
                        <option value="TU FTTK">TU FTTK</option>
                        <option value="TU FEBM">TU FEBM</option>
                        <option value="TU FISIP">TU FISIP</option>
                        <option value="TU FIKP">TU FIKP</option>
                        <option value="TU FKIP">TU FKIP</option>
                        <option value="TU FK">TU FK</option>
                        </select>
                        <small class="form-text text-danger"><?=form_error('departemen');?></small>
                    </div>
                    <div class="form-group">
                        <label for="riwayat_pendidikan">Riwayat Pendidikan</label>
                        <select class="form-control" id="riwayat_pendidikan" name="riwayat_pendidikan">
                        <option value="S1 Ekonomi">S1 Ekonomi</option>
                        <option value="S1 Teknik Informatika">S1 Teknik Informatika</option>
                        <option value="S2 Sistem Informasi">S2 Sistem Informasi</option>
                        <option value="S1 Ilmu Perpustakaan">S1 Ilmu Perpustakaan</option>
                        <option value="S2 Linguistik  ">S2 Linguistik  </option>
                        <option value="S1 Psikologi">S1 Psikologi</option>
                        <option value="S2 Teknologi Pendidikan">S2 Teknologi Pendidikan</option>
                        <option value="S1 Teknik Elektro">S1 Teknik Elektro</option>
                        <option value="S2 Teknologi Instrumentasi">S2 Teknologi Instrumentasi</option>
                        <option value="S2 S1 Ilmu Politik">S2 S1 Ilmu Politik</option>
                        <option value="S2 Administrasi Publik">S2 Administrasi Publik</option>
                        <option value="S2 Manajemen">S2 Manajemen</option>
                    </select>
                    <small class="form-text text-danger"><?=form_error('riwayat_pendidikan');?></small>
                    </div>
                    <div class="form-group">
                        <label for="riwayat_pengalaman">Riwayat Pengalaman</label>
                        <input type="text" name="riwayat_pengalaman" class="form-control" id="riwayat_pengalaman">
                        <small class="form-text text-danger"><?=form_error('riwayat_pengalaman');?></small>
                    </div>
                    <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                </form>
            </div>
        </div>
<!-- Bootstrap Scripts -->
<script src="<?= base_url('assets/');?>https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="<?= base_url('assets/');?>https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="<?= base_url('assets/');?>https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/');?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/');?>js/sb-admin-2.min.js"></script>

        </div>
    </div>
</div>