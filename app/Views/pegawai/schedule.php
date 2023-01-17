<?= $this->extend('template/master'); ?>
<?= $this->section('navtop'); ?>
<?= $this->include('template/navbar'); ?>

<?= $this->endSection(); ?>
<?= $this->section('content'); ?>


<link rel="stylesheet" href="assets/css/kehadiran.css">

<!-- <link href="/assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet"> -->
<!-- <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"> -->

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
            <?= $this->include("template/singleBreadcrumbSchedule"); ?>
            <div class="col">
               <div class="card">
                  <div class="row">

                     <div class="col-md-2 col-sm-2 col-xl-4 borderDas">
                        <p class="labeldasKehadiran" style="padding-left: 20px; margin-top: 20px;">Data Yang
                           Ditampilkan Adalah Data Real Time</p>
                        <p class="fontdasKehadiran2 dateLocalToday"><?= date("d F Y"); ?></p>
                     </div>
                     <div class="col-md-5 col-sm-1 col-lg-6 col-xl-2 borderDas text-center">
                        <p class="labeldasKehadiran">Jumlah</p>
                        <p class="valuedasKehadiran">100</p>
                        <p class="textkehadiran">Pegawai</p>
                     </div>
                     <div class="col-md-5 col-sm-1 col-lg-6 col-xl-2 borderDas text-center">
                        <p class="labeldasKehadiran">Shift Pagi</p>
                        <p class="valuedasKehadiran">47</p>
                        <p class="textkehadiran">Pegawai</p>
                     </div>
                     <div class="col-md-5 col-sm-1 col-lg-6 col-xl-2 borderDas text-center">
                        <p class="labeldasKehadiran">Shift Siang</p>
                        <p class="valuedasKehadiran">13</p>
                        <p class="textkehadiran">Pegawai</p>
                     </div>
                     <div class="col-md-5 col-sm-1 col-lg-6 col-xl-2 borderDas2 text-center">
                        <p class="labeldasKehadiran">Shift Malam </p>
                        <p class="valuedasKehadiran">10</p>
                        <p class="textkehadiran">Pegawai</p>
                     </div>
                  </div>
               </div>
               <div class="col">
                  <div class="d-flex mt-3">

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
                        Daftar Schedule
                     </div>

                     <div class="card-body">
                        <div class="table-responsive">
                           <table class="table table-hover" id="datatablesSimple">
                              <thead>
                                 <tr>
                                    <th>
                                       <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M13.3333 0H1.66667C0.75 0 0 0.75 0 1.66667V13.3333C0 14.25 0.75 15 1.66667 15H13.3333C14.25 15 15 14.25 15 13.3333V1.66667C15 0.75 14.25 0 13.3333 0ZM13.3333 13.3333H1.66667V1.66667H13.3333V13.3333ZM3.33333 6.66667H11.6667V8.33333H3.33333V6.66667Z" fill="#AAB2BB" />
                                       </svg>

                                    </th>
                                    <th></th>
                                    <th>Nama Pegawai</th>
                                    <th>Divisi</th>
                                    <th>Posisi Pekerjaan</th>
                                    <th>Shift</th>
                                    <th>Jadwal Kerja</th>
                                    <th></th>
                                 </tr>
                              </thead>

                              <tbody>
                                 <tr>
                                    <td>
                                       <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M13.3333 0H1.66667C0.75 0 0 0.75 0 1.66667V13.3333C0 14.25 0.75 15 1.66667 15H13.3333C14.25 15 15 14.25 15 13.3333V1.66667C15 0.75 14.25 0 13.3333 0ZM13.3333 13.3333H1.66667V1.66667H13.3333V13.3333ZM3.33333 6.66667H11.6667V8.33333H3.33333V6.66667Z" fill="#AAB2BB" />
                                       </svg>

                                    </td>
                                    <td><img src="/assets/img/Ellipse1.png" class="rounded-circle" style="width:65px"></td>
                                    <td>
                                       <div class="col">Xander Mount</div>
                                       <div class="col"><small>12007787</small></div>
                                    </td>
                                    <td>Developer</td>
                                    <td>Fullstack Developer</td>
                                    <td>N</td>
                                    <td>17:00</td>
                                    <td><a href="/detail-schedule"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M16.8402 0L20.0001 3.15989L17.5912 5.56983L14.4313 2.40994L16.8402 0ZM5.2666 14.7335H8.42649L16.1019 7.05814L12.942 3.89825L5.2666 11.5736V14.7335Z" fill="#E6BF6E" />
                                             <path d="M16.8527 17.8934H5.4329C5.40552 17.8934 5.37708 17.9039 5.34969 17.9039C5.31493 17.9039 5.28018 17.8944 5.24436 17.8934H2.10659V3.14724H9.31851L11.4251 1.04065H2.10659C0.944807 1.04065 0 1.9844 0 3.14724V17.8934C0 19.0562 0.944807 20 2.10659 20H16.8527C17.4114 20 17.9473 19.778 18.3423 19.383C18.7374 18.9879 18.9593 18.4521 18.9593 17.8934V8.76342L16.8527 10.87V17.8934Z" fill="#E6BF6E" />
                                          </svg>
                                       </a></td>
                                 </tr>

                                 <tr>
                                    <td>
                                       <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M13.3333 0H1.66667C0.75 0 0 0.75 0 1.66667V13.3333C0 14.25 0.75 15 1.66667 15H13.3333C14.25 15 15 14.25 15 13.3333V1.66667C15 0.75 14.25 0 13.3333 0ZM13.3333 13.3333H1.66667V1.66667H13.3333V13.3333ZM3.33333 6.66667H11.6667V8.33333H3.33333V6.66667Z" fill="#AAB2BB" />
                                       </svg>

                                    </td>
                                    <td><img src="/assets/img/Ellipse2.png" class="rounded-circle" style="width:65px"></td>
                                    <td>
                                       <div class="col">Kusnadi</div>
                                       <div class="col"><small>12007788</small></div>
                                    </td>
                                    <td>Developer</td>
                                    <td>DevOps</td>
                                    <td>N</td>
                                    <td>17:00</td>
                                    <td><a href="/detail-schedule"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M16.8402 0L20.0001 3.15989L17.5912 5.56983L14.4313 2.40994L16.8402 0ZM5.2666 14.7335H8.42649L16.1019 7.05814L12.942 3.89825L5.2666 11.5736V14.7335Z" fill="#E6BF6E" />
                                             <path d="M16.8527 17.8934H5.4329C5.40552 17.8934 5.37708 17.9039 5.34969 17.9039C5.31493 17.9039 5.28018 17.8944 5.24436 17.8934H2.10659V3.14724H9.31851L11.4251 1.04065H2.10659C0.944807 1.04065 0 1.9844 0 3.14724V17.8934C0 19.0562 0.944807 20 2.10659 20H16.8527C17.4114 20 17.9473 19.778 18.3423 19.383C18.7374 18.9879 18.9593 18.4521 18.9593 17.8934V8.76342L16.8527 10.87V17.8934Z" fill="#E6BF6E" />
                                          </svg>
                                       </a></td>
                                 </tr>

                                 <tr>
                                    <td>
                                       <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M13.3333 0H1.66667C0.75 0 0 0.75 0 1.66667V13.3333C0 14.25 0.75 15 1.66667 15H13.3333C14.25 15 15 14.25 15 13.3333V1.66667C15 0.75 14.25 0 13.3333 0ZM13.3333 13.3333H1.66667V1.66667H13.3333V13.3333ZM3.33333 6.66667H11.6667V8.33333H3.33333V6.66667Z" fill="#AAB2BB" />
                                       </svg>

                                    </td>
                                    <td><img src="/assets/img/Ellipse3.png" class="rounded-circle" style="width:65px"></td>
                                    </td>
                                    <td>
                                       <div class="col">Kevin</div>
                                       <div class="col"><small>12007789</small></div>
                                    </td>
                                    <td>Developer</td>
                                    <td>Project Manager</td>
                                    <td>N</td>
                                    <td>17:00</td>
                                    <td><a href="/detail-schedule"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M16.8402 0L20.0001 3.15989L17.5912 5.56983L14.4313 2.40994L16.8402 0ZM5.2666 14.7335H8.42649L16.1019 7.05814L12.942 3.89825L5.2666 11.5736V14.7335Z" fill="#E6BF6E" />
                                             <path d="M16.8527 17.8934H5.4329C5.40552 17.8934 5.37708 17.9039 5.34969 17.9039C5.31493 17.9039 5.28018 17.8944 5.24436 17.8934H2.10659V3.14724H9.31851L11.4251 1.04065H2.10659C0.944807 1.04065 0 1.9844 0 3.14724V17.8934C0 19.0562 0.944807 20 2.10659 20H16.8527C17.4114 20 17.9473 19.778 18.3423 19.383C18.7374 18.9879 18.9593 18.4521 18.9593 17.8934V8.76342L16.8527 10.87V17.8934Z" fill="#E6BF6E" />
                                          </svg>
                                       </a></td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M13.3333 0H1.66667C0.75 0 0 0.75 0 1.66667V13.3333C0 14.25 0.75 15 1.66667 15H13.3333C14.25 15 15 14.25 15 13.3333V1.66667C15 0.75 14.25 0 13.3333 0ZM13.3333 13.3333H1.66667V1.66667H13.3333V13.3333ZM3.33333 6.66667H11.6667V8.33333H3.33333V6.66667Z" fill="#AAB2BB" />
                                       </svg>

                                    </td>
                                    <td><img src="/assets/img/Ellipse4.png" class="rounded-circle" style="width:65px"></td>
                                    </td>
                                    <td>
                                       <div class="col">Aripin</div>
                                       <div class="col"><small>12007789</small></div>
                                    </td>
                                    <td>Developer</td>
                                    <td>Project Manager</td>
                                    <td>N</td>
                                    <td>17:00</td>
                                    <td><a href="/detail-schedule"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M16.8402 0L20.0001 3.15989L17.5912 5.56983L14.4313 2.40994L16.8402 0ZM5.2666 14.7335H8.42649L16.1019 7.05814L12.942 3.89825L5.2666 11.5736V14.7335Z" fill="#E6BF6E" />
                                             <path d="M16.8527 17.8934H5.4329C5.40552 17.8934 5.37708 17.9039 5.34969 17.9039C5.31493 17.9039 5.28018 17.8944 5.24436 17.8934H2.10659V3.14724H9.31851L11.4251 1.04065H2.10659C0.944807 1.04065 0 1.9844 0 3.14724V17.8934C0 19.0562 0.944807 20 2.10659 20H16.8527C17.4114 20 17.9473 19.778 18.3423 19.383C18.7374 18.9879 18.9593 18.4521 18.9593 17.8934V8.76342L16.8527 10.87V17.8934Z" fill="#E6BF6E" />
                                          </svg>
                                       </a></td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M13.3333 0H1.66667C0.75 0 0 0.75 0 1.66667V13.3333C0 14.25 0.75 15 1.66667 15H13.3333C14.25 15 15 14.25 15 13.3333V1.66667C15 0.75 14.25 0 13.3333 0ZM13.3333 13.3333H1.66667V1.66667H13.3333V13.3333ZM3.33333 6.66667H11.6667V8.33333H3.33333V6.66667Z" fill="#AAB2BB" />
                                       </svg>

                                    </td>
                                    <td><img src="/assets/img/Ellipse5.png" class="rounded-circle" style="width:65px"></td>
                                    </td>
                                    <td>
                                       <div class="col">Asep</div>
                                       <div class="col"><small>12007789</small></div>
                                    </td>
                                    <td>Developer</td>
                                    <td>DevOps</td>
                                    <td>N</td>
                                    <td>17:00</td>
                                    <td><a href="/detail-schedule"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M16.8402 0L20.0001 3.15989L17.5912 5.56983L14.4313 2.40994L16.8402 0ZM5.2666 14.7335H8.42649L16.1019 7.05814L12.942 3.89825L5.2666 11.5736V14.7335Z" fill="#E6BF6E" />
                                             <path d="M16.8527 17.8934H5.4329C5.40552 17.8934 5.37708 17.9039 5.34969 17.9039C5.31493 17.9039 5.28018 17.8944 5.24436 17.8934H2.10659V3.14724H9.31851L11.4251 1.04065H2.10659C0.944807 1.04065 0 1.9844 0 3.14724V17.8934C0 19.0562 0.944807 20 2.10659 20H16.8527C17.4114 20 17.9473 19.778 18.3423 19.383C18.7374 18.9879 18.9593 18.4521 18.9593 17.8934V8.76342L16.8527 10.87V17.8934Z" fill="#E6BF6E" />
                                          </svg>
                                       </a></td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M13.3333 0H1.66667C0.75 0 0 0.75 0 1.66667V13.3333C0 14.25 0.75 15 1.66667 15H13.3333C14.25 15 15 14.25 15 13.3333V1.66667C15 0.75 14.25 0 13.3333 0ZM13.3333 13.3333H1.66667V1.66667H13.3333V13.3333ZM3.33333 6.66667H11.6667V8.33333H3.33333V6.66667Z" fill="#AAB2BB" />
                                       </svg>

                                    </td>
                                    <td><img src="/assets/img/Ellipse6.png" class="rounded-circle" style="width:65px"></td>
                                    </td>
                                    <td>
                                       <div class="col">Dalvin</div>
                                       <div class="col"><small>12007789</small></div>
                                    </td>
                                    <td>Developer</td>
                                    <td>Fullstack Developer</td>
                                    <td>N</td>
                                    <td>17:00</td>
                                    <td><a href="/detail-schedule"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M16.8402 0L20.0001 3.15989L17.5912 5.56983L14.4313 2.40994L16.8402 0ZM5.2666 14.7335H8.42649L16.1019 7.05814L12.942 3.89825L5.2666 11.5736V14.7335Z" fill="#E6BF6E" />
                                             <path d="M16.8527 17.8934H5.4329C5.40552 17.8934 5.37708 17.9039 5.34969 17.9039C5.31493 17.9039 5.28018 17.8944 5.24436 17.8934H2.10659V3.14724H9.31851L11.4251 1.04065H2.10659C0.944807 1.04065 0 1.9844 0 3.14724V17.8934C0 19.0562 0.944807 20 2.10659 20H16.8527C17.4114 20 17.9473 19.778 18.3423 19.383C18.7374 18.9879 18.9593 18.4521 18.9593 17.8934V8.76342L16.8527 10.87V17.8934Z" fill="#E6BF6E" />
                                          </svg>
                                       </a></td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M13.3333 0H1.66667C0.75 0 0 0.75 0 1.66667V13.3333C0 14.25 0.75 15 1.66667 15H13.3333C14.25 15 15 14.25 15 13.3333V1.66667C15 0.75 14.25 0 13.3333 0ZM13.3333 13.3333H1.66667V1.66667H13.3333V13.3333ZM3.33333 6.66667H11.6667V8.33333H3.33333V6.66667Z" fill="#AAB2BB" />
                                       </svg>

                                    </td>
                                    <td><img src="/assets/img/Ellipse7.png" class="rounded-circle" style="width:65px"></td>
                                    </td>
                                    <td>
                                       <div class="col">Dimas Setiawan</div>
                                       <div class="col"><small>12007789</small></div>
                                    </td>
                                    <td>Developer</td>
                                    <td>Project Manager</td>
                                    <td>N</td>
                                    <td>17:00</td>
                                    <td><a href="/detail-schedule"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M16.8402 0L20.0001 3.15989L17.5912 5.56983L14.4313 2.40994L16.8402 0ZM5.2666 14.7335H8.42649L16.1019 7.05814L12.942 3.89825L5.2666 11.5736V14.7335Z" fill="#E6BF6E" />
                                             <path d="M16.8527 17.8934H5.4329C5.40552 17.8934 5.37708 17.9039 5.34969 17.9039C5.31493 17.9039 5.28018 17.8944 5.24436 17.8934H2.10659V3.14724H9.31851L11.4251 1.04065H2.10659C0.944807 1.04065 0 1.9844 0 3.14724V17.8934C0 19.0562 0.944807 20 2.10659 20H16.8527C17.4114 20 17.9473 19.778 18.3423 19.383C18.7374 18.9879 18.9593 18.4521 18.9593 17.8934V8.76342L16.8527 10.87V17.8934Z" fill="#E6BF6E" />
                                          </svg>
                                       </a></td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M13.3333 0H1.66667C0.75 0 0 0.75 0 1.66667V13.3333C0 14.25 0.75 15 1.66667 15H13.3333C14.25 15 15 14.25 15 13.3333V1.66667C15 0.75 14.25 0 13.3333 0ZM13.3333 13.3333H1.66667V1.66667H13.3333V13.3333ZM3.33333 6.66667H11.6667V8.33333H3.33333V6.66667Z" fill="#AAB2BB" />
                                       </svg>

                                    </td>
                                    <td><img src="/assets/img/Ellipse8.png" class="rounded-circle" style="width:65px"></td>
                                    </td>
                                    <td>
                                       <div class="col">Muhammad Zahran</div>
                                       <div class="col"><small>12007789</small></div>
                                    </td>
                                    <td>Developer</td>
                                    <td>DevOps</td>
                                    <td>N</td>
                                    <td>17:00</td>
                                    <td><a href="/detail-schedule"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M16.8402 0L20.0001 3.15989L17.5912 5.56983L14.4313 2.40994L16.8402 0ZM5.2666 14.7335H8.42649L16.1019 7.05814L12.942 3.89825L5.2666 11.5736V14.7335Z" fill="#E6BF6E" />
                                             <path d="M16.8527 17.8934H5.4329C5.40552 17.8934 5.37708 17.9039 5.34969 17.9039C5.31493 17.9039 5.28018 17.8944 5.24436 17.8934H2.10659V3.14724H9.31851L11.4251 1.04065H2.10659C0.944807 1.04065 0 1.9844 0 3.14724V17.8934C0 19.0562 0.944807 20 2.10659 20H16.8527C17.4114 20 17.9473 19.778 18.3423 19.383C18.7374 18.9879 18.9593 18.4521 18.9593 17.8934V8.76342L16.8527 10.87V17.8934Z" fill="#E6BF6E" />
                                          </svg>
                                       </a></td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M13.3333 0H1.66667C0.75 0 0 0.75 0 1.66667V13.3333C0 14.25 0.75 15 1.66667 15H13.3333C14.25 15 15 14.25 15 13.3333V1.66667C15 0.75 14.25 0 13.3333 0ZM13.3333 13.3333H1.66667V1.66667H13.3333V13.3333ZM3.33333 6.66667H11.6667V8.33333H3.33333V6.66667Z" fill="#AAB2BB" />
                                       </svg>

                                    </td>
                                    <td><img src="/assets/img/Ellipse9.png" class="rounded-circle" style="width:65px"></td>
                                    </td>
                                    <td>
                                       <div class="col">Eko</div>
                                       <div class="col"><small>12007789</small></div>
                                    </td>
                                    <td>Developer</td>
                                    <td>Project Manager</td>
                                    <td>N</td>
                                    <td>17:00</td>
                                    <td><a href="/detail-schedule"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M16.8402 0L20.0001 3.15989L17.5912 5.56983L14.4313 2.40994L16.8402 0ZM5.2666 14.7335H8.42649L16.1019 7.05814L12.942 3.89825L5.2666 11.5736V14.7335Z" fill="#E6BF6E" />
                                             <path d="M16.8527 17.8934H5.4329C5.40552 17.8934 5.37708 17.9039 5.34969 17.9039C5.31493 17.9039 5.28018 17.8944 5.24436 17.8934H2.10659V3.14724H9.31851L11.4251 1.04065H2.10659C0.944807 1.04065 0 1.9844 0 3.14724V17.8934C0 19.0562 0.944807 20 2.10659 20H16.8527C17.4114 20 17.9473 19.778 18.3423 19.383C18.7374 18.9879 18.9593 18.4521 18.9593 17.8934V8.76342L16.8527 10.87V17.8934Z" fill="#E6BF6E" />
                                          </svg>
                                       </a></td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M13.3333 0H1.66667C0.75 0 0 0.75 0 1.66667V13.3333C0 14.25 0.75 15 1.66667 15H13.3333C14.25 15 15 14.25 15 13.3333V1.66667C15 0.75 14.25 0 13.3333 0ZM13.3333 13.3333H1.66667V1.66667H13.3333V13.3333ZM3.33333 6.66667H11.6667V8.33333H3.33333V6.66667Z" fill="#AAB2BB" />
                                       </svg>

                                    </td>
                                    <td><img src="/assets/img/Ellipse1.png" class="rounded-circle" style="width:65px"></td>
                                    </td>
                                    <td>
                                       <div class="col">Xander</div>
                                       <div class="col"><small>12007789</small></div>
                                    </td>
                                    <td>Developer</td>
                                    <td>Fullstack Developer</td>
                                    <td>N</td>
                                    <td>17:00</td>
                                    <td><a href="/detail-schedule"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M16.8402 0L20.0001 3.15989L17.5912 5.56983L14.4313 2.40994L16.8402 0ZM5.2666 14.7335H8.42649L16.1019 7.05814L12.942 3.89825L5.2666 11.5736V14.7335Z" fill="#E6BF6E" />
                                             <path d="M16.8527 17.8934H5.4329C5.40552 17.8934 5.37708 17.9039 5.34969 17.9039C5.31493 17.9039 5.28018 17.8944 5.24436 17.8934H2.10659V3.14724H9.31851L11.4251 1.04065H2.10659C0.944807 1.04065 0 1.9844 0 3.14724V17.8934C0 19.0562 0.944807 20 2.10659 20H16.8527C17.4114 20 17.9473 19.778 18.3423 19.383C18.7374 18.9879 18.9593 18.4521 18.9593 17.8934V8.76342L16.8527 10.87V17.8934Z" fill="#E6BF6E" />
                                          </svg>
                                       </a></td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M13.3333 0H1.66667C0.75 0 0 0.75 0 1.66667V13.3333C0 14.25 0.75 15 1.66667 15H13.3333C14.25 15 15 14.25 15 13.3333V1.66667C15 0.75 14.25 0 13.3333 0ZM13.3333 13.3333H1.66667V1.66667H13.3333V13.3333ZM3.33333 6.66667H11.6667V8.33333H3.33333V6.66667Z" fill="#AAB2BB" />
                                       </svg>

                                    </td>
                                    <td><img src="/assets/img/Ellipse2.png" class="rounded-circle" style="width:65px"></td>
                                    </td>
                                    <td>
                                       <div class="col">Suryanto</div>
                                       <div class="col"><small>12007789</small></div>
                                    </td>
                                    <td>Developer</td>
                                    <td>Project Manager</td>
                                    <td>N</td>
                                    <td>17:00</td>
                                    <td><a href="/detail-schedule"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M16.8402 0L20.0001 3.15989L17.5912 5.56983L14.4313 2.40994L16.8402 0ZM5.2666 14.7335H8.42649L16.1019 7.05814L12.942 3.89825L5.2666 11.5736V14.7335Z" fill="#E6BF6E" />
                                             <path d="M16.8527 17.8934H5.4329C5.40552 17.8934 5.37708 17.9039 5.34969 17.9039C5.31493 17.9039 5.28018 17.8944 5.24436 17.8934H2.10659V3.14724H9.31851L11.4251 1.04065H2.10659C0.944807 1.04065 0 1.9844 0 3.14724V17.8934C0 19.0562 0.944807 20 2.10659 20H16.8527C17.4114 20 17.9473 19.778 18.3423 19.383C18.7374 18.9879 18.9593 18.4521 18.9593 17.8934V8.76342L16.8527 10.87V17.8934Z" fill="#E6BF6E" />
                                          </svg>
                                       </a></td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M13.3333 0H1.66667C0.75 0 0 0.75 0 1.66667V13.3333C0 14.25 0.75 15 1.66667 15H13.3333C14.25 15 15 14.25 15 13.3333V1.66667C15 0.75 14.25 0 13.3333 0ZM13.3333 13.3333H1.66667V1.66667H13.3333V13.3333ZM3.33333 6.66667H11.6667V8.33333H3.33333V6.66667Z" fill="#AAB2BB" />
                                       </svg>

                                    </td>
                                    <td><img src="/assets/img/Ellipse3.png" class="rounded-circle" style="width:65px"></td>
                                    </td>
                                    <td>
                                       <div class="col">John Doe</div>
                                       <div class="col"><small>12007789</small></div>
                                    </td>
                                    <td>Developer</td>
                                    <td>Project Manager</td>
                                    <td>N</td>
                                    <td>17:00</td>
                                    <td><a href="/detail-schedule"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M16.8402 0L20.0001 3.15989L17.5912 5.56983L14.4313 2.40994L16.8402 0ZM5.2666 14.7335H8.42649L16.1019 7.05814L12.942 3.89825L5.2666 11.5736V14.7335Z" fill="#E6BF6E" />
                                             <path d="M16.8527 17.8934H5.4329C5.40552 17.8934 5.37708 17.9039 5.34969 17.9039C5.31493 17.9039 5.28018 17.8944 5.24436 17.8934H2.10659V3.14724H9.31851L11.4251 1.04065H2.10659C0.944807 1.04065 0 1.9844 0 3.14724V17.8934C0 19.0562 0.944807 20 2.10659 20H16.8527C17.4114 20 17.9473 19.778 18.3423 19.383C18.7374 18.9879 18.9593 18.4521 18.9593 17.8934V8.76342L16.8527 10.87V17.8934Z" fill="#E6BF6E" />
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

<!-- MOMENT JS -->
<script src="/assets/js/moment/moment.js"></script>
<script src="/assets/js/moment/moment-with-locales.js"></script>
<script>
   $(document).ready(function() {
      $('#datatablesSimple').DataTable();
   });
</script>

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