<!-- Main Content -->
<div class="content">
        <div class="container">
        <!-- Custom fonts for this template-->
        <link href="<?= base_url('assets/');?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
            <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">

            <!-- Custom styles for this template-->
            <link href="<?= base_url('assets/');?>css/sb-admin-2.min.css" rel="stylesheet">

       
        </head>
            <h3 class="mb-4">Dashboard</h3>
            <div class="row">
                <div class="col-md-3">
                    <div class="card bg-info text-white">
                        <div class="card-body">
                            <h5 class="card-title">Jumlah Pegawai</h5>
                            <p class="card-text"><?= $total_pegawai; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-success text-white">
                        <div class="card-body">
                            <h5 class="card-title">Jumlah Departemen</h5>
                            <p class="card-text">11</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-danger text-white">
                        <div class="card-body">
                            <h5 class="card-title">Status Pegawai</h5>
                            <p class="card-text">2</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-warning text-white">
                        <div class="card-body">
                            <h5 class="card-title">Pengguna Sistem</h5>
                            <p class="card-text">2</p>
                        </div>
                    </div>
                </div>
            </div>
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

    </body>
</html>