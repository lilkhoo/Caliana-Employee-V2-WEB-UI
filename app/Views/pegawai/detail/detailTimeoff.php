<?= $this->extend('template/master'); ?>
<?= $this->section('navtop'); ?>
<?= $this->include('template/navbar'); ?>

<?= $this->endSection(); ?>
<?= $this->section('content'); ?>
<!-- <link rel="stylesheet" href="assets/css/time-off.css"> -->
<link rel="stylesheet" href="assets/css/detailTimeoff.css">
<div id="layoutSidenav_content">
   <main>
      <div class="container-fluid">
         <div class="row">
            <?= $this->include("template/timeoffBreadcrumb"); ?>
            <div class="col-sm-2 col-md-2 col-xl-3">
               <p class="jud1">Detail Time Off</p>
               <p class="jud2">Detail data Time Off pegawai</p>
            </div>
            <div class="col mt-4 mr-4 text-end">
               <a href="/daftar-time-off" class="btn btn-primary btn-kembali">Kembali</a>
            </div>
         </div>
         <div class="dataGroup row">
            <div class="col-sm-12 col-md-6 col-lg-3 mt-5 data">
               <label class="lableDetail">Nama</label>
               <h4 class=" valueDetail mt-2">Xander mount</h4>
               <hr style="width: 300px; margin-left: 5px;">
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3 mt-5">
               <label class="lableDetail">Id Pegawai</label>
               <h4 class="valueDetail mt-2">12007787</h4>
               <hr style="width: 300px; margin-left: 5px;">
            </div>
         </div>
         <div class="dataGroup row">
            <div class="col-sm-12 col-md-6 col-lg-3 mt-2 data">
               <label class="lableDetail">Tanggal Pengajuan</label>
               <h4 class=" valueDetail mt-2 dateLocalDay"><?= date('d F Y'); ?></h4>
               <hr style="width: 300px; margin-left: 5px;">
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3 mt-2">
               <label class="lableDetail">Waktu Pengajuan</label>
               <h4 class="valueDetail mt-2">07:00</h4>
               <hr style="width: 300px; margin-left: 5px;">
            </div>
         </div>
         <div class="dataGroup row">
            <div class="col-sm-12 col-md-6 col-lg-3 mt-2 data">
               <label class="lableDetail">Time Off</label>
               <h4 class=" valueDetail mt-2">Dinas Luar</h4>
               <hr style="width: 300px; margin-left: 5px;">
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3 mt-2">
               <label class="lableDetail">Jenis Time Off</label>
               <h4 class="valueDetail mt-2">Dinas Luar</h4>
               <hr style="width: 300px; margin-left: 5px;">
            </div>
         </div>

         <div class="dataGroup row">
            <div class="col-sm-12 col-md-6 col-lg-3 mt-2 data">
               <label class="lableDetail">Tanggal Mulai</label>
               <h4 class=" valueDetail mt-2">3 Agustus 2022</h4>
               <hr style="width: 300px; margin-left: 5px;">

            </div>
            <div class="col-sm-12 col-md-6 col-lg-3 mt-2">
               <label class="lableDetail">Tanggal Selesai</label>
               <h4 class="valueDetail mt-2">5 Agustus 2022</h4>
               <hr style="width: 300px; margin-left: 5px;">

            </div>
         </div>
         <div class="dataGroup row">
            <div class="col-sm-12 col-md-6 col-lg-3 mt-2 data">
               <label class="lableDetail mt">Keterangan</label>
               <h4 class="valueDetail mt-2">Liburan keluarga</h4>
               <hr style="width: 735px; margin-left: 5px;">
            </div>
         </div>
         <div class="dataGroup row">
            <div class="col-sm-12 col-md-6 col-lg-5 mt-4 text-end">
               <button class="btn btn-success btn-stj">Setuju</button>
               <button type="button" class="btn btn-danger btn-tlk" data-bs-toggle="modal" data-bs-target="#exampleModal">Tolak</button>
            </div>
         </div>
      </div>
   </main>
</div>
<!-- Modal Tolak detail timeoff -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <div class="col">
               <h5 class="modal-title text-center" id="modalToggleLabel">Alasan Penolakan :</h5>
            </div>
            <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
         </div>
         <div class="modal-body">
            <form>
               <div class="mb-3">
                  <label for="message-text" class="col-form-label">Alasan :</label>
                  <textarea class="form-control" id="message-text"></textarea>
               </div>
            </form>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-primary btnKembaliModal" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary btnModal" onclick="alertTolak()">Send message</button>
         </div>
      </div>
   </div>
</div>


<!-- SweetAlert -->
<script src="assets/js/sweetalert2.all.js"></script>
<script src="assets/js/swalscript.js"></script>

<?= $this->endSection(); ?>