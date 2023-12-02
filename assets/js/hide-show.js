document.addEventListener('DOMContentLoaded', function () {
    // Mendapatkan semua elemen dengan class 'sembunyikan'
    var hiddenElements = document.querySelectorAll('.hidden');

    // Fungsi untuk mengecek apakah elemen masuk ke dalam view
    function isInView(el) {
        var rect = el.getBoundingClientRect();

        // Pengecekan setiap sisi elemen
        var topVisible = rect.top >= 0;
        var leftVisible = rect.left >= 0;
        var bottomVisible = rect.bottom <= (window.innerHeight || document.documentElement.clientHeight);
        var rightVisible = rect.right <= (window.innerWidth || document.documentElement.clientWidth);

        // Mengembalikan hasil pengecekan untuk semua sisi
        return topVisible && leftVisible && bottomVisible && rightVisible;
    }

    function showElementOnScroll() {
        hiddenElements.forEach(function (el) {
            if (isInView(el)) {
                el.classList.add('visible');
            }
        });
    }

    // Menjalankan fungsi saat halaman dimuat dan saat discroll
    showElementOnScroll();
    window.addEventListener('scroll', showElementOnScroll);
});