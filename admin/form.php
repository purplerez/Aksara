<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="data.php" enctype="multipart/form-data" method="POST" >
        <!-- input nama : single line text input  -->
        Nama : <input type="text" name="nama" value="" /><br/>>
        NISN : <input type="number" name="nisn" id=""><br/>
        NIS  : <input type="text" name="nis" id=""><br/>
        Jurusan : 
        <select name="jurusan" id="">
            <option value="0">--Pilih Jurusan--</option>
            <option value="1">PPLG</option>
            <option value="2">TKJT</option>
            <option value="3">DKV</option>
            <option value="4">BDP</option>
            <option value="5">SP</option>
        </select> <br/>
        Tanggal Lahir : <input type="date" name="tgl_lahir" id=""><br/>
        Alamat : <textarea name="alamat" id="" cols="30" rows="10"></textarea>
        <br/>
        No Telp : <input type="number" name="no_telp" id=""><br/>
        Gender : <input type="radio" name="gender" id="" value="Laki"> Laki 
                 <input type="radio" name="gender" id="" value="Perempuan"> Perempuan
                 <br/>
        Hobi : <input type="checkbox" name="hobi[]" id="" value="maos"> Membaca <br/>
        <input type="checkbox" name="hobi[]" id="" value="mlaku"> berlari <br/>
        <input type="checkbox" name="hobi[]" id="" value="sare"> tidur <br/>
        <input type="checkbox" name="hobi[]" id="" value="dolanan"> main game <br/>
        <input type="checkbox" name="hobi[]" id="" value="Renang"> Berenang <br/>
        <input type="checkbox" name="hobi[]" id="" value="Sepeda"> Bersepeda <br/>
        Foto : <input type="file" name="foto" id=""><br/>
        UKURAN : <br/>
        <?php 
            for($i = 30; $i <= 45; $i++){ 
        ?>
        <input type="checkbox" name="ukuran[]" id="" value="<?= $i ?>"> <?= $i ?> <br/>

        <?php } ?>
        
        <input type="submit" value="Input Data" name="inputData"> 
        <!-- <button type="submit">Inputkan</button> -->


    </form>
    
</body>
</html>