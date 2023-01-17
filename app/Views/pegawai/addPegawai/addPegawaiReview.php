<?= $this->extend('template/master'); ?>
<?= $this->section('content'); ?>
<link rel="stylesheet" href="assets/css/tambahPegawai.css">
<link rel="stylesheet" href="assets/css/detailPegawai.css">

<div id="layoutSidenav_content">
    <main>

        <!-- START FORM -->
        <form action="" method="post">
            <div class="container-fluid">
                <div class="card">
                    <div class="container-fluid mt-3">
                        <div class="row">
                            <div class="col-md-4">
                                <!-- CARD -->
                                <div class="card bg-cardGradient mt-4">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="d-flex justify-content-end">
                                                <img src="/assets/img/persegipanjang1.png" class="new-image" alt="..." id="frame">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <img src="/assets/img/persegipanjang2.png" class="new-image2" alt="..." id="frame">
                                        </div>
                                    </div>

                                    <!-- CARD BODY -->
                                    <div class="card-body">
                                        <h5 class="card-title addTitle-card">Tinjauan Tambah Data</h5>
                                        <h5 class="card-text addBody-card">Text</h5>
                                    </div>
                                </div>
                                <div class="page text-center">
                                    <span class="dot1"></span>
                                    <span class="dot1"></span>
                                    <span class="dot1"></span>
                                    <span class="dotActive"></span>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-6 mt-3">
                                        <label class="namaDepan label-detail" id="namaDepan-lbl" for="namaDepan">Nama
                                            :</label><br>
                                        <p class="value-detail" id="namaDepan">Eko</p>
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
                                    <div class="col-md-6 mt-3">
                                        <label class="status label-detail" id="status-lbl" for="status">Status
                                            Perkawinan
                                            :</label><br>
                                        <p class="value-detail">Belum Kawin</p>
                                        <hr>
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <label class="status label-detail" id="status-lbl" for="status">Upload Foto
                                            :</label><br>
                                        <p class="value-detail">img_2021.jpg</p>
                                        <hr>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mt-3">
                                        <label class="namaDepan labelAdd " id="namaDepan-lbl" for="namaDepan">Nama
                                            Perusahaan</label><br>
                                        <p class="value-detail ">PT Data Nusantara Adhikarya</p>
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
                                        <label class="shift labelAdd" id="shift-lbl" for="shift">Pendidikan
                                            :</label><br>
                                        <p class="value-detail">S1 teknik</p>
                                        <hr>
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <label class="role labelAdd" id="role-lbl" for="role">Emergency Contact
                                            :</label><br>
                                        <p class="value-detail">081645795432</p>
                                        <hr>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mt-3">
                                        <label class="shift labelAdd" id="shift-lbl" for="shift">Upload Sertifikat
                                            :</label><br>
                                        <p class="value-detail">Sertifikat.jpg</p>
                                        <hr>
                                    </div>
                                </div>
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
                                        <label class="pemilikBPJSkes labelAdd" id="PTPKP-lbl" for="pemilikBPJSkes">PTKP
                                            :</label><br>
                                        <p class="value-detail">PTKP K/0</p>
                                        <hr>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mt-3">
                                        <a href="/tambah-datapenggajian" class="btn btn-danger btn-kembali" style="width: 100%;">Kembali</a>
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <a type="submit" class="btn btn-primary btn-perbarui" style="width: 100%;" id="review" onclick="alertsave()">Simpan</a>
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