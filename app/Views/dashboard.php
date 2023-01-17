<?= $this->extend('template/master'); ?>
<?= $this->section('content'); ?>
<link rel="stylesheet" href="/assets/css/dashboard.css">


<!-- JQUERY FOR MOMENT JS DATE -->
<script src="/assets/vendor/jquery/jquery.min.js"></script>


<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 judul-page"></h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary btnReport shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <!-- Content Row -->
    <div class="row">

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card card-dashboard border-left-primary shadow-card">
                <div class="body-card">
                    <div class="row no-gutters align-items-center">
                        <div class="col adjust-card">
                            <div class="text-md label-dashboard">
                                Terlambat
                                <div class="mini-label dateLocal"><?= date("d F Y"); ?></div>
                            </div>
                            <button class="h3 mb-0 text-primary label-angka" data-bs-toggle="modal" data-bs-target="#modalTerlambat">3</button>
                            <div class="text-md mb-0 label-dashboard-bawah">Pegawai</div>
                        </div>
                        <div class="col-auto adjust-chart">
                            <canvas id="myPieChart" width="100%" height="90"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- START MODAL TERLAMBAT -->
        <div class="modal fade" id="modalTerlambat" aria-hidden="true" aria-labelledby="modalTerlambatLabel">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="col">
                            <h5 class="modal-title text-center dateLocalTerlambat" id="modalToggleLabel"><?= date("d F Y"); ?></h5>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Divisi</th>
                                    <th scope="col">Posisi Pekerjaan</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>1</td>
                                    <td>Maman Sutardi</td>
                                    <td>Finance</td>
                                    <td>Junior Staff</td>
                                </tr>

                                <tr>
                                    <td>2</td>
                                    <td>Ascelion Susanto</td>
                                    <td>Sales</td>
                                    <td>Sales Manager</td>
                                </tr>

                                <tr>
                                    <td>3</td>
                                    <td>Michael Winalian</td>
                                    <td>Developer</td>
                                    <td>Senior Backend Developer</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MODAL TERLAMBAT -->


        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card card-dashboard border-left-primary shadow-card">
                <div class="body-card">
                    <div class="row no-gutters align-items-center">
                        <div class="col adjust-card">
                            <div class="text-md label-dashboard">
                                Tidak Hadir
                                <div class="mini-label dateLocal"><?= date("d F Y"); ?></div>
                            </div>
                            <button class="h3 mb-0 text-primary label-angka" data-bs-toggle="modal" data-bs-target="#modalTidakHadir">10</button>
                            <div class="text-md mb-0 label-dashboard-bawah">Pegawai</div>
                        </div>
                        <div class="col-auto adjust-chart">
                            <canvas id="myPieChart1" width="100%" height="90"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- START MODAL TIDAK HADIR -->
        <div class="modal fade" id="modalTidakHadir" aria-hidden="true" aria-labelledby="modalTidakHadirLabel">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="col">
                            <h5 class="modal-title text-center dateLocalTidakHadir" id="modalToggleLabel"><?= date("d F Y "); ?></h5>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Divisi</th>
                                    <th scope="col">Posisi Pekerjaan</th>
                                </tr>
                            </thead>
                            <tbody>

                                <!-- DUMMYS DATA -->

                                <tr>
                                    <td>1</td>
                                    <td>Bambang Sutrisno</td>
                                    <td>Finance</td>
                                    <td>Senior Sales</td>
                                </tr>

                                <tr>
                                    <td>2</td>
                                    <td>Erika Manopo</td>
                                    <td>HR</td>
                                    <td>Recruitment Staff</td>
                                </tr>

                                <tr>
                                    <td>3</td>
                                    <td>Jerhemy Owen</td>
                                    <td>Developer</td>
                                    <td>Junior Frontend Developer</td>
                                </tr>

                                <tr>
                                    <td>4</td>
                                    <td>Christoffel Lunar</td>
                                    <td>Marketing</td>
                                    <td>Marketing Manager</td>
                                </tr>

                                <tr>
                                    <td>5</td>
                                    <td>Hans Christian Sugijanto</td>
                                    <td>Developer</td>
                                    <td>Fullstack Developer</td>
                                </tr>

                                <tr>
                                    <td>6</td>
                                    <td>Eko Setyono Wibowo</td>
                                    <td>Developer</td>
                                    <td>Junior Engineer</td>
                                </tr>

                                <tr>
                                    <td>7</td>
                                    <td>Xaverius Andrea</td>
                                    <td>Produksi</td>
                                    <td>Supervisor</td>
                                </tr>

                                <tr>
                                    <td>8</td>
                                    <td>Agus Susanto</td>
                                    <td>Produksi</td>
                                    <td>Operator</td>
                                </tr>

                                <tr>
                                    <td>9</td>
                                    <td>Yuma Soerianto</td>
                                    <td>Developer</td>
                                    <td>Product Manager</td>
                                </tr>

                                <tr>
                                    <td>10</td>
                                    <td>Marteen Suteja</td>
                                    <td>Marketing</td>
                                    <td>Marketing Manager</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MODAL TIDAK HADIR -->


        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card card-dashboard border-left-primary shadow-card">
                <div class="body-card">
                    <div class="row no-gutters align-items-center">
                        <div class="col adjust-card">
                            <div class="text-md label-dashboard">
                                Cuti
                                <div class="mini-label dateLocal"><?= date("d F Y"); ?></div>
                            </div>
                            <button class="h3 mb-0 text-primary label-angka" data-bs-toggle="modal" data-bs-target="#modalCuti">5</button>
                            <div class="text-md mb-0 label-dashboard-bawah">Pegawai</div>
                        </div>
                        <div class="col-auto adjust-chart">
                            <canvas id="myPieChart2" width="100%" height="90"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- START MODAL CUTI -->
        <div class="modal fade" id="modalCuti" aria-hidden="true" aria-labelledby="modalCutiLabel">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="col">
                            <h5 class="modal-title text-center dateLocalCuti" id="modalToggleLabel"><?= date("d F Y"); ?></h5>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Divisi</th>
                                    <th scope="col">Posisi Pekerjaan</th>
                                </tr>
                            </thead>
                            <tbody>

                                <!-- DUMMYS DATA -->

                                <tr>
                                    <td>1</td>
                                    <td>Kezia Lizina</td>
                                    <td>Finance</td>
                                    <td>Senior Sales</td>
                                </tr>

                                <tr>
                                    <td>2</td>
                                    <td>Erika Manopo</td>
                                    <td>HR</td>
                                    <td>Recruitment Staff</td>
                                </tr>

                                <tr>
                                    <td>3</td>
                                    <td>Brandon Soekresno</td>
                                    <td>Developer</td>
                                    <td>Junior Frontend Developer</td>
                                </tr>

                                <tr>
                                    <td>4</td>
                                    <td>Adelya Salsa</td>
                                    <td>Marketing</td>
                                    <td>Marketing Manager</td>
                                </tr>

                                <tr>
                                    <td>5</td>
                                    <td>Vincent Sugijanto</td>
                                    <td>Developer</td>
                                    <td>Fullstack Developer</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MODAL CUTI -->

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card card-dashboard border-left-primary shadow-card">
                <div class="body-card">
                    <div class="row no-gutters align-items-center">
                        <div class="col adjust-card">
                            <div class="text-md label-dashboard">
                                Dinas Luar
                                <div class="mini-label dateLocal"><?= date("d F Y"); ?></div>
                            </div>
                            <button class="h3 mb-0 text-primary label-angka" data-bs-toggle="modal" data-bs-target="#modalDinasLuar">5</button>
                            <div class="text-md mb-0 label-dashboard-bawah">Pegawai</div>
                        </div>
                        <div class="col-auto adjust-chart">
                            <canvas id="myPieChart3" width="100%" height="90"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- START MODAL DINAS LUAR -->
    <div class="modal fade" id="modalDinasLuar" aria-hidden="true" aria-labelledby="modalDinasLuarLabel">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="col">
                        <h5 class="modal-title text-center dateLocalDinasLuar" id="modalToggleLabel"><?= date("d F Y"); ?></h5>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Divisi</th>
                                <th scope="col">Posisi Pekerjaan</th>
                            </tr>
                        </thead>
                        <tbody>

                            <!-- DUMMYS DATA -->

                            <tr>
                                <td>1</td>
                                <td>Felice Chrismarry Lu</td>
                                <td>Finance</td>
                                <td>Senior Sales</td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>Oza Rangkuti</td>
                                <td>HR</td>
                                <td>Recruitment Staff</td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>Yurino Putra Angkawijaya</td>
                                <td>Developer</td>
                                <td>Junior Frontend Developer</td>
                            </tr>

                            <tr>
                                <td>4</td>
                                <td>Eko Julianto</td>
                                <td>Marketing</td>
                                <td>Marketing Manager</td>
                            </tr>

                            <tr>
                                <td>5</td>
                                <td>Edwin Darmawan</td>
                                <td>Developer</td>
                                <td>Fullstack Developer</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- END MODAL DINAS LUAR -->


    <!-- Content Row -->
    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-8 col-lg-7">
            <div class="d-flex justify-content-between">
                <h6 class="label-card">Tingkatan Pegawai</h6>
                <!-- <h6 class="label-card2">Lihat</h6> -->
            </div>
            <div class="card shadow-card mb-4">
                <!-- Card Header - Dropdown -->
                <!-- Card Body -->
                <div class="card-body mb-2">
                    <div class="row">
                        <div class="col">
                            <p>Direksi</p>
                            <p>Manajemen</p>
                            <p>Pengawas</p>
                            <p>Staff</p>
                            <p>Developer</p>
                        </div>
                        <div class="col">
                            <p>5 Pegawai</p>
                            <p>10 Pegawai</p>
                            <p>20 Pegawai</p>
                            <p>15 Pegawai</p>
                            <p>10 Pegawai</p>
                        </div>
                        <div class="col">
                            <p>5%</p>
                            <p>10%</p>
                            <p>20%</p>
                            <p>15%</p>
                            <p>10%</p>
                        </div>
                        <div class="col">
                            <div class="progress mb-4 pointer" data-toggle="tooltip" data-placement="right" title="Direksi : 5">
                                <div class="progress-bar bg-red" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>

                            <div class="progress mb-4 pointer" data-toggle="tooltip" data-placement="right" title="Manajemen : 10">
                                <div class="progress-bar bg-green" role="progressbar" style="width: 40%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>

                            <div class="progress mb-4 pointer" data-toggle="tooltip" data-placement="right" title="Pengawas : 20">
                                <div class="progress-bar bg-blue" role="progressbar" style="width: 60%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>

                            <div class="progress mb-4 pointer" data-toggle="tooltip" data-placement="right" title="Staff : 15">
                                <div class="progress-bar bg-yellow" role="progressbar" style="width: 30%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>

                            <div class="progress mb-4 pointer" data-toggle="tooltip" data-placement="right" title="Developer : 10">
                                <div class="progress-bar bg-red" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pie Chart -->
        <div class="col-xl-4 col-lg-5">
            <div class="d-flex justify-content-between">
                <h6 class="label-card">Status Pegawai</h6>
                <!-- <h6 class="label-card2">Lihat</h6> -->
            </div>
            <div class="card shadow-card">
                <!-- Card Header - Dropdown -->
                <!--  -->
                <!-- Card Body -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="progress mb-4 pointer" data-toggle="tooltip" data-placement="top" title="Permanen : 40">
                                <div class="progress-bar bg-blue" id="bar-permanen" role="progressbar" style="width: 40%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress mb-4 pointer" data-toggle="tooltip" data-placement="right" title="Percobaan : 20">
                                <div class="progress-bar bg-green" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress mb-4 pointer" data-toggle="tooltip" data-placement="right" title="Kontrak : 35">
                                <div class="progress-bar bg-yellow" role="progressbar" style="width: 30%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress mb-4 pointer" data-toggle="tooltip" data-placement="right" title="Magang : 20">
                                <div class="progress-bar bg-red" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>

                        </div>
                        <div class="col-md-3">
                            <p class="label-persen-chart">40%</p>
                            <p class="label-persen-chart">20%</p>
                            <p class="label-persen-chart adjust-label">35%</p>
                            <p class="label-persen-chart adjust-label">20%</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="d-flex justify-content-between">
                            <h5 class="body-text"><i class="fas fa-circle text-primary"></i> Permanen</h5>
                            <h5 class="body-text"><i class="fas fa-circle text-success"></i> Percobaan</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="d-flex justify-content-between">
                            <h5 class="body-text"><i class="fas fa-circle text-warning"></i> Kontrak</h5>
                            <h5 class="body-text text-magang"><i class="fas fa-circle text-danger"></i> Magang</h5>
                        </div>
                    </div>
                    <!-- <div class="small">
                        <span>
                            <i class="text-primary"></i> Permanen
                        </span>
                        <span>
                            <i class="text-success"></i> Percobaan
                        </span>
                        <span>
                            <i class="text-info"></i> Magang
                        </span>
                        <span>
                            <i class="text-danger"></i> Kontrak
                        </span>
                    </div> -->
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Content Column -->
        <div class="col-xl-4 col-lg-5">
            <div class="d-flex justify-content-between">
                <h6 class="label-card">Jenis Kelamin Pegawai</h6>
                <!-- <h6 class="label-card2">Lihat</h6> -->
            </div>
            <!-- Project Card Example -->
            <div class="card shadow-card mb-4">
                <!-- CARD HEADER -->
                <!--  -->
                <!-- CARD BODY -->
                <div class="card-body">
                    <canvas id="myDoughChart" width="200%" height="300"></canvas>
                </div>
                <div class="small text-center adjust-legend">
                    <span class="mx-3">
                        <i class="fas fa-circle bg-green"></i> 70%
                    </span>
                    <span class="mx-3">
                        <i class="fas fa-circle bg-yellow"></i> 30%
                    </span>

                </div>
            </div>

        </div>

        <div class="col-xl-8 col-lg-7">
            <div class="d-flex justify-content-between">
                <h6 class="label-card">Total Pegawai</h6>
                <!-- <h6 class="label-card2">Lihat</h6> -->
            </div>
            <div class="card shadow-card mb-4">
                <!-- Card Header - Dropdown -->
                <!--  -->
                <!-- Card Body -->
                <div class="card-body adjust-legend">
                    <div class="chart-area">
                        <canvas id="myAreaChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="/assets/js/moment/moment.js"></script>
