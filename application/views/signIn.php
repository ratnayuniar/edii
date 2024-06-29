<script>
    function simpanUser(){
        var data = $('#formTambah').serialize();
        $.ajax({
            url: '<?= base_url('simpanUser'); ?>', // URL of the route
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
   <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Sign In</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="" method="post" id="formTambah">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" name ="email" placeholder="Masukkan Email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name ="password" placeholder="Masukkan Password">
                </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <button type="button" onclick="simpanUser()" class="btn btn-primary">Simpan</button>
            <!-- <a href="" onclick="simpanBarang()">save</a> -->
        </div>
            </form>
    </div>