<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>FishBox -- Admin</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/admin/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet"
        type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/admin/css/sb-admin-2.min.css'); ?>" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/admin/button/css/ionicons.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/admin/button/css/style.css'); ?>">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-code"></i>
                </div>
                <div class="sidebar-brand-text mx-3">FishBox -- AdminPage</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Heading -->
            <div class="sidebar-heading">
                Administrator
            </div>

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('admin/dashboard'); ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                User
            </div>
            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('admin/profile'); ?>">
                    <i class="fas fa-fw fa-user"></i>
                    <span>My Profile</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Heading -->
            <div class="sidebar-heading">
                Administasi
            </div>
            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('listadmin'); ?>">
                    <i class="fas fa-fw fa-store"></i>
                    <span>Data Produsen</span></a>
                <a class="nav-link" href="<?= base_url('listadmin/nota'); ?>">
                    <i class="fas fa-fw fa-store"></i>
                    <span>Nota Barang</span></a>
                <a class="nav-link" href="<?= base_url('listadmin/databarang'); ?>">
                    <i class="fas fa-fw fa-store"></i>
                    <span>Data Barang</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Heading -->
            <div class="sidebar-heading">
                Barang Masuk & Keluar
            </div>
            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('listadmin/barangmasuk'); ?>">
                    <i class="fas fa-fw fa-store"></i>
                    <span>Barang Masuk</span></a>
                <a class="nav-link" href="<?= base_url('listadmin/barangkeluar'); ?>">
                    <i class="fas fa-fw fa-store"></i>
                    <span>Barang Keluar</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('login/logout'); ?>">
                    <i class="fas fa-fw fa-sign-out-alt"></i>
                    <span>LogOut</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->



        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $user['name']; ?></span>
                                <img class="img-profile rounded-circle"
                                    src="<?= base_url('assets/admin/img/default.jpg'); ?>">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    My Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?=  base_url('login/logout'); ?>" data-toggle="modal"
                                    data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->



                <!-- Konten -->
                <div class="container-fluid">
                    <h3>Edit Data</h3>
                    <?php foreach($produsen as $pds) : ?>
                    <form method="post" action="<?php echo base_url().'listadmin/listadmin/update' ?>">
                        <div class="for-group">
                            <label>Nama Produsen</label>
                            <input type="hidden" name="id" id="id" class="form-control" value="<?php echo $pds->id ?>">
                            <input type="text" name="nama" id="nama" class="form-control"
                                value="<?php echo $pds->nama ?>">
                        </div>
                        <div class="for-group">
                            <label>Alamat</label>
                            <input type="text" name="alamat" id="alamat" class="form-control"
                                value="<?php echo $pds->alamat ?>">
                        </div>
                        <div class="for-group">
                            <label>Email</label>
                            <input type="text" name="email" id="email" class="form-control"
                                value="<?php echo $pds->email ?>">
                        </div>
                        <div class="for-group">
                            <label>Logo</label>
                            <input type="text" name="kategori" id="kategori" class="form-control"
                                value="<?php echo $pds->logo ?>" readonly>
                        </div>
                        <div class="for-group">
                            <label>Status</label>
                            <input type="text" name="status" id="status" class="form-control"
                                value="<?php echo $pds->status ?>" readonly>
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm mt-3">Simpan Data</button>
                    </form>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Konten -->


    <!-- Footer -->

    <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?= base_url('login/logout'); ?>">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets/admin/vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?= base_url('assets/admin/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>
    <script src="<?= base_url('assets/admin/js/sb-admin-2.min.js'); ?>"></script>
    <script src="<?= base_url('assets/admin/button/js/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('assets/admin/button/js/popper.js'); ?>"></script>
    <script src="<?= base_url('assets/admin/js/bootstrap.min.js'); ?>"></script>
    <script src="<?= base_url('assets/admin/button/js/main.js'); ?>"></script>

</body>

</html>