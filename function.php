<?php
function insert($data)
{

    $bandara_asal_pajak = [
        "Soekarno Hatta" => 65000,
        "Husein Sastranegara" => 50000,
        "Abdul Rachman Saleh" => 40000,
        "Juanda" => 30000
    ];

    $bandara_tujuan_pajak = [
        "Ngurah Rai" => 85000,
        "Hasannudin" => 70000,
        "Inanwatan" => 90000,
        "Sultan Iskandar Muda" => 60000
    ];

    $maskapai = $data['maskapai'];
    $bandara_asal = $data['bandara_asal'];
    $bandara_tujuan = $data['bandara_tujuan'];
    $harga_tiket = $data['harga_tiket'];

    $total_pajak = $bandara_asal_pajak[$bandara_asal] + $bandara_tujuan_pajak[$bandara_tujuan];
    $total_harga_tiket = $total_pajak + $harga_tiket;

    $result = [
        'maskapai' => $maskapai,
        'bandara_asal' => $bandara_asal,
        'bandara_tujuan' => $bandara_tujuan,
        'harga_tiket' => $harga_tiket,
        'total_pajak' => $total_pajak,
        'total_harga_tiket' => $total_harga_tiket
    ];

    return $result;
}