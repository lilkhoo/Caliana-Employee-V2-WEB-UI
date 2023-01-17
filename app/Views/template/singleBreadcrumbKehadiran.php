<div class="bread">
   <div aria-label="breadcrumb">
      <ol class="breadcrumb">
         <a class="breadcrumb-item <?= ($active === 'dashboard') ? 'active' : ''; ?> bread-crumb" href="/dashboard"><i class="fas fa-home"></i></a>
         <a class="breadcrumb-item <?= ($active === 'kehadiran') ? 'active' : ''; ?> bread-crumb" href="/daftar-kehadiran">Daftar Kehadiran</a>

         <!-- <div class="ml-auto">
            <small class="data-tanggal">Data Tanggal : </small>

            <label for="" style="padding-right: 10px; padding-top: 5px;">
               <input type="date">
            </label>
            <label for="" style="padding-right: 10px; padding-top: 5px;">
               <input type="date">
            </label>

            <button class="btn btn-primary btnExp">Eksport Data</button>
         </div> -->
      </ol>
   </div>
</div>