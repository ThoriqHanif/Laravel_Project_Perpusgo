<?php

namespace App\Livewire;

use App\Models\Kategori as ModelsKategori;
use Livewire\Component;

class Kategori extends Component
{
    public function render()
    {
        return view('livewire.kategori', [
            'kategori' => ModelsKategori::latest()->paginate(3)
        ]);
    }
}
