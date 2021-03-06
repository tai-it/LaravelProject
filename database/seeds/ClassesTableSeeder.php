<?php

use Illuminate\Database\Seeder;

class ClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classes')->insert([
            ['id' => 1, 'name' => 'PNV20B', 'educator_id' => 3, 'number_of_students' => 23],
            ['id' => 2, 'name' => 'PNV20A', 'educator_id' => 3, 'number_of_students' => 21],
            ['id' => 3, 'name' => 'PNV21A', 'educator_id' => 2, 'number_of_students' => 23],
            ['id' => 4, 'name' => 'PNV21B', 'educator_id' => 2, 'number_of_students' => 22],
            ['id' => 5, 'name' => 'PNV19A', 'educator_id' => 1, 'number_of_students' => 22],
            ['id' => 6, 'name' => 'PNV19B', 'educator_id' => 1, 'number_of_students' => 23],
        ]);
    }
}
