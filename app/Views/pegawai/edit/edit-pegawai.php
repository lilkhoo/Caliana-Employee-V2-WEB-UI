<?= $this->extend('template/master'); ?>
<?= $this->section('navtop'); ?>
<?= $this->include('template/navbar'); ?>

<?= $this->endSection(); ?>
<?= $this->section('content'); ?>
<!-- <link rel="stylesheet" href="assets/css/detailSchedule.css"> -->
<link rel="stylesheet" href="assets/css/detailPegawai.css">
<link rel="stylesheet" href="assets/css/master.css">
<link rel="stylesheet" href="assets/css/tambahPegawai.css">
<div id="layoutSidenav_content">
   <main>
      <?= $this->include('template/breadcrumb'); ?>
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
                        <div class="col-md-6 mt-3">
                           <label class="namaDepan labelAdd" id="namaDepan-lbl" for="namaDepan">Nama
                              :</label><br>
                           <input type="text" class="input-tambah form-control" name="namaDepan" id="namaDepan" placeholder="Eko" required disabled>
                        </div>
                        <div class="col-md-6 mt-3">
                           <input type="text" class="input-tambah form-control" name="namaDepan" id="namaDepan" placeholder="Wibowo" style="width: 100%; margin-top: 32px;" required disabled>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-6 mt-3">
                           <label class="noKTP labelAdd" id="noKTP-lbl" for="namaDepan">Nomor KTP
                              :</label><br>
                           <input type="text" class="input-tambah form-control" name="noKTP" id="noKTP" placeholder="12007787" required disabled>

                        </div>
                        <div class="col-md-6 mt-3">
                           <label class="email labelAdd" id="email-lbl" for="email">Email :</label><br>
                           <input type="text" class="input-tambah form-control" name="email" id="email" placeholder="webowomaterials@gmail.com" required disabled>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-6 mt-3">
                           <label class="alamat labelAdd" id="alamat-lbl" for="alamat">Alamat ID
                              :</label><br>
                           <input type="text" class="input-tambah form-control" name="alamat" id="alamat" placeholder="Jln Veteran III" required disabled>
                        </div>
                        <div class="col-md-6 mt-3">
                           <label class="alamatDomisili labelAdd" id="alamatDomisili-lbl" for="alamatDomisili">Alamat Domisili :</label><br>
                           <input t ype="text" class="input-tambah form-control" name="alamatDomisili" id="alamatDomisili" placeholder="Jln Veteran III" required disabled>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-6 mt-3">
                           <label class="noTelp labelAdd" id="noTelp-lbl" for="noTelp">Nomor Telepon
                              :</label><br>
                           <input type="text" class="input-tambah form-control" name="noTelp" id="noTelp" placeholder="Masukan nomor telepon pegawai" required disabled>
                        </div>
                        <div class="col-md-6 mt-3">
                           <label class="mobilePhone labelAdd" id="mobilePhone-lbl" for="mobilePhone">Mobile
                              Phone :</label><br>
                           <input type="text" class="input-tambah form-control" name="mobilePhone" id="mobilePhone" placeholder="08123456789" required disabled>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-6 mt-3">
                           <label class="tempatLahir labelAdd" id="tempatLahir-lbl" for="tempatLahir">Tempat
                              Lahir :</label><br>
                           <input type="text" class="input-tambah form-control" name="tempatLahir" id="tempatLahir" placeholder="Tangerang" required disabled>
                        </div>
                        <div class="col-md-6 mt-3">
                           <label class="tglLahir labelAdd" id="tglLahir-lbl" for="tglLahir">Tanggal Lahir
                              :</label><br>
                           <input type="date" class="input-tambah form-control" name="tglLahir" id="tglLahir" placeholder="11-11-2004" required disabled>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-6 mt-3">
                           <label class="jenisKelamin labelAdd" id="jenisKelamin-lbl" for="jenisKelamin">Jenis
                              Kelamin :</label><br>
                           <select name="jenisKelamin" id="jenisKelamin-lbl" class="inputPegawai form-control" aria-placeholder="Pilih Jenis Kelamin" disabled>
                              <option class="optKelamin" disabled> Pilih jenis kelamin pegawai</option>
                              <option value="lakilaki" class="optKelamin" selected> Laki-laki</option>
                              <option value="perempuan" class="optKelamin"> Perempuan</option>
                           </select>
                        </div>
                        <div class="col-md-6 mt-3">
                           <label class="agama labelAdd" id="agama-lbl" for="agama">Agama :</label><br>
                           <select name="agama" id="agama-lbl" class="inputPegawai form-control" aria-placeholder="Pilih agama pegawai" disabled>
                              <option class="optAgama"> Pilih agama</option>
                              <option value="islam" class="optAgama" selected> Islam</option>
                              <option value="kristen" class="optAgama"> Kristen</option>
                              <option value="katolik" class="optAgama"> Katolik</option>
                              <option value="hindu" class="optAgama"> Hindu</option>
                              <option value="buddha" class="optAgama"> Buddha</option>
                              <option value="konghucu" class="optAgama"> Konghucu</option>
                           </select>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-12 mt-3">
                           <label class="status labelAdd" id="status-lbl" for="status">Status Perkawinan
                              :</label><br>
                           <input type="text" class="input-tambah form-control" name="status" id="status" placeholder="Belum Kawin" required disabled>
                        </div>

                        <!-- INPUTAN PASSWORD COL 6 -->
                        <!-- <div class="col-md-6 mt-3">
                           <label class="password labelAdd" id="password-lbl" for="password">Kata Sandi
                              :</label><br>
                           <input type="password" class="form-control cursPassword" name="password" id="password" placeholder="*********" required disabled>
                           <i class="bi bi-eye-slash field-icon" id="togglePassword"></i>
                        </div> -->

                     </div>
                     <div class="row">
                        <div class="col-md-6 mt-3">
                           <!-- <a href="/detail-data-diri" class="btn btn-danger btn-kembali" style="width: 100%;">Kembali</a> -->
                           <a href="/daftar-pegawai" class="btn btn-danger btn-kembali" style="width: 100%;">Kembali</a>
                        </div>
                        <div class="col-md-6 mt-3">
                           <a href="#" class="btn btn-primary btn-perbarui" style="width: 100%;" onclick="alertedit()">Perbarui</a>
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

<script>
   const togglePassword = document.querySelector("#togglePassword");
   const password = document.querySelector("#password");

   togglePassword.addEventListener("click", function() {
      // toggle the type attribute
      const type = password.getAttribute("type") === "password" ? "text" : "password";
      password.setAttribute("type", type);

      // toggle the icon
      this.classList.toggle("bi-eye");
   });

   // prevent form submit
   const form = document.querySelector("form");
   form.addEventListener('submit', function(e) {
      e.preventDefault();
   });
</script>

<?= $this->endSection(); ?>