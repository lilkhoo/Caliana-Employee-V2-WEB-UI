<?= $this->extend('template/master'); ?>
<?= $this->section('content'); ?>
<link rel="stylesheet" href="assets/css/detailPegawai.css">
<link rel="stylesheet" href="assets/css/master.css">
<link rel="stylesheet" href="assets/css/tambahPegawai.css">
<div id="layoutSidenav_content">
   <main>
      <?= $this->include('template/breadcrumb'); ?>
      <!-- START FORM -->
      <form action="#" method="post">
         <div class="container-fluid">
            <div class="card">
               <div class="container-fluid mt-3">
                  <div class="row">
                     <div class="col-md-4">
                        <!-- CARD -->
                        <div class="card mt-4">
                           <div class="card-header bg-headercard">
                              <img src="/assets/img/Ellipse2.png" alt="profile_picture" class="pict-header">
                           </div>
                           <div class="card-body body-card">
                              <h5 class="title-card">Eko Setyono Wibowo</h5>
                              <h5 class="card-subtitle title-card2">Fullstack Developer</h5>

                              <hr>

                              <!-- CARD BODY -->
                              <h5 class="card-text title-card2">Status Pegawai <span class="titikdua">:</span> <strong class="font-bold">Permanen</strong></h5>
                              <h5 class="card-text title-card2">Level Pegawai <span class="titikdua2">:</span> <strong class="font-bold">Staff</strong></h5>
                           </div>
                        </div>
                        <?= $this->include('template/listgroup-edit'); ?>
                     </div>
                     <div class="col-md-8">
                        <div class="row">
                           <div class="col-md-12 mt-3">
                              <label class="pemilikRekening labelAdd" id="pemilikRekening-lbl" for="pemilikRekening">Nama Pemilik Rekening :</label><br>
                              <input type="text" class="input-tambah form-control" name="pemilikRekening" id="pemilikRekening" placeholder="Masukan nama pemilik rekening">
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-6 mt-3">
                              <label class="bank labelAdd" id="bank-lbl" for="bank">Bank :</label><br>
                              <input type=" text" class="input-tambah form-control" placeholder="Pilih bank" required>

                           </div>
                           <div class=" col-md-6 mt-3">
                              <label class="noRekening labelAdd" id="noRekening-lbl" for="noRekening">Nomor
                                 Rekening :</label>
                              <input type="text" class="input-tambah form-control" placeholder="Masukan nomor rekening" required>

                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-12 mt-3">
                              <label class="uploadNPWP labelAdd" id="uploadNPWP-lbl" for="uploadNPWP">Upload
                                 NPWP :</label><br>
                              <input type="file" class="input-tambah form-control" style="height: 27px;" placeholder="IMG-2991" required>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-6 mt-3">
                              <label class="namaPemilikNPWP labelAdd" id="namaPemilikNPWP-lbl" for="namaPemilikNPWP">Nama Pemilik NPWP :</label><br>
                              <input type="text" class="input-tambah form-control" placeholder="Masukan nama penilik sesuai NPWP" required>
                           </div>
                           <div class="col-md-6 mt-3">
                              <label class="noNPWP labelAdd" id="noNPWP-lbl" for="noNPWP">Nomor NPWP
                                 :</label>
                              <input type="text" class="input-tambah form-control" placeholder="Masukan nomor NPWP" required>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-12 mt-3">
                              <label class="uploadBPJSkes labelAdd" id="uploadBPJSkes-lbl" for="uploadBPJSkes">Upload BPJS Kesehatan :</label><br>
                              <input type="file" class="input-tambah form-control" style="height: 27px;" placeholder="IMG-207" required>
                           </div>

                        </div>
                        <div class="row">
                           <div class="col-md-6 mt-3">
                              <label class="pemilikBPJSkes labelAdd" id="pemilikBPJSkes-lbl" for="pemilikBPJSkes">Nama Pemilik BPJS Kesehatan :</label><br>
                              <input type="text" class="input-tambah form-control" placeholder="Masukan nama pemilik BPJS" required>
                           </div>
                           <div class="col-md-6 mt-3">
                              <label class="noBPJSkes labelAdd" id="noBPJSkes-lbl" for="noBPJSkes">Nomor
                                 BPJS Kesehatan :</label>
                              <input type="text" class="input-tambah form-control" placeholder="Masukan nomor BPJS" required>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-12 mt-3">
                              <label class="uploadBPJSket labelAdd" id="uploadBPJSket-lbl" for="uploadBPJSket">Upload BPJS Ketenagakerjaan :</label><br>
                              <input type="file" class="input-tambah form-control file-input" style="height: 27px;" placeholder="IMG-2008" required>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-6 mt-3">
                              <label class="pemilikBPJSkes labelAdd" id="pemilikBPJSkes-lbl" for="pemilikBPJSkes">Nama Pemilik BPJS Kesehatan :</label><br>
                              <input type="text" class="input-tambah form-control" placeholder="Masukan nama pemilik BPJS" required>
                           </div>
                           <div class="col-md-6 mt-3">
                              <label class="noBPJSket labelAdd" id="noBPJSket-lbl" for="noBPJSket">Nomor
                                 BPJS Ketenagakerjaan :</label>
                              <input type="text" class="input-tambah form-control" placeholder="Masukan nomor BPJS" required>

                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-6 mt-3">
                              <!-- <a href="/detail-data-penggajian" class="btn btn-danger btn-kembali" style="width: 100%;">Kembali</a> -->
                              <a href="/daftar-pegawai" class="btn btn-danger btn-kembali" style="width: 100%;">Kembali</a>
                           </div>
                           <div class="col-md-6 mt-3">
                              <a class="btn btn-primary btn-perbarui " style="width: 100%;" onclick="alertedit()">Perbarui</a>
                           </div>
                        </div>



                     </div>
                  </div>
               </div>
            </div>
         </div>
      </form>
   </main>

</div>

<!-- SweetAlert -->
<script src="assets/js/sweetalert2.all.js"></script>
<script src="assets/js/swalscript.js"></script>

<?= $this->endSection(); ?>