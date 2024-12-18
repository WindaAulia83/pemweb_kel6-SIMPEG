<div class="content">
<div class="container">
    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/');?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/');?>css/sb-admin-2.min.css" rel="stylesheet">
    
    <?php if ($this->session->userdata('role_id') != 1): ?>
    <?php redirect('auth'); ?>
    <?php endif; ?>

    <div class="row mt-3">
        <div class="col-md-6">

        <div class="card">
            <div class="card-header">
                Form Ubah Data Pegawai
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <input type="hidden" name="id_pribadi" value="<?= $pegawai['id_pribadi'];?>">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control" id="nama" value="<?= $pegawai['nama'];?>">
                        <small class="form-text text-danger"><?=form_error('nama');?></small>
                    </div>
                    <div class="form-group">
                        <label for="nip">NIP</label>
                        <input type="number" name="nip" class="form-control" id="nip" value="<?= $pegawai['nip'];?>">
                        <small class="form-text text-danger"><?=form_error('nip');?></small>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" class="form-control" id="alamat"value="<?= $pegawai['alamat'];?>">
                        <small class="form-text text-danger"><?=form_error('alamat');?></small>
                    </div>
                    <div class="form-group">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir"value="<?= $pegawai['tanggal_lahir'];?>">
                        <small class="form-text text-danger"><?=form_error('tanggal_lahir');?></small>
                    </div>
                    <div class="form-group">
                        <label for="jabatan">Jabatan</label>
                        <select class="form-control" id="jabatan" name="jabatan">
                            <?php foreach ($jabatan as $j) : ?>
                                <?php if ($j == $pegawai['jabatan']) : ?>
                                <option value="<?= $j;?>"selected><?= $j;?></option>
                            <?php else : ?>
                                <option value="<?= $j;?>"><?= $j;?></option>
                            <?php endif; ?>    
                        <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="departemen">Departemen</label>
                        <select class="form-control" id="departemen" name="departemen">
                            <?php foreach ($departemen as $d) : ?>
                                <?php if ($d == $pegawai['departemen']) : ?>
                                <option value="<?= $d;?>"selected><?= $d;?></option>
                            <?php else : ?>
                                <option value="<?= $d;?>"><?= $d;?></option>
                            <?php endif; ?>    
                        <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tahun_bergabung">Tahun Bergabung</label>
                        <input type="date" name="tahun_bergabung" class="form-control" id="tahun_bergabung" value="<?= $pegawai['tahun_bergabung'];?>">
                        <small class="form-text text-danger"><?=form_error('tahun_bergabung');?></small>
                    </div>
                    <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                </form>
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