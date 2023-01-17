<?= $this->extend('template/master'); ?>
<?= $this->section('navtop'); ?>
<?= $this->include('template/navbar'); ?>

<?= $this->endSection(); ?>
<?= $this->section('content'); ?>

<link rel="stylesheet" href="assets/css/kehadiran.css">


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
                <?= $this->include("template/singleBreadcrumbKehadiran"); ?>
                <div class="col">
                    <div class="card">
                        <div class="row">

                            <div class="col-md-2 col-sm-2 col-xl-3 ">
                                <p class="labeldasKehadiran" style="padding-left: 20px; margin-top: 20px;">Data Yang
                                    Ditampilkan Adalah Data Real Time</p>
                                <p class="fontdasKehadiran2 dateLocalToday"> <?= date("d F Y"); ?></p>
                            </div>
                            <div class="col-md-5 col-sm-1 col-lg-6 col-xl-1 borderDas text-center">
                                <p class="labeldasKehadiran">Jumlah</p>
                                <p class="valuedasKehadiran">100</p>
                                <p class="textkehadiran">Pegawai</p>
                            </div>
                            <div class="col-md-5 col-sm-1 col-lg-6 col-xl-1 borderDas text-center">
                                <p class="labeldasKehadiran">Tepat Waktu</p>
                                <p class="valuedasKehadiran">65</p>
                                <p class="textkehadiran">Pegawai</p>
                            </div>
                            <div class="col-md-5 col-sm-1 col-lg-6 col-xl-1 borderDas text-center">
                                <p class="labeldasKehadiran">Terlambat</p>
                                <p class="valuedasKehadiran">5</p>
                                <p class="textkehadiran">Pegawai</p>
                            </div>
                            <div class="col-md-5 col-sm-1 col-lg-6 col-xl-1 borderDas text-center">
                                <p class="labeldasKehadiran">Time Off</p>
                                <p class="valuedasKehadiran">10</p>
                                <p class="textkehadiran">Pegawai</p>
                            </div>
                            <div class="col-md-5 col-sm-1 col-lg-6 col-xl-1 borderDas text-center">
                                <p class="labeldasKehadiran">Tidak Hadir</p>
                                <p class="valuedasKehadiran">7</p>
                                <p class="textkehadiran">Pegawai</p>
                            </div>
                            <div class="col-md-5 col-sm-1 col-lg-6 col-xl-1 borderDas text-center">
                                <p class="labeldasKehadiran">Tidak Absen</p>
                                <p class="valuedasKehadiran">13</p>
                                <p class="textkehadiran">Pegawai</p>
                            </div>
                            <div class="col-md-3 col-sm-2 col-lg-6 col-xl-3 text-center">
                                <a href="/detail-dashboard"><img src="/assets/img/icon-cursor.png" alt="cursor" class="imgDasKehadiran">
                                    <p class="text-detail">Lihat Semua</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- TOMBOL EKSPORT DAN TANGGAL (AWAL)-->
                    <!-- <div class="d-flex flex-row-reverse mb-3 mt-2">
                  <button class="btn btn-primary btnExp mt-1">Eksport Data</button>
                  <label for="" style="padding-right: 10px; padding-top: 5px;">
                     <input type="date">
                  </label>
                  <label for="" style="padding-right: 10px; padding-top: 5px;">
                     <input type="date">
                  </label>

                  <small class="data-tanggal">Data Tanggal : </small>
               </div> -->

                    <div class="d-flex mt-2">
                        <div class="mr-auto">

                        </div>

                        <div class="ml-auto">
                            <small class="data-tanggal">Data Tanggal : </small>

                            <label for="" style="padding-top: 5px;">
                                <input type="date" id="min" name="min">
                            </label>
                            <small style="color: #AAB2BB;">-</small>
                            <label for="" style="padding-right: 10px; padding-top: 5px;">
                                <input type="date" id="max" name="max">
                            </label>
                            <button class="btn btn-primary btnExp eksportdata">Eksport Data</button>
                        </div>
                    </div>

                    <div class="card mt-4 mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Daftar Kehadiran
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover" id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px;"></th>
                                            <th>Nama Pegawai</th>
                                            <th>Tanggal</th>
                                            <th>Shift</th>
                                            <th>Jadwal Kerja</th>
                                            <th>Status</th>
                                            <th>Jam Masuk</th>
                                            <th>Jam Keluar</th>
                                            <th></th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td><img src="/assets/img/Ellipse1.png" class="rounded-circle" style="width:65px"></td>
                                            <td>
                                                <div class="col">Xander Mount</div>
                                                <div class="col"><small>12007787</small></div>
                                            </td>
                                            <td class="dateLocalDay"><?= date('d F Y'); ?></td>
                                            <td>N</td>
                                            <td>08.00 - 17.00</td>
                                            <td>
                                                <span class="badge bg-merah">Cuti</span>
                                            </td>
                                            <td><?= date("h:i"); ?></td>
                                            <td>17:00</td>
                                            <td><a href="/detail-kehadiran"><svg width="9" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M0.392867 0.394637C0.26833 0.518919 0.169527 0.666543 0.102113 0.829057C0.0347 0.991571 0 1.16579 0 1.34173C0 1.51767 0.0347 1.69188 0.102113 1.8544C0.169527 2.01691 0.26833 2.16454 0.392867 2.28882L5.60522 7.50117L0.392867 12.7135C0.141683 12.9647 0.000568833 13.3054 0.000568833 13.6606C0.000568833 14.0158 0.141683 14.3565 0.392867 14.6077C0.644051 14.8589 0.984729 15 1.33996 15C1.69518 15 2.03586 14.8589 2.28705 14.6077L8.45321 8.44154C8.57774 8.31726 8.67655 8.16964 8.74396 8.00712C8.81137 7.84461 8.84607 7.67039 8.84607 7.49445C8.84607 7.31851 8.81137 7.1443 8.74396 6.98178C8.67655 6.81927 8.57774 6.67165 8.45321 6.54736L2.28705 0.381203C1.77656 -0.129285 0.916789 -0.129285 0.392867 0.394637Z" fill="#AAB2BB" />
                                                    </svg>
                                                </a></td>
                                        </tr>

                                        <tr>
                                            <td><img src="/assets/img/Ellipse2.png" class="rounded-circle" style="width:65px"></td>
                                            <td>
                                                <div class="col">Kusnadi</div>
                                                <div class="col"><small>12007788</small></div>
                                            </td>
                                            <td>Senin 11 Juli 2022</td>
                                            <td>N</td>
                                            <td>08.00 - 17.00</td>
                                            <td>
                                                <span class="badge bg-kuning">Dinas Luar</span>
                                            </td>
                                            <td>08:00</td>
                                            <td>17:00</td>
                                            <td><a href="/detail-kehadiran"><svg width="9" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M0.392867 0.394637C0.26833 0.518919 0.169527 0.666543 0.102113 0.829057C0.0347 0.991571 0 1.16579 0 1.34173C0 1.51767 0.0347 1.69188 0.102113 1.8544C0.169527 2.01691 0.26833 2.16454 0.392867 2.28882L5.60522 7.50117L0.392867 12.7135C0.141683 12.9647 0.000568833 13.3054 0.000568833 13.6606C0.000568833 14.0158 0.141683 14.3565 0.392867 14.6077C0.644051 14.8589 0.984729 15 1.33996 15C1.69518 15 2.03586 14.8589 2.28705 14.6077L8.45321 8.44154C8.57774 8.31726 8.67655 8.16964 8.74396 8.00712C8.81137 7.84461 8.84607 7.67039 8.84607 7.49445C8.84607 7.31851 8.81137 7.1443 8.74396 6.98178C8.67655 6.81927 8.57774 6.67165 8.45321 6.54736L2.28705 0.381203C1.77656 -0.129285 0.916789 -0.129285 0.392867 0.394637Z" fill="#AAB2BB" />
                                                    </svg>
                                                </a></td>
                                        </tr>

                                        <tr>
                                            <td><img src="/assets/img/Ellipse3.png" class="rounded-circle" style="width:65px"></td>
                                            </td>
                                            <td>
                                                <div class="col">Kevin</div>
                                                <div class="col"><small>12007789</small></div>
                                            </td>
                                            <td>Senin 11 Juli 2022</td>
                                            <td>N</td>
                                            <td>08.00 - 17.00</td>
                                            <td>
                                                <span class="badge bg-hijau">Hadir</span>
                                            </td>
                                            <td>08:00</td>
                                            <td>17:00</td>
                                            <td><a href="/detail-kehadiran"><svg width="9" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M0.392867 0.394637C0.26833 0.518919 0.169527 0.666543 0.102113 0.829057C0.0347 0.991571 0 1.16579 0 1.34173C0 1.51767 0.0347 1.69188 0.102113 1.8544C0.169527 2.01691 0.26833 2.16454 0.392867 2.28882L5.60522 7.50117L0.392867 12.7135C0.141683 12.9647 0.000568833 13.3054 0.000568833 13.6606C0.000568833 14.0158 0.141683 14.3565 0.392867 14.6077C0.644051 14.8589 0.984729 15 1.33996 15C1.69518 15 2.03586 14.8589 2.28705 14.6077L8.45321 8.44154C8.57774 8.31726 8.67655 8.16964 8.74396 8.00712C8.81137 7.84461 8.84607 7.67039 8.84607 7.49445C8.84607 7.31851 8.81137 7.1443 8.74396 6.98178C8.67655 6.81927 8.57774 6.67165 8.45321 6.54736L2.28705 0.381203C1.77656 -0.129285 0.916789 -0.129285 0.392867 0.394637Z" fill="#AAB2BB" />
                                                    </svg>
                                                </a></td>
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
    // $(document).ready(function() {
    //     $('#datatablesSimple').DataTable();
    // });
</script>

<script src="/assets/js/moment/moment.js"></script>
<script src="/assets/js/moment/moment-with-locales.js"></script>

<!-- DATE FILTER -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.2/moment.min.js"></script>
<script src="https://cdn.datatables.net/datetime/1.2.0/js/dataTables.dateTime.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

<script>
    // DataTables initialisation
    var table = $('#datatablesSimple').DataTable();
    var minDate, maxDate;

    // Custom filtering function which will search data in column four between two values
    $.fn.dataTable.ext.search.push(
        function(settings, data, dataIndex) {
            var min = minDate.val();
            var max = maxDate.val();
            var date = new Date(data[2] || 2);
            if (
                (min === null && max === null) ||
                (min === null && date <= max) ||
                (min <= date && max === null) ||
                (min <= date && date <= max)
            ) {
                return true;
            }
            return false;
        }
    );

    $(document).ready(function() {
        // Create date inputs
        minDate = new DateTime($('#min'), {
            format: 'MMMM Do YYYY'
        });
        maxDate = new DateTime($('#max'), {
            format: 'MMMM Do YYYY'
        });

        // Refilter the table
        $('#min, #max').on('change', function() {
            table.draw()
        });
    });
</script>

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