<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?=base_url('assets')?>/css/bootstrap.css">

    <title>Aplikasi Data Mahasiwa</title>
</head>

<body>
    <div class="p-4">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah">
            Tambah Data Mahasiswa
        </button>
        <h1>Aplikasi Data Mahasiswa Baru</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nim</th>
                    <th scope="col">Nama</th>
                    <th scope="col">No HP</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">IPK</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <?php
        $no = 1;
        foreach($mahasiswa as $u){
        ?>
            <tbody>
                <tr>
                    <th scope="row"><?= $no++; ?></th>
                    <td><?= $u['nim']?></td>
                    <td><?= $u['nama']?></td>
                    <td><?= $u['no_hp']?></td>
                    <td><?= $u['jurusan']?></td>
                    <td><?= $u['ipk']?></td>
                    <td><a role="button" class="btn btn-primary" data-toggle="modal" data-target="#edit<?=$u['id']?>">
                            Edit
                        </a></td>
                    <td><a role="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            Delete
                        </a></td>
                </tr>
            </tbody>
            <?php } ?>
        </table>
        <h2>Taufiiqul Hakim</h2>
        <!-- Modal -->
        <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Form Tambah</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url(); ?>mahasiswa/tambah" method="POST">
                            <div class="form-group">
                                <label for="exampleInputEmail1">NIM</label>
                                <input type="text" name="nim" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Masukan NIM">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with
                                    anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Nama</label>
                                <input type="text" name="nama" class="form-control" id="exampleInputPassword1"
                                    placeholder="Masukan Nama">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">NO HP</label>
                                <input type="text" name="no_hp" class="form-control" id="exampleInputPassword1"
                                    placeholder="Masukan No HP">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Jurusan</label>
                                <input type="text" name="jurusan" class="form-control" id="exampleInputPassword1"
                                    placeholder="Masukan Jurusan">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">IPK</label>
                                <input type="number" name="ipk" step="0.1" min="0" max="4" class="form-control"
                                    id="exampleInputPassword1" placeholder="Masukan IPK">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="<?=base_url('assets')?>/js/bootstrap.js">
        </script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->

    </div>
</body>

</html>