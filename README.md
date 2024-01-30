<p align="center"><a href="https://laravel.com" target="_blank"><kbd><img src="https://laravel.com/img/logomark.min.svg" width="50"></kbd></a>||<a href="#" target="_blank"><kbd><img src="https://www.pn-tais.go.id/wp-content/themes/mahkamahagung/images/logo.png" width="50"></kbd></a></p>

## Tentang

Aplikasi PTSP Online Pengadilan Negeri Tais

## Kebutuhan

1. PHP ^ 7.3.4
2. Framework Laravel 8.7.5

## Petunjuk Instalasi

Sebelum instalasi, anda harus mendownload terlebih dahulu [Node.js](https://nodejs.org/en/download/), [Composer](https://getcomposer.org/Composer-Setup.exe), and [XAMPP](https://www.apachefriends.org/xampp-files/7.4.27/xampp-windows-x64-7.4.27-2-VC15-installer.exe) dengan PHP 7.4.x atau [Laragon](https://github.com/leokhoa/laragon/releases/download/5.0.0/laragon-wamp.exe) dengan PHP 7.4.x

1. Lakukan kloning Repository

```shell
git clone https://github.com/ivanpakpahan2702/ptsp.git
```

atau apabila sudah pernah dikloning sebelumnya, anda dapat mengupdatenya dengan perintah berikut.

```shell
git checkout master
```

```shell
git pull origin master
```

2. Install Paket yang dibawa oleh composer

```shell
composer install
```

3. Buat File .env lalu copy semua isi dari .env.example (atau anda dapat menjalankan perintah di bawah ini). Lalu ubah file .env sesuai dengan konfigurasi project anda (nama database sesuai dengan yang ada pada mysql, kode pusher, dll).

```shell
cp .env.example .env
```

4. Selanjutnya jalankan perintah berikut ini

```shell
php artisan key:generate
```

5. Buat database migrations dan seeds dengan menjalankan perintah berikut ini

```shell
php artisan migrate:fresh --seed
```

6. Jalankan Project

Lakukan perintah berikut ini di terminal

```shell
php artisan serve
```

lalu jika tidak muncul pesan error, jalankan url berikut di browser anda.

```shell
http://localhost:8000/
```
