<?php

use Illuminate\Database\Seeder;

class SeedUsersTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'name' => 'Alexandr Pasko',
        	'email' => 'pasko2050@gmail.com',
        	'password' => password_hash('P@ssw0rd', PASSWORD_DEFAULT),
        	'is_admin' => true
        ]);

        DB::table('users')->insert([
        	'name' => 'Alexandr Pasko',
        	'email' => 'pasko2030@gmail.com',
        	'password' => password_hash('P@ssw0rd', PASSWORD_DEFAULT),
        ]);
    }
}
