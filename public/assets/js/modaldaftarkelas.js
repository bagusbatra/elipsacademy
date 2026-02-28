function pilihAdmin(namaAdmin) {
    // Simpan admin ke hidden input
    document.getElementById("adminTerpilih").value = namaAdmin;

    // Ubah title modal
    document.querySelector(".modal-title").innerText = "Daftar ke " + namaAdmin;

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