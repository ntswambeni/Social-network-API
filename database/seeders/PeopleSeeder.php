<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\People;
use File;

class PeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get(public_path("data/socialGraph.json"));
        $data = json_decode($json);
        foreach ($data as $obj) {
            People::create(array(
                'id' => $obj->id,
                'firstname' => $obj->firstName,
                'surname' => $obj->surname,
                'age' => $obj->age,
                'gender' => $obj->gender)
            );
        }
    }
}
