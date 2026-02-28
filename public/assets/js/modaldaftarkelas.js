function pilihAdmin(namaAdmin) {
    // Simpan admin ke hidden input
    document.getElementById("adminTerpilih").value = namaAdmin;

    // Ubah title modal
    document.querySelector(".modal-title").innerText = "Hubungi Admin " + namaAdmin;

    // Sembunyikan pilihan admin
    document.getElementById("pilihAdmin").style.display = "none";

    // Tampilkan form
    document.getElementById("formPendaftaran").style.display = "block";
}

function kembaliPilihAdmin() {
    document.querySelector(".modal-title").innerText = "Pilih Admin Pendaftaran";

    document.getElementById("formPendaftaran").style.display = "none";
    document.getElementById("pilihAdmin").style.display = "block";
}

// JS UNTUK TOMBOL HUBUNGI KAMI PADA HALAMAN WELCOME

document.querySelectorAll('.btn-admin').forEach(button => {
    button.addEventListener('click', function () {

        const namaInput = document.getElementById('namaPengunjung');
        const errorText = document.getElementById('errorNama');
        const nama = namaInput.value.trim();

        if (nama === "") {
            errorText.classList.remove('d-none');
            namaInput.classList.add('is-invalid');
            return;
        }

        errorText.classList.add('d-none');
        namaInput.classList.remove('is-invalid');

        const nomor = this.getAttribute('data-nomor');
        const pesan = `Halo, saya ${nama} ingin bertanya tentang kursus di Elips Academy`;
        const url = `https://wa.me/${nomor}?text=${encodeURIComponent(pesan)}`;

        window.open(url, '_blank');
    });
});