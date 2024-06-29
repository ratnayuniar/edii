<script>
    const myModal = document.getElementById('myModal')
    const myInput = document.getElementById('myInput')

    myModal.addEventListener('shown.bs.modal', () => {
    myInput.focus()
    })

    function formTambah(){
        $.ajax({
            url: '<?= base_url('formTambahPelatihan'); ?>', // URL of the route
            type: 'GET',
            success: function(msg) {
                // Update the HTML with the view returned by the server
                $('#modal1').html(msg);
            },
            error: function(xhr) {
                console.error('Error loading view:', xhr);
            }
        });
    }

    function formEdit(id){
        console.log(id);
        $.ajax({
            url: '<?= base_url('formEditBarang'); ?>', // URL of the route
            type: 'POST',
            data: {id:id},
            success: function(msg) {
                // Update the HTML with the view returned by the server
                $('#modal1').html(msg);
                console.log('tampil');
            },
            error: function(xhr) {
                console.error('Error loading view:', xhr);
            }
        });
    }

    function hapus(id){
        console.log(id);
        $.ajax({
            url: '<?= base_url('formHapus'); ?>', // URL of the route
            type: 'POST',
            data: {id:id},
            success: function(msg) {
                // Update the HTML with the view returned by the server
                $('#modal1').html(msg);
                console.log('tampil');
            },
            error: function(xhr) {
                console.error('Error loading view:', xhr);
            }
        });
    }

    function hapusBarang(id){
        console.log(id);
        $.ajax({
            url: '<?= base_url('hapusBarang'); ?>', // URL of the route
            type: 'POST',
            data: {id:id},
            success: function(msg) {
                // Update the HTML with the view returned by the server
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

    function simpanPelatihan(){
        var data = $('#formTambah').serialize();
        $.ajax({
            url: '<?= base_url('simpanPelatihan'); ?>', // URL of the route
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

    function simpanEdit(){
        var data = $('#formEdit').serialize();
        $.ajax({
            url: '<?= base_url('simpanEdit'); ?>', // URL of the route
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
        <div class="card-body">
            <h4>Riwayat Pelatihan</h1>
            <!-- <a class="btn btn-info mb-2" href="<?php echo base_url('barang/formTambah'); ?>" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-plus" aria-hidden="true"></i>  Tambah</a> -->
            <a class="btn btn-info mb-2"  data-bs-toggle="modal" onclick="formTambah()" data-bs-target="#exampleModal">Tambah</a>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr >
                    <th class="table-primary" scope="col">No</th>
                    <th class="table-primary" scope="col">Nama Kursus Atau Pelatihan</th>
                    <th class="table-primary" scope="col">Sertifikat(Ada/Tidak)</th>
                    <th class="table-primary" scope="col">Tahun</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $no = 1;
                    foreach($data->result_array() as $dat) { ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $dat['nama']?></td>
                            <td><?= $dat['sertifikat']?></td>
                            <td><?= $dat['tahun']?></td>
                        </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- <div id="responseContainer"></div> -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" id="modal1">
        
    </div>
</div>

