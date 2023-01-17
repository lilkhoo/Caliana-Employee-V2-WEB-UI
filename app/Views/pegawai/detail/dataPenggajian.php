<?= $this->extend('template/master'); ?>
<?= $this->section('content'); ?>
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
                                        <label class="pemilikRekening labelAdd" id="pemilikRekening-lbl" for="pemilikRekening">Nama Pemilik Rekening :</label><br>
                                        <p class="value-detail">Eko Setyono Wibowo</p>
                                        <hr>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mt-3">
                                        <label class="bank labelAdd" id="bank-lbl" for="bank">Bank :</label><br>
                                        <p class="value-detail">BCA</p>
                                        <hr>
                                    </div>
                                    <div class=" col-md-6 mt-3">
                                        <label class="noRekening labelAdd" id="noRekening-lbl" for="noRekening">Nomor
                                            Rekening :</label>
                                        <p class="value-detail">12345678</p>
                                        <hr>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mt-3">
                                        <label class="uploadNPWP labelAdd" id="uploadNPWP-lbl" for="uploadNPWP">Upload
                                            NPWP :</label><br>
                                        <p class="value-detail">12007787</p>
                                        <hr>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mt-3">
                                        <label class="namaPemilikNPWP labelAdd" id="namaPemilikNPWP-lbl" for="namaPemilikNPWP">Nama Pemilik NPWP :</label><br>
                                        <p class="value-detail">Eko Setyono Wibowo</p>
                                        <hr>
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <label class="noNPWP labelAdd" id="noNPWP-lbl" for="noNPWP">Nomor NPWP
                                            :</label>
                                        <p class="value-detail">123456789</p>
                                        <hr>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mt-3">
                                        <label class="uploadBPJSkes labelAdd" id="uploadBPJSkes-lbl" for="uploadBPJSkes">Upload BPJS Kesehatan :</label><br>
                                        <p class="value-detail">IMG-207</p>
                                        <hr>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-6 mt-3">
                                        <label class="pemilikBPJSkes labelAdd" id="pemilikBPJSkes-lbl" for="pemilikBPJSkes">Nama Pemilik BPJS Kesehatan :</label><br>
                                        <p class="value-detail">Eko Setyono Wibowo</p>
                                        <hr>
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <label class="noBPJSkes labelAdd" id="noBPJSkes-lbl" for="noBPJSkes">Nomor
                                            BPJS Kesehatan :</label>
                                        <p class="value-detail">123456789</p>
                                        <hr>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mt-3">
                                        <label class="uploadBPJSket labelAdd" id="uploadBPJSket-lbl" for="uploadBPJSket">Upload BPJS Ketenagakerjaan :</label><br>
                                        <p class="value-detail">IMG-2008</p>
                                        <hr>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mt-3">
                                        <label class="pemilikBPJSkes labelAdd" id="pemilikBPJSkes-lbl" for="pemilikBPJSkes">Nama Pemilik BPJS Kesehatan :</label><br>
                                        <p class="value-detail">Eko Setyono Wibowo</p>
                                        <hr>
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <label class="noBPJSket labelAdd" id="noBPJSket-lbl" for="noBPJSket">Nomor
                                            BPJS Ketenagakerjaan :</label>
                                        <p class="value-detail">123456789</p>
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