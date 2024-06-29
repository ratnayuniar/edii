<div class="container-fluid">
    <div class="card mt-4">
        <div class="card-body">
            <h4>Data Pelamar</h1>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr >
                    <th class="table-primary" scope="col">No</th>
                    <th class="table-primary" scope="col">Nama</th>
                    <th class="table-primary" scope="col">Tempat Tanggal Lahir</th>
                    <th class="table-primary" scope="col">Posisi</th>
                    <th class="table-primary" scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $no = 1;
                    foreach($data->result_array() as $dat) { ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $dat['nama']?></td>
                            <td><?= $dat['ttl']?></td>
                            <td><?= $dat['posisi']?></td>
                            <td><a class="btn btn-warning" href="" role="button" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="formEdit('<?= $dat['idBiodata'] ?>')" disabled><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                <a class="btn btn-danger" href="" role="button" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="formEdit('<?= $dat['idBiodata'] ?>')" disabled><i class="fa fa-trash" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>
</div>