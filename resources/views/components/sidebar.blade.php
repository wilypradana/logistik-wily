<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('dashboard') }}">Stisla</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('dashboard') }}">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item dropdown {{ $type_menu === 'dashboard' ? 'active' : '' }}">
                <a href="#"
                    class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li class='{{ Request::is('dashboard') ? 'active' : '' }}'>
                        <a class="nav-link"
                            href="{{ route('dashboard') }}">Dashboard</a>
                    </li>
                </ul>
            </li>
            <li class="menu-header">Starter</li>
            <li class="nav-item dropdown {{ $type_menu === 'incomings' ? 'active' : '' }}">
                <a href="#"
                    class="nav-link has-dropdown"
                    data-toggle="dropdown"><i class="fas fa-columns"></i> <span>barang masuk</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('incomings') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="{{ route('show-incomings') }}">data barang masuk
                        </a>
                    </li>
                    <li class="{{ Request::is('incomings/tambah') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="{{ route('tambah-incomings') }}">pencatatan barang masuk</a>
                    </li>
                </ul>
            </li>
            <!-- barang keluar -->
            <li class="nav-item dropdown {{ $type_menu === 'layout' ? 'active' : '' }}">
                <a href="#"
                    class="nav-link has-dropdown"
                    data-toggle="dropdown"><i class="fas fa-columns"></i> <span>barang keluar</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('incoming') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="{{ route('show-outbound') }}">data barang keluar</a>
                    </li>
                    <li class="{{ Request::is('outbound/tambah') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="{{ route('tambah-outbound') }}">pencatatan barang keluar</a>
                    </li>
                </ul>
            </li>
            <li class="{{ Request::is('stocks') ? 'active' : '' }}">
                <a class="nav-link"
                    href="{{ route('show-stocks') }}"><i class="far fa-square"></i> <span>stocks</span></a>
            </li>
    </aside>
</div>
