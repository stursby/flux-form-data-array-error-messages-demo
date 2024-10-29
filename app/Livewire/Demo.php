<?php

namespace App\Livewire;

use Livewire\Component;

class Demo extends Component
{

  public array $fields = [
    'Full Name',
    'Email Address'
  ];

  public array $data;

  public function save()
  {
    dd($this->data);
  }

  public function render()
  {
    return view('livewire.demo');
  }
}
