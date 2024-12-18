<!-- Main Content -->
<div class="content">
        <div class="container">
        <!-- Custom fonts for this template-->
        <link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet"  type="text/css">
            <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">

            <!-- Custom styles for this template-->
            <link href="<?= base_url('assets/');?>css/sb-admin-2.min.css" rel="stylesheet">
<div class="container mt-4">
    <h2 class="mb-4"><?= $title; ?></h2>
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h5>Profile Information</h5>
        </div>
        <div class="card-body">
            <p><strong>Name:</strong> <?= $user['name']; ?></p>
            <p><strong>Email:</strong> <?= $user['email']; ?></p>
            <p><strong>Role:</strong> 
                <?= ($user['role_id'] == 1) ? 'Administrator' : 'Pegawai'; ?>
            </p>
            <p><strong>Account Created:</strong> <?= date('d M Y', $user['date_created']); ?></p>
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
