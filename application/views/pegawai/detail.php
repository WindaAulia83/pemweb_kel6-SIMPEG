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
      Detail Data Pegawai
    </div>
    <div class="card-body">
      <h5 class="card-title"><?= $pegawai['nama'];?> </h5>
      <h6 class="card-subtitle mb-2 text-muted"><?= $pegawai['nip'];?></h6>
      <p class="card-text"><?= $pegawai['alamat'];?></p>
      <p class="card-text"><?= $pegawai['tanggal_lahir'];?></p>
      <p class="card-text"><?= $pegawai['jabatan'];?></p>
      <p class="card-text"><?= $pegawai['departemen'];?></p>
      <p class="card-text"><?= $pegawai['tahun_bergabung'];?></p>
      <a href="<?= base_url();?>pegawai" class="btn btn-primary">Kembali</a>
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
