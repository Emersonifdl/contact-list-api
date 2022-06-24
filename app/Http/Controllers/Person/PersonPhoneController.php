<?php

namespace App\Http\Controllers\Person;

use App\Http\Controllers\Controller;
use App\Models\{Person, Phone};
class PersonPhoneController extends Controller
{
    public function index(Person $person)
    {
        return $person->phones;
    }

    public function store(Person $person, $phone)
    {
        $person->phones()->create(['phone' => $phone]);
    }

    public function destroy(Person $person, Phone $phone)
    {
        $person->phones()->whereId($phone->id)->delete();
    }
}
