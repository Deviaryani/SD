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
    <form action="" method="post">
        <table>
        <tr>
            <td>
                <button name="popping" style="background-color: aquamarine;">Hapus data paling atas</button>
            </td>
        </tr>
        <tr>
            <td>
                <button name="deleteAll" style="background-color: red; color: white">Hapus semua data</button>
            </td>
        </tr>
    </table>
    </form>
    <p><a href="halaman.php">Kembali ke menu utama</a></p>
</body>
</html>

<?php

if(isset($_POST['popping'])){
    $_SESSION['data']->pop();
    echo "data teratas sudah dihapus";
}
if(isset($_POST['deleteAll'])){
    $_SESSION['data']->clear();
    echo "semua data sudah dihapus";
}
