<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Hukum;
use DOMDocument;
use Exception;
use Illuminate\Http\Request;

class HukumController extends Controller
{
    public function index()
    {
        return view('user.hukum', [
            'title' => 'Bagian Hukum',
            'hukum' => Hukum::all(),
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

    public function update(Request $request, $hukum_id)
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
        Hukum::create([
            'article' => $article,
        ]);
        return redirect('/bagian-hukum')->with('success-hukum', 'Berhasil Ubah Tampilan Hukum');
    }

    public function destroy()
    {
        //
    }
}
