<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function show($id)
    {
        $animal = Animal::findOrFail($id);

        return view('pages.animal-details', [
            'animal' => $animal,
        ]);
    }

    public function create()
    {
        Animal::firstOrCreate(
            ['name' => 'Coquillette'],
            [
                'species' => 'Chien',
                'age' => 3,
                'description' => 'Une Shiba Inu vive et joyeuse, toujours prête à jouer et à explorer. Coquillette est curieuse, intelligente et très expressive, avec un petit caractère indépendant mais plein de tendresse pour ceux qu’elle aime.',
                'photo' => 'coquillette.png',
            ]
        );

        return redirect()->route('home');
    }

    public function update($id)
    {
        $animal = Animal::findOrFail($id);
        $animal->name = $animal->name . ' modifié';
        $animal->save();

        return redirect()->route('home');
    }

    public function delete($id)
    {
        $animal = Animal::findOrFail($id);
        $animal->delete();

        return redirect()->route('home');
    }


    public function seed()
    {
        $animals = [
            [
                'name' => 'Bella',
                'species' => 'Chien',
                'age' => 5,
                'description' => 'Une labrador joueuse et affectueuse qui adore la compagnie.',
                'photo' => 'bella.png',
            ],
            [
                'name' => 'Luna',
                'species' => 'Chat',
                'age' => 3,
                'description' => 'Une chatte calme et câline qui aime les endroits tranquilles.',
                'photo' => 'luna.png',
            ],
            [
                'name' => 'Max',
                'species' => 'Chien',
                'age' => 2,
                'description' => 'Un jeune chiot plein d’énergie qui adore courir et jouer dehors.',
                'photo' => 'max.png',
            ],
        ];

        foreach ($animals as $animal) {
            Animal::firstOrCreate(
                ['name' => $animal['name']],
                $animal
            );
        }

        return redirect()->route('home');
    }
}
