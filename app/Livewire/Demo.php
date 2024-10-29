<?php

namespace App\Livewire;

use Livewire\Component;

class Demo extends Component
{
  public array $fields = [
    [
      'label' => 'Full Name',
      'description' => 'Please enter your full name.',
      'placeholder' => 'John Doe',
      'rules' => 'required|max:255',
    ],
    [
      'label' => 'Email',
      'description' => 'Please enter your email address.',
      'placeholder' => 'john@example.com',
      'rules' => 'required|email|max:255',
    ]
  ];

  public array $data;

  public function save()
  {
    $rules = [];

    foreach ($this->fields as $field) {
      $rules["data.{$field['label']}"] = $field['rules'];
    }

    $validated = $this->validate($rules);

    dd($validated);
  }

  public function render()
  {
    return view('livewire.demo');
  }
}
