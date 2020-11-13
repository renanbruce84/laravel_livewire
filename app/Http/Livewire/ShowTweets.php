<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowTweets extends Component
{
    public $message = 'Apenas um teste';

    public function render()
    {
        $tweets = \App\Models\Tweet::with('user')->get();
        return view('livewire.show-tweets', compact('tweets'));
    }
       
}
