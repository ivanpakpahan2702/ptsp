<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Umum;
use DOMDocument;
use Exception;
use Illuminate\Http\Request;

class UmumController extends Controller
{
 
    public function index()
    {
        return view('user.umum', [
            'title' => 'Bagian Umum dan Keuangan',
            'umum' => Umum::all(),
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

    public function update(Request $request, $umum_id)
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
        Umum::create([
            'article' => $article,
        ]);
        return redirect('/bagian-umum')->with('success-umum', 'Berhasil Ubah Tampilan Umum');
    }

    public function destroy()
    {
        //
    }
}
