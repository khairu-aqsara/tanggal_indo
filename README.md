# Konversi Tanggal dalam Format Indonesia

```
composer require ezadev/tgl_indo
```

```
use Ezadev\Tanggal\TanggalIndo;

$tgl = date('Y-m-d');

echo TanggalIndo::HariTanggalBulanTahun($tgl)."\n";
echo TanggalIndo::TanggalBulanTahun($tgl)."\n";
echo TanggalIndo::BulanTahun($tgl)."\n";
```
