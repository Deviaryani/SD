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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input</title>
</head>
<body>
    <h3>INPUT DATA MAHASISWA</h3> 
    <form action="cetak.php" method="post">
    <table>
        <tr>
            <td>
                No. Urut matkul 
            </td>
            <td>
                :
            </td>
            <td>
                <input type="number" name="inpNo" >
            </td>
        </tr>
        <tr>
            <td>
                Nama Matkul 
            </td>
            <td>
                :
            </td>
            <td>
                <input type="text" name="inpNama">
            </td>
        </tr>
        <tr>
            <td>
                SKS
            </td>
            <td>
                :
            </td>
            <td>
                <input type="number" name="inpSKS">
            </td>
        </tr>
        <tr>
            <td>
                Semester
            </td>
            <td>
                :
            </td>
            <td>
                <input type="number" name="inpSMS">
            </td>
        </tr>
        <tr>
            <td>
               Prodi 
            </td>
            <td>
                :
            </td>
            <td>
                <select name="prodi" id="">
                    <option value="01">D3 Teknik Informatika</option>
                    <option value="02">D3 Teknik Elektro</option>
                    <option value="03">D3 Teknik Mesin</option>
                    <option value="04">D3 Teknik Listrik</option>
                    <option value="05">D3 Teknik Pengendalian Pencemaran Linkungan</option>
                    <option value="06">D3 Pengembangan Produk agroindustri</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                Jenis Matkul
            </td>
            <td>
                :
            </td>
            <td>
                <select name="jenis" id="">
                    <option value="T">Teori</option>
                    <option value="P">Praktek</option>
               </select>
            </td>
       </tr>
        <tr>
            <td>
                <p><button type="submit" name="add" style="background-color: aqua;">Tambah Data Matkul</p></button>
            </td>
        </tr>
    </table>
    </form>
</body>
</html>
<?php
echo "<p>Apakah anda ingin menambah data matkul lagi? <a href='kategori.html'>Y</a> / <a href='cetak.php'>T</a></p>";
?>