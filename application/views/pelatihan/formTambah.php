<div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Riwayat Pelatihan</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="" method="post" id="formTambah">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Kursus / Seminar</label>
                    <input type="text" class="form-control" id="nama" name ="nama" placeholder="Tulis Nama Kursus">
                </div>
                <div class="mb-3">
                    <label for="sertifikat" class="form-label">Sertifikat(Ada/Tidak)</label>
                    <input type="text" class="form-control" id="sertifikat" name ="sertifikat" placeholder="Tulis Sertifikat">
                </div>
                <div class="mb-3">
                    <label for="tahun" class="form-label">Tahun</label>
                    <input type="text" class="form-control" id="tahun" name ="tahun" placeholder="Tulis Tahun">
                </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <button type="button" onclick="simpanPelatihan()" class="btn btn-primary">Simpan</button>
        </div>
            </form>
    </div>