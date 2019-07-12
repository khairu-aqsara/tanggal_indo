<?php

require_once("vendor/autoload.php");

use Ezadev\Tanggal\TanggalIndo;

$tgl = date('Y-m-d');

echo TanggalIndo::HariTanggalBulanTahun($tgl)."\n";
echo TanggalIndo::TanggalBulanTahun($tgl)."\n";
echo TanggalIndo::BulanTahun($tgl)."\n";
