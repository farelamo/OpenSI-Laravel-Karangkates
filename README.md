# Report PDF with Laravel DOMPDF
Aplikasi layanan surat untuk keperluan sistem informasi desa. 
Mengacu pada OpenSID, namun lebih di ATM (Amati Tiru Modifikasi)

# Pre-requisite

1. install composer
```
composer install
```

2. install DOMPDF
```
composer require barryvdh/laravel-dompdf
```

3. Laravel DOMPDF Setting in config/app.php
    - providers 
- Barryvdh\DomPDF\ServiceProvider::class,
    - aliases
- 'PDF' => Barryvdh\DomPDF\Facade::class,

# Reference
- Berdasar pada website [OpenSID](https://demosid.opendesa.id/siteman)