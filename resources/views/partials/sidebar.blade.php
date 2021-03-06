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

            <li class="nav-item">
                <a class="nav-link {{ $activePage == 'bahan' ? 'active' : '' }}" href="{{ route('bahan.index') }}">
                    <i class="fas fa-book"></i>
                    <span class="nav-link-text">Bahan</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ $activePage == 'makanan' ? 'active' : '' }}" href="{{ route('makanan.index') }}">
                    <i class="fas fa-fish"></i> 
                    <span class="nav-link-text">Makanan</span>
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
                        <li class="nav-item {{ $activePage == 'sudah' ? 'active' : '' }}">
                            <a href="{{ route('sudah.makan') }}" class="nav-link">
                                <span class="sidenav-mini-icon"> CR </span>
                                <span class="sidenav-normal"> Sudah Dimakan </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <hr class="my-3">
            <h6 class="navbar-heading pl-4 text-muted">
                <span class="docs-normal">Lainya</span>
            </h6>
            <li class="nav-item {{ $activePage == 'tentang' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('aboutUs') }}">
                    <i class="ni ni-spaceship"></i>
                    <span class="nav-link-text">Tentang Kami</span>
                </a>
            </li>
            <li class="nav-item {{ $activePage == 'privasi' ? 'active' : '' }}"">
                <a class="nav-link" href="{{ route('privacy') }}">
                    <i class="far fa-file-alt"></i>
                    <span class="nav-link-text">Kebijakan Privasi</span>
                </a>
            </li>
        </ul>
    </div>
</div>
