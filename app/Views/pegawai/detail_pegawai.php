<?= $this->extend('template/master'); ?>
<?= $this->section('navtop'); ?>
<?= $this->include('template/navbar'); ?>

<?= $this->endSection(); ?>
<?= $this->section('content'); ?>
<link rel="stylesheet" href="assets/css/pegawai_list.css">

<div id="layoutSidenav_content">
    <main>
        <div class="card-bodypegawai">
            <div class="container-fluid px-2">
                <div class="wrap-left">
                    <img src="assets/img/profil1.jpg" class="img-thumbnail" alt="...">
                </div>
            </div>
        </div>
    </main>
</div>

<?= $this->endSection(); ?>