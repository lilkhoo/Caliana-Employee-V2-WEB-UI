<?= $this->extend('template/master'); ?>
<?= $this->section('navtop'); ?>
<?= $this->include('template/navbar'); ?>

<?= $this->endSection(); ?>
<?= $this->section('content'); ?>
<link rel="stylesheet" href="assets/css/detailSchedule.css">
<link rel="stylesheet" href="assets/css/detailPegawai.css">
<link rel="stylesheet" href="assets/css/master.css">
<link rel="stylesheet" href="assets/css/tambahPegawai.css">
<div id="layoutSidenav_content">
    <main>
        <?= $this->include('template/singleBreadcrumbDetailPegawai'); ?>
        <div class="container-fluid">
            <div class="card">
                <div class="container-fluid mt-3">
                    <div class="row">
                        <div class="col-md-4">
                            <!-- CARD -->
                            <div class="card card-shape mt-4">
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
                            <!-- <img src="assets/img/profil1.jpg" alt="" style="width: 100%;"> -->
                            <?= $this->include('template/listgroup'); ?>
                        </div>
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-6 mt-3">
                                    <label class="namaDepan label-detail" id="namaDepan-lbl" for="namaDepan">Nama
                                        :</label><br>
                                    <p class="value-detail">Eko</p>
                                    <hr>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <p class="value-detail" style="margin-top: 40px;">Eko</p>
                                    <hr>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mt-3">
                                    <label class="noKTP label-detail" id="noKTP-lbl" for="namaDepan">Nomor KTP
                                        :</label><br>
                                    <p class="value-detail">123456789</p>
                                    <hr>
                                </div>
                                <div class=" col-md-6 mt-3">
                                    <label class="email label-detail" id="email-lbl" for="email">Email :</label><br>
                                    <p class="value-detail">webowomaterials123@gmail.com</p>
                                    <hr>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mt-3">
                                    <label class="alamat label-detail" id="alamat-lbl" for="alamat">Alamat ID
                                        :</label><br>
                                    <p class="value-detail">Jln Veteran III</p>
                                    <hr>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label class="alamatDomisili label-detail" id="alamatDomisili-lbl" for="alamatDomisili">Alamat Domisili :</label><br>
                                    <p class="value-detail">Jln Veteran III</p>
                                    <hr>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mt-3">
                                    <label class="noTelp label-detail" id="noTelp-lbl" for="noTelp">Nomor Telepon
                                        :</label><br>
                                    <p class="value-detail">08123456789</p>
                                    <hr>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label class="mobilePhone label-detail" id="mobilePhone-lbl" for="mobilePhone">Mobile
                                        Phone :</label><br>
                                    <p class="value-detail">08123456789</p>
                                    <hr>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mt-3">
                                    <label class="tempatLahir label-detail" id="tempatLahir-lbl" for="tempatLahir">Tempat
                                        Lahir :</label><br>
                                    <p class="value-detail">Tangerang</p>
                                    <hr>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label class="tglLahir labelAdd" id="tglLahir-lbl" for="tglLahir">Tanggal Lahir
                                        :</label><br>
                                    <p class="value-detail">11-11-2004</p>
                                    <hr>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mt-3">
                                    <label class="jenisKelamin label-detail" id="jenisKelamin-lbl" for="jenisKelamin">Jenis
                                        Kelamin :</label><br>
                                    <p class="value-detail">Laki-laki</p>
                                    <hr>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label class="agama label-detail" id="agama-lbl" for="agama">Agama :</label><br>
                                    <p class="value-detail">Islam</p>
                                    <hr>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 mt-3">
                                    <label class="status label-detail" id="status-lbl" for="status">Status Perkawinan
                                        :</label><br>
                                    <p class="value-detail">Belum Kawin</p>
                                    <hr>
                                </div>

                                <!-- <div class="col-md-6 mt-3">
                                    <label class="password label-detail" id="password-lbl" for="password">Kata Sandi
                                        :</label><br>
                                    <p class="value-detail">*******</p>
                                    <hr>
                                </div> -->

                            </div>
                            <div class="row">
                                <div class="col-md-6 mt-3">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <a href="/edit-data-diri" class="btn btn-success btn-edit" style="width: 100%;">Edit
                                        Data</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

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