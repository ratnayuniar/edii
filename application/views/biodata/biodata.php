<script>
    

    function tampilBiodata(){
        // var data = $('#formBiodata').serialize();
        $.ajax({
            url: '<?= base_url('tampilBiodata'); ?>', // URL of the route
            type: 'POST',
            data: data,
            success: function(msg) {
                // Update the HTML with the view returned by the server
                // $('#modal1').html(msg);
                if (msg == 'sukses'){
                    // console.log('suksess');
                    alert('Form submitted successfully!');
                    location.reload(); // Reload the page
                }else{
                    console.log('gagal');
                }
            },
            error: function(xhr) {
                console.error('Error loading view:', xhr);
            }
        });
    }

   

    function editBiodata(){
        console.log('klikk');
        var data = $('#formEditBiodata').serialize();
        $.ajax({
            url: '<?= base_url('editBiodata'); ?>', // URL of the route
            type: 'POST',
            data: data,
            success: function(msg) {
                // Update the HTML with the view returned by the server
                // $('#modal1').html(msg);
                if (msg == 'sukses'){
                    // console.log('suksess');
                    alert('Form submitted successfully!');
                    location.reload(); // Reload the page
                }else{
                    console.log('gagal');
                }
            },
            error: function(xhr) {
                console.error('Error loading view:', xhr);
            }
        });
    }
</script>
<div class="container-fluid">
    <div class="card mt-4">
        <div class="card-header">
            <h4>Data Pribadi Pelamar</h1>
        </div>
        <div class="card-body">
        <form action="" method="post" id="formEditBiodata">
            <?php foreach($data->result_array() as $dt) {?>
            <div class="row col-10 mb-2">
                <div class="col">
                    Posisi Yang Dilamar 
                </div>
                <div class="col">
                    <input type="text" class="form-control" id="idBiodata" name="idBiodata" value="<?= $dt['idBiodata']?>">
                    <input type="text" class="form-control" id="posisi" name="posisi" value="<?= $dt['posisi']?>">
                </div>
            </div>
            <div class="row col-10 mb-2">
                <div class="col">
                    Nama
                </div>
                <div class="col">
                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $dt['nama']?>">
                </div>
            </div>
            <div class="row col-10 mb-2">
                <div class="col">
                    No.KTP
                </div>
                <div class="col">
                    <input type="text" class="form-control" id="ktp" name="ktp" value="<?= $dt['noKtp']?>">
                </div>
            </div>
            <div class="row col-10 mb-2">
                <div class="col">
                    Tempat, Tanggal Lahir
                </div>
                <div class="col">
                    <input type="text" class="form-control" id="ttl" name="ttl" value="<?= $dt['ttl']?>">
                </div>
            </div>
            <div class="row col-10 mb-2">
                <div class="col">
                    Jenis Kelamin
                </div>
                <div class="col">
                    <input type="text" class="form-control" id="jenkel" name="jenkel" value="<?= $dt['jenkel']?>">
                </div>
            </div>
            <div class="row col-10 mb-2">
                <div class="col">
                    Agama
                </div>
                <div class="col">
                    <input type="text" class="form-control" id="agama" name="agama" value="<?= $dt['agama']?>">
                </div>
            </div>
            <div class="row col-10 mb-2">
                <div class="col">
                    Golongan Darah
                </div>
                <div class="col">
                    <input type="text" class="form-control" id="golDarah" name="golDarah" value="<?= $dt['gol']?>">
                </div>
            </div>
            <div class="row col-10 mb-2">
                <div class="col">
                    Status
                </div>
                <div class="col">
                    <input type="text" class="form-control" id="status" name="status" value="<?= $dt['status']?>">
                </div>
            </div>
            <div class="row col-10 mb-2">
                <div class="col">
                    Alamat KTP
                </div>
                <div class="col">
                    <textarea class="form-control" name="alamatKtp" id="alamatKtp" cols="20" rows="3"><?= $dt['alamatKtp']?></textarea>
                </div>
            </div>
            <div class="row col-10 mb-2">
                <div class="col">
                    Alamat Tinggal
                </div>
                <div class="col">
                    <textarea class="form-control" name="alamatDom" id="alamatDom" cols="20" rows="3"><?= $dt['alamatDom']?></textarea>
                </div>
            </div>
            <div class="row col-10 mb-2">
                <div class="col">
                    Email
                </div>
                <div class="col">
                    <input type="text" class="form-control" id="email" name="email" value="<?= $dt['email']?>">
                </div>
            </div>
            <div class="row col-10 mb-2">
                <div class="col">
                    No. Telp
                </div>
                <div class="col">
                    <input type="text" class="form-control" id="telp" name="telp" value="<?= $dt['telp']?>">
                </div>
            </div>
            <div class="row col-10 mb-2">
                <div class="col">
                    Orang Terdekat Yang Dapat Dihubungi
                </div>
                <div class="col">
                    <input type="text" class="form-control" id="urgent" name="urgent" value="<?= $dt['urgent']?>">
                </div>
            </div>
            <div class="row col-10 mb-2">
                <div class="col">
                    Skill
                </div>
                <div class="col">
                    <textarea class="form-control" name="skill" id="skill" cols="20" rows="3"><?= $dt['skill']?></textarea>
                </div>
            </div>
            <div class="row col-10 mb-2">
                <div class="col">
                    Bersedia Ditempatkan Di Seluruh Kantor Perusahaan
                </div>
                <div class="col">
                    <input type="text" class="form-control" id="penempatan" name="penempatan" value="<?= $dt['penempatan']?>">
                </div>
            </div>
            <div class="row col-10 mb-2">
                <div class="col">
                    Penghasilan Yang Diharapkan
                </div>
                <div class="col">
                    <input type="text" class="form-control" id="gaji" name="gaji" value="<?= $dt['penghasilan']?>">
                </div>
            </div>
            <?php }?>
            </form>
        </div>
        <div class="card-footer">
            <!-- <a href="" class="btn btn-primary text-right pull-right" onclick="editBiodata()">Simpan</a> -->
            <button type="button" onclick="editBiodata()" class="btn btn-primary text-right pull-right">Simpan</button>
        </div>
    </div>
</div>