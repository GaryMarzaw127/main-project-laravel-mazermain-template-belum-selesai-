<?php

function format_rupiah($angka) {

    return number_format($angka, 0, ",", ".");

}

function angka_terbilang($angka) {
    $angka = abs($angka);
    $dibaca = array('', 'satu', 'dua', 'tiga', 'empat', 'lima', 'enam', 'tujuh', 'delapan', 'sembilan', 'sepuluh', 'sebelas');
    $angka_terbilang = '';

    if($angka < 12) {
        $angka_terbilang = ' ' . $dibaca[$angka];
    } else if($angka < 20) {
        $angka_terbilang = angka_terbilang($angka - 10) . ' belas';
    } else if($angka < 100) {
        $angka_terbilang = angka_terbilang($angka / 10) . ' puluh' . angka_terbilang($angka % 10);
    } else if($angka < 200) {
        $angka_terbilang = ' seratus' . angka_terbilang($angka - 100);
    } else if($angka < 1000) {
        $angka_terbilang = angka_terbilang($angka / 100) . ' ratus' . angka_terbilang($angka % 100); 
    } else if($angka < 2000) {
        $angka_terbilang = ' seribu' . angka_terbilang($angka - 1000); 
    } else if($angka < 1000000) {
        $angka_terbilang = angka_terbilang($angka / 1000) . ' ribu' . angka_terbilang($angka % 1000); 
    } else if($angka < 1000000000) {
        $angka_terbilang = angka_terbilang($angka / 1000000) . ' juta' . angka_terbilang($angka % 1000000); 
    } else if($angka < 1000000000000) {
        $angka_terbilang = angka_terbilang($angka / 1000000000) . ' milliar' . angka_terbilang($angka % 1000000000); 
    } 

    return $angka_terbilang;
}

function tanggal_indonesia($tgl, $tampil_hari = true) {

    $nama_hari = array(
        'Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum\'at', 'Sabtu'
    );

    $nama_bulan = array(1 =>
        'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
    );

    //Format Tanggal 2022-01-01
    // angka-angka dibawah adalah
    $tahun   = substr($tgl, 0, 4);
    $bulan   = $nama_bulan[(int) substr($tgl, 5, 2)];
    $tanggal = substr($tgl, 8, 2);
    $text    = '';

    if($tampil_hari) {
        $urutan_hari = date('w', mktime(0,0,0, substr($tgl, 5, 2), $tanggal, $tahun));
        $hari        = $nama_hari[$urutan_hari];
        $text       .= "$hari, $tanggal $bulan $tahun";
    } else {
        $text .= "$tanggal $bulan $tahun";
    }
    
    return $text;

}

function tambah_nol_didepan($value, $threshold = null) {

    return sprintf("%0". $threshold . "s", $value);
}

