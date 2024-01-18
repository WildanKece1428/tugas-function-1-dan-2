<?php

$namalengkap = "Muhammad Wildan Kurnia";
$umur = "16";
$kelas = "X RPL 2";
$ttl = "Bekasi, 23 Februari 2008";
$noWhatsapp = "089529175517";
$alamat = "JL. Abdul muis no 44 Jakarta Pusat";

echo "=========Program Biodata Sederhana Function======== <br/>";

function myBiodata(){
    global $namalengkap, $umur, $kelas, $ttl, $noWhatsapp, $alamat;
    echo "namalengkap : $namalengkap <br/>";
    echo "umur : $umur <br/>";
    echo "kelas : $kelas <br/>";
    echo "Tempat Tanggal lahir : $ttl <br/>";
    echo "noWhatsapp : $noWhatsapp <br/>";
    echo "alamat : $alamat <br/>";
}

echo myBiodata ();

?>