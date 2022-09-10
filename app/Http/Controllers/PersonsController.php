<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonsController extends Controller
{
    public function __invoke()
    {
        $persons = [
            [
                'id' => 1,
                'name' => 'Sava',
                'age' => 24,
                'job' => 'Homeless'
            ],
            [
                'id' => 2,
                'name' => 'Zaharia',
                'age' => 24,
                'job' => 'Student'
            ],[
                'id' => 3,
                'name' => 'Oksana',
                'age' => 50,
                'job' => 'Realtors'
            ],
        ];
        return $persons;
    }
}
