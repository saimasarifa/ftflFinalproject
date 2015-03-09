<?php

use Illuminate\Database\Seeder;

class CatagoriesTableSeeder extends Seeder {

    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('catagories')->delete();

        $catagories = array(
            ['id' => 1, 'Title' => 'UI design', 'created_by' => 'asa',   'modified_by' =>'rar',    'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'Title' => 'php',       'created_by' => 'abid',  'modified_by' =>'ramesh', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'Title' => 'wordpress', 'created_by' => 'ava',   'modified_by' =>'akash',  'created_at' => new DateTime, 'updated_at' => new DateTime],
        );

        // Uncomment the below to run the seeder
        DB::table('catagories')->insert($catagories);
    }

}
