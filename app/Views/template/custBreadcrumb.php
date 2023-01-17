<div class="bread">
   <div aria-label="breadcrumb">
      <ol class="breadcrumb">
         <a class="breadcrumb-item <?= ($active === 'dashboard') ? 'active' : ''; ?> bread-crumb" href="/dashboard"><i class="fas fa-home"></i></a>
         <a class="breadcrumb-item <?= ($active === 'schedule') ? 'active' : ''; ?> bread-crumb" href="/daftar-schedule">Daftar Schedule</a>
         <a class="breadcrumb-item <?= ($active === 'detailSchedule') ? 'active' : ''; ?> bread-crumb" href="/detail-schedule">Detail Schedule</a>
      </ol>
   </div>
</div>