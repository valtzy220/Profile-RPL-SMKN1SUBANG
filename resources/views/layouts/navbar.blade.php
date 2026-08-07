<nav class="navbar">
    <div class="navbar-container">
       

        <ul class="navbar-menu">
            <li><a href="/" class="navbar-link {{ request()->is('/') ? 'active' : '' }}">Beranda</a></li>
            <li><a href="/profile" class="navbar-link {{ request()->is('profile') ? 'active' : '' }}">Profile</a></li>
            <li><a href="/data-guru" class="navbar-link {{ request()->is('data-guru') ? 'active' : '' }}">Guru</a></li>
            <li><a href="/mapel" class="navbar-link {{ request()->is('mapel') ? 'active' : '' }}">Mata Pelajaran</a></li>
            <li><a href="/contact" class="navbar-link {{ request()->is('contact') ? 'active' : '' }}">Contact</a></li>
        </ul>

        <button class="navbar-toggle" id="navbar-toggle">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
</nav>