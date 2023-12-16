<!DOCTYPE html>
<html>

<!-- Head -->
<?php include 'assets/front-end/section/beranda/head.php'; ?>    
<!-- Head End -->

<body class="min-vh-100 loading">

    <div class="preloader">
        <div class="spinner"></div>
    </div>
    
    <!-- Navbar -->
    <?php include 'assets/front-end/section/beranda/navbar.php'; ?>    
    <!-- End Navbar -->
    
    <!-- Heroes Section -->
    <?php include 'assets/front-end/carousel/beranda.php'; ?>
    <!-- End Heroes Section -->
    
    <!-- Konten Vanta Translation - Novel Indo -->
    <section class="container mt-5 min-vh-100">
        <div class="row row-cols-1 md-5">
            <!-- Sidebar Kiri -->
            <div class="col-md-3">
                <!-- Sidebar Kiri -->
                <?php include 'assets/front-end/section/beranda/sb-kiri.php'; ?>    
                <!-- Sidebar Kiri End -->
            </div>
            <div class="col-md-6">
                <!-- Content Section -->
                <?php include 'assets/front-end/section/beranda/content.php'; ?>    
                <!-- Content Section End -->
            </div>
            <div class="col-md-3">
                <!-- Sidebar Kanan -->
                <?php include 'assets/front-end/section/beranda/sb-kanan.php'; ?>    
                <!-- Sidebar Kanan End -->
            </div>
        </div>
    </section>

    <!-- Daftar Buku Terbaru -->
    <?php include 'assets/front-end/section/beranda/buku-terbaru.php'; ?>
    <!-- End Daftar Buku Terbaru -->
    
    <!-- Daftar Buku Unggulan -->
    <?php include 'assets/front-end/section/beranda/buku-unggulan.php'; ?>    
    <!-- Buku Unggulan -->
    
    <!-- Kategori Buku -->
    <?php include 'assets/front-end/section/beranda/buku-kategori.php'; ?>    
    <!-- End Kategori Buku -->

    <!-- CTA -->
    <?php include 'assets/front-end/section/beranda/cta.php'; ?>
    <!-- End CTA -->

    <!-- Footer -->
    <?php include 'assets/front-end/section/footer.php'; ?>
    <!-- End Footer -->

    <!-- LoginModal -->
    <?php include 'assets/front-end/modals/users/login.php'; ?>
    <!-- LoginModal End -->
    
    <!-- RegistrasiModal -->
    <?php include 'assets/front-end/modals/users/registrasi.php'; ?>
    <!-- RegistrasiModal End -->

    <!-- Back to Top Button -->
    <?php include 'assets/plugins/buttons/btb.php'; ?>
    <!-- End Back to Top Button -->

    <!-- Dark Mode Floating Button -->
    <?php include 'assets/plugins/buttons/dark-mode.php'; ?>
    <!-- End Dark Mode Floating Button -->

    <!-- Script -->
    <?php include 'assets/front-end/section/beranda/script.php'; ?>    
    <!-- Script End -->
</body>

</html>