<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\File;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Models\GambarPemanis as ModelsGambarPemanis;

class GambarPemanis extends Component
{

    use WithPagination;
    use WithFileUploads;
    use LivewireAlert;

    protected $listeners = ['deleteAksi'];

    public $iteration,$image,$oldImage,$judul,$status,$fitur_id,$tampilan;
    public $kondisiModal='tambah',$fiturData;

    public function clearForm(){
        $this->kondisiModal = 'tambah';
        $this->status = 1;
        $this->tampilan = 1;
        $this->judul = '';
        $this->image = null;
        $this->oldImage = null;
        $this->fiturData = null;

    }

    public function tambahFitur(){
        $this->validate([
            'image' => 'nullable|image',
            'judul' => 'required',
        ]);
        $image = '';
        if ($this->image != null) {
            $image = $this->image->storePublicly('upload/fitur', 'real_public');
        }
        ModelsGambarPemanis::create([
            'judul' => $this->judul,
            'tampilan' => $this->tampilan,
            'gambar' => $image,
            'status' => $this->status == true ? 1 : 0,
        ]);
        $this->dispatchBrowserEvent('modalhide');
        $this->alert('success', 'Sukses', [
            'position' => 'top-end',
            'timer' => 2000,
            'toast' => true,
            'timerProgressBar' => true,
            'text' => 'Berhasil menambah fitur baru',
            'customClass' =>[
                'popup'=> 'colored-toast'
            ]
        ]);
        $this->iteration++;

        $this->clearForm();
    }



    public function updateFitur(){
        $this->validate([
            'image' => 'nullable|image',
            'judul' => 'required',
        ]);
        $fitur = ModelsGambarPemanis::where('id', $this->fitur_id)->first();
        $fitur->judul = $this->judul;
        if ($this->image != null) {
            if (File::exists(public_path($fitur->gambar))) {
                File::delete(public_path($fitur->gambar));
            }
            $image = $this->image->storePublicly('upload/fitur', 'real_public');
            $fitur->gambar = $image;
        }
        $fitur->status = $this->status == true ? 1 : 0;
        $fitur->tampilan = $this->tampilan;
        $fitur->update();
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
        $this->fiturData = ModelsGambarPemanis::where('id', $id)->first();
        $this->fitur_id = $this->fiturData->id;
        $this->judul = $this->fiturData->judul;
        $this->tampilan = $this->fiturData->tampilan;
        $this->status = $this->fiturData->status;
        $this->kondisiModal = 'update';
        $this->oldImage = $this->fiturData->gambar;
        $this->iteration = 0;
        if ($del == 'delete') {
            $this->alert('warning', 'Apakah anda yakin menghapus fitur ini?', [
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
        if (File::exists(public_path($this->fiturData->gambar))) {
            File::delete(public_path($this->fiturData->gambar));
        }
        $this->fiturData->delete();
        $this->alert('success', 'Sukses', [
            'position' => 'top-end',
            'timer' => 2000,
            'toast' => true,
            'timerProgressBar' => true,
            'text' => 'Fitur telah terhapus',
            'customClass' =>[
                'popup'=> 'colored-toast'
            ]
        ]);
    }


    public function hide($id){
        $this->getID($id);
        $this->fiturData->status = '0';
        $this->fiturData->save();
        $this->clearForm();
    }
    public function show($id){
        $this->getID($id);
        $this->fiturData->status = '1';
        $this->fiturData->save();
        $this->clearForm();
    }

    public function render()
    {
        $data = ModelsGambarPemanis::orderBy('created_at', 'DESC')->paginate(10);
        return view('livewire.admin.gambar-pemanis',compact('data'));
    }
}
