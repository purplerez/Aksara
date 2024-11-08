<?php 

if(isset($_POST['btnInputBuku'])){

    // mengambil semua data dari form ke dalam variabel lokal
    $judul = htmlspecialchars($_POST['judul']); // mengambil data nama yang berasal dari form 
    $pengarang = $_POST['pengarang'];
    $penerbit = $_POST['penerbit'];
    $tahunTerbit = $_POST['tahunTerbit'];
    $genre = $_POST['genre'];
    $sinopsis = htmlspecialchars($_POST['sinopsis']);

    // variabel array associative 
    $data = [ 
        'judul' => $judul,
        'pengarang' => $pengarang,
        'penerbit' => $penerbit,
        'tahun' => $tahunTerbit,
        'genre' => $genre,
        'sinopsis' => $sinopsis
    ];

    $validasi = validasiData($data);

    if($validasi == 0 ){
        echo "data sudah lengkap siap di inputkan";
        $result = inputBuku($data, $koneksi);
        if($result) header("location:input_buku.php?status=1");
        else header("location:input_buku.php?errno=1");
    }
    else {
        echo "data $validasi kurang";
    }
}
else if(isset($_POST['btnInputBukuGambar'])){

    // mengambil semua data dari form ke dalam variabel lokal
    $judul = htmlspecialchars($_POST['judul']); // mengambil data nama yang berasal dari form 
    $pengarang = $_POST['pengarang'];
    $penerbit = $_POST['penerbit'];
    $tahunTerbit = $_POST['tahunTerbit'];
    $genre = $_POST['genre'];
    $sinopsis = htmlspecialchars($_POST['sinopsis']);
    $gambar = basename($_FILES['gambar']['name']);

    // variabel array associative 
    $data = [ 
        'judul' => $judul,
        'pengarang' => $pengarang,
        'penerbit' => $penerbit,
        'tahun' => $tahunTerbit,
        'genre' => $genre,
        'sinopsis' => $sinopsis,
        'gambar' => $gambar
    ];

    // var_dump($data);

    $validasi = validasiData($data);

    if($validasi == 0 ){
        // echo "data sudah lengkap siap di inputkan";
        $result = inputBukuGambar($data, $koneksi);
        $folderTujuan = $rootDir."upload";
        if($result) 
        { 
            $upload = tambahGambar($folderTujuan, $_FILES['gambar']);
            if($upload) 
                header("location:input_buku_gambar.php?status=1");
            else 
            header("location:input_buku_gambar.php?status=1&errno=2");
        }
        else header("location:input_buku_gambar.php?errno=1");
    }
    else {
        echo "data $validasi kurang";
    }
}

?>