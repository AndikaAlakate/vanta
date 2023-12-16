function handleNavClick() {
    // Temukan semua elemen dengan kelas "nav-link"
    var navLinks = $(".nav-link");

    // Tambahkan event click pada setiap elemen "nav-link"
    navLinks.click(function () {
        // Hapus kelas "active" dari semua elemen
        navLinks.removeClass("active");

        // Tambahkan kelas "active" hanya pada elemen yang diklik
        $(this).addClass("active");
    });
}

// Panggil fungsi saat dokumen sudah siap
$(document).ready(function () {
    handleNavClick();
});
