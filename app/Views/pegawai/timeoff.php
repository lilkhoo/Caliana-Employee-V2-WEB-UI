<?= $this->extend('template/master'); ?>
<?= $this->section('navtop'); ?>
<?= $this->include('template/navbar'); ?>

<?= $this->endSection(); ?>
<?= $this->section('content'); ?>
<link rel="stylesheet" href="assets/css/kehadiran.css">
<link rel="stylesheet" href="assets/css/time-off.css">

<!-- DataTables -->
<link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

<!-- JQUERY FOR MOMENT JS DATE -->
<script src="/assets/vendor/jquery/jquery.min.js"></script>

<style>
   @import url('https://fonts.googleapis.com/css?family=Poppins:400,700,900');
</style>

<div id="layoutSidenav_content">
   <main>
      <div class="container-fluid px-4">
         <div class="row">

            <?= $this->include("template/singleBreadcrumbTimeoff"); ?>

            <div class="col">
               <div class="d-flex">
                  <!-- TRIGGER MODAL -->
                  <div class="mr-auto">
                     <button class="btn btn-primary btn-setting" style="padding-bottom: 20px;" data-bs-toggle="modal" data-bs-target="#modalToggle">
                        Time Off Setting
                     </button>
                  </div>

                  <!-- MODAL -->
                  <div class="modal fade" id="modalToggle" aria-hidden="true" aria-labelledby="modalToggleLabel" tabindex="-1">
                     <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                           <div class="modal-header">
                              <div class="col">
                                 <h5 class="modal-title text-center" id="modalToggleLabel">Time Off Settings</h5>
                              </div>
                              <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                           </div>
                           <div class="modal-body">

                              <table class="table table-hover">
                                 <thead>
                                    <tr>
                                       <th scope="col">No</th>
                                       <th scope="col">Time Off</th>
                                       <th scope="col">Jenis Time Off</th>
                                       <th scope="col">Kode</th>
                                       <th scope="col">Durasi</th>
                                       <th scope="col">Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>


                                    <tr>
                                       <td>1</td>
                                       <td>Cuti</td>
                                       <td>Cuti Tahunan</td>
                                       <td>CT</td>
                                       <td>12 Hari</td>
                                       <td class="actionModal">
                                          <a href="#" class="ml-2">
                                             <i class="fas fa-edit"></i>
                                          </a>
                                          <a href="#"><i class="fas fa-trash"></i></a>
                                       </td>
                                    </tr>

                                    <tr>
                                       <td>2</td>
                                       <td>Cuti</td>
                                       <td>Cuti Melahirkan</td>
                                       <td>CM</td>
                                       <td>90 Hari</td>
                                       <td class="actionModal">
                                          <a href="#" class="ml-2">
                                             <i class="fas fa-edit"></i>
                                          </a>
                                          <a href="#"><i class="fas fa-trash"></i></a>
                                       </td>
                                    </tr>

                                    <tr>
                                       <td>3</td>
                                       <td>Cuti</td>
                                       <td>Cuti Kerabat Meninggal</td>
                                       <td>CKM</td>
                                       <td>3 Hari</td>
                                       <td class="actionModal">
                                          <a href="#" class="ml-2">
                                             <i class="fas fa-edit"></i>
                                          </a>
                                          <a href="#"><i class="fas fa-trash"></i></a>
                                       </td>
                                    </tr>

                                    <tr>
                                       <td>4</td>
                                       <td>Dinas Luar</td>
                                       <td>Dinas Luar</td>
                                       <td>DL</td>
                                       <td>0 Hari</td>
                                       <td class="actionModal">
                                          <a href="#" class="ml-2">
                                             <i class="fas fa-edit"></i>
                                          </a>
                                          <a href="#"><i class="fas fa-trash"></i></a>
                                       </td>
                                    </tr>

                                    <tr>
                                       <td>5</td>
                                       <td>Sakit</td>
                                       <td>Sakit</td>
                                       <td>S</td>
                                       <td>0 Hari</td>
                                       <td class="actionModal">
                                          <a href="/#" class="ml-2">
                                             <i class="fas fa-edit"></i>
                                          </a>
                                          <a href="/#"><i class="fas fa-trash"></i></a>
                                       </td>
                                    </tr>


                                 </tbody>
                              </table>



                           </div>
                           <div class="modal-footer">
                              <button type="button" class="btn btn-primary btnKembaliModal" data-bs-dismiss="modal">Kembali</button>

                              <button class="btn btn-primary btnModal" data-bs-target="#modalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Tambah Time off</button>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="modal fade" id="modalToggle2" aria-hidden="true" aria-labelledby="modalToggleLabel2" tabindex="-1">
                     <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                           <div class="modal-header">
                              <div class="col">
                                 <h5 class="modal-title2 text-center" id="modalToggleLabel2">Tambah Time off</h5>

                              </div>
                              <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                           </div>
                           <div class="modal-body">

                              <div class="row" style="margin-left: 10px; ">
                                 <div class="col-sm-2 col-md-4 col-xl-6">
                                    <div class="form-group modalInput">
                                       <label for="timeOff" class="label-modal" id="timeOff-lbl">Time Off <small class="wajibIsi">*</small></label>
                                       <input type="text" name="timeOff" id="timeOff" class="inputext">

                                       <br><br>

                                       <label for="kodeTimeOff" class="label-modal" id="kodeTimeOff-lbl">Kode <small class="wajibIsi">*</small></label>
                                       <input type="text" name="kodeTimeOff" id="kodeTimeOff" class="inputext">
                                    </div>
                                 </div>

                                 <div class="col-sm-2 col-md-4 col-xl-6">
                                    <div class="form-group modalInput">
                                       <label for="jenisTimeOff" class="label-modal" id="jenisTimeOff-lbl">Jenis Time Off <small class="wajibIsi">*</small></label>
                                       <input type="text" name="jenisTimeOff" id="jenisTimeOff" class="inputext">

                                       <br><br>

                                       <label for="durasiTimeOff" class="label-modal" id="durasiTimeOff-lbl">Durasi (Hari)<small class="wajibIsi">*</small></label>
                                       <input type="text" name="durasiTimeOff" id="durasiTimeOff" class="inputext">
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="modal-footer">
                              <button class="btn btn-primary btnKembaliModal" data-bs-target="#modalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">Kembali</button>

                              <button class="btn btn-primary btnModal" data-bs-target="#modalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Tambah</button>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- END MODAL -->

                  <div class="ml-auto">
                     <small class="data-tanggal">Data Tanggal : </small>

                     <label for="" style="padding-top: 5px;">
                        <input type="date" value="<?php echo date('Y-m-d'); ?>">
                     </label>
                     <small style="color: #AAB2BB;">-</small>
                     <label for="" style="padding-right: 10px; padding-top: 5px;">
                        <input type="date" value="<?php echo date('Y-m-d'); ?>">
                     </label>
                     <button class="btn btn-primary btnExp eksportdata">Eksport Data</button>
                  </div>
               </div>

               <div class="card mb-4">    
                  <div class="card-header">
                     <i class="fas fa-table me-1"></i>
                     Daftar Time Off
                  </div>

                  <div class="card-body">
                     <div class="table-responsive ">
                        <table class="table table-hover" id="datatablesSimple">
                           <thead>
                              <tr>
                                 <th style="width: 10px;"></th>
                                 <th>Nama Pegawai</th>
                                 <th>Tanggal Pengajuan</th>
                                 <th>Waktu Pengajuan</th>
                                 <th>Status</th>
                                 <th>Jenis Time Off</th>
                                 <th>Proses</th>
                                 <th></th>
                              </tr>
                           </thead>

                           <tbody>
                              <tr>
                                 <td><img src="/assets/img/Ellipse1.png" class="rounded-circle" style="width:65px"></td>
                                 <td>
                                    <div class="col">Xander mount</div>
                                    <div class="col"><small>12007787</small></div>       
                                 </td>
                                 <td class="dateLocalDay"><?= date('d F Y'); ?></td>
                                 <td>07:00</td>
                                 <td>
                                    <span class="badge bg-merah">Ditolak</span>
                                 </td>
                                 <td>Dinas Luar</td>
                                 <!-- <td><?= date("h:i"); ?></td> -->
                                 <td>Middle Management</td>
                                 <td><a href="/detail-timeoff"><svg width="9" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M0.392867 0.394637C0.26833 0.518919 0.169527 0.666543 0.102113 0.829057C0.0347 0.991571 0 1.16579 0 1.34173C0 1.51767 0.0347 1.69188 0.102113 1.8544C0.169527 2.01691 0.26833 2.16454 0.392867 2.28882L5.60522 7.50117L0.392867 12.7135C0.141683 12.9647 0.000568833 13.3054 0.000568833 13.6606C0.000568833 14.0158 0.141683 14.3565 0.392867 14.6077C0.644051 14.8589 0.984729 15 1.33996 15C1.69518 15 2.03586 14.8589 2.28705 14.6077L8.45321 8.44154C8.57774 8.31726 8.67655 8.16964 8.74396 8.00712C8.81137 7.84461 8.84607 7.67039 8.84607 7.49445C8.84607 7.31851 8.81137 7.1443 8.74396 6.98178C8.67655 6.81927 8.57774 6.67165 8.45321 6.54736L2.28705 0.381203C1.77656 -0.129285 0.916789 -0.129285 0.392867 0.394637Z" fill="#AAB2BB" />
                                       </svg>
                                    </a></td>
                              </tr>

                              <tr>
                                 <td><img src="/assets/img/Ellipse2.png" class="rounded-circle" style="width:65px"></td>
                                 <td>
                                    <div class="col">Kusnadi</div>
                                    <div class="col"><small>12007788</small></div>
                                 </td>
                                 <td>Senin 12 Mei 2022</td>
                                 <td>08:00</td>
                                 <td>
                                    <span class="badge bg-kuning">Menunggu</span>
                                 </td>
                                 <td>Cuti</td>
                                 <td>Middle Management</td>
                                 <td><a href="/detail-kehadiran"><svg width="9" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M0.392867 0.394637C0.26833 0.518919 0.169527 0.666543 0.102113 0.829057C0.0347 0.991571 0 1.16579 0 1.34173C0 1.51767 0.0347 1.69188 0.102113 1.8544C0.169527 2.01691 0.26833 2.16454 0.392867 2.28882L5.60522 7.50117L0.392867 12.7135C0.141683 12.9647 0.000568833 13.3054 0.000568833 13.6606C0.000568833 14.0158 0.141683 14.3565 0.392867 14.6077C0.644051 14.8589 0.984729 15 1.33996 15C1.69518 15 2.03586 14.8589 2.28705 14.6077L8.45321 8.44154C8.57774 8.31726 8.67655 8.16964 8.74396 8.00712C8.81137 7.84461 8.84607 7.67039 8.84607 7.49445C8.84607 7.31851 8.81137 7.1443 8.74396 6.98178C8.67655 6.81927 8.57774 6.67165 8.45321 6.54736L2.28705 0.381203C1.77656 -0.129285 0.916789 -0.129285 0.392867 0.394637Z" fill="#AAB2BB" />
                                       </svg>
                                    </a></td>
                              </tr>

                              <tr>
                                 <td><img src="/assets/img/Ellipse3.png" class="rounded-circle" style="width:65px"></td>
                                 </td>
                                 <td>
                                    <div class="col">Kevin</div>
                                    <div class="col"><small>12007789</small></div>
                                 </td>
                                 <td>Jumat 4 Juli 2022</td>
                                 <td>07:30</td>
                                 <td>
                                    <span class="badge bg-hijau">Disetujui</span>
                                 </td>
                                 <td>Cuti</td>
                                 <td>-</td>
                                 <td><a href="/detail-kehadiran"><svg width="9" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M0.392867 0.394637C0.26833 0.518919 0.169527 0.666543 0.102113 0.829057C0.0347 0.991571 0 1.16579 0 1.34173C0 1.51767 0.0347 1.69188 0.102113 1.8544C0.169527 2.01691 0.26833 2.16454 0.392867 2.28882L5.60522 7.50117L0.392867 12.7135C0.141683 12.9647 0.000568833 13.3054 0.000568833 13.6606C0.000568833 14.0158 0.141683 14.3565 0.392867 14.6077C0.644051 14.8589 0.984729 15 1.33996 15C1.69518 15 2.03586 14.8589 2.28705 14.6077L8.45321 8.44154C8.57774 8.31726 8.67655 8.16964 8.74396 8.00712C8.81137 7.84461 8.84607 7.67039 8.84607 7.49445C8.84607 7.31851 8.81137 7.1443 8.74396 6.98178C8.67655 6.81927 8.57774 6.67165 8.45321 6.54736L2.28705 0.381203C1.77656 -0.129285 0.916789 -0.129285 0.392867 0.394637Z" fill="#AAB2BB" />
                                       </svg>
                                    </a></td>
                              </tr>
                              <tr>
                                 <td><img src="/assets/img/Ellipse4.png" class="rounded-circle" style="width:65px"></td>
                                 </td>
                                 <td>
                                    <div class="col">Aripin</div>
                                    <div class="col"><small>12007789</small></div>
                                 </td>
                                 <td>Rabu 21 Juni 2022</td>
                                 <td>08:10</td>
                                 <td>
                                    <span class="badge bg-hijau">Disetujui</span>
                                 </td>
                                 <td>Dimas Luar</td>
                                 <td>Top Management</td>
                                 <td><a href="/detail-kehadiran"><svg width="9" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M0.392867 0.394637C0.26833 0.518919 0.169527 0.666543 0.102113 0.829057C0.0347 0.991571 0 1.16579 0 1.34173C0 1.51767 0.0347 1.69188 0.102113 1.8544C0.169527 2.01691 0.26833 2.16454 0.392867 2.28882L5.60522 7.50117L0.392867 12.7135C0.141683 12.9647 0.000568833 13.3054 0.000568833 13.6606C0.000568833 14.0158 0.141683 14.3565 0.392867 14.6077C0.644051 14.8589 0.984729 15 1.33996 15C1.69518 15 2.03586 14.8589 2.28705 14.6077L8.45321 8.44154C8.57774 8.31726 8.67655 8.16964 8.74396 8.00712C8.81137 7.84461 8.84607 7.67039 8.84607 7.49445C8.84607 7.31851 8.81137 7.1443 8.74396 6.98178C8.67655 6.81927 8.57774 6.67165 8.45321 6.54736L2.28705 0.381203C1.77656 -0.129285 0.916789 -0.129285 0.392867 0.394637Z" fill="#AAB2BB" />
                                       </svg>
                                    </a></td>
                              </tr>
                              <tr>
                                 <td><img src="/assets/img/Ellipse5.png" class="rounded-circle" style="width:65px"></td>
                                 </td>
                                 <td>
                                    <div class="col">Asep</div>
                                    <div class="col"><small>12007789</small></div>
                                 </td>
                                 <td>Rabu 5 Maret 2022</td>
                                 <td>07:15</td>
                                 <td>
                                    <span class="badge bg-kuning">Menunggu</span>
                                 </td>
                                 <td>Cuti</td>
                                 <td>Top Management</td>
                                 <td><a href="/detail-kehadiran"><svg width="9" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M0.392867 0.394637C0.26833 0.518919 0.169527 0.666543 0.102113 0.829057C0.0347 0.991571 0 1.16579 0 1.34173C0 1.51767 0.0347 1.69188 0.102113 1.8544C0.169527 2.01691 0.26833 2.16454 0.392867 2.28882L5.60522 7.50117L0.392867 12.7135C0.141683 12.9647 0.000568833 13.3054 0.000568833 13.6606C0.000568833 14.0158 0.141683 14.3565 0.392867 14.6077C0.644051 14.8589 0.984729 15 1.33996 15C1.69518 15 2.03586 14.8589 2.28705 14.6077L8.45321 8.44154C8.57774 8.31726 8.67655 8.16964 8.74396 8.00712C8.81137 7.84461 8.84607 7.67039 8.84607 7.49445C8.84607 7.31851 8.81137 7.1443 8.74396 6.98178C8.67655 6.81927 8.57774 6.67165 8.45321 6.54736L2.28705 0.381203C1.77656 -0.129285 0.916789 -0.129285 0.392867 0.394637Z" fill="#AAB2BB" />
                                       </svg>
                                    </a></td>
                              </tr>
                              <tr>
                                 <td><img src="/assets/img/Ellipse4.png" class="rounded-circle" style="width:65px"></td>
                                 </td>
                                 <td>
                                    <div class="col">Dalvin</div>
                                    <div class="col"><small>12007789</small></div>
                                 </td>
                                 <td>Kamis 10 Juli 2022</td>
                                 <td>07:25</td>
                                 <td>
                                    <span class="badge bg-merah">Ditolak</span>
                                 </td>
                                 <td>Dinas Luar</td>
                                 <td>-</td>
                                 <td><a href="/detail-kehadiran"><svg width="9" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M0.392867 0.394637C0.26833 0.518919 0.169527 0.666543 0.102113 0.829057C0.0347 0.991571 0 1.16579 0 1.34173C0 1.51767 0.0347 1.69188 0.102113 1.8544C0.169527 2.01691 0.26833 2.16454 0.392867 2.28882L5.60522 7.50117L0.392867 12.7135C0.141683 12.9647 0.000568833 13.3054 0.000568833 13.6606C0.000568833 14.0158 0.141683 14.3565 0.392867 14.6077C0.644051 14.8589 0.984729 15 1.33996 15C1.69518 15 2.03586 14.8589 2.28705 14.6077L8.45321 8.44154C8.57774 8.31726 8.67655 8.16964 8.74396 8.00712C8.81137 7.84461 8.84607 7.67039 8.84607 7.49445C8.84607 7.31851 8.81137 7.1443 8.74396 6.98178C8.67655 6.81927 8.57774 6.67165 8.45321 6.54736L2.28705 0.381203C1.77656 -0.129285 0.916789 -0.129285 0.392867 0.394637Z" fill="#AAB2BB" />
                                       </svg>
                                    </a></td>
                              </tr>
                              <tr>
                                 <td><img src="/assets/img/Ellipse4.png" class="rounded-circle" style="width:65px"></td>
                                 </td>
                                 <td>
                                    <div class="col">Dimas setiawan</div>
                                    <div class="col"><small>12007789</small></div>
                                 </td>
                                 <td>Senin 18 Januari 2022</td>
                                 <td>08:45</td>
                                 <td>
                                    <span class="badge bg-hijau">Disetujui</span>
                                 </td>
                                 <td>Dinas Luar</td>
                                 <td>Top Management</td>
                                 <td><a href="/detail-kehadiran"><svg width="9" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M0.392867 0.394637C0.26833 0.518919 0.169527 0.666543 0.102113 0.829057C0.0347 0.991571 0 1.16579 0 1.34173C0 1.51767 0.0347 1.69188 0.102113 1.8544C0.169527 2.01691 0.26833 2.16454 0.392867 2.28882L5.60522 7.50117L0.392867 12.7135C0.141683 12.9647 0.000568833 13.3054 0.000568833 13.6606C0.000568833 14.0158 0.141683 14.3565 0.392867 14.6077C0.644051 14.8589 0.984729 15 1.33996 15C1.69518 15 2.03586 14.8589 2.28705 14.6077L8.45321 8.44154C8.57774 8.31726 8.67655 8.16964 8.74396 8.00712C8.81137 7.84461 8.84607 7.67039 8.84607 7.49445C8.84607 7.31851 8.81137 7.1443 8.74396 6.98178C8.67655 6.81927 8.57774 6.67165 8.45321 6.54736L2.28705 0.381203C1.77656 -0.129285 0.916789 -0.129285 0.392867 0.394637Z" fill="#AAB2BB" />
                                       </svg>
                                    </a></td>
                              </tr>
                              <tr>
                                 <td><img src="/assets/img/Ellipse8.png" class="rounded-circle" style="width:65px"></td>
                                 </td>
                                 <td>
                                    <div class="col">Muhammad zahran</div>
                                    <div class="col"><small>12007789</small></div>
                                 </td>
                                 <td>Senin 11 Juli 2022</td>
                                 <td>08:55</td>
                                 <td>
                                    <span class="badge bg-merah">Ditolak</span>
                                 </td>
                                 <td>Cuti</td>
                                 <td>Top Management</td>
                                 <td><a href="/detail-kehadiran"><svg width="9" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M0.392867 0.394637C0.26833 0.518919 0.169527 0.666543 0.102113 0.829057C0.0347 0.991571 0 1.16579 0 1.34173C0 1.51767 0.0347 1.69188 0.102113 1.8544C0.169527 2.01691 0.26833 2.16454 0.392867 2.28882L5.60522 7.50117L0.392867 12.7135C0.141683 12.9647 0.000568833 13.3054 0.000568833 13.6606C0.000568833 14.0158 0.141683 14.3565 0.392867 14.6077C0.644051 14.8589 0.984729 15 1.33996 15C1.69518 15 2.03586 14.8589 2.28705 14.6077L8.45321 8.44154C8.57774 8.31726 8.67655 8.16964 8.74396 8.00712C8.81137 7.84461 8.84607 7.67039 8.84607 7.49445C8.84607 7.31851 8.81137 7.1443 8.74396 6.98178C8.67655 6.81927 8.57774 6.67165 8.45321 6.54736L2.28705 0.381203C1.77656 -0.129285 0.916789 -0.129285 0.392867 0.394637Z" fill="#AAB2BB" />
                                       </svg>
                                    </a></td>
                              </tr>
                              <tr>
                                 <td><img src="/assets/img/Ellipse9.png" class="rounded-circle" style="width:65px"></td>
                                 </td>
                                 <td>
                                    <div class="col">Eko</div>
                                    <div class="col"><small>12007789</small></div>
                                 </td>
                                 <td>Senin 11 juni 2022</td>
                                 <td>08:11</td>
                                 <td>
                                    <span class="badge bg-kuning">Menunggu</span>
                                 </td>
                                 <td>Dinas luar</td>
                                 <td>-</td>
                                 <td><a href="/detail-kehadiran"><svg width="9" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M0.392867 0.394637C0.26833 0.518919 0.169527 0.666543 0.102113 0.829057C0.0347 0.991571 0 1.16579 0 1.34173C0 1.51767 0.0347 1.69188 0.102113 1.8544C0.169527 2.01691 0.26833 2.16454 0.392867 2.28882L5.60522 7.50117L0.392867 12.7135C0.141683 12.9647 0.000568833 13.3054 0.000568833 13.6606C0.000568833 14.0158 0.141683 14.3565 0.392867 14.6077C0.644051 14.8589 0.984729 15 1.33996 15C1.69518 15 2.03586 14.8589 2.28705 14.6077L8.45321 8.44154C8.57774 8.31726 8.67655 8.16964 8.74396 8.00712C8.81137 7.84461 8.84607 7.67039 8.84607 7.49445C8.84607 7.31851 8.81137 7.1443 8.74396 6.98178C8.67655 6.81927 8.57774 6.67165 8.45321 6.54736L2.28705 0.381203C1.77656 -0.129285 0.916789 -0.129285 0.392867 0.394637Z" fill="#AAB2BB" />
                                       </svg>
                                    </a></td>
                              </tr>
                              <tr>
                                 <td><img src="/assets/img/Ellipse4.png" class="rounded-circle" style="width:65px"></td>
                                 </td>
                                 <td>
                                    <div class="col">Eko</div>
                                    <div class="col"><small>12007789</small></div>
                                 </td>
                                 <td>Senin 19 juni 2022</td>
                                 <td>08:35</td>
                                 <td>
                                    <span class="badge bg-merah">Ditolak</span>
                                 </td>
                                 <td>Cuti</td>
                                 <td>HR</td>
                                 <td><a href="/detail-kehadiran"><svg width="9" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M0.392867 0.394637C0.26833 0.518919 0.169527 0.666543 0.102113 0.829057C0.0347 0.991571 0 1.16579 0 1.34173C0 1.51767 0.0347 1.69188 0.102113 1.8544C0.169527 2.01691 0.26833 2.16454 0.392867 2.28882L5.60522 7.50117L0.392867 12.7135C0.141683 12.9647 0.000568833 13.3054 0.000568833 13.6606C0.000568833 14.0158 0.141683 14.3565 0.392867 14.6077C0.644051 14.8589 0.984729 15 1.33996 15C1.69518 15 2.03586 14.8589 2.28705 14.6077L8.45321 8.44154C8.57774 8.31726 8.67655 8.16964 8.74396 8.00712C8.81137 7.84461 8.84607 7.67039 8.84607 7.49445C8.84607 7.31851 8.81137 7.1443 8.74396 6.98178C8.67655 6.81927 8.57774 6.67165 8.45321 6.54736L2.28705 0.381203C1.77656 -0.129285 0.916789 -0.129285 0.392867 0.394637Z" fill="#AAB2BB" />
                                       </svg>
                                    </a></td>
                              </tr>
                              <tr>
                                 <td><img src="/assets/img/Ellipse5.png" class="rounded-circle" style="width:65px"></td>
                                 </td>
                                 <td>
                                    <div class="col">Eko</div>
                                    <div class="col"><small>12007789</small></div>
                                 </td>
                                 <td>Senin 21 juni 2022</td>
                                 <td>07:59</td>
                                 <td>
                                    <span class="badge bg-hijau">Disetujui</span>
                                 </td>
                                 <td>Cuti</td>
                                 <td>Top Management</td>
                                 <td><a href="/detail-kehadiran"><svg width="9" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M0.392867 0.394637C0.26833 0.518919 0.169527 0.666543 0.102113 0.829057C0.0347 0.991571 0 1.16579 0 1.34173C0 1.51767 0.0347 1.69188 0.102113 1.8544C0.169527 2.01691 0.26833 2.16454 0.392867 2.28882L5.60522 7.50117L0.392867 12.7135C0.141683 12.9647 0.000568833 13.3054 0.000568833 13.6606C0.000568833 14.0158 0.141683 14.3565 0.392867 14.6077C0.644051 14.8589 0.984729 15 1.33996 15C1.69518 15 2.03586 14.8589 2.28705 14.6077L8.45321 8.44154C8.57774 8.31726 8.67655 8.16964 8.74396 8.00712C8.81137 7.84461 8.84607 7.67039 8.84607 7.49445C8.84607 7.31851 8.81137 7.1443 8.74396 6.98178C8.67655 6.81927 8.57774 6.67165 8.45321 6.54736L2.28705 0.381203C1.77656 -0.129285 0.916789 -0.129285 0.392867 0.394637Z" fill="#AAB2BB" />
                                       </svg>
                                    </a></td>
                              </tr>
                              <tr>
                                 <td><img src="/assets/img/Ellipse8.png" class="rounded-circle" style="width:65px"></td>
                                 </td>
                                 <td>
                                    <div class="col">Jond Doe</div>
                                    <div class="col"><small>12007789</small></div>
                                 </td>
                                 <td>Senin 28 maret 2022</td>
                                 <td>07:40</td>
                                 <td>
                                    <span class="badge bg-hijau">Disetujui</span>
                                 </td>
                                 <td>Cuti</td>
                                 <td>Top Management</td>
                                 <td><a href="/detail-kehadiran"><svg width="9" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M0.392867 0.394637C0.26833 0.518919 0.169527 0.666543 0.102113 0.829057C0.0347 0.991571 0 1.16579 0 1.34173C0 1.51767 0.0347 1.69188 0.102113 1.8544C0.169527 2.01691 0.26833 2.16454 0.392867 2.28882L5.60522 7.50117L0.392867 12.7135C0.141683 12.9647 0.000568833 13.3054 0.000568833 13.6606C0.000568833 14.0158 0.141683 14.3565 0.392867 14.6077C0.644051 14.8589 0.984729 15 1.33996 15C1.69518 15 2.03586 14.8589 2.28705 14.6077L8.45321 8.44154C8.57774 8.31726 8.67655 8.16964 8.74396 8.00712C8.81137 7.84461 8.84607 7.67039 8.84607 7.49445C8.84607 7.31851 8.81137 7.1443 8.74396 6.98178C8.67655 6.81927 8.57774 6.67165 8.45321 6.54736L2.28705 0.381203C1.77656 -0.129285 0.916789 -0.129285 0.392867 0.394637Z" fill="#AAB2BB" />
                                       </svg>
                                    </a></td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>

            </div>
         </div>
      </div>
   </main>
