<script>
    // $(document).ready(function){
       
    // });

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

    function simpanBiodata(){
        var data = $('#formBiodata').serialize();
        $.ajax({
            url: '<?= base_url('simpanBiodata'); ?>', // URL of the route
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
            <h4>Input Data Pribadi Pelamar</h1>
        </div>
        <div class="card-body">
        <form action="" method="post" id="formBiodata">
            <div class="row col-10 mb-2">
                <div class="col">
                    Posisi Yang Dilamar 
                </div>
                <div class="col">
                    <input type="text" class="form-control" id="posisi" name="posisi">
                </div>
            </div>
            <div class="row col-10 mb-2">
                <div class="col">
                    Nama
                </div>
                <div class="col">
                    <input type="text" class="form-control" id="nama" name="nama">
                </div>
            </div>
            <div class="row col-10 mb-2">
                <div class="col">
                    No.KTP
                </div>
                <div class="col">
                    <input type="text" class="form-control" id="ktp" name="ktp">
                </div>
            </div>
            <div class="row col-10 mb-2">
                <div class="col">
                    Tempat, Tanggal Lahir
                </div>
                <div class="col">
                    <input type="text" class="form-control" id="ttl" name="ttl">
                </div>
            </div>
            <div class="row col-10 mb-2">
                <div class="col">
                    Jenis Kelamin
                </div>
                <div class="col">
                    <input type="text" class="form-control" id="jenkel" name="jenkel">
                </div>
            </div>
            <div class="row col-10 mb-2">
                <div class="col">
                    Agama
                </div>
                <div class="col">
                    <input type="text" class="form-control" id="agama" name="agama">
                </div>
            </div>
            <div class="row col-10 mb-2">
                <div class="col">
                    Golongan Darah
                </div>
                <div class="col">
                    <input type="text" class="form-control" id="golDarah" name="golDarah">
                </div>
            </div>
            <div class="row col-10 mb-2">
                <div class="col">
                    Status
                </div>
                <div class="col">
                    <input type="text" class="form-control" id="status" name="status">
                </div>
            </div>
            <div class="row col-10 mb-2">
                <div class="col">
                    Alamat KTP
                </div>
                <div class="col">
                    <textarea class="form-control" name="alamatKtp" id="alamatKtp" cols="20" rows="3"></textarea>
                </div>
            </div>
            <div class="row col-10 mb-2">
                <div class="col">
                    Alamat Tinggal
                </div>
                <div class="col">
                    <textarea class="form-control" name="alamatDom" id="alamatDom" cols="20" rows="3"></textarea>
                </div>
            </div>
            <div class="row col-10 mb-2">
                <div class="col">
                    Email
                </div>
                <div class="col">
                    <input type="text" class="form-control" id="email" name="email">
                </div>
            </div>
            <div class="row col-10 mb-2">
                <div class="col">
                    No. Telp
                </div>
                <div class="col">
                    <input type="text" class="form-control" id="telp" name="telp">
                </div>
            </div>
            <div class="row col-10 mb-2">
                <div class="col">
                    Orang Terdekat Yang Dapat Dihubungi
                </div>
                <div class="col">
                    <input type="text" class="form-control" id="urgent" name="urgent">
                </div>
            </div>
            <div class="row col-10 mb-2">
                <div class="col">
                    Skill
                </div>
                <div class="col">
                    <textarea class="form-control" name="skill" id="skill" cols="20" rows="3"></textarea>
                </div>
            </div>
            <div class="row col-10 mb-2">
                <div class="col">
                    Bersedia Ditempatkan Di Seluruh Kantor Perusahaan
                </div>
                <div class="col">
                    <input type="text" class="form-control" id="penempatan" name="penempatan">
                </div>
            </div>
            <div class="row col-10 mb-2">
                <div class="col">
                    Penghasilan Yang Diharapkan
                </div>
                <div class="col">
                    <input type="text" class="form-control" id="gaji" name="gaji">
                </div>
            </div>
            </form>
        </div>
        <div class="card-footer">
            <!-- <h4>Data Pribadi Pelamar</h1> -->
            <button type="button" onclick="simpanBiodata()" class="btn btn-primary text-right pull-right">Simpan</button>
        </div>
    </div>
</div>