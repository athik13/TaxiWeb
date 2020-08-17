<ul class="nav-main">
    <li class="nav-main-item">
        <a class="nav-main-link{{ request()->is('dashboard') ? ' active' : '' }}" href="/dashboard">
            <i class="nav-main-link-icon si si-cursor"></i>
            <span class="nav-main-link-name">Dashboard</span>
        </a>
    </li>

    <li class="nav-main-heading">Master Data</li>
    <li class="nav-main-item{{ request()->is('master-data/*') ? ' open' : '' }}">
        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">
            <i class="nav-main-link-icon si si-settings"></i>
            <span class="nav-main-link-name">Configure</span>
        </a>
        <ul class="nav-main-submenu">
            <li class="nav-main-item">
                <a class="nav-main-link{{ request()->is('master-data/configure/company') ? ' active' : '' }}" href="/master-data/configure/company">
                    <span class="nav-main-link-name">Company</span>
                </a>
            </li>
        </ul>
    </li>


    <li class="nav-main-heading">Examples</li>
    <li class="nav-main-item{{ request()->is('pages/*') ? ' open' : '' }}">
        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">
            <i class="nav-main-link-icon si si-bulb"></i>
            <span class="nav-main-link-name">Examples</span>
        </a>
        <ul class="nav-main-submenu">
            <li class="nav-main-item">
                <a class="nav-main-link{{ request()->is('pages/datatables') ? ' active' : '' }}" href="/pages/datatables">
                    <span class="nav-main-link-name">DataTables</span>
                </a>
            </li>
            <li class="nav-main-item">
                <a class="nav-main-link{{ request()->is('pages/slick') ? ' active' : '' }}" href="/pages/slick">
                    <span class="nav-main-link-name">Slick Slider</span>
                </a>
            </li>
            <li class="nav-main-item">
                <a class="nav-main-link{{ request()->is('pages/blank') ? ' active' : '' }}" href="/pages/blank">
                    <span class="nav-main-link-name">Blank</span>
                </a>
            </li>
        </ul>
    </li>
    <li class="nav-main-item open">
        <a class="nav-main-link" href="/">
            <i class="nav-main-link-icon si si-globe"></i>
            <span class="nav-main-link-name">Landing</span>
        </a>
    </li>
</ul>
