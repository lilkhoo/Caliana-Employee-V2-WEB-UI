<div class="bread">
   <div aria-label="breadcrumb">
      <ol class="breadcrumb">
         <a class="breadcrumb-item <?= ($active === 'dashboard') ? 'active' : ''; ?> bread-crumb" href="/dashboard"><i class="fas fa-home"></i></a>
         <a class="breadcrumb-item <?= ($active === 'kehadiran') ? 'active' : ''; ?> bread-crumb" href="/daftar-kehadiran">Daftar Kehadiran</a>
         <a class="breadcrumb-item <?= ($active === 'detailKehadiran') ? 'active' : ''; ?> bread-crumb" href="/detail-kehadiran">Detail Kehadiran</a>
      </ol>
   </div>
</div>