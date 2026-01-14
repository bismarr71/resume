<div class="sidebar-area" id="sidebar-area">
    <div class="logo position-relative">
        <a href="{{ route('admin.dashboard') }}" class="d-block text-decoration-none position-relative">
            <img src="{{ asset('assets-admin/images/logo-icon.png') }}" alt="logo-icon">
            <span class="logo-text fw-bold text-dark">Cunnet Admin</span>
        </a>
    </div>

    <aside id="layout-menu" class="layout-menu menu-vertical menu active" data-simplebar>
        <ul class="menu-inner">
            <li class="menu-item {{ Request::is('admin/dashboard') ? 'active' : '' }}">
                <a href="{{ route('admin.dashboard') }}" class="menu-link">
                    <span class="material-symbols-outlined menu-icon">dashboard</span>
                    <span class="title">Dashboard</span>
                </a>
            </li>

            <li class="menu-title small text-uppercase"><span class="menu-title-text">Pusat Kontrol</span></li>
            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <span class="material-symbols-outlined menu-icon">settings</span>
                    <span class="title">General Settings</span>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item"><a href="#" class="menu-link">Logo & Favicon</a></li>
                    <li class="menu-item"><a href="#" class="menu-link">Website Info</a></li>
                    <li class="menu-item"><a href="#" class="menu-link">Contact Information</a></li>
                    <li class="menu-item"><a href="#" class="menu-link">Social Media</a></li>
                    <li class="menu-item"><a href="#" class="menu-link">API Configuration</a></li>
                </ul>
            </li>

            <li class="menu-title small text-uppercase"><span class="menu-title-text">Homepage Editor</span></li>
            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <span class="material-symbols-outlined menu-icon">home_app_logo</span>
                    <span class="title">Section Manager</span>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item"><a href="#" class="menu-link">Hero Section</a></li>
                    <li class="menu-item"><a href="#" class="menu-link">Hero Sliders</a></li>
                    <li class="menu-item"><a href="#" class="menu-link">About Section</a></li>
                    <li class="menu-item"><a href="#" class="menu-link">Service Section</a></li>
                    <li class="menu-item"><a href="#" class="menu-link">Portfolio Section</a></li>
                </ul>
            </li>

            <li class="menu-title small text-uppercase"><span class="menu-title-text">Modul Konten</span></li>
            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <span class="material-symbols-outlined menu-icon">shopping_cart</span>
                    <span class="title">Shop / Ecommerce</span>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item"><a href="#" class="menu-link">Produk</a></li>
                    <li class="menu-item"><a href="#" class="menu-link">Pesanan</a></li>
                </ul>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <span class="material-symbols-outlined menu-icon">newspaper</span>
                    <span class="title">News / Blog</span>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item"><a href="#" class="menu-link">Postingan</a></li>
                    <li class="menu-item"><a href="#" class="menu-link">Kategori</a></li>
                </ul>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <span class="material-symbols-outlined menu-icon">groups</span>
                    <span class="title">Team & Pricing</span>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item"><a href="#" class="menu-link">Our Team</a></li>
                    <li class="menu-item"><a href="#" class="menu-link">Pricing Plans</a></li>
                </ul>
            </li>

            <li class="menu-item mt-5">
                <a href="{{ url('/') }}" class="menu-link bg-primary text-white" target="_blank">
                    <span class="material-symbols-outlined menu-icon text-white">visibility</span>
                    <span class="title">Lihat Website</span>
                </a>
            </li>
        </ul>
    </aside>
</div>
