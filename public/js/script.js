// Start Fungsi untuk penambahan angka
document.addEventListener("DOMContentLoaded", function () {
    // Pilih semua elemen dengan kelas "counter"
    const counters = document.querySelectorAll(".counter");

    // Buat IntersectionObserver untuk memantau kapan elemen muncul di layar
    const observer = new IntersectionObserver(
        (entries, observer) => {
            entries.forEach((entry) => {
                // Periksa apakah elemen terlihat di layar
                if (entry.isIntersecting) {
                    const counter = entry.target; // Ambil elemen counter
                    const target = +counter.getAttribute("data-target"); // Ambil angka target dari atribut data
                    const duration = 2000; // Durasi animasi dalam milidetik
                    const start = 0; // Mulai counter dari 0
                    let startTime = null; // Inisialisasi waktu mulai

                    // Fungsi untuk memperbarui nilai counter
                    const updateCounter = (currentTime) => {
                        if (!startTime) startTime = currentTime; // Tetapkan waktu mulai
                        const elapsedTime = currentTime - startTime; // Hitung waktu yang telah berlalu
                        const progress = Math.min(elapsedTime / duration, 1); // Hitung kemajuan (0 hingga 1)
                        counter.textContent =
                            Math.floor(progress * target) + "+"; // Perbarui teks konten counter
                        if (progress < 1) {
                            requestAnimationFrame(updateCounter); // Lanjutkan animasi jika belum selesai
                        } else {
                            counter.textContent = target + "+"; // Tetapkan nilai akhir setelah animasi selesai
                        }
                    };

                    requestAnimationFrame(updateCounter); // Mulai animasi
                    observer.unobserve(counter); // Berhenti mengamati setelah animasi selesai
                }
            });
        },
        { threshold: 0.1 } // Memicu ketika 10% elemen terlihat di layar
    );

    // Amati setiap elemen counter
    counters.forEach((counter) => observer.observe(counter));
});
// End Fungsi untuk penambahan angka

