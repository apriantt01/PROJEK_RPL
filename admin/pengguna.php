<?php
$title = 'pengguna';
require 'functions.php';
require 'layout_header.php';
$query = 'SELECT * FROM user order by role desc';
$data = ambildata($conn,$query);
?> 
<div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Data Master Pengguna</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="#">Pengguna</a></li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
            <div class="white-box">
                <div class="row">
                    <div class="col-md-6">
                        <a href="pengguna_tambah.php" class="btn btn-primary box-title" style="background-color: black; border-color: black;"><i class="fa fa-plus fa-fw"></i> Tambah</a>
                    </div>
                    <div class="col-md-6 text-right">
                        <button id="btn-refresh" class="btn btn-primary box-title text-right" style="background-color: black; border-color: black;" title="Refresh Data"><i class="fa fa-refresh" id="ic-refresh"></i></button>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered thead-dark" id="table">
                        <thead class="thead-dark">
                            <tr>
                                <th style="color: black; border: 1px solid black" width="5%">No</th>
                                <th style="color: black; border: 1px solid black">Nama</th>
                                <th style="color: black; border: 1px solid black">Username</th>
                                <th style="color: black; border: 1px solid black">Role</th>
                                <th style="color: black; border: 1px solid black" width="15%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($data as $user): ?>
                                <tr>
                                    <td style="color: black; border: 1px solid black"></td>
                                    <td style="color: black; border: 1px solid black"><?= $user['nama_user'] ?></td>
                                    <td style="color: black; border: 1px solid black"><?= $user['username'] ?></td>
                                    <td style="color: black; border: 1px solid black"><?= $user['role'] ?></td>
                                    <td style="color: black; border: 1px solid black" align="center">
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                          <a href="pengguna_edit.php?id=<?= $user['id_user']; ?>" data-toggle="tooltip" data-placement="bottom" title="Edit" class="btn btn-success"><i class="fa fa-edit"></i></a>
                                          <a href="pengguna_hapus.php?id=<?= $user['id_user']; ?>" onclick="return confirm('Yakin hapus data ? ');" data-toggle="tooltip" data-placement="bottom" title="Hapus" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- table -->
    <!-- ============================================================== -->
    <div class="row">
        
    </div>
</div>
<?php
require'layout_footer.php';
