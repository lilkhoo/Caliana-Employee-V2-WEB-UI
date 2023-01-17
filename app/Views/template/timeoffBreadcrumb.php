<div class="bread">
   <div aria-label="breadcrumb">
      <ol class="breadcrumb">
         <a class="breadcrumb-item <?= ($active === 'dashboard') ? 'active' : ''; ?> bread-crumb" href="/dashboard"><i class="fas fa-home"></i></a>
         <a class="breadcrumb-item <?= ($active === 'timeoff') ? 'active' : ''; ?> bread-crumb" href="/daftar-time-off" style="text-decoration:none;">Daftar Time Off</a>
         <a class="breadcrumb-item <?= ($active === 'detail-timeoff') ? 'active' : ''; ?> bread-crumb" href="/detail-timeoff" style="text-decoration:none;">Detail Time Off</a>
      </ol>
   </div>
</div>