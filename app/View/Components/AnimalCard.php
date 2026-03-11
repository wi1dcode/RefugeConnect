<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AnimalCard extends Component
{
    public $id;
    public $name;
    public $species;
    public $age;
    public $description;
    public $photo;

    public function __construct($id, $name, $species, $age, $description, $photo)
    {
        $this->id = $id;
        $this->name = $name;
        $this->species = $species;
        $this->age = $age;
        $this->description = $description;
        $this->photo = $photo;
    }

    public function render()
    {
        return view('components.animal-card');
    }
}