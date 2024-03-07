        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label">Dashboard</li>
                    @php
                    $role = Auth::user()->role;
                @endphp
                @foreach ($role as $i)
                 @if ($i->id_akses == 1 || $i->id_akses == 2)
                    <li>
                            <a class="nav-item" href="{{ route('dashboard.index') }}" class="nav-link {{ Route::is('dashboard.index') ? 'active' :'' }}">
                            <i class="icon-speedometer nav-icon"></i><span class="nav-text">Dashboard</span>
                            </a>
                    </li>                         
                @endif
                    <li class="mega-menu mega-menu-sm">
                            <a class="has-arrow">
                            <i class="icon-globe-alt nav-icon"></i><span class="nav-text">Data Master</span>
                        </a>
                        @if ($i->id_akses == 1)
                        <ul class="nav nav-treeview">
                                <a href="{{ route('data.data_petugas') }}" class="nav-link {{ Route::is('data.data_petugas') ? 'active' :'' }}">
                                <i class="far fa-dot-circle nav-icon"></i><span class="nav-text">Data Petugas</span>
                            </a>
                        </ul>
                        <ul class="nav nav-treeview">
                                <a href="{{ route('akses.index') }}" class="nav-link {{ Route::is('akses.index') ? 'active' :'' }}">
                                <i class="far fa-dot-circle nav-icon"></i><span class="nav-text">Data Menu</span>
                            </a>
                        </ul>
                        <ul class="nav nav-treeview">
                                <a href="{{ route('role.index') }}" class="nav-link {{ Route::is('role.index') ? 'active' :'' }}">
                                <i class="far fa-dot-circle nav-icon"></i><span class="nav-text">Data Role</span>
                            </a>
                        </ul>
                        @endif
                        @if ($i->id_akses == 1 || $i->id_akses == 2)
                        <ul class="nav nav-treeview">
                                <a href="{{ route('barang.index') }}" class="nav-link {{ Route::is('barang.index') ? 'active' :'' }}">
                                <i class="far fa-dot-circle nav-iconv"></i><span class="nav-text">Data Barang</span>
                            </a>
                        </ul>
                       
                        <ul class="nav nav-treeview">
                                <a href="{{ route('categori.index') }}" class="nav-link {{ Route::is('categori.index') ? 'active' :'' }}">
                                <i class="far fa-dot-circle nav-iconv"></i><span class="nav-text">Data Categori</span>
                            </a>
                        </ul>
                        @endif
                    </li>
                    @if ($i->id_akses == 1 || $i->id_akses == 2)
                    <li class="mega-menu mega-menu-sm">
                        <a class="nav-item" href="{{ route('transaksi.index') }}" class="nav-link {{ Route::is('categori.index') ? 'active' :'' }}">
                            <i class="icon-note menu-icon"></i><span class="nav-text">Transaksi Unpaid</span>
                        </a>
                    </li>
                    @endif
                    @if ($i->id_akses == 1 || $i->id_akses == 2)
                    <li class="mega-menu mega-menu-sm">
                        <a class="nav-item" href="{{ route('transaksi.terbayar') }}" class="nav-link {{ Route::is('categori.index') ? 'active' :'' }}">
                            <i class="icon-envelope menu-icon"></i><span class="nav-text">Transaksi paid</span>
                        </a>
                    </li>
                    @endif
                    @if ($i->id_akses == 1)
                    <li class="mega-menu mega-menu-sm nav-item {{ Route::is('laporan.barang') || Route::is('laporan.transaksi')  ? 'menu-open' : '' }} ">
                        <a class="has-arrow">
                        <i class="icon-notebook nav-icon"></i><span class="nav-text">Laporan</span>
                    </a>
                    
                    <ul class="nav nav-treeview">
                            <a href=" {{ route('laporan.barang') }}" class="nav-link {{ Route::is('laporan.barang')  ? 'active' : '' }}">
                            <i class="far fa-dot-circle nav-icon"></i><span class="nav-text">Laporan Barang</span>
                        </a>
                    </ul>
                    <ul class="nav nav-treeview">
                            <a href="{{ route('laporan.transaksi') }}" class="nav-link {{ Route::is('laporan.transaksi')  ? 'active' : '' }}">
                            <i class="far fa-dot-circle nav-icon"></i><span class="nav-text">Laporan Transaksi</span>
                        </a>
                    </ul>
                    @endif
                    </li>
                </ul>
                @endforeach
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->