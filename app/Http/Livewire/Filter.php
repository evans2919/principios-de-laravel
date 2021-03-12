<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;

class Filter extends Component
{
    use WithPagination;

    protected $queryString = 
    ['search' => ['except' => ''],
    'perPage' => ['except' => '5']
    ];

	public $search;
	public $perPage='5';
    public $page = 1;

    public function render()
    {
    	$usersAll = User::all();
        $users = User::where('name', 'like', '%'.$this->search.'%')
        ->orWhere('email', 'like', '%'.$this->search.'%')
        ->paginate($this->perPage);

    	return view('livewire.filter')->with(compact('users'));
    }

    public function clear(){
        $this->resetPage();
        $this->perPage ='5';
        $this->search = '';
        
    }

   
}