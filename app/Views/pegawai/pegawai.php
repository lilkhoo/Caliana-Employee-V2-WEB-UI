<?= $this->extend('template/master'); ?>
<?= $this->section('navtop'); ?>
<?= $this->include('template/navbar'); ?>

<?= $this->endSection(); ?>
<?= $this->section('content'); ?>

<link rel="stylesheet" href="assets/css/pegawai_list.css">

<!-- <link href="/assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet"> -->
<!-- <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"> -->

<!-- DataTables -->
<link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

<style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,700,900');
</style>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div class="row">
                <div class="col">
                    <?= $this->include('template/singleBreadcrumbPegawai'); ?>

                    <div class="d-flex flex-row-reverse mb-3">
                        <button type="button" class="btn btnExp btn-primary eksportdata">Eksport Data</button>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Daftar Pegawai
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
                                            <th style="width: 100px;"></th>
                                            <th>Nama Pegawai</th>
                                            <th>Status Pegawai</th>
                                            <th>Divisi</th>
                                            <th>Posisi Pekerjaan</th>
                                            <th></th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><img src="/assets/img/Ellipse2.png"></td>
                                            <td>
                                                <a href="/detail-data-diri" class="rowDetail">
                                                    <div class="col rowName">Eko Wibowo</div>
                                                    <div class="col rowName"><small>12007787</small></div>
                                                </a>
                                            </td>
                                            <td>
                                                <span class="badge bg-permanen">Permanen</span>
                                            </td>
                                            <td>General</td>
                                            <td>Developer</td>
                                            <td style="cursor: pointer;">
                                                <a class="btn-delete" style="margin-right: 20px;" style=" margin-right: 20px;" onclick=" alertDelete()"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M15 4H20V6H18V19C18 19.2652 17.8946 19.5196 17.7071 19.7071C17.5196 19.8946 17.2652 20 17 20H3C2.73478 20 2.48043 19.8946 2.29289 19.7071C2.10536 19.5196 2 19.2652 2 19V6H0V4H5V1C5 0.734784 5.10536 0.48043 5.29289 0.292893C5.48043 0.105357 5.73478 0 6 0H14C14.2652 0 14.5196 0.105357 14.7071 0.292893C14.8946 0.48043 15 0.734784 15 1V4ZM16 6H4V18H16V6ZM7 9H9V15H7V9ZM11 9H13V15H11V9ZM7 2V4H13V2H7Z" fill="#DD7264" />
                                                    </svg>
                                                </a>
                                                <a class="btn-edit" href="/edit-data-diri"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M16.8402 0L20.0001 3.15989L17.5912 5.56983L14.4313 2.40994L16.8402 0ZM5.2666 14.7335H8.42649L16.1019 7.05814L12.942 3.89825L5.2666 11.5736V14.7335Z" fill="#E6BF6E" />
                                                        <path d="M16.8527 17.8934H5.4329C5.40552 17.8934 5.37708 17.9039 5.34969 17.9039C5.31493 17.9039 5.28018 17.8944 5.24436 17.8934H2.10659V3.14724H9.31851L11.4251 1.04065H2.10659C0.944807 1.04065 0 1.9844 0 3.14724V17.8934C0 19.0562 0.944807 20 2.10659 20H16.8527C17.4114 20 17.9473 19.778 18.3423 19.383C18.7374 18.9879 18.9593 18.4521 18.9593 17.8934V8.76342L16.8527 10.87V17.8934Z" fill="#E6BF6E" />
                                                    </svg>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><img src="/assets/img/Ellipse1.png"></td>
                                            <td>
                                                <div class="col">Desta</div>
                                                <div class="col"><small>122211</small></div>
                                            </td>
                                            <td>
                                                <span class="badge bg-percobaan">Percobaan</span>
                                            </td>
                                            <td>Developer</td>
                                            <td>UI/UX</td>
                                            <td style="cursor: pointer;">
                                                <a class="btn-delete" style="margin-right: 20px;" style=" margin-right: 20px;" onclick="alertDelete()"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M15 4H20V6H18V19C18 19.2652 17.8946 19.5196 17.7071 19.7071C17.5196 19.8946 17.2652 20 17 20H3C2.73478 20 2.48043 19.8946 2.29289 19.7071C2.10536 19.5196 2 19.2652 2 19V6H0V4H5V1C5 0.734784 5.10536 0.48043 5.29289 0.292893C5.48043 0.105357 5.73478 0 6 0H14C14.2652 0 14.5196 0.105357 14.7071 0.292893C14.8946 0.48043 15 0.734784 15 1V4ZM16 6H4V18H16V6ZM7 9H9V15H7V9ZM11 9H13V15H11V9ZM7 2V4H13V2H7Z" fill="#DD7264" />
                                                    </svg>
                                                </a>
                                                <a class="btn-edit" href="/edit-data-diri"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M16.8402 0L20.0001 3.15989L17.5912 5.56983L14.4313 2.40994L16.8402 0ZM5.2666 14.7335H8.42649L16.1019 7.05814L12.942 3.89825L5.2666 11.5736V14.7335Z" fill="#E6BF6E" />
                                                        <path d="M16.8527 17.8934H5.4329C5.40552 17.8934 5.37708 17.9039 5.34969 17.9039C5.31493 17.9039 5.28018 17.8944 5.24436 17.8934H2.10659V3.14724H9.31851L11.4251 1.04065H2.10659C0.944807 1.04065 0 1.9844 0 3.14724V17.8934C0 19.0562 0.944807 20 2.10659 20H16.8527C17.4114 20 17.9473 19.778 18.3423 19.383C18.7374 18.9879 18.9593 18.4521 18.9593 17.8934V8.76342L16.8527 10.87V17.8934Z" fill="#E6BF6E" />
                                                    </svg>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><img src="/assets/img/Ellipse3.png"></td>
                                            <td>
                                                <div class="col">Pollin</div>
                                                <div class="col"><small>900123</small></div>
                                            </td>
                                            <td>
                                                <span class="badge bg-magang">Magang</span>
                                            </td>
                                            <td>Developer</td>
                                            <td>Backend</td>
                                            <td style="cursor: pointer;">
                                                <a class="btn-delete" style="margin-right: 20px;" style=" margin-right: 20px;" onclick="alertDelete()"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M15 4H20V6H18V19C18 19.2652 17.8946 19.5196 17.7071 19.7071C17.5196 19.8946 17.2652 20 17 20H3C2.73478 20 2.48043 19.8946 2.29289 19.7071C2.10536 19.5196 2 19.2652 2 19V6H0V4H5V1C5 0.734784 5.10536 0.48043 5.29289 0.292893C5.48043 0.105357 5.73478 0 6 0H14C14.2652 0 14.5196 0.105357 14.7071 0.292893C14.8946 0.48043 15 0.734784 15 1V4ZM16 6H4V18H16V6ZM7 9H9V15H7V9ZM11 9H13V15H11V9ZM7 2V4H13V2H7Z" fill="#DD7264" />
                                                    </svg>
                                                </a>
                                                <a class="btn-edit" href="/edit-data-diri"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M16.8402 0L20.0001 3.15989L17.5912 5.56983L14.4313 2.40994L16.8402 0ZM5.2666 14.7335H8.42649L16.1019 7.05814L12.942 3.89825L5.2666 11.5736V14.7335Z" fill="#E6BF6E" />
                                                        <path d="M16.8527 17.8934H5.4329C5.40552 17.8934 5.37708 17.9039 5.34969 17.9039C5.31493 17.9039 5.28018 17.8944 5.24436 17.8934H2.10659V3.14724H9.31851L11.4251 1.04065H2.10659C0.944807 1.04065 0 1.9844 0 3.14724V17.8934C0 19.0562 0.944807 20 2.10659 20H16.8527C17.4114 20 17.9473 19.778 18.3423 19.383C18.7374 18.9879 18.9593 18.4521 18.9593 17.8934V8.76342L16.8527 10.87V17.8934Z" fill="#E6BF6E" />
                                                    </svg>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><img src="/assets/img/Ellipse4.png"></td>
                                            <td>
                                                <div class="col">Dimas</div>
                                                <div class="col"><small>144123</small></div>
                                            </td>
                                            <td>
                                                <span class="badge bg-magang">Magang</span>
                                            </td>
                                            <td>General</td>
                                            <td>GM</td>
                                            <td style="cursor: pointer;">
                                                <a class="btn-delete" style="margin-right: 20px;" style=" margin-right: 20px;" onclick="alertDelete()"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M15 4H20V6H18V19C18 19.2652 17.8946 19.5196 17.7071 19.7071C17.5196 19.8946 17.2652 20 17 20H3C2.73478 20 2.48043 19.8946 2.29289 19.7071C2.10536 19.5196 2 19.2652 2 19V6H0V4H5V1C5 0.734784 5.10536 0.48043 5.29289 0.292893C5.48043 0.105357 5.73478 0 6 0H14C14.2652 0 14.5196 0.105357 14.7071 0.292893C14.8946 0.48043 15 0.734784 15 1V4ZM16 6H4V18H16V6ZM7 9H9V15H7V9ZM11 9H13V15H11V9ZM7 2V4H13V2H7Z" fill="#DD7264" />
                                                    </svg>
                                                </a>
                                                <a class="btn-edit" href="/edit-data-diri"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M16.8402 0L20.0001 3.15989L17.5912 5.56983L14.4313 2.40994L16.8402 0ZM5.2666 14.7335H8.42649L16.1019 7.05814L12.942 3.89825L5.2666 11.5736V14.7335Z" fill="#E6BF6E" />
                                                        <path d="M16.8527 17.8934H5.4329C5.40552 17.8934 5.37708 17.9039 5.34969 17.9039C5.31493 17.9039 5.28018 17.8944 5.24436 17.8934H2.10659V3.14724H9.31851L11.4251 1.04065H2.10659C0.944807 1.04065 0 1.9844 0 3.14724V17.8934C0 19.0562 0.944807 20 2.10659 20H16.8527C17.4114 20 17.9473 19.778 18.3423 19.383C18.7374 18.9879 18.9593 18.4521 18.9593 17.8934V8.76342L16.8527 10.87V17.8934Z" fill="#E6BF6E" />
                                                    </svg>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><img src="/assets/img/Ellipse5.png"></td>
                                            <td>
                                                <div class="col">Danang</div>
                                                <div class="col"><small>123123</small></div>
                                            </td>
                                            <td>
                                                <span class="badge bg-percobaan">Percobaan</span>
                                            </td>
                                            <td>General</td>
                                            <td>ceo</td>
                                            <td style="cursor: pointer;">
                                                <a class="btn-delete" style="margin-right: 20px;" style=" margin-right: 20px;" onclick="alertDelete()"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M15 4H20V6H18V19C18 19.2652 17.8946 19.5196 17.7071 19.7071C17.5196 19.8946 17.2652 20 17 20H3C2.73478 20 2.48043 19.8946 2.29289 19.7071C2.10536 19.5196 2 19.2652 2 19V6H0V4H5V1C5 0.734784 5.10536 0.48043 5.29289 0.292893C5.48043 0.105357 5.73478 0 6 0H14C14.2652 0 14.5196 0.105357 14.7071 0.292893C14.8946 0.48043 15 0.734784 15 1V4ZM16 6H4V18H16V6ZM7 9H9V15H7V9ZM11 9H13V15H11V9ZM7 2V4H13V2H7Z" fill="#DD7264" />
                                                    </svg>
                                                </a>
                                                <a class="btn-edit" href="/edit-data-diri"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M16.8402 0L20.0001 3.15989L17.5912 5.56983L14.4313 2.40994L16.8402 0ZM5.2666 14.7335H8.42649L16.1019 7.05814L12.942 3.89825L5.2666 11.5736V14.7335Z" fill="#E6BF6E" />
                                                        <path d="M16.8527 17.8934H5.4329C5.40552 17.8934 5.37708 17.9039 5.34969 17.9039C5.31493 17.9039 5.28018 17.8944 5.24436 17.8934H2.10659V3.14724H9.31851L11.4251 1.04065H2.10659C0.944807 1.04065 0 1.9844 0 3.14724V17.8934C0 19.0562 0.944807 20 2.10659 20H16.8527C17.4114 20 17.9473 19.778 18.3423 19.383C18.7374 18.9879 18.9593 18.4521 18.9593 17.8934V8.76342L16.8527 10.87V17.8934Z" fill="#E6BF6E" />
                                                    </svg>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><img src="/assets/img/Ellipse6.png"></td>
                                            <td>
                                                <div class="col">Enzy</div>
                                                <div class="col"><small>123123</small></div>
                                            </td>
                                            <td>
                                                <span class="badge bg-permanen">Percobaan</span>
                                            </td>
                                            <td>General</td>
                                            <td>ceo</td>
                                            <td style="cursor: pointer;">
                                                <a class="btn-delete" style="margin-right: 20px;" style=" margin-right: 20px;" onclick="alertDelete()"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M15 4H20V6H18V19C18 19.2652 17.8946 19.5196 17.7071 19.7071C17.5196 19.8946 17.2652 20 17 20H3C2.73478 20 2.48043 19.8946 2.29289 19.7071C2.10536 19.5196 2 19.2652 2 19V6H0V4H5V1C5 0.734784 5.10536 0.48043 5.29289 0.292893C5.48043 0.105357 5.73478 0 6 0H14C14.2652 0 14.5196 0.105357 14.7071 0.292893C14.8946 0.48043 15 0.734784 15 1V4ZM16 6H4V18H16V6ZM7 9H9V15H7V9ZM11 9H13V15H11V9ZM7 2V4H13V2H7Z" fill="#DD7264" />
                                                    </svg>
                                                </a>
                                                <a class="btn-edit" href="/edit-data-diri"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M16.8402 0L20.0001 3.15989L17.5912 5.56983L14.4313 2.40994L16.8402 0ZM5.2666 14.7335H8.42649L16.1019 7.05814L12.942 3.89825L5.2666 11.5736V14.7335Z" fill="#E6BF6E" />
                                                        <path d="M16.8527 17.8934H5.4329C5.40552 17.8934 5.37708 17.9039 5.34969 17.9039C5.31493 17.9039 5.28018 17.8944 5.24436 17.8934H2.10659V3.14724H9.31851L11.4251 1.04065H2.10659C0.944807 1.04065 0 1.9844 0 3.14724V17.8934C0 19.0562 0.944807 20 2.10659 20H16.8527C17.4114 20 17.9473 19.778 18.3423 19.383C18.7374 18.9879 18.9593 18.4521 18.9593 17.8934V8.76342L16.8527 10.87V17.8934Z" fill="#E6BF6E" />
                                                    </svg>
                                                </a>
                                            </td>
                                        </tr>


                                        <!-- DUMMYS -->
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><img src="/assets/img/Ellipse7.png"></td>
                                            <td>
                                                <a href="/detail-data-diri" class="rowDetail">
                                                    <div class="col rowName">Vonzy</div>
                                                    <div class="col rowName"><small>12007787</small></div>
                                                </a>
                                            </td>
                                            <td>
                                                <span class="badge bg-magang">Magang</span>
                                            </td>
                                            <td>General</td>
                                            <td>Developer</td>
                                            <td style="cursor: pointer;">
                                                <a class="btn-delete" style="margin-right: 20px;" style=" margin-right: 20px;" onclick=" alertDelete()"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M15 4H20V6H18V19C18 19.2652 17.8946 19.5196 17.7071 19.7071C17.5196 19.8946 17.2652 20 17 20H3C2.73478 20 2.48043 19.8946 2.29289 19.7071C2.10536 19.5196 2 19.2652 2 19V6H0V4H5V1C5 0.734784 5.10536 0.48043 5.29289 0.292893C5.48043 0.105357 5.73478 0 6 0H14C14.2652 0 14.5196 0.105357 14.7071 0.292893C14.8946 0.48043 15 0.734784 15 1V4ZM16 6H4V18H16V6ZM7 9H9V15H7V9ZM11 9H13V15H11V9ZM7 2V4H13V2H7Z" fill="#DD7264" />
                                                    </svg>
                                                </a>
                                                <a class="btn-edit" href="/edit-data-diri"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M16.8402 0L20.0001 3.15989L17.5912 5.56983L14.4313 2.40994L16.8402 0ZM5.2666 14.7335H8.42649L16.1019 7.05814L12.942 3.89825L5.2666 11.5736V14.7335Z" fill="#E6BF6E" />
                                                        <path d="M16.8527 17.8934H5.4329C5.40552 17.8934 5.37708 17.9039 5.34969 17.9039C5.31493 17.9039 5.28018 17.8944 5.24436 17.8934H2.10659V3.14724H9.31851L11.4251 1.04065H2.10659C0.944807 1.04065 0 1.9844 0 3.14724V17.8934C0 19.0562 0.944807 20 2.10659 20H16.8527C17.4114 20 17.9473 19.778 18.3423 19.383C18.7374 18.9879 18.9593 18.4521 18.9593 17.8934V8.76342L16.8527 10.87V17.8934Z" fill="#E6BF6E" />
                                                    </svg>
                                                </a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><img src="/assets/img/Ellipse4.png"></td>
                                            <td>
                                                <a href="/detail-data-diri" class="rowDetail">
                                                    <div class="col rowName">Dalvin</div>
                                                    <div class="col rowName"><small>12007787</small></div>
                                                </a>
                                            </td>
                                            <td>
                                                <span class="badge bg-permanen">Permanen</span>
                                            </td>
                                            <td>General</td>
                                            <td>Developer</td>
                                            <td style="cursor: pointer;">
                                                <a class="btn-delete" style="margin-right: 20px;" style=" margin-right: 20px;" onclick=" alertDelete()"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M15 4H20V6H18V19C18 19.2652 17.8946 19.5196 17.7071 19.7071C17.5196 19.8946 17.2652 20 17 20H3C2.73478 20 2.48043 19.8946 2.29289 19.7071C2.10536 19.5196 2 19.2652 2 19V6H0V4H5V1C5 0.734784 5.10536 0.48043 5.29289 0.292893C5.48043 0.105357 5.73478 0 6 0H14C14.2652 0 14.5196 0.105357 14.7071 0.292893C14.8946 0.48043 15 0.734784 15 1V4ZM16 6H4V18H16V6ZM7 9H9V15H7V9ZM11 9H13V15H11V9ZM7 2V4H13V2H7Z" fill="#DD7264" />
                                                    </svg>
                                                </a>
                                                <a class="btn-edit" href="/edit-data-diri"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M16.8402 0L20.0001 3.15989L17.5912 5.56983L14.4313 2.40994L16.8402 0ZM5.2666 14.7335H8.42649L16.1019 7.05814L12.942 3.89825L5.2666 11.5736V14.7335Z" fill="#E6BF6E" />
                                                        <path d="M16.8527 17.8934H5.4329C5.40552 17.8934 5.37708 17.9039 5.34969 17.9039C5.31493 17.9039 5.28018 17.8944 5.24436 17.8934H2.10659V3.14724H9.31851L11.4251 1.04065H2.10659C0.944807 1.04065 0 1.9844 0 3.14724V17.8934C0 19.0562 0.944807 20 2.10659 20H16.8527C17.4114 20 17.9473 19.778 18.3423 19.383C18.7374 18.9879 18.9593 18.4521 18.9593 17.8934V8.76342L16.8527 10.87V17.8934Z" fill="#E6BF6E" />
                                                    </svg>
                                                </a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><img src="/assets/img/Ellipse9.png"></td>
                                            <td>
                                                <a href="/detail-data-diri" class="rowDetail">
                                                    <div class="col rowName">Rina</div>
                                                    <div class="col rowName"><small>12007787</small></div>
                                                </a>
                                            </td>
                                            <td>
                                                <span class="badge bg-magang">Magang</span>
                                            </td>
                                            <td>General</td>
                                            <td>Developer</td>
                                            <td style="cursor: pointer;">
                                                <a class="btn-delete" style="margin-right: 20px;" style=" margin-right: 20px;" onclick=" alertDelete()"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M15 4H20V6H18V19C18 19.2652 17.8946 19.5196 17.7071 19.7071C17.5196 19.8946 17.2652 20 17 20H3C2.73478 20 2.48043 19.8946 2.29289 19.7071C2.10536 19.5196 2 19.2652 2 19V6H0V4H5V1C5 0.734784 5.10536 0.48043 5.29289 0.292893C5.48043 0.105357 5.73478 0 6 0H14C14.2652 0 14.5196 0.105357 14.7071 0.292893C14.8946 0.48043 15 0.734784 15 1V4ZM16 6H4V18H16V6ZM7 9H9V15H7V9ZM11 9H13V15H11V9ZM7 2V4H13V2H7Z" fill="#DD7264" />
                                                    </svg>
                                                </a>
                                                <a class="btn-edit" href="/edit-data-diri"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M16.8402 0L20.0001 3.15989L17.5912 5.56983L14.4313 2.40994L16.8402 0ZM5.2666 14.7335H8.42649L16.1019 7.05814L12.942 3.89825L5.2666 11.5736V14.7335Z" fill="#E6BF6E" />
                                                        <path d="M16.8527 17.8934H5.4329C5.40552 17.8934 5.37708 17.9039 5.34969 17.9039C5.31493 17.9039 5.28018 17.8944 5.24436 17.8934H2.10659V3.14724H9.31851L11.4251 1.04065H2.10659C0.944807 1.04065 0 1.9844 0 3.14724V17.8934C0 19.0562 0.944807 20 2.10659 20H16.8527C17.4114 20 17.9473 19.778 18.3423 19.383C18.7374 18.9879 18.9593 18.4521 18.9593 17.8934V8.76342L16.8527 10.87V17.8934Z" fill="#E6BF6E" />
                                                    </svg>
                                                </a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><img src="/assets/img/Ellipse1.png"></td>
                                            <td>
                                                <a href="/detail-data-diri" class="rowDetail">
                                                    <div class="col rowName">Muhammad zahran</div>
                                                    <div class="col rowName"><small>12007787</small></div>
                                                </a>
                                            </td>
                                            <td>
                                                <span class="badge bg-permanen">Permanen</span>
                                            </td>
                                            <td>General</td>
                                            <td>Developer</td>
                                            <td style="cursor: pointer;">
                                                <a class="btn-delete" style="margin-right: 20px;" style=" margin-right: 20px;" onclick=" alertDelete()"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M15 4H20V6H18V19C18 19.2652 17.8946 19.5196 17.7071 19.7071C17.5196 19.8946 17.2652 20 17 20H3C2.73478 20 2.48043 19.8946 2.29289 19.7071C2.10536 19.5196 2 19.2652 2 19V6H0V4H5V1C5 0.734784 5.10536 0.48043 5.29289 0.292893C5.48043 0.105357 5.73478 0 6 0H14C14.2652 0 14.5196 0.105357 14.7071 0.292893C14.8946 0.48043 15 0.734784 15 1V4ZM16 6H4V18H16V6ZM7 9H9V15H7V9ZM11 9H13V15H11V9ZM7 2V4H13V2H7Z" fill="#DD7264" />
                                                    </svg>
                                                </a>
                                                <a class="btn-edit" href="/edit-data-diri"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M16.8402 0L20.0001 3.15989L17.5912 5.56983L14.4313 2.40994L16.8402 0ZM5.2666 14.7335H8.42649L16.1019 7.05814L12.942 3.89825L5.2666 11.5736V14.7335Z" fill="#E6BF6E" />
                                                        <path d="M16.8527 17.8934H5.4329C5.40552 17.8934 5.37708 17.9039 5.34969 17.9039C5.31493 17.9039 5.28018 17.8944 5.24436 17.8934H2.10659V3.14724H9.31851L11.4251 1.04065H2.10659C0.944807 1.04065 0 1.9844 0 3.14724V17.8934C0 19.0562 0.944807 20 2.10659 20H16.8527C17.4114 20 17.9473 19.778 18.3423 19.383C18.7374 18.9879 18.9593 18.4521 18.9593 17.8934V8.76342L16.8527 10.87V17.8934Z" fill="#E6BF6E" />
                                                    </svg>
                                                </a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><img src="/assets/img/Ellipse2.png"></td>
                                            <td>
                                                <a href="/detail-data-diri" class="rowDetail">
                                                    <div class="col rowName">Eko Wibowo</div>
                                                    <div class="col rowName"><small>12007787</small></div>
                                                </a>
                                            </td>
                                            <td>
                                                <span class="badge bg-permanen">Permanen</span>
                                            </td>
                                            <td>General</td>
                                            <td>Developer</td>
                                            <td style="cursor: pointer;">
                                                <a class="btn-delete" style="margin-right: 20px;" style=" margin-right: 20px;" onclick=" alertDelete()"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M15 4H20V6H18V19C18 19.2652 17.8946 19.5196 17.7071 19.7071C17.5196 19.8946 17.2652 20 17 20H3C2.73478 20 2.48043 19.8946 2.29289 19.7071C2.10536 19.5196 2 19.2652 2 19V6H0V4H5V1C5 0.734784 5.10536 0.48043 5.29289 0.292893C5.48043 0.105357 5.73478 0 6 0H14C14.2652 0 14.5196 0.105357 14.7071 0.292893C14.8946 0.48043 15 0.734784 15 1V4ZM16 6H4V18H16V6ZM7 9H9V15H7V9ZM11 9H13V15H11V9ZM7 2V4H13V2H7Z" fill="#DD7264" />
                                                    </svg>
                                                </a>
                                                <a class="btn-edit" href="/edit-data-diri"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M16.8402 0L20.0001 3.15989L17.5912 5.56983L14.4313 2.40994L16.8402 0ZM5.2666 14.7335H8.42649L16.1019 7.05814L12.942 3.89825L5.2666 11.5736V14.7335Z" fill="#E6BF6E" />
                                                        <path d="M16.8527 17.8934H5.4329C5.40552 17.8934 5.37708 17.9039 5.34969 17.9039C5.31493 17.9039 5.28018 17.8944 5.24436 17.8934H2.10659V3.14724H9.31851L11.4251 1.04065H2.10659C0.944807 1.04065 0 1.9844 0 3.14724V17.8934C0 19.0562 0.944807 20 2.10659 20H16.8527C17.4114 20 17.9473 19.778 18.3423 19.383C18.7374 18.9879 18.9593 18.4521 18.9593 17.8934V8.76342L16.8527 10.87V17.8934Z" fill="#E6BF6E" />
                                                    </svg>
                                                </a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><img src="/assets/img/Ellipse3.png"></td>
                                            <td>
                                                <a href="/detail-data-diri" class="rowDetail">
                                                    <div class="col rowName">Eko Wibowo</div>
                                                    <div class="col rowName"><small>12007787</small></div>
                                                </a>
                                            </td>
                                            <td>
                                                <span class="badge bg-permanen">Permanen</span>
                                            </td>
                                            <td>General</td>
                                            <td>Developer</td>
                                            <td style="cursor: pointer;">
                                                <a class="btn-delete" style="margin-right: 20px;" style=" margin-right: 20px;" onclick=" alertDelete()"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M15 4H20V6H18V19C18 19.2652 17.8946 19.5196 17.7071 19.7071C17.5196 19.8946 17.2652 20 17 20H3C2.73478 20 2.48043 19.8946 2.29289 19.7071C2.10536 19.5196 2 19.2652 2 19V6H0V4H5V1C5 0.734784 5.10536 0.48043 5.29289 0.292893C5.48043 0.105357 5.73478 0 6 0H14C14.2652 0 14.5196 0.105357 14.7071 0.292893C14.8946 0.48043 15 0.734784 15 1V4ZM16 6H4V18H16V6ZM7 9H9V15H7V9ZM11 9H13V15H11V9ZM7 2V4H13V2H7Z" fill="#DD7264" />
                                                    </svg>
                                                </a>
                                                <a class="btn-edit" href="/edit-data-diri"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M16.8402 0L20.0001 3.15989L17.5912 5.56983L14.4313 2.40994L16.8402 0ZM5.2666 14.7335H8.42649L16.1019 7.05814L12.942 3.89825L5.2666 11.5736V14.7335Z" fill="#E6BF6E" />
                                                        <path d="M16.8527 17.8934H5.4329C5.40552 17.8934 5.37708 17.9039 5.34969 17.9039C5.31493 17.9039 5.28018 17.8944 5.24436 17.8934H2.10659V3.14724H9.31851L11.4251 1.04065H2.10659C0.944807 1.04065 0 1.9844 0 3.14724V17.8934C0 19.0562 0.944807 20 2.10659 20H16.8527C17.4114 20 17.9473 19.778 18.3423 19.383C18.7374 18.9879 18.9593 18.4521 18.9593 17.8934V8.76342L16.8527 10.87V17.8934Z" fill="#E6BF6E" />
                                                    </svg>
                                                </a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><img src="/assets/img/Ellipse4.png"></td>
                                            <td>
                                                <a href="/detail-data-diri" class="rowDetail">
                                                    <div class="col rowName">Jond Doe</div>
                                                    <div class="col rowName"><small>12007787</small></div>
                                                </a>
                                            </td>
                                            <td>
                                                <span class="badge bg-permanen">Permanen</span>
                                            </td>
                                            <td>General</td>
                                            <td>Developer</td>
                                            <td style="cursor: pointer;">
                                                <a class="btn-delete" style="margin-right: 20px;" style=" margin-right: 20px;" onclick=" alertDelete()"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M15 4H20V6H18V19C18 19.2652 17.8946 19.5196 17.7071 19.7071C17.5196 19.8946 17.2652 20 17 20H3C2.73478 20 2.48043 19.8946 2.29289 19.7071C2.10536 19.5196 2 19.2652 2 19V6H0V4H5V1C5 0.734784 5.10536 0.48043 5.29289 0.292893C5.48043 0.105357 5.73478 0 6 0H14C14.2652 0 14.5196 0.105357 14.7071 0.292893C14.8946 0.48043 15 0.734784 15 1V4ZM16 6H4V18H16V6ZM7 9H9V15H7V9ZM11 9H13V15H11V9ZM7 2V4H13V2H7Z" fill="#DD7264" />
                                                    </svg>
                                                </a>
                                                <a class="btn-edit" href="/edit-data-diri"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M16.8402 0L20.0001 3.15989L17.5912 5.56983L14.4313 2.40994L16.8402 0ZM5.2666 14.7335H8.42649L16.1019 7.05814L12.942 3.89825L5.2666 11.5736V14.7335Z" fill="#E6BF6E" />
                                                        <path d="M16.8527 17.8934H5.4329C5.40552 17.8934 5.37708 17.9039 5.34969 17.9039C5.31493 17.9039 5.28018 17.8944 5.24436 17.8934H2.10659V3.14724H9.31851L11.4251 1.04065H2.10659C0.944807 1.04065 0 1.9844 0 3.14724V17.8934C0 19.0562 0.944807 20 2.10659 20H16.8527C17.4114 20 17.9473 19.778 18.3423 19.383C18.7374 18.9879 18.9593 18.4521 18.9593 17.8934V8.76342L16.8527 10.87V17.8934Z" fill="#E6BF6E" />
                                                    </svg>
                                                </a>
                                            </td>
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

<script src="assets/js/sweetalert2.all.js"></script>
<script src="assets/js/swalscript.js"></script>
<!-- Bootstrap core JavaScript-->

<!-- Core plugin JavaScript-->
<script src="/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="/assets/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="/assets/vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="/assets/js/demo/chart-area-demo.js"></script>
<script src="/assets/js/demo/chart-pie-demo.js"></script>

<!-- <script src="/assets/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="/assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<script src="/assets/js/demo/datatables-demo.js"></script> -->

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



<?= $this->endSection(); ?>