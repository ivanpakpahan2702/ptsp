<?php

namespace Database\Seeders;

use App\Models\Dashboard;
use App\Models\Perdata;
use App\Models\Posbakum;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use \App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name" => "Ivan Pakpahan",
            "email" => "ivanpakpahanchrst@gmail.com",
            "password" => Hash::make('123456'),
            "role" => 'Pengguna',
            "agama" => 'Kristen Protestan',
            "jenis_kelamin" => 'p',
            "nik" => "1002021202000002",
            "kode_pos" => "32675",
            'email_verified_at' => now(),
        ]);
        User::create([
            "name" => "Sri Wahyuni",
            "email" => "sri.wahyuni1788@gmail.com",
            "password" => Hash::make('123456'),
            "role" => 'Pengguna',
            "agama" => 'Kristen Protestan',
            "jenis_kelamin" => 'w',
            "nik" => "1002021202000002",
            "kode_pos" => "32675",
            'email_verified_at' => now(),
        ]);
        User::create([
            "name" => "Misha Petrenkov",
            "email" => "petrenko270200@gmail.com",
            "password" => Hash::make('123456'),
            "role" => 'Admin Perdata',
            "agama" => 'Kristen Protestan',
            "jenis_kelamin" => 'p',
            "nik" => "1002021202000002",
            "kode_pos" => "32675",
            'email_verified_at' => now(),
        ]);
        User::create([
            "name" => "Burjouis Leonardo",
            "email" => "leonardo.da27@gmail.com",
            "password" => Hash::make('123456'),
            "role" => 'Admin Hukum',
            "agama" => 'Kristen Protestan',
            "jenis_kelamin" => 'p',
            "nik" => "1002021202000002",
            "kode_pos" => "32675",
            'email_verified_at' => now(),
        ]);
        User::create([
            "name" => "Yjra Pajeet",
            "email" => "yjrahindi@gmail.com",
            "password" => Hash::make('123456'),
            "role" => 'Admin Hukum',
            "agama" => 'Islam',
            "jenis_kelamin" => 'p',
            "nik" => "1002021202000002",
            "kode_pos" => "32675",
            'email_verified_at' => now(),
        ]);
        User::create([
            "name" => "Kuswandi Pakpahan",
            "email" => "kuswandi98.pakpahan@gmail.com",
            "password" => Hash::make('123456'),
            "role" => 'Master Admin',
            "agama" => 'Kristen Protestan',
            "jenis_kelamin" => 'p',
            "nik" => "1002021202000002",
            "kode_pos" => "32675",
            'email_verified_at' => now(),
        ]);
        Dashboard::create([
            "article" => '<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/REC-html40/loose.dtd">
            <html>
                <body>
                    <div style="text-align: center;">
                        <b><span style=' . '"font-size: 24px; font-family: \'Comic Sans MS\';"' . '>
                            Video Profil
                            </span>
                        </b>
                    </div>
                    <div style="text-align: center;">
                        <iframe width="320" height="240"
                        src="https://www.youtube.com/embed/odgUo3LgMQM?si=iiu9iFKfLsq6bTmI"
                        title="YouTube video player" frameborder="0" allow="accelerometer;
                        autoplay; clipboard-write; encrypted-media; gyroscope;
                        picture-in-picture; web-share" allowfullscreen=""
                        style="background-color: var(--bs-modal-bg);
                        font-size: var(--bs-body-font-size);
                        font-weight: var(--bs-body-font-weight);
                        text-align: var(--bs-body-text-align);">
                        </iframe>
                    </div>
                    <div style="text-align: center;">
                    <br>
                    </div>
                    <div style="text-align: center;">
                    <br>
                    </div>
                    <div style="text-align: center; ">
                        <span style=' . '"font-family: \'Comic Sans MS\'; font-size: 24px;"' . '>
                            PTSP Online merupakan Pelayanan Terpadu Satu Pintu (PTSP) yang disediakan oleh
                            Pengadilan Negeri Tais agar dapat diakses secara online.
                            Layanan PTSP Online ini merupakan bagian dari kegiatan untuk
                            peningkatan layanan publik dalam memberikan kemudahan bagi masyarakat umum
                            dan khususnya pencari keadilan untuk mendapatkan informasi layanan pada
                            Pengadilan Negeri Tais.
                        </span>
                    </div>
                    <div style="text-align: center;">
                    <br>
                    </div>
                    <div style="text-align: center; ">
                        <span style=' . '"font-family: \'Comic Sans MS\'; font-size: 24px;"' . '>
                            <b style="">
                            Jam Layanan
                            </b>
                        </span>
                    </div>
                    <div style="text-align: center; ">
                        <span style=' . '"font-family: \'Comic Sans MS\'; font-size: 24px;"' . '>
                            Senin - Kamis:
                        </span>
                    </div>
                    <div style="text-align: center; ">
                        <span style=' . '"font-family: \'Comic Sans MS\'; font-size: 24px;"' . '>
                            08.00 WIB - 16.00.WIB,
                        </span>
                    </div>
                    <div style="text-align: center; ">
                        <span style=' . '"font-family: \'Comic Sans MS\'; font-size: 24px;"' . '>
                            Jumat:
                        </span>
                    </div>
                    <div style="text-align: center; ">
                        <span style=' . '"font-family: \'Comic Sans MS\'; font-size: 24px;"' . '>
                            07.30 WIB - 16.00.WIB
                        </span>
                    </div>
                    </body>
                    </html>',
        ]);
        Perdata::create([
            "article" => '<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/REC-html40/loose.dtd">
            <html>
            <body>
                <p>
                    <span style=' . '"font-family: \'Comic Sans MS\'; font-size: 24px;"' . '>
                        Beberapa Pelayanan PTSP Perdata:
                    </span>
                </p>
                <ol>
                    <li>
                        <span style=' . '"font-family: \'Comic Sans MS\'; font-size: 24px;"' . '>
                            Menerima Pendaftaran perkara gugatan biasa.
                        </span>
                    </li>
                    <li>
                        <span style=' . '"background-color: var(--bs-modal-bg); font-size: 24px; font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align); font-family: \'Comic Sans MS\';"' . '>
                        Menerima Pendaftaran perkara gugatan sederhana.
                        </span>
                    </li>
                    <li>
                        <span style=' . '"background-color: var(--bs-modal-bg); font-size: 24px; font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align); font-family: \'Comic Sans MS\';"' . '>
                        Menerima pendaftaran perkara perlawanan/bantahan.
                        </span>
                    </li>
                    <li>
                        <span style=' . '"background-color: var(--bs-modal-bg); font-size: 24px; font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align); font-family: \'Comic Sans MS\';"' . '>
                        Menerima Pendaftaran verzet atas putusan verstek.
                        </span>
                    </li>
                    <li>
                        <span style=' . '"background-color: var(--bs-modal-bg); font-size: 24px; font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align); font-family: \'Comic Sans MS\';"' . '>
                        Menerima Pendaftaran perkara permohonan.
                        </span>
                    </li>
                    <li>
                        <span style=' . '"background-color: var(--bs-modal-bg); font-size: 24px; font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align); font-family: \'Comic Sans MS\';"' . '>
                        Menerima Pendaftaran permohonan banding, kasasi dan peninjauan kembali.
                        </span>
                    </li>
                    <li><span style=' . '"background-color: var(--bs-modal-bg); font-size: 24px; font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align); font-family: \'Comic Sans MS\';"' . '>
                        Menerima memori/kontra memori banding, kasasi dan peninjauan kembali.
                        </span>
                    </li>
                    <li><span style=' . '"background-color: var(--bs-modal-bg); font-size: 24px; font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align); font-family: \'Comic Sans MS\';"' . '>
                        Menerima permohonan sumpah atas ditemukannya bukti baru dalam permohonan peninjauan kembali.
                        </span>
                    </li>
                    <li><span style=' . '"background-color: var(--bs-modal-bg); font-size: 24px; font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align); font-family: \'Comic Sans MS\';"' . '>
                        Menerima permohonan pendaftaran Perjanjian Bersama.
                        </span>
                    </li>
                    <li><span style=' . '"background-color: var(--bs-modal-bg); font-size: 24px; font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align); font-family: \'Comic Sans MS\';"' . '>
                        Menerima permohonan pengembalian sisa panjar biaya perkara.
                        </span>
                    </li>
                    <li><span style=' . '"background-color: var(--bs-modal-bg); font-size: 24px; font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align); font-family: \'Comic Sans MS\';"' . '>
                        Menerima Permohonan dan pengambilan turunan putusan.
                        </span>
                    </li>
                    <li><span style=' . '"background-color: var(--bs-modal-bg); font-size: 24px; font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align); font-family: \'Comic Sans MS\';"' . '>
                        Menerima Pendaftaran permohonan eksekusi.
                        </span>
                    </li>
                    <li><span style=' . '"background-color: var(--bs-modal-bg); font-size: 24px; font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align); font-family: \'Comic Sans MS\';"' . '>
                        Menerima Pendaftaran permohonan konsinyasi.
                        </span>
                    </li>
                    <li><span style=' . '"background-color: var(--bs-modal-bg); font-size: 24px; font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align); font-family: \'Comic Sans MS\';"' . '>
                        Menerma Permohonan pengambilan uang hasil eksekusi dan uang konsinyasi.
                        </span>
                    </li>
                    <li><span style=' . '"background-color: var(--bs-modal-bg); font-size: 24px; font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align); font-family: \'Comic Sans MS\';"' . '>
                        Menerima Permohonan pencabutan gugatan, permohonan, banding, kasasi, peninjauan kembali dan eksekusi.
                        </span>
                    </li>
                    <li><span style=' . '"background-color: var(--bs-modal-bg); font-size: 24px; font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align); font-family: \'Comic Sans MS\';"' . '>
                        Layanan-layanan lain yang berhubungan dengan proses dan informasi penyelesaian perkara perdata/kekhususan.
                        </span>
                    </li>
                </ol>
                <p><span style=' . '"background-color: var(--bs-modal-bg); font-size: 24px; font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align); font-family: \'Comic Sans MS\';"' . '>
                    <br>
                    </span>
                </p>
                <p><span style=' . '"background-color: var(--bs-modal-bg); font-size: 24px; font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align); font-family: \'Comic Sans MS\';"' . '>
                    Anda dapat membaca brosur terkait pelayanan perdata pada file berikut :&nbsp;
                    </span>
                    <a href="https://www.pn-tais.go.id/wp-content/uploads/2022/07/Brosur-Perdata-edit.pdf" target="_blank">
                        <span style=' . '"font-family: \'Comic Sans MS\'; font-size: 24px;"' . '>
                            Brosur Perdata PN Tais
                        </span>
                    </a>
                </p>
                <p><span style=' . '"background-color: var(--bs-modal-bg); font-size: 24px; font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align); font-family: \'Comic Sans MS\';"' . '>
                    <br>
                    </span>
                </p>
            </body>
            </html>',
        ]);
        Posbakum::create([
            "article" => '<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/REC-html40/loose.dtd">
            <html>
            <body>
                <h2 style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; font-family: Cabin, sans-serif; line-height: 1.2; color: rgb(91, 50, 180); font-size: 48px;">
                <span style=' . '"font-family: \'Comic Sans MS\';"' . '>
                    Dapatkan&nbsp;
                </span>
                <span style=' . '"font-family: \'Comic Sans MS\';"' . '>
                    Bantuan Hukum Bebas Biaya!
                </span>
                </h2>
                <h2 style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; font-family: Cabin, sans-serif; line-height: 1.2; color: rgb(91, 50, 180); font-size: 48px;">
                <span style=' . '"font-family: \'Comic Sans MS\';"' . '>
                    <br>
                </span>
                </h2>
                <div>
                    <span style=' . '"color: rgb(114, 106, 132); font-family: \'Comic Sans MS\'; font-size: 20px; text-align: right;"' . '>
                        Anda yang kurang mampu berhak
                    </span>
                    <br style="margin: 0px; padding: 0px; color: rgb(114, 106, 132); font-family: Cabin, sans-serif; font-size: 20px; text-align: right;">
                    <span style=' . '"color: rgb(114, 106, 132); font-family: \'Comic Sans MS\'; font-size: 20px; text-align: right;"' . '>
                        mendapatkan layanan bantuan hukum
                    </span>
                    <br style="margin: 0px; padding: 0px; color: rgb(114, 106, 132); font-family: Cabin, sans-serif; font-size: 20px; text-align: right;">
                    <span style=' . '"color: rgb(114, 106, 132); font-family: \'Comic Sans MS\'; font-size: 20px; text-align: right;"' . '>
                        secara gratis.
                    </span>
                    <br style="margin: 0px; padding: 0px; color: rgb(114, 106, 132); font-family: Cabin, sans-serif; font-size: 20px; text-align: right;">
                    <span style=' . '"color: rgb(114, 106, 132); font-family: \'Comic Sans MS\'; font-size: 20px; text-align: right;"' . '>
                        Gunakan hak anda, manfaatkan
                    </span>
                    <br style="margin: 0px; padding: 0px; color: rgb(114, 106, 132); font-family: Cabin, sans-serif; font-size: 20px; text-align: right;">
                    <span style=' . '"color: rgb(114, 106, 132); font-family: \'Comic Sans MS\'; font-size: 20px; text-align: right;"' . '>
                    POSBAKUM!
                    </span>
                </div>
                <div>
                    <span style="color: rgb(114, 106, 132); font-family: Cabin, sans-serif; font-size: 20px; text-align: right;">
                    <br>
                    </span>
                </div>
                <div>
                    <h5 style="margin-right: 0px; margin-bottom: 0.5rem; margin-left: 0px; padding: 0px; font-family: Cabin, sans-serif; line-height: 1.2; color: rgb(0, 0, 0); font-size: 1.25rem;">
                        <span style=' . '"font-family: \'Comic Sans MS\';"' . '>
                            Lengkapi syaratnya&nbsp;</span><span style=' . '"font-family: \'Comic Sans MS\';"' . '>
                            dan lampirkan:
                        </span>
                    </h5>
                    <ol style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(33, 37, 41); font-family: Cabin, sans-serif; font-size: 16px;">
                        <li style="margin: 0px; padding: 0px; list-style: none;">
                            <ul>
                                <li style="margin-right: 0px; margin-left: 0px; padding: 0px; color: rgb(114, 106, 132);">
                                    <span style=' . '"font-family: \'Comic Sans MS\';"' . '>
                                        Gugatan / Surat Permohonan
                                    </span>
                                </li>
                                <li style="margin-right: 0px; margin-left: 0px; padding: 0px; color: rgb(114, 106, 132);">
                                    <span style=' . '"font-family: \'Comic Sans MS\';"' . '>
                                        Surat Keterangan Tidak Mampu (SKTM) dari Lurah / Kepala Desa, atau Surat Keterangan Tunjangan Sosial lainnya, seperti Kartu Keluarga Miskin (KKM), Kartu Jaminan Kesehatan Masyarakat (JAMKESNAS), Kartu Program Keluarga Harapan (PKH), Kartu Bantuan Langsung Tunai (BLT), atau
                                    </span>
                                </li>
                                <li style="margin-right: 0px; margin-left: 0px; padding: 0px; color: rgb(114, 106, 132);">
                                    <span style=' . '"font-family: \'Comic Sans MS\';"' . '>
                                        Surat Pernyataan Tidak Mampu yang ditandatangani Pemohon dan Ketua Pengadilan Negeri
                                    </span>
                                </li>
                            </ul>
                        </li>
                    </ol>
                </div>
                <h5 style="margin-right: 0px; margin-bottom: 0.5rem; margin-left: 0px; padding: 0px; font-family: Cabin, sans-serif; line-height: 1.2; color: rgb(0, 0, 0); font-size: 1.25rem;">
                    <br>
                </h5>
                <h5 style="margin-right: 0px; margin-bottom: 0.5rem; margin-left: 0px; padding: 0px; font-family: Cabin, sans-serif; line-height: 1.2; color: rgb(0, 0, 0); font-size: 1.25rem;">
                    <span style=' . '"font-family: \'Comic Sans MS\';"' . '>
                        Layanan yang disediakan:
                    </span>
                </h5>
                <h2 style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; font-family: Cabin, sans-serif; line-height: 1.2; color: rgb(91, 50, 180); font-size: 48px;">
                    <ol style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(33, 37, 41); font-size: 16px;">
                        <li style="margin: 0px; padding: 0px; list-style: none;">
                            <ul>
                                <li style="margin-right: 0px; margin-left: 0px; padding: 0px; color: rgb(114, 106, 132);">
                                    <span style=' . '"font-family: \'Comic Sans MS\';"' . '>
                                        konsultasi hukum untuk berbagai perkara
                                    </span>
                                </li>
                                <li style="margin-right: 0px; margin-left: 0px; padding: 0px; color: rgb(114, 106, 132);">
                                    <span style=' . '"font-family: \'Comic Sans MS\';"' . '>
                                        Penulisan dokumen hukum (misalnya : Gugatan)
                                    </span>
                                </li>
                                <li style="margin-right: 0px; margin-left: 0px; padding: 0px; color: rgb(114, 106, 132);">
                                    <span style=' . '"font-family: \'Comic Sans MS\';"' . '>
                                        Bantuan untuk memperoleh layanan Pengacara / Advokat (untuk mewakili, mendampingi, membela , dan melakukan tindakan hukum lain sesuai kepentingan Pemohon bantuan hukum)
                                    </span>
                                </li>
                                <li style="margin-right: 0px; margin-left: 0px; padding: 0px; color: rgb(114, 106, 132);">
                                    <span style=' . '"font-family: \'Comic Sans MS\';"' . '>
                                        Bantuan untuk memperoleh pembebasan biaya perkara
                                    </span>
                                </li>
                            </ul>
                        </li>
                    </ol>
                </h2>
                <h2 style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; font-family: Cabin, sans-serif; line-height: 1.2; color: rgb(91, 50, 180); font-size: 48px;">
                    <span style=' . '"font-family: \'Comic Sans MS\';"' . '>
                        <br>
                    </span>
                </h2>
                <div style="text-align: center;">
                    <iframe width="320" height="280" src="https://www.youtube.com/embed/vhnfpEBfgqs?si=2978xHAqoP8cmopo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen="" style="background-color: var(--bs-modal-bg); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);">
                    </iframe>
                </div>
            </body>
            </html>',
        ]);
    }
}
