<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title; ?></title>

    <!-- FAVICON -->
    <link rel="shortcut icon" href="/assets/img/favicon.png">

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <!-- BOOSTRAP ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">


    <!-- MY CSS -->

    <!-- <link rel="stylesheet" href="/assets/css/pegawai_list.css"> -->

    <!-- Custom fonts for this template-->
    <link href="/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="/assets/css/sb-admin-2.min.css">
    <link rel="stylesheet" href="/assets/css/master.css">
    <link rel="stylesheet" href="/assets/css/dashboard.css">

</head>

<!-- FONT POPPINS -->
<style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,700,900');
</style>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar accordion bg-sidebar" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard">
                <div class="sidebar-brand-icon">
                    <img src="/assets/img/favicon.png" width="50px" alt="">
                </div>
                <div class="sidebar-brand-text mx-2"><img src="/assets/img/caliana-text.png" width="90" alt=""></sup>
                </div>
            </a>


            <!-- Nav Item - Dashboard -->
            <li class="nav-item cont-border mt-5 mb-3">
                <a class="nav-link btnAct <?= ($active == 'dashboard') ? 'actSide' : ''; ?>" href="/dashboard">

                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path class="sidebarIcon" d="M6 18H2C0.9 18 0 17.1 0 16V2C0 0.9 0.9 0 2 0H6C7.1 0 8 0.9 8 2V16C8 17.1 7.1 18 6 18ZM12 18H16C17.1 18 18 17.1 18 16V11C18 9.9 17.1 9 16 9H12C10.9 9 10 9.9 10 11V16C10 17.1 10.9 18 12 18ZM18 5V2C18 0.9 17.1 0 16 0H12C10.9 0 10 0.9 10 2V5C10 6.1 10.9 7 12 7H16C17.1 7 18 6.1 18 5Z" fill="#AAB2BB" />
                    </svg>

                    <span class="side-text">Dashboard</span></a>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item mb-3 cont-border">
                <a class="nav-link btnAct collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">

                    <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17 0H5C4.46957 0 3.96086 0.210714 3.58579 0.585786C3.21071 0.960859 3 1.46957 3 2V14C3 14.5304 3.21071 15.0391 3.58579 15.4142C3.96086 15.7893 4.46957 16 5 16H17C17.5304 16 18.0391 15.7893 18.4142 15.4142C18.7893 15.0391 19 14.5304 19 14V2C19 1.46957 18.7893 0.960859 18.4142 0.585786C18.0391 0.210714 17.5304 0 17 0ZM11 2.5C11.663 2.5 12.2989 2.76339 12.7678 3.23223C13.2366 3.70107 13.5 4.33696 13.5 5C13.5 5.66304 13.2366 6.29893 12.7678 6.76777C12.2989 7.23661 11.663 7.5 11 7.5C10.337 7.5 9.70107 7.23661 9.23223 6.76777C8.76339 6.29893 8.5 5.66304 8.5 5C8.5 4.33696 8.76339 3.70107 9.23223 3.23223C9.70107 2.76339 10.337 2.5 11 2.5ZM16 13H6V12.75C6 10.901 8.254 9 11 9C13.746 9 16 10.901 16 12.75V13Z" fill="#AAB2BB" />
                        <path d="M2 5H0V17C0 18.103 0.897 19 2 19H14V17H2V5Z" fill="#AAB2BB" />
                    </svg>

                    <span class="text-sidebar side-text2">Pegawai</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item <?= ($active === 'pegawai') ? 'active' : ''; ?>" href="/daftar-pegawai">Daftar Pegawai</a>
                        <a class="collapse-item <?= ($active === 'kehadiran') ? 'active' : ''; ?>" href="/daftar-kehadiran">Kehadiran</a>
                        <a class="collapse-item <?= ($active === 'timeoff') ? 'active' : ''; ?>" href="/daftar-time-off">Time Off</a>
                        <a class="collapse-item <?= ($active === 'schedule') ? 'active' : ''; ?>" href="/daftar-schedule">Schedule</a>
                    </div>
                </div>
            </li>

            <!-- MENU PENGAJUAN -->
            <!-- <li class="nav-item mb-3 cont-border">
                <a class="nav-link btnAct" href="#">
                    <svg width="18" height="22" viewBox="0 0 18 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M1 3V19C1 19.5304 1.21071 20.0391 1.58579 20.4142C1.96086 20.7893 2.46957 21 3 21H15C15.5304 21 16.0391 20.7893 16.4142 20.4142C16.7893 20.0391 17 19.5304 17 19V7.342C17 7.07556 16.9467 6.81181 16.8433 6.56624C16.7399 6.32068 16.5885 6.09824 16.398 5.912L11.958 1.57C11.5844 1.20466 11.0826 1.00007 10.56 1H3C2.46957 1 1.96086 1.21071 1.58579 1.58579C1.21071 1.96086 1 2.46957 1 3ZM6 12H12H6ZM6 16H9H6Z"
                            fill="white" />
                        <path
                            d="M6 12H12M6 16H9M1 3V19C1 19.5304 1.21071 20.0391 1.58579 20.4142C1.96086 20.7893 2.46957 21 3 21H15C15.5304 21 16.0391 20.7893 16.4142 20.4142C16.7893 20.0391 17 19.5304 17 19V7.342C17 7.07556 16.9467 6.81181 16.8433 6.56624C16.7399 6.32068 16.5885 6.09824 16.398 5.912L11.958 1.57C11.5844 1.20466 11.0826 1.00007 10.56 1H3C2.46957 1 1.96086 1.21071 1.58579 1.58579C1.21071 1.96086 1 2.46957 1 3V3Z"
                            stroke="#AAB2BB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M11 1V5C11 5.53043 11.2107 6.03914 11.5858 6.41421C11.9609 6.78929 12.4696 7 13 7H17"
                            fill="#AAB2BB" />
                        <path d="M11 1V5C11 5.53043 11.2107 6.03914 11.5858 6.41421C11.9609 6.78929 12.4696 7 13 7H17"
                            stroke="#AAB2BB" stroke-width="2" stroke-linejoin="round" />
                    </svg>

                    <span class="side-text">Pengajuan</span></a>
            </li> -->


            <li class="nav-item cont-border" style="padding-bottom: 100px;">
                <a class="nav-link btnAct" href="#">
                    <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.50365 7.27699C8.83329 7.27699 8.20553 7.53629 7.73022 8.01017C7.25716 8.48405 6.99485 9.10993 6.99485 9.77828C6.99485 10.4466 7.25716 11.0725 7.73022 11.5464C8.20553 12.018 8.83329 12.2796 9.50365 12.2796C10.174 12.2796 10.8018 12.018 11.2771 11.5464C11.7501 11.0725 12.0124 10.4466 12.0124 9.77828C12.0124 9.10993 11.7501 8.48405 11.2771 8.01017C11.0449 7.77693 10.7686 7.59201 10.4642 7.46615C10.1597 7.34028 9.83322 7.27599 9.50365 7.27699ZM18.7474 12.5411L17.2812 11.2916C17.3507 10.8669 17.3865 10.4332 17.3865 10.0018C17.3865 9.5704 17.3507 9.13452 17.2812 8.71205L18.7474 7.46252C18.8582 7.36798 18.9375 7.24207 18.9747 7.10152C19.012 6.96097 19.0054 6.81245 18.9559 6.6757L18.9357 6.61758C18.5322 5.49254 17.9276 4.4497 17.1511 3.53958L17.1108 3.49264C17.0165 3.38211 16.8908 3.30266 16.7503 3.26475C16.6098 3.22684 16.4611 3.23226 16.3238 3.28029L14.5033 3.92629C13.8307 3.37641 13.0819 2.94276 12.2703 2.641L11.9183 0.743235C11.8917 0.60027 11.8222 0.468746 11.7188 0.366136C11.6155 0.263526 11.4833 0.194687 11.3398 0.168765L11.2793 0.157588C10.1135 -0.0525293 8.88485 -0.0525293 7.71901 0.157588L7.65848 0.168765C7.51498 0.194687 7.3828 0.263526 7.27948 0.366136C7.17616 0.468746 7.1066 0.60027 7.08004 0.743235L6.72581 2.64994C5.92189 2.95411 5.17298 3.3867 4.50847 3.93076L2.67451 3.28029C2.53722 3.23188 2.38841 3.22626 2.24784 3.2642C2.10728 3.30213 1.98162 3.3818 1.88757 3.49264L1.84721 3.53958C1.07213 4.45067 0.467642 5.49325 0.0625767 6.61758L0.0423987 6.6757C-0.0584914 6.95511 0.0244627 7.26805 0.250905 7.46252L1.73511 8.72546C1.66561 9.1457 1.63198 9.57487 1.63198 9.99958C1.63198 10.4288 1.66561 10.8579 1.73511 11.2737L0.255389 12.5366C0.144624 12.6312 0.0653488 12.7571 0.0281036 12.8976C-0.00914159 13.0382 -0.00259167 13.1867 0.0468826 13.3235L0.0670607 13.3816C0.472863 14.5059 1.07148 15.5453 1.85169 16.4596L1.89205 16.5065C1.98634 16.617 2.112 16.6965 2.25248 16.7344C2.39296 16.7723 2.54166 16.7669 2.67899 16.7189L4.51295 16.0684C5.18107 16.616 5.92541 17.0497 6.73029 17.3492L7.08453 19.2559C7.11108 19.3989 7.18064 19.5304 7.28396 19.633C7.38728 19.7356 7.51947 19.8045 7.66296 19.8304L7.7235 19.8416C8.90081 20.0528 10.1065 20.0528 11.2838 19.8416L11.3443 19.8304C11.4878 19.8045 11.62 19.7356 11.7233 19.633C11.8267 19.5304 11.8962 19.3989 11.9228 19.2559L12.2748 17.3582C13.0864 17.0542 13.8352 16.6227 14.5078 16.0729L16.3283 16.7189C16.4656 16.7673 16.6144 16.7729 16.755 16.735C16.8955 16.697 17.0212 16.6173 17.1152 16.5065L17.1556 16.4596C17.9358 15.5409 18.5344 14.5059 18.9402 13.3816L18.9604 13.3235C19.0568 13.0463 18.9739 12.7356 18.7474 12.5411ZM9.50365 13.7079C7.32666 13.7079 5.56221 11.9488 5.56221 9.77828C5.56221 7.60781 7.32666 5.84864 9.50365 5.84864C11.6806 5.84864 13.4451 7.60781 13.4451 9.77828C13.4451 11.9488 11.6806 13.7079 9.50365 13.7079Z" fill="#AAB2BB" />
                    </svg>

                    <span class="side-text">Pengaturan</span></a>
            </li>

            <br>
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
                <nav class="navbar navbar-expand topbar mb-4 static-top navbg">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control btnSearch border-0 small" placeholder="Cari nama pegawai ..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btnSearch" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Cari nama pegawai ..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <!-- <li class="nav-item dropdown topnavBtn mx-1">
                            <a href="" class="text-topbar" style="text-decoration: none;">Info Saya</a>
                        </li> -->

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown topnavBtn mx-3">
                            <a href="/tambah-datadiri" class="btn text-topbar <?= ($active === 'tambah-pegawai') ? 'actTop' : ''; ?>" style="text-decoration: none;">Tambah Pegawai</a>
                        </li>

                        <!-- <li class="nav-item dropdown topnavBtn">
                            <a href="" class="text-topbar" style="text-decoration: none;">Info Perusahaan</a>
                        </li> -->

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">John Doe</span>
                                <img class="img-profile rounded-circle" src="/assets/img/img_profile.jpg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <img class="img-profile rounded-circle" src="/assets/img/img_profile.jpg" alt="">
                                    Profile
                                </a>
                                <a class="dropdown-item" href="/akun-profil">
                                    <i class="fas fa-users fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Info Saya
                                </a>
                                <!-- <a class="dropdown-item" href="#">
                                    <i class="fas fa-city fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Info Perusahaan
                                </a> -->
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Keluar
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <!-- TEMPAT SECTION CONTENT -->
                <?= $this->renderSection('content'); ?>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="" id="exampleModalLabel">Yakin untuk keluar?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">x</span>
                    </button>
                </div>
                <div class="modal-body">Pilih "Keluar" di bawah jika Anda siap untuk mengakhiri sesi Anda saat ini.
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Kembali</button>
                    <a class="btn btn-primary" href="/">Keluar</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="/assets/vendor/jquery/jquery.min.js"></script>
    <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>

    <!-- Core plugin JavaScript-->
    <script src="/assets/vendor/jquery-easing/jquery.easing.min.js"></script>



    <!-- Custom scripts for all pages-->
    <script src="/assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="/assets/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="/assets/js/demo/chart-area-demo.js"></script>
    <script src="/assets/js/demo/chart-pie-demo.js"></script>

    <!-- DataTables -->
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

</body>

</html>