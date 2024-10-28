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
        Gender : <input type="radio" name="gender" id="" value=""> Laki 
                 <input type="radio" name="gender" id="" value=""> Perempuan
                 <br/>
        Hobi : <input type="checkbox" name="hobi1" id="" value=""> Membaca <br/>
        <input type="checkbox" name="hobi2" id="" value=""> berlari <br/>
        <input type="checkbox" name="hobi3" id="" value=""> tidur <br/>
        <input type="checkbox" name="hobi4" id="" value=""> main game <br/>
        Foto : <input type="file" name="foto" id=""><br/>

        <input type="submit" value="Input Data" name="inputData"> 
        <!-- <button type="submit">Inputkan</button> -->


    </form>
    
</body>
</html>