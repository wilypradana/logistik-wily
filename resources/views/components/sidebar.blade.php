<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Stisla</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item dropdown {{ $type_menu === 'dashboard' ? 'active' : '' }}">
                <a href="#"
                    class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li class='{{ Request::is('dashboard-general-dashboard') ? 'active' : '' }}'>
                        <a class="nav-link"
                            href="{{ url('dashboard-general-dashboard') }}">General Dashboard</a>
                    </li>
                    <li class="{{ Request::is('dashboard-ecommerce-dashboard') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="{{ url('dashboard-ecommerce-dashboard') }}">Ecommerce Dashboard</a>
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
                    <li class="{{ Request::is('incomings*') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="{{ route('show-outbounds') }}">data barang keluar</a>
                    </li>
                    <li class="{{ Request::is('outbounds/tambah') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="{{ route('tambah-outbounds') }}">pencatatan barang keluar</a>
                    </li>
                </ul>
            </li>
            <li class="{{ Request::is('blank-page') ? 'active' : '' }}">
                <a class="nav-link"
                    href="{{ url('blank-page') }}"><i class="far fa-square"></i> <span>stocks</span></a>
            </li>
    </aside>
</div>