<script src="/assets/js/moment/moment-with-locales.js"></script>
<script>
    $(document).ready(() => {
        moment.locale('id')
        $('.dateLocalTerlambat').map((i, date) => {
            // $(date).html(moment.date($(date)))
            var dateLocal = moment($(date).html().replace(/\s/g, '')).format('[Terlambat : ]DD MMMM YYYY')
            $(date).html(dateLocal)
        })

        $('.dateLocalTidakHadir').map((i, date) => {
            // $(date).html(moment.date($(date)))
            var dateLocal = moment($(date).html().replace(/\s/g, '')).format('[Tidak Hadir : ]DD MMMM YYYY')
            $(date).html(dateLocal)
        })

        $('.dateLocalCuti').map((i, date) => {
            // $(date).html(moment.date($(date)))
            var dateLocal = moment($(date).html().replace(/\s/g, '')).format('[Cuti : ]DD MMMM YYYY')
            $(date).html(dateLocal)
        })

        $('.dateLocalDinasLuar').map((i, date) => {
            // $(date).html(moment.date($(date)))
            var dateLocal = moment($(date).html().replace(/\s/g, '')).format('[Dinas Luar : ]DD MMMM YYYY')
            $(date).html(dateLocal)
        })

        $('.dayLocal').map((i, day) => {
            var dayLocal = moment($(day).html().replace(/\s/g, '')).format('dddd')
            $(day).html(dayLocal)
        })

        $('.dateLocal').map((i, date) => {
            // $(date).html(moment.date($(date)))
            var dateLocal = moment($(date).html().replace(/\s/g, '')).format('DD MMMM YYYY')
            $(date).html(dateLocal)
        })
    });

    var barPermanen = document.getElementById("bar-permanen");
    var progressbarPermanen = barPermanen
</script>

<script>
    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>


<?= $this->endSection('content'); ?>