<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use App\Models\Fitur as ModelsFitur;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Fitur extends Component
{
    use WithPagination;
    use WithFileUploads;
    use LivewireAlert;

    public $iteration,$image,$oldImage,$nama,$status;
    public $kondisiModal='tambah';

    public function clearForm(){
        $this->kondisiModal = 'tambah';
        $this->status = 1;
        $this->nama = '';
        $this->image = null;
        $this->oldImage = null;

    }

    public function tambahFitur(){
        $this->validate([
            'image' => 'nullable|image',
            'nama' => 'required',
        ]);
        $image = '';
        if ($this->image != null) {
            $image = $this->image->storePublicly('upload/slider', 'real_public');
        }
        ModelsFitur::create([
            'nama' => $this->nama,
            'image' => $image,
            'status' => $this->status == true ? 1 : 0,
        ]);
        $this->dispatchBrowserEvent('modalhide');
        $this->alert('success', 'Sukses', [
            'position' => 'top-end',
            'timer' => 2000,
            'toast' => true,
            'timerProgressBar' => true,
            'text' => 'Slider Tersimpan',
            'customClass' =>[
                'popup'=> 'colored-toast'
            ]
        ]);
        $this->iteration++;

        $this->clearForm();
    }

    public function updateFitur(){

    }

    public function render()
    {
        $data = ModelsFitur::orderBy('created_at', 'DESC')->paginate(10);
        return view('livewire.admin.fitur', compact('data'));
    }
}
