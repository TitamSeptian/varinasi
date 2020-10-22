<div class="navbar-inner">
    <!-- Collapse -->
    <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Nav items -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link {{ $activePage == 'dashboard' ? 'active' : '' }}" href="{{ route('dashboard') }}">
                    <i class="ni ni-shop text-primary"></i>
                    <span class="nav-link-text">Dasbor</span>
                </a>
            </li>
            @if(Auth::user()->level == "ADMIN")

            <li class="nav-item">
                <a class="nav-link {{ $activePage == 'tipe' ? 'active' : '' }}" href="{{ route('tipe.index') }}">
                    <i class="fas fa-clipboard-list"></i>
                    <span class="nav-link-text">Tipe</span>
                </a>
            </li>
            @endif

            <li class="nav-item">
                <a class="nav-link" href="#navbar-examples" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
                    <i class="fas fa-pizza-slice text-orange"></i>
                    <span class="nav-link-text">Makan</span>
                </a>
                <div class="collapse" id="navbar-examples">
                    <ul class="nav nav-sm flex-column">
                        <li class="nav-item {{ $activePage == 'makan' ? 'active' : '' }}">
                            <a href="{{ route('makanan') }}" class="nav-link">
                                <span class="sidenav-mini-icon"> M </span>
                                <span class="sidenav-normal"> Makanan </span>
                            </a>
                        </li>
                        <li class="nav-item {{ $activePage == 'cariMakanan' ? 'active' : '' }}">
                            <a href="{{ route('cari.makanan') }}" class="nav-link">
                                <span class="sidenav-mini-icon"> CR </span>
                                <span class="sidenav-normal"> Cari Makanan </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <hr class="my-3">
            <h6 class="navbar-heading pl-4 text-muted">
                <span class="docs-normal">Lainya</span>
            </h6>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="ni ni-spaceship"></i>
                    <span class="nav-link-text">Tentang Kami</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="far fa-file-alt"></i>
                    <span class="nav-link-text">Kebijakan Privasi</span>
                </a>
            </li>
        </ul>
    </div>
</div>