</div>

<!-- Page level plugins -->
<script src="/assets/vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="/assets/js/demo/chart-area-demo.js"></script>
<script src="/assets/js/demo/chart-pie-demo.js"></script>

<!-- SweetAlert -->
<script src="assets/js/sweetalert2.all.js"></script>
<script src="assets/js/swalscript.js"></script>
<!-- DataTables -->
<script src="https://code.jquery.com/jquery-3.6.1.js"></script>
<script>
   $(document).ready(function() {
      $('#datatablesSimple').DataTable();
   });
</script>

<script src="/assets/js/moment/moment.js"></script>
<script src="/assets/js/moment/moment-with-locales.js"></script>
<script>
   $(document).ready(() => {
      moment.locale('id')
      $('.dateLocal').map((i, date) => {
         // $(date).html(moment.date($(date)))
         var dateLocal = moment($(date).html().replace(/\s/g, '')).format('DD MMMM YYYY')
         $(date).html(dateLocal)
      })

      $('.dateLocalToday').map((i, date) => {
         // $(date).html(moment.date($(date)))
         var dateLocal = moment($(date).html().replace(/\s/g, '')).format('[Today,] DD MMMM YYYY')
         $(date).html(dateLocal)
      })

      $('.dateLocalDay').map((i, date) => {
         // $(date).html(moment.date($(date)))
         var dateLocal = moment($(date).html().replace(/\s/g, '')).format('dddd[,] DD MMMM YYYY')
         $(date).html(dateLocal)
      })

      $('.dayLocal').map((i, day) => {
         var dayLocal = moment($(day).html().replace(/\s/g, '')).format('dddd')
         $(day).html(dayLocal)
      })
   });
</script>



<?= $this->endSection(); ?>