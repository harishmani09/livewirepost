<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class PostIndex extends Component
{
    use WithPagination;

    // public $postAdded = false;

    // public $posts;

    protected $listeners = [
        'postAdded'
    ];

    public function postAdded()
    {
        // $this->postAdded = true;
        session()->flash('message', 'Your post is added');
    }

    // public function mount()
    // {
    //     $this->posts = ;
    // }

    public function render()
    {
        return view('livewire.post-index', ['posts' => Post::latest()->paginate(2)]);
    }
}
