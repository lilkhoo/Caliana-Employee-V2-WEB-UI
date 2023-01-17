<?= $this->extend('template/master'); ?>
<?= $this->section('navtop'); ?>
<?= $this->include('template/navbar'); ?>

<?= $this->endSection(); ?>
<?= $this->section('content'); ?>
<link rel="stylesheet" href="assets/css/detailSchedule.css">
<div id="layoutSidenav_content">
   <main>
      <div class="container-fluid">
         <div class="row">
            <?= $this->include("template/custBreadcrumb"); ?>
            <div class="col-sm-4">
               <p class="jud1">Detail Schedule Pegawai</p>
               <p class="jud2">Silahkan lihat atau edit schedule pegawai </p>
            </div>
            <div class="col mt-4 mr-4 text-end">
               <a href="/daftar-schedule" class="btn btn-primary btn-kembali">Kembali</a>
            </div>
         </div>
         <div class="dataGroup row">
            <div class="col-sm-12 col-md-6 col-lg-3 mt-5 data">
               <label class="lableDetail">Nama</label>
               <h4 class=" valueDetail mt-2">Xander Mount</h4>
               <hr style="width: 300px; margin-left: 5px;">
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3 mt-5">
               <label class="lableDetail">Id Pegawai</label>
               <h4 class="valueDetail mt-2">11404413</h4>
               <hr style="width: 300px; margin-left: 5px;">

            </div>
         </div>
         <div class="dataGroup row">
            <div class="col-sm-12 col-md-6 col-lg-3 mt-2 data">
               <label class="lableDetail">Divisi</label>
               <h4 class=" valueDetail mt-2">General</h4>
               <hr style="width: 300px; margin-left: 5px;">

            </div>
            <div class="col-sm-12 col-md-6 col-lg-3 mt-2">
               <label class="lableDetail">Posisi Pekerjaan</label>
               <h4 class="valueDetail mt-2">Staff Finance</h4>
               <hr style="width: 300px; margin-left: 5px;">

            </div>
         </div>
         <div class="dataGroup row">
            <div class="col-sm-12 col-md-6 col-lg-3 mt-2 data">
               <label class="lableDetail">Shift</label>
               <h4 class=" valueDetail mt-2">Normal</h4>
               <hr style="width: 300px; margin-left: 5px;">

            </div>
            <div class="col-sm-12 col-md-6 col-lg-3 mt-2">
               <label class="lableDetail">Jam Kerja</label>
               <h4 class="valueDetail mt-2">08.00 - 17.00 WIB</h4>
               <hr style="width: 300px; margin-left: 5px;">

            </div>
         </div>
         <div class="dataGroup row">
            <div class="col-sm-12 col-md-6 col-lg-6 mt-4 text-end">
               <a href="/tambah-schedule" class="btn btn-success btn-custom">Custom</a>
               <a href="/daftar-schedule" class="btn btn-danger btn-save">Simpan</a>
            </div>
         </div>
      </div>
   </main>
</div>

<?= $this->endSection(); ?>