<?php

function validasiData($data){

    foreach($data as $index => $value){
        $value = trim($value);
        if($value === '' || $value === 0 || $value === null || $value === false){
            return $index;
        }
    }
    return 0;
}

function inputBuku($data, $koneksi){
    $judul = $data['judul'];
    $pengarang = $data['pengarang'];
    $penerbit = $data['penerbit'];
    $tahun = $data['tahun'];
    $genre = $data['genre'];
    $sinopsis = $data['sinopsis'];
    $tanggal = time();

    $sql = "INSERT INTO buku (judul, pengarang, penerbit, tahun, kategori, sinopsis, tanggal) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($koneksi, $sql);
    if($stmt === false) 
    {
        return "failed";
    }

    mysqli_stmt_bind_param($stmt, 'siiiisi', $judul, $pengarang, $penerbit, $tahun, $genre, $sinopsis, $tanggal);
    $result = mysqli_stmt_execute($stmt);

    if(!$result)
        return false;
    
    mysqli_stmt_close($stmt);
    return true;  
}

function inputBukuGambar($data, $koneksi){
    $judul = $data['judul'];
    $pengarang = $data['pengarang'];
    $penerbit = $data['penerbit'];
    $tahun = $data['tahun'];
    $genre = $data['genre'];
    $sinopsis = $data['sinopsis'];
    $gambar = $data['gambar'];
    $tanggal = time();

    $sql = "INSERT INTO buku_gambar (judul, pengarang, penerbit, tahun, kategori, sinopsis, gambar, tanggal) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($koneksi, $sql);
    if($stmt === false) 
    {
        return "failed";
    }

    mysqli_stmt_bind_param($stmt, 'siiiissi', $judul, $pengarang, $penerbit, $tahun, $genre, $sinopsis, $gambar, $tanggal);
    $result = mysqli_stmt_execute($stmt);

    if(!$result)
        return false;
    
    mysqli_stmt_close($stmt);
    return true;  
}

// function untuk menampilkan data buku
function viewBuku($koneksi){
    $sql = "SELECT buku.judul, kategori.nama as kategori, pengarang.nama as author, penerbit.nama as publish FROM buku 
                        LEFT JOIN pengarang ON buku.pengarang = pengarang.id
                        LEFT JOIN penerbit ON buku.penerbit = penerbit.id
                        LEFT JOIN kategori ON buku.kategori = kategori.id
                        ORDER BY buku.id DESC";

    $stmt = mysqli_query($koneksi, $sql);

    if(mysqli_num_rows($stmt) > 0) return mysqli_fetch_all($stmt, MYSQLI_ASSOC);
    else return false; 
}

?>