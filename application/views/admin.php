<div class="container mt-3 mb-5">
    <!-- Page Heading -->
    <!-- <h1 class="h3 mb-2 text-gray-800 font-weight-bold judul">Data Akun</h1> -->
    <div class="flash-hapus" data-flashdata="<?= $this->session->flashdata('flash-hapus') ?>"></div>
    <div class="row">
        <!-- DataTales Example -->
        <div class="col">
            <div class="card shadow-sm mb-4 mt-5">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col-9">
                            <h5 class="mt-2 font-weight-bold text-primary">Data Project</h5>
                        </div>
                        <div class="col-3">
                            <button class="btn btn-danger float-right" data-toggle="modal" data-target="#Tambah"><i class="fa fa-plus-circle"></i> Tambah Peoject</button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive float-right">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr class="bg-info text-white">
                                    <th>No</th>
                                    <th>Header</th>
                                    <th>Footer</th>
                                    <th>Img</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($project as $p) : ?>
                                    <tr>
                                        <td><?= $i ?></td>
                                        <td><?= $p['header'] ?></td>
                                        <td><?= $p['footer'] ?></td>

                                        <td> <img src="./assets/img/<?= $p['img'] ?> " width="150px" height="90px"></td>
                                        <td class="ml-3">
                                            <a href="<?= base_url() ?>Adminxxauth/hapusDataProject/<?= $p['id'] ?>" class="badge badge-danger tombol-hapus"><i class="fa fa-trash"> </i> Hapus</a>
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal tambah data -->
<div class="modal fade" id="Tambah" tabindex="-1" role="dialog" aria-labelledby="EditakunLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-l" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title judul" id="exampleModalLabel"><strong>Tambah Project</strong> </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row mb-3 mt-2">
                    <div class="col">
                        <form action="Admin/tambahPeoject" method="post" enctype="multipart/form-data">
                            <div class="form-group row mt-3">
                                <label for="inputEmail3" class="col-4 col-form-label">Header</label>
                                <div class="col-8">
                                    <input type="text" class="form-control float-right" id="email" name="header" value="">
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label for="inputEmail3" class="col-4 col-form-label">footer</label>
                                <div class="col-8">
                                    <input type="text" class="form-control float-right" id="email" name="footer" value="">
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label for="inputEmail3" class="col-4 col-form-label">Img</label>
                                <div class="col-8">
                                    <input type="file" class="form-control float-right" id="email" name="img" value="">
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"> <i class="fa fa-times"></i> Batal</button>
                <button type="submit" class="btn btn-success"><i class="fa fa-plus-circle"></i> Tambah</button>
            </div>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>