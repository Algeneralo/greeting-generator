<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Johntaa\Arabic\I18N_Arabic;

class CertificateController extends Controller
{
    public function index($color)
    {
        return view("certificates." . $color);
    }

    public function download()
    {
        $method = request("color");
        return $this->$method();
    }

    private function pink()
    {
        $name = "pink-new.png";
        $path = public_path('images/' . $name);
        $Arabic = new I18N_Arabic('Glyphs');
        $img = \Image::make(public_path('images/pink.png'));
        $img->text($Arabic->utf8Glyphs(request("firstText")), 321, 735, function ($font) {
            $font->file(public_path('fonts/din-next-lt-w23-medium.ttf'));
            $font->size(32);
            $font->color('#fff');
            $font->align('center');
        });
        $img->text($Arabic->utf8Glyphs(request("secondText")), 321, 1040, function ($font) {
            $font->file(public_path('fonts/din-next-lt-w23-medium.ttf'));
            $font->size(32);
            $font->color('#fff');
            $font->align('center');
        });
        $img->save($path);
        return Response::download($path,
            $name, ['Content-Type' => 'images/png'])->deleteFileAfterSend(true);
    }

    private function blue()
    {

        $name = "blue-new.png";
        $path = public_path('images/' . $name);
        $Arabic = new I18N_Arabic('Glyphs');
        $img = \Image::make(public_path('images/blue.png'));
        $img->text($Arabic->utf8Glyphs(request("firstText")), 300, 680, function ($font) {
            $font->file(public_path('fonts/din-next-lt-w23-medium.ttf'));
            $font->size(32);
            $font->color('#fff');
            $font->align('center');
        });
        $img->text($Arabic->utf8Glyphs(request("secondText")), 307, 1025, function ($font) {
            $font->file(public_path('fonts/din-next-lt-w23-medium.ttf'));
            $font->size(32);
            $font->color('#fff');
            $font->align('center');
        });
        $img->save($path);
        return Response::download($path,
            $name, ['Content-Type' => 'images/png'])->deleteFileAfterSend(true);
    }
}
