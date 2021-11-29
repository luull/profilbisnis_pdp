<div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="/dashboard">
             <!-- <img alt="image" src="{{ asset(session('logo')) }}" class="header-logo" />-->
              <span class="logo-name">MySuperBoss</span>
            </a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown active">
              <a href="/dashboard" class="nav-link"><i class="fas fa-home"></i><span>Dashboard</span></a>
              
            </li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-solar-panel"></i><span>Control Panel</span></a>
              <ul class="dropdown-menu">
                 <li><a href="/admin/profile">Profil</a></li>
                            <li><a href="/admin/ubah_password" class="nav-link">Ubah Password</a></li>
                            <li><a href="/admin/photo-profile" class="nav-link">Upload Photo Profile</a></li>
                            @if (session('level')==1)
                            <li><a href="/admin/filemanager" class="nav-link">File Manager</a></li>
                            <li><a href="/admin/wa-templates" class="nav-link">Whatasapp Template</a></li>
                            @endif
                            <li><a href="/admin/welcome_note" class="nav-link">Welcome Note</a></li>
                            <!--<li><a href="/admin/bank" class="nav-link">Data Bank</a></li>-->
                            <li><a href="/admin/banner" class="nav-link">Data Banner</a></li>
              </ul>
            </li>
            @if (session('level')==1)
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-book"></i><span>Content Management</span></a>
              <ul class="dropdown-menu">
                 <li><a href="/admin/bisnis" class="nav-link">Data Bisnis</a></li>
                <li><a href="/admin/produk" class="nav-link">Data Produk</a></li>
                <li><a href="/admin/photo" class="nav-link">Gallery Photo</a></li>
                <li><a href="/admin/video" class="nav-link">Gallery Video </a></li>
                <li><a href="/admin/testimoni" class="nav-link">Testimoni Produk </a></li>
                <li><a href="/admin/agenda" class="nav-link">Agenda Kegiatan</a></li>
               <li><a href="/admin/landing-page" class="nav-link">Landing Page</a></li>
              </ul>
            </li>
            @endif
            <li class="dropdown ">
              <a href="{{ route('logout') }}" class="nav-link"><i class="fas fa-lock"></i><span>Log Out</span></a>
              
            </li>
          </ul>
        </aside>
      </div>
