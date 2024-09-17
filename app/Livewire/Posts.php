<?php

namespace App\Livewire;

use Livewire\Component;

class Posts extends Component
{
    public $posts, $title, $body, $post_id;
    public $isOpen = 0;

    public function render()
    {
        return view('livewire.posts');
    }

    public function create(){
        $this->resetInputFields();
        $this->openModal();
    }

    public function openModal(){
        $this->isOpen = true;
    }

    public function closeModal(){
        $this->isClose = false;
    }

    



}
