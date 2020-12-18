<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Update dari Branch Master

Agar _branch_ kita bisa sama dengan _branch_ utama, langkah update nya sebagai berikut :

```
git remote add upstream https://github.com/ATW-SIM-Logbook/atw-sim-logbook.git
git fetch upstream
git pull upstream master
```

## Pre-requisite Instalasi Laravel

Sebelum mengerjakan, pastikan ter-install [Composer](https://getcomposer.org/).

#### Langkah Menjalankan File hasil clone di komputer lokal :

1. Menginstall composer (jika belum)

```
composer install
```

2. Kemudian Buat file .env dan copy isi dari file .env.example

3. Lalu jalankan command berikut ini

```
php artisan key:generate
php artisan migrate
php artisan serve
```

4. Jalankan _Tinker_ untuk insert data user dari console:

```
php artisan tinker

$user = new \App\User;

$user->role = 'admin';
$user->name = 'name--admin--bebas';
$user->email = 'email--admin--bebas';
$user->password = bcrypt('password--admin--bebas');
$user->remember_token = Str::random(40);
$user->save();
```

Catatan: untuk name, email, dan password bisa diisikan sesuai keinginan.

5. Akan muncul error ketika pertama kali mengakses menu: Master Mahasiswa,
karena memang tidak ada data di database.

Untuk mengatasinya, lakukan insert data dari localhost/phpmyadmin.

![alt text](https://live.staticflickr.com/65535/50732247163_e2f1781b0b_b.jpg)

## Commit Pengerjaan

Sebelum commit ke project, pastikan sesuai dengan _nama branch_.

Cara untuk commit agar rapi dan terstruktur bisa dilihat [disini](https://github.com/burhanahmeed/cara-kontribusi-open-source).

## Tools yang Digunakan

- [Xampp PHP 7](https://www.apachefriends.org/download.html)
- [Composer](https://getcomposer.org/)
- [laravel 7.29.3](https://laravel.com/docs/7.x)
- [Bootstrap 4](https://getbootstrap.com/)
- [Template: SB Admin 2](https://startbootstrap.com/theme/sb-admin-2)
- . . .

## Lisensi

Kerangka kerja Laravel adalah perangkat lunak sumber terbuka yang dilisensikan di bawah [MIT license](https://opensource.org/licenses/MIT).
