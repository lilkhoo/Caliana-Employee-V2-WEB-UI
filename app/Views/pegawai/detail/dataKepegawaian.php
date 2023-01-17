<?= $this->extend('template/master'); ?>
<?= $this->section('content'); ?>
<link rel="stylesheet" href="assets/css/detailSchedule.css">
<link rel="stylesheet" href="assets/css/detailPegawai.css">
<link rel="stylesheet" href="assets/css/master.css">
<link rel="stylesheet" href="assets/css/tambahPegawai.css">
<div id="layoutSidenav_content">
    <main>
        <?= $this->include('template/singleBreadcrumbDetailPegawai'); ?>

        <!-- START FORM -->
        <form action="#" method="post">
            <div class="container-fluid">
                <div class="card">
                    <div class="container-fluid mt-3">
                        <div class="row">
                            <div class="col-md-4">
                                <!-- CARD -->
                                <div class="card card-shape mt-4">
                                    <div class="card-header bg-headercard">
                                        <img src="/assets/img/profil3.jpg" alt="profile_picture" class="pict-header">
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
                                <?= $this->include('template/listgroup'); ?>
                            </div>
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-12 mt-3">
                                        <label class="namaDepan labelAdd" id="namaDepan-lbl" for="namaDepan">Nama
                                            Perusahaan</label><br>
                                        <p class="value-detail">PT Data Nusantara Adhikarya</p>
                                        <hr>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mt-3">
                                        <label class="idPegawai labelAdd" id="idPegawai-lbl" for="idPegawai">ID Pegawai
                                            :</label><br>
                                        <p class="value-detail">10</p>
                                        <hr>
                                    </div>
                                    <div class=" col-md-6 mt-3">
                                        <label class="lvlPegawai labelAdd" id="lvlPegawai-lbl" for="lvlPegawai">Level
                                            Pegawai :</label><br>
                                        <p class="value-detail">-</p>
                                        <hr>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mt-3">
                                        <label class="divisi labelAdd" id="divisi-lbl" for="divisi">Divisi Pekerjaan
                                            :</label><br>
                                        <p class="value-detail">Developer</p>
                                        <hr>
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <label class="posisi labelAdd" id="posisi-lbl" for="posisi">Posisi Pekerjaan
                                            :</label><br>
                                        <p class="value-detail">Fullstack Developer</p>
                                        <hr>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mt-3">
                                        <label class="statusPegawai labelAdd" id="statusPegawai-lbl" for="statusPegawai">Status Pegawai :</label><br>
                                        <p class="value-detail">Permanen</p>
                                        <hr>
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <label class="cabang labelAdd" id="cabang-lbl" for="cabang">Cabang :</label><br>
                                        <p class="value-detail">RK-9</p>
                                        <hr>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mt-3">
                                        <label class="gradePegawai labelAdd" id="gradePegawai-lbl" for="gradePegawai">Grade
                                            Pegawai :</label><br>
                                        <p class="value-detail">-</p>
                                        <hr>
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <label class="classPegawai labelAdd" id="classPegawai-lbl" for="classPegawai">Class
                                            Pegawai :</label><br>
                                        <p class="value-detail">-</p>
                                        <hr>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mt-3">
                                        <label class="tglGabung labelAdd" id="tglGabung-lbl" for="tglGabung">Tanggal
                                            Bergabung :</label><br>
                                        <p class="value-detail">11-11-2021</p>
                                        <hr>
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <label class="tglBerhenti labelAdd" id="tglBerhenti-lbl" for="tglBerhenti">Tanggal
                                            Berhenti :</label><br>
                                        <p class="value-detail">-</p>
                                        <hr>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mt-3">
                                        <label class="lamaBekerja labelAdd" id="lamaBekerja-lbl" for="lamaBekerja">Lama
                                            Bekerja :</label><br>
                                        <p class="value-detail">6 Bulan</p>
                                        <hr>
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <label class="jdwPembayaran labelAdd" id="jdwPembayaran-lbl" for="jdwPembayaran">Jadwal Pembayaran :</label><br>
                                        <p class="value-detail">-</p>
                                        <hr>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mt-3">
                                        <label class="shift labelAdd" id="shift-lbl" for="shift">Pilih Shift
                                            :</label><br>
                                        <p class="value-detail">N</p>
                                        <hr>
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <label class="role labelAdd" id="role-lbl" for="role">Role Akses :</label><br>
                                        <p class="value-detail">Employee</p>
                                        <hr>
                                    </div>
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
        </form>
    </main>
</div>
<?= $this->endSection(); ?>