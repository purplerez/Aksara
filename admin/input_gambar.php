<?php 
require_once "../config/config.php";
$id = $_GET['gb'] ?? null;


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
    <?php 
        if($id === null || !ctype_digit($id))
        {
            $message = "Id tidak dikenali";
        }
        else {
    ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-9">
                    <?php 
                        $tampilbuku = viewBukuSatu($koneksi, $id);
                        if($tampilbuku == false) {
                            echo "Data Tidak Ada";
                        }
                        else {
                            foreach($tampilbuku as $data) {
                    ?>
                        <h4>Judul Buku : <?= $data['judul'] ?></h4>

                    <?php } ?>
                        
                    <form action="" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="coverBuku">Cover Buku</label>
                        <input type="file" name="gambar" id="" class="form-control" />
                    </div>
                    <div class="mb-3">
                        <input type="hidden" name="idBuku" value="<?= $id ?>">
                        <!-- <label for="coverBuku">Cover Buku</label> -->
                        <input type="submit" name="btnUploads" id="" class="btn btn-primary" value="Upload" />
                    </div>

                    </form>
                       <div class="row">
                        <?php 
                            $viewGambar = viewGambarId($koneksi, $id);

                            if($viewGambar == false ) echo 'Gambar kosong';
                            else {
                                
                                foreach($viewGambar as $gambar) {
                        ?>  
                        <div class="col-3">
                                <img src="../upload/<?= $gambar['file_gambar'] ?>" style="width:100%" />
                        </div>
                        <?php }
                     } ?>
                       </div> 
                    <?php } ?>
                </div>
            </div>
        </div>


    <?php } ?>
</body>
</html>