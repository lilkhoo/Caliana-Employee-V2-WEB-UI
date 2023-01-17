<div class="collapse navbar-collapse" id="navbarSupportedContent">
   <ul class="navbar-nav ms-auto">
      <li class="nav-item active navline">
         <a class="nav-link" href="#" style="padding-right: 30px;">Info Saya</a>
      </li>
      <li class="nav-item navline2">
         <a class="nav-link <?= ($active === 'tambah-pegawai') ? 'active' : ''; ?>" href="/tambah-pegawai" style="padding-right: 30px;">Tambah Pegawai</a>
      </li>
      <li class="nav-item navline3">
         <a class="nav-link" href="#" style="padding-right: 30px;">Info Perusahaan</a>
      </li>
      <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
         <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><img src="/assets/img/img_profile.jpg" style="width:30px"></a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
               <li><a class="dropdown-item" href="#!">Settings</a></li>
               <li><a class="dropdown-item" href="#!">Activity Log</a></li>
               <li>
                  <hr class="dropdown-divider" />
               </li>
               <li><a class="dropdown-item" href="#!">Logout</a></li>
            </ul>
         </li>
      </ul>
</div>