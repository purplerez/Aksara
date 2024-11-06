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
    }
    else {
        echo "data $validasi kurang";
    }
}
?>