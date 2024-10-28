<?php 

if(isset($_POST['inputData'])){

    $nama = $_POST['nama']; // mengambil data nama yang berasal dari form 
    $gender = $_POST['gender'];
    $hobi = implode(',', $_POST['hobi']);
    $ukuran = implode(',', $_POST['ukuran']);
    
    echo $nama.'<br/>'; // menampilkan isi dari variabel nama
    echo 'gender'. $gender.'<br/>';
    echo 'Hobi nya adalah '.$hobi.'<br/>';
    echo 'Ukuran '.$ukuran.'<br/>';

}
?>