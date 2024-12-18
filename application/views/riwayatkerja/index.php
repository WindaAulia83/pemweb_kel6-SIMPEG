<div class="content">
<div class="container">
    <h3 class="mt-3">List Riwayat Kerja Pegawai</h3>
<!-- Custom fonts for this template-->
<link href="<?= base_url('assets/');?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link
href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
rel="stylesheet">

 <!-- Tombol Tambah Data -->
    <div class="row mt-4">
        <div class="col-md-8">
            <a href="<?= base_url(); ?>riwayatkerja/tambah" class="btn btn-primary">Tambah Data Riwayat Kerja</a>
        </div>
    </div>

<!-- Custom styles for this template-->
<link href="<?= base_url('assets/');?>css/sb-admin-2.min.css" rel="stylesheet">
<div class="row mt-4">
    <div class="col-md-5">
      <form action="<?= base_url('riwayatkerja');?>" method="post">
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Search Keyword..." name="keyword" autocomplete="off" autofocus>
        <div class="input-group-append">
            <input class="btn btn-primary" type="submit" name="submit">
        </div>
        </div>
      </form>    
    </div>
</div>
 
    <div class="row">
        <div class="col-md">
            <h5>Results : <?= $total_rows;?></h5>
            <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Departemen</th>
                    <th>Riwayat Pendidikan</th>
                    <th>Riwayat Pengalaman</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if(empty($riwayatkerja)) :?>
                <tr>
                    <td colspan="4">
                        <div class="alert alert-danger" role="alert">
                            Data tidak ditemukan
                        </div>
                    </td>
                </tr>
                <?php endif;?>
                <?php foreach ($riwayatkerja as $riwayatkerja) : ?>
                <tr>
                    <th><?= ++$start;?></th>
                    <td><?=$riwayatkerja['nama'];?></td>
                    <td><?=$riwayatkerja['departemen'];?></td>
                    <td><?=$riwayatkerja['riwayat_pendidikan'];?></td>
                    <td><?=$riwayatkerja['riwayat_pengalaman'];?></td>
                    <td>
                    <a href="<?= base_url();?>riwayatkerja/ubah/<?= $riwayatkerja['id_pegawai']; ?>" class="btn btn-sm btn-success">Edit</a>
                    <a href="<?= base_url(); ?>riwayatkerja/hapus/<?= $riwayatkerja['id_pegawai']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?');">Hapus<a>
                    </td>
                </tr>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>

        <?= $this->pagination->create_links();?>

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