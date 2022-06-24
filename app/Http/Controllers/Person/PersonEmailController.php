<?php

namespace App\Http\Controllers\Person;

use App\Http\Controllers\Controller;
use App\Models\{Email, Person};
class PersonEmailController extends Controller
{
    public function index(Person $person)
    {
        return $person->emails;
    }

    public function store(Person $person, $email)
    {
        $person->emails()->create(['email' => $email]);
    }

    public function destroy(Person $person, Email $email)
    {
        $person->emails()->whereId($email->id)->delete();
    }
}
