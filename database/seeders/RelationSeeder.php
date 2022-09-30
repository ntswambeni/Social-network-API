<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Relation;
use File;

class RelationSeeder extends Seeder
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
            foreach ($obj->connections as $con) {
                Relation::create(array(
                    'people1_id' => $obj->id,
                    'people2_id' => $con)
                );
            }
        }
    }
}
