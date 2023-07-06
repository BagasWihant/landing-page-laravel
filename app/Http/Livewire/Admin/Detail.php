<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\InformasiAtas;
use App\Models\SosialMedia;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\File;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Detail extends Component
{
    use WithFileUploads;
    use LivewireAlert;
    public $nama_website, $judul_utama, $desc_judul_utama, $iteration, $info_id, $infoData, $about, $back_color_atas,$back_color_foot,$font_color_atas,$font_color_foot;
    public $oldImage, $image, $logo, $oldLogo, $startPage, $firstData = false, $editMode = false, $sosmed, $maps;
    public $fb, $ig, $twt, $yt;

    public function mount()
    {
        $this->infoData = InformasiAtas::first();
        if ($this->infoData !== null) {
            $this->info_id = $this->infoData->id;
            $this->nama_website = $this->infoData->nama_website;
            $this->judul_utama = $this->infoData->title;
            $this->desc_judul_utama = $this->infoData->deskripsi;
            $this->oldImage = $this->infoData->gambar;
            $this->oldLogo = $this->infoData->logo_web;
            $this->maps = $this->infoData->maps;
            $this->about = $this->infoData->about_us;
            $this->font_color_atas = $this->infoData->font_color_atas;
            $this->back_color_atas = $this->infoData->back_color_atas;
            $this->font_color_foot = $this->infoData->font_color_foot;
            $this->back_color_foot = $this->infoData->back_color_foot;
            $this->startPage = false;

            $this->sosmed =  SosialMedia::first();
            $this->fb = $this->sosmed->facebook;
            $this->ig = $this->sosmed->instagram;
            $this->twt = $this->sosmed->twitter;
            $this->yt = $this->sosmed->youtube;
        } else {
            $this->firstData = true;
            $this->startPage = true;
        }
    }

    public function scrollToTop()
    {
        $this->dispatchBrowserEvent('scrollToTop');
    }

    public function startklik()
    {
        $this->startPage = false;
        $this->editMode = true;
    }

    public function editMode()
    {
        $this->scrollToTop();
        $this->editMode = true;
    }

    public function batalUpdate()
    {
        $this->scrollToTop();
        $this->editMode = false;
    }

    public function simpanAksi()
    {
        $gambar = '';
        if ($this->image != null) {
            $gambar = $this->image->storePublicly('upload/web', 'real_public');
        }
        $logo = '';
        if ($this->logo != null) {
            $logo = $this->logo->storePublicly('upload/web', 'real_public');
        }

        $parse1 = explode('src="', $this->maps);
        $mapsfix = '';
        if (isset($parse1[1])) {
            $maps = explode('"', $parse1[1]);
            $mapsfix = $maps[0];
        } else {
            $mapsfix = $this->maps;
        }
        $this->maps = $mapsfix;


        $this->infoData = InformasiAtas::create([
            'nama_website' => $this->nama_website,
            'title' => $this->judul_utama,
            'deskripsi' => $this->desc_judul_utama,
            'gambar' => $gambar,
            'logo_web' => $logo,
            'maps' => $mapsfix,
            'about_us' => $this->about,

            'font_color_atas' => $this->font_color_atas,
            'back_color_atas' => $this->back_color_atas,
            'font_color_foot' => $this->font_color_foot,
            'back_color_foot' => $this->back_color_foot,
        ]);
        $this->sosmed = SosialMedia::create([
            'facebook' => $this->fb,
            'instagram' => $this->ig,
            'youtube' => $this->yt,
            'twiter' => $this->twt,
        ]);
        $this->editMode = false;
        $this->scrollToTop();
    }

    public function updateAksi()
    {
        $parse1 = explode('src="', $this->maps);
        $mapsfix = '';
        if (isset($parse1[1])) {
            $maps = explode('"', $parse1[1]);
            $mapsfix = $maps[0];
        } else {
            $mapsfix = $this->maps;
        }
        // dd($mapsfix);

        $gambar = '';
        if ($this->image != null) {
            if (File::exists(public_path($this->infoData->gambar))) {
                File::delete(public_path($this->infoData->gambar));
            }
            $this->infoData->gambar = $this->image->storePublicly('upload/web', 'real_public');
        }
        $logo = '';
        if ($this->logo != null) {
            if (File::exists(public_path($this->infoData->logo_web))) {
                File::delete(public_path($this->infoData->logo_web));
            }
            $this->infoData->logo_web = $this->logo->storePublicly('upload/web', 'real_public');
        }

        $this->infoData->nama_website = $this->nama_website;
        $this->infoData->title = $this->judul_utama;
        $this->infoData->deskripsi = $this->desc_judul_utama;
        $this->infoData->about_us = $this->about;
        $this->infoData->maps = $mapsfix;

        $this->infoData->font_color_atas = $this->font_color_atas;
        $this->infoData->back_color_atas = $this->back_color_atas;
        $this->infoData->font_color_foot = $this->font_color_foot;
        $this->infoData->back_color_foot = $this->back_color_foot;
        $this->infoData->update();


        $this->sosmed->facebook = $this->fb;
        $this->sosmed->instagram = $this->ig;
        $this->sosmed->twiter = $this->twt;
        $this->sosmed->youtube = $this->yt;
        $this->sosmed->update();

        $this->editMode = false;
        $this->maps = $mapsfix;
        $this->scrollToTop();


        $this->alert('success', 'Sukses', [
            'position' => 'top-end',
            'timer' => 2000,
            'toast' => true,
            'timerProgressBar' => true,
            'text' => 'Info berhasil diupdate',
            'customClass' => [
                'popup' => 'colored-toast'
            ]
        ]);
    }

    public function render()
    {
        return view('livewire.admin.detail');
    }
}
