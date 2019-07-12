# Konversi Tanggal dalam Format Indonesia

```
composer require ezadev/tgl_indo
```

```php
use Ezadev\Tanggal\TanggalIndo;

$tgl = date('Y-m-d');

echo TanggalIndo::HariTanggalBulanTahun($tgl)."\n"; // Jumat, 12 Juli 2019
echo TanggalIndo::TanggalBulanTahun($tgl)."\n"; // 12 Juli 2019
echo TanggalIndo::BulanTahun($tgl)."\n"; // Juli 2019
```
