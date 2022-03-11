<?php

use Illuminate\Database\Seeder;
// use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Str;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin_GMSH',
            'email' => 'admin@clinic',
            'password' => bcrypt('gimmesomemilk'),
        ]);
    }
}
