document.addEventListener("DOMContentLoaded", function () {
    // Menonaktifkan scroll saat preloader ditampilkan
    document.body.style.overflow = "hidden";

    // Simulasi delay untuk demonstrasi
    setTimeout(function () {
        // Menghapus class "loading" dari body
        document.body.classList.remove("loading");

        // Mengaktifkan kembali scroll setelah selesai loading
        document.body.style.overflow = "auto";

        window.scrollTo(0, 0);
    }, 2000); // Sesuaikan delay sesuai kebutuhan
});
