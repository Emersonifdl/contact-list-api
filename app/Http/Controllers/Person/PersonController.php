<?php

namespace App\Http\Controllers\Person;

use App\Http\Controllers\Controller;
use App\Http\Requests\Person\{PersonStoreRequest, PersonUpdateRequest};
use App\Http\Resources\Person\{PersonIndexResource, PersonShowResource};
use App\Models\Person;

class PersonController extends Controller
{
    public function index()
    {
        return PersonIndexResource::collection(
            Person::query()
            ->search(request('search'))
            ->orderBy('name', 'asc')
            ->paginate(10)
        );
    }

    public function store(PersonStoreRequest $request)
    {
        $person = Person::create($request->validated());

        return PersonShowResource::make($person);
    }

    public function show(Person $person)
    {
        return PersonShowResource::make($person);
    }

    public function update(PersonUpdateRequest $request, Person $person)
    {
        $person->update($request->validated());

        return PersonShowResource::make($person);
    }

    public function destroy(Person $person)
    {
        $person->delete();
    }
}
