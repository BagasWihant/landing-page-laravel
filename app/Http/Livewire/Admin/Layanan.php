<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\File;
use App\Models\Layanan as ModelsLayanan;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Layanan extends Component
{
    use WithPagination;
    use WithFileUploads;
    use LivewireAlert;

    protected $listeners = ['deleteAksi'];

    public $iteration,$image,$oldImage,$title,$status,$kategori_id,$deskripsi;
    public $kondisiModal='tambah',$kategoriData;

    public function clearForm(){
        $this->kondisiModal = 'tambah';
        $this->status = 1;
        $this->title = '';
        $this->deskripsi = '';
        $this->image = null;
        $this->oldImage = null;
        $this->kategoriData = null;

    }

    public function tambahKategori(){
        $this->validate([
            'image' => 'nullable|image',
            'title' => 'required',
        ]);
        $image = '';
        if ($this->image != null) {
            $image = $this->image->storePublicly('upload/Kategori', 'real_public');
        }
        ModelsLayanan::create([
            'title' => $this->title,
            'deskripsi' => $this->deskripsi,
            'gambar' => $image,
            'status' => $this->status == true ? 1 : 0,
        ]);
        $this->dispatchBrowserEvent('modalhide');
        $this->alert('success', 'Sukses', [
            'position' => 'top-end',
            'timer' => 2000,
            'toast' => true,
            'timerProgressBar' => true,
            'text' => 'Berhasil menambah Kategori baru',
            'customClass' =>[
                'popup'=> 'colored-toast'
            ]
        ]);
        $this->iteration++;

        $this->clearForm();
    }



    public function updateKategori(){
        $this->validate([
            'image' => 'nullable|image',
            'title' => 'required',
        ]);
        $kategori = ModelsLayanan::where('id', $this->kategori_id)->first();
        $kategori->title = $this->title;
        $kategori->deskripsi = $this->deskripsi;
        if ($this->image != null) {
            if (File::exists(public_path($kategori->gambar))) {
                File::delete(public_path($kategori->gambar));
            }
            $image = $this->image->storePublicly('upload/kategori', 'real_public');
            $kategori->gambar = $image;
        }
        $kategori->status = $this->status == true ? 1 : 0;
        $kategori->update();
        $this->iteration++;
        $this->clearForm();

        $this->dispatchBrowserEvent('modalhide');
        $this->alert('success', 'Sukses', [
            'position' => 'top-end',
            'timer' => 2000,
            'toast' => true,
            'timerProgressBar' => true,
            'text' => 'Slider Terupdate',
            'customClass' =>[
                'popup'=> 'colored-toast'
            ]
        ]);
    }



    function getID($id,$del = null){
        $this->kategoriData = ModelsLayanan::where('id', $id)->first();
        $this->kategori_id = $this->kategoriData->id;
        $this->title = $this->kategoriData->title;
        $this->deskripsi = $this->kategoriData->deskripsi;
        $this->status = $this->kategoriData->status;
        $this->kondisiModal = 'update';
        $this->oldImage = $this->kategoriData->gambar;
        $this->iteration = 0;
        if ($del == 'delete') {
            $this->alert('warning', 'Apakah anda yakin menghapus kategori ini?', [
                'position' => 'center',
                'toast' => false,
                'timer' => null,
                'timerProgressBar' => true,
                'showConfirmButton' => true,
                'showCancelButton' => true,
                'onConfirmed' => 'deleteAksi',
                'confirmButtonText' => 'Yaa',
                'cancelButtonText' => 'Tidak jadi',
            ]);
        }
    }

    public function deleteAksi(){
        if (File::exists(public_path($this->kategoriData->gambar))) {
            File::delete(public_path($this->kategoriData->gambar));
        }
        $this->kategoriData->delete();
        $this->alert('success', 'Sukses', [
            'position' => 'top-end',
            'timer' => 2000,
            'toast' => true,
            'timerProgressBar' => true,
            'text' => 'Kategori telah terhapus',
            'customClass' =>[
                'popup'=> 'colored-toast'
            ]
        ]);
    }


    public function hide($id){
        $this->getID($id);
        $this->kategoriData->status = '0';
        $this->kategoriData->save();
        $this->clearForm();
    }
    public function show($id){
        $this->getID($id);
        $this->kategoriData->status = '1';
        $this->kategoriData->save();
        $this->clearForm();
    }
    public function render()
    {
        $data = ModelsLayanan::orderBy('created_at','DESC')->paginate(10);
        return view('livewire.admin.layanan',compact('data'));
    }
}
