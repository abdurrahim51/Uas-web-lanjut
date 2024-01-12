<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Core</div>

                    <a class="nav-link" href="{{ url('/dashboard') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>
                    <a class="nav-link" href="{{ route('category.index') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                        Kategori
                    </a>
                    <a class="nav-link" href="{{ route('product.index') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                        Produk
                    </a>
                    <a class="nav-link" href="{{ route('pemesanan.index') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                        pemesanan
                    </a>

        </nav>
    </div>
