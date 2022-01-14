<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Search extends Component
{
    public string $searchable = "";
    public $characters;
    

    public function render()
    {
        $this->characters = (!empty($this->searchable)) ? User::whereLike('name', $this->searchable)  : User::all();

        return view('livewire.search', [
            'results' => User::where('name', $this->searchable)->get(),
        ]);

    }
}
