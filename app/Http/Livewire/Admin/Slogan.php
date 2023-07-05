<?php

namespace App\Http\Livewire\Admin;

use App\Models\Slogan as ModelsSlogan;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Slogan extends Component
{
    use LivewireAlert;
    public $startPage,$sloganData,$firstData,$slogan,$keterangan,$editMode;

    public function mount(){
        $this->sloganData = ModelsSlogan::first();
        if($this->sloganData !== null){
            $this->slogan = $this->sloganData->judul;
            $this->keterangan = $this->sloganData->text;
            $this->startPage = false;
            $this->firstData = false;
        }else{
            $this->startPage = true;
            $this->firstData = true;
        }
    }

    public function startklik(){
        $this->startPage = false;
        $this->editMode = true;
    }

    public function editMode(){
        $this->editMode = true;
    }

    public function batalUpdate(){
        $this->editMode = false;
    }

    public function simpanAksi(){
        $this->sloganData = ModelsSlogan::create([
            'judul' => $this->slogan,
            'text' => $this->keterangan,
        ]);
        $this->editMode = false;
        $this->startPage = false;
            $this->firstData = false;

        $this->alert('success', 'Sukses', [
            'position' => 'top-end',
            'timer' => 2000,
            'toast' => true,
            'timerProgressBar' => true,
            'text' => 'Slogan berhasil dibuat',
            'customClass' =>[
                'popup'=> 'colored-toast'
            ]
        ]);
    }

    public function updateAksi(){
        $this->sloganData->judul = $this->slogan;
        $this->sloganData->text = $this->keterangan;
        $this->sloganData->update();

        $this->editMode = false;

        $this->alert('success', 'Sukses', [
            'position' => 'top-end',
            'timer' => 2000,
            'toast' => true,
            'timerProgressBar' => true,
            'text' => 'Slogan berhasil diupdate',
            'customClass' =>[
                'popup'=> 'colored-toast'
            ]
        ]);
    }

    public function render()
    {
        return view('livewire.admin.slogan');
    }
}
