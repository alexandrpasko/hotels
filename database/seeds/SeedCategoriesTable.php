<?php

use Illuminate\Database\Seeder;

class SeedCategoriesTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
        	'name' => 'Dominican Republic'
        ]);

        DB::table('categories')->insert([
        	'name' => 'The Bahamas'
        ]);

        DB::table('categories')->insert([
        	'name' => 'Hawaii'
        ]);

        DB::table('categories')->insert([
        	'name' => 'Mexico'
        ]);

        DB::table('categories')->insert([
        	'name' => 'Cuba'
        ]);
    }
}
