<div class="modal fade" id="modalDaftarKelas" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <!-- Header -->
            <div class="modal-header">
                <h5 class="modal-title">Pilih Admin Pendaftaran</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">

                <!-- STEP 1: PILIH ADMIN -->
                <div id="pilihAdmin">
                    <div class="d-grid gap-3">
                        <button class="btn btn-outline-dark" onclick="pilihAdmin('Elips Academy Surabaya')">Elips Academy Surabaya</button>
                        <button class="btn btn-outline-dark" onclick="pilihAdmin('Elips Academy Sidoarjo')">Elips Academy Sidoarjo</button>
                        <button class="btn btn-outline-dark" onclick="pilihAdmin('Elips Academy Candi')">Elips Academy Candi</button>
                    </div>
                </div>

                <!-- STEP 2: FORM (hidden dulu) -->
                <div id="formPendaftaran" style="display:none;">

                    <form action="" method="POST">
                        @csrf

                        <!-- Hidden input untuk simpan admin -->
                        <input type="hidden" name="admin" id="adminTerpilih">

                        <div class="mb-3">
                            <label class="form-label">Nama Lengkap</label>
                            <input type="text" name="nama" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">No. WhatsApp</label>
                            <input type="text" name="wa" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Pilih Program</label>
                            <select name="program" class="form-select">
                                <option value="Desain Grafis">Desain Grafis</option>
                                <option value="Web Development">Web Development</option>
                                <option value="Microsoft Office">Microsoft Office</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-outline-dark w-100 btnkirimdaftar">
                            Kirim Pendaftaran
                        </button>

                        <button type="button" class="btn btn-outline-dark w-100 mt-2 btnkembaliadmin" onclick="kembaliPilihAdmin()">
                            ← Ganti Admin
                        </button>
                    </form>

                </div>

            </div>

        </div>
    </div>
</div>