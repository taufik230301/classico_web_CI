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

        <h1>Aplikasi Data Siswa</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nim</th>
                    <th scope="col">Nama</th>
                    <th scope="col">No HP</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">IPK</th>
                </tr>
            </thead>
            <tbody>
                <?php
        $no = 1;
        foreach($mahasiswa as $u){
        ?>
                <tr>
                    <th scope="row"><?= $no++; ?></th>
                    <td><?= $u['nim']?></td>
                    <td><?= $u['nama']?></td>
                    <td><?= $u['no_hp']?></td>
                    <td><?= $u['jurusan']?></td>
                    <td><?= $u['ipk']?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <h1> kevin juan</h2>
        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
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