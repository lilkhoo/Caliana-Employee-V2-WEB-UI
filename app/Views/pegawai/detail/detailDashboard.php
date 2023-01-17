<?= $this->extend('template/master'); ?>
<?= $this->section('navtop'); ?>
<?= $this->include('template/navbar'); ?>

<?= $this->endSection(); ?>
<?= $this->section('content'); ?>
<link rel="stylesheet" href="assets/css/kehadiran.css">

<link rel="" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

<!-- DataTables -->
<link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

<!-- JQUERY FOR MOMENT JS DATE -->
<script src="/assets/vendor/jquery/jquery.min.js"></script>

<style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,700,900');
</style>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div class="row">
                <?= $this->include("template/dashBreadcrumb"); ?>
                <div class="col">
                    <div class="card mb-3">
                        <div class="row">

                            <div class="col-md-2 col-sm-2 col-xl-3 borderDas">
                                <p class="labeldasKehadiran" style="padding-left: 20px; margin-top: 20px;">Data Yang
                                    Ditampilkan Adalah Data Real Time</p>
                                <p class="fontdasKehadiran2 dateLocalToday"> <?= date("d F Y"); ?></p>
                            </div>
                            <div class="col-md-2 col-sm-1 col-xl-1 borderDas text-center">
                                <p class="labeldasKehadiran">Jumlah</p>
                                <p class="valuedasKehadiran">100</p>
                                <p class="textkehadiran">Pegawai</p>
                            </div>
                            <div class="col-md-2 col-sm-1 col-xl-1 borderDas text-center">
                                <p class="labeldasKehadiran">Tepat Waktu</p>
                                <p class="valuedasKehadiran">65</p>
                                <p class="textkehadiran">Pegawai</p>
                            </div>
                            <div class="col-md-2 col-sm-1 col-xl-1 borderDas text-center">
                                <p class="labeldasKehadiran">Terlambat</p>
                                <p class="valuedasKehadiran">5</p>
                                <p class="textkehadiran">Pegawai</p>
                            </div>
                            <div class="col-md-2 col-sm-1 col-xl-1 borderDas text-center">
                                <p class="labeldasKehadiran">Time off</p>
                                <p class="valuedasKehadiran">10</p>
                                <p class="textkehadiran">Pegawai</p>
                            </div>
                            <div class="col-md-2 col-sm-1 col-xl-1 borderDas text-center">
                                <p class="labeldasKehadiran">Tidak Hadir</p>
                                <p class="valuedasKehadiran">7</p>
                                <p class="textkehadiran">Pegawai</p>
                            </div>
                            <div class="col-md-2 col-sm-1 col-xl-1 borderDas text-center">
                                <p class="labeldasKehadiran">Tidak Absen</p>
                                <p class="valuedasKehadiran">13</p>
                                <p class="textkehadiran">Pegawai</p>
                            </div>
                            <div class="col-md-e col-sm-2 col-xl-3 text-center">
                                <a href="/daftar-kehadiran"><img src="/assets/img/icon_cursorkembali.png" alt="cursor" class="imgDasKehadiran">
                                    <p class="text-detail2">Kembali</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex mt-2">
                        <div class="mr-auto">

                        </div>

                        <div class="ml-auto">
                            <small class="data-tanggal">Data Tanggal : </small>

                            <label for="" style="padding-top: 5px;">
                                <input type="date" value="<?php echo date('Y-m-d'); ?>">
                            </label>
                            <small style="color: #AAB2BB;">-</small>
                            <label for="" style="padding-right: 10px; padding-top: 5px;">
                                <input type="date" value="<?php echo date('Y-m-d'); ?>">
                            </label>
                            <button class="btn btn-primary btnExp eksportdata2">Eksport Data</button>
                        </div>
                    </div>

                    <div class="card mb-4">

                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Kehadiran Pegawai
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover" id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px;"></th>
                                            <th>Nama Pegawai</th>
                                            <th>Terlambat</th>
                                            <th>Keluar Awal</th>
                                            <th>Tidak Hadir</th>
                                            <th>Total Keterlambatan</th>
                                            <th>Total Keluar Awal</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td><img src="/assets/img/Ellipse1.png" class="rounded-circle" style="width:65px"></td>
                                            <td>
                                                <div class="col">Xander Mount</div>
                                                <div class="col"><small>12007787</small></div>
                                            </td>
                                            <td>3</td>
                                            <td>4</td>
                                            <td>0</td>
                                            <td>192 Menit</td>
                                            <td>70 Menit</td>
                                        </tr>

                                        <tr>
                                            <td><img src="/assets/img/Ellipse2.png" class="rounded-circle" style="width:65px"></td>
                                            <td>
                                                <div class="col">Kusnadi</div>
                                                <div class="col"><small>12007788</small></div>
                                            </td>
                                            <td>3</td>
                                            <td>4</td>
                                            <td>0</td>
                                            <td>192 Menit</td>
                                            <td>70 Menit</td>
                                        </tr>

                                        <tr>
                                            <td><img src="/assets/img/Ellipse3.png" class="rounded-circle" style="width:65px"></td>
                                            </td>
                                            <td>
                                                <div class="col">Kevin</div>
                                                <div class="col"><small>12007789</small></div>
                                            </td>
                                            <td>3</td>
                                            <td>4</td>
                                            <td>0</td>
                                            <td>192 Menit</td>
                                            <td>70 Menit</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                    <div class="d-flex mt-2">
                        <div class="mr-auto">

                        </div>

                        <div class="ml-auto">
                            <small class="data-tanggal">Data Tanggal : </small>

                            <label for="" style="padding-top: 5px;">
                                <input type="date" value="<?php echo date('Y-m-d'); ?>">
                            </label>
                            <small style="color: #AAB2BB;">-</small>
                            <label for="" style="padding-right: 10px; padding-top: 5px;">
                                <input type="date" value="<?php echo date('Y-m-d'); ?>">
                            </label>
                            <button class="btn btn-primary btnExp eksportdata">Eksport Data</button>
                        </div>
                    </div>
                </div>



                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Time Off Pegawai
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover" id="datatablesSimple2">
                                <thead>
                                    <tr>
                                        <th style="width: 10px;"></th>
                                        <th>Nama Pegawai</th>
                                        <th>Hari Diambil</th>
                                        <th>Hari Sebelumnya</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td><img src="/assets/img/Ellipse1.png" class="rounded-circle" style="width:65px"></td>
                                        <td>
                                            <div class="col">Xander Mount</div>
                                            <div class="col"><small>12007787</small></div>
                                        </td>
                                        <td>3</td>
                                        <td>4</td>
                                    </tr>

                                    <tr>
                                        <td><img src="/assets/img/Ellipse2.png" class="rounded-circle" style="width:65px"></td>
                                        <td>
                                            <div class="col">Kusnadi</div>
                                            <div class="col"><small>12007788</small></div>
                                        </td>
                                        <td>3</td>
                                        <td>4</td>
                                    </tr>

                                    <tr>
                                        <td><img src="/assets/img/Ellipse3.png" class="rounded-circle" style="width:65px"></td>
                                        </td>
                                        <td>
                                            <div class="col">Kevin</div>
                                            <div class="col"><small>12007789</small></div>
                                        </td>
                                        <td>3</td>
                                        <td>4</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
</div>
</main>
</div>

<script src="assets/js/sweetalert2.all.js"></script>
<script src="assets/js/swalscript.js"></script>
<!-- Bootstrap core JavaScript-->

<!-- Page level plugins -->
<script src="/assets/vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="/assets/js/demo/chart-area-demo.js"></script>
<script src="/assets/js/demo/chart-pie-demo.js"></script>

<!-- SweetAlert -->
<script src="assets/js/sweetalert2.all.js"></script>
<script src="assets/js/swalscript.js"></script>

<!-- DataTables -->
<script src="https://code.jquery.com/jquery-3.6.1.js"></script>
<script>
    $(document).ready(function() {
        $('#datatablesSimple').DataTable();
    });
    $(document).ready(function() {
        $('#datatablesSimple2').DataTable();
    });

    document.querySelector(".eksportdata").addEventListener('click', function() {
        Swal.fire({
            title: 'Ekspor Data?',
            text: "Apakah anda yakin ingin mengekspor data saat ini?",
            // imageUrl: 'https://i.ibb.co/8cB628n/itembiru.png',
            // imageWidth: 400,
            // imageHeight: 30,
            // imageAlt: 'Custom image',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya,saya yakin!',
            icon: 'warning',
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                    'Selesai!',
                    'Data anda sudah di ekspor.',
                    'success'
                )
            }
        })
    });

    document.querySelector(".eksportdata2").addEventListener('click', function() {
        Swal.fire({
            title: 'Ekspor Data?',
            text: "Apakah anda yakin ingin mengekspor data saat ini?",
            // imageUrl: 'https://i.ibb.co/8cB628n/itembiru.png',
            // imageWidth: 400,
            // imageHeight: 30,
            // imageAlt: 'Custom image',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya,saya yakin!',
            icon: 'warning',
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                    'Selesai!',
                    'Data anda sudah di ekspor.',
                    'success'
                )
            }
        })
    });
</script>

<script src="/assets/js/moment/moment.js"></script>
<script src="/assets/js/moment/moment-with-locales.js"></script>
<script>
    $(document).ready(() => {
        moment.locale('id')
        $('.dateLocal').map((i, date) => {
            // $(date).html(moment.date($(date)))
            var dateLocal = moment($(date).html().replace(/\s/g, '')).format('DD MMMM YYYY')
            $(date).html(dateLocal)
        })

        $('.dateLocalToday').map((i, date) => {
            // $(date).html(moment.date($(date)))
            var dateLocal = moment($(date).html().replace(/\s/g, '')).format('[Today,] DD MMMM YYYY')
            $(date).html(dateLocal)
        })

        $('.dateLocalDay').map((i, date) => {
            // $(date).html(moment.date($(date)))
            var dateLocal = moment($(date).html().replace(/\s/g, '')).format('dddd[,] DD MMMM YYYY')
            $(date).html(dateLocal)
        })

        $('.dayLocal').map((i, day) => {
            var dayLocal = moment($(day).html().replace(/\s/g, '')).format('dddd')
            $(day).html(dayLocal)
        })
    });
</script>

<?= $this->endSection(); ?>