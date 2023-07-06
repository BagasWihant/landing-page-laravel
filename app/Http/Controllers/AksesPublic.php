<?php

namespace App\Http\Controllers;

use App\Models\Fitur;
use App\Models\GambarPemanis;
use App\Models\InformasiAtas;
use App\Models\Kategori;
use App\Models\Layanan;
use App\Models\Slogan;
use App\Models\SosialMedia;
use Illuminate\Http\Request;

class AksesPublic extends Controller
{
    public function index(){
        $sosmed = SosialMedia::first();

        $slogan = Slogan::first();
        $info = InformasiAtas::first();
        $fitur = Fitur::where('status',1)->get();
        $kategori = Kategori::where('status',1)->get();
        $layanan = Layanan::where('status',1)->get();
        $gambar = GambarPemanis::where('status',1)->get();
        return view('welcome',compact('fitur','kategori','info','sosmed','slogan','layanan','gambar'));
    }
}
