<?php 
    require "../config/config.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aksara Jenggala : Input Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
            <h2>Input Data Buku </h2>
                <form method="post" action="">
                    <div class="mb-3">
                        <label for="namaBuku" class="form-label">Judul Buku </label>
                        <input type="text" class="form-control" name="judul" >
                    </div>
                    <div class="mb-3">
                        <label for="nmpengarang" class="form-label">Pengarang</label>
                        <select class="form-select" name="pengarang">
                                <option selected value="0" >--Pengarang--</option>
                                <?php 
                                    $pengarang = viewPengarang($koneksi);

                                    if($pengarang != false) {
                                        foreach($pengarang as $recA) {
                                ?>

                                <option value="<?= $recA['id'] ?>"><?= $recA['nama'] ?></option>

                                <?php 
                                        }
                                    } 
                                ?>
                               
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="nmpenerbit" class="form-label">Penerbit</label>
                        <select class="form-select" name="penerbit">
                                <option selected value="0">--Pilih Penerbit--</option>
                                <?php 
                                    $penerbit = viewPenerbit($koneksi);

                                    if($penerbit != false){
                                        foreach($penerbit as $recP) {
                                ?>
                                <option value="<?= $recP['id'] ?>"><?= $recP['nama'] ?></option>

                                <?php  
                                        }
                                    } 
                                ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="nmpenerbit" class="form-label">Tahun Terbit</label>
                        <select class="form-select" name="tahunTerbit">
                                <option selected value="0">--Pilih Tahun--</option>
                                <?php 
                                    for($i = 1900; $i <= date('Y'); $i++){
                                ?>
                                <option value="<?= $i ?>"><?= $i ?></option>
                                <?php } ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="nmpenerbit" class="form-label">Kategori / Genre</label>
                        <select class="form-select" name="genre">
                                <option selected value="0">--Pilih Genre--</option>
                                <?php 
                                    $kategori = viewKategori($koneksi);

                                    if($kategori != false){
                                        foreach($kategori as $recK) {
                                ?>
                                <option value="<?= $recK['id'] ?>"><?= $recK['nama'] ?></option>

                                <?php  
                                        }
                                    } 
                                ?>
                               
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="sinopsis">Sinopsis</label>
                        <textarea name="sinopsis" class="form-control" placeholder="Leave a comment here" id="" for="sinopsis"></textarea>
                    </div>
    

                    <div class="mb-3">
                        <input type="submit" value="Input Data Buku" class="btn btn-primary" name="btnInputBuku">
                    </div>


                </form>
            </div>
        </div>
    </div>
    
    





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>