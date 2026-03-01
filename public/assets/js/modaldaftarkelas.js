let adminNomorTerpilih = "";

/* Ambil data program saat modal dibuka */
var modalDaftarKelas = document.getElementById('modalDaftarKelas');

modalDaftarKelas.addEventListener('show.bs.modal', function (event) {
    var button = event.relatedTarget;
    var program = button.getAttribute('data-program');
    document.getElementById("programTerpilih").value = program;
});

/* Saat pilih admin */
function pilihAdmin(namaAdmin, nomorAdmin) {

    adminNomorTerpilih = nomorAdmin;

    document.getElementById("adminTerpilih").value = namaAdmin;

    document.querySelector("#modalDaftarKelas .modal-title").innerText =
        "Daftar ke " + namaAdmin;

    document.getElementById("pilihAdmin").style.display = "none";
    document.getElementById("formPendaftaran").style.display = "block";
}

/* Kembali pilih admin */
function kembaliPilihAdmin() {

    document.querySelector("#modalDaftarKelas .modal-title").innerText =
        "Pilih Admin Elips Academy";

    document.getElementById("formPendaftaran").style.display = "none";
    document.getElementById("pilihAdmin").style.display = "block";
}

/* Kirim ke WhatsApp */
function kirimWhatsApp() {

    let nama = document.querySelector('input[name="nama"]').value.trim();
    let alamat = document.querySelector('input[name="alamat"]').value.trim();
    let program = document.getElementById("programTerpilih").value;

    if(nama === "" || alamat === ""){
        alert("Nama dan Alamat wajib diisi.");
        return;
    }

    if(adminNomorTerpilih === ""){
        alert("Silakan pilih admin terlebih dahulu.");
        return;
    }

    let pesan = `Halo nama saya ${nama} yang beralamat di ${alamat} ingin mendaftar kursus ${program}. apakah saya boleh tau informasi lebih lanjut? terima kasih`;

    let url = `https://wa.me/${adminNomorTerpilih}?text=${encodeURIComponent(pesan)}`;

    window.open(url, '_blank');
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