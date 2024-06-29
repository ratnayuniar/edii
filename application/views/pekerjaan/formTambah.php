<div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Riwayat Pekerjaan</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="" method="post" id="formTambah">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Perusahaan</label>
                    <input type="text" class="form-control" id="nama" name ="nama" placeholder="Tulis Nama Perusahaan">
                </div>
                <div class="mb-3">
                    <label for="posisi" class="form-label">Posisi Terakhir</label>
                    <input type="text" class="form-control" id="posisi" name ="posisi" placeholder="Tulis Posisi Terakhir">
                </div>
                <div class="mb-3">
                    <label for="pendapatan" class="form-label">Pendapatan Terakhir</label>
                    <input type="text" class="form-control" id="pendapatan" name ="pendapatan" placeholder="Tulis Pendapatan Terakhir">
                </div>
                <div class="mb-3">
                    <label for="tahun" class="form-label">Tahun</label>
                    <input type="text" class="form-control" id="tahun" name ="tahun" placeholder="Tulis Tahun">
                </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <button type="button" onclick="simpanPekerjaan()" class="btn btn-primary">Simpan</button>
            <!-- <a href="" onclick="simpanBarang()">save</a> -->
        </div>
            </form>
    </div>