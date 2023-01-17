<?= $this->extend('template/master'); ?>
<?= $this->section('navtop'); ?>
<?= $this->include('template/navbar'); ?>

<?= $this->endSection(); ?>
<?= $this->section('content'); ?>
<link rel="stylesheet" href="assets/css/pegawai_list.css">
<link rel="stylesheet" href="assets/css/kehadiran.css">
<link rel="stylesheet" href="assets/css/time-off.css">

<!-- JQUERY FOR MOMENT JS DATE -->
<script src="/assets/vendor/jquery/jquery.min.js"></script>

<!-- DataTables -->
<link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div class="row">
                <?= $this->include("template/customBreadcrumbSchedule"); ?>
                <div class="col">

                    <div class="d-flex mb-3">
                        <div class="mr-auto">
                            <a href="/detail-schedule" class="btn btn-primary btn-kembali">Kembali</a>
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

                            <button class="btn btn-primary btnExp">Eksport Data</button>
                        </div>
                    </div>

                    <!-- <div class="d-flex flex-row-reverse" style="margin-bottom: 50px;">
                        <button class="btn btn-primary btn-exp mt-1">Eksport Data</button>
                        <label for="" style="padding-right: 10px; padding-top: 5px; margin-right: 120px;">
                            <input type="date">
                        </label>
                        <label for="" style="padding-right: 10px; padding-top: 5px;">
                            <input type="date">
                        </label>

                        <small class="data-tanggal2">Data Tanggal : </small>
                    </div> -->



                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Schedule Data
                        </div>
                        <div class="card-body">
                            <table class="table tableHover">
                                <thead>
                                    <tr>
                                        <th><input type="checkbox"></th>
                                        <th style="width: 10px;"></th>
                                        <th>Nama Pegawai</th>
                                        <th>Hari</th>
                                        <th>Tanggal</th>
                                        <th>Shift</th>
                                        <th>Jadwal Kerja</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php for ($i = 0; $i < 30; $i++) : ?>
                                        <tr class="<?= ($i % 7 == 0 + 2 || $i % 7 == 0 + 3) ? 'weekend' : ''; ?>">
                                            <td><input type="checkbox"></td>
                                            <td><img src="/assets/img/Ellipse1.png" class="rounded-circle" style="width: 50px;"></td>
                                            <td>
                                                <div class="col">Xander Mount</div>
                                            </td>
                                            <td class="dayLocal">
                                                <?= date('Y F d', strtotime("$i day", strtotime($hari))) ?>
                                            </td>
                                            <td class="dateLocal"><?= date('Y F d', strtotime("$i day", strtotime($tahun))) ?></td>
                                            <td><select name="shift" id="shift">
                                                    <option value="pagi">Shift Pagi</option>
                                                    <option value="siang">Shift Siang</option>
                                                    <option value="malam">Shift Malam</option>
                                                </select></td>
                                            <td>08.00 - 17.00 WIB</td>
                                            <td>
                                                <a class="btn-edit">
                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" onclick="alertshift()" style="cursor: pointer;">
                                                        <path d="M0 2.5C0 1.83696 0.263392 1.20107 0.732233 0.732233C1.20107 0.263392 1.83696 0 2.5 0H12.9737C13.6367 0.000141594 14.2725 0.263627 14.7413 0.7325L16.7675 2.75875C17.2364 3.22748 17.4999 3.86326 17.5 4.52625V8.25C17.1005 8.04559 16.6818 7.88104 16.25 7.75875V4.52625C16.2499 4.19476 16.1182 3.87687 15.8837 3.6425L13.8575 1.61625C13.6231 1.38181 13.3052 1.25007 12.9737 1.25H12.5V4.375C12.5 4.87228 12.3025 5.34919 11.9508 5.70083C11.5992 6.05246 11.1223 6.25 10.625 6.25H5.625C5.12772 6.25 4.65081 6.05246 4.29917 5.70083C3.94754 5.34919 3.75 4.87228 3.75 4.375V1.25H2.5C2.16848 1.25 1.85054 1.3817 1.61612 1.61612C1.3817 1.85054 1.25 2.16848 1.25 2.5V15C1.25 15.3315 1.3817 15.6495 1.61612 15.8839C1.85054 16.1183 2.16848 16.25 2.5 16.25V10.625C2.5 10.1277 2.69754 9.65081 3.04917 9.29917C3.40081 8.94754 3.87772 8.75 4.375 8.75H10.4212C9.9175 9.105 9.4625 9.525 9.07125 10H4.375C4.20924 10 4.05027 10.0658 3.93306 10.1831C3.81585 10.3003 3.75 10.4592 3.75 10.625V16.25H7.75875C7.8825 16.6863 8.04625 17.1038 8.25 17.5H2.5C1.83696 17.5 1.20107 17.2366 0.732233 16.7678C0.263392 16.2989 0 15.663 0 15V2.5ZM5 1.25V4.375C5 4.54076 5.06585 4.69973 5.18306 4.81694C5.30027 4.93415 5.45924 5 5.625 5H10.625C10.7908 5 10.9497 4.93415 11.0669 4.81694C11.1842 4.69973 11.25 4.54076 11.25 4.375V1.25H5ZM20 14.375C20 15.8668 19.4074 17.2976 18.3525 18.3525C17.2976 19.4074 15.8668 20 14.375 20C12.8832 20 11.4524 19.4074 10.3975 18.3525C9.34263 17.2976 8.75 15.8668 8.75 14.375C8.75 12.8832 9.34263 11.4524 10.3975 10.3975C11.4524 9.34263 12.8832 8.75 14.375 8.75C15.8668 8.75 17.2976 9.34263 18.3525 10.3975C19.4074 11.4524 20 12.8832 20 14.375ZM17.3162 14.8175L17.32 14.8137C17.4345 14.6978 17.4991 14.5417 17.5 14.3787V14.3713C17.499 14.2071 17.4334 14.05 17.3175 13.9338L14.8175 11.4338C14.7003 11.3164 14.5413 11.2504 14.3754 11.2503C14.2096 11.2502 14.0505 11.3159 13.9331 11.4331C13.8158 11.5503 13.7498 11.7093 13.7497 11.8752C13.7495 12.041 13.8153 12.2001 13.9325 12.3175L15.3663 13.75H11.875C11.7092 13.75 11.5503 13.8158 11.4331 13.9331C11.3158 14.0503 11.25 14.2092 11.25 14.375C11.25 14.5408 11.3158 14.6997 11.4331 14.8169C11.5503 14.9342 11.7092 15 11.875 15H15.3663L13.9325 16.4325C13.8151 16.5499 13.7492 16.709 13.7492 16.875C13.7492 17.041 13.8151 17.2001 13.9325 17.3175C14.0499 17.4349 14.209 17.5008 14.375 17.5008C14.541 17.5008 14.7001 17.4349 14.8175 17.3175L17.3175 14.8175H17.3162Z" fill="#7AC162" />
                                                    </svg>

                                                </a>
                                            </td>
                                        </tr>
                                    <?php endfor; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

<script src="/assets/js/moment/moment.js"></script>
<script src="/assets/js/moment/moment-with-locales.js"></script>

<!-- SweetAlert -->
<script src="assets/js/sweetalert2.all.js"></script>
<script src="assets/js/swalscript.js"></script>

<!-- DataTables -->
<script src="https://code.jquery.com/jquery-3.6.1.js"></script>
<script>
    $(document).ready(function() {
        $('#datatablesSimple').DataTable();
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

        // $('.dateLocal2').map((i, date) => {
        //     // $(date).html(moment.date($(date)))
        //     var dateLocal = moment($(date).html().replace(/\s/g, '')).format('MMMM YYYY')
        //     $(date).html(dateLocal)
        // })

        $('.dayLocal').map((i, day) => {
            var dayLocal = moment($(day).html().replace(/\s/g, '')).format('dddd')
            $(day).html(dayLocal)
        })
    })
</script>



<?= $this->endSection(); ?>