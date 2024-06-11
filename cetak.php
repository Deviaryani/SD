<?php
require "function.php";
session_start();

$prod = [
    ['D3 Teknik Informatika', 01],
    ['D3 Teknik elektro', 01],
    ['D3 Teknik mesin', 01],
    ['D3 Teknik Listrik', 01],
    ['D3 Teknik Pengendalian Pencemaran Linkungan', 01],
];
$tp = [
    ['Teori', 'T'],
    ['Praktek', 'P']
];
?>
<?php

if(isset($_POST['add'])){
    $no = $_POST['inpNo'];
    $nama = $_POST['inpNama'];
    $sks = $_POST['inpSKS'];
    $semester = $_POST['inpSMS'];
    $prodi = $_POST['prodi'];
    $jenis = $_POST['jenis'];

    if(!isset($_SESSION['data'])) {
        $_SESSION['data'] = new Stack();
    }
    $_SESSION['data']->push($nama, $sks, $prodi, $semester, $jenis, $no); 
}
if(isset($_POST['popping'])){
    $_SESSION['data']->pop();
}
if(isset($_POST['deleteAll'])){
    $_SESSION['data']->clear();
}
$_SESSION['data']->printS();
echo "<p>Apakah ingin kembali ke menu utama? <a href='halaman.php'>Y</a> / <a href='end.php'>T</a></p>";
