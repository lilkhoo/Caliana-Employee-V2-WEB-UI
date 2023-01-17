<?= $this->extend('template/master'); ?>
<?= $this->section('navtop'); ?>
<?= $this->include('template/navbar'); ?>

<?= $this->endSection(); ?>
<?= $this->section('content'); ?>
<!-- <link rel="stylesheet" href="assets/css/detailSchedule.css"> -->
<link rel="stylesheet" href="assets/css/infosaya.css">
<div id="layoutSidenav_content">
   <main>
      <div class="container-fluid">
         <div class="card full-card">
            <div class="container-fluid mt-3">
               <div class="row">
                  <div class="col-md-4">
                     <!-- CARD -->
                     <div class="side-infosaya">
                        <?= $this->include('template/listgroup-infosaya'); ?>
                     </div>
                  </div>
                  <!-- INFO AKUN DAN PROFIL -->
                  <div class="col-md-8 garis">
                     <h1 class="judul-info">Akun & Profile</h1>

                     <h5 class="content-info">Informasi Profil</h5>
                     <hr>
                     <h5 class="content-info">Informasi Profil ini akan tampil sebagai user akun anda</h5>

                     <div class="positioning-card">
                        <div class="card adj-card">
                           <div class="row">
                              <div class="col-md-2">
                                 <img src="/assets/img/buletan-abu.png" alt="" class="adj-img">
                              </div>
                              <div class="col-md-3">
                                 <h5 class="info-nama">Nama</h5>
                                 <h5 class="info-nama2">Eko Setyono Wibowo</h5>
                              </div>
                              <div class="col-md-4">
                                 <h5 class="info-nama">Email</h5>
                                 <h5 class="info-nama2">bowo1120@gmail.com</h5>
                              </div>
                              <div class="col-md-3">
                                 <a href="#" class="btn btn-ubah">Ubah</a>
                              </div>
                           </div>
                        </div>
                     </div>


                     <!-- INFO PERUSAHAAN -->
                     <h5 class="content-info mt-5">Informasi Perusahaan</h5>
                     <hr>
                     <h5 class="content-info">Jika Anda memiliki Caliana Device, informasi perusahaan Anda akan muncul</h5>

                     <div class="positioning-card2">
                        <div class="card adj-card">
                           <div class="row">
                              <div class="col-md-2">
                                 <img src="/assets/img/dna-logo.png" alt="" class="adj-img2">
                              </div>
                              <div class="col-md-4">
                                 <h5 class="info-nama">Nama Perusahaan</h5>
                                 <h5 class="info-nama2">Data Nusantara Adhikarya</h5>
                              </div>
                              <div class="col-md-3">
                              </div>
                              <div class="col-md-3">
                                 <a href="#" class="btn btn-ubah">Ubah</a>
                              </div>
                           </div>
                        </div>
                     </div>

                  </div>
               </div>
            </div>
         </div>
      </div>
   </main>
</div>

<!-- SweetAlert -->
<script src="assets/js/sweetalert2.all.js"></script>
<script src="assets/js/swalscript.js"></script>

<?= $this->endSection(); ?>