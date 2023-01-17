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
                              <label class="namaDepan labelAdd" id="namaDepan-lbl" for="namaDepan">Nama
                                 Perusahaan</label><br>
                              <input type="text" class="input-tambah form-control" name="namaDepan" id="namaDepan" placeholder="PT Data Nusantara Adhikarya" required disabled>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-6 mt-3">
                              <label class="idPegawai labelAdd" id="idPegawai-lbl" for="idPegawai">ID Pegawai
                                 :</label><br>
                              <input type="text" class="input-tambah form-control" name="idPegawai" id="idPegawai" placeholder="Masukan ID pegawai" required>

                           </div>
                           <div class=" col-md-6 mt-3">
                              <label class="lvlPegawai labelAdd" id="lvlPegawai-lbl" for="lvlPegawai">Level
                                 Pegawai :</label><br>
                              <input type="text" class="input-tambah form-control" name="lvlPegawai" id="lvlPegawai" placeholder="Pilih tingkatan pegawai" required>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-6 mt-3">
                              <label class="divisi labelAdd" id="divisi-lbl" for="divisi">Divisi Pekerjaan
                                 :</label><br>
                              <input type="text" class="input-tambah form-control" name="divisi" id="divisi" placeholder="Masukan divisi pegawai" required>
                           </div>
                           <div class="col-md-6 mt-3">
                              <label class="posisi labelAdd" id="posisi-lbl" for="posisi">Posisi Pekerjaan
                                 :</label><br>
                              <input type="text" class="input-tambah form-control" name="posisi" id="posisi" placeholder="Masukan posisi pegawai" required>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-6 mt-3">
                              <label class="statusPegawai labelAdd" id="statusPegawai-lbl" for="statusPegawai">Status Pegawai :</label><br>
                              <input type="text" class="input-tambah form-control" name="statusPegawai" id="statusPegawai" placeholder="Masukan status pegawai" required>
                           </div>
                           <div class="col-md-6 mt-3">
                              <label class="cabang labelAdd" id="cabang-lbl" for="cabang">Cabang :</label><br>
                              <input type="text" class="input-tambah form-control" name="cabang" id="cabang" placeholder="Masukan cabang pegawai" required>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-6 mt-3">
                              <label class="gradePegawai labelAdd" id="gradePegawai-lbl" for="gradePegawai">Grade
                                 Pegawai :</label><br>
                              <input type="text" class="input-tambah form-control" name="gradePegawai" id="gradePegawai" placeholder="Masukan grade pegawai" required>
                           </div>
                           <div class="col-md-6 mt-3">
                              <label class="classPegawai labelAdd" id="classPegawai-lbl" for="classPegawai">Class
                                 Pegawai :</label><br>
                              <input type="text" class="input-tambah form-control" name="class" id="class" placeholder="Masukan class pegawai" required>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-6 mt-3">
                              <label class="tglGabung labelAdd" id="tglGabung-lbl" for="tglGabung">Tanggal
                                 Bergabung :</label><br>
                              <input type="date" class="input-tambah form-control" name="tglGabung" id="tglGabung" required>
                           </div>
                           <div class="col-md-6 mt-3">
                              <label class="tglBerhenti labelAdd" id="tglBerhenti-lbl" for="tglBerhenti">Tanggal
                                 Berhenti :</label><br>
                              <input type="date" class="input-tambah form-control" name="tglBerhenti" id="tglBerhenti" required>

                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-6 mt-3">
                              <label class="lamaBekerja labelAdd" id="lamaBekerja-lbl" for="lamaBekerja">Lama
                                 Bekerja :</label><br>
                              <input type="text" class="input-tambah form-control" name="lamaBekerja" id="lamaBekerja" placeholder="1 Tahun" required disabled>
                           </div>
                           <div class="col-md-6 mt-3">
                              <label class="jdwPembayaran labelAdd" id="jdwPembayaran-lbl" for="jdwPembayaran">Jadwal Pembayaran :</label><br>
                              <input type="text" class="input-tambah form-control" name="jdwPembayaran" id="jdwPembayaran" placeholder="Masukan jadwal pembayaran" required>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-6 mt-3">
                              <label class="shift labelAdd" id="shift-lbl" for="shift">Pilih Shift
                                 :</label><br>
                              <input type="text" class="input-tambah form-control" name="shift" id="shift" placeholder="Pilih shift" required>
                           </div>
                           <div class="col-md-6 mt-3">
                              <label class="role labelAdd" id="role-lbl" for="role">Role Akses :</label><br>
                              <input type="text" class="input-tambah form-control" name="role" id="role" placeholder="Pilih Role" required>

                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-6 mt-3">
                              <!-- <a href="/detail-data-kepegawaian" class="btn btn-danger btn-kembali" style="width: 100%;">Kembali</a> -->
                              <a href="/daftar-pegawai" class="btn btn-danger btn-kembali" style="width: 100%;">Kembali</a>
                           </div>
                           <div class="col-md-6 mt-3">
                              <a href="#" class="btn btn-primary btn-perbarui " style="width: 100%;" onclick="alertedit()">Perbarui</a>
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