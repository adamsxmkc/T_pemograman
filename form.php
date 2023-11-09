<?php
    include "header.php";
    if($_GET['page'] == 'home') {
        include "../form/home.php";
    } elseif($_GET['page'] == 'barang') {
        include "../form/tampil_barang.php";
    } elseif($_GET['page'] == 'kategori') {
        include "../form/tampil_kategori.php";
    } elseif($_GET['page'] == 'member') {
        include "../form/tampil_member.php";
    } elseif($_GET['page'] == 'penjualan') {
        include "../form/tampil_penjualan.php";
    } elseif($_GET['page'] == 'transaksi') {
        include "../form/tampil_transaksi.php";
    } elseif($_GET['page'] == 'user') {
        include "../form/tampil_user.php";
    } elseif($_GET['page'] == 'report') {
        include "../form/view_report.php";
    } elseif($_GET['page'] == 'lbarang') {
        include "../form/tambah_barang.php";
    } elseif($_GET['page'] == 'lkategori') {
        include "../form/tambah_kategori.php";
    } elseif($_GET['page'] == 'lmember') {
        include "../form/tambah_member.php";
    } elseif($_GET['page'] == 'lpenjualan') {
        include "../form/tambah_penjualan.php";
    } elseif($_GET['page'] == 'ltransaksi') {
        include "../form/tambah_transaksi.php";
    } elseif($_GET['page'] == 'luser') {
        include "../form/tambah_user.php";
    } else {
        echo "page tidak ditemukan";
    }
?>