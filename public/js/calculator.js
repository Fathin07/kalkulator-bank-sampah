document.addEventListener("DOMContentLoaded", function() {
    const jenisSampahSelect = document.getElementById("jenis-sampah");
    const jumlahSampahInput = document.getElementById("jumlah-sampah");
    const hitungButton = document.getElementById("hitung-button");
    const totalHargaSpan = document.getElementById("total-harga");

    // Definisikan harga per kilogram untuk setiap jenis sampah
    const hargaPerKilogram = {
        kertas: 1500, // Contoh harga per kilogram untuk kertas
        plastik: 1200, // Contoh harga per kilogram untuk plastik
        logam: 2000,   // Contoh harga per kilogram untuk logam
        kaca: 2000,// Tambahkan harga per kilogram untuk jenis sampah lain di sini
    };

    hitungButton.addEventListener("click", function() {
        const jenisSampah = jenisSampahSelect.value;
        const jumlahSampah = parseInt(jumlahSampahInput.value, 10); // Menggunakan parseInt untuk mendapatkan bilangan bulat

        if (!isNaN(jumlahSampah) && jumlahSampah >= 0) {
            // Ambil harga per kilogram berdasarkan jenis sampah yang dipilih
            const harga = hargaPerKilogram[jenisSampah];

            if (harga !== undefined) {
                const totalHarga = harga * jumlahSampah;
                totalHargaSpan.textContent = totalHarga.toFixed(2);
            } else {
                totalHargaSpan.textContent = "0"; // Jenis sampah tidak ditemukan
            }
        } else {
            totalHargaSpan.textContent = "0";
        }
    });
});