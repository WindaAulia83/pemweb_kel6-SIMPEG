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


    <div class="flash-data" data-flashdata="<?=$this->session->flashdata('flash');?>"></div>
    <!-- Flash Message -->
    <?php if ($this->session->flashdata('flash')) : ?>
    <!--<div class="flash-data" data-flashdata=""></div>-->
        <!-- Flash alert success -->
        <!--<div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
            Data Pegawai <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div> -->
    <?php endif; ?>

    <!-- Tombol Tambah Data -->
    <div class="row mt-4">
        <div class="col-md-8">
            <a href="<?= base_url(); ?>pegawai/tambah" class="btn btn-primary">Tambah Data Pegawai</a>
        </div>
    </div>

    <!-- Form Pencarian -->
    <div class="row mt-3">
        <div class="col-md-6">
            <form action="<?=base_url('pegawai/index');?>" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" name="keyword" placeholder="Cari Data Pegawai..."  autocomplete="off">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Daftar Pegawai -->
    <div class="row mt-4">
        <div class="col-md-10">
            <h3>Daftar Pegawai</h3>
            <?php if (empty($pegawai)) : ?>
                <div class="alert alert-danger" role="alert">
                    Data Pegawai tidak ditemukan!
                </div>
            <?php endif; ?>

            <!-- Tabel Data Pegawai -->
            <table class="table table-hover mt-3">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col" class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($pegawai as $p) : ?>
                        <tr>
                            <th scope="row"><?= $no++; ?></th>
                            <td><?= $p['nama']; ?></td>
                            <td class="text-center">
                                <a href="<?= base_url(); ?>pegawai/detail/<?= $p['id_pribadi']; ?>" class="btn btn-sm btn-primary">Detail</a>
                                <a href="<?= base_url(); ?>pegawai/ubah/<?= $p['id_pribadi']; ?>" class="btn btn-sm btn-success">Ubah</a>
                                <a href="<?= base_url(); ?>pegawai/hapus/<?= $p['id_pribadi']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?');">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
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

