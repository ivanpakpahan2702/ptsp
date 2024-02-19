<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Dashboard;
use DirectoryIterator;
use DOMDocument;
use Exception;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index()
    {
        $filename_array = [];
        $dir = new DirectoryIterator(public_path() . '/assets/images/carousel/');
        foreach ($dir as $fileinfo) {
            if (!$fileinfo->isDot()) {
                if (@is_array(getimagesize(public_path() . '/assets/images/carousel/' . $fileinfo->getFilename()))) {
                    $image = true;
                    array_push($filename_array, $fileinfo->getFilename());
                } else {
                    $image = false;
                }
            }
        }
        return view('user.dashboard', [
            'title' => 'Dashboard',
            'dashboard' => Dashboard::all(),
            'carousel_array' => $filename_array,
        ]);
    }

    public function create()
    {
        //
    }

    public function store()
    {
        //
    }

    public function show()
    {
        //
    }

    public function edit()
    {
        //
    }

    public function update(Request $request, $dashboard_id)
    {
        $article = $request->article;
        $dom = new DOMDocument();
        $dom->loadHTML($article, 9);
        $images = $dom->getElementsByTagName('img');
        foreach ($images as $key => $img) {
            if (strpos($img->getAttribute('src'), 'data:image/') === 0) {
                try {
                    $GLOBALS['data'] = base64_decode(explode(',', explode(';', $img->getAttribute('src'))[1])[1]);
                } catch (Exception $e) {
                    dd($e);
                }

                $image_name = "/assets/summernote_assets/" . time() . $key . ".png";
                file_put_contents(public_path() . $image_name, $GLOBALS['data']);

                $img->removeAttribute('src');
                $img->setAttribute('src', $image_name);
            }
        }
        $article = $dom->saveHTML();
        Dashboard::updateOrCreate(
            [
                'id' => $dashboard_id,
            ],
            [
                'article' => $article,
            ]
        );
        return redirect('/')->with('success-dashboard', 'Berhasil Ubah Tampilan Dashboard');
    }

    public function destroy()
    {
        //
    }

    public function delete_carousel(Request $request)
    {

        $file_name = $request->file_name;
        try {
            unlink(public_path() . '/assets/images/carousel/' . $file_name);
            $message = 'Foto Berhasil Dihapus';
        } catch (Exception $e) {
            $message = 'Gagal menghapus, file mungkin telah terhapus';
        }
        return redirect('/')->with('Delete-Carousel', $message);
    }

    public function upload_carousel(Request $request)
    {
        $request->validate([
            'carousel_images' => 'required',
            'carousel_images.*' => 'image|file',
        ]);

        try {
            $files = $request->file('carousel_images');
            if ($request->hasFile('carousel_images')) {
                foreach ($files as $file) {
                    $carousel_file_name = date('d-m-Y_H-i-s') . "_" . uniqid() . "_" . $file->getClientOriginalName();
                    $file_path = "/assets/images/carousel/" . $carousel_file_name;
                    file_put_contents(public_path() . $file_path, file_get_contents($file));
                }
            }
            $message = 'Carousel Berhasil Diupload';
        } catch (Exception $e) {
            $message = 'Carousel Gagal Diupload';
        }
        return redirect('/')->with('Upload-Carousel', $message);

    }
}
