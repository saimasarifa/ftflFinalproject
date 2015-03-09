<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder {

    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('tasks')->delete();

        $tasks = array(
            ['id' => 1, 'title' => 'Slider Redesign',                  'description' => 'Lorem ipsum dolor sit amet, consectetuer sit amet ipsum dolor', 'catagory_id' => 1, 'start_date' => '1-9-2014',   'end_date' => '21-9-2014',    'created_by' => 'ram',   'modified_by' =>'ramesh',  'status' => 'important',  'completed' => false,  'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'title' => 'Homepage Alignments to adjust',    'description' => 'Lorem ipsum dolor sit amet, consectetuer sit amet ipsum dolor', 'catagory_id' => 1, 'start_date' => '2-9-2014',   'end_date' => '14-9-2014',    'created_by' => 'ram',   'modified_by' =>'asa',     'status' => 'completed',  'completed' => true,   'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'title' => 'Contact Us Map Location changes',  'description' => 'Lorem ipsum dolor sit amet, consectetuer sit amet ipsum dolor', 'catagory_id' => 1, 'start_date' => '20-8-2014',  'end_date' => '4.8.2014',     'created_by' => 'ram',   'modified_by' =>'ramesh',  'status' => 'testing',    'completed' => false,  'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 4, 'title' => 'Projects List new form',           'description' => 'Lorem ipsum dolor sit amet, consectetuer sit amet ipsum dolor', 'catagory_id' => 2, 'start_date' => '19-11-2014', 'end_date' => '19-12-2014',   'created_by' => 'ram',   'modified_by' =>'ramesh',  'status' => 'pending',    'completed' => false,  'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 5, 'title' => 'New Search keywords',              'description' => 'Lorem ipsum dolor sit amet, consectetuer sit amet ipsum dolor', 'catagory_id' => 3, 'start_date' => '1-2-2015',   'end_date' => '21-2-20-2015', 'created_by' => 'ram',   'modified_by' =>'ramesh',  'status' => 'completed',  'completed' => true,   'created_at' => new DateTime, 'updated_at' => new DateTime],
        );

        //// Uncomment the below to run the seeder
        DB::table('tasks')->insert($tasks);
    }

}