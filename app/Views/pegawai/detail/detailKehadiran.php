<?= $this->extend('template/master'); ?>
<?= $this->section('navtop'); ?>
<?= $this->include('template/navbar'); ?>

<?= $this->endSection(); ?>
<?= $this->section('content'); ?>
<link rel="stylesheet" href="assets/css/detailKehadiran.css">
<div id="layoutSidenav_content">
   <main>
      <div class="container-fluid">
         <div class="row">
            <?= $this->include("template/kehadiranBreadcrumb"); ?>
            <div class="col-sm-2 col-md-2 col-xl-3">
               <p class="jud1">Detail Kehadiran</p>
               <p class="jud2">Detail data kehadiran pegawai</p>
            </div>
            <div class="col mt-4 mr-4 text-end">
               <a href="/daftar-kehadiran" class="btn btn-primary btn-kembali">Kembali</a>
            </div>
         </div>
         <div class="dataGroup row">
            <div class="col-sm-12 col-md-5 col-lg-3 mt-5 data">
               <label class="lableDetail">Nama</label>
               <h4 class=" valueDetail mt-2">Xander Mount</h4>
               <hr style="width: 299px; margin-left: 5px;">

            </div>
            <div class="col-sm-12 col-md-5 col-lg-3 mt-5">
               <label class="lableDetail">Id Pegawai</label>
               <h4 class="valueDetail mt-2">12007787</h4>
               <hr style="width: 299px; margin-left: 5px;">

            </div>
         </div>
         <div class="dataGroup row">
            <div class="col-sm-12 col-md-5 col-lg-3 mt-3 data">
               <label class="lableDetail">Tanggal</label>
               <h4 class=" valueDetail mt-2">06 Agustus 2022</h4>
               <hr style="width: 299px; margin-left: 5px;">
            </div>
            <div class="col-sm-12 col-md-5 col-lg-3 mt-3">
               <label class="lableDetail">Status</label>
               <h4 class="valueDetail mt-2">Hadir</h4>
               <hr style="width: 299px; margin-left: 5px;">
            </div>
            <div class="dataGroup row">
               <div class="col-sm-12 col-md-6 col-lg-4 mt-3 data">
                  <label class="lableDetail mt">Keterangan</label>
                  <h4 class="valueDetail mt-2">-</h4>
                  <hr style="width: 750px; margin-left: 5px;">
               </div>
            </div>
            <div class="dataGroup row">
               <div class="col-sm-12 col-md-6 col-lg-3 mt-3 data">
                  <label class="lableDetail">Clock in</label>
                  <div class="card card-clock-in">
                     <p class="text-clock-in"><?= date("h:i"); ?></p>
                     <small class="gmt-clock-in">WIB</small>
                  </div>
               </div>

               <div class="col-sm-12 col-md-6 col-lg-3 mt-3">
                  <label class="lableDetail">Clock out</label>
                  <div class="card card-clock-out">
                     <p class="text-clock-out">17:00</p>
                     <small class="gmt-clock-out">WIB</small>
                  </div>
               </div>
            </div>


            <div class="dataGroup row">
               <div class="col-sm-12 col-md-6 col-lg-3 mt-4 data">
                  <label class="lableDetail">Location in</label>
                  <div class="map">
                     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.992619284611!2d106.79801959999999!3d-6.264699899999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f19930122a63%3A0x1833fe77661ae5eb!2sGraha%20Mas%20Fatmawati%2C%20Jl.%20Fatmawati%20Blok%20B%20No.9%2C%20RT.2%2FRW.5%2C%20Cipete%20Utara%2C%20Kec.%20Kby.%20Baru%2C%20Kota%20Jakarta%20Selatan%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2012410!5e0!3m2!1sid!2sid!4v1660781451120!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </div>
               </div>

               <div class="col-sm-12 col-md-6 col-lg-5 mt-4">
                  <label class="lableDetail">Location Out</label>
                  <div class="map">
                     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.992619284611!2d106.79801959999999!3d-6.264699899999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f19930122a63%3A0x1833fe77661ae5eb!2sGraha%20Mas%20Fatmawati%2C%20Jl.%20Fatmawati%20Blok%20B%20No.9%2C%20RT.2%2FRW.5%2C%20Cipete%20Utara%2C%20Kec.%20Kby.%20Baru%2C%20Kota%20Jakarta%20Selatan%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2012410!5e0!3m2!1sid!2sid!4v1660781451120!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </div>
               </div>
            </div>
         </div>
   </main>
</div>

<?= $this->endSection(); ?>