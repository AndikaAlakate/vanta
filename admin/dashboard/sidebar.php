<?php
    $adm = "SELECT * FROM admin";
    $result = $conn->query($adm);

    while ($row = $result->fetch_assoc()) {
        // Lakukan sesuatu dengan data dalam $row
        $Nama = $row["nama"];
    }
?>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="./" class="brand-link">
        <img src="dist/img/logos.png" alt="VANTA Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">VANTA Translation</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">
                    <?php echo $Nama; ?>
                </a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <?php
        function isPageActive($activePages) {
            $currentPage = basename($_SERVER['PHP_SELF']);
            return in_array($currentPage, $activePages) ? 'active' : '';
        }

        function isMenuOpen($OpenMenu) {
            $MenuOpen = basename($_SERVER['PHP_SELF']);
            return in_array($MenuOpen, $OpenMenu) ? 'menu-open' : '';
        }
        ?>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon bi bi-house-door-fill"></i>
                        <p>
                            VANTA Translation
                            <i class="right fas fa-angle-left pr-1 pl-1"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="./" class="nav-link <?php echo isPageActive(['index.php']); ?>">
                                <i class="fas fa-tachometer-alt nav-icon"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="admin.php" class="nav-link <?php echo isPageActive(['admin.php']); ?>">
                                <i class="fas fa-user-secret nav-icon"></i>
                                <p>Admin</p>
                            </a>
                        </li>
                        <li class="nav-item <?php echo isMenuOpen(['buku.php', 'add_buku.php', 'e_buku.php', 'd_buku.php']); ?>">
                            <a href="#"
                                class="nav-link <?php echo isPageActive(['buku.php', 'add_buku.php', 'e_buku.php', 'd_buku.php']); ?>">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    Daftar Buku
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="./buku.php" class="nav-link <?php echo isPageActive(['buku.php']); ?>">
                                        <i class="fas fa-book-reader nav-icon"></i>
                                        <p>Buku</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./add_buku.php" class="nav-link <?php echo isPageActive(['add_buku.php']); ?>">
                                        <i class="fas fa-plus nav-icon"></i>
                                        <p>Tambah</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./e_buku.php" class="nav-link <?php echo isPageActive(['e_buku.php']); ?>">
                                        <i class="fas fa-edit nav-icon"></i>
                                        <p>Edit</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./d_buku.php" class="nav-link <?php echo isPageActive(['d_buku.php']); ?>">
                                        <i class="bi bi-trash nav-icon pl-1 pr-1"></i>
                                        <p >Hapus</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item <?php echo isMenuOpen(['chapter.php', 'add_chapter.php', 'e_chapter.php', 'd_chapter.php']); ?>">
                            <a href="#"
                                class="nav-link <?php echo isPageActive(['chapter.php', 'add_chapter.php', 'e_chapter.php', 'd_chapter.php']); ?>">
                                <i class="nav-icon fas fa-book-dead"></i>
                                <p>
                                    Daftar Chapter
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="./chapter.php" class="nav-link <?php echo isPageActive(['chapter.php']); ?>">
                                        <i class="fas fa-book-reader nav-icon"></i>
                                        <p>Chapter</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./add_chapter.php" class="nav-link <?php echo isPageActive(['add_chapter.php']); ?>">
                                        <i class="fas fa-plus nav-icon"></i>
                                        <p>Tambah</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./e_chapter.php" class="nav-link <?php echo isPageActive(['e_chapter.php']); ?>">
                                        <i class="fas fa-edit nav-icon"></i>
                                        <p>Edit</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./d_chapter.php" class="nav-link <?php echo isPageActive(['d_chapter.php']); ?>">
                                        <i class="bi bi-trash nav-icon pl-1 pr-1"></i>
                                        <p >Hapus</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="contacts.php" class="nav-link <?php echo isPageActive(['contacts.php']); ?>">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    Contacts
                                </p>
                            </a>
                        </li>
                    </ul>
                    <li class="nav-item">
                        <a href="logout.php" class="nav-link">
                            <i class="nav-icon fas fa-power-off" style="color: rgb(202, 23, 23);"></i>
                            <p>
                                Logout
                            </p>
                        </a>
                    </li>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>