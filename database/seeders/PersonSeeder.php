<?php

namespace Database\Seeders;

use App\Models\{Person, Phone};
use Illuminate\Database\Seeder;

class PersonSeeder extends Seeder
{
    public function run()
    {
        Person::factory(50)->create();
    }
}
