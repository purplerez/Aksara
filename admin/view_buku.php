<?php 
require "../config/config.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-10">
                <?php 
                    $buku = viewBuku($koneksi);

                    if($buku == 0) {
                        echo 'Data Kosong';
                    }
                    else {
                ?>
                <table class=table>
                    <tr>
                        <th>No.</th>
                        <th>Judul</th>
                        <th>Penulis</th>
                        <th>Pengarang</th>
                        <th>Kategori</th>
                        <th colspan=3>Menu</th>
                    </tr>
                    <?php 
                    // awalan foreach 
                    $no = 1; 
                    foreach($buku as $data) {
                    ?>
                    <tr>
                        <td><?= $no ?></td>
                        <td><?= $data['judul'] ?></td>
                        <td><?= $data['author'] ?></td>
                        <td><?= $data['publish'] ?></td>
                        <td><?= $data['kategori'] ?></td>
                        <td>gambar</td>
                        <td>edit</td>
                        <td>delete</td>
                    </tr>
                    <?php 
                       $no ++;
                    }
                        // akhiran foreach
                    ?>
                </table>
                <?php } ?>
            </div>
        </div>
    </div>
</body>
</html>