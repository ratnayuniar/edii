<div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Pendidikan Terakhir</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="" method="post" id="formTambah">
                <div class="mb-3">
                    <label for="jenjang" class="form-label">Jenjang Pendidikan Terakhir</label>
                    <input type="text" class="form-control" id="jenjang" name ="jenjang" placeholder="Tulis Jenjang Pendidikan">
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Institusi Akademik</label>
                    <input type="text" class="form-control" id="nama" name ="nama" placeholder="Tulis Nama Institusi">
                </div>
                <div class="mb-3">
                    <label for="jurusan" class="form-label">Jurusan</label>
                    <input type="text" class="form-control" id="jurusan" name ="jurusan" placeholder="Tulis Jurusan">
                </div>
                <div class="mb-3">
                    <label for="tahun" class="form-label">Tahun Lulus</label>
                    <input type="text" class="form-control" id="tahun" name ="tahun" placeholder="Tulis Tahun Lulus">
                </div>
                <div class="mb-3">
                    <label for="ipk" class="form-label">IPK</label>
                    <input type="text" class="form-control" id="ipk" name ="ipk" placeholder="Tulis IPK">
                </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <button type="button" onclick="simpanPendidikan()" class="btn btn-primary">Simpan</button>
            <!-- <a href="" onclick="simpanBarang()">save</a> -->
        </div>
            </form>
    </div>