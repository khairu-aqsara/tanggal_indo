<?php

namespace Ezadev\Tanggal;

class TanggalIndo {

  use Format;

  public static function HariTanggalBulanTahun($tgl){
    $tanggal = date('D, d M Y', strtotime($tgl));
    return strtr($tanggal, Format::$format_hari);
  }

  public static function TanggalBulanTahun($tgl){
    $tanggal = date('d M Y', strtotime($tgl));
    return strtr($tanggal, Format::$format_bulan);
  }

  public static function BulanTahun($tgl){
    $tanggal = date('M Y', strtotime($tgl));
    return strtr($tanggal, Format::$format_bulan);
  }

}
