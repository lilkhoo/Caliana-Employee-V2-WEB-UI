<!-- <ul class="list-group list-group-flush" style="margin-top: 190px;">
   <a href="/edit-pegawai" class="list-group-item <?= ($activelist === 'data-diri') ? 'active' : ''; ?> listGroup">Data Diri</a>
   <a href="/edit-kepegawaian" class="list-group-item <?= ($activelist === 'data-kepegawaian') ? 'active' : ''; ?> listGroup">Data Kepegawaian</a>
   <a href="/edit-penggajian" class="list-group-item <?= ($activelist === 'data-penggajian') ? 'active' : ''; ?> listGroup">Data Penggajian</a>
</ul> -->

<ul class="list-group mt-3">
   <a href="/edit-data-diri" class="list-group-item <?= ($activelist === 'data-diri') ? 'active' : ''; ?> listgroup-container">Data Diri</a>
   <a href="/edit-data-kepegawaian" class=" list-group-item <?= ($activelist === 'data-kepegawaian') ? 'active' : ''; ?> listgroup-container">Data Kepegawaian</a>
   <a href="/edit-data-penggajian" class="list-group-item <?= ($activelist === 'data-penggajian') ? 'active' : ''; ?> listgroup-container">Data Penggajian</a>
</ul>