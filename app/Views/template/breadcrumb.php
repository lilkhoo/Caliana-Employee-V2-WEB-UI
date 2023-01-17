<div class="bread">
   <div aria-label="breadcrumb">
      <ol class="breadcrumb">
         <a class="breadcrumb-item <?= ($active === 'dashboard') ? 'active' : ''; ?> bread-crumb" href="/dashboard"><i class="fas fa-home"></i></a>
         <a class="breadcrumb-item <?= ($active === 'pegawai') ? 'active' : ''; ?> bread-crumb" href="/daftar-pegawai" style="text-decoration: none;">Daftar Pegawai</a>
         <a class="breadcrumb-item <?= ($active === 'detailPegawai') ? 'active' : ''; ?> bread-crumb" href="/detail-data-diri" style="text-decoration: none;">Detail Pegawai</a>
         <a class="breadcrumb-item <?= ($active === 'editPegawai') ? 'active' : ''; ?> bread-crumb" href="/edit-data-diri" style="text-decoration: none;" style="display: none;">Edit Pegawai</a>
      </ol>
   </div>
</div>
